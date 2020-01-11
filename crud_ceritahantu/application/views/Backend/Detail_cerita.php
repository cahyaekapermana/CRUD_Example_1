<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Cerita</title>
</head>
<body>
    <div class="card">
    <h5 class="card-header">
        Halaman Cerita
        <a style="margin-left:1120px" href="<?php echo site_url('C_Admin') ?>" class="btn btn-primary">Back</a>
    </h5>
        <div class="card-body">
            <div> 
                <h3><?php echo $tampil_artikel['judul'];?></h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <?php echo $tampil_artikel['isi'];?>
                    </div>
                    <div style="margin-top:10px ">
                        Genre Cerita : <b><?php echo $tampil_artikel['genre'];?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>