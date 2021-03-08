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
    font-size: 1em;
    color: rgb(255, 255, 255);
}

.sticky__header.scroll-header {
    background: rgba(255, 255, 255, 1) none repeat scroll 0 0;
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

.owl-item {}

.owl-item:before {}
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
                        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-8">
                            <div class="toolbar-center">
                                <img src="assets/images/logo/logo.png" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <div class="header__right toolbar-center">
                                <div class="header__search search search__open">
                                    <a href="#"><i class="icon-magnifier icons"></i></a>
                                </div>
                                <div class="header__account">
                                    <a href="#"><i class="icon-user icons"></i></a>
                                </div>
                                <div class="htc__shopping__cart">
                                    <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                    <a href="#"><span class="htc__qua">2</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="<?php echo base_url();?>">Home</a> </li>
                                    <li><a href="product-grid">Products</a></li>
                                    <li><a href="contact">contact</a></li>

                                    <!--<li><a href="<?php echo base_url();?>">Home</a></li>
                                    <li><a href="blog">blog</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog-details">Blog Details</a></li>
                                            <li><a href="cart">Cart page</a></li>
                                            <li><a href="checkout">checkout</a></li>
                                            <li><a href="contact">contact</a></li>
                                            <li><a href="product-grid">product grid</a></li>
                                            <li><a href="product-details">product details</a></li>
                                            <li><a href="wishlist">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">contact</a></li>
                               
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
                                    <li><a href="blog">blog</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog-details">Blog Details</a></li>
                                            <li><a href="cart">Cart page</a></li>
                                            <li><a href="checkout">checkout</a></li>
                                            <li><a href="contact">contact</a></li>
                                            <li><a href="product-grid">product grid</a></li>
                                            <li><a href="product-details">product details</a></li>
                                            <li><a href="wishlist">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">contact</a></li>-->
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
    $('.cart__menu').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').addClass('shopping__cart__on');
        $('.body__overlay').addClass('is-visible');
    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.body__overlay').removeClass('is-visible');
    });
    </script>

</div>