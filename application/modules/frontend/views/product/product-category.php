<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seller Products</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords"
	content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/jquery.ui.all.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-slide.min.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/slimbox/css/slimbox2.css">
<script src="<?php echo asset_url();?>js/slimbox/js/slimbox2.js"></script>
<script>
var features = '';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch4');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var html = '';
      var results = '';
      html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
      for (var n=0; n<searchResults_length; n++)
      {
         var page_keywords = searchResults[n].keywords;
         results = results + '<strong><a style="color:#0000FF" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>';
      }
      if (searchResults_length == 0)
      {
         results = 'No results';
      }
      else
      {
         html = html + searchResults_length;
         html = html + ' result(s) found for search term: ';
         html = html + value;
         html = html + '<br><br>';
      }
      html = html + results;
      html = html + '<\/span>';
      $('#').css('padding' , '2px');
      $('#').html(html);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch4');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   searchParseURL();
   var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch4');
   var selectedItem = null;
   var setSelectedItem = function(item)
   {
      selectedItem = item;
      if (selectedItem === null)
      {
         $autocomplete.hide();
         return;
      }
      if (selectedItem < 0)
      {
         selectedItem = 0;
      }
      if (selectedItem >= $autocomplete.find('li').length)
      {
         selectedItem = $autocomplete.find('li').length - 1;
      }
      $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
      $autocomplete.css('left', $('#SiteSearch4').position().left);
      $autocomplete.css('top', $('#SiteSearch4').position().top + $('#SiteSearch4').outerHeight());
      $autocomplete.show();
   };
   var populateSearchField = function()
   {
      $('#SiteSearch4').val($autocomplete.find('li').eq(selectedItem).text());
      setSelectedItem(null);
   };
   $('#SiteSearch4').attr('autocomplete', 'off').keyup(function(event)
   {
      if (event.keyCode > 40 || event.keyCode == 8)
      {
         var data = new Array();
         var keywordVal = $('#SiteSearch4').val();
         keywordVal = keywordVal.toLowerCase();
         for (i=0; i<database_length; i++)
         {
            var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
            var array = words.split(" ");
            data = $.merge(data, array);
         }

         var unique = new Array();
         o:for(var i = 0; i < data.length; i++)
         {
            for(var j = 0; j < unique.length; j++)
            {
               if(unique[j]==data[i]) continue o;
            }
            unique[unique.length] = data[i];
         }

         unique.sort();
         if (keywordVal.length && unique.length)
         {
            $autocomplete.empty();
            var item = 0;
            $.each(unique, function(index, term)
            {
               term = term.toLowerCase();
               if (term.indexOf(keywordVal) == 0)
               {
                  $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function()
                  {
                     var item = $(this).data('item');
                     setSelectedItem(item);
                  }).click(populateSearchField);
                  item++;
               }
            });
            setSelectedItem(0);
         }
         else
         {
            setSelectedItem(null);
         }
      }
      else
      if (event.keyCode == 38 && selectedItem !== null)
      {
         setSelectedItem(selectedItem - 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 40 && selectedItem !== null)
      {
         setSelectedItem(selectedItem + 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 27 && selectedItem !== null)
      {
         setSelectedItem(null);
      }
   }).keypress(function(event)
   {
      if (event.keyCode == 13 && selectedItem !== null)
      {
         populateSearchField();
         event.preventDefault();
      }
   }).blur(function(event)
   {
      setTimeout(function()
      {
         setSelectedItem(null);
      }, 250);
   });
   $("#Layer220").stickylayer({orientation: 2, position: [220, 47], delay: 500});
   $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
   $("a[rel^='SlideShow3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
   $("a[rel^='PhotoGallery6']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</span>',
      items: '#wb_Image89',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image89").tooltip(jQueryToolTip2Opts);
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures performed by leading inspection, verification, testing and certification third party companies, includes company licenses, product certificates and onsite check.<br>To check Sellers / Shipper\'s verification certificate, click on Seller\'s (About Tab) &gt; View Verification.<br></span>',
      items: '#wb_Image104',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image104").tooltip(jQueryToolTip1Opts);
});
</script>
<!-- Insert Google Analystics code here -->
</head>
<body>
	<div id="Layer67"
		style="position: absolute; text-align: center; left: 0%; top: 47px; width: 100%; height: 3127px; z-index: 1589;">
		<div id="Layer67_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer17"
				style="position: absolute; text-align: left; left: 0px; top: 0px; width: 1280px; height: 220px; z-index: 439;">
				<div id="wb_Image105"
					style="position: absolute; left: 1097px; top: 36px; width: 102px; height: 102px; z-index: 6;">
					<img src="<?php echo asset_url();?>images/black-horse.png" id="Image105" alt="">
				</div>
				<div id="wb_Text6"
					style="position: absolute; left: 1089px; top: 140px; width: 111px; height: 12px; z-index: 7; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 9.3px;"><strong>Black
							Horse </strong>MEMBER</span>
				</div>
				<div id="wb_Image104"
					style="position: absolute; left: 1145px; top: 161px; width: 24px; height: 24px; z-index: 8;">
					<img src="<?php echo asset_url();?>images/trusted.png" id="Image104" alt="">
				</div>
				<div id="wb_Image89"
					style="position: absolute; left: 1112px; top: 159px; width: 32px; height: 25px; z-index: 9;">
					<img src="<?php echo asset_url();?>images/Guarantee.png" id="Image89" alt="">
				</div>


			</div>
			<div id="wb_Shape32" style="position: absolute; left: 191px; top: 70px; width: 100px; height: 86px; z-index: 440;">
				<img src="<?php echo asset_url();?><?php echo $business[0]['business_logo'];?>" id="Shape32" alt=""
					style="width: 100px; height: 86px;">
			</div>
			<div id="Layer201" style="position: absolute; text-align: left; left: 0px; top: 350px; width: 1280px; height: 421px; z-index: 442;">
				<?php foreach ($productList as $key=>$product) { ?>
				<div class="col-sm-3">
				<div id="Layer202" style="width: 294px; height: 406px; z-index: 96;"
					onmouseenter="ShowObjectWithEffect('Layer203-<?php echo $key;?>', 1, 'fade', 500);return false;"
					onmouseleave="ShowObjectWithEffect('Layer203-<?php echo $key;?>', 0, 'fade', 500);return false;">
					<div id="wb_Text424" style="position: absolute; left: 25px; top: 12px; width: 246px; height: 18px; text-align: center; z-index: 51;">
						<span style="color: #1E90FF; font-family: Arial; font-size: 16px;"><?php echo $product['name'];?></span>
					</div>
					<div id="wb_Text425" style="position: absolute; left: 22px; top: 35px; width: 254px; height: 30px; text-align: center; z-index: 52;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo substr($product['description'],0,90);?><?php if(strlen($product['description']) > 90) { ?>...<?php } ?></span>
					</div>
					<div id="wb_Text426" style="position: absolute; left: 56px; top: 327px; width: 176px; height: 27px; text-align: center; z-index: 53;">
						<span style="color: #A9A9A9; font-family: Arial; font-size: 13px;">USD</span>
						<span style="color: #C0C0C0; font-family: Arial; font-size: 13px;"> </span>
						<span style="color: #3C3C3C; font-family: Arial; font-size: 24px;"><?php echo $product['unit_price'];?>.00</span>
					</div>
					<div id="wb_Text427" style="position: absolute; left: 72px; top: 356px; width: 161px; height: 16px; text-align: center; z-index: 54;">
						<span style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">Min. Order: <?php echo $product['quantity'];?> <?php echo $product['unit'];?>&nbsp;&nbsp;&nbsp; </span>
					</div>
					<div id="wb_Image117" style="position: absolute; left: 114px; top: 377px; width: 60px; height: 14px; z-index: 55;">
						<img src="<?php echo asset_url();?>images/rate.png" id="Image117" alt="">
					</div>
					<div id="wb_Text428" style="position: absolute; left: 79px; top: 377px; width: 63px; height: 15px; z-index: 56; text-align: left;">
						<span style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Rate&nbsp;&nbsp;</span>
					</div>
					<div id="wb_Text429" style="position: absolute; left: 184px; top: 377px; width: 63px; height: 14px; z-index: 57; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">4.5 of 5&nbsp;&nbsp; </span>
					</div>
					<div id="wb_Shape66" style="position: absolute; left: 35px; top: 89px; width: 250px; height: 215px; z-index: 58;">
						<img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" id="Shape66" alt="" style="width: 250px; height: 215px;">
					</div>
					<div id="Layer203-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 35px; top: 87px; width: 250px; height: 250px; z-index: 59;">
						<div id="Layer204" style="position: absolute; text-align: left; left: 0px; top: 2px; width: 250px; height: 215px; z-index: 48;">
						</div>
						<div id="wb_Text430" style="position: absolute; left: 102px; top: 138px; width: 80px; height: 16px; z-index: 49; text-align: left;">
							<span style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">DETAILS</span>
						</div>
						<div id="RollOver30" style="position: absolute; left: 98px; top: 74px; overflow: hidden; width: 60px; height: 60px; z-index: 50">
							<a href="./item_details.php"> <img class="hover" alt=""
								src="<?php echo asset_url();?>images/view-detailsc.png"> <span><img alt=""
									src="<?php echo asset_url();?>images/view-detailsb.png"></span>
							</a>
						</div>
					</div>
				</div>
				</div>
				<?php } ?>
			</div>
			<div id="wb_Text343" style="position: absolute; left: 5px; top: 280px; width: 161px; height: 16px; z-index: 443; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><?php echo $video[0]['mainproduct'];?></span>
			</div>
			<div id="wb_Image102"
				style="position: absolute; left: 28px; top: 312px; width: 15px; height: 20px; z-index: 444;">
				<img src="<?php echo asset_url();?>images/page_location.png" id="Image102" alt="">
			</div>
			<div id="wb_Text278" style="position: absolute; left: 46px; top: 313px; width: 600px; height: 19px; z-index: 445; text-align: left;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 17px;"><strong><?php echo $video[0]['subproduct'];?></strong>&nbsp;&nbsp;</span>
				<span style="color: #3C3C3C; font-family: Arial; font-size: 13px;">Also,
					You may like to view </span>&nbsp;&nbsp;&nbsp;
				<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><u><a
						href="#" class="style16"><?php echo $video[0]['maincategory'];?></a> </u></span>&nbsp;&nbsp;&nbsp;
				<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><u><a
						href="#" class="style16"><?php echo $video[0]['subcategory'];?></a></u></span>&nbsp;&nbsp;&nbsp;
				<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><u><a
						href="#" class="style16"><?php echo $video[0]['mainproduct'];?></a></u></span>
			</div>
			<div id="wb_Text157"
				style="position: absolute; left: 361px; top: 55px; width: 577px; height: 33px; text-align: center; z-index: 450;">
				<span
					style="color: #3C3C3C; font-family: 'Times New Roman'; font-size: 29px;"><?php echo $business[0]['company_name'];?></span>
			</div>
			<div id="wb_Text142"
				style="position: absolute; left: 311px; top: 102px; width: 670px; height: 75px; text-align: center; z-index: 451;">
				<span style="color: #5A5A5A; font-family: Arial; font-size: 12px;"><?php echo $business[0]['hot_presentation'];?></span>
			</div>
			<div id="Layer95"
				style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 285px; width: 1280px; height: 651px; z-index: 452;">
				<div id="wb_Shape13"
					style="position: absolute; left: 778px; top: 3px; width: 24px; height: 12px; z-index: 217;">
					<img src="<?php echo asset_url();?>images/img0422.png" id="Shape13" alt=""
						style="width: 24px; height: 12px;">
				</div>
				<div id="Layer102"
					style="position: absolute; text-align: left; left: 0px; top: 12px; width: 1280px; height: 631px; z-index: 218;">
					<div id="Layer113"
						style="position: absolute; text-align: left; left: 0px; top: 7px; width: 1280px; height: 622px; z-index: 212;">
					</div>
					<div id="Layer116"
						style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 8px; width: 1280px; height: 622px; z-index: 213;">
						<div id="wb_Shape21"
							style="position: absolute; left: 1235px; top: 7px; width: 38px; height: 33px; z-index: 100;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer116', 0, 'slideup', 500);ShowObjectWithEffect('Layer115', 1, 'fade', 500, 'swing');return false;"><img
								src="<?php echo asset_url();?>images/img0423.gif" id="Shape21" alt=""
								style="width: 38px; height: 33px;"></a>
						</div>
						<div id="wb_Text245"
							style="position: absolute; left: 195px; top: 64px; width: 288px; height: 16px; z-index: 101; text-align: left;">
							<span
								style="color: #FF6347; font-family: Arial; font-size: 19px;"><strong>OUR
									LOCATION</strong></span>
						</div>
						<div id="wb_JavaScript3"
							style="position: absolute; left: 195px; top: 103px; width: 1047px; height: 484px; z-index: 102;">
							<img style="width: 1047px; height: 484px" src="https://maps.googleapis.com/maps/api/staticmap?center=Berkeley,CA&zoom=14&size=1047x484&key=<?php echo $google_map_key;?>">
						</div>
					</div>
					<div id="Layer115"
						style="position: absolute; text-align: left; left: 0px; top: 8px; width: 1280px; height: 622px; z-index: 214;">
						<div id="wb_Text184"
							style="position: absolute; left: 272px; top: 138px; width: 141px; height: 16px; text-align: center; z-index: 191;">
							<span
								style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Contact
									Person</strong></span>
						</div>
						<div id="wb_Text193"
							style="position: absolute; left: 272px; top: 427px; width: 133px; height: 16px; text-align: center; z-index: 192;">
							<span
								style="color: #000000; font-family: Arial; font-size: 12px;"><strong>Jack
									Lee</strong></span>
						</div>
						<div id="wb_PhotoGallery3"
							style="position: absolute; left: 248px; top: 170px; width: 196px; height: 246px; z-index: 193;">
							<table id="PhotoGallery3">
								<tr>
									<td class="image"><a href="images/sell1.jpg"
										data-rel="PhotoGallery3"><img alt="" id="PhotoGallery3_img0"
											src="<?php echo asset_url();?>images/tn_sell1.png"></a></td>
								</tr>
							</table>
						</div>
						<div id="wb_Shape16"
							style="position: absolute; left: 1235px; top: 7px; width: 38px; height: 33px; z-index: 194;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer95', 0, 'slideup', 500);return false;"><img
								src="<?php echo asset_url();?>images/img0424.gif" id="Shape16" alt=""
								style="width: 38px; height: 33px;"></a>
						</div>
						<div id="wb_Text144"
							style="position: absolute; left: 265px; top: 445px; width: 162px; height: 16px; text-align: center; z-index: 195;">
							<span
								style="color: #696969; font-family: Arial; font-size: 12px;"><strong>jacklee@hotmail.com</strong></span>
						</div>
						<div id="Layer114"
							style="position: absolute; text-align: left; left: 598px; top: 108px; width: 484px; height: 134px; z-index: 196;">
							<div id="wb_Text185"
								style="position: absolute; left: 339px; top: 102px; width: 40px; height: 16px; z-index: 103; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text186"
								style="position: absolute; left: 339px; top: 81px; width: 39px; height: 16px; z-index: 104; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
							</div>
							<div id="wb_Text187"
								style="position: absolute; left: 337px; top: 42px; width: 40px; height: 16px; z-index: 105; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text188"
								style="position: absolute; left: 337px; top: 20px; width: 33px; height: 16px; z-index: 106; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
							</div>
							<div id="wb_Text190"
								style="position: absolute; left: 42px; top: 20px; width: 246px; height: 16px; z-index: 107; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Office
									No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
							</div>
							<div id="wb_Text192"
								style="position: absolute; left: 42px; top: 51px; width: 116px; height: 16px; z-index: 108; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
							</div>
							<div id="wb_Text194"
								style="position: absolute; left: 191px; top: 53px; width: 116px; height: 16px; z-index: 109; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
							</div>
							<div id="wb_Text196"
								style="position: absolute; left: 119px; top: 52px; width: 94px; height: 16px; z-index: 110; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
							</div>
							<div id="wb_Text243"
								style="position: absolute; left: 370px; top: 42px; width: 79px; height: 16px; z-index: 111; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
							<div id="wb_Text244"
								style="position: absolute; left: 372px; top: 102px; width: 79px; height: 16px; z-index: 112; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
							<div id="wb_Text246"
								style="position: absolute; left: 43px; top: 79px; width: 47px; height: 16px; z-index: 113; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
							</div>
							<div id="wb_Text251"
								style="position: absolute; left: 86px; top: 79px; width: 198px; height: 16px; z-index: 114; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
							</div>
							<div id="wb_Text253"
								style="position: absolute; left: 86px; top: 99px; width: 198px; height: 16px; z-index: 115; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
							</div>
							<div id="wb_Text252"
								style="position: absolute; left: 43px; top: 99px; width: 45px; height: 16px; z-index: 116; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
							</div>
							<div id="wb_Text254"
								style="position: absolute; left: 337px; top: 58px; width: 40px; height: 16px; z-index: 117; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text255"
								style="position: absolute; left: 370px; top: 58px; width: 79px; height: 16px; z-index: 118; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
						</div>
						<div id="Layer86"
							style="position: absolute; overflow: scroll; text-align: left; left: 589px; top: 313px; width: 522px; height: 194px; z-index: 197;">
							<div id="Layer87"
								style="position: absolute; text-align: left; left: 11px; top: 11px; width: 484px; height: 155px; z-index: 187;">
								<div id="wb_Text137"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 16px; z-index: 119; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text178"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 120; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text189"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 16px; z-index: 121; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text195"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 122; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text198"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 16px; z-index: 123; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text199"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 124; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text200"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 16px; z-index: 125; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text201"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 16px; z-index: 126; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text202"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 16px; z-index: 127; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text203"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 16px; z-index: 128; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text204"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 16px; z-index: 129; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text205"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 130; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text206"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 16px; z-index: 131; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text207"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 16px; z-index: 132; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text208"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 133; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text209"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 16px; z-index: 134; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text210"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 16px; z-index: 135; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer88"
								style="position: absolute; text-align: left; left: 11px; top: 181px; width: 484px; height: 155px; z-index: 188;">
								<div id="wb_Text211"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 16px; z-index: 136; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text212"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 137; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text213"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 16px; z-index: 138; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text214"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 139; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text215"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 16px; z-index: 140; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text216"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 141; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text217"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 16px; z-index: 142; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text219"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 16px; z-index: 143; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text220"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 16px; z-index: 144; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text221"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 16px; z-index: 145; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text222"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 16px; z-index: 146; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text223"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 147; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text224"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 16px; z-index: 148; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text225"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 16px; z-index: 149; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text226"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 150; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text227"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 16px; z-index: 151; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text229"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 16px; z-index: 152; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer117"
								style="position: absolute; text-align: left; left: 11px; top: 351px; width: 484px; height: 155px; z-index: 189;">
								<div id="wb_Text230"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 16px; z-index: 153; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text231"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 154; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text232"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 16px; z-index: 155; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text233"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 156; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text234"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 16px; z-index: 157; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text235"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 158; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text236"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 16px; z-index: 159; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text237"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 16px; z-index: 160; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text238"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 16px; z-index: 161; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text239"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 16px; z-index: 162; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text240"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 16px; z-index: 163; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text241"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 164; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text242"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 16px; z-index: 165; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text256"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 16px; z-index: 166; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text257"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 167; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text258"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 16px; z-index: 168; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text259"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 16px; z-index: 169; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer118"
								style="position: absolute; text-align: left; left: 11px; top: 521px; width: 484px; height: 155px; z-index: 190;">
								<div id="wb_Text260"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 16px; z-index: 170; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text261"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 171; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text262"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 16px; z-index: 172; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text263"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 173; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text264"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 16px; z-index: 174; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text265"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 175; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text266"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 16px; z-index: 176; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text267"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 16px; z-index: 177; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text268"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 16px; z-index: 178; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text269"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 16px; z-index: 179; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text270"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 16px; z-index: 180; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text271"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 181; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text272"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 16px; z-index: 182; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text273"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 16px; z-index: 183; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text274"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 184; text-align: left;">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text275"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 16px; z-index: 185; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text276"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 16px; z-index: 186; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
						</div>
						<div id="wb_Text277"
							style="position: absolute; left: 603px; top: 288px; width: 191px; height: 16px; z-index: 198; text-align: left;">
							<span
								style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><strong>WORLDWIDE
									BRANCHES</strong></span>
						</div>
						<div id="wb_Text191"
							style="position: absolute; left: 602px; top: 75px; width: 133px; height: 16px; z-index: 199; text-align: left;">
							<span
								style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><strong>MAIN
									OFFICE</strong></span>
						</div>
					</div>
					<div id="Layer94"
						style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 8px; width: 1280px; height: 622px; z-index: 215;">
						<div id="wb_Shape22"
							style="position: absolute; left: 1235px; top: 7px; width: 38px; height: 33px; z-index: 206;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer94', 0, 'slideup', 500);ShowObjectWithEffect('Layer115', 1, 'fade', 500, 'swing');return false;"><img
								src="<?php echo asset_url();?>images/img0425.gif" id="Shape22" alt=""
								style="width: 38px; height: 33px;"></a>
						</div>
						<div id="wb_Text197"
							style="position: absolute; left: 199px; top: 64px; width: 288px; height: 16px; z-index: 207; text-align: left;">
							<span
								style="color: #FF6347; font-family: Arial; font-size: 19px;"><strong>CONTACT
									US</strong></span>
						</div>
						<div id="wb_Form1"
							style="position: absolute; left: 199px; top: 112px; width: 954px; height: 457px; z-index: 208;">
							<form name="contact" method="post" action=""
								enctype="application/x-www-form-urlencoded" id="Form1">
								<input type="text" id="Editbox1"
									style="position: absolute; left: 0px; top: 4px; width: 327px; height: 46px; line-height: 46px; z-index: 200;"
									name="name" value="" maxlength="50" placeholder="Name">
								<textarea name="message" id="TextArea1"
									style="position: absolute; left: 0px; top: 130px; width: 682px; height: 222px; z-index: 201;"
									rows="16" cols="95" maxlength="500" placeholder="Message"></textarea>
								<input type="submit" id="Button1" name="" value="Send"
									style="position: absolute; left: 600px; top: 380px; width: 96px; height: 25px; z-index: 202;">
								<input type="number" id="Editbox2"
									style="position: absolute; left: 353px; top: 65px; width: 327px; height: 46px; line-height: 46px; z-index: 203;"
									name="phone" value="" maxlength="15" placeholder="Phone"> <input
									type="text" id="Editbox3"
									style="position: absolute; left: 354px; top: 4px; width: 327px; height: 46px; line-height: 46px; z-index: 204;"
									name="company" value="" maxlength="50" placeholder="Company"> <input
									type="email" id="Editbox4"
									style="position: absolute; left: 0px; top: 65px; width: 327px; height: 46px; line-height: 46px; z-index: 205;"
									name="email" value="" maxlength="30" placeholder="Email">
							</form>
						</div>
					</div>
					<div id="Layer112"
						style="position: absolute; text-align: left; left: 45px; top: 6px; width: 122px; height: 487px; z-index: 216;">
						<div id="wb_Shape17"
							style="position: absolute; left: 11px; top: 212px; width: 97px; height: 33px; z-index: 209;">
							<a href="#bookmark1"
								onclick="ShowObjectWithEffect('Layer115', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Layer116', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer94', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer105', 0, 'fade', 500, 'swing');return false;"><div
									id="Shape17">
									<div id="Shape17_text">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 15px;"><u>Information</u></span>
									</div>
								</div></a>
						</div>
						<div id="wb_Shape24"
							style="position: absolute; left: 11px; top: 268px; width: 97px; height: 33px; z-index: 210;">
							<a href="#bookmark1"
								onclick="ShowObjectWithEffect('Layer115', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer116', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Layer94', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer105', 0, 'fade', 500, 'swing');return false;"><div
									id="Shape24">
									<div id="Shape24_text">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 15px;"><u>Location</u></span>
									</div>
								</div></a>
						</div>
						<div id="wb_Shape18"
							style="position: absolute; left: 11px; top: 240px; width: 97px; height: 33px; z-index: 211;">
							<a href="#bookmark1"
								onclick="ShowObjectWithEffect('Layer115', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer116', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer94', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Layer105', 0, 'fade', 500, 'swing');return false;"><div
									id="Shape18">
									<div id="Shape18_text">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 15px;"><u>Contact
												us</u></span>
									</div>
								</div></a>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer120"
				style="position: absolute; text-align: left; visibility: hidden; left: 419px; top: 287px; width: 652px; height: 529px; z-index: 453;"
				onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;">
				<div id="Layer121"
					style="position: absolute; text-align: left; left: 174px; top: 9px; width: 198px; height: 490px; z-index: 224;">
					<div id="wb_Shape27"
						style="position: absolute; left: 1px; top: 453px; width: 196px; height: 35px; z-index: 220;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer120', 0, 'slideup', 500);return false;"><img
							src="<?php echo asset_url();?>images/img0567.gif" id="Shape27" alt=""
							style="width: 196px; height: 35px;"></a>
					</div>
					<div id="Layer122"
						style="position: absolute; text-align: left; left: 2px; top: 7px; width: 195px; height: 445px; z-index: 221;">
					</div>
					<div id="Layer126"
						style="position: absolute; text-align: left; left: 1px; top: 7px; width: 196px; height: 445px; z-index: 222;">
					</div>
					<div id="Layer134"
						style="position: absolute; text-align: left; left: 1px; top: 9px; width: 195px; height: 413px; z-index: 223;">
						<div id="wb_CssMenu1"
							style="position: absolute; left: 3px; top: 5px; width: 190px; height: 238px; z-index: 219;">
							<ul>
								<li class="firstmain"><a class="withsubmenu" href="#"
									target="_self">Indoors&nbsp;Furniture</a>

									<ul>
										<li class="firstitem"><a href="./products_category.php"
											target="_self">Fabric&nbsp;Sofas</a></li>
										<li><a href="./products_category.php" target="_self">Leather&nbsp;Sofas</a>
										</li>
										<li><a href="./products_category.php" target="_self">New&nbsp;Style</a>
										</li>
										<li><a href="./products_category.php" target="_self">Bedrooms</a>
										</li>
										<li><a href="./products_category.php" target="_self">Tabels</a>
										</li>
										<li class="lastitem"><a href="./products_category.php"
											target="_self">Libraries</a></li>
									</ul></li>
								<li><a class="withsubmenu" href="#" target="_self">Ourdoors&nbsp;Furniture</a>

									<ul>
										<li class="firstitem"><a href="./products_category.php"
											target="_self">Wooden&nbsp;Seats</a></li>
										<li><a href="./products_category.php" target="_self">Cradels</a>
										</li>
										<li><a href="./products_category.php" target="_self">Garden&nbsp;Tabels</a>
										</li>
										<li><a href="./products_category.php" target="_self">Any</a></li>
										<li class="lastitem"><a href="./products_category.php"
											target="_self">Any</a></li>
									</ul></li>
								<li><a href="./products_category.php" target="_self">More</a></li>
								<li><a href="./products_category.php" target="_self">More</a></li>
								<li><a href="./products_category.php" target="_self">New&nbsp;Arrivals</a>
								</li>
								<li><a href="./products_category.php" target="_self">Hot&nbsp;Sale</a>
								</li>
								<li><a href="#" target="_self">Note&nbsp;(&nbsp;View&nbsp;More)</a>
								</li>
							</ul>
							<br>
						</div>
					</div>
				</div>
				<div id="wb_Shape20"
					style="position: absolute; left: 259px; top: 0px; width: 24px; height: 12px; z-index: 225;">
					<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt=""
						style="width: 24px; height: 12px;">
				</div>
			</div>
			<div id="Layer147"
				style="position: absolute; text-align: left; left: 0px; top: 2752px; width: 1278px; height: 31px; z-index: 454;">
				<div id="wb_Text348"
					style="position: absolute; left: 569px; top: 7px; width: 136px; height: 16px; text-align: center; z-index: 227;">
					<span
						style="color: #303030; font-family: Georgia; font-size: 13px;"><strong><a
							href="#" class="style5">VIEW MORE</a></strong></span>
				</div>
				<div id="wb_Text349"
					style="position: absolute; left: 249px; top: 8px; width: 63px; height: 15px; z-index: 228; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">1
						of 000&nbsp; </span>
				</div>
				<div id="wb_Text350"
					style="position: absolute; left: 926px; top: 9px; width: 60px; height: 15px; z-index: 229; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">
						Page No</span>
				</div>
				<div id="Layer148"
					style="position: absolute; text-align: left; left: 161px; top: 0px; width: 76px; height: 31px; z-index: 230;">
					<div id="wb_Text351"
						style="position: absolute; left: 18px; top: 7px; width: 43px; height: 15px; z-index: 226; text-align: left;">
						<span
							style="color: #FFFFFF; font-family: Georgia; font-size: 12px;">Page&nbsp;&nbsp;
						</span>
					</div>
				</div>
				<form name="SiteSearch4_form" id="SiteSearch4_form"
					accept-charset="UTF-8" onsubmit="return searchPage(features)">
					<input type="text" id="SiteSearch4"
						style="position: absolute; left: 995px; top: 6px; width: 31px; height: 17px; line-height: 17px; z-index: 231;"
						name="SiteSearch4" value="">
				</form>
				<button id="AdvancedButton1" type="button"
					style="position: absolute; left: 1062px; top: 0px; width: 49px; height: 31px; z-index: 232;"
					onclick="searchPage()" name="Search Page" value="">
					<div style="text-align: center">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px">Go</span>
					</div>
				</button>
			</div>
			<div id="Layer97"
				style="position: absolute; text-align: left; left: 0px; top: 235px; width: 1278px; height: 28px; z-index: 455;">
				<div id="wb_Shape4"
					style="position: absolute; left: 446px; top: 0px; width: 97px; height: 28px; z-index: 235;">
					<a href="./seller_home.php"><div id="Shape4">
							<div id="Shape4_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Home</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape5"
					style="position: absolute; left: 545px; top: 0px; width: 97px; height: 28px; z-index: 236;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer98', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;"><div
							id="Shape5">
							<div id="Shape5_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">About</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape6"
					style="position: absolute; left: 644px; top: 0px; width: 97px; height: 28px; z-index: 237;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 1, 'slideup', 500, 'swing');return false;"><div
							id="Shape6">
							<div id="Shape6_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Products</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape7"
					style="position: absolute; left: 743px; top: 0px; width: 97px; height: 28px; z-index: 238;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer95', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;"><div
							id="Shape7">
							<div id="Shape7_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Contact</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape52"
					style="position: absolute; left: 644px; top: 6px; width: 7px; height: 15px; z-index: 239;">
					<img src="<?php echo asset_url();?>images/img0584.png" id="Shape52" alt=""
						style="width: 7px; height: 15px;">
				</div>
				<div id="wb_Form3"
					style="position: absolute; left: 956px; top: 1px; width: 321px; height: 27px; z-index: 240;">
					<form name="Form3" method="post" action="" enctype="text/plain"
						id="Form3">
						<form method="get" name="CmsSearch1_form" id="CmsSearch1_form"
							accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>">
							<input type="text" id="CmsSearch1"
								style="position: absolute; left: 48px; top: 0px; width: 265px; height: 25px; line-height: 25px; z-index: 233;"
								name="query" value="" placeholder="Search article">
						</form>
						<input type="submit" id="Button2" name="Search" value=""
							style="position: absolute; left: 295px; top: 3px; width: 17px; height: 23px; z-index: 234;">
					</form>
				</div>
			</div>
			<div id="Layer92"
				style="position: absolute; text-align: left; visibility: hidden; left: 1098px; top: 1px; width: 120px; height: 178px; z-index: 456;"
				onmouseleave="ShowObjectWithEffect('Layer92', 0, 'fold', 300);return false;">
				<div id="wb_CssMenu7"
					style="position: absolute; left: 0px; top: 46px; width: 120px; height: 132px; z-index: 241;">
					<ul>
						<li class="firstmain"><a href="#" target="_self">Account</a></li>
						<li><a href="#" target="_self">Membership</a></li>
						<li><a href="#" target="_self">Control&nbsp;Panel</a></li>
						<li><a href="#" target="_self">Logout</a></li>
					</ul>
					<br>
				</div>
			</div>
			<div id="Layer293"
				style="position: absolute; text-align: left; left: 0px; top: 2843px; width: 1280px; height: 284px; z-index: 458;">
				<div id="wb_Text288"
					style="position: absolute; left: 240px; top: 48px; width: 75px; height: 16px; z-index: 252; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>About
					</strong></span>
				</div>
				<div id="wb_Text289"
					style="position: absolute; left: 240px; top: 70px; width: 71px; height: 15px; z-index: 253; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./copyrights.php" target="_blank" class="Footer">Copyrights</a></span>
				</div>
				<div id="wb_Text290"
					style="position: absolute; left: 240px; top: 93px; width: 122px; height: 15px; z-index: 254; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./terms.php" target="_blank" class="Footer">Terms &amp;
							Conditions</a></span>
				</div>
				<div id="wb_Text291"
					style="position: absolute; left: 240px; top: 116px; width: 122px; height: 15px; z-index: 255; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./privacy.html" target="_blank" class="Footer">Privacy
							policy</a></span>
				</div>
				<div id="wb_Text292"
					style="position: absolute; left: 239px; top: 148px; width: 109px; height: 16px; z-index: 256; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Help
							center </strong></span>
				</div>
				<div id="wb_Text293"
					style="position: absolute; left: 240px; top: 175px; width: 71px; height: 15px; z-index: 257; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./help_center.php" target="_blank" class="Footer">How to
							start</a></span>
				</div>
				<div id="wb_Text294"
					style="position: absolute; left: 397px; top: 46px; width: 122px; height: 15px; z-index: 258; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./contact_us.php" target="_blank" class="Footer">Contact us</a></span>
				</div>
				<div id="wb_Text295"
					style="position: absolute; left: 397px; top: 69px; width: 122px; height: 15px; z-index: 259; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./contact_us.php" target="_blank" class="Footer">Complaint</a></span>
				</div>
				<div id="wb_Text297"
					style="position: absolute; left: 397px; top: 97px; width: 75px; height: 16px; z-index: 260; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Account</strong></span>
				</div>
				<div id="wb_Text298"
					style="position: absolute; left: 397px; top: 127px; width: 71px; height: 15px; z-index: 261; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./login.php" target="_blank" class="Footer">Log in</a></span>
				</div>
				<div id="wb_Text319"
					style="position: absolute; left: 397px; top: 153px; width: 122px; height: 15px; z-index: 262; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./profile_personal_info.php" target="_blank" class="Footer">Register</a></span>
				</div>
				<div id="wb_Text320"
					style="position: absolute; left: 397px; top: 178px; width: 122px; height: 30px; z-index: 263; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./membership.php" target="_blank" class="Footer">Upgrade
							Membership</a></span>
				</div>
				<div id="wb_Text322"
					style="position: absolute; left: 577px; top: 128px; width: 154px; height: 16px; z-index: 264; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Trade
							Station</strong></span>
				</div>
				<div id="wb_Text323"
					style="position: absolute; left: 756px; top: 45px; width: 131px; height: 15px; z-index: 265; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Send&nbsp;
							a selling post</a></span>
				</div>
				<div id="wb_Text324"
					style="position: absolute; left: 577px; top: 153px; width: 164px; height: 15px; z-index: 266; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Buying Requests</a></span>
				</div>
				<div id="wb_Text326"
					style="position: absolute; left: 758px; top: 97px; width: 131px; height: 15px; z-index: 267; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">View your
							posts</a></span>
				</div>
				<div id="wb_Text339"
					style="position: absolute; left: 577px; top: 45px; width: 122px; height: 15px; z-index: 268; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./index.php" target="_blank" class="Footer">Language
							Settings</a></span>
				</div>
				<div id="wb_Text517"
					style="position: absolute; left: 756px; top: 69px; width: 131px; height: 15px; z-index: 269; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Send a
							buying post</a></span>
				</div>
				<div id="wb_Text534"
					style="position: absolute; left: 577px; top: 178px; width: 202px; height: 15px; z-index: 270; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Selling Offers</a></span>
				</div>
				<div id="wb_Text535"
					style="position: absolute; left: 756px; top: 153px; width: 120px; height: 15px; z-index: 271; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Global Stock
							Offers</a></span>
				</div>
				<div id="wb_Text536"
					style="position: absolute; left: 756px; top: 178px; width: 146px; height: 15px; z-index: 272; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Global Stock
							Requests</a></span>
				</div>
				<div id="wb_Text537"
					style="position: absolute; left: 942px; top: 77px; width: 109px; height: 16px; z-index: 273; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>New
							Trends</strong></span>
				</div>
				<div id="wb_Text538"
					style="position: absolute; left: 942px; top: 105px; width: 129px; height: 15px; z-index: 274; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./v_catalogue.php" target="_blank" class="Footer">Find
							V-Catalogues</a></span>
				</div>
				<div id="wb_Text539"
					style="position: absolute; left: 942px; top: 131px; width: 122px; height: 15px; z-index: 275; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./real_in3d.php" target="_blank" class="Footer">Find Real in
							3D pro.</a></span>
				</div>
				<div id="wb_Text540"
					style="position: absolute; left: 942px; top: 156px; width: 135px; height: 15px; z-index: 276; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./pro_videos.php" target="_blank" class="Footer">Find
							Pro-Videos</a></span>
				</div>
				<div id="wb_Text542"
					style="position: absolute; left: 942px; top: 179px; width: 135px; height: 15px; z-index: 277; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./video_details.php" target="_blank" class="Footer">Community</a></span>
				</div>
				<div id="wb_Text543"
					style="position: absolute; left: 577px; top: 97px; width: 202px; height: 15px; z-index: 278; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Selling Offers</a></span>
				</div>
				<div id="wb_Text544"
					style="position: absolute; left: 577px; top: 69px; width: 112px; height: 15px; z-index: 279; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./control_panel.php" target="_blank" class="Footer">My
							Control Panel </a></span>
				</div>
				<div id="wb_Text545"
					style="position: absolute; left: 756px; top: 129px; width: 154px; height: 16px; z-index: 280; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Stock
							Goods</strong></span>
				</div>
				<div id="wb_Text546"
					style="position: absolute; left: 942px; top: 44px; width: 129px; height: 15px; z-index: 281; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Follow Stock
							Posts</a></span>
				</div>
				<div id="Layer295"
					style="position: absolute; text-align: left; left: 0px; top: 242px; width: 1280px; height: 42px; z-index: 282;">
					<div id="wb_Text541"
						style="position: absolute; left: 475px; top: 14px; width: 358px; height: 14px; z-index: 251; text-align: left;">
						<span style="color: #DCDCDC; font-family: Arial; font-size: 11px;">COPYRIGHTS
							| TRDSTATION 2013-2016 @ ALL RIGHTS RESERVED</span>
					</div>
				</div>
			</div>
			<div id="Layer220"
				style="position: absolute; text-align: right; left: 1214px; top: 185px; width: 62px; height: 627px; z-index: 459;">
				<div id="Layer220_Container"
					style="width: 62px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
					<div id="wb_Image97"
						style="position: absolute; left: 7px; top: 25px; width: 50px; height: 50px; z-index: 289;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer222', 1, 'slideup', 500);return false;"><img
							src="<?php echo asset_url();?>images/deal_icon.png" id="Image97" alt=""></a>
					</div>
					<div id="wb_Image129"
						style="position: absolute; left: 38px; top: 12px; width: 20px; height: 20px; z-index: 290;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer220', 0, 'pulsate', 500);return false;"><img
							src="<?php echo asset_url();?>images/img0569.png" id="Image129" alt=""></a>
					</div>
					<div id="Layer222"
						style="position: absolute; text-align: right; visibility: hidden; left: 3px; top: 76px; width: 56px; height: 541px; z-index: 291;">
						<div id="Layer222_Container"
							style="width: 56px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="wb_Image131"
								style="position: absolute; left: 18px; top: 178px; width: 20px; height: 20px; z-index: 283;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer222', 0, 'slideup', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0030.png" id="Image131" alt=""></a>
							</div>
							<div id="RollOver34"
								style="position: absolute; left: 10px; top: 8px; overflow: hidden; width: 35px; height: 35px; z-index: 284">
								<a
									href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')"
									target="_self"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/chat_button2.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/chat_button1.png"></span>
								</a>
							</div>
							<div id="RollOver35"
								style="position: absolute; left: 10px; top: 48px; overflow: hidden; width: 35px; height: 35px; z-index: 285">
								<a href=""> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/addcommunity_button2.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/addcommunity_button1.png"></span>
								</a>
							</div>
							<div id="RollOver37"
								style="position: absolute; left: 10px; top: 132px; overflow: hidden; width: 35px; height: 35px; z-index: 286">
								<a href=""> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/share_button.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/share_button1.png"></span>
								</a>
							</div>
							<div id="wb_Shape78"
								style="position: absolute; left: 8px; top: 132px; width: 39px; height: 39px; z-index: 287;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer223', 1, 'fade', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0031.png" id="Shape78" alt=""
									style="width: 39px; height: 39px;"></a>
							</div>
							<div id="RollOver36"
								style="position: absolute; left: 10px; top: 90px; overflow: hidden; width: 35px; height: 35px; z-index: 288">
								<a
									href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')"
									target="_self"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/inquirytomato.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/inquiryblack.png"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer106"
				style="position: absolute; text-align: right; visibility: hidden; left: 0%; top: 48px; width: 1280px; height: 235px; z-index: 460;"
				onmouseleave="ShowObjectWithEffect('Layer106', 0, 'fold', 500);return false;">
				<div id="Layer106_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
					<div id="Layer54"
						style="position: absolute; text-align: center; left: 0%; top: 0px; width: 215px; height: 235px; z-index: 365;">
						<div id="Layer54_Container"
							style="width: 215px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text98"
								style="position: absolute; left: 0px; top: 88px; width: 214px; height: 16px; text-align: center; z-index: 292;">
								<span
									style="color: #FFFFFF; font-family: Impact; font-size: 48px; letter-spacing: 0.07px;">STATION</span>
							</div>
							<div id="wb_Text112"
								style="position: absolute; left: 61px; top: 65px; width: 93px; height: 16px; text-align: center; z-index: 293;">
								<span
									style="color: #FFFFFF; font-family: Arial; font-size: 27px;">TRD</span>
							</div>
							<div id="wb_Text113"
								style="position: absolute; left: 18px; top: 142px; width: 180px; height: 16px; text-align: center; z-index: 294;">
								<span
									style="color: #E8AD8F; font-family: Arial; font-size: 12px;">The
									new ear of ecommerce</span>
							</div>
							<div id="wb_Text118"
								style="position: absolute; left: 18px; top: 16px; width: 180px; height: 16px; text-align: center; z-index: 295;">
								<span
									style="color: #E8AD8F; font-family: Georgia; font-size: 13px;">WELCOME
									TO THE</span>
							</div>
						</div>
					</div>
					<div id="Layer107"
						style="position: absolute; text-align: right; visibility: hidden; left: 49%; top: 0px; width: 647px; height: 235px; z-index: 366;">
						<div id="Layer107_Container"
							style="width: 647px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="wb_Text296"
								style="position: absolute; left: 88px; top: 80px; width: 81px; height: 16px; text-align: center; z-index: 303;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									Control Panel</span>
							</div>
							<div id="wb_Text299"
								style="position: absolute; left: 171px; top: 177px; width: 81px; height: 16px; text-align: center; z-index: 304;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									Cart</span>
							</div>
							<div id="wb_Text300"
								style="position: absolute; left: 273px; top: 176px; width: 81px; height: 16px; text-align: center; z-index: 305;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									V-Mail Inbox</span>
							</div>
							<div id="wb_Text301"
								style="position: absolute; left: 88px; top: 176px; width: 81px; height: 16px; text-align: center; z-index: 306;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									<br>Favorite
								</span>
							</div>
							<div id="wb_Text304"
								style="position: absolute; left: 349px; top: 80px; width: 95px; height: 16px; text-align: center; z-index: 307;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Posts
									Alerts</span>
							</div>
							<div id="wb_Text305"
								style="position: absolute; left: 271px; top: 79px; width: 81px; height: 16px; text-align: center; z-index: 308;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Inquiries</span>
							</div>
							<div id="wb_Text306"
								style="position: absolute; left: 349px; top: 176px; width: 95px; height: 16px; text-align: center; z-index: 309;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Incoming
									<br>Chat Alerts
								</span>
							</div>
							<div id="wb_Text307"
								style="position: absolute; left: 447px; top: 81px; width: 95px; height: 16px; text-align: center; z-index: 310;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Add
									<br>Requests
								</span>
							</div>
							<div id="wb_Shape15"
								style="position: absolute; left: 487px; top: 134px; width: 17px; height: 38px; z-index: 311;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer107', 0, 'slideleft', 500);ShowObjectWithEffect('Layer53', 1, 'slideright', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0623.png" id="Shape15" alt=""
									style="width: 17px; height: 38px;"></a>
							</div>
							<div id="Layer108"
								style="position: absolute; text-align: left; visibility: hidden; left: 101px; top: 230px; width: 58px; height: 5px; z-index: 312;">
							</div>
							<div id="Layer109"
								style="position: absolute; text-align: left; visibility: hidden; left: 283px; top: 230px; width: 58px; height: 5px; z-index: 313;">
							</div>
							<div id="Layer110"
								style="position: absolute; text-align: left; visibility: hidden; left: 369px; top: 230px; width: 58px; height: 5px; z-index: 314;">
							</div>
							<div id="Layer111"
								style="position: absolute; text-align: left; visibility: hidden; left: 467px; top: 230px; width: 58px; height: 5px; z-index: 315;">
							</div>
							<div id="wb_Text310"
								style="position: absolute; left: 465px; top: 177px; width: 77px; height: 16px; text-align: center; z-index: 316;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Menu</span>
							</div>
							<div id="RollOver50"
								style="position: absolute; left: 100px; top: 21px; overflow: hidden; width: 50px; height: 50px; z-index: 317">
								<a href="./control_panel.php" target="_blank"> <img
									class="hover" alt="" src="<?php echo asset_url();?>images/cpanelred.png"> <span><img
										alt="" src="<?php echo asset_url();?>images/cpanel.png"></span>
								</a>
							</div>
							<div id="RollOver51"
								style="position: absolute; left: 184px; top: 120px; overflow: hidden; width: 50px; height: 50px; z-index: 318">
								<a href="./my_cart.php" target="_blank"> <img class="hover"
									alt="" src="<?php echo asset_url();?>images/mycartgren.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/mycart.png"></span>
								</a>
							</div>
							<div id="RollOver52"
								style="position: absolute; left: 286px; top: 21px; overflow: hidden; width: 50px; height: 50px; z-index: 319">
								<a href="./inquiries.php" target="_blank"> <img class="hover"
									alt="" src="<?php echo asset_url();?>images/inquiryoffwhite.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/inquiry.png"></span>
								</a>
							</div>
							<div id="RollOver53"
								style="position: absolute; left: 367px; top: 21px; overflow: hidden; width: 50px; height: 50px; z-index: 320">
								<a href="./business_alerts.php" target="_blank"> <img
									class="hover" alt="" src="<?php echo asset_url();?>images/nitificationcolor.png"> <span><img
										alt="" src="<?php echo asset_url();?>images/nitification.png"></span>
								</a>
							</div>
							<div id="RollOver54"
								style="position: absolute; left: 467px; top: 22px; overflow: hidden; width: 50px; height: 50px; z-index: 321">
								<a href="./chat_left_message.php" target="_blank"> <img
									class="hover" alt="" src="<?php echo asset_url();?>images/addrequescolort.png"> <span><img
										alt="" src="<?php echo asset_url();?>images/addrequest.png"></span>
								</a>
							</div>
							<div id="RollOver55"
								style="position: absolute; left: 100px; top: 121px; overflow: hidden; width: 50px; height: 50px; z-index: 322">
								<a href="./my_favorites.php" target="_blank"> <img class="hover"
									alt="" src="<?php echo asset_url();?>images/myfavor0red.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/myfavor0.png"></span>
								</a>
							</div>
							<div id="RollOver56"
								style="position: absolute; left: 288px; top: 121px; overflow: hidden; width: 50px; height: 50px; z-index: 323">
								<a href="./my_vmail_box.php" target="_blank"> <img class="hover"
									alt="" src="<?php echo asset_url();?>images/Vmailinboxyellow.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/Vmailinbox.png"></span>
								</a>
							</div>
							<div id="RollOver57"
								style="position: absolute; left: 184px; top: 23px; overflow: hidden; width: 50px; height: 50px; z-index: 324">
								<a href="./my_account.php" target="_blank"> <img class="hover"
									alt="" src="<?php echo asset_url();?>images/myaccountcolor.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/myaccount.png"></span>
								</a>
							</div>
							<div id="RollOver58"
								style="position: absolute; left: 369px; top: 121px; overflow: hidden; width: 50px; height: 50px; z-index: 325">
								<a href="./chat_left_message.php" target="_blank"> <img
									class="hover" alt="" src="<?php echo asset_url();?>images/incomingchatalertscolor.png">
									<span><img alt="" src="<?php echo asset_url();?>images/incomingchatalerts.png"></span>
								</a>
							</div>
							<div id="wb_Text303"
								style="position: absolute; left: 161px; top: 79px; width: 95px; height: 16px; text-align: center; z-index: 326;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									<br>Account
								</span>
							</div>
							<div id="Layer189"
								style="position: absolute; text-align: left; left: 409px; top: 37px; width: 30px; height: 16px; z-index: 327;">
								<div id="wb_Text378"
									style="position: absolute; left: 2px; top: 0px; width: 28px; height: 16px; z-index: 296; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">1050</span>
								</div>
							</div>
							<div id="Layer191"
								style="position: absolute; text-align: left; left: 412px; top: 140px; width: 20px; height: 16px; z-index: 328;">
								<div id="wb_Text476"
									style="position: absolute; left: 3px; top: 0px; width: 16px; height: 16px; z-index: 297; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">12</span>
								</div>
							</div>
							<div id="Layer192"
								style="position: absolute; text-align: left; left: 332px; top: 140px; width: 20px; height: 16px; z-index: 329;">
								<div id="wb_Text477"
									style="position: absolute; left: 3px; top: 0px; width: 16px; height: 16px; z-index: 298; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">26</span>
								</div>
							</div>
							<div id="Layer193"
								style="position: absolute; text-align: left; left: 228px; top: 140px; width: 20px; height: 16px; z-index: 330;">
								<div id="wb_Text478"
									style="position: absolute; left: 3px; top: 0px; width: 16px; height: 16px; z-index: 299; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">10</span>
								</div>
							</div>
							<div id="Layer194"
								style="position: absolute; text-align: left; left: 142px; top: 140px; width: 13px; height: 16px; z-index: 331;">
								<div id="wb_Text479"
									style="position: absolute; left: 3px; top: 0px; width: 10px; height: 16px; z-index: 300; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">1</span>
								</div>
							</div>
							<div id="Layer195"
								style="position: absolute; text-align: left; left: 509px; top: 37px; width: 20px; height: 16px; z-index: 332;">
								<div id="wb_Text480"
									style="position: absolute; left: 3px; top: 0px; width: 16px; height: 16px; z-index: 301; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">10</span>
								</div>
							</div>
							<div id="Layer190"
								style="position: absolute; text-align: left; left: 330px; top: 37px; width: 13px; height: 16px; z-index: 333;">
								<div id="wb_Text474"
									style="position: absolute; left: 3px; top: 0px; width: 10px; height: 16px; z-index: 302; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">1</span>
								</div>
							</div>
						</div>
					</div>
					<div id="Layer53"
						style="position: absolute; text-align: right; left: 49%; top: 0px; width: 645px; height: 235px; z-index: 367;">
						<div id="Layer53_Container"
							style="width: 645px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="wb_Text114"
								style="position: absolute; left: 86px; top: 80px; width: 81px; height: 16px; text-align: center; z-index: 334;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Home</span>
							</div>
							<div id="wb_Text115"
								style="position: absolute; left: 162px; top: 80px; width: 81px; height: 16px; text-align: center; z-index: 335;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Sellers</span>
							</div>
							<div id="wb_Text116"
								style="position: absolute; left: 164px; top: 176px; width: 81px; height: 16px; text-align: center; z-index: 336;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Shippers</span>
							</div>
							<div id="wb_Text117"
								style="position: absolute; left: 86px; top: 176px; width: 81px; height: 16px; text-align: center; z-index: 337;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Buyers</span>
							</div>
							<div id="wb_Text119"
								style="position: absolute; left: 259px; top: 176px; width: 95px; height: 16px; text-align: center; z-index: 338;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Stocks
									Market</span>
							</div>
							<div id="wb_Text120"
								style="position: absolute; left: 266px; top: 79px; width: 81px; height: 16px; text-align: center; z-index: 339;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Products</span>
							</div>
							<div id="wb_Text121"
								style="position: absolute; left: 348px; top: 176px; width: 95px; height: 16px; text-align: center; z-index: 340;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Community</span>
							</div>
							<div id="wb_Shape9"
								style="position: absolute; left: 485px; top: 134px; width: 17px; height: 38px; z-index: 341;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer53', 0, 'slideright', 500);ShowObjectWithEffect('Layer107', 1, 'slideleft', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0624.png" id="Shape9" alt=""
									style="width: 17px; height: 38px;"></a>
							</div>
							<div id="wb_Text309"
								style="position: absolute; left: 445px; top: 176px; width: 95px; height: 16px; text-align: center; z-index: 342;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">My
									Tools</span>
							</div>
							<div id="RollOver13"
								style="position: absolute; left: 100px; top: 26px; overflow: hidden; width: 50px; height: 50px; z-index: 343">
								<a href="./index.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/Homekitblue.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/Homekit.png"></span>
								</a>
							</div>
							<div id="RollOver43"
								style="position: absolute; left: 281px; top: 26px; overflow: hidden; width: 50px; height: 50px; z-index: 344">
								<a href="./products.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/Produvtgray.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/products.png"></span>
								</a>
							</div>
							<div id="RollOver44"
								style="position: absolute; left: 465px; top: 26px; overflow: hidden; width: 50px; height: 50px; z-index: 345">
								<a href="./pro_videos.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/vidtubcolore0.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/vidtube0.png"></span>
								</a>
							</div>
							<div id="RollOver45"
								style="position: absolute; left: 100px; top: 122px; overflow: hidden; width: 50px; height: 50px; z-index: 346">
								<a href="./buyers.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/buyerbrown0.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/buyer.png"></span>
								</a>
							</div>
							<div id="RollOver46"
								style="position: absolute; left: 178px; top: 123px; overflow: hidden; width: 50px; height: 50px; z-index: 347">
								<a href="./shippers.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/shipperblue.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/shipper.png"></span>
								</a>
							</div>
							<div id="RollOver47"
								style="position: absolute; left: 365px; top: 123px; overflow: hidden; width: 50px; height: 50px; z-index: 348">
								<a href="./community.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/communitgreen2.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/community.png"></span>
								</a>
							</div>
							<div id="RollOver48"
								style="position: absolute; left: 364px; top: 26px; overflow: hidden; width: 50px; height: 50px; z-index: 349">
								<a href="./business_station.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/tradeglod.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/trade.png"></span>
								</a>
							</div>
							<div id="RollOver49"
								style="position: absolute; left: 282px; top: 123px; overflow: hidden; width: 50px; height: 50px; z-index: 350">
								<a href="./stocks_market.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/stockorange.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/stock.png"></span>
								</a>
							</div>
							<div id="RollOver42"
								style="position: absolute; left: 177px; top: 26px; overflow: hidden; width: 50px; height: 50px; z-index: 351">
								<a href="./sellers.php"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/sellerred.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/seller.png"></span>
								</a>
							</div>
							<div id="wb_Text122"
								style="position: absolute; left: 343px; top: 80px; width: 95px; height: 16px; text-align: center; z-index: 352;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">B-Station</span>
							</div>
							<div id="wb_Text124"
								style="position: absolute; left: 442px; top: 80px; width: 95px; height: 16px; text-align: center; z-index: 353;">
								<span
									style="color: #696969; font-family: Georgia; font-size: 13px;">Pro-Videos</span>
							</div>
						</div>
					</div>
					<div id="Layer55"
						style="position: absolute; text-align: left; left: 1220px; top: 0px; width: 60px; height: 235px; z-index: 368;">
						<div id="wb_Shape11"
							style="position: absolute; left: 18px; top: 84px; width: 11px; height: 48px; z-index: 354;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer79', 1, 'slideright', 500, 'swing');return false;"><img
								src="<?php echo asset_url();?>images/img0625.png" id="Shape11" alt=""
								style="width: 11px; height: 48px;"></a>
						</div>
						<div id="wb_Line5"
							style="position: absolute; left: 44px; top: 69px; width: 1px; height: 69px; z-index: 355;">
							<img src="<?php echo asset_url();?>images/img0626.png" id="Line5" alt="">
						</div>
						<div id="wb_Line6"
							style="position: absolute; left: 34px; top: 69px; width: 1px; height: 69px; z-index: 356;">
							<img src="<?php echo asset_url();?>images/img0627.png" id="Line6" alt="">
						</div>
						<div id="wb_Line7"
							style="position: absolute; left: 36px; top: 69px; width: 1px; height: 69px; z-index: 357;">
							<img src="<?php echo asset_url();?>images/img0628.png" id="Line7" alt="">
						</div>
						<div id="wb_Line8"
							style="position: absolute; left: 41px; top: 69px; width: 1px; height: 69px; z-index: 358;">
							<img src="<?php echo asset_url();?>images/img0629.png" id="Line8" alt="">
						</div>
					</div>
					<div id="wb_Image64"
						style="position: absolute; left: 216px; top: 0px; width: 442px; height: 235px; z-index: 369;">
						<img src="<?php echo asset_url();?>images/sellerheader0.jpg" id="Image64" alt="">
					</div>
					<div id="Layer79"
						style="position: absolute; text-align: left; visibility: hidden; left: 632px; top: 0px; width: 647px; height: 235px; z-index: 370;">
						<div id="wb_Text136"
							style="position: absolute; left: 180px; top: 102px; width: 322px; height: 16px; text-align: center; z-index: 359;">
							<span
								style="color: #C0C0C0; font-family: Georgia; font-size: 12px;">TRD
								STATION TOOLBOX</span>
						</div>
						<div id="wb_Shape10"
							style="position: absolute; left: 33px; top: 83px; width: 11px; height: 48px; z-index: 360;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer79', 0, 'slideright', 500, 'swing');return false;"><img
								src="<?php echo asset_url();?>images/img0630.png" id="Shape10" alt=""
								style="width: 11px; height: 48px;"></a>
						</div>
						<div id="wb_Line1"
							style="position: absolute; left: 22px; top: 69px; width: 1px; height: 69px; z-index: 361;">
							<img src="<?php echo asset_url();?>images/img0631.png" id="Line1" alt="">
						</div>
						<div id="wb_Line2"
							style="position: absolute; left: 12px; top: 69px; width: 1px; height: 69px; z-index: 362;">
							<img src="<?php echo asset_url();?>images/img0632.png" id="Line2" alt="">
						</div>
						<div id="wb_Line3"
							style="position: absolute; left: 14px; top: 69px; width: 1px; height: 69px; z-index: 363;">
							<img src="<?php echo asset_url();?>images/img0633.png" id="Line3" alt="">
						</div>
						<div id="wb_Line4"
							style="position: absolute; left: 19px; top: 69px; width: 1px; height: 69px; z-index: 364;">
							<img src="<?php echo asset_url();?>images/img0634.png" id="Line4" alt="">
						</div>
					</div>
				</div>
			</div>
			<div id="Layer98"
				style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 284px; width: 1280px; height: 651px; z-index: 461;">
				<div id="wb_Shape1"
					style="position: absolute; left: 582px; top: 3px; width: 24px; height: 12px; z-index: 427;">
					<img src="<?php echo asset_url();?>images/img0420.png" id="Shape1" alt=""
						style="width: 24px; height: 12px;">
				</div>
				<div id="Layer100"
					style="position: absolute; text-align: left; left: 0px; top: 13px; width: 1280px; height: 631px; z-index: 428;">
					<div id="Layer101"
						style="position: absolute; text-align: center; left: 0px; top: 6px; width: 1280px; height: 624px; z-index: 415;">
						<div id="Layer101_Container"
							style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Shape26"
								style="position: absolute; left: 1234px; top: 10px; width: 38px; height: 33px; z-index: 380;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer98', 0, 'slideup', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0421.gif" id="Shape26" alt=""
									style="width: 38px; height: 33px;"></a>
							</div>
							<div id="wb_Text163"
								style="position: absolute; left: 69px; top: 190px; width: 141px; height: 16px; z-index: 381; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Business
										Information</strong></span>
							</div>
							<div id="Layer93"
								style="position: absolute; text-align: center; left: 621px; top: 55px; width: 592px; height: 426px; z-index: 382;">
								<div id="Layer93_Container"
									style="width: 592px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<div id="SlideShow3"
										style="position: absolute; left: 0px; top: 0px; width: 592px; height: 411px; z-index: 371;">
										<a href="<?php echo asset_url();?>images/1.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/1.jpg" alt="" title=""></a> <a
											href="<?php echo asset_url();?>images/2.jpg" data-rel="SlideShow3"><img class="image"
											src="<?php echo asset_url();?>images/2.jpg" style="display: none;" alt="" title=""></a>
										<a href="images/fc_environment-3.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/fc_environment-3.jpg"
											style="display: none;" alt="" title=""></a> <a
											href="<?php echo asset_url();?>images/fc_environment-1.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/fc_environment-1.jpg"
											style="display: none;" alt="" title=""></a>
									</div>
									<div id="wb_PhotoGallery5"
										style="position: absolute; left: 118px; top: 4px; width: 363px; height: 420px; visibility: hidden; z-index: 372;">
										<table id="PhotoGallery5">
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/India-CPGI-ISO-9001-certificateok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img0"
														src="<?php echo asset_url();?>images/tn_India-CPGI-ISO-9001-certificateok.png"></a></td>
												<td class="image"><a href="<?php echo asset_url();?>images/ISO_2000ok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png"></a></td>
											</tr>
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/ISO-9001-CERTIFICATEok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img2"
														src="<?php echo asset_url();?>images/tn_ISO-9001-CERTIFICATEok.png"></a></td>
												<td class="image"><a
													href="<?php echo asset_url();?>images/ISO-9001-Certificationok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img3"
														src="<?php echo asset_url();?>images/tn_ISO-9001-Certificationok.png"></a></td>
											</tr>
										</table>
									</div>
									<div id="wb_PhotoGallery6"
										style="position: absolute; left: 142px; top: 11px; width: 317px; height: 407px; visibility: hidden; z-index: 373;">
										<table id="PhotoGallery6">
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/Certificate_of_Honor2004.jpg"
													data-rel="PhotoGallery6"><img alt=""
														id="PhotoGallery6_img0"
														src="<?php echo asset_url();?>images/tn_Certificate_of_Honor2004.png"></a></td>
											</tr>
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/iso_9001_certification.gif"
													data-rel="PhotoGallery6"><img alt=""
														id="PhotoGallery6_img1"
														src="<?php echo asset_url();?>images/tn_iso_9001_certification.png"></a></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div id="wb_Text164"
								style="position: absolute; left: 69px; top: 216px; width: 95px; height: 15px; text-align: justify; z-index: 383;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Business Type</span>
							</div>
							<div id="wb_Text165"
								style="position: absolute; left: 230px; top: 216px; width: 89px; height: 15px; text-align: justify; z-index: 384;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['user_subcategory'];?></span>
							</div>
							<div id="wb_Text166"
								style="position: absolute; left: 69px; top: 336px; width: 89px; height: 15px; text-align: justify; z-index: 385;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Country</span>
							</div>
							<div id="wb_Text167"
								style="position: absolute; left: 69px; top: 356px; width: 89px; height: 15px; text-align: justify; z-index: 386;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Province
									/ City</span>
							</div>
							<div id="wb_Text168"
								style="position: absolute; left: 230px; top: 356px; width: 89px; height: 15px; text-align: justify; z-index: 387;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['company_province'];?></span>
							</div>
							<div id="wb_Text169"
								style="position: absolute; left: 69px; top: 236px; width: 89px; height: 15px; text-align: justify; z-index: 388;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Main
									Product</span>
							</div>
							<div id="wb_Text170"
								style="position: absolute; left: 230px; top: 236px; width: 357px; height: 30px; text-align: justify; z-index: 389;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['mainproducts'];?>
								</span>
							</div>
							<div id="wb_Text171"
								style="position: absolute; left: 69px; top: 276px; width: 89px; height: 15px; text-align: justify; z-index: 390;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Main
									Market</span>
							</div>
							<div id="wb_Text172"
								style="position: absolute; left: 230px; top: 276px; width: 254px; height: 15px; text-align: justify; z-index: 391;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Africa,
									Middel East</span>
							</div>
							<div id="wb_Text173"
								style="position: absolute; left: 69px; top: 391px; width: 129px; height: 16px; z-index: 392; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Performance</strong></span>
							</div>
							<div id="wb_Text174"
								style="position: absolute; left: 69px; top: 416px; width: 89px; height: 15px; text-align: justify; z-index: 393;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Membership</span>
							</div>
							<div id="wb_Text175"
								style="position: absolute; left: 230px; top: 416px; width: 134px; height: 15px; text-align: justify; z-index: 394;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php if($business[0]['plan_id'] > 1) { ?>Black
									Horse Member<?php } else { ?>Free Member<?php } ?></span>
							</div>
							<div id="wb_Text176"
								style="position: absolute; left: 69px; top: 436px; width: 89px; height: 15px; text-align: justify; z-index: 395;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Likes</span>
							</div>
							<div id="wb_Text346"
								style="position: absolute; left: 231px; top: 436px; width: 63px; height: 14px; z-index: 396; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;"><?php echo $business[0]['likes'];?></span>
							</div>
							<div id="wb_Text177"
								style="position: absolute; left: 69px; top: 501px; width: 129px; height: 32px; z-index: 397; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Production
										Capacity</strong></span>
							</div>
							<div id="wb_Text1"
								style="position: absolute; left: 69px; top: 526px; width: 89px; height: 15px; text-align: justify; z-index: 398;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Factory
									Size</span>
							</div>
							<div id="wb_Text180"
								style="position: absolute; left: 230px; top: 526px; width: 292px; height: 15px; text-align: justify; z-index: 399;">
								<span style="color: #000000; font-family: Arial; font-size: 12px;">
									<?php if($business[0]['fact_size'] == 100) { ?>
									Less Than 100 Square Meter
									<?php } elseif ($business[0]['fact_size'] == 500) { ?>
									100 to 500 Square Meter
									<?php } elseif ($business[0]['fact_size'] == 1000) { ?>
									501 to 1000 Square Meter
									<?php } elseif ($business[0]['fact_size'] == 2000) { ?>
									1001 to 2000 Square Meter
									<?php } elseif ($business[0]['fact_size'] == 2100) { ?>
									More Than 2000 Square Meter
									<?php }?>
									
								</span>
							</div>
							<div id="wb_Text181"
								style="position: absolute; left: 69px; top: 546px; width: 147px; height: 15px; text-align: justify; z-index: 400;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">No.
									of Production Lines</span>
							</div>
							<div id="wb_Text182"
								style="position: absolute; left: 230px; top: 546px; width: 134px; height: 16px; text-align: justify; z-index: 401;">
								<span
									style="color: #000000; font-family: Arial; font-size: 13px;"><?php echo $business[0]['no_of_production_line'];?></span>
							</div>
							<div id="wb_Text183"
								style="position: absolute; left: 230px; top: 566px; width: 319px; height: 15px; text-align: justify; z-index: 402;">
								<span style="color: #000000; font-family: Arial; font-size: 12px;">
								<?php foreach ($user_rnd as $row) { ?>
	  							<?php if($row['rnd_type_id'] == 4) { ?>
	  							<?php echo $business[0]['rnd_capacity'];?>
	  							<?php } else { ?>
	  							<?php echo $row['name']?>&nbsp;
	  							<?php } ?>
	  							<?php } ?></span>
							</div>
							<div id="wb_Text2"
								style="position: absolute; left: 69px; top: 566px; width: 147px; height: 15px; text-align: justify; z-index: 403;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">R&amp;D
									Capacity</span>
							</div>
							<div id="wb_Text3"
								style="position: absolute; left: 69px; top: 316px; width: 106px; height: 15px; text-align: justify; z-index: 404;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">No.
									of Employees</span>
							</div>
							<div id="wb_Text4"
								style="position: absolute; left: 230px; top: 296px; width: 89px; height: 15px; text-align: justify; z-index: 405;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['year_of_registration'];?></span>
							</div>
							<div id="wb_Text5"
								style="position: absolute; left: 230px; top: 316px; width: 170px; height: 15px; text-align: justify; z-index: 406;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['total_no_of_emp'];?>
									Person</span>
							</div>
							<div id="wb_Text50"
								style="position: absolute; left: 69px; top: 296px; width: 146px; height: 15px; text-align: justify; z-index: 407;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Year
									of Establish</span>
							</div>
							<div id="wb_Text51"
								style="position: absolute; left: 230px; top: 336px; width: 89px; height: 15px; text-align: justify; z-index: 408;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['company_country'];?></span>
							</div>
							<div id="wb_Text66"
								style="position: absolute; left: 71px; top: 53px; width: 81px; height: 16px; z-index: 409; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>About
										Us</strong></span>
							</div>
							<div id="Layer104"
								style="position: absolute; overflow: auto; text-align: left; left: 51px; top: 85px; width: 545px; height: 88px; z-index: 410;">
								<div id="wb_Text218"
									style="position: absolute; left: 18px; top: 6px; width: 504px; height: 62px; text-align: justify; z-index: 374;">
									<span
										style="color: #5A5A5A; font-family: Arial; font-size: 12px;"><?php echo substr($business[0]['company_introduction'],0,460);?><?php if(strlen($business[0]['company_introduction']) > 460) {?>...<?php }?> <br>
									</span>
								</div>
							</div>
							<div id="wb_Image1"
								style="position: absolute; left: 102px; top: 431px; width: 25px; height: 25px; z-index: 411;">
								<img src="<?php echo asset_url();?>images/items_like0.png" id="Image1" alt="">
							</div>
							<div id="Layer119"
								style="position: absolute; text-align: center; visibility: hidden; left: 621px; top: 45px; width: 592px; height: 431px; z-index: 412;">
								<div id="Layer119_Container"
									style="width: 592px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<div id="wb_PhotoGallery2"
										style="position: absolute; left: 116px; top: 18px; width: 363px; height: 200px; z-index: 375;">
										<table id="PhotoGallery2">
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/India-CPGI-ISO-9001-certificateok.jpg"
													data-rel="PhotoGallery2"><img alt=""
														id="PhotoGallery2_img0"
														src="<?php echo asset_url();?>images/tn_India-CPGI-ISO-9001-certificateok.png"></a></td>
												<td class="image"><a href="<?php echo asset_url();?>images/ISO%202000.jpg"
													data-rel="PhotoGallery2"><img alt=""
														id="PhotoGallery2_img1" src="<?php echo asset_url();?>images/tn_ISO%202000.png"></a></td>
											</tr>
										</table>
									</div>
									<div id="wb_Text311"
										style="position: absolute; left: 234px; top: 345px; width: 161px; height: 16px; z-index: 376; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;"><strong>SGS
												Verification No. :</strong></span>
									</div>
									<div id="wb_Text312"
										style="position: absolute; left: 225px; top: 364px; width: 158px; height: 16px; text-align: center; z-index: 377;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;">QNd12355525</span>
									</div>
									<div id="wb_Text313"
										style="position: absolute; left: 280px; top: 394px; width: 45px; height: 16px; z-index: 378; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;"><strong><a
												href="http://www.sgs.com/en/Our-Company/Certified-Clients-and-Products/Audited-supplier-verification.aspx"
												target="_blank" class="style5">Check</a></strong></span>
									</div>
									<div id="wb_Text285"
										style="position: absolute; left: 25px; top: 234px; width: 544px; height: 16px; text-align: center; z-index: 379;">
										<span
											style="color: #696969; font-family: Arial; font-size: 12px;">Verified
											logo is only ( strictly ) submitted to the Seller / Shipper
											who has been passed a strict verified check and audit
											procedures performed by leading inspection, verification,
											testing and certification third party companies, includes
											company licenses, product certificates and onsite check.<br>
											<br>
										</span><span
											style="color: #2D2D2D; font-family: Arial; font-size: 12px;">Enlarg
											Sellers / Shipper's verification certificate to view, or copy
											the ( Member Verification No. shown below ) and past it into
											the CHECK&nbsp; link.</span>
									</div>
								</div>
							</div>
							<div id="wb_Text7"
								style="position: absolute; left: 69px; top: 455px; width: 89px; height: 15px; text-align: justify; z-index: 413;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Rank</span>
							</div>
							<div id="wb_Text8"
								style="position: absolute; left: 231px; top: 455px; width: 63px; height: 14px; z-index: 414; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">%<?php echo $business[0]['rank'];?></span>
							</div>
						</div>
					</div>
					<div id="wb_Text77"
						style="position: absolute; left: 710px; top: 512px; width: 81px; height: 16px; z-index: 416; text-align: left;">
						<span style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Certificates</strong></span>
					</div>
					<div id="wb_Text82"
						style="position: absolute; left: 837px; top: 512px; width: 168px; height: 15px; z-index: 417; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">ISO,
							SGS, CQC, ICQ, Ce</span>
					</div>
					<div id="wb_Text228"
						style="position: absolute; left: 1111px; top: 513px; width: 65px; height: 15px; z-index: 418; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 1);return false;">View</a></span>
					</div>
					<div id="wb_Text85"
						style="position: absolute; left: 712px; top: 532px; width: 81px; height: 16px; z-index: 419; text-align: left;">
						<span style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>License</strong></span>
					</div>
					<div id="wb_Text86"
						style="position: absolute; left: 837px; top: 532px; width: 168px; height: 15px; z-index: 420; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Expor
							License</span>
					</div>
					<div id="wb_Text88"
						style="position: absolute; left: 1111px; top: 533px; width: 65px; height: 15px; z-index: 421; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 1);ShowObject('wb_PhotoGallery5', 0);return false;">View</a></span>
					</div>
					<div id="wb_Text250"
						style="position: absolute; left: 837px; top: 572px; width: 143px; height: 15px; text-align: justify; z-index: 422;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Back
							to Company Gallery</span>
					</div>
					<div id="wb_Text89"
						style="position: absolute; left: 1111px; top: 571px; width: 36px; height: 15px; z-index: 423; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 1);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 0);return false;">View</a>
						</span>
					</div>
					<div id="wb_Text90"
						style="position: absolute; left: 712px; top: 551px; width: 100px; height: 16px; z-index: 424; text-align: left;">
						<span style="color: #FF6347; font-family: Arial; font-size: 13px;"><strong>Verification</strong></span>
					</div>
					<div id="wb_Text547"
						style="position: absolute; left: 837px; top: 551px; width: 168px; height: 15px; z-index: 425; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Done
							by ( Povided later ) ..</span>
					</div>
					<div id="wb_Text548"
						style="position: absolute; left: 1111px; top: 552px; width: 65px; height: 15px; z-index: 426; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 0);ShowObject('Layer119', 1);return false;">View</a></span>
					</div>
				</div>
			</div>
			<div id="Layer223"
				style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 462;">
				<div id="Layer223_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer139"
						style="position: absolute; text-align: center; left: 513px; top: 326px; width: 277px; height: 163px; z-index: 437;">
						<div id="Layer139_Container"
							style="width: 277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="RollOver64"
								style="position: absolute; left: 32px; top: 19px; width: 45px; height: 45px; z-index: 429">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/google.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/google0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver65"
								style="position: absolute; left: 89px; top: 19px; width: 45px; height: 45px; z-index: 430">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/face.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/face0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver66"
								style="position: absolute; left: 146px; top: 19px; width: 45px; height: 45px; z-index: 431">
								<a href="http://twitter.com/share" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/twitter.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/twitter0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver67"
								style="position: absolute; left: 32px; top: 78px; width: 45px; height: 45px; z-index: 432">
								<a
									href="https://www.pinterest.com/join/?next=/pin/create/button/%3Furl%3Dhttp%3A//www.udtalks.com%26media%3Dhttp%3A//www.udtalks.com/images/sofa.jpg%26description%3DDescription%2520goes%2520here"
									target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/pin.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/pin0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver68"
								style="position: absolute; left: 203px; top: 19px; width: 45px; height: 45px; z-index: 433">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/linkedin.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/linkedin0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver69"
								style="position: absolute; left: 89px; top: 78px; width: 45px; height: 45px; z-index: 434">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/instgram.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/instgram0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver70"
								style="position: absolute; left: 146px; top: 78px; width: 45px; height: 45px; z-index: 435">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/wechat.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/wechat0.png">
										</div>
									</div>
								</a>
							</div>
							<div id="RollOver71"
								style="position: absolute; left: 203px; top: 78px; width: 45px; height: 45px; z-index: 436">
								<a href="" target="_blank">
									<div class="image_container">
										<div class="front">
											<img alt="" src="<?php echo asset_url();?>images/qq.png">
										</div>
										<div class="back">
											<img alt="" src="<?php echo asset_url();?>images/qq0.png">
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div id="wb_Image103"
						style="position: absolute; left: 777px; top: 300px; width: 40px; height: 40px; z-index: 438;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer223', 0, 'fade', 500);return false;"><img
							src="<?php echo asset_url();?>images/img0638.png" id="Image103" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>