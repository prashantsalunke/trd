<?php

class Chat_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function addChatMessage($data) {
    	$this->db->insert(TABLES::$CHAT_MESSAGES,$data);
    }
    
    public function deleteChatMessageById($id) {
    	$this->db->where('id',$id);
    	$this->db->delete(TABLES::$CHAT_MESSAGES);
    }
    
    public function deleteChatMessageBusiId($busi_id) {
    	$this->db->where('from_busi_id',$busi_id);
    	$this->db->delete(TABLES::$CHAT_MESSAGES);
    }
    
    public function selectMemberUnReadMessages($from_busi_id) {
    	$this->db->select("*");
    	$this->db->from(TABLES::$CHAT_MESSAGES);
    	$this->db->where('from_busi_id',$from_busi_id);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function selectMemberMessages($from_busi_id,$to_busi_id,$inserid) {
    	$this->db->select("*");
    	$this->db->from(TABLES::$CHAT_MESSAGES);
    	$this->db->where("from_busi_id =".$from_busi_id." OR to_busi_id = ".$to_busi_id,'',false);
    	$this->db->where('id > '.$inserid,'',false);
    	$this->db->order_by('id','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
}