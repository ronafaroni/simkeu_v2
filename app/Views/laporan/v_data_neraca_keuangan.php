<!-- Modal Form -->
<div class="modal fade" tabindex="-1" id="modalAktiva">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan Keuangan (Aktiva)</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/laporan/input_aktiva" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_laporan" class="form-control" id="full-name" autocomplete="off" value="1">

                    <div class="form-group">
                        <label class="form-label">Jenis Laporan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="jenis_laporan" data-search="on">
                                <option value="">Jenis Laporan</option>
                                <option value="1.1">Laporan Tanah</option>
                                <option value="1.2">Laporan Gedung</option>
                                <option value="1.3">Laporan Peralatan/Inventaris</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone-no">Uraian Laporan</label>
                        <div class="form-control-wrap">
                            <input type="text" name="keterangan" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Uraian Laporan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nominal (Rp.)</label>
                        <div class="form-control-wrap">
                            <input type="number" name="nominal" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Nominal (Rp.)">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Simpan Data</span> </button>
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
<div class="modal fade" tabindex="-1" id="modalPasiva">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan Keuangan (Pasiva)</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/laporan/input_pasiva" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_laporan" class="form-control" id="full-name" autocomplete="off" value="2">

                    <div class="form-group">
                        <label class="form-label">Jenis Laporan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="jenis_laporan" data-search="on">
                                <option value="">Jenis Laporan</option>
                                <option value="2.1">Kewajiban Jangka Pendek</option>
                                <option value="2.2">Modal</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone-no">Uraian Laporan</label>
                        <div class="form-control-wrap">
                            <input type="text" name="keterangan" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Uraian Laporan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nominal (Rp.)</label>
                        <div class="form-control-wrap">
                            <input type="number" name="nominal" class="form-control" id="phone-no" autocomplete="off" placeholder="Masukkan Nominal (Rp.)">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Simpan Data</span> </button>
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

<div class="card-heading">
    <h2><?php echo $menu; ?></h2>
    <small>Data laporan neraca keuangan sekolah.</small>
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


                <div align="center">
                    <a href="<?= base_url('laporan/print_neraca') ?>" target="_blank" class="btn btn-addon btn-success waves-effect"><i class="fa fa-print"></i> Cetak Laporan</a>
                    <a data-toggle="modal" data-target="#modalAktiva" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-book"></i> Laporan Aktiva</a>
                    <a data-toggle="modal" data-target="#modalPasiva" class="btn btn-addon btn-info waves-effect"><i class="fa fa-book"></i> Laporan Pasiva</a><br><br>
                </div>
                <div class="table-responsive">
                    <table id="example2" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Laporan</th>
                                <th>Jenis Laporan</th>
                                <th>Keterangan</th>
                                <th>Nominal</th>
                                <th>Tgl. Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($laporan)) {
                                $no = 1;
                                foreach ($laporan as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['kode_laporan'] ?></td>
                                        <td><?= $value['jenis_laporan'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td><?php
                                            $cek = $value['nominal'];
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                            ?>
                                        </td>
                                        <td><?= $value['tgl_update'] ?></td>
                                        <td>
                                            <a class="btn btn-addon btn-xs btn-danger waves-effect" href="<?= base_url('laporan/hapus_neraca/' . $value['id_neraca']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><i class="fa fa-trash"></i><span> Hapus Data</span></a>
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
        </div>
    </div>
</div>

<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>