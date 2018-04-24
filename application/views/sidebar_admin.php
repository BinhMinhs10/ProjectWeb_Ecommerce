<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/style.css"> <!-- Resource style -->
	<script src="<?php echo base_url(); ?>vendor/js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body>
	<nav class="cd-side-nav">
		<ul>
			<li class="cd-label">Dashboard</li>
			<li class="has-children admin">
				<a href="#0">Admin</a>
				
				<ul>
					<li><a href="#0">Thông tin admin</a></li>
					<li><a href="#0">Sửa thông tin admin</a></li>
					<li><a href="#0">Thêm admin</a></li>
				</ul>
			</li>
			<li class="has-children category">
				<a href="#0">Quản lý hàng hóa</a>
				
				<ul>
					<li><a href="<?php echo base_url(); ?>index.php/productcategory">Danh mục loại hàng</a></li>
					<li><a href="#0">Danh mục hàng</a></li>
				</ul>

			</li>
			

			
		</ul>

		<ul>
			<li class="cd-label">Client</li>
			<li class="has-children bookmarks">
				<a href="#0">Transaction</a>
				
				<ul>
					<li><a href="#0">All Transaction</a></li>
					
				</ul>
			</li>
			<li class="has-children images">
				<a href="#0">Order Table</a>
				
				<ul>
					<li><a href="#0">All order table</a></li>
					<li><a href="#0">Edit order table</a></li>
				</ul>
			</li>

			<li class="has-children users">
				<a href="#0">Users</a>
				
				<ul>
					<li><a href="#0">All Users</a></li>
					<li><a href="#0">Edit User</a></li>
					<li><a href="#0">Add User</a></li>
				</ul>
			</li>
		</ul>

		<ul>
			<li class="cd-label">Action</li>
			<li class="action-btn"><a href="#0">Button</a></li>
		</ul>
	</nav>
<script src="<?php echo base_url(); ?>vendor/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url(); ?>vendor/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url(); ?>vendor/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>