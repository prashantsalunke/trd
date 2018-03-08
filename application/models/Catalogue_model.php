<?php

class Catalogue_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function addProductCatalogue($data) {
    	$this->db->insert(TABLES::$PRODUCT_CATALOGUE, $data);
    	return $this->db->insert_id();
    }
    
    public function updateProductCatalogue($data) {
    	$this->db->where('id',$data['id']);
    	return $this->db->update(TABLES::$PRODUCT_CATALOGUE, $data);
    }
    
    public function deleteProductCatalogue($catalogue_id) {
    	$this->db->where('id',$catalogue_id);
    	return $this->db->delete(TABLES::$PRODUCT_CATALOGUE);
    }
    
	public function addProductCatalogueItem($data) {
    	$this->db->insert_batch(TABLES::$PRODUCT_CATALOGUE_ITEM, $data);
    }
    
    public function deleteProductCatalogueItem($catalogue_id) {
    	$this->db->where('catalogue_id',$catalogue_id);
    	$this->db->delete(TABLES::$PRODUCT_CATALOGUE_ITEM);
    }
    
    public function updateProductCatalogueItemSortOrder($map) {
    	$params = array('sortorder'=>$map['sortorder']);
    	$this->db->where('catalogue_id',$map['catalogue_id']);
    	$this->db->where('item_id',$map['item_id']);
    	return $this->db->update(TABLES::$PRODUCT_CATALOGUE_ITEM,$params);
    }
    
    public function getProductCatalogues($busi_id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE);
    	$this->db->where('busi_id',$busi_id);
        $this->db->order_by('id','DESC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getProductCatalogueById($id) {
    	$this->db->select('*');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE);
    	$this->db->where('id',$id);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getProductCatalogueItems($catalogue_id) {
    	$this->db->select('a.*,b.sortorder');
    	$this->db->from(TABLES::$PRODUCT_ITEM.' AS a');
    	$this->db->join(TABLES::$PRODUCT_CATALOGUE_ITEM.' AS b','a.id=b.item_id','inner');
    	$this->db->where('b.catalogue_id',$catalogue_id);
    	$this->db->order_by('b.sortorder','ASC');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    public function getProductCatalogueItemBySortOrder($catalogue_id,$sortorder) {
    	$this->db->select('item_id');
    	$this->db->from(TABLES::$PRODUCT_CATALOGUE_ITEM);
    	$this->db->where('catalogue_id',$catalogue_id);
    	$this->db->where('sortorder',$sortorder);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;
    }
    
    
}