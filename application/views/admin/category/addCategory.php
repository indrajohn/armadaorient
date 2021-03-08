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
                    <div class="card mb-4" style="margin-top:30px;">
                     <div class="card-body">
                     <?php echo validation_errors(); ?>
                    <form action="addCategory" method="POST">
                        <div class="form-group">
                            <label for="productName">Category Name</label>
                            <input type="text" name="categoryname" class="form-control" id="categoryname" aria-describedby="categoryname" placeholder="Enter Category Name">
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                    </form>
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
