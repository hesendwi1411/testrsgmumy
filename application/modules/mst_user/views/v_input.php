    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="<?=@$url_back?>">Pengguna</a></li>
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" maxlength="20" value="<?=@$detail['username']?>" <?=(@$detail['username'] != '') ? 'readonly' : null;?>>
                                        </div>
                                    </div>
                                    <?php if (empty($detail['id'])) { ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" maxlength="20">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Group</label>
                                            <select class="form-control" name="group">
                                                <option value="">Pilihan</option>
                                                <?php if(!empty($group)) { ?>
                                                <?php foreach($group as $value) { ?>
                                                <option value="<?=$value['id']?>"
                                                <?=(@$detail['group_id']==$value['id']) ? 'selected' : null;?>>
                                                    <?=$value['text']?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">NIK</label>
                                            <input type="text" class="form-control" name="nik" maxlength="16" value="<?=@$detail['nik']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="fullname" maxlength="200" value="<?=@$detail['name']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <select class="form-control" name="gender">
                                                <option value="">PILIHAN</option>
                                                <?php if(!empty($gender)) { ?>
                                                <?php foreach($gender as $value) { ?>
                                                <option value="<?=$value['text']?>"
                                                <?=(@$detail['gender']==$value['text']) ? 'selected' : null;?>>
                                                    <?=$value['text']?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" value="<?=@$detail['email']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Telepon</label>
                                            <input type="text" class="form-control" name="phone" maxlength="15" value="<?=@$detail['phone']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Status</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_1" value="Y" <?=(@$detail['status']=='Y') ? 'checked' : null;?>>
                                                <label class="form-check-label" for="status_1">Aktif</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status_2" value="N" <?=(@$detail['status']=='N') ? 'checked' : null;?>>
                                                <label class="form-check-label" for="status_2">Tidak Aktif</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" name="address"><?=@$detail['address']?></textarea>
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