<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>

<div class="container" style="width: 1280px;">
	<div class="row m1" style="margin:30px 30px;">
		<div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0px;">
			<div id="Layer68" style="height:100%;">
				<div class="maxheight1">
					<br>
					<br>
					<div id="wb_Text244" class="font2s2">
						<div id="wb_Text13" style="position:absolute;left:61px;top:15px;width:84px;height:15px;text-align:center;z-index:351;">
							<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">
								<strong>MY</strong>
							</span>
						</div>
						<h3 class="font1s2">
							<span>COMMUNITY</span>
						</h3>
						<div class="text-center displaydesktop ">
						<?php if(empty($userinfo[0]['profile_image'])) {?>
						    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" class="img-responsive" style="display: inline-block;width:160px;padding: 15px 0px;border-radius:50%;">
						<?php } else {?>
							<img src="<?php echo asset_url(); ?><?php echo $userinfo[0]['profile_image'];?>" class="img-responsive" style="display: inline-block;width:160px;padding: 15px 0px;border-radius:50%;">
						<?php } ?>
						</div>
					</div>
				</div>
				<div class="box ">
					<div class="row l-height ">
						<h3 class="background1" style="margin: 0px 15px !important;">
							<strong>Toolbox</strong>
						</h3>
						<div class="col-xs-4 ptop"
							style="text-align: right; padding: 0px;">
							<br> <img src="<?php echo asset_url(); ?>images/editprofile0.png"
								class="img36">
						</div>
						<div class="col-xs-8 ptop">
							<br> <strong class="font1 ">Edit Profile</strong><br> <a
								href="javascript:popupwnd( './community/editprofile', 'no', 'no', 'no', 'no', 'no', 'no', '415', '50', '416', '703') "
								target="_self " class="font2 ">Hidden Mode</a><br> <a
								href="./shippers.php " target="_blank " class="font2 "
								onclick="ShowObjectWithEffect('Layer55', 1, 'slideleft', 500);return false;">Status</a>
						</div>
						<div class="col-xs-4 ptop"
							style="text-align: right; padding: 0px;">
							<img src="<?php echo asset_url(); ?>images/addmember.png"
								class="img36">
						</div>
						<div class="col-xs-8 ptop">
							<strong class="font1">Add Member</strong><br> 
							<a href="<?php echo base_url()?>seller" target="_blank" class="font2">Seller</a><br> 
							<a href="<?php echo base_url()?>buyer" target="_blank" class="font2">Buyer</a><br> 
							<a href="<?php echo base_url()?>shipper" target="_blank" class="font2">Shipper</a>
						</div>
						<div class="col-xs-4 ptop" style="text-align: right; padding: 0px;">
							<img src="<?php echo asset_url(); ?>images/manage.png" class="img36"> <br>
						</div>
						<div class="col-xs-8 ptop">
							<strong class="font1 ">View / Manage</strong><br> 
							<a href="#" class="font2" onclick="ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);ShowObjectWithEffect('Layer51', 1, 'slideright', 500);ShowObjectWithEffect('Layer120', 0, 'slideleft', 500);return false;">My Posts</a><br> 
							<a href="# " class="font2" onclick="ShowObjectWithEffect( 'Layer71', 1, 'slideright', 600);ShowObjectWithEffect( 'Layer72', 1, 'fade', 500);ShowObjectWithEffect( 'Layer90', 0, 'fade', 5);ShowObjectWithEffect( 'Layer76', 1, 'blindvertical', 500);ShowObjectWithEffect( 'Layer74', 1, 'fold', 500);ShowObject( 'Layer20', 0);ShowObject( 'Layer101', 0);hideObjects( 'Layer18', 0);return false; ">My Members <span style="background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:11px;letter-spacing:0.07px;padding:0px 5px;"><?php echo count($communitymember);?></span></a><br> 
							<a href="# " class="font2" onclick="ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);ShowObjectWithEffect('Layer51', 0, 'slideleft', 500);ShowObjectWithEffect('Layer120', 1, 'slideright', 500);ShowObjectWithEffect( 'Layer71', 0, 'fade', 600);return false;">Add Requests</a>
						</div>
					</div>
					<br>
				</div>
				<div id="Layer55" style="position: absolute; text-align: left; visibility: visible; left:192px; top:370px; width: 183px; height: 247px; z-index:632; display: none;" onmouseleave="ShowObjectWithEffect('Layer55', 0, 'slideleft', 500);return false;">
					<div id="Layer58"
						style="position: absolute; text-align: left; left: 0px; top: 0px; width: 183px; height: 30px; z-index: 382;"
						onclick="ShowObjectWithEffect('Layer67', 1, 'fade', 100);ShowObjectWithEffect('Layer1', 0, 'fade', 100);ShowObject('Layer7', 0);ShowObject('Layer57', 1);return false;">
						<div id="wb_Text65"
							style="position: absolute; left: 22px; top: 8px; width: 136px; height: 16px; z-index: 370; text-align: left;">
							<span style="color: #303030; font-family: Georgia; font-size: 13px;"><strong>Select
									Your Status</strong></span>
						</div>
					</div>
					<div id="wb_Form4" style="position: absolute; left: 10px; top: 42px; width: 161px; height: 205px; z-index: 383;">
						<form name="survey" method="post" action="" id="Form4">
							<div id="wb_Text141" style="position: absolute; left: 64px; top: 15px; width: 67px; height: 16px; z-index: 371; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Online</span>
							</div>
							<input type="radio" id="RadioButton1" name="status" value="online" style="position: absolute; left: 21px; top: 15px; z-index: 372;" <?php if($userinfo[0]['is_online'] == 'online') { ?>checked<?php }?>>
							<div id="wb_Text151" style="position: absolute; left: 64px; top: 40px; width: 67px; height: 16px; z-index: 373; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Offline</span>
							</div>
							<input type="radio" id="RadioButton2" name="status" value="offline" style="position: absolute; left: 21px; top: 40px; z-index: 374;" <?php if($userinfo[0]['is_online'] == 'offline') { ?>checked<?php }?>>
							<div id="wb_Text163" style="position: absolute; left: 64px; top: 65px; width: 67px; height: 16px; z-index: 375; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Available</span>
							</div>
							<input type="radio" id="RadioButton3" name="status" value="available" style="position: absolute; left: 21px; top: 65px; z-index: 376;" <?php if($userinfo[0]['is_online'] == 'available') { ?>checked<?php }?>>
							<div id="wb_Text170" style="position: absolute; left: 64px; top: 90px; width: 67px; height: 16px; z-index: 377; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Away</span>
							</div>
							<input type="radio" id="RadioButton4" name="status" value="away" style="position: absolute; left: 21px; top: 90px; z-index: 378;" <?php if($userinfo[0]['is_online'] == 'away') { ?>checked<?php }?>> 
							<input type="button" id="Button4" name="" value="Set" style="position: absolute; left: 36px; top: 158px; width: 96px; height: 25px; z-index: 379;" onclick="updateOnlineStatus();">
							<div id="wb_Text177" style="position: absolute; left: 64px; top: 117px; width: 67px; height: 16px; z-index: 380; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Busy</span>
							</div>
							<input type="radio" id="RadioButton5" name="rating" value="busy" style="position: absolute; left: 21px; top: 117px; z-index: 381;" <?php if($userinfo[0]['is_online'] == 'busy') { ?>checked<?php }?>>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 " id="Layer2_Container" style="position:relative; text-align:left;padding-right:0px;">
			<div id="Layer5" style="min-width:971px;overflow:hidden;">
			<div class="background2">
				<div class="col-md-10 col-sm-10 col-xs-10" style="padding-top:4px;">
					<span class="font3">COMMUNITY REAL-TIME POSTS</span>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2" style="padding-right:0px;">
					<div id="Layer10" onclick="ShowObjectWithEffect('Layer6', 1, 'slideup', 550, 'easeOutBounce');return false;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6', 1, 'slideup', 550, 'easeOutBounce');return false;">
							<img src="<?php echo asset_url(); ?>images/barsendpost0.png" id="Image11" alt="" class="img29"> 
							<label class="font4">ADD POST</label>
						</a>
					</div>
				</div>
			</div>
			<div id="Layer1" style="overflow: scroll;margin-top:2px;max-height:600px;">
          	<?php 
			if (count ( $allposts ) > 0 && $allposts [0] ['id'] != '') {
			foreach ( $allposts as $key=>$allpost ) {
			?>
					<div class="boxsize row" style="margin-top:21px;margin-right:19px;">
						<div class="col-md-2 col-sm-2 inline text-center">
							<a href="#" id="showmenulist<?php echo $allpost['postid'];?>"> 
								<hr id="Line19" style="position:absolute;left:30px;top:35px;width:5px;height:4px;z-index:227;">
								<hr id="Line18" style="position:absolute;left:30px;top:25px;width:5px;height:4px;z-index:228;">
								<hr id="Line20" style="position:absolute;left:30px;top:45px;width:5px;height:4px;z-index:229;">
								<img src="<?php echo asset_url(); ?>images/activecover.png" alt="img35" style="width:32px;height:38px;">
							</a> 
							<img src="<?php echo asset_url(); ?><?php echo $allpost['profile_image'];?>" id="Shape25" alt="" style="width:74px;height:76px;border-radius:50%;">
							<!-- chat and other all -->
							<div id="Layer47<?php echo $allpost['postid'];?>" class="chat1" onmouseleave="ShowObjectWithEffect('Layer47', 0, 'slideup', 500);return false;" style="display: none;text-align:center;width:140px;top:80px;">
								<a href="#" class="afont" onclick="ShowObjectWithEffect('Layer72', 0, 'slideleft', 500);ShowObjectWithEffect('Layer74', 0, 'slideup', 500);ShowObjectWithEffect('Layer76', 0, 'slideright', 500);ShowObjectWithEffect('Layer90', 1, 'slideright', 500);ShowObjectWithEffect('Layer71', 1, 'slideright', 500);return false;">Chat</a>
								<a href="#" class="afont" onclick="ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);ShowObjectWithEffect('Layer51', 1, 'slideright', 500);return false;">View Posts</a> 
								<a href="<?php echo base_url();?>desksite/<?php echo $allpost['busi_id'];?>" class="afont" target="_blank">DeskSite</a> 
								<a href="<?php echo base_url();?>seller/website/<?php echo $allpost['busi_id'];?>" class="afont" target="_blank">Home Page</a>
							</div>
							<!-- chat end -->
						</div>
						<div class="col-md-6 col-sm-6" style="padding-left:0px;" onclick="ShowObject('Layer20', 0);ShowObject('Layer101', 0);ShowObjectWithEffect('Layer18_<?php echo $key;?>', 1, 'slideright', 500, 'swing');ShowObject('Layer71', 0);return false;">
							<p class="font6" style="font-size:14px;"><?php echo $allpost['company_name'];?> </p>
							<p class="font7">Presented by &nbsp;&nbsp;<a href="#" class="style5 font8"><?php echo $allpost['prefix'].' '.$allpost['username'];?> </a></p>
							<span class="s1" style="font-size:15px;"><strong><?php echo $allpost['title'];?></strong></span><br>
							<span class="s2"><?php echo substr($allpost['postdesc'],0,290);?> <?php if(strlen($allpost['postdesc']) > 290){?>...<?php }?></span> 
							<br><br>
							<span class="s3">USD</span> <span class="s4"><?php echo $allpost['postprice'];?>.00&nbsp;&nbsp;&nbsp; </span>
							<span class="s5 pull-right" style="padding-top:12px;">Min. Order: <?php echo $allpost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
							<hr style="background-color:#00c9d0;height:1px;margin-bottom:10px;">
							<span class="font11" style="border-top: 5px solid #00c9d0;">Views </span> <span class="font11"><?php echo $allpost['postviews'];?></span>
							<a href="javascript:viewPostLike(<?php echo $allpost['id'];?>)" class="style5 font10">Likes</a> 
							<span class="font11"><?php echo $allpost['likes'];?></span>
							<a href="javascript:viewPostComment(<?php echo $allpost['id'];?>)" class="style5 font10">Comments</a> 
							<span class="font11"><?php echo $allpost['comment'];?></span>

						</div>
						<div class="col-md-4 col-sm-4">
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $allpost['image1'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $allpost['image2'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $allpost['image3'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $allpost['image4'];?>" id="Shape3" alt="" class="img120">
							</div>
						</div>
					</div>
                 <?php } }  else { ?>
					<div class="row">
						<h4 class="center">You don’t have members in your community..<br>
							To add members, click on the suitable business type “ Sellers, Shippers, Buyers” shown under “ Add Member” in The Toolbox..<br>
							In the related page, search for a certain members meet your requirement, view his Desksite, then click “Contact and select Add To My Community”..
						</h4>
					</div>
					<?php }  ?>
				</div>
            </div>
			<!-- Add requests -->
			<div id="Layer120" style="position:absolute;text-align:left;visibility:hidden;left:0;top:0;width:982px;height:740px;z-index:626;">
				<div id="Layer121" style="position:absolute;text-align:left;left:20px;top:0;width:954px;height:37px;z-index:606;">
				</div>
				<div id="wb_Text318" style="position:absolute;left:28px;top:4px;width:431px;height:24px;z-index:607;text-align:left;">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:20px;"><strong>Add Requests</strong></span>
				</div>
				<div id="wb_Shape342" style="position:absolute;left:495px;top:0px;width:189px;height:34px;z-index:608;">
					<div style="width:189px;height:34px;background-color:#2d2d2d;color:#fff;border: 1px solid #3e3838;text-align: center;padding-top: 7px;font-family: Arial;font-size: 13px;">Members you like to add them</div>
				</div>
				<div id="wb_Shape341" style="position:absolute;left:312px;top:0px;width:183px;height:39px;z-index:609;">
					<div style="width:183px;height:34px;background-color:#f55341;color:#fff;border: 1px solid #da756a;text-align: center;padding-top: 7px;font-family: Arial;font-size: 13px;">Members like to add you</div>
				</div>
				<div id="wb_Shape72" style="position:absolute;left:934px;top:0px;width:38px;height:36px;z-index:610;">
					<a href="#" onclick="ShowObjectWithEffect('Layer120', 0, 'slideright', 500);ShowObjectWithEffect('Layer9', 0, 'slideright', 500);ShowObjectWithEffect('Layer5', 1, 'slideleft', 500);return false;"><img src="<?php echo asset_url(); ?>images/img3485.gif" id="Shape72" alt="" style="width:38px;height:36px;"></a>
				</div>
				<div id="Layer123" style="position:absolute;overflow:scroll;text-align:left;left:20px;top:46px;width:957px;height:675px;z-index:611;">
					<div id="wb_Text365" style="position:absolute;left:442px;top:959px;width:76px;height:14px;z-index:598;text-align:left;">
						<span style="color:#303030;font-family:Arial;font-size:11px;">Today&nbsp; | 08:05</span>
					</div>
					<div id="Layer219" style="position:absolute;text-align:left;left:16px;top:164px;width:902px;height:162px;z-index:599;" onmouseenter="ShowObjectWithEffect('Layer122', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer122', 0);return false;">
						<div id="Layer220" style="position:absolute;text-align:left;left:2px;top:1px;width:756px;height:143px;z-index:596;">
							<div id="wb_Text748" style="position:absolute;left:74px;top:20px;width:351px;height:18px;z-index:588;text-align:left;">
								<span style="color:#303030;font-family:Georgia;font-size:15px;"><strong><a href="./buyer_profile.php" target="_blank" class="style5">High Style Wholesale Market Co. Ltd.</a></strong></span>
							</div>
							<div id="Layer221" style="position:absolute;text-align:left;left:560px;top:0px;width:194px;height:140px;z-index:589;">
								<div id="wb_Text750" style="position:absolute;left:70px;top:26px;width:117px;height:15px;text-align:center;z-index:582;">
									<span style="color:#808080;font-family:Georgia;font-size:12px;">Wholesale Market</span>
								</div>
								<div id="wb_Text751" style="position:absolute;left:17px;top:25px;width:96px;height:15px;z-index:583;text-align:left;">
									<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>Buyer&nbsp; |</strong></span>
								</div>
								<div id="wb_Text752" style="position:absolute;left:46px;top:47px;width:96px;height:15px;z-index:584;text-align:left;">
									<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>Kuwait | </strong></span>
								</div>
								<div id="wb_Text753" style="position:absolute;left:110px;top:47px;width:86px;height:15px;z-index:585;text-align:left;">
									<span style="color:#808080;font-family:Georgia;font-size:12px;">Salmaya</span>
								</div>
								<div id="wb_Text754" style="position:absolute;left:27px;top:75px;width:147px;height:14px;z-index:586;text-align:left;">
									<span style="color:#303030;font-family:Georgia;font-size:11px;"><strong>Annual Trade Volum&nbsp; </strong></span>
								</div>
								<div id="wb_Text755" style="position:absolute;left:38px;top:95px;width:144px;height:15px;z-index:587;text-align:left;">
									<span style="color:#808080;font-family:Arial;font-size:12px;">100 Container / Year</span>
								</div>
							</div>
							<div id="wb_Text756" style="position:absolute;left:22px;top:82px;width:130px;height:16px;z-index:590;text-align:left;">
								<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main Products | </strong></span>
							</div>
							<div id="wb_Text757" style="position:absolute;left:144px;top:82px;width:376px;height:30px;z-index:591;text-align:left;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Classic Shoes, Sport Shoes,&nbsp; Slippers, PVC Shoes, Leather Shoes, Leather Shoes, Leather Shoes...</span>
							</div>
							<div id="wb_Text759" style="position:absolute;left:75px;top:41px;width:177px;height:30px;z-index:592;text-align:left;">
								<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: Mr. Thomas Koke</span>
							</div>
							<div id="wb_Shape70" style="position:absolute;left:19px;top:14px;width:45px;height:45px;z-index:593;">
								<img src="<?php echo asset_url(); ?>images/img3482.png" id="Shape70" alt="" style="width:45px;height:45px;">
							</div>
						</div>
						<div id="Layer122" style="position:absolute;text-align:left;visibility:hidden;left:773px;top:1px;width:129px;height:145px;z-index:597;">
							<div id="wb_Shape71" style="position:absolute;left:0px;top:76px;width:129px;height:31px;z-index:594;">
								<a href="#" onclick="ShowObject('Layer214', 0);ShowObject('Layer191', 1);ShowObject('Layer217', 0);return false;"><img src="<?php echo asset_url(); ?>images/img3483.png" id="Shape71" alt="" style="width:129px;height:31px;"></a>
							</div>
							<div id="wb_Shape292" style="position:absolute;left:0px;top:36px;width:129px;height:31px;z-index:595;">
								<a href="#" onclick="ShowObject('Layer214', 0);ShowObject('Layer191', 1);ShowObject('Layer217', 0);return false;"><img src="<?php echo asset_url(); ?>images/img3484.png" id="Shape292" alt="" style="width:129px;height:31px;"></a>
							</div>
						</div>
					</div>
					<div id="wb_Text749" style="position:absolute;left:12px;top:30px;width:107px;height:36px;z-index:600;text-align:left;">
						<span style="color:#F05539;font-family:Arial;font-size:32px;">1</span><span style="color:#FFFFFF;font-family:Arial;font-size:32px;"> </span><span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Requests</span>
					</div>
					<div id="wb_Text779" style="position:absolute;left:20px;top:77px;width:437px;height:30px;z-index:601;text-align:left;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">You have been received requests from the following members to add you to their business community&nbsp; </span>
					</div>
					<div id="wb_Text758" style="position:absolute;left:369px;top:144px;width:106px;height:14px;z-index:602;text-align:left;">
						<span style="color:#303030;font-family:Arial;font-size:11px;">Today | 08:15</span>
					</div>
					<div id="wb_Image123" style="position:absolute;left:504px;top:181px;width:27px;height:27px;z-index:603;">
						<img src="<?php echo asset_url(); ?>images/Active.png" id="Image123" alt="">
					</div>
					<div id="wb_Image122" style="position:absolute;left:464px;top:180px;width:28px;height:28px;z-index:604;">
						<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image122" alt="">
					</div>
					<div id="wb_Image121" style="position:absolute;left:436px;top:182px;width:24px;height:24px;filter:alpha(opacity=25);opacity:0.25;z-index:605;">
						<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image121" alt="">
					</div>
				</div>
			</div>
			<!-- Add request end -->
			<!-- my post section -->
			<div id="Layer51" style="visibility:hidden; position:absolute;min-width:971px;">
			<div class="background2">
				<div class="col-md-11 col-sm-11 col-xs-11" style="padding-top: 4px;">
					<div class="col-sm-2"><span class="font3">My Posts</span></div>
					<div class="col-sm-2">
						<span style="color:#FFFFFF;font-family:Arial;font-size:24px;"><?php echo count($myposts);?> </span>
						<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Posts</span>
					</div>
					<div class="col-sm-6 text-right">
						<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Usage </span>
						<span style="color:#FFFFFF;font-family:Arial;font-size:24px;"><?php echo round(count($myposts)*225/1024);?> MB</span>
					</div>
					<div class="col-sm-2" style="padding-top: 10px;"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Out of 600 MB</span></div>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-1 text-right" style="padding-left:0px;padding-right: 0px;">
					<div id="wb_Shape67">
						<a href="#" onclick="ShowObjectWithEffect('Layer51', 0, 'slideright', 500);ShowObjectWithEffect('Layer9', 0, 'slideright', 500);ShowObjectWithEffect('Layer5', 1, 'slideleft', 500);return false;"><img src="<?php echo asset_url();?>images/img0334.gif" id="Shape67" alt="" style="width:38px;height:37px;"></a>
					</div>
				</div>
			</div>
			<div id="Layer32" style="overflow: scroll;margin-top:2px;height:600px;">
             <?php 
				if (count ( $myposts ) > 0 && $myposts [0] ['id'] != '') {
					foreach ( $myposts as $key=>$mypost ) {
						?>
					<div class="boxsize row" style="margin-top:21px;margin-right:19px;">
						<div class="col-md-2 col-sm-2 text-center">
							<br><br><br><br><br>
							<input type="checkbox"><br><br>
							<button type="button" id="Button4" class="m2" onclick="deletePost(<?php echo $mypost['id'];?>);">Delete</button>
						</div>
						<div class="col-md-6 col-sm-6" style="padding-left:0px;" onclick="ShowObject('Layer20', 0);ShowObject('Layer101', 0);ShowObjectWithEffect('delLayer18_<?php echo $key;?>', 1, 'slideright', 500, 'swing');ShowObject('Layer71', 0);return false;">
							<p class="font6" style="font-size:14px;"><?php echo $mypost['company_name'];?> </p>
							<p class="font7">Presented by &nbsp;&nbsp;<a href="#" class="style5 font8"><?php echo $mypost['prefix'].' '.$mypost['username'];?> </a></p>
							<span class="s1" style="font-size:15px;"><strong><?php echo $mypost['title'];?></strong></span><br>
							<span class="s2"><?php echo substr($mypost['postdesc'],0,290);?> <?php if(strlen($mypost['postdesc']) > 290){?>...<?php }?></span> 
							<br><br>
							<span class="s3">USD</span> <span class="s4"><?php echo $mypost['postprice'];?>.00&nbsp;&nbsp;&nbsp; </span>
							<span class="s5 pull-right" style="padding-top:12px;">Min. Order: <?php echo $mypost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
							<hr style="background-color:#00c9d0;height:1px;margin-bottom:10px;">
							<span class="font11" style="border-top: 5px solid #00c9d0;">Views </span> <span class="font11"><?php echo $mypost['postviews'];?></span>
							<a href="javascript:viewPostLike(<?php echo $mypost['id'];?>)" class="style5 font10">Likes</a> 
							<span class="font11"><?php echo $mypost['likes'];?></span>
							<a href="javascript:viewPostComment(<?php echo $mypost['id'];?>)" class="style5 font10">Comments</a> 
							<span class="font11"><?php echo $mypost['comment'];?></span>

						</div>
						<div class="col-md-4 col-sm-4">
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $mypost['image1'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $mypost['image2'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $mypost['image3'];?>" id="Shape3" alt="" class="img120">
							</div>
							<div class="col-sm-6">
								<img src="<?php echo asset_url(); ?><?php echo $mypost['image4'];?>" id="Shape3" alt="" class="img120">
							</div>
						</div>
					</div>
                 <?php } }  else { ?>
						<div class="row">
							<h4 class="center">Yet you don’t publish any post..<br>
								Click on post icon to boost your first post and share it among you community members..
							</h4>
						</div>
				<?php }  ?>
				</div>
            </div>



			<!-- my post section end-->
			<!-- add post section -->
			<div id="Layer6" style="top:0px;width:472px;z-index:513;position:absolute;left:382px;visibility:hidden;">
				<div id="Layer15" style="background: #3C3C3C; padding: 11px;">
					<div style="padding-bottom:5px;">
						<span style="color: #FFFFFF; font-family: Georgia; font-size: 15px;"><strong>Send A Post</strong></span> <br>
					</div>
					<form id="addPostContent" name="addPostContent" action="" method="post" enctype="multipart/form-data">
						<div id="postdatacontent">
							<div class="box2">
								<input type="text" id="Editbox1" name="title" value="" maxlength="30" placeholder="Post Title" style="width:385px;"> <br> <br>
								<textarea name="description" id="TextArea2" rows="5" cols="54" maxlength="1000" placeholder="Post Details"></textarea>
								<div class="row">
									<!--div class="col-sm-12 leftbox3">Upload Images</div>
									<br>
									<div class="inline">
										<input type="radio" name="gender" value="uploadimage" style="width: 25px;"> 
										<input type="file" id="postimgupload" name="userfile[]" multiple="multiple" onchange="readPostImageURL(this)" style="width: 200px;">
										<label class="hh">4 jpg images, Each image with Max. size 75KB</label>
									</div-->
									<br>
									<div class="inline">
										<input type="radio" name="gender" value="productimage" style="width: 25px;">
										<div class="leftbox3" style="width:125px;">From my products</div>
										<select id="select_product_id" onchange="getval(this);" name="product_id" style="width:170px;">
					                    	<?php foreach ( $products as $productlist ) { ?>
										  	<option value="<?php echo $productlist['id'];?>"><?php echo $productlist['name'];?></option>
									    	<?php } ?>	
										</select>
										<button type="button" id="buttonselect" style="margin-left:10px;">Link</button>
									</div>
									<br>
									<div class="">
										<label class="hh" style="margin-left:25px;font-weight:normal;">4 jpg images, Each image with Max. size 75KB</label>
									</div>
									<div class="inline center1">
										<img id="postphoto1" src="<?php echo asset_url();?>images/img2082.png" alt="" class="formbox"> 
										<img id="postphoto2" src="<?php echo asset_url();?>images/img2082.png" alt="" class="formbox"> 
										<img id="postphoto3" src="<?php echo asset_url();?>images/img2082.png" alt="" class="formbox"> 
										<img id="postphoto4" src="<?php echo asset_url();?>images/img2082.png" alt="" class="formbox">
									</div>
									<input type="hidden" name="cimg[]" id="cimg1"/>
									<input type="hidden" name="cimg[]" id="cimg2"/>
									<input type="hidden" name="cimg[]" id="cimg3"/>
									<input type="hidden" name="cimg[]" id="cimg4"/>
									<br> <br>
									<div class="inline">
										<input type="number" id="Editbox3" name="usd_price" value="" maxlength="10" placeholder="USD Prize"> 
										<input type="text" placeholder="Qty" name="quantity" class="margin1">
									</div>
									<br>
									<div class="inline">
										<span style="color: #000000; font-family: Arial; font-size: 9.3px;">Buyers:to enter <u>target price </u>and <u>expected Qty</u>. </span>
									</div>
									<div class="col-sm-12">
										<div class="pull-right">
											<button id="Button4" class="margin1">RESET</button>
											<button id="Button4" class="margin1" type="submit">SEND</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="view_Product_image" style="background-color: white;"></div>
					</form>
					<div id="wb_Text277">
						<span class="ss1">* </span> <span class="ss3"> <u>All posts</u> will be expired within </span> 
						<span class="ss2"> </span><span class="ss1"> <strong><u>1 month</u> </strong> </span> 
						<span class="ss2">, </span><span class="ss3">as long as you can resend it whenever you like. </span>
						<span class="ss2"><br> </span><span class="ss1">* </span> 
						<span class="ss3"> <u>Once</u> your post achieve your target, you can mark it and click delete (
							Click My Posts / Mark the <br>&nbsp; required post / Click
							Delete)..
						</span> 
						<span class="ss2"><br></span> <span class="ss1">* </span>
						<span class="ss3">Don't repeat, duplicate or send the same post
							twice, so as you not affect the storage of your <br>&nbsp;
							(Community) Box.
						</span> 
						<div style="text-align:center;">
							<a href="#" onclick="ShowObjectWithEffect('Layer6', 0, 'slideup', 500);ShowObjectWithEffect('Layer118', 0, 'slideup', 500);return false;">
								<img src="<?php echo asset_url(); ?>images/img0760.gif" id="Shape35" alt="" style="width: 248px; height: 26px;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- like section end -->

	<div id="Layer20">
		<div id="view_post_like"></div>
	</div>

	<!-- like section end -->
	<!-- comment section  -->

	<div id="Layer101">
		<div id="view_post_comment"></div>
	</div>

	<!-- comment section end -->
	<!-- my members  -->

	<div id="Layer71" style="position:absolute; text-align:right; visibility:hidden; right:0px; bottom:0px; width:434px; height:100%; z-index:2250; top: 0px;">
		<div id="Layer71_Container">
			<div class="likehead" style="text-align:left;">
				<span class="like">Members <span class="likecount" style="padding:0px 20px;vertical-align: middle;">&nbsp;&nbsp;<strong><?php echo count($communitymember);?>00</strong></span></span>
				<a href="#" onclick="ShowObjectWithEffect('Layer71', 0, 'slideright', 600);return false;">
					<img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" class="img42" style="margin-bottom: 30px;">
				</a>
			</div>
			<div class="memberheader">
				<input type="checkbox" onclick="showDeleteMenu();" id="deleteMem"> select <input type="text" id="SiteSearch01" class="searchbox" name="SiteSearch1" value="" placeholder="Search My Members" /> 
				<input type="button" id="Button01" onclick="searchPage();return false;" name="Search" value="" style="width: 25px; height: 20px; z-index: 1808; margin-left: -33px; vertical-align: middle;" />
				<a href="javascript:deleteMembers();" style="margin-left:15px;display:none;" id="memdeleteimg">
					<img alt="Delete selected members" src="<?php echo asset_url();?>images/mem-delete.png" style="width:32px;">
				</a>
			</div>
			<div id="comm_members">
            <?php foreach($communitymember as $member) {?>
	            <div class="memberclass1  hover3">
	            	<input type="hidden" class="comm_member_id" value="<?php echo $member['busi_id'];?>"/>
					<div class="col-sm-3 image-cover">
						<img src="<?php echo asset_url(); ?><?php echo $member['memberimg'];?>" id="Image28" alt="" class="memberimg">
						<span class="notification"><?php echo $member['messages'];?></span>
					</div>
					<div class="col-sm-9 padding-top-10">
						<?php if($member['user_category_id'] == 1 || $member['user_category_id'] == 2) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php } else if($member['user_category_id'] == 3) { ?>
						<img src="<?php echo asset_url(); ?>images/Active.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_active'] == 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php } ?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_logo_verified'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php if($member['user_category_id'] == 1) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1 && $member['gaurantee_period'] !=''){ ?>1<?php } else { ?>0.15<?php }?>;"/>
						<?php } ?>
						<p class="membername"><?php echo $member['membername'];?></p>
						<p class="membername"><?php echo $member['cname'];?></p>
						<p class="memposition"><?php echo $member['subcategory'];?></p>
						<p class="memposition"><?php echo $member['country'].' | '.$member['city'];?></p>
					</div>
				</div>
            <?php } ?>
            <?php if(count($communitymember) <= 0) { ?>
            	You don’t have members in your community..<br>
				To add members, click on the suitable business type “ Sellers, Shippers, Buyers” shown under “ Add Member” in The Toolbox..<br>
				In the related page, search for a certain members meet your requirement, view his Desksite, then click “Contact and select Add To My Community”..
            <?php } ?>
            </div>
		</div>
	</div>
	<!-- my members end -->
	<?php 
		if (count ( $allposts ) > 0 && $allposts [0] ['id'] != '') {
		foreach ( $allposts as $key=>$allpost ) {
	?>
	<!-- post details -->
	<div class="Layer18" id="Layer18_<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 664px; top: 1px; width: 608px; height: 767px; z-index: 587;">
		<h3 class="background11">
			<strong>Post Details</strong>
		</h3>
		<div class="row" style="margin:0px;">
			<div class="col-sm-11" id="Layer11" style="width: 570px;">
				<span class="cstyle5"><strong><?php echo $allpost['title'];?></strong></span>
				<br> 
				<?php if(empty($userinfo[0]['profile_image'])) {?>
				    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } else {?>
					<img src="<?php echo asset_url(); ?><?php echo $userinfo[0]['profile_image'];?>" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } ?>
				<strong class="cstyle1"><?php echo $allpost['prefix'].' '.$allpost['username'];?> &nbsp;|&nbsp; <?php echo $allpost['company_name'];?> </strong> <br>
				<div class="space1">
					<span class="cstyle4"><?php echo substr($allpost['postdesc'],0,400);?> <?php if(strlen($allpost['postdesc']) > 400){?>...<?php }?>
					</span> <br>
				</div>
				<div class="center1 padding1">
					<span class="cstyle2">&nbsp; USD <?php echo $allpost['postprice'];?>&nbsp;&nbsp;&nbsp; </span> <span
						class="cstyle3">&nbsp; Min. Order: <?php echo $allpost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
				</div>
				<img src="<?php echo asset_url(); ?><?php echo $allpost['image1'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $allpost['image2'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $allpost['image3'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $allpost['image4'];?>" class="img500" alt="" style="width:540px !important;"><br>
			</div>
			<div class="col-sm-1" style="width:30px;padding:3px;">
				<a href="#" onclick="ShowObject('Layer18_<?php echo $key;?>', 0);return false;"> <img
					src="<?php echo asset_url(); ?>images/close.png" id="Image14"
					alt="" class="img35 margin3">
				</a><br> <a href=""> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/addtofavroll.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/addtofav.png"
						class="img35 margin3"></span>
				</a><br> <a
					href="javascript:popupwnd('./inquiry.php','no','no','no','no','no','no','600','50','555','750')"
					target="_self"> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/inquiryorange.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/inquirywhite.png"
						class="img35 margin3"></span>
				</a><br> <a href="#"
					onclick="ShowObjectWithEffect('Layer223', 1, 'scale', 500);return false;">
					<img src="<?php echo asset_url(); ?>images/shareroll.png"
					id="Image4" alt="" class="img35 margin3">
				</a><br> <a href=""> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/translate-post.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/translate-post2.png"
						class="img35 margin3"></span>
				</a> <br>
			</div>
		</div>
	</div>
	<?php 
		}
	}
	?>
	<?php 
	if (count ( $myposts ) > 0 && $myposts [0] ['id'] != '') {
		foreach ( $myposts as $key=>$mypost ) {
	?>
	<!-- post details -->
	<div class="Layer18" id="delLayer18_<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 664px; top: 1px; width: 608px; height: 767px; z-index: 587;">
		<h3 class="background11">
			<strong>Post Details</strong>
		</h3>
		<div class="row" style="margin:0px;">
			<div class="col-sm-11" id="Layer11" style="width: 570px;">
				<span class="cstyle5"><strong><?php echo $mypost['title'];?></strong></span>
				<br> 
				<?php if(empty($userinfo[0]['profile_image'])) {?>
				    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } else {?>
					<img src="<?php echo asset_url(); ?><?php echo $userinfo[0]['profile_image'];?>" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } ?>
				<strong class="cstyle1"><?php echo $mypost['prefix'].' '.$mypost['username'];?> &nbsp;|&nbsp; <?php echo $mypost['company_name'];?> </strong> <br>
				<div class="space1">
					<span class="cstyle4"><?php echo substr($mypost['postdesc'],0,400);?> <?php if(strlen($mypost['postdesc']) > 400){?>...<?php }?>
					</span> <br>
				</div>
				<div class="center1 padding1">
					<span class="cstyle2">&nbsp; USD <?php echo $mypost['postprice'];?>&nbsp;&nbsp;&nbsp; </span> <span
						class="cstyle3">&nbsp; Min. Order: <?php echo $mypost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
				</div>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image1'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image2'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image3'];?>" class="img500" alt="" style="width:540px !important;"><br><br>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image4'];?>" class="img500" alt="" style="width:540px !important;"><br>
			</div>
			<div class="col-sm-1" style="width:30px;padding:3px;">
				<a href="#" onclick="ShowObject('delLayer18_<?php echo $key;?>', 0);return false;"> <img
					src="<?php echo asset_url(); ?>images/close.png" id="Image14"
					alt="" class="img35 margin3">
				</a><br> <a href=""> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/addtofavroll.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/addtofav.png"
						class="img35 margin3"></span>
				</a><br> <a
					href="javascript:popupwnd('./inquiry.php','no','no','no','no','no','no','600','50','555','750')"
					target="_self"> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/inquiryorange.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/inquirywhite.png"
						class="img35 margin3"></span>
				</a><br> <a href="#"
					onclick="ShowObjectWithEffect('Layer223', 1, 'scale', 500);return false;">
					<img src="<?php echo asset_url(); ?>images/shareroll.png"
					id="Image4" alt="" class="img35 margin3">
				</a><br> <a href=""> <img class="hover img35" alt=""
					src="<?php echo asset_url(); ?>images/translate-post.png"> <span><img
						alt="" src="<?php echo asset_url(); ?>images/translate-post2.png"
						class="img35 margin3"></span>
				</a> <br>
			</div>
		</div>
	</div>
	<?php 
		}
	}
	?>
</div>

<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>

<?php foreach($allposts as $allpost ) { ?>
<script>

$("#showmenulist<?php echo $allpost['postid'];?>").click(function () {
    if ($("#Layer47<?php echo $allpost['postid'];?>").is(":hidden")) {
        $("#Layer47<?php echo $allpost['postid'];?>").slideDown("slow");
    } else {
        $("#Layer47<?php echo $allpost['postid'];?>").hide();
    }
});

$("#Layer47<?php echo $allpost['postid'];?>").mouseleave(function(){
$(this).hide();
});

</script>
<?php } ?>

<script>
function deletePost(id){
    var del =confirm('Are you sure to delete Post.');
	    if(del != true){
		      return false;
		    } else {
		        $.post(base_url+"community/deletepost", {id : id}, function(data){
		        alert(data.msg);
		        window.location.href=base_url+"community";
		    }, 'html');
	    }
    }
    
$('#buttonselect').click(function() {
    var id = $('#select_product_id').val(); 
    $('#postdatacontent').hide();
    $.get(base_url+"community/product/images/"+id, {}, function(data){
	    $('#view_Product_image').html(data);
	 },'html');
    //alert(id);
});

function selectProductImage() {
    $('#postviewimage').hide();
    $('#postdatacontent').show();
    $("input[name='cimgchk[]']:checked").each(function(index) {
        $('#postphoto'+(index+1)).attr('src', base_url+'assets/'+$(this).val()).css('width', '60px').css('height', '60px');
        $("#cimg"+(index+1)).val($(this).val());
   	});
    $('#view_Product_image').hide();
}


$('#addPostContent').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	title: {
            validators: {
                notEmpty: {
                    message: 'Post Title is required'
                }
            }
        }
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addPostContent();
});

function addPostContent() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'community/communitypost',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addPostContent').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg.name);
		$("#response").show();
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"community";
  	}
}


function readPostImageURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
            for(var i=0; i< filecount; i++) {
            	setup_readerpost($(input)[0].files, i);
            }
	} else {
		alert('You can not select more than 4 files');
	}
}

function setup_readerpost(files, i) {
    var file = files[i];
    var name = file.name;
    var extension = name.replace(/^.*\./, '');
    var reader = new FileReader();
    reader.onload = function(e){
    	//readerLoaded(e, files, i, name);
    	var j = parseInt(i) + 1;
       // $('#postimgupload').css('display', 'none');
       /* if(extension == "pdf") {
        	$('#postphoto'+j).replaceWith($('<embed id="postphoto'+j+'" src="" />'));
        }*/
        $('#postphoto'+j).show();
        $('#postphoto'+j).attr('src', e.target.result).css('width', '60px').css('height', '60px');
    };
    reader.readAsDataURL(files[i]);
}

function postLike(id){
	//alert("hi");
		Toggle('', 'blindhorizontal', 500);
		$.post(base_url+"community/post/like", {post_id : id }, function(data){
			alert(data.msg);
			if(data.status!=''){
				//alert(data.msg);
				viewPostLike(id);
				//window.location.href = base_url+"post";
			}
		},'json');
}

function commentPost(post_id, user_id){
    var comment =$("#comment"+post_id).val();
    if(comment !=''){
        $.post(base_url+"community/post/comment", {post_id : post_id , user_id : user_id, comment : comment }, function(data){
            if(data.status==1){
	            alert(data.msg);
	            viewPostComment(post_id);
	            //window.location.href=base_url+"post";
            }
        }, 'json');
    }
    else{
        alert('Please enter some comment');
        return false;
    }  
}

function viewPostLike(id){
    $.post(base_url+"community/post/viewlike", {id : id}, function(data){
	       $('#view_post_like').html(data);
	       ShowObject('Layer101', 0);
	       ShowObjectWithEffect('Layer20', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
}

function viewPostComment(id){
    $.post(base_url+"community/post/viewcomment", {id : id}, function(data){
	       $('#view_post_comment').html(data);
	       ShowObject('Layer20', 0);
	       ShowObjectWithEffect('Layer101', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
}

function updateOnlineStatus() {
	$.post(base_url+"mybusiness/profile/isonline", {status: $("input[name='status']:checked"). val()}, function(data){
		alert("Status updated successfully.");
		ShowObjectWithEffect('Layer55', 0, 'slideleft', 500);
	},'json');
}

function hideObjects(cls) {
	$("."+cls).css('visibility','hidden');
}

function showDeleteMenu() {
	if($("#deleteMem").prop("checked")) {
		$("#memdeleteimg").show();
	} else {
		$("#memdeleteimg").hide();
	}
}

function searchPage() {
	$.get(base_url+"community/members/search",{ name: $("#SiteSearch01").val()},function(data) {
		$("#comm_members").html(data);
	},'html');
}

function deleteMembers() {
	var members = "";
	$(".comm_member_id").each(function(){
		if(members == "") {
			members = $(this).val();
		} else {
			members = members+","+$(this).val();
		}
	});
	if(members != "") {
		$.get(base_url+"community/members/delete",{ members: members},function(data) {
			$("#comm_members").html('<div style="text-align:center;padding: 25px;font-size: 14px;">All Members Deleted Successfully.</div>');
		},'html');
	}
}
    
</script>