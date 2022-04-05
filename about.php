<?php $page = 'about'; include 'header.php'; ?>


	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<h1 class="text-white"><?php echo $lang_menu_about; ?></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-section Area -->

	<!-- Start Align Area -->
	<section class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30 text-center"><?php echo $lang_sejarah; ?></h3>
				<div class="row">
					<div class="col-md-5">
						<img src="img/ct1.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-7 mt-sm-20 left-align-p text-dark text-justify">
						<p><?php echo $lang_sejarah_perusahaan; ?></p>
					</div>
				</div>
			</div>

					<h3 class="text-heading text-center"><?php echo $lang_visi; ?></h3>
					<p class="sample-text text-center text-dark">
						“<?php echo $lang_isi_visi; ?>”. 
					</p>

			<div class="section-top-border">
				<h3 class="mb-30 text-center"><?php echo $lang_misi; ?></h3>
				<div class="row text-dark">
					<div class="col-md-4 text-justify ">
						<div class="single-defination">
							<h4 class="mb-20">1.</h4>
							<p><?php echo $lang_misi_1; ?></p>
						</div>
					</div>
					<div class="col-md-4 text-justify ">
						<div class="single-defination">
							<h4 class="mb-20">2.</h4>
							<p><?php echo $lang_misi_2; ?></p>
						</div>
					</div>
					<div class="col-md-4 text-justify">
						<div class="single-defination">
							<h4 class="mb-20">3.</h4>
							<p><?php echo $lang_misi_3; ?></p>
						</div>
					</div>
					<div class="col-md-4 text-justify">
						<div class="single-defination">
							<h4 class="mb-20">4.</h4>
							<p><?php echo $lang_misi_4; ?></p>
						</div>
					</div>
					<div class="col-md-4 text-justify">
						<div class="single-defination">
							<h4 class="mb-20">5.</h4>
							<p><?php echo $lang_misi_5; ?></p>
						</div>
					</div>
				</div>
			</div>
			<h3 class="text-heading text-center"><?php echo $lang_jdl_food; ?></h3>
					<p class="sample-text text-justify text-dark">
					<?php echo $lang_food; ?>
					<br>
		</div>
	</section>
	<!-- End Align Area -->

<?php include 'footer.php'; ?>