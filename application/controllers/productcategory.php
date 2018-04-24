<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productcategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('productcategory_model');
		$ketqua = $this->productcategory_model->getAllData();
		$ketqua = array('mangketqua' => $ketqua);

		$this->load->view('productcategory_view', $ketqua);
	}
	public function category_add()
	{

		$ten = $this->input->post('ten');
		$parent_id = $this->input->post('parent_id');

		$this->load->model('productcategory_model');
		$trangthai = $this->productcategory_model->insertDataToMysql($ten,$parent_id);
		if ($trangthai) {
			$this->load->view('success_view');
		}else{
			echo '<h2>That bai xem lai code</h2>';
		}
	}
	public function category_delete($id)
	{
		$this->load->model('productcategory_model');
		if($this->productcategory_model->removeById($id)){
			$this->load->view('success_view');
		}else{
			echo "<h2>Delete khong thanh cong</h2>";
		}
	}

	public function getCategoty($id)
	{
		$this->load->model('productcategory_model');
		$ketqua = $this->productcategory_model->getDataById($id);
		$ketqua = array('dulieukq' => $ketqua);
		$this->load->view('category_update_view', $ketqua);
	}
	public function category_update()
	{
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$parent_id = $this->input->post('parent_id');

		$this->load->model('productcategory_model');
		if ($this->productcategory_model->updateByID($id,$ten,$parent_id)) {
		 	$ketqua = $this->productcategory_model->getAllData();
			$ketqua = array('mangketqua' => $ketqua);

			$this->load->view('productcategory_view', $ketqua);
		}else{
			echo '<h2>Update khong thanh cong</h2>';
		}
	}

}

/* End of file Productcategory.php */
/* Location: ./application/controllers/Productcategory.php */