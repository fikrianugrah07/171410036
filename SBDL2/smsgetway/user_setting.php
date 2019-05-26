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
	<th align="left"><h1>FORM SETTING USER</h1></th>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
</tr>
<tr>
	<th align="right">Tema :</th>
	<td><INPUT TYPE="file" name="theme" SIZE="30"  placeholder="Masukan Tema"></td>
</tr>
<tr>
	<th align="right">Tanda  :</th>
	<td><INPUT TYPE="text" NAME="signature" SIZE="30"  placeholder="Masukan Tanda"></td>
</tr>
<tr>
	<th align="right">Hapus Permanen :</th>
	<td><INPUT TYPE="checkbox" value="Ya"  NAME="delete_permanet"  SIZE="40"> Ya
		<INPUT TYPE="checkbox" value="Tidak" NAME="delete_permanet"  SIZE="40">Tidak
</td>
</tr>
<tr>
	<tr>
	<th align="right">Penomoran Halaman :</th>
	<td><INPUT TYPE="number" NAME="paging" SIZE="30"  placeholder="Masukan No Halaman"></td>
</tr>
<tr>
	<th align="right">Backgroud  :</th>
	<td><INPUT TYPE="file" NAME="bg_image" SIZE="30"  placeholder="Masukan Tanda"></td>
</tr>
<tr>
	<th align="right">Laporan Pengiriman  :</th>
	<td><INPUT TYPE="checkbox" value="Ya"  NAME="delivery_report"  SIZE="40"> Ya
		<INPUT TYPE="checkbox" value="Tidak" NAME="delivery_report"  SIZE="40">Tidak
</tr>
<tr>
	<th align="right">Bahasa  :</th>
	<td><INPUT TYPE="text" NAME="language" SIZE="30"  placeholder="Masukan Bahasa"></td>
</tr>
<tr>
	<th align="right">Sortir Percakapan  :</th>
	<td><INPUT TYPE="checkbox" value="Ya"  NAME="delivery_report"  SIZE="40"> Ya
		<INPUT TYPE="checkbox" value="Tidak" NAME="delivery_report"  SIZE="40">Tidak
	</td>
</tr>
<tr>
	<th align="right">Kode Negara  :</th>
	<td><INPUT TYPE="text" NAME="country_code" SIZE="30"  placeholder="Masukan Kode Negara"></td>
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