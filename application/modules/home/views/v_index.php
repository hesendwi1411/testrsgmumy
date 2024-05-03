	<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background: url(<?=base_url()?>global-assets/img/slide/slide_4.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Welcome to <span>Company</span>
                                </h2>
                                <h5 class="animate__animated animate__fadeInUp">
                                    Lorem Ipsum Dolor
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background: url(<?=base_url()?>global-assets/img/slide/slide_3.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Welcome to <span>Company</span>
                                </h2>
                                <h5 class="animate__animated animate__fadeInUp">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background: url(<?=base_url()?>global-assets/img/slide/slide_1.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    Welcome to <span>Company</span>
                                </h2>
                                <h5 class="animate__animated animate__fadeInUp">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <?php if ($this->session->flashdata('message') != '') { ?>
                        <div class="alert <?=$this->session->flashdata('message')["alert"]; ?>">
                            <i class="<?=$this->session->flashdata('message')["icon"]; ?>"></i>
                            <?=$this->session->flashdata('message')["pesan"]; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4><a href="http://localhost/dev/app_2/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Lorem Ipsum</a></h4>
                            <p>
                                Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="http://localhost/dev/app_1/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Sed ut perspiciatis</a></h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="http://localhost/dev/app_2/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Magni Dolores</a></h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4><a href="http://localhost/dev/app_1/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Nemo Enim</a></h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4><a href="http://localhost/dev/app_2/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Dele cardo</a></h4>
                            <p>
                                Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4><a href="http://localhost/dev/app_1/authentication?token=<?=@$this->session->userdata('token')?>" target="_blank">Divera don</a></h4>
                            <p>
                                Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
    </main>