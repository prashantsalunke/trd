	<?php
	$i =0 ;
	foreach($Videos as $video){
	$i++;
		?>
					<div class="item <?php if($i==1){echo 'active'; } ?>">
						<div class="row" style="margin:0px;">
							<video src="<?php echo asset_url().$video['vedio_file']; ?>" width="100%" id="MediaPlayer3" controls="controls" controlsList="nodownload">
							</video>
						</div>
						<div class="row">
							<div class="col-sm-12">
							<p>
								<span style="color:#4B4B4B;font-family:Georgia;font-size:13px;">
									<strong>
										<a href="<?php echo base_url();?>video/details/<?php echo $video['id'];?>" class="style16" >
											<?php echo $video['name']?>
										</a>
									</strong>
								</span>
							</p>
							</div>
						</div>
						<div class="row" style="margin:0px;">
							<div class="col-sm-12">
								<p class="c14">
									<?php echo substr($video['description'],0,70); ?><?php if(strlen($video['description']) > 70) { ?> ...<?php } ?>
								</p>
							</div>
						</div>
						<p class="c16">USD<span class="c15"> <?php echo $video['unit_price']; ?></span></p>
						<div class="row">
							<div class="col-md-6">
							<p class="c14">&nbsp; <span style="color:#3C3C3C;font-family:Arial;font-size:12px;">&nbsp; Min. Order: Min. Order: <?php echo $video['quantity'].' '.$video['unit'];?></span> </p></div>
							<div class="col-md-6">
								<p class="c14">&nbsp; Likes <img src="<?php echo asset_url();?>images/items_like0.png" id="Image90" alt="" style="width:26px;"> <span id="myvlikes-<?php echo $video['id'];?>"><?php echo $video['video_likes'];?></span> </p>
							</div>
						</div>
						<div class="row inline m1 text-center" style="margin-left:40%;padding-bottom:25px;">
							<div id="RollOver6" style="overflow:hidden;width:35px;height:35px;margin-right:10px;z-index:3543">
								<a href="<?php echo base_url();?>video/details/<?php echo $video['id'];?>" >
									<img src="<?php echo asset_url(); ?>images/view-detailsc.png" id="Image136" alt="" width="35px">
									<span><img alt="" src="<?php echo asset_url(); ?>images/view-detailsb.png" width="35px"></span>
								</a>
							</div>
							<div id="RollOver6" style="overflow:hidden;width:35px;height:35px;z-index:3543">
								<a href="javascript:likeMyVideo(<?php echo $video['id'];?>,0,'myvlikes-<?php echo $video['id'];?>');" target="_self">
									<img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png" width="35px">
									<span><img alt="" src="<?php echo asset_url(); ?>images/like-videob.png" width="35px"></span>
								</a>
							</div> 
						</div>
						<br><br>
					</div>
	<?php } ?>

<script>
jQuery(document).ready(function(){
    jQuery('video').bind('contextmenu',function() { return false; });
});
</script>