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

    .about-info {
        background-color: hsl(0, 0%, 94%)
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
                    <div class="col-lg-6 col-sm-6 col-md-6 about-info text-justify">
                        <h1>About Armada Orient</h1>
                        <hr />
                        <p class="text-justify">
                            Our company is small and personal. Our aim is to give the best possible service that we can,
                            solving your supply problems so that you can concentrate on the job of selling.</p>
                        <p>
                            We are based in Solo (also known as Surakarta) in Central Java.</p>
                        <p> This beautiful old city is a major centre for Indonesian furniture production. It is also
                            the birthplace of Javanese culture and is very inexpensive and laid back. There is a lot to
                            see and do around Solo – old palaces, a wonderful antique market, ancient temples, mountain
                            climbing, shopping for batik and handicrafts.</p>
                        <p> Our main product lines are antiques, recycled timber production, handicrafts and building
                            materials. We also have good contacts for many other items : pottery, glassware, ironwork,
                            lighting, upholstery. You name it, and we can find it.</p>

                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 d-flex justify-content-end">
                        <img src="assets/images/map.jpg" />
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
            </div>
            <div class="d-flex flex-column-reverse">
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
            </div>

        </section>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <script>
    $(":input").bind('keyup mouseup', function() {
        var index = $(this).closest('tr').index();
        var total = price * this.value;
        var total_cart = <?php echo $price_all = 0 ?> + total;
        var htmltes = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ",00";
        var idTotal = '#price_total' + index;
        $(this).parents().find(idTotal).html(htmltes);
    });
    </script>
    <?php $this->load->view('footer'); ?>