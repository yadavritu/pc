<?php 
class Pizza extends CI_Controller
{
	public function index()
	{
	if($this->input->get('false')=='false')
		{
			echo '<script>alert("Already in Wishlist")</script>';
		}
		$this->head();
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


	public function head()
	{	
		$q2['sess']=$this->session->userdata('clinte');
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$q2['logo']=$l->result();
		$q1=$this->db->query("select * from menu where m_status='unblock'");
		$q2['menu']=$q1->result();
		$q2['this1']=$this;
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
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$r1['logo']=$l->result();
		$r=$this->db->query("select * from menu where m_status='unblock'");
		$r1['menu']=$r->result();
		$r1['this1']=$this;
		$r1['action']=base_url()."Pizza/login_insert";
		$r1['action1']=base_url()."Pizza/f_pass";
		$this->load->view('user/login',$r1);
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
				$name=$pas->r_name;
				
			}
			
			$this->load->library('encryption');
			if($this->encryption->decrypt($pass)==$this->input->post('tpassword'))
			{
				$user_data=array(
				"Admin_ID"=>$a3,	
				"User_name"=>$name
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
		$q1=$this->db->query("select * from menu where m_status='unblock'");
		$a['menu']=$q1->result();
		$a['this1']=$this;
		
		$a['menu']=$this->pizza_model->select_Data('menu','m_status');
		$a['this1']=$this;
		$c=$this->input->get('email');
		$a['action']=base_url()."Pizza/new_password/?em=".$c;
		$this->load->view('user/c_pass',$a);
	}
	/************ NEW PASSWORD  ************/
	public function new_password()
	{
		$email=$this->input->get('em');
		$this->load->library('encryption');
		$password=$this->encryption->encrypt($this->input->post('tpassword'));
		$this->load->model('pizza_model');
		$this->pizza_model->up_model('reg',$email,$password);
	}
	
	public function reg()
	{
		$a1['validation']='reg.js';
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$a1['logo']=$l->result();
		$a=$this->db->query("select * from menu where m_status='unblock'");
		$a1['menu']=$a->result();
		$a1['this1']=$this;
		$a1['action']=base_url()."Pizza/reg_insert";
		$this->load->view('user/reg',$a1);
		$this->footer();
	}
	public function reg_insert()
	{
		
		$this->load->library('encryption');
		$data=array(
			'r_name'=>$this->input->post('tfname'),
			'r_lname'=>$this->input->post('tlname'),
			'r_email'=>$this->input->post('temail'),
			'r_password'=>$this->encryption->encrypt($this->input->post('tpassword')),
		);
		//$this->load->library('pizza_lib');
		//$this->pizza_lib->sendMail($this->input->post('temail'));
		$this->load->model('pizza_model');
		$r=$this->pizza_model->reg_insert('reg',$data);
		if($r==1)
		{
			redirect(base_url()."Pizza/reg/?em=success");
			//echo "<h1>registration success</h1>";
		}
		else
		{
				redirect(base_url()."Pizza/reg/?em=unsuccess");
			//echo "<h1>registration unsuccess</h1>";
		}	
	} 
	public function collection()
	{	
		$id=$this->input->get('c');
		$ct=$this->db->query("select * from product where p_status='unblock' and m_id='$id' ");
		$a1['pizza_data']=$ct->result();
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$a1['logo']=$l->result();
		
		$a1['sess']=$this->session->userdata('clinte');	
		
		$a=$this->db->query("select * from menu where m_status='unblock'");
		$a1['menu']=$a->result();
		
		$p=$this->db->query("select * from pizza_types where pizza_status='unblock'");
		$a1['pizza']=$p->result();
		
		$q1=$this->db->query("select * from product where  p_status='unblock'");
		$a1['cart_data']=$q1->result();
		
		
		$a1['this1']=$this;
		$a1['action']=base_url()."Pizza/collection_insert";
		$this->load->view('user/collection',$a1);
		$this->footer();
		
	}
	public function collection1()
	{	
		$id=$this->input->get('c');
		$ct=$this->db->query("select * from product where p_status='unblock' and s_id='$id' ");
		$a1['pizza_data']=$ct->result();
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$a1['logo']=$l->result();
		
	
		$a=$this->db->query("select * from menu where m_status='unblock'");
		$a1['menu']=$a->result();
		
		$p=$this->db->query("select * from pizza_types where pizza_status='unblock'");
		$a1['pizza']=$p->result();
		
		$q1=$this->db->query("select * from product where  p_status='unblock'");
		$a1['cart_data']=$q1->result();
		
		$a1['sess']=$this->session->userdata('clinte');	
		
		$a1['this1']=$this;
		$a1['action']=base_url()."Pizza/collection_insert";
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
	
		
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$a['logo']=$l->result();
		$a1=$this->db->query("select * from menu where m_status='unblock'");
		$a['menu']=$a1->result();
		$a['this1']=$this;
		$id=$this->input->get('pid');
		$q1=$this->db->query("select * from product where  p_status='unblock' and `p_id`='$id'");
		$a['cart_data']=$q1->result();
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
	public function show_Cart()
	{
		 
		 if($this->session->userdata("clinte"))
		 {
			 $id=$this->session->userdata("clinte");
			 $a['user_id']=$id['Admin_ID'];
		 }
		 else
		 {
		/*  $l=$this->db->query("select * from  logo where l_status='unblock'");
		 $a['logo']=$l->result();	
		 $r=$this->db->query("select * from menu where m_status='unblock'");
		 $a['menu']=$r->result();
		 $a['this1']=$this;
		 $this->load->view('user/cart',$a);
		 $this->footer(); 
		 */// redirect(base_url()."pizza");
		 }
		 $a['sess']=$this->session->userdata('clinte');	
		  $l=$this->db->query("select * from  logo where l_status='unblock'");
		 $a['logo']=$l->result();	
		 $r=$this->db->query("select * from menu where m_status='unblock'");
		 $a['menu']=$r->result();
		 $a['this1']=$this;
		 $this->load->view('user/cart',$a);
		 $this->footer(); 
		
			//redirect(base_url()."pizza");
	}
	
		
	function buy($id)
	{
		 $sess=$this->session->userdata("clinte");
		$val=$sess['Admin_ID'];
		 if(!$val)
		 {
			//echo "login frist";
			 redirect(base_url()."Pizza/login/?login=true");
		 }
		 else
		 {
        //Set variables for paypal form
        $returnURL = base_url().'Pizza/success'; //payment success url
        $cancelURL = base_url().'Pizza/cancel'; //payment cancel url
        $notifyURL = base_url().'Pizza/ipn'; //ipn url
        //get particular product data
        $product = $this->pizza_model->getRows($id);
        $userID = $id; //current user id
        $logo = base_url().'assets/images/codexworld-logo.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $product['p_name']);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['p_id']);
        $this->paypal_lib->add_field('amount',  $product['p_price']);        
        $this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
		
		 }
		 
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
			
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$data['logo']=$l->result();
	
		$m=$this->db->query("select * from menu where m_status='unblock'");
		$data['menu']=$m->result();
		$data['this1']=$this;
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
		$l=$this->db->query("select * from logo where l_status='unblock'");
		$md['logo']=$l->result();
		
		$m=$this->db->query("select * from menu where m_status='unblock'");
		$md['menu']=$m->result();
		$md['this1']=$this;
		
		$md['sess']=$this->session->userdata('clinte');	
		
		$d=$this->session->userdata('clinte');
		$usr_id=$d['Admin_ID'];
		$r=$this->db->query("select * from wishlist inner join product on wishlist.w_prod_id=product.p_id where w_user_id='$usr_id'");
		$md['data']=$r->result();	
		$md['wish_total']=$this->db->query("select * from wishlist inner join product on wishlist.w_prod_id=product.p_id where w_user_id='$usr_id'")->num_rows();
		
		$this->load->view('user/wishlist',$md);
		$this->footer();
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
		$a['action']=base_url("Pizza_hut/order_insert");
		$this->load->view('user/order');
		$this->footer("");
	}
}
?>