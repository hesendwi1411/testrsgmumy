    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="<?=@$url_back?>">Penilaian</a></li>
                    <li><a href="<?=@$url_refresh?>"><?=@$title_breadcrumb?></a></li>
                </ol>
                <h2><?=@$title_header?></h2>
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
                    <div class="col-lg-12">
                        <form method="POST" action="<?=@$url_action?>">
                        <div class="card py-3">
                            <div class="card-body">
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nomor Induk Mahasiswa</label>
                                            <select class="form-control" name="nim">
                                                <option value="">-- Pilih NIM --</option>
                                                <?Php foreach($mahasiswa as $data) {?>
                                                <option value="<?= $data->mahasiswa_id ?>"><?= $data->mahasiswa_nim.' - '. $data->mahasiswa_nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" maxlength="200" value="">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Ujian A</label>
                                            <input type="text" class="form-control" name="nilai_ujian_a" maxlength="3" value="<?=@$detail['nilai_ujian_a']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Ujian B</label>
                                            <input type="text" class="form-control" name="nilai_ujian_b" maxlength="3" value="<?=@$detail['nilai_ujian_b']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Rata Rata</label>
                                            <input type="text" class="form-control" name="nilai_rata_rata" value="<?=@$detail['nilai_rata_rata']?>" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <input type="hidden" name="id" value="<?=@$detail['id']?>" readonly>
                            <div class="card-footer">
                                <div class="row py-3">
                                    <div class="col-md-6">
                                        <div class="d-grid gap-2">
                                            <a href="<?=@$url_back?>" class="btn btn-md btn-danger">
                                                <i class="fa fa-times-circle"></i> Batal
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-md btn-success">
                                                <i class="fa fa-check-circle"></i> Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <?php if ($this->session->flashdata('data') != '') { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="username"]').val('<?=$this->session->flashdata('data')["username"];?>');
            $('input[name="password"]').val('<?=$this->session->flashdata('data')["password"];?>');
            $('select[name="group"]').val('<?=$this->session->flashdata('data')["group"];?>');
            $('input[name="nik"]').val('<?=$this->session->flashdata('data')["nik"];?>');
            $('input[name="fullname"]').val('<?=$this->session->flashdata('data')["fullname"];?>');
            $('select[name="gender"]').val('<?=$this->session->flashdata('data')["gender"];?>');
            $('input[name="phone"]').val('<?=$this->session->flashdata('data')["phone"];?>');
            $('input[name="email"]').val('<?=$this->session->flashdata('data')["email"];?>');
            $('textarea[name="address"]').val('<?=$this->session->flashdata('data')["address"];?>');
        });
    </script>
    <?php } ?>