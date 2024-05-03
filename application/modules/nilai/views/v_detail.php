    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="<?=@$url_back?>">Pengguna</a></li>
                    <li><a href="<?=@$url_refresh?>"><?=@$title_breadcrumb?></a></li>
                </ol>
                <h2>Detail Data Pengguna</h2>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container py-2">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user-tie"></i> Data Pengguna
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="20%">NIK</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['nik']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Nama</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['name']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Username</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['username']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Group</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['group_name']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Jenis Kelamin</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['gender']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Email</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['email']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Telepon</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['phone']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Alamat</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['address']?></td>
                                            </tr>
                                            <tr>
                                                <td width="20%">Status</td>
                                                <td width="1%">:</td>
                                                <td><?=@$detail['status']?></td>
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