<!-- css js -->
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/slimbox/js/slimbox2.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.draggable.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.wiggle.js"></script>
<style>

.catalog_c_img {
	border: none;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-image: url(../../../assets/images/img2096.png);
    background-repeat: no-repeat;
    background-position: 50%;
}
.catalogue_modal_body {
	background-color:transparent;background-image:url('.../../assets/images/vcat_insider.png');background-size:cover;padding-top: 110px;
}
.catalogue_outer_body {
	width: 700px;
    margin-left: 100px;
}
.catalogue_page_item_name {
	color:#303030;font-family:Georgia;font-size:13px;padding-bottom:5px;padding-top:8px;
}
.catalogue_page_item_details {
	color:#787878;font-family:Arial;font-size:11px;padding-bottom:10px;
}
.catalogue_page_item_quantity {
	color:#1E90FF;font-family:Arial;font-size:11px;padding-bottom:25px;
}
.catalogue_page_item_price_div {
	text-align: center;
	margin-bottom: -10px;
    z-index: 1;
}
.catalogue_page_item_price {
	background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:17px;padding: 2px 10px;
}
.catalogue_page_item_mimg {
	width:303px;height:268px;padding-bottom:5px;
}
.catalogue_page_left_num {
	padding-top: 10px;
}
.catalogue_page_no_text {
	color:#D3D3D3;font-family:Arial;font-size:11px;
}
.catalogue_page_no_num {
	color:#FF6347;font-family:'Arial Black';font-size:16px;
}
.catalogue_page_item_mimg-sm {
	width:150px;height:115px;margin-top: 10px;
}
.catalogue_page_right_num {
	padding-top: 10px;
}
.catalogue_main_img {
	border: 1px solid #eee;
	width: 303px;
    height: 268px;
}
.catalogue_sub_img {
	border: 1px solid #eee;
	width: 150px;
    height: 115px;
}
.catalogue_modal_close {
	width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff !important;
    font-size: 19px;
    opacity: 1;
}
li.share-button a{
	font-size:20px;
	color:#fa5c43;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:25px;
	height :25px;
}
li.share-button a:hover{
	font-size:20px;
	color:#ffffff;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:30px;
	height :30px;
}
ul.share{
	list-style-type: none;
	margin-top:  100%;
	line-height: 50px;
}
</style>

<style>
.inline{
line-height:4px;
}
</style>
<script>
$(document).ready(function() {
    $("#Layer27").stickylayer({
        orientation: 1,
        position: [0, 0],
        delay: 0
    });
    $("#Layer273").stickylayer({
        orientation: 1,
        position: [0, 30],
        delay: 0
    });
    $("#Layer35").stickylayer({
        orientation: 1,
        position: [0, 30],
        delay: 0
    });
    $("#SlideShow2").slideshow({
        interval: 4000,
        type: 'sequence',
        effect: 'slide',
        direction: 'right',
        pagination: false,
        easing: 'easeInOutSine',
        effectlength: 2000
    });
    $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
    $("a[rel^='SlideShow3']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
    $("a[rel^='PhotoGallery5']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
    $("a[rel^='PhotoGallery6']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
    $("a[rel^='PhotoGallery2']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
    $("a[rel^='PhotoGallery3']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var Carousel5Opts = {
        delay: 6500,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel5").carousel(Carousel5Opts);
    $("#Carousel5_back a").click(function() {
        $('#Carousel5').carousel('prev');
    });
    $("#Carousel5_next a").click(function() {
        $('#Carousel5').carousel('next');
    });
    var Carousel7Opts = {
        delay: 50000,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel7").carousel(Carousel7Opts);
    $("#Carousel7_back a").click(function() {
        $('#Carousel7').carousel('prev');
    });
    $("#Carousel7_next a").click(function() {
        $('#Carousel7').carousel('next');
    });
    var Carousel6Opts = {
        delay: 15000,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel6").carousel(Carousel6Opts);
    $("#Carousel6_back a").click(function() {
        $('#Carousel6').carousel('prev');
    });
    $("#Carousel6_next a").click(function() {
        $('#Carousel6').carousel('next');
    });
    var Carousel4Opts = {
        delay: 10000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel4").carousel(Carousel4Opts);
    $("#Carousel4_back a").click(function() {
        $('#Carousel4').carousel('prev');
    });
    $("#Carousel4_next a").click(function() {
        $('#Carousel4').carousel('next');
    });
    $("#Layer251").stickylayer({
        orientation: 2,
        position: [220, 90],
        delay: 500
    });
  /*  var jQueryToolTip1Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures performed by leading inspection, verification, testing and certification third party companies, includes company licenses, product certificates and onsite check.<br>To check Sellers / Shipper\'s verification certificate, click on Seller\'s (About Tab) &gt; View Verification.<br></p>',
        items: '#wb_Image104',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image104").tooltip(jQueryToolTip1Opts); 
    var jQueryToolTip2Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</p>',
        items: '#wb_Image89',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image89").tooltip(jQueryToolTip2Opts); */
    $("#SlideShow1").slideshow({
        interval: 8000,
        type: 'sequence',
        effect: 'fade',
        direction: '',
        pagination: false,
        fullscreen: 3,
        effectlength: 1000
    });
    var Carousel3Opts = {
        delay: 3000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel3").carousel(Carousel3Opts);
    $("#Carousel3_back a").click(function() {
        $('#Carousel3').carousel('prev');
    });
    $("#Carousel3_next a").click(function() {
        $('#Carousel3').carousel('next');
    });
    $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("a[rel^='PhotoGallery1']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var zindex = 250;
    $("#PhotoGallery1 a").draggable({
        start: function() {
            zindex = zindex + 1;
            $(this).css({
                zIndex: zindex
            });
        },
        stop: function() {
            rotation = Math.floor(Math.random() * 15);
            if (Math.floor(Math.random() * 11) > 5) {
                rotation = rotation * -1;
            }
            $(this).data('rotation', rotation);
            $(this).css({
                webkitTransform: "rotate(" + rotation + "deg)",
                MozTransform: "rotate(" + rotation + "deg)",
                msTransform: "rotate(" + rotation + "deg)",
                transform: "rotate(" + rotation + "deg)"
            });
        }
    });
    $("#Layer216").stickylayer({
        orientation: 1,
        position: [70, 60],
        delay: 0
    });
    $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
    $("a[rel^='PhotoGallery4']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var zindex = 250;
    $("#PhotoGallery4 a").draggable({
        start: function() {
            zindex = zindex + 1;
            $(this).css({
                zIndex: zindex
            });
        },
        stop: function() {
            rotation = Math.floor(Math.random() * 15);
            if (Math.floor(Math.random() * 11) > 5) {
                rotation = rotation * -1;
            }
            $(this).data('rotation', rotation);
            $(this).css({
                webkitTransform: "rotate(" + rotation + "deg)",
                MozTransform: "rotate(" + rotation + "deg)",
                msTransform: "rotate(" + rotation + "deg)",
                transform: "rotate(" + rotation + "deg)"
            });
        }
    });
    var jQueryToolTip3Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</p>',
        items: '#wb_Image61',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image61").tooltip(jQueryToolTip3Opts);
    var jQueryToolTip4Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it, on each product ( Along with Product Details Page)..<br>Furthermore, Click on &quot; Advantages&quot; icon to view more..</p>',
        items: '#wb_Image94',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image94").tooltip(jQueryToolTip4Opts);
    $("#Layer5").stickylayer({
        orientation: 4,
        position: [0, 25],
        delay: 0
    });
    //searchParseURL();
    $("#Layer58").stickylayer({
        orientation: 1,
        position: [70, 50],
        delay: 0
    });
    $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
    $("a[rel^='PhotoGallery7']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
    $("a[rel^='PhotoGallery8']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var Carousel2Opts = {
        delay: 3000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel2").carousel(Carousel2Opts);
    $("#Carousel2_back a").click(function() {
        $('#Carousel2').carousel('prev');
    });
    $("#Carousel2_next a").click(function() {
        $('#Carousel2').carousel('next');
    });
    var Carousel1Opts = {
        delay: 3000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel1").carousel(Carousel1Opts);
    $("#Carousel1_back a").click(function() {
        $('#Carousel1').carousel('prev');
    });
    $("#Carousel1_next a").click(function() {
        $('#Carousel1').carousel('next');
    });
    var Carousel8Opts = {
        delay: 3000,
        duration: 500,
        easing: 'swing',
        mode: 'forward',
        direction: '',
        pagination: true,
        pagination_img_default: 'images/page_default.png',
        pagination_img_active: 'images/page_active.png',
        start: 0
    };
    $("#Carousel8").carousel(Carousel8Opts);
    $("#Layer44").stickylayer({
        orientation: 4,
        position: [0, 0],
        delay: 0
    });
    $("#Layer116").stickylayer({
        orientation: 8,
        position: [0, 0],
        delay: 100
    });
    $("#Layer106").stickylayer({
        orientation: 5,
        position: [0, 0],
        delay: 0
    });
    var jQueryToolTip5Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">This seller is a member in your community..</p>',
        items: '#wb_Image76',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image76").tooltip(jQueryToolTip5Opts);
    $("#Layer49").stickylayer({
        orientation: 4,
        position: [0, 60],
        delay: 0
    });
    $("#Layer28").stickylayer({
        orientation: 1,
        position: [0, 4],
        delay: 0
    });
    var jQueryToolTip6Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">The Seller Is A Member In Your Community</p>',
        items: '#wb_Image39',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image39").tooltip(jQueryToolTip6Opts);
    var jQueryToolTip7Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</p>',
        items: '#wb_Image30',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image30").tooltip(jQueryToolTip7Opts);
    var jQueryToolTip8Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">This Seller Is Verified<br>View Seller Desksite And Click On The Same Logo For More Details.</p>',
        items: '#wb_Image32',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image32").tooltip(jQueryToolTip8Opts);
    var jQueryToolTip9Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</p>',
        items: '#wb_Image40',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image40").tooltip(jQueryToolTip9Opts);
});
var interval = null;
function startWiggle(input) {
	$(input).wiggle();
}
function stopWiggle(input) {
	$(input).wiggle('stop');
	clearInterval(interval);
}
</script>
<!-- css js -->
<style>
.nav23{
    margin-top: 11px;
}
.img28 {
    width: 28px !important;
    height: 28px !important;
    margin-right: 13px;
}

</style>
<!--  -->
<!--  -->
		<!-- navbar starts -->
		
		<div class="container-fluid top-div center" style="width: 1280px;position: absolute;z-index:3000;padding:0px;">
		    <a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 300);return false;"  class="inline22">
		      <img src="<?php echo asset_url(); ?>images/img0235.png" id="Image25" alt="" class="img25"><p class="font1">toolbox</p>
		     </a>
		    <nav class="navbar" style="position:relative;top:-36px;display:none;width:1280px;box-shadow: 10px 10px 5px #888888;" id="Layer106" onmouseleave="javascript:document.getElementById('Layer106').style.display='none';">
		        <div id="">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="row" class="c3">
		                <div class="col-lg-2 col-sm-4 logo">
		                    <div class="c4">WELCOME TO THE</div>
		                    <div class="c5">TRD</div>
		                    <div class="c6">STATION</div>
		                    <div class="c7">The new ear of ecommerce</div>
		                </div>
		                <div class="col-lg-4 col-sm-8 headimg">
		                </div>
		                <div class="col-lg-6 col-sm-12">
		                    <div class="row open-div1 bgwhite" class="c8" style="background: #fff;">
		                        <!-- Collect the nav links, forms, and other content for toggling -->
		                        <div class="col-xs-11">
		                            <ul class="nav navbar-nav trd-nav">
		                                <li class=" col-sm-2 col-xs-6">
		                                    <a href="#" class="navigation2" "><img src="<?php echo asset_url();?>images/ts/Homekit.png " style="width: 50px; ">
													<h5>Home</h5>
													</a>
												</li>
									<li class="col-sm-2 col-xs-6 ">
									<a href="# "seller"><img src="<?php echo asset_url();?>images/ts/seller.png" style="width: 50px;">
		                                        <h5>Sellers</h5></a>
		                                </li>
		                                <li class="col-sm-2 col-xs-6">
		                                    <a href="#" class="navigation2 products "><img src="<?php echo asset_url();?>images/ts/products.png " style="width: 50px; ">
										<h5>Products</h5></a></li>
									<li class="col-sm-2 col-xs-6 ">
									<a href="# "b-station"><img src="<?php echo asset_url();?>images/ts/trade.png" style="width: 50px;">
		                                        <h5>B-Station</h5></a>
		                                </li>
		                                <li class="col-sm-2 col-xs-6">
		                                    <a href="#" class="navigation2" pro-video "><img src="<?php echo asset_url();?>images/ts/vidtube0.png " style="width: 50px; ">
										<h5>Pro-Videos</h5></a></li>
									<li class="col-sm-2 col-xs-6 ">
									<a href="# "buyer"><img src="<?php echo asset_url();?>images/ts/buyer.png" style="width: 50px;">
		                                        <h5>Buyers</h5></a>
		                                </li>
		                                <li class="col-sm-2 col-xs-6">
		                                    <a href="#" class="navigation2" shipper "><img src="<?php echo asset_url();?>images/ts/shipper.png " style="width: 50px; ">
										<h5>Shippers</h5></a></li>
									<li class="col-sm-2 col-xs-6 ">
									<a href="# "stock-goods"><img src="<?php echo asset_url();?>images/ts/stock.png" style="width: 50px;">
		                                        <h5>Stock Goods</h5></a>
		                                </li>
		                                <li class="col-sm-2 col-xs-6">
		                                    <a href="#" class="navigation2" community "><img src="<?php echo asset_url();?>images/ts/CommMember.png " style="width: 50px; ">
										<h5>Community</h5></a></li>
									<li class="col-sm-2 col-xs-6 ">
									<a href="# "my-alert" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="<?php echo asset_url();?>images/ts/Alerts1.png" style="width: 50px;">
		                                        <h5>My Alerts</h5></a>
		                                </li>
		                            </ul>
		                        </div>
		                        <div class="reminder-div">
		                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 myalert" style="padding-top: 30px; display: none;">
		                                <h4 style="color: #ccc; text-align: center;">TRD STATION ALERTS BOX</h4>
		                                <p class="text-center">
		                                    <img src="<?php echo asset_url();?>images/ts/Alerts1.png" style="display: inline-block">
		                                </p>
		                                <p class="text-center">You Have Received A New Alert</p>
		                                <p style="color: #FF3033; text-align: center;">Add Request</p>
		                            </div>
		                            <div style="padding-top:80px;padding-left:10px;">
		                            	<div>
				                            <a href="#" onclick="ShowObjectWithEffect('Layer255', 1, 'slideright', 500, 'swing');return false;"><img src="<?php echo asset_url();?>images/img0915.png" id="Shape22" alt="" style="width:11px;height:48px;"></a>
				                            <a href="#" class="" class="menu-arrow" style="width:1px;height:69px;"><img src="<?php echo asset_url();?>images/ts/img0020.png" style="width:9px;height:77px;"><img src="<?php echo asset_url();?>images/ts/img0020.png" style="width:9px;height:77px;"></a>
				                            <a href="#" class="" class="menu-arrow2" style="width:1px;height:69px;"><img src="<?php echo asset_url();?>images/ts/img0020.png" style="width:9px;height:77px;"><img src="<?php echo asset_url();?>images/ts/img0020.png" style="width:9px;height:77px;"></a>
			                            </div>
		                            </div>
		                        </div>
		                        <!-- /.navbar-collapse -->
		                    </div>
		                </div>
		            </div>
		        </div>
		    </nav>
		</div>
		<?php foreach($Desksites as $Desksite) {?>
		<!-- navbar  end -->
			<!-- head text section -->
			<div class="c9">
			    <p class="c10"><strong><?php echo $Desksite['company_name'];?></strong></p>
			    <p class="c11"><?php echo substr($Desksite['company_introduction'], 0, 180);?></p>
			</div>
			<!-- head text section -->
			<!-- Main Slider -->
			<div id="Layer46" style="/* position:fixed; */text-align:left;left:0;top:0;right:0;bottom:0;z-index:33;">
				<?php if(!empty($Desksite['desksite_bg1'])) { ?>
			    <div id="SlideShow1" style="">
			        <img class="image d1" src=" <?php echo asset_url().$Desksite['desksite_bg1']; ?> " alt="" title="" />
			        <img class="image d2" src="<?php echo asset_url().$Desksite['desksite_bg2']; ?>" alt="" title="" />
				</div>
				<?php } else { ?>
				<img class="image d1" src=" <?php echo asset_url(); ?>images/buyer-desksite.jpg" alt="" title="" />
				<?php } ?>
			</div>
		    <!-- slider ends -->
		   
			<!-- bottom navigation -->
			<div class="container">
				<div id="Layer5"class="bottomnav">
					<div id=" Layer5_Container ">
					    <div class="row ">
					        <div class="col-md-2 col-sm-2 bg">
					        	<div class="pull-right nav23">
					               	<?php if($Desksite['gaurantee_period'] !=''){?>
					               	<a href="#" class="navigation2" title="This buyer is an active..">
					                	<img src="<?php echo asset_url(); ?>images/Active.png" id="Image94" alt="" class="img28">
					                </a>
					                <?php }?>
									<a href="#" class="navigation2 " title="Buyer has a current request, click on Current Requests to view deal.">
					                	<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="" title="A member in your community" class="img28">
					               </a>
					                <a href="#" class="navigation2" title="Buyer is amember in your community." onclick="ShowObjectWithEffect('Layer61', 1, 'slideleft', 500, 'swing');return false;">
						                <?php if($Desksite['is_logo_verified'] !=''){?>
										<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image67" alt=""  class="img28" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										<?php }?>
									</a>
					               
				                </div>
					        </div>
					        <div class="col-md-8 col-sm-8 bg ">
					        		<center>
						        		<a href="javascript:getComapnyProfile(<?php echo $Desksite['busi_id']?>)" class="navigation2n ">
									     	<img src="<?php echo asset_url(); ?>images/img0178.png" id="Image60" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							            	<p class="font2">Company <br>Profile</p>
							            </a>
							            <a href="javascript:getComapnyAbout(<?php echo $Desksite['busi_id']?>)" class="navigation2n" >
										    <img src="<?php echo asset_url(); ?>images/about.png" id="Image5" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										    <p class="font2">About Us</p>
									    </a>
									    <a href="javascript:getContactPerson(<?php echo $Desksite['busi_id']?>)" class="navigation2n" >
										    <img src="<?php echo asset_url(); ?>images/contact-person.png" id="Image5" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										    <p class="font2">Contact <br>Person</p>
									    </a>
							            <a href="javascript:getMyFiles(<?php echo $Desksite['busi_id'];?>)" class="navigation2n" >
										    <img src="<?php echo asset_url(); ?>images/folder-user.png" id="Image8" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										    <p class="font2">My Files</p>
									    </a>
							            <a href="javascript:getCurrentRequest(<?php echo $Desksite['busi_id']?>)" class="navigation2n" >
									   		<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image71" alt="" class="imgnav" style="margin-left:-10px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
									   		<p class="font2">Current <br>Request</p>
									   	</a>
									    <a href="#" class="navigation2n" onclick="ShowObjectWithEffect('Layer49', 1, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer88', 0, 'slideleft', 500, 'swing');return false;">
										   <img src="<?php echo asset_url(); ?>images/contact_email.png" id="Image9" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										   <p class="font5">Contact, Add<br> and Share...</p>
									   	</a>
									   	<a href="<?php echo base_url();?>buyer" class="navigation2n" >
										   <img src="<?php echo asset_url(); ?>images/exit.png" id="Image44" alt="" class="imgnav" style="width:45px;height:45px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										   <p class="font2">Exit</p>
									   	</a>
								   </center>
					   		 </div>
					    	<div class="col-md-2 col-sm-2  bg121 ">
					    		<div class="pull-left">
							        <div id="wb_Image53" class="c13">
								        <img src="<?php echo asset_url(); ?>images/usa-round.png" id="" width="30px" alt="" >
							        </div>
								    <div id="wb_Text50" class="c3">
								        <p class="c1"><?php echo $Desksite['company_country']." | ".$Desksite['company_province']; ?></p>
								    </div>
								    <div id="wb_Text8" class="c2">
							        	<p class="c1"><strong>09:00 PM</strong></p>
							   		</div>
					   			</div>
					    </div>
					</div>
				</div>
			</div>
			<div class="container">
			<!-- bottom navigation ends -->
			    <!-- verified member -->
			    <div id="Layer61" class="box1 g1" onmouseleave="ShowObjectWithEffect('Layer43', 0, 'slidedown', 500);return false;">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer61', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <div>
			            <br>
			            <p class="box1font1">VERIFIED MEMBER</p>
			        </div>
			        <div class="box2">
			            <p class="box1font2"><strong>Verified Member</strong></p>
			            <img src="<?php echo asset_url(); ?>images/img0481.png" id="Shape14" alt="" style="width:120px;height:120px;">
			            <p class="boxfont2">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures ..
			            <br>
			            </p>
			            <p class="boxfont3">To check Sellers / Shipper's verification certificate, click on Certificates Icon or copy the ( Member Verification No. shown below ) and past it into the CHECK&nbsp; link.
			            </p>
			            <p class="b1"><strong>SGS Verification No. :</strong></p>
			            <p class="c14">QNd12355525</p>
			            <p class="b2"><strong>Check</strong></p>
			        </div>
			    </div>
			    <!-- verified member end -->
			    <!-- product popup -->
			    <div id="Layer44" class="box1" onmouseleave="ShowObjectWithEffect('Layer18', 0, 'slidedown', 500);return false;" style="    top: 30%; width: 20%;">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer44', 0, 'slidedown', 300, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <div style=" width: 240px;">
			            <br>
			            <p class="box1font1"><img src="<?php echo asset_url(); ?>images/MENUICON.png" alt="" class="img32">PRODUCT CATEGORY</p>
			            <div id="wb_desktop_menu">
			                <br>
			            </div>
			        </div>
			    </div>
			<!-- product popup ends -->
				
			<!--about us-->
			<div id="Layer23" class="box1 a4">
			    <div id="Layer23_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer23', 0, 'slidedown', 300, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <br>
			        <p class="box1font3"><img src="<?php echo asset_url(); ?>images/about.png" alt="" class="img32">ABOUT US</p>
			        <div class="box2" id="about-us" style="height: 512px;">
			            
			        </div>
			    </div>
			</div>
			
			<!-- about us end -->
			<!-- certification -->
			<div id="Layer144" class="box11 a4">
			    <div id="Layer144_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer144', 0, 'slidedown', 300, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <br>
			        <p class="box1font3"><img src="<?php echo asset_url(); ?>images/certificates.png" alt="" class="img32">COMPANY LICENSE AND CERTIFICATES</p>
		       		<div id="Layer147">  </div>
			    </div>
			</div>
			<!-- certification ends -->
			
			<!-- company profile -->
			<div id="Layer48" class="box1" style="left:36%; top:3%">
			    <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer48', 0, 'slidedown', 300, 'swing');return false;">
				 	<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			    <br>
			    <p class="box1font3"><img src="<?php echo asset_url(); ?>images/barcompany-profile.png" alt="" class="img32">COMPANY PROFILE</p>
			    <div>
			        <div class="box2" id="company-profile" style=" height: 642px;">
					</div>
				</div>
			</div>
			<!-- company profile -->
			
			
			<!-- advantages -->
			<div id="Layer79" class="box1 a3">
			    <div id="Layer79_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer79', 0, 'slidedown', 300, 'swing');return false;">
				<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <br>
			        <p class="box1font3"><img src="<?php echo asset_url(); ?>images/certificates.png" alt="" class="img32">ADVANTAGES</p>
			        <div class="box2" id="advantage"></div>
			        
			    </div>
			</div>
			<!-- advantages ends-->
			<!-- my files -->
			<div id="Layer148" class="box1 a3">
			    <div id="Layer148_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer148', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <br>
			        <p class="box1font3"><img src="<?php echo asset_url(); ?>images/my_file.png" alt="" class="img32">MY FILES</p>
			        <div class="box22" id="my-files">
			           
			        </div>
			    </div>
			</div>
			<!-- my files end -->
			<!-- Add to catalogue -->
			<div id="Layer_catalogue" class="catalogue1">
			    <div id="Layer_catalogue_Container" class="catalogue2">
			    </div>
			</div>
			<!-- add to catalogue end -->																																											
			<!-- contact and add -->
			<div id="Layer49" class="boxy" style="left:10%;top:13%">
			    <a href="#" onclick="ShowObjectWithEffect('Layer49', 0, 'slideleft', 300, 'swing');ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer88', 1, 'slideleft', 1000, 'swing');return false;">
			   		<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image59" alt=""  class="img59">
				</a>
			    <div class="inline">
			        <br>
			        <p class="box1font1 w1"><img src="<?php echo asset_url(); ?>images/community.png" id="Image21" alt="" class="img32">ADD & SHARE</p>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/MENUFAVORITE.png" id="Image19" alt="" class="img32">
					 <a href="javascript:addToMyFavourite(<?php echo $Desksite['busi_id'];?>,3);" target="_self" class="antag">
						Add To Favourite
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/menuaddcomm.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Add To Community
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/cha0t.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Chat
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/like.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Like & Comments
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/img0908.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Share
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        General Inquiry
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/Mail.ico" id="Image19" alt="" class="img32">
			        <a href="#" onclick="ShowObjectWithEffect('Layer216', 1, 'slideleft', 500, 'swing');return false;" target="_self" class="antag">
			        Contact Us
					</a>
			    </div>
			</div>
			<!-- contact add ends -->
			<!-- contact us form -->
			<div id="Layer216" class="box1 a2" >
			    <div id="Layer216_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer216', 0, 'slideleft', 300, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <br>
			        <p class="box1font3"><img src="<?php echo asset_url(); ?>images/contact_email.png" alt="" class="img32">CONTACT US</p>
			        <div class="box2">
			            <input type="text" class="input" name="name" value="" placeholder="Name">
			            <input type="text" class="input" name="phone" value="" placeholder="Phone">
			            <input type="email" class="input" name="email" value="" placeholder="Email">
			            <select name="country" size="1" id="Combobox1" class="input">
			                <option selected="" value="Select">Select your country</option>
			                <option value="Afghanistan">Afghanistan</option>
			                <option value="Aland Islands">Aland Islands</option>
			                <option value="Albania">Albania</option>
			                <option value="Algeria">Algeria</option>
			                <option value="American Samoa">American Samoa</option>
			                <option value="Andorra">Andorra</option>
			                <option value="Angola">Angola</option>
			                <option value="Anguilla">Anguilla</option>
			                <option value="Antarctica">Antarctica</option>
			                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
			                <option value="Argentina">Argentina</option>
			                <option value="Armenia">Armenia</option>
			                <option value="Aruba">Aruba</option>
			                <option value="Australia">Australia</option>
			                <option value="Austria">Austria</option>
			                <option value="Azerbaijan">Azerbaijan</option>
			                <option value="Bahamas">Bahamas</option>
			                <option value="Bahrain">Bahrain</option>
			                <option value="Bangladesh">Bangladesh</option>
			                <option value="Barbados">Barbados</option>
			                <option value="Belarus">Belarus</option>
			                <option value="Belgium">Belgium</option>
			                <option value="Belize">Belize</option>
			                <option value="Benin">Benin</option>
			                <option value="Bermuda">Bermuda</option>
			                <option value="Bhutan">Bhutan</option>
			                <option value="Bolivia">Bolivia</option>
			                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
			                <option value="Botswana">Botswana</option>
			                <option value="Bouvet Island">Bouvet Island</option>
			                <option value="Brazil">Brazil</option>
			                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
			                <option value="Brunei Darussalam">Brunei Darussalam</option>
			                <option value="Bulgaria">Bulgaria</option>
			                <option value="Burkina Faso">Burkina Faso</option>
			                <option value="Burundi">Burundi</option>
			                <option value="Cambodia">Cambodia</option>
			                <option value="Cameroon">Cameroon</option>
			                <option value="Canada">Canada</option>
			                <option value="Cape Verde">Cape Verde</option>
			                <option value="Cayman Islands">Cayman Islands</option>
			                <option value="Central African Republic">Central African Republic</option>
			                <option value="Chad">Chad</option>
			                <option value="Chile">Chile</option>
			                <option value="China">China</option>
			                <option value="Christmas Island">Christmas Island</option>
			                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
			                <option value="Colombia">Colombia</option>
			                <option value="Comoros">Comoros</option>
			                <option value="Congo">Congo</option>
			                <option value="Cook Islands">Cook Islands</option>
			                <option value="Costa Rica">Costa Rica</option>
			                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
			                <option value="Croatia">Croatia</option>
			                <option value="Cuba">Cuba</option>
			                <option value="Cyprus">Cyprus</option>
			                <option value="Czech Republic">Czech Republic</option>
			                <option value="Denmark">Denmark</option>
			                <option value="Djibouti">Djibouti</option>
			                <option value="Dominica">Dominica</option>
			                <option value="Dominican Republic">Dominican Republic</option>
			                <option value="Ecuador">Ecuador</option>
			                <option value="Egypt">Egypt</option>
			                <option value="El Salvador">El Salvador</option>
			                <option value="Equatorial Guinea">Equatorial Guinea</option>
			                <option value="Eritrea">Eritrea</option>
			                <option value="Estonia">Estonia</option>
			                <option value="Ethiopia">Ethiopia</option>
			                <option value="Falkland Islands">Falkland Islands</option>
			                <option value="Faroe Islands">Faroe Islands</option>
			                <option value="Fiji">Fiji</option>
			                <option value="Finland">Finland</option>
			                <option value="France">France</option>
			                <option value="French Guiana">French Guiana</option>
			                <option value="French Polynesia">French Polynesia</option>
			                <option value="French Southern Territories">French Southern Territories</option>
			                <option value="Gabon">Gabon</option>
			                <option value="Gambia">Gambia</option>
			                <option value="Georgia">Georgia</option>
			                <option value="Germany">Germany</option>
			                <option value="Ghana">Ghana</option>
			                <option value="Gibraltar">Gibraltar</option>
			                <option value="Greece">Greece</option>
			                <option value="Greenland">Greenland</option>
			                <option value="Grenada">Grenada</option>
			                <option value="Guadeloupe">Guadeloupe</option>
			                <option value="Guam">Guam</option>
			                <option value="Guatemala">Guatemala</option>
			                <option value="Guinea">Guinea</option>
			                <option value="Guinea-Bissau">Guinea-Bissau</option>
			                <option value="Guyana">Guyana</option>
			                <option value="Haiti">Haiti</option>
			                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
			                <option value="Vatican City">Vatican City</option>
			                <option value="Honduras">Honduras</option>
			                <option value="Hong Kong">Hong Kong</option>
			                <option value="Hungary">Hungary</option>
			                <option value="Iceland">Iceland</option>
			                <option value="India">India</option>
			                <option value="Indonesia">Indonesia</option>
			                <option value="Iran">Iran</option>
			                <option value="Iraq">Iraq</option>
			                <option value="Ireland">Ireland</option>
			                <option value="Israel">Israel</option>
			                <option value="Italy">Italy</option>
			                <option value="Jamaica">Jamaica</option>
			                <option value="Japan">Japan</option>
			                <option value="Jordan">Jordan</option>
			                <option value="Kazakhstan">Kazakhstan</option>
			                <option value="Kenya">Kenya</option>
			                <option value="Kiribati">Kiribati</option>
			                <option value="South Korea">South Korea</option>
			                <option value="North Korea">North Korea</option>
			                <option value="Kuwait">Kuwait</option>
			                <option value="Kyrgyzstan">Kyrgyzstan</option>
			                <option value="Laos">Laos</option>
			                <option value="Latvia">Latvia</option>
			                <option value="Lebanon">Lebanon</option>
			                <option value="Lesotho">Lesotho</option>
			                <option value="Liberia">Liberia</option>
			                <option value="Libya">Libya</option>
			                <option value="Liechtenstein">Liechtenstein</option>
			                <option value="Lithuania">Lithuania</option>
			                <option value="Luxembourg">Luxembourg</option>
			                <option value="Macao">Macao</option>
			                <option value="Macedonia">Macedonia</option>
			                <option value="Madagascar">Madagascar</option>
			                <option value="Malawi">Malawi</option>
			                <option value="Malaysia">Malaysia</option>
			                <option value="Maldives">Maldives</option>
			                <option value="Mali">Mali</option>
			                <option value="Malta">Malta</option>
			                <option value="Marshall Islands">Marshall Islands</option>
			                <option value="Martinique">Martinique</option>
			                <option value="Mauritania">Mauritania</option>
			                <option value="Mauritius">Mauritius</option>
			                <option value="Mayotte">Mayotte</option>
			                <option value="Mexico">Mexico</option>
			                <option value="Micronesia">Micronesia</option>
			                <option value="Moldova">Moldova</option>
			                <option value="Monaco">Monaco</option>
			                <option value="Mongolia">Mongolia</option>
			                <option value="Montserrat">Montserrat</option>
			                <option value="Morocco">Morocco</option>
			                <option value="Mozambique">Mozambique</option>
			                <option value="Myanmar">Myanmar</option>
			                <option value="Namibia">Namibia</option>
			                <option value="Nauru">Nauru</option>
			                <option value="Nepal">Nepal</option>
			                <option value="Netherlands">Netherlands</option>
			                <option value="Netherlands Antilles">Netherlands Antilles</option>
			                <option value="New Caledonia">New Caledonia</option>
			                <option value="New Zealand">New Zealand</option>
			                <option value="Nicaragua">Nicaragua</option>
			                <option value="Niger">Niger</option>
			                <option value="Nigeria">Nigeria</option>
			                <option value="Niue">Niue</option>
			                <option value="Norfolk Island">Norfolk Island</option>
			                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
			                <option value="Norway">Norway</option>
			                <option value="Oman">Oman</option>
			                <option value="Pakistan">Pakistan</option>
			                <option value="Palau">Palau</option>
			                <option value="Palestinian Territory">Palestinian Territory</option>
			                <option value="Panama">Panama</option>
			                <option value="Papua New Guinea">Papua New Guinea</option>
			                <option value="Paraguay">Paraguay</option>
			                <option value="Peru">Peru</option>
			                <option value="Philippines">Philippines</option>
			                <option value="Pitcairn">Pitcairn</option>
			                <option value="Poland">Poland</option>
			                <option value="Portugal">Portugal</option>
			                <option value="Puerto Rico">Puerto Rico</option>
			                <option value="Qatar">Qatar</option>
			                <option value="Reunion">Reunion</option>
			                <option value="Romania">Romania</option>
			                <option value="Russian Federation">Russian Federation</option>
			                <option value="Rwanda">Rwanda</option>
			                <option value="Saint Helena">Saint Helena</option>
			                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
			                <option value="Saint Lucia">Saint Lucia</option>
			                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
			                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
			                <option value="Samoa">Samoa</option>
			                <option value="San Marino">San Marino</option>
			                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
			                <option value="Saudi Arabia">Saudi Arabia</option>
			                <option value="Senegal">Senegal</option>
			                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
			                <option value="Seychelles">Seychelles</option>
			                <option value="Sierra Leone">Sierra Leone</option>
			                <option value="Singapore">Singapore</option>
			                <option value="Slovakia">Slovakia</option>
			                <option value="Slovenia">Slovenia</option>
			                <option value="Solomon Islands">Solomon Islands</option>
			                <option value="Somalia">Somalia</option>
			                <option value="South Africa">South Africa</option>
			                <option value="Spain">Spain</option>
			                <option value="Sri Lanka">Sri Lanka</option>
			                <option value="Sudan">Sudan</option>
			                <option value="Suriname">Suriname</option>
			                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
			                <option value="Swaziland">Swaziland</option>
			                <option value="Sweden">Sweden</option>
			                <option value="Switzerland">Switzerland</option>
			                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
			                <option value="Taiwan">Taiwan</option>
			                <option value="Tajikistan">Tajikistan</option>
			                <option value="Tanzania">Tanzania</option>
			                <option value="Thailand">Thailand</option>
			                <option value="Timor-Leste">Timor-Leste</option>
			                <option value="Togo">Togo</option>
			                <option value="Tokelau">Tokelau</option>
			                <option value="Tonga">Tonga</option>
			                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
			                <option value="Tunisia">Tunisia</option>
			                <option value="Turkey">Turkey</option>
			                <option value="Turkmenistan">Turkmenistan</option>
			                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
			                <option value="Tuvalu">Tuvalu</option>
			                <option value="Uganda">Uganda</option>
			                <option value="Ukraine">Ukraine</option>
			                <option value="United Arab Emirates">United Arab Emirates</option>
			                <option value="United Kingdom">United Kingdom</option>
			                <option value="United States">United States</option>
			                <option value="Uruguay">Uruguay</option>
			                <option value="Uzbekistan">Uzbekistan</option>
			                <option value="Vanuatu">Vanuatu</option>
			                <option value="Venezuela">Venezuela</option>
			                <option value="Vietnam">Vietnam</option>
			                <option value="Virgin Islands">Virgin Islands</option>
			                <option value="Wallis and Futuna">Wallis and Futuna</option>
			                <option value="Western Sahara">Western Sahara</option>
			                <option value="Yemen">Yemen</option>
			                <option value="Zambia">Zambia</option>
			                <option value="Zimbabwe">Zimbabwe</option>
			            </select>
			            <input type="text" class="input" name="city" value="" placeholder="City">
			            <textarea name="TextArea2" id="TextArea2" rows="7" cols="38" maxlength="2000">Message</textarea>
			            <div class="block">
			                <input type="submit" id="Button5" name="" value="Send">
			                <input type="submit" id="Button5" name="" value="Reset">
			            </div>
			        </div>
			    </div>
			</div>
			<!-- contact us form end -->
				<!-- contact person -->
				<div id="Layer62" class="box11 a1">
				    <div id="Layer62_Container">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer62', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left: 96%;top:-16px;">
						</a>
				        <br>
				        <div class="box222 row" id="contact-person">
				            
				        </div>
				    </div>
				    <div class="center">
				        <a href="javascript:window.print()"><img src="<?php echo asset_url(); ?>images/print.png" id="Image26" alt="" class="img32"></a>
				    </div>
				</div>
				<!-- contact person end -->
			<!-- world wide offices -->
			<div id="Layer16" class="box1 s9" >
			    <div id="Layer16_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer16', 0, 'slidedown', 300, 'swing');return false;">
			            <br>
			            <br>
			            <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
			        </a>
			        <div class="box2 row" id="address" style=" height: 250px;">
			            
			        </div>
			        <div id="Carousel1_back" class="s10">
			            <a href="#"><img alt="Back"src="<?php echo asset_url(); ?>images/previoustxt0.png"></a>
			         </div>
			        <div id="Carousel1_next" class="s11">
			            <a href="#"><img alt="Next"src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
			        </div>
			    </div>
			</div>
			<!-- world wide end -->
			<!--  current post -->
			<div id="Layer58" class="box1 s5"  >
				   <div id=" Layer58_Container ">
				   <a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer58', 0, 'slidedown', 300, 'swing');return false; "><br><br>
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
				    </a>
				    <div class="greybox center" id="post">
				        
				    </div>
				</div>
			</div>
		</div>
	</div><?php }?>
</div>
<!-- <div id="Layer99" style="position: relative; text-align: center; visibility: visible; margin: 300px 0px 0px 550px; width: 332px; height: 90px; float: left; display: block; z-index: 3846;">
	<div id="Layer99_Container" style="width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
	<div id="wb_Text145" style="position:absolute;left:24px;top:19px;width:285px;height:16px;text-align:center;z-index:3529;">
	<span style="color:#C0C0C0;font-family:Georgia;font-size:12px;">ADDED SUCCESFULLY TO YOUR FAVORITE</span></div>
	<div id="Layer282" style="position:absolute;text-align:left;left:100px;top:50px;width:133px;height:24px;z-index:3530;" onclick="ShowObject('Layer99', 0);return false;">
	<div id="wb_Text146" style="position:absolute;left:45px;top:4px;width:49px;height:16px;text-align:center;z-index:3528;">
	<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><a href="#" class="style1" onclick="ShowObject('Layer99', 0);return false;">OK</a></span></div>
	</div>
	</div>
</div>  -->
<script>

function getComapnyProfile(id) {
	$.get(base_url+"desksite/company/"+id,{},function(data) {
		$("#company-profile").html(data);
		ShowObjectWithEffect( 'Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect( 'Layer48', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getComapnyAbout(id) {
	$.get(base_url+"desksite/company/about/"+id,{},function(data) {
		$("#about-us").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer23', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getComapnyCertificate(id) {
	$.get(base_url+"desksite/company/certificate/"+id,{},function(data) {
		$("#Layer147").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer144', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getAdvantage(id) {
	$.get(base_url+"desksite/advantage/"+id,{},function(data) {
		$("#advantage").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer79', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getContactPerson(id) {
	$.get(base_url+"desksite/contact/"+id,{},function(data) {
		$("#contact-person").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer62', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getMyFiles(id) {
	$.get(base_url+"desksite/myfiles/"+id,{},function(data) {
		$("#my-files").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer148', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function get3DProduct(id) {
	$.get(base_url+"desksite/3dproduct/"+id,{},function(data) {
		$("#3dproduct").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer14', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function getProductVideo(id) {
	$.get(base_url+"desksite/video/"+id,{},function(data) {
		$("#product-video").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer65', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function getCurrentRequest(id) {
	$.get(base_url+"desksite/request/"+id,{},function(data) {
		$("#post").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer58', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function addToCommunity(busi_id) {
	$.get(base_url+"add/community/"+busi_id ,{},function(data) {
	alert(data.msg);
			
	},'json');
}

function getProductCategory(id) {
	$.get(base_url+"desksite/product/menu/"+id, {},function(data) {
		$("#wb_desktop_menu").html(data);
		ShowObjectWithEffect( 'Layer44', 1, 'slidedown', 500, 'swing');
	},'html');
}


</script>
