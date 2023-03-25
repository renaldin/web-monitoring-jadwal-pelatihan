<!-- judul -->
<section class="content-header">
    <h1>
        <?= $title; ?></a>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
        <div class="box box-primary box-solid">
            <div class="text-center">
                <img class="img-circle" style="margin-top: 50px;" width="150px" height="150px" src="<?= base_url('foto/'. session()->get('avatar')); ?>" alt="Foto" srcset=""><br><br>
                <span class="trxt-center"><b><?= session()->get('nama') ?></b></span>
            </div>
            <table class="table table-bordered">
                <tr>    
                    <th width="150px">Email</th>
                    <td width="20px">:</td>
                    <td><?= session()->get('email') ?></td>
                </tr>
                <tr>    
                    <th width="150px">Role</th>
                    <td width="20px">:</td>
                    <td><?php if(session()->get('role') == 1){
                        echo 'User';
                    } else {
                        echo 'Admin';
                    }?></td>
                </tr>
            </table>
            <!-- /.box-header -->
            <div class="box-body">
               
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>