<form name="frmadd3dproduct"   method="post" action="" enctype="multipart/form-data" id="frmadd3dproduct" >
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
  		<?php if($myds_stage == 4) { ?>
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<input type="hidden"  value="<?php echo $max_3dpro;?>" name="maxproduct" id="maxproduct" />
		  			<input type="hidden"  value="<?php echo count($product);?>" name="productcount" id="productcount" />
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Add Real 3D Effects To Your Products.</span>
		  		</div>
		  	</div><br><br>	
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Deliver
										deep and rich information about your business and let your
										clients experience a new way to view your products..<br>Real in
										3D effect enable your clients to rotate your product and view
										it from all sides in an amazing way.. <br>To add R3D effect to
										your products, first, you have to link the R3D effect to a
										certin product.Get started and follow the steps and tips
										hereunder:<br>
					</span>
		  		</div>
		  	</div><br><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  				<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">STEP
										1</span><span
										style="color: #000000; font-family: Arial; font-size: 11px;"><br></span><span
										style="color: #2D2D2D; font-family: Arial; font-size: 11px;">-
										Type the product name or No., ( which you like to link to your
										R3D) on the search box, and press search.<br>- On result, click
										on the checkbox next to the required product then click “LINK”.<br>
									</span>
		  		</div>
		  	</div><br><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  				<input type="text" id="product_item" autocomplete = off   style="position:absolute;width:487px;height:29px;line-height:29px;" name="SiteSearch1" value="" placeholder="Type products name or no.">
		  				<button type="button" onclick="searchProduct();" name="searchproduct" class="btn btn-search-black" style="position:absolute;left:500px;"><i class="fa fa-search"></i></button>
		  		</div>
		  	</div><br><br><br>
		  	<div class="row">
		  		<div class="col-md-12"  id="productlist">
		  		</div>
		  	</div>
		  	
		  	<br>
	  		<div class="row" >
		  		<div class="col-md-12">
		  				<span style="color:#696969;font-family:Arial;font-size:11px;">Please note that we link the R3D effects to a specified product to get the product details, specifications, price …etc </span>
		  		</div>
		  	</div>	
	  		<div class="row"  style="padding-top: 35px;>
		  		<div class="col-md-12">
		  			<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">STEP
										2</span><span
										style="color: #000000; font-family: Arial; font-size: 11px;"><br></span><span
										style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Click
										on &quot;Upload&quot; button, to upload a serial of 16 images (
										Frames) for the same product token from 16 different <br>
										horizontal angels in a respected sequence. <br>
					</span>
		  	</div>
	  		<div class="row" style="padding-top: 22px;">
	  			<div class="col-md-10">
			  		<div class="col-md-5" style="top: 7px;">
			  			<span  style="color: #1E90FF; font-family: 'Arial Black'; font-size: 12px;"><u><a  href="#" onclick="addexample();" >Example</a></u></span>
			  		</div>
			  		<div class="col-md-5" >
<!-- 			  		multiple="multiple"    onchange="read3dimages(this);"  -->
			  			<input type="file" name="file3dimages[]" id="file3dimages"  multiple="multiple" accept=".png,.jpg,.jpeg.gif" onchange="uploaddimg('file3dimages',this,350,400,500);"  style="display:none" />
			  			<button type="button" onclick="uploadimage();" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;">
			  			<span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Upload</span></button>
			  		</div>
		  		</div>
		  	</div>	
	  		<div class="row" style="padding-top: 30px;>
		  		<div class="col-md-12">
		  			<span style="color: #F05539; font-family: Arial; font-size: 11px;">*</span><span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Important Notes:</span>
		  	</div>
	  		<div class="row" >
		  		<div class="col-md-12">
		  			<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">-
										Images to be in png or jpg format, Dimensions: w 350 * H 400
										pixel.<br>- Resolution: 75 dpi.<br>- With transparent or white
										background.<br>- The 16 images to be named from frame_1 to
										frame_16 in respect to the position. <br>- The products in all
										images must has with the same size, height, width, in the
										middle/center of all the&nbsp; <br>&nbsp;&nbsp; frames as shown
										in the above example link.<br>- We recommend you to return to a
										professional designer to do it.<br>
									</span>
		  		</div>
		  	</div>	
   		</div>
   		<?php } else { ?>
		<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
			<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
					<a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
				</div>
				<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>Real In 3D</strong>, you first have to complete creating your products directories and adding your products details in english.</span>
				</div>
				<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
					<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
				</div>
				<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
					<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
				</div>
				<div id="wb_Text762" style="position:absolute;left:567px;top:271px;width:333px;height:28px;text-align:left;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" icon to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">you site and add your products.</span>
				</div>
			</div>
		</div>
		<?php } ?>
   </div>
 </form>
 <div id="example_modal" class="modal fade" style="background-color: #404040;width:100%;height:100%; text-align:center">
	<div class="modal-dialog" >
		<div class="" >
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="filter:alpha(opacity=100);opacity: 1;">
				<img src="<?php echo asset_url();?>images/closeround.png" id="Image66" alt="close" style="width:36px;">
			</button>
			<form id="frmexampleproduct" method="post" enctype="multipart/form-data" action="">
					<div class="row">
						<div class="col-md-12" id="example">
						</div>
					</div>					
			</form>
		</div>
	</div>
</div>
  <div id="3dproduct_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Product 3D Picture</h3>
			</div>
			<div class="modal-body" >
				<form id="frmcropimageproduct" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="dproductfile"  onchange="uploadimagepopup();" id="dproductfile"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="200" />
				        <input type="hidden" name="height" id="height" value="200" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="productimage_name" value="" id="productimage_name" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="dproductphoto" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_dcrop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
function addexample()
{
	var values = new Array();
    $.each($("input[name='product_id']:checked"), function(){            
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length > 1)
		{
			alert('Please select Only one product to link 3d  Images.');
		} else {
			 	var pid = values[0];
			 	$.post("<?php echo base_url();?>mystation/getdproductbyid",{pid:pid},function(data) {
				 	document.getElementById('example').innerHTML = data;
				 	$('#example_modal').modal({show:true,backdrop: 'static',keyboard: false});
			 	});
		}
	} else {
		alert('Please select product to link 3d  Images.');
	}
}
function uploaddimg(id,input,width,height,size)
{
	var total = input.files.length;
	var count = 0;
	for(i =0;i<total;i++)
	{
		var flag = setup_readercert($(input)[0].files, i,size,width,height,id);
		if(flag == false)
		{
			count++;
		}
	}
	//alert(flag);
	if(count == 0)
	{
		read3dimages(input);
	}
}
function setup_readercert(files, i,size,width,height,id)
{
	var flag = false;
	 var file = files[i];
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = file.name.split('.').pop();
       		var file_size = parseInt(file.size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgheight = this.height;
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                if (imgwidth != width || imgheight != height) {
		                    alert("Image dimensions should be "+width+"*"+height+" Pixel.");
		                    $('#'+id).val('');
		                    flag = false;
		                } else {
								flag = true;
		                	//$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                }
	                }
                } else {
                	alert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                    flag = false;
                }
            };
      	}
        reader.readAsDataURL(file);
        return flag;
}

function uploadimage() 
{
	var values = new Array();
    $.each($("input[name='product_id']:checked"), function(){            
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length > 1)
		{
			alert('Please select Only one product to link 3d  Images.');
		} else {
			 	//e.preventDefault();
			 	var maxproduct = document.getElementById('maxproduct').value;
			 	var productcount = document.getElementById('productcount').value;
			 	if(productcount < maxproduct)
			 	{
		        	$("#file3dimages").trigger('click');
			 	} else {
				 	alert('you can not upload more than '+maxproduct+' 3D images of product');
			 	}
		}
	} else {
		alert('Please select product to link 3d  Images.');
	}
}
function read3dimages(input) {
	var filecount = $(input)[0].files.length;
	if(filecount < 17) {
		if(filecount == 0) {
			alert('Please select at least one image.');
		} else {
            linkProduct();
		}
	} else {
		alert('You can not select more than 16 files');
	}
}
// function uploadimage()
// {
// 	var id = document.getElementById('product_id').value;
// 	if(id > 0)
// 	{
// 		jQuery('#3dproduct_modal').modal({show:true,backdrop: 'static',keyboard: false});
// 		$('#dproductphoto').css('display', 'none');
// 		jQuery("#dproductfile").val('');
// 		jQuery('.imgareaselect-outer').css('display','none');
// 	} else {
// 		alert('Please Select Proctduct from list');
// 	}
// }
 function uploadimagepopup()
 {
	 
    $('#dproductphoto').css('display', 'block');
    savetemparary();

    var ias = jQuery('#dproductphoto').imgAreaSelect( {
        aspectRatio: '1:1',
        maxWidth: 350, 
        maxHeight: 400,
        minWidth: 100, 
        minHeight: 100,
        x1: 50,
        y1: 50, 
        x2: 300,
        y2: 300,
        onSelectEnd: function ( image, selected) {
            jQuery('input[name=x1]').val(selected.x1);
            jQuery('input[name=y1]').val(selected.y1);
            jQuery('input[name=x2]').val(selected.x2);
            jQuery('input[name=y2]').val(selected.y2);
            jQuery('input[name=width]').val(selected.width);
            jQuery('input[name=height]').val(selected.height);
        },
    	handles: true,
  		parent: '#parent'
    });
    ias.load(function(){
       	var height = ( this.width / 4 ) * 4;
       	if( height <= this.height ){     
         	var diff = ( this.height - height ) / 2;
            	var coords = { x1 : 0, y1 : diff, x2 : this.width, y2 : height + diff };
            	jQuery('input[name=x1]').val(0);
             jQuery('input[name=y1]').val(diff);
             jQuery('input[name=x2]').val(this.width);
             jQuery('input[name=y2]').val(height + diff);
             jQuery('input[name=width]').val(this.width);
             jQuery('input[name=height]').val(height);
      	} else {
        		var width = ( this.height / 4 ) * 4; 
             var diff = ( this.width - width ) / 2;
             var coords = { x1 : diff, y1 : 0, x2 : width + diff, y2: this.height };
             jQuery('input[name=x1]').val(diff);
             jQuery('input[name=y1]').val(0);
             jQuery('input[name=x2]').val(width + diff);
             jQuery('input[name=y2]').val(this.height);
             jQuery('input[name=width]').val(width);
             jQuery('input[name=height]').val(this.height);
      	}   
      	$( this ).imgAreaSelect( coords );
		});

}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : show3DProductRequest, // pre-submit callback 
 			success :  show3DProductResponse,
 			url : '<?php echo base_url()?>mystation/save3dproducttempararyimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmcropimageproduct').ajaxSubmit(options);
}
function show3DProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function show3DProductResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
	$("#response").addClass('alert-danger');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	//getChangepassword();
	} else {
	$('#photo').attr('src', resp.msg);
	$("#response").addClass('alert-success');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	$('#dproductphoto').attr('src', resp.msg);
	$('#productimage_name').val(resp.msg);
	
	//getMyAccount();
	//window.location.reload();
	}
ajaxindicatorstop();
}
jQuery('#save_dcrop').unbind().on('click', function(e){
	if(jQuery('#x1').val() != "")
	{
			e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>mystation/add3dproductpicture',
					action: 'save',
					x_axis: jQuery('#x1').val(),
					y_axis : jQuery('#y1').val(),
					x2_axis: jQuery('#x2').val(),
					y2_axis : jQuery('#y2').val(),
					thumb_width : jQuery('#width').val(),
					thumb_height:jQuery('#height').val()
			};
			$('#dproductphoto').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		alert('Please select Image for crop');
	}
});
function saveCropImage(params) {
	
	jQuery.ajax({
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
				image_name :jQuery('#productimage_name').val(),
				product_id :jQuery('#product_id').val()
			},
			type: 'Post',
			success: function (response) {
				jQuery('#profile_pic_modal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer,.imgareaselect-selection").css('display', 'none');
				//jQuery("#profileImage").attr('src', response['fullpath']);
				//$('#profilepath').val(response['path']);
				//$('#messageContainer1').empty();
				//$('#frmeditpersonalinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
				//jQuery("#preview-profile-pic").html('');
				//$('#divprofileImage').css('display', 'block');
				//$('#divfileprofileImg').css('display', 'none');
				jQuery("#dproductfile").val('');
				jQuery('#3dproduct_modal').modal('hide');
				alert(response.msg);
				product_id = jQuery('#product_id').val();
				openEdit3DproductFormByaddproduct(product_id);
			},
		
	},'json');
}
$('#3dproduct_modal').on('hidden.bs.modal' , function() {
	$('#dproductphoto').imgAreaSelect( {remove: true} );
});
// $("#product_item").typeahead({
//     onSelect: function(item) {
//     	$("#productitem").attr('data-value',item.value);
//     	$("#product_id").val(dataname[0].id);
//     },
//     ajax: {
//         url: base_url+"mystation/product_item",
//         timeout: 500,
//         displayField: "name",
//         triggerLength: 1,
//         method: "get",
//         loadingClass: "loading-circle",
//         preDispatch: function (query) {
//             return {
//             	name: query,
//             	model_no: query
//             }
//         },
//         preProcess: function (data) {
//           //  alert(JSON.stringify(data));
//             if (data.success === false) {
//                 return false;
//             }
//             dataname = data;
//             return data;
//         }
//     }
// });	

</script>
 
 
