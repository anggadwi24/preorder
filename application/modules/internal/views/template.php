<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title  ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>template/admin/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link href="<?= base_url() ?>template/admin/vendor/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
    <link href="<?= base_url() ?>template/admin/vendor/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- page css -->
    <link href="<?= base_url() ?>template/admin/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/vendor/summernote/dist/summernote-bs4.css"  rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/datatables/media/css/dataTables.bootstrap4.min.css" />

    <!-- core css -->
    <link href="<?= base_url() ?>template/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/css/themify-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/css/app.css" rel="stylesheet">
    <link href="<?= base_url() ?>template/admin/vendor/sweetalert/lib/sweet-alert.css" rel="stylesheet">

    <style type="text/css">
        .kanan{
            float: right;
        }
    </style>

</head>

<body>
    <div class="app header-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <!-- <a href="index.html">
                            <div class="logo logo-dark" style="background-image: url('<?= base_url() ?>template/admin/images/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('<?= base_url() ?>template/admin/images/logo/logo-white.png')"></div>
                        </a> -->
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class="search-box">
                            <a class="search-toggle" href="javascript:void(0);">
                                <i class="search-icon mdi mdi-magnify"></i>
                                <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                            </a>
                        </li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <div class="search-predict">
                                <div class="search-wrapper scrollable">
                                    
                                </div>
                                <div class="search-footer">
                                    <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="<?= base_url() ?>template/admin/images/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="<?= base_url() ?>template/admin/images/avatars/thumb-13.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Nama</span>
                                                <span class="sub-title">Level</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="<?= base_url('internal/profile') ?>">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('internal/logout') ?>">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <center>
                                <img src="https://as2.ftcdn.net/v2/jpg/03/96/67/29/1000_F_396672955_WaAZKFeDvn9MTW0KAlSnZnnQ9XCxz5MM.jpg" width="40%">
                            </center>
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('internal/') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="side-nav-header">
                            <span>Master Data</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('internal/produk') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-vector-arrange-above"></i>
                                </span>
                                <span class="title">Produk</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('internal/member') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-account"></i>
                                </span>
                                <span class="title">Member</span>
                            </a>
                        </li>
                        
                        <li class="side-nav-header">
                            <span>Transaksi</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?= base_url('internal/transaksi') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-vector-arrange-above"></i>
                                </span>
                                <span class="title">Transaksi</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="<?= base_url('internal/laporan') ?>">
                                <span class="icon-holder">
                                    <i class="mdi mdi-file"></i>
                                </span>
                                <span class="title">Laporan</span>
                            </a>
                        </li>
                        
                    
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                    <div class="page-header">

                    <h2 class="header-title"><?= $page  ?></h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="<?= base_url('internal/') ?>" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                            <?= $breadcrumb ?>
                            
                        </nav>
                    </div>
                    <?= $right ?>
                   

                    </div> 

                <?= $contents ?>


                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright text-center">
                            <span>Copyright © 2022 . All rights reserved.</span>
                            <!-- <span class="go-right">
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span> -->
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <!-- build:js <?= base_url() ?>template/admin/js/vendor.js -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    
    <script src="<?= base_url() ?>template/admin/vendor/sweetalert/lib/sweet-alert.js"></script>

    <?php 
    if($this->session->flashdata('error')){

    ?>
    <script>

    swal(
    {
        title: 'Peringatan',
        text: '<?= $this->session->flashdata('error') ?>',
        type: 'warning',
        
    }
    )
    </script>   
    <?php
    }
    ?>
    <?php
    if($this->session->flashdata('success')){ ?>
    <script>
    swal(
    {
        title: 'Berhasil',
        text: '<?= $this->session->flashdata('success') ?>',
        type: 'success',
        
    }
    )
    </script>
    <?php }?>
    <!-- core dependcies js -->
    <script src="<?= base_url() ?>template/admin/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/PACE/pace.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>     
    <script src="<?= base_url() ?>template/admin/vendor/d3/d3.min.js"></script>
    <!-- endbuild -->

    <!-- build:js <?= base_url() ?>template/admin/js/app.min.js -->
    <!-- core js -->
    <script src="<?= base_url() ?>template/admin/js/app.js"></script>
    <!-- configurator js -->
    <script src="<?= base_url() ?>template/admin/js/configurator.js"></script>
    <!-- endbuild -->

    <!-- page js -->
    <script src="<?= base_url() ?>template/admin/vendor/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="<?= base_url() ?>template/admin/js/forms/form-elements.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>template/admin/js/tables/data-table.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/timepicker/moment.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/timepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="<?= base_url() ?>template/admin/vendor/timepicker/bootstrap-material-datetimepicker.js"></script>
    <?php if(isset($js)){
        echo "<script  type='module' src='".$js."'></script>";
    } ?>
   

    
</body>

</html>