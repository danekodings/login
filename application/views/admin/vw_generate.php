<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
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
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="typcn typcn-th-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/user.jpg" alt="profile" />
                            <span class="nav-profile-name"><?php echo $this->session->userdata('full_name'); ?></span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">
                            <i class="typcn typcn-cog-outline mx-0"></i>
                            <span class="count"></span>
                        </a>

                        <p class="mb-0 font-weight-normal float-left dropdown-header">Log Out</p>

                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
            
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item ml-0">
                        <h4 class="mb-0">Dashboard</h4>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex align-items-baseline">
                            <p class="mb-0"><a href="home">Home</a></p>
                            <i class="typcn typcn-chevron-right"></i>
                            <p class="mb-0">Event</p>
                            <i class="typcn typcn-chevron-right"></i>
                            <p class="mb-0">Sertifikat</p>
                            <i class="typcn typcn-chevron-right"></i>
                            <p class="mb-0">Generate Sertifikat</p>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">

                </ul>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
               
              
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="typcn typcn-document-text menu-icon"></i>
                            <span class="menu-title">Menu</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="event_certificate">Event</a></li>
                                <li class="nav-item"> <a class="nav-link" href="sertifikat">Sertifikat</a></li>
                                <li class="nav-item"> <a class="nav-link" href="generate">Generate Sertifikat</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sertifikat</h4>
                                <a href="generate/tambah" class="btn btn-primary">
                                    Tambah 
                                </a>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center text-body">
                                                <th>NO</th>
                                                <th>Certificate Id</th>
                                                <th>User Id</th>
                                                <th>Event Id</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1;
                                        foreach ($certificate_assignment as $cra) : ?>
                                            <tbody>
                                                <tr class="text-center text-dark">
                                                    <td class="text-body"><?= $no++ ?></td>
                                                    <td class="text-body"><?= $cra->certificate_id ?></td>
                                                    <td class="text-body"><?= $cra->user_id ?></td>
                                                    <td class="text-body"><?= $cra->event_id ?></td>
                                                     
                                                    <td>
                                                    <a href="<?= base_url('generate/download/' . $cra->assignment_id) ?>" class="btn btn-primary btn-sm"></i>Download</a>
                                                    <a href="<?= base_url('generate/delete/' . $cra->assignment_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                                                    </td>
                                      
                                                </tr>
                                            </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->


<!-- Modal -->

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="<?= base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?= base_url(); ?>vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>js/template.js"></script>
    <script src="<?= base_url(); ?>js/settings.js"></script>
    <script src="<?= base_url(); ?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
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
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="typcn typcn-th-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/user.jpg" alt="profile" />
                            <span class="nav-profile-name"><?php echo $this->session->userdata('nama'); ?></span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">
                            <i class="typcn typcn-cog-outline mx-0"></i>
                            <span class="count"></span>
                        </a>

                        <p class="mb-0 font-weight-normal float-left dropdown-header">Log Out</p>

                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
            
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item ml-0">
                        <h4 class="mb-0">Dashboard</h4>
                    </li>
                    <li class="nav-item">
                        <div class="d-flex align-items-baseline">
                            <p class="mb-0"><a href="home">Home</a></p>
                            <i class="typcn typcn-chevron-right"></i>
                            <p class="mb-0">Event</p>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">

                </ul>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
               
              
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="typcn typcn-document-text menu-icon"></i>
                            <span class="menu-title">Menu</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="event_certificate">Event</a></li>
                                <li class="nav-item"> <a class="nav-link" href="sertifikat">Sertifikat</a></li>
                                <li class="nav-item"> <a class="nav-link" href="generate">Generate Sertifikat</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sertifikat</h4>
                                <a href="sertifikat/tambah" class="btn btn-primary">
                                    Tambah 
                                </a>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center text-body">
                                                <th>NO</th>
                                                <th>Participant Name</th>
                                                <th>Event Name</th>
                                                <th>Event Date</th>
                                                <th>Certificate Teks</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1;
                                        foreach ($sertifikat as $sft) : ?>
                                            <tbody>
                                                <tr class="text-center text-dark">
                                                    <td class="text-body"><?= $no++ ?></td>
                                                    <td class="text-body"><?= $sft->participant_name ?></td>
                                                    <td class="text-body"><?= $sft->event_name ?></td>
                                                    <td class="text-body"><?= $sft->event_date ?></td>
                                                    <td class="text-body"><?= $sft->certificate_text ?></td>
                                                     
                                                    <td>
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $sft->certificate_id ?>"><i class="typcn typcn-edit btn-icon-append"></i></button>
                                                        <a href="<?= base_url('sertifikat/hapus/' . $sft->certificate_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                                                            <i class="typcn typcn-delete-outline btn-icon-append"></i></a>
                                                    </td>
                                      
                                                </tr>
                                            </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->


<!-- Modal -->
<!--  Modal Edit -->
<?php foreach ($sertifikat as $sft) : ?>
                <div class="modal" id="edit<?= $sft->certificate_id ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Data Sertifikat</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="<?= base_url('sertifikat/edit/' . $sft->certificate_id) ?>" method="POST">
                                <div class="form-group text-body">
                                        <label>Participant Name</label>
                                        <input type="text" name="participant_name" class="form-control" value="<?= $sft->participant_name ?>">
                                        <?= form_error('participant_name', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Event Name</label>
                                        <input type="text" name="event_name" class="form-control" value="<?= $sft->event_name ?>">
                                        <?= form_error('event_name', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Event Date</label>
                                        <input type="date" name="event_date" class="form-control" value="<?= $sft->event_date ?>">
                                        <?= form_error('event_date', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group text-body">
                                        <label>Certificate Text</label>
                                        <textarea name="certificate_text" class="form-control"><?= $sft->certificate_text ?></textarea>
                                        <?= form_error('location', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                   
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"> </i> Simpan </button>
                                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"> </i> Reset </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- end Modal Edit -->

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="<?= base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?= base_url(); ?>vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>js/template.js"></script>
    <script src="<?= base_url(); ?>js/settings.js"></script>
    <script src="<?= base_url(); ?>js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>