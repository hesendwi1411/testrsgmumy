    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Masuk</li>
                </ol>
                <h2>Silahkan masuk untuk memulai sesi anda</h2>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container py-3">
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
                <form method="POST" action="<?=base_url('login/do_login')?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-grid gap-2">
                        <button type="submit" class="btn btn-md btn-success">
                            <i class="fa fa-sign-in"></i> Masuk
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container py-2">
            </div>
        </section>
        
    </main>
    <!-- End #main -->