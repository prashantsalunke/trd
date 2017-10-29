<?php
class Community extends MX_Controller {
	
	public function __construct() {
		parent::__construct ();
		$current_lang = $this->session->userdata('my_lang');
		if(!$current_lang) {
			$current_lang = 'english';
			$this->session->set_userdata('my_lang','english');
		}
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->helper('mylang');
		$this->load->model('Account_Model','account');
		$this->lang->load($current_lang.'_home_page_lang', $current_lang);
		$fb_config = parse_ini_file ( APPPATH . "config/FB.ini" );
	} 
	
	public function index() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$busi_id = $this->session->userdata('busi_id');
		$Country= $this->account->getCountry();
		$this->template->set ('Country', $Country);
		$this->load->model('Product_Model', 'product' );
		$userinfo = $this->product->getUserInfoByBussId($busi_id);
		$this->template->set ('userinfo', $userinfo);
		$usertype = $this->product->getUserTypebyBusinessId($busi_id);
		$this->template->set ('usertype', $usertype);
		$allposts = $this->product->communityPostListByAlluser();
		$this->template->set ('allposts', $allposts);
		$myposts = $this->product->communityPostListByBusinessId($busi_id);
		$this->template->set ('myposts', $myposts);
		$productslist = $this->product->getProductlist($busi_id);
		$this->template->set ( 'products', $productslist);
		$communitymember = $this->product->getCommunityMember($busi_id);
		$this->template->set ( 'communitymember', $communitymember);
		$this->template->set ( 'page', 'community' );
		$this->template->set ( 'browser_icon', 'community.ico' );
		$this->template->set ( 'userId', '' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout ('default')
		->title ( 'The Community' )
		->set_partial ( 'header', 'default/community-header' )
		->set_partial ( 'footer', 'default/community-footer' );
		$this->template->build ('community/community');
	}
	
	public function communityPostInsert(){
		//$busi_id = $this->session->userdata('busi_id');
		//$usertype = $this->session->userdata('usertype');
	
		$params['busi_id'] = $this->session->userdata('busi_id');
		$params['title'] = $this->input->post('title');
		$params['product_item_id'] = $this->input->post('product_id');
		$params['description'] = $this->input->post('description');
		$params['usd_price'] = $this->input->post('usd_price');
		$params['quantity'] = $this->input->post('quantity');
		//$params['profilecheck'] = $this->input->post('profilecheck');
		$params['status'] = 1;
		$params['created_date'] = date('Y-m-d H:i:s');
			
		$pathname = 'community_images';
		if (! is_dir ( 'assets/images/' . $pathname )) {
			mkdir ( './assets/images/' . $pathname, 0777, TRUE );
		}
		$files = $_FILES;
		$cpt = 0;
		$k =1;
		if(!empty($_FILES ['userfile'] ['name'])) {
			$cpt = count ( $_FILES ['userfile'] ['name'] );
			$data['images'] =array();
			for($i = 0; $i < $cpt; $i ++) {
				$_FILES ['user'] ['name'] = $_FILES ['userfile'] ['name'] [$i];
				$_FILES ['user'] ['type'] = $_FILES ['userfile'] ['type'] [$i];
				$_FILES ['user'] ['tmp_name'] = $_FILES ['userfile'] ['tmp_name'] [$i];
				$_FILES ['user'] ['error'] = $_FILES ['userfile'] ['error'] [$i];
				$_FILES ['user'] ['size'] = $_FILES ['userfile'] ['size'] [$i];
					
				$config = array ();
				//$config ['upload_path'] = 'assets/images/stock_images/';
				$config ['upload_path'] = 'assets/images/' . $pathname . '/';
				$config ['allowed_types'] = 'gif|jpg|png|PNG|JPEG';
				$config ['max_size'] = 204800;
				$config ['max_width'] = 2048;
				$config ['max_height'] = 2048;
					
				$this->load->library ( 'upload', $config );
				if ($this->upload->do_upload ( 'user' )) {
						
					$params['image'.$k] = $config ['upload_path'] . '' . $this->upload->data ( 'file_name' );
						
				} else {
					echo "No Image.";
				}
				$k++;
			}
		} else {
			$cimages = $this->input->post('cimg');
			foreach ($cimages as $key=>$row) {
				$params['image'.($key+1)] = $row;
			}
		}
	
		$this->load->model('Product_Model', 'product' );
		$response = $this->product->communityPostInsert($params);
		echo json_encode($response);
	
	}
	
	public function deleteCommunityPost() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$data = array ();
		$data['id'] =$this->input->post('id');
		$data['busi_id'] = $_SESSION['busi_id'];
		//$this->load->library ( 'mylib/PostLib', 'postlib' );
		//$result = $this->postlib->deletePost($data);
		$this->load->model('Product_Model', 'product' );
		$result = $this->product->deleteCommunityPost($data);
	
		if ($result == true){
			$results['status'] = '1';
			$results['msg'] = 'Post Deleted successfully';
		}else{
			$results['status'] = '0';
			$results['msg'] = 'Please try again.';
		}
		echo json_encode($results);
	}
	
	public function postLike() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$post_id = $this->input->post('post_id');
		$data = array(
				'post_id' => $post_id,
				'liked_by' => $_SESSION ['busi_id'],
				'status' =>'1',
				'created_datetime'=>date('Y-m-d H:i:s')
	
		);
		$this->load->model('Product_Model', 'product' );
		$result['id'] = $this->product->postLike ( $data );
	
		if ( $result ['id']  > 0) {
			$result ['status'] = 1;
			$result ['msg'] = 'You Liked this post.';
			//redirect ( 'post' );
		} else {
			$result ['status'] = 0;
			$result ['msg'] = 'You Already Liked this post.';
			//redirect ( 'post' );
		}
		echo json_encode($result);
	}
	
	public function commentPost() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
			
		$data = array ();
		$data = array(
				'post_id' => $this->input->post('post_id'),
				'user_id' => $this->input->post('user_id'),
				'comment' => $this->input->post('comment'),
				'commented_by' =>$_SESSION ['busi_id'],
				'status' => '1',
				'created_datetime' => date ( 'Y-m-d h:i:s' )
		);
	
		$this->load->model('Product_Model', 'product' );
		$result['id'] = $this->product->commentPost($data);
	
		if ( $result ['id']  > 0) {
			$result ['status'] = 1;
			$result ['msg'] = 'Comment Posted Successfully.';
		} else {
			$result ['status'] = 0;
			$result ['msg'] = 'Sorry! please try again.';
		}
		echo json_encode($result);
	}
	
	/*public function viewCommentPost() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$data = array ();
		$data['id'] = $this->input->post('id');
		$this->load->model('Product_Model', 'product' );
		$result = $this->product->viewCommentPost($data);
		echo json_encode($result);
	}
	
	public function viewPostlike() {
		if (! isset ( $_SESSION ['busi_id'] )) {
			redirect ( base_url () );
		}
		$data = array ();
		$data['id'] = $this->input->post('id');
		$this->load->model('Product_Model', 'product' );
		$result = $this->product->getCommunityPostLike($data);
		echo json_encode($result);
	}*/
	
	public function editProfile() {
		$busi_id = $this->session->userdata('busi_id');
		$this->load->model('Product_Model', 'product' );
		$userinfo = $this->product->getUserInfoByBussId($busi_id);
		print_r($userinfo);
		$this->template->set ('userinfo', $userinfo);
		$this->template->set ( 'page', 'edit_profile' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/edit_profile','',true);
		echo $html;
	}
	
	public function viewPostLike() {
	
		$post_id = $this->input->post('id');
		$this->load->model('Product_Model', 'product' );
		$postlike = $this->product->getCommunityPostLike($post_id);
		$this->template->set ( 'postlike', $postlike );
		$this->template->set ( 'post_id', $post_id );
		$this->template->set ( 'page', 'community' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/post_like','',true);
		echo $html;
	}
	
	public function viewPostcomment() {
	
		$post_id = $this->input->post('id');
		$busi_id = $_SESSION['busi_id'];
		$this->load->model('Product_Model', 'product' );
		$postcomment = $this->product->getCommunityPostComment($post_id);
		$this->template->set ( 'postcomment', $postcomment );
		$this->template->set ( 'post_id', $post_id );
		$this->template->set ( 'busi_id', $busi_id );
		$this->template->set ( 'page', 'community' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/post_comment','',true);
		echo $html;
	}
	
	public function addToCommunity($id) {
		$this->load->model('Community_Model', 'mycommunity' );
		$params = array();
		$params['my_busi_id'] = $this->session->userdata('tsuser')['busi_id'];
		$params['busi_id'] = $id;
		$isadded = $this->mycommunity->addToMyCommunity($params);
		$resp = array();
		if(!empty($this->session->userdata('tsuser')['busi_id'])) { 
			if($params['my_busi_id'] != $params['busi_id']) {
				if($isadded) {
					$resp['status'] = 1;
					$resp['msg'] = 'ADDED SUCCESFULLY TO YOUR COMMUNITY';
				} else {
					$resp['status'] = 0;
					$resp['msg'] = 'ALREADY ADDED TO YOUR COMMUNITY';
				}
			} else {
				$resp['status'] = 0;
				$resp['msg'] = 'YOU ARE ALREADY IN YOUR COMMUNITY';
			}
		} else {
			$resp['status'] = 0;
			$resp['msg'] = 'LOGIN TO ADD IN YOUR COMMUNITY';
		}
		
		echo json_encode($resp);
	}
	
	public function selectProductImages($id) {
		$this->load->model('Product_Model', 'product' );
		$product = $this->product->getProductItemById($id);
		$this->template->set ( 'product', $product[0] );
		$this->template->set ( 'page', 'community' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/product-images','',true);
		echo $html;
	}
	
	public function updateMyNickName() {
		$this->load->model('Account_Model');
		$params = array();
		$params['busi_id'] = $_SESSION ['busi_id'];
		$params['nickname'] = $this->input->post('nickname');
		$this->Account_Model->updateUserByBusiId($params);
		echo '<script>window.close();</script>';
	}
	
	public function updateOnlineStatus() {
		$this->load->model('Account_Model');
		$params = array();
		$params['busi_id'] = $_SESSION ['busi_id'];
		$params['is_online'] = $this->input->post('status');
		$this->Account_Model->updateUserByBusiId($params);
		echo json_encode(array('status'=>1));
	}
	
	public function searchMyCommunityMemberByName() {
		$this->load->model('Community_Model','communitymodel');
		$name = $this->input->get('name');
		$busi_id = $_SESSION ['busi_id'];
		$result = $this->communitymodel->searchCommunityMember($busi_id,$name);
		$this->template->set ( 'communitymember', $result);
		$this->template->set ( 'page', 'community' );
		$this->template->set_theme('default_theme');
		$this->template->set_layout (false);
		$html = $this->template->build ('community/pages/mymembers','',true);
		echo $html;
	}
	
	public function deleteMyCommunityMembers() {
		$this->load->model('Community_Model','communitymodel');
		$members = $this->input->get('members');
		$busi_id = $_SESSION ['busi_id'];
		$result = $this->communitymodel->deleteCommunityMembers($busi_id,$members);
		$resp = array();
		if($result) {
			$resp['status'] = 1;
		} else {
			$resp['status'] = 0;
		}
		echo json_encode($resp);
	}
		
}