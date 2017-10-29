					<?php foreach($Files as $file){?>
					<div class="col-md-4">
						 <a href="<?php echo asset_url().$file['file']?>" download="<?php echo asset_url().$file['file']?>">
							 <img src="<?php echo asset_url(); ?>images/<?php echo $file['file_type']?>.png" id="Image142" alt="" >
				   			<br> <?php echo $file['dispaly_name'];?>
			   			 </a>
		   			 </div>
			          
					<?php } ?>