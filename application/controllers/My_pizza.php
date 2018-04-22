<?php
class My_pizza extends CI_Controller
{
	
	//*******************LOGIN FOR ADMIN SITE START **********************************//
	public function index()
	{
		$d['action']=base_url()."My_pizza/login_insert";
		$this->load->view('login',$d);
	}
	 public function login_insert()
	{
		$em=$this->input->post('temail');
		
		$this->load->model('my_model');
		$i=$this->my_model->get_wherelogin('login',$em);
		if($i->num_rows()>='1')
		{
			$pa=$i->result();
			foreach($pa as $ps)
			{
				//print_r($ps);
					$a1=$ps->r_name;
					$a2=$ps->r_img;
					$a3=$ps->r_id;
				
				$pass=$ps->r_password;
			}
			
			$this->load->library('encryption');
			if($this->encryption->decrypt($pass)==$this->input->post('tpassword'))
			{
				$user_data=array(
				"islogin"=>"yes",
				"Admin_Name"=>$a1,
				"Admin_Img"=>$a2,
				"Admin_ID"=>$a3
			); 
			$this->session->set_userdata("admin",$user_data);
			
			
				echo "==>login";
				redirect(base_url()."My_pizza/dash/?email=success");
			}
			else
			{
				echo "==>not match Password";
			redirect(base_url()."My_pizza/index/?email=unsuccess");
			
			}
		}
			else
			{
				echo "==>email not match";
				redirect(base_url()."My_pizza/index/?email=invalid_email");
			
			}
			redirect(base_url()."Pizza_in/dash");
	}
		
			public function logout_session()
	{
		 $this->session->unset_userdata('admin');
		 redirect(base_url());
	}
	//*******************LOGIN FOR ADMIN SITE END **********************************//
	

	/*****************MAIL SEND FORGET PASSWORD START*******************/

		public function forgot_pass()
	{
		$a['action']=base_url()."My_pizza/f_pass";
		$this->load->view('email_send',$a);
	}
	 public function f_pass()
	{
		$this->load->library('my_lib');
		$this->my_lib->sendMail($this->input->post('temail'));
		redirect(base_url()."My_pizza");
	}
	public function c_password()
	{
		$c=$this->input->get('email');
		$a['action']=base_url()."My_pizza/new_password/?em=".$c;
		$this->load->view('password_forget.php',$a);
	}
	public function new_password()
	{
		$email=$this->input->get('em');
		$this->load->library('encryption');
		$password=$this->encryption->encrypt($this->input->post('tpassword'));
		$this->load->model('my_model');
		$this->my_model->up_model('login',$email,$password);
		redirect(base_url()."My_pizza");
	
	}
	/*****************MAIL SEND FORGET PASSWORD END*******************/

		
	/*********************CHANGE PASSWORD NEW START********************************/
		
		 public function change_password()
	{
			$this->sidebar("");
			$a['action']=base_url()."My_pizza/new_password_update";
			$this->load->view('change_password',$a);
	}
		public function change_new_password()
	{
		$change=$this->input->post('submenu');
		$me=$this->session->userdata("admin");
		$oid=$me['Admin_ID'];
		$r=$this->db->query("select r_password from login where r_id='$oid'");
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
		 $me=$this->session->userdata("admin");
		 $oid=$me['Admin_ID'];
		 $p2=$this->input->post('new_change');
		 $this->load->library("encryption");
		 $p2=$this->encryption->encrypt($p2);
		
		 $this->load->model('My_model');
		 $this->my_model->update_password_change($p2,$oid);
		 redirect(base_url()."My_pizza");
	
	}
	
/*********************CHANGE PASSWORD NEW END********************************/

//**************** MAIL CHACK ADMIN SITE MAI EXIT YE NO START FOR AJAX***************************************************//
	public function mail_check1()
	  {
		  $this->load->library('my_lib');
		  $e=$this->my_lib->mail_check($this->input->post('email'));
		 if(!$e)
		 {
			 echo "this email is not exist";
		 }
	  }
//**************** MAIL CHACK ADMIN SITE MAI EXIT YE NO END FOR AJAX***************************************************//

//**************************HEAD ADMIN SITE START************************************//
 	public function head($validation)
	{
		$a['validation']=$validation;
		
		$a['admin_data']=$this->session->userdata("admin");
		$this->load->view('headar',$a);
	}
//**************************HEAD ADMIN SITE END************************************//

//***************************SIDE BAR START ADMIN SITE *************************************//
	public function sidebar($validation)
	{
		$a['menu']=array(
		"a"=>"My_pizza/dash,Dashboard,fa fa-dashboard",
		"b"=>"My_pizza/menu,Menu,fa fa-bars",
		"c"=>"My_pizza/sub_menu,SubMenu,fa fa-list",
		'd'=>"My_pizza/banner,Manage banner,fa fa-image",
		'e'=>"My_pizza/logo,Manage logo,fa fa-image",
		'f'=>"My_pizza/category,Manage category,fa fa-list",
		'g'=>"My_pizza/pizza_types,Manage pizza types,fa fa-file-text-o",
		'h'=>"My_pizza/product,Manage product ,fa fa-product-hunt",
		'i'=>"My_pizza/gallery,Manage Gallery ,fa fa-file-image-o",
		'j'=>"My_pizza/coupon,Manage Coupon, fa fa-tags",
		'o'=>"My_pizza/Order,Manage Order, fa fa-tags",
			
		'r'=>"My_pizza/reg_display/reg/r_id/r_status,Display Reg ,fa fa-registered",
		'feedback'=>"My_pizza/feedback_display/feedback/f_id/f_status,Display Feedback ,fa fa-commenting-o"
		 
		
		);
		$a['admin_data']=$this->session->userdata("admin");
		if(empty($a['admin_data']))
		 {
			 redirect(base_url());
		 }
		 else
		{
		$this->head($validation);
		$this->load->view('sidebar',$a);
		}
	}
//***************************SIDE BAR END ADMIN SITE *************************************//

//***************************DASH FOR ADMIN SITE *************************************//

	public function dash()
	{
		
		$this->sidebar("");
		$this->main_page();
		
	}
//***************************DASH CLOSE ADMIN SITE *************************************//

//***************************MAIN PAGE START ADMIN SITE *************************************//

	public function main_page()
	{
		
		$q1['pro_count']=$this->db->get("product")->num_rows();
		$q1['feed_count']=$this->db->get("feedback")->num_rows();
		$q1['client_count']=$this->db->get("reg")->num_rows();
		$q1['bika_count']=$this->db->get("payments")->num_rows();
		$q=$this->db->query("select * from banner where b_status='unblock'");
		$q1['slider']=$q->result();
		$q2=$this->db->query("select * from product where  p_status='unblock' ");
		$q1['pproduct_name']=$q2->result();
		
		$this->load->view('main',$q1);
		
	}

//***************************MAIN PAGE END ADMIN SITE *************************************//

//*************************** MENU  START ADMIN SITE *************************************//

	
	public function menu()
	{
		$this->sidebar("menu.js");
		//************ Add action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $Data){}
		$a['heading']="Update Manage Menu";
		$a['heading1']="Display Menu's Detail";
		$a['link']="My_pizza/display_menudata/menu/m_id/m_status";
		$a['text']='    
		            
		             <div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Menu</label>
											<div class="col-sm-8">
											<input class="form-control" value="'.$Data->m_name.'" id="menu_check" placeholder="Enter menu"  type="text" name="menu" >
										<label style="font-size:20px; color:blue;" id="msg"></label>
										</div>
										</div> ';
						
		$a['action']=base_url()."My_pizza/menu_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
					
		//************ Add action here for insert ********************//
		
		
		$a['heading']="Manage Menu";
		$a['heading1']="Display Menu's Detail";
		$a['link']="My_pizza/display_menudata/menu/m_id/m_status";
		
		$a['text']='    
		             <div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Menu</label>
											<div class="col-sm-8">
											<input class="form-control"  placeholder="Enter menu" id="menu_check" type="text" name="menu" >
										</div>
										
												
										</div>
										 <div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter file</label>
											<div class="col-sm-8">
											<input class="form-control"  placeholder="Enter menu" id="menu_check" type="file" name="file" >
										</div>
										
												
										</div>';
		$a['action']=base_url()."My_pizza/menu_insert";
		}
		$this->load->view('menu',$a);
	}
	public function menu_insert()
	{
		$path=$this->my_lib->image_upload('file');
		
		$insert_array=array(
		'm_name'=>$this->input->post('menu'),
		'm_file'=>"<img src='".base_url()."uploads/banner_img/".$path['file_name']."' height='100' width='100'>"
		);
		$r=$this->my_model->insert_Data('menu',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/menu/?valid=done");
		}else{
			redirect(base_url()."My_pizza/menu/?valid=notdone");
		} 
	}
	public function display_menudata($tbl,$id,$status)
	{
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		'ID'=>"m_id",
		'Menu Name'=>"m_name",	
		'Menu File'=>"m_file",	
				);	
		$redirect=base_url()."My_pizza/display_menudata/$tbl/$id/$status";
		$edit="My_pizza/menu/";
		$heading="Display data of Menus";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
			
	}
	public function menu_update($tbl,$col,$val)
	{
			$insert_array=array(
		'm_name'=>$this->input->post('menu')
		
		);
		
		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/menu/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/menu/?upvalid=notdone");
		}
	
	}

	//****************************SUb MEnu *****************************//


	public function sub_menu()
	{
		
		$this->sidebar("submenu.js");
		$submenu=$this->my_model->select_Data('menu');
		
		$data['link']="My_pizza/sub_display_menudata/sub_menu/s_id/sub_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Manage Sub Menu";
		$data['heading1']="Display Sub Menu's Detail";
		$data['text']='    
		 <!-- Drop down-->
					 <label for="name">Select Your Menu Name</label>
                     <Select class="form-control" name="menu">
					 <option value=""> Select Your Menu name </option>';
					 foreach($submenu as $s_menu){
						 if($s_menu->m_id == $tcs_Data->m_id){ 
					 $data['text'].="<option value='".$s_menu->m_id."' selected   >". $s_menu->m_name ."</option>";
					 	 }
						 else{
							 $data['text'].="<option value='".$s_menu->m_id."'    >". $s_menu->m_name ."</option>";
						 }
					 }
					 
		$data['text'].= '</select>
                     
					 <!-- Drop down close-->
					 
						<br>
		             <label for="name">Chanege Sub Menu Name</label>
                     <input type="text" class="form-control" value="'.$tcs_Data->sub_name.'" name="submenu" id="name" placeholder="Enter your menu name">
                     ';
		$data['action']=base_url()."My_pizza/sub_menu_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage Sub Menu";
		$data['heading1']="Display Sub Menu's Detail";
		$data['text']='    
		             <!-- Drop down-->
					 <label for="name">Select Your Menu Name</label>
                     <Select class="form-control" name="menu">
					 <option value=""> Select Your Menu name </option>';
					 foreach($submenu as $s_menu){
				$data['text'].='<option value="'.$s_menu->m_id.'">'. $s_menu->m_name .'</option>';
					 	 
					 }
					 
		$data['text'].= '</select>
                     
					 <!-- Drop down close-->
					 <br>
					 <label for="name">SubMenu Name</label>
                     <input type="text" class="form-control" id="submenu_check" name="submenu"  placeholder="Enter your submenu name">
                     
					 
					 ';
		$data['action']=base_url()."My_pizza/sub_menu_insert";
		
		}
		$this->load->view('menu',$data);
		//************ action close here******************//
			
	}
	
	public function sub_menu_insert()
	{
		$insert_array=array(
		'm_id'=>$this->input->post('menu'),
		'sub_name'=>$this->input->post('submenu')
		);
		$r=$this->my_model->insert_Data('sub_menu',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/sub_menu/?valid=done");
		}else{
			redirect(base_url()."My_pizza/sub_menu/?valid=notdone");
		}
		
	}
	
	public function sub_display_menudata($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		'Sub Id'=>"s_id",	
		'Menu name'=>"m_name",
		'Sub Menu Name'=>"sub_name",	
				);	
		$redirect=base_url()."My_pizza/sub_display_menudata/$tbl/$id/$status";
		$edit="My_pizza/sub_menu/";
		$heading="Display data of Sub Menus";
		$this->my_lib->show_lib_inner($tbl,'menu',$data,$id,$status,$redirect,$edit,$heading,'m_id');
		//************ action close here******************//
			
	}
	public function sub_menu_update($tbl,$col,$val)
	{
			$insert_array=array(
		'm_id'=>$this->input->post('menu'),
		'sub_name'=>$this->input->post('submenu')
		);
	//	print_r($insert_array);
		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/sub_menu/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/sub_menu/?upvalid=notdone");
		}
	
	}
		//********************************* manage banner ***************************//


			public function banner()
				{
					
					$this->sidebar("banner.js");
					$data['text']='';
					//****************start banner show**************//
					$banner=$this->my_model->select_Data('banner');
					if(count($banner)>0){
				$data['text'].='<div class="cycle-slideshow"  data-cycle-fx="scrollHorz"
				data-cycle-timeout="0"
				data-cycle-prev="#prev"
				data-cycle-next="#next"
				>';
						foreach($banner as $img){
								$data['text'].=					
								str_ireplace("height='100' width='100'"," height='200' width='100%' id='banner'",$img->banner_image);
						}
						$data['text'].='</div><br><br>
			<div class="center">
				<a class="btn btn-info	block col-md-5 ml-5" href=# id="prev">Previous</a> 
				<a class="btn btn-info	block col-md-5" href=# id="next">Next</a>
			<br><br></div>';
								
			
		}		
		//****************stop banner show**************//
		$data['link']="My_pizza/banner_display/banner/b_id/b_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Banner Image";
		$data['heading1']="Display Banner Images";
		$data['text'].='    
					 <label for="name">Previous  Image</label> <br> '.
                     $tcs_Data->banner_image
						.'<br>
		             <label for="name">Change Banner Image</label>
                     <input type="file" class="form-control" name="banner"multiple  placeholder="Enter your menu name">
                     ';
		$data['action']=base_url()."My_pizza/banner_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu')."/?oldimg=".$tcs_Data->banner_image;
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage Banner Image";
		$data['heading1']="Display Banner Images";
		$data['text'].='    
					 <br>
					 <label for="name">Select Banner Image</label>
                     <input type="file" class="form-control" name="banner" multiple  placeholder="Enter your menu name">
                     
					 
					 ';
		$data['action']=base_url()."My_pizza/banner_insert";
		
		}


		
		$this->load->view('menu',$data);
		//************ action close here******************//
		
	}
	
	public function banner_insert()
	{
		$path=$this->my_lib->image_upload('banner');
		
			$insert_array=array(
			'banner_image'=>"<img src='".base_url()."uploads/banner_img/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->insert_Data('banner',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/banner/?valid=done");
		}else{
			redirect(base_url()."My_pizza/banner/?valid=notdone");
		}
		
	}
	
	public function banner_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		'Banner Id'=>"b_id",
		'Banner Image'=>"banner_image",	
				);	
		$redirect=base_url()."My_pizza/banner_display/$tbl/$id/$status";
		$edit="My_pizza/banner/";
		$heading="Display data of Banner Image";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	
	}
	public function banner_update($tbl,$col,$val)
	{
		$old_img=$this->input->get('oldimg');
		$data=str_replace("<img src='","",$old_img);
		$array=explode("'",$data);
		unlink(str_ireplace(base_url(),"",$array[0]));
		$path=$this->my_lib->image_upload('banner');
		$insert_array=array(
			'banner_image'=>"<img src='".base_url()."uploads/banner_img/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/banner/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/banner/?upvalid=notdone");
		}
	
	}
	
	//********************************* manage logo ***************************//

	public function logo()
	{
		$this->sidebar("logo.js");
		//************ Add action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Manage logo";
		$data['heading1']="Display logo's Detail";
		$data['link']="My_pizza/logo_display_data/logo/l_id/l_status";
		$data['text']='    
					 <label for="name">Previous  Image</label> <br> '.
                     $tcs_Data->logo_image
						.'<br>
		             <label for="name">Change logo Image</label>
                     <input type="file" class="form-control" name="logo"multiple  placeholder="Enter your menu name">
                     ';
		$data['action']=base_url()."My_pizza/logo_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu')."/?oldimg=".$tcs_Data->logo_image;
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage Logo";
		$data['heading1']="Display logo's Detail";
		$data['link']="My_pizza/logo_display_data/logo/l_id/l_status";
		$data['text']='    
		             <label for="name">Logo Name</label>
                     <input type="file" class="form-control" name="logo" id="logo" placeholder="select imges">
                     ';
		$data['action']=base_url()."My_pizza/logo_insert";
		
		}
		$this->load->view('menu',$data);
		//************ action close here******************//
		
	}
	public function logo_insert()
	{
		$path=$this->my_lib->image_upload('logo');
		
			$insert_array=array(
			'logo_image'=>"<img src='".base_url()."uploads/banner_img/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->insert_Data('logo',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/logo/?valid=done");
		}else{
			redirect(base_url()."My_pizza/logo/?valid=notdone");
		}
		
	}
	
	public function logo_display_data($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		'ID'=>"l_id",
		'Logo image'=>"logo_image",	
				);	
		$redirect=base_url()."My_pizza/logo_display_data/$tbl/$id/$status";
		$edit="My_pizza/logo/";
		$heading="Display data of Images";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
		
	}
	public function logo_update($tbl,$col,$val)
	{
		$old_img=$this->input->get('oldimg');
		$data=str_replace("<img src='","",$old_img);
		$array=explode("'",$data);
		unlink(str_ireplace(base_url(),"",$array[0]));
		$path=$this->my_lib->image_upload('logo');
		$insert_array=array(
			'logo_image'=>"<img src='".base_url()."uploads/banner_img/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/logo/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/logo/?upvalid=notdone");
		}
	
	}

		


//********************************* manage category ***************************//


public function category()
	{
		
		$this->sidebar("category.js");
		$category=$this->my_model->select_Data('sub_menu');
		$data['text']='';
		//****************start banner show**************//
		$data['link']="My_pizza/category_display/category/c_id/c_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update category Data";
		$data['heading1']="Display category Data";
		$data['text'].='    
					 <label for="name">Change Category value</label>
                     <input type="text" class="form-control" name="category" multiple value="'.$tcs_Data->c_name.'"  placeholder="Enter your category name">
                     ';
		$data['action']=base_url()."My_pizza/category_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage category data";
		$data['heading1']="Display category Records";
		$data['text']='    
		             <!-- Drop down-->
					 <label for="name">Select Your Subemenu Name</label>
                     <Select class="form-control" name="Subemenu">
					 <option value=""> Select Your Subemenu name </option>';
					 foreach($category as $s_menu){
					$data['text'].='<option value="'.$s_menu->s_id.'">'. $s_menu->sub_name .'</option><br>';
					 
					 }
					 
		$data['text'].='    
					</select>
					 <label for="name" class="form-group">Input  category</label>
                     <input type="text" class="form-control" name="category" id="catogery_check" multiple  placeholder="Enter your categery name">
						
				 
					 ';
					 
		$data['action']=base_url()."My_pizza/category_insert";
		
		}

		$this->load->view('menu',$data);
		//************ action close here******************//
		
	}
	
	public function category_insert()
	{
		echo $this->input->post('Subemenu');
			$insert_array=array(
			's_id'=>$this->input->post('Subemenu'),
			'c_name'=>$this->input->post("category")
			);
			

		$r=$this->my_model->insert_Data('category',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/category/?valid=done");
		}else{
			redirect(base_url()."My_pizza/category/?valid=notdone");
		}
		
	}
	
	public function category_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		
		'category ID'=>"c_id",
		'Submenu Name'=>"sub_name",
		'category Name'=>"c_name",	
				);	
		$redirect=base_url()."My_pizza/category_display/$tbl/$id/$status";
		$edit="My_pizza/category/";
		$heading="Display data of category Records";
		$tbl2="sub_menu";
		$join_id="s_id";
		$this->my_lib->show_lib_inner1($tbl,$tbl2,$data,$id,$status,$redirect,$edit,$heading,$join_id);
										
		//************ action close here******************//
	
	}
	public function category_update($tbl,$col,$val)
	{
		$insert_array=array(
			'c_name'=>$this->input->post("category")
			);


		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/category/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/category/?upvalid=notdone");
		}
	
	}

		
		


//********************************* manage pizza types ***************************//

		

public function pizza_types()
	{
		
		$this->sidebar("pizza_types.js");
		$data['text']='';
		//****************start banner show**************//
		$data['link']="My_pizza/pizza_display/pizza_types/pizza_id/pizza_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Pizza_types Data";
		$data['heading1']="Display Pizza_types Data";
		$data['text'].='    
					 <label for="name">Change Pizza_types value</label>
                     <input type="text" class="form-control" name="pizza" multiple value="'.$tcs_Data->pizza_name.'"  placeholder="Enter your pizza name">
                     ';
		$data['action']=base_url()."My_pizza/pizza_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage Pizza_types data";
		$data['heading1']="Display Pizza_types Records";
		$data['text'].='    
					 <br>
					 <label for="name" class="form-group">Input  Pizza_types</label>
                     <input type="text" class="form-control" name="pizza" id="" multiple  placeholder="Enter your Pizza name">
                     
					 
					 ';
		$data['action']=base_url()."My_pizza/pizza_insert";
		
		}


		
		$this->load->view('menu',$data);
		//************ action close here******************//
		
	}
	
	public function pizza_insert()
	{
		
		
			$insert_array=array(
			'pizza_name'=>$this->input->post("pizza")
			);

		$r=$this->my_model->insert_Data('pizza_types',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/pizza_types/?valid=done");
		}else{
			redirect(base_url()."My_pizza/pizza_types/?valid=notdone");
		}
		
	}
	
	public function pizza_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		'Pizza Id'=>"pizza_id",
		'Pizza Name'=>"pizza_name",	
				);	
		$redirect=base_url()."My_pizza/pizza_display/$tbl/$id/$status";
		$edit="My_pizza/pizza_types/";
		$heading="Display data of pizza_types Records";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	
	}
	public function pizza_update($tbl,$col,$val)
	{
		$insert_array=array(
			'pizza_name'=>$this->input->post("pizza")
			);


		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/pizza_types/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/pizza_types/?upvalid=notdone");
		}
	
	}

	
	//********************************* manage product ***************************//


		public function product()
	{
		
		$this->sidebar("product.js");
		$submenu=$this->my_model->select_Data('menu');
		$cat=$this->my_model->select_Data('category');
		$tcs_pizza=$this->my_model->select_Data('pizza_types');
		
		
		//****************start banner show**************//
		$data['link']="My_pizza/product_display/product/p_id/p_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Product Data";
		$data['heading1']="Display Product Data";
		$data['text']='    
		 <!-- Drop down-->
					 <label for="name">Select Your Menu Name</label>
                     <Select class="form-control" name="menu">
					 <option value=""> Select Your Menu name </option>';
					 foreach($submenu as $s_menu){
						 if($s_menu->m_id == $tcs_Data->m_id){ 
					 $data['text'].="<option value='".$s_menu->m_id."' selected   >". $s_menu->m_name ."</option>";
					 	 }
						 else{
							 $data['text'].="<option value='".$s_menu->m_id."'    >". $s_menu->m_name ."</option>";
						 }
					}
		  
		$data['text'].= '</select>
          <!-- Drop down-->		       
					 <!-- Drop downfor category-->
					 <label for="name">Select Your Category Name</label>'; 
					$data['text'].= '<Select class="form-control" name="category">
					 <option value=""> Select Your category name </option>';
					 foreach($cat as $cato)
					$data['text'].='<option value="'.$cato->c_id.'">'. $cato->c_name .'</option>';
					
		$data['action']=base_url()."My_pizza/product_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage Product data";
		$data['heading1']="Display product Records";
		
		$data['text']='    
		 <!-- Drop down-->
					 <label for="name">Select Your Menu Name</label>
                     <Select class="form-control" id="menu" name="menu">
					 <option value=""> Select Your Menu name </option>';
					 foreach($submenu as $s_menu){
						
					 $data['text'].="<option value='".$s_menu->m_id."'   >". $s_menu->m_name ."</option>";
					 	
					 }
					 
		$data['text'].= '</select>
                     
					 <!-- Drop down close for menu-->
					 <!-- Drop down start for sub menu-->
					 <br>
					 <label for="name">Select Submenu </label><br>
					 <label for="name" id="result" class="col-md-12"> </label>';
					
							
	$data['text'].= '</select>
					<br><br>
				<!-- Drop downfor Pizza types-->
					 <label for="name">Select Your Pizza types Name</label>';
					 
					if(count($tcs_pizza)>0){	 
					$data['text'].= '<Select class="form-control" name="pizza">
					 <option value=""> Select Your Pizza types name </option>';
					 foreach($tcs_pizza as $p){
					$data['text'].='<option value="'. $p->pizza_id .'">'. $p->pizza_name .'</option>';
					 	 
					 }
					 
		$data['text'].= '</select>';
				}else{
		$data['text'].= '<BR><label for="name" class="bg bg-danger text-default md-col-12">No Pizza types You Have YET! <a href="'.base_url().'My_pizza/Pizza_types"> Click Here To insert </a></label>';
				}   
		$data['action']=base_url()."My_pizza/product_insert2/";
		
		}


		
		$this->load->view('menu',$data);
		//************ action close here******************//
			
	}
	
	public function product_insert2()
	{
		redirect(base_url()."My_pizza/product2/?menu=".$this->input->post('menu')."&submenu=".$this->input->post('submenu')."&category=".$this->input->post('category')."&pizza_types=".$this->input->post("pizza"));
		
	}
	
	
	

public function product2()
	{
		
		$this->sidebar("product.js");
		$data['text']='';
		//****************start banner show**************//
		$data['link']="My_pizza/product_display/product/p_id/p_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update category Data";
		$data['heading1']="Display category Data";
		$data['text'].='    
					 <label for="name">Chanege Category value</label>
                     <input type="text" class="form-control" name="category" multiple value="'.$tcs_Data->c_name.'"  placeholder="Enter your menu name">
                     ';
		$data['action']=base_url()."My_pizza/category_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage pizza data";
		$data['heading1']="Display pizza Records";
		$data['text'].='    
					 <br>
					 <label for="name">Input  pizza Name</label><br><br>
                     <input type="text" class="form-control" name="pname"   placeholder="Enter your pizza name">
                     <br>
					 <label for="name">Input  pizza Image</label><br><br>
                     <input type="file" class="form-control" name="f1[]" multiple  placeholder="select images">
                     
					   <br>
					 <label for="name">Select   pizza Price</label><br><br>
                     <input type="number" class="form-control" name="pprice" multiple  placeholder="Enter your Pizza price">
                    <br>
					 <label for="name"> pizza Discount in(%)</label><br><br>
                     <input type="number" class="form-control" name="pdiscount" multiple  placeholder="Enter your pizza Discount in(%)">
                    <br>
					 <label for="name"> pizza Tag For User </label><br><br>
                     <input type="text" class="form-control col-md-12" data-role="tagsinput"  name="ptag" multiple  placeholder="Enter your pizza Tag For User"/>
                      <br>
					   <br>
					<br>
						<label for="name" control-label>Add  pizza size</label><br><br>
						<label class="btn btn-lg btn-danger">
						<input type="checkbox"   autocomplete="off" value="Small" name="t8[]"></label>							
						<label class="btn btn-lg btn-success">
						<input type="checkbox"   autocomplete="off" value="Medium" name="t8[]"></label> 
						<label class="btn btn-lg btn-info">
						<input type="checkbox"   autocomplete="off" value="Large" name="t8[]">
						</label>
					<br>
					<br>
					  <label for="name">Add   product Description</label>
                     <br>
                     <br>
					  <div class="col-md-12">
                            <div class="card card-accent-theme">
                                <div class="card-body">
                                    
                                    <br/>
                                    
									<textarea  id="summernote" name="discription">Hello Summernote                     
					 
						<div class="row row-eq-height product-overview-section">
                            <div class="col-md-6">
                                <img class="product-overview-img" src="<?= base_url(); ?>assets/img/test_overview/1.jpg" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="col-md-6">
                                <div class="product-overview-text">
                                    <h5 class="product-overview-title">The only waterproof Full HD smartphone</h5>
                                    <p class="product-overview-desc">Waterproof**, dust resistant and with tough tempered glass coated with an anti-shatter film, this Android smartphone is much tougher than it looks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row row-eq-height product-overview-section">
                            <div class="col-md-6">
                                <div class="product-overview-text text-right">
                                    <h5 class="product-overview-title">Ultra entertainment. Ultra business. An ultra experience. Experience 60% more</h5>
                                    <p class="product-overview-desc">From reading e-books to browsing web pages – the Full HD display has been optimized so you can see and experience 60% more than most smartphones.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="product-overview-img" src="<?= base_url(); ?>assets/img/test_overview/2.jpg" alt="Image Alternative text" title="Image Title" />
                            </div>
                        </div>
						</textarea>
						
								</div>
								</div>
								</div>
					 
					 
					 ';
		$data['action']=base_url()."My_pizza/Product_insert/?menu=".$this->input->get('menu')."&submenu=".$this->input->get('submenu')."&category=".$this->input->get('category')."&pizza_types=".$this->input->get("pizza_types");
		
		}
		
		$this->load->view('menu',$data);
		//************ action close here******************//
		}
	
	
	
	
	public function product_submenu_fetch()
	{
		$id=$this->input->post('value');
		$submenu1=$this->my_model->get_where('sub_menu','m_id',$id);
		if(count($submenu1)>0){
		echo '<Select class="form-control" name="submenu" id="submenu_cat"  onchange="function_cat();">
					 <option value=""> Select Your Sub Menu name </option>';
					 foreach($submenu1 as $s_menu1){
						
					echo "<option value='".$s_menu1->s_id ."'   >". $s_menu1->sub_name ."</option>";
					 	
					 }
					 
                     
		echo '</select>';
		echo '<br><p  id="msg1"></p>';
		}
			else{
				echo "No Data Available Please Input To <a href='".base_url()."My_pizza/sub_menu'> Click Here</a>";
			}
	}
	 public function catory_fetch()
	 {
		 $id=$this->input->post("struser");
		// echo "select * from category where s_id='$id'";
		 $c=$this->db->query("select * from category where s_id='$id'");	
		$datas=$c->result();
		
		
		echo '
			<label for="name">Select Category </label><br>
			<label for="name"  class="col-md-12"> </label>
					 
		<select class="form-control" name="category">';
		foreach($datas as $d1){
		$cid=$d1->c_id;
		$cname=$d1->c_name;
		echo '
		<option value="'.$cid.'">'.$cname.'</option>
		';
		}
	echo '	</select>';
		
		
		
				
		
	 }

	public function product_insert()
	{
		$img=$_FILES['f1']['tmp_name'];
		$path1=array();
		foreach($img as $key=>$value)
		{
			
			$name=$_FILES['f1']['name'][$key];
			$tmp=$_FILES['f1']['tmp_name'][$key];
			$path='pro_img/'.$name;
			 $path1[].="<img src='".base_url()."uploads/pro_img/".$name."' height='50' width='50'>";
			move_uploaded_file($tmp,$path);
		}
		$img1=implode(",",$path1);
		print_r($img1);
		
			 $insert_array=array(
			'm_id'=>$this->input->get("menu"),
			's_id'=>$this->input->get("submenu"),
			'c_id'=>$this->input->get("category"),
			'pizza_id'=>$this->input->get("pizza_types"),
			'p_name'=>$this->input->post("pname"),
			'p_img'=>$img1,
			
			'p_price'=>$this->input->post("pprice"),
			'p_discount'=>$this->input->post("pdiscount"),
			'p_tag'=>$this->input->post("ptag"),
			 'p_pizza_size'=>implode("/",$this->input->post('t8')),
			'p_discription'=>$this->input->post("discription")
			);
		
		 $r=$this->my_model->insert_Data('product',$insert_array);
			//print_r($insert_array);
		 if($r=='1'){
			 redirect(base_url()."My_pizza/product/?valid=done");
		 }else{
			redirect(base_url()."My_pizza/product/?valid=notdone");
		 }
		 
		
	}
	
	public function product_display($tbl,$id,$status)
	{
	
		$this->sidebar("product.js");
		// ************ Add action here********************//
		$data=array(	
		
		'Pizza Id'=>"p_id",
		'MENU NAME'=>"m_name",	
		'SUBMENU NAME'=>"sub_name",	
		'CATEGORY NAME'=>"c_name",	
		'PIZZA TYPE NAME'=>"pizza_name",	
		'PIZZA IMAGES'=>"p_img",	
		'PIZZA PRICE'=>"p_price",	
		'PIZZA DISCOUNT'=>"p_discount",	
		'PIZZA TAG'=>"p_tag",	
		'PIZZA SIZE'=>"p_pizza_size",
		'PIZZA DISCRIPTION'=>"p_discription",	
		);	
		$redirect=base_url()."My_pizza/product_display/$tbl/$id/$status";
		$edit="My_pizza/product/";
		$heading="Display data of product Records";
		$this->my_lib->show_lib2($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
		
	}
	public function product_update($tbl,$col,$val)
	{
		$insert_array=array(
			'c_id'=>$this->input->post("category"),
			'pizza_id'=>$this->input->post("pizza_types"),
			'pizza_name'=>$this->input->post("pname")
			
			);


		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/product/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/product/?upvalid=notdone");
		}
	
	}


	public function delete_data($tbl,$id,$idv)
	{
		$r=$this->my_model->delete_data($tbl,$id,$idv);
		$re=$this->input->get("re");
		if($r){
		redirect($re."/?data=success");}
	}
	//***********************For status Update*********************//
		public function status($tbl,$col,$val,$status_col,$st_value)
	{
		if($st_value=="block")
		{
			$data = array(
                $status_col=> "unblock"
            );
		}else{
			
			$data = array(
                $status_col=> "block"
            );
		}
		$r=$this->my_model->update_record($tbl,$data,$col,$val);
	 	$re=$this->input->get("sre");
		if($r){
		redirect($re."/?data=true");
		}
	}
	
	
	//***************ajax useg menu *******************************//
	 public function menu_check()
	  {
		 $menu=$this->input->post("menu");
		 $r=$this->db->query("select * from menu where m_name='$menu'");
		 if($r->num_rows()>=1)
		 {
			 echo "menu exit";
		 }
		 else
		 {
			 echo "menu not exit";
		 }
	  }

	  //***************************SUBMENU AJAX START ADMIN SITE *************************************//

		 public function submenu_check1()
	  {
		$submenu=$this->input->post("submenu");
		 $r=$this->db->query("select * from sub_menu where sub_name='$submenu'");
		 if($r->num_rows()>=1)
		 {
			 echo "submenu exit";
		 }
		 else
		 {
			 echo "submenu not exit ";
		 }
	  }
	  
	  //***************************COTEGERY  START ADMIN SITE *************************************//

	 public function categry_check1()
	  {
		 $category=$this->input->post("category");
		 $r=$this->db->query("select * from category where c_name='$category'");
		 if($r->num_rows()>=1)
		 {
			 echo "category exit";
		 }
		 else
		 {
			 echo "category not exit";
		 }
	  }
	public function reg_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		'Reg Id'=>"r_id",
		'Reg Name'=>"r_name",	
		'Reg Last Name'=>"r_lname",	
		'Reg Email'=>"r_email",	
		'Reg Password'=>"r_password",	
				);	
		$redirect=base_url()."My_pizza/reg_display/$tbl/$id/$status";
		$edit="Pizza/reg/";
		$heading="Display data of Reg_display Records";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	
	}
		public function feedback_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		'Feedabck Id'=>"f_id",
		'Feedabck Name'=>"f_name",		
		'Feedabck Email'=>"f_email",	
		'Feedabck Number'=>"f_number",	
		'Feedabck Password'=>"f_msg",	
				);	
		$redirect=base_url()."My_pizza/feedback_display/$tbl/$id/$status";
		$edit="Pizza/feedback/";
		$heading="Display data of Feedabck Records";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	
	}
	
			//********************************* manage gallery ***************************//


	//**************************Gallery Start *****************************************
		
			public function gallery()
				{
					
					$this->sidebar("");
					$data['text']='';
					//****************start gallery show**************//
					$banner=$this->my_model->select_Data('gallery');
					if(count($banner)>0){
				$data['text'].='<div class="cycle-slideshow"  data-cycle-fx="scrollHorz"
				data-cycle-timeout="0"
				data-cycle-prev="#prev"
				data-cycle-next="#next"
				>';
						foreach($banner as $img){
								$data['text'].=					
								str_ireplace("height='100' width='100'"," height='200' width='100%' id='gallery'",$img->gallery_image);
						}
						$data['text'].='</div><br><br>
			<div class="center">
				<a class="btn btn-info	block col-md-5 ml-5" href=# id="prev">Previous</a> 
				<a class="btn btn-info	block col-md-5" href=# id="next">Next</a>
			<br><br></div>';
								
			
		}		
		//****************stop gallery show**************//
		$data['link']="My_pizza/gallery_display/gallery/g_id/g_status";
		//************ Edit action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $tcs_Data){}
		$data['heading']="Update Gallery Image";
		$data['heading1']="Display Gallery Images";
		$data['text'].='    
					 <label for="name">Previous  Image</label> <br> '.
                     $tcs_Data->gallery_image
						.'<br>
		             <label for="name">Change gallery Image</label>
                     <input type="file" class="form-control" name="gallery" multiple  placeholder="Enter your gallery name">
                     ';
		$data['action']=base_url()."My_pizza/gallery_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu')."/?oldimg=".$tcs_Data->gallery_image;
		}else{
		
		//************ Add action here for insert ********************//
		$data['heading']="Manage gallery Image";
		$data['heading1']="Display gallery Images";
		$data['text'].='    
					 <br>
					 <label for="name">Select gallery Image</label>
                     <input type="file" class="form-control" name="gallery" multiple  placeholder="Enter your gallery name">
                     
					 
					 ';
		$data['action']=base_url()."My_pizza/gallery_insert";
		
		}


		
		$this->load->view('menu',$data);
		//************ action close here******************//
		
	}
	
	public function gallery_insert()
	{
		$path=$this->my_lib->gallery_upload('gallery');
		
			$insert_array=array(
			'gallery_image'=>"<img src='".base_url()."uploads/gallery_image/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->insert_Data('gallery',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/gallery/?valid=done");
		}else{
			redirect(base_url()."My_pizza/gallery/?valid=notdone");
		}
		
	}
	
	public function gallery_display($tbl,$id,$status)
	{
		
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		
		'Gallery Id'=>"g_id",
		'Gallery Image'=>"gallery_image",	
				);	
		$redirect=base_url()."My_pizza/gallery_display/$tbl/$id/$status";
		$edit="My_pizza/gallery/";
		$heading="Display data of Gallery Image";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	
	}
	public function gallery_update($tbl,$col,$val)
	{
		$old_img=$this->input->get('oldimg');
		$data=str_replace("<img src='","",$old_img);
		$array=explode("'",$data);
		unlink(str_ireplace(base_url(),"",$array[0]));
		$path=$this->my_lib->gallery_upload('gallery');
		$insert_array=array(
			'gallery_image'=>"<img src='".base_url()."uploads/gallery_image/".$path['file_name']."' height='100' width='100'>"
			);

		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/gallery/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/gallery/?upvalid=notdone");
		}
	
	}
	
	//**************************Gallery close*****************************************
	
	
	
	  public function coupon()
	{
		$this->sidebar("");
		//************ Add action here for update ********************//
		if($this->input->get('edit')=='true'){
			//**********fetch data from table
		$r=$this->my_model->get_where($this->input->get('tbl'),$this->input->get('col'),$this->input->get('valu'));
		foreach($r as $Data){}
		$a['heading']="Update Manage Coupan";
		$a['heading1']="Display Coupan's Detail";
		$a['link']="My_pizza/display_coupondata/coupon/coupon_id/coupon_status";
		$a['text']='    
		            
		             <div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Coupon Name</label>
											<div class="col-sm-8">
											<input class="form-control" value="'.$Data->coupon_name.'"  placeholder="Enter Coupon Name"  type="text" name="menu" >
										<label style="font-size:20px; color:blue;" id="msg"></label>
										</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Coupon Value</label>
											<div class="col-sm-8">
											<input class="form-control" value="'.$Data->coupon_value.'"  placeholder="Enter Coupon Value"  type="text" name="menu1" >
										<label style="font-size:20px; color:blue;" id="msg"></label>
										</div>
										</div> ';
						
		$a['action']=base_url()."My_pizza/coupon_update/".$this->input->get('tbl')."/".$this->input->get('col')."/".$this->input->get('valu');
		}else{
					
		//************ Add action here for insert ********************//
		
		
		$a['heading']="Manage Coupon";
		$a['heading1']="Display Coupon's Detail";
		$a['link']="My_pizza/display_Coupon/coupon/coupon_id/coupon_status";
		
		$a['text']='    
		             <div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Coupon Name</label>
											<div class="col-sm-8">
											<input class="form-control"  placeholder="Enter Coupon name"  type="text" name="menu" required>
										</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Enter Coupon Value</label>
											<div class="col-sm-8">
											<input class="form-control"  placeholder="Enter coupon value"  type="text" name="menu1" required >
										</div>
										</div>';
		$a['action']=base_url()."My_pizza/coupon_insert";
		}
		$this->load->view('menu',$a);
	}
	public function coupon_insert()
	{
		$insert_array=array(
		'Coupon_name'=>$this->input->post('menu'),
		'coupon_value'=>$this->input->post('menu1')
		);
		$r=$this->my_model->insert_Data('coupon',$insert_array);
		if($r=='1'){
			redirect(base_url()."My_pizza/coupon/?valid=done");
		}else{
			redirect(base_url()."My_pizza/coupon/?valid=notdone");
		} 
	}
	public function display_coupon($tbl,$id,$status)
	{
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		'ID'=>"coupon_id",
		'Coupon Name'=>"coupon_name",	
		'Coupon Value'=>"coupon_value",	
				);	
		$redirect=base_url()."My_pizza/display_coupon/$tbl/$id/$status";
		$edit="My_pizza/coupon/";
		$heading="Display data of coupon";
		$this->my_lib->show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading);
		//************ action close here******************//
	}
	public function coupon_update($tbl,$col,$val)
	{
			$insert_array=array(
		'coupon_name'=>$this->input->post('menu'),
		'coupon_value'=>$this->input->post('menu1')
		
		);
		
		$r=$this->my_model->update_record($tbl,$insert_array,$col,$val);
		if($r=='1'){
			redirect(base_url()."My_pizza/coupon/?upvalid=done");
		}else{
			redirect(base_url()."My_pizza/coupon/?upvalid=notdone");
		}
	
	}
	public function Order()
	{
		$this->head("");
		$this->sidebar("");
		$a['action']=base_url()."My_pizza/order_add";
		$a["heading1"]="Manage Order Insert";
		$a['link']="My_pizza/display_order/orders/user_id/";
		$this->load->view("order",$a);	
		
	}
	public function order_add()
	{
		$order_data=array(
		'user_id' => getUserId(),
				'type' => "Online",
				'flat_no' => $order['flat_no'],
				'address' => $order['address'],
				'landmark' => $order['landmark'],
				'zipcode' => $order['pincode'],
				'latitude' => $order['latitude'],
				'longitude' => $order['longitude'],
				'distance' => $order['distance']['distance'],
				'note' 	    => $order['note'],
				'amount' => $this->cart->total(),
				'shipping_charge' => $shippingCharge['charge'],
				'created' => date("Y-m-d H:i:s"),
		
		);
		$r=$this->my_model->insert_Data('orders',$order_data);
		if($r=='1')
		{
			redirect(base_url()."My_pizza/order/?oder=done");
		}
		else
		{
			redirect(base_url()."My_pizza/order/?oder=notdone");
		}
	}
	public function display_order($tbl,$id)
	{
		$this->sidebar("");
		// ************ Add action here********************//
		$data=array(	
		'ID'=>"user_id",
		'User ID'=>getUserId(),	
		'Type'=>"Online	",	
		'Flat No'=>$order['flat_no'],	
		'Address'=>$order['address'],	
		'Landmark'=>$order['landmark'],	
		'Zipcode'=>$order['pincode'],	
		'Latitude'=>$order['latitude'],	
		'Longitude'=> $order['longitude'],	
		'Distance'=> $order['distance']['distance'],	
		'Amount'=> $this->cart->total(),	
		'Shipping Charge'=>$shippingCharge['charge'],	
		'Status'=>$order['status'],	
		'Note'=>$order['note'],	
		'Created	'=>date("Y-m-d H:i:s"),	
				);	
		$redirect=base_url()."My_pizza/display_order/$tbl/$id";
		$edit="My_pizza/orders/";
		$heading="Display data of order";
		$this->my_lib->show_order($tbl,$data,$id);
		//************ action close here******************//
	}
	public function user_data()
	{
		$this->head("");
		$this->sidebar("");
		$a['action']=base_url()."My_pizza/insert_order";
	
			$this->load->view("user_data",$a);
		
		
	
	}
	
	
	  
}
?>