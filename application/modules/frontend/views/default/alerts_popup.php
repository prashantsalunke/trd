<?php 
$position = 0; //'style="left:714px;"';
$isNewCommunity=false; 
if($newCommunity) {
	$isNewCommunity=true;
    ?>
    <div class="panel alert-popup" id="new-alert-popup-<?php echo $newCommunity[0]['id']; ?>">
	<div class="panel-heading">
		<div class="row">
			<div class="col-xs-3">
			<?php if ($newCommunity[0]['profile_image'] == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #00E8C7; position: absolute; left: -30px; top: -30px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo isset($newCommunity[0]['profile_image'])?$newCommunity[0]['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #00E8C7; position: absolute; left: -30px; top: -30px;">
                    <?php } ?>
			</div>
			<div class="col-xs-7"><p style="color: #FFFFFF; font-family: Impact; font-size: 20px; margin-bottom: 0;text-indent: 2px;">Added Alert By</p><span style="color: #FFFFFF; font-family: Arial; font-size: 13px;"><?php echo isset($newCommunity[0]['name'])?$newCommunity[0]['name']:''; ?><br><?php echo isset($newCommunity[0]['user_category'])?$newCommunity[0]['user_category']:''; ?>&nbsp; |&nbsp; <?php echo isset($newCommunity[0]['country'])?$newCommunity[0]['country']:''; ?> </span></div>
			<div class="col-xs-2"><a href="#" onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $newCommunity[0]['id']; ?>', 0, 'slidedown', 300, 'swing');return false;" style="position: relative; top: -20px; right: -20px;"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row" style="margin: 0;">
			<div class="col-xs-12" style="background: #fff; border-radius: 5px; height: 115px;">
				<div class="col-xs-12 text-center" style="margin-bottom: 20px; padding-top: 20px;"><span style="color: #2D2D2D; font-family: Arial; font-size: 12px;"><?php echo isset($newCommunity[0]['name'])?$newCommunity[0]['name']:''; ?>, invites you to join his community.?</span></div>
				<div class="col-xs-12 text-center"></div>
			</div>
			<div class="col-xs-12" style="padding: 15px 0">
				<a href="#" onclick="accept_community_request(<?php echo $newCommunity[0]['id'];?>);" class="btn btn-block btn-danger" style="background: #00E8C7 !important;">ACCEPT</a></div>
			<div class="col-xs-12" style="padding: 0"><a target="_blank" href="<?php echo base_url(); ?>desksite/<?php echo $newCommunity[0]['my_busi_id']; ?>" class="btn btn-block btn-danger" style="background: #00E8C7 !important;">VIEW HIS DESKSITE</a></div>
		</div>
	</div>
	</div>
	<?php } 
	if (!empty($newInquiry)) {
			$position = 350;
 
	foreach($newInquiry as $kk=>$record){
		if(!$record['alert_viewed']) {
		if($isNewCommunity==false && $kk==0) {
			$alignment = '';
		} else {
			$alignment = 'style="right:'.$position.'px"';
		}
	 ?>
 <div class="panel alert-popup" <?php echo $alignment; ?> id="new-alert-popup-<?php echo $record['inqury_id']; ?>">
	<div class="panel-heading">
		<div class="row">
			<div class="col-xs-3">
				<?php if ($record['profile_image'] == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo isset($record['profile_image'])?$record['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
                    <?php } ?>
			</div>
			<div class="col-xs-7" style="padding-right: 14px;"><p style="color: #FFFFFF; font-family: Impact; font-size: 20px; margin-bottom: 0;text-indent: 2px;">Inquiry Alert By</p><span style="color: #FFFFFF; font-family: Arial; font-size: 13px;"><?php echo $record['name_prefix']."  ".$record['name'];?><br><?php echo $record['user_category'];?>&nbsp; |&nbsp; <?php echo $record['company_country'];?> </span></div>
			<div class="col-xs-2"><a href="#" onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $record['inqury_id']; ?>', 0, 'slidedown', 300, 'swing');return false;" style="position: relative; top: -20px; right: -20px;"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row" style="margin: 0;">
			<div class="col-xs-12" style="background: #fff; border-radius: 5px; height: 115px;">
				<div class="col-xs-12 text-center" style="margin-bottom: 20px; padding-top: 20px;"><span style="color: #2D2D2D; font-family: Arial; font-size: 12px;"> <?php echo $record['inquiry_body'];?></span></div>
				<div class="col-xs-12 text-center"></div>
			</div>
			<div style="padding:15px 0" class="col-xs-12"> <a class="btn btn-block btn-warning" href="" data-toggle="modal" data-target="#myalertModal" onclick="javascript:showAlertByType('inquiry',<?php echo $record['inqury_id']; ?>);">VIEW</a></div>
		</div>
	</div>
	</div>
	<?php 
	if( $kk >= 0) {
		$position +=350;
	}
} } } else {
	$position = 350;
}

if(!empty($newOffers)) {
    foreach($newOffers as $kk=>$record){
    if(!$record['alert_viewed']) { 
        if($isNewCommunity==false && $kk==0) {
            $alignment = '';
        } else {
            $alignment = 'style="right:'.$position.'px"';
        }
?>
<div class="panel alert-popup" <?php echo $alignment; ?> id="new-alert-popup-<?php echo $record['offer_id']; ?>">
   <div class="panel-heading">
    <div class="row">
     <div class="col-xs-3">
		<?php if ($record['profile_image'] == '') { ?>
                <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
            <?php } else { ?>
                <img src="<?php echo asset_url(); ?><?php echo isset($record['profile_image'])?$record['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
            <?php } ?>
	</div>
     <div class="col-xs-7"><p style="color:#FFFFFF;font-family:Impact;font-size:20px; margin-bottom: 0;text-indent: 2px;">Offer Alert By</p><span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><?php echo $record['name_prefix']."  ".$record['name'];?><br><?php echo $record['user_category'];?>&nbsp; |&nbsp; <?php echo $record['company_country'];?></span></div>
     <div class="col-xs-2"><a onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $record['offer_id']; ?>', 0, 'slidedown', 300, 'swing');return false;" style="position:relative; top:-20px; right:-20px;" href="#"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
    </div>
   </div>
   <div class="panel-body">
   <div style="margin:0;" class="row">
    <div style="background:#fff; border-radius:5px; height:150px;" class="col-xs-12">
     <div style="margin-bottom:20px; padding-top:20px;" class="col-xs-12 text-center"><span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $record['offer_body'];?></span></div>
     <div class="col-xs-12 text-center">
     <?php if(!empty($record['attachment1'])) {?>
     <div class="col-xs-4"><img width="50" height="50" src="<?php echo asset_url(); ?><?php echo $record['attachment1']; ?>"></div>
     <?php } if(!empty($record['attachment2'])) {?>
     <div class="col-xs-4"><img width="50" height="50" src="<?php echo asset_url(); ?><?php echo $record['attachment2']; ?>"></div>
     <?php } if(!empty($record['attachment3'])) {?>
     <div class="col-xs-4"><img width="50" height="50" src="<?php echo asset_url(); ?><?php echo $record['attachment3']; ?>"></div>
     <?php } if(!empty($record['attachment4'])) {?>
     <div class="col-xs-4"><img width="50" height="50" src="<?php echo asset_url(); ?><?php echo $record['attachment4']; ?>"></div>
     <?php } ?>
     </div>
    </div>
   <div style="padding:15px 0" class="col-xs-12"> <a class="btn btn-block btn-warning" href="" data-toggle="modal" data-target="#myalertModal" onclick="javascript:showAlertByType('offer',<?php echo $record['offer_id']; ?>);">VIEW</a></div>
   </div>
   </div>
   </div>
<?php if( $kk >= 0) {
		$position +=350;
	}
} } } ?>