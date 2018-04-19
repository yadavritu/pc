<?php 
class Order extends CI_Controller{
	public function confirmation(){
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$order = $this->input->post('order');
			//Calculate Shipping Charge
			$storeAddress = $this->config->item('store_address');
			$addressCoordinate = get_coordinates($order['address'],$storeAddress['city'],$storeAddress['state'],$order['pincode']);
			if(empty($addressCoordinate)){
				die("Invalid Address");
			}
			$order['latitude'] = $addressCoordinate['lat'];
			$order['longitude'] = $addressCoordinate['long'];
			$order['distance'] = GetDrivingDistance($storeAddress['latitude'],$storeAddress['longitude'],$addressCoordinate['lat'],$addressCoordinate['long']);			
			$order['free_km'] = $storeAddress['free_km'];
			$order['per_km_cost'] = $storeAddress['per_km_cost'];
			$this->session->set_userdata(array('order'=>$order));
		}
		$data['order']=$this->session->userdata('order');
		$data['sess']=$this->session->userdata('clinte');
		$data['this1']=$this;
		
		$this->head(); 
		$this->load->view('order/confirmation',$data);
		$this->footer(); 
	}	
		
	function buy(){
		$sess=$this->session->userdata("clinte");
		$val=$sess['Admin_ID'];
		if(!$val){
			 redirect(base_url()."Pizza/login/?login=true");
		}elseif($this->cart->total_items() > 0){
			//Set variables for paypal form
			$returnURL = base_url().'Pizza/success'; //payment success url
			$cancelURL = base_url().'Pizza/cancel'; //payment cancel url
			$notifyURL = base_url().'Pizza/ipn'; //ipn url
			//get particular product data
			$userID = $val; //current user id
			$logo = base_url().'assets/images/codexworld-logo.png';
			
			$this->paypal_lib->add_field('return', $returnURL);
			$this->paypal_lib->add_field('cancel_return', $cancelURL);
			$this->paypal_lib->add_field('notify_url', $notifyURL);
			
			//Adding Items to Cart
			$cart = $this->cart->contents();
			$cnt = 1;
			foreach($cart as $key=>$product){
				$this->paypal_lib->add_field('item_name_'.$cnt, $product['name']);
				$this->paypal_lib->add_field('item_number_'.$cnt,  $product['id']);
				$this->paypal_lib->add_field('quantity_'.$cnt,  $product['qty']);
				$this->paypal_lib->add_field('amount_'.$cnt,  $product['price']);
				$cnt++;
			}        
			//Attach Shipping Charge
			$order = $this->session->userdata('order');
			$shippingCharge = getShippingCharge($order['distance']['distance'],$order['per_km_cost'],$order['free_km']);
			if(!empty($shippingCharge['charge'])){
				$this->paypal_lib->add_field('item_name_'.$cnt, "Shipping Charge");
				$this->paypal_lib->add_field('item_number_'.$cnt,  "SHIPPING");
				$this->paypal_lib->add_field('quantity_'.$cnt,  1);
				$this->paypal_lib->add_field('amount_'.$cnt,  $shippingCharge['charge']);
			}
			$this->paypal_lib->add_field('amount',  $this->cart->total()+$shippingCharge['charge']);
			
			$this->paypal_lib->add_field('upload', "1");
			$this->paypal_lib->add_field('cmd','_cart');// This will use to Add Multiple Items in Cart
			$this->paypal_lib->image($logo);
			//Add Detail to Order Table START
			$orderInfo = array(
				'user_id' => $userID,
				'type' => "Online",
				'flat_no' => $order['flat_no'],
				'address' => $order['address'],
				'landmark' => $order['landmark'],
				'zipcode' => $order['pincode'],
				'latitude' => $order['latitude'],
				'longitude' => $order['longitude'],
				'distance' => $order['distance']['distance'],
				'amount' => $this->cart->total(),
				'shipping_charge' => $shippingCharge['charge'],
				'created' => date("Y-m-d H:i:s"),
			);
			$this->db->insert('orders',$orderInfo);
			$orderId = $this->db->insert_id();
			foreach($cart as $key=>$product){
				$orderDetail = array(
					'order_id' => $orderId,
					'product_id' => $product['id'],
					'product_name' => $product['name'],
					'product_price' => $product['price'],
					'product_img' => $product['img'],
					'quantity' => $product['qty'],
				);
				$this->db->insert('order_details',$orderDetail);
			}
			//Add Detail to Order Table END
			$this->paypal_lib->add_field('custom', $orderId);
			$this->paypal_lib->paypal_auto_form();
		}else{
			redirect(base_url()."Pizza/show_cart");
		}
    }
	public function success(){
		$this->head(); 
		$this->load->view('order/success');
		$this->footer(); 
	}
	public function cancel(){
		$this->head(); 
		$this->load->view('order/cancel');
		$this->footer(); 
	}
	public function ipn(){
		if($this->paypal_lib->validate_ipn()){
			//$this->paypal_lib->ipn_data;
			$payment_status = "Paid";
			$transaction_id = "1da5s4d5s45as4d5";
			$orderId = 1;
			//Update Order Status
			$this->db->query("update orders set payment_status = '$payment_status',transaction_id='$transaction_id' where id='$orderId'");
		}
		exit;
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
	public function footer()
	{
		//$this->head();
		$r=$this->db->query("select * from menu where m_status='unblock'");
		$a['menu']=$r->result();
		
		$r1=$this->db->query("select * from logo where l_status='unblock'");
		$a['logo']=$r1->result();
		
		
		$this->load->view("user/footer",$a);
	}
}
?>