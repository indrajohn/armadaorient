<?php $this->load->view('header')?>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Body main wrapper start -->
	<div class="wrapper">

		<?php $this->load->view('toolbar');?>
		<!-- Start Bradcaump area -->
		<!-- <div class="ht__bradcaump__area"
            style="background: rgba(0, 0, 0, 0) url<?php //echo base_url();?>/assets/images/bg/4.jpg) no-repeat scroll center center / cover ;">-->
		<div class="ht__bradcaump__wrap">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bradcaump__inner">
							<nav class="bradcaump-inner">
								<a class="breadcrumb-item" href="<?php echo base_url();?>">Home</a>
								<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
								<span class="breadcrumb-item active">Products</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Product Grid -->
	<section class="htc__product__grid bg__white ptb--100">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
					<div class="htc__product__rightidebar">
						<div class="htc__grid__top">
							<div class="htc__select__option">
								<select class="ht__select">
									<option>Default softing</option>
									<option>Sort by popularity</option>
									<option>Sort by average rating</option>
									<option>Sort by newness</option>
								</select>
								<select class="ht__select">
									<option>Show by</option>
									<option>Sort by popularity</option>
									<option>Sort by average rating</option>
									<option>Sort by newness</option>
								</select>
							</div>
							<!-- Start List And Grid View -->
							<ul class="view__mode" role="tablist">
								<li role="presentation" class="grid-view active"><a href="#grid-view" role="tab"
										data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
								<li role="presentation" class="list-view"><a href="#list-view" role="tab"
										data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
							</ul>
							<!-- End List And Grid View -->
						</div>
						<!-- Start Product View -->
						<div class="row">
							<div class="shop__grid__view__wrap">
								<div role="tabpanel" id="grid-view"
									class="single-grid-view tab-pane fade in active clearfix">
									<!-- Start Single Product -->
									<?php
                                    foreach ($data_produk as $produk) {
                                        $price_total = $produk['product_price'] - ($produk['product_price'] * ($produk['product_discount']/100));
                                        $pricetotal = Home::rupiah($price_total);
                                        echo "

                                        <div class='col-md-4 col-lg-4 col-sm-6 col-xs-12' style='height:391px;'>
                                        <div class='category'>
                                            <div class='ht__cat__thumb'>
                                                <a href='product-details?product_id=".$produk['id']."'>
                                                    <img src='upload/product/".$produk['product_url']."' alt='product images' style='height: auto !important;width: 100% !important;'>
                                                </a>
                                            </div>
                                            <div class='fr__hover__info'>
                                                <ul class='product__action'>
                                                    <li><a href='wishlist'><i class='icon-heart icons'></i></a></li>

                                                    <li>
                                                    <form method='POST' action='addToCart'>
                                                        <input type='hidden' name='product_id' value='".$produk['id']."' id='product_id'/>
                                                        <a href='#' class='addproduct'><i class='icon-handbag icons'></i></a>
                                                    </form>
                                                    </li>
                                                    
                                                    

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
						<!-- End Product View -->
					</div>


				</div>
				<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
					<div class="htc__product__leftsidebar">
						<!-- Start Prize Range -->
						<div class="htc-grid-range">
							<h4 class="title__line--4">Price</h4>
							<div class="content-shopby">
								<div class="price_filter s-filter clear">
									<form action="#" method="GET">
										<div id="slider-range"></div>
										<div class="slider__range--output">
											<div class="price__output--wrap">
												<div class="price--output">
													<span>Harga :</span><input type="text" id="amount" readonly>
												</div>

											</div>
											<div class="price--filter">
												<a href="#">Filter</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- End Prize Range -->
						<!-- Start Category Area -->
						<div class="htc__category">
							<h4 class="title__line--4">categories</h4>

							<ul class="ht__cat__list">
								<?php
                                    foreach ($data_kategori as $kategori) {
                                        // echo "<form action='product-grid' method='post'>
                                        //     <button type='submit' name='id_kategori' value=".$kategori['id']." class='btn-link'>".$kategori['nama']."</button>
                                        // </form>";
                                        echo " <li class='active'><a href='product-grid?category_id=".$kategori['id']."&no=1')>".$kategori['name']."</a></li>";
                                    }
                                ?>

							</ul>
						</div>
						<!-- End Single Product -->
					</div>
				</div>
				<!-- End Best Sell Area -->
			</div>
		</div>
		</div>
		</div>
		<!-- Start Pagenation -->
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<ul class="htc__pagenation" style="margin-bottom:40px;">
					<?php
                    $arr = range(1,$count);
                       foreach ($arr as $item) {
                            if($item == $active){
                                echo " <li class='active'><a href='product-grid?category_id=".$id_kategori."&no=".$item."')>".$item."</a></li>";
                            }
                            else{
                                echo " <li><a href='product-grid?category_id=".$id_kategori."&no=".$item."')>".$item."</a></li>";
                            }
                    }
                    ?>

				</ul>
			</div>
		</div>
		<!-- End Pagenation -->
	</section>
	<!-- End Product Grid -->
	</div>
	<!-- Body main wrapper end -->
	<script>
		$('.addproduct').click(function (e) {
			//preventing the default link redirection
			e.preventDefault();
			$(this).closest('form').submit();
		});

	</script>

	<?php $this->load->view('footer')?>
