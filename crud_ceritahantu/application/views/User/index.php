<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
    
    <div class="card">
        <div class="card-header">
            Halaman Login
        </div>
        <div class="card-body">
            <div style="padding:100px">
                <form action="<?php echo site_url('C_User/proses_login');?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input class="form-control" placeholder="Masukan Username"name="uname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" placeholder="Masukan Password" name="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>