<?php $no = 1;
foreach ($bayar_tagihan as $key => $value) { ?>

    <div class="modal fade" tabindex="-1" id="kode<?= $value['nisn'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pembayaran Tagihan Siswa</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('tagihan/bayar_siswa/' . $value['id_tagihan']); ?>" method="post" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">NISN</label>
                            <div class="form-control-wrap">
                                <input type="text" name="nisn" class="form-control" id="full-name" autocomplete="off" value="<?= $value['nisn'] ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="full-name">Nama Siswa</label>
                            <div class="form-control-wrap">
                                <input type="text" name="nama_siswa" class="form-control" id="full-name" autocomplete="off" value="<?= $value['nama_siswa'] ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="full-name">Jumlah Tagihan</label>
                            <div class="form-control-wrap">
                                <input type="text" name="jumlah_tagihan" class="form-control" id="full-name" autocomplete="off" value="<?= $value['jumlah_tagihan'] ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="full-name">Jumlah Pembayaran</label>
                            <div class="form-control-wrap">
                                <input type="number" name="jumlah_bayar" class="form-control" id="full-name" autocomplete="off" placeholder="Masukan Jumlah Pembayaran">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Jenis Pembayaran</label>
                            <div class="form-control-wrap">
                                <select class="form-select form-control form-control-lg" name="jenis_bayar" data-search="on">
                                    <option value=""></option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="BPD">BANK BPD</option>
                                    <option value="BNI">BANK BNI</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Bayar Sekaranga</span> </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div> -->
            </div>
        </div>
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

                <?php
                if (!empty($bayar_tagihan3)) { ?>

                    <?php foreach ($bayar_tagihan3 as $key => $value) { ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td width="30%">No. NISN </td>
                                            <td width="70%">: <b><?= $value['nisn']; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Nama Lengkap </td>
                                            <td width="70%">: <b><?= $value['nama_siswa']; ?></b></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>

                <?php } else { ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="30%">No. NISN </td>
                                        <td width="70%">: - - - -</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama</td>
                                        <td width="70%">: - - - -</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php } ?>

                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><b>NO.</b></th>
                                <th><b>KETERANGAN</b></th>
                                <th><b>KELAS</b></th>
                                <th><b>SEMESTER</b></th>
                                <th><b>JUMLAH TAGIHAN</b></th>
                                <th><b>JUMLAH BAYAR</b></th>
                                <th><b>ACTION</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($bayar_tagihan)) {
                                $no = 1;
                                foreach ($bayar_tagihan as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td><?= $value['kelas'] ?></td>
                                        <td><?= $value['semester'] ?></td>
                                        <td><?php
                                            $cek = $value['jumlah_tagihan'];
                                            if ($cek > 0) {
                                                $hasil = 'Rp. ' . number_format($cek);
                                                echo $hasil;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }

                                            ?>
                                        </td>
                                        <td><?php
                                            $cek = $value['jumlah_bayar'];
                                            if ($cek > 0) {
                                                $hasil = 'Rp. ' . number_format($cek);
                                                echo $hasil;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }

                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            $cek1 = $value['jumlah_tagihan'];
                                            $cek2 = $value['jumlah_bayar'];
                                            if ($cek1 == $cek2) {
                                                echo "<span class='tb-status text-success'><b>LUNAS</b></span>";
                                            } else if ($cek1 > $cek2) {
                                                echo "<span class='tb-status text-danger'><b>BELUM LUNAS</b></span>";
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="9" align="center">
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