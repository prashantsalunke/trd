<?php 
foreach($BuyerBox as $buyer) {?>
	<div id="Layer136">
                <div id="Layer136_Container" class="layer2">
                    <div id="Layer264" class="style60">
                        <div id="wb_Text192" class="style61">
                            <span class="fontnew1"><strong>Main Products</strong></span></div>
                        <div id="wb_Text193" class="style62">
                            <span><?php echo substr($buyer['main_product'], 0, 100); ?><br> </span></div>
                    </div>
                    <div id="wb_Image152" class="style64">
                        <a href="#" onclick="ShowObject('Layer_buyers', 0);return false;"><img src="<?php echo asset_url();?>images/close.png" id="Image152" alt=""></a>
                    </div>
                    <div id="RollOver18" class="style65">
                        <a href="">
                                    <img class="hover" alt="" title="Add to view later" src="<?php echo asset_url();?>images/favorite_chery.gif">
                                    <span><img alt="" title="Add to view later" src="<?php echo asset_url();?>images/addtofav.png"></span>
                                </a>
                    </div>
                    <div id="RollOver19" class="style66">
                        <a href="">
                                    <img class="hover" alt="" title="Add to my community" src="<?php echo asset_url();?>images/addcommunity_button2.png">
                                    <span><img alt="" title="Add to my community" src="<?php echo asset_url();?>images/add2comwhite.png"></span>
                                </a>
                    </div>
                    <div id="wb_Text194" class="style67">
                        <span class="style68"><strong><?php echo $buyer['company_name']; ?></strong></span></div>
                    <div id="wb_Text200" class="style69">
                        <span class="style70"><strong><?php echo $buyer['contact_person']; ?></strong></span></div>
                    <div id="wb_Image153" class="style71">
                        <?php if($buyer['plan_id'] > '1' && $buyer['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php }?>
                        </div>
                    <div id="Layer265" class="style72">
                        <div id="wb_Image154" class="style737">
                            <?php if($buyer['is_logo_verified'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image154" > <?php }?>
                         </div>
                        <div id="wb_Image158" class="style757">
                       	 <?php if($buyer['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image158" > <?php }?>
                        </div>
                        <div id="wb_Text201" class="style767">
                            <span class="style77"><?php echo $buyer['sub_category'];?>   </span>
                            <br>
                            <br>
                            <span class="section222">Added to my community</span>
                        </div>
                    </div>
                    <div id="Layer266" class="style78">
                        <div id="wb_Image159" class="style79">
                            <img src="<?php echo asset_url().''.$buyer['company_image1'];?>" id="Image159" alt="">
                        </div>
                        <div id="wb_Text247" class="style80">
                            <span class="style81"><strong><?php echo $buyer['company_country'];?> | <?php echo $buyer['company_province'];?></strong></span></div>
                        <div id="wb_Text248" class="style82">
                            &nbsp;</div>
                        <div id="wb_Image160" class="style83">
                            <img src="<?php echo asset_url();?>images/china0.png" id="Image160" alt=""></div>
                    </div>
                    <div id="RollOver20" class="style84">
                        <a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','435','720')" target="_self">
                                    <img class="hover" alt="" title="Chat" src="<?php echo asset_url();?>images/chat_button2.png">
                                    <span><img alt="" title="Chat" src="<?php echo asset_url();?>images/chatwhite.png"></span>
                                </a>
                    </div>
                    <div id="RollOver14" class="style85">
                        <a href="./buyer_profile.php" target="_blank">
                                    <img class="hover" alt="" src="<?php echo asset_url();?>images/randbuyercherry.png">
                                    <span><img alt="" src="<?php echo asset_url();?>images/profilewhite.gif"></span>
                                </a>
                    </div>
                </div>
            </div>
<?php }?>