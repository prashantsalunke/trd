					<?php foreach($Company as $company){?>
			            <p class="adfont1"><strong>Products Guarantee</strong></p>
			            <div class="inline1 center">
			                <p class="adfont2"><strong>Period</strong> &nbsp;&nbsp;&nbsp;<?php echo $company['gaurantee_period'];?> Months</p>
			            </div>
			            <p class="adfont2"><strong>Terms</strong></p>
			            <p class="adfont2"><?php echo $company['gaurantee_term'];?></p>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
			            <br>
			            <p class="adfont1"><strong>Products Certificates</strong></p>
			            <p class="adfont2"><strong>The Seller is able to issues the following certificates:</strong></p>
			            <p class="adfont2"><?php echo $company['product_certs'];?></p>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
			            <br>
			            <p class="adfont1"><strong>Export & Shipping</strong></p>
			            <p class="adfont2"><strong><?php if(!empty($company['export_lic_number'])){?>The Seller has an export license and able to export & ship orders under his company license<?php }?></strong></p>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
					<?php } ?>