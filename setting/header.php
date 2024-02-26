<!DOCTYPE html>
<?php
        include ('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <link rel="stylesheet" href="../css/site.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<div class="container">
  <a class="navbar-brand" href="#">UNISKA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../matakuliah/indx_mk.php">Matakuliah</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../mahasiswa/indx_mhs.php">Mahasiswa</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../dosen/indx_dosen.php">Dosen</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='../login/logout.php' onclick='return confirm("Apakah Ingin Logout?");'>Logout</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<div class="container">
<div class="content">
