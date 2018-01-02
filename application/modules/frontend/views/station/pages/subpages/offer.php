<style>
.accordion {
    background-color: #FFFFFF;
    color: #444;
    cursor: pointer;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion.active, div.accordion:hover {
    background-color: #C9DFF4;
}
div.panel1 { 
     padding: 0 18px; 
     background-color: white; 
     max-height: 0; 
     overflow: hidden; 
    transition: max-height 0.2s ease-out; 
 } 
 .fa {
 	color: red;
 }
.myrow {
 	padding:2px;
}
.mypropic {
	border:1px solid #e1e1e1;
}
.imgdownload {
	padding:5px;
	text-decoration:none;
}
.imgdownload:hover {
	text-decoration:none;
}
</style>

<form name="frmaddvedio" method="post" action=""  style="background-color: #C0C0C0;" enctype="multipart/form-data" id="frmaddvedio">
	<div class="panel-heading custom-panel-heading">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6" style="text-align: left; padding-top: 13px;">
					<span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">Offers <?php echo count($offer);?></span> 
				</div>
				<div class="col-md-5" >
					
				</div>
				<div class="col-md-1" style="text-align: right">
					<span class="pull-right-close" style="text-align: right"><a href="javascript:ShowObjectWithEffect('Layer180', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
				</div>
			</div>
		</div>
  		
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;">		
  		<div id="offer_div" ><br><br>
  		<?php if($tscategory_id == 3 ) {?>
			<div class="row">
				<div class="col-md-10" >
						<div class="col-md-1" >
							<div style="background-color:#1e90ff;text-align:center;height: 28px; width: 40px;padding-top: 3px;">
								<input type="checkbox" id="Checkbox148" name="" value="on" >
							</div>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;" onclick="javascript:offerreplay();" value="">Replay With Enquiry</button>
						</div>
						<div class="col-md-2">
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;"  onclick="javascript:deleteoffer();" value="">Delete</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  value="">Chat</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;" onclick="javascript:unreadoffer();"  value="">Marked as Unread</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  onclick="javascript:pinoffer();" value="">Pin/Unpin</button>
						</div>
				</div>		
			</div>
			<?php } else { ?>
				<div class="row">
				<div class="col-md-10" >
						<div class="col-md-1" >
							<div style="background-color:#1e90ff;text-align:center;height: 28px; width: 40px;padding-top: 3px;">
								<input type="checkbox" id="Checkbox148" name="" value="on" >
							</div>
						</div>
						<div class="col-md-2">
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  onclick="javascript:deleteoffer();" value="">Delete</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  value="">Chat</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;" onclick="javascript:unreadoffer();"  value="">Marked as Unread</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  onclick="javascript:pinoffer();" value="">Pin/Unpin</button>
						</div>
				</div>		
			</div>
			<?php } ?>
			<br><br> 
			<div style="padding-top:50px;">
			<?php foreach ($offer as $row) { ?>
				<div  class="accordion" data-id="<?php echo $row['offer_id'];?>">
					<div class="row myrow">
						<div class="col-md-12">
							<div class="col-md-1">
								<?php if($row['unreadmark'] == 0) { ?>
									<div style="width:4px;height:36px;background-color: red;position: absolute;left: 1px;top: 1px;"></div>
								<?php } ?>	
								<input type="checkbox" id="chkoffer" name="chkoffer"  value="<?php echo $row['offer_id'];?>" >
								<img src="<?php echo asset_url().$row['profile_image'];?>" id="" alt="" style="width: 40px;border-radius: 50px;" class="mypropic">
							</div>
							<div class="col-md-3" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><?php echo $row['company_name'];?></strong></span><br>
								<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><?php echo $row['name_prefix']."  ".$row['name'];?></span>
								<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><strong><?php echo $row['company_country'];?></strong>| <?php echo $row['company_province'];?></span>
							</div>
							<div class="col-md-1" style="padding-top: 12px;">
								<?php if($row['pin_unpin'] == 1) { ?>
									<img src="<?php echo asset_url();?>images/Pin-icon.png" id="" alt="" style="height: 22px;">
								<?php } ?>	
							</div>
							<div class="col-md-3" style="padding:5px 0px;text-align: left;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $row['offer_subject'];?></span>
							</div>
							<div class="col-md-1" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;">View</span><br>
								&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
								
							</div>
							<div class="col-md-2" style="padding:5px">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;"><?php echo $row['offer_type'];?></span>
							</div>
							<div class="col-md-1" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;"><?php echo date('l', strtotime($row['created_date']));?><br><?php echo date("j M Y",strtotime($row['created_date']));?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="panel1">
					<div style="padding-top: 22px;padding-bottom:22px;">
						<div>
					  		<?php echo $row['offer_body'];?>
					  	</div><br><br>
					  	<div style="text-align:center;">
					  		<?php if($row['attachment1'] != "") { ?>
						  		<a href="<?php echo asset_url().getFileName($row['attachment1']);?>" download="<?php echo basename(asset_url().getFileName($row['attachment1']));?>" class="imgdownload">
						  			<img src="<?php echo asset_url().getFileName($row['attachment1']);?>"  style="width:100px;height:100px;">
						  		</a>
					  		<?php } ?>	
					  		<?php if($row['attachment2'] != "") { ?>
					  			<a href="<?php echo asset_url().getFileName($row['attachment2']);?>" download="<?php echo basename(asset_url().getFileName($row['attachment2']));?>" class="imgdownload">
					  				<img src="<?php echo asset_url().getFileName($row['attachment2']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>
					  		<?php if($row['attachment3'] != "") { ?>
					  			<a href="<?php echo asset_url().getFileName($row['attachment3']);?>" download="<?php echo basename(asset_url().getFileName($row['attachment3']));?>" class="imgdownload">	
					  				<img src="<?php echo asset_url().getFileName($row['attachment3']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>
					  		<?php if($row['attachment4'] != "") { ?>	
					  			<a href="<?php echo asset_url().getFileName($row['attachment4']);?>" download="<?php echo basename(asset_url().getFileName($row['attachment4']));?>" class="imgdownload">
					  				<img  src="<?php echo asset_url().getFileName($row['attachment4']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>		
					  	</div>
					  </div>	
				</div>
				<br>
			<?php } ?>
				</div>
   		</div>
   </div>
 </form>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>

 
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
	  if($(this).find($(".fa")).hasClass('fa-caret-down')) 
      {
  		$(this).find($(".fa")).removeClass('fa-caret-down').addClass('fa-caret-up');
  		markOfferAsread($(this).attr("data-id"));
      } else {
      	$(this).find($(".fa")).removeClass('fa-caret-up').addClass('fa-caret-down');
      }
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}


document.getElementById('totaloffer').innerHTML = <?php echo count($offer);?>;
var inquiry = document.getElementById('totalinquiry').innerHTML ;
var offer = document.getElementById('totaloffer').innerHTML ;
var request = document.getElementById('totalrequest').innerHTML ;
var order = document.getElementById('totalorder').innerHTML ;
document.getElementById('totalalert').textContent = parseInt(inquiry) + parseInt(offer) + parseInt(request) +parseInt(order);
</script>
			
