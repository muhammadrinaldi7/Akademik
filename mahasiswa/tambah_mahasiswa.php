<?php include ('../setting/header.php') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <hr>
            <h2 class="header">Tambah Dosen</h2>
        <hr>
            <form action="aksi_tambah_mahasiswa.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >NPM</label>
            <div class="col-sm-2">
                <input type="text" name="npm" value="" class="form-control" minlength="8" maxlength="8" placeholder="NPM" required>
            </div>  
            </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Nama Mahasiswa</label>
            <div class="col-sm-4">
                <input type="text" name="nama_mahasiswa" value="" class="form-control" placeholder="Nama Mahasiswa" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Tempat Lahir</label>
            <div class="col-sm-6">
                <input type="text" name="tempat_lahir" value="" class="form-control" placeholder="Tempat Lahir" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Tanggal Lahir</label>
            <div class="col-sm-6">
                <input type="date" name="tanggal" value="" class="form-control" placeholder="Tanggal Lahir" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="Simpan">Tambahkan</button>
                <button type="reset" class="btn btn-warning" value="Reset">Reset</button>
                <button class="btn btn-danger" onclick="history.back()">Kembali</button>
            </div>
        </div>
                </form>
        </div>
    </div>
</div>