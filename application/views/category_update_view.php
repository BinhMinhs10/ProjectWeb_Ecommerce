<!DOCTYPE html>
<html lang="en"><head>
	<title> Hien thi danh sach nhan vien </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/js/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/1.css">
</head>
<body >
 	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Sửa danh mục	</h3>
 		</div>
 	</div>

 	<div class="container">
 		
		<div>
		<form method="post" action="<?= base_url(); ?>/index.php/productcategory/category_update">

			<?php foreach ($dulieukq as $value): ?>
				<div class="form-group row">

					<div class="col-sm-6">
						<div class="row">
							<label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên danh mục</label>
							<div class="col-sm-8">
								<input type="hidden" name="id" value="<?= $value['category_id'] ?>">
								<input type="text" name="ten" class="form-control" id="ten" placeholder="ten" value="<?= $value['category_name'] ?>">
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="row">
							<label for="parent_id" class="col-sm4 form-control-label text-xs-right">Parent id</label>
							<div class="col-sm-8">
								<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="vd: 12" value="<?= $value['parent_id'] ?>">
							</div>
						
						</div>
					</div>
				</div>
				
			<?php endforeach ?>
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-outline-success">Lưu lại</button>
					<a href="<?php echo base_url(); ?>/index.php/productcategory" class="btn btn-primary">Trở về</a></button>
				</div>
			</div>
		</form>
		</div>
 	</div>
</body>
</html>