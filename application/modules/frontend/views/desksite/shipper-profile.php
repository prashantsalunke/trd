<!-- css js -->
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
<script src="<?php echo asset_url();?>js/jquery.wiggle.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.mouse.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.draggable.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<style>
div.pp_overlay {
	z-index:12800 !important;
}
div.pp_pic_holder {
	z-index:12801 !important;
}
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
   /* var jQueryToolTip1Opts = {
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
    $("#wb_Image89").tooltip(jQueryToolTip2Opts);
    $("#SlideShow1").slideshow({
        interval: 8000,
        type: 'sequence',
        effect: 'fade',
        direction: '',
        pagination: false,
        fullscreen: 3,
        effectlength: 1000
    }); */
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
        position: ['30%', 60],
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
        position: ['30%', 50],
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
        position: [70, 30],
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
			<!-- user profile details -->
			<div class="c12">
			    <div id="wb_Image53" class="c13">
			    	<?php if(!empty($Desksite['flag'])) { ?>
			        <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksite['flag'];?>" id="Image53" alt="<?php echo $Desksite['company_country'];?>" style="width:28px;">
			        <?php } ?>
			  	</div>
			    <div id="wb_Text50" class="c3">
			        <p class="c1"><?php echo $Desksite['company_country']." | ".$Desksite['company_province']; ?></p>
			    </div>
			    <div id="wb_Text8" class="c2">
			        <p class="c1"><strong><?php echo date('h:i A');?></strong></p>
			    </div>
			</div>
			<!-- profile end -->
			<!-- Main Slider -->
			<div id="Layer46" style="text-align:left;left:0;top:0;right:0;bottom:0;z-index:33;">
			    <div id="SlideShow1" >
			    	<?php if(!empty($Desksite['desksite_bg1'])) { ?>
			        <img class="image d1" src=" <?php echo asset_url().$Desksite['desksite_bg1']; ?> " alt="" title="" />
			        <img class="image d2" src="<?php echo asset_url().$Desksite['desksite_bg2']; ?>" alt="" title="" />
			        <?php } else { ?>
			        <img class="image d1" src=" <?php echo asset_url(); ?>images/member-desksite.jpg" alt="" title="" />
			        <?php } ?>
				</div>
			</div>
		    <!-- slider ends -->
		    <!-- left navigation -->
		    <div id="Layer88" class="leftnav">
		        <div id="Layer116" class="left-fixed">
		            <div id="wb_Image61">
		               <?php if($Desksite['plan_id'] > 1){?>
		               	 <img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" title="Black Horse Member" alt="Black Horse Member" class="img28">
		               	 <?php } else { ?>
		               	 <img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" title="Black Horse Member" alt="Black Horse Member" class="img28" style="opacity:0.15;">
		               	 <?php } ?>
	               	 </div>
		            <div id="wb_Image67">
		                <a href="javascript:getVerified(<?php echo $Desksite['busi_id']?>);">
		                <?php if($Desksite['is_logo_verified'] !=''){?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image67" alt=""  class="img28">
						<?php }?></a>
					</div>
		            <div id="wb_Image76">
		                <img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="This shipper is member in your community" title="This shipper is member in your community" class="img28">
	                </div>
		        </div>
		    </div>
		    <!-- left navigation ends -->
		   
			<!-- bottom navigation -->
			<div class="container">
				<div id="Layer5"class="bottomnav">
					<div id=" Layer5_Container" style="width:1277px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					    <div class="row ">
					        <div class="col-md-1 col-sm-1" style="width:120px;">
					        <br>
					            <a href="javascript:serviceList(<?php echo $Desksite['busi_id'];?>);" class="product" style="color:#1f90f6;">
					            	Services
								</a>
					        </div>
					        <div class="col-md-9 col-sm-9 bg" style="width:82%;padding-left:50px;">
					            <div class="col-md-5" style="padding-left:35px !important;">
						            <a href="javascript:getComapnyProfile(<?php echo $Desksite['busi_id']?>)" class="navigation2 ">
								     	<img src="<?php echo asset_url(); ?>images/img0178.png" id="Image60" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						            	<p class="font2">Company Profile</p>
						          	</a>
						            <a href="javascript:getComapnyAbout(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    <img src="<?php echo asset_url(); ?>images/about.png" id="Image5" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								    <p class="font2">About Us</p>
								    </a>
								    <a href="javascript:getRoutes(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    <img src="<?php echo asset_url(); ?>images/Airplane.png" id="Image43" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								     <p class="font2">Routes</p>
								    </a>
						            <a href="javascript:getComapnyCertificate(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    <img src="<?php echo asset_url(); ?>images/certificates.png" id="Image7" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								     <p class="font2">Certificates</p>
								    </a>
						            
						            <a href="javascript:getMyFiles(<?php echo $Desksite['busi_id'];?>)" class="navigation2" >
								    <img src="<?php echo asset_url(); ?>images/folder-user.png" id="Image8" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								    <p class="font2">My Files</p>
								    </a>
						        </div>
						        <div class="col-md-3">
						            <a href="javascript:getProductVideo(<?php echo $Desksite['busi_id']?>);" class="navigation2" >
						                <!--  --><img src="<?php echo asset_url(); ?>images/img0179.png" id="Image77" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						                <p class="font2">Recent Videos</p>
						            </a>
						            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer72', 1, 'slidedown', 500, 'swing');return false;">
									   <img src="<?php echo asset_url(); ?>images/UD-0.png" id="Image79" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
									   <p class="font2">UDtalks  Images</p>
								   </a>
						            <a href="javascript:getCurrentPost(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								   <img src="<?php echo asset_url(); ?>images/img0180.png" id="Image71" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   <p class="font2">Current  Post</p>
								   </a>
						        </div>
						        <div class="col-md-3" style="width:27%;">
						            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer16', 1, 'slidedown', 500, 'swing');return false;">
								   		<img src="<?php echo asset_url(); ?>images/web_site.png" id="Image75" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   	   	<p class="font5">World-wide  Offices</p>
								   	</a>
						            <a href="javascript:getContactPerson(<?php echo $Desksite['busi_id'];?>);" class="navigation2" >
								   		<img src="<?php echo asset_url(); ?>images/img0395-new.png" id="Image9" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font2">Contact Person</p>
								   	</a>
						            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer49', 1, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer88', 0, 'slideleft', 500, 'swing');return false;">
								   		<img src="<?php echo asset_url(); ?>images/contact_email.png" id="Image9" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font5">Contact, Add Share...</p>
								   	</a>
						        </div>
					    	</div>
					    	<div class="col-md-2 col-sm-2  bg121" style="width:7%;">
					        	<a href="javascript:showWebsite();" class="navigation2" style="display:none;">
							   		<img src="<?php echo asset_url(); ?>images/system-shutdown-5.png" id="Image47" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							   	   <p class="font2">Switch to <br> Classic Mode</p>
							   </a>
					    	</div>
						</div>
					</div>
				</div>
			</div>
			 <?php }?>
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
			        <div class="box2" id="verified">
			            
			        </div>
			    </div>
			    <!-- verified member end -->
			    <!-- product popup -->
			    <div id="Layer44" class="box1" onmouseleave="ShowObjectWithEffect('Layer18', 0, 'slidedown', 500);return false;" style="position:fixed;top:30px;width:863px;padding:15px;">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer44', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:98%;">
					</a>
			        <div>
			            <div id="my-services">
			                
			            </div>
			        </div>
			    </div>
			<!-- product popup ends -->
				
			<!--about us-->
			<div id="Layer23" class="box1 a4" style="padding:15px;width:411px;">
			    <div id="Layer23_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer23', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/about.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;ABOUT US</p>
			        <div class="box2" id="about-us" style="height: 512px;padding-top:5px;">
			            
			        </div>
			    </div>
			</div>
			
			<!-- about us end -->
			<!-- certification -->
			<div id="Layer144" class="box11 a4" style="width:503px;padding:15px;">
			    <div id="Layer144_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer144', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/certificates.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY LICENSE AND CERTIFICATES</p>
		       		<div id="Layer147"></div>
			    </div>
			</div>
			<!-- certification ends -->
			
			<!-- company profile -->
			<div id="Layer48" class="box1" style="left:36%; top:3%;width: 316px;padding:15px;">
			    <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer48', 0, 'slidedown', 300, 'swing');return false;">
				 	<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			    <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/barcompany-profile.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY PROFILE
			   </p>
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
			
			<!-- Routes -->
			<div id="Layer33" class="box1 a3" style="width:314px;padding:15px;">
			    <div id="Layer79_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer33', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:94%;">
						</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/Airplane.png" alt="" class="img32" > &nbsp;&nbsp;&nbsp;MAIN ROUTES</p>
			        <div class="box2 blackbox" id="route"></div>
			        
			    </div>
			</div>
			<!-- routes ends-->
			
			<!-- my files -->
			<div id="Layer148" class="box1 a3" style="width:517px;padding:15px;">
			    <div id="Layer148_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer148', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/my_file.png" alt="" class="img32" style="left:96%;"> &nbsp;&nbsp;&nbsp;MY FILES</p>
			        <div class="box22 blackbox" id="my-files">
			           
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
			<!-- search section -->
			<div id="Layer53" class="bg11">
			    <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer53', 0, 'slidedown', 300, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" >
				</a>
				<form method="post" action="<?php echo base_url();?>product/search">
				    <div class="col-sm-11 col-xs-11" style="padding: 0px;">
				        <input type="text" id="SiteSearch1" name="keyword" value="" placeholder="Type the item or product name">
				        <input type="hidden" id="busi_id" name="busi_id" value="<?php echo $Desksites[0]['busi_id']?>" >
				        
				    </div>
				    <div class="col-sm-1 col-xs-1" style="padding: 0px;">
				        <button class="btn btn-block search-btn" type="submit">
				            <p aria-hidden="true" class="glyphicon glyphicon-search"></p>
				        </button>
				    </div>
			    </form>
			</div>
			<!-- search section ends -->
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
			        <a href="javascript:addShipperToMyFavourite(<?php echo $Desksites[0]['busi_id']?>,2);" target="_self" class="antag">
					Add To Favorite
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/menuaddcomm.png" id="Image19" alt="" class="img32">
			        <a href="javascript:addToMyCommunity(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
			        Add To Community
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/cha0t.png" id="Image19" alt="" class="img32">
			        <a href="javascript:openChatWithBuyer(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
			        Chat
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/like.png" id="Image19" alt="" class="img32">
			        <a href="javascript:javascript:likeMyDesksite(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
			        Like & Comments
					</a>
			    </div>
			    <!-- div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/img0908.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Share
					</a>
			    </div-->
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
			<div id="Layer216" class="box1 a2" style="width:417px;padding:15px;">
			    <div id="Layer216_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer216', 0, 'slideleft', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/contact_email.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;CONTACT US</p>
			        <div class="box2">
			            <input type="text" class="input" name="name" value="" placeholder="Name">
			            <input type="text" class="input" name="phone" value="" placeholder="Phone">
			            <input type="email" class="input" name="email" value="" placeholder="Email">
			            <select name="country" size="1" id="Combobox1" class="input">
			                <option selected="" value="Select">Select your country</option>
			                <?php foreach ($countries as $country) { ?>
			                <option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
			                <?php } ?>
			            </select>
			            <input type="text" class="input" name="city" value="" placeholder="City">
			            <textarea name="TextArea2" id="TextArea2" rows="7" cols="38" maxlength="2000" style="width:99%;">Message</textarea>
			            <div style="width:99%;">
			                <input type="submit" id="Button5" name="" value="Send" style="margin-left:5px;">
			                <input type="submit" id="Button5" name="" value="Reset">
			            </div>
			        </div>
			    </div>
			</div>
			<!-- contact us form end -->
				<!-- contact person -->
				<div id="Layer62" class="box11 a1" style="width:518px;padding:15px;">
				    <div id="Layer62_Container">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer62', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						</a>
				        <br>
				        <div class="box222 row" id="contact-person" style="margin:0px;">
				            
				        </div>
				    </div>
				    <div class="center">
				        <a href="javascript:printInvoice();"><img src="<?php echo asset_url(); ?>images/print.png" id="Image26" alt="" class="img32"></a>
				    </div>
				</div>
				<!-- contact person end -->
			<!-- world wide offices -->
			<div id="Layer16" class="box1 s9" style="width:437px;padding:15px;">
			    <div id="Layer16_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer16', 0, 'slidedown', 300, 'swing');return false;">
			            <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
			        </a>
			        <div class="box2 row carousel slide" id="address" style="height: 250px;margin:0px;padding-top:30px;" data-ride="carousel">
			        	<div class="carousel-inner" role="listbox">
			        		<div class="item active">
					            <div class="col-md-2">
					                <br>
					                <?php if(!empty($Desksites[0]['flag'])) { ?>
					                <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksites[0]['flag'];?>" id="Shape12" alt="" style="width:58px;">
					                <?php } ?>
					            </div>
					            <div class="col-md-10 left">
					            	<br>
					                <p   class="s13"><strong><?php echo $Desksites[0]['company_country'];?> Branch</strong></p>
					                <p   class="s15"><?php echo $Desksites[0]['company_street'];?>, <?php echo $Desksites[0]['company_city'];?>, <?php echo $Desksites[0]['company_province'];?>, <?php echo $Desksites[0]['company_country'];?>.</p>
					                <p   class="s13">+<?php echo $Desksites[0]['telephone_code'];?> <?php echo $Desksites[0]['telephone_city_code'];?> <?php echo $Desksites[0]['telephone_number'];?></p>
					                <br>
					                <p class="s12"><strong><?php echo $Desksites[0]['company_email'];?></strong></p>
					            </div>
				            </div>
				        	<?php foreach ($branches as $branch) { ?>
				        	<div class="item">
					            <div class="col-md-2"><br>
					                <?php if(!empty($branch['flag'])) { ?>
					                <img src="<?php echo asset_url(); ?>images/flags/<?php echo $branch['flag'];?>" id="Shape12" alt="" style="width:58px;">
					                <?php } ?>
					            </div>
					            <div class="col-md-10 left">
					            	<br>
					                <p   class="s13"><strong><?php echo $branch['country'];?> Branch</strong></p>
					                <p   class="s15"><?php echo $branch['street'];?>, <?php echo $branch['city'];?>, <?php echo $branch['province'];?>, <?php echo $branch['country'];?>.</p>
					                <p   class="s13">+<?php echo $branch['country_code'];?> <?php echo $branch['city_code'];?> <?php echo $branch['telephone1'];?></p>
					                <br>
					                <p class="s12"><strong><?php echo $branch['fax'];?></strong></p>
					            </div>
				            </div>
				            <?php } ?>
			            </div>
			        </div>
			        <br>
			        <div style="width:320px;position:relative">
				        <div id="Carousel1_back" class="s10 left carousel-control" href="#address" data-slide="prev">
				            <a href="#"><img alt="Back"src="<?php echo asset_url(); ?>images/previoustxt0.png"></a>
				         </div>
				        <div id="Carousel1_next" class="s11 right carousel-control" href="#address" data-slide="next">
				            <a href="#"><img alt="Next"src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
				        </div>
			        </div>
			        <br>
			    </div>
			</div>
			<!-- world wide end -->
			<!--  current post -->
			<div id="Layer58" class="box1 s5" style="width:414px;padding:15px;">
				<div id=" Layer58_Container ">
				   	<a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer58', 0, 'slidedown', 300, 'swing');return false; ">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
				    </a>
				    <div class="greybox center" id="post">
				        
				    </div>
				</div>
			</div>
			<!--  current post end-->
				<!-- UDtalk images -->
				<div id="Layer72" class="box1 c19" style="width:509px;padding:15px;">
				   <div id=" Layer72_Container ">
				   		<a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer72', 0, 'slidedown', 300, 'swing');return false; ">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
				    	</a>
				    	<p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/udLOGO.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;AMAZING BUSINESS COMMUNICATION APP</p>
				    	<div class="box2" id="ud-talk" style="height:449px">
							<br>
						   	<div id="wb_Text93" style="text-align:center;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Discover more ( View products, Catalouge or Watch videos), contact with this member through an amazing way, add him to your mobile contacts, chat with him on you phone, make an Instant call, send SMS, Email, get your own business platform and much more..</span>
							</div>
							<div id="wb_Text110" style="text-align:center;padding-top:5px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong>Download UDtalks ( business chat app ) on your mobile for free</strong></span>
							</div>
							<div id="wb_Text108" style="text-align:center;padding-top:5px;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><a href="http://www.udtalks.com" target="_blank" class="style16">www.udtalks.com</a></span>
							</div>
							<div id="wb_Text98" style="text-align:center;padding-top:10px;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Click the image to enlarge, open UDtalks and scan</span>
							</div>
							<div id="wb_PhotoGallery1" style="height:288px;overflow-y:scroll;">
								<table id="PhotoGallery1">
								   	<tbody>
								   		<?php for ($i=0; $i < count($images); ) { ?>
								   		<tr>
								      		<td class="image"><a href="<?php echo asset_url();?><?php echo $images[$i]['image'];?>" data-rel="prettyPhoto_SlideShow31[SlideShow31]" rel="prettyPhoto_SlideShow31[SlideShow31]" title="BCard2" class="img<?php echo $i;?> ui-draggable" style="position: relative;"><img alt="UD Talk" id="PhotoGallery1_img<?php echo $i;?>" src="<?php echo asset_url();?><?php echo $images[$i]['image'];?>" title="UD Talk"></a></td>
								      		<td class="image"><?php if(!empty($images[$i+1]['image'])) { ?><a href="<?php echo asset_url();?><?php echo $images[$i+1]['image'];?>" data-rel="prettyPhoto_SlideShow31[SlideShow31]" rel="prettyPhoto_SlideShow31[SlideShow31]" title="UDTalk" class="img<?php echo ($i+1);?> ui-draggable" style="position: relative;"><img alt="UD Talk" id="PhotoGallery1_img<?php echo ($i+1);?>" src="<?php echo asset_url();?><?php echo $images[$i+1]['image'];?>" title="UD Talk"></a><?php } ?></td>
								   		</tr>
								   		<?php $i = $i + 2;} ?>
									</tbody>
								</table>
							</div>
				    	</div>
					</div>
				</div>
				<!-- UDtalk images end -->
				<!-- Videos section -->
				<div id="Layer65" class="box1 c19" style="width:505px;padding:15px;">
					<div id=" Layer65_Container ">
						<a href="#" onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer65', 0, 'slidedown', 300, 'swing');return false; ">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						 </a>
						<p class="box1font3" style="padding-left:0px;">
							<img src="<?php echo asset_url(); ?>images/contact_email.png" alt="" class="img32">RECENT VIDEOS
						</p>
						<div class="box2">
							<div class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" id="product-video" role="listbox">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="Layer65" class="box1 c19">
					   <div id=" Layer65_Container ">
					    <a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer65', 0, 'slidedown', 300, 'swing');return false; "><br><br>
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
					    </a>
					    <br>
					    
					    <div id="wb_Text1" class="c17">
					        <p class="c21">SHOW ALL</p>
					    </div>
					    <div id="Carousel3_next" class="c22"><a style="cursor:pointer">
							<img alt="Next" style="border-width:0"src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
						</div>
					</div>
				</div>
				<!-- videos section end -->
				<!-- products in d3-->
				<!-- products in d3-->
				
				<div id="Layer14" class="box1 c19" >
				   <div id=" Layer14_Container ">
					   <a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer14', 0, 'slidedown', 300, 'swing');return false; "><br><br>
						 <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
					    </a>
					    <p class="box1font3"><img src="<?php echo asset_url(); ?>images/3d.png" alt="" class="img32">PRODUCTS IN 3D VIEW</p>
					    <div class="box2" style=" height: 521px;">
					   
					    <div class="carousel slide" data-ride="carousel">
								<div class="carousel-inner"  id="3dproduct" role="listbox"></div>
								
                    		<a class="left carousel-control" role="button" data-slide="prev" style="background: none;"> 
					    		<img alt="Back" style="border-width:0"src="<?php echo asset_url(); ?>images/previoustxt0.png">
							</a> 
					   
						   	<a class="right carousel-control" role="button" data-slide="next" style="background: none;">
							    <img alt="Next" style="border-width:0"src="<?php echo asset_url(); ?>images/nexttxt0.png">
							</a>
						</div>
					</div>
				</div>
			</div>
				<!-- products in 3d end -->
	</div>
</div>
<div id="Layer99" style="position: relative; text-align: center; visibility: none; margin: 300px 0px 0px 550px; width: 332px; height: 90px; float: left; display: block; z-index: 3846;">
	<div id="Layer99_Container" style="width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
	<div id="wb_Text145" style="position:absolute;left:24px;top:19px;width:285px;height:16px;text-align:center;z-index:3529;">
	<span style="color:#C0C0C0;font-family:Georgia;font-size:12px;">ADDED SUCCESFULLY TO YOUR FAVORITE</span></div>
	<div id="Layer282" style="position:absolute;text-align:left;left:100px;top:50px;width:133px;height:24px;z-index:3530;" onclick="ShowObject('Layer99', 0);return false;">
	<div id="wb_Text146" style="position:absolute;left:45px;top:4px;width:49px;height:16px;text-align:center;z-index:3528;">
	<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><a href="#" class="style1" onclick="ShowObject('Layer99', 0);return false;">OK</a></span></div>
	</div>
	</div>
</div>
<script>

function getComapnyProfile(id) {
	$.get(base_url+"desksite/company/shipper/"+id,{},function(data) {
		$("#company-profile").html(data);
		ShowObjectWithEffect( 'Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect( 'Layer48', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getComapnyAbout(id) {
	$.get(base_url+"desksite/company/about/"+id,{},function(data) {
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer23', 1, 'slidedown', 500, 'swing');
		$("#about-us").html(data);
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
function getRoutes(id) {
	$.get(base_url+"desksite/route/"+id,{},function(data) {
		$("#route").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer33', 1, 'slidedown', 500, 'swing');
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
	$.get(base_url+"desksite/video/shipper/"+id,{},function(data) {
		$("#product-video").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer65', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function getCurrentPost(id) {
	$.get(base_url+"desksite/post/"+id,{},function(data) {
		$("#post").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer58', 1, 'slidedown', 500, 'swing');
			
	},'html');
}

function serviceList(busi_id) {
	$.get(base_url+"desksite/shipper/services/"+busi_id,{},function(data) {
		$("#my-services").html(data);
		ShowObjectWithEffect( 'Layer44', 1, 'slidedown', 500, 'swing');
	},'html');
}

function addToFavourite(id) {
	var type =1;
	$.get(base_url+"desksite/favourite/"+id+"/"+type,{},function(data) {
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer58', 1, 'slidedown', 500, 'swing');
	},'json');
}
function addShipperToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(resp) {
		customAlert(resp.msg);
	},'json');
}

function addToMyCommunity(id) {
	$.get(base_url+"addtomycommunity/"+id,{},function(data) {
		customAlert(data.msg);
	},'json');
}

function openChatWithBuyer(seller_id) {
	if(accept_chat == 1) {
		popupwnd('<?php echo base_url();?>global/chat/'+buyer_id,'no','no','no','no','no','no','750','50','430','720');
	} else {
		customAlert('Sorry.. Buyer status is " Don\'t Disturb".. Please try again on other time, status may be changed soon.');
	}
}

function getVerified(id) {
	$.get(base_url+"desksite/verified/"+id ,{},function(data) {
		$("#verified").html(data);
		ShowObjectWithEffect('Layer61', 1, 'slideleft', 500, 'swing');
			
	},'html');
}


function viewCatalogueBook(id) {
	$.get(base_url+"catalogue/popup/"+id,{},function(data){
		$("#catalogue_page_content").html(data);
		$("#pcatalogue_id").val(id);
		$("#vcatalogue_overlay").modal('show');
		var $mybook 		= $('#mybook');
		var $bttn_next		= $('#next_page_button');
		var $bttn_prev		= $('#prev_page_button');
		var $loading		= $('#loading');
		var $mybook_images	= $mybook.find('img');
		var cnt_images		= $mybook_images.length;
		var loaded			= 0;
		//preload all the images in the book,
		//and then call the booklet plugin
		$mybook_images.each(function(){
			var $img 	= $(this);
			var source	= $img.attr('src');
			$('<img/>').load(function(){
				++loaded;
				if(loaded == cnt_images){
					$loading.hide();
					$bttn_next.show();
					$bttn_prev.show();
					$mybook.show().booklet({
						name:               null,                            // name of the booklet to display in the document title bar
						width:              740,                             // container width
						height:             450,                             // container height
						speed:              600,                             // speed of the transition between pages
						direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
						startingPage:       0,                               // index of the first page to be displayed
						easing:             'easeInOutQuad',                 // easing method for complete transition
						easeIn:             'easeInQuad',                    // easing method for first half of transition
						easeOut:            'easeOutQuad',                   // easing method for second half of transition

						closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
						closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
						closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
						closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
						closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
						covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

						pagePadding:        10,                              // padding for each page wrapper
						pageNumbers:        false,                            // display page numbers on each page

						hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
						overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
						tabs:               false,                           // adds tabs along the top of the pages
						tabWidth:           60,                              // set the width of the tabs
						tabHeight:          20,                              // set the height of the tabs
						arrows:             false,                           // adds arrows overlayed over the book edges
						cursor:             'pointer',                       // cursor css setting for side bar areas

						hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
						keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
						next:               $bttn_next,          			// selector for element to use as click trigger for next page
						prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

						menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
						pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
						chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

						shadows:            true,                            // display shadows on page animations
						shadowTopFwdWidth:  166,                             // shadow width for top forward anim
						shadowTopBackWidth: 166,                             // shadow width for top back anim
						shadowBtmWidth:     50,                              // shadow width for bottom shadow

						before:             function(){},                    // callback invoked before each page turn animation
						after:              function(){}                     // callback invoked after each page turn animation
					});
					//Cufon.refresh();
				}
			}).attr('src',source);
		});
	},'html');
}

function showWebsite() {
	ShowObjectWithEffect('Layer46', 1, 'bounce', 500, 'easeInOutBounce');
	ShowObjectWithEffect('Layer46', 0, 'pulsate', 500, 'swing');
	setTimeout(openWebsite, 1000);
}

function openWebsite() {
	window.location.href = "<?php echo base_url();?>shipper/website/<?php echo $busi_id;?>";
}

function likeMySVideo(id,type,likeid) {
	$.get(base_url+"likevideo/"+id,{ type: type},function(data) {
		if(data.status == 1) {
			var likes = parseInt($("#"+likeid).html());
			likes = likes + 1;
			$("#"+likeid).html(likes);
		}
		alert(data.msg);
	},'json');
}
function printInvoice() {    
	var printContents = document.getElementById('contact-person').innerHTML;
    w = window.open();
    w.document.write(printContents);
    w.document.write('<scr' + 'ipt type="text/javascript">' + 'window.onload = function() { window.print(); window.close(); };' + '</sc' + 'ript>');
    w.document.close(); // necessary for IE >= 10
    w.focus(); // necessary for IE >= 10
    return true;
}
function likeMyDesksite(busi_id) {
	$.get(base_url+"desksite/like/"+id,{},function(data) {
		alert(data.msg);
	},'json');
}
$("a[data-rel='prettyPhoto_SlideShow31[SlideShow31]']").attr('rel', 'prettyPhoto_SlideShow31[SlideShow31]');
$("a[rel^='prettyPhoto_SlideShow31']").prettyPhoto({theme:'facebook',social_tools:false});
</script>
