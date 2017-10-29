<?php

class Inquiry_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public  function getInquiryByBusiId($busi_id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_item_id,a.created_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,c.sub_image1,c.sub_image2,c.sub_image3,c.sub_image4,'.
    			'd.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_item_id=c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.requester_busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('e.admin_user_id', 0);
    	$this->db->where('a.is_deleted', 0);
    	//$this->db->group_by('sellerbusi_id');
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    	
    }
    
    public function getBuyerInquiryByBusiId($busi_id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_item_id,a.created_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,c.sub_image1,c.sub_image2,c.sub_image3,c.sub_image4,'.
    			'd.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_item_id=c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.requester_busi_id', $busi_id);
    	$this->db->where('e.admin_user_id', 0);
    	$this->db->where('a.is_deleted', 0);
    	//$this->db->group_by('sellerbusi_id');
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function updateInquiry($data)
    {
    	$this->db->where('id', $data['id']);
    	$this->db->update(TABLES::$INQUIRY, $data);
    	return $this->db->affected_rows();
    }
    public function updateToggelpinInquiry($data)
    {
    	$response = 0;
    	$this->db->select('a.id as inqury_id,a.pin_unpin');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->where('a.id', $data['id']);
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) > 0)
    	{
    		$inquiry = array();
    		$inquiry['id'] = $row[0]['inqury_id'];
    		if($row[0]['pin_unpin'] == 1)
    			$inquiry['pin_unpin'] = 0;
    		else 
    			$inquiry['pin_unpin'] = 1;
    		
    			$this->db->where('id', $inquiry['id']);
    			$this->db->update(TABLES::$INQUIRY, $inquiry);
    			$response =  $this->db->affected_rows();
    	}
    	return $response;
    }
    public function getInquiryById($id)
    {
    	$this->db->select('a.id as inqury_id,a.requester_busi_id,a.inquiry_subject,a.inquiry_body,a.product_item_id,a.created_date,'.
    			'a.pin_unpin,a.unreadmark,b.inqury_type,c.name as product_name,c.model_no,c.sub_image1,c.sub_image2,'.
    			'c.sub_image3,c.sub_image4,c.main_image,'.
    			'd.*,e.name_prefix,e.name,f.profile_image');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','a.product_item_id=c.id','inner');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS d','a.requester_busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER. ' AS e','e.busi_id=d.id','inner');
    	$this->db->join(TABLES::$USER_INFO. ' AS f','e.id=f.user_id','inner');
    	$this->db->where('a.id', $id);
    	$this->db->where('e.admin_user_id', 0);
    	$this->db->where('a.is_deleted', 0);
    	//$this->db->group_by('sellerbusi_id');
    	$this->db->order_by('a.id', 'desc');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    public function saveInquiry($param)
    {
    	if ($this->db->insert(TABLES::$INQUIRY, $param)) {
    		return $this->db->insert_id();
    	}
    }
    

}
