<?php
    include '../setting/koneksi.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $q = mysqli_query($koneksi,"select * from pengguna where username='$username' and password='$password'");
    if(mysqli_num_rows($q)>0){
        session_start();
        $data = mysqli_fetch_row($q);
        $_SESSION['id'] = $data[0];
        $_SESSION['username'] = $data[1];
        $_SESSION['status'] = $data[3];
        echo "<script>alert('Login berhasil!');</script>";
        echo '<meta http-equiv="refresh" content="1;url=../matakuliah/indx_mk.php"/>';
    }else{
        echo "<script>alert('Login gagal!');</script>";
        echo '<meta http-equiv="refresh" content="1;url=login_view.php"/>';
    }
?>