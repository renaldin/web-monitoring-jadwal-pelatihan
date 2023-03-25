<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<div class="container">
    <div class="row row justify-content-center align-items-center" style="margin-top:45px">
        <div class="col-md-10 col-md-offset-4">
            <h4>Profile</h4><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td><?= ucfirst($userInfo['nama']); ?></td>
                            <td><?= $userInfo['email'] ?></td>
                            <td><a href="<?= site_url('auth/logout'); ?>">Logout</a></td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>