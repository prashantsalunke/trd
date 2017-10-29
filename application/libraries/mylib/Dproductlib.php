<?php
class Dproductlib { 
	
	public function __construct(){
		$this->CI =& get_instance();
	}
	
	public function getSelected() {
		$val = basename ( $_SERVER ['REQUEST_URI'], '?' . $_SERVER ['QUERY_STRING'] );
		return $val;
	}
	
	public  function getProductByName($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductByName($data);
	}
	public  function save3DProduct($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->save3DProduct($data);
	}
	public  function getProductdataById($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductdataById($data);
	}
	public  function getProduct3Dimages($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProduct3Dimages($data);
	}
	public  function getProductlist($busi_id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductlist($busi_id);
	}
	public  function deleteProduct($data)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->deleteProduct($data);
	}
	public  function getProductById($id)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->getProductById($id);
	}
	public  function change3dproduct($params)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->change3dproduct($params);
	}
	public  function update3dproduct($oldid,$newid)
	{
		$this->CI->load->model ( 'Product_Model', 'product' );
		return $res = $this->CI->product->update3dproduct($oldid,$newid);
	}
	

}
