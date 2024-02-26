<?php include ('../setting/header.php') ?>
        <div class="container-mt-3">
        <div class="row">
        <div class="col-md-12">
        <hr>
                <h2 class="header">Data Matakuliah</h2>
        <hr>
                <p><a href="cetak_matakuliah.php" class="btn btn-info" target="_blank">Cetak Data</a></p>
                <p><a class="btn btn-primary" href="tambah_matakuliah.php">Tambah Data</a></p>
                <table class="table table-striped tabel-hover">
                <thead> 
                <tr>
                    <th>Kode</th>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                    <th>Alat</th>
                 </tr>
                 </thead>
                 <tbody>
                 <?php
                        $myQry=mysqli_query($koneksi, "select * from matakuliah");
                        while ($row=mysqli_fetch_array($myQry)){
                        echo "
                        <tr>
                        <td>$row[kode]</td>
                        <td>$row[matakuliah]</td>
                        <td>$row[sks]</td>
                        <td><div class='btn-group'>
                                <a href='edit_matakuliah.php?kode=$row[0]' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='hapus_matakuliah.php?kode=$row[0]' class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin Menghapus Data ini\");'>Hapus</a>
                        </div>
                        </td>
                        </tr>";
                        }
                ?>
                 </tbody>
                </table>
        </div>
        </div>
        </div>