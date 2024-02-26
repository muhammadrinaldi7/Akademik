<?php
    include '../setting/koneksi.php';
    $npm = $_GET['npm'];
    $hapus = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE npm='$npm'");
    if($hapus){
        $hapus = mysqli_query($koneksi, "delete from pengguna where username='$npm'");
        echo "<script>alert('Data Berhasil dihapus');</script>";
        echo '<meta http-equiv="refresh" content="1;url=indx_mhs.php"/>';
    }
?>