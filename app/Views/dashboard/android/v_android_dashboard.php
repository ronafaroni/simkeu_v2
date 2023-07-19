<!-- row -->
<div class="row row-xs" ng-controller="ChartCtrl">
	<div class="col-sm-3">
		<div class="panel panel-card">

			<div class="panel-body text-center">
				<div class="m-v-lg">
					PENDAPATAN
					<div class="h2 text-success font-bold">
						<?php
						$cek = $total_pendapatan + $total_sekretariat;

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
			<!-- <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped active progress-sm r m-v-sm">
                    <div class="progress-bar green" data-toggle="tooltip" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div> -->
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-card">

			<div class="panel-body text-center">
				<div class="m-v-lg">
					PENGELUARAN
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
			<!-- <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped active progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div> -->
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-card">

			<div class="panel-body text-center">
				<div class="m-v-lg">
					TAGIHAN
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
			<!-- <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped active progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div> -->
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-card">

			<div class="panel-body text-center">
				<div class="m-v-lg">
					PENGAJUAN
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
			<!-- <div class="b-t b-light p">
                Composite
                <div class="progress progress-striped active progress-sm r m-v-sm">
                    <div class="progress-bar green" style="width:30%">30%</div>
                    <div class="progress-bar amber" style="width:20%">20%</div>
                </div>
            </div> -->
		</div>
	</div>
</div>

<!-- row -->
<div class="row row-xs" ng-controller="ChartCtrl">
	<div class="col-sm-3">
		<div class="panel panel-card">
			<div class="panel-heading b-b b-light"><b>Saldo Saat Ini</b></div>
			<div class="list-group no-border no-radius">
				<div class="list-group-item">
					<span class="pull-right">
						<?php
						$pendapatan_tunai = $saldo_pendapatan_tunai;
						$sekretariat_tunai = $saldo_sekretariat_tunai;
						$belanja_tunai = $saldo_belanja_tunai;

						$cek = $pendapatan_tunai + $sekretariat_tunai - $belanja_tunai;

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
						$sekretariat_bpd = $saldo_sekretariat_bpd;
						$belanja_bpd = $saldo_belanja_bpd;

						$cek = $pendapatan_bpd + $sekretariat_bpd - $belanja_bpd;

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
						$sekretariat_bni = $saldo_sekretariat_bni;
						$belanja_bni = $saldo_belanja_bni;

						$cek = $pendapatan_bni + $sekretariat_bni - $belanja_bni;

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
						$sekretariat_tunai = $saldo_sekretariat_tunai;
						$belanja_tunai = $saldo_belanja_tunai;
						$total_tunai = $pendapatan_tunai + $sekretariat_tunai - $belanja_tunai;


						$pendapatan_bpd = $saldo_pendapatan_bpd;
						$sekretariat_bpd = $saldo_sekretariat_bpd;
						$belanja_bpd = $saldo_belanja_bpd;
						$total_bpd = $pendapatan_bpd + $sekretariat_bpd - $belanja_bpd;

						$pendapatan_bni = $saldo_pendapatan_bni;
						$sekretariat_bni = $saldo_sekretariat_bni;
						$belanja_bni = $saldo_belanja_bni;
						$total_bni = $pendapatan_bni + $sekretariat_bni - $belanja_bni;


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
						$cek = $total_pendapatan_sekarang;

						if ($cek > 0) {
							$cek = 'Rp. ' . number_format($cek);
							echo $cek;
						} else if ($cek == null) {
							echo "Rp. 0";
						}

						?>
					</span>
					<i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
					<b> Pendapatan Terakhir</b>
				</div>

				<div class="list-group-item">
					<span class="pull-right">
						<?php
						foreach ($total_pengeluaran_sekarang as $key => $value) { ?>

							<?php
							$cek = $value['nominal_belanja'];

							if ($cek > 0) {
								$cek1 = 'Rp. ' . number_format($cek);
								echo $cek1;
							} else if ($cek == " ") {
								echo "Rp. 0";
							}
							?>

						<?php } ?>

					</span>
					<i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
					<b> Pengeluaran Terakhir</b>
				</div>

			</div>
		</div>
	</div>
</div>

<script>
	const m = moment("2019-05-01");
	console.log(m.fromNow());
</script>

<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGUST', 'SEPT', 'OKT', 'NOV', 'DES'],
			datasets: [{
					label: '# Pendapatan',
					data: [<?php echo json_encode($grafik_pendapatan1 + $total_sekretariat1) ?>,
						<?php echo json_encode($grafik_pendapatan2 + $total_sekretariat2) ?>,
						<?php echo json_encode($grafik_pendapatan3 + $total_sekretariat3) ?>,
						<?php echo json_encode($grafik_pendapatan4 + $total_sekretariat4) ?>,
						<?php echo json_encode($grafik_pendapatan5 + $total_sekretariat5) ?>,
						<?php echo json_encode($grafik_pendapatan6 + $total_sekretariat6) ?>,
						<?php echo json_encode($grafik_pendapatan7 + $total_sekretariat7) ?>,
						<?php echo json_encode($grafik_pendapatan8 + $total_sekretariat8) ?>,
						<?php echo json_encode($grafik_pendapatan9 + $total_sekretariat9) ?>,
						<?php echo json_encode($grafik_pendapatan10 + $total_sekretariat10) ?>,
						<?php echo json_encode($grafik_pendapatan11 + $total_sekretariat11) ?>,
						<?php echo json_encode($grafik_pendapatan12 + $total_sekretariat12) ?>
					],

					backgroundColor: [
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
						'rgba(243, 174, 15, 0.8)',
					],
					borderColor: [
						'rgba(#3e95cd)',
					],
					borderWidth: 1,
					fill: false
				},
				{
					label: '# Pengeluaran',
					data: [<?php echo json_encode($grafik_belanja1) ?>,
						<?php echo json_encode($grafik_belanja2) ?>,
						<?php echo json_encode($grafik_belanja3) ?>,
						<?php echo json_encode($grafik_belanja4) ?>,
						<?php echo json_encode($grafik_belanja5) ?>,
						<?php echo json_encode($grafik_belanja6) ?>,
						<?php echo json_encode($grafik_belanja7) ?>,
						<?php echo json_encode($grafik_belanja8) ?>,
						<?php echo json_encode($grafik_belanja9) ?>,
						<?php echo json_encode($grafik_belanja10) ?>,
						<?php echo json_encode($grafik_belanja11) ?>,
						<?php echo json_encode($grafik_belanja12) ?>
					],
					backgroundColor: [
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
						'rgba(225, 10, 52, 0.8)',
					],
					borderColor: [
						'rgba(#3e95cd)',
					],
					borderWidth: 1,
					fill: false
				}
			],
		},
		options: {
			scales: {
				y: {
					beginAtZero: true,
					display: false,

				}
			}
		}
	});
</script>