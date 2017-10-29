					
					 
			            <table id="PhotoGallery4">
			                <tbody>
			                	<tr>
			                	<?php 
			                	$i =1;
			                	foreach($Certificate as $certificate){
			                		$i++;
			                		?>
			                    <?php if($i == 1){?> <tr><?php }?>
			                        <td class="image">
			                        	<a href="<?php echo asset_url().$certificate['certificate_url'];?>" data-rel="PhotoGallery4" title="<?php echo $certificate['certificate_name'];?>" class="img0 ui-draggable" rel="PhotoGallery4" class="relative">
			                        	<img alt="Certificate_of_Honor2004" id="PhotoGallery4_img0" src="<?php echo asset_url().$certificate['certificate_url'];?>" title="<?php echo $certificate['certificate_name'];?>"></a>
			                       	
			                       	<br/ >
			                       	<?php echo $certificate['certificate_name'];?>
			                        </td>
			                   <?php if($i % 3 == 0){?> </tr> <?php }}?>
			                    
			                    
			                </tbody>
			            </table>
