    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="<?=@$url_back?>">Penilaian</a></li>
                    <li><a href="<?=@$url_refresh?>"><?=@$title_breadcrumb?></a></li>
                </ol>
                <h2>Detail Data Penilaian</h2>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container py-2">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user-tie"></i> Data Penilaian
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="20%">NIM</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['mahasiswa_nim']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Nama</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['mahasiswa_nama']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Nilai Ujian A</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['nilai_ujian_a']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Nilai Ujian b</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['nilai_ujian_b']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Nilai Rata-Rata</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['nilai_rata_rata']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Grade</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['nilai_grade']?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-grid gap-2">
                                    <a href="<?=@$url_back?>" class="btn btn-md btn-primary">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>