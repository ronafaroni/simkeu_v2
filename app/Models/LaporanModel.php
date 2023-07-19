<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{

    public function cek_belanja()
    {
        $kode = "5";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sekretariat()
    {
        $kode = "5.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_mutu()
    {
        $kode = "5.1.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_yayasan()
    {
        $kode = "5.1.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_ypbk()
    {
        $kode = "5.1.3.1";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_sdut()
    {
        $kode = "5.1.3.2";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_tpq()
    {
        $kode = "5.1.3.3";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_smput()
    {
        $kode = "5.1.3.4";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_ibs()
    {
        $kode = "5.1.3.5";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_paud()
    {
        $kode = "5.1.3.6";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_dansos()
    {
        $kode = "5.1.3.7";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_bpjs()
    {
        $kode = "5.1.3.8";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_speedy()
    {
        $kode = "5.1.3.9";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_operasional()
    {
        $kode = "5.1.3.10";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_keuangan()
    {
        $kode = "5.1.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_bangun_sdut()
    {
        $kode = "5.1.4.1";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_pengeluaran')
            ->selectSum('nominal_pembayaran')
            ->get()->getResultArray();
    }

    public function get_bangun_tpq()
    {
        $kode = "5.1.4.2";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_pengeluaran')
            ->selectSum('nominal_pembayaran')
            ->get()->getResultArray();
    }

    public function get_bangun_smput()
    {
        $kode = "5.1.4.3";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_bangun_ibs()
    {
        $kode = "5.1.4.4";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function get_bangun_paud()
    {
        $kode = "5.1.4.5";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_catering()
    {
        $kode = "5.1.5.1";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_koperasi()
    {
        $kode = "5.1.5.2";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sbs()
    {
        $kode = "5.1.5.3";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_air_mineral()
    {
        $kode = "5.1.5.4";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_gasebu()
    {
        $kode = "5.1.5.5";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_bumy()
    {
        $kode = "5.1.5";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }





    public function cek_belanja_sdut()
    {
        $kode = "5.2";
        return $this->db->table('tb_belanja')
            ->like('kode_unit', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_admin_sdut()
    {
        $kode = "5.2.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kurikulum_sdut()
    {
        $kode = "5.2.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kesiswaan_sdut()
    {
        $kode = "5.2.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sarpras_sdut()
    {
        $kode = "5.2.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }



    public function cek_belanja_tpq()
    {
        $kode = "5.3";
        return $this->db->table('tb_belanja')
            ->like('kode_unit', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_admin_tpq()
    {
        $kode = "5.3.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kurikulum_tpq()
    {
        $kode = "5.3.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kesiswaan_tpq()
    {
        $kode = "5.3.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sarpras_tpq()
    {
        $kode = "5.3.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }



    public function cek_belanja_smput()
    {
        $kode = "5.4";
        return $this->db->table('tb_belanja')
            ->like('kode_unit', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_admin_smput()
    {
        $kode = "5.4.1";
        return $this->db->table('tb_belanja')
            ->like('kode_belanja', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kurikulum_smput()
    {
        $kode = "5.4.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kesiswaan_smput()
    {
        $kode = "5.4.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sarpras_smput()
    {
        $kode = "5.4.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }


    public function cek_belanja_ibs()
    {
        $kode = "5.5";
        return $this->db->table('tb_belanja')
            ->like('kode_unit', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_admin_ibs()
    {
        $kode = "5.5.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kurikulum_ibs()
    {
        $kode = "5.5.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kesiswaan_ibs()
    {
        $kode = "5.5.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sarpras_ibs()
    {
        $kode = "5.5.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }


    public function cek_belanja_paud()
    {
        $kode = "5.6";
        return $this->db->table('tb_belanja')
            ->like('kode_unit', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_admin_paud()
    {
        $kode = "5.6.1";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kurikulum_paud()
    {
        $kode = "5.6.2";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_kesiswaan_paud()
    {
        $kode = "5.6.3";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_sarpras_paud()
    {
        $kode = "5.6.4";
        return $this->db->table('tb_belanja')
            ->like('kode_transaksi', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }







    public function get_belanja_keuangan()
    {
        return $this->db->table('tb_belanja_keuangan')->get()->getResultArray();
    }

    public function get_belanja_sekolah()
    {
        return $this->db->table('tb_belanja_sekolah')->get()->getResultArray();
    }

    public function get_pengajuan()
    {
        return $this->db->table('tb_pengajuan')->get()->getResultArray();
    }

    public function get_catering()
    {
        return $this->db->table('tb_catering')->get()->getResultArray();
    }

    public function get_koperasi()
    {
        return $this->db->table('tb_koperasi')->get()->getResultArray();
    }

    public function get_sbs()
    {
        return $this->db->table('tb_sbs')->get()->getResultArray();
    }

    public function get_air_mineral()
    {
        return $this->db->table('tb_air_mineral')->get()->getResultArray();
    }

    public function get_gasebu()
    {
        return $this->db->table('tb_gasebu')->get()->getResultArray();
    }

    public function get_pembangunan()
    {
        return $this->db->table('tb_bangunan')->get()->getResultArray();
    }

    public function get_pembayaran()
    {
        return $this->db->table('tb_pembayaran')->get()->getResultArray();
    }

    public function get_kode_pembayaran()
    {
        return $this->db->table('tb_bangunan')->get()->getResultArray();
    }





    public function insert_belanja_penjaminan_mutu($data)
    {
        return $this->db->table('tb_belanja_mutu')->insert($data);
    }

    public function insert_belanja_yayasan($data)
    {
        return $this->db->table('tb_belanja_yayasan')->insert($data);
    }

    public function insert_belanja_keuangan_bulanan($data)
    {
        return $this->db->table('tb_belanja_keuangan')->insert($data);
    }

    public function insert_belanja_sekolah($data)
    {
        return $this->db->table('tb_belanja_sekolah')->insert($data);
    }

    public function insert_pengajuan($data)
    {
        return $this->db->table('tb_pengajuan')->insert($data);
    }

    public function insert_catering($data)
    {
        return $this->db->table('tb_catering')->insert($data);
    }

    public function insert_koperasi($data)
    {
        return $this->db->table('tb_koperasi')->insert($data);
    }

    public function insert_sbs($data)
    {
        return $this->db->table('tb_sbs')->insert($data);
    }

    public function insert_air_mineral($data)
    {
        return $this->db->table('tb_air_mineral')->insert($data);
    }

    public function insert_gasebu($data)
    {
        return $this->db->table('tb_gasebu')->insert($data);
    }

    public function insert_proyek($data)
    {
        return $this->db->table('tb_bangunan')->insert($data);
    }

    public function insert_pengeluaran($data)
    {
        return $this->db->table('tb_pembayaran')->insert($data);
    }





    public function insert_laporan($data)
    {
        return $this->db->table('tb_neraca')->insert($data);
    }

    public function get_laporan()
    {
        return $this->db->table('tb_neraca')->get()->getResultArray();
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

    public function hapus_belanja_mutu($id_belanja_mutu)
    {
        return $this->db->table('tb_belanja_mutu')->delete(['id_belanja_mutu' => $id_belanja_mutu]);
    }

    public function hapus_belanja_yayasan($id_belanja_yayasan)
    {
        return $this->db->table('tb_belanja_yayasan')->delete(['id_belanja_yayasan' => $id_belanja_yayasan]);
    }

    public function hapus_belanja_keuangan($id_belanja_keuangan)
    {
        return $this->db->table('tb_belanja_keuangan')->delete(['id_belanja_keuangan' => $id_belanja_keuangan]);
    }

    public function hapus_belanja_sekolah($id_belanja_sekolah)
    {
        return $this->db->table('tb_belanja_sekolah')->delete(['id_belanja_sekolah' => $id_belanja_sekolah]);
    }

    public function hapus_pengajuan($id_pengajuan)
    {
        return $this->db->table('tb_pengajuan')->delete(['id_pengajuan' => $id_pengajuan]);
    }

    public function hapus_catering($id_catering)
    {
        return $this->db->table('tb_catering')->delete(['id_catering' => $id_catering]);
    }

    public function hapus_koperasi($id_koperasi)
    {
        return $this->db->table('tb_koperasi')->delete(['id_koperasi' => $id_koperasi]);
    }

    public function hapus_sbs($id_sbs)
    {
        return $this->db->table('tb_sbs')->delete(['id_sbs' => $id_sbs]);
    }

    public function hapus_air_mineral($id_air_mineral)
    {
        return $this->db->table('tb_air_mineral')->delete(['id_air_mineral' => $id_air_mineral]);
    }

    public function hapus_gasebu($id_gasebu)
    {
        return $this->db->table('tb_gasebu')->delete(['id_gasebu' => $id_gasebu]);
    }

    public function hapus_proyek($id_proyek)
    {
        return $this->db->table('tb_bangunan')->delete(['id_bangunan' => $id_proyek]);
    }

    public function detail_proyek($id_proyek)
    {
        return $this->db->table('tb_bangunan')->where('id_bangunan', $id_proyek)->get()->getRowArray();
    }




    public function total_pendapatan()
    {

        return $this->db->table('tb_transaksi')
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getRow()->jumlah_bayar;
    }

    public function total_sekretariat()
    {
        return $this->db->table('tb_sekretariat')
            ->like('jumlah_nominal')
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_pendapatan()
    {
        $kode = "4";
        return $this->db->table('tb_bumy')
            ->like('kode_akun', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_sekretariat()
    {
        $kode = "4.1";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_mutu()
    {
        $kode = "4.1.1";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_keuangan()
    {
        $kode = "4.1.2";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_pembangunan()
    {
        $kode = "4.1.3";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_catering()
    {
        $kode = "4.1.4";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_koperasi()
    {
        $kode = "4.1.5";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_sbs()
    {
        $kode = "4.1.6";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_air_mineral()
    {
        $kode = "4.1.7";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_gasebu()
    {
        $kode = "4.1.8";
        return $this->db->table('tb_sekretariat')
            ->like('kode_transaksi', $kode)
            ->selectSum('jumlah_nominal')
            ->get()->getResultArray();
    }



    public function cek_pendapatan_sdut()
    {
        $kode = "4.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.pendidikan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bulanan_sdut()
    {
        $kode = "4.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_spp_sdut()
    {
        $kode = "4.2.1.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_tahunan_sdut()
    {
        $kode = "4.2.2";
        return $this->db->table('tb_tagihan')
            ->like('kode_tagihan', $kode)
            ->selectSum('jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_infaq()
    {
        $kode = "4.2.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_daftar_ulang()
    {
        $kode = "4.2.2.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_buku_ajar()
    {
        $kode = "4.2.2.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_ujian()
    {
        $kode = "4.2.2.4";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_lainya_sdut()
    {
        $kode = "4.2.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bos_sdut()
    {
        $kode = "4.2.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }




    public function cek_pendapatan_tpq()
    {
        $kode = "4.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.pendidikan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bulanan_tpq()
    {
        $kode = "4.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_syahriyah_tpq()
    {
        $kode = "4.3.1.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_tahunan_tpq()
    {
        $kode = "4.3.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_imtaz()
    {
        $kode = "4.3.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function lainya_tpq()
    {
        $kode = "4.3.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_lainya_tpq()
    {
        $kode = "4.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }


    public function cek_pendapatan_smput()
    {
        $kode = "4.4";
        return $this->db->table('tb_tagihan')
            ->where(array('tb_tagihan.pendidikan' => $kode))
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bulanan_smput()
    {
        $kode = "4.4.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_spp_smput()
    {
        $kode = "4.4.1.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_spp_boarding()
    {
        $kode = "4.4.1.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_tahunan_smput()
    {
        $kode = "4.4.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_infaq_smput()
    {
        $kode = "4.4.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_infaq_boarding()
    {
        $kode = "4.4.2.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_daftar_ulang_smput()
    {
        $kode = "4.4.2.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_buku_ajar_smput()
    {
        $kode = "4.4.2.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_lainya_smput()
    {
        $kode = "4.4.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bos_smput()
    {
        $kode = "4.4.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_ujian_smput()
    {
        $kode = "4.4.3.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }




    public function cek_pendapatan_ibs()
    {
        $kode = "4.5";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.pendidikan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bulanan_ibs()
    {
        $kode = "4.5.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_syahriyah_ibs()
    {
        $kode = "4.5.1.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_tahunan_ibs()
    {
        $kode = "4.5.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    // public function cek_pendapatan_infaq_ibs()
    // {
    //     $kode = "4.5.2.1";
    //     return $this->db->table('tb_tagihan')
    //         ->like('tb_tagihan.kode_tagihan', $kode)
    //         ->selectSum('tb_transaksi.jumlah_bayar')
    //         ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
    //         ->get()->getResultArray();
    // }

    public function cek_pendapatan_ziarah()
    {
        $kode = "4.5.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_dipan()
    {
        $kode = "4.5.2.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_kitab()
    {
        $kode = "4.5.2.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function tot_pendapatan_lainya_ibs()
    {
        $kode = "4.5.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_lainya_ibs()
    {
        $kode = "4.5.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }



    public function cek_pendapatan_paud()
    {
        $kode = "4.6";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.pendidikan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_bulanan_paud()
    {
        $kode = "4.6.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_spp_paud_play()
    {
        $kode = "4.6.1.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_spp_paud_care()
    {
        $kode = "4.6.1.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_tahunan_paud()
    {
        $kode = "4.6.2";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_daftar_ulang_paud()
    {
        $kode = "4.6.2.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function all_cek_pendapatan_lainya_paud()
    {
        $kode = "4.6.3";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }

    public function cek_pendapatan_lainya_paud()
    {
        $kode = "4.6.3.1";
        return $this->db->table('tb_tagihan')
            ->like('tb_tagihan.kode_tagihan', $kode)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan', 'LEFT')
            ->get()->getResultArray();
    }




    public function cek_total_saldo_belanja_tunai()
    {

        $jenis = "TUNAI";
        return $this->db->table('tb_belanja')
            ->like('sumber_dana', $jenis)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_total_saldo_pendapatan_tunai()
    {
        $jenis = 'Tunai';
        return $this->db->table('tb_tagihan')
            ->like('tb_transaksi.jenis_bayar', $jenis)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_bumy_tunai()
    {
        $jenis = 'TUNAI';
        return $this->db->table('tb_bumy')
            ->like('sumber_pendapatan', $jenis)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }


    public function cek_total_saldo_belanja_bpd()
    {
        $jenis = "BPD";
        return $this->db->table('tb_belanja')
            ->like('sumber_dana', $jenis)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_total_saldo_pendapatan_bpd()
    {
        $jenis = 'BPD';
        return $this->db->table('tb_tagihan')
            ->like('tb_transaksi.jenis_bayar', $jenis)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_bumy_bpd()
    {
        $jenis = 'BPD';
        return $this->db->table('tb_bumy')
            ->like('sumber_pendapatan', $jenis)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_total_saldo_belanja_bni()
    {
        $jenis = "BNI";
        return $this->db->table('tb_belanja')
            ->like('sumber_dana', $jenis)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_total_saldo_pendapatan_bni()
    {
        $jenis = 'BNI';
        return $this->db->table('tb_tagihan')
            ->like('tb_transaksi.jenis_bayar', $jenis)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_bumy_bni()
    {

        $jenis = 'BNI';
        return $this->db->table('tb_bumy')
            ->like('sumber_pendapatan', $jenis)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_total_tagihan2()
    {
        $data = "4.1";
        return $this->db->table('tb_tagihan')
            ->notLike('pendidikan', $data)
            ->selectSum('jumlah_tagihan')
            ->get()->getRow()->jumlah_tagihan;
    }

    public function cek_total_bayar2()
    {
        $data = "4.1";
        return $this->db->table('tb_tagihan')
            ->notLike('tb_tagihan.pendidikan', $data)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_transaksi', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_kewajiban()
    {
        $data = "2.1";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->get()->getResultArray();
    }

    public function cek_total_kewajiban()
    {
        $data = "2.1";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->selectSum('nominal')
            ->get()->getRow()->nominal;
    }

    public function cek_tanah()
    {
        $data = "1.1";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->get()->getResultArray();
    }

    public function cek_total_tanah()
    {
        $data = "1.1";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->selectSum('nominal')
            ->get()->getRow()->nominal;
    }

    public function cek_gedung()
    {
        $data = "1.2";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->get()->getResultArray();
    }

    public function cek_total_gedung()
    {
        $data = "1.2";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->selectSum('nominal')
            ->get()->getRow()->nominal;
    }

    public function cek_peralatan()
    {
        $data = "1.3";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->get()->getResultArray();
    }

    public function cek_total_peralatan()
    {
        $data = "1.3";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->selectSum('nominal')
            ->get()->getRow()->nominal;
    }

    public function cek_modal()
    {
        $data = "2.2";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->get()->getResultArray();
    }

    public function cek_total_modal()
    {
        $data = "2.2";
        return $this->db->table('tb_neraca')
            ->like('jenis_laporan', $data)
            ->selectSum('nominal')
            ->get()->getRow()->nominal;
    }



    public function hapus_neraca($id_neraca)
    {
        return $this->db->table('tb_neraca')->delete(['id_neraca' => $id_neraca]);
    }
}
