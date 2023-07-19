<!-- aside -->
<aside id="aside" class="app-aside modal fade " role="menu">
    <div class="left">
        <div class="box bg-white">
            <div class="navbar md-whiteframe-z1 no-radius blue">
                <!-- brand -->
                <a class="navbar-brand">
                    <img src="images/logo.png" alt="." style="max-height: 36px; display:none">
                    <span class="hidden-folded m-l inline">SIMKeu 2022</span>
                </a>
                <!-- / brand -->
            </div>
            <div class="box-row">
                <div class="box-cell scrollable hover">
                    <div class="box-inner">
                        <div class="p hidden-folded blue-50" style="background-image:url(<?= base_url(); ?>/public/template/images/profile_bg.png); background-size:cover">
                            <div class="rounded w-64 bg-white inline pos-rlt">
                                <img src="<?= base_url() ?>/public/template/images/avatar1.png" class="img-responsive rounded">
                            </div>
                            <!-- <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account"> -->
                            <a class="block m-t-sm">
                                <span class="block font-bold"><?= session()->get('nama_users'); ?></span>
                                <!-- <span class="pull-right auto">
                                    <i class="fa inline fa-caret-down"></i>
                                    <i class="fa none fa-caret-up"></i>
                                </span> -->
                                <?= session()->get('jabatan'); ?>
                            </a>
                        </div>
                        <div id="nav">
                            <nav ui-nav>
                                <ul class="nav">
                                    <li class="nav-header m-v-sm hidden-folded">
                                        Pendapatan
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('dashboard/keuangan') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-dashboard i-20"></i>
                                            <span class="font-normal">Dashboard</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-device-storage i-20"></i>
                                            <span class="font-normal">Pembayaran</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/data_pembayaran') ?>">Pembayaran Siswa</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/cek_pembayaran') ?>">Cek Pembayaran</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/data_transaksi') ?>">Data Transaksi</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/historis') ?>">Historis Bayar</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-file-cloud-download i-20"></i>
                                            <span class="font-normal">Tagihan</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/data_tagihan') ?>">Unggah Tagihan</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('tagihan/cek_tagihan') ?>">Cek Tagihan</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('tagihan/sekretariatan') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-av-my-library-books i-20"></i>
                                            <span class="font-normal">Sekretariat</span>
                                        </a>
                                    </li>

                                    <li class="b-b b m-v-sm"></li>
                                    <li class="nav-header m-v-sm hidden-folded">
                                        Pengeluaran
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('belanja/penjaminan_mutu') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-assessment i-20"></i>
                                            <span class="font-normal">Penjaminan Mutu</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('belanja/yayasan') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-loyalty i-20"></i>
                                            <span class="font-normal">Belanja Yayasan</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('belanja/keuangan') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-shopping-cart i-20"></i>
                                            <span class="font-normal">Belanja Keuangan</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-social-location-city i-20"></i>
                                            <span class="font-normal">Pembangunan</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/bangunan') ?>">Jenis Belanja</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/pembayaran') ?>">Bayar Bangunan</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-maps-store-mall-directory i-20"></i>
                                            <span class="font-normal">BUMY</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/catering') ?>">Belanja Catering</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/koperasi') ?>">Belanja Koperasi</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/sbs') ?>">Belanja SBS</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/air_mineral') ?>">Belanja Air Mineral</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/gasebu') ?>">Belanja Gasebu</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-social-school i-20"></i>
                                            <span class="font-normal">Sekolah</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/sekolah') ?>">Belanja Sekolah</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('belanja/pengajuan') ?>">Pengajuan Anggaran</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="b-b b m-v-sm"></li>
                                    <li class="nav-header m-v-sm hidden-folded">
                                        Laporan
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-action-track-changes i-20"></i>
                                            <span class="font-normal">Posisi Keuangan</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('laporan/laba_pendapatan') ?>">Bag. Pendapatan</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('laporan/laba_belanja') ?>">Bag. Pengeluaran</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('laporan/neraca_keuangan') ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-trending-up i-20"></i>
                                            <span class="font-normal">Neraca Keuangan</span>
                                        </a>
                                    </li>



                                    <!-- <li>
                                        <a md-ink-ripple href="#">
                                            <span>Panduan Aplikasi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="#">
                                            <span>Version v2.0.2</span>
                                        </a>
                                    </li> -->

                                </ul>
                            </nav>
                        </div>
                        <!-- <div id="account" class="hide m-v-xs">
                            <nav>
                                <ul class="nav">
                                    <li>
                                        <a md-ink-ripple href="page.profile.html">
                                            <i class="icon mdi-action-perm-contact-cal i-20"></i>
                                            <span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="page.settings.html">
                                            <i class="icon mdi-action-settings i-20"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="lockme.html">
                                            <i class="icon mdi-action-exit-to-app i-20"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                    <li class="m-v-sm b-b b"></li>
                                    <li>
                                        <div class="nav-item" ui-toggle-class="folded" target="#aside">
                                            <label class="md-check">
                                                <input type="checkbox">
                                                <i class="purple no-icon"></i>
                                                <span class="hidden-folded">Folded aside</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
            </div>
            <nav>
                <ul class="nav b-t b">
                    <li>
                        <a md-ink-ripple href="<?= base_url('login/logout'); ?>">
                            <i class="pull-right up"></i>
                            <i class="icon mdi-action-exit-to-app i-20"></i>
                            <span class="font-normal">Keluar</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
<!-- / aside -->