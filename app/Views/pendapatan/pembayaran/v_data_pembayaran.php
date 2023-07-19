<div class="card-heading">
    <h2>Data Pembayaran Siswa</h2>
    <small>Data tagihan pembayaran siswa.</small>
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

                <?php
                if (!empty($akun)) { ?>

                    <?php foreach ($akun as $key => $value) { ?>
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
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Tgl. Transaksi</th>
                                <th>Bulan Transaksi</th>
                                <th>Keterangan Pembayaran</th>
                                <th>Tagihan </th>
                                <th>Jumlah Bayar</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($bayar)) {
                                $no = 1;
                                foreach ($bayar as $key => $value) { ?>
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
                                        <td><?= $value['bulan_tagihan'] ?>, <?= $value['tahun_tagihan'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td>
                                            <?php
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
                        </tbody>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="7" align="center">
                            Data tidak ditemukan.
                        </td>
                    </tr>
                <?php } ?>
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