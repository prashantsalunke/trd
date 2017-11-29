			<style>
			.product3d >.panel-default {
			    background-color: #FFFFFF;
			    border: 1px #D3D3D3 solid;
			}
			.product3d >.panel{
				    margin-bottom: 20px;
				    background-color: #fff;
				    border: 1px #D3D3D3 solid;
				    border-radius: 0px;
				    
				}
				.product3d >h4 >span >a:hover{
					color:#1E90FF;
					font-family:Arial;
					font-size:16px;
				}
				
				.wb_Text495{
					position:absolute;
					left:19px;
					top:13px;
					width:258px;
					height:18px;
					text-align:center;
					z-index:220;
				}
				.wb_Text496{
					position:absolute;
					left:22px;
					top:35px;
					width:254px;
					height:30px;
					text-align:center;
					z-index:221;
				}
				.wb_Text497{
					position:absolute;
					left:56px;
					top:327px;
					width:176px;
					height:27px;
					text-align:center;
					z-index:222;
				}
				span.usd {
					color:#A9A9A9;
					font-family:Arial;
					font-size:13px;
				}
				span.desc{
					color:#3C3C3C;font-family:Arial;font-size:12px;
				}
				span.product_name{
					color:#1E90FF;
					font-family:Arial;
					font-size:16px;
				}
				.wb_Text498{
					position:absolute;left:70px;top:356px;width:161px;height:16px;text-align:center;z-index:223;
				}
				.min-order{
					background-color:#FFFFFF;
					color:#3C3C3C;
					font-family:Arial;
					font-size:13px;
				}
				.wb_Shape75{
					position:absolute;left:43px;top:77px;width:215px;height:250px;z-index:224;
				}
				.wb_Text2{
					position:absolute;left:161px;top:379px;width:63px;height:14px;z-index:225;text-align:left;
				}
				.wb_Image1{
					position:absolute;left:137px;top:373px;width:25px;height:25px;z-index:226;
				}
				.wb_Text1{
					position:absolute;left:113px;top:379px;width:29px;height:14px;z-index:227;text-align:left;
				}
				span.like-text{
					color:#3C3C3C;font-family:Arial;font-size:11px;
				}
				span.like-count{
				color:#3C3C3C;font-family:Arial;font-size:11px;
				}
				.Layer228{
					/*position:absolute; */
					text-align:center;
					top:0px;
					width:294px;
					height:406px;
					z-index:255;
				    background: #fff;
   					margin-bottom: 30px;
   					padding-top:5px;
				}
			</style>
			<div id="Layer2_Container">
			<div class="col-sm-12" style="padding:0px;">
   					 <h1 class="sfont1">REAL PRODUCTS IN 3D</h1><span style="color:#696969;font-family:Arial;font-size:9.3px;">Click and hold the products, then swipe right or left</span>
			   		 <p class="sfont2">Step into a new dimension of E-commerce, search products with rich information, live details and much more..</p>
			   		 <br>
			    </div>
				<?php 
					$i = 0;
					foreach ($products as $item) {?>
						<?php if (($i % 4)==0){?>
							<div class="row">
							<?php }?>
								<div class="col-md-3">
									<div id="Layer228" class="Layer228" onmouseenter="ShowObjectWithEffect('Layer105', 1, 'fade', 500);return false;" onmouseleave="ShowObjectWithEffect('Layer105', 0, 'fade', 500);return false;">
										<div id="wb_Text495" style="">
										<span class="product_name"style="color: #1E90FF; font-family: Arial; font-size: 14px;"><a href="<?php echo base_url();?>products/details/<?php echo $item['id']; ?>" target="_blank" class="style16"><?php echo $item['name']; ?></a></span></div>
										<div id="wb_Text496" class="wb_Text496" style="">
										<span class="desc" style=""><?php echo substr($item['description'],0,60);?> ...</span></div>
										<div id="wb_Text497" class="wb_Text497" style="">
										<span class="usd" style="">USD</span><span style="color:#C0C0C0;font-family:Arial;font-size:13px;"> </span><span style="color:#3C3C3C;font-family:Arial;font-size:24px;"><?php echo $item['unit_price'];?></span></div>
										<div id="wb_Text498" class="wb_Text498" style="">
										<span class="min-order" style="">Min. Order: <?php echo $item['quantity'].' '.$item['unit'];?>&nbsp;&nbsp;&nbsp; </span></div>
										<div id="wb_Shape75" class="wb_Shape75" style="">
										<img src="<?php echo asset_url().$item['main_image']?>" id="Shape75" alt="" style="width:215px;height:250px;"></div>
										<div id="wb_Text2"  class ="wb_Text2" >
										<span style=""  class="like-count"><?php echo $item['likes'];?></span></div>
										<div id="wb_Image1" class ="wb_Image1" style="position:absolute;left:137px;top:373px;width:25px;height:25px;z-index:226;">
										<img src="<?php echo asset_url();?>images/items_like0.png" id="Image1" alt="" width="25px" height="25px"></div>
										<div id="wb_Text1" class="wb_Text1" >
										<span class="like-text" style="">Likes</span></div>
									</div>
								</div>
								<?php if (($i % 4)==3){?>
							</div>
					<?php  } $i++; ?>
				<?php }?>
			</div>
			