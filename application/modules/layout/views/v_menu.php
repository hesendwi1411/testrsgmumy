    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="<?=base_url('home')?>"><?=$company?></a></h1>
                <!-- <a href="<?=base_url('home')?>">
                    <img src="<?=base_url()?>global-assets/img/logo.png" alt="" class="img-fluid">
                </a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a class="" href="<?=base_url('home')?>">Beranda</a></li> -->
                    <!-- <li class="dropdown">
                        <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
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