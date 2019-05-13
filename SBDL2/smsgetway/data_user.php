<!DOCTYPE html>
<html>
<?php include 'koneksi.php'; ?>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center">
		<thead>
			<th> ID User </th>
			<th> Username </th>
			<th> Nama </th>
			<th> Phone Number </th>
			<th> Aksi </th>
		</thead>
		<?php $ambil = $koneksi->query("SELECT * FROM user");?>
		<?php while ($tampil = $ambil->fetch_assoc()){?>
		<tbody>
			<td><?php echo $tampil['id_user']?></td>
			<td><?php echo $tampil['username']?></td>
			<td><?php echo $tampil['realname']?></td>
			<td><?php echo $tampil['phone_number']?></td>
			<td>
				<button><a href="edit.php?id=<?php echo($tampil['id_user']) ?>"> Edit </a></button>
				<button><a href="delete.php?id=<?php echo($tampil['id_user']) ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" > Hapus </a></button>
			</td>
		</tbody>
	<?php } ?>
	</table>
	<a href="user.php"> Kembali </a>
</body>
</html>