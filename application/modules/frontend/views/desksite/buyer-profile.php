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
<script src="<?php echo asset_url();?>js/jquery.ui.tooltip.min.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
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
<style>
#Layer48 {
   	position: absolute;
   	text-align: left;
   	left: 391px;
   	top: 50px;
   	width: 477px;
   	height: 414px;
   	z-index: 4000;
}
#wb_CssMenu2 {
    position: absolute;
    left: 460px;
    top: 293px;
    width: 122px;
    height: 31px;
    z-index: 98;
}
#wb_CssMenu2
{
   border: 0px #FFFFFF solid;
   background-color: transparent;
}
#wb_CssMenu2 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
}
#wb_CssMenu2 li
{
   float: left;
   margin: 0;
   padding: 0px 2px 0px 0px;
   width: 120px;
}
#wb_CssMenu2 a
{
   display: block;
   float: left;
   color: #FFFFFF;
   border: 0px #FF6347 solid;
   background-color: #FF6347;
   background-image: none;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   font-style: normal;
   text-decoration: none;
   width: 110px;
   height: 31px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 31px;
   text-align: center;
}
#wb_CssMenu2 li:hover a, #wb_CssMenu2 a:hover
{
   color: #FFFFFF;
   background-color: #3C3C3C;
   background-image: none;
   border: 0px #DCDCDC solid;
}
#wb_CssMenu2 li.firstmain
{
   padding-left: 0px;
}
#wb_CssMenu2 li.lastmain
{
   padding-right: 0px;
}
#wb_CssMenu2 li:hover, #wb_CssMenu2 li a:hover
{
   position: relative;
}
#wb_CssMenu2 a.withsubmenu
{
   padding: 0 5px 0 5px;
   width: 110px;
   background-image: none;
}
#wb_CssMenu2 li:hover a.withsubmenu, #wb_CssMenu2 a.withsubmenu:hover
{
   background-image: none;
}
#wb_CssMenu2 ul ul
{
   position: absolute;
   left: -9999px;
   top: -9999px;
   width: 120px;
   height: auto;
   border: none;
   background-color: transparent;
}
#wb_CssMenu2 ul :hover ul
{
   left: 0px;
   top: 31px;
   padding-top: 0px;
}
#wb_CssMenu2 .firstmain:hover ul
{
   left: 0px;
}
#wb_CssMenu2 li li
{
   width: 120px;
   padding: 0 0px 0px 0px;
   border: 0px #FFA500 solid;
   border-width: 0 0px;
}
#wb_CssMenu2 li li.firstitem
{
   border-top: 0px #FFA500 solid;
}
#wb_CssMenu2 li li.lastitem
{
   border-bottom: 0px #FFA500 solid;
}
#wb_CssMenu2 ul ul a, #wb_CssMenu2 ul :hover ul a
{
   float: none;
   margin: 0;
   width: 110px;
   height: auto;
   white-space: normal;
   padding: 9px 5px 9px 5px;
   background-color: #3C3C3C;
   background-image: none;
   border: 0px #FFFFFF solid;
   color: #FFFFFF;
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   font-style: normal;
   line-height: 13px;
   text-align: center;
   text-decoration: none;
}
#wb_CssMenu2 ul :hover ul .firstitem a
{
   margin-top: 0px;
}
#wb_CssMenu2 ul ul :hover a, #wb_CssMenu2 ul ul a:hover, #wb_CssMenu2 ul ul :hover ul :hover a, #wb_CssMenu2 ul ul :hover ul a:hover
{
   background-color: #FF6347;
   background-image: none;
   border: 0px #C0C0C0 solid;
   color: #FFFFFF;
}
#wb_CssMenu2 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
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
    /*$("#PhotoGallery1 a").draggable({
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
    });*/
    $("#Layer216").stickylayer({
        orientation: 1,
        position: ['33%', 60],
        delay: 0
    });
    $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
    $("a[rel^='PhotoGallery4']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var zindex = 250;
    /*$("#PhotoGallery4 a").draggable({
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
    });*/
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
        position: ['33%', 50],
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
    /*var Carousel1Opts = {
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
    });*/
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
        items: '#Image67',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#Image67").tooltip(jQueryToolTip5Opts);
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
			<div id="Layer46" style="text-align:left;left:0;top:0;right:0;bottom:0;z-index:33;">
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
				<div id="Layer5"class="bottomnav" style="height:65px;">
					<div id=" Layer5_Container ">
					    <div class="row ">
					        <div class="col-md-2 col-sm-2 bg">
					        	<div class="pull-right nav23">
					               	<?php if($Desksite['gaurantee_period'] !=''){?>
					               	<a href="#" class="navigation2" title="This buyer is an active Buyer.">
					                	<img src="<?php echo asset_url(); ?>images/Active.png" id="Image94" alt="This buyer is an active Buyer." class="img28" title="This buyer is an active Buyer."/>
					                </a>
					                <?php }?>
					                <a href="#" class="navigation2" title="Buyer is member in your community." >
						                <?php if($Desksite['is_logo_verified'] !=''){?>
										<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image67" alt="Buyer has a current request, click on Current Requests to view deal."  class="img28" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);" title="Buyer has a current request, click on Current Requests to view deal."/>
										<?php }?>
									</a>
					               	<a href="#" class="navigation2 " title="Buyer is member in your community.">
					                	<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="Buyer is member in your community." title="Buyer is member in your community." class="img28">
					               </a>
				                </div>
					        </div>
					        <div class="col-md-8 col-sm-8 bg ">
					        		<center>
						        		<a href="javascript:getBuyerComapnyProfile(<?php echo $Desksite['busi_id']?>)" class="navigation2n ">
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
									    <a href="javascript:getCurrentRequest(<?php echo $Desksite['busi_id']?>)" class="navigation2n" >
									   		<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image71" alt="" class="imgnav" style="margin-left:-10px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
									   		<p class="font2">Current <br>Request</p>
									   	</a>
							            <a href="javascript:getMyFiles(<?php echo $Desksite['busi_id'];?>)" class="navigation2n" >
										    <img src="<?php echo asset_url(); ?>images/folder-user.png" id="Image8" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
										    <p class="font2">My Files</p>
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
								        <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksite['flag'];?>" id="" width="30px" alt="" >
							        </div>
								    <div id="wb_Text50" class="c3">
								        <p class="c1"><?php echo $Desksite['company_country']." | ".$Desksite['company_province']; ?></p>
								    </div>
								    <div id="wb_Text8" class="c2">
							        	<p class="c1"><strong><?php echo date('h:i A');?></strong></p>
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
			<div id="Layer23" class="box1 a4" style="width:495px;padding:15px;">
			    <div id="Layer23_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer23', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/about.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;ABOUT US</p>
			        <div class="box2" id="about-us" style="height: 512px;padding:5px 20px;border-radius:5px;">
			            
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
			<div id="Layer48" class="box1" style="width:477px;padding:15px;">
			    <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer48', 0, 'slidedown', 300, 'swing');return false;">
				 	<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;"/>
				</a>
			    <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/barcompany-profile.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY PROFILE</p>
			    <div>
			        <div class="box2" id="company-profile" style=" height:340px;">
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
			        <div class="box2 blackbox" id="advantage"></div>
			        
			    </div>
			</div>
			<!-- advantages ends-->
			<!-- my files -->
			<div id="Layer148" class="box1 a3" style="width:517px;padding:15px;">
			    <div id="Layer148_Container">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer148', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					</a>
			        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/my_file.png" alt="" class="img32"> &nbsp;&nbsp;MY FILES</p>
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
			        <a href="javascript:addToMyCommunity(<?php echo $Desksite['busi_id'];?>);" target="_self" class="antag">
			        Add To Community
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/cha0t.png" id="Image19" alt="" class="img32">
			        <a href="javascript:openChatWithBuyer(<?php echo $Desksite['busi_id'];?>);" target="_self" class="antag">
			        Chat
					</a>
			    </div>
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/like.png" id="Image19" alt="" class="img32">
			        <a href="javascript:likeMyDesksite(<?php echo $Desksite['busi_id'];?>);" target="_self" class="antag">
			        Like
					</a>
			    </div>
			    <!-- div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/img0908.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        	Share
					</a>
			    </div-->
			    <div class="inline box5">
			        <img src="<?php echo asset_url(); ?>images/posts-icon.png" id="Image19" alt="" class="img32">
			        <a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self" class="antag">
			        Send General Offer
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
			<div id="Layer216" class="box1 a2" style="width:496px;padding:15px;">
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
			            <textarea name="TextArea2" id="TextArea2" rows="7" cols="38" maxlength="2000" style="width:407px;">Message</textarea>
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
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left: 96%;">
						</a>
				        <div class="box222 row" id="contact-person" style="margin:0px;">
				            
				        </div>
				    </div>
				    <div class="center">
				        <a href="javascript:printInvoice();"><img src="<?php echo asset_url(); ?>images/print.png" id="Image26" alt="" class="img32"></a>
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
			<div id="Layer58" class="box1 s5" style="width:453px;padding:15px;">
			   <div id=" Layer58_Container ">
			   		<a href="# " onclick="ShowObjectWithEffect('Layer58', 0, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer5', 1, 'slidedown', 500, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
			    	</a>
			    	<p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url();?>images/buyer-request.png" id="Image12" class="img32"> &nbsp;&nbsp;&nbsp;POSTS & CURRENT REQUESTS</p>
			    	<div class="greybox center" id="post" style="border-radius:4px;">
			        
			    	</div>
			    	<div id="wb_CssMenu2">
						<ul>
							<li class="firstmain"><a class="withsubmenu" href="#" target="_self">Translate</a>
								<ul>
									<li class="firstitem"><a href="#" target="_self">To&nbsp;my&nbsp;langauge</a>
									</li>
									<li class="lastitem"><a href="#" target="_self">To&nbsp;english</a>
									</li>
								</ul>
							</li>
						</ul>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
</div>
<script>

function getBuyerComapnyProfile(id) {
	$.get(base_url+"desksite/company/buyer/"+id,{},function(data) {
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

function getProductCategory(id) {
	$.get(base_url+"desksite/product/menu/"+id, {},function(data) {
		$("#wb_desktop_menu").html(data);
		ShowObjectWithEffect( 'Layer44', 1, 'slidedown', 500, 'swing');
	},'html');
}
function addToMyCommunity(id) {
	$.get(base_url+"addtomycommunity/"+id,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}

function openChatWithBuyer(seller_id) {
	if(accept_chat == 1) {
		popupwnd('<?php echo base_url();?>global/chat/'+buyer_id,'no','no','no','no','no','no','750','50','430','720');
	} else {
		customAlert('Sorry.. Buyer status is " Don\'t Disturb".. Please try again on other time, status may be changed soon.');
	}
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
	$.get(base_url+"desksite/like/"+busi_id,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}

</script>
