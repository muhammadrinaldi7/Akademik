<?php
        include '../setting/koneksi.php';
        $nidn = $_POST['nidn'];
        $nama_dosen = $_POST['nama_dosen'];
        $jk = $_POST['jk'];
        $kontak = $_POST['kontak'];
        $tanggal = $_POST['tanggal'];
        $password = md5(date("dmY",strtotime($tanggal)));
        $update = mysqli_query($koneksi,"UPDATE dosen set nama_dosen='$nama_dosen', jk='$jk', kontak='$kontak', tanggal_lahir='$tanggal' where nidn='$nidn'");
        if($update){
            $update = mysqli_query($koneksi, "UPDATE pengguma SET password='$password' where username='$nidn'");
            echo "<script>alert('Data Berhasil diperbaharui');</script>";
            echo '<meta http-equiv="refresh" content="1;url=indx_dosen.php"/>';
        }
        ?>