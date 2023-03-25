<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?> <small><?= $subtitle; ?>
    </h1>
    <br>
</section>     

<div class="row">
    <!-- data pegawai -->
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Pegawai</h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('admin/add'); ?>" class="btn btn-box-tool"><i class="fa fa-plus"> Add</i></a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                    if (session()->getFlashdata('pesanEmail')) {
                        echo '<div class="alert alert-info" role="alert">';
                        echo session()->getFlashdata('pesanEmail');
                        echo '</div>';
                    }
                ?>
                <?php 
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-info" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                ?>

                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Nama Pegawai</th>
                            <th class="text-center">Unit</th>
                            <th class="text-center">Nomor Pegawai</th>
                            <th class="text-center">Job Function</th>
                            <th class="text-center">Tanggal Lahir</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($pegawai as $p) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td class="text-center"><?= $p['unit']; ?></td>
                            <td class="text-center"><?= $p['no_pegawai']; ?></td>
                            <td class="text-center"><?= $p['job_function']; ?></td>
                            <td class="text-center"><?= $p['tanggal_lahir']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/detail/'.$p['no']); ?>" class="btn btn-info btn-sm btn-flat"><i class="fa fa-th-list"></i></a>
                                <a href="<?= base_url('admin/edit/'.$p['no']); ?>" class="btn btn-success btn-sm btn-flat"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete<?= $p['no']; ?>"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <!-- data training -->
    <div class="col-sm-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Training Pegawai</h3>

                <!-- <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Add</i></button>
                </div> -->
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Nama Pegawai</th>
                            <th class="text-center">Nomor Pegawai</th>
                            <th class="text-center">Human Factor Validity</th>
                            <th class="text-center">SMS Validity</th>
                            <th width="150px" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($pegawai as $p) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td class="text-center"><?= $p['no_pegawai']; ?></td>
                            <td class="text-center">
                              <?php 
                              $data = $p['human_factor_validity'];
                              $namaTraining = 'Human Factory Validity';
                              $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                              
                              // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                              // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                              // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                              if(date('Y-m-d') >= $data) { ?>
                                <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerah/'.$p['email'].'/'.$p['nama'].'/'.$namaTraining.'/'.$data)?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                                <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                                <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuning/'.$p['email'].'/'.$p['nama'].'/'.$namaTraining.'/'.$data)?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                                <?php } else { ?>
                                <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php 
                                $data = $p['sms_validity'];
                                $namaTraining = 'SMS Validity';
                                $kurang3bulan = date('Y-m-d', strtotime('-3 month', strtotime($data)));
                                
                                // jadi kalo 3 bulan lagi ke tanggal trainingnya maka akan dikasih warna kuring
                                // jadi kalo lebih dari atau pas tanggal trainingnya maka akan dikasih warna merah
                                // kalo masih lebih dari 3 bulan ke tanggal trainingnya maka akan dikasih warna hijau

                                if(date('Y-m-d') >= $data) { ?>
                                    <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailMerah/'.$p['email'].'/'.$p['nama'].'/'.$namaTraining.'/'.$data)?>" class="btn btn-danger btn-sm"><?= $data ?></a>
                                    <?php } else if(date('Y-m-d') >= $kurang3bulan ) { ?>
                                    <a onclick="return confirm('Apakah Anda ingin mengirim email ?')" href="<?= base_url('admin/sendEmailKuning/'.$p['email'].'/'.$p['nama'].'/'.$namaTraining.'/'.$data)?>" class="btn btn-warning btn-sm"><?= $data ?></a>
                                    <?php } else { ?>
                                    <a href="#" class="btn btn-success btn-sm"><?= $data ?></a>
                                    <?php } ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/detailTraining/'.$p['no']); ?>" class="btn btn-primary btn-sm btn-flat">Lihat Lebih Banyak</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<?php foreach ($pegawai as $p) {?>
<!-- Modal Delete -->
<div class="modal fade" id="delete<?= $p['no']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Data Pegawai</h4>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Ingin Menghapus Pegawai Yang Bernama <b><?= $p['nama']; ?> ?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/delete/'.$p['no']); ?>" class="btn btn-danger btn-flat">Delete</a>
            </div>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>