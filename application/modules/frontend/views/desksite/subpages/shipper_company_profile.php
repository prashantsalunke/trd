					<?php 
					foreach($Company as $company){?>
					 
				            <p class="box1font2"><strong><?php echo $company['company_name']?> </strong></p>
				            <div>
				            	<img src="<?php echo asset_url().$company['business_logo']; ?>" id="Shape7" alt="" style="width:112px;height:116px;">
				            </div>
				            <br>
				            <div class="inline">
				                <p class="be2">
				                	<span style="color:#000000;font-family:Arial;font-size:12px;">Business Type : </span>
				                	<span style="color:#696969;font-family:Arial;font-size:12px;"><?php echo " ".$company['sub_category'];?></span>
				                </p>
				            </div>
				            <p class="be2">Main Services :</p>
				            <?php 
				            	$mservices = "";
				            	foreach ($mainservices as $mservice) {
				            		if($mservices == "") {
				            			$mservices = $mservice['name'];
				            		} else {
				            			$mservices = $mservices.", ".$mservice['name'];
				            		}
				            	}
				            	
				            	$sservices = "";
				            	foreach ($specialservices as $mservice) {
				            		if($sservices == "") {
				            			$sservices = $mservice['name'];
				            		} else {
				            			$sservices = $sservices.", ".$mservice['name'];
				            		}
				            	}
				            		
				            ?>
				            <p class="be1">  <?php echo substr($mservices, 0, 150);?> </p>
				            <p class="be2">Special Services :</p>
				            <p class="be1">  <?php echo substr($sservices, 0, 150);?> </p>
				            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div class="inline">
				                <p class="be2">Year of Establish: </p>
				                <p class="be1"> <?php echo " ".$company['year_of_registration'];?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Annual revenue: </p>
				                <p class="be1"> <?php echo "$".$company['annual_trad_volume'];?> Millions</p>
				            </div>
				            <div class="inline">
				                <p class="be2">Employees : </p>
				                <p class="be1"> <?php echo " ".$company['company_size'];?></p>
				            </div>
				            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div>
				            	<p class="be2">Contact Person : </p>
				                <p class="name"><?php echo $company['name'];?></p>
				                <img src="<?php echo asset_url().$company['profile_image']; ?>" id="Image63" alt="" class="img66">
			                </div>
				      
				    <div class="bg3 inline">
				    	<div class="row">
					        <div class="col-sm-2">Views</div>
					        <div class="col-sm-4 count"><?php echo $company['visit'];?></div>
					        <div class="col-sm-2">Likes</div>
					        <div class="col-sm-4 count"><?php echo $company['likes'];?></div>
				        </div>
				    </div>
					<?php } ?>