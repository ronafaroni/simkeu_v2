<?php

namespace App\Controllers;

use App\Models\BelanjaModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Belanja extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->BelanjaModel = new BelanjaModel();
    }

    public function penjaminan_mutu()
    {
        $data = [
            'title'             => 'Belanja Penjaminan Mutu',
            'menu'              => 'Penjaminan Mutu',
            'penjaminan_mutu'   => $this->BelanjaModel->get_penjaminan_mutu(),
            'isi'               => 'belanja/penjaminan_mutu/v_data_penjaminan_mutu',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function yayasan()
    {
        $data = [
            'title'             => 'Belanja Kegiatan Yayasan',
            'menu'              => 'Belanja Yayasan',
            'yayasan'           => $this->BelanjaModel->get_belanja_yayasan(),
            'isi'               => 'belanja/belanja_yayasan/v_data_belanja_yayasan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function keuangan()
    {
        $data = [
            'title'             => 'Belanja Keuangan Yayasan',
            'menu'              => 'Belanja Keuangan',
            'keuangan'           => $this->BelanjaModel->get_belanja_keuangan(),
            'isi'               => 'belanja/belanja_keuangan/v_data_belanja_keuangan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function sekolah()
    {
        $data = [
            'title'             => 'Belanja Unit Sekolah',
            'menu'              => 'Belanja Sekolah',
            'sekolah'           => $this->BelanjaModel->get_belanja_sekolah(),
            'isi'               => 'belanja/belanja_sekolah/v_data_belanja_sekolah',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function pengajuan()
    {
        $data = [
            'title'             => 'Pengajuan Anggaran',
            'menu'              => 'Pengajuan Anggaran',
            'pengajuan'           => $this->BelanjaModel->get_pengajuan(),
            'isi'               => 'belanja/pengajuan/v_data_pengajuan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function catering()
    {
        $data = [
            'title'             => 'Belanja Catering',
            'menu'              => 'Belanja Catering',
            'catering'           => $this->BelanjaModel->get_catering(),
            'isi'               => 'belanja/belanja_catering/v_data_catering',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function koperasi()
    {
        $data = [
            'title'             => 'Belanja Koperasi',
            'menu'              => 'Belanja Koperasi',
            'koperasi'           => $this->BelanjaModel->get_koperasi(),
            'isi'               => 'belanja/belanja_koperasi/v_data_koperasi',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function sbs()
    {
        $data = [
            'title'             => 'Belanja SBS',
            'menu'              => 'Belanja SBS',
            'sbs'               => $this->BelanjaModel->get_sbs(),
            'isi'               => 'belanja/belanja_sbs/v_data_sbs',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function air_mineral()
    {
        $data = [
            'title'             => 'Belanja Air Mineral',
            'menu'              => 'Belanja Air Mineral',
            'air_mineral'           => $this->BelanjaModel->get_air_mineral(),
            'isi'               => 'belanja/belanja_air_mineral/v_data_air_mineral',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function gasebu()
    {
        $data = [
            'title'             => 'Belanja Gasebu',
            'menu'              => 'Belanja Gasebu',
            'gasebu'           => $this->BelanjaModel->get_gasebu(),
            'isi'               => 'belanja/belanja_gasebu/v_data_gasebu',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function bangunan()
    {
        $data = [
            'title'             => 'Belanja Pembangunan',
            'menu'              => 'Belanja Pembangunan',
            'bangunan'            => $this->BelanjaModel->get_pembangunan(),
            'isi'               => 'belanja/belanja_pembangunan/v_data_pembangunan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title'             => 'Pembayaran Pembangunan',
            'menu'              => 'Pembayaran Pembangunan',
            'bayar'             =>  $this->BelanjaModel->get_pembayaran(),
            'kode_akun'         =>  $this->BelanjaModel->get_kode_pembayaran(),
            'isi'               => 'belanja/belanja_pembangunan/v_data_bayar',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function pengeluaran_mutu()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => '5.1.1',
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'penjaminan_mutu') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/penjaminan_mutu'));
        } else {
            $this->BelanjaModel->insert_belanja_penjaminan_mutu($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/penjaminan_mutu'));
        }
    }

    public function pengeluaran_yayasan()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => '5.1.2',
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'belanja_yayasan') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/yayasan'));
        } else {
            $this->BelanjaModel->insert_belanja_yayasan($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/yayasan'));
        }
    }

    public function belanja_keuangan_bulanan()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.3",
            'kode_belanja'      => $this->request->getPost('kode_belanja'),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            // 'penerima'          => $this->request->getPost('penerima'),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'keuangan_bulanan') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/keuangan'));
        } else {
            $this->BelanjaModel->insert_belanja_keuangan_bulanan($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/keuangan'));
        }
    }

    public function belanja_keuangan_harian()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.3",
            'kode_belanja'      => $this->request->getPost('kode_belanja'),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'keuangan_harian') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/keuangan'));
        } else {
            $this->BelanjaModel->insert_belanja_keuangan_bulanan($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/keuangan'));
        }
    }

    public function belanja_sekolah()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => $this->request->getPost('kode_unit') . '.' . $this->request->getPost('kode_transaksi'),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'sekolah') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/sekolah'));
        } else {
            $this->BelanjaModel->insert_belanja_sekolah($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/sekolah'));
        }
    }

    public function pengajuan_anggaran()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        // $tgl_transaksi = date('Y-m-d');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => $this->request->getPost('kode_unit') . '.' . $this->request->getPost('kode_transaksi'),
            'bulan_belanja'     => $this->request->getPost('bulan_belanja'),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'tgl_pengajuan'     => $this->request->getPost('tgl_pengajuan'),
            'teller'            => session()->get('kode_users'),
            // 'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'pengajuan') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/pengajuan'));
        } else {
            $this->BelanjaModel->insert_pengajuan($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/pengajuan'));
        }
    }

    public function belanja_catering()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.5",
            'kode_belanja'      => "5.1.5.1",
            'unit_belanja'  => $this->request->getPost('unit_belanja'),

            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),

            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'catering') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/catering'));
        } else {
            $this->BelanjaModel->insert_catering($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/catering'));
        }
    }

    public function belanja_koperasi()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.5",
            'kode_belanja'      => "5.1.5.2",
            'unit_belanja'      => strtoupper($this->request->getPost('kategori_belanja')),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'koperasi') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/koperasi'));
        } else {
            $this->BelanjaModel->insert_koperasi($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/koperasi'));
        }
    }

    public function belanja_sbs()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.5",
            'kode_belanja'      => "5.1.5.3",
            'jenis_belanja'     => strtoupper($this->request->getPost('jenis_belanja')),
            'jenis_mobil'       => strtoupper($this->request->getPost('jenis_mobil')),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'sbs') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/sbs'));
        } else {
            $this->BelanjaModel->insert_sbs($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/sbs'));
        }
    }

    public function belanja_air_mineral()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.5",
            'kode_belanja'      => "5.1.5.4",
            'jenis_belanja'     => strtoupper($this->request->getPost('jenis_belanja')),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'air_mineral') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/air_mineral'));
        } else {
            $this->BelanjaModel->insert_air_mineral($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/air_mineral'));
        }
    }

    public function belanja_gasebu()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');
        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.5",
            'kode_belanja'      => "5.1.5.5",
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'uraian_belanja'    => strtoupper($this->request->getPost('uraian_belanja')),
            'nominal_belanja'   => $this->request->getPost('nominal_belanja'),
            'penerima'          => strtoupper($this->request->getPost('penerima')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'gasebu') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/gasebu'));
        } else {
            $this->BelanjaModel->insert_gasebu($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/gasebu'));
        }
    }

    public function proyek()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $thn_ajaran = date('Y');
        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.4",
            'kode_belanja'      => $this->request->getPost('kode_belanja'),
            'tgl_mulai'         => $this->request->getPost('tgl_mulai'),
            'nama_bangunan'     => strtoupper($this->request->getPost('nama_bangunan')),
            'thn_ajaran'        => $thn_ajaran,
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'proyek') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/pembangunan'));
        } else {
            $this->BelanjaModel->insert_proyek($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/bangunan'));
        }
    }

    public function input_pengeluaran()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');
        $thn_ajaran = date('Y');

        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.4",
            'kode_belanja'      => $this->request->getPost('kode_belanja'),
            'uraian_belanja'    => strtoupper($this->request->getPost('nama_bangunan')),
            'jenis_belanja'     => strtoupper($this->request->getPost('jenis_belanja')),
            'bulan_belanja'     => $this->request->getPost('bulan_belanja'),
            'tgl_transaksi'     => $this->request->getPost('tgl_transaksi'),
            'nominal_belanja'   => strtoupper($this->request->getPost('nominal_pengeluaran')),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'thn_ajaran'        => $thn_ajaran,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'pengeluaran') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/pembayaran'));
        } else {
            $this->BelanjaModel->insert_pengeluaran($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/pembayaran'));
        }
    }

    public function input_pembayaran()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');
        $tgl_update = date('Y-m-d h:i:s');
        $thn_ajaran = date('Y');

        $data = [
            'kode_akun'         => $this->request->getPost('kode_akun'),
            'kode_unit'         => $this->request->getPost('kode_unit'),
            'kode_transaksi'    => "5.1.4",
            'kode_belanja'      => $this->request->getPost('kode_belanja'),
            'uraian_belanja'    => strtoupper($this->request->getPost('nama_bangunan')),
            'jenis_belanja'     => strtoupper($this->request->getPost('jenis_belanja')),
            'bulan_belanja'     => strtoupper($this->request->getPost('bulan_belanja')),
            'tgl_transaksi'     => $this->request->getPost('tgl_transaksi'),
            'nominal_belanja'  => $this->request->getPost('nominal_pembayaran'),
            'sumber_dana'       => strtoupper($this->request->getPost('sumber_dana')),
            'teller'            => session()->get('kode_users'),
            'thn_ajaran'        => $thn_ajaran,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'pembayaran') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('belanja/pembayaran'));
        } else {
            $this->BelanjaModel->insert_pengeluaran($data);
            session()->setFlashdata('success', 'Selamat! Data Pengeluaran sudah berhasil di simpan.');
            return redirect()->to(base_url('belanja/pembayaran'));
        }
    }

    public function hapus($id_belanja = NULL)
    {
        $this->BelanjaModel->hapus_belanja_mutu($id_belanja);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/penjaminan_mutu'));
    }

    public function hapus_yayasan($id_belanja = NULL)
    {
        $this->BelanjaModel->hapus_belanja_yayasan($id_belanja);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/yayasan'));
    }

    public function hapus_keuangan($id_belanja = NULL)
    {
        $this->BelanjaModel->hapus_belanja_keuangan($id_belanja);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/keuangan'));
    }

    public function hapus_sekolah($id_belanja = NULL)
    {
        $this->BelanjaModel->hapus_belanja_sekolah($id_belanja);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/sekolah'));
    }

    public function hapus_pengajuan($id_pengajuan = NULL)
    {
        $this->BelanjaModel->hapus_pengajuan($id_pengajuan);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/pengajuan'));
    }

    public function hapus_catering($id_catering = NULL)
    {
        $this->BelanjaModel->hapus_catering($id_catering);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/catering'));
    }

    public function hapus_koperasi($id_koperasi = NULL)
    {
        $this->BelanjaModel->hapus_koperasi($id_koperasi);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/koperasi'));
    }

    public function hapus_sbs($id_sbs = NULL)
    {
        $this->BelanjaModel->hapus_sbs($id_sbs);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/sbs'));
    }

    public function hapus_air_mineral($id_air_mineral = NULL)
    {
        $this->BelanjaModel->hapus_air_mineral($id_air_mineral);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/air_mineral'));
    }

    public function hapus_gasebu($id_gasebu = NULL)
    {
        $this->BelanjaModel->hapus_gasebu($id_gasebu);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/gasebu'));
    }

    public function hapus_proyek($id_proyek = NULL)
    {
        $this->BelanjaModel->hapus_proyek1($id_proyek);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/bangunan'));
    }

    public function hapus_bayar_proyek($id_proyek = NULL)
    {
        $this->BelanjaModel->hapus_proyek2($id_proyek);
        session()->setFlashdata('success', 'Data Pengeluaran berhasil dihapus.');
        return redirect()->to(base_url('belanja/pembayaran'));
    }

    //--------------------------------------------------------------------

    public function detail_proyek($id_proyek)
    {
        $data = [
            'title'     => 'Pengeluaran Pembangunan',
            'menu'     => 'Pengeluaran Pembangunan',
            'detail'    => $this->BelanjaModel->detail_proyek($id_proyek),
            'isi'       => 'belanja/belanja_pembangunan/v_data_detail_pembangunan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }
}
