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
  <h5 class="card-header">Halaman Admin</h5>
  <div class="card-body">
    <!-- Tambah Data  -->
    <div>
        <div>
            <a href="<?php echo site_url('C_Admin/form_tambah') ?>" class="btn btn-primary">Tambah Data</a>
            <a href="<?php echo site_url('C_User/logout') ?>" style="margin-left : 20px" class="btn btn-danger">Log Out</a>
         </div>
    </div>
    <!-- Cari Data -->
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="cari..">
                    
                    <div class="input-group-append">
                    <button class="btn btn-primary">Cari</button>
                    <a style="margin-left:10px" href="<?php echo site_url('C_Admin') ?>" class="btn btn-info">Reset Pencarian</a>
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
                        <a href="<?php echo site_url('C_Admin/detail_cerita/'. $tampil['id']) ?>">
                        Baca Sekarang
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href="<?php echo site_url('C_Admin/form_editData/'. $tampil['id']) ?>">
                        Edit Data
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href="<?php echo site_url('C_Admin/hapus_data/'.$tampil['id']) ?>">
                        Hapus Data
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