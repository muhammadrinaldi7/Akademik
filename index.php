<?php
    session_start();
    if (isset($_SESSION['id'])){
        header('location:matakuliah/indx_mk.php');
    }else{
        header('location:login/login_view.php');
    }
?>