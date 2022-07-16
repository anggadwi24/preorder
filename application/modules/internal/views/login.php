
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets_admin/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>assets_admin/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets_admin/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="<?= base_url() ?>assets_admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/css/themify-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_admin/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-dark">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-5 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="pt-4 text-center">Login</h2>
                            </div>
                            <div class="card-body">
                                <div class="p-15">
                                    
                                    <p class="m-t-15 font-size-13">Silahkan Masukkan Username dan Password untuk login</p>
                                    <form action="<?= base_url('admin/auth_admin/proses_login') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User name" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        
                                        <div class="m-t-20 text-right">
                                            <button class="btn btn-gradient-success" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- build:js <?= base_url() ?>assets_admin/js/vendor.js -->
    <!-- core dependcies js -->
    <script src="<?= base_url() ?>assets_admin/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets_admin/vendor/PACE/pace.min.js"></script>
    <script src="<?= base_url() ?>assets_admin/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>     
    <script src="<?= base_url() ?>assets_admin/vendor/d3/d3.min.js"></script>
    <!-- endbuild -->

    <!-- build:js <?= base_url() ?>assets_admin/js/app.min.js -->
    <!-- core js -->
    <script src="<?= base_url() ?>assets_admin/js/app.js"></script>
    <!-- configurator js -->
    <script src="<?= base_url() ?>assets_admin/js/configurator.js"></script>
    <!-- endbuild -->

    <!-- page js -->
    
</body>

</html>