<?php foreach($communitymember as $member) {?>
<div class="memberclass1  hover3">
	<input type="hidden" class="comm_member_id" value="<?php echo $member['busi_id'];?>"/>
	<div class="col-sm-3 image-cover">
		<img src="<?php echo asset_url(); ?><?php if(!empty($member['memberimg'])) { echo $member['memberimg'];} else { echo "images/img3470.png";}?>" id="Image28" alt="" class="memberimg">
		<span class="notification"><?php echo $member['messages'];?></span>
	</div>
	<div class="col-sm-9 padding-top-10">
		<?php if($member['user_category_id'] == 1 || $member['user_category_id'] == 2) { ?>
		<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php } else if($member['user_category_id'] == 3) { ?>
		<img src="<?php echo asset_url(); ?>images/Active.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_active'] == 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php } ?>
		<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_logo_verified'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php if($member['user_category_id'] == 1) { ?>
		<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1 && $member['gaurantee_period'] !=''){ ?>1<?php } else { ?>0.15<?php }?>;"/>
		<?php } ?>
		<p class="membername"><?php echo $member['membername'];?></p>
		<p class="membername"><?php echo $member['cname'];?></p>
		<p class="memposition"><?php echo $member['subcategory'];?></p>
		<p class="memposition"><?php echo $member['country'].' | '.$member['city'];?></p>
	</div>
</div>
<?php } ?>