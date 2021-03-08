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
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img
                                                            src="assets/images/product-2/pro-1/1.jpg"
                                                            alt="" /></a></td>
                                                <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                                <td class="product-price"><span class="amount">£165.00</span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock">In
                                                        Stock</span></td>
                                                <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img
                                                            src="assets/images/product-2/pro-1/2.jpg"
                                                            alt="" /></a></td>
                                                <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                                <td class="product-price"><span class="amount">£50.00</span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock">In
                                                        Stock</span></td>
                                                <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="wishlist-share">
                                                        <h4 class="wishlist-share-title">Share on:</h4>
                                                        <div class="social-icon">
                                                            <ul>
                                                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist-area end -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="assets/images/brand/1.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/2.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/3.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/4.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/5.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/5.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/1.png"
                                            alt="brand images"></a></li>
                                <li><a href="#"><img src="assets/images/brand/2.png"
                                            alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details"><img src="assets/images/banner/bn-3/1.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/2.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/3.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/4.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/5.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/6.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/1.jpg"
                            alt="banner images"></a></li>
                <li><a href="product-details"><img src="assets/images/banner/bn-3/2.jpg"
                            alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
        <footer id="htc__footer">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">my account</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist">Wishlist</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Our service</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="cart">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="wishlist">Wishlist</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">NEWSLETTER </h2>
                                <div class="ft__inner">
                                    <div class="news__input">
                                        <input type="text" placeholder="Your Mail*">
                                        <div class="send__btn">
                                            <a class="fr__btn" href="#">Send Mail</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
            </div>
            <!-- End Footer Widget -->
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All
                                    right reserved.</p>
                                <a href="#"><img src="assets/images/others/shape/paypol.png"
                                        alt="payment images"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <?php $this->load->view('footer')?>