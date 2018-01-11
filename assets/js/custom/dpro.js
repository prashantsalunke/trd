function get3Dproduct()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/3dproduct",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer108', 1, 'scale', 500, 'swing');
		$("#Layer108_Container").html(data);
		return false;
	});
}
function openAdd3Dproduct()
{
	$.get(base_url+"mystation/add3dproduct",{},function(data){
		$("#addproduct").html(data);
		$("#addproduct_div").show();
	});
}
function openEdit3Dproduct()
{
	$.get(base_url+"mystation/edit3dproduct",{},function(data){
		$("#editproduct").html(data);
		$("#editproduct_div").show();
	});
}
function openEdit3DproductFormByeditproduct(product_id)
{
	$.get(base_url+"mystation/edit3dproductForm",{product_id:product_id},function(data){
		$("#editproduct").html(data);
		$("#editproduct_div").show();
		$(document).ready(function(){
			$('#frmedit_product').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
				    'data[productname]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Product Name  is required and cannot be empty'
				    		}
				    	}
				    },
				    'data[discription]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Discription  is required and cannot be empty'
				    		}
				    	}
				    }
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    $( '#btnedit').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				  editproduct();
				});
			});
		
		
		
	});
}
function openEdit3DproductFormByaddproduct(product_id)
{
	$.get(base_url+"mystation/edit3dproductForm",{product_id:product_id},function(data){
		$("#addproduct").html(data);
		$("#addproduct_div").show();
		$(document).ready(function(){
			$('#frmedit_product').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
				    'data[productname]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Product Name  is required and cannot be empty'
				    		}
				    	}
				    },
				    'data[discription]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Discription  is required and cannot be empty'
				    		}
				    	}
				    }
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    $( '#btnedit').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				   editproduct();
				});
			});
		
		
		
	});
}
function editproduct()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showEditFileRequest, // pre-submit callback 
 			success :  showEditFileResponse,
 			url : base_url+'mystation/editproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmedit_product').ajaxSubmit(options);
}
function showEditFileRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showEditFileResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	}
}
function deleteproductlist()
{ 
		var values = new Array();
	        $.each($("input[name='productlist[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
			deleteProduct();
		
	} else {
		alert("Please select Product ");
	}
}	
function deleteProduct()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showDeleteFileRequest, // pre-submit callback 
 			success :  showDeleteFileResponse,
 			url : base_url+'mystation/delete3dproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditdproduct').ajaxSubmit(options);
}
function showDeleteFileRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showDeleteFileResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEdit3Dproduct();
	}
}
function editproductlist()
{ 
		var values = new Array();
	        $.each($("input[name='productlist[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length > 1) {
			alert("Please select Only one Product for edit ");
		} else {
			var product_id =  values[0];
			openEdit3DproductFormByeditproduct(product_id)
		}
		
	} else {
		alert("Please select Product ");
	}
}	
function searchProduct()
{
	var product = document.getElementById('product_item').value;
	if(product != ""){
		$.post(base_url+"mystation/product_item",{'product': product},function(data){
			$("#productlist").html(data);
		});
	} else {
		alert('Please Enter product name or no.');
	}
}
function linkProduct()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showLinkProductRequest, // pre-submit callback 
 			success :  showLinkProductResponse,
 			url : base_url+'mystation/linkproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmadd3dproduct').ajaxSubmit(options);
}
function showLinkProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showLinkProductResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$("#dpid").val(resp.id);
		//openEdit3DproductFormByaddproduct(resp.product_id);
		//$("#edit3dpro").trigger("click");
		//$('.nav-tabs > .active').next('li').find('a').trigger('click');
		//openEdit3Dproduct();
	}
}
function changeDimage()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangeimageRequest, // pre-submit callback 
 			success :  showChangeimageResponse,
 			url : base_url+'mystation/changimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmchangeproductlink').ajaxSubmit(options);
}
function showChangeimageRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showChangeimageResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
		$('#frame_'+resp.pid).attr('src',asset_url+resp.src);
	}
}
function linkProductUpdate()
{
	var options = {
		target : '#response', // target element(s) to be updated with server response 
		beforeSubmit: showELinkProductRequest, // pre-submit callback 
		success: showELinkProductResponse,
		url : base_url+'mystation/changelinkproduct',
		semantic : true,
		dataType : 'json'
	};
	$('#frmchangeproductlink').ajaxSubmit(options);
}
function showELinkProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showELinkProductResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$("#edit3dpro").trigger("click");
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
		openEdit3Dproduct();
	}
}
