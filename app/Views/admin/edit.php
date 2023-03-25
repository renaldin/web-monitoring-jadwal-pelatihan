<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-sm-6">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-box-tool"><i class="fa fa-mail-reply"> Back</i></a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $key => $value) { ?>
                        <li><?= esc($value); ?></li>
                    <?php } ?>
                </ul>
                </div>
            <?php  } ?>

            <?php 
                echo form_open('admin/update/'.$pegawai['no']);
            ?>
                
                
                <div class="form-group">
                    <input type="hidden" class="form-control" name="no" placeholder="Masukkan No" value="<?= $pegawai['no']; ?>" readonly>  
                    <label for="nama">Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pegawai" value="<?= $pegawai['nama']; ?>" >
                </div>
                <div class="form-group">
                    <label for="email">Email Pegawai</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Pegawai" value="<?= $pegawai['email']; ?>" >
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="text" class="form-control" name="unit" placeholder="Masukkan Unit" value="<?= $pegawai['unit']; ?>" >
                </div>
                <div class="form-group">
                    <label for="no_pegawai">Nomor Pegawai</label>
                    <input type="number" class="form-control" name="no_pegawai" placeholder="Masukkan Nomor Pegawai" value="<?= $pegawai['no_pegawai']; ?>" >
                </div>
                <div class="form-group">
                    <label for="job_function">Job Function</label>
                    <input type="text" class="form-control" name="job_function" placeholder="Masukkan Job Function" value="<?= $pegawai['job_function']; ?>" >
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= $pegawai['tanggal_lahir']; ?>" >
                </div>
                <div class="form-group">
                    <label for="human_factor_validity">Human Factor Validity</label>
                    <input type="date" class="form-control" name="human_factor_validity" placeholder="Masukkan Human Factor Validity" value="<?= $pegawai['human_factor_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="sms_validity">SNS Validity</label>
                    <input type="date" class="form-control" name="sms_validity" placeholder="Masukkan SNS Validity" value="<?= $pegawai['sms_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="dangerous_good_validity">Dangerous Good Validity</label>
                    <input type="date" class="form-control" name="dangerous_good_validity" placeholder="Masukkan Dangerous Good Validity" value="<?= $pegawai['dangerous_good_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="fuel_tank_safety_validity">Fuel Tank Safety Validity</label>
                    <input type="date" class="form-control" name="fuel_tank_safety_validity" placeholder="Masukkan Fuel Tank Safety Validity" value="<?= $pegawai['fuel_tank_safety_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="ewis_validity">EWIS Validity</label>
                    <input type="date" class="form-control" name="ewis_validity" placeholder="Masukkan EWIS Validity" value="<?= $pegawai['ewis_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="gmf_quality_validity">GMF Quality Validity</label>
                    <input type="date" class="form-control" name="gmf_quality_validity" placeholder="Masukkan GMF Quality Validity" value="<?= $pegawai['gmf_quality_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="casr_validity">CASR Validity</label>
                    <input type="date" class="form-control" name="casr_validity" placeholder="Masukkan CASR Validity" value="<?= $pegawai['casr_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="easa_validity">EASA Validity</label>
                    <input type="date" class="form-control" name="easa_validity" placeholder="Masukkan EASA Validity" value="<?= $pegawai['easa_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="far_validity">FAR Validity</label>
                    <input type="date" class="form-control" name="far_validity" placeholder="Masukkan FAR Validity" value="<?= $pegawai['far_validity']; ?>">
                </div>
                <div class="form-group">
                    <label for="easa_part_m_validity">EASA Part M Validity</label>
                    <input type="date" class="form-control" name="easa_part_m_validity" placeholder="Masukkan EASA Part M Validity" value="<?= $pegawai['easa_part_m_validity']; ?>">
                </div>
                

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Edit</button>
            </div>
            <?php 
                echo form_close();
            ?>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-3">
        
    </div>
</div>