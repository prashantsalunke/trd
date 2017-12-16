				<div class="row" style="width:100%;margin:0px;">
					<?php foreach($Files as $file){?>
					<div class="col-md-3" style="height:100px;">
						 <a href="<?php echo asset_url().$file['file']?>" download="<?php echo asset_url().$file['file']?>" style="text-decoration:none;">
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
			   			 <br> 
			   			 <div style="padding-rop:5px;">
			   			 	<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><strong><?php echo substr($file['dispaly_name'],0,25);?><?php if(strlen($file['dispaly_name']) > 25) {?>..<?php } ?></strong></span>
			   			 </div>
		   			 </div>
					<?php } ?>
					<?php if(count($Files) <= 0) { ?>
						<div style="padding:100px;font-size:14px;">
							The seller has no files to share
						</div>
					<?php } ?>
				</div>