<div class="card-heading">
    <h2>Data Transaksi Pembayaran</h2>
    <small>Data transaksi pembayaran siswa.</small>
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


                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl. Transaksi</th>
                                <th>Kode Transaksi</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Keterangan</th>
                                <th>Jumlah Bayar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($transaksiku)) {
                                $no = 1;
                                foreach ($transaksiku as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['tgl_update'] ?></td>
                                        <td><?= $value['kode_transaksi'] ?></td>
                                        <td><?= $value['nisn'] ?></td>
                                        <td><?= $value['nama_siswa'] ?></td>
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
                                            <a class="btn btn-danger btn-xs" href="<?= base_url('tagihan/hapus_transaksi/' . $value['id_transaksi']) ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ??')"><em class=" icon ni ni-trash"></em><span><i class="fa  fa-trash"></i> Hapus Transaksi</span></a>
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