<?php $this->load->view('header')?>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Body main wrapper start -->
	<div class="wrapper">

		<?php $this->load->view('toolbar')?>
		<!-- Start Cart Panel -->
		<div class="shopping__cart">
			<div class="shopping__cart__inner">
				<div class="offsetmenu__close__btn">
					<a href="#"><i class="zmdi zmdi-close"></i></a>
				</div>
				<div class="shp__cart__wrap">
					<div class="shp__single__product">
						<div class="shp__pro__thumb">
							<a href="#">
								<img src="assets/images/product-2/sm-smg/1.jpg" alt="product images">
							</a>
						</div>
						<div class="shp__pro__details">
							<h2><a href="product-details">BO&Play Wireless Speaker</a></h2>
							<span class="quantity">QTY: 1</span>
							<span class="shp__price">$105.00</span>
						</div>
						<div class="remove__btn">
							<a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
						</div>
					</div>
					<div class="shp__single__product">
						<div class="shp__pro__thumb">
							<a href="#">
								<img src="assets/images/product-2/sm-smg/2.jpg" alt="product images">
							</a>
						</div>
						<div class="shp__pro__details">
							<h2><a href="product-details">Brone Candle</a></h2>
							<span class="quantity">QTY: 1</span>
							<span class="shp__price">$25.00</span>
						</div>
						<div class="remove__btn">
							<a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
						</div>
					</div>
				</div>
				<ul class="shoping__total">
					<li class="subtotal">Subtotal:</li>
					<li class="total__price">$130.00</li>
				</ul>
				<ul class="shopping__btn">
					<li><a href="cart">View Cart</a></li>
					<li class="shp__checkout"><a href="checkout">Checkout</a></li>
				</ul>
			</div>
		</div>
		<!-- End Cart Panel -->
	</div>
	<!-- End Offset Wrapper -->
	<!-- Start Bradcaump area -->
	<div class="ht__bradcaump__area"
		style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner">
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="<?php echo base_url();?>">Home</a>
								<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
								<a class="breadcrumb-item" href="product-grid">Products</a>
								<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
								<span class="breadcrumb-item active">Product Detail</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Product Details Area -->
	<section class="htc__product__details bg__white ptb--100">
		<!-- Start Product Details Top -->
		<div class="htc__product__details__top">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
						<div class="htc__product__details__tab__content">
							<!-- Start Product Big Images -->
							<div class="product__big__images">
								<div class="portfolio-full-image tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
										<img src="upload/product/<?php echo $data->product_url ?>"
											style="height:510px;width:677px;" alt="full-image">
									</div>
									<!-- <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                        <img src="assets/images/product-2/big-img/2.jpg" alt="full-image">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                        <img src="assets/images/product-2/big-img/3.jpg" alt="full-image">
                                    </div> -->
								</div>
							</div>
							<!-- End Product Big Images -->
							<!-- Start Small images -->
							<ul class="product__small__images" role="tablist">
								<li role="presentation" class="pot-small-img active">
									<a href="#img-tab-1" role="tab" data-toggle="tab">
										<img src="upload/product/<?php echo $data->product_url ?>"
											style="height:80px;width:106px;" alt="small-image">
									</a>
								</li>
								<!-- <li role="presentation" class="pot-small-img">
                                    <a href="#img-tab-2" role="tab" data-toggle="tab">
                                        <img src="assets/images/product-2/sm-img-3/1.jpg" alt="small-image">
                                    </a>
                                </li>
                                <li role="presentation" class="pot-small-img">
                                    <a href="#img-tab-3" role="tab" data-toggle="tab">
                                        <img src="assets/images/product-2/sm-img-3/2.jpg" alt="small-image">
                                    </a>
                                </li> -->
							</ul>
							<!-- End Small images -->
						</div>
					</div>
					<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
						<div class="ht__product__dtl">
							<h2><?php echo $data->product_name?></h2>
							<ul class="rating">
								<li><i class="icon-star icons"></i></li>
								<li><i class="icon-star icons"></i></li>
								<li><i class="icon-star icons"></i></li>
								<li class="old"><i class="icon-star icons"></i></li>
								<li class="old"><i class="icon-star icons"></i></li>
							</ul>
							<ul class="pro__prize">
								<li class="old__prize"><strike><?php echo Home::rupiah($data->product_price)?></strike>
								</li>
								<li><?php echo Home::rupiah($data->product_price -  ($data->product_price * ($data->product_discount/100)) )?>
								</li>
							</ul>
							<p class="pro__info"><?php echo $data->product_desc?></p>
							<div class="ht__pro__desc">
								<div class="sin__desc">
									<p><span>Availability:</span>
										<?php echo $data->product_stock >= 1 ? $data->product_stock . "pcs" : 'Out Of Stock'?>
									</p>

								</div>
								<div class="sin__desc">
									<form method="POST" action="addToCart">
										<input type="hidden" name="id_product" value="<?php echo $data->id ?>"
											id="id_product" />
										<a href="#"
											style="background: #c43b68; padding:16px;color:#fff;border-radius: 25px;"
											class="addproduct"><i class="icon-handbag">Add To Cart</i></a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	</div>
	<!-- Body main wrapper end -->

	<!-- Placed js at the end of the document so the pages load faster -->
	<script>
		$('.addproduct').click(function (e) {
			//preventing the default link redirection
			e.preventDefault();
			$(this).closest('form').submit();
		});

	</script>
	<?php $this->load->view('footer')?>
