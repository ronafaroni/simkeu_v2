<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="card-heading">
                <h2>Cek Data Tagihan Siswa</h2>
                <small>Cek Data tagihan pembayaran siswa.</small>
            </div>
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

                <form action="<?= base_url('tagihan/cek_data_tagihan'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label" for="default-01">NISN</label>
                                <input type="text" class="form-control" name="nisn" id="default-01" autocomplete="off" placeholder="Masukan Nomor NISN">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label">Nama Siswa</label>

                                <select class="form-control" name="nama_siswa" data-search="on">
                                    <option value=""></option>
                                    <?php foreach ($tagihan as $key => $value) { ?>
                                        <option value="<?= $value['nama_siswa'] ?>"><?= $value['nama_siswa'] ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-addon btn-success"><i class="mdi-action-search i-24"></i> Cari Data</button>
                            </div>
                        </div>
                    </div>
                </form>
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