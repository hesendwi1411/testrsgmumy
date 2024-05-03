    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li><a href="<?=base_url('mst_user')?>">Pengguna</a></li>
                </ol>
                <h2>Manajemen Data Pengguna</h2>
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
                        <div class="card">
                            <div class="card-header">
                                <a href="<?=base_url('mst_user/add')?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-plus-circle"></i> Tambah
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NIK</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Telepon</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data)) { ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($data as $key => $row) { ?>
                                                <tr>
                                                    <td><?=$no?></td>
                                                    <td><?=$row['nik']?></td>
                                                    <td><?=$row['name']?></td>
                                                    <td><?=$row['phone']?></td>
                                                    <td><?=$row['email']?></td>
                                                    <td><?=$row['address']?></td>
                                                    <td>
                                                        <div class="btn-group-sm" role="group">
                                                            <button id="btnGroupDrop<?=$no?>" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-cogs"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop<?=$no?>">
                                                                <li>
                                                                    <a class="dropdown-item" href="<?=base_url('mst_user/detail/').$row['id']?>">
                                                                        <i class="fa fa-info-circle px-1" style="color:#007bff;"></i> Detail
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="<?=base_url('mst_user/edit/').$row['id']?>">
                                                                        <i class="fa fa-edit px-1" style="color:#00695C;"></i> Edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <button type="button" class="dropdown-item" onclick=confirmDelete(<?=$row['id']?>)>
                                                                        <i class="fa fa-trash px-1" style="color: #dc3545;"></i> Hapus
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php $no++; ?>
                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <script type="text/javascript">
        var table;
        $(document).ready(function()
        {
            table = $('#table').DataTable({ 
                "paging"        : true,
                "lengthChange"  : [[10, 25, 50, -1], [10, 25, 50, 100]],
                "searching"     : true,
                "ordering"      : false,
                "info"          : true,
                "autoWidth"     : true,                
            });
        });

        function confirmDelete(id)
        {
            var hapus = confirm('Anda yakin ingin menghapus data ini ?');
            if (hapus === true) {
                window.location.href = "<?=base_url('mst_user/delete/')?>" + id;
            } else {
                return false;
            }
        }
    </script>