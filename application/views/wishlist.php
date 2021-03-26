<?php $this->load->view('header')?>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Body main wrapper start -->
	<div class="wrapper">
		<?php $this->load->view('toolbar');?>
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area"
			style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
			<div class="ht__bradcaump__wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="bradcaump__inner">
								<nav class="bradcaump-inner">
									<a class="breadcrumb-item" href="">Home</a>
									<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
									<span class="breadcrumb-item active">Wishlist</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- wishlist-area start -->
		<div class="wishlist-area ptb--100 bg__white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="wishlist-content">
							<form action="#">
								<div class="wishlist-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-remove"><span class="nobr">Remove</span></th>
												<th class="product-thumbnail">Image</th>
												<th class="product-name"><span class="nobr">Product Name</span></th>
												<th class="product-price"><span class="nobr"> Unit Price </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Stock Status
													</span></th>
												<th class="product-add-to-cart"><span class="nobr">Add To Cart</span>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="product-remove"><a href="deleteWishList()">×</a></td>
												<td class="product-thumbnail"><a href="#"><img
															src="assets/images/product-2/pro-1/1.jpg" alt="" /></a></td>
												<td class="product-name"><a href="#">Vestibulum suscipit</a></td>
												<td class="product-price"><span class="amount">£165.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img
															src="assets/images/product-2/pro-1/2.jpg" alt="" /></a></td>
												<td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
												<td class="product-price"><span class="amount">£50.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- wishlist-area end -->
	</div>
	<?php $this->load->view('footer')?>
