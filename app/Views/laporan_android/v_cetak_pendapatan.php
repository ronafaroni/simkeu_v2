<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?> | Sistem Informasi Manajemen Keuangan YPBK 2022</title>
    <meta name="description" content="Sistem Informasi Manajemen Keuangan YPBK 2022" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/assets/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/jquery/waves/dist/waves.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/material-design-icons.css" type="text/css" />
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href="<?= base_url() ?>/public/template/images/favicon.png"> -->
    <!-- Page Title  -->
    <title><?php echo $menu; ?> | Sistem Keuangan Sekolah Bumi Kartini</title>
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/font.css" type="text/css" />

    <!-- StyleSheets  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="<?= base_url() ?>/public/template/assets/css/theme.css?ver=2.4.0">
</head>

<div class="nk-block nk-block-lg">

    <div class="card-heading" align="center">
        <h2>Posisi Pendapatan Sekolah</h2>
        <small>Posisi Pendapatan Sekolah Bumi Kartini.</small>
    </div>

    <div class="card card-preview">
        <div class="card-inner">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">KODE BELANJA</th>
                            <th scope="col">URAIAN</th>
                            <th scope="col">JUMLAH (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <b>4.</b></td>
                            <td> <b>PENDAPATAN</b></td>
                            <td>
                                <?php
                                $cek = $total_pendapatan + $total_sekretariat;

                                if ($cek > 0) {
                                    $cek1 = 'Rp. ' . number_format($cek);
                                    echo $cek1;
                                } else if ($cek == null) {
                                    echo "Rp. 0";
                                }

                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.1.</b></td>
                            <td> <b>PENDAPATAN SEKRETARIAT YPBK</b></td>
                            <td>
                                <?php
                                foreach ($sekretariat as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.1</td>
                            <td> PENDAPATAN UNIT PENJAMINAN MUTU</td>
                            <td>
                                <?php
                                foreach ($mutu as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.2</td>
                            <td> PENDAPATAN UNIT KEUANGAN</td>
                            <td>
                                <?php
                                foreach ($keuangan as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.3</td>
                            <td> PENDAPATAN UNIT PEMBANGUNAN</td>
                            <td>
                                <?php
                                foreach ($pembangunan as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.4</td>
                            <td> PENDAPATAN UNIT CATERING</td>
                            <td>
                                <?php
                                foreach ($catering as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.5</td>
                            <td> PENDAPATAN UNIT KOPERASI</td>
                            <td>
                                <?php
                                foreach ($koperasi as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.1.6</td>
                            <td> PENDAPATAN UNIT SCHOOL BUS SERVICE (SBS)</td>
                            <td>
                                <?php
                                foreach ($sbs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <td> 4.1.7</td>
                            <td> PENDAPATAN UNIT AIR ISI ULANG</td>
                            <td>
                                <?php
                                foreach ($air as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <td> 4.1.8</td>
                            <td> PENDAPATAN UNIT GASEBU</td>
                            <td>
                                <?php
                                foreach ($gasebu as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_nominal'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>4.2</b></td>
                            <td> <b>PENDAPATAN SDUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($all_pendapatan_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.2.1</b></td>
                            <td> <b>PENDAPATAN BULANAN SDUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($bulanan_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.1.1</td>
                            <td> UANG SPP SDUT</td>
                            <td>

                                <?php
                                foreach ($spp_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.2.2</b></td>
                            <td> <b>PENDAPATAN TAHUNAN SDUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($tahunan_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.2.1</td>
                            <td> UANG INFAQ SISWA KELAS 1</td>
                            <td>
                                <?php
                                foreach ($infaq_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.2.2</td>
                            <td> UANG DAFTAR ULANG SD UT</td>
                            <td>
                                <?php
                                foreach ($daftar_ulang_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.2.3</td>
                            <td> UANG BUKU AJAR SD UT</td>
                            <td>
                                <?php
                                foreach ($buku_ajar_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.2.4</td>
                            <td> UANG UJIAN DAN PERPISAHAN</td>
                            <td>
                                <?php
                                foreach ($ujian_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.2.3</b></td>
                            <td> <b>PENDAPATAN LAINYA SDUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($lainya_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.2.3.1</td>
                            <td> UANG BOS SD UT</td>
                            <td>
                                <?php
                                foreach ($uang_bos_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>4.3</b></td>
                            <td> <b>PENDAPATAN TPQ BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($all_pendapatan_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.3.1</b></td>
                            <td> <b>PENDAPATAN BULANAN TPQ BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($cek_bulanan_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.3.1.1</td>
                            <td> UANG SYAHRIYAH TPQ BK</td>
                            <td>
                                <?php
                                foreach ($syhariyah_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.3.2</b></td>
                            <td> <b>PENDAPATAN TAHUNAN TPQ BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($tahunan_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.3.2.1</td>
                            <td> UANG IMTAZ TPQ BK</td>
                            <td>
                                <?php
                                foreach ($imtaz as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.3.3</b></td>
                            <td> <b>PENDAPATAN LAINNYA TPQ BK</b></td>
                            <td>
                                <?php
                                foreach ($lainya_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.3.3.1</td>
                            <td> UANG PENDAPATAN TPQ BK LAINNYA</td>
                            <td>
                                <?php
                                foreach ($pendapatan_lainya_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>4.4</b></td>
                            <td> <b>PENDAPATAN SMPUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($all_pendapatan_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.4.1</b></td>
                            <td> <b>PENDAPATAN BULANAN SMPUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($bulanan_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.1.1</td>
                            <td> UANG SPP KELAS REGULER</td>
                            <td>
                                <?php
                                foreach ($spp_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.1.2</td>
                            <td> UANG SPP KELAS BOARDING</td>
                            <td>
                                <?php
                                foreach ($spp_boarding as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.4.2</b></td>
                            <td> <b>PENDAPATAN TAHUNAN SMPUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($tahunan_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.2.1</td>
                            <td> UANG INFAQ SISWA SMP REGULER</td>
                            <td>
                                <?php
                                foreach ($infaq_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.2.2</td>
                            <td> UANG INFAQ SISWA SMP BOARDING</td>
                            <td>
                                <?php
                                foreach ($infaq_boarding as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.2.2</td>
                            <td> UANG DAFTAR ULANG SMP UT</td>
                            <td>
                                <?php
                                foreach ($daftar_ulang_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.2.3</td>
                            <td> UANG BUKU AJAR SMP UT</td>
                            <td>
                                <?php
                                foreach ($buku_ajar_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <td> <b>4.4.3</b></td>
                            <td> <b>PENDAPATAN LAINYA SMPUT BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($lainya_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.3.1</td>
                            <td> UANG BOS SMP UT</td>
                            <td>
                                <?php
                                foreach ($bos_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.4.3.2</td>
                            <td> UANG UJIAN DAN PERPISAHAN SMP UT</td>
                            <td>
                                <?php
                                foreach ($ujian_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>4.5</b></td>
                            <td> <b>ISLAMIC BOARDING SCHOOL (IBS) BK</b></td>
                            <td>
                                <?php
                                foreach ($all_pendapatan_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.5.1</b></td>
                            <td> <b>PENDAPATAN BULANAN IBS BK</b></td>
                            <td>
                                <?php
                                foreach ($bulanan_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.5.1.1</td>
                            <td> UANG SYAHRIYAH BOARDING</td>
                            <td>
                                <?php
                                foreach ($syhariyah_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.5.2</b></td>
                            <td> <b>PENDAPATAN TAHUNAN IBS BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($tahunan_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <td> 4.5.2.1</td>
                            <td> UANG ZIARAH </td>
                            <td>
                                <?php
                                foreach ($ziarah as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.5.2.2</td>
                            <td> UANG DIPAN TINGKAT</td>
                            <td>
                                <?php
                                foreach ($dipan as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.5.2.3</td>
                            <td> UANG KITAB </td>
                            <td>
                                <?php
                                foreach ($kitab as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.5.3</b></td>
                            <td> <b>PENDAPATAN LAINYA IBS BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($lainya_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.5.3.1</td>
                            <td> UANG PENDAPATAN IBS BUMI KARTINI LAINNYA</td>
                            <td>
                                <?php
                                foreach ($pendapatan_lainya_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>4.6</b></td>
                            <td> <b>PENDAPATAN PAUD BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($pendapatan_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.6.1</b></td>
                            <td> <b>PENDAPATAN BULANAN PAUD BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($bulanan_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.6.1.1</td>
                            <td> SPP PLAY GROUP & DAY CARE</td>
                            <td>
                                <?php
                                foreach ($spp_paud_play as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.6.1.2</td>
                            <td> SPP DAY CARE</td>
                            <td>
                                <?php
                                foreach ($spp_paud_care as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.6.2</b></td>
                            <td> <b>PENDAPATAN TAHUNAN PAUD BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($tahunan_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.6.2.1</td>
                            <td> DAFTAR ULANG SISWA</td>
                            <td>
                                <?php
                                foreach ($daftar_ulang_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>4.6.3</b></td>
                            <td> <b>PENDAPATAN LAINYA PAUD BUMI KARTINI</b></td>
                            <td>
                                <?php
                                foreach ($lainya_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4.6.3.1</td>
                            <td> UANG PENDAPATAN PAUD BK LAINNYA</td>
                            <td>
                                <?php
                                foreach ($pendapatan_lainya_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['jumlah_bayar'];
                                    if ($cek > 0) {
                                        $hasil = 'Rp. ' . number_format($cek);
                                        echo $hasil;
                                    } else if ($cek == null) {
                                        echo "Rp. 0";
                                    }

                                    ?>

                                <?php } ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- .card-preview -->
</div><!-- .nk-block -->

<script>
    window.print();
</script>