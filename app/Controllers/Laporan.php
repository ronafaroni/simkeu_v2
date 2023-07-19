<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use PHPExcel;
use PHPExcel_IOFactory;
use TCPDF;

class Laporan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LaporanModel = new LaporanModel();
    }

    public function laba_pendapatan()
    {
        $data = [
            'title'         => 'Laporan Pendapatan',
            'menu'          => 'Laporan Pendapatan',

            'total_pendapatan'    => $this->LaporanModel->total_pendapatan(),
            'total_sekretariat'    => $this->LaporanModel->total_sekretariat(),

            // 'pendapatan'       => $this->LaporanModel->cek_pendapatan(),
            'sekretariat'       => $this->LaporanModel->cek_pendapatan_sekretariat(),
            'mutu'       => $this->LaporanModel->cek_pendapatan_mutu(),
            'keuangan'       => $this->LaporanModel->cek_pendapatan_keuangan(),
            'pembangunan'       => $this->LaporanModel->cek_pendapatan_pembangunan(),
            'catering'       => $this->LaporanModel->cek_pendapatan_catering(),
            'koperasi'       => $this->LaporanModel->cek_pendapatan_koperasi(),
            'sbs'       => $this->LaporanModel->cek_pendapatan_sbs(),
            'air'       => $this->LaporanModel->cek_pendapatan_air_mineral(),
            'gasebu'       => $this->LaporanModel->cek_pendapatan_gasebu(),


            'all_pendapatan_sdut'       => $this->LaporanModel->cek_pendapatan_sdut(),
            'bulanan_sdut'       => $this->LaporanModel->cek_pendapatan_bulanan_sdut(),
            'spp_sdut'       => $this->LaporanModel->cek_pendapatan_spp_sdut(),
            'tahunan_sdut'       => $this->LaporanModel->cek_pendapatan_tahunan_sdut(),
            'infaq_sdut'       => $this->LaporanModel->cek_pendapatan_infaq(),
            'daftar_ulang_sdut'       => $this->LaporanModel->cek_pendapatan_daftar_ulang(),
            'buku_ajar_sdut'       => $this->LaporanModel->cek_pendapatan_buku_ajar(),
            'ujian_sdut'       => $this->LaporanModel->cek_pendapatan_ujian(),
            'lainya_sdut'       => $this->LaporanModel->cek_pendapatan_lainya_sdut(),
            'uang_bos_sdut'       => $this->LaporanModel->cek_pendapatan_bos_sdut(),


            'all_pendapatan_tpq'       => $this->LaporanModel->cek_pendapatan_tpq(),
            'cek_bulanan_tpq'       => $this->LaporanModel->cek_pendapatan_bulanan_tpq(),
            'syhariyah_tpq'       => $this->LaporanModel->cek_pendapatan_syahriyah_tpq(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_tpq(),
            'imtaz'       => $this->LaporanModel->cek_pendapatan_imtaz(),
            'lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),
            'pendapatan_lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),


            'all_pendapatan_smput'       => $this->LaporanModel->cek_pendapatan_smput(),
            'bulanan_smput'       => $this->LaporanModel->cek_pendapatan_bulanan_smput(),
            'spp_smput'       => $this->LaporanModel->cek_pendapatan_spp_smput(),
            'spp_boarding'       => $this->LaporanModel->cek_pendapatan_spp_boarding(),
            'tahunan_smput'       => $this->LaporanModel->cek_pendapatan_tahunan_smput(),
            'infaq_smput'       => $this->LaporanModel->cek_pendapatan_infaq_smput(),
            'infaq_boarding'       => $this->LaporanModel->cek_pendapatan_infaq_boarding(),
            'daftar_ulang_smput'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_smput(),
            'buku_ajar_smput'       => $this->LaporanModel->cek_pendapatan_buku_ajar_smput(),
            'lainya_smput'       => $this->LaporanModel->cek_pendapatan_lainya_smput(),
            'bos_smput'       => $this->LaporanModel->cek_pendapatan_bos_smput(),
            'ujian_smput'       => $this->LaporanModel->cek_pendapatan_ujian_smput(),


            'all_pendapatan_ibs'       => $this->LaporanModel->cek_pendapatan_ibs(),
            'bulanan_ibs'       => $this->LaporanModel->cek_pendapatan_bulanan_ibs(),
            'syhariyah_ibs'       => $this->LaporanModel->cek_pendapatan_syahriyah_ibs(),
            'tahunan_ibs'       => $this->LaporanModel->cek_pendapatan_tahunan_ibs(),
            // 'infaq_ibs'       => $this->LaporanModel->cek_pendapatan_infaq_ibs(),
            'ziarah'       => $this->LaporanModel->cek_pendapatan_ziarah(),
            'dipan'       => $this->LaporanModel->cek_pendapatan_dipan(),
            'kitab'       => $this->LaporanModel->cek_pendapatan_kitab(),
            'lainya_ibs'       => $this->LaporanModel->tot_pendapatan_lainya_ibs(),
            'pendapatan_lainya_ibs'       => $this->LaporanModel->cek_pendapatan_lainya_ibs(),


            'pendapatan_paud'       => $this->LaporanModel->cek_pendapatan_paud(),
            'bulanan_paud'       => $this->LaporanModel->cek_pendapatan_bulanan_paud(),
            'spp_paud_play'       => $this->LaporanModel->cek_pendapatan_spp_paud_play(),
            'spp_paud_care'       => $this->LaporanModel->cek_pendapatan_spp_paud_care(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_paud(),

            'daftar_ulang_paud'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_paud(),
            'lainya_paud'       => $this->LaporanModel->all_cek_pendapatan_lainya_paud(),
            'pendapatan_lainya_paud'       => $this->LaporanModel->cek_pendapatan_lainya_paud(),

            'isi'           => 'laporan/v_data_laba_pendapatan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function laba_belanja()
    {
        $data = [
            'title'         => 'Laporan Belanja',
            'menu'          => 'Laporan Belanja',

            'belanja'       => $this->LaporanModel->cek_belanja(),
            'sekretariat'       => $this->LaporanModel->cek_sekretariat(),

            'mutu'          => $this->LaporanModel->get_mutu(),
            'yayasan'       => $this->LaporanModel->get_yayasan(),
            'pegawai_ypbk'          => $this->LaporanModel->get_ypbk(),
            'pegawai_sdut'       => $this->LaporanModel->get_sdut(),
            'pegawai_tpq'          => $this->LaporanModel->get_tpq(),
            'pegawai_smput'       => $this->LaporanModel->get_smput(),
            'pegawai_ibs'          => $this->LaporanModel->get_ibs(),
            'pegawai_paud'       => $this->LaporanModel->get_paud(),
            'dansos'       => $this->LaporanModel->get_dansos(),
            'bpjs'       => $this->LaporanModel->get_bpjs(),
            'speedy'       => $this->LaporanModel->get_speedy(),
            'operasional'       => $this->LaporanModel->get_operasional(),
            'keuangan'       => $this->LaporanModel->get_keuangan(),

            // 'bangun_ypbk'          => $this->LaporanModel->get_bangun_ypbk(),
            'bangun_sdut'       => $this->LaporanModel->get_bangun_sdut(),
            'bangun_tpq'          => $this->LaporanModel->get_bangun_tpq(),
            'bangun_smput'       => $this->LaporanModel->get_bangun_smput(),
            'bangun_ibs'          => $this->LaporanModel->get_bangun_ibs(),
            'bangun_paud'       => $this->LaporanModel->get_bangun_paud(),

            'catering'          => $this->LaporanModel->cek_catering(),
            'koperasi'       => $this->LaporanModel->cek_koperasi(),
            'sbs'          => $this->LaporanModel->cek_sbs(),
            'air_mineral'       => $this->LaporanModel->cek_air_mineral(),
            'gasebu'          => $this->LaporanModel->cek_gasebu(),
            'bumy'          => $this->LaporanModel->cek_bumy(),

            'belanja_sdut'          => $this->LaporanModel->cek_belanja_sdut(),
            'admin_sdut'       => $this->LaporanModel->cek_admin_sdut(),
            'kurikulum_sdut'          => $this->LaporanModel->cek_kurikulum_sdut(),
            'kesiswaan_sdut'       => $this->LaporanModel->cek_kesiswaan_sdut(),
            'sarpras_sdut'          => $this->LaporanModel->cek_sarpras_sdut(),

            'belanja_tpq'          => $this->LaporanModel->cek_belanja_tpq(),
            'admin_tpq'       => $this->LaporanModel->cek_admin_tpq(),
            'kurikulum_tpq'          => $this->LaporanModel->cek_kurikulum_tpq(),
            'kesiswaan_tpq'       => $this->LaporanModel->cek_kesiswaan_tpq(),
            'sarpras_tpq'          => $this->LaporanModel->cek_sarpras_tpq(),

            'belanja_smput'          => $this->LaporanModel->cek_belanja_smput(),
            'admin_smput'       => $this->LaporanModel->cek_admin_smput(),
            'kurikulum_smput'          => $this->LaporanModel->cek_kurikulum_smput(),
            'kesiswaan_smput'       => $this->LaporanModel->cek_kesiswaan_smput(),
            'sarpras_smput'          => $this->LaporanModel->cek_sarpras_smput(),

            'belanja_ibs'          => $this->LaporanModel->cek_belanja_ibs(),
            'admin_ibs'       => $this->LaporanModel->cek_admin_ibs(),
            'kurikulum_ibs'          => $this->LaporanModel->cek_kurikulum_ibs(),
            'kesiswaan_ibs'       => $this->LaporanModel->cek_kesiswaan_ibs(),
            'sarpras_ibs'          => $this->LaporanModel->cek_sarpras_ibs(),

            'belanja_paud'          => $this->LaporanModel->cek_belanja_paud(),
            'admin_paud'       => $this->LaporanModel->cek_admin_paud(),
            'kurikulum_paud'          => $this->LaporanModel->cek_kurikulum_paud(),
            'kesiswaan_paud'       => $this->LaporanModel->cek_kesiswaan_paud(),
            'sarpras_paud'          => $this->LaporanModel->cek_sarpras_paud(),


            'isi'           => 'laporan/v_data_laba_belanja',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function simpan_users()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [
            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'role'              => $this->request->getPost('role'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'users') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->insert_data_users($data);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di simpan.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function update_users($id_users)
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [

            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'update') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->update_data_users($data, $id_users);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di perbarui.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function hapus($id_users = NULL)
    {
        $this->UsersModel->hapus_akun($id_users);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('users/data_users'));
    }

    public function hapus_neraca($id_neraca = NULL)
    {
        $this->LaporanModel->hapus_neraca($id_neraca);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('laporan/neraca_keuangan'));
    }

    public function neraca_keuangan()
    {
        $data = [
            'title'     => 'Neraca Keuangan',
            'menu'      => 'Neraca Keuangan',
            'laporan'    => $this->LaporanModel->get_laporan(),
            'isi'       => 'laporan/v_data_neraca_keuangan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function input_aktiva()
    {
        $validation = \Config\Services::validation();
        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');;

        $data = [
            'kode_laporan'   => $this->request->getPost('kode_laporan'),
            'jenis_laporan'   => $this->request->getPost('jenis_laporan'),
            'keterangan'    => strtoupper($this->request->getPost('keterangan')),
            'nominal'    => $this->request->getPost('nominal'),
            'tgl_update'     => $tgl_update,
        ];

        if ($validation->run($data, 'aktiva') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('laporan/neraca_keuangan'));
        } else {
            $this->LaporanModel->insert_laporan($data);
            session()->setFlashdata('success', 'Laporan Berhasil disimpan');
            return redirect()->to(base_url('laporan/neraca_keuangan'));
        }
    }

    public function input_pasiva()
    {
        $validation = \Config\Services::validation();
        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');;

        $data = [
            'kode_laporan'   => $this->request->getPost('kode_laporan'),
            'jenis_laporan'   => $this->request->getPost('jenis_laporan'),
            'keterangan'    => strtoupper($this->request->getPost('keterangan')),
            'nominal'    => $this->request->getPost('nominal'),
            'tgl_update'     => $tgl_update,
        ];

        if ($validation->run($data, 'pasiva') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('laporan/neraca_keuangan'));
        } else {
            $this->LaporanModel->insert_laporan($data);
            session()->setFlashdata('success', 'Laporan Berhasil disimpan');
            return redirect()->to(base_url('laporan/neraca_keuangan'));
        }
    }

    public function print_neraca()
    {
        $data = [
            'title'         => 'Print Neraca Keuangan',
            'menu'         => 'Print Neraca Keuangan',

            'saldo_pendapatan_tunai'    => $this->LaporanModel->cek_total_saldo_pendapatan_tunai(),
            'saldo_bumy_tunai'    => $this->LaporanModel->cek_total_saldo_bumy_tunai(),
            'saldo_belanja_tunai'    => $this->LaporanModel->cek_total_saldo_belanja_tunai(),

            'saldo_pendapatan_bpd'    => $this->LaporanModel->cek_total_saldo_pendapatan_bpd(),
            'saldo_bumy_bpd'    => $this->LaporanModel->cek_total_saldo_bumy_bpd(),
            'saldo_belanja_bpd'    => $this->LaporanModel->cek_total_saldo_belanja_bpd(),

            'saldo_pendapatan_bni'    => $this->LaporanModel->cek_total_saldo_pendapatan_bni(),
            'saldo_bumy_bni'    => $this->LaporanModel->cek_total_saldo_bumy_bni(),
            'saldo_belanja_bni'    => $this->LaporanModel->cek_total_saldo_belanja_bni(),

            'total_tagihan'    => $this->LaporanModel->cek_total_tagihan2(),
            'total_bayar'    => $this->LaporanModel->cek_total_bayar2(),

            'kewajiban'    => $this->LaporanModel->cek_kewajiban(),
            'total_kewajiban'    => $this->LaporanModel->cek_total_kewajiban(),

            'tanah'    => $this->LaporanModel->cek_tanah(),
            'total_tanah'    => $this->LaporanModel->cek_total_tanah(),

            'gedung'    => $this->LaporanModel->cek_gedung(),
            'total_gedung'    => $this->LaporanModel->cek_total_gedung(),

            'peralatan'    => $this->LaporanModel->cek_peralatan(),
            'total_peralatan'    => $this->LaporanModel->cek_total_peralatan(),

            'modal'    => $this->LaporanModel->cek_modal(),
            'total_modal'    => $this->LaporanModel->cek_total_modal(),

            // 'isi'           => 'laporan/v_cetak_neraca',
        ];

        echo view('laporan/v_cetak_neraca', $data);
    }

    public function print_belanja()
    {
        $data = [
            'title'         => 'Laporan Belanja',
            'menu'          => 'Laporan Belanja',

            'belanja'       => $this->LaporanModel->cek_belanja(),
            'sekretariat'       => $this->LaporanModel->cek_sekretariat(),

            'mutu'          => $this->LaporanModel->get_mutu(),
            'yayasan'       => $this->LaporanModel->get_yayasan(),
            'pegawai_ypbk'          => $this->LaporanModel->get_ypbk(),
            'pegawai_sdut'       => $this->LaporanModel->get_sdut(),
            'pegawai_tpq'          => $this->LaporanModel->get_tpq(),
            'pegawai_smput'       => $this->LaporanModel->get_smput(),
            'pegawai_ibs'          => $this->LaporanModel->get_ibs(),
            'pegawai_paud'       => $this->LaporanModel->get_paud(),
            'dansos'       => $this->LaporanModel->get_dansos(),
            'bpjs'       => $this->LaporanModel->get_bpjs(),
            'speedy'       => $this->LaporanModel->get_speedy(),
            'operasional'       => $this->LaporanModel->get_operasional(),
            'keuangan'       => $this->LaporanModel->get_keuangan(),

            // 'bangun_ypbk'          => $this->LaporanModel->get_bangun_ypbk(),
            'bangun_sdut'       => $this->LaporanModel->get_bangun_sdut(),
            'bangun_tpq'          => $this->LaporanModel->get_bangun_tpq(),
            'bangun_smput'       => $this->LaporanModel->get_bangun_smput(),
            'bangun_ibs'          => $this->LaporanModel->get_bangun_ibs(),
            'bangun_paud'       => $this->LaporanModel->get_bangun_paud(),

            'catering'          => $this->LaporanModel->cek_catering(),
            'koperasi'       => $this->LaporanModel->cek_koperasi(),
            'sbs'          => $this->LaporanModel->cek_sbs(),
            'air_mineral'       => $this->LaporanModel->cek_air_mineral(),
            'gasebu'          => $this->LaporanModel->cek_gasebu(),
            'bumy'          => $this->LaporanModel->cek_bumy(),

            'belanja_sdut'          => $this->LaporanModel->cek_belanja_sdut(),
            'admin_sdut'       => $this->LaporanModel->cek_admin_sdut(),
            'kurikulum_sdut'          => $this->LaporanModel->cek_kurikulum_sdut(),
            'kesiswaan_sdut'       => $this->LaporanModel->cek_kesiswaan_sdut(),
            'sarpras_sdut'          => $this->LaporanModel->cek_sarpras_sdut(),

            'belanja_tpq'          => $this->LaporanModel->cek_belanja_tpq(),
            'admin_tpq'       => $this->LaporanModel->cek_admin_tpq(),
            'kurikulum_tpq'          => $this->LaporanModel->cek_kurikulum_tpq(),
            'kesiswaan_tpq'       => $this->LaporanModel->cek_kesiswaan_tpq(),
            'sarpras_tpq'          => $this->LaporanModel->cek_sarpras_tpq(),

            'belanja_smput'          => $this->LaporanModel->cek_belanja_smput(),
            'admin_smput'       => $this->LaporanModel->cek_admin_smput(),
            'kurikulum_smput'          => $this->LaporanModel->cek_kurikulum_smput(),
            'kesiswaan_smput'       => $this->LaporanModel->cek_kesiswaan_smput(),
            'sarpras_smput'          => $this->LaporanModel->cek_sarpras_smput(),

            'belanja_ibs'          => $this->LaporanModel->cek_belanja_ibs(),
            'admin_ibs'       => $this->LaporanModel->cek_admin_ibs(),
            'kurikulum_ibs'          => $this->LaporanModel->cek_kurikulum_ibs(),
            'kesiswaan_ibs'       => $this->LaporanModel->cek_kesiswaan_ibs(),
            'sarpras_ibs'          => $this->LaporanModel->cek_sarpras_ibs(),

            'belanja_paud'          => $this->LaporanModel->cek_belanja_paud(),
            'admin_paud'       => $this->LaporanModel->cek_admin_paud(),
            'kurikulum_paud'          => $this->LaporanModel->cek_kurikulum_paud(),
            'kesiswaan_paud'       => $this->LaporanModel->cek_kesiswaan_paud(),
            'sarpras_paud'          => $this->LaporanModel->cek_sarpras_paud(),
        ];

        echo view('laporan/v_cetak_belanja', $data);
    }

    public function print_pendapatan()
    {
        $data = [
            'title'         => 'Laporan Pendapatan',
            'menu'          => 'Laporan Pendapatan',

            'total_pendapatan'    => $this->LaporanModel->total_pendapatan(),
            'total_sekretariat'    => $this->LaporanModel->total_sekretariat(),

            // 'pendapatan'       => $this->LaporanModel->cek_pendapatan(),
            'sekretariat'       => $this->LaporanModel->cek_pendapatan_sekretariat(),
            'mutu'       => $this->LaporanModel->cek_pendapatan_mutu(),
            'keuangan'       => $this->LaporanModel->cek_pendapatan_keuangan(),
            'pembangunan'       => $this->LaporanModel->cek_pendapatan_pembangunan(),
            'catering'       => $this->LaporanModel->cek_pendapatan_catering(),
            'koperasi'       => $this->LaporanModel->cek_pendapatan_koperasi(),
            'sbs'       => $this->LaporanModel->cek_pendapatan_sbs(),
            'air'       => $this->LaporanModel->cek_pendapatan_air_mineral(),
            'gasebu'       => $this->LaporanModel->cek_pendapatan_gasebu(),


            'all_pendapatan_sdut'       => $this->LaporanModel->cek_pendapatan_sdut(),
            'bulanan_sdut'       => $this->LaporanModel->cek_pendapatan_bulanan_sdut(),
            'spp_sdut'       => $this->LaporanModel->cek_pendapatan_spp_sdut(),
            'tahunan_sdut'       => $this->LaporanModel->cek_pendapatan_tahunan_sdut(),
            'infaq_sdut'       => $this->LaporanModel->cek_pendapatan_infaq(),
            'daftar_ulang_sdut'       => $this->LaporanModel->cek_pendapatan_daftar_ulang(),
            'buku_ajar_sdut'       => $this->LaporanModel->cek_pendapatan_buku_ajar(),
            'ujian_sdut'       => $this->LaporanModel->cek_pendapatan_ujian(),
            'lainya_sdut'       => $this->LaporanModel->cek_pendapatan_lainya_sdut(),
            'uang_bos_sdut'       => $this->LaporanModel->cek_pendapatan_bos_sdut(),


            'all_pendapatan_tpq'       => $this->LaporanModel->cek_pendapatan_tpq(),
            'cek_bulanan_tpq'       => $this->LaporanModel->cek_pendapatan_bulanan_tpq(),
            'syhariyah_tpq'       => $this->LaporanModel->cek_pendapatan_syahriyah_tpq(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_tpq(),
            'imtaz'       => $this->LaporanModel->cek_pendapatan_imtaz(),
            'lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),
            'pendapatan_lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),


            'all_pendapatan_smput'       => $this->LaporanModel->cek_pendapatan_smput(),
            'bulanan_smput'       => $this->LaporanModel->cek_pendapatan_bulanan_smput(),
            'spp_smput'       => $this->LaporanModel->cek_pendapatan_spp_smput(),
            'spp_boarding'       => $this->LaporanModel->cek_pendapatan_spp_boarding(),
            'tahunan_smput'       => $this->LaporanModel->cek_pendapatan_tahunan_smput(),
            'infaq_smput'       => $this->LaporanModel->cek_pendapatan_infaq_smput(),
            'infaq_boarding'       => $this->LaporanModel->cek_pendapatan_infaq_boarding(),
            'daftar_ulang_smput'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_smput(),
            'buku_ajar_smput'       => $this->LaporanModel->cek_pendapatan_buku_ajar_smput(),
            'lainya_smput'       => $this->LaporanModel->cek_pendapatan_lainya_smput(),
            'bos_smput'       => $this->LaporanModel->cek_pendapatan_bos_smput(),
            'ujian_smput'       => $this->LaporanModel->cek_pendapatan_ujian_smput(),


            'all_pendapatan_ibs'       => $this->LaporanModel->cek_pendapatan_ibs(),
            'bulanan_ibs'       => $this->LaporanModel->cek_pendapatan_bulanan_ibs(),
            'syhariyah_ibs'       => $this->LaporanModel->cek_pendapatan_syahriyah_ibs(),
            'tahunan_ibs'       => $this->LaporanModel->cek_pendapatan_tahunan_ibs(),
            // 'infaq_ibs'       => $this->LaporanModel->cek_pendapatan_infaq_ibs(),
            'ziarah'       => $this->LaporanModel->cek_pendapatan_ziarah(),
            'dipan'       => $this->LaporanModel->cek_pendapatan_dipan(),
            'kitab'       => $this->LaporanModel->cek_pendapatan_kitab(),
            'lainya_ibs'       => $this->LaporanModel->tot_pendapatan_lainya_ibs(),
            'pendapatan_lainya_ibs'       => $this->LaporanModel->cek_pendapatan_lainya_ibs(),


            'pendapatan_paud'       => $this->LaporanModel->cek_pendapatan_paud(),
            'bulanan_paud'       => $this->LaporanModel->cek_pendapatan_bulanan_paud(),
            'spp_paud_play'       => $this->LaporanModel->cek_pendapatan_spp_paud_play(),
            'spp_paud_care'       => $this->LaporanModel->cek_pendapatan_spp_paud_care(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_paud(),

            'daftar_ulang_paud'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_paud(),
            'lainya_paud'       => $this->LaporanModel->all_cek_pendapatan_lainya_paud(),
            'pendapatan_lainya_paud'       => $this->LaporanModel->cek_pendapatan_lainya_paud(),
        ];

        echo view('laporan/v_cetak_pendapatan', $data);
    }


    //--------------------------------------------------------------------


    public function android_laba_pendapatan()
    {
        $data = [
            'title'         => 'Laporan Pendapatan',
            'menu'          => 'Laporan Pendapatan',

            'total_pendapatan'    => $this->LaporanModel->total_pendapatan(),
            'total_sekretariat'    => $this->LaporanModel->total_sekretariat(),

            // 'pendapatan'       => $this->LaporanModel->cek_pendapatan(),
            'sekretariat'       => $this->LaporanModel->cek_pendapatan_sekretariat(),
            'mutu'       => $this->LaporanModel->cek_pendapatan_mutu(),
            'keuangan'       => $this->LaporanModel->cek_pendapatan_keuangan(),
            'pembangunan'       => $this->LaporanModel->cek_pendapatan_pembangunan(),
            'catering'       => $this->LaporanModel->cek_pendapatan_catering(),
            'koperasi'       => $this->LaporanModel->cek_pendapatan_koperasi(),
            'sbs'       => $this->LaporanModel->cek_pendapatan_sbs(),
            'air'       => $this->LaporanModel->cek_pendapatan_air_mineral(),
            'gasebu'       => $this->LaporanModel->cek_pendapatan_gasebu(),


            'all_pendapatan_sdut'       => $this->LaporanModel->cek_pendapatan_sdut(),
            'bulanan_sdut'       => $this->LaporanModel->cek_pendapatan_bulanan_sdut(),
            'spp_sdut'       => $this->LaporanModel->cek_pendapatan_spp_sdut(),
            'tahunan_sdut'       => $this->LaporanModel->cek_pendapatan_tahunan_sdut(),
            'infaq_sdut'       => $this->LaporanModel->cek_pendapatan_infaq(),
            'daftar_ulang_sdut'       => $this->LaporanModel->cek_pendapatan_daftar_ulang(),
            'buku_ajar_sdut'       => $this->LaporanModel->cek_pendapatan_buku_ajar(),
            'ujian_sdut'       => $this->LaporanModel->cek_pendapatan_ujian(),
            'lainya_sdut'       => $this->LaporanModel->cek_pendapatan_lainya_sdut(),
            'uang_bos_sdut'       => $this->LaporanModel->cek_pendapatan_bos_sdut(),


            'all_pendapatan_tpq'       => $this->LaporanModel->cek_pendapatan_tpq(),
            'cek_bulanan_tpq'       => $this->LaporanModel->cek_pendapatan_bulanan_tpq(),
            'syhariyah_tpq'       => $this->LaporanModel->cek_pendapatan_syahriyah_tpq(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_tpq(),
            'imtaz'       => $this->LaporanModel->cek_pendapatan_imtaz(),
            'lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),
            'pendapatan_lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),


            'all_pendapatan_smput'       => $this->LaporanModel->cek_pendapatan_smput(),
            'bulanan_smput'       => $this->LaporanModel->cek_pendapatan_bulanan_smput(),
            'spp_smput'       => $this->LaporanModel->cek_pendapatan_spp_smput(),
            'spp_boarding'       => $this->LaporanModel->cek_pendapatan_spp_boarding(),
            'tahunan_smput'       => $this->LaporanModel->cek_pendapatan_tahunan_smput(),
            'infaq_smput'       => $this->LaporanModel->cek_pendapatan_infaq_smput(),
            'infaq_boarding'       => $this->LaporanModel->cek_pendapatan_infaq_boarding(),
            'daftar_ulang_smput'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_smput(),
            'buku_ajar_smput'       => $this->LaporanModel->cek_pendapatan_buku_ajar_smput(),
            'lainya_smput'       => $this->LaporanModel->cek_pendapatan_lainya_smput(),
            'bos_smput'       => $this->LaporanModel->cek_pendapatan_bos_smput(),
            'ujian_smput'       => $this->LaporanModel->cek_pendapatan_ujian_smput(),


            'all_pendapatan_ibs'       => $this->LaporanModel->cek_pendapatan_ibs(),
            'bulanan_ibs'       => $this->LaporanModel->cek_pendapatan_bulanan_ibs(),
            'syhariyah_ibs'       => $this->LaporanModel->cek_pendapatan_syahriyah_ibs(),
            'tahunan_ibs'       => $this->LaporanModel->cek_pendapatan_tahunan_ibs(),
            // 'infaq_ibs'       => $this->LaporanModel->cek_pendapatan_infaq_ibs(),
            'ziarah'       => $this->LaporanModel->cek_pendapatan_ziarah(),
            'dipan'       => $this->LaporanModel->cek_pendapatan_dipan(),
            'kitab'       => $this->LaporanModel->cek_pendapatan_kitab(),
            'lainya_ibs'       => $this->LaporanModel->tot_pendapatan_lainya_ibs(),
            'pendapatan_lainya_ibs'       => $this->LaporanModel->cek_pendapatan_lainya_ibs(),


            'pendapatan_paud'       => $this->LaporanModel->cek_pendapatan_paud(),
            'bulanan_paud'       => $this->LaporanModel->cek_pendapatan_bulanan_paud(),
            'spp_paud_play'       => $this->LaporanModel->cek_pendapatan_spp_paud_play(),
            'spp_paud_care'       => $this->LaporanModel->cek_pendapatan_spp_paud_care(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_paud(),

            'daftar_ulang_paud'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_paud(),
            'lainya_paud'       => $this->LaporanModel->all_cek_pendapatan_lainya_paud(),
            'pendapatan_lainya_paud'       => $this->LaporanModel->cek_pendapatan_lainya_paud(),

            'isi'           => 'laporan_android/v_data_laba_pendapatan',
        ];
        echo view('layout/android/va_wrapper', $data);
    }

    public function android_laba_belanja()
    {
        $data = [
            'title'         => 'Laporan Belanja',
            'menu'          => 'Laporan Belanja',

            'belanja'       => $this->LaporanModel->cek_belanja(),
            'sekretariat'       => $this->LaporanModel->cek_sekretariat(),

            'mutu'          => $this->LaporanModel->get_mutu(),
            'yayasan'       => $this->LaporanModel->get_yayasan(),
            'pegawai_ypbk'          => $this->LaporanModel->get_ypbk(),
            'pegawai_sdut'       => $this->LaporanModel->get_sdut(),
            'pegawai_tpq'          => $this->LaporanModel->get_tpq(),
            'pegawai_smput'       => $this->LaporanModel->get_smput(),
            'pegawai_ibs'          => $this->LaporanModel->get_ibs(),
            'pegawai_paud'       => $this->LaporanModel->get_paud(),
            'dansos'       => $this->LaporanModel->get_dansos(),
            'bpjs'       => $this->LaporanModel->get_bpjs(),
            'speedy'       => $this->LaporanModel->get_speedy(),
            'operasional'       => $this->LaporanModel->get_operasional(),
            'keuangan'       => $this->LaporanModel->get_keuangan(),

            // 'bangun_ypbk'          => $this->LaporanModel->get_bangun_ypbk(),
            'bangun_sdut'       => $this->LaporanModel->get_bangun_sdut(),
            'bangun_tpq'          => $this->LaporanModel->get_bangun_tpq(),
            'bangun_smput'       => $this->LaporanModel->get_bangun_smput(),
            'bangun_ibs'          => $this->LaporanModel->get_bangun_ibs(),
            'bangun_paud'       => $this->LaporanModel->get_bangun_paud(),

            'catering'          => $this->LaporanModel->cek_catering(),
            'koperasi'       => $this->LaporanModel->cek_koperasi(),
            'sbs'          => $this->LaporanModel->cek_sbs(),
            'air_mineral'       => $this->LaporanModel->cek_air_mineral(),
            'gasebu'          => $this->LaporanModel->cek_gasebu(),
            'bumy'          => $this->LaporanModel->cek_bumy(),

            'belanja_sdut'          => $this->LaporanModel->cek_belanja_sdut(),
            'admin_sdut'       => $this->LaporanModel->cek_admin_sdut(),
            'kurikulum_sdut'          => $this->LaporanModel->cek_kurikulum_sdut(),
            'kesiswaan_sdut'       => $this->LaporanModel->cek_kesiswaan_sdut(),
            'sarpras_sdut'          => $this->LaporanModel->cek_sarpras_sdut(),

            'belanja_tpq'          => $this->LaporanModel->cek_belanja_tpq(),
            'admin_tpq'       => $this->LaporanModel->cek_admin_tpq(),
            'kurikulum_tpq'          => $this->LaporanModel->cek_kurikulum_tpq(),
            'kesiswaan_tpq'       => $this->LaporanModel->cek_kesiswaan_tpq(),
            'sarpras_tpq'          => $this->LaporanModel->cek_sarpras_tpq(),

            'belanja_smput'          => $this->LaporanModel->cek_belanja_smput(),
            'admin_smput'       => $this->LaporanModel->cek_admin_smput(),
            'kurikulum_smput'          => $this->LaporanModel->cek_kurikulum_smput(),
            'kesiswaan_smput'       => $this->LaporanModel->cek_kesiswaan_smput(),
            'sarpras_smput'          => $this->LaporanModel->cek_sarpras_smput(),

            'belanja_ibs'          => $this->LaporanModel->cek_belanja_ibs(),
            'admin_ibs'       => $this->LaporanModel->cek_admin_ibs(),
            'kurikulum_ibs'          => $this->LaporanModel->cek_kurikulum_ibs(),
            'kesiswaan_ibs'       => $this->LaporanModel->cek_kesiswaan_ibs(),
            'sarpras_ibs'          => $this->LaporanModel->cek_sarpras_ibs(),

            'belanja_paud'          => $this->LaporanModel->cek_belanja_paud(),
            'admin_paud'       => $this->LaporanModel->cek_admin_paud(),
            'kurikulum_paud'          => $this->LaporanModel->cek_kurikulum_paud(),
            'kesiswaan_paud'       => $this->LaporanModel->cek_kesiswaan_paud(),
            'sarpras_paud'          => $this->LaporanModel->cek_sarpras_paud(),


            'isi'           => 'laporan_android/v_data_laba_belanja',
        ];
        echo view('layout/android/va_wrapper', $data);
    }

    public function android_simpan_users()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [
            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'role'              => $this->request->getPost('role'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'users') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->insert_data_users($data);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di simpan.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function android_update_users($id_users)
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [

            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'update') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->update_data_users($data, $id_users);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di perbarui.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function android_hapus($id_users = NULL)
    {
        $this->UsersModel->hapus_akun($id_users);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('users/data_users'));
    }

    public function android_hapus_neraca($id_neraca = NULL)
    {
        $this->LaporanModel->hapus_neraca($id_neraca);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('laporan_android/neraca_keuangan'));
    }

    public function android_neraca_keuangan()
    {
        $data = [
            'title'     => 'Neraca Keuangan',
            'menu'      => 'Neraca Keuangan',
            'laporan'    => $this->LaporanModel->get_laporan(),
            'isi'       => 'laporan_android/v_data_neraca_keuangan',
        ];
        echo view('layout/android/va_wrapper', $data);
    }

    public function android_input_aktiva()
    {
        $validation = \Config\Services::validation();
        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');;

        $data = [
            'kode_laporan'   => $this->request->getPost('kode_laporan'),
            'jenis_laporan'   => $this->request->getPost('jenis_laporan'),
            'keterangan'    => strtoupper($this->request->getPost('keterangan')),
            'nominal'    => $this->request->getPost('nominal'),
            'tgl_update'     => $tgl_update,
        ];

        if ($validation->run($data, 'aktiva') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('laporan_android/neraca_keuangan'));
        } else {
            $this->LaporanModel->insert_laporan($data);
            session()->setFlashdata('success', 'Laporan Berhasil disimpan');
            return redirect()->to(base_url('laporan_android/neraca_keuangan'));
        }
    }

    public function android_input_pasiva()
    {
        $validation = \Config\Services::validation();
        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');;

        $data = [
            'kode_laporan'   => $this->request->getPost('kode_laporan'),
            'jenis_laporan'   => $this->request->getPost('jenis_laporan'),
            'keterangan'    => strtoupper($this->request->getPost('keterangan')),
            'nominal'    => $this->request->getPost('nominal'),
            'tgl_update'     => $tgl_update,
        ];

        if ($validation->run($data, 'pasiva') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('laporan_android/neraca_keuangan'));
        } else {
            $this->LaporanModel->insert_laporan($data);
            session()->setFlashdata('success', 'Laporan Berhasil disimpan');
            return redirect()->to(base_url('laporan_android/neraca_keuangan'));
        }
    }

    public function android_print_neraca()
    {
        $data = [
            'title'         => 'Print Neraca Keuangan',
            'menu'         => 'Print Neraca Keuangan',

            'saldo_pendapatan_tunai'    => $this->LaporanModel->cek_total_saldo_pendapatan_tunai(),
            'saldo_bumy_tunai'    => $this->LaporanModel->cek_total_saldo_bumy_tunai(),
            'saldo_belanja_tunai'    => $this->LaporanModel->cek_total_saldo_belanja_tunai(),

            'saldo_pendapatan_bpd'    => $this->LaporanModel->cek_total_saldo_pendapatan_bpd(),
            'saldo_bumy_bpd'    => $this->LaporanModel->cek_total_saldo_bumy_bpd(),
            'saldo_belanja_bpd'    => $this->LaporanModel->cek_total_saldo_belanja_bpd(),

            'saldo_pendapatan_bni'    => $this->LaporanModel->cek_total_saldo_pendapatan_bni(),
            'saldo_bumy_bni'    => $this->LaporanModel->cek_total_saldo_bumy_bni(),
            'saldo_belanja_bni'    => $this->LaporanModel->cek_total_saldo_belanja_bni(),

            'total_tagihan'    => $this->LaporanModel->cek_total_tagihan2(),
            'total_bayar'    => $this->LaporanModel->cek_total_bayar2(),

            'kewajiban'    => $this->LaporanModel->cek_kewajiban(),
            'total_kewajiban'    => $this->LaporanModel->cek_total_kewajiban(),

            'tanah'    => $this->LaporanModel->cek_tanah(),
            'total_tanah'    => $this->LaporanModel->cek_total_tanah(),

            'gedung'    => $this->LaporanModel->cek_gedung(),
            'total_gedung'    => $this->LaporanModel->cek_total_gedung(),

            'peralatan'    => $this->LaporanModel->cek_peralatan(),
            'total_peralatan'    => $this->LaporanModel->cek_total_peralatan(),

            'modal'    => $this->LaporanModel->cek_modal(),
            'total_modal'    => $this->LaporanModel->cek_total_modal(),

            // 'isi'           => 'laporan/v_cetak_neraca',
        ];

        echo view('laporan_android/v_cetak_neraca', $data);
    }

    public function android_print_belanja()
    {
        $data = [
            'title'         => 'Laporan Belanja',
            'menu'          => 'Laporan Belanja',

            'belanja'       => $this->LaporanModel->cek_belanja(),
            'sekretariat'       => $this->LaporanModel->cek_sekretariat(),

            'mutu'          => $this->LaporanModel->get_mutu(),
            'yayasan'       => $this->LaporanModel->get_yayasan(),
            'pegawai_ypbk'          => $this->LaporanModel->get_ypbk(),
            'pegawai_sdut'       => $this->LaporanModel->get_sdut(),
            'pegawai_tpq'          => $this->LaporanModel->get_tpq(),
            'pegawai_smput'       => $this->LaporanModel->get_smput(),
            'pegawai_ibs'          => $this->LaporanModel->get_ibs(),
            'pegawai_paud'       => $this->LaporanModel->get_paud(),
            'dansos'       => $this->LaporanModel->get_dansos(),
            'bpjs'       => $this->LaporanModel->get_bpjs(),
            'speedy'       => $this->LaporanModel->get_speedy(),
            'operasional'       => $this->LaporanModel->get_operasional(),
            'keuangan'       => $this->LaporanModel->get_keuangan(),

            // 'bangun_ypbk'          => $this->LaporanModel->get_bangun_ypbk(),
            'bangun_sdut'       => $this->LaporanModel->get_bangun_sdut(),
            'bangun_tpq'          => $this->LaporanModel->get_bangun_tpq(),
            'bangun_smput'       => $this->LaporanModel->get_bangun_smput(),
            'bangun_ibs'          => $this->LaporanModel->get_bangun_ibs(),
            'bangun_paud'       => $this->LaporanModel->get_bangun_paud(),

            'catering'          => $this->LaporanModel->cek_catering(),
            'koperasi'       => $this->LaporanModel->cek_koperasi(),
            'sbs'          => $this->LaporanModel->cek_sbs(),
            'air_mineral'       => $this->LaporanModel->cek_air_mineral(),
            'gasebu'          => $this->LaporanModel->cek_gasebu(),
            'bumy'          => $this->LaporanModel->cek_bumy(),

            'belanja_sdut'          => $this->LaporanModel->cek_belanja_sdut(),
            'admin_sdut'       => $this->LaporanModel->cek_admin_sdut(),
            'kurikulum_sdut'          => $this->LaporanModel->cek_kurikulum_sdut(),
            'kesiswaan_sdut'       => $this->LaporanModel->cek_kesiswaan_sdut(),
            'sarpras_sdut'          => $this->LaporanModel->cek_sarpras_sdut(),

            'belanja_tpq'          => $this->LaporanModel->cek_belanja_tpq(),
            'admin_tpq'       => $this->LaporanModel->cek_admin_tpq(),
            'kurikulum_tpq'          => $this->LaporanModel->cek_kurikulum_tpq(),
            'kesiswaan_tpq'       => $this->LaporanModel->cek_kesiswaan_tpq(),
            'sarpras_tpq'          => $this->LaporanModel->cek_sarpras_tpq(),

            'belanja_smput'          => $this->LaporanModel->cek_belanja_smput(),
            'admin_smput'       => $this->LaporanModel->cek_admin_smput(),
            'kurikulum_smput'          => $this->LaporanModel->cek_kurikulum_smput(),
            'kesiswaan_smput'       => $this->LaporanModel->cek_kesiswaan_smput(),
            'sarpras_smput'          => $this->LaporanModel->cek_sarpras_smput(),

            'belanja_ibs'          => $this->LaporanModel->cek_belanja_ibs(),
            'admin_ibs'       => $this->LaporanModel->cek_admin_ibs(),
            'kurikulum_ibs'          => $this->LaporanModel->cek_kurikulum_ibs(),
            'kesiswaan_ibs'       => $this->LaporanModel->cek_kesiswaan_ibs(),
            'sarpras_ibs'          => $this->LaporanModel->cek_sarpras_ibs(),

            'belanja_paud'          => $this->LaporanModel->cek_belanja_paud(),
            'admin_paud'       => $this->LaporanModel->cek_admin_paud(),
            'kurikulum_paud'          => $this->LaporanModel->cek_kurikulum_paud(),
            'kesiswaan_paud'       => $this->LaporanModel->cek_kesiswaan_paud(),
            'sarpras_paud'          => $this->LaporanModel->cek_sarpras_paud(),
        ];

        echo view('laporan_android/v_cetak_belanja', $data);
    }

    public function android_print_pendapatan()
    {
        $data = [
            'title'         => 'Laporan Pendapatan',
            'menu'          => 'Laporan Pendapatan',

            'total_pendapatan'    => $this->LaporanModel->total_pendapatan(),
            'total_sekretariat'    => $this->LaporanModel->total_sekretariat(),

            // 'pendapatan'       => $this->LaporanModel->cek_pendapatan(),
            'sekretariat'       => $this->LaporanModel->cek_pendapatan_sekretariat(),
            'mutu'       => $this->LaporanModel->cek_pendapatan_mutu(),
            'keuangan'       => $this->LaporanModel->cek_pendapatan_keuangan(),
            'pembangunan'       => $this->LaporanModel->cek_pendapatan_pembangunan(),
            'catering'       => $this->LaporanModel->cek_pendapatan_catering(),
            'koperasi'       => $this->LaporanModel->cek_pendapatan_koperasi(),
            'sbs'       => $this->LaporanModel->cek_pendapatan_sbs(),
            'air'       => $this->LaporanModel->cek_pendapatan_air_mineral(),
            'gasebu'       => $this->LaporanModel->cek_pendapatan_gasebu(),


            'all_pendapatan_sdut'       => $this->LaporanModel->cek_pendapatan_sdut(),
            'bulanan_sdut'       => $this->LaporanModel->cek_pendapatan_bulanan_sdut(),
            'spp_sdut'       => $this->LaporanModel->cek_pendapatan_spp_sdut(),
            'tahunan_sdut'       => $this->LaporanModel->cek_pendapatan_tahunan_sdut(),
            'infaq_sdut'       => $this->LaporanModel->cek_pendapatan_infaq(),
            'daftar_ulang_sdut'       => $this->LaporanModel->cek_pendapatan_daftar_ulang(),
            'buku_ajar_sdut'       => $this->LaporanModel->cek_pendapatan_buku_ajar(),
            'ujian_sdut'       => $this->LaporanModel->cek_pendapatan_ujian(),
            'lainya_sdut'       => $this->LaporanModel->cek_pendapatan_lainya_sdut(),
            'uang_bos_sdut'       => $this->LaporanModel->cek_pendapatan_bos_sdut(),


            'all_pendapatan_tpq'       => $this->LaporanModel->cek_pendapatan_tpq(),
            'cek_bulanan_tpq'       => $this->LaporanModel->cek_pendapatan_bulanan_tpq(),
            'syhariyah_tpq'       => $this->LaporanModel->cek_pendapatan_syahriyah_tpq(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_tpq(),
            'imtaz'       => $this->LaporanModel->cek_pendapatan_imtaz(),
            'lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),
            'pendapatan_lainya_tpq'       => $this->LaporanModel->cek_pendapatan_lainya_tpq(),


            'all_pendapatan_smput'       => $this->LaporanModel->cek_pendapatan_smput(),
            'bulanan_smput'       => $this->LaporanModel->cek_pendapatan_bulanan_smput(),
            'spp_smput'       => $this->LaporanModel->cek_pendapatan_spp_smput(),
            'spp_boarding'       => $this->LaporanModel->cek_pendapatan_spp_boarding(),
            'tahunan_smput'       => $this->LaporanModel->cek_pendapatan_tahunan_smput(),
            'infaq_smput'       => $this->LaporanModel->cek_pendapatan_infaq_smput(),
            'infaq_boarding'       => $this->LaporanModel->cek_pendapatan_infaq_boarding(),
            'daftar_ulang_smput'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_smput(),
            'buku_ajar_smput'       => $this->LaporanModel->cek_pendapatan_buku_ajar_smput(),
            'lainya_smput'       => $this->LaporanModel->cek_pendapatan_lainya_smput(),
            'bos_smput'       => $this->LaporanModel->cek_pendapatan_bos_smput(),
            'ujian_smput'       => $this->LaporanModel->cek_pendapatan_ujian_smput(),


            'all_pendapatan_ibs'       => $this->LaporanModel->cek_pendapatan_ibs(),
            'bulanan_ibs'       => $this->LaporanModel->cek_pendapatan_bulanan_ibs(),
            'syhariyah_ibs'       => $this->LaporanModel->cek_pendapatan_syahriyah_ibs(),
            'tahunan_ibs'       => $this->LaporanModel->cek_pendapatan_tahunan_ibs(),
            // 'infaq_ibs'       => $this->LaporanModel->cek_pendapatan_infaq_ibs(),
            'ziarah'       => $this->LaporanModel->cek_pendapatan_ziarah(),
            'dipan'       => $this->LaporanModel->cek_pendapatan_dipan(),
            'kitab'       => $this->LaporanModel->cek_pendapatan_kitab(),
            'lainya_ibs'       => $this->LaporanModel->tot_pendapatan_lainya_ibs(),
            'pendapatan_lainya_ibs'       => $this->LaporanModel->cek_pendapatan_lainya_ibs(),


            'pendapatan_paud'       => $this->LaporanModel->cek_pendapatan_paud(),
            'bulanan_paud'       => $this->LaporanModel->cek_pendapatan_bulanan_paud(),
            'spp_paud_play'       => $this->LaporanModel->cek_pendapatan_spp_paud_play(),
            'spp_paud_care'       => $this->LaporanModel->cek_pendapatan_spp_paud_care(),
            'tahunan_tpq'       => $this->LaporanModel->cek_pendapatan_tahunan_paud(),

            'daftar_ulang_paud'       => $this->LaporanModel->cek_pendapatan_daftar_ulang_paud(),
            'lainya_paud'       => $this->LaporanModel->all_cek_pendapatan_lainya_paud(),
            'pendapatan_lainya_paud'       => $this->LaporanModel->cek_pendapatan_lainya_paud(),
        ];

        echo view('laporan_android/v_cetak_pendapatan', $data);
    }
}
