<?php foreach($Company as $company){?>
	<div id="myCarouselAbout" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
   		<ol class="carousel-indicators">
			<li data-target="#myCarouselAbout" data-slide-to="0" class="active"></li>
			<li data-target="#myCarouselAbout" data-slide-to="1"></li>
			<li data-target="#myCarouselAbout" data-slide-to="2"></li>
			<li data-target="#myCarouselAbout" data-slide-to="3"></li>
		</ol>
       	<!-- Wrapper for slides -->
       	<div class="carousel-inner" style="width:330px;" role="listbox">
         	<div class="item active">
         		<img src="<?php echo asset_url().$company['company_info_img1']; ?>" class="img-responsive" alt="<?php echo $company['company_name'];?>"/>
          	</div>
          	<div class="item">
            	<img src="<?php echo asset_url().$company['company_info_img2']; ?>" class="img-responsive" alt="<?php echo $company['company_name'];?>"/>
         	</div>
          	<div class="item">
            	<img src="<?php echo asset_url().$company['company_info_img3']; ?>" class="img-responsive" alt="<?php echo $company['company_name'];?>"/>
        	</div>
        	<div class="item">
             	<img src="<?php echo asset_url().$company['company_info_img4']; ?>" class="img-responsive" alt="<?php echo $company['company_name'];?>"/>
         	</div>
     	</div>
   	</div>
   	<br>
    <p class="be2">
    	<?php echo $company['company_introduction'];?>
    </p>
<?php } ?>
<script>
    $("#myCarouselAbout").carousel();
</script>