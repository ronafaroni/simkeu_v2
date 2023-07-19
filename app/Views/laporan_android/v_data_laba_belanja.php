<div class="card-heading">
    <h2>Posisi Belanja Sekolah</h2>
    <small>Posisi Belanja Sekolah Bumi Kartini.</small>
</div>

<div align="center">
    <a data-toggle="modal" data-target="#modalHarian" class="btn btn-addon btn-success waves-effect"><i class="fa fa-download"></i> Download</a>
    <a href="<?= base_url('laporan/print_belanja') ?>" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-print"></i> Cetak Laporan</a><br><br>
</div>

<div class="nk-block nk-block-lg">
    <div class="card card-preview">
        <div class="card-inner">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">KODE BELANJA</th>
                            <th scope="col">URAIAN</th>
                            <th scope="col">JUMLAH (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <b>5.</b></td>
                            <td> <b>BELANJA</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.1.</b></td>
                            <td> <b>BELANJA SEKRETARIAT YPBK</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($sekretariat as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.1.1</b></td>
                            <td> <b>BELANJA PENJAMINAN MUTU</b></td>
                            <td>
                                <?php
                                foreach ($mutu as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.1.2</b></td>
                            <td> <b>BELANJA KEGIATAN RUTIN YAYASAN</b></td>
                            <td>
                                <?php
                                foreach ($yayasan as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.1.3</b></td>
                            <td> <b>BELANJA UNIT KEUANGAN</b></td>
                            <td>
                                <?php
                                foreach ($keuangan as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.1</td>
                            <td> BELANJA PEGAWAI YPBK</td>
                            <td> <?php
                                    foreach ($pegawai_ypbk as $key => $value) { ?>

                                    <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                    ?>

                                <?php } ?></td>
                        </tr>
                        <tr>
                            <td> 5.1.3.2</td>
                            <td> BELANJA PEGAWAI SDUT</td>
                            <td>
                                <?php
                                foreach ($pegawai_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.3</td>
                            <td> BELANJA PEGAWAI TPQ</td>
                            <td>
                                <?php
                                foreach ($pegawai_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.4</td>
                            <td> BELANJA PEGAWAI SMPUT</td>
                            <td>
                                <?php
                                foreach ($pegawai_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.5</td>
                            <td> BELANJA PEGAWAI IBS </td>
                            <td>
                                <?php
                                foreach ($pegawai_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.6</td>
                            <td> BELANJA PEGAWAI PAUD </td>
                            <td>
                                <?php
                                foreach ($pegawai_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.7</td>
                            <td> BELANJA DANA SOSIAL </td>
                            <td>
                                <?php
                                foreach ($dansos as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.8</td>
                            <td> BELANJA PEGAWAI BPJS </td>
                            <td>
                                <?php
                                foreach ($bpjs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.9</td>
                            <td> BELANJA PEGAWAI SPEEDY / INTERNET </td>
                            <td>
                                <?php
                                foreach ($speedy as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.3.10</td>
                            <td> BELANJA PEGAWAI OPERASIONAL </td>
                            <td>
                                <?php
                                foreach ($operasional as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.1.4</b></td>
                            <td> <b>BELANJA PEMBANGUNAN</b></td>
                            <td> Rp. 0</td>
                        </tr>
                        <tr>
                            <td> 5.1.4.1</td>
                            <td> BELANJA PEMBANGUNAN SDUT</td>
                            <td>
                                <!-- <?php
                                        foreach ($bangun_sdut as $key => $value) { ?>

                                    <?php
                                            $cek1 = $value['nominal_pengeluaran'];
                                            $cek2 = $value['nominal_pembayaran'];
                                            $cek = $cek1 + $cek2;
                                            if ($cek > 0) {
                                                $hasil = 'Rp. ' . number_format($cek);
                                                echo $hasil;
                                            } else if ($cek == null) {
                                                echo "Rp. 0";
                                            }

                                    ?>

                                <?php } ?> -->

                                Rp. 0
                            </td>
                        </tr>
                        <tr>
                            <td> 5.1.4.2</td>
                            <td>BELANJA PEMBANGUNAN TPQ</td>
                            <td>


                                Rp. 0
                            </td>
                        </tr>
                        <tr>
                            <td> 5.1.4.3</td>
                            <td> BELANJA PEMBANGUNAN SMPUT</td>
                            <td>


                                Rp. 0
                            </td>
                        </tr>
                        <tr>
                            <td> 5.1.4.4</td>
                            <td> BELANJA PEMBANGUNAN IBS</td>
                            <td>


                                Rp. 0
                            </td>
                        </tr>
                        <tr>
                            <td> 5.1.4.5</td>
                            <td> BELANJA PEMBANGUNAN PAUD</td>
                            <td>


                                Rp. 0
                            </td>
                        </tr>

                        <tr>
                            <td> #</td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> <b>5.1.5</b></td>
                            <td> <b>BADAN USAHA MILIK YAYASAN (BUMY)</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($bumy as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>

                            </td>
                        </tr>
                        <tr>
                            <td> 5.1.5.1</td>
                            <td> BELANJA CATERING</td>
                            <td>
                                <?php
                                foreach ($catering as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.5.2</td>
                            <td> BELANJA KOPERASI</td>
                            <td>
                                <?php
                                foreach ($koperasi as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.5.3</td>
                            <td> BELANJA SBS</td>
                            <td>
                                <?php
                                foreach ($sbs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.5.4</td>
                            <td> BELANJA AIR MINERAL</td>
                            <td>
                                <?php
                                foreach ($air_mineral as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> 5.1.5.5</td>
                            <td> BELANJA GASEBU</td>
                            <td>
                                <?php
                                foreach ($gasebu as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.2</b></td>
                            <td> <b>BELANJA SDUT</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja_sdut as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.2.1</b></td>
                            <td> <b>BELANJA BIDANG ADMINISTRASI SDUT</b></td>
                            <td>
                                <?php
                                foreach ($admin_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.2.2</b></td>
                            <td> <b>BELANJA BIDANG KURIKULUM SDUT</b></td>
                            <td>
                                <?php
                                foreach ($kurikulum_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.2.3</b></td>
                            <td> <b>BELANJA BIDANG KESISWAAN SDUT</b></td>
                            <td>
                                <?php
                                foreach ($kesiswaan_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.2.4</b></td>
                            <td> <b>BELANJA BIDANG SARPRAS SDUT</b></td>
                            <td>
                                <?php
                                foreach ($sarpras_sdut as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.3</b></td>
                            <td> <b>BELANJA TPQ</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja_tpq as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.3.1</b></td>
                            <td> <b>BELANJA BIDANG ADMINISTRASI TPQ</b></td>
                            <td>
                                <?php
                                foreach ($admin_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.3.2</b></td>
                            <td> <b>BELANJA BIDANG KURIKULUM TPQ</b></td>
                            <td>
                                <?php
                                foreach ($kurikulum_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.3.3</b></td>
                            <td> <b>BELANJA BIDANG KESISWAAN TPQ</b></td>
                            <td>
                                <?php
                                foreach ($kesiswaan_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.3.4</b></td>
                            <td> <b>BELANJA BIDANG SARPRAS TPQ</b></td>
                            <td>
                                <?php
                                foreach ($sarpras_tpq as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.4</b></td>
                            <td> <b>BELANJA SMPUT</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja_smput as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.4.1</b></td>
                            <td> <b>BELANJA BIDANG ADMINISTRASI SMPUT</b></td>
                            <td>
                                <?php
                                foreach ($admin_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.4.2</b></td>
                            <td> <b>BELANJA BIDANG KURIKULUM SMPUT</b></td>
                            <td>
                                <?php
                                foreach ($kurikulum_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.4.3</b></td>
                            <td> <b>BELANJA BIDANG KESISWAAN SMPUT</b></td>
                            <td>
                                <?php
                                foreach ($kesiswaan_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.4.4</b></td>
                            <td> <b>BELANJA BIDANG SARPRAS SMPUT</b></td>
                            <td>
                                <?php
                                foreach ($sarpras_smput as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.5</b></td>
                            <td> <b>BELANJA IBS</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja_ibs as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.5.1</b></td>
                            <td> <b>BELANJA BIDANG ADMINISTRASI IBS</b></td>
                            <td>
                                <?php
                                foreach ($admin_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.5.2</b></td>
                            <td> <b>BELANJA BIDANG KURIKULUM IBS</b></td>
                            <td>
                                <?php
                                foreach ($kurikulum_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.5.3</b></td>
                            <td> <b>BELANJA BIDANG KESISWAAN IBS</b></td>
                            <td>
                                <?php
                                foreach ($kesiswaan_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.5.4</b></td>
                            <td> <b>BELANJA BIDANG SARPRAS IBS</b></td>
                            <td>
                                <?php
                                foreach ($sarpras_ibs as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.6</b></td>
                            <td> <b>BELANJA PAUD</b></td>
                            <td>
                                <b>
                                    <?php
                                    foreach ($belanja_paud as $key => $value) { ?>

                                        <?php
                                        $cek = $value['nominal_belanja'];
                                        if ($cek > 0) {
                                            $hasil = 'Rp. ' . number_format($cek);
                                            echo $hasil;
                                        } else if ($cek == null) {
                                            echo "Rp. 0";
                                        }

                                        ?>

                                    <?php } ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td> <b>5.6.1</b></td>
                            <td> <b>BELANJA BIDANG ADMINISTRASI PAUD</b></td>
                            <td>
                                <?php
                                foreach ($admin_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.6.2</b></td>
                            <td> <b>BELANJA BIDANG KURIKULUM PAUD</b></td>
                            <td>
                                <?php
                                foreach ($kurikulum_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.6.3</b></td>
                            <td> <b>BELANJA BIDANG KESISWAAN PAUD</b></td>
                            <td>
                                <?php
                                foreach ($kesiswaan_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
                            <td> <b>5.6.4</b></td>
                            <td> <b>BELANJA BIDANG SARPRAS PAUD</b></td>
                            <td>
                                <?php
                                foreach ($sarpras_paud as $key => $value) { ?>

                                    <?php
                                    $cek = $value['nominal_belanja'];
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
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>