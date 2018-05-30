	<?php
	if(isset($favoritepost)) { 
if(count($favoritepost) > 0 && $favoritepost[0]['id'] !='') {
	$i =1; foreach($favoritepost as $seller) { ?>
<style>
#Layer179
{
   background-color: #FAFAFA;
   border: 1px #D3D3D3 solid;
}
#wb_Text656 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#SlideShow2 .image
{
   border-width: 0;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image119
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#wb_Text653 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text654 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
</style>	
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-1" style="padding-top: 66px;text-align:center;">
					<input type="checkbox" id="chkpost-<?php echo $i;?>" onclick="ShowObjectWithEffect('btnpostdelete-<?php echo $seller['favorite_id'];?>', 1, 'scale', 500, 'swing');return false;" name="chkpost-<?php echo $i;?>"  value="on" >
					<div id="btnpostdelete-<?php echo $seller['favorite_id'];?>" style="width:100%; visibility: hidden;padding-top:10px;">
						<a href="#" onclick="delete_favorite(<?php echo $seller['favorite_id'];?>,9);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt="" style="width:24px;height:24px;"></a>
					</div>
				</div>			
				<div class="col-md-11" >			
					<div id="Layer178" style="width:950px;height:185px;" onmouseenter="ShowObjectWithEffect('Layer525', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer213', 0);ShowObject('Layer525', 0);return false;">
					<div id="Layer179" style="position: absolute; text-align: left; left: 1px; top: 1px; width:740px; height: 174px; z-index: 1258;">
						<div id="wb_Text653" style="position: absolute; left: 282px; top: 20px; width: 351px; height: 18px; z-index: 1246; text-align: left;">
							<span style="color: #303030; font-family: Georgia; font-size: 15px;"><strong><a href="./desksite.php" target="_blank" class="style5"><?php echo $seller['company_name'];?> </a></strong></span>
						</div>
						<div id="wb_Text654" style="position: absolute; left: 235px; top: 75px; width:486px; height: 62px; z-index: 1247; text-align: left;">
							<span
								style="color: #696969; font-family: Arial; font-size: 12px;"><?php $string1 = (strlen($seller['description']) > 13) ? substr($seller['description'],0,250).'...' : $seller['description']; echo $string1;?><br>
							<br>
							</span> 							
							<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">Post Views :
							<?php echo $seller['postviews'];?></span> &nbsp; &nbsp; &nbsp; &nbsp;
							<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">    Likes :
							<i class="fa fa-thumbs-up" aria-hidden="true" style="color: red"></i>   <?php echo $seller['likes'];?></span><br></a><br>
							
						</div>
				   </div>
					<div id="wb_Text656" style="position: absolute; left: 285px; top: 44px;height: 15px; z-index: 1259; text-align: left;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">Post Title:
							<?php echo $seller['title'];?></span><br>
					</div>
					<div id="wb_Image119" style="position: absolute; left: 233px; top: 18px; width: 45px; height: 45px; z-index: 1260;">
						<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" id="Image119" alt="" style="border-radius: 50px 50px 50px 50px;">
					</div>
					<div id="SlideShow2" style="position: absolute; left: 2px; top: 2px; width: 210px; height: 172px; z-index: 1261;">
						<img class="image" style="border: solid;border-color: honeydew;" src="<?php echo asset_url();?><?php echo $seller['image1'];?>" alt="" title="">
					</div>
					</div>
				</div>
			</div>
		</div>		
<?php $i++; } }  else { ?>
  <div class="row" style="margin:0px;">
 	<h4 class="center"> No Videos Found!</h4>
 </div>
<?php } } ?>