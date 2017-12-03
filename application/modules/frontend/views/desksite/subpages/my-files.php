					<?php foreach($Files as $file){?>
					<div class="col-md-4">
						 <a href="<?php echo asset_url().$file['file']?>" download="<?php echo asset_url().$file['file']?>">
							 <?php if($file['file_type'] == "pdf") { ?>
								<img src="<?php echo asset_url();?>images/pdfimg.png" id="" alt="<?php echo $file['dispaly_name'];?>" style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "word") { ?>
								<img src="<?php echo asset_url();?>images/word.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "image") { ?>
								<img src="<?php echo asset_url();?>images/imagicon.jpeg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "excel") { ?>
								<img src="<?php echo asset_url();?>images/excel.jpg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "ppt") { ?>
								<img src="<?php echo asset_url();?>images/ppt.jpg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "text") { ?>
								<img src="<?php echo asset_url();?>images/txtfile.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "zip") { ?>
								<img src="<?php echo asset_url();?>images/zipfile.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } ?>
			   			 </a>
			   			 <br> <span style="color:#4B4B4B;font-family:Arial;font-size:13px;"><strong><?php echo substr($file['dispaly_name'],0,7);?><?php if(strlen($file['dispaly_name']) > 7) {?>..<?php } ?></strong></span>
		   			 </div>
			          
					<?php } ?>