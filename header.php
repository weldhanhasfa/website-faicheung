<?php include 'controller/multi_bahasa.php'; ?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/FBI.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>PT FAICHEUNG BIRDNEST INDUSTRY</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/main.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207586136-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207586136-1');
</script>
</head>

<body>
<!-- Start Header Area -->
<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="img/fbicircle.png" alt="" width="100px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a class="<?php if($page=='home') { echo 'active';} ?>" href="/"><?php echo $lang_menu_home; ?></a></li>
						<li><a class="<?php if($page=='about') { echo 'active';} ?>" href="about.php"><?php echo $lang_menu_about; ?></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle <?php if($page=='struktur') { echo 'active';} ?>" id="navbardrop" data-toggle="dropdown" href="#"><?php echo $lang_struktur; ?></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="direksi.php"> <?php echo $lang_jdl_direksi; ?></a>
								<a class="dropdown-item" href="struktur.php"> <?php echo $lang_jdl_so; ?></a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle <?php if($page=='struktur') { echo 'active';} ?>" id="navbardrop" data-toggle="dropdown" href="#"><?php echo $lang_jdl_produksi; ?></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="prosedur.php"> <?php echo $lang_jdl_prosedur ?></a>
								<a class="dropdown-item" href="product.php"> <?php echo $lang_menu_products; ?></a>
							</div>
						</li>
						<li><a class="<?php if($page=='galeri') { echo 'active';} ?>" href="galeri.php"><?php echo $lang_galari; ?></a></li>
						<li><a class="<?php if($page=='legal') { echo 'active';} ?>" href="legal.php"><?php echo $lang_legal; ?></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<?php echo $lang_bahasa; ?>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="?lang=bahasa_indo"><img src="img/indo.png" width="25px"> <?php echo $lang_ind; ?></a>
								<a class="dropdown-item" href="?lang=bahasa_china"><img src="img/china.png" width="25px"> <?php echo $lang_man; ?></a>
								<a class="dropdown-item" href="?lang=bahasa_ing"><img src="img/ing.png" width="25px"> <?php echo $lang_ing; ?></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<!-- End Header Area -->

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>