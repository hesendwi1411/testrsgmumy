    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="<?=base_url('home')?>"><?=$company?></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="" href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a class="" href="<?=base_url('dashboard')?>">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Master Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?=base_url('mst_user')?>">Pengguna</a></li>
                            <li><a href="<?=base_url('mst_mahasiswa')?>">Mahasiswa</a></li>
                        </ul>
                        
                    </li>
                    <?php if(empty($this->session->userdata('user_id'))) { ?>
                    <li>
                        <a href="<?=base_url('login')?>" class="getstarted">
                            <i class="fa fa-sign-in-alt" style="padding-right: 4px;"></i> Masuk
                        </a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="<?=base_url('login/logout')?>" class="getstarted-out">
                            <i class="fa fa-sign-out-alt" style="padding-right: 4px;"></i> Keluar
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <!-- End Header -->