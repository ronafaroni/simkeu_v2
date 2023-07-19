<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="modalTagihan">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Tagihan Pembayaran</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('tagihan/import_tagihan/'); ?>" method="post" enctype="multipart/form-data" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Masukan File Tagihan :</label>
                        <div class="form-control-wrap">
                            <div class="custom-file">
                                <input type="file" multiple class="custom-file-input" name="data_tagihan" id="customMultipleFiles" required accept=".xls, .xlsx">
                                <label class="custom-file-label" for="customMultipleFiles">Upload Berkas Tagihan</label>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Upload Data</span> </button>
                        <button type="reset" class="btn btn-light"><em class="icon ni ni-reload"></em><span>Reset</span> </button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div> -->
        </div>
    </div>
</div>


<?php
$input = session()->getFlashdata('inputs');
$errors = session()->getFlashdata('errors');
if (!empty($errors)) { ?>
    <div class="alert alert-danger" close>
        Ada kesalahan saat input data :
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= esc($error) ?></li>

            <?php } ?>
        </ul>
    </div>
<?php } ?>

<?php if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php } ?>

<?php if (!empty(session()->getFlashdata('gagal'))) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('gagal') ?>
    </div>
<?php } ?>


<div class="card-heading">
    <h2>Data Tagihan Pembayaran</h2>
    <small>Data tagihan pembayaran siswa.</small>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="card-divider"></div>
            <div class="panel-body">
                <!-- Form untuk inputan -->

                <?php
                $input = session()->getFlashdata('inputs');
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" close>
                        Ada kesalahan saat input data :
                        <ul>
                            <?php foreach ($errors as $error) { ?>
                                <li><?= esc($error) ?></li>

                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('gagal') ?>
                    </div>
                <?php } ?>

                <div align="right">
                    <a href="<?= base_url('tagihan/download_tagihan') ?>" class="btn btn-addon btn-info waves-effect"><i class="fa fa-download"></i> Download Template</a>
                    <a class="btn btn-addon btn-success waves-effect" data-toggle="modal" data-target="#modalTagihan"><i class="fa  fa-cloud-upload"></i> Upload Tagihan</a>
                    <!-- <a href="<?= base_url(); ?>/jadwal/excelHasil" class="btn btn-addon btn-warning waves-effect"><i class="fa  fa-file-excel-o"></i> Excel</a>
        <a href="<?= base_url(); ?>/jadwal/printHasil" target="_blank" class="btn btn-addon btn-primary waves-effect"><i class="fa  fa-print"></i> Print</a> -->
                </div><br>

                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><b>NO.</b></th>
                                <th><b>NISN</b></th>
                                <th><b>NAMA SISWA</b></th>
                                <th><b>KELAS</b></th>
                                <th><b>SEMESTER</b></th>
                                <th><b>KETERANGAN</b></th>
                                <th><b>JUMLAH TAGIHAN</b></th>
                                <th><b>ACTION</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($tagihan)) {
                                $no = 1;
                                foreach ($tagihan as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['nisn'] ?></td>
                                        <td><?= $value['nama_siswa'] ?></td>
                                        <td><?= $value['kelas'] ?></td>
                                        <td><?= $value['semester'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td><?php
                                            $cek = $value['jumlah_tagihan'];
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                            ?>
                                        </td>

                                        <td>
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('tagihan/hapus_tagihan/' . $value['id_tagihan']) ?>"><em class=" icon ni ni-trash"></em><span><i class="fa  fa-trash"></i> Hapus Data</span></a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="8" align="center">
                                        Data tidak ditemukan.
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>