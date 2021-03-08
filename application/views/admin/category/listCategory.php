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
                        <h1 class="mt-4">Category</h1>
                        <?php echo validation_errors(); ?>
                        <?php if(isset($msg)){
                        echo $msg;
                        } ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary float-right" style="margin-bottom:20px;" onclick="addClicked('addCategory');">Add Category</button>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                             <tr>
                                                <th>No</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $number=0; ?>
                                            <!--<a href='#' class='btn btn-success'><i class='fas fa-edit' style='font-size:14px></i></a> -->
                                            <?php foreach($data as $category){
                                                $number++;
                                                echo "<tr>
                                                <td>".$number."</td>
                                                <td>".$category['nama']."</td>
                                                <td>
                                                    <form action='editCategory' method='POST' style='float:left;margin-right:5px;'>
                                                        <input type='hidden' value='".$category['id']."' name='id' />
                                                        <input type='submit' class='btn btn-success' value='&#xf044;' style='font-family: Font Awesome\ 5 Free;'/>
                                                    </form>
                                                    <form action='deleteCategory' method='POST'>
                                                        <input type='hidden' value='".$category['id']."' name='id' />
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
