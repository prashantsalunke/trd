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
	height: 450px;
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
	<div class="container">
		<?php if(count($productList) > 0) { ?>
		<div class="row" style="padding:25px 0px;margin:5px;">
			<div class="col-md-12 text-left"><span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><?php  echo $productList[0]['mainproduct'];  ?></span></div>
			<div class="col-md-12 text-left" style="margin-left:20px;"><img src="<?php echo asset_url();?>images/page_location.png" id="Image102" alt="" style="width:16px;"> <span style="color:#4B4B4B;font-family:Arial;font-size:17px;"><strong><?php  echo $productList[0]['subproduct'];  ?></strong></span></div>
		</div>
		<div class="row center " style="margin:0px;">
			<?php
			foreach ($productList as $item) {?>
			<div class="col-md-4">
				<div class="panel panel-default product-box" style="height:485px;">
				    <div class="panel-body center">
				    	<div class="row">
				    		<h6><a href="javascript:productDetail(<?php echo $item['id'];?>);" target="_self"><?php echo $item['name']?></a></h6>
			    		</div>
				    	<div class="row" style="padding:0px 30px;">
					    	<div style="padding-bottom:15px;"><?php echo substr($item['description'],0,90);?> <?php if(strlen($item['description']) > 90) { ?>...<?php } ?></div>
					    	<a href="javascript:productDetail(<?php echo $item['id'];?>);"><img src="<?php echo asset_url().$item['main_image'];?>" width="300px" width="250px" class="img-responsive" /></a>
					    	<br>
				    		<div><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">USD</span>&nbsp;&nbsp; <span style="color:#3C3C3C;font-family:Arial;font-size:24px;"><?php echo $item['unit_price'];?></span></div>
		    				<div><span style="background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:13px;">Min. Order: <?php echo $item['quantity'].' '.$item['unit'];?> </span></div>
		    				<div><span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span> <i class="fa fa-thumbs-up" style="color:#fa5036;"></i> <span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo $item['likes'];?></span></div>
	    				</div>
			    	</div>
		    	</div>
		    </div>
			<?php }?>
		</div>
		<?php } else { ?>
			<h4>Opps there are no products for this category.</h4>
		<?php } ?>
	</div>
