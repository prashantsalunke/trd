<?php

class Community_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function addToCommunity($map) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER);
    	$this->db->where('busi_id',$map['busi_id']);
    	$this->db->where('my_busi_id',$map['my_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$this->db->insert(TABLES::$COMMUNITY_MEMBER,$map);
    		return 1;
    	} else {
    		return 0;
    	}
    }
    public function getSendCommunityRequest($busi_id)
    {
    	$this->db->select('a.id as community_id,b.*,c.info_img1,c.info_img2,d.name_prefix,d.name,e.company_introduction,e.hot_presentation,f.profile_image,
		g.sub_category,group_concat(h.name) as productname');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.busi_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.busi_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS h','b.id=h.busi_id','left');
    	$this->db->where('a.my_busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$this->db->where('d.admin_user_id', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function getInvitationCommunityRequest($busi_id)
    {
    	
    	$this->db->select('a.id as community_id,b.*,c.info_img1,c.info_img2,d.name_prefix,d.name,e.company_introduction,e.hot_presentation,f.profile_image,
		g.sub_category,group_concat(h.name) as productname');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.my_busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESSINFOIMAGE. ' AS c','a.my_busi_id=c.busi_id','inner');
    	$this->db->join(TABLES::$USER. ' AS d','a.my_busi_id=d.busi_id','inner');
    	$this->db->join(TABLES::$COMPANY_INFO. ' AS e','a.my_busi_id=e.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','d.id=f.user_id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES. ' AS g','d.user_subcategory_id = g.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS h','b.id=h.busi_id','left');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$this->db->where('d.admin_user_id', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateCommunity($data)
    {
    	$this->db->where('id',$data['id']);
    	$query=$this->db->update(TABLES::$COMMUNITY_MEMBER,$data);
    	
    	if($query)
    		return 1;
    		else
    			return 0;
    			
    }
    
    public function addToMyCommunity($map) {
    	$this->db->select('id');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER);
    	$this->db->where('busi_id',$map['busi_id']);
    	$this->db->where('my_busi_id',$map['my_busi_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$this->db->insert(TABLES::$COMMUNITY_MEMBER,$map);
    		return 1;
    	} else {
    		return 0;
    	}
    }
    
    public function searchCommunityMember($id,$name) {
    	$this->db->select('a.*,b.company_name as cname,b.company_country as country,b.company_province as state,
    			b.company_city as city,b.plan_id,b.is_logo_verified,b.gaurantee_period,
    			(CASE WHEN d.nickname IS NULL OR d.nickname = "" THEN d.name ELSE d.nickname END) as membername,
    			d.user_category_id,(CASE WHEN d.nickname IS NULL OR d.nickname = "" THEN e.profile_image ELSE "images/img3470.png" END) as memberimg,f.sub_category as subcategory,
    			(b.accept_chat+b.accept_offer+b.accept_community+b.accept_email) as is_active,
    			(select count(id) from tbl_chat_messages as cht where cht.from_busi_id = a.busi_id and cht.is_read=0) as messages');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER.' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO.' AS b','a.busi_id=b.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO_IMAGE.' AS c','c.busi_id=b.id','inner');
    	$this->db->join(TABLES::$USER.' AS d','d.busi_id=a.busi_id','inner');
    	$this->db->join(TABLES::$USER_INFO.' AS e','e.user_id=d.id','inner');
    	$this->db->join(TABLES::$USER_SUBCATEGORIES.' AS f','f.id=d.user_subcategory_id','inner');
    	$this->db->where('a.my_busi_id',$id);
    	$this->db->where('d.is_contactperson',1);
    	if(!empty($name))
    	$this->db->where("(d.name like '%".$name."%' OR d.nickname like '%".$name."%')",'',false);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function deleteCommunityMembers($busi_id,$members) {
    	$this->db->where('my_busi_id',$busi_id);
    	$this->db->where('busi_id IN('.$members.')','',false);
    	return $this->db->delete(TABLES::$COMMUNITY_MEMBER);
    }
}