<?php
include 'config.php';
$Kode_Barang=$_POST['Kode_Barang'];
$Nama_Barang=$_POST['Nama_Barang'];
$Kategori=$_POST['Kategori'];
$Harga=$_POST['Harga'];
$Jumlah_Stok=$_POST['Jumlah_Stok'];
$Min_Stok=$_POST['Min_Stok'];

$update= "UPDATE tabel_barang SET Nama_Barang='$Nama_Barang', Kategori='$Kategori', Harga='$Harga', Jumlah_Stok='$Jumlah_Stok', Min_Stok='$Min_Stok' where Kode_Barang ='$Kode_Barang'";
$hasil= mysql_query($update);
header("location:barang.php");
?>