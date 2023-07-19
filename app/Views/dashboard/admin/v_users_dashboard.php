<!-- row -->
<div class="row row-xs" ng-controller="ChartCtrl">
    <div class="col-sm-3">
        <div class="panel panel-card">

            <div class="panel-body text-center">
                <div class="m-v-lg">
                    PENDAPATAN SEKOLAH
                    <div class="h2 text-success font-bold">
                        <?php
                        $cek = $total_pendapatan + $total_bumy;

                        if ($cek > 0) {
                            $cek1 = 'Rp. ' . number_format($cek);
                            echo $cek1;
                        } else if ($cek == null) {
                            echo "Rp. 0";
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-card">

            <div class="panel-body text-center">
                <div class="m-v-lg">
                    PENGELUARAN SEKOLAH
                    <div class="h2 text-success font-bold">
                        <?php
                        foreach ($total_belanja as $key => $value) { ?>

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
                    </div>
                </div>
            </div>
            <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-card">

            <div class="panel-body text-center">
                <div class="m-v-lg">
                    TAGIHAN SISWA
                    <div class="h2 text-success font-bold">
                        <?php
                        $cek1 = $total_tagihan1;
                        $cek2 = $total_tagihan2;
                        $cek3 = $cek2 - $cek1;
                        if ($cek3 > 0) {
                            $hasil = 'Rp. ' . number_format($cek3);
                            echo $hasil;
                        } else if ($cek3 == null) {
                            echo "Rp. 0";
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-card">

            <div class="panel-body text-center">
                <div class="m-v-lg">
                    PENGAJUAN UNIT
                    <div class="h2 text-success font-bold">
                        <?php
                        foreach ($pengajuan as $key => $value) { ?>

                            <?php
                            $cek = $value['nominal_belanja'];


                            if ($cek > 0) {
                                $cek = 'Rp. ' . number_format($cek);
                                echo $cek;
                            } else if ($cek == null) {
                                echo "Rp. 0";
                            }

                            ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- row -->
<div class="row row-xs" ng-controller="ChartCtrl">

    <div class="col-sm-9">
        <div class="panel no-border">
            <div class="panel-heading">
                <span class="font-bold">Lines and Bars</span>
                <small class="block text-muted">Plenty of options to control</small>
            </div>
            <div class="panel-body">
                <canvas id="myChart" width="400" height="76"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-card">
            <div class="panel-heading b-b b-light"><b>Saldo Saat Ini</b></div>
            <div class="list-group no-border no-radius">
                <div class="list-group-item">
                    <span class="pull-right">
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
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-info"></i>
                    <b>Saldo Tunai</b>
                </div>
                <div class="list-group-item">
                    <span class="pull-right">
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
                    </span>

                    <i class="fa fa-fw fa-circle m-r-sm text-success"></i>
                    <b>Saldo Bank BPD</b>

                </div>
                <div class="list-group-item">
                    <span class="pull-right">
                        <?php
                        $pendapatan_bni = $saldo_pendapatan_bni;
                        $bumy_bni = $saldo_bumy_bni;
                        $belanja_bni = $saldo_belanja_bni;

                        $cek = $pendapatan_bni + $bumy_bni - $belanja_bni;

                        if ($cek > 0) {
                            $cek1 = 'Rp. ' . number_format($cek);
                            echo $cek1;
                        } else if ($cek == null) {
                            echo "Rp. 0";
                        }

                        ?>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-accent"></i>
                    <b> Saldo Bank BNI</b>
                </div>

                <div class="list-group-item">
                    <span class="pull-right">
                        <?php
                        $pendapatan_tunai = $saldo_pendapatan_tunai;
                        $bumy_tunai = $saldo_bumy_tunai;
                        $belanja_tunai = $saldo_belanja_tunai;
                        $total_tunai = $pendapatan_tunai + $bumy_tunai - $belanja_tunai;


                        $pendapatan_bpd = $saldo_pendapatan_bpd;
                        $bumy_bpd = $saldo_bumy_bpd;
                        $belanja_bpd = $saldo_belanja_bpd;
                        $total_bpd = $pendapatan_bpd + $bumy_bpd - $belanja_bpd;

                        $pendapatan_bni = $saldo_pendapatan_bni;
                        $bumy_bni = $saldo_bumy_bni;
                        $belanja_bni = $saldo_belanja_bni;
                        $total_bni = $pendapatan_bni + $bumy_bni - $belanja_bni;


                        $total_saldo = $total_tunai + $total_bpd + $total_bni;

                        if ($total_saldo > 0) {
                            $hasil = 'Rp. ' . number_format($total_saldo);
                            echo $hasil;
                        } else if ($total_saldo == null) {
                            echo "Rp. 0";
                        }
                        ?>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-primary"></i>
                    <b>Sisa Saldo</b>
                </div>

                <div class="list-group-item">
                    <span class="pull-right">
                        <?php
                        $pendapatan_bni = $saldo_pendapatan_bni;
                        $bumy_bni = $saldo_bumy_bni;
                        $belanja_bni = $saldo_belanja_bni;

                        $cek = $pendapatan_bni + $bumy_bni - $belanja_bni;

                        if ($cek > 0) {
                            $cek1 = 'Rp. ' . number_format($cek);
                            echo $cek1;
                        } else if ($cek == null) {
                            echo "Rp. 0";
                        }

                        ?>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
                    <b> Pendapatan Hari Ini</b>
                </div>

                <div class="list-group-item">
                    <span class="pull-right">
                        <?php
                        $pendapatan_bni = $saldo_pendapatan_bni;
                        $bumy_bni = $saldo_bumy_bni;
                        $belanja_bni = $saldo_belanja_bni;

                        $cek = $pendapatan_bni + $bumy_bni - $belanja_bni;

                        if ($cek > 0) {
                            $cek1 = 'Rp. ' . number_format($cek);
                            echo $cek1;
                        } else if ($cek == null) {
                            echo "Rp. 0";
                        }

                        ?>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
                    <b> Pengeluaran Hari Ini</b>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row row-xs" ng-controller="ChartCtrl">
    <div class="col-sm-3">
        <div class="card amber-600">

            <div class="card-body stat-widget-seven gradient-7">
                <div class="panel-body text-center">
                    <div class="m-v-lg">
                        <h5 class="text-uppercase">pendapatan sekolah</h5>
                        <div class="h2 text-default font-bold">
                            <?php
                            $cek = $total_pendapatan + $total_bumy;

                            if ($cek > 0) {
                                $cek1 = 'Rp. ' . number_format($cek);
                                echo $cek1;
                            } else if ($cek == null) {
                                echo "Rp. 0";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="card red-600">

            <div class="card-body stat-widget-seven gradient-7">
                <div class="panel-body text-center">
                    <div class="m-v-lg">
                        <h5 class="text-uppercase">pengeluaran sekolah</h5>
                        <div class="h2 text-default font-bold">
                            <?php
                            foreach ($total_belanja as $key => $value) { ?>

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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="card purple-600">

            <div class="card-body stat-widget-seven gradient-7">
                <div class="panel-body text-center">
                    <div class="m-v-lg">
                        <h5 class="text-uppercase">tagihan siswa</h5>
                        <div class="h2 text-default font-bold">

                            <?php
                            $cek1 = $total_tagihan1;
                            $cek2 = $total_tagihan2;
                            $cek3 = $cek2 - $cek1;
                            if ($cek3 > 0) {
                                $hasil = 'Rp. ' . number_format($cek3);
                                echo $hasil;
                            } else if ($cek3 == null) {
                                echo "Rp. 0";
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="card cyan-600">

            <div class="card-body stat-widget-seven gradient-7">
                <div class="panel-body text-center">
                    <div class="m-v-lg">
                        <h5 class="text-uppercase">pengajuan unit</h5>
                        <div class="h2 text-default font-bold">
                            <?php
                            foreach ($pengajuan as $key => $value) { ?>

                                <?php
                                $cek = $value['nominal_belanja'];


                                if ($cek > 0) {
                                    $cek = 'Rp. ' . number_format($cek);
                                    echo $cek;
                                } else if ($cek == null) {
                                    echo "Rp. 0";
                                }

                                ?>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- #/ container -->

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'],
            datasets: [{
                label: '# of Votes',
                data: <?php echo json_encode($total_tagihan1) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>