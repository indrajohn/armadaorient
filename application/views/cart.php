<?php $this->load->view('header')?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
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
                                    <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">products</th>
                                            <th scope="col">name of products</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(sizeof($dataCart) == 0){
                                            echo "<tr scope='row'><td>Data Kosong</td></tr>";
                                        }
                                        $price_all = 0;
                                        $count=0;
                                        $myObjt = array();
                                        foreach ($dataCart as $cart) {
                                            var_dump($cart);?>
                                            <tr scope="row">
                                            <td><img
                                                        src='assets/images/product-2/cart-img/1.jpg' style='width:100px;height:100px;'
                                                        alt='product img' /></td>
                                            <td><?php echo $cart['nama_produk'];  ?>
                                            </td>
                                            <?php
                                                        $price_per_piece = 0;
                                                        $price_per_piece = $cart['harga_produk'] - ($cart['harga_produk'] * ($cart['discount']/100));
                                                        $priceperpieceinIDR = $this->utility->rupiah($price_per_piece);
                                                        $price_total = $price_per_piece*$cart['total_produk'];
                                                        $price_all = $price_all + $price_total;
                                                    ?>
                                            <td id='price'><?php echo $priceperpieceinIDR; ?></td>
                                            <td><input type='number' min="1" value='<?php echo $cart['total_produk']?>' style="width:40px;"/></td>
                                            <td id='price_total'><?php echo $this->utility->rupiah($price_total) ?></td>
                                            <td>
                                                <form action="deleteCartByID" method="POST"> 
                                                    <input type="text" name="id_product" hidden value="<?php echo $cart['id_produk']  ?>" />
                                                    <button type="submit" class="btn btn-primary" >
                                                    <i class='icon-trash icons'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                                    <?php $count++;}?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                    <div class="htc__cart__total">
                                        <h6>cart total</h6>
                                        <div class="cart__desk__list">
                                            <ul class="cart__desc">
                                                <li>cart total</li>
                                                <li>tax</li>
                                                <li>shipping</li>
                                            </ul>
                                            <ul class="cart__price">
                                                <li class="cart_total"><?php echo "Rp. ".$this->utility->rupiah($price_all); ?></li>
                                                <li>Rp 0,00</li>
                                                <li>Rp 0,00</li>
                                            </ul>
                                        </div>
                                        <div class="cart__total">
                                            <span>order total</span>
                                            <span class="order_total"><?php echo "Rp. ".$this->utility->rupiah($price_all); ?></span>
                                        </div>
                                        <ul class="payment__btn">
                                            <!--<li class="active"><a href="checkout">payment</a></li>-->
                                            <li class="active"><a href="checkout">payment</a></li>
                                            <li><a href="#">continue shopping</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <script>
        $(":input").bind('keyup mouseup', function () {
            var index = $(this).closest('tr').index();
            var total = price * this.value;
            var total_cart = <?php echo $price_all=0 ?> + total;
            var htmltes = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ",00";
            var idTotal = '#price_total'+index;
            $(this).parents().find(idTotal).html(htmltes);
});

    </script>
    <?php $this->load->view('footer');?>