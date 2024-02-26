<?php include ('../setting/header.php') ?>
<?php
    $kode= $_GET['kode'];
    $sql=mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE kode='$kode'");
    $row = mysqli_fetch_row($sql);
    ?>
<div class="container mt-3">
<div class="row"> 
    <div class="col-md-12">
        <hr>
            <h2 class="header">Perbharui Data Matakuliah</h2>
        <hr>
    <form action="aksi_edit_mk.php" method="post">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Kode Matakuliah</label>
                    <div class="col-sm-2">
                        <input type="text" name="kode" value="<?php echo $row[0] ?>" maxlength="6" readonly class="form-control" placeholder="Kode Matakuliah" required>
                    </div>  
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Nama Matakuliah</label>
                    <div class="col-sm-4">
                        <input type="text" name="matakuliah" value="<?php echo $row[1] ?>" class="form-control" placeholder="Matakuliah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" >SKS</label>
                    <div class="col-sm-2">
                       <input type="number" value="<?=$row[2]?>" required min="1" max="8" class="form-control" name="sks">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2"> &nbsp; </label>
                        <button type="submit" class="btn btn-primary" value="Update">Update</button>
                        <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
                    </div>
    </form>
    </div>
</div>
</div>