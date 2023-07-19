<?php

namespace App\Models;

use CodeIgniter\Model;

class BelanjaModel extends Model
{

    public function get_penjaminan_mutu()
    {
        $kode = "5.1.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->get()->getResultArray();
    }

    public function get_belanja_yayasan()
    {
        $kode = "5.1.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->get()->getResultArray();
    }

    public function get_belanja_keuangan()
    {
        $kode = "5.1.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->get()->getResultArray();
    }

    public function get_belanja_sekolah()
    {

        $kode2 = "5.2";
        $kode3 = "5.3";
        $kode4 = "5.4";
        $kode5 = "5.5";
        $kode6 = "5.6";

        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode2)
            ->orLike('kode_transaksi', $kode3)
            ->orLike('kode_transaksi', $kode4)
            ->orLike('kode_transaksi', $kode5)
            ->orLike('kode_transaksi', $kode6)
            // ->like(array('kode_transaksi' => $kode3))
            // ->like('kode_transaksi', $kode4)
            // ->like('kode_transaksi', $kode5)
            // ->like('kode_transaksi', $kode6)
            ->get()->getResultArray();
    }

    public function get_pengajuan()
    {
        return $this->db->table('tb_pengajuan')->get()->getResultArray();
    }

    public function get_catering()
    {
        $kode = "5.1.5.1";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->get()->getResultArray();
    }

    public function get_koperasi()
    {
        $kode = "5.1.5.2";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->get()->getResultArray();
    }

    public function get_sbs()
    {
        $kode = "5.1.5.3";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->get()->getResultArray();
    }

    public function get_air_mineral()
    {
        $kode = "5.1.5.4";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->get()->getResultArray();
    }

    public function get_gasebu()
    {
        $kode = "5.1.5.5";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->get()->getResultArray();
    }

    public function get_pembangunan()
    {
        $kode = "5.1.4";
        return $this->db->table('tb_bangunan')
            ->like('tb_belanja.kode_belanja', $kode)
            ->groupBy('tb_belanja.uraian_belanja')
            ->join('tb_belanja', 'tb_belanja.kode_akun = tb_bangunan.kode_akun')
            ->get()->getResultArray();
    }

    public function get_pembayaran()
    {
        $kode = "5.1.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->get()->getResultArray();
    }

    public function get_kode_pembayaran()
    {
        return $this->db->table('tb_bangunan')->get()->getResultArray();
    }





    public function insert_belanja_penjaminan_mutu($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_belanja_yayasan($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_belanja_keuangan_bulanan($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_belanja_sekolah($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_pengajuan($data)
    {
        return $this->db->table('tb_pengajuan')->insert($data);
    }

    public function insert_catering($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_koperasi($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_sbs($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_air_mineral($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_gasebu($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
    }

    public function insert_proyek($data)
    {
        return $this->db->table('tb_bangunan')->insert($data);
    }

    public function insert_pengeluaran($data)
    {
        return $this->db->table('tb_belanja')->insert($data);
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

    public function hapus_belanja_mutu($id_belanja)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_belanja]);
    }

    public function hapus_belanja_yayasan($id_belanja)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_belanja]);
    }

    public function hapus_belanja_keuangan($id_belanja)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_belanja]);
    }

    public function hapus_belanja_sekolah($id_belanja)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_belanja]);
    }

    public function hapus_pengajuan($id_pengajuan)
    {
        return $this->db->table('tb_pengajuan')->delete(['id_pengajuan' => $id_pengajuan]);
    }

    public function hapus_catering($id_catering)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_catering]);
    }

    public function hapus_koperasi($id_koperasi)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_koperasi]);
    }

    public function hapus_sbs($id_sbs)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_sbs]);
    }

    public function hapus_air_mineral($id_air_mineral)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_air_mineral]);
    }

    public function hapus_gasebu($id_gasebu)
    {
        return $this->db->table('tb_belanja')->delete(['id_belanja' => $id_gasebu]);
    }

    public function hapus_proyek($id_proyek)
    {
        return $this->db->table('tb_bangunan')->delete(['id_bangunan' => $id_proyek]);
    }

    public function hapus_proyek1($id_proyek)
    {
        return $this->db->table('tb_bangunan')->delete(['id_belanja' => $id_proyek]);
    }

    public function hapus_proyek2($id_proyek)
    {
        return $this->db->table('tb_bangunan')->delete(['id_belanja' => $id_proyek]);
    }

    public function detail_proyek($id_proyek)
    {
        return $this->db->table('tb_bangunan')->where('id_bangunan', $id_proyek)->get()->getRowArray();
    }
}
