<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $login = [
		'username' 				=> 'required',
		'password' 				=> 'required',
	];

	public $login_errors = [
		'username' 				=> [
			'required' 			=> 'Username wajib diisi dan tidak boleh kosong.',
		],

		'password' 		=> [
			'required' 			=> 'Password wajib diisi dan tidak boleh kosong.',
		],
	];

	public $bayar = [
		'jumlah_bayar' 			=> 'required',
		'jenis_bayar' 			=> 'required',

	];

	public $bayar_errors = [
		'jumlah_bayar' 				=> [
			'required' 			=> 'Jumlah Bayar wajib diisi dan tidak boleh kosong.',
		],

		'jenis_bayar' 		=> [
			'required' 			=> 'Jenis Bayar wajib diisi dan tidak boleh kosong.',
		],
	];

	public $users = [
		'kode_users' 			=> 'required|is_unique[tb_users.kode_users]|max_length[2]',
		'username' 				=> 'required',
		'password' 				=> 'required|is_unique[tb_users.password]|min_length[6]',
		'nama_users' 			=> 'required',
		'jabatan' 				=> 'required',
		'role' 					=> 'required',
	];

	public $users_errors = [
		'kode_users' 				=> [
			'required' 			=> 'Kode wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'Kode sudah terdaftar.',
			'min_length' 		=> 'Kode minimal 2 karakter.',
		],

		'username' 		=> [
			'required' 			=> 'Username wajib diisi dan tidak boleh kosong.',
		],

		'password' 				=> [
			'required' 			=> 'Password wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'Password sudah terdaftar.',
			'min_length' 		=> 'Password minimal 6 karakter.',
		],

		'nama_users' 			=> [
			'required' 			=> 'Nama Pengguna wajib diisi dan tidak boleh kosong.',
		],

		'jabatan' 				=> [
			'required' 			=> 'Jabatan wajib diisi dan tidak boleh kosong.',
		],

		'role' 		=> [
			'required' 			=> 'Hak Akses wajib diisi dan tidak boleh kosong.',
		],
	];

	public $update = [
		'kode_users' 			=> 'required|is_unique[tb_users.kode_users]|max_length[2]',
		'username' 				=> 'required',
		'password' 				=> 'required|is_unique[tb_users.password]|min_length[6]',
		'nama_users' 			=> 'required',
		'jabatan' 				=> 'required',
	];

	public $update_errors = [
		'kode_users' 				=> [
			'required' 			=> 'Kode wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'Kode sudah terdaftar.',
			'min_length' 		=> 'Kode minimal 2 karakter.',
		],

		'username' 		=> [
			'required' 			=> 'Username wajib diisi dan tidak boleh kosong.',
		],

		'password' 				=> [
			'required' 			=> 'Password wajib diisi dan tidak boleh kosong.',
			'is_unique' 		=> 'Password sudah terdaftar.',
			'min_length' 		=> 'Password minimal 6 karakter.',
		],

		'nama_users' 			=> [
			'required' 			=> 'Nama Pengguna wajib diisi dan tidak boleh kosong.',
		],

		'jabatan' 				=> [
			'required' 			=> 'Jabatan wajib diisi dan tidak boleh kosong.',
		],

	];

	public $penjaminan_mutu = [
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 			=> 'required',
	];

	public $penjaminan_mutu_errors = [
		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 			=> [
			'required' 			=> 'Nama Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 			=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $belanja_yayasan = [
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 		    => 'required',
	];

	public $belanja_yayasan_errors = [
		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 			=> [
			'required' 			=> 'Nama Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 			=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $keuangan_bulanan = [
		'kode_transaksi' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'sumber_dana' 			=> 'required',
		// 'penerima' 				=> 'required',
	];

	public $keuangan_bulanan_errors = [
		'kode_transaksi' 				=> [
			'required' 			=> 'Kode Transaksi wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		// 'penerima' 			=> [
		// 	'required' 			=> 'Nama Penerima wajib diisi dan tidak boleh kosong.',
		// ],

		'sumber_dana' 			=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $keuangan_harian = [
		'kode_transaksi' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 			=> 'required',
	];

	public $keuangan_harian_errors = [
		'kode_transaksi' 				=> [
			'required' 			=> 'Kode Transaksi wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 			=> [
			'required' 			=> 'Nama Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 			=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $sekolah = [
		'kode_unit' 			=> 'required',
		'kode_transaksi' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 			=> 'required',
	];

	public $sekolah_errors = [
		'kode_unit' 				=> [
			'required' 			=> 'Kode Unit wajib diisi dan tidak boleh kosong.',
		],

		'kode_transaksi' 				=> [
			'required' 			=> 'Kode Transaksi wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 			=> [
			'required' 			=> 'Nama Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 			=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $pengajuan = [
		'kode_unit' 			=> 'required',
		'kode_transaksi' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'tgl_pengajuan' 		=> 'required',
	];

	public $pengajuan_errors = [
		'kode_unit' 				=> [
			'required' 			=> 'Kode Unit wajib diisi dan tidak boleh kosong.',
		],

		'kode_transaksi' 				=> [
			'required' 			=> 'Kode Transaksi wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'tgl_pengajuan' 		=> [
			'required' 			=> 'Tanggal Pengajuan wajib diisi dan tidak boleh kosong.',
		],

	];

	public $catering = [
		'unit_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 			=> 'required',
	];

	public $catering_errors = [

		'unit_belanja' 				=> [
			'required' 			=> 'Unit Belanja wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 		=> [
			'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 		=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],
	];

	public $koperasi = [
		'unit_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 				=> 'required',
	];

	public $koperasi_errors = [

		'unit_belanja' 				=> [
			'required' 			=> 'Unit Belanja wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 		=> [
			'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 		=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],
	];

	public $sbs = [
		'jenis_belanja' 		=> 'required',
		'jenis_mobil' 		    => 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 				=> 'required',
	];

	public $sbs_errors = [

		'jenis_belanja' 				=> [
			'required' 			=> 'Jenis Pengeluaran wajib diisi dan tidak boleh kosong.',
		],

		'jenis_mobil' 				=> [
			'required' 			=> 'Jenis Kendaraan wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 		=> [
			'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 		=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],
	];

	public $air_mineral = [
		'jenis_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 				=> 'required',
	];

	public $air_mineral_errors = [

		'jenis_belanja' 		=> [
			'required' 			=> 'Jenis Belanja wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 		=> [
			'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 		=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],

	];

	public $gasebu = [
		// 'jenis_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'uraian_belanja' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'penerima' 				=> 'required',
		'sumber_dana' 				=> 'required',
	];

	public $gasebu_errors = [

		// 'jenis_belanja' 		=> [
		// 	'required' 			=> 'Jenis Belanja wajib diisi dan tidak boleh kosong.',
		// ],

		'bulan_belanja' 				=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Uraian Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'penerima' 		=> [
			'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 		=> [
			'required' 			=> 'Sumber Dana wajib diisi dan tidak boleh kosong.',
		],
	];

	public $proyek = [
		// 'jenis_belanja' 		=> 'required',
		'kode_belanja' 			=> 'required',
		'tgl_mulai'		 		=> 'required',
		'nama_bangunan' 		=> 'required',
	];

	public $proyek_errors = [

		// 'jenis_belanja' 		=> [
		// 	'required' 			=> 'Jenis Belanja wajib diisi dan tidak boleh kosong.',
		// ],

		'kode_belanja' 				=> [
			'required' 			=> 'Unit Belanja wajib diisi dan tidak boleh kosong.',
		],

		'Tgl_mulai' 		=> [
			'required' 			=> 'Tanggal Mulai wajib diisi dan tidak boleh kosong.',
		],

		'nama_bangunan' 				=> [
			'required' 			=> 'Nama Bangunan wajib diisi dan tidak boleh kosong.',
		],

		// 'penerima' 		=> [
		// 	'required' 			=> 'Penerima wajib diisi dan tidak boleh kosong.',
		// ],
	];

	public $pengeluaran = [
		'kode_belanja' 		=> 'required',
		'uraian_belanja'		 	=> 'required',
		'jenis_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'tgl_transaksi' 		=> 'required',
		'nominal_belanja' 		=> 'required',
		'sumber_dana' 		    => 'required',
	];

	public $pengeluaran_errors = [

		'kode_belanja' 		=> [
			'required' 			=> 'Kode Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Nama Pembangunan wajib diisi dan tidak boleh kosong.',
		],

		'jenis_belanja' 				=> [
			'required' 			=> 'Jenis Belanja wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 		=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'tgl_transaksi' 				=> [
			'required' 			=> 'Tanggal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 				=> [
			'required' 			=> 'Sumber Dana Belanja wajib diisi dan tidak boleh kosong.',
		],
	];

	public $bumy = [
		'kode_tagihan' 		=> 'required',
		'bulan_tagihan' 		=> 'required',
		'keterangan' 		=> 'required',
		'jumlah_bayar' 		=> 'required',
		'jenis_bayar' 		=> 'required',
	];

	public $bumy_errors = [

		'kode_tagihan' 		=> [
			'required' 			=> 'Kode Pendapatan wajib diisi dan tidak boleh kosong.',
		],

		'bulan_tagihan' 		=> [
			'required' 			=> 'Bulan wajib diisi dan tidak boleh kosong.',
		],

		'keterangan' 				=> [
			'required' 			=> 'Keterangan wajib diisi dan tidak boleh kosong.',
		],

		'jumlah_bayar' 		=> [
			'required' 			=> 'Jumlah Nominal wajib diisi dan tidak boleh kosong.',
		],

		'jenis_bayar' 		=> [
			'required' 			=> 'Sumber Pendapatan wajib diisi dan tidak boleh kosong.',
		],
	];

	public $sekretariat = [
		'bulan' 			=> 'required',
		'kode_transaksi' 		=> 'required',
		'keterangan' 		=> 'required',
		'jumlah_nominal' 	=> 'required',
		'sumber_pendapatan' => 'required',
	];

	public $sekretariat_errors = [

		'bulan' 				=> [
			'required' 			=> 'Bulan wajib diisi dan tidak boleh kosong.',
		],

		'kode_transaksi' 			=> [
			'required' 			=> 'Jenis Pendapatan wajib diisi dan tidak boleh kosong.',
		],

		'keterangan' 			=> [
			'required' 			=> 'Keterangan wajib diisi dan tidak boleh kosong.',
		],

		'jumlah_nominal' 		=> [
			'required' 			=> 'Jumlah Nominal wajib diisi dan tidak boleh kosong.',
		],

		'sumber_pendapatan' 	=> [
			'required' 			=> 'Sumber Pendapatan wajib diisi dan tidak boleh kosong.',
		],
	];

	public $pembayaran = [
		'kode_belanja' 		=> 'required',
		'uraian_belanja'		 	=> 'required',
		'jenis_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'bulan_belanja' 		=> 'required',
		'tgl_transaksi' 		=> 'required',
		'nominal_belanja' 		        => 'required',
		'sumber_dana' 		    => 'required',
	];

	public $pembayaran_errors = [

		'kode_belanja' 		=> [
			'required' 			=> 'Kode Belanja wajib diisi dan tidak boleh kosong.',
		],

		'uraian_belanja' 		=> [
			'required' 			=> 'Nama Pembangunan wajib diisi dan tidak boleh kosong.',
		],

		'jenis_belanja' 				=> [
			'required' 			=> 'Jenis Belanja wajib diisi dan tidak boleh kosong.',
		],

		'bulan_belanja' 		=> [
			'required' 			=> 'Bulan Belanja wajib diisi dan tidak boleh kosong.',
		],

		'nominal_belanja' 				=> [
			'required' 			=> 'Nominal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'tgl_transaksi' 				=> [
			'required' 			=> 'Tanggal Belanja wajib diisi dan tidak boleh kosong.',
		],

		'sumber_dana' 				=> [
			'required' 			=> 'Sumber Dana Belanja wajib diisi dan tidak boleh kosong.',
		],
	];

	public $aktiva = [
		'jenis_laporan' 		=> 'required',
		'keterangan'		 	=> 'required',
		'nominal' 				=> 'required',
	];

	public $aktiva_errors = [

		'jenis_laporan' 		=> [
			'required' 			=> 'Jenis Laporan wajib diisi dan tidak boleh kosong.',
		],

		'keteranagan' 		=> [
			'required' 			=> 'Uraian Laporan wajib diisi dan tidak boleh kosong.',
		],

		'nominal' 				=> [
			'required' 			=> 'Nominal Laporan wajib diisi dan tidak boleh kosong.',
		],
	];

	public $pasiva = [
		'jenis_laporan' 		=> 'required',
		'keterangan'		 	=> 'required',
		'nominal' 		        => 'required',
	];

	public $pasiva_errors = [

		'jenis_laporan' 		=> [
			'required' 			=> 'Jenis Laporan wajib diisi dan tidak boleh kosong.',
		],

		'keteranagan' 		=> [
			'required' 			=> 'Uraian Laporan wajib diisi dan tidak boleh kosong.',
		],

		'nominal' 				=> [
			'required' 			=> 'Nominal Laporan wajib diisi dan tidak boleh kosong.',
		],
	];
}
