<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <div class="card">
    <h5 class="card-header">Halaman Tambah Data</h5>
    <div class="card-body">
    <form action="<?php echo site_url('C_Admin/aksi_tambah') ?>" method="POST">
        <div>
            <div>Judul Article</div>
            <div class="form-group">
                <input type="text" name="judul" class="form-control">
                
            </div>
        </div>
        <div>
            <div>Isi Article</div>
                <div class="form-group">
                    <textarea id="" cols="30" rows="10" name="isi" class="form-control"></textarea>
                </div>
            </div>
        <div>
            <div>Genre</div>
            <div class="form-group">
            <?php //print_r($genre) ?>
                <select name="genre" class="form-control">
                <!-- Genre diambil dari controller -->
                    <?php foreach ($genre as $key){?>
                    <!-- Untuk Value -->
                    <option value="<?php echo($key) ?>"> 
                     <?php echo($key) ?>
                    </option>
                    
                    <?php }?>    
                </select>
                </div>
            </div>
            <div><button class="btn btn-primary">Tambah Article</button></div>
        </form>
    </div>
    </div>
    <div>
        
    </div>
</body>
</html>