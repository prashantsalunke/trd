					<?php 
					foreach($Company as $company){?>
					 
				            <p class="box1font2"><strong><?php echo $company['company_name']?> </strong></p>
				            	<img src="<?php echo asset_url().$company['business_logo']; ?>" id="Shape7" alt="" style="width:112px;height:116px;">
				            <p class="left style-font-1">Rank</p>
				            <div class="progress">
				                <div class="progress-bar orange1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $company['rank']; ?>%">
				                </div>
				            </div>
				            <p class="font121">%<?php echo $company['rank']; ?></p>
				            <div class="inline">
				                <p class="be2">Business Type : </p>
				                <p class="be1"> <?php echo " ".$company['sub_category'];?></p>
				            </div>
				            <p class="be2">Main Products :</p>
				            <p class="be1">  <?php echo substr($company['main_product'], 0, 150);?> </p>
				            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div class="inline">
				                <p class="be2">Year of Establish: </p>
				                <p class="be1"> <?php echo " ".$company['year_of_registration'];?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Annual revenu: </p>
				                <p class="be1"> <?php echo "$".$company['annual_trad_volume'];?> Millions</p>
				            </div>
				            <div class="inline">
				                <p class="be2">Employees : </p>
				                <p class="be1"> <?php echo " ".$company['company_size'];?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Factory Size : </p>
				                <p class="be1"> Above <?php echo " ".$company['fact_size'];?> Square Meter</p>
				            </div>
				            <div class="inline">
				                <p class="be2">Production Lines : </p>
				                <p class="be1"><?php echo "$".$company['no_of_production_line'];?></p>
				            </div>
				            <p class="be2">R&D Capacity : 
				            <span class="be1"><?php foreach ($user_rnd as $row) { ?>
	  							<?php if($row['rnd_type_id'] == 4) { ?>
	  							<?php echo $company['rnd_capacity'];?>
	  							<?php } else { ?>
	  							<?php echo $row['name']?>&nbsp;
	  							<?php } ?>
	  							<?php } ?>
	  						</span>
		  					</p>
				            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div>
				            	<p class="be2">Contact Person : </p>
				                <p class="name"><?php echo $company['name'];?></p>
				                <img src="<?php echo asset_url().$company['profile_image']; ?>" id="Image63" alt="" class="img66">
			                </div>
				      
				    <div class="bg3 inline">
				        <p>View</p>
				        <p class="count"><?php echo $company['visit'];?></p>
				        <p>Like</p>
				        <p class="count"><?php echo $company['likes'];?></p>
				    </div>
					<?php } ?>