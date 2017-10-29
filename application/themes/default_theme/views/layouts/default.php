<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $template['title']; ?></title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Pradeep Singh">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<?php if(!empty($browser_icon)) { ?>
<link href="<?php echo asset_url(); ?>images/<?php echo $browser_icon;?>" rel="shortcut icon" type="image/x-icon">
<?php } else { ?>
<link href="<?php echo asset_url(); ?>images/home.ico" rel="shortcut icon" type="image/x-icon">
<?php } ?>
<!-- link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png"-->
<link href="<?php echo asset_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet">
<link href="<?php echo asset_url(); ?>css/slick.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/slick-theme.css">
<link href="<?php echo asset_url(); ?>css/registration.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo asset_url();?>css/pages/<?php echo $page;?>.css?1">
<link rel="stylesheet" href="<?php echo asset_url();?>css/pages/common.css?1">
<style>
ul.dropdown-menu li > a:hover {
    background-color: #f1f1f1 !important;
}
a:focus,.btn:active {
   outline: none !important;
}
</style>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var asset_url = '<?php echo asset_url();?>';
</script>
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
</head>
<body>
    <?php echo $template['partials']['header']; ?>
    <?php echo $template['body']; ?>
	<?php echo $template['partials']['footer']; ?>
</body>
</html>
<script src="<?php echo asset_url(); ?>js/custom/account.js"></script>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."><div>'+text+'</div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
function myloadingstart(id)
{
	if(jQuery('#'+id).find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('#'+id).append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#fff',
		'opacity':'1',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'absolute',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('#'+id).css('cursor', 'wait');
}
function myloadingstop(id)
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('#'+id).css('cursor', 'default');
}
$(window).scroll(function(){
	$(this).scrollTop()<200?$("#totop").fadeOut():$("#totop").fadeIn()
});
$("#totop").on("click",function(){
	return $("html, body").animate({scrollTop:0},"fast"),!1
});
</script>