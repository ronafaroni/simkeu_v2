<?php

namespace App\Controllers;

use App\Models\TagihanModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

use PHPExcel;
use PHPExcel_IOFactory;
use TCPDF;

class Tagihan extends BaseController
{
    public function __construct()
    {
        helper('form', 'download');
        $this->TagihanModel = new TagihanModel();
    }

    public function data_tagihan()
    {
        $data = [
            'title'     => 'Tagihan',
            'menu'      => 'Tagihan',
            'tagihan'   =>  $this->TagihanModel->cek_tagihan(),
            'isi'       => 'pendapatan/tagihan/v_data_tagihan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function download_tagihan()
    {
        return $this->response->download(ROOTPATH . '/public/downloads/TEMPLATE_TAGIHAN.xlsx', null);
    }

    public function data_pembayaran()
    {
        $data = [
            'title'     => 'Pembayaran',
            'menu'      => 'Pembayaran',
            'tagihan'   =>  $this->TagihanModel->cek_pembayaran_tagihan(),
            'isi'       => 'pendapatan/tagihan/v_data_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function cek_tagihan()
    {
        $data = [
            'title'     => 'Cek Tagihan Pembayaran',
            'menu'      => 'Cek Tagihan',
            'tagihan'   =>  $this->TagihanModel->cek_pembayaran_tagihan(),
            'isi'       => 'pendapatan/tagihan/v_cek_data_tagihan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function cek_pembayaran()
    {
        $data = [
            'title'     => 'Cek Tagihan Pembayaran',
            'menu'      => 'Cek Tagihan',
            'tagihan'   =>  $this->TagihanModel->cek_pembayaran_tagihan(),
            'isi'       => 'pendapatan/pembayaran/v_cari_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function historis()
    {
        $data = [
            'title'     => 'Cek Historis Pembayaran',
            'menu'      => 'Cek Historis',
            'tagihan'   =>  $this->TagihanModel->cek_pembayaran_tagihan(),
            'isi'       => 'pendapatan/pembayaran/v_historis_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function cek_data_pembayaran()
    {
        $nisn = $this->request->getPost('nisn');
        $nama_siswa = $this->request->getPost('nama_siswa');

        $data = [
            'title'     => 'Cek Tagihan Pembayaran',
            'menu'      => 'Cek Tagihan',
            'bayar'   =>  $this->TagihanModel->cek_data_pembayaran($nisn, $nama_siswa),
            'akun'   =>  $this->TagihanModel->cek_data_pembayaran2($nisn, $nama_siswa),
            'isi'       => 'pendapatan/pembayaran/v_data_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function cek_historis_pembayaran()
    {
        $tgl = $this->request->getPost('tgl_bayar');

        $data = [
            'title'     => 'Cek Historis Pembayaran',
            'menu'      => 'Cek Historis',
            'historisku'   =>  $this->TagihanModel->cek_data_historis($tgl),
            'isi'       => 'pendapatan/pembayaran/v_data_historis_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function data_transaksi()
    {
        $data = [
            'title'     => 'Data Transaksi Pembayaran',
            'menu'      => 'Transaksi Pembayaran',
            'transaksiku'   =>  $this->TagihanModel->transaksiku(),
            'isi'       => 'pendapatan/pembayaran/v_data_transaksi_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function data_bayar_tagihan()
    {
        $data = [
            'title'     => 'Data Bayar Tagihan',
            'menu'      => 'Data Tagihan',
            'tagihan'   =>  $this->TagihanModel->cek_pembayaran_tagihan(),
            'isi'       => 'pendapatan/tagihan/v_data_tagihan_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function data_bumy()
    {
        $data = [
            'title'     => 'Data Pendapatan BUMY',
            'menu'      => 'Data BUMY',
            'bumy'      =>  $this->TagihanModel->get_data_bumy(),
            'isi'       => 'pendapatan/pembayaran/v_data_pendapatan_bumy',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function sekretariatan()
    {
        $data = [
            'title'         => 'Data Pendapatan Kesekretariatan',
            'menu'          => 'Data Kesekretariatan',
            'sekretariat'   =>  $this->TagihanModel->get_data_sekretariat(),
            'isi'           => 'pendapatan/kesekretariatan/v_data_kesekretariatan',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function import_tagihan()
    {
        $file = $this->request->getFile('data_tagihan');
        if ($file) {
            new PHPExcel;
            $fileLocation = $file->getTempName();
            //baca file
            $objPHPExcel = PHPExcel_IOFactory::load($fileLocation);
            //ambil sheet active
            $sheet    = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            //looping untuk mengambil data
            foreach ($sheet as $idx => $data) {
                //skip index 1 karena title excel
                if ($idx == 1) {
                    continue;
                }

                // $no = $this->TagihanModel->cek_data($data['A']);
                // if ($data['A'] == $no['nisn']) {
                //     continue;
                // }

                $data = array(
                    'nisn'           => $data['B'],
                    'nama_siswa'    => $data['C'],
                    'alamat'      => $data['D'],
                    'pendidikan'  => $data['E'],
                    'kelas'  => $data['F'],
                    'semester'  => $data['G'],
                    'no_hp' => $data['H'],
                    'kode_tagihan' => $data['I'],
                    'bulan_tagihan' => $data['J'],
                    'tahun_tagihan' => $data['K'],
                    'keterangan' => $data['L'],
                    'jumlah_tagihan' => $data['M'],
                    'jumlah_bayar' => $data['N'],
                    'jenis_bayar' => $data['O'],
                    'tgl_bayar' => $data['P'],
                    'kode_kelas' => $data['Q'],
                    'bill_account' => $data['R'],
                );
                $this->TagihanModel->import($data);
            }
        }
        session()->setFlashdata('success', 'Berhasil import data excel');
        return redirect()->to(base_url('tagihan/data_tagihan'));
    }

    public function hapus_tagihan($id_tagihan = NULL)
    {
        $this->TagihanModel->hapus_tagihan($id_tagihan);
        session()->setFlashdata('success', 'Data Tagihan berhasil dihapus.');
        return redirect()->to(base_url('tagihan/data_tagihan'));
    }

    public function hapus_sekretariat($id_sekretariat = NULL)
    {
        $this->TagihanModel->hapus_sekretariatan($id_sekretariat);
        session()->setFlashdata('success', 'Data Pendapatan berhasil dihapus.');
        return redirect()->to(base_url('tagihan/sekretariatan'));
    }

    public function cari_data_tagihan()
    {
        $nisn = $this->request->getPost('nisn');
        $nama_siswa = $this->request->getPost('nama_siswa');

        $data = [
            'title'     => 'Pembayaran',
            'menu'      => 'Pembayaran',
            'bayar_tagihan'     =>  $this->TagihanModel->cari_data_new($nisn, $nama_siswa),
            'bayar_tagihan_ya'     =>  $this->TagihanModel->cari_data_new2($nisn, $nama_siswa),
            'bayar_tagihanku'     =>  $this->TagihanModel->cari_dataku($nisn, $nama_siswa),
            'isi'       => 'pendapatan/tagihan/v_data_tagihan_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function bayar_tagihan($id_tagihan)
    {
        $data = [
            'title'     => 'Pembayaran',
            'menu'      => 'Pembayaran',
            'tagihan'    => $this->TagihanModel->edit_tagihan($id_tagihan),
            'isi'       => 'pendapatan/tagihan/v_data_tagihan_pembayaran',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function cek_data_tagihan()
    {
        $nisn = $this->request->getPost('nisn');
        $nama_siswa = $this->request->getPost('nama_siswa');

        $data = [
            'title'     => 'Pembayaran',
            'menu'      => 'Pembayaran',
            'bayar_tagihan'     =>  $this->TagihanModel->cari_data2($nisn, $nama_siswa),
            'bayar_tagihan3'     =>  $this->TagihanModel->cari_data3($nisn, $nama_siswa),
            'isi'       => 'pendapatan/tagihan/v_data_cek_tagihan_pembayaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function bayar_siswa()
    {
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect();

        date_default_timezone_set('Asia/Jakarta');
        // $tgl_update = date('m/d/Y h:i:s');
        // $tgl_transaksi = date('m/d/Y');

        $tgl_update = date('Y-m-d h:i:s');
        $tgl_transaksi = date('m/d/Y');

        $builder = $db->table('tb_transaksi');
        $builder->select('id_transaksi');
        $builder->orderBy('id_transaksi', 'DESC');
        $builder->limit(1);
        $query = $builder->get();
        $row   = $query->getRow();


        if ($row > ' ') {
            $kode = intval($row->id_transaksi) + 1;
        } else {
            $kode = 1;
        }

        $kode_transaksi  = intval(session()->get('kode_transaksi'));

        $nilai = substr($kode_transaksi, -3);
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = $nilai . $kodemax;    // hasilnya ODJ-9921-0001 dst.

        $thn = date("Y");
        $hasil = substr($thn, -2);

        $hari = date("hi");

        $data = [
            'id_tagihan'        => $this->request->getPost('id'),
            'kode_transaksi'    => $hasil . $hari . $this->request->getPost('kode') . $kodejadi,
            'nisn'              => $this->request->getPost('nisnku'),
            'nama_siswa'        => $this->request->getPost('siswa'),
            'jumlah_bayar'      => $this->request->getPost('jumlah_bayar'),
            'jenis_bayar'       => $this->request->getPost('jenis_bayar'),
            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'         => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
        ];

        if ($validation->run($data, 'bayar') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('tagihan/data_pembayaran'));
        } else {
            $this->TagihanModel->input_tagihan($data);
            session()->setFlashdata('success', 'Pembayaran Berhasil Disimpan');
            return redirect()->to(base_url('tagihan/data_transaksi'));
        }
    }

    public function hapus_transaksi($id_transaksi = NULL)
    {
        $this->TagihanModel->hapus_transaksi($id_transaksi);
        session()->setFlashdata('success', 'Data Transaksi berhasil dihapus.');
        return redirect()->to(base_url('tagihan/data_transaksi'));
    }

    // public function bayar_siswa($id_tagihan)
    // {
    //     date_default_timezone_set('Asia/Jakarta');
    //     // $tgl_update = date('m/d/Y h:i:s');
    //     // $tgl_transaksi = date('m/d/Y');

    //     $tgl_update = date('Y-m-d h:i:s');
    //     $tgl_transaksi = date('m/d/Y');

    //     $data = [
    //         'jumlah_bayar'   => $this->request->getPost('jumlah_bayar'),
    //         'jenis_bayar'    => $this->request->getPost('jenis_bayar'),
    //         'teller'         => session()->get('kode_users'),
    //         'tgl_bayar'      => $tgl_transaksi,
    //         'tgl_update'     => $tgl_update,
    //     ];
    //     $this->TagihanModel->update_tagihan($data, $id_tagihan);
    //     session()->setFlashdata('success', 'Pembayaran Berhasil Disimpan');
    //     return redirect()->to(base_url('tagihan/data_pembayaran'));
    // }

    public function masukan_bumy()
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
            'pendidikan'        => $this->request->getPost('kode_unit'),
            'kode_tagihan'      => $this->request->getPost('kode_belanja'),
            'bulan_tagihan'     => strtoupper($this->request->getPost('bulan')),
            'keterangan'        => strtoupper($this->request->getPost('keterangan')),
            'jumlah_nominal'    => strtoupper($this->request->getPost('nominal_pendapatan')),
            'jenis_bayar'       => strtoupper($this->request->getPost('sumber_pendapatan')),

            'teller'            => session()->get('kode_users'),
            'tgl_bayar'         => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'tahun_tagihan'     => $thn_ajaran,
        ];
        if ($validation->run($data, 'bumy') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('tagihan/data_bumy'));
        } else {
            $this->TagihanModel->insert_bumy($data);
            session()->setFlashdata('success', 'Selamat! Data sudah berhasil di simpan.');
            return redirect()->to(base_url('tagihan/data_bumy'));
        }
    }

    public function data_kesekretariatan()
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
            'bulan'             => strtoupper($this->request->getPost('bulan_pendapatan')),
            'kode_transaksi'    => strtoupper($this->request->getPost('jenis_pendapatan')),
            'keterangan'        => strtoupper($this->request->getPost('keterangan')),
            'jumlah_nominal'    => strtoupper($this->request->getPost('nominal_pendapatan')),
            'sumber_pendapatan' => strtoupper($this->request->getPost('sumber_pendapatan')),

            'teller'            => session()->get('kode_users'),
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_update'        => $tgl_update,
            'thn_ajaran'        => $thn_ajaran,
        ];
        if ($validation->run($data, 'sekretariat') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('tagihan/sekretariatan'));
        } else {
            $this->TagihanModel->insert_kesekretariatan($data);
            session()->setFlashdata('success', 'Selamat! Data sudah berhasil di simpan.');
            return redirect()->to(base_url('tagihan/sekretariatan'));
        }
    }

    public function hapus_bumy($id_bumy = NULL)
    {
        $this->TagihanModel->hapus_bumy3($id_bumy);
        session()->setFlashdata('success', 'Data Pendapatan berhasil dihapus.');
        return redirect()->to(base_url('tagihan/data_bumy'));
    }

    //--------------------------------------------------------------------
}
