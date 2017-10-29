<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script> ​
<style>
<!--
body {
	overflow:scroll;
}
#Layer232 {
    background-color: #B22222;
}
-->
</style>
<div id="body">        
<div class="row center bgwhite1" style="height:220px;">
	<h2 class="font1 "><?php echo $business[0]['company_name'];?></h2>
   	<div class="row">
	  	<div class="col-md-3 col-sm-3 text-right">
	     	<img  src="<?php echo asset_url();?><?php echo $business[0]['business_logo'];?>" id="Shape85" alt="" style="width:100px;height:86px;">
     	</div>
	   	<div class="col-md-6 col-sm-6">
	     	<p class="font2"><br><?php echo substr($business[0]['company_introduction'],0,500);?></p>
	   	</div>
	   	<div class="col-md-2 col-sm-2">
		  	<img  src="<?php echo asset_url();?>images/black-horse.png" id="Image105" alt="" class="img41"><br>
		   	<span class="font3"><strong>Black Horse </strong>MEMBER</span><br><br>
		  	<div id="Layer251" style="z-index:1;">
				<div id="Layer251_Container">
					<a href="#" onclick="ShowObjectWithEffect('Layer252', 1, 'slideup', 500);return false;">
						<img  src="<?php echo asset_url();?>images/deal_icon.png" id="Image97" alt="" class="img50">
					</a>
					<a href="#" onclick="ShowObjectWithEffect('Layer251', 0, 'pulsate', 500);return false;">
						<img  src="<?php echo asset_url();?>images/img0546.png" id="Image129" alt="" class="imgc">
					</a>
					<div id="Layer252" style="visibility:hidden">
						<div id="Layer252_Container">
							<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/chat_button2.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/chat_button1.png">
								</span>
							</a>
							<a href="">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/addcommunity_button2.png">
						 		<span>
						 			<img alt=""  src="<?php echo asset_url();?>images/addcommunity_button1.png">
						 		</span>
							</a>
							<a href="">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/share_button.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/share_button1.png">
						   		</span>
							</a>
							<a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/inquirytomato.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/inquiryblack.png">
						    	</span>
							</a>
							<a href="#" onclick="ShowObjectWithEffect('Layer252', 0, 'slideup', 500);return false;" class="imgup">
								<img  src="<?php echo asset_url();?>images/img0547.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		  	<img  src="<?php echo asset_url();?>images/Guarantee.png" id="Image89" alt="" aria-describedby="ui-tooltip-0" class="img25">
		  	<img  src="<?php echo asset_url();?>images/trusted.png" id="Image104" alt="" aria-describedby="ui-tooltip-1"  class="img25">
		</div>
	</div>
	<a href="<?php echo base_url();?>desksite/<?php echo $busi_id;?>" class="switch">
	  	<img src="<?php echo asset_url();?>images/desktoplogo.png" id="Image49" alt="">MyDesksite
	</a>
</div>
<!-- search and navigation bar -->
<div class="bg2">
	<div class="row">
	  	<div class="col-md-offset-3 col-md-5 mj1">
   		 	<a href="#" class="nav1">
   		 		Home
   		 	</a>
   		 	<a href="#" class="nav1"  onclick="ShowObjectWithEffect('Layer98', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
   		 		About
   		 	</a>
   		 	<a href="#"  class="nav1" onclick=" ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 1, 'slideup', 500, 'swing');return false;">
   		 	    Products
   		 	</a>
   		 	<a href="#"  class="nav1" onclick="ShowObjectWithEffect('Layer95', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
   		        Contact
   		    </a>
		</div>
		<div class="col-md-3">
			<div class="search-div"> 
				<form method="post" action="search">
					<div class="col-sm-10 col-xs-11" style="padding: 0px;">
						<input type="text" class="search-box" required="required" name="keyword" placeholder="Search">
					</div>
					<div class="col-sm-2 col-xs-1" style="padding: 0px;">
						<button class="btn btn-block search-btn" type="submit"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
			</div>
		</div>
 	</div>
    <!-- search and navigation bar -->
    <!-- about us popup bar -->
	<div id="Layer98">
  		<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
     	<div class="bg3">
      		<div class="row">
      	 	 	<div class="col-md-6 left">
	      	 	 	<br><br>
	      	 	 	<p class="about1"><strong>About Us</strong></p>
	      	 	 	<p class="about2">Seven Seas Logistics Co. was established in 2002 responding to the growing ofcommercial and project market, from the time of established, the company was catering cargo transportation needs of local market as well as of international market to serve the shipping movement all over the world... </p>
	      	 	 	<br><br>
      	 	 	    <div class="col-sm-4 about3">
	      	 	 	    <br><br>
		      	 	 	<p class="about1"><strong>Business Information</strong></p>
		      	 	 	<br>
		      	 	 	<p>Business Type</p>
		      	 	 	<p>Main Product</p><br>
		      	 	 	<p>Main Market</p>
		      	 	 	<p>Year of Establish</p>
		      	 	 	<p>No. of Employees</p>
		      	 	 	<p>Country</p>
		      	 	 	<p>Province / City</p>
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Performance</strong></p>
		      	 	 	<p>Membership</p>
		      	 	 	<p>Likes</p>
		      	 	 	<p>Rank</p>
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Production capacity</strong></p>
		      	 	 	<p>Factory Size</p>
		      	 	 	<p>No. of Production lines</p>
		      	 	 	<p>R&D Capacity</p>
		      	 	 	<br><br>
      	 	 	    </div>
      	 	 	    <div class="col-sm-8 about2">
	      	 	 	    <br><br><br><br><br>
	      	 	 	    <p>Manufacture</p>
	      	 	 	    <p>Leather Sofa, Fabric Sofa, Chairs, Classic Chairs, Library, Tea Table</p>
	      	 	 	    <p>Africa, Middel East</p>
	      	 	 	    <p>1991</p>
	      	 	 	    <p>11-15 Person</p>
	      	 	 	    <p>China</p>
	      	 	 	    <p>Fujian</p>
	      	 	 	    <br><br><br>
	      	 	 	    <p>Black Horse Member</p>
	      	 	 	    <p>30000</p>
	      	 	 	    <p>85%</p>
	      	 	 	    <br><br><br>
	      	 	 	    <p>Below 1000 Square Meter</p>
	      	 	 	    <p>6</p>
	      	 	 	    <p>OEM, ODM, Our Own Brand ( Hotii)</p>
      	 	 	    </div>
      	 	 	</div>
      	 	 	<div class="col-md-6"><br><br>
      	 	 		<a href="#" onclick="ShowObjectWithEffect('Layer98', 0, 'slideup', 500);return false;">
	      	 	 	 	<img  src="<?php echo asset_url();?>images/img0413.gif" id="Shape26" alt="" class="img33">
	      	 	 	</a>
	      	 		<div  class="tab-content">
		      	 		<div id="home1" class="tab-pane fade in active content1">
	      	 	 	     	<img class="image"  src="<?php echo asset_url();?>images/1.jpg" alt="" title="" style="float: right;">
	      	 	 	  	</div>
	      	 	 	 	<div id="menu11" class="tab-pane fade content1 center">
	      	 	 	     	<table>
	      	 	 	     	 	<tbody>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
			      	 	 	     	 		<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
	      	 	 	     	 	</tbody>
	      	 	 	     	</table>
	      	 	 		</div>
	      	 	 	 	<div id="menu21" class="tab-pane fade content1 center">
		      	 	 	   	<a href="images/Certificate_of_Honor2004.jpg" data-rel="PhotoGallery6" rel="PhotoGallery6">
		      	 	 	     	<img alt="" id="PhotoGallery6_img0" src="<?php echo asset_url();?>images/tn_Certificate_of_Honor2004.png">
		      	 	 	   	</a><br>
		      	 	 	   	<a href="images/iso_9001_certification.gif" data-rel="PhotoGallery6" rel="PhotoGallery6">
		      	 	 	    	<img alt="" id="PhotoGallery6_img1" src="<?php echo asset_url();?>images/tn_iso_9001_certification.png">
		      	 	 		</a>
	      	 	 	  	</div>
	      	 	 	  	<div id="menu31" class="tab-pane fade content1">
	      	 	 	 	</div>
	      	 	 	</div> 
	      	 	 	<div class=" col-md-offset-2 col-md-3">
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Certificates</strong></p>
		      	 	 	<p class="about1"><strong>License</strong></p>
		      	 	 	<p class="about1"><strong>Verification</strong></p>
		      	 	 </div>
		      	 	 <div class="col-md-4 font3">
		      	 	 	<br><br>
		      	 	 	<p>ISO, SGS, CQC, ICQ, Ce</p>
		      	 	 	<p>Expor License</p>
		      	 	 	<p>Done by ( Povided later ) ..</p>
		      	 	 	<p class="font2">Back to Company Gallery</p>
		      	 	</div>
	      	 	 	<div class="col-md-3">
	      	 	 	   	<br><br>
	      	 	 	    <ul class="nav nav-tabs">
		      	 	 		<li class="active contact1"><a data-toggle="tab" href="#home1" >view</a></li>
		      	 	 		<li><a data-toggle="tab" href="#menu11">view</a></li>
		      	 	 		<li><a data-toggle="tab" href="#menu21">view</a></li>
		      	 	 	</ul>
	      	 	 	</div>
	      	 	</div>
      		</div>
    	</div>
	</div>
    <!-- about us bar end-->
   	<!-- product popup  -->
	<div id="Layer120" onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;" style="position: absolute;top: 306px;z-index: 1;visibility:hidden; margin-left: 474px;"  class=" boxstyle1">
		<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
		<div id="wb_desktop_menu">
          	<ul>
              	<li class="firstmain">
                    <a class="withsubmenu" href="#" target="_self">Indoors&nbsp;Furniture</a>
                   	<ul>
                       	<li class="firstitem">
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Fabric&nbsp;Sofas</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Leather&nbsp;Sofas</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Style</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Bed&nbsp;Rooms</a>
                        </li>
                      	<li>
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Tabels</a>
                       	</li>
                      	<li class="lastitem">
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Libraries</a>
                   		</li>
               		</ul>
               	</li>
            	<li>
             		<a class="withsubmenu" href="#" target="_self">Outdoors</a>
                  	<ul>
                      	<li class="firstitem">
                         	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Wooden&nbsp;Seats</a>
                        </li>
                       	<li>
                          	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Cradels</a>
                        </li>
                      	<li>
                        	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Garden&nbsp;Tabels</a>
                       	</li>
                      	<li class="lastitem">
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">More</a>
                   		</li>
                	</ul>
              	</li>
              	<li>
                 	<a href="#" target="_self">More</a>
               	</li>
               	<li>
                 	<a href="#" target="_self">More</a>
               	</li>
             	<li>
               		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Arrivals</a>
              	</li>
              	<li>
                    <a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Hot&nbsp;Sales</a>
            	</li>
        	</ul>
          	<br>
      	</div>
	</div>

      
   	<!-- product popup bar end -->
  	<!-- contact popup bar  -->
	<div id="Layer95" onmouseleave="ShowObjectWithEffect('Layer95', 0, 'slideup', 500, 'swing');return false;" >
	  	<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
		<div class="row contact6">
			<div class="col-md-2">
				<div class="whitebox3">
		  			<ul class="nav nav-tabs">
			   			<li class="active contact1"><a data-toggle="tab" href="#home" >Information</a></li>
			   			<li><a data-toggle="tab" href="#menu1" class="contact1" >Contact us</a></li>
		  			</ul>
		  		</div>
			</div>
			<div class="col-md-10">
			  	<div class="tab-content">
			    	<div id="home" class="tab-pane fade in active">
			    		<div class="col-sm-6">
			      			<p class="about1">Contact person</p>
			      			 	<img alt="" id="PhotoGallery3_img0" src="<?php echo asset_url();?>images/tn_sell1.png"><br>
			      			<p class="contact2"><strong>Jack Lee</strong></p>
			      			<p class="contact3"><strong>jacklee@hotmail.com</strong><p>
				      	</div>
			      		<div class="col-md-6 left">
			      			<h3 class="contact4">MAIN OFFICE</h3>
			      			<div class="whitebox">
			      				<div class="col-sm-7">
			      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
			      					<div class="flex">
			      						<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p></div>
			      					<div class="flex">
			      						<p class="about1"> Web</p><p>www.udtalks.com</p>
			      					</div>
			      				</div>
			      				<div class="col-sm-4">
				      				<p class="about1"> Tel</p>
				      				<p>0086 028665384</p>
				      				<p>0086 028665384</p>
			      				</div>
			      			</div>
				      		<h3 class="contact4">MAIN OFFICE</h3>
				      		<div class="scrollbox">
				      			<div class="whitebox">
				      				<div class="col-sm-7">
				      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
				      					<div class="flex">
				      						<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
				      					</div>
				      					<div class="flex">
				      						<p class="about1" > Web</p><p>www.udtalks.com</p>
				      					</div>
				      				</div>
				      				<div class="col-sm-4">
					      				<p class="about1"> Tel</p>
					      				<p>0086 028665384</p>
					      				<p>0086 028665384</p>
				      				</div>
				      			</div>
				      			<div class="whitebox">
				      				<div class="col-sm-7">
				      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
				      					<div class="flex">
				      						<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
				      					</div>
				      					<div class="flex">
				      						<p class="about1" > Web</p><p>www.udtalks.com</p>
				      					</div>
				      				</div>
				      				<div class="col-sm-4">
					      				<p class="about1"> Tel</p>
					      				<p>0086 028665384</p>
					      				<p>0086 028665384</p>
				      				</div>
				      			</div>
				      			<div class="whitebox">
				      				<div class="col-sm-7">
				      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
				      					<div class="flex">
				      						<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
				      					</div>
				      					<div class="flex">
				      						<p class="about1" > Web</p><p>www.udtalks.com</p>
				      					</div>
				      				</div>
				      				<div class="col-sm-4">
					      				<p class="about1"> Tel</p>
					      				<p>0086 028665384</p>
					      				<p>0086 028665384</p>
				      				</div>
				      			</div>
			      			</div>
			      		</div>
			    	</div>
				    <div id="menu1" class="tab-pane fade">
					    <h2>CONTACT US</h2><br><br>
					    <div class="row">
						    <div class="col-md-5">
							    <input type="text" name="name" placeholder="Name"/>
							    <input type="email" name="email" placeholder="Email"/>
						    </div>
						    <div class="col-md-5">
							    <input type="text" name="company" placeholder="Company"/>
							    <input type="number" name="phone" placeholder="Phone"/>
						    </div>
						    <div class="col-md-8">
						    	<textarea rows="" cols="" placeholder="Message"> </textarea>
						    	<button>Submit</button>
						    </div>
					    </div>
				    </div>
				</div>
			</div>
    	</div>
  	</div>
  	<!-- contact popup bar end -->
  	<!-- scroll bar -->
     
	<div class="carousel slide" data-ride="carousel">
   	<!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="<?php echo asset_url();?><?php echo $business[0]['website_bg1'];?>" alt="Los Angeles" style="width:100%;">
	      </div>
	      <div class="item">
	        <img src="<?php echo asset_url();?><?php echo $business[0]['website_bg2'];?>" alt="Chicago" style="width:100%;">
	      </div>
	    </div>
  	</div>
   	<!-- scrollbar end -->
   	<!-- third fold -->
   	<div class="row" style="margin-top:50px;">
     	<div class="col-md-6">
      		<div class="row">
      			<?php if(!empty($catalouges[0]['id'])) { ?>
	      		<div class="whitebg">
			   		<div class="col-md-4" style="z-index: 488;">
			      	 	<a  href="#"  class="btn">
			      	 		<img src="<?php echo asset_url();?>images/ts/vCAT2.png" alt="" style="width:220px;height:290px;">
			      	 	</a>
			      	 	<div style="position:absolute;top:130px;left:100px;">
			      	 		<img src="<?php echo asset_url();?><?php echo $catalouges[0]['catalogue_cover'];?>"  style="width:73px;height:72px;border-radius:50%;">
			      	 	</div>
			     	</div>
			     	<div class="col-md-8 center">
				      	<a href="#" class="a1" onclick="ShowObjectWithEffect('Layer_catalouge0', 1, 'scale', 300);return false;">
				      		<?php echo $catalouges[0]['catalogue_title'];?> V-Catalouge
				      	</a><br><br>
				     	<p class="justify a2 space1">
				      		<?php echo substr($catalouges[0]['about'],0,300);?>
				      	</p>
				     	<div class="inline p1">
					     	<p>Likes</p>
					      	<img src="<?php echo asset_url();?>images/items_like0.png" alt="" class="img25">
					      	<p><?php echo $catalouges[0]['likes'];?></p>
				     	</div>
				      	<p class="a4">Price Range</p>
				      	<div class="inline">
				      	  	<p class="a5">USD </p>
				      	   	<p class="a6"><?php echo $catalouges[0]['min_price'];?>.00 - <?php echo $catalouges[0]['max_price'];?>.00</p>
			      	   	</div>
			      	   	<p class="a4">Min. Order: <?php echo $catalouges[0]['quantity'];?> <?php echo $catalouges[0]['unit'];?>    </p>
			      	</div>
			   	</div>
			   	<div id="wb_Shape82" style="position:absolute;left:52px;top:244px;width:35px;height:34px;z-index:478;">
					<img src="<?php echo asset_url();?>images/img0945.gif" id="Shape82" alt="" style="width:35px;height:34px;">
				</div>
	      	 	<div id="Layer232" style="position:absolute;text-align:left;left:52px;top:255px;width:133px;height:27px;z-index:490;">
					<div id="wb_Text501" style="position:absolute;left:6px;top:2px;width:119px;height:21px;z-index:477;text-align:left;">
					<span style="color:#FFFFFF;font-family:Impact;font-size:17px;"><?php echo $catalouges[0]['catalogue_title'];?></span></div>
				</div>
				<?php } ?>
		   	</div>
	  	</div>
    	<div class="col-md-6">
	    	<div id="myCarousel" class="carousel slide whitebg1" data-interval="false">
				<div class="carousel-inner">
					<?php foreach ($videos as $key=>$video) { ?>
					<div class="item <?php if($key == 0) { ?>active<?php } ?>">
						<div class="row">
      	 					<div class="col-md-7 bggray">
								<video src="<?php echo asset_url();?><?php echo $video['vedio_file']; ?>" id="MediaPlayer5" controls="controls"></video>
								<a href="<?php echo base_url();?>video/item/details/<?php echo $video['video_id'];?><?php echo $video['busi_id']?>" target="_blank">
									<img class="hover" alt=""  src="<?php echo asset_url();?>images/video_detailsb.png">
									<span>
									 	<img alt=""  src="<?php echo asset_url();?>images/video_details.png">
									</span>
									<p>DETAILS</p>
								</a>
								<a href="javascript:likeVideo(<?php echo $video['video_id']; ?>);">
									<img class="hover" alt=""  src="<?php echo asset_url();?>images/video_likeb.png">
									<span>
										<img alt=""  src="<?php echo asset_url();?>images/video_like.png">
									</span>
									<p>LIKE</p>
								</a>
					    	</div>
					    	<div class="col-md-5 center" style="padding-right:30px;">
						     	<a href="<?php echo base_url();?>item/details/<?php echo $video['id'];?>" class="a1"><br>
						      	 	<?php echo $video['name']; ?>
						     	</a><br><br>
						      	<p class="a2">
						    	  	<?php echo substr($video['about'],0,120); ?> ...
						     	</p>
						      	<p class="a4">Price</p>
						     	<div class="inline">
						      	  	<p class="a5">USD </p>
						      		<p class="a6"><?php echo $video['unit_price']; ?></p>
					      	 	</div>
					      	 	<p class="a4">Min. Order: <?php echo $video['quantity']; ?> <?php echo $video['unit']; ?>    </p>
					      		<div class="inline p1">
							     	<p>Likes</p>
							      	<img src="<?php echo asset_url();?>images/items_like0.png" alt="" class="img25">
									<p><?php echo $video['video_likes']; ?></p>
								</div>
			      	 		</div>
						</div>
    				</div>
    				<?php } ?>
			    	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			     		<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
			    	</a>
			    	<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    		<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
					</a>
      			</div>
			</div>
		</div>
	</div>
      <!-- third fold End-->
      
      <!-- forth fold -->
	  	<div class="row">
	  		<br><br>
	      	<h5 class="heading">Featured Products</h5>
      		<div id="myCarousel1" class="carousel slide" data-interval="false">
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<?php foreach ($featured_products as $key=>$featured_product) { ?>
							<div class="col-md-3">
						  		<div class="bgwhite center">
					      			<a href="<?php echo base_url();?>item/details/<?php echo $featured_product['id'];?>/<?php echo $featured_product['busi_id'];?>" class="a1">
							      	 	<?php echo $featured_product['name'];?>
							      	</a>
							      	<p class="a2">
							    	  	<?php echo substr($featured_product['about'],0,120);?> ...
							     	</p>
							     	<img src="<?php echo asset_url();?><?php echo $featured_product['main_image'];?>" alt="" class="productimg">
								  	<a href="<?php echo base_url();?>item/details/<?php echo $featured_product['id'];?>/<?php echo $featured_product['busi_id'];?>" class="hover1" > <img alt="" src="<?php echo asset_url();?>images/view-detailsb.png" class="img60">DETAILS</a>
								   	<p class="a4">Price</p>
									<div class="inline">
							      	   	<p class="a5">USD </p>
							      	   	<p class="a6"><?php echo $featured_product['unit_price'];?>.00</p>
						      	  	</div>
						      	   	<p class="a4">Min. Order: <?php echo $featured_product['quantity'];?> <?php echo $featured_product['unit'];?>    </p>
						      	   	<div class="inline">
							      	   	<p>Rate</p>
							      	   	<img src="<?php echo asset_url();?>images/rate.png" alt="" class="margin2">
							      	  	<p>4.5 of 5 </p>
						      	 	</div>
				      			</div>
						 	</div>
						 	<?php if($key%4 == 3) { ?>
						 	</div>
						 	</div>
						 	<div class="item">
							<div class="row">
						 	<?php } ?>
						 	<?php } ?>
						</div>
      	 			</div>
      	 		</div>
      		</div>
		  	<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
		     	<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
		    </a>
		    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
		    	<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
		    </a>
	  	</div>
      	<!-- forth fold -->
       	<!-- fifth fold end-->
	   	<div class="row">
	   		<h5 class="heading">New Arrivals <a href="#">View All</a></h5>
      		<div id="myCarousel2" class="carousel slide" data-interval="false">
				<!-- Wrapper for slides -->
			    <div class="carousel-inner">
				 	<div class="item active">
				   		<div class="row">
				   			<?php foreach ($new_arrivals as $key=>$new_arrival) { ?>
					 		<div class="col-md-3">
					     		<div class="bgwhite center">
						     		<a href="<?php echo base_url();?>item/details/<?php echo $new_arrival['id'];?>/<?php echo $new_arrival['busi_id'];?>" class="a1">
								  		<?php echo $new_arrival['name'];?>
								   	</a>
						      	 	<p class="a2">
						    	  		<?php echo substr($new_arrival['about'],0,120);?> ...
						      	 	</p>
						      	 	<img src="<?php echo asset_url();?><?php echo $new_arrival['main_image'];?>" alt="" class="productimg">
							    	<a href="<?php echo base_url();?>item/details/<?php echo $new_arrival['id'];?>/<?php echo $new_arrival['busi_id'];?>" class="hover1" > <img alt="" src="<?php echo asset_url();?>images/view-detailsb.png" class="img60">DETAILS</a>
						      	 	<p class="a4">Price</p>
						      	 	<div class="inline">
							      	 	<p class="a5">USD </p>
							      	  	<p class="a6"><?php echo $new_arrival['unit_price'];?>.00</p>
						      	  	</div>
						      	  	<p class="a4">Min. Order: <?php echo $new_arrival['quantity'];?> <?php echo $new_arrival['unit'];?>    </p>
						      	  	<div class="inline">
							      	   	<p>Rate</p>
							      	   	<img src="<?php echo asset_url();?>images/rate.png" alt="" class="margin2">
							      	   	<p>4.5 of 5 </p>
						      	  	</div>
				      			</div>
				      		</div>
				      		<?php if($key%4 == 3) { ?>
						 	</div>
						 	</div>
						 	<div class="item">
							<div class="row">
						 	<?php } ?>
				      		<?php } ?>
						</div>
      	 			</div>
      	 		</div>
      	 	</div>
				<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
			 	<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
			</a>
			<a class="right carousel-control" href="#myCarousel2" data-slide="next">
			  	<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
			</a>
      	</div>
       	<!-- fifth fold end-->
       	<!-- sixth fold -->
	   	<div class="row">
	   		<h5 class="heading">Product in 3D <a href="#">View All</a></h5>
	    	<div id="myCarousel3" class="carousel slide" data-interval="false">
			<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<?php foreach ($pro3d_products as $key=>$pro3d_product) { ?>
							<div class="col-md-3">
								<div class="bgwhite center">
					      			<a href="<?php echo base_url();?>item/details/<?php echo $pro3d_product['id'];?>/<?php echo $pro3d_product['busi_id'];?>" class="a1">
							      	 	<?php echo $pro3d_product['name'];?>
							      	</a>
							      	<p class="a2">
							    	  	<?php echo substr($pro3d_product['about'],0,120);?> ...
							      	</p>
							     	<img src="<?php echo asset_url();?><?php echo $pro3d_product['main_image'];?>" alt="" class="productimg">
						      		<a href="<?php echo base_url();?>item/details/<?php echo $pro3d_product['id'];?>/<?php echo $pro3d_product['busi_id'];?>" class="hover1" > <img alt="" src="<?php echo asset_url();?>images/view-detailsb.png" class="img60">DETAILS</a>
						      	 	<p class="a4">Price</p>
						      	 	<div class="inline">
							      	   	<p class="a5">USD </p>
							      	   	<p class="a6"><?php echo $pro3d_product['unit_price'];?>.00</p>
						      	  	</div>
						      	   	<p class="a4">Min. Order: <?php echo $pro3d_product['quantity'];?> <?php echo $pro3d_product['unit'];?>    </p>
						      	  	<div class="inline">
							      	   	<p>Rate</p>
							      	   	<img src="<?php echo asset_url();?>images/rate.png" alt="" class="margin2">
							      	   	<p>4.5 of 5 </p>
						      	   	</div>
				      			</div>
				      		</div>
				      		<?php if($key%4 == 3) { ?>
						 	</div>
						 	</div>
						 	<div class="item">
							<div class="row">
						 	<?php } ?>
				      		<?php } ?>
						</div>
      	 			</div>
      	 		</div>
      	 	</div>
			<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
				<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
			</a>
			<a class="right carousel-control" href="#myCarousel3" data-slide="next">
				<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
			</a>
		</div>
       	<!-- sixth fold end-->
      
      	<!-- seventh fold -->
      	<div class="row">
      		<h5 class="heading">Hot Sale Products</h5>
      		<?php foreach ($hot_sales as $key=>$hot_sale) { ?>
	      	<div class="col-md-3">
	      		<div class="two">
		      		<div class="col-sm-3">
		     	 		<img src="<?php echo asset_url();?><?php echo $hot_sale['main_image'];?>" alt="" class="imground">
		      		</div>
		      		<div class="col-sm-9 three">
			      		<a href="<?php echo base_url();?>item/details/<?php echo $hot_sale['id'];?>/<?php echo $hot_sale['busi_id'];?>" target="_blank" class=""><?php echo $hot_sale['name'];?><br></a>
			      		<p class="one"><?php echo substr($hot_sale['about'],0,80);?> ...</p>
		      		</div>
		    	</div>
	      	</div>
	      	<?php } ?>
      	</div>
      	<!-- seventh fold end -->
<script>
function openVideo(id) {
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		$("#Layer_details_Container").html(data);
		ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	},'html');
}
function openProduct(id) {
	//alert('hello');
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
		$("#Layer_details_Container2").html(data);
		ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');
	},'html');
}
function showBlackHorseMember() {
	$.get(base_url+"seller/blackhorse/memberlist",{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function showCommunityMember(id) {
	$.get(base_url+"seller/community/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function hideCommunityMember(id) {
	$.get(base_url+"seller/hidecommunity/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function productBySeller(id) {
	$.get(base_url+"seller/product/"+id,{},function(data) {
		$("#Layer_products_Container").html(data);
		  // Set the effect type
	    var effect = 'slide';

	    // Set the options for the effect type chosen
	    var options1 = { direction: 'right' };
	    var options2 = { direction: 'left' };

	    // Set the duration (default: 400 milliseconds)
	    var duration1 = 500;
	    var duration2 = 500;
	    $('#Layer_products').hide("slide", {direction: "left" }, 1000);
	    $('#products').show("slide", { direction: "right" }, 1000);
	    //$('#products').toggle(effect, options1, duration1);
	   // $('#Layer_products').toggle(effect, options2, duration2);
		
		/*ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');*/
	},'html');
}
function productDetail(id) {
	$.get(base_url+"product/detail/"+id,{},function(data) {
		$("#details_Container").html(data);
		ShowObjectWithEffect('Layer_products', 0, 'slideright', 500, 'swing');
		ShowObjectWithEffect('Layer_details', 1, 'slideleft', 500, 'swing');
	},'html');
}
function productListBySubCategory(id, busi_id) {
	$.get(base_url+"product/subcategory/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListByMainProduct(id, busi_id) {
	$.get(base_url+"product/mainproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListBySubProduct(id, busi_id) {
	$.get(base_url+"product/subproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}

</script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>

