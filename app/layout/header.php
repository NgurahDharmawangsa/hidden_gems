<?php
$siteurl = "http://localhost/hidden_gems/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/animate.css">

	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo $siteurl; ?>/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Hidems<span>Kuta Selatan</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li <?php if ($page == 'home'){echo "class='nav-item active'";}else{echo "class='nav-item'";}  ?>><a href="<?= $siteurl; ?>app/dashboard.php" class="nav-link">Home</a></li>
					<li <?php if ($page == 'about'){echo "class='nav-item active'";}else{echo "class='nav-item'";} ?>><a href="<?= $siteurl; ?>app/guest/about.php" class="nav-link">About</a></li>
					<li <?php if ($page == 'destination'){echo "class='nav-item active'";}else{echo "class='nav-item'";} ?>><a href="<?= $siteurl; ?>app/guest/destination.php" class="nav-link">Destinasi</a></li>
					<li <?php if ($page == 'contact'){echo "class='nav-item active'";}else{echo "class='nav-item'";} ?>><a href="<?= $siteurl; ?>app/guest/contact.php" class="nav-link">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->