   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <div>
        <!-- fUNGSI eDIT dATA -->
        <form action="<?php echo site_url('C_Admin/aksi_editData/')?>" method="POST">
            <input type="hidden" value="<?php echo $tampil_artikel['id'];?>" name="id">
            <div>
                <div>Judul Article</div>
                <div class="form-group"><input type="text" name="judul" value="<?php echo $tampil_artikel['judul'];?>" class="form-control"></div>
            </div>
            <div>
                <div>Isi Article</div>
                <div class="form-group"><textarea class="form-control" id="" cols="30" rows="10" name="isi" value="<?php echo $tampil_artikel['isi'];?>"><?php echo $tampil_artikel['isi'];?></textarea></div>
            </div>
            <div>
                <div>Genre</div>
                <div class="form-group">
                <?php //print_r($genre) ?>
                    <select name="genre" class="form-control">
                    <!-- Genre diambil dari controller -->
                        <?php foreach ($genre as $key){?>
                        <!-- Untuk Value -->
                            <option value="<?php echo($key) ?>" <?php if(  $tampil_artikel['genre'] == $key) echo 'selected'; ?>> 
                                <?php echo($key) ?>
                            </option>
                        <?php }?>    
                    </select>
                </div>
            </div>
            <div><button class="btn btn-primary">Edit Article</button></div>
        </form>
    </div>
</body>
</html>