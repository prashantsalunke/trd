<style>
.spanusd{
	color: #A9A9A9; 
	font-family: Arial; 
	font-size: 13px;
}
.spanprice{
	color: #3C3C3C; 
	font-family: Arial; 
	font-size: 24px;
}
.colpadbottom{
	padding-bottom: 3%;
}
#hover-menuvideo {
    width: 100%;
    height: 100px;
    background: fff;
}
.rolloverdetail{
	position: absolute; 
	left: 39px; 
	top: 20px; 
	overflow: hidden; 
	width: 45px; 
	height: 45px; 
	z-index: 300
}
.rollovervideo{
	position: absolute; 
	left: 102px; 
	top: 19px; 
	overflow: hidden; 
	width: 45px; 
	height: 45px; 
	z-index: 300
}
.rolloverfavourite{
	position: absolute;
	left: 167px; 
	top: 19px; 
	overflow: hidden; 
	width: 45px; 
	height: 45px; 
	z-index: 300
}
.rollovershare{
	position: absolute; 
	left: 231px; 
	top: 19px; 
	width: 45px; 
	height: 45px; 
	z-index: 300;	
}
.textwrap{
	white-space: nowrap; 
    width: 12em; 
    overflow: hidden;
    text-overflow: ellipsis; 
    border: 1px solid #000000;
}
#wb_Text31{
    position: absolute;
    left: 0px;
    top: 15px;
    width: 100%;
    height: 16px;
    z-index: 134;
    text-align: left;
    border: 0px #000000 solid;
    padding: 0;
    margin: 0;
}
.video-title {
	color: #4B4B4B;
    font-family: Georgia;
    font-size: 13px;
}
.padding-top-5 {
	padding-top:5px;
}
#Layer19 {
    background-color: #FFFFFF;
    filter: alpha(opacity=85);
    opacity: 0.85;
}
a.style5
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:visited
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:active
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:hover
{
   color: #FF6347;
   text-decoration: underline;
}
</style>
<?php  if(count($favoritevedio) > 0 && $favoritevedio[0]['id'] !='') { 
		 foreach($favoritevedio as $key=>$video){ 
		  ?>	
			<div class="col-lg-4 colpadbottom" style="padding:0px;padding-right:28px;margin-bottom: 15px;">
		
				<div id="Layer66" onmouseenter="showMenu('Layer8_<?php echo $key;?>');" onmouseleave="hideMenu('Layer8_<?php echo $key;?>');" style="z-index: 434;padding:20px 14px;background-color: #FAFAFA;border: 1px #D3D3D3 solid;">
					<div>
						<span class="video-title">
							<strong><a href="<?php echo base_url();?>video/details/<?php echo $video['id'];?>" target="_blank" class="style16"><?php echo $video['name'];?></a></strong>
						</span>
						<label class="text-muted pull-right"><img src="<?php echo asset_url(); ?>images/items_like0.png" id="Image21" alt="Like" style="width:25px;height:25px;margin-bottom: 5px;"> <?php echo $video['video_likes'];?></label>
					</div>
					<div class="padding-top-5">
						<span class="text-muted"><?php echo substr($video['description'], 0,30);?></span>
					</div>
					<div class="text-center">
						<span class="spanusd">USD</span>
						<span class="spanusd"> </span>
						<span class="spanprice"><?php echo $video['unit_price']; ?></span>
					</div>
					<div class="text-center">
						<span class="text-muted">Min. Order : <?php echo $video['quantity'].' '. $video['unit']; ?> </span>
					</div>
					<br>
					<div>
						<div class="video-area" style="text-align:center;">
							<video src="<?php echo asset_url(); ?><?php echo $video['vedio_file'];?>" controls="controls" style="max-height:164px;"></video>
						</div>
						<br>
						<div class="text-center">
							<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><?php echo $video['company_name'];?></strong></span>
						</div>
						<div class="text-center">
							<span class="text-muted"><?php echo $video['subcategory']; ?></span> | 
							<span style="color:#FF6347;font-family:Arial;font-size:12px;"><?php echo $video['country']; ?></span>
							<span class="text-muted"><?php echo $video['province']; ?></span>
						</div>
						<br>
						<div class="text-center">
							<span id="wb_Image10" class="img-style">
						        <?php if(!empty($tsuserid) && $video['community_id'] !='' && $video['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="width:25px;height:25px;"/> 
						        <?php }else {?>
						        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15;width:25px;height:25px;" />
						        <?php } ?>
					        </span>
						    <span id="wb_Image2" class="img-style">
						    	<?php if($video['plan_id'] > 1 && $video['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="width:34px;height:28px;"/> <?php } else {?>
						    	<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;width:34px;height:28px;" >
						    	<?php }?>
					        </span>
						    <span id="wb_Image1" class="img-style">
						        <?php if($video['plan_id'] > 1 && $video['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="width:25px;height:25px;" /> <?php } else { ?>
						        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15;width:25px;height:25px;" />
						        <?php }?>
					        </span>
					        <span id="wb_Image1" class="img-style">
								<?php if($video['plan_id'] > '1' && $video['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="width:25px;height:25px;" /><?php } else {?>
								<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15;width:25px;height:25px;" />
								<?php }?>
					        </span>
							<!-- span>
								<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image37" alt="Member In My Community" title="Member In My Community" style="width:25px;height:25px;"/>
							</span>
							<span>
								<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image39" alt="Verified Member" title="Verified Member" style="width:25px;height:25px;">
							</span>
							<span>
								<img src="<?php echo asset_url(); ?>images/member-logo.png" id="Image40" alt="Black Horse Member" title="Black Horse Member" style="width:25px;height:25px;">
							</span-->
						</div>
					</div>
					<div id="Layer8_<?php echo $key;?>" style="position: absolute; text-align: left;left: 0px; top: 320px; width: 327px; height: 89px; z-index: 168;display:none;">
						<div id="Layer19" style="position:absolute;text-align:left;left:0px;top:0px;width:327px;height:89px;z-index:149;">
						</div>
						<div style="background-color:#fff;opacity:1;z-index:24000;">
							<div id="RollOver22" class="rolloverdetail">
								<a href="<?php echo base_url();?>video/details/<?php echo $video['id'];?>" target="_blank"> 
								    <img class="hover" alt="" src="<?php echo asset_url(); ?>images/view-detailsc.png" style="width:45px;"> 
								    <span><img alt=""	src="<?php echo asset_url(); ?>images/view-detailsb.png" style="width:45px;"></span>
								</a>
							</div>
							<div id="RollOver5"	class="rollovervideo">
								<a href="javascript:likeVideo(<?php echo $video['id'];?>);">
								   <img class="hover" alt="like" src="<?php echo asset_url(); ?>images/like-videoa.png"> 
								   <span><img alt="like" src="<?php echo asset_url(); ?>images/like-videob.png"></span>
								</a>
							</div>
							<div id="RollOver12" class="rolloverfavourite">
								<a href="javascript:addToMyFavourite(<?php echo $video['id'];?>,5);"> 
									<img class="hover" alt="" src="<?php echo asset_url(); ?>images/add-favoriteb.png"> 
									<span><img alt="" src="<?php echo asset_url(); ?>images/add-favoritea.png"></span>
								</a>
							</div>
							<div id="wb_Image4"	class="rollovershare">
								<a href="#"	onclick="ShowObjectWithEffect('Layer223', 1, 'fade', 500);return false;">
									<img src="<?php echo asset_url(); ?>images/share-videoa.png" id="Image4" alt="">
								</a>
							</div>
						</div>									
					</div>
				</div>
			</div>
		<?php } }  else { ?>
	      <div class="row" style="margin:0px;">
	     	<h4 class="center"> No Videos Found!</h4>
	     </div>
	    <?php } ?>
<script>
function showMenu(id) {
	$("#"+id).show();
}
function hideMenu(id) {
	$("#"+id).hide();
}
</script>