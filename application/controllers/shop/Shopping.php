<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Class checkout extends Thread{
// 	public function __construct($arg) {
// 		$this->sp = $arg;
// 	}
// 	public function run(){
// 		$this->load->model('transaction_model');
// 		$this->load->model('order_model');

// 		$flag = $this->transaction_model->insertDataToMysql($sp[2],$sp[1],date('Y-m-d'));
// 		if($flag){
// 			foreach ($sp[0] as $value) {
// 				$this->order_model->insertDataToMysql($flag,$value['id'],$value['quantity']);
// 			}
// 		}else{
// 			echo "<h1> Error</h1>";
// 		}
// 	}

// }

class Shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		
	}

	public function index()
	{
		$result['products'] = $this->product_model->getAllData();
		$result['user']=false;
		$this->load->view('shop/shop',$result);
	}
	// excute after click check out
	public function view(){
		$sp = $this->input->post('sanpham');
		

		echo date('Y-m-d');
		
		// $thr = new checkout($sp);
		// $thr->start();
		
		// echo date('Y-m-d');
		

	}
	public function signup(){
		$this->load->view('shop/signup_view');
	}


	public function user_add()
	{
		$this->load->model('user_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$phone_number = $this->input->post('phone_number');
		$address = $this->input->post('address');
		$flag = $this->user_model->insertDataToMysql($username,$password,$email,$phone_number,$address);

		if($flag){
			$result['products'] = $this->product_model->getAllData();
			$result['user'] = $this->user_model->getDataById($flag);
			$this->load->view('shop/shop',$result);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('admin_model');
		$result = $this->admin_model->getAllData();
		foreach ($result as $admin) {
			if($username==$admin['user_name']&&$password==$admin['password']){
				$this->load->view('manager/home_view');
			}
		}

		$this->load->model('user_model');
		$result = $this->user_model->getAllData();
		foreach ($result as $user) {
			if($username==$user['user_name']&&$password==$user['password']){
				$result['products'] = $this->product_model->getAllData();
				$result['user'] = $user;
				$this->load->view('shop/shop',$result);
			}
		}
	}



}

/* End of file shopping.php */
/* Location: ./application/controllers/shopping.php */