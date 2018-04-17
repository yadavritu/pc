<?php 
class My_lib 
{
	//show main
	public function show_lib($tbl,$data,$id,$status,$redirect,$edit,$heading)
	{
		$ci=& get_instance();
		$ci->load->model('my_model');
		$r['records']=$ci->my_model->select_Data($tbl);
		$r['lib_col']=$data;
		$r['status']=$status;
		$r['redirect']=$redirect;
		$r['edit']=$edit;
		$r['tbl']=$tbl;
		$r['id']=$id;
		$r['heading']=$heading;
		$ci->load->view('all_show_data',$r);
		
	}
	public function show_lib2($tbl,$data,$id,$status,$redirect,$edit,$heading)
	{
		$ci=& get_instance();
		$ci->load->model('my_model');
		$r['records']=$ci->my_model->select_Data2();
		$r['lib_col']=$data;
		$r['status']=$status;
		$r['redirect']=$redirect;
		$r['edit']=$edit;
		$r['tbl']=$tbl;
		$r['id']=$id;
		$r['heading']=$heading;
		$ci->load->view('all_show_data',$r);
		
	}
	public function show_lib_inner($tbl,$tbl2,$data,$id,$status,$redirect,$edit,$heading,$join_id)
	{
		$ci=& get_instance();
		$ci->load->model('my_model');
		$r['records']=$ci->my_model->select_Data_join($tbl,$tbl2,$join_id);
		$r['lib_col']=$data;
		$r['status']=$status;
		$r['redirect']=$redirect;
		$r['edit']=$edit;
		$r['tbl']=$tbl;
		$r['id']=$id;
		$r['heading']=$heading;
		//print_r($r['records']);
		$ci->load->view('all_show_data',$r);
		
	}
	public function show_lib_inner1($tbl,$tbl2,$data,$id,$status,$redirect,$edit,$heading,$join_id)
	{
		$ci=& get_instance();
		$ci->load->model('my_model');
		$r['records']=$ci->my_model->select_Data_cat($tbl,$tbl2,$join_id);
		$r['lib_col']=$data;
		$r['status']=$status;
		$r['redirect']=$redirect;
		$r['edit']=$edit;
		$r['tbl']=$tbl;
		$r['id']=$id;
		$r['heading']=$heading;
		//print_r($r['records']);
		$ci->load->view('all_show_data',$r);
		
	}
	//*******************inner join select using array*******//
	public function show_lib_inner_array($tbl,$data,$id,$status,$redirect,$edit,$heading,$join_id)
	{
		$ci=& get_instance();
		$ci->load->model('my_model');
		$r['records']=$ci->my_model->select_Data_join($tbl,$join_id);
		$r['lib_col']=$data;
		$r['status']=$status;
		$r['redirect']=$redirect;
		$r['edit']=$edit;
		$r['tbl']=$tbl;
		$r['id']=$id;
		$r['heading']=$heading;
		//print_r($r['records']);
		$ci->load->view('all_show_data',$r);
		
	}
	public function image_upload($img_name)
	{
		$ci=& get_instance();
		$fi['upload_path']="banner_img/";
		$fi['allowed_types']="jpeg|bmp|png|gif|jpg|";
		$fi['max_size']=7000;
		$fi['encrypt_name']=TRUE;
		$fi['remove_space']=TRUE;
		$ci->load->library('upload',$fi);
		if(!$ci->upload->do_upload($img_name))
		{
			echo $ci->upload->display_errors();
		}
		else
		{
			return $ci->upload->data();
		}
	}
		public function gallery_upload($img_name)
	{
		$ci=& get_instance();
		$fi['upload_path']="gallery_image/";
		$fi['allowed_types']="jpeg|bmp|png|gif|jpg|";
		$fi['max_size']=7000;
		$fi['encrypt_name']=TRUE;
		$fi['remove_space']=TRUE;
		$ci->load->library('upload',$fi);
		if(!$ci->upload->do_upload($img_name))
		{
			echo $ci->upload->display_errors();
		}
		else
		{
			return $ci->upload->data();
		}
	}
		//ajax useg for
	public function mail_check($e1)
	{
		$ci=get_instance();
		//$ci->load->database('');
		$r=$ci->db->query("select * from login where r_email='$e1'");
		if($r->num_rows()>=1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function sendMail($a)
	{
		$ci=& get_instance();
		$confing=array(
		
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.gmail.com',
			'smtp_port'=>465,
			'smtp_user'=>'tcs201718@gmail.com',
			'smtp_pass'=>'tcsadminpswd',
			'mailtype'=>'html',
			'charset'=>'iso-8859-1',
			'wordwrap'=>true,
		);
		$ci->load->library('email',$confing);
		$ci->email->set_newline("\r\n");
		$ci->email->from("tcs201718@gmail.com");
		$ci->email->to($a);
		$ci->email->message('<a href="/pc/My_pizza/c_password/?email='.$a.'">Click here</a>');
		if($ci->email->send())
		{
			echo "send mail";
		}
		else
		{
			show_error($ci->email->print_debugger());
		}
	}
	
	
}
	
?>