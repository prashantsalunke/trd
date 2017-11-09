<?php if (count ( $posts ) > 0 && $posts [0] ['id'] != '') {
	$exp_date = date('Y-m-d',strtotime('-7 days'));
	foreach ( $posts as $key=>$product ) {
?>
                
<div id="Layer3252" class="section11 spacier" onmouseenter="ShowObjectWithEffect('Layer8_<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer8_<?php echo $key;?>', 0);return false;">
	<div class="row" id="Layer4" style="background-color: #DCDCDC !important; border: 1px #C0C0C0 solid;">
		<div class="col-md-2 col-sm-12 grid center">
			<br>
			<p>Posted on</p>
			<p class="date"><?php echo date("d-M-Y", strtotime($product['create'])); ?></p>
			<input type="checkbox" id="delete_chk<?php echo $product['post_id'];?>" />
			<button type="button" id="Button4" class="m2" onclick="deleteMyPost(<?php echo $product['post_id'];?>);">Delete</button>
			<div style="padding-top:5px;">
				<span style="color:#FF0000;font-family:Arial;font-size:11px;"><?php echo floor((7*60*60*24-(time() - strtotime($product['create']))) / (60 * 60 * 24));?> Days Remain </span>
			</div>
		</div>
		<div class="col-md-7 col-sm-12 space1" style="background-color:#fff;height: 174px;">
			<div id="wb_Text8" class="section3">
				<span><strong class="font1"><a href="buyer_profile.html" target="_blank" class="style5"><?php echo $product['title'];?></a></strong>
				</span>
				<p class="font5"><?php echo substr($product['stockdesc'],0,265);?> <?php if(strlen($product['stockdesc']) > 265) { ?>...<?php } ?></p>
				<div class="inline pp">
					<span class="usd y" style="background-color: #FFA500;">&nbsp; USD <?php echo $product['stockprice'];?>&nbsp;&nbsp;&nbsp; </span>
					<span class="minorder g">&nbsp; Min. Order: <?php echo $product['stockqty'];?>&nbsp;&nbsp;&nbsp; </span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<span style="color:#303030;font-family:Georgia;font-size:12px;">
						Boosted By: <?php echo $product['contact_prefix'].' '.$product['contact_name'];?>
					</span><br>
					<span style="color:#303030;font-family:Georgia;font-size:12px;">
						<strong>
							<?php if($tscategory_id == 1) { ?>
							<a href="<?php echo base_url();?>seller/website/<?php echo $product['busi_id'];?>" target="_blank" class="style5">
							<?php } else { ?>
							<a href="<?php echo base_url();?>shipper/website/<?php echo $product['busi_id'];?>" target="_blank" class="style5">
							<?php } ?>
								<?php echo $product['company_name'];?>
							</a>
						</strong>
					</span>
				</div>
				<div class="col-sm-4 center"></div>
			</div>
			<div id="Layer5_<?php echo $key;?>" class="section10 row" style="background-color:#fff;" onmouseenter="ShowObject('Layer8_<?php echo $key;?>', 0);">
				<div class="col-md-3">
					<?php if(!empty($product['image1'])) { ?>
					<div style="padding-top:15px;">
						<img src="<?php echo asset_url(); ?><?php echo $product['image1'];?>" id="Image44" alt="" class="img191" style="width:190px;max-height:150px;">
					</div>
					<?php } ?>
				</div>
				<div class="col-md-3">
					<?php if(!empty($product['image2'])) { ?>
					<div style="padding-top:15px;">
						<img src="<?php echo asset_url(); ?><?php echo $product['image2'];?>" id="Image44" alt="" class="img191" style="width:190px;max-height:150px;">
					</div>
					<?php } ?>
				</div>
				<div class="col-md-3">
					<?php if(!empty($product['image3'])) { ?>
					<div style="padding-top:15px;">
						<img src="<?php echo asset_url(); ?><?php echo $product['image3'];?>" id="Image44" alt="" class="img191" style="width:190px;max-height:150px;">
					</div>
					<?php } ?>
				</div>
				<div class="col-md-3">
					<div id="RollOver6" class="box4">
						<button type="button" id="Button4" class="mj5" onclick="ShowObject('Layer5_<?php echo $key;?>', 0);ShowObject('Layer8_<?php echo $key;?>', 0);return false;">close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12" style="background-color:#fff;">
			<div id="Layer8_<?php echo $key;?>" class="section9" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;" style="visibility:hidden;background-color:#fff;">
				<div id="wb_Shape1" class="stylebox">
					<a href="#" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;">
						<img src="<?php echo asset_url();?>images/img0070.png" id="Shape1" alt="" style="width: 11px; height: 48px;">
					</a>
				</div>
			</div>
			<div id="Layer7" class="">
				<img src="<?php echo asset_url(); ?><?php echo $product['image1'];?>" class="imgresponsive img211">
			</div>
		</div>
	</div>
</div>
<?php } }  else { ?>
<div class="row">
	<h4 class="center">No Posts Added!</h4>
</div>
 <?php } ?>