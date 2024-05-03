    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Dashboard</li>
                </ol>
                <h2>Dashboard</h2>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container py-2">
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
                            
                            <h4><a href="<?=base_url('mst_mahasiswa')?>">Mahasiswa</a></h4>
                            <p>
                                Menampilkan list data mahasiswa
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="<?=base_url('nilai')?>">Nilai</a></h4>
                            <p>
                                Modul input penilain ujian mahasiswa
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="<?=base_url('rpt_nilai')?>">Report</a></h4>
                            <p>
                                Report hasil penilaian mahasiswa
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container py-2">
            </div>
        </section>
        
    </main>
    <!-- End #main -->