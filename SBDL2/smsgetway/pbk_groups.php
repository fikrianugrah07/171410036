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
	<th align="left"><h1>FORM GRUP SMS</h1></th>
<tr>
	<th align="right">Nama :</th>
	<td><INPUT TYPE="text" name="name" SIZE="30"  placeholder="Masukan Nama"></td>
</tr>
<tr>
	<th align="right">Id :</th>
	<td><INPUT TYPE="text" NAME="id" SIZE="30"  placeholder="Masukan Id"></td>
</tr>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
</tr>
<tr>
	<th align="right">Is Publik :</th>
	<td><INPUT TYPE="checkbox" value="Ya"  NAME="is_public"  SIZE="40"> Ya
		<INPUT TYPE="checkbox" value="Tidak" NAME="is_public"  SIZE="40">Tidak
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