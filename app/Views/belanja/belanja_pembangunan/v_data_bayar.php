<!-- content @s -->
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Pembayaran Pembangunan</h3>
            <!-- <div class="nk-block-des text-soft">
                <p>Data pengeluaran belanja pembangunan.</p>
            </div> -->
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt"><a href="#" data-toggle="modal" data-target="#modalPengeluaran" class="btn btn-success"><em class="icon ni ni-sign-idr-alt"></em><span>Pengeluaran</span></a></li>
                        <li class="nk-block-tools-opt"><a href="#" data-toggle="modal" data-target="#modalPembayaran" class="btn btn-warning"><em class="icon ni ni-list-thumb"></em><span>Pembayaran</span></a></li>
                    </ul>
                </div>
            </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->

<div class="nk-block">


    <?php if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php } ?>

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

    <div class="card card-preview">
        <div class="table-responsive">
            <div class="card-inner">

                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tgl. Transaksi</th>
                            <th>Keterangan Belanja</th>
                            <th>Jenis Belanja</th>
                            <th>Nominal (Rp.)</th>
                            <th>Sumber Dana</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($bayar)) {
                            $no = 1;
                            foreach ($bayar as $key => $value) { ?>

                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['tgl_transaksi'] ?></td>
                                    <td><?= $value['uraian_belanja'] ?></td>
                                    <td><?= $value['jenis_belanja'] ?></td>
                                    <td>

                                    </td>

                                    <td>
                                        <?php
                                        $cek = $value['sumber_dana'];;
                                        $hasil = strtoupper($cek);
                                        echo $hasil;
                                        ?>
                                    </td>

                                    <td>

                                        <a class="btn btn-danger btn-xs" href="<?= base_url('belanja/hapus_bayar_proyek/' . $value['id_belanja']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><em class=" icon ni ni-trash"></em><span><i class="fa fa-trash"></i> Hapus Data</span></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5" align="center">
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


<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="modalPengeluaran">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengeluaran Pembangunan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('belanja/input_pengeluaran') ?>" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="form-group">
                        <label class="form-label">Rencana Pembangunan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="kode_belanja" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <option value="5.1.4.1">5.1.4.1 Pembangunan YPBK</option>
                                <option value="5.1.4.2">5.1.4.2 Pembangunan SDUT</option>
                                <option value="5.1.4.3">5.1.4.3 Pembangunan TPQ</option>
                                <option value="5.1.4.4">5.1.4.4 Pembangunan SMPUT</option>
                                <option value="5.1.4.5">5.1.4.5 Pembangunan IBS</option>
                                <option value="5.1.4.6">5.1.4.6 Pembangunan PAUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Pembangunan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="nama_bangunan" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <?php

                                $no = 1;
                                foreach ($kode_akun as $key => $value) { ?>

                                    <option value="<?= $value['nama_bangunan'] ?>"><?= $value['nama_bangunan'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="jenis_belanja" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <option value="Belanja Material">Belanja Material</option>
                                <option value="Belanja Jasa">Belanja Jasa</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bulan Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="bulan_belanja" data-search="on">
                                <option value=""></option>
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
                        <label class="form-label" for="phone-no">Tanggal Pengeluaran</label>
                        <div class="form-control-wrap">
                            <input type="text" name="tgl_transaksi" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Pengeluaran">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label" for="phone-no">Tanggal Selesai</label>
                        <div class="form-control-wrap">
                            <input type="number" name="tgl_selesai" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Selesai Pembangunan">
                        </div>
                    </div> -->

                    <div class=" form-group">
                        <label class="form-label" for="phone-no">Nominal Belanja</label>
                        <div class="form-control-wrap">
                            <input type="number" name="nominal_pengeluaran" class="form-control" id="phone-no" autocomplete="off" placeholder="Nominal Belanja">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sumber Dana</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="sumber_dana" data-search="on">
                                <option value=""></option>
                                <option value="Hutang">HUTANG</option>
                                <option value="Tunai">TUNAI</option>
                                <option value="BPD">BANK BPD</option>
                                <option value="BNI">BANK BNI</option>
                            </select>
                        </div>
                    </div>


                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Simpan Pengeluaran</span> </button>
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


<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="modalPembayaran">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pembayaran Pembangunan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('belanja/input_pembayaran') ?>" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="form-group">
                        <label class="form-label">Rencana Pembangunan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="kode_belanja" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <option value="5.1.4.1">5.1.4.1 Pembangunan YPBK</option>
                                <option value="5.1.4.2">5.1.4.2 Pembangunan SDUT</option>
                                <option value="5.1.4.3">5.1.4.3 Pembangunan TPQ</option>
                                <option value="5.1.4.4">5.1.4.4 Pembangunan SMPUT</option>
                                <option value="5.1.4.5">5.1.4.5 Pembangunan IBS</option>
                                <option value="5.1.4.6">5.1.4.6 Pembangunan PAUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Pembangunan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="nama_bangunan" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <?php

                                $no = 1;
                                foreach ($kode_akun as $key => $value) { ?>

                                    <option value="<?= $value['nama_bangunan'] ?>"><?= $value['nama_bangunan'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="jenis_belanja" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <option value="Belanja Material">Belanja Material</option>
                                <option value="Belanja Jasa">Belanja Jasa</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bulan Pembayaran</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg select2-hidden-accessible" name="bulan_belanja" data-search="on" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value=""></option>
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
                        <label class="form-label" for="phone-no">Tanggal Pembayaran</label>
                        <div class="form-control-wrap">
                            <input type="text" name="tgl_transaksi" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Pengeluaran">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label" for="phone-no">Tanggal Selesai</label>
                        <div class="form-control-wrap">
                            <input type="number" name="tgl_selesai" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Selesai Pembangunan">
                        </div>
                    </div> -->

                    <div class=" form-group">
                        <label class="form-label" for="phone-no">Nominal Belanja</label>
                        <div class="form-control-wrap">
                            <input type="number" name="nominal_pembayaran" class="form-control" id="phone-no" autocomplete="off" placeholder="Nominal Belanja">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sumber Dana</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="sumber_dana" data-search="on">
                                <option value=""></option>
                                <option value="Hutang">HUTANG</option>
                                <option value="Tunai">TUNAI</option>
                                <option value="BPD">BANK BPD</option>
                                <option value="BNI">BANK BNI</option>
                            </select>
                        </div>
                    </div>


                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Simpan Pengeluaran</span> </button>
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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>