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
                                            <select class="form-control" name="nim" id="nim">
                                                <option value="">-- Pilih NIM --</option>
                                                <?Php foreach($mahasiswa as $data) {?>
                                                <option value="<?= $data->mahasiswa_id ?>" <?php if($data->mahasiswa_id==@$detail['nilai_mahasiswa_id']) echo 'selected'; ?>><?= $data->mahasiswa_nim.' - '. $data->mahasiswa_nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="nama" maxlength="200" value="" placeholder="Nama">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Ujian A</label>
                                            <input type="text" class="form-control" name="nilai_ujian_a" id="nilai_ujian_a" maxlength="3" value="<?=@$detail['nilai_ujian_a']?>">
                                        </div>
                                        <input type="hidden" name="nilai_bobot_a" id="nilai_bobot_a" value="0" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Ujian B</label>
                                            <input type="text" class="form-control" name="nilai_ujian_b" id="nilai_ujian_b" maxlength="3" value="<?=@$detail['nilai_ujian_b']?>">
                                        </div>
                                        <input type="hidden" name="nilai_bobot_b" id="nilai_bobot_b" value="0" readonly>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-label">Nilai Rata Rata</label>
                                            <input type="text" class="form-control" name="nilai_rata_rata" id="nilai_rata_rata" value="<?=@$detail['nilai_rata_rata']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-label">Grade</label>
                                            <input type="text" class="form-control" name="nilai_grade" id="nilai_grade" value="<?=@$detail['nilai_grade']?>" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <input type="hidden" name="nilai_total" id="nilai_total" value="<?=@$detail['nilai_total']?>" readonly>
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
            $('select[name="nim"]').val('<?=$this->session->flashdata('data')["nilai_mahasiswa_id"];?>');
            $('input[name="nilai_ujian_a"]').val('<?=$this->session->flashdata('data')["nilai_ujian_a"];?>');
            $('input[name="nilai_ujian_b"]').val('<?=$this->session->flashdata('data')["nilai_ujian_b"];?>');
            $('input[name="nilai_grade"]').val('<?=$this->session->flashdata('data')["nilai_grade"];?>');
            $('input[name="nilai_rata_rata"]').val('<?=$this->session->flashdata('data')["nilai_rata_rata"];?>');
        });
    </script>
    <?php } ?>
    
    <script type="text/javascript">
        var nim = $('select[name="nim"]').val();
        if (nim != '') {
            url = "<?php echo base_url('nilai/json_mahasiswa') ?>/" + $('#nim').val();
                $.getJSON(url, function(response) {
                    $.each(response, function(key, entry) {
                        $('#nama').val(entry.mahasiswa_nama);
                    });
                    
                });
        } 
        /**
         * Update NIM
         *
         */
        $('#nim').on('change', function ()
        {
            if($(this).val() != '') {
                url = "<?php echo base_url('nilai/json_mahasiswa') ?>/" + $('#nim').val();
                $.getJSON(url, function(response) {
                    $.each(response, function(key, entry) {
                        $('#nama').val(entry.mahasiswa_nama);
                    });
                    
                });
            }
            
        });

        /**
         * Incoterm on Change
         *
         */
        $('#nilai_ujian_a').on('change', function ()
        {
            var nilai_ujian_a = document.getElementById('nilai_ujian_a');
            var nilai_ujian_b = document.getElementById('nilai_ujian_b');
            var nilai_rata_rata = document.getElementById('nilai_rata_rata');
            var nilai_bobot_a = document.getElementById('nilai_bobot_a');
            var nilai_bobot_b = document.getElementById('nilai_bobot_b');
            var total = document.getElementById('nilai_total');
            var grade = document.getElementById('nilai_grade');

            nilai_bobot_a.value =(40/100) * parseFloat(nilai_ujian_a.value);

            if (nilai_ujian_b.value =='' || nilai_ujian_b.value == null || nilai_ujian_b.value ==0) {
                nilai_ujian_b.value =parseFloat("0");
                nilai_bobot_b.value =parseFloat("0");
            }else{
                nilai_bobot_b.value =(60/100) * parseFloat(nilai_ujian_b.value);
            }
            
            nilai_rata_rata.value = parseFloat(nilai_bobot_a.value) + parseFloat(nilai_bobot_b.value);
            total.value = parseFloat(nilai_ujian_a.value) + parseFloat(nilai_ujian_b.value);

            if (nilai_rata_rata.value >= 81 ) {
                grade.value ='A';
            } else if (nilai_rata_rata.value >= 61 && nilai_rata_rata.value <= 80){
                grade.value ='B'; 
            } else if (nilai_rata_rata.value >= 41 && nilai_rata_rata.value <= 60){
                grade.value ='C'; 
            } else if (nilai_rata_rata.value >= 21 && nilai_rata_rata.value <= 40){
                grade.value ='D'; 
            }else{
                grade.value ='E'; 
            }
            $('#nilai_rata_rata').val(nilai_rata_rata.value);
            $('#nilai_total').val(total.value);
            $('#nilai_grade').val(grade.value);
        });
        /**
         * Incoterm on Change
         *
         */
        $('#nilai_ujian_b').on('change', function ()
        {
            var nilai_ujian_a = document.getElementById('nilai_ujian_a');
            var nilai_ujian_b = document.getElementById('nilai_ujian_b');
            var nilai_rata_rata = document.getElementById('nilai_rata_rata');
            var nilai_bobot_a = document.getElementById('nilai_bobot_a');
            var nilai_bobot_b = document.getElementById('nilai_bobot_b');
            var total = document.getElementById('nilai_total');
            var grade = document.getElementById('nilai_grade');

            nilai_bobot_b.value =(60/100) * parseFloat(nilai_ujian_b.value);

            if (nilai_ujian_a.value =='' || nilai_ujian_a.value == null || nilai_ujian_a.value ==0) {
                nilai_ujian_a.value =parseFloat("0");
                nilai_bobot_a.value =parseFloat("0");
            }else{
                nilai_bobot_a.value =(40/100) * parseFloat(nilai_ujian_a.value);
            }
            
            nilai_rata_rata.value = parseFloat(nilai_bobot_a.value) + parseFloat(nilai_bobot_b.value);
            total.value = parseFloat(nilai_ujian_a.value) + parseFloat(nilai_ujian_b.value);

            if (nilai_rata_rata.value >= 81 ) {
                grade.value ='A';
            } else if (nilai_rata_rata.value >= 61 && nilai_rata_rata.value <= 80){
                grade.value ='B'; 
            } else if (nilai_rata_rata.value >= 41 && nilai_rata_rata.value <= 60){
                grade.value ='C'; 
            } else if (nilai_rata_rata.value >= 21 && nilai_rata_rata.value <= 40){
                grade.value ='D'; 
            }else{
                grade.value ='E'; 
            }
            $('#nilai_rata_rata').val(nilai_rata_rata.value);
            $('#nilai_total').val(total.value);
            $('#nilai_grade').val(grade.value);
        });
    </script>
    