<?php

namespace App\Models;

use CodeIgniter\Model;

class TagihanModel extends Model
{

    public function cek_tagihan()
    {
        return $this->db->table('tb_tagihan')
            ->groupBy('id_tagihan')
            ->get()->getResultArray();
    }

    public function cek_pembayaran_tagihan()
    {
        return $this->db->table('tb_tagihan')
            ->groupBy('nama_siswa')
            ->get()->getResultArray();
    }

    public function cek_data_pembayaran($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getResultArray();
    }

    public function cek_data_pembayaran2($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('nisn', $nisn)
            ->like('nama_siswa', $nama_siswa)
            ->groupBy('nisn', $nisn)
            ->groupBy('nama_siswa', $nama_siswa)
            ->get()->getResultArray();
    }

    public function get_data_bumy()
    {
        $kode = "4.1";
        return $this->db->table('tb_tagihan')
            ->like('pendidikan', $kode)
            ->get()->getResultArray();
    }

    public function get_data_sekretariat()
    {
        return $this->db->table('tb_sekretariat')
            ->get()->getResultArray();
    }

    public function input_tagihan($data)
    {
        return $this->db->table('tb_transaksi')->insert($data);
    }

    public function insert_bumy($data)
    {
        return $this->db->table('tb_tagihan')->insert($data);
    }

    public function insert_kesekretariatan($data)
    {
        return $this->db->table('tb_sekretariat')->insert($data);
    }

    public function hapus_bumy3($id_bumy)
    {
        return $this->db->table('tb_tagihan')->delete(['id_tagihan' => $id_bumy]);
    }

    public function hapus_sekretariatan($id_sekretariat)
    {
        return $this->db->table('tb_sekretariat')->delete(['id_sekretariat' => $id_sekretariat]);
    }

    // public function cek_data($nisn)
    // {
    //     return $this->db->table('tb_tagihan')
    //         ->where(array('nisn' => $nisn))
    //         ->get()->getRowArray();
    // }
    public function cek_data_historis($tgl)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_transaksi.tgl_bayar', $tgl)
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getResultArray();
    }

    public function transaksiku()
    {
        return $this->db->table('tb_transaksi')
            ->select('tb_transaksi.tgl_update, tb_transaksi.kode_transaksi, tb_transaksi.nisn, tb_transaksi.nama_siswa, tb_tagihan.keterangan, tb_transaksi.jumlah_bayar, tb_transaksi.id_transaksi')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_data($nisn)
    {
        return $this->db->table('tb_tagihan')
            ->where(array('nisn' => $nisn))
            ->get()->getRowArray();
    }

    public function import($data)
    {
        return $this->db->table('tb_tagihan')->insert($data);
    }

    public function hapus_tagihan($id_tagihan)
    {
        return $this->db->table('tb_tagihan')->delete(['id_tagihan' => $id_tagihan]);
    }

    public function hapus_transaksi($id_transaksi)
    {
        return $this->db->table('tb_transaksi')->delete(['id_transaksi' => $id_transaksi]);
    }

    // public function cari_data($nisn, $nama_siswa)
    // {
    //     return $this->db->table('tb_tagihan')
    //         ->like('nisn', $nisn)
    //         ->like('nama_siswa', $nama_siswa)
    //         ->get()->getResultArray();
    // }

    public function cari_data_new($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->select('tb_tagihan.id_tagihan, tb_tagihan.nisn, tb_tagihan.keterangan, tb_tagihan.kelas, tb_tagihan.semester, tb_tagihan.jumlah_tagihan, tb_transaksi.jumlah_bayar')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)

            // ->where(array('tb_tagihan.nisn' => $nisn))
            // ->where(array('tb_tagihan.nama_siswa' => $nama_siswa))
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cari_data_new2($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)

            // ->where(array('tb_tagihan.nisn' => $nisn))
            // ->where(array('tb_tagihan.nama_siswa' => $nama_siswa))
            // ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }


    public function cari_dataku($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)
            ->groupBy('tb_tagihan.nisn', $nisn)
            ->groupBy('tb_tagihan.nama_siswa', $nama_siswa)

            ->get()->getResultArray();
    }

    public function cari_data2($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)
            ->where(['tb_transaksi.jumlah_bayar' => null])
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cari_data3($nisn, $nama_siswa)
    {
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.nisn', $nisn)
            ->like('tb_tagihan.nama_siswa', $nama_siswa)
            ->groupBy('tb_tagihan.nisn', $nisn)
            ->groupBy('tb_tagihan.nama_siswa', $nama_siswa)
            ->get()->getResultArray();
    }

    public function edit_tagihan($id_tagihan)
    {
        return $this->db->table('tb_tagihan')->where('id_tagihan', $id_tagihan)->get()->getRowArray();
    }

    public function update_tagihan($data, $id_tagihan)
    {
        return $this->db->table('tb_tagihan')->update($data, array('id_tagihan' => $id_tagihan));
    }


    public function get_users()
    {
        return $this->db->table('tb_users')->get()->getResultArray();
    }

    public function insert_data_users($data)
    {
        return $this->db->table('tb_users')->insert($data);
    }

    public function update_data_users($data, $id_users)
    {
        return $this->db->table('tb_users')->update($data, array('id_users' => $id_users));
    }

    public function update_password($data, $id_users)
    {
        return $this->db->table('tb_users')->update($data, array('id_users' => $id_users));
    }

    public function get_status()
    {
        $nisn = session()->get('no_nisn');
        return $this->db->table('tb_pendaftaran')->where(array('no_nisn' => $nisn))->get()->getResultArray();
    }

    public function edit_password($id_users)
    {
        return $this->db->table('tb_users')->where('id_users', $id_users)->get()->getRowArray();
    }

    public function hapus_akun($id_users)
    {
        return $this->db->table('tb_users')->delete(['id_users' => $id_users]);
    }
}
