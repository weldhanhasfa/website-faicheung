<?php $page = 'home'; include 'header.php'; ?>

	<!-- start banner Area -->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="img/produksi.jpg">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen">
				<div class="banner-content col-lg-12">
					<!-- <p><?php echo $lang_judul; ?></p> -->
					<h1 class="text-center">
					<?php echo $lang_faicheung; ?>
					</h1>
				</div>
			</div>
		</div>
		<div class="head-bottom-meta">
			<div class="d-flex meta-left no-padding">
				<a href="https://www.facebook.com/profile.php?id=100013127285986" target="_blank"><span class="fa fa-facebook-f"></span></a>
				<a href="https://www.instagram.com/faicheung016/" target="_blank"><span class="fa fa-instagram"></span></a>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-7 col-md-12 about-left">
				<div class="section-title text-left">
						<h4><?php echo $lang_ttgus; ?></h4>
						<h2><?php echo $lang_jdl; ?></h2>
					</div>
					<div class="text-dark text-justify">
						<p>
							<?php echo $lang_deskr; ?>
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<img class="img-fluid" src="img/ct1.jpg" alt="">
				</div>
				
			</div> <br>
			<center>
			<a href="about.php" class="primary-btn"><?php echo $lang_read; ?></a>
			</center>
			
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start Project Area -->
	<section class="project-area section-gap-top" id="project">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2><?php echo $lang_product; ?></h2>
					</div>
				</div>
			</div>
			<div class="filters-content">
				<div class="row grid">
					<div class="col-lg-4 col-md-6 grid-sizer"></div>
					<div class="col-lg-4 col-md-6 grid-item all patahan" data-wow-delay="0s">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/patahanb.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_pb; ?></h4>
									<!-- <div class="cat">Architecture, Modern Design</div> -->
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all sudut">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/sudut.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_sudut; ?></h4>
									<!-- <div class="cat">Architecture, Modern Design</div> -->
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all mangkok">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/mangkok.jpg" alt="" width="25px">
								</div>
								<div class="middle">
									<h4><?php echo $lang_mangkok; ?></h4>
									<!-- <div class="cat">Architecture, Modern Design</div> -->
								</div>
								<!-- <a class="overlay" href="#"></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<center>
				<a href="product.php" class="primary-btn"><?php echo $lang_read; ?></a>
			</center>
		</div>
	</section>
	<!-- End Project Area -->

	<!-- Start callto Area -->
	<section class="callto-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="call-wrap mx-auto">
					<h1><?php echo $lang_video; ?></h1>
					<br>
					<h1>Soon....</h1>
					<!-- <video width="1080px" controls preload="metadata">
						<source src="video/FBI-DRAF2.mp4" type="video/mp4"/>
					</video> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End callto Area -->

<?php include 'footer.php'; ?>

