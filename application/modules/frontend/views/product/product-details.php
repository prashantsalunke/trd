<style>

.wb_Image45
{
position: absolute; left: 865px; top: 0px; width: 28px; height: 28px; z-index: 82;
}
.wb_Image52{
	position: absolute; left: 905px; top: 0px; width: 28px; height: 28px; z-index: 83;
}
img.sm-img{
margin : 10px;
verical-align:middle;
}
.v-middle{
verical-align:middle;
}
.b-gray{
background:grey;
}
p.blue,h1.blue,h2.blue,h3.blue,h4.blue,h5.blue,h6.blue {
color: blue;
}
img.sm-image-border{
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    text-align:center;
    padding:8px;
    width: 80px;
    margin-bottom: 4px;
    margin-top:4px;
}
.text-grey{
	color : #696969;
}
.available-colors{
    border: 2px solid #c1aeae;
    height: 20px;
    -moz-border-radius:75px;
    -webkit-border-radius: 75px;
    width: 20px;
    float: left;
    margin-right:10px;
}
.share-icons a{
	color:#fa5035;
	font-size:26px;
	font-weight:bold;
	float:left;
	margin-right:26px;
}
.share-icons a:hover{
	color:#999;
	font-size:26px;
	font-weight:bold;
	float:left;
	margin-right:26px; 
}
.like{
color: #fa5035;
font-size: 14px;
}
.main-image{
	width: 368px;
    height: 333px;
    border-radius:10px;
}
.product-braedcrumbs{
font-size:14px;
}
.heading{
margin : 20px;
}
.flyr-img{
	width:100%;
}

#body {
    clear: both;
    margin: 0 auto;
    max-width: 1140px;
}
.center{
text-align:center;
}
.product-box{
	height: 406px;
	padding: 4px;
	line-height: 20px;
	background-color: #FFFFFF;
    border: 1px #D3D3D3 solid;
}
.product-box a{
	color: #1E90FF;
    font-family: Arial;
    font-size: 16px;
}
.grey{
  text-size:18px;
  weight:500;
  color:grey; 
}
.price{
  text-size:20px;
  weight:500;
}
pre {
	background: transparent;
    border: 0px;
    color: #3C3C3C;
    font-family: Arial;
    font-size: 13px;
    border-radius: 0px;
}
</style>
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/fancybox/jquery.fancybox-1.3.0.css">
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.easing-1.3.pack.js"></script> ​
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<div style="background-color:#EBECEE;">
<div id="body" style="padding-top: 15px;">
	<div class="container" id="product_details" class="b-gray">
	<?php foreach ($Productdetails as $product) {?>
		<div class="row" style="margin:0px;">
			<ol class="breadcrumb">
			  <li><a href="javascript:productBySeller(<?php echo $product['busi_id'];?>);"> <img src="<?php echo asset_url()?>images/img0235.png" id="Shape17" alt="" width="10px"> Same by this seller</a></li>
			  <li class="pull-right">
				<a href="javascript:window.location.reload()" >
					<img src="<?php echo asset_url();?>images/i_145.gif" class="pull-right" width="20px" alt="" title="Save as PDF">
				</a>
			 </li>
			 <li class="pull-right">
			 	<a href="javascript:window.print()">
					<img src="<?php echo asset_url()?>images/folder-print.png" class="pull-right" width="20px" alt="" title="Print this page">
				</a>
			 </li>
			</ol>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
		    <div class="col-md-7">
			   <div class="row"> 
			   		<div class="row">
			    		<p class="product-braedcrumbs" style="padding-left:30px;">
				    		<a href="<?php echo base_url();?>desksite">Desktop</a> 
					    	&gt; <a href="javascript:productListBySubCategory(<?php echo $product['subcategory_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subcategory']?></a> 
							&gt;<a href="javascript:productListByMainProduct(<?php echo $product['mainproduct_id'];?>,<?php echo $product['busi_id'];?>)"  > <?php echo $product['mainproduct']?></a>
							&gt; <a href="javascript:productListBySubProduct(<?php echo $product['subproduct_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subproduct']?> </a>&gt;
						</p>
			    	</div>
			    	<div class="row">&nbsp;</div>
			   		<div class="col-md-2 sm-image-border text-center">
				    	<div class="row">
				    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["main_image"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['main_image'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image1"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image1'];?>" class="sm-image-border" width="66px" alt="" />
			    			</a>
			    		</div>
			    		<div class="row">
				    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image2"];?>');return false;">
					    		<img src="<?php echo asset_url().''.$product['sub_image2'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image3"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image3'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image4"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image4'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
		    		</div>
				    <div class="col-md-10">
				    	<div class="row main-image">
			    			<img src="<?php echo asset_url().''.$product['main_image'];?>" id="Shapeview" class="img-responsive"  width="350" alt="" />	
				    	</div>
				    	<br><br><br>
				    	<div class="row">
			    			<div class="col-md-6"><p>Viewed  <?php echo $product['visit']; ?></p></div>	
			    			<div class="col-md-6"><p>Likes  <i class="fa fa-thumbs-up like" aria-hidden="true"></i> <?php echo $product['likes']; ?></p></div>
				    	</div>
					</div>
					
				</div>
		    </div>
		    <div class="col-md-5">
		    	<h3 class="blue"><img src="<?php echo asset_url();?>images/page_location.png" class="sm-img" alt=""><span><?php echo $product['name']; ?></span></h3>
		    	<p><?php echo substr($product['description'], 0, 150); ?> ...</p>
		    	<div class="row">&nbsp;</div>
		    	<p> <h6>Quick Specifications</h6><hr id="Line10" style="height: 1px; width: 357px; margin: 10px 0px;"/> </p>
		    	<div class="row">
		    		<div class="col-sm-4" ><p>Model Number</p></div>
		    		<div class="col-sm-8" ><p><?php echo $product['model_no']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Made In</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['country']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Brand</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['brand']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>US$ Price</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['unit_price']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Min. Order</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['quantity']; ?> <?php echo $product['unit']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Lead Time</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['lead_time']?> Days</p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" >Available Colors</div>
		    		<div class="col-md-8 " >
	    				<?php foreach($colors as $color) { ?>
		    				<span> <div class="available-colors" style="background: #<?php echo $color['color_code'];?>"></div></span>
	    				<?php } ?>
    				</div>
    			</div>
    			<div class="row" style="padding-top:10px;">
		    		<div class="col-md-4" ><p>Product CBM</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['cbm']?></p></div>
	    		</div>
    			<hr id="Line10" style="height: 1px; width: 357px; margin: 10px 0px;"/>
    			<div class="row">
		    		<div class="col-md-4" ><p>Port</p></div>
		    		<div class="col-md-8" ><p>Ningbo</p></div>
    			</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Accepted Payment</p></div>
		    		<div class="col-md-8" ><p>T/T, LC ...</p></div>
	    		</div>
	    		<div style="position:relative;">
	    			<div id="RollOver88" style="position:absolute;left:40px;top:10px;overflow:hidden;width:40px;height:40px;">
						<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
						<img class="hover" alt="" src="<?php echo asset_url();?>images/items_chat.png">
						<span><img alt="" src="<?php echo asset_url();?>images/items_chat0.png"></span>
						</a>
					</div>
	    			<div id="wb_Image68" style="position:absolute;left:291px;top:8px;width:41px;height:41px;">
						<a href="#" onclick="ShowObjectWithEffect('Layer223', 1, 'fade', 500);return false;">
							<img src="<?php echo asset_url();?>images/items_share0.png" id="Image68" alt="">
						</a>
					</div>
					<div id="RollOver14" style="position:absolute;left:244px;top:8px;overflow:hidden;width:41px;height:41px;z-index:177">
						<a href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')" target="_self">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/items_like.png">
							<span><img alt="" src="<?php echo asset_url();?>images/items_like0.png"></span>
						</a>
					</div>
					<div id="RollOver15" style="position:absolute;left:192px;top:9px;overflow:hidden;width:40px;height:40px;z-index:178">
						<a href="">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/items_cart.png">
							<span><img alt="" src="<?php echo asset_url();?>images/items_cart0.png"></span>
						</a>
					</div>
					<div id="RollOver36" style="position:absolute;left:140px;top:9px;overflow:hidden;width:40px;height:40px;z-index:179">
						<a href="">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/items_favorite.png">
							<span><img alt="" src="<?php echo asset_url();?>images/items_favorite0.png"></span>
						</a>
					</div>
					<div id="RollOver34" style="position:absolute;left:88px;top:8px;overflow:hidden;width:40px;height:40px;z-index:180">
						<a href="javascript:popupwnd('./item_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/items_inquiry.png">
							<span><img alt="" src="<?php echo asset_url();?>images/items_inquiry0.png"></span>
						</a>
					</div>
					<hr id="Line10" style="position:absolute;left:1px;top:7px;width:357px;height:1px;z-index:182;">
					<hr id="Line11" style="position:absolute;left:1px;top:47px;width:357px;height:1px;z-index:183;">
	    		</div>
	    		<br><br><br><br>
		    </div>
		  </div>
		</div>
		<div class="row" style="padding-left:43px;"><span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>About This Product</strong></span></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-10"><pre><?php echo $product['about']; ?></pre></div>
			  </div>
			  <br><br>
		  </div>
	  </div>
	  <div class="row" style="padding-left:43px;"><span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Product Description</strong></span></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-10"><pre><?php echo $product['description']; ?></pre></div>
			  </div>
			  <div class="row">
			  	<div class="col-md-12">
			  		<img src="<?php echo asset_url().''.$product['flyr_image1'];?>" class="flyr-img img-responsive" alt="">
				</div>
			  </div>
		  </div>
	  </div>
	  <div class="row" style="padding-left:43px;"><span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Product Specifications</strong></span></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-8">
				  	<?php foreach ($specifications as $specification) {?>
						<div class="col-md-12" style="padding:5px 0px;">
							<div class="col-sm-5"><span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $specification['spec_name']; ?></span></div> <div class="col-sm-7"><span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $specification['spec_value']; ?></span></div>
						</div>
					<?php }?>
				</div>
			  </div>
			  <br><br><br>
			  <div class="row">
			  	<div class="col-md-12">
			  		<img src="<?php echo asset_url().''.$product['flyr_image2'];?>" class="flyr-img img-responsive" alt="">
				</div>
			  </div>
		  </div>
	  </div>
	<?php } ?>
</div>
<div id="products">
	<div id="Layer_products_Container">
	</div>
</div>
</div> 
</div>

<script>
function openVideo(id) {
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		$("#Layer_details_Container").html(data);
		ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	},'html');
}
function openProduct(id) {
	//alert('hello');
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
		$("#Layer_details_Container2").html(data);
		ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');
	},'html');
}
function showBlackHorseMember() {
	$.get(base_url+"seller/blackhorse/memberlist",{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function showCommunityMember(id) {
	$.get(base_url+"seller/community/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function hideCommunityMember(id) {
	$.get(base_url+"seller/hidecommunity/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function productBySeller(id) {
	$.get(base_url+"seller/product/"+id,{},function(data) {
		$("#Layer_products_Container").html(data);
		
	    $('#product_details').hide("slide", {direction: "left" }, 500, 'swing'); //"slide", {direction: "left" }, 1000);
	    $('#products').show("slide", { direction: "right" }, 500, 'swing');
		
// 		ShowObjectWithEffect('product_details', 0, 'slideleft', 500, 'swing');
// 		ShowObjectWithEffect('products', 1, 'slideright', 500, 'swing');*/
	},'html');
}
function productDetail(id) {
	$.get(base_url+"product/detail/"+id,{},function(data) {
		$("#product_details").html(data);
		$('#products').hide("slide", { direction: "right" }, 500, 'swing');
		$('#product_details').show("slide", {direction: "left" }, 700, 'swing'); //"slide", {direction: "left" }, 1000);
	    
	},'html');
}
function productListBySubCategory(id, busi_id) {
	$.get(base_url+"product/subcategory/"+id+"/"+busi_id,{},function(data) {
		$("#product_details").html(data);
		$('#products').hide("slide", { direction: "left" }, 500, 'swing');
		$('#product_details').show("slide", {direction: "left" }, 700, 'swing');
	},'html');
}
function productListByMainProduct(id, busi_id) {
	$.get(base_url+"product/mainproduct/"+id+"/"+busi_id,{},function(data) {
		$("#product_details").html(data);
		$('#products').hide("slide", { direction: "left" }, 500, 'swing');
		$('#product_details').show("slide", {direction: "left" }, 700, 'swing');
	},'html');
}
function productListBySubProduct(id, busi_id) {
	$.get(base_url+"product/subproduct/"+id+"/"+busi_id,{},function(data) {
		$("#product_details").html(data);
		$('#products').hide("slide", { direction: "left" }, 300, 'swing');
		$('#product_details').show("slide", {direction: "left" }, 500, 'swing');
	},'html');
}

</script>
