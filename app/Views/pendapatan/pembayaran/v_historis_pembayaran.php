<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="card-heading">
                <h2>Cek Historis Pembayaran</h2>
                <small>Cek historis pembayaran pembayaran siswa.</small>
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

                <form action="<?= base_url('tagihan/cek_historis_pembayaran'); ?>" method="post" enctype="multipart/form-data" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label" for="default-01">Tanggal Transaksi</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control date-picker" name="tgl_bayar" id="datepicker" autocomplete="off" placeholder="Masukan Tanggal Transaksi">
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><em class="icon ni ni-search"></em><span>Cek Historis</span> </button>

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