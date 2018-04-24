<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('nhansu_model');
		$ketqua = $this->nhansu_model->getAllData();
		$ketqua = array('mangketqua' => $ketqua);


		$this->load->view('nhansu_view', $ketqua);
		
	}
	public function nhansu_add(){

		if ($_FILES['anhavatar']["name"]) {
		
			$target_dir="Fileupload/";
			$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["anhavatar"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>chi chap nhan file anh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo 'Loi file chua upload duoc';
			}else{
				if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
					
				} else {
					echo 'Sorry, there was an error uploading your file';
				}
			}
			$anhavatar = base_url()."Fileupload/".basename($_FILES["anhavatar"]["name"]);
		}else{

			$anhavatar = base_url()."Fileupload/noavatar.png";
		}
		// Lay view 
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');
		

		$this->load->model('nhansu_model');
		$trangthai = $this->nhansu_model->insertDataToMysql($ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang);
		if ($trangthai) {
			$ketqua = $this->nhansu_model->getAllData();
			$ketqua = array('mangketqua' => $ketqua);

			$this->load->view('nhansu_view', $ketqua);
		}else{
			echo '<h2>That bai xem lai code</h2>';
		}
		
	
	}
	public function sua_nhanvien($id)
	{
		$this->load->model('nhansu_model');
		$ketqua = $this->nhansu_model->getDataById($id);
		$ketqua = array('dulieukq'=> $ketqua);
		$this->load->view('sua_nhanvien_view', $ketqua);
		
	}
	public function xoa_nhanvien($id){
		$this->load->model('nhansu_model');
		if($this->nhansu_model->removeById($id)){
			$this->load->view('success_view');
		}else{
			echo "<h2>Delete khong thanh cong</h2>";
		}
	}


	public function nhansu_update(){
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');

		
		if ($this->input->post('anhavatar2')) {

			// Xu ly anh avatar
			$target_dir="Fileupload/";
			$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["anhavatar"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>chi chap nhan file anh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo '<h2>Loi file chua upload duoc</h2><br/>';
			}else{
				if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
					
				} else {
					echo '<h2>Sorry, there was an error uploading your file</h2><br/>';
				}
			}
			$anhavatar = base_url()."Fileupload/".basename($_FILES["anhavatar"]["name"]);
			
		}else{
			$anhavatar = $this->input->post('anhavatar2');
			
		}
		
		// Doi goi de truyen vao trong view
		// 
		$this->load->model('nhansu_model');
		if ($this->nhansu_model->updateByID($id,$ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang)) {
		 	$this->load->view('success_view.php');
		}else{
			echo '<h2>Update khong thanh cong</h2>';
		} 
	}

	public function ajax_add()
	{
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');
		$anhavatar = 'http://repair.vn/Themes/images/noavatar.png';

		$this->load->model('nhansu_model');
		$trangthai = $this->nhansu_model->insertDataToMysql($ten,$tuoi,$sdt,$anhavatar,$linkfb,$sodonhang);
		if ($trangthai) {
			echo '<h2>Insert thanh cong </h2>';
		}else{
			echo '<h2>That bai xem lai code</h2>';
		}
	}
}

/* End of file nhansu.php */
/* Location: ./application/controllers/nhansu.php */