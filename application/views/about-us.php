<?php $this->load->view('header') ?>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <style>
    .about-info>h1 {
        padding-top: 20px;
        font-family: "Playfair Display", serif;
        font-size: 2em;
    }

    .about-info>hr {
        background-color: #BF8C3B !important;
        width: 50%;
        max-width: 300px;
        height: 3px;
    }

    .about-info>p {
        line-height: 1.5;
        padding: 10px;
        font-family: "Montserrat", sans-serif
    }

    .containerOne1 .flex1 {
        display: flex;
        justify-content: space-between;
    }

    .about-info {
        background-color: hsl(0, 0%, 94%);
    }
    </style>
    <div class="wrapper">
        <?php $this->load->view('toolbar'); ?>
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
                                    <span class="breadcrumb-item active">About Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 ">
                        <div class="about-info text-justify">
                            <h1>About Armada Orient</h1>
                            <hr />
                            <p>
                                Our company is small and personal. Our aim is to give the best possible service that we
                                can,
                                solving your supply problems so that you can concentrate on the job of selling.</p>
                            <p>
                                We are based in Solo (also known as Surakarta) in Central Java.</p>
                            <p> This beautiful old city is a major centre for Indonesian furniture production. It is
                                also
                                the birthplace of Javanese culture and is very inexpensive and laid back. There is a lot
                                to
                                see and do around Solo – old palaces, a wonderful antique market, ancient temples,
                                mountain
                                climbing, shopping for batik and handicrafts.</p>
                            <p> Our main product lines are antiques, recycled timber production, handicrafts and
                                building
                                materials. We also have good contacts for many other items : pottery, glassware,
                                ironwork,
                                lighting, upholstery. You name it, and we can find it.</p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <img src="assets/images/map.jpg" style="display:table-cell;vertical-align: bottom" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="about-info text-justify">
                            <img src="assets/images/about1.jpg" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="about-info text-justify">
                            <p>
                                C.V. Armada Orient was established in Solo in 1999. Initially we were mainly a buying
                                office for Australian customers, with the emphasis in early days on cheap mahogany
                                furniture and handicrafts.</p>
                            <p>
                                Within a few very short years however we evolved. Our plan was to sell better quality
                                kiln-dried product. We built our own kilns, instituted more rigorous quality control and
                                tried in every way to improve our product. We started doing our own production. And we
                                worked closely with our customers, asking them for feed-back and suggestions.</p>
                            <p> Our market area changed too – soon we were selling to Europe, then US, Asia, and the
                                Middle East. These days, we have buyers spread out all over the world. And many of them
                                have been loyal customers for years and years.</p>
                            <p>Today has 20 years experience manufacturing, sourcing, and exporting goods. And along the
                                way we have made good friends with a lot of wonderful people around the world.</p>

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <?php $this->load->view('footer'); ?>