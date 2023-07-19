<div class="card-heading">
    <h2>Data Historis Pembayaran</h2>
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


                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl. Transaksi</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th>Jumlah Tagihan</th>
                                <th>Jumlah Bayar</th>
                                <th>Status Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($historisku)) {
                                $no = 1;
                                foreach ($historisku as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?php
                                            $cek = $value['tgl_bayar'];
                                            if ($cek == null) {
                                                echo "00-00-00000";
                                            } elseif ($cek > 0) {
                                                echo $value['tgl_bayar'];
                                            }
                                            ?>
                                        </td>
                                        <td><?= $value['nisn'] ?></td>
                                        <td><?= $value['nama_siswa'] ?></td>
                                        <td><?= $value['kelas'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
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