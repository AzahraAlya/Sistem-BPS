<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="/assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/startbootstrap/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/assets/startbootstrap/css/dboard.css" rel="stylesheet">
    <link href="/assets/js/sweetalert2.min.css">

    <link href="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Evaluasi Kinerja<sup>bps</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pegawai</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/profilpegawai">
                    <i class="fas fa-user-circle"></i>
                    <span>Profil</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-user-cog"></i>
                    <span>Ganti Password</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout/pencacah" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Keluar</span></a>
            </li>
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Yakin ingin keluar?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="/logout">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

           
            <!-- Sidebar Toggle (Topbar) -->


        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?= $this->renderSection('content'); ?> 
            </div>
            <!-- End of Main Content -->

            <!-- Bootstrap core JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
            <script src="/assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/assets/startbootstrap/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/assets/startbootstrap/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/assets/startbootstrap/js/demo/chart-area-demo.js"></script>
            <script src="/assets/startbootstrap/js/demo/chart-pie-demo.js"></script>

            <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
           <script src="/assets/startbootstrap/js/demo/datatables-demo.js"></script>

            <script src="/assets/js/sweetalert2.min.js"></script>
         
          
        </div>
    </div>

</body>

<?= $this->renderSection('myscript'); ?>

</html>
