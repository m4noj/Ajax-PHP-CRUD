<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax PHP CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="font-family:roboto,sans-serif;">
	<div class="container-fluid py-4" style="background:linear-gradient(to right, rgb(111, 207, 242), rgb(4, 147, 135));">
		<h1 class='text-center'>Ajax-PHP CRUD System</h1>
		<p class='text-center'>Ajax PHP Live CREATE, READ, UPDATE, DELETE system with live predictive Search Bar</p>
	</div>
	<br>
<div class="container float-left col-md-4">
	<div class="container bg-light py-3" id='regBox'>
	<h2 class='text-center'>Register</h2><br>
				<div id='msgReg'></div>
			<form action="" id='regForm' method="post">
				<div class="form-group">
					<input type="text" id="first" name="first" placeholder="First Name" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="last" name="last" placeholder="Last Name" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="work" name="work" placeholder="Occupation" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="city" name="city" placeholder="City" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="email" name="email" placeholder="Email" class='form-control' required>
				</div>
				<input type="submit" id="btnPost" value="Submit" class='btn btn-info'>
			</form>
			<br>
	</div>
</div>
<div class="container col-sm-7 float-right">
		<div class="container">
			<h4 class='text-center'>Database Records</h4><br>
			<input type="text" id="q" name='q' placeholder="search..." class='form-control col-sm-5 mx-auto' autocomplete='off' >
			<br>
			<div id="msg" class='mx-auto'></div>
		</div>
		<div id="table" class='text-center mx-auto'></div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>