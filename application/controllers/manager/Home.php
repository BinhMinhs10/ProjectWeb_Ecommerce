<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		session_start();
		$this->load->view('manager/home_view');

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */