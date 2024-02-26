<?php include ('../setting/header.php') ?>
<hr>
<h2>Data Mahasiswa</h2>
<hr>
        <div class="form-group">
        <p><a href="cetak_mahasiswa.php" class="btn btn-info" target="blank">Cetak Data</a></p>
        <a class="btn btn-primary" href="tambah_mahasiswa.php" role="button">Tambah Data</a>
        </div>
        <div class="table-resposive">
                <table class="table table-striped tabel-hover">
                 <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alat</th>
                 </tr>
        <?php
                $mysql="SELECT * FROM mahasiswa";
                $myQry=mysqli_query($koneksi, $mysql);
                while ($row=mysqli_fetch_array($myQry)){
        ?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo date('d M Y', strtotime($row[3]));?></td>
                    <td>
                    <a href="edit_mahasiswa.php?npm=<?php echo $row['npm'];?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
                    <a href="hapus_mahasiswa.php?npm=<?php echo $row['npm'];?>" title="Hapus Data" onclick="confirm('Yakin menghapus data ini ?')" class="btn btn-danger btn-sm">
                    Hapus</a>  
                    </td>
                </tr>
        <?php } ?>
        </table>
    </div>