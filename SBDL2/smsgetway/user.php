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
<FORM METHOD="POST" action="simpan_user.php">
<br>
<tr>
	<th></th>
	<th align="left"><h1>FORM PENDAFTARAN</h1></th>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
</tr>
<tr>
	<th align="right">Username :</th>
	<td><INPUT TYPE="text" name="username" SIZE="30"  placeholder="Masukan Username"></td>
</tr>
<tr>
	<th align="right">Nama :</th>
	<td><INPUT TYPE="text" NAME="realname" SIZE="30"  placeholder="Masukan Nama"></td>
</tr>
<tr>
	<th align="right">Password :</th>
	<td><INPUT TYPE="password" NAME="pass" SIZE="30"  placeholder="Masukan Password"></td>
</tr>
<tr>
	<tr>
	<th align="right">Phone Number :</th>
	<td><INPUT TYPE="number" NAME="phone_number" SIZE="30"  placeholder="Masukan No Telepon"></td>
</tr>
<tr>
	<th align="right"></th>
	<td><button type="submit" name="simpan">Simpan</button></td>
	<td><a href="data_user.php"> Tampilkan Data </a></td>
</tr>
</table>
</form>
</body>
</html>