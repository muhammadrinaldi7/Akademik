<?php
    include '../setting/koneksi.php';
    $nidn = $_GET['nidn'];
    $hapus = mysqli_query($koneksi,"DELETE FROM dosen WHERE nidn='$nidn'");
    if($hapus){
        $hapus = mysqli_query($koneksi, "delete from pengguna where username='$nidn'");
        echo "<script>alert('Data Berhasil dihapus');</script>";
        echo '<meta http-equiv="refresh" content="1;url=indx_dosen.php"/>';
    }
?>