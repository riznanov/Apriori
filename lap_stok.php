<?php
include 'header.php';
?>
<link href="assets/js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/js/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css" />
<link href="../kios/assets/js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style3 {font-size: 12px}
.style4 {
	font-size: 12px;
	padding: 6px 12px;
	margin-bottom: 0;
	font-weight: normal;
	line-height: 1.42857143;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	display: inline-block;
}
.style5 {font-size: xx-small}
-->
</style>
<center><h3>Data Stok Keluar Bulanan</h3></center>
<br/>
<br/>
<?php 
$per_hal=20;
$jumlah_record=mysql_query("SELECT COUNT(*) from barang");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<div class="col-md-12">
	<table class="col-md-2">
	</table>
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Kode_Barang</th>
		<th>Nama Barang</th>
		<th>Jumlah Stok Keluar</th>		
	</tr>
		<?php 
	if(isset($_GET['Tanggal'])){
		$tanggal=mysql_real_escape_string($_GET['Tanggal']);
		$brg=mysql_query("select * from stok_keluar where Tanggal like '$tanggal' order by Tanggal desc");
	}else{
		$brg=mysql_query("select * from stok_keluar order by Tanggal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['Tanggal'] ?></td>
			<td><?php echo $b['Kode_Barang'] ?></td>
			<td><?php echo $b['Nama_Barang'] ?></td>
			<td><?php echo $b['Jumlah'] ?></td>
		</tr>		
		<?php 
	}
	?>	
</table>
	
<a style="margin-bottom:10px" href="cetak_stok.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
<?php 
include 'footer.php';

?>