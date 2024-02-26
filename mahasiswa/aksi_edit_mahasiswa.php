<?php
        include '../setting/koneksi.php';
        $npm = $_POST['npm'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal = $_POST['tanggal'];
        $password = md5(date("dmY",strtotime($tanggal)));
        $update = mysqli_query($koneksi,"UPDATE mahasiswa set nama_mahasiswa='$nama_mahasiswa', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal' where npm='$npm'");
        if($update){
            $update = mysqli_query($koneksi, "UPDATE pengguma SET password='$password' where username='$npm'");
            echo "<script>alert('Data Berhasil diperbaharui');</script>";
            echo '<meta http-equiv="refresh" content="1;url=indx_mhs.php"/>';
        }
        ?>