<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid  mx-3">
        <img src="<?php echo base_url() ?>assets/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
        <p style="color: #fff;">Cari-Kerja.site</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?php if ($active === 'home') : ?>active<?php endif; ?>" aria-current="page" href="<?= base_url() ?>welcome">Home</a>
                    <!-- active -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lowongan</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>welcome/kategori" class="nav-link <?php if ($active === 'kategori') : ?>active<?php endif; ?>">Kategori</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>welcome/subKategori" class="nav-link <?php if ($active === 'subKategori') : ?>active<?php endif; ?>" class="nav-link">Sub Kategori</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cari</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Indek</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url() ?>/assets/img/user.png" width="25" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">USER</a></li>
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Ganti Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>login/doLogout">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>