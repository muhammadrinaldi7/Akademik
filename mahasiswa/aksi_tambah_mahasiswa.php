<?php 
    include '../setting/koneksi.php';
    $npm = $_POST['npm'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal'];
    $password = md5(date("dmY",strtotime($tanggal)));
    $id = mysqli_query($koneksi, 'select max(id_user)as id from pengguna');
    if (mysqli_num_rows($id)>0){
        $data = mysqli_fetch_row($id);
        $idterakhir = $data[0]+1;
    }else{
        $idterakhir = 1;
    }
    $insert = mysqli_query($koneksi,"insert into pengguna values('$idterakhir','$npm','$password','mahasiswa')");
    if($insert){
        $insert=mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('$npm', '$nama_mahasiswa', '$tempat_lahir','$tanggal','$idterakhir')");
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
        echo '<meta http-equiv="refresh" content="1;url=indx_mhs.php"/>';
            }
        
?>