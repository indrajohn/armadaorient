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
        background: url('https://armadaorient.co/wp-content/uploads/2020/10/bg1.jpg');
        opacity: .7;
    }

    .slide-two::before {
        content: "";
        background: url('https://armadaorient.co/wp-content/uploads/2020/10/bg2.jpg');
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
        height: 100vh;
        scroll-snap-align: start;
    }

    html {
        scroll-behavior: smooth;
        scroll-snap-type: mandatory;
        scroll-snap-points-y: repeat(100vh);
    }
    </style>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <?php $this->load->view('toolbar');?>
        <!-- Start Slider Area -->
        <section>
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
                        <div style="position:absolute;bottom:0;left:50%;">
                            <div class="cr__btn" style=" display: flex;align-items: center;">
                                <a href="#product" style="background:initial;height: 100px;">Explore <img
                                        src=" https://armadaorient.co/wp-content/uploads/2020/10/arrowdown.png" style="height:30px;width:10px;  margin-left: auto;
  margin-right: auto;
  display: block;" /></a>
                            </div>
                        </div>>
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
                        <div style="position:absolute;bottom:0;left:50%;">
                            <div class="cr__btn" style=" display: flex;align-items: center;">
                                <a href="#product" style="background:initial;height: 100px;">Explore <img
                                        src=" https://armadaorient.co/wp-content/uploads/2020/10/arrowdown.png" style="height:30px;width:10px;  margin-left: auto;
  margin-right: auto;
  display: block;" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Slide -->
                </div>
            </div>

        </section>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section id="product" class="htc__category__area ptb--100">
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
                                $price_total = $produk['harga_produk'] - ($produk['harga_produk'] * ($produk['discount']/100));
                                $pricetotal = Home::rupiah($price_total);

                                echo "<div class='col-md-4 col-lg-4 col-sm-4 col-xs-12'>
                                <div class='category'>
                                    <div class='ht__cat__thumb'>
                                        <a href='product-details'>
                                            <img src='upload/product/".$produk['url_produk']."' alt='product images' style='height: auto !important;width: 100% !important;'>
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
                                        <h4><a href='product-details'>".$produk['nama_produk']."</a></h4>
                                        <ul class='fr__pro__prize'>
                                            <li class='old__prize'><strike>" .Home::rupiah($produk['harga_produk']) ."</strike></li>
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
        <!-- End Category Area -->
        <!-- Start Prize Good Area
        <section class="htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Contrary to popular belief is simply rand.</h2>
                            <h3>Professor at Hamp deny dney College.</h3>
                            <a class="fr__btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="assets/images/banner/big-img/1.png" alt="banner images">
                            </div>
                            <div class="banner__info">
                                <div class="pointer__tooltip pointer--3 align-left">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Left</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--4 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Top</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--5 align-bottom">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--6 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--7 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Prize Good Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                            <!--<p>But I must explain to you how all this mistaken idea</p>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details">
                                        <!--<img src="assets/images/product/9.jpg" alt="product images">-->
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
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details">
                                        <!--<img src="assets/images/product/10.jpg" alt="product images">-->
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
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details">
                                        <!--<img src="assets/images/product/11.jpg" alt="product images">-->
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
                        </div>
                        <!-- End Single Category -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <?php
$this->load->view('footer'); ?>