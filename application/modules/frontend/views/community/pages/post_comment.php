  <?php //print_r($postcomment); ?> 
      <div id="Layer101_Container" class="style2">
            <div class="likehead">
                <span class="like">Comments
		    <span class="likecount">150</span></span>
                <a href="#" onclick="ShowObjectWithEffect('Layer101', 0, 'slideright', 600);return false;">
		    <img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" style="width:42px;height:42px; 
		    float: right;">
		    </a>
            </div>
            <?php foreach($postcomment as $comment) {?>
            <div class="likesection1">
                <div class="col-sm-2"><img src="<?php echo asset_url(); ?><?php echo $comment['profile_image'];?>" id="Image28" alt="" class="likeimg">
                </div>
                <div class="col-sm-10">
                    <span class="stylefont1"><?php echo $comment['name'];?></span>
                    <br>
                    <span class="b1"><?php echo $comment['comment'];?></span>
                </div>
            </div>
            <?php } ?>
            
           <!--  <div class="likesection1">
                <div class="col-sm-2"><img src="<?php echo asset_url(); ?>images/buyer1.png" id="Image28" alt="" class="likeimg">
                </div>
                <div class="col-sm-10">
                    <span class="stylefont1"> Nader Shahtoti</span>
                    <br>
                    <span class="b1">Yep.. that's extremely new genera- tion..</span>
                </div>
            </div>-->
            
            <div class="center block">
            <!--  <textarea name="comment" class="form-control postcomment" id="comment<?php echo $post['id'] ?>"></textarea>
                  <button class="btn btn1 btn-primary pull-right" onclick="commentPost(<?php echo $post['id'].', '.$post['user_id'] ?>);">-->
                <textarea name="comment" id="comment<?php echo $post_id ?>">
                </textarea>
                <button id="Button11" onclick="commentPost(<?php echo $post_id.', '. $busi_id; ?>);" value="Send" style="margin-top:5px;width:278px;height:24px;z-index:1122;">Send</button>
            </div>
        </div>
        
<script>
 
</script>
        
        
        
        
        