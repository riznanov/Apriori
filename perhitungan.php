<?php
include 'header.php';
?>
<link href="assets/js/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<div class="col-md-10">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<h3 align="left">Perhitungan Algoritma Apriori</h3>
<p align="center">&nbsp;</p>
<p align="left"><strong>Mulai Tanggal </strong></p>
</div>
<form method="post" action="apriori_proses.php">
	<div class="input-group col-md-5">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tanggal_mulai" class="form-control" autocomplete="off"">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysql_query("select distinct Tanggal_Transaksi from transaksipenjualan order by Tanggal_Transaksi desc");
			while($p=mysql_fetch_array($pil)){
				?>
				<option><?php echo $p['Tanggal_Transaksi'] ?></option>
				<?php
			}
			?>			
		</select>
  </div>
    <p>&nbsp;</p>
    <p><strong>Hingga Tanggal </strong></p>
	<div class="input-group col-md-5">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tanggal_akhir" class="form-control" autocomplete="off"">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysql_query("select distinct Tanggal_Transaksi from transaksipenjualan order by Tanggal_Transaksi desc");
			while($p=mysql_fetch_array($pil)){
				?>
				<option><?php echo $p['Tanggal_Transaksi'] ?></option>
				<?php
			}
			?>			
		</select>
  </div>
  <div class="form-group">
			<label>Minimum Support</label>
  			<input name="minsup" type="text" class="form-control" id="minsup" autocomplete="off" />
  </div>
			<div class="form-group">
			<label>Minimum Confidence</label>
			<input name="minconf" type="text" class="form-control" id="minconf" autocomplete="off">
	</div>
			</select>
						<input type="reset" class="btn btn-danger" value="Reset">												
						<input type="submit" class="btn btn-primary" value="Proses">
  </div>
</form>

<?php
include 'footer.php';
?>
