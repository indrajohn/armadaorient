<?php

$this->load->view('header'); ?>

<body>
	<style>
		.single__slide::before {
			content: "";
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 100%;

		}

		.slide-one::before {
			content: "";
			background: url('assets/images/bg/bg1.jpg');
			opacity: .7;
		}

		.slide-two::before {
			content: "";
			background: url('assets/images/bg/bg2.jpg');
			opacity: .7;
		}

		.single__slide::after {
			animation-name: example;
			animation-duration: 4s;
			-webkit-transition: all .5s;
			-moz-transition: all .5s;
			-o-transition: all .5s;
			transition: all .5s;
			animation-iteration-count: infinite;
		}

		@keyframes example {
			from {
				transform: scale(0) translate(0px, 0px);
			}

			to {
				transform: scale(3) translate(-659px, 0px);
			}
		}

		section {
			box-sizing: border-box;
			display: block;
			margin-bottom: 10px;
		}

		.section-two {
			margin-top: 100px;
			margin-bottom: 100px;
		}

		html {
			scroll-behavior: smooth;
		}

		.exploreBtn {
			position: absolute;
			bottom: 0;
			left: 50%;
		}

		.exploreBtn>.cr__btn>a {
			background: initial;
			height: 100px;
			padding: 0px;
		}

		.exploreBtn>.cr__btn>a:hover {
			cursor: pointer;
		}

		.exploreBtn>.cr__btn>a>img {
			height: 30px;
			width: 10px;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.about-intro>h2 {
			font-family: "Playfair Display", serif;
			font-size: 3em;
			font-style: normal;
			font-weight: 400;
			line-height: 1.2;
			letter-spacing: 0em;
			margin-right: calc(0em * -1);
			text-transform: capitalize;
			color: rgb(0, 0, 0);
		}

		.about-intro>p {
			font-size: 1.25em;
			padding: 8px;
		}

		.learn_more_btn {
			margin: 10px;
		}

		.learn_more_btn>a {
			flex-direction: row-reverse;
			background-color: #BF8C3B;
			border-radius: 8px 8px 8px 8px;
		}

		.logo-about-intro::before {
			content: '';
			width: 80%;
			height: 90%;
			display: block;
			position: absolute;
			top: -65px;
			left: 0;
			background-color: transparent;
			border: 18px solid #BF8C3B;
			transition: all 0.8s ease-in-out;
		}

		.logo-about-intro::after {
			content: '';
			width: 75%;
			height: 90%;
			display: block;
			position: absolute;
			bottom: -45px;
			right: 20px;
			background-color: #BF8C3B;
			transition: all 0.8s ease-in-out;
		}

		.video-player-container {
			position: relative;
			z-index: 1;
			width: 100%;
			border-radius: 5px;
			background-attachment: scroll;
			overflow: hidden;
		}

		.video-player-container video {
			min-width: 100%;
			min-height: 100%;
			position: relative;
			z-index: 1;
		}

		.video-player-container .video-overlay {
			height: 100%;
			width: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			z-index: 2;
			background: black;
			opacity: 0.7;
		}

		.myVideo {
			width: 100%;
		}

		.logo-about-intro>img {
			display: flex;
			margin: auto;
			max-width: 75%;
			position: relative;
			z-index: 2;
			vertical-align: bottom;
			width: 400px;
		}

		.logo-about-intro:hover::after {
			bottom: -30px;
			right: 40px;
		}

		.logo-about-intro:hover::before {
			top: -45px;
			left: 20px;
		}

		.logo-about-intro {
			align-items: center;
			z-index: 1;
			max-width: 550px;
			font-size: 1em;
			background-color: transparent;
		}

		.section-three {
			background: rgb(250, 250, 250);
		}

		.text>hr {
			background-color: #BF8C3B !important;
			width: 50%;
			max-width: 300px;
			height: 3px;
			margin: 1.5em 0 0;
			border: 0px;
			font-size: 0.3em;
			text-align: center;
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.text {
			z-index: 2;
			font-size: 1em;
			background-color: transparent;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 600px;
		}

		.text>p {
			color: #c7c7c7;
			font-family: "MontserratSemiBold";
			font-style: normal;
			line-height: 3;
		}

		.text>h2 {
			color: #c7c7c7;
			font-family: "Playfair Display", serif;
			font-size: 3em;
			font-style: normal;
			line-height: 3;
		}

		.text>h1 {
			font-family: "Playfair Display", serif;
			font-style: normal;
			color: #fff;
			line-height: 3;
		}

		.container-for-text {
			position: relative;
			border-radius: 5px;
			overflow: hidden;
		}

		@media(max-width:768px) {
			.column2-intro {
				margin-top: 100px;
			}

			.about-intro>h2 {
				font-size: 3em;

			}
		}

	</style>

	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Body main wrapper start -->
	<div class="wrapper">
		<?php $this->load->view('toolbar');?>
		<!-- Start Slider Area -->
		<section id="section-one">
			<div class="slider__container slider--one bg__cat--3">
				<div class="slide__container slider__activation__wrap owl-carousel">
					<!-- Start Single Slide -->
					<div class="single__slide animation__style01 slider__fixed--height slide-one">
						<div class="container">
							<div class="row align-items__center">
								<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
									<div class="slide">
										<div class="slider__inner">
											<h2>collection 2020</h2>
											<h1>NICE CHAIR</h1>
											<div class="cr__btn">
												<a href="product-grid">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
									<div class="slide__thumb ">
										<img src="assets/images/slider/fornt-img/kursi.png" alt="slider images">
									</div>
								</div>
							</div>
						</div>
						<div class="exploreBtn">
							<div class="cr__btn">
								<a id="explore1">Explore
									<img src="assets/images/bg/arrowdown.png" />
								</a>
							</div>
						</div>
					</div>
					<!-- End Single Slide -->
					<!-- Start Single Slide -->
					<div class="single__slide animation__style01 slider__fixed--height slide-two">
						<div class="container" style="position:relative">
							<div class="row align-items__center">
								<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
									<div class="slide">
										<div class="slider__inner">
											<h2>collection 2019</h2>
											<h1>NICE Table</h1>
											<div class="cr__btn">
												<a href="cart">Shop Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
									<div class="slide__thumb">
										<img src="assets/images/slider/fornt-img/meja.png" alt="slider images">
									</div>
								</div>
							</div>
						</div>
						<div class="exploreBtn">
							<div class="cr__btn">
								<a id="explore2">Explore
									<img src="assets/images/bg/arrowdown.png" />
								</a>
							</div>
						</div>
					</div>
					<!-- End Single Slide -->
				</div>
			</div>

		</section>
		<!-- Start Slider Area -->
		<!-- Start Category Area -->
		<section id="section-two" class="section-two">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<span class="about-intro">
							<h2>FINE FURNITURE<br>& ANTIQUES</h2>
							<p class="text-justify">C.V. Armada Orient was founded in Surakarta, Indonesia in 1999. We
								have been supplying
								customers around the world with quality product for 20 years.</p>
							<div class="cr__btn learn_more_btn">
								<a href="about-us">Learn More > </a>
								<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary" aria-hidden="true"
									data-x-icon-l=""></i>
							</div>
						</span>
					</div>
					<div class="col-sm-6 column2-intro">
						<span class="logo-about-intro">
							<img src="assets/images/banner/about1.jpg" />
						</span>
					</div>
				</div>
			</div>
		</section>
		<section id="section-three" class="htc__category__area ptb--100 section-three">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section__title--2 text-center">
							<h2 class="title__line">New Arrivals</h2>
							<!--<p>But I must explain to you how all this mistaken idea</p>-->
						</div>
					</div>
				</div>
				<div class="htc__product__container">
					<div class="row">
						<div class="product__list clearfix mt--30">
							<?php

                            foreach ($data as $produk) {
                                $price_total = $produk['product_price'] - ($produk['product_price'] * ($produk['product_discount']/100));
                                $pricetotal = Home::rupiah($price_total);

                                echo "<div class='col-md-4 col-lg-4 col-sm-4 col-xs-12'>
                                <div class='category'>
                                    <div class='ht__cat__thumb'>
                                        <a href='product-details'>
                                            <img src='upload/product/".$produk['product_url']."' alt='product images' style='height: auto !important;width: 100% !important;'>
                                        </a>
                                    </div>
                                    <div class='fr__hover__info'>
                                        <ul class='product__action'>
                                            <li><a href='wishlist'><i class='icon-heart icons'></i></a></li>

                                            <li><a href='cart'><i class='icon-handbag icons'></i></a></li>

                                            <li><a href='#'><i class='icon-shuffle icons'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='fr__product__inner'>
                                        <h4><a href='product-details'>".$produk['product_name']."</a></h4>
                                        <ul class='fr__pro__prize'>
                                                    <li class='old__prize'>";
                                                    if($produk['product_discount'] != 0 ){
                                                        echo "<strike>".Home::rupiah($produk['product_price'])."</strike>";
                                                    }
                                                        echo "</li>
                                                </ul><ul class='fr__pro__prize'>
                                                <li>".$pricetotal."</li>
                                            </ul>
                                    </div>
                                </div>
                            </div>";
                            }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start Product Area 
		<section id="section-four" class="section-four htc__category__area ptb--100">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section__title--2 text-center">
							<h2 class="title__line">Best Seller</h2>
							<!--<p>But I must explain to you how all this mistaken idea</p>
						</div>
					</div>
				</div>
				<!--
				<div class="row">
					<div class="product__wrap clearfix">
						<!-- Start Single Category 
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
							<div class="category">
								<div class="ht__cat__thumb">
									<a href="product-details">
										<!--<img src="assets/images/product/9.jpg" alt="product images">
										<img src="assets/images/slider/fornt-img/meja_lesehan.png" alt="product images">

									</a>
								</div>
								<div class="fr__hover__info">
									<ul class="product__action">
										<li><a href="wishlist"><i class="icon-heart icons"></i></a></li>

										<li><a href="cart"><i class="icon-handbag icons"></i></a></li>

										<li><a href="#"><i class="icon-shuffle icons"></i></a></li>
									</ul>
								</div>
								<div class="fr__product__inner">
									<h4><a href="product-details">Lesehan Table</a></h4>
									<ul class="fr__pro__prize">
										<li class="old__prize"><strike>Rp. 4.000.000,00</strike></li>
										<li>Rp. 3.500.000,00</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Single Category -->
		<!-- Start Single Category 
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
							<div class="category">
								<div class="ht__cat__thumb">
									<a href="product-details">
										<!--<img src="assets/images/product/10.jpg" alt="product images">
										<img src="assets/images/slider/fornt-img/meja.png" alt="product images">

									</a>
								</div>
								<div class="fr__hover__info">
									<ul class="product__action">
										<li><a href="wishlist"><i class="icon-heart icons"></i></a></li>

										<li><a href="cart"><i class="icon-handbag icons"></i></a></li>

										<li><a href="#"><i class="icon-shuffle icons"></i></a></li>
									</ul>
								</div>
								<div class="fr__product__inner">
									<h4><a href="product-details">Wooden Dining Table</a></h4>
									<ul class="fr__pro__prize">
										<li class="old__prize"><strike>Rp. 2.000.000,00</strike></li>
										<li>Rp. 1.500.000,00</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Single Category
		<!-- Start Single Category 
		<section>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
			<div class="category">
				<div class="ht__cat__thumb">
					<a href="product-details">
						<!--<img src="assets/images/product/11.jpg" alt="product images">
						<img src="assets/images/slider/fornt-img/kursi.png" alt="product images">
					</a>
				</div>
				<div class="fr__hover__info">
					<ul class="product__action">
						<li><a href="wishlist"><i class="icon-heart icons"></i></a></li>

						<li><a href="cart"><i class="icon-handbag icons"></i></a></li>

						<li><a href="#"><i class="icon-shuffle icons"></i></a></li>
					</ul>
				</div>
				<div class="fr__product__inner">
					<h4><a href="product-details">Wooden Dining Chair</a></h4>
					<ul class="fr__pro__prize">
						<li class="old__prize"><strike>Rp. 1.500.000,00</strike></li>
						<li>Rp. 965.000,00</li>
					</ul>
				</div>
			</div>
		</div> -->

		<!-- End Single Category 

	</div>
	</div>
	</div>
	</section>-->
		<section id="section-five" class="section-five">
			<div class="container-for-text">
				<div class="video-player-container">
					<video autoplay muted loop class="myVideo">
						<source src="assets/video/video1.m4v" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
					<div class="video-overlay"></div>
				</div>
				<div class="text-center text">
					<h2>Armada Orient</h2>
					<h1>Timeless Things for Timeless Gift</h1>
					<hr />
					<p>
						20 years of experience in manufacturing, sourcing, and exporting goods. And along
						the
						way we
						have made good friends with a lot of wonderful people around the world.</p>
				</div>
			</div>
		</section>

		<!-- End Product Area -->
	</div>
	<!-- Body main wrapper end -->
	<script>
		$("#explore1").on('click', function () {
			event.stopPropagation();

			var height = $("#section-one").height();
			console.log(height);
			if (height >= 800) {
				window.scrollTo({
					top: 700,
					behavior: 'smooth'
				});
			}

		});
		$("#explore2").on('click', function () {
			event.stopPropagation();
			var height = $("#section-one").height();
			if (height >= 800) {
				window.scrollTo({
					top: 700,
					behavior: 'smooth'
				});
			}

		});

	</script>

	<!-- Placed js at the end of the document so the pages load faster -->
	<?php
        $this->load->view('footer'); 
    ?>
