<?php 
class pizza_lib
{
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
		$ci->email->message('<a href="http://localhost/Pizza_hut/Pizza/c_password/?email='.$a.'">Click here</a>');
		if($ci->email->send())
		{
			echo "send mail";
		}
		else
		{
					show_error($ci->email->print_debugger());
		}
	}
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
	
	
	
	
	
}
?>
