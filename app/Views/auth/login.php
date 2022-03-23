<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Application</title>

    <!-- Custom fonts for this template-->
    <link href="assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-login-image {
            background-image: url("<?= base_url('assets/startbootstrap/img/Lambang_BPS.png'); ?>");
            background-repeat: no-repeat;
            background-size: 90%;
        }
    </style>
</head>

<body class="bg-gradient-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5 pt-lg-5">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-lg-5 p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Badan Pusat Statistik</h1>
                                        <span class="text-muted">Masuk Aplikasi</span>
                                    </div>
                                    <?php if (session()->get('pesan')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= session()->get('pesan') ?>
                                        </div>
                                    <?php endif; ?>
                                    <form class="user" action = "/login" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Kode Petugas" name="KODE_PETUGAS">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane"></i> Masuk
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="https://docs.google.com/spreadsheets/d/1DsNYc4CZOQ18hKPzDqXllM3z808mjLTj/edit?usp=sharing&ouid=101281481195089421445&rtpof=true&sd=true">Lihat Kode Petugas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/startboostrap/js/sb-admin-2.min.js"></script>

</body>

</html>