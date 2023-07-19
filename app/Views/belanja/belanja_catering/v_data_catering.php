<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="modalHarian">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengeluaran Anggaran Catering</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/belanja/belanja_catering" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Kode Transaksi</label>
                        <div class="form-control-wrap">
                            <input type="text" name="kode_transaksi" class="form-control" id="full-name" autocomplete="off" placeholder="Kode 5.1.5 | Badan Usaha Milik Yayasan (BUMY)" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Unit Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="unit_belanja" data-search="on">
                                <option value="">Kode Belanja</option>
                                <option value="SDUT">Belanja Catering SDUT</option>
                                <option value="TPQ">Belanja Catering TPQ</option>
                                <option value="SMPUT">Belanja Catering SMPUT</option>
                                <option value="IBS">Belanja Catering Boarding</option>
                                <option value="PAUD">Belanja Catering PAUD</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="form-label">Kode Transaksi</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="kode_transaksi" data-search="on">
                                <option value="">Kode Transaksi</option>
                                <option value="1">1. Belanja Bidang Administrasi</option>
                                <option value="2">2. Belanja Bidang Kurikulum</option>
                                <option value="3">3. Belanja Bidang Kesiswaan</option>
                                <option value="4">4. Belanja Bidang Sarana Prasarana</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="form-label">Bulan Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="bulan_belanja" data-search="on">
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
                        <label class="form-label" for="phone-no">Uraian Belanja</label>
                        <div class="form-control-wrap">
                            <input type="text" name="uraian_belanja" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Uraian Belanja">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nominal (Rp.)</label>
                        <div class="form-control-wrap">
                            <input type="number" name="nominal_belanja" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Nominal (Rp.)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Penerima</label>
                        <div class="form-control-wrap">
                            <input type="text" name="penerima" class="form-control" id="phone-no" autocomplete="off" placeholder="Penerima">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sumber Dana</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="sumber_dana" data-search="on">
                                <option value=""></option>
                                <option value="Tunai">Tunai</option>
                                <option value="BPD">BANK BPD</option>
                                <option value="BNI">BANK BNI</option>
                            </select>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-plus"></i>Simpan Data</button>
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

<div class="card-heading">
    <h2>5.1.5.1 <?php echo $menu; ?></h2>
    <small>Data belanja catering.</small>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="card-divider"></div>
            <div class="panel-body">
                <!-- Form untuk inputan -->

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


                <div align="left">
                    <a data-toggle="modal" data-target="#modalHarian" class="btn btn-addon btn-success waves-effect"><i class="fa fa-plus"></i> Pengeluaran Anggaran</a>
                    <!-- <a data-toggle="modal" data-target="#modalBulanan" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-plus"></i> Bulanan</a> -->
                    <!-- <a class="btn btn-addon btn-success waves-effect" data-toggle="modal" data-target="#modalTagihan"><i class="fa  fa-cloud-upload"></i> Upload Tagihan</a> -->
                    <!-- <a href="<?= base_url(); ?>/jadwal/excelHasil" class="btn btn-addon btn-warning waves-effect"><i class="fa  fa-file-excel-o"></i> Excel</a>
        <a href="<?= base_url(); ?>/jadwal/printHasil" target="_blank" class="btn btn-addon btn-primary waves-effect"><i class="fa  fa-print"></i> Print</a> -->
                </div><br>
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl. Transaksi</th>
                                <th>Unit Belanja</th>
                                <th>Uraian Belanja</th>
                                <th>Nominal (Rp.)</th>
                                <th>Penerima</th>
                                <th>Sumber Dana</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($catering)) {
                                $no = 1;
                                foreach ($catering as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['tgl_transaksi'] ?></td>
                                        <td><?= $value['unit_belanja'] ?></td>
                                        <td><?= $value['uraian_belanja'] ?></td>
                                        <td><?php
                                            $cek = $value['nominal_belanja'];
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                            ?>
                                        </td>
                                        <td><?php
                                            $cek = $value['penerima'];
                                            $hasil = strtoupper($cek);
                                            echo $hasil;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $cek = $value['sumber_dana'];;
                                            $hasil = strtoupper($cek);
                                            echo $hasil;
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('belanja/hapus_catering/' . $value['id_belanja']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><em class=" icon ni ni-trash"></em><span><i class="fa  fa-trash"></i> Hapus Data</span></a>
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