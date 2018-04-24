<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách các danh mục sản phẩm </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/js/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/1.css">
</head>
<body >

	<?php require_once('header.php') ?>
 	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">	Danh sách các danh mục sản phẩm</h3>
 		</div>
 	</div>

 	<div class="container">
 		<div class="row">
 			
			<div class="card-deck">
			<?php foreach ($mangketqua as $value): ?>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-block" style="width: 400px">
		 					<h4 class="card-title"><?= $value['category_name'] ?></h4>
		 					<p class="card-text parent_id">Parent id: <b><?= $value['parent_id'] ?></b></p>
		 					

							<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/productcategory/getCategoty/<?= $value['category_id'] ?>" class="btn btn-warning btn-xs">Sửa nội dung</a></small></p>

							<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/productcategory/category_delete/<?= $value['category_id'] ?>" class="btn btn-outline-danger btn-xs">Xóa nội dung</a></small></p>	 					
	 					</div>
					</div>
				<!-- end card-->
				</div>
			<?php endforeach ?>
 			</div>
			
		</div>
		<div class="container">
			<div class="text-xs-center"><h3>Form below allow add categogy</h3></div>
			<hr>
		</div>
		<div>
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/productcategory/category_add">
			<div class="form-group row">
				<div class="col-sm-6">
					<div class="row">
						<label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên danh mục</label>
						<div class="col-sm-8">
							<input type="text" name="ten" class="form-control" id="ten" placeholder="ten">
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="row">
						<label for="parent_id" class="col-sm4 form-control-label text-xs-right">Parent id</label>
						<div class="col-sm-8">
							<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="vd: 12">
						</div>
					
					</div>
				</div>
			</div>
			
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">Thêm mới</button>
					<button class="btn btn-danger" type="reset">Nhập lại</button>
				</div>
			</div>
				
		</form>
		</div>
 	</div>
 	
</body>
</html>