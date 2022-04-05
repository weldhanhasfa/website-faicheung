<?php $page = 'product'; include 'header.php'; ?>


	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<h1 class="text-white"><?php echo $lang_menu_products; ?></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

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

					<div class="col-lg-4 grid-item col-md-6 all patahank">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/pathank1.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_ps; ?></h4>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all teri">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/teri2.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_pk; ?></h4>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 grid-item col-md-6 all kaki">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/kaki.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_kaki; ?></h4>
								</div>
								
							</div>
						</div>
					</div>

					

					

					<div class="col-lg-4 grid-item col-md-6 all hancuran">
						<div class="single-project">
							<div class="relative">
								<div class="thumb">
									<img class="image img-fluid" src="img/hancuran1.jpg" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $lang_han; ?></h4>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Project Area -->

<?php include 'footer.php'; ?>