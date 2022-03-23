<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?= $this->include('navbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="content-wrapper">
        <div class="container">
        <a href="/manage/accounts/data">
            <button type="button" class="btn btn-primary">
                <i class="mdi mdi-account-plus"></i>
                Tambah Akun Pengawas
            </button>
        </a>
        <br> <br>
        <div class="card mt-3">
                    <div class="card-header py-3">
                    <p class="h5 text-center font-weight-bold">Kelola Akun Pengawas</p>
                    <a href = "/dashboard" class="btn btn-sm btn-primary me-1"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <!-- <th>Konfirmasi Password</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($admin as $a) : ?>
                                    <tr>
                                        <td><?= $a['NAMA']; ?></td>
                                        <td><?= $a['KODE_PETUGAS']; ?></td>
                                      
                                        <td><?= $a['password_confirm']; ?></td>
                                        <td align="center">
                                       
                                        <a href="/admin/manage/edit/petugas/<?= $a['NO_URUT']; ?>" class="btn btn-sm btn-success me-1"><i class="fas fa-pen" class="d-inline"></i></a>
                                                <form action="/admin/manage/delete/<?= $a['NO_URUT']; ?>" method="post" class="d-inline">
                                                    <input type="hidden" name = "_method" value = "DELETE" />
                                                    <button type ="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash"></i></button>
                                                </form>
                                                
                                        </td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

        <!-- End of Main Content -->

        <?= $this->endSection(); ?>