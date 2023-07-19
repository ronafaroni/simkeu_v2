<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function cek_total_belanja()
    {
        $kode = "5";
        return $this->db->table('tb_belanja')
            ->like('kode_akun', $kode)
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function cek_total_pendapatan()
    {

        return $this->db->table('tb_transaksi')
            ->selectSum('jumlah_bayar')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_sekretariat()
    {

        return $this->db->table('tb_sekretariat')
            ->like('jumlah_nominal')
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function total_pendapatan_hari_ini()
    {
        return $this->db->table('tb_transaksi')
            ->limit(1)
            ->orderBy('tgl_transaksi', 'desc')
            ->get()->getResultArray();
    }

    public function total_pengeluaran_hari_ini()
    {
        return $this->db->table('tb_belanja')
            ->limit(1)
            ->orderBy('tgl_transaksi', 'desc')
            ->get()->getResultArray();
    }

    public function pendapatan_hari_ini()
    {
        return $this->db->table('tb_transaksi')
            ->limit(1)
            ->groupBy('tgl_transaksi')
            ->orderBy('tgl_transaksi', 'asc')
            ->selectSum('jumlah_bayar')
            ->get()->getRow('jumlah_bayar');
    }

    public function pengeluaran_hari_ini()
    {
        return $this->db->table('tb_belanja')
            ->limit(1)
            ->groupBy('tgl_transaksi')
            ->orderBy('tgl_transaksi', 'desc')
            ->selectSum('nominal_belanja')
            ->get()->getResultArray();
    }

    public function total_historis()
    {
        return $this->db->table('tb_belanja')
            ->limit(5)
            // ->groupBy('tgl_transaksi')
            ->orderBy('id_belanja', 'DESC')
            // ->selectSum('nominal_belanja')
            ->select('nominal_belanja')
            ->select('tgl_transaksi')
            ->select('uraian_belanja')
            ->select('sumber_dana')
            ->get()->getResultArray();
    }

    public function total_historis_pendapatan()
    {

        return $this->db->table('tb_transaksi')
            ->limit(5)
            // ->groupBy('tb_transaksi.tgl_bayar')
            ->orderBy('tb_transaksi.tgl_update', 'desc')
            // ->selectSum('tb_transaksi.jumlah_bayar')
            ->select('tb_transaksi.tgl_transaksi')
            ->select('tb_transaksi.jenis_bayar')
            ->select('tb_transaksi.jumlah_bayar')
            ->select('tb_tagihan.keterangan')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getResultArray();
    }

    public function cek_total_tagihan1()
    {
        return $this->db->table('tb_transaksi')
            ->selectSum('jumlah_bayar')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_tagihan2()
    {
        return $this->db->table('tb_tagihan')
            ->selectSum('jumlah_tagihan')
            ->get()->getRow()->jumlah_tagihan;
    }

    // public function cek_total_tagihan2()
    // {
    //     $data = "4.1";
    //     return $this->db->table('tb_tagihan')
    //         ->notLike('pendidikan', $data)
    //         ->selectSum('jumlah_tagihan')
    //         ->get()->getResultArray();
    // }

    public function total_pengajuan()
    {
        return $this->db->table('tb_pengajuan')
            ->selectSum('nominal_belanja')
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
        $jenis = 'TUNAI';
        return $this->db->table('tb_transaksi')
            ->like('jenis_bayar', $jenis)
            ->selectSum('jumlah_bayar')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_sekretariat_tunai()
    {
        $jenis = 'TUNAI';
        return $this->db->table('tb_sekretariat')
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
        return $this->db->table('tb_transaksi')
            ->like('jenis_bayar', $jenis)
            ->selectSum('jumlah_bayar')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_sekretariat_bpd()
    {
        $jenis = 'BPD';
        return $this->db->table('tb_sekretariat')
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
        return $this->db->table('tb_transaksi')
            ->like('jenis_bayar', $jenis)
            ->selectSum('jumlah_bayar')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_total_saldo_sekretariat_bni()
    {

        $jenis = 'BNI';
        return $this->db->table('tb_sekretariat')
            ->like('sumber_pendapatan', $jenis)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_pendapatan()
    {

        return $this->db->table('tb_pendapatan')
            ->selectSum('jumlah_pendapatan')
            ->get()->getRow()->jumlah_pendapatan;
    }

    public function cek_grafik_belanja()
    {

        return $this->db->table('tb_belanja')
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }




    public function cek_pendapatan1()
    {
        $bln = 'JANUARI';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan2()
    {
        $bln = 'FEBRUARI';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan3()
    {
        $bln = 'MARET';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan4()
    {
        $bln = 'APRIL';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan5()
    {
        $bln = 'MEI';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan6()
    {
        $bln = 'JUNI';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan7()
    {
        $bln = 'JULI';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan8()
    {
        $bln = 'AGUSTUS';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan9()
    {
        $bln = 'SEPTEMBER';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan10()
    {
        $bln = 'OKTOBER';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan11()
    {
        $bln = 'NOVEMBER';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }

    public function cek_pendapatan12()
    {
        $bln = 'DESEMBER';
        return $this->db->table('tb_transaksi')
            ->like('tb_tagihan.bulan_tagihan', $bln)
            ->selectSum('tb_transaksi.jumlah_bayar')
            ->join('tb_tagihan', 'tb_tagihan.id_tagihan = tb_transaksi.id_tagihan')
            ->get()->getRow()->jumlah_bayar;
    }







    public function cek_grafik_belanja1()
    {
        $bln = 'JANUARI';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja2()
    {
        $bln = 'FEBRUARI';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja3()
    {
        $bln = 'MARET';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja4()
    {
        $bln = 'APRIL';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja5()
    {
        $bln = 'MEI';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja6()
    {
        $bln = 'JUNI';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja7()
    {
        $bln = 'JULI';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja8()
    {
        $bln = 'AGUSTUS';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja9()
    {
        $bln = 'SEPTEMBER';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja10()
    {
        $bln = 'OKTOBER';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja11()
    {
        $bln = 'NOVEMBER';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }

    public function cek_grafik_belanja12()
    {
        $bln = 'DESEMBER';
        return $this->db->table('tb_belanja')
            ->like('bulan_belanja', $bln)
            ->selectSum('nominal_belanja')
            ->get()->getRow()->nominal_belanja;
    }













    public function cek_grafik_sekretariat1()
    {
        $bln = 'JANUARI';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat2()
    {
        $bln = 'FEBRUARI';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat3()
    {
        $bln = 'MARET';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat4()
    {
        $bln = 'APRIL';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat5()
    {
        $bln = 'MEI';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat6()
    {
        $bln = 'JUNI';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat7()
    {
        $bln = 'JULI';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat8()
    {
        $bln = 'AGUSTUS';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat9()
    {
        $bln = 'SEPTEMBER';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat10()
    {
        $bln = 'OKTOBER';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat11()
    {
        $bln = 'NOVEMBER';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }

    public function cek_grafik_sekretariat12()
    {
        $bln = 'DESEMBER';
        return $this->db->table('tb_sekretariat')
            ->like('bulan', $bln)
            ->selectSum('jumlah_nominal')
            ->get()->getRow()->jumlah_nominal;
    }
}
