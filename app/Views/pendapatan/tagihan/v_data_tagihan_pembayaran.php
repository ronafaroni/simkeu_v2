<div class="card-heading">
    <h2>Data Tagihan Pembayaran</h2>
    <small>Data tagihan pembayaran siswa.</small>
</div>

<div class="col-md-12">
    <div class="card">

        <div class="panel-body">

            <?php
            if (!empty($bayar_tagihanku)) { ?>

                <?php foreach ($bayar_tagihanku as $key => $value) { ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-bordered">
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
                        <table class="table table-active">
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
                <table class="table table-striped table-bordered">

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
                                    <td>
                                        <?php
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
                                        <a disa>
                                            <?php
                                            $cek = $value['jumlah_bayar'];
                                            if ($cek > 0) {
                                                echo '<a href="' . base_url('tagihan/bayar_tagihan/' . $value['id_tagihan']) . '" class="btn btn-xs btn-success"
                                            data-toggle="modal" data-target="#kode' . $value['id_tagihan'] . '" disabled><em class="mdi-action-add-shopping-cart"></em><span> Sudah Terbayar</span></a>';
                                            } else if ($cek == null) {
                                                echo '<a href="' . base_url('tagihan/bayar_tagihan/' . $value['id_tagihan']) . '" class="btn btn-xs btn-warning"
                                            data-toggle="modal" data-target="#kode' . $value['id_tagihan'] . '"><em class="mdi-action-add-shopping-cart"></em><span> Bayar Sekarang</span></a>';
                                            }
                                            ?>

                                    </td>
                                </tr>

                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="7" align="center">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- <div align="center">
                <a href="<?= base_url(); ?>/jadwal/jadwalpdf" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-file-pdf-o"></i> Download & Print PDF</a>
            </div> -->
            <br>
        </div>

    </div>
</div>


<?php $no = 1;
foreach ($bayar_tagihan_ya as $key => $value) { ?>

    <div class="modal fade" tabindex="-1" id="kode<?= $value['id_tagihan'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pembayaran Tagihan Siswa</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('tagihan/bayar_siswa/') ?>" method="post" class="form-validate is-alter">

                        <input type="hidden" name="id" class="form-control" autocomplete="off" value="<?= $value['id_tagihan'] ?>">
                        <input type="hidden" name="keterangan" class="form-control" autocomplete="off" value="<?= $value['keterangan'] ?>">
                        <input type="hidden" name="kode" class="form-control" autocomplete="off" value="<?= $value['kode_kelas'] ?>">
                        <input type="hidden" name="siswa" class="form-control" autocomplete="off" value="<?= $value['nama_siswa'] ?>">
                        <input type="hidden" name="nisnku" class="form-control" autocomplete="off" value="<?= $value['nisn'] ?>">

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
                            <label class="form-label" for="full-name">Keterangan</label>
                            <div class="form-control-wrap">
                                <input type="text" name="keterangan" class="form-control" id="full-name" autocomplete="off" value="<?= $value['keterangan'] ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="full-name">Jumlah Tagihan</label>
                            <div class="form-control-wrap">
                                <input type="text" name="jumlah_tagihan" class="form-control" id="full-name" autocomplete="off" value="<?= number_format($value['jumlah_tagihan']) ?>" disabled>
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
                            <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-plus"></i> Bayar Sekarang</button>
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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>