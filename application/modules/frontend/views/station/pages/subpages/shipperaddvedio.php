<form name="frmshipperaddvedio" method="post" action="" enctype="multipart/form-data" id="frmshipperaddvedio">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;padding-left: 45px;">		
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Services Videos</span>
		  		</div>
		  	</div>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Present your company with rich information to global sellers &amp; through our " Services In Videos " tube. <br></span>
		  		</div>
		  	</div><br>
			<div id="servicevedio" >
				<div class="row" >
					<div class="col-md-3" >
						
					</div>
					<div class="col-md-4" >
						<video src="http://www.udtalks.com/orbitok.mp4" id="MediaPlayer1" controls="controls"></video>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-12" >
						<div class="col-md-3" >
						</div>
						<div class="col-md-4" style="text-align: center">
							<span style="color:red">*</span>	<span style="color:#666666;font-family:Arial;font-size:9.3px;">Mp4 format, Max. size: 30 MB</span>
						</div>	
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
						</div>
						<div class="col-md-4" >
							<input type="file"  name="uploadonepvedio"  id="uploadonepvedio"   style="display: none"/>
		  					<a href="#"  style="padding-right: 22px;" class="style23"  id="oneproductupload">Upload</a>
		  					<a href="#" class="style23" >Change</a>
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
							<span style="color:red">*</span>&nbsp;<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Video title</span>
						</div>	
						<div class="col-md-4" >
							<input type="text" class="form-control"  name="vediotitle" Placeholder="Ex. The Best Of TV's Screens" id="vediotitle" />
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
							<span style="color:red">*</span>&nbsp;<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">About this video</span>
						</div>	
						<div class="col-md-4" >
							<textarea rows="5" cols="42" name="description" id="description"  Placeholder="About this video"></textarea>
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
  					<div class="col-md-12" style="padding-bottom: 22px;">
  					<?php if($total_videos < $max_videos) { ?>
  						<div class="col-md-3"></div>
			  			<div class="col-md-2" >
			  				<button type="submit"   style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Publish</span></button>
			  			</div>
			  			<div class="col-md-2" >
			  				<button type="button"  style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
			  			</div>
			  		<?php } else { ?>
			  			<div class="col-sm-9 text-center">
			  				<span style="color:#F05539;font-family:Arial;font-size:18px;">You have reached your maximum video limit.</span>
			  			</div>
			  		<?php } ?>
					</div>
				</div>
		  	</div>
   		</div>
   </div>
 </form>
  <div id="productlist_modal" class="modal fade">
	<div class="modal-dialog" >
		<div class="modal-content" style="border:2px #FF6347 solid">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select The Product</h3>
			</div>
			<div class="modal-body" >
				<form id="frmproductlist" method="post" enctype="multipart/form-data" action="">
					<div style="text-align: center;padding-top:22px;padding-bottom:22px;">
						<input type="button"  onclick="selectproduct();" id="btnuseproduct"  name="" value="Use" style="width:158px;height:25px;">
					</div>
						<div id="subproductlist_div" style="max-height:500px;overflow-y: scroll;">
						
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
$('#frmshipperaddvedio').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
  		'vediotitle': {
            validators: {
                notEmpty: {
                    message: 'The Title is required and cannot be empty'
                }
            }
        }, 
        'description': {
            validators: {
                notEmpty: {
                    message: 'The Description  is required and cannot be empty'
                }
            }
        },
        'uploadonepvedio': {
            validators: {
                notEmpty: {
                    message: 'The Vedio File  is required and cannot be empty'
                }
            }
        }

    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savevedio();
});
function savevedio() {
	var options = {
		target : '#response', 
		beforeSubmit : showVedioRequest,
		success :  showVedioResponse,
		url : base_url+'mystation/saveservicevedio',
		semantic : true,
		dataType : 'json'
	};
	$('#frmshipperaddvedio').ajaxSubmit(options);
}

function showVedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showVedioResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		alert(resp.msg);
		openAddvedio();
		$("#save").prop('disabled',false);
	} else {
		$(".text-danger").hide();
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openAddvedio();
	}
}

$(function(){
    $("#oneproductupload").unbind().on('click', function(e){
        e.preventDefault();
        $("#uploadonepvedio:hidden").trigger('click');
    });
});

var asseturl = '<?php echo asset_url();?>';

