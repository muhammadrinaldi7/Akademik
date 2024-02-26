<?php include '../setting/header.php'; ?>
<?php 
	if ($_GET) {
	 	if (empty($_GET['kode'])) {
?>
	<b>Data yang dihapus tidak ada</b>
<?php 
		}else{
			$mySql = "DELETE FROM matakuliah WHERE kode='".$_GET['kode']."'";
			$myQry = mysqli_query($koneksi, $mySql) or die ("Error hapus data ".mysqli_error($koneksi));
			
			if ($myQry) {
?>
				<div class="alert alert-success alert-dismissbale"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Matakuliah berhasil dihapus.</div>
				<meta http-equiv="refresh" content="1;url=indx_mk.php"/>
<?php 
			}
		}
	}
?>