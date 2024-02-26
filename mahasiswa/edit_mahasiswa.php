<?php include ('../setting/header.php') ?>
<?php
    $npm= $_GET['npm'];
    $sql=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$npm'");
    $row = mysqli_fetch_row($sql);
    ?>
<div class="container mt-3">
<div class="row"> 
    <div class="col-md-12">
        <hr>
            <h2 class="header">Perbharui Data Mahasiswa</h2>
        <hr>
    <form action="aksi_edit_mahasiswa.php" method="post">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >NPM Mahasiswa</label>
                    <div class="col-sm-2">
                        <input type="text" name="npm" value="<?php echo $row[0] ?>" maxlength="6" readonly class="form-control" placeholder="NPM Mahasiswa" required>
                    </div>  
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Nama Mahasiswa</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama_mahasiswa" value="<?php echo $row[1] ?>" class="form-control" placeholder="Nama Mahasiswa" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Tempat Lahir</label>
                    <div class="col-sm-5">
                        <input type="text" name="tempat_lahir" value="<?php echo $row[2] ?>" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Tanggal Lahir</label>
                    <div class="col-sm-6">
                <input type="date" name="tanggal" value="<?php echo $row[3]  ?>" class="form-control" placeholder="Tanggal Lahir" required>
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