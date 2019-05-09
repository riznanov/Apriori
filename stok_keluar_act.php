<?php 

include 'config.php';
$Tanggal=$_POST['Tanggal'];
$Kode_Barang=$_POST['Kode_Barang'];
$Nama_Barang=$_POST['Nama_Barang'];
$Jumlah=$_POST['Jumlah'];

$db=mysql_query("select * from rule where jika='$Nama_Barang'");
$dabase=mysql_fetch_array($db);
$then=$dabase['maka'];
$Prediksi=$then;
mysql_query("insert into stok_keluar values('','$Tanggal','$Kode_Barang','$Nama_Barang','$Jumlah','$Prediksi')");
$dt=mysql_query("select * from barang where kode_barang='$Kode_Barang'");
$data=mysql_fetch_array($dt);
$stok=$data['stok']-$Jumlah;
mysql_query("update barang set stok='$stok' where kode_barang='$kode_barang'");
header("location:stok_keluar.php");
?>