<?php 
	$i = 0;
	foreach ($favoritecatalouge as $key=>$item) {?>
		<?php if (($i % 3)==0){?>
			<div class="row">
			<?php }?>
				<div class="col-md-4">
					<div id="Layer5" style="text-align:left;left:0px;top:463px;width:320px;height:510px;z-index:420;margin-bottom:10px;background-color:#FFFFFF;border:1px #D3D3D3 solid;" onmouseenter="ShowObjectWithEffect('Layer279-<?php echo $key;?>', 1, 'slideleft', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Layer279-<?php echo $key;?>', 0, 'slideleft', 300, 'swing');return false;">
						<div id="wb_Text12" style="position:absolute;left:28px;top:29px;width:278px;height:16px;text-align:center;z-index:384;">
							<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $item['catalogue_title']; ?></strong></span>
						</div>
						<div id="Layer279-<?php echo $key;?>" class="Layer279" style="position: absolute; text-align: left; visibility: visible; left: 255px; top: 165px; width: 49px; height: 159px; z-index: 385; display: none;background-color: #F05539;">
							<div id="RollOver5" class="" style="position:absolute;left:14px;top:26px;width:30px;height:30px;z-index:380;">
								<a href="javascript:viewCatalogueBook(<?php echo $item['id'];?>);">
									<img class="hover" src="<?php echo asset_url()?>images/newicons/vacticongray.png" alt="view">
									<span><img alt="View" src="<?php echo asset_url()?>images/newicons/vacticonwhite.png"></span>
								</a>
							</div>
							<div id="RollOver6" style="position:absolute;left:14px;top:64px;overflow:hidden;width:30px;height:30px;z-index:381;opacity:0.35;">
								<a href="javascript:return false;">
									<img class="hover" alt="Like" src="<?php echo asset_url()?>images/favoriteclick.png">
									<span><img alt="Like" src="<?php echo asset_url()?>images/addtofav.png"></span>
								</a>
							</div>
							<div id="RollOver9" style="position:absolute;left:14px;top:102px;overflow:hidden;width:30px;height:30px;z-index:382">
								<a href="<?php echo base_url();?>vcatalogues?keyword=<?php echo $item['catalogue_title']; ?>" target="_blank">
									<img class="hover" alt="Same" src="<?php echo asset_url()?>images/from-sameblack.png">
									<span><img alt="Same" src="<?php echo asset_url()?>images/from-same-user.png"></span>
								</a>
							</div>
						</div>
						<div id="wb_Image23" style="position:absolute;left:58px;top:83px;width:214px;height:309px;z-index:386;">
						<img src="<?php echo asset_url()?>images/vCAT2.png" id="Image23" alt=""></div>
						<div id="wb_Shape2" style="position:absolute;left:87px;top:191px;width:171px;height:171px;z-index:387;">
							<img src="<?php echo asset_url().$item['catalogue_cover'];?>" id="Shape2" alt="" style="width:171px;height:171px;border-radius:50%;border:2px solid #e55a43;">
						</div>
						<div id="wb_Text16" style="position:absolute;left:101px;top:351px;width:143px;height:16px;text-align:center;z-index:388;">
						<span style="background-color:#F05539;color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong><?php echo $item['catalogue_title']; ?> </strong></span></div>
						<div id="wb_Text34" style="position:absolute;left:134px;top:51px;width:29px;height:14px;z-index:389;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span></div>
						<div id="wb_Image27" style="position:absolute;left:158px;top:45px;width:25px;height:25px;z-index:390;">
						<img src="<?php echo asset_url()?>images/items_like0.png" id="Image27" alt=""></div>
						<div id="wb_Text33" style="position:absolute;left:182px;top:51px;width:63px;height:14px;z-index:391;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;" id="sdiv<?php echo $item['catalogue_id']; ?>"><?php echo $item['likes'];?></span></div>
						<div id="wb_Text10" style="position:absolute;left:40px;top:485px;width:30px;height:12px;z-index:392;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:9.3px;">Rank</span></div>
						<div id="Layer6" style="position:absolute;text-align:left;left:74px;top:489px;width:181px;height:3px;z-index:393;background-color: #f1f1f1;opacity:1;border:0px;">
						<div id="Layer7" style="position:absolute;text-align:left;left:0px;top:1px;width:<?php echo $item['rank']."%";?>;height:2px;z-index:383;background-color: #FF6347;">
						</div>
						</div>
						<div id="wb_Text13" style="position:absolute;left:185px;top:418px;width:125px;height:15px;z-index:394;text-align:left;">
						<span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $item['company_country'];?> | <?php echo $item['company_province'];?></span></div>
						<div id="wb_Text14" style="position:absolute;left:64px;top:417px;width:63px;height:15px;z-index:395;text-align:left;">
						<span style="color:#808080;font-family:Georgia;font-size:12px;">Supplier&nbsp;&nbsp; </span></div>
						<div id="wb_Text15" style="position:absolute;left:45px;top:397px;width:244px;height:15px;text-align:center;z-index:396;">
						<span style="color:#1E90FF;font-family:Arial;font-size:12px;text-transform:uppercase;"><a href="<?php echo base_url();?>desksite/<?php echo $item['busi_id'];?>" target="_blank" class="style19"><?php echo $item['company_name']; ?></a></span></div>
						<div id="wb_Text11" style="position:absolute;left:261px;top:484px;width:40px;height:14px;z-index:397;text-align:left;">
						<span style="color:#FF6347;font-family:Arial;font-size:11px;"><strong>% <?php echo $item['rank'];?></strong></span></div>
						<div id="wb_Image107" style="position:absolute;left:106px;top:446px;width:25px;height:25px;z-index:398;">
							<?php if(!empty($tsuserid) && $item['incommunity'] > 0 && $item['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > 
					        <?php }else {?>
					        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15">
					        <?php } ?>
						</div>
						<div id="wb_Image5" style="position:absolute;left:133px;top:446px;width:34px;height:26px;z-index:399;">
							<?php if($item['plan_id'] > 1 && $item['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="width:34px;height:26px;"> <?php } else {?>
					    	<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;width:34px;height:26px;" >
					    	<?php }?>
				    	</div>
						<div id="wb_Image18" style="position:absolute;left:170px;top:447px;width:25px;height:25px;z-index:400;">
							<?php if($item['plan_id'] > 1 && $item['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
					        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
					        <?php }?>
						</div>
						<div id="wb_Image22" style="position:absolute;left:202px;top:447px;width:25px;height:25px;z-index:401;">
							<?php if($item['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
							<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15">
							<?php }?>
						</div>
					
					<div id="wb_Text7" class="style-2">
					     <div id="wb_Image10" class="img-style">
					        
				        </div>
					    <div id="wb_Image2" class="img-style">
					    	
				        </div>
					    <div id="wb_Image1" class="img-style">
					        
				        </div>
				        <div id="wb_Image1" class="img-style">
							
				        </div>
					</div>
					
					</div>
				</div>
		<?php if (($i % 3)==2  || ($i+1) == count($favoritecatalouge)){?>
			</div>
		<?php  } $i++; ?>
<?php }?>	
