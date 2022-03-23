<?= $this->extend('pengawas/template'); ?>
<?= $this->section('content'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <!-- <h1 class="h3 mb-0 text-gray-800">Detail Pencacah</h1> -->

            </div>
            <!-- /.content-header -->
            <div class="container">

                <div class="card mt-3">
                    <div class="card-header">
                        <p class="h5 text-center font-weight-bold">Detail Data Mitra</p>
                        <a href = "/pengawas" class="btn btn-sm btn-primary me-1"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="card-body">
                   
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Kode Mitra</label>
                            <input type="text" class="form-control" name="KODE_PETUGAS" value="<?= $pencacah['KODE_PETUGAS']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">No Kecamatan</label>
                            <input type="text" class="form-control" name="noKECAMATAN" value="<?= $pencacah['noKECAMATAN']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">No Peserta</label>
                            <input type="text" class="form-control" name="NOMOR_PESERTA" value="<?= $pencacah['NOMOR_PESERTA']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">NIK</label>
                            <input type="text" class="form-control" name="NIK_NIP" value="<?= $pencacah['NIK_NIP']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Nama</label>
                            <input type="text" class="form-control" name="NAMA" value="<?= $pencacah['NAMA']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Jenis Kelamin</label>
                            <input type="text" class="form-control"name="JENIS_KELAMIN" value="<?= $pencacah['JENIS_KELAMIN']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Pendidikan</label>
                            <input type="text" class="form-control" name="PENDIDIKAN" value="<?= $pencacah['PENDIDIKAN']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tempat Lahir</label>
                            <input type="text" class="form-control" name="TEMPAT_LAHIR" value="<?= $pencacah['TEMPAT_LAHIR']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Tanggal Lahir</label>
                            <input type="text" class="form-control"name="TANGGAL_LAHIR" value="<?= $pencacah['TANGGAL_LAHIR']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Status Perkawinan</label>
                            <input type="text" class="form-control" name="STATUS_PERKAWINAN" value="<?= $pencacah['STATUS_PERKAWINAN']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Pekerjaan</label>
                            <input type="text" class="form-control" name="PEKERJAAN" value="<?= $pencacah['PEKERJAAN']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Pengalaman Survei BPS</label>
                            <input type="text" class="form-control" name="PENGALAMAN_SURVEI_BPS" value="<?= $pencacah['PENGALAMAN_SURVEI_BPS']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" name="ALAMAT" value="<?= $pencacah['ALAMAT']; ?>" readonly>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Desa</label>
                            <input type="text" class="form-control" name="DESA" value="<?= $pencacah['DESA']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Kecamatan</label>
                            <input type="text" class="form-control" name="KECAMATAN" value="<?= $pencacah['KECAMATAN']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Kabupaten</label>
                            <input type="text" class="form-control" name="KABUPATEN" value="<?= $pencacah['KABUPATEN']; ?>" readonly>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">No Hp</label>
                            <input type="text" class="form-control" name="NOMOR_HP" value="<?= $pencacah['NOMOR_HP']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom02">No WA</label>
                            <input type="text" class="form-control" name="NOMOR_WA" value="<?= $pencacah['NOMOR_WA']; ?>" readonly>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                    </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <!-- <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer> -->
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<?= $this->endSection(); ?>