<?php include ('../setting/header.php') ?>
        <hr>
            <h2>Tambah Matakuliah</h2>
        <hr>
            <form action="aksi_tambah_mk.php" method="post">
            <div class="form-group row">
                <label class="col-sm-3 control-label" >Kode Matakuliah</label>
            <div class="col-sm-2">
                <input type="text" name="kode" value="" maxlength="6" class="form-control" placeholder="Kode Matakuliah" required>
            </div>  
        </div>
        <div class="form-group row">
            <label class="col-sm-3 control-label" >Matakuliah</label>
            <div class="col-sm-4">
                <input type="text" name="matakuliah" value="" class="form-control" placeholder="Matakuliah" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 control-label" >SKS</label>
            <div class="col-sm-2">
                <select class="custom-select" id="sks" name="sks">
                    <option selected>Pilih</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3" control-label> &nbsp; </label>
            <div class="col-sm-6">
                <button type="submit" name="tambah" class="btn btn-sm btn-primary" value="Simpan">Tambahkan</button>
                <button type="reset" name="reset" class="btn btn-sm btn-warning" value="Reset">Reset</button>
                <button class="btn btn-sm btn-danger" onclick="history.back()">Kembali</button>
            </div>
        </div>
                </form>