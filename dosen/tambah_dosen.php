<?php include ('../setting/header.php') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <hr>
            <h2 class="header">Tambah Dosen</h2>
        <hr>
            <form action="aksi_tambah_dosen.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >NIDN</label>
            <div class="col-sm-2">
                <input type="text" name="nidn" value="" class="form-control" minlength="6" maxlength="6" placeholder="Nomor Induk Dosen" required>
            </div>  
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Nama Dosen</label>
            <div class="col-sm-4">
                <input type="text" name="nama_dosen" value="" class="form-control" placeholder="Nama Dosen" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Jenis Kelamin</label>
            <div class="col-sm-2">
                <select class="custom-select" id="jk" name="jk">
                    <option selected>Pilih</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Kontak</label>
            <div class="col-sm-6">
                <input type="kontak" name="kontak" value="" class="form-control" placeholder="Kontak" required>
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