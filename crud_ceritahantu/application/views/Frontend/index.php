<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
</head>
<body>

<div class="card">
  <h5 class="card-header">Halaman User</h5>
  <div class="card-body">
    <!-- LogOut Ke Controller -->
    <div>
        <a href="<?php echo site_url('C_User/index') ?>" class="btn btn-danger">Log Out</a>
    </div>
    <!-- Cari Data -->
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="cari..">
                    
                    <div class="input-group-append">
                    <button class="btn btn-primary">Cari</button>
                    <a style="margin-left:10px" href="<?php echo site_url('C_Admin/halaman_user') ?>" class="btn btn-info">Reset Pencarian</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <!-- Form Cerita -->
    <br>
    <div>
        <h3>List Cerita</h3>
    </div>

    <div class="card" style="width: 18rem;">
        <ul class="list-group">
            <?php foreach($tampil_artikel as $tampil) { ?>
            
            <li class="list-group-item">
                <?php echo $tampil['judul']; ?>
                <div>
                    <div>
                        <a href="<?php echo site_url('C_Admin/detail_cerita_frontend/'. $tampil['id']) ?>">
                        Baca Sekarang
                        </a>
                    </div>
                </div>
            </li>

            <?php } ?>   
        </ul>
    </div>
    
  </div>
</div>
   

</body>
</html>