<?php
class Product extends MX_Controller {

	public function __construct() {
		parent::__construct ();
		$current_lang = $this->session->userdata('my_lang');
		if(!$current_lang) {
			$current_lang = 'english';
			$this->session->set_userdata('my_lang','english');
		}
		$this->load->helper ( 'url' );
		$this->load->helper ( 'cookie' );
		$this->load->helper('mylang');
		$this->load->model('Product_Model','product');
		$this->lang->load($current_lang.'_home_page_lang', $current_lang);
		$fb_config = parse_ini_file ( APPPATH . "config/FB.ini" );
	}

	public function index() {
		$params = $this->input->get();
		$keyword = "";
		if(!empty($params['keyword']))
		$keyword = $params['keyword'];
		$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		if(empty($params['page'])) {
			$params['page'] = 1;
		}
		$this->load->model('Sellers_Model', 'sellers' );
		$this->load->library('mylib/General', 'general');
		$this->load->model ( 'Account_Model', 'account' );
		$products = $this->sellers->searchProducts($params);
		$total_pages = $this->sellers->countProducts($params);
		$this->template->set ( 'products', $products);
		$Country= $this->account->getCountry();
		$this->template->set ( 'Country', $Country);
		$featuredSellers = $this->sellers->getFeaturedWorldSeller();
		$this->template->set ( 'featuredSellers', $featuredSellers);
		$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
		$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
		$featuredProducts = $this->sellers->getFeaturedProduct();
		$this->template->set ( 'featuredProducts', $featuredProducts);
		$procategories = $this->general->getProductCategories();
		$this->template->set ( 'categories', $procategories);
		$maincats = $this->product->getActiveProductMainAndSubCategories();
		$this->template->set ( 'mcats', $maincats );
		unset($params['community_only']);
		unset($params['community_hide']);
		if(empty($keyword)) {
			unset($params['keyword']);
		}
		$url = base_url()."products?".http_build_query($params);
		$this->template->set ( 'params', $params);
		$this->template->set('producturl',$url);
		$this->template->set('page',$params['page']);
		$this->template->set('total_pages',$total_pages);
		unset($params['page']);
		if(http_build_query($params) != "")
			$wpurl = base_url()."products?".http_build_query($params)."&";
		else
			$wpurl = base_url()."products?";
		$this->template->set('wpproducturl',$wpurl);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'browser_icon', 'products.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/inner-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/product');
	}
	public function productVerifiedFirst() {
		$this->load->model('Sellers_Model', 'sellers' );
		$products = $this->sellers->getProductsbyVerified();
		$this->template->set ( 'products', $products);
		$featuredSellers = $this->sellers->getFeaturedWorldSeller();
		$this->template->set ( 'featuredSellers', $featuredSellers);
		$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
		$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
		$featuredProducts = $this->sellers->getFeaturedProduct();
		$this->template->set ( 'featuredProducts', $featuredProducts);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/inner-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/product');
		/* $this->template->set_layout (false);
		$html= $this->template->build ('Home/pages/product-filter', '', true);
		echo $html; */
	}
	
	public function productCommunityFirst($id) {
		$this->load->model('Sellers_Model', 'sellers' );
		$products = $this->sellers->productCommunityFirst($id);
		$this->template->set ( 'products', $products);
		$featuredSellers = $this->sellers->getFeaturedWorldSeller();
		$this->template->set ( 'featuredSellers', $featuredSellers);
		$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
		$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
		$featuredProducts = $this->sellers->getFeaturedProduct();
		$this->template->set ( 'featuredProducts', $featuredProducts);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/inner-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/product');
		/*$this->template->set_layout (false);
		$html= $this->template->build ('Home/pages/product-filter', '', true);
		echo $html; */
	}
	public function productCommunityHide($id) {
		$this->load->model('Sellers_Model', 'sellers' );
		$products = $this->sellers->productCommunityHide($id);
		$this->template->set ( 'products', $products);
		$featuredSellers = $this->sellers->getFeaturedWorldSeller();
		$this->template->set ( 'featuredSellers', $featuredSellers);
		$featuredProductVideo= $this->sellers->getFeaturedProductVideo();
		$this->template->set ( 'featuredProductVideo', $featuredProductVideo);
		$featuredProducts = $this->sellers->getFeaturedProduct();
		$this->template->set ( 'featuredProducts', $featuredProducts);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/inner-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/product');
		/*$this->template->set_layout (false);
		$html= $this->template->build ('Home/pages/product-filter', '', true);
		echo $html; */
	}
	public function productList($id) {
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productCommunityHide($id);
		$this->template->set ( 'products', $products);
		$this->template->set ( 'page', 'search' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/inner-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/product-list');
		
	}
	public function productDetails($id) {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		if(!empty($busi_id)) {
			$map = array();
			$map['busi_id'] = $busi_id;
			$map['item_id'] = $id;
			$map['visit_date'] = date('Y-m-d');
			$this->load->model('Tool_model','mytoolmodel');
			$this->mytoolmodel->addProductVisit($map);
		}
		$this->load->model('Product_Model', 'product' );
		$getProductdetailsById = $this->product->getProductdetailsById($id);
		$this->template->set ( 'Productdetails', $getProductdetailsById);
		$colors = $this->product->getProductColorById($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationById($id);
		$this->template->set ( 'specifications', $Specifications);
		$this->template->set ( 'page', 'pro-details');
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'Find Products' )
		->set_partial ( 'header', 'default/floating-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('desksite/subpages/product_details');
		
	}
	public function productDetailsPage($id) {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		if(!empty($busi_id)) {
			$map = array();
			$map['busi_id'] = $busi_id;
			$map['item_id'] = $id;
			$map['visit_date'] = date('Y-m-d');
			$this->load->model('Tool_model','mytoolmodel');
			$this->mytoolmodel->addProductVisit($map);
		}
		$this->load->model('Product_Model', 'product' );
		$getProductdetailsById = $this->product->getProductdetailsById($id);
		$this->template->set ( 'Productdetails', $getProductdetailsById);
		$colors = $this->product->getProductColorById($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationById($id);
		$this->template->set ( 'specifications', $Specifications);
		$this->template->set ( 'page', 'pro-details');
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('desksite/subpages/product_details','',true);
		echo $html;
	}
	
	public function productDetailById($id){
		$this->load->model('Product_Model', 'product' );
		$getProductdetailsById = $this->product->getProductdetailsById($id);
		$this->template->set ( 'Productdetails', $getProductdetailsById);
		$colors = $this->product->getProductColorById($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationById($id);
		$this->template->set ( 'specifications', $Specifications);
		$this->template->set ( 'page', 'pro-details');
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/product-details', '', true);
		echo $html;
		
	}
	public function productListBySellerId($id){
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productListBySellerId($id);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/pro-list', '', true);
		echo $html;
		
	}
	public function productListBySubCategory($id, $busi_id){
		$map = array();
		$map['subcat_id'] = $id;
		$map['busi_id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productListBySubCategory($map);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/pro-list', '', true);
		echo $html;
		
	}
	public function productListByMainProduct($id, $busi_id){
		$map = array();
		$map['mproduct_id'] = $id;
		$map['busi_id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productListBySubCategory($map);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/pro-list', '', true);
		echo $html;
		
	}
	
	public function productListBySubProduct($id, $busi_id){
		$map = array();
		$map['sproduct_id'] = $id;
		$map['busi_id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productListBySubCategory($map);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/pro-list', '', true);
		echo $html;
		
	}
	public function videoDetailById($id){
		$this->load->model('Product_Model', 'product' );
		$getVideodetailsById = $this->product->getVideodetailsById($id);
		$this->template->set ( 'Productdetails', $getVideodetailsById);
		$colors = $this->product->getProductColorByVideoId($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationByVideoId($id);
		$this->template->set ( 'specifications', $Specifications);
		$this->template->set ( 'page', 'pro-details');
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'TradeStation - Buyers' )
		->set_partial ( 'header', 'default/floating-header' )
		->set_partial ( 'footer', 'default/footer' );
		$this->template->build ('product/video-details');
		
	}
	
	public function productListByCat($catid, $scatid, $mcatid, $busi_id){
		$map = array();
		$map['subcat_id'] = $catid;
		$map['sproduct_id'] = $scatid;
		$map['mproduct_id'] = $mcatid;
		$map['busi_id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$products = $this->product->productListByCSMCategory($map);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/pro-list', '', true);
		echo $html;
	
	}
	
	public function itemDetailById($id, $busi_id){
		$map =array();
		$map['id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$Desksites = $this->product->getDesksiteByBusiId($map);
		$this->template->set ( 'business', $Desksites);
		$getProductdetailsById = $this->product->getProductdetailsById($id);
		$this->template->set ( 'Productdetails', $getProductdetailsById);
		$colors = $this->product->getProductColorById($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationById($id);
		$this->template->set ( 'specifications', $Specifications);
		$advantages = $this->product->getAdvantage($busi_id);
		$products = $this->product->productListBySellerId($id);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'advantages', $advantages);
		$sellers = $this->product->getSellerInfo($busi_id);
		$this->template->set ( 'sellers', $sellers);
		$this->template->set ( 'page', 'sellers-home');
		$this->template->set ( 'userId', '' );
		$this->template->set_layout ('default')
		->title ( 'TradeStation - Product' )
		->set_partial ( 'header', 'default/floating-header' )
		->set_partial ( 'footer', 'default/footer' );
		$html= $this->template->build ('Home/item-details');
	}
	public function videoItemDetailById($id, $busi_id){
		$map =array();
		$map['id'] = $busi_id;
		$this->load->model('Product_Model', 'product' );
		$Desksites = $this->product->getDesksiteByBusiId($map);
		$this->template->set ( 'business', $Desksites);
		$getVideodetailsById = $this->product->getVideodetailsById($id);
		$this->template->set ( 'Productdetails', $getVideodetailsById);
		$colors = $this->product->getProductColorById($id);
		$this->template->set ( 'colors', $colors);
		$Specifications = $this->product->getProductSpecificationById($id);
		$this->template->set ( 'specifications', $Specifications);
		$advantages = $this->product->getAdvantage($busi_id);
		$products = $this->product->productListBySellerId($id);
		$this->template->set ( 'productList', $products);
		$this->template->set ( 'advantages', $advantages);
		$sellers = $this->product->getSellerInfo($busi_id);
		$this->template->set ( 'sellers', $sellers);
		$this->template->set ( 'page', 'sellers-home');
		$this->template->set ( 'userId', '' );
		$this->template->set_layout ('default')
		->title ( 'TradeStation - Product' )
		->set_partial ( 'header', 'default/floating-header' )
		->set_partial ( 'footer', 'default/footer' );
		$html= $this->template->build ('Home/item-details');
	}
	
	public function addItemToCart() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$resp = array();
		if(!empty($busi_id)) {
			$params = array();
			$params['product_item_id'] = $this->input->post('product_id');
			$params['created_date'] = date('Y-m-d H:i:s');
			$params['busi_id'] = $busi_id;
			$this->load->model('Product_Model', 'product' );
			$is_added = $this->product->addItemToCart($params);
			if($is_added) {
				$resp['status'] = 1;
				$resp['msg'] = 'Item added to cart';
			} else {
				$resp['status'] = 1;
				$resp['msg'] = 'Failed to add item to cart';
			}
		} else {
			$resp = array();
			$resp['status'] = 0;
			$resp['msg'] = 'Please login to add item to cart';
		}
		echo json_encode($resp);
	}
	
	public function getProductRelatedImages($product_id,$key) {
		$this->load->model('Product_Model', 'product' );
		$images = $this->product->getProductRelatedImages($product_id);
		$this->template->set ( 'images', $images);
		$this->template->set ( 'key', $key);
		$this->template->set ( 'page', 'product' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html= $this->template->build ('product/pages/images', '', true);
		echo $html;
	}
	
	public function getProductCategoryPage($sproduct_id) {
		$this->load->model('Product_Model', 'product' );
		$video = $this->product->getMainProductBySubproductId($sproduct_id);
		$map =array();
		$map['id'] = $video[0]['busi_id'];
		$Desksites = $this->product->getDesksiteByBusiId($map);
		$this->template->set ( 'business', $Desksites);
		$this->template->set ( 'video', $video);
		$map = array();
		$map['mainproduct_id'] = $video[0]['mainproduct_id'];
		$map['subproduct_id'] = $sproduct_id;
		$products = $this->product->getProductListByMainSubId($map);
		$this->template->set ( 'productList', $products);
		$sellers = $this->product->getSellerInfo($video[0]['busi_id']);
		$this->load->library('mylib/FactoryLib');
		$user_rnd = $this->factorylib->getUserRNDtype($Desksites[0]['factory_id']);
		$this->template->set('user_rnd',$user_rnd);
		$this->template->set ( 'sellers', $sellers);
		$this->template->set ( 'page', 'products_category');
		$this->template->set ( 'userId', '' );
		$this->template->set_layout ('default')
		->title ( 'Seller Products' )
		->set_partial ( 'header', 'default/floating-header' )
		->set_partial ( 'footer', 'default/footer' );
		$html= $this->template->build ('product/product-category');
	}
	
	public function getMyProductList() {
		$busi_id = $this->session->userdata('tsuser')['busi_id'];
		$query = $this->input->get('name');
		$this->load->model('Product_Model', 'product' );
		$result = $this->product->getMyProductItemList($busi_id,$query);
		echo json_encode($result);
	}
	
	public function get3DPrducts() {
		$params = $this->input->get();
		$keyword = "";
		if(!empty($params['keyword']))
			$keyword = $params['keyword'];
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->library('mylib/General', 'general');
			$this->load->model ( 'Account_Model', 'account' );
			$products = $this->sellers->search3DProducts($params);
			$total_pages = $this->sellers->countProducts($params);
			$this->template->set ( 'products', $products);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$procategories = $this->general->getProductCategories();
			$this->template->set ( 'categories', $procategories);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mcats', $maincats );
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."3dproducts?".http_build_query($params);
			$this->template->set ( 'params', $params);
			$this->template->set('producturl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."3dproducts?".http_build_query($params)."&";
				else
					$wpurl = base_url()."3dproducts?";
					$this->template->set('wpproducturl',$wpurl);
					$this->template->set ( 'page', '3dproduct' );
					$this->template->set ( 'browser_icon', 'products.ico' );
					$this->template->set ( 'userId', '' );
					$this->template->set_theme('default_theme');
					$this->template->set_layout ('default')
					->title ( 'Find Products' )
					->set_partial ( 'header', 'default/inner-header' )
					->set_partial ( 'footer', 'default/footer' );
					$this->template->build ('product/product3D');
	}
	
	public function getAllVCatalogues() {
		$params = $this->input->get();
		$keyword = "";
		if(!empty($params['keyword']))
			$keyword = $params['keyword'];
			$params['busi_id'] = $this->session->userdata('tsuser')['busi_id'];
			if(empty($params['page'])) {
				$params['page'] = 1;
			}
			$this->load->model('Sellers_Model', 'sellers' );
			$this->load->library('mylib/General', 'general');
			$this->load->model ( 'Account_Model', 'account' );
			$vCatalogues = $this->sellers->searchVCatalogues($params);
			$total_pages = $this->sellers->countProducts($params);
			$this->template->set ( 'vCatalogues', $vCatalogues);
			$Country= $this->account->getCountry();
			$this->template->set ( 'Country', $Country);
			$procategories = $this->general->getProductCategories();
			$this->template->set ( 'categories', $procategories);
			$maincats = $this->product->getActiveProductMainAndSubCategories();
			$this->template->set ( 'mcats', $maincats );
			if(empty($keyword)) {
				unset($params['keyword']);
			}
			$url = base_url()."vcatalogues?".http_build_query($params);
			$this->template->set ( 'params', $params);
			$this->template->set('producturl',$url);
			$this->template->set('page',$params['page']);
			$this->template->set('total_pages',$total_pages);
			unset($params['page']);
			if(http_build_query($params) != "")
				$wpurl = base_url()."vcatalogues?".http_build_query($params)."&";
				else
					$wpurl = base_url()."vcatalogues?";
					$this->template->set('wpproducturl',$wpurl);
					$this->template->set ( 'page', '3dproduct' );
					$this->template->set ( 'browser_icon', 'products.ico' );
					$this->template->set ( 'userId', '' );
					$this->template->set_theme('default_theme');
					$this->template->set_layout ('default')
					->title ( 'Find Products' )
					->set_partial ( 'header', 'default/inner-header' )
					->set_partial ( 'footer', 'default/footer' );
					$this->template->build ('product/Vcatalogue');
	}
	
	
}
?>