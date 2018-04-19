<?php
class pizza_model extends CI_model
{
	public function reg_insert($a,$b)
	{
		$this->load->database('');
		$r=$this->db->insert($a,$b);
		return $r;
	}
	public function login_model($tbl,$em)
	{
		$this->load->database('');
		$r=$this->db->query("select * from $tbl where r_email='$em'");
		return $r;
	}
	public function select_Data($tbl,$status_col)
	{
		$this->db->where($status_col,'unblock');
		$r=$this->db->get($tbl);
		return $r->result();
	} 
	public function get_where($tbl,$col1,$value1,$col2,$value2)
	{			
		$this->db->where($col1,$value1);
		$this->db->where($col2,$value2);
		$r = $this->db->get($tbl);
		return $r->result();
	}
	
	public function up_model($tbl,$email,$password)
	{
		$this->load->database('');
		$this->db->query("update $tbl set r_password='$password' where r_email='$email'");
	}
	
	
	public function getRows($id = ''){
        $this->db->select('p_id,p_name,p_img,p_price');
        $this->db->from('product');
        if($id){
            $this->db->where('p_id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('p_name','asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    //insert transaction data
    public function insertTransaction($data = array()){
        $insert = $this->db->insert('payments',$data);
        return $insert?true:false;
    }
	public function update_password_change($p2,$id)
	{
		$this->load->database();
		$this->db->query("update reg set r_password='$p2' where r_id='$id'");
	}
}
?>