<?php

include "koneksi.php";

$query = "SELECT max(id_user) as maxKode FROM user";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$id = $data['maxKode'];


$noUrut = (int) substr($id, 3, 3);

$noUrut++;


$char = "ID";
$id = $char . sprintf("%04s", $noUrut);
?>