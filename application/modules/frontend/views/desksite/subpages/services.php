<style>
a.service-pills {
	background-color:#f2f2f2;
	color:#555;
	text-align:center;
}
a.service-pills:hover {
	background-color:#1d83e6 !important;
	color:#212121;
}
a.service-pills-hover {
	background-color:#1d83e6;
	color:#fff;
}
a.service-pills-hover:hover {
	background-color:#1d83e6;
	color:#fff;
}
.nav-pills > li > a.service-pills,.nav-pills > li > a.service-pills-hover {
	border-radius:0px;
}
.nav-pills > li.active > a.service-pills, .nav-pills > li.active > a.service-pills:hover, .nav-pills > li.active > a.service-pills:focus {
    color: #212121;
    background-color: #1d83e6 !important;
    opacity:1;
}
.firstmain {
	width:100%;
	margin-left:0px !important;
	margin-bottom:3px;
}
#Layer27 {
    background-color: #FFFFFF;
    border: 2px #FFFFFF solid;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 3px 2px 5px #000000;
    -webkit-box-shadow: 3px 2px 5px #000000;
    box-shadow: 3px 2px 5px #000000;
}
</style>
<div class="row">
	<div class="col-sm-4" style="padding-top:80px;">
		<ul class="nav nav-pills">
			<li class="firstmain">
				<a class="service-pills-hover" href="#"><img src="<?php echo asset_url();?>images/MENUICON.png" id="Image27" alt="" style="width:17px;"> <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">SERVICES MENU</span></a>
			</li>
		<?php 
			foreach($services as $key=>$service) { 
		?>
		   	<li class="firstmain <?php if($key == 0) { ?>active<?php } ?>">
		   		<a data-toggle="pill" href="#service-<?php echo $service['id'];?>" target="_self" class="service-pills"><?php echo $service['name'];?></a>
		   	</li>
		<?php } ?>
		</ul>
		
	</div>
	<div class="col-sm-8">
		<div class="tab-content" style="height: 566px;">
			<?php foreach($services as $key=>$service) { ?>
			<div id="service-<?php echo $service['id'];?>" class="tab-pane fade in <?php if($key > 0) {?>active<?php }?>">
				<div id="Layer27" style="position:absolute;overflow: scroll; text-align: left; width: 529px; height: 566px; z-index: 1354;">
					<div id="wb_Text45" style="width:351px;height:22px;z-index:1343;text-align:left;padding:15px 33px;">
						<span style="background-color:#FFFFFF;color:#1E90FF;font-family:Arial;font-size:19px;"><strong><?php echo $service['name'];?></strong></span>
					</div>
					<div id="wb_PhotoGallery10" style="width:425px;height:319px;">
					<table id="PhotoGallery10">
					   <tbody><tr>
					      <td class="image"><?php if(!empty($service['image1'])) { ?><a href="<?php echo asset_url();?><?php echo $service['image1'];?>" data-rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" class="img0 ui-draggable" rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" style="position: absolute; left: 53px; top: 152px; transform: rotate(-4deg);"><img alt="" id="PhotoGallery10_img0" src="<?php echo asset_url();?><?php echo $service['image1'];?>" style="width:208px;"></a><?php } ?></td>
					      <td class="image"><?php if(!empty($service['image2'])) { ?><a href="<?php echo asset_url();?><?php echo $service['image2'];?>" data-rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" class="img1 ui-draggable" rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" style="position: absolute; left: 36px; top: 81px; transform: rotate(0deg);"><img alt="" id="PhotoGallery10_img1" src="<?php echo asset_url();?><?php echo $service['image2'];?>" style="width:208px;"></a><?php } ?></td>
					   </tr>
					   <tr>
					      <td class="caption"></td>
					      <td class="caption"></td>
					   </tr>
					   <tr>
					      <td class="image"><?php if(!empty($service['image3'])) { ?><a href="<?php echo asset_url();?><?php echo $service['image3'];?>" data-rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" class="img2 ui-draggable" rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" style="position: absolute; left: 76px; top: 86px; transform: rotate(-3deg);"><img alt="" id="PhotoGallery10_img2" src="<?php echo asset_url();?><?php echo $service['image3'];?>" style="width:208px;"></a><?php } ?></td>
					      <td class="image"><?php if(!empty($service['image4'])) { ?><a href="<?php echo asset_url();?><?php echo $service['image4'];?>" data-rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" class="img3 ui-draggable" rel="prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]" style="position: absolute; left: 247.198px; top: 51.5781px; transform: rotate(-1deg); z-index: 251;"><img alt="" id="PhotoGallery10_img3" src="<?php echo asset_url();?><?php echo $service['image4'];?>" style="width:208px;"></a><?php } ?></td>
					   </tr>
					   <tr>
					      <td class="caption"></td>
					      <td class="caption"></td>
					   </tr>
					</tbody></table>
					</div>
					<div id="wb_Text44" style="position:absolute;top:310px;text-align:left;padding:0px 33px;">
						<span style="color:#2D2D2D;"><?php echo $service['description'];?> </span>
					</div>
				</div>		
			</div>
			<script>
			$("a[data-rel='prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]']").attr('rel', 'prettyPhoto_PhotoGallery10<?php echo $service['id'];?>[PhotoGallery10<?php echo $service['id'];?>]');
			$("a[rel^='prettyPhoto_PhotoGallery10<?php echo $service['id'];?>']").prettyPhoto({theme:'facebook',social_tools:false});
			</script>
			<?php } ?>
		</div>
	</div>
</div>
<script>
	$("#PhotoGallery10 a").each(function()
   	{
      $(this).css('position', 'absolute');
      $(this).css('left', '106px');
      $(this).css('top', '100px');
      xpos = Math.floor(Math.random()*213);
      ypos = Math.floor(Math.random()*160);
      rotation = Math.floor(Math.random()*15);
      if (Math.floor(Math.random()*11)>5) 
      {
         rotation = rotation * -1;
      }
      $(this).data('rotation', rotation);
      $(this).delay(1000).animate({top:ypos,left:xpos}).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
   });
   var zindex = 250;
   $("#PhotoGallery10 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
</script>