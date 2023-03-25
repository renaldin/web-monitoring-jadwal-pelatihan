<!-- judul -->
<section class="content-header">
    <h1>
        <a class="btn btn-primary" href="<?= base_url('admin/dashboard')?>"><?= $title; ?></a>
        
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="text-center">
                <span style="font-size:25px;"><b>Nomor Pegawai</b></span><br>
                <span style="font-size:20px;"><?= $pegawai['no_pegawai']; ?></span>
            </div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
               <table class="table table-bordered">
                   <tr>
                       <th width="200px">Nama Pegawai</th>
                       <td width="20px">:</td>
                       <td><?= $pegawai['nama']; ?></td>
                   </tr>
                   <tr>
                       <th width="200px">Email Pegawai</th>
                       <td width="20px">:</td>
                       <td><?= $pegawai['email']; ?></td>
                   </tr>
                   <tr>
                       <th>Unit</th>
                       <td>:</td>
                       <td><?= $pegawai['unit']; ?></td>
                   </tr>
                   <tr>
                       <th>Job Function</th>
                       <td>:</td>
                       <td><?= $pegawai['job_function']; ?></td>
                   </tr>
                   <tr>
                       <th>Tanggal Lahir</th>
                       <td>:</td>
                       <td><?= $pegawai['tanggal_lahir']; ?></td>
                   </tr>
                   <tr>
                       <th></th>
                       <td></td>
                       <td></td>
                    </tr>
                    <tr>
                        <th>Human Factor Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['human_factor_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>SMS Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['sms_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>Dangerous Good Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['dangerous_good_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>Fuel Tank Safety Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['fuel_tank_safety_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>EWIS Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['ewis_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>GMF Quality Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['gmf_quality_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>CASR Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['casr_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>EASA Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['easa_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>FAR Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['far_validity']; ?></td>
                    </tr>
                    <tr>
                        <th>EASA Part M Validity</th>
                        <td>:</td>
                        <td><?= $pegawai['easa_part_m_validity']; ?></td>
                    </tr>
               </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>