<?php 
include 'config.php';
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$merk=$_POST['merk'];
$tipe=$_POST['tipe'];
$warna=$_POST['warna'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

mysql_query("insert into barang values('$kode_barang','$nama_barang','$merk','$tipe','$warna','$harga', '$stok')");
header("location:barang.php");

 ?>