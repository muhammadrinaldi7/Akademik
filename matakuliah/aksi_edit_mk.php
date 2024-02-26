<?php
        include '../setting/koneksi.php';
        $kode = $_POST['kode'];
        $matakuliah = $_POST['matakuliah'];
        $sks = $_POST['sks'];
        $update = mysqli_query($koneksi, "UPDATE matakuliah SET matakuliah='$matakuliah', sks='$sks', alamat='$alamat' WHERE kode='$kode'");
        if($update){
            echo "<script>alert('Data Berhasil diperbaharui');</script>";
            echo '<meta http-equiv="refresh" content="1;url=indx_mk.php"/>';
        }
        ?>