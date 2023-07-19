<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->DashboardModel = new DashboardModel();
    }

    public function keuangan()
    {
        $data = [
            'title'         => 'Dashboard',
            'menu'         => 'Dashboard',

            'total_belanja'       => $this->DashboardModel->cek_total_belanja(),


            'total_pendapatan'    => $this->DashboardModel->cek_total_pendapatan(),
            'total_sekretariat'    => $this->DashboardModel->cek_total_sekretariat(),

            'total_tagihan1'    => $this->DashboardModel->cek_total_tagihan1(),
            'total_tagihan2'    => $this->DashboardModel->cek_total_tagihan2(),
            'pengajuan'    => $this->DashboardModel->total_pengajuan(),

            'historis_pendapatan'    => $this->DashboardModel->total_historis_pendapatan(),
            'historis'    => $this->DashboardModel->total_historis(),

            'pendapatan_sekarang'    => $this->DashboardModel->total_pendapatan_hari_ini(),
            'pengeluaran_sekarang'    => $this->DashboardModel->total_pengeluaran_hari_ini(),
            'total_pendapatan_sekarang'    => $this->DashboardModel->pendapatan_hari_ini(),
            'total_pengeluaran_sekarang'    => $this->DashboardModel->pengeluaran_hari_ini(),


            'saldo_pendapatan_tunai'    => $this->DashboardModel->cek_total_saldo_pendapatan_tunai(),
            'saldo_sekretariat_tunai'    => $this->DashboardModel->cek_total_saldo_sekretariat_tunai(),
            'saldo_belanja_tunai'    => $this->DashboardModel->cek_total_saldo_belanja_tunai(),

            'saldo_pendapatan_bpd'    => $this->DashboardModel->cek_total_saldo_pendapatan_bpd(),
            'saldo_sekretariat_bpd'    => $this->DashboardModel->cek_total_saldo_sekretariat_bpd(),
            'saldo_belanja_bpd'    => $this->DashboardModel->cek_total_saldo_belanja_bpd(),

            'saldo_pendapatan_bni'    => $this->DashboardModel->cek_total_saldo_pendapatan_bni(),
            'saldo_sekretariat_bni'    => $this->DashboardModel->cek_total_saldo_sekretariat_bni(),
            'saldo_belanja_bni'    => $this->DashboardModel->cek_total_saldo_belanja_bni(),

            'grafik_pendapatan1' => $this->DashboardModel->cek_pendapatan1(),
            'grafik_pendapatan2' => $this->DashboardModel->cek_pendapatan2(),
            'grafik_pendapatan3' => $this->DashboardModel->cek_pendapatan3(),
            'grafik_pendapatan4' => $this->DashboardModel->cek_pendapatan4(),
            'grafik_pendapatan5' => $this->DashboardModel->cek_pendapatan5(),
            'grafik_pendapatan6' => $this->DashboardModel->cek_pendapatan6(),
            'grafik_pendapatan7' => $this->DashboardModel->cek_pendapatan7(),
            'grafik_pendapatan8' => $this->DashboardModel->cek_pendapatan8(),
            'grafik_pendapatan9' => $this->DashboardModel->cek_pendapatan9(),
            'grafik_pendapatan10' => $this->DashboardModel->cek_pendapatan10(),
            'grafik_pendapatan11' => $this->DashboardModel->cek_pendapatan11(),
            'grafik_pendapatan12' => $this->DashboardModel->cek_pendapatan12(),

            'grafik_belanja1' => $this->DashboardModel->cek_grafik_belanja1(),
            'grafik_belanja2' => $this->DashboardModel->cek_grafik_belanja2(),
            'grafik_belanja3' => $this->DashboardModel->cek_grafik_belanja3(),
            'grafik_belanja4' => $this->DashboardModel->cek_grafik_belanja4(),
            'grafik_belanja5' => $this->DashboardModel->cek_grafik_belanja5(),
            'grafik_belanja6' => $this->DashboardModel->cek_grafik_belanja6(),
            'grafik_belanja7' => $this->DashboardModel->cek_grafik_belanja7(),
            'grafik_belanja8' => $this->DashboardModel->cek_grafik_belanja8(),
            'grafik_belanja9' => $this->DashboardModel->cek_grafik_belanja9(),
            'grafik_belanja10' => $this->DashboardModel->cek_grafik_belanja10(),
            'grafik_belanja11' => $this->DashboardModel->cek_grafik_belanja11(),
            'grafik_belanja12' => $this->DashboardModel->cek_grafik_belanja12(),

            'total_sekretariat1' => $this->DashboardModel->cek_grafik_sekretariat1(),
            'total_sekretariat2' => $this->DashboardModel->cek_grafik_sekretariat2(),
            'total_sekretariat3' => $this->DashboardModel->cek_grafik_sekretariat3(),
            'total_sekretariat4' => $this->DashboardModel->cek_grafik_sekretariat4(),
            'total_sekretariat5' => $this->DashboardModel->cek_grafik_sekretariat5(),
            'total_sekretariat6' => $this->DashboardModel->cek_grafik_sekretariat6(),
            'total_sekretariat7' => $this->DashboardModel->cek_grafik_sekretariat7(),
            'total_sekretariat8' => $this->DashboardModel->cek_grafik_sekretariat8(),
            'total_sekretariat9' => $this->DashboardModel->cek_grafik_sekretariat9(),
            'total_sekretariat10' => $this->DashboardModel->cek_grafik_sekretariat10(),
            'total_sekretariat11' => $this->DashboardModel->cek_grafik_sekretariat11(),
            'total_sekretariat12' => $this->DashboardModel->cek_grafik_sekretariat12(),

            'isi'           => 'dashboard/admin/v_admin_dashboard',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function android()
    {
        $data = [
            'title'         => 'Dashboard',
            'menu'         => 'Dashboard',

            'total_belanja'       => $this->DashboardModel->cek_total_belanja(),


            'total_pendapatan'    => $this->DashboardModel->cek_total_pendapatan(),
            'total_sekretariat'    => $this->DashboardModel->cek_total_sekretariat(),

            'total_tagihan1'    => $this->DashboardModel->cek_total_tagihan1(),
            'total_tagihan2'    => $this->DashboardModel->cek_total_tagihan2(),
            'pengajuan'    => $this->DashboardModel->total_pengajuan(),

            'historis_pendapatan'    => $this->DashboardModel->total_historis_pendapatan(),
            'historis'    => $this->DashboardModel->total_historis(),

            'pendapatan_sekarang'    => $this->DashboardModel->total_pendapatan_hari_ini(),
            'pengeluaran_sekarang'    => $this->DashboardModel->total_pengeluaran_hari_ini(),
            'total_pendapatan_sekarang'    => $this->DashboardModel->pendapatan_hari_ini(),
            'total_pengeluaran_sekarang'    => $this->DashboardModel->pengeluaran_hari_ini(),


            'saldo_pendapatan_tunai'    => $this->DashboardModel->cek_total_saldo_pendapatan_tunai(),
            'saldo_sekretariat_tunai'    => $this->DashboardModel->cek_total_saldo_sekretariat_tunai(),
            'saldo_belanja_tunai'    => $this->DashboardModel->cek_total_saldo_belanja_tunai(),

            'saldo_pendapatan_bpd'    => $this->DashboardModel->cek_total_saldo_pendapatan_bpd(),
            'saldo_sekretariat_bpd'    => $this->DashboardModel->cek_total_saldo_sekretariat_bpd(),
            'saldo_belanja_bpd'    => $this->DashboardModel->cek_total_saldo_belanja_bpd(),

            'saldo_pendapatan_bni'    => $this->DashboardModel->cek_total_saldo_pendapatan_bni(),
            'saldo_sekretariat_bni'    => $this->DashboardModel->cek_total_saldo_sekretariat_bni(),
            'saldo_belanja_bni'    => $this->DashboardModel->cek_total_saldo_belanja_bni(),

            'grafik_pendapatan1' => $this->DashboardModel->cek_pendapatan1(),
            'grafik_pendapatan2' => $this->DashboardModel->cek_pendapatan2(),
            'grafik_pendapatan3' => $this->DashboardModel->cek_pendapatan3(),
            'grafik_pendapatan4' => $this->DashboardModel->cek_pendapatan4(),
            'grafik_pendapatan5' => $this->DashboardModel->cek_pendapatan5(),
            'grafik_pendapatan6' => $this->DashboardModel->cek_pendapatan6(),
            'grafik_pendapatan7' => $this->DashboardModel->cek_pendapatan7(),
            'grafik_pendapatan8' => $this->DashboardModel->cek_pendapatan8(),
            'grafik_pendapatan9' => $this->DashboardModel->cek_pendapatan9(),
            'grafik_pendapatan10' => $this->DashboardModel->cek_pendapatan10(),
            'grafik_pendapatan11' => $this->DashboardModel->cek_pendapatan11(),
            'grafik_pendapatan12' => $this->DashboardModel->cek_pendapatan12(),

            'grafik_belanja1' => $this->DashboardModel->cek_grafik_belanja1(),
            'grafik_belanja2' => $this->DashboardModel->cek_grafik_belanja2(),
            'grafik_belanja3' => $this->DashboardModel->cek_grafik_belanja3(),
            'grafik_belanja4' => $this->DashboardModel->cek_grafik_belanja4(),
            'grafik_belanja5' => $this->DashboardModel->cek_grafik_belanja5(),
            'grafik_belanja6' => $this->DashboardModel->cek_grafik_belanja6(),
            'grafik_belanja7' => $this->DashboardModel->cek_grafik_belanja7(),
            'grafik_belanja8' => $this->DashboardModel->cek_grafik_belanja8(),
            'grafik_belanja9' => $this->DashboardModel->cek_grafik_belanja9(),
            'grafik_belanja10' => $this->DashboardModel->cek_grafik_belanja10(),
            'grafik_belanja11' => $this->DashboardModel->cek_grafik_belanja11(),
            'grafik_belanja12' => $this->DashboardModel->cek_grafik_belanja12(),

            'total_sekretariat1' => $this->DashboardModel->cek_grafik_sekretariat1(),
            'total_sekretariat2' => $this->DashboardModel->cek_grafik_sekretariat2(),
            'total_sekretariat3' => $this->DashboardModel->cek_grafik_sekretariat3(),
            'total_sekretariat4' => $this->DashboardModel->cek_grafik_sekretariat4(),
            'total_sekretariat5' => $this->DashboardModel->cek_grafik_sekretariat5(),
            'total_sekretariat6' => $this->DashboardModel->cek_grafik_sekretariat6(),
            'total_sekretariat7' => $this->DashboardModel->cek_grafik_sekretariat7(),
            'total_sekretariat8' => $this->DashboardModel->cek_grafik_sekretariat8(),
            'total_sekretariat9' => $this->DashboardModel->cek_grafik_sekretariat9(),
            'total_sekretariat10' => $this->DashboardModel->cek_grafik_sekretariat10(),
            'total_sekretariat11' => $this->DashboardModel->cek_grafik_sekretariat11(),
            'total_sekretariat12' => $this->DashboardModel->cek_grafik_sekretariat12(),


            'isi'          => 'dashboard/android/v_android_dashboard',
        ];
        echo view('layout/android/va_wrapper', $data);
    }
}
