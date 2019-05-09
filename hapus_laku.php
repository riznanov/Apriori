<?php 
include 'config.php';
$Kode_Barang=$_GET['Kode_Barang'];
$Jumlah_Stok=$_GET['Jumlah_Stok'];
$Nama_Barang=$_GET['Nama_Barang'];

$a=mysql_query("select Jumlah_Stok from tabel_barang where Nama_Barang='$Nama_Barang'");
$b=mysql_fetch_array($a);
$kembalikan=$b['Jumlah_Stok']+$Jumlah;
$c=mysql_query("update tabel_barang set Jumlah_Stok ='$kembalikan' where Nama_Barang='$Nama_Barang'");
mysql_query("delete from tabel_barang_laku where Kode_Barang='$Kode_Barang'");
header("location:barang_laku.php");

 ?>