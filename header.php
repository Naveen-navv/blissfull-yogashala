<?php
$base_url = "http://localhost/blissful-yogashala/";
$pagename_with = basename($_SERVER['PHP_SELF']);
$pagename_ = explode(".", $pagename_with);
$pagename = $pagename_[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="user-scalable=no,width=device-width, initial-scale=1">
	<title>Blissful Yogashala
	</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="icon" href="<?php echo $base_url; ?>images/fav-icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
	<header id="property-header" class="header-area">
		<nav class="navbar navbar-expand-lg navbar-light pt-0">
			<div class="container">
				<a class="navbar-brand pt-0" href="<?php echo $base_url; ?>">
					<img class="lenovo-logo" src="<?php echo $base_url; ?>images/logo.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class=" menu-items navbar-nav align-items-md-center align-item-start mb-lg-0 pe-md-3" id="myDIV">
						<li class="nav-item">
							<a class="nav-link btn1 home-menu" aria-current="page"
								href="<?php echo $base_url; ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 about-us-menu" href="<?php echo $base_url; ?>about-us.php">About
								Us</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link btn1 product-menu  dropdown-toggle" type="button" id="dropdownMenuButton"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php echo $base_url; ?>services">Services</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="<?php echo $base_url; ?>personalized-services.php">Personalized Yoga Sessions</a>
								<a class="dropdown-item" href="<?php echo $base_url; ?>therapeutic-ayurvedic-massage.php">Therapeutic Ayurvedic Massage</a>
								<a class="dropdown-item" href="<?php echo $base_url; ?>beauty-therapy.php">Beauty Therapy</a>
								<a class="dropdown-item" href="<?php echo $base_url; ?>corporate-yoga-sessions.php">Corporate Yoga Sessions</a>
								<a class="dropdown-item" href="<?php echo $base_url; ?>chiropractic.php">Chiropractic</a>
							</div>
						</li>
						<!-- <div class="">
							<button class="btn btn-secondary "  >
								Dropdown button
							</button>
							
						</div> -->
						<li class="nav-item">
							<a class="nav-link btn1 blog-menu" href="<?php echo $base_url; ?>blogs.php">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 exports-menu" href="<?php echo $base_url; ?>videos.php">Videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 exports-menu" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 contact-menu" href="<?php echo $base_url; ?>contact-us.php">Contact
								Us</a>
						</li>
						<!-- <li class="nav-item"> -->
						<!-- <a  class="nav-link btn1 whatsapp-menu" href=""><img src="images/whatsapp-image.png" alt="" width="100%"></a> -->
						<!-- </li> -->
					</ul>
					<a href="" class="button-1">Book Now</a>
				</div>
				
			</div>

		</nav>

	</header>
	<div class="height-header"></div>