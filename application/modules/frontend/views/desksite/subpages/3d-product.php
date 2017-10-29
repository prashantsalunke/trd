					<?php 
					$i =0;
					foreach($Products as $product){
					$i++;
						?>
						<div class="item <?php if($i==1){ echo 'active'; }?>">
						     <p class="c20">
					        	<a href="#" class="style16" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500);ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');ShowObject('Layer_products', 0);ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');return false;">Future Car With Battery</a></p>
					        <p class="c14"><?php echo $product['name']; ?></p>
					        <img src="<?php echo asset_url().$product['main_image']; ?>images/img0463.png" id="Shape8" alt="" style="width:321px;height:335px;">
					        <p class="c16">USD : <?php echo $product['unit_price'];?></p>
					        <p class="c14">&nbsp; Min. Order: <?php echo $product['quantity'].' '.$product['unit'];?> </p>
						 </div>
					<?php } ?>