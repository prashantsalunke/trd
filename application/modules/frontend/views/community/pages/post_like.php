       <?php //print_r($postlike);?>
        <div class="likehead">
            <span class="like">Likes 
               <span class="likecount"><?php //count($postlike);?></span>
            </span>
            <a href="#" onclick="ShowObjectWithEffect('Layer20', 0, 'slideright', 600);return false;">
			    <img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" style="width:42px;height:42px;float: right;">
		    </a>
        </div>
        <?php foreach($postlike as $like) {?>
        <div class="likesection">
            <img src="<?php echo asset_url(); ?><?php echo $like['profile_image'];?>" id="Image28" alt="" class="likeimg">
            <span class="namestyle">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $like['name'];?></span>
        </div>
        <?php } ?>
        
       <!--<div class="likesection">
            <img src="<?php echo asset_url(); ?>images/buyer1.png" id="Image28" alt="" class="likeimg">
            <span class="namestyle">&nbsp;&nbsp;&nbsp;&nbsp; Nader Shahtoti</span>
        </div> -->      
        <div class="center block">
            <a href="javascript:postLike('<?php echo $post_id; ?>');" >
               <img src="<?php echo asset_url(); ?>images/img0312.png" id="Image114" alt="" style="width:39px;height:39px;">
            </a>
            <br>
            <span class="namestyle2">Click to Like this member</span>
        </div>
       