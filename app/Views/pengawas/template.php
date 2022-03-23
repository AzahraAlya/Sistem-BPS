<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/startbootstrap/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/assets/startbootstrap/css/dboard.css" rel="stylesheet">

    <link href="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
            
            <div class="sidebar-brand-text mx-3">Pengawas<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Sidebar -->
        <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pengawas</span></a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/pengawas">
                    <i class="fas fa-book"></i>
                    <span>Daftar Mitra</span></a>
            </li>
        <li class="nav-item">
                <a class="nav-link" href="/setting">
                    <i class="fas fa-user-cog"></i>
                    <span>Ganti Password</span></a>
            </li>
        <!-- <li class="nav-item">
                <a class="nav-link" href="/editprofile">
                    <i class="fas fa-user-circle"></i>
                    <span>Profil</span></a>
        </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/logout" data-toggle="modal" data-target="#logoutModal">
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
        <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengawas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="/pengawas">List Pencacah</a>
                        <a class="collapse-item" href="/pengawas/penilaian">Penilaian</a>
                    </div>
                </div>
            </li> -->
        <!-- Content Wrapper -->
    </ul>
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

                    <script>
                        <?php if (!empty(session()->getFlashdata('swal_icon'))){ ?>
                            Swal.fire(
                            'Berhasil',
                            'Berhasil Disimpan',
                            'success'
                            )
                        <?php } ?>
                    </script>
        </div>
    </div>

</body>
<?= $this->renderSection('myscript'); ?>

</html>