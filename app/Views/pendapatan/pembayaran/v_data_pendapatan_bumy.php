<!-- content @s -->
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Data BUMY</h3>
            <div class="nk-block-des text-soft">
                <p>Data pendapatan BUMY.</p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt"><a href="#" data-toggle="modal" data-target="#modalBUMY" class="btn btn-success"><em class="icon ni ni-plus-c"></em><span>Pendapatan BUMY</span></a></li>
                    </ul>
                </div>
            </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->

<div class="nk-block">

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

    <div class="card card-preview">
        <div class="table-responsive">
            <div class="card-inner">

                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tgl. Transaksi</th>
                            <th>Kode Belanja</th>
                            <th>Keterangan</th>
                            <th>Nominal (Rp.)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($bumy)) {
                            $no = 1;
                            foreach ($bumy as $key => $value) { ?>

                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['tgl_bayar'] ?></td>
                                    <td><?= $value['kode_tagihan'] ?></td>
                                    <td><?= $value['keterangan'] ?></td>
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
                                        <a href="<?= base_url('tagihan/hapus_bumy/' . $value['id_tagihan']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><em class=" icon ni ni-trash"></em><span> Hapus Data</span></a>
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
    </div><!-- .card-preview -->
</div> <!-- nk-block -->

<div class="modal fade" tabindex="-1" id="modalBUMY">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pendapatan BUMY</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('tagihan/masukan_bumy/'); ?>" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="4">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="4.1">

                    <div class="form-group">
                        <label class="form-label">Unit Pendapatan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="kode_belanja" data-search="on">
                                <option value="">Kode Belanja</option>
                                <option value="4.1.1.2">Pendapatan Koperasi</option>
                                <option value="4.1.1.3">Pendapatan SBS</option>
                                <option value="4.1.1.4">Pendapatan Air Isi Ulang</option>
                                <option value="4.1.1.5">Pendapatan Lainya</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bulan Pendapatan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="bulan" data-search="on">
                                <option value="">Bulan Belanja</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="full-name">Keterangan Pendapatan</label>
                        <div class="form-control-wrap">
                            <input type="text" name="keterangan" class="form-control" id="full-name" autocomplete="off" placeholder="Masukan Keterangan Pendapatan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="full-name">Jumlah Pendapatan</label>
                        <div class="form-control-wrap">
                            <input type="number" name="jumlah_nominal" class="form-control" id="full-name" autocomplete="off" placeholder="Masukan Jumlah Pendapatan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jenis Pembayaran</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="sumber_pendapatan" data-search="on">
                                <option value=""></option>
                                <option value="Tunai">Tunai</option>
                                <option value="BPD">BANK BPD</option>
                                <option value="BNI">BANK BNI</option>
                            </select>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Terima Pendapatan</span> </button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div> -->
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