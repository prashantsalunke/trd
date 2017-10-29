	<div class="container">
			<div class="row">
			<div class="col-md-12"><p><?php  echo $productList[0]['subproduct'];  ?></p></div>
			<div class="col-md-12"><h3><?php  echo $productList[0]['subproduct'];  ?></h3></div>
			</div>
			<div class="row center ">
				<?php
				
				foreach ($productList as $item) {?>
					
						<div class="col-md-4">
							<div class="panel panel-default product-box">
							    <div class="panel-body center">
							    	<div class="row">
							    		<h6><a href="javascript:productDetail(<?php echo $item['id'];?>);" target="_self"><?php echo $item['name']?></a></h6>
						    		</div>
							    	<div class="row">
								    	<p><?php echo substr($item['description'],0,100);?> ...</p>
								    	<a href="javascript:productDetail(<?php echo $item['id'];?>);"><img src="<?php echo asset_url().$item['main_image'];?>" width="300px" width="250px" class="img-responsive" /></a>
							    		<p><span class="grey">USD</span> <span class="price"><?php echo $item['unit_price'];?></span></p>
					    				<p>Min. Order: <?php echo $item['quantity'].' '.$item['unit'];?></p>
					    				<p>Likes: <i class="fa fa-thumbs-up"></i> <?php echo $item['likes'];?></p>
				    				</div>
						    	</div>
					    	</div>
					    </div>
						
					
				<?php }?>
			</div>
		</div>
