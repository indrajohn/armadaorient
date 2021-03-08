<!DOCTYPE html>
<html lang="en">
   <?php $this->load->view('admin/_partials/head'); ?>
    <body class="sb-nav-fixed">
         <?php $this->load->view('admin/_partials/navbar'); ?>
        <div id="layoutSidenav">
        <?php $this->load->view('admin/_partials/sidebar'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Product</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary float-right" style="margin-bottom:20px;" onclick="addClicked('addProduct');">Add Product</button>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>

                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Stock</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                             <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Stock</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!--<a href='#' class='btn btn-success'><i class='fas fa-edit' style='font-size:14px></i></a> -->
                                            <?php foreach($data as $product){
                                                echo "<tr>
                                                <td>".$product['nama_produk']."</td>
                                                <td>".$product['nama_category']."</td>
                                                <td>".$product['harga_produk']."</td>
                                                <td>".$product['discount']."</td>
                                                <td>".$product['stock']."</td>
                                                <td>
                                                    <form action='editProduct' method='POST' style='float:left;margin-right:5px;'>
                                                        <input type='hidden' value='".$product['id']."' name='id' />
                                                        <input type='submit' class='btn btn-success' value='&#xf044;' style='font-family: Font Awesome\ 5 Free;'/>
                                                    </form>
                                                    <form action='deleteProduct' method='POST'>
                                                        <input type='hidden' value='".$product['id']."' name='id' />
                                                        <input type='submit' class='btn btn-danger' value='&#xf2ed;' style='font-family: Font Awesome\ 5 Free;'/>
                                                    </form>
                                                </td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php $this->load->view('admin/_partials/footer'); ?>
            </div>
        </div>
       <?php $this->load->view('admin/_partials/js'); ?>
    </body>
</html>
