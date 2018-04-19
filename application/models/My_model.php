	<?php
class My_model extends CI_model
{
	public function insert_Data($tbl,$data)
	{
		$r=$this->db->insert($tbl,$data);
		return $r;
	}
		public function select_Data2()
	{
		$r=$this->db->query("select a.p_discription,
		a.p_status,a.p_id,a.p_price,a.p_name,a.p_img,
		a.p_discount,a.p_tag,a.p_pizza_size, m.m_name,c.c_name,s.sub_name,p.pizza_name 
		from product a INNER JOIN menu m On a.m_id=m.m_id 
		INNER JOIN category c on a.c_id=c.c_id 
		INNER JOIN pizza_types p on a.pizza_id=p.pizza_id 
		INNER JOIN sub_menu s on a.s_id=s.s_id
");
		return $r->result();
	}
		
		
	
	
	public function select_Data($tbl)
	{
		$r=$this->db->get($tbl);
		return $r->result();
	}
	public function delete_data($tbl,$col,$val)
	{
		$this->db->where($col, $val);
		$r=$this->db->delete($tbl);
		return $r;
	}
	 public function update_record($tbl,$data,$col,$val)
	{			
		$this->db->where($col, $val);
		$r=$this->db->update($tbl, $data); 
		return $r;
	} 
	public function get_where($tbl,$col,$val)
	{			
		$this->db->where($col,$val);
		$r = $this->db->get($tbl);
		return $r->result();
	}
	public function select_Data_join($tbl1,$tbl2,$id)
	 {			
		
		$query = $this->db->query("select  $tbl2.m_name, $tbl1.s_id,$tbl1.sub_name,$tbl1.sub_status from $tbl1  inner join $tbl2 on $tbl1.$id=$tbl2.$id");
		return $query->result();	
	} 
	public function select_Data_cat($tbl1,$tbl2,$id)
	 {			
		
		$query = $this->db->query("select  $tbl2.sub_name, $tbl1.c_id,$tbl1.c_name,$tbl1.c_status from $tbl1  inner join $tbl2 on $tbl1.$id=$tbl2.$id");
		return $query->result();	
	} 
	public function get_wherelogin($tbl,$em)
	{
		 $this->db->where('r_email',$em);
		$r = $this->db->get($tbl);
		return $r;
	
		/* $r=$this->db->query("select * from $tbl where r_email='$em'");
		return $r;
	 */}
	 public function up_model($tbl,$email,$password)
	{
		$this->load->database('');
		$this->db->query("update $tbl set r_password='$password' where r_email='$email'");
	}
	/***********************CHANGE PASSWORD FOR UPDATE QUERY STATRT***************************************/
		public function update_password_change($p2,$id)
	{
		$this->load->database();
		$this->db->query("update login set r_password='$p2' where r_id='$id'");
	}
	/***********************CHANGE PASSWORD FOR UPDATE QUERY END***************************************/
		public function category($tbl)
	{
		$this->load->database('');
		//echo "select r.r_menu ,s.r_id,s.r_submenu,s.r_status from menu_table r JOIN submenu_table s on r.r_id=s.r_id";
		$r=$this->db->query("SELECT e.sub_name ,c.* FROM sub_menu e INNER JOIN category c On e.s_id=c.s_id");
		//$r=$this->db->get($tbl);
		return $r->result();
	}
		public function select_order($tbl)
	{
		$r=$this->db->get($tbl);
		return $r->result();
	}
	
}
?>