<ul>
<?php 
	foreach($productCategories as $mainCategory) { 
?>
 	<li class="firstmain">
 		<a class="<?php if(count($mainCategory['subproducts']) > 0) {?>withsubmenu<?php }?>" href= "javascript:productListByMainProduct(<?php echo $mainCategory['id'];?>);" target="_self"><?php echo $mainCategory['name']; ?></a>
    	<ul style="margin-left:-18px;">
    		<?php foreach($mainCategory['subproducts'] as $subproduct){?>
         	<li class="firstitem">
             	<a href="javascript:productListBySubProduct(<?php echo $subproduct['id'];?>)" target="_self"><?php echo $subproduct['name'];?></a>
            </li>
           	<?php }?>
     	</ul>
   	</li>
<?php 
	} 
?>
   	<li>
   		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Arrivals</a>
   	</li>
  	<li>
  		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Hot&nbsp;Sales</a>
  	</li>
</ul>