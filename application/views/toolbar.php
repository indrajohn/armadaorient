<style>
	.toolbar-center {
		display: flex;
		justify-content: center;
		height: 80px;
		align-items: center;
	}

	.mean-container .mean-nav {
		background: rgb(79, 60, 27) none repeat scroll 0 0;
	}

	.mobile-menu-area .mean-nav ul {
		height: auto;
	}

	.toolbar-left {
		display: flex;
		justify-content: left;
		height: 80px;
		align-items: center;
	}

	.toolbar-center>img {
		height: 50px;
		width: 300px;
		text-align: center;
	}

	.main__menu>li>a {
		line-height: 40px;
		height: 40px;
	}

	.main__menu {
		background-color: rgb(79, 60, 27);
		box-shadow: 0em 0.15em 2em rgb(0 0 0 / 15%);
		font-size: 1em;
		color: rgb(255, 255, 255);
	}

	.main__menu>li>a {
		color: rgb(255, 255, 255);
	}

	.main__menu>li>a:hover {
		color: rgb(209, 163, 82);
	}

	.container-nav {
		width: 100%;
	}

	@media(max-width:500px) {
		.toolbar-center>img {
			height: auto;
			width: auto;
			text-align: center;
		}
	}

	.main__menu {
		justify-content: left;
	}

	.header__account_non_active a {
		color: #000;
		font-size: 19px;
		margin-right: 20px;
		padding-right: 20px;
		position: relative;
	}

	.header__account_non_active a::before {
		background: initial;
		content: "";
		height: 15px;
		position: absolute;
		right: 0;
		top: 0;
		width: 2px;
	}

	.header__account li {
		list-style-type: none;
	}

</style>

<div class="toolbartes">
	<!-- Start Header Style -->
	<header id="htc__header" class="htc__header__area header--one">
		<!-- Start Mainmenu Area -->
		<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
			<div class="container container-nav">
				<div class="row">
					<div class="menumenu__container clearfix">
						<div class="col-lg-3 col-md-4 hidden-xs hidden-sm">
							<div class="toolbar-left" style="padding-left:70px">
								<p><i class="fa fa-phone"></i> +62 (0) 815 4841
									8500<br>
									<i class="fa fa-envelope"></i> michael@armadaorient.co
								</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-5 col-sm-6 col-xs-5">
							<div class="toolbar-center">
								<img src="assets/images/logo/logo.png" />
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-7">
							<div class="header__right toolbar-center">
								<div class="header__search search search__open">
									<a href="#"><i class="icon-magnifier icons"></i></a>
								</div>

								<?php
                                    $username =$this->input->cookie('username', true);
                                    if($username != NULL){
                                        echo "
										<div class='header__account'>
											<div class='nav-item dropdown'>
												<a id='navbarDropdown' class='nav-link dropdown-toggle' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' v-pre>
													Hai <span class='caret'></span>
												</a>
					
												<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
													<a class='dropdown-item' href='logout'>
														Log Out
													</a>
												</div>
											</div>
											</div>
											<div class='htc__shopping__cart'>
											<a class='cart__menu' href='#'><i class='icon-handbag icons'></i></a>
											<a href='#'><span class='htc__qua'>2</span></a>
                                    	</div>";
                                    }
									else{
										echo "<div class='header__account_non_active' style='background:initial'>
											<a href='login'><i class='icon-user icons'></i></a>
										</div>";
									}
                                ?>

							</div>
						</div>
						<div class="mobile-menu clearfix visible-xs visible-sm">
							<nav id="mobile_dropdown">
								<ul>
									<li><a href="<?php echo base_url();?>">Home</a> </li>
									<li><a href="product-grid">Products</a></li>
									<li><a href="about-us">About Us</a> </li>
									<li><a href="contact">contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="mobile-menu-area"></div>
			</div>
			<div class="container container-nav">
				<div class="row">
					<nav class="hidden-xs hidden-sm">
						<ul class="main__menu">
							<li style="margin-left:70px;"><a href="<?php echo base_url();?>">Home</a> </li>
							<li><a href="product-grid">Products</a></li>
							<li><a href="about-us">About Us</a> </li>
							<li><a href="contact">contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Mainmenu Area -->
	</header>
	<!-- End Header Area -->

	<div class="body__overlay"></div>
	<!-- Start Offset Wrapper -->
	<div class="offset__wrapper">
		<!-- Start Search Popap -->
		<div class="search__area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search__inner">
							<form action="#" method="get">
								<input placeholder="Search here... " type="text">
								<button type="submit"></button>
							</form>
							<div class="search__close__btn">
								<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Search Popap -->
		<!-- Start Cart Panel -->
		<div class="shopping__cart">
			<div class="shopping__cart__inner">
				<div class="offsetmenu__close__btn">
					<a href="#"><i class="zmdi zmdi-close"></i></a>
				</div>
				<?php
            $username =$this->input->cookie('username', true);
              if($username != NULL){
                if(isset($dataCart)){
                    echo "
                        <div class='shp__cart__wrap'>";
                    foreach ($dataCart as $cart) {
                        $harga_diskon = $cart['harga_produk'] - ($cart['harga_produk'] * ($cart['discount'] / 100));
                        echo "<div class='shp__single__product'>
                            <div class='shp__pro__thumb'>
                                <a href='#'>
                                    <img src='assets/images/product-2/sm-smg/1.jpg' alt='product images'>
                                </a>
                            </div>
                            <div class='shp__pro__details'>
                                <h2><a href='product-details'></a>".$cart['nama_produk']."</h2>
                                <span class='quantity'>QTY: ".$cart['total_produk']."</span>
                                <span class='shp__price'>".$cart['total_produk'] * $harga_diskon."</span>
                            </div>
                            <div class='remove__btn'>
                                <a href='#' title='Remove this item'><i class='zmdi zmdi-close'></i></a>
                            </div>
                        </div>";

                    }
                    echo "</div>
                    <ul class='shoping__total'>
                    <li class='subtotal'>Subtotal:</li>
                    <li class='total__price'>$130.00</li>
                </ul>
                <ul class='shopping__btn'>
                    <li><a href='cart'>View Cart</a></li>
                    <li class='shp__checkout'><a href='checkout'>Checkout</a></li>
                </ul>";
                }
                else{
                    echo "<h4>Anda belum Belanja</h4>";
                    echo "<a href='".base_url()."product-grid'>Belanja Sekarang</a>";
                }

                    }
                    else{
                        echo "<h4>Anda belum login</h4>";
                        echo "<a href='".base_url()."login'>Click me for login</a>";
                    }
                    ?>
			</div>
		</div>
		<!-- End Cart Panel -->
	</div>
	<!-- End Offset Wrapper -->
	<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$('.cart__menu').on('click', function (e) {
			e.preventDefault();
			$('.shopping__cart').addClass('shopping__cart__on');
			$('.body__overlay').addClass('is-visible');
		});

		$('.offsetmenu__close__btn').on('click', function (e) {
			e.preventDefault();
			$('.shopping__cart').removeClass('shopping__cart__on');
			$('.body__overlay').removeClass('is-visible');
		});

	</script>

</div>
