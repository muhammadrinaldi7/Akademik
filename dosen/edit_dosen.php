<?php include ('../setting/header.php') ?>
<?php
    $nidn= $_GET['nidn'];
    $sql=mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$nidn'");
    $row = mysqli_fetch_row($sql);
    ?>
<div class="container mt-3">
<div class="row"> 
    <div class="col-md-12">
        <hr>
            <h2 class="header">Perbharui Data Dosen</h2>
        <hr>
    <form action="aksi_edit_dosen.php" method="post">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >NIDN Dosen</label>
                    <div class="col-sm-2">
                        <input type="text" name="nidn" value="<?php echo $row[0] ?>" maxlength="6" readonly class="form-control" placeholder="NIDN Dosen" required>
                    </div>  
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Nama Dosen</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama_dosen" value="<?php echo $row[1] ?>" class="form-control" placeholder="Nama Dosen" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Jenis Kelamin</label>
                    <div class="col-sm-2">
                        <select class="custom-select" name="jk">
                            <option selected><?php echo $row[2] ?></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Kontak</label>
                    <div class="col-sm-5">
                        <input type="number" name="kontak" value="<?php echo $row[3] ?>" class="form-control" placeholder="Kontak" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label" >Tanggal Lahir</label>
                    <div class="col-sm-6">
                <input type="date" name="tanggal" value="<?php echo $row[5]  ?>" class="form-control" placeholder="Tanggal Lahir" required>
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