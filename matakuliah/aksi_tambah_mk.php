<?php
        include '../setting/koneksi.php';
        $kode = $_POST['kode'];
        $matakuliah = $_POST['matakuliah'];
        $sks = $_POST['sks'];
        $insert = mysqli_query($koneksi, "INSERT INTO matakuliah values('$kode','$matakuliah','$sks')");
        if($insert){
            echo "<script>alert('Data Berhasil diperbaharui');</script>";
            echo '<meta http-equiv="refresh" content="1;url=indx_mk.php"/>';
        }
        ?>