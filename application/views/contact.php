<?php $this->load->view('header')?>

<body>

	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Body main wrapper start -->
	<div class="wrapper">
		<?php $this->load->view('toolbar');?>

		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area">
			<div class="ht__bradcaump__wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="bradcaump__inner">
								<nav class="bradcaump-inner">
									<a class="breadcrumb-item" href="">Home</a>
									<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
									<span class="breadcrumb-item active">Contact Us</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start Contact Area -->
		<section class="htc__contact__area ptb--100 bg__white">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
						<div class="map-contacts--2">
							<!--<div id="googleMap"></div>-->
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d587.9719544931216!2d110.8507104990759!3d-7.53258369843047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMzEnNTcuNiJTIDExMMKwNTEnMDMuNSJF!5e0!3m2!1sen!2sid!4v1608882321047!5m2!1sen!2sid"
								width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
								aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
						<h2 class="title__line--6">CONTACT US</h2>
						<div class="address">
							<div class="address__icon">
								<i class="icon-location-pin icons"></i>
							</div>
							<div class="address__details">
								<h2 class="ct__title">our address</h2>
								<p>Armada Orient <br>
									Plesungan RT 03 / RW 02
									<br>
									Gondangrejo, Karanganyar
									57181 Indonesia </p>
							</div>
						</div>
						<div class="address">
							<div class="address__icon">
								<i class="icon-clock icons"></i>
							</div>
							<div class="address__details">
								<h2 class="ct__title">openning hour</h2>
								<p>08:00 - 17:00 WIB</p>
							</div>
						</div>

						<div class="address">
							<div class="address__icon">
								<i class="icon-info icons"></i>
							</div>
							<div class="address__details">
								<h2 class="ct__title">Phone Number</h2>
								<p>+62 815 4841 8500<br></p>

								<h2 class="ct__title"><br>Email</h2>
								<p>michael@armadaorient.co</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded">
						<div class="panel-heading">
							<div class="contact-title">
								<h2 class="title__line--6">SEND A MAIL</h2>
								<p>Questions? Comments? Or suggestions? Feel free to send us a message!</p>
							</div>
						</div>
						<div class="panel-body">
							<div class="col-xs-12">
								<form id="contact-form" action="sendMail()" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Your Name*">
											<input type="email" name="email" placeholder="Mail*">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box subject">
											<input type="text" name="subject" placeholder="Subject*">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box message">
											<textarea name="message" placeholder="Your Message"></textarea>
										</div>
									</div>
									<div class="contact-btn">
										<button type="submit" class="fv-btn">Send MESSAGE</button>
									</div>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
	</div>
	<!--<script src="<?php echo base_url();?>assets/js/ajax-mail.js"></script>-->
	<?php $this->load->view('footer'); ?>
