<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
include 'get_id.php';
include 'koneksi.php';
 ?>
<body>
<table align="left" border="0">
<FORM METHOD="POST">
	<?php 
	$ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$_GET[id]'");
	$tampil = $ambil->fetch_assoc();
	 ?>
<br>
<!-- <pre><?php print_r($tampil) ?></pre> -->
<tr>
	<th></th>
	<th align="left"><h1>FORM EDIT</h1></th>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $tampil['id_user'] ?>" ></td>
</tr>
<tr>
	<th align="right">Username :</th>
	<td><INPUT TYPE="text" name="username" SIZE="30"  placeholder="Masukan Username" value="<?php echo $tampil['username'] ?>"></td>
</tr>
<tr>
	<th align="right">Nama :</th>
	<td><INPUT TYPE="text" NAME="realname" SIZE="30"  placeholder="Masukan Nama" value="<?php echo $tampil['realname'] ?>"></td>
</tr>
<tr>
	<th align="right">Password :</th>
	<td><INPUT TYPE="password" NAME="pass" SIZE="30"  placeholder="Masukan Password" value="<?php echo $tampil['password'] ?>"></td>
</tr>
<tr>
	<tr>
	<th align="right">Phone Number :</th>
	<td><INPUT TYPE="number" NAME="phone_number" SIZE="30"  placeholder="Masukan No Telepon" value="<?php echo $tampil['phone_number'] ?>"></td>
</tr>
<tr>
	<th align="right"></th>
	<td><button type="simpan" name="simpan">Simpan</button></td>
	<td><a href="data_user.php">  Kembali </a></td>
</tr>
</table>
</form>
<?php 
if (isset($_POST['simpan'])) {
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$nama = $_POST['realname'];
$password = $_POST['pass'];
$phone_number = $_POST['phone_number'];

$query = "UPDATE user SET username = '$username', realname = '$nama', password = '$password', phone_number = '$phone_number' WHERE id_user = '$_GET[id]' ";

$tampil = mysqli_query($koneksi, $query);

	echo"<script>
			alert('Edit Data Sukses');
	</script>";
	echo "<meta http-equiv='refresh' content='1;url=data_user.php'>";
}
 ?>
</body>
</html>