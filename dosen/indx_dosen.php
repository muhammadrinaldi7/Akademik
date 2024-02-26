<?php include ('../setting/header.php') ?>
<hr>
<h2>Data Dosen</h2>
<hr>
        <div class="form-group">
        <p><a href="cetak_dosen.php" target="_blank" class="btn btn-info">Cetak Data</a></p>
        <a class="btn btn-primary" href="tambah_dosen.php" role="button">Tambah Data</a>
        </div>
        <div class="table-resposive">
                <table class="table table-striped tabel-hover">
                 <tr>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Jenis Kelamin</th>
                    <th>Kontak</th>
                    <th>Tanggal Lahir</th>
                    <th>Alat</th>
                 </tr>
        <?php
                $mysql="SELECT * FROM dosen";
                $myQry=mysqli_query($koneksi, $mysql);
                while ($row=mysqli_fetch_array($myQry)){
        ?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo date('d M Y', strtotime($row[5]));?></td>
                    <td>
                    <a href="edit_dosen.php?nidn=<?php echo $row['nidn'];?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
                    <a href="hapus_dosen.php?nidn=<?php echo $row['nidn'];?>" title="Hapus Data" onclick="confirm('Yakin menghapus data ini ?')" class="btn btn-danger btn-sm">
                    Hapus</a>  
                    </td>
                </tr>
        <?php } ?>
        </table>
    </div>