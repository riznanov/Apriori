<?php 
include 'config.php';
$Kode_Barang=$_GET['Kode_Barang'];
mysql_query("delete from tabel_barang where Kode_Barang='$Kode_Barang'");
header("location:barang.php");

?>