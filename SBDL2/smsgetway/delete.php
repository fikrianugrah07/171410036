<?php  
include 'koneksi.php';
$koneksi->query("DELETE FROM user WHERE id_user = '$_GET[id]'");  
echo "<script>
	alert('Data Berhasil DI Hapus');
</script>";
 echo " <script>location='data_user.php';</script>";
?>
