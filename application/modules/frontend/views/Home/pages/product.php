<?php
foreach($productdetail as $productBox) {?>
<div id="Layer18" class="class3">
	<div id="wb_Text63" class="class4">
		<span class="class-font1"><strong><?php echo $productBox['company_country'];?> | <?php echo $productBox['company_province'];?></strong></span>
	</div>
	<div id="wb_Text64" class="class5">&nbsp;</div>
	<div id="wb_Image41" class="class6">
		<img src="<?php echo asset_url(); ?>images/Germany.png" id="Image41" alt="">
	</div>
	<div id="wb_MediaPlayer8" class="class7" style="padding: 20px;">
		<img src="<?php echo asset_url().''.$productBox['main_image']; ?>" width="250px" height="250px" controls="controls">
	</div>
</div>
<div id="wb_Text65" class="class8">
	<span class="class9"><strong><?php echo $productBox['product_name']; ?><br></strong></span>
</div>
<!-- <div id="Layer30" class="class10">
	<div id="wb_Text66" class="class11">
		<span class="class12"><strong>By</strong></span>
	</div>
	<div id="wb_Text67" class="class13">
		<span class="class14"><?php ?>&nbsp;&nbsp; </span>
	</div>
	<div id="wb_Text90" class="class15">
		<span class="class16"><?php echo $productBox['plan']; ?> </span>
	</div>
	<div id="wb_Text91" class="class17">
		<span class="class18"><?php echo $productBox['company_name']; ?> </span>
	</div>
	<div id="wb_Text92" class="class19">
		<span class="class20"><?php echo substr($productBox['description'], '0', '200');?><br>
		</span>
	</div>
	<div id="wb_Image20" class="class21">
		<?php if($productBox['is_logo_verified'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php }?>
		
	</div>
	<div id="wb_Image21" class="class22">
		 <?php if($productBox['community'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > <?php }?>
	</div>
</div>  -->
<div id="wb_Image43" class="class23">
                <a href="#" onclick="ShowObject('Layer_details2', 0);StopAudio('MediaPlayer7');return false;"><img src="<?php echo asset_url(); ?>images/close.png" id="Image43" alt=""></a>
            </div>
<div id="RollOver24" class="class24" style="position:absolute;left:53px;top:521px;overflow:hidden;width:35px;height:35px;z-index:341">
	<a href="<?php echo base_url();?>products/details/<?php echo $productBox['id'];?>" target="_blank"> 
		<img class="hover" alt="" title="View details" src="<?php echo asset_url(); ?>images/viewroll.png"> 
		<span><img alt="" title="View details" src="<?php echo asset_url(); ?>images/view2.png"></span>
	</a>
</div>
<div id="RollOver25" class="class25" style="position:absolute;left:111px;top:521px;overflow:hidden;width:35px;height:35px;z-index:342">
	<a href="<?php echo base_url();?>products"> 
		<img class="hover" alt="" title="Find the same product" src="<?php echo asset_url(); ?>images/from-same-userroll.png"> 
		<span><img alt="" title="Find the same product" src="<?php echo asset_url(); ?>images/from-same-user.png"></span>
	</a>
</div>
<div id="RollOver26" style="position:absolute;left:169px;top:521px;overflow:hidden;width:35px;height:35px;z-index:343">
	<a href="javascript:addToMyFavourite(<?php echo $productBox['id'];?>,4);" target="_blank"> <img class="hover" alt="" title="Add to watch later" src="<?php echo asset_url(); ?>images/addtofavroll.png"> 
	<span> <img alt="" title="Add to watch later" src="<?php echo asset_url(); ?>images/addtofav.png"></span>
	</a>
</div>
<div id="RollOver27" class="" style="position:absolute;left:227px;top:521px;overflow:hidden;width:35px;height:35px;z-index:344">
	<a href="#" target="_self">
	 <img class="hover" alt="" title="Add to my cart" src="<?php echo asset_url(); ?>images/addtocartroll.png"> 
	 <span><img alt="" title="Add to my cart" src="<?php echo asset_url(); ?>images/addtocart.png"></span>
	</a>
</div>
<div id="wb_Text93" class="class28">
	<span class="class29">Likes</span>
</div>
<div id="wb_Image44" class="class30">
	<img src="<?php echo asset_url(); ?>images/items_like0.png"
		id="Image44" alt="" class="img25">
</div>
<div id="wb_Text94" class="class31">
	<span class="class32"><?php echo $productBox['likes']; ?></span>
</div>
<?php }?>



