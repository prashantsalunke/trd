	<?php
	$i =0 ;
	foreach($Videos as $video){
	$i++;
		?>
					<div class="item <?php if($i==1){echo 'active'; } ?>">
						<div class="row">
							<video src="<?php echo asset_url().$video['vedio_file']; ?>" width="100%" id="MediaPlayer3" controls="controls">
							</video>
						</div>
						<div class="row">
							<p>
								<a href="#" class="style16" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500);ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');ShowObject('Layer_products', 0);ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');return false;">
									<?php echo $video['name']?>
								</a>
							</p>
						</div>
						<div class="row">
							<p class="c14">
								<?php echo substr($video['description'],0,100); ?>
							</p>
						</div>
						<p class="c16">USD</p><span>
						<p class="c15"><?php echo $video['unit_price']; ?></p></span>
						<div class="row">
							<div class="col-md-6">
							<p class="c14">&nbsp; Min. Order: <?php echo $video['quantity'].' '.$video['unit'];?> </p></div>
							<div class="col-md-6">
								<p class="c14">&nbsp; Likes <i class="fa fa-thumbs-o"></i><?php echo $video['likes'];?> </p>
							</div>
						</div>
						<div class="row  inline m1" >
						<a href="#" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500);ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');ShowObject('Layer_products', 0);ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');return false;">
									<img src="<?php echo asset_url(); ?>images/view-detailsb.png" id="Image136" alt="" width="35px">
								</a> 
							<a href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"target="_self"> 
								<img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png" width="35px"> 
								<!-- <span><img alt="" src="<?php echo asset_url(); ?>images/like-videob.png" width="35px"></span>  -->
							</a>
						</div>
					</div>
	<?php } ?>