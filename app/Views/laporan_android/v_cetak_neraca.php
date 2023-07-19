<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?> | Sistem Informasi Manajemen Keuangan YPBK 2021</title>
    <meta name="description" content="PPDB Online 2021 | SD Unggulan Terpadu Bumi Kartini Jepara" />
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

<!-- <head>
    <meta charset="utf-8" />
    <title><?php echo $title ?> | Sistem Informasi Manajemen Keuangan YPBK 2021</title>
    <meta name="description" content="PPDB Online 2021 | SD Unggulan Terpadu Bumi Kartini Jepara" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/assets/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/jquery/waves/dist/waves.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/font.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/app.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/datepicker/datepicker3.css">
    <link href="<?= base_url() ?>/public/template/jquery-viewer/viewer.css" rel="stylesheet">
    <script src="<?= base_url() ?>/public/template/jquery-viewer/viewer.js"></script>
    <script src="<?= base_url() ?>/public/dist/chart.min2.js"></script>
    <script src="<?= base_url() ?>/public/dist/moment.js"></script>
</head> -->

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading no-border">
                <img src="<?php echo base_url(); ?>assets/imgs/logo-kop.png" class="img-responsive" alt="">
                <br>
                <h5 align="center"><b>ANGGARAN PENDAPATAN DAN BELANJA</b></h5>
                <h5 align="center"> YAYASAN PENDIDIKAN BUMI KARTINI (YPBK) JEPARA</h5>
            </header><br>

            <h5 align="center"> NERACA KEUANGAN</h5> <br>
            <div class="row">
                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="3" text-align="center" width="100%"><b>AKTIVA</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="3"><b>AKTIVA</b></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td colspan="2"><b>AKTIVA LANCAR</b></td>
                                </tr>

                                <tr>
                                    <td width="15%"></td>
                                    <td width="50%">Kas Teller</td>
                                    <td width="45%">
                                        <?php
                                        $pendapatan_tunai = $saldo_pendapatan_tunai;
                                        $bumy_tunai = $saldo_bumy_tunai;
                                        $belanja_tunai = $saldo_belanja_tunai;

                                        $cek = $pendapatan_tunai + $bumy_tunai - $belanja_tunai;

                                        if ($cek > 0) {
                                            $cek = 'Rp. ' . number_format($cek);
                                            echo $cek;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Kas Bank BPD</td>
                                    <td>
                                        <?php
                                        $pendapatan_bpd = $saldo_pendapatan_bpd;
                                        $bumy_bpd = $saldo_bumy_bpd;
                                        $belanja_bpd = $saldo_belanja_bpd;

                                        $cek = $pendapatan_bpd + $bumy_bpd - $belanja_bpd;

                                        if ($cek > 0) {
                                            $cek = 'Rp. ' . number_format($cek);
                                            echo $cek;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Kas Bank BNI</td>
                                    <td>
                                        <?php
                                        $pendapatan_bni = $saldo_pendapatan_bni;
                                        $bumy_bni = $saldo_bumy_bni;
                                        $belanja_bni = $saldo_belanja_bni;

                                        $cek = $pendapatan_bni + $bumy_bni - $belanja_bni;

                                        if ($cek > 0) {
                                            $cek = 'Rp. ' . number_format($cek);
                                            echo $cek;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Piutang</td>
                                    <td>
                                        <?php
                                        $cek1 = $total_tagihan;
                                        $cek2 = $total_bayar;
                                        $cek3 = $cek1 - $cek2;
                                        if ($cek3 > 0) {
                                            $hasil = 'Rp. ' . number_format($cek3);
                                            echo $hasil;
                                        } else if ($cek3 == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td><b>JUMLAH AKTIVA LANCAR</b></td>
                                    <td><b>
                                            <?php
                                            //pendapatan tunai
                                            $pendapatan_tunai = $saldo_pendapatan_tunai;
                                            $bumy_tunai = $saldo_bumy_tunai;
                                            $belanja_tunai = $saldo_belanja_tunai;
                                            $tunai = $pendapatan_tunai + $bumy_tunai - $belanja_tunai;

                                            //pendapatan bpd
                                            $pendapatan_bpd = $saldo_pendapatan_bpd;
                                            $bumy_bpd = $saldo_bumy_bpd;
                                            $belanja_bpd = $saldo_belanja_bpd;
                                            $bpd = $pendapatan_bpd + $bumy_bpd - $belanja_bpd;

                                            //pendapatan bni
                                            $pendapatan_bni = $saldo_pendapatan_bni;
                                            $bumy_bni = $saldo_bumy_bni;
                                            $belanja_bni = $saldo_belanja_bni;
                                            $bni = $pendapatan_bni + $bumy_bni - $belanja_bni;

                                            $cek1 = $total_tagihan;
                                            $cek2 = $total_bayar;
                                            $utang = $cek1 - $cek2;

                                            $total = $tunai + $bpd + $bni + $utang;
                                            if ($total > 0) {
                                                $hasil = 'Rp. ' . number_format($total);
                                                echo $hasil;
                                            } else if ($total == null) {
                                                echo "Rp. 0";
                                            }

                                            ?>
                                        </b>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">

                            <tbody>
                                <tr>
                                    <th colspan="3" align="center" width="50%"><b>PASIVA</b></th>
                                </tr>

                                <tr>
                                    <td colspan="3"><b>KEWAJIBAN</b></td>
                                </tr>

                                <tr>
                                    <td width="15%"></td>
                                    <td width="50%"><b>KEWAJIBAN JARAK PENDEK</b></td>
                                    <td width="45%">
                                        <b>
                                            <?php
                                            $cek = $total_kewajiban;
                                            if ($cek > 0) {
                                                $cek = 'Rp. ' . number_format($cek);
                                                echo $cek;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <?php if (!empty($kewajiban)) {
                                    $no = 1;
                                    foreach ($kewajiban as $key => $value) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <?php
                                                $cek = $value['nominal'];
                                                if ($cek > 0) {
                                                    $cek = 'Rp. ' . number_format($cek);
                                                    echo $cek;
                                                } else if ($cek == null) {
                                                    echo "Rp. 0";
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="3" align="center">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">

                            <tbody>
                                <tr>
                                    <th colspan="3" text-align="center" width="100%"><b>AKTIVA TETAP</b></th>
                                </tr>

                                <tr>
                                    <td width="15%"></td>
                                    <td width="50%"><b>TANAH</b></td>
                                    <td width="45%">
                                        <b>
                                            <?php
                                            $cek = $total_tanah;
                                            if ($cek > 0) {
                                                $cek = 'Rp. ' . number_format($cek);
                                                echo $cek;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>

                                <?php if (!empty($tanah)) {
                                    $no = 1;
                                    foreach ($tanah as $key => $value) { ?>

                                        <tr>
                                            <td></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <?php
                                                $cek = $value['nominal'];
                                                if ($cek > 0) {
                                                    $cek = 'Rp. ' . number_format($cek);
                                                    echo $cek;
                                                } else if ($cek == null) {
                                                    echo "Rp. 0";
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="3" align="center">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                <?php } ?>


                                <tr>
                                    <td></td>
                                    <td><b>GEDUNG</b></td>
                                    <td>
                                        <b>
                                            <?php
                                            $cek = $total_gedung;
                                            if ($cek > 0) {
                                                $cek = 'Rp. ' . number_format($cek);
                                                echo $cek;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>

                                <?php if (!empty($gedung)) {
                                    $no = 1;
                                    foreach ($gedung as $key => $value) { ?>

                                        <tr>
                                            <td></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <?php
                                                $cek = $value['nominal'];
                                                if ($cek > 0) {
                                                    $cek = 'Rp. ' . number_format($cek);
                                                    echo $cek;
                                                } else if ($cek == null) {
                                                    echo "Rp. 0";
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="3" align="center">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                <?php } ?>

                                <tr>
                                    <td></td>
                                    <td><b>PERALATAN</b></td>
                                    <td>
                                        <b>
                                            <?php
                                            $cek = $total_peralatan;
                                            if ($cek > 0) {
                                                $cek = 'Rp. ' . number_format($cek);
                                                echo $cek;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>

                                <?php if (!empty($peralatan)) {
                                    $no = 1;
                                    foreach ($peralatan as $key => $value) { ?>

                                        <tr>
                                            <td></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <?php
                                                $cek = $value['nominal'];
                                                if ($cek > 0) {
                                                    $cek = 'Rp. ' . number_format($cek);
                                                    echo $cek;
                                                } else if ($cek == null) {
                                                    echo "Rp. 0";
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="3" align="center">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                <?php } ?>

                                <tr>
                                    <td width="15%"></td>
                                    <td width="50%"><b>JUMLAH AKTIVA TETAP</b></td>
                                    <td width="45%">
                                        <b>
                                            <?php
                                            $tan = $total_tanah;
                                            $ged = $total_gedung;
                                            $alat = $total_peralatan;
                                            $cek = $tan + $ged + $alat;
                                            if ($cek > 0) {
                                                $hasil = 'Rp. ' . number_format($cek);
                                                echo $hasil;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td colspan="3"><b>MODAL</b></td>
                                </tr>

                                <tr>
                                    <td width="15%"></td>
                                    <td width="50%"><b>MODAL</b></td>
                                    <td width="45%">
                                        <b>
                                            <?php
                                            $cek = $total_modal;
                                            if ($cek > 0) {
                                                $cek = 'Rp. ' . number_format($cek);
                                                echo $cek;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                        </b>
                                    </td>
                                </tr>

                                <?php if (!empty($modal)) {
                                    $no = 1;
                                    foreach ($modal as $key => $value) { ?>

                                        <tr>
                                            <td></td>
                                            <td><?= $value['keterangan'] ?></td>
                                            <td>
                                                <?php
                                                $cek = $value['nominal'];
                                                if ($cek > 0) {
                                                    $cek = 'Rp. ' . number_format($cek);
                                                    echo $cek;
                                                } else if ($cek == null) {
                                                    echo "Rp. 0";
                                                }
                                                ?>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="3" align="center">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                <?php } ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2" text-align="center" width="65%"><b>TOTAL AKTIVA</b></th>
                                    <th width="45%">
                                        <b>
                                            <?php
                                            $tan = $total_tanah;
                                            $ged = $total_gedung;
                                            $alat = $total_peralatan;
                                            $aktif = $tan + $ged + $alat;

                                            $pendapatan_tunai = $saldo_pendapatan_tunai;
                                            $bumy_tunai = $saldo_bumy_tunai;
                                            $belanja_tunai = $saldo_belanja_tunai;
                                            $tunai = $pendapatan_tunai + $bumy_tunai - $belanja_tunai;

                                            //pendapatan bpd
                                            $pendapatan_bpd = $saldo_pendapatan_bpd;
                                            $bumy_bpd = $saldo_bumy_bpd;
                                            $belanja_bpd = $saldo_belanja_bpd;
                                            $bpd = $pendapatan_bpd + $bumy_bpd - $belanja_bpd;

                                            //pendapatan bni
                                            $pendapatan_bni = $saldo_pendapatan_bni;
                                            $bumy_bni = $saldo_bumy_bni;
                                            $belanja_bni = $saldo_belanja_bni;
                                            $bni = $pendapatan_bni + $bumy_bni - $belanja_bni;

                                            $cek1 = $total_tagihan;
                                            $cek2 = $total_bayar;
                                            $utang = $cek1 - $cek2;

                                            $total = $tunai + $bpd + $bni + $utang + $aktif;
                                            if ($total > 0) {
                                                $hasil = 'Rp. ' . number_format($total);
                                                echo $hasil;
                                            } else if ($total == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                    </th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>

                <div class="col-6">
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2" align="center" width="65%"><b>TOTAL PASIVA</b></th>
                                    <th width="45%">
                                        <b>
                                            <?php
                                            $modal = $total_modal;
                                            $kewajiban = $total_kewajiban;
                                            $pasiva = $modal + $kewajiban;

                                            if ($pasiva > 0) {
                                                $hasil = 'Rp. ' . number_format($pasiva);
                                                echo $hasil;
                                            } else if ($pasiva == null) {
                                                echo "Rp. 0";
                                            }
                                            ?>
                                    </th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

</html>

<script>
    window.print();
</script>