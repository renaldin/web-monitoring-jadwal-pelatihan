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
                <span style="font-size:25px;"><b>Data Training Pegawai</b></span><br>
            </div>
            <hr>
            <?php 
                    if (session()->getFlashdata('pesanEmail')) {
                        echo '<div class="alert alert-info" role="alert">';
                        echo session()->getFlashdata('pesanEmail');
                        echo '</div>';
                    }
                ?>
            <!-- /.box-header -->
            <div class="box-body">
               <table class="table table-bordered">
                   <tr>
                       <th width="200px">Nomor Pegawai</th>
                       <td width="20px">:</td>
                       <td><?= $pegawai['no_pegawai']; ?></td>
                   </tr>
                   <tr>
                       <th width="200px">Nama Pegawai</th>
                       <td width="20px">:</td>
                       <td><?= $pegawai['nama']; ?></td>
                   </tr>
                   <tr>
                       <th></th>
                       <td></td>
                       <td></td>
                    </tr>
                    <tr>
                        <th>Human Factor Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['human_factor_validity'];
                            $namaTraining = 'Human Factory Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>SMS Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['sms_validity'];
                            $namaTraining = 'SMS Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Dangerous Good Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['dangerous_good_validity'];
                            $namaTraining = 'Dangerous Good Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Fuel Tank Safety Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['fuel_tank_safety_validity'];
                            $namaTraining = 'Fuel Tank Safety Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>EWIS Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['ewis_validity'];
                            $namaTraining = 'EWIS Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>GMF Quality Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['gmf_quality_validity'];
                            $namaTraining = 'GMF Quality Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>CASR Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['casr_validity'];
                            $namaTraining = 'CASR Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>EASA Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['easa_validity'];
                            $namaTraining = 'EASA Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>FAR Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['far_validity'];
                            $namaTraining = 'FAR Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>EASA Part M Validity</th>
                        <td>:</td>
                        <td>
                            <?php 
                            $data = $pegawai['easa_part_m_validity'];
                            $namaTraining = 'EASA Part M Validity';
                            $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                            
                            // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                            // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                            // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                            if(date('Y-m-d') >= $data) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerahDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                            <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                            <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuningDetail/'.$pegawai['email'].'/'.$pegawai['nama'].'/'.$namaTraining.'/'.$data.'/'.$pegawai['no'])?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                            <?php } ?>
                        </td>
                    </tr>
               </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>