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
	<th align="left"><h1>FORM PEMAKAI SMS</h1></th>
<tr>
	<th align="right">Id Pemakai SMS :</th>
	<td><INPUT TYPE="text" name="id_sms_used" SIZE="30"  placeholder="Masukan Id"></td>
</tr>
<tr>
	<th align="right">Tanggal SMS :</th>
	<td><INPUT TYPE="date" NAME="sms_date" SIZE="30"  placeholder="Masukan Tanggal"></td>
</tr>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
</tr>
<tr>
	<th align="right">Jumlah SMS Keluar :</th>
	<td><INPUT TYPE="text" NAME="out_sms_count" SIZE="30"  placeholder=""></td>
</tr>
<tr>
	<tr>
	<th align="right">Jumlah SMS Masuk :</th>
	<td><INPUT TYPE="text" NAME="in_sms_count" SIZE="30"  placeholder=""></td>
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