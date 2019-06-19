<?php if(!isset($_GET['id'])){header("Location: index.php?msg=invalid");} ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax PHP CRUD</title>
	<link rel="stylesheet" href="../all_lib/css/bootstrap.min.css">
	<link rel="stylesheet" href="../mytest/css/font-awesome.min.css">
</head>
<body style="font-family:roboto,sans-serif;">
	<div class="container-fluid py-4" style="background:linear-gradient(to right, rgb(111, 207, 242), rgb(4, 147, 135));">
		<h1 class='text-center'>Ajax-PHP CRUD System</h1>
		<p class='text-center'>Ajax PHP Live CREATE, READ, UPDATE, DELETE system with live predictive Search Bar</p>
	</div>
	<br>
<div class="container col-md-4">
	<div class="container py-3" id='editBox' style="background:#e4e4e417;">
			<h2 class='text-center'>Edit Data</h2><br>
		<div id='msgEdit'></div>
			<form action="" id='editForm' method="post">
				<div class="form-group">
					<input type="text" id="upd_first" name="upd_first" placeholder="First Name" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="upd_last" name="upd_last" placeholder="Last Name" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="upd_work" name="upd_work" placeholder="Occupation" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="upd_city" name="upd_city" placeholder="City" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="upd_email" name="upd_email" placeholder="Email" class='form-control' required>
				</div>
				<center>
				<input type="submit" value="Update" class='btn update btn-success '>
				<a href="index.php#first" class='btn btn-danger'>Cancel</a>
				</center>
			</form>
			<br>
	</div>
</div>
</body>
<script src="../all_lib/js/jquery-3.3.1.min.js"></script>
<script src="js/edit.js"></script>
</html>