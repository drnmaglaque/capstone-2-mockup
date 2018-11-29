<?php 
	define("ASSETS_PATH", "/cps2-ecommerce/app/assets");
	define("SOURCE_IMAGES", "/cps2-ecommerce/source/images/");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/bootstrap.min.css">
	<!-- external css -->
	<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/styles.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- jquery first then popper then bootstrap js -->
	<script src="<?php echo ASSETS_PATH; ?>/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<!-- external bootstrap js -->
	<script src="<?php echo ASSETS_PATH; ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo ASSETS_PATH; ?>/js/bootstrap.min.js"></script>
	
	<title></title>

</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			
			<header class="top-nav col-md-10 offset-md-1 mt-3">
				<nav class=" navbar navbar-light navbar-expand d-flex justify-content-start align-items-center">
					<div class="navbar-brand mr-5"><h3>NoteWorthy</h3></div>
					<ul class="navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link">About</a></li>
						<li class="nav-item mx-1"><a href="#" class="nav-link">Shop</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
					</ul>

					<form id="header-form" class="form-group col-md-6 d-flex offset-md-2 flex-columns" action="">
						<input type="text" name="username-input-login" placeholder="Username or email" class="form-control header-login-input col-md-4 ml-1" id="username-input-login">
						<input type="password" name="password-input-login" placeholder="Password" class="form-control header-login-input col-md-4 mx-3" id="password-input-login">
						<button class="btn login-btn animate-btn" type="submit" name="submit-login">Login</button>
					</form>
				</nav>
			</header>	