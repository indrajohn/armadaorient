<?php $this->load->view('header') ?>
<style>
	.text-danger>p {
		color: #a94442;
	}

</style>

<body>

	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
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
									<span class="breadcrumb-item active">Login</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<section>
			<div class="container" style="height:500px">
				<div class="row" style="margin-top:40px">
					<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4" }>
						<div class="card shadow-lg border-0 rounded-lg mt-5">
							<div class="card-header">
								<h3 class="text-center font-weight-light my-4">Login</h3>
							</div>
							<div class="card-body">
								<form method="post" action="<?php echo base_url();?>login">
									<div class="form-group">
										<label class="small mb-1" for="username">Username</label>
										<input class="form-control py-4" id="username" name="username" type="text" />
										<span class="text-danger"><?php echo form_error('username');?></span>
									</div>
									<div class="form-group">
										<label class="small mb-1" for="password">Password</label>
										<input class="form-control py-4" id="password" name="password"
											type="password" />
										<span class="text-danger"><?php echo form_error('password');?></span>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input" id="rememberPasswordCheck"
												type="checkbox" />
											<label class="custom-control-label" for="rememberPasswordCheck">Remember
												password</label>
										</div>
									</div>
									<span class="text-danger"><?php   echo $this->session->flashdata("error");?></span>
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
										<a class="small" href="password.html">Forgot Password?</a>
										<button type="submit" class="btn btn-primary">Login</button>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- Body main wrapper end -->

	<!-- Placed js at the end of the document so the pages load faster -->
	<?php $this->load->view('footer'); ?>
