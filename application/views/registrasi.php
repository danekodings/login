

<html>

	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registrasi</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>images/favicon.png" />
	</head>
	<body>
	<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url(); ?>images/logo-dark.svg" alt="logo">
                <div class="card-body">
            <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url(); ?>register/proses">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
                    <div class="form-group">
						<label for="nama">Full Name</label>
						<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>	
	<!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>js/template.js"></script>
  <script src="<?= base_url(); ?>js/settings.js"></script>
  <script src="<?= base_url(); ?>js/todolist.js"></script>
  <!-- endinject -->
	</body>
</html>
