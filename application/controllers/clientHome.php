<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clientHome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//                $this->load->model('product_model');
//                $productList = $this->product_model->getAllData();
//                
//                $productList = array("productList" => $productList);
                
                
	    $this->load->model('productcategory_model');
	    $root_categories = $this->productcategory_model->getRootCategories();
	    $this->load->model('product_model');
	    $product_list = $this->product_model->getAllData();
	    $parameters = array("root_categories" => $root_categories, "product_list" => $product_list); 
		$this->load->view('shop/home', $parameters);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
