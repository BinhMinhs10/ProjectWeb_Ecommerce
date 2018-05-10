<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<h1>Điền đầy đủ vào form bên dưới</h1>
	</center>
	<div class="container">
		<form action="<?php echo base_url() ?>index.php/shop/Shopping/user_add" method="post">
			<div class="form-group">
				<label for="username"><strong>UserName:</strong></label>
				<input type="text" name="username" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="password"><strong>Password:</strong></label>
				<input type="password" name="password" class="form-control" id="password">
			</div>
			<div class="form-group">
				<label for="email"><strong>Email Address:</strong></label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="phone_number"><strong>Phone Number:</strong></label>
				<input type="text" name="phone_number" class="form-control" id="phone_number">
			</div>
			<div class="form-group">
				<label for="address"><strong>Address:</strong></label>
				<textarea name="address" id="address" rows="3" class="form-control"></textarea>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input"> Remember me
				</label>
			</div>
			<div class="row justify-content-center">
				<button type="submit" class="btn btn-outline-danger">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo base_url(); ?>/index.php/shop/Shopping" class="btn btn-primary">Trở về trang chủ</a></button>
			</div>
			
		</form>
		
	</div>
</body>
</html>