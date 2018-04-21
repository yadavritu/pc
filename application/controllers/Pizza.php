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
		//$this->head();
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
			
			redirect(base_url()."Pizza/index/?em=success");
			}
			else
			{
					//echo "password not match";
					redirect(base_url()."Pizza/login/?em=unsuccess");
			}	
		}		 
		else
		{
			//echo "email not match";
					redirect(base_url()."Pizza/login/?em=invlid_email");
		}
	}
	public function logout_session()
	{
		 $this->session->unset_userdata('clinte');
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
	public function reg_insert()
	{		
		$path=$this->pizza_lib->image_upload('file');
		$this->load->library('encryption');
		$data=array(
			'r_name'=>$this->input->post('tfname'),
			'r_lname'=>$this->input->post('tlname'),
			'r_email'=>$this->input->post('temail'),
			'r_file'=>"<img src='".base_url()."uploads/reg_img/".$path['file_name']."' height='100' width='100'>",
			'r_password'=>$this->encryption->encrypt($this->input->post('tpassword')),
		);
		//$this->load->library('pizza_lib');
		//$this->pizza_lib->sendMail($this->input->post('temail'));
		$this->load->model('pizza_model');
		$r=$this->pizza_model->reg_insert('reg',$data);
		if($r==1){
			redirect(base_url()."Pizza/reg/?em=success");
		}else{
			redirect(base_url()."Pizza/reg/?em=unsuccess");
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
			redirect(base_url()."Pizza/feedback/?em=success");
			//echo "<h1>registration success</h1>";
		}
		else
		{
				redirect(base_url()."Pizza/feedback/?em=unsuccess");
			//echo "<h1>registration unsuccess</h1>";
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
		$a['this1']=$this;
		$id=$this->input->get('pid');
		$q1=$this->db->query("select * from product where  p_status='unblock' and `p_id`='$id'");
		$a['cart_data']=$q1->result();
		$this->head();
		$this->load->view('user/product_info',$a);
		$this->store_cookies($a['cart_data']);
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
			
		redirect(base_url()."Pizza/show_cart");
	}
	public function update_cart()
	{
		
			$data = array(
			'rowid'  =>$this->input->get('qty1') ,
			'qty'    =>$this->input->get('qty')
			);
			$this->cart->update($data);
			
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
		
		$pro=$this->input->post('p_id');
		$insert_wishlist=array
		(
			'w_prod_id'=>$this->input->post('p_id'),
			'w_user_id'=>$this->input->post('u_id')
		);
		$r=$this->db->query("select * from wishlist where w_prod_id='$pro'" );
		if($r->num_rows()>0)
		{
			//echo "else";
			echo "already in wish list";
		}
		else
		{  
			//echo 
			$r=$this->db->insert('wishlist',$insert_wishlist);
			if($r==1)
			{
			echo "Add in Your wishlist";
			}
			
			
		} 
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
}
?>