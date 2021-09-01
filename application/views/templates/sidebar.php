<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/img/profile/') . $nama['image']; ?>" class="user-image img-circle elevation-2 alt=" User Image">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="<?= base_url('assets/img/profile/') . $nama['image']; ?>" class="img-circle elevation-2" alt="User Image">

                    <p>
                        <?= $nama['nama_user']; ?>
                        <small> <?= $nama['role_id']; ?></small>
                    </p>
                </li>
                <!-- Menu Footer -->
                <li class="user-footer">
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-start">
                            <a type="button" class="btn btn-info" href="<?= base_url('user/index'); ?>">
                                Profil
                            </a>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <a type="button" class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">
                                Logout
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="<?= base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Minimart</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <!-- Start Dashboard -->
                    <li class="nav-item">
                        <a href="<?= base_url('supervisor'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!-- End Dashboard -->
                <?php endif; ?>

                <?php if ($this->session->userdata('role_id') == 3) : ?>
                    <!-- Start Dashboard -->
                    <li class="nav-item">
                        <a href="<?= base_url('gudang'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <!-- End Dashboard -->
                <?php endif; ?>


                <!-- Start User -->
                <li class="nav-item">
                    <a type="button"" class=" nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview small ml-1">
                        <li class="nav-item">
                            <a href="<?= base_url('user'); ?>" class="nav-link">
                                <i class="fas fa-user-check nav-icon"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/editProfil'); ?>" class="nav-link">
                                <i class="fas fa-user-edit nav-icon"></i>
                                <p>Edit profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/gantiPassword'); ?>" class="nav-link">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Ganti password</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End User -->

                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <!-- Start Pembukuan -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Pembukuan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('supervisor/j_penjualan'); ?>" class="nav-link">
                                    <i class="fas fa-file-invoice-dollar nav-icon"></i>
                                    <p>Jurnal penjualan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('supervisor/j_pembelian'); ?>" class="nav-link">
                                    <i class="fas fa-file-invoice-dollar nav-icon"></i>
                                    <p>Jurnal pembelian</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('supervisor/j_retur'); ?>" class="nav-link">
                                    <i class="fas fa-file-invoice nav-icon"></i>
                                    <p>Jurnal retur</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Pembukuan -->

                    <!-- Start Rangkuman Bisnis -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>
                                Rangkuman Bisnis
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('menu/barangTerlaris'); ?>" class="nav-link">
                                    <i class="fas fa-chart-line nav-icon"></i>
                                    <p>Barang terlaris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('menu/waktuTerpadat'); ?>" class="nav-link">
                                    <i class="fas fa-business-time nav-icon"></i>
                                    <p>Waktu terpadat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('menu/wishlist'); ?>" class="nav-link">
                                    <i class="fas fa-clipboard-list nav-icon"></i>
                                    <p>Wishlist</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('menu/listPemesanan'); ?>" class="nav-link">
                                    <i class="fas fa-list-alt nav-icon"></i>
                                    <p>List Pemesanan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Rangkuman Bisnis -->

                    <!-- Start Promo -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-percent"></i>
                            <p>
                                Promo
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('Supervisor/promo'); ?>" class="nav-link">
                                    <i class="fas fa-info-circle nav-icon"></i>
                                    <p>Info promo</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Supervisor/tenPromo'); ?>" class="nav-link">
                                    <i class="fas fa-tags nav-icon"></i>
                                    <p>Tentukan promo</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Promo -->
                <?php endif; ?>

                <?php if (($this->session->userdata('role_id') == 1) || ($this->session->userdata('role_id') == 3)) : ?>
                    <!-- Start Gudang -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>
                                Gudang
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('gudang/infoStok'); ?>" class="nav-link">
                                    <i class="fas fa-info-circle nav-icon"></i>
                                    <p>Info stok</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('gudang/inputBarang'); ?>" class="nav-link">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>Input barang</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('gudang/infoSupplier'); ?>" class="nav-link">
                                    <i class="fas fa-address-card nav-icon"></i>
                                    <p>Info supplier</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Gudang -->
                <?php endif; ?>

                <?php if ($this->session->userdata('role_id') == 1) : ?>
                    <!-- Start Pegawai -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Pegawai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('supervisor/infoPegawai'); ?>" class="nav-link">
                                    <i class="fas fa-info-circle nav-icon"></i>
                                    <p>Info pegawai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('supervisor/registration'); ?>" class="nav-link">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Tambah pegawai</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Pegawai -->
                <?php endif; ?>


                <?php if (($this->session->userdata('role_id') == 1) || ($this->session->userdata('role_id') == 2)) : ?>
                    <!-- Start kasir -->
                    <li class="nav-item">
                        <a type="button" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Transaksi
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview small ml-1">
                            <li class="nav-item">
                                <a href="<?= base_url('kasir'); ?>" class="nav-link">
                                    <i class="fas fa-cash-register nav-icon"></i>
                                    <p>Penjualan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasir/wishlist'); ?>" class="nav-link">
                                    <i class="fas fa-clipboard-list nav-icon"></i>
                                    <p>Wishlist</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasir/returment'); ?>" class="nav-link">
                                    <i class="fas fa-undo nav-icon"></i>
                                    <p>Returment</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End kasir -->
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</aside>