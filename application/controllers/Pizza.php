<?php 
class Pizza extends CI_Controller
{
	public function index()
	{
		if($this->input->get('false')=='false')
		{
			echo '<script>alert("Already in Wishlist")</script>';
		}
		$this->head(1);
		$this->dash();
		$this->footer();
	}

	public function session_check()
	{
		$d=$this->session->userdata('clinte');
		if($d!='')
		{
			redirect(base_url()."Pizza");
		}
		else{
			redirect(base_url()."Pizza/login");
		}
		
	}	


	public function head($homepage=false)
	{	
		$q2['sess']=$this->session->userdata('clinte');
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$q2['logo']=$l->result();
		$q1=$this->db->query("select * from menu where m_status='unblock'");
		$q2['menu']=$q1->result();
		$q2['this1']=$this;
		$q2['homepage']= $homepage ;
		$this->load->view("user/headar",$q2);
	}
	public function sub_head($a)
	{
		$q1=$this->db->query("select * from sub_menu where m_id='$a' and sub_status='unblock'");
		$q2=$q1->result();
		return $q2;
	}
	public function dash()
	{
		$f=$this->db->query("select * from feedback where f_status='unblock'");
		$r['feedata']=$f->result();
		$s=$this->db->query("select * from menu where m_status='unblock'");
		$r['menu']=$s->result();
		
		$g=$this->db->query("select * from gallery where g_status='unblock'");
		$r['gallery']=$g->result();	
		
		$r['slider']=$this->pizza_model->select_Data('banner','b_status');		
		$this->load->view("user/dash",$r);
	}
	public function footer()
	{
		//$this->head();
		$r=$this->db->query("select * from menu where m_status='unblock'");
		$a['menu']=$r->result();
		
		$r1=$this->db->query("select * from logo where l_status='unblock'");
		$a['logo']=$r1->result();
		
		
		$this->load->view("user/footer",$a);
	}
	
	public function login()
	{			
		$data['this1']=$this;
		$data['action']=base_url()."Pizza/login_insert";
		$data['action1']=base_url()."Pizza/f_pass";
		$this->head();
		$this->load->view('user/login',$data);
		$this->footer();
	}
	
	/************ LOGIN SELECT ************/
	public function login_insert()
	{
		$em=$this->input->post('temail');
		$this->load->model('pizza_model');
		$i=$this->pizza_model->login_model('reg',$em);
		if($i->num_rows()>='1')
		{
			$pa=$i->result();
			foreach($pa as $pas)
			{
				$pass=$pas->r_password;
				$a3=$pas->r_id;
				$a4=$pas->r_file;
				$name=$pas->r_name;
				
			}
			
			$this->load->library('encryption');
			if($this->encryption->decrypt($pass)==$this->input->post('tpassword'))
			{
				$user_data=array(
				"Admin_ID"=>$a3,	
				"User_name"=>$name,
				"user_img"=>$a4
			);			
			$this->session->set_userdata("clinte",$user_data);
			
			$this->session->set_flashdata('success', 'Logged In Successfully.');
			redirect(base_url()."Pizza/index");
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Email Address/Password.');
				redirect(base_url()."Pizza/login/");
			}	
		}		 
		else
		{
			$this->session->set_flashdata('error', 'Invalid Email Address/Password.');
			redirect(base_url()."Pizza/login");
		}
	}
	public function logout_session()
	{
		 $this->session->unset_userdata('clinte');
		 $this->session->set_flashdata('success', 'Logged Out Successfully .');
		 redirect(base_url()."Pizza");
	}
	
	public function mail_check1()
	  {
		  $this->load->library('my_lib');
		  $e=$this->my_lib->mail_check($this->input->post('email'));
		 if(!$e)
		 {
			 echo "this email is not exist";
		 }
	  }
	public function forget_pass()
	{
		
		$a['action']=base_url()."Pizza/login_insert";
		$a['action1']=base_url()."Pizza/f_pass";
		$this->load->view($a);
	}
	/************ FORGET PASSWORD ************/
	public function f_pass()
	{
		$this->load->library('pizza_lib');
		$this->pizza_lib->sendMail($this->input->post('temail'));
		redirect(base_url()."Pizza");
	}
	public function c_password()
	{		
		$a['this1']=$this;
		$c=$this->input->get('email');
		$a['action']=base_url()."Pizza/new_password/?em=".$c;
		
		$this->head();
		$this->load->view('user/c_pass',$a);
		$this->footer();
		
	}
	/************ NEW PASSWORD  ************/
	public function new_password()
	{
		$email=$this->input->get('em');
		$this->load->library('encryption');
		$password=$this->encryption->encrypt($this->input->post('tpassword'));
		$this->load->model('pizza_model');
		$this->pizza_model->up_model('reg',$email,$password);
		redirect(base_url()."Pizza");
	}
	
	public function reg()
	{
		$a1['validation']='reg.js';
		$a1['this1']=$this;
		$a1['action']=base_url()."Pizza/reg_insert";
		$this->head();
		$this->load->view('user/reg',$a1);
		$this->footer();
	}
	public function register()
	{		
		$data = array();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->load->helper(array('form', 'url','file'));
			$this->load->library('form_validation');
			//Set Rule
			$this->form_validation->set_rules('r_name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('r_lname', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('r_email', 'Email', 'trim|required|valid_email|is_unique[reg.r_email]');
			$this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|required|exact_length[10]');
			$this->form_validation->set_rules('r_password', 'Password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('r_file', '', 'callback_file_check');
			if ($this->form_validation->run() == TRUE){
				$path=$this->pizza_lib->image_upload('r_file');
				$this->load->library('encryption');
				$data=array(
					'r_name'=>$this->input->post('r_name'),
					'r_lname'=>$this->input->post('r_lname'),
					'r_email'=>$this->input->post('r_email'),
					'mobile_no'=>$this->input->post('mobile_no'),
					'r_password'=>$this->encryption->encrypt($this->input->post('r_password')),
					'r_file'=>"uploads/reg_img/".$path['file_name'],
				);
				//$this->load->library('pizza_lib');
				//$this->pizza_lib->sendMail($this->input->post('r_email'));
				$this->load->model('pizza_model');
				$r=$this->pizza_model->reg_insert('reg',$data);
				if($r==1){
					redirect(base_url()."Pizza/register");
					$this->session->set_flashdata('success', 'Your account has been created successfully. Please login now.');
				}else{
					redirect(base_url()."Pizza/register");
					$this->session->set_flashdata('error', 'Your account has been created successfully. Please login now.');
				}
			}
		}
		$this->head();
		$this->load->view('user/register',$data);
		$this->footer();
	} 
	public function file_check($str){
		if(empty($_FILES['r_file']['name'])){
			return true;
		}
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['r_file']['name']);
		if(in_array($mime, $allowed_mime_type_arr)){
			return true;
		}else{
			$this->form_validation->set_message('file_check', 'Please select only jpg/png/gif file.');
			return false;
		}
	}
	public function collection()
	{	
		$isMain = $this->input->get('main','s_id');
		
		$id=$this->input->get('c');
		$field = !empty($isMain)?"m_id":"s_id";
		$condition = !empty($id)?("AND ".$field."=".$id):"";
		
		$ct=$this->db->query("select * from product where p_status='unblock' ".$condition);
		$a1['pizza_data']=$ct->result();	
		
		$p=$this->db->query("select * from pizza_types where pizza_status='unblock'");
		$a1['pizza']=$p->result();		
		
		$a1['this1']=$this;
		$a1['action']=base_url()."Pizza/collection_insert";
		$a1['category'] = $id;
		$this->head();
		$this->load->view('user/collection',$a1);
		$this->footer();
		
	}	
	public function feedback()
	{
		$this->head();
		$a['action']=base_url()."Pizza/feedback_insert";
		$this->load->view('user/feedback',$a);
		$this->footer();
	}
	public function feedback_insert()
	{
		
		$this->load->library('encryption');
		$data=array(
			'f_name'=>$this->input->post('fname'),
			'f_email'=>$this->input->post('femail'),
			'f_number'=>$this->input->post('fnumber'),
			'f_msg'=>$this->input->post('fmsg')
			
		);
		$this->load->model('pizza_model');
		$r=$this->pizza_model->reg_insert('feedback',$data);
		if($r==1)
		{
			$this->session->set_flashdata('success', 'Thank you, We received your request, We will reply back to you ASAP.');
			redirect(base_url()."Pizza/feedback");
		}
		else
		{
			$this->session->set_flashdata('error', 'Unable to process your request, Please try again.');
			redirect(base_url()."Pizza/feedback");
		}	
	} 
	public function product($a)
	{
		$q1=$this->db->query("select * from product where m_id='$a' and p_status='unblock' order by `p_id` DESC limit 4");
		$q2=$q1->result();
		return $q2;
	}
	public function product_info()
	{	
		$id=$this->input->get('pid');
		$data['this1']=$this;
		$data['productId']=$id;
		$q1=$this->db->query("select * from product where  p_status='unblock' and `p_id`='$id'");
		$data['cart_data']=$q1->result();
		//GET REVIEW
		$review = $this->db->query("select reviews.*,CONCAT(reg.r_name,' ',reg.r_lname) name from reviews LEFT JOIN reg on user_id=r_id where `product_id`='$id'");
		$data['reviews'] = $review->result();
		$this->head();
		$this->load->view('user/product_info',$data);
		$this->store_cookies($data['cart_data']);
		$this->footer();
	}
	
	public function cart_insert()
	{
		
		$data=array(
			 "id"=>$this->input->post("id"),
			 "name"=>$this->input->post("name"),
			 "price"=>$this->input->post("price"),
			 "img"=>$this->input->post("img"),
			 'qty'=>1
		);
		
		
		$this->cart->insert($data);
		
		echo " Your Item Added Into cart";
	 }
	public function cart_remove()
	{		
		$data = array(
			'rowid'  =>$this->input->get('id') ,
			'qty'    =>0
		);
		$this->cart->update($data);
		$this->session->set_flashdata('success', 'Product removed from your Cart.');			
		redirect(base_url()."Pizza/show_cart");
	}
	public function update_cart()
	{		
		$data = array(
			'rowid'  =>$this->input->get('qty1') ,
			'qty'    =>$this->input->get('qty')
		);
		$this->cart->update($data);
		$this->session->set_flashdata('success', 'Cart updated Successfully.');
		redirect(base_url()."Pizza/show_cart");
	}
	public function show_Cart(){
		$data['sess']=$this->session->userdata('clinte');	
		$l=$this->db->query("select * from  logo where l_status='unblock'");
		$data['logo']=$l->result();	
		$r=$this->db->query("select * from menu where m_status='unblock'");
		$data['menu']=$r->result();
		$data['this1']=$this;
		$data['order']=$this->session->userdata('order');
		$this->head();
		$this->load->view('user/cart',$data);
		$this->footer(); 
	}
	public function store_cookies($a)
	 {
		 foreach($a as $v)
		 {
			 $c_value=$v->c_id;
		 }
		 
		 $check=get_cookie("reco");
		 if($check=='')
		 {
			$co=array(
			
			);
			echo set_cookie("reco",$c_value,3600);
		 }
		 
	}
	public function get_categories_record($c_id)
	{
		
		$r=$this->pizza_model->get_where('product','c_id',$c_id,'p_status','unblock');
		return $r;
	}
	public function compare()
	{
		 
		 $check=get_cookie("compare");
		 if($check=='')
		 {
			$co=array(
			$this->input->get("p_id")
			);
			echo set_cookie("compare",serialize($co),3600);
		 }
		 else{
			 $check=unserialize(get_cookie("compare"));
			 $co=$this->input->get("p_id")
			;
			 array_push($check,$co);
			 set_cookie("compare",serialize($check),3600);
		 }
		redirect(base_url()."Pizza/compare_show");
	}
	public function compare_show()
	{
		$data['this1']=$this;
		$this->head();
		$this->load->view("user/compare",$data);
		$this->footer();
	}
	public function get_product($id)
	{
		return $this->pizza_model->get_where('product','p_id',$id,'p_status','unblock');
		
	}
	public function remoce_compare()
	{
		    $check=unserialize(get_cookie("compare"));
			unset($check[$this->input->get('count')]);
			set_cookie("compare",serialize($check),3600);
		 
		redirect(base_url()."Pizza/compare_show");
	}
	public function wishlist()
	{
		$arrResponse = array('status'=>"error","message"=>"Unable to add product in wishlist, Please try again.");
		$pro=$this->input->post('p_id');
		$insert_wishlist=array
		(
			'w_prod_id'=>$this->input->post('p_id'),
			'w_user_id'=>$this->input->post('u_id')
		);
		$r=$this->db->query("select * from wishlist where w_prod_id='$pro' and w_user_id=".getUserId() );
		if($r->num_rows()>0){
			$arrResponse = array('status'=>"info","message"=>"Product is already available in your Wishlist.");
		}else{  
			$r=$this->db->insert('wishlist',$insert_wishlist);
			if($r==1){
				$arrResponse = array('status'=>"success","message"=>"Product is added to your Wishlist.");
			}
		} 
		echo json_encode($arrResponse);
		exit;
	}
	public function show_wishlist()
	{
		$data['this1']=$this;
		$wishlist=$this->db->query("select * from wishlist inner join product on wishlist.w_prod_id=product.p_id where w_user_id=".getUserId());
		$data['data']=$wishlist->result();
		$data['wish_total']=$this->db->query("select * from wishlist inner join product on wishlist.w_prod_id=product.p_id where w_user_id=".getUserId())->num_rows();
		
		$this->head();
		$this->load->view('user/wishlist',$data);
		$this->footer();
	}
	public function remove_wishlist()
	{
		$sql = "DELETE FROM wishlist WHERE w_id = ".$this->input->get('id');			
		$this->db->query($sql);
		$this->session->set_flashdata('success', 'Product removed from your wishlist.');
		redirect(base_url()."Pizza/show_wishlist");
	}
	
	public function contact()
	{
		$this->head();
		$this->load->view("user/contact");
		$this->footer();
	}
	public function order()
	{
		$this->head("");
		$a['action']=base_url("pc/order_insert");
		$this->load->view('user/order');
		$this->footer("");
	}
	public function about()
	{
			$this->head();
			$a['action']=base_url("pc/action_insert");
			$a['slider']=$this->pizza_model->select_Data('banner','b_status');
			$this->load->view('user/about',$a);
			$this->footer();
	}
	public function profile()
	{
		$this->checkLogin();
		$this->head();
		$a['action']=base_url()."Pizza/profile_in";
		$a['user_data']=$this->session->userdata("clinte");
		if(empty($a['user_data']))
		 {
			 redirect(base_url()."Pizza");
		 }
		 else
		 {
		$this->load->view("user/profile",$a);
		$this->footer();
		}
	}
	/*********************CHANGE PASSWORD NEW START********************************/
	public function change_password()
	{
		$this->head();
		$a['action']=base_url()."pizza/new_password_update";
		$this->load->view("user/change_password",$a);
		$this->footer();
	}
		
		
	
	public function change_new_password()
	{
		$change=$this->input->post('submenu');
		$me=$this->session->userdata("clinte");
		$oid=$me['Admin_ID'];
		//print_r($oid);
		//echo	"select r_password from reg where r_id='$oid'";
		$r=$this->db->query("select r_password from reg where r_id='$oid'");
		$r1=$r->result();
		foreach($r1 as $rec)
		{
			$p2=$rec->r_password;
		}
		$this->load->library('encryption');
		$p3=$this->encryption->decrypt($p2);
		if($p3!=$change)
		{
			echo "Password Is Not Match";
		}
		else
		  
		  {
		echo '<div class="form-group">
								<label >New Paasword:</label>
								<input type="text" name="new_change" placeholder="NEW PASSWORD" class="form-control">
								</div>';
		}
	}
		
	public function new_password_update()
	 {
		 $me=$this->session->userdata("clinte");
		 $oid=$me['Admin_ID'];
		 $p2=$this->input->post('new_change');
		 $this->load->library("encryption");
		 $p2=$this->encryption->encrypt($p2);
		
		 $this->load->model('pizza_model');
		 $this->pizza_model->update_password_change($p2,$oid);
		 redirect(base_url()."pizza/login");
	
	}
	function add_review(){
		$this->checkLogin();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$review = $this->input->post('review');
			$review['user_id'] = getUserId();
			$review['created'] = date("Y-m-d H:i:s");
			$review['rating'] = empty($review['rating'])?0:$review['rating'];
			$this->db->insert('reviews',$review);			
			$this->db->query("update product set review_count = review_count+1,rating=rating+".$review['rating']." where p_id=".$review['product_id']);
			$this->session->set_flashdata('success', 'Thank you for submitting your review.');
			redirect(base_url()."Pizza/product_info/?pid=".$review['product_id']);
		}				
	}
	private function checkLogin(){
		if(!getUserId()){
			$this->session->set_flashdata('error', 'Please login to perform this action.');
			redirect(base_url()."pizza/login");	
		}	
	}
}
?>