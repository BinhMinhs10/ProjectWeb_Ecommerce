<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signupController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // …          
                session_start();
                
                $user_name = $_POST["user_name"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $phone_number = $_POST["phone_number"];
                $address = $_POST["address"];
                
                $this->load->model('user_model');
                $id = $this->user_model->insertDataToMysql($user_name, md5($password), $email, $phone_number, $address);
                $user = $this->user_model->getDataById($id)[0];
                
                $_SESSION["user"] = $user;
                
                header("Location: ".base_url()."index.php/clientHome");
                exit;
             }
             else{
                 
                 $this->load->view('shop/signup');
             }
                
            
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
