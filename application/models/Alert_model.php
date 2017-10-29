<?php

class Alert_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    public function getMyOfferAlerts($busi_id) {
    	$this->db->select('count(a.id) as offers');
    	$this->db->from(TABLES::$OFFER. ' AS a');
    	$this->db->join(TABLES::$OFFER_TYPE. ' AS b','a.offer_type_id=b.id','inner');
    	$this->db->where('a.busi_id', $busi_id);
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyInquiryAlerts($busi_id,$type) {
    	$this->db->select('count(a.id) as inquiries');
    	$this->db->from(TABLES::$INQUIRY. ' AS a');
    	$this->db->join(TABLES::$INQUIRY_TYPE. ' AS b','a.inquiry_type_id=b.id','inner');
    	if($type == 3) {
    		$this->db->where('a.requester_busi_id', $busi_id);
    	} else {
    		$this->db->where('a.busi_id', $busi_id);
    	}
    	$this->db->where('a.is_deleted', 0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyOrderAlerts($busi_id) {
    	$this->db->select('count(a.orderid) as orders');
    	$this->db->from(TABLES::$ORDER. ' AS a');
    	$this->db->join(TABLES::$ORDER_ITEM. ' AS b','a.orderid=b.order_id','inner');
    	$this->db->join(TABLES::$PRODUCT_ITEM. ' AS c','b.item_id=c.id','inner');
    	$this->db->where('a.is_deleted = 0 and (a.sellerbusi_id = '.$busi_id.' or  a.buyer_id = '.$busi_id.')');
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    public function getMyCommunityRequests($busi_id) {
    	$this->db->select('count(a.id) as requests');
    	$this->db->from(TABLES::$COMMUNITY_MEMBER . ' AS a');
    	$this->db->join(TABLES::$BUSINESS_INFO. ' AS b','a.my_busi_id=b.id','inner');
    	$this->db->where('a.busi_id',$busi_id);
    	$this->db->where('a.is_deleted',0);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
    
    
    
}