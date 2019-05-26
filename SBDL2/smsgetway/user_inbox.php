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
	<th align="left"><h1>FORM INBOX</h1></th>
<tr>
	<th align="right">Id Inbox :</th>
	<td><INPUT TYPE="text" name="id_inbox" SIZE="30"  placeholder="Masukan Id Inbox"></td>
</tr>
<tr>
	<th align="right">Id User :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
</tr>
<tr>
	<th align="right">Trash :</th>
	<td><INPUT TYPE="text" SIZE="30" disabled value="<?php echo $id ?>" ></td>
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