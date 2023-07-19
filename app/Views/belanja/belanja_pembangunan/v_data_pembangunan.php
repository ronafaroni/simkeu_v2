<!-- content @s -->
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">5.1.4 <?php echo $menu; ?></h3>
            <div class="nk-block-des text-soft">
                <p>Data pengeluaran belanja pembangunan.</p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt"><a href="#" data-toggle="modal" data-target="#modalPenjaminanMutu" class="btn btn-primary"><em class="icon ni ni-plus-c"></em><span>Buat Proyek</span></a></li>
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
                            <th>Kode Belanja</th>
                            <th>Tgl. Mulai</th>
                            <th>Nama Pembangunan</th>
                            <th>Nominal Belanja (Rp.)</th>
                            <th>Nominal Bayar (Rp.)</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (!empty($bangunan)) {
                            $no = 1;
                            foreach ($bangunan as $key => $value) { ?>

                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['kode_belanja'] ?></td>
                                    <td><?= $value['tgl_mulai'] ?></td>
                                    <td><?= $value['nama_bangunan'] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td>

                                        <a class="btn btn-danger btn-xs" href="<?= base_url('belanja/hapus_proyek/' . $value['id_belanja']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><em class=" icon ni ni-trash"></em><span><i class="fa fa-trash"></i> Hapus Data</span></a>
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
<div class="modal fade" tabindex="-1" id="modalPenjaminanMutu">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rencana Proyek Pembangunan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/belanja/proyek" method="post" class="form-validate is-alter">
                    <input type="hidden" name="kode_akun" class="form-control" id="full-name" autocomplete="off" value="5">
                    <input type="hidden" name="kode_unit" class="form-control" id="full-name" autocomplete="off" value="5.1">
                    <div class="form-group">
                        <label class="form-label">Rencana Pembangunan</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg" name="kode_belanja" data-search="on">
                                <option value="">Unit Bangunan</option>
                                <option value="5.1.4.1">Pembangunan YPBK</option>
                                <option value="5.1.4.2">Pembangunan SDUT</option>
                                <option value="5.1.4.3">Pembangunan TPQ</option>
                                <option value="5.1.4.4">Pembangunan SMPUT</option>
                                <option value="5.1.4.5">Pembangunan IBS</option>
                                <option value="5.1.4.6">Pembangunan PAUD</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label">Bulan Belanja</label>
                        <div class="form-control-wrap">
                            <select class="form-select form-control form-control-lg select2-hidden-accessible" name="bulan_belanja" data-search="on" data-select2-id="6" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="10"></option>
                                <option value="Januari" data-select2-id="11">Januari</option>
                                <option value="Februari" data-select2-id="12">Februari</option>
                                <option value="Maret" data-select2-id="13">Maret</option>
                                <option value="April" data-select2-id="14">April</option>
                                <option value="Mei" data-select2-id="15">Mei</option>
                                <option value="Juni" data-select2-id="16">Juni</option>
                                <option value="Juli" data-select2-id="17">Juli</option>
                                <option value="Agustus" data-select2-id="18">Agustus</option>
                                <option value="September" data-select2-id="19">September</option>
                                <option value="Oktober" data-select2-id="20">Oktober</option>
                                <option value="November" data-select2-id="21">November</option>
                                <option value="Desember" data-select2-id="22">Desember</option>

                            </select>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Tanggal Mulai</label>
                        <div class="form-control-wrap">
                            <input type="text" name="tgl_mulai" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Mulai Pembangunan">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label" for="phone-no">Tanggal Selesai</label>
                        <div class="form-control-wrap">
                            <input type="number" name="tgl_selesai" class="form-control date-picker" id="phone-no" autocomplete="off" placeholder="Tgl. Selesai Pembangunan">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nama Bangunan</label>
                        <div class="form-control-wrap">
                            <input type="text" name="nama_bangunan" class="form-control" id="phone-no" autocomplete="off" placeholder="Nama Proyek Pembangunan">
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
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>