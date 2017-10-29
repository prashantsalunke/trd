					<?php foreach($Posts as $post){
						$converted = date('d M Y h.i.s A', strtotime($post['created_date']));
						
						$posted =  date("j M", strtotime($converted));
						?>
					
						<p class="s8"><strong> Posted On <?php echo $posted;?></strong></p>
						<div class="box2" id="post" style="height: 497px;">
				           
						<div class="row left">
				                <p class="s7"><strong><?php echo $post['title'];?></strong></p>
				                <br>
				                <div class="col-md-6 col-md-6 ">
				                    <a href="images/babytoy1.jpg" data-rel="PhotoGallery8" title="babytoy1" rel="PhotoGallery8">
									<img alt="babytoy1" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image1']; ?>" title="babytoy1" class="imgscree">
									</a>
				                </div>
				                <div class="col-md-6 col-md-6">
				                    <a href="images/babytoy1.jpg" data-rel="PhotoGallery8" title="babytoy1" rel="PhotoGallery8">
									<img alt="babytoy1" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image2']; ?>" title="babytoy1" class="imgscree">
									</a>
				                </div>
				                <div class="col-md-6 col-md-6">
				                    <a href="images/babytoy1.jpg" data-rel="PhotoGallery8" title="babytoy1" rel="PhotoGallery8">
									<img alt="babytoy1" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image3']; ?>" title="babytoy1" class="imgscree">
									</a>
				                </div>
				                <div class="col-md-6 col-md-6">
				                    <a href="images/babytoy1.jpg" data-rel="PhotoGallery8" title="babytoy1" rel="PhotoGallery8">
									<img alt="babytoy1" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image4']; ?>" title="babytoy1" class="imgscree">
									</a>
				                </div>
				            </div>
				            <p style="color:#2D2D2D;" class="left">"We are thrilled that both the Jaguar and Land Rover brands continue to rank high in the esteemed J.D. Power APEAL study," says Joe Eberhardt, President &amp; CEO, Jaguar Land Rover North America, LLC. "To have our Range Rover flagship vehicle win Large Premium SUV for the fifth* time is especially pleasing and exemplifies our continued commitment to manufacturing desirable cars that meet customers’ needs.”</p>
				         </div>
				        
					<?php } ?>