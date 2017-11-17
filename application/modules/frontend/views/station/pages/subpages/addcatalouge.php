<form name="frmeditpersonalinfo" method="post" action="" enctype="multipart/form-data" id="frmeditpersonalinfo">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">
  	<?php if($myds_stage == 4) { ?>		
  	<div id="addcatelough_div">
  		<div class="row ">
	  		<div class="col-md-12">
	  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Add A Virtual Catalogue</span>
	  		</div>
	  	</div><br><br>	
  		<div class="row">
	  		<div class="col-md-8">
	  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">V-Catalogue is a new vision in E-commerce platforms, has been added to The Trade Station to enable sellers to deliver a rich and deep information about their whole products to global buyers at once. It's a smart way to attract buyers to view the maximun number of your products fast and easy without the necessity to visit your Desksite/website and even without they feel bored ..<br><br>Get started, follow the mentioned steps and create your own V-catalogue:</span>
	  		</div>
  			<div class="col-md-2">
  				<!-- <img src="<?php echo asset_url();?>images/img2096.png"  style="position: absolute;padding: 60px;"alt="">
  				<img src="<?php echo asset_url();?>images/img1616.png"alt="" style="width:150px;height:150px;"> -->
  				<input name="catalogCImg" type='button' class="catalog_c_img" id="catalogCimg" style="border: none;" />
  				<input type="hidden" name="vcataloguepath" id="vcataloguepath"  value="" />
  			</div>
	  	</div><br><br>
  		<div class="row">
	  		<div class="col-md-10">
	  			<div class="col-md-2" style="padding-left:0px;">
	  				<span style="color:#F05539;font-family:Arial;font-size:13px;padding-left:0px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">V-Cat. Title</span>
	  			</div>
	  			<div class="col-md-5">
	  				<input type="text" id="catalogue_title" style="width:264px;height:24px;line-height:24px;" name="catalogue_title" value="" maxlength="20" placeholder="Type A Short Name For Your Catalouge">
	  				<br><span style="color:#666666;font-family:Arial;font-size:9.3px;">Example: Kids New Arrivals, Fashion Summer Collection ...etc</span>
	  			</div>
	  			<div class="col-md-3">
	  				<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload An image for the cover</span>
	  				<br><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200*200 pixel, <br>Resolution: 75, with Max. size 100 KB </span>
	  				<br><br><a href="#" class="style23 vCatalogAction" >Upload</a>
	  				<a href="#" class="style23 vCatalogAction" >Change</a>
	  			</div>
	  		</div>
	  	</div><br><br>
  		<div class="row">
	  		<div class="col-md-12">
	  			<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Choose the best products that help provide the viewers with a distinct impression about your business profile ( Click on the Main&nbsp;&nbsp;&nbsp;&nbsp; <br>Products drop down list to select from or select them one by one by typing the product name or No. then click search).<br></span>
	  		</div>
	  	</div><br><br>
  		<div class="row" >
	  		<div class="col-md-12 product-search-bar">
				<select name="sub_product_id" id="hotsub_product_id" class="form-control" style="display:inline-block;width:auto;height:30px;">
			  		<?php foreach ($mproducts as $mpro) { ?>
		      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
		        		<option value="<?php echo $spro['id'];?>"><?php echo $spro['name'];?> (<?php echo $mpro['name'];?>)</option>
		        		<?php } ?>
			    	<?php } ?>
			  	</select>
			  	<input type="text" id="item_name" style="width: 400px; height: 29px; line-height: 29px;" name="item_name" placeholder="Type products name or no.">
			  	<button type="button" onclick="searchProducts();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
			</div>
	  	</div>	
	  	<br><br>
	  	<div id="search_result_catalogue">
	  	
	  	</div>
  		<div class="row" style="padding-top: 35px;">
	  		<div class="col-md-8">
	  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Important Notes:</span>
	  			<br><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">- V-Catalouge containes from Min. 10 Pages ( 20 Products ) to&nbsp; Max. 30 Pages ( 60 Products).<br>- You will be able to update, change and edit products in your catalouge by clickin on ( View | Edit my&nbsp; <br>&nbsp;&nbsp; V-Catalouge) button.</span>
	  		</div>
	  	</div>
  		<div class="row"  style="padding-top: 35px;text-align:right">
	  		<div class="col-md-8">
	  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;" onclick="addCatalogue();"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Create</span></button>
	  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
	  		</div>		
	  	</div>
   </div>
   <div class="row">
   		<br><br><br><br><br><br>
   </div>
   <?php } else { ?>
	<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
		<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
			<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
				<a href="javascript:ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
			</div>
			<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">
					How to create catalogues without products..! You have to complete adding your products or at least the products which will be listed in your first catalogue..<br>
				</span>
			</div>
			<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
				<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
			</div>
			<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
				<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
			</div>
			<div id="wb_Text762" style="position:absolute;left:567px;top:290px;width:333px;height:28px;text-align:left;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" icon to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">you site and add your products.</span>
			</div>
		</div>
	</div>
	<?php } ?>
   </div>
 </form>
<script type="text/javascript">
$('.vCatalogAction').on('click', function(e){
	$('#vcatalogue_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#photo').css('display', 'none');
	$("#catalogue-pic").val('');
	$('.imgareaselect-outer').css('display','none');
});

$('#catalogue-pic').on('change', function() {
         var reader = new FileReader();
         reader.onload = function (e) {
          	$('#photo').show();
          
    	 }
         reader.readAsDataURL(this.files[0]);
         savetemparary();

         var ias = $('#photo').imgAreaSelect( {
             aspectRatio: '1:1',
             maxWidth: 200, 
             maxHeight: 200,
             minWidth: 200, 
             minHeight: 200,
             x1: 0,
             y1: 0, 
             x2: 200,
             y2: 200,
             onSelectEnd: function ( image, selected) {
                 $('input[name=x1]').val(selected.x1);
                 $('input[name=y1]').val(selected.y1);
                 $('input[name=x2]').val(selected.x2);
                 $('input[name=y2]').val(selected.y2);
                 $('input[name=width]').val(selected.width);
                 $('input[name=height]').val(selected.height);
             },
             handles: true,
             parent: '#parent'
         });
         ias.load(function(){
          	var height = ( this.width / 1 ) * 1;
          	if( height <= this.height ){     
            	var diff = ( this.height - height ) / 2;
               	var coords = { x1 : 0, y1 : 0, x2 : 200, y2 : 200 };
               	$('input[name=x1]').val(0);
                $('input[name=y1]').val(0);
                $('input[name=x2]').val(200);
                $('input[name=y2]').val(200);
                $('input[name=width]').val(200);
                $('input[name=height]').val(200);
         	} else {
           		var width = ( this.height / 1 ) * 1; 
                var diff = ( this.width - width ) / 2;
                var coords = { x1 : 0, y1 : 0, x2 : 200, y2: 200 };
                $('input[name=x1]').val(0);
                $('input[name=y1]').val(0);
                $('input[name=x2]').val(200);
                $('input[name=y2]').val(200);
                $('input[name=width]').val(200);
                $('input[name=height]').val(200);
         	}   
         	$( this ).imgAreaSelect( coords );
 		});
    
});

$('#save_crop').on('click', function(e){
	if($('#x1').val() != "")
	{
			params = {
					targetUrl: '<?php echo base_url();?>account/changeprofilepic',
					action: 'save',
					x_axis: jQuery('#x1').val(),
					y_axis : jQuery('#y1').val(),
					x2_axis: jQuery('#x2').val(),
					y2_axis : jQuery('#y2').val(),
					thumb_width : jQuery('#width').val(),
					thumb_height:jQuery('#height').val()
			};
			$('#photo').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		alert('Please select Image for crop');
	}
});

function saveCropImage(params) {
	$.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "json",
			data: {
			//action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				t: 'ajax',
				w1:params['thumb_width'],
				x1:params['x_axis'],
				h1:params['thumb_height'],
				y1:params['y_axis'],
				x2:params['x2_axis'],
				y2:params['y2_axis'],
				image_name :jQuery('#image_name').val()
			},
			type: 'Post',
			success: function (response) {
				$('#vcatalogue_pic_modal').modal('hide');
				$('.imgareaselect-outer').css('display','none');
				$(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');
				$("#catalogCimg").css('background-image','url('+response['fullpath']+')').css('background-cover','cover');
				$('#vcataloguepath').val(response['path']);
				$("#catalogue-pic").val('');
			},
		
	},'json');
}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showVCoverRequest, // pre-submit callback 
 			success :  showVCoverResponse,
 			url : '<?php echo base_url()?>mystation/account/savevcovertempimg',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#cropimage').ajaxSubmit(options);
}

function showVCoverRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showVCoverResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
	} else {
		$('#photo').attr('src', resp.msg);
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$('#photo').attr('src', resp.msg);
		$('#image_name').val(resp.msg);
	}
	ajaxindicatorstop();
}

$('#vcatalogue_pic_modal').on('hidden.bs.modal' , function() {
	$('#photo').imgAreaSelect( {remove: true} );
});
function searchProducts() {
	if($("#item_name").val() != "" && $("#hotsub_product_id").val() != "") {
		ajaxindicatorstart("Please wait .. while we search product...");
		$.get(base_url+"mystation/desksite/searchproduct",{ query: $("#item_name").val(), sproduct_id: $("#hotsub_product_id").val()},function(data){
			$("#addcatelough_div #search_result_catalogue").html(data);
			ajaxindicatorstop();
		},'html');
	} else {
		alert("Please enter product name");
	}
}

function addCatalogue() {
	var checkcount = 0;
	var item_id = "";
	$('#search_result_catalogue input[name="product_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we add product...");
		$.post(base_url+"mystation/catalogue/add",{item_id: item_id, catalogue_img: $("#vcataloguepath").val(), catalogue_title: $("#catalogue_title").val()},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				alert(resp.msg);
				$.get(base_url+"mystation/catalogue/content/"+resp.id,{},function(data){
					$("#catalogue_page_content").html(data);
					$("#pcatalogue_id").val(resp.id);
					ajaxindicatorstop();
					$("#vcatalogue_overlay").modal('show');
				},'html');
			}
		},'json');
	}
}
function publishCatalogue() {
	ajaxindicatorstart("Please wait .. while we publish catalogue...");
	$.get(base_url+"mystation/catalogue/publish",{catalogue_id: $("#pcatalogue_id").val()},function(resp){
		if(resp.status == 0) {
			alert(resp.msg);
		} else {
			$("#vcatalogue_overlay").modal('hide');
			$("#edit_cat_btn").trigger("click");
			alert(resp.msg);
			ajaxindicatorstop();
		}
	},'json');
}

function editCatalogue() {
	$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: $("#pcatalogue_id").val()},function(data){
		$("#editcatalouge").html(data);
		$("#editcatalouge_div").show();
		$("#vcatalogue_overlay").modal('hide');
	});
}
</script>
 
