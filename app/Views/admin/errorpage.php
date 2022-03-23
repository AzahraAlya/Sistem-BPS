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


    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.css">
</head>

<?= $this->section('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    <?= $this->include('navbar'); ?>


<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->
</div>
<?php if (session()->get('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->get('pesan') ?>
    </div>
<?php endif; ?>

<!-- Content Row -->
<div class="text-center">
        <h1 class="display-6">Gagal Mengubah Password</h1>
        <a href = "/manage/account" class="btn btn-sm btn-primary me-1"><i class="fas fa-angle-left"></i>  Kembali</a>
    </div>
<br><br>
<div class="row">
        <!-- Earnings (Monthly) Card Example -->
      
</div>
</div>

</div>
</div>
</div>

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
            <script src="/assets/startbootstrap/vendor/datatables/jquery-3.5.1.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.searchBuilder.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.dateTime.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="/assets/js/sweetalert2.min.js"></script>


            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        dom: 'Qlfrtip',
                        searchBuilder: {
                            columns: [9, 10, 11, 12]
                        }
                    });
                });
            </script>

            <script>
                <?php if (!empty(session()->getFlashdata('swal_icon'))) { ?>
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