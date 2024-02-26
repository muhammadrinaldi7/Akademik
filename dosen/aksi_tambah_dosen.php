<?php 
    include '../setting/koneksi.php';
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];
    $jk = $_POST['jk'];
    $kontak = $_POST['kontak'];
    $tanggal = $_POST['tanggal'];
    $password = md5(date("dmY",strtotime($tanggal)));
    $id = mysqli_query($koneksi, 'select max(id_user)as id from pengguna');
    if (mysqli_num_rows($id)>0){
        $data = mysqli_fetch_row($id);
        $idterakhir = $data[0]+1;
    }else{
        $idterakhir = 1;
    }
    $insert = mysqli_query($koneksi,"insert into pengguna values('$idterakhir','$nidn','$password','dosen')");
    if($insert){
        $insert=mysqli_query($koneksi, "INSERT INTO dosen VALUES('$nidn', '$nama_dosen', '$jk', '$kontak','$tanggal','$idterakhir')");
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
        echo '<meta http-equiv="refresh" content="1;url=indx_dosen.php"/>';
            }
        
?>