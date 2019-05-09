<?php
include 'header.php';
?>
<link href="assets/js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/js/jquery-ui/jquery-ui.theme.css" rel="stylesheet" type="text/css" />
<link href="../kios/assets/js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<br/>
 <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title style1">Input Stok Keluar</h2>
        </div>
        <div class="panel-body">
            <form action="stok_keluar_act.php" method="post">
               <div class="form-group">
							<label>Tanggal</label>
							<input name="Tanggal" type="text" class="form-control" id="Tanggal" autocomplete="off">
				</div>		
			    <div class="form-group">
                    <label>Kode Barang</label>								
							<select class="form-control" name="Kode_Barang">
								<?php 
								$brg=mysql_query("select * from barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['kode_barang']; ?>"><?php echo $b['kode_barang'] ?></option>
									<?php 
								}
								?>
							</select>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>								
							<select class="form-control" name="Nama_Barang">
								<?php 
								$brg=mysql_query("select * from barang");
								while($b=mysql_fetch_array($brg)){
									?>	
									<option value="<?php echo $b['nama_barang']; ?>"><?php echo $b['nama_barang'] ?></option>
									<?php 
								}
								?>
							</select>
                </div>
				<div class="form-group">
                    <label>Jumlah</label>
							<input name="Jumlah" type="text" class="form-control" placeholder="Jumlah" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
</div>   
<center>
  <h3 class="style1">Prediksi Stok Keluar </h3>
</center>     

<div class="col-md-12"></div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>

<table width="10%" height="8" class="table table-hover">
	<tr>
		<th width="7%" class="col-md-2">No </th>
		<th width="57%" class="col-md-2">Stok Keluar </th>
		<th width="36%" class="col-md-2">Prediksi</th>
	</tr>
	<?php 
	if(isset($_GET['Tanggal'])){
		$tanggal=mysql_real_escape_string($_GET['Tanggal']);
		$brg=mysql_query("select * from stok_keluar where Tanggal like '$tanggal' order by Tanggal desc");
	}else{
		$brg=mysql_query("select * from stok_keluar order by Tanggal");
	}
	$No=1;
	while($b=mysql_fetch_array($brg)){
		?>
		<tr>
			<td height="6"><?php echo $No++ ?></td>
			<td><?php echo $b['Nama_Barang'] ?></td>
			<td><?php echo $b['Prediksi']?></td>
		</tr>		
		<?php 
	}
	?>
</table>

<script type="text/javascript">
		$(document).ready(function(){
			$("#Tanggal").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
<?php 
include 'footer.php';

?>