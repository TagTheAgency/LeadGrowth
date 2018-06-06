<?php
	$currentPage = "home";
	require('header.php');
?>

		<div class="container-fluid vh-100 hero-container hero-banner hero-banner-full" style="background-image: url('./img/bg-2.png');">
			<div class="container">
				<div class="row vh-100 text-center text-md-left align-items-center justify-content-center justify-content-md-start">
					<div class="col-11 col-sm-10 col-md-6 offset-md-1 fade-in">
						<h2 class="hero-header text-black font-2 font-sm-3"><strong>Linkedin Profile Optimisation</strong></h2>
						<p class="text-light">LinkedIn profile optimisation to enhance your social selling efforts.</p>
						<a href="about.php" class="btn btn-primary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid secondary py-5 fade-in">
			<div class="container py-2">
				<div class="row text-center text-sm-left align-items-center justify-content-center justify-content-sm-left py-sm-5">
					<div class="order-2 order-sm-1 col-10 col-sm-7 col-md-7 col-md-5">
						<h2 class="text-black"><strong>Linkedin Outreach</strong></h2>
						<p class="text-light">LeadGrowth is a done-for-you Linkedin Outreach service. You focus on your business while we optimise your Linkedin Profile and generate quality leads for your business.</p>
						<a href="about.php" class="btn btn-primary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
					<div class="order-1 order-sm-2 col-10 col-sm-5 col-md-4">
						<div class="img-container">
							<img src="img/laptop.png" alt="laptop">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid primary py-5 fade-in">
			<div class="container py-3">
				<div class="row text-center py-sm-5 justify-content-center">
					<div class="col-12 text-white mb-4">
						<h2><strong>Testimonials</strong></h2>
					</div>
					<div class="col-11 col-sm-10 row justify-content-center justify-content-md-between align-items-base text-white">
						<div class="col-10 col-sm-8 mb-5 mb-md-0 col-md-3">
							<div class="img-container circle mb-3">
								<img src="img/test.png" alt="">
							</div>
							<h3 class="mb-1">John Doe</h3>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dolorem quidem maxime quisquam qui, minima adipisci ipsum."</p>
						</div>
						<div class="col-10 col-sm-8 mb-5 mb-md-0 col-md-3">
							<div class="img-container circle mb-3">
								<img src="img/test.png" alt="">
							</div>
							<h3 class="mb-1">John Doe</h3>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dolorem quidem maxime quisquam qui, minima adipisci ipsum."</p>
						</div>
						<div class="col-10 col-sm-8 mb-5 mb-md-0 col-md-3">
							<div class="img-container circle mb-3">
								<img src="img/test.png" alt="">
							</div>
							<h3 class="mb-1">John Doe</h3>
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dolorem quidem maxime quisquam qui, minima adipisci ipsum."</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid secondary py-5 fade-in">
			<div class="container py-2">
				<div class="row text-center text-md-left align-items-center justify-content-center  py-sm-5 fade-in">
					<div class="order-2 order-md-1 col-10 offset-md-1 col-md-6 col-xl-6">
						<h2 class="text-black"><strong>Generation Funnel</strong></h2>
						<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ullam sint laborum, nulla placeat sequi obcaecati sed quaerat, iusto labore dolores facilis magni ad aspernatur alias eaque officia at beatae.</p>
						<a href="about.php" class="btn btn-primary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
					<div class="col-10 col-md-4  mb-5 mb-md-0 order-md-2">
						<div class="img-container">
							<img src="img/funnel.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer-40 secondary"></div>
		<div class="container-fluid text-black text-center pb-sm-5 fade-in">
			<div class="row justify-content-center align-items-center py-2 py-sm-5">
				<div class="col-11 col-md-6 col-lg-5">
					<h2 id="form-header" class="underline underline-gradient text-black">Get In Touch <i class="material-icons">arrow_right_alt</i></h2>
				</div>
				<div id="form-container" class="col-11 col-md-6 col-lg-5">
					<form method="POST" id="contactform" class="contact-form" action="mailer.php">
						<input id="form-name" class="w-100 input-primary mb-3" name="name" type="text" placeholder="NAME" required>
						<input class="w-100 input-primary mb-3" type="email" name="email" placeholder="EMAIL" required>
						<input class="w-100 input-primary mb-3" type="number" name="number" placeholder="PHONE NUMBER" required>
						<input class="w-100 input-primary mb-3" type="text" name="message" placeholder="MESSAGE" required>
						<input class="btn btn-primary-filled w-100 m-0" type="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
		<div class="d-none d-sm-block spacer-40"></div>
		<?php require('footer.php') ?>
