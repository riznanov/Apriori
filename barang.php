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
<center><h3><span class="glyphicon glyphicon-briefcase"></span> Data Barang</h3></center>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
<br/>
<br/>
<?php
$periksa=mysql_query("select * from barang where stok <=1");
while($q=mysql_fetch_array($periksa)){	
	if($q['stok']<='1'){	
		?>	
		<script>
			$(document).ready(function(){
				$('#pesan_sedia').css("color","red");
				$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
			});
		</script>
		<?php
		echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama_barang']."</a> yang tersisa sudah kurang dari <a style='color:red'>". $q['1']."</a> silahkan pesan lagi !!</div>";	
	}
}
?>
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
	<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
	  </tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
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
		<th>Kode_Barang</th>
		<th>Nama Barang</th>
		<th>Merk</th>
		<th>Type</th>	
		<th>Warna</th>
		<th>Harga</th>	
		<th>Stok</th>		
		<th>Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from barang where nama_barang like '$cari' or merk like '$cari'");
	}else{
		$brg=mysql_query("select * from barang limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['kode_barang'] ?></td>
			<td><?php echo $b['nama_barang'] ?></td>
			<td><?php echo $b['merk'] ?></td>
			<td><?php echo $b['tipe'] ?></td>
			<td><?php echo $b['warna'] ?></td>
			<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>
			<td><?php echo $b['stok'] ?></td>
			<td>	
				<a href="edit.php?kode_barang=<?php echo $b['kode_barang']; ?>" class="btn btn-warning">Edit</a>
			<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?kode_barang=<?php echo $b['kode_barang']; ?>' }" class="btn btn-danger"> Hapus</a>
		</td>
		</tr>		
		<?php 
	}
	?>	
</table>

<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
</ul>	
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_brg_act.php" method="post">
					<div class="form-group">
						<label>Kode Barang</label>
						<input name="kode_barang" type="text" class="form-control" placeholder="Kode Barang">
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang">
					</div>
					<div class="form-group">
						<label>Merk</label>
						<input name="merk" type="text" class="form-control" placeholder="Merk">
					</div>
					<div class="form-group">
						<label>Type</label>
						<input name="tipe" type="text" class="form-control" placeholder="Type">
					</div>
					<div class="form-group">
						<label>Warna</label>
						<input name="warna" type="text" class="form-control" placeholder="Warna">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga">
					</div>	
					<div class="form-group">
						<label>Stok</label>
						<input name="stok" type="text" class="form-control" placeholder="Stok">
					</div>																		
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>
<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
<?php 
include 'footer.php';

?>