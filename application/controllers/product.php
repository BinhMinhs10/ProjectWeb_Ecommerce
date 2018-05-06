<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('product_model');
		$product = $this->product_model->getAllData();
		
		$this->load->model('productcategory_model');
		$category = $this->productcategory_model->getAllData();

		$ketqua = array('products' => $product, 'categorys' => $category);


		$this->load->view('manager/product_view', $ketqua);
	}
	//---------------------------------------------------------------------------------
	public function product_add()
	{

		if ($_FILES['image']["name"]) {
		
			$target_dir="Fileupload/product/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["image"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>Chỉ chấp nhận file ảnh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo 'ERROR: file chưa upload thành công';
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					
				} else {
					echo 'Sorry, there was an error uploading your file';
				}
			}
			$image = "Fileupload/product/".basename($_FILES["image"]["name"]);
		}else{

			$image = "Fileupload/product/noavatar.png";
		}
		// Lay view 
		$product_name = $this->input->post('product_name');
		$company = $this->input->post('company');
		$category_id = $this->input->post('category_id');
		$price = $this->input->post('price');
		$discount = $this->input->post('discount');
		$intro = $this->input->post('intro');
		$quantity = $this->input->post('quantity');


		$this->load->model('product_model');
		$flag = $this->product_model->insertDataToMysql($product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity);
		if ($flag) {
			$this->load->model('product_model');
			$product = $this->product_model->getAllData();
			
			$this->load->model('productcategory_model');
			$category = $this->productcategory_model->getAllData();

			$ketqua = array('products' => $product, 'categorys' => $category);


			$this->load->view('manager/product_view', $ketqua);
		}else{
			echo '<h2>Thất bại , Chúng tôi rất lấy làm tiếc</h2>';
		}
	}

	public function product_delete($id){
		$this->load->model('product_model');
		if($this->product_model->removeById($id)){
			$this->load->view('manager/success_view');
		}else{
			echo "<h2>Delete khong thanh cong</h2>";
		}
	}
	
	public function getProduct($id){

		$this->load->model('product_model');
		$ketqua = $this->product_model->getDataById($id);

		$this->load->model('productcategory_model');
		$category = $this->productcategory_model->getAllData();

		$ketqua = array('product' => $ketqua, 'categorys'=>$category);
		$this->load->view('manager/product_update_view', $ketqua);
	}

	public function product_update(){
		$product_id = $this->input->post('product_id');
		$product_name = $this->input->post('product_name');
		$company = $this->input->post('company');
		$category_id = $this->input->post('category_id');
		$price = $this->input->post('price');
		$discount = $this->input->post('discount');
		$intro = $this->input->post('intro');
		$quantity = $this->input->post('quantity');
		//$image = $this->input->post('image');


		if ($_FILES['image']["name"]) {
		
			$target_dir="Fileupload/product/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["image"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>Chỉ chấp nhận file ảnh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo 'ERROR: file chưa upload thành công';
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					
				} else {
					echo 'Sorry, there was an error uploading your file';
				}
			}
			$image = "Fileupload/product/".basename($_FILES["image"]["name"]);
		}else{

			$image = "Fileupload/product/noproduct.png";
		}

		$this->load->model('product_model');

		if ($this->product_model->updateById($product_id,$product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity)) {
		 	$this->load->view('manager/success_view');
		}else{
			echo '<h2>Update không thành công</h2>';
		}
	}

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */