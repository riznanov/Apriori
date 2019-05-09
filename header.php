<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
	session_start();
	include 'config.php';
	?>
	<title>SISTEM PROSES ORDER BARANG BENGKEL ABROR MOTOR</title>
	<link rel="stylesheet" type="text/css" href="/apriori/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/css/yeti-bootstrap.min.css" />
	<link href="../kmeans/assets/css/yeti-bootstrap.min.css" rel="stylesheet"/>
	<link href="../kmeans/assets/css/general.css" rel="stylesheet"/>
	<script src="../kmeans/assets/js/jquery.min.js"></script>
	<script src="../kmeans/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/apriori/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/apriori/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/apriori/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/apriori/assets/js/jquery-ui/jquery-ui.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><style type="text/css">
<!--
        
-->
</style></head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand">SISTEM PROSES ORDER BARANG BENGKEL ABROR MOTOR</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>			  </button>
		  </div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
		<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class="glyphicon glyphicon-comment"></span> Pesan</a></li>
		</ul>
		</div>
		</div>
	</div>

<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>
				<div class="modal-body">
					<?php 
					$periksa=mysql_query("select * from barang where stok <=3");
					while($q=mysql_fetch_array($periksa)){	
						if($q['stok']<=3){			
							echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama_barang']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";	
						}
					}
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
			</div>
		</div>
</div>
	
<div class="col-md-2">
		<div class="row">	</div>

<div class="row"></div>
	<ul class="nav nav-pills nav-stacked">	
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Beranda </a></li>
		<li><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</a></li>           												
		<li><a href="stok_keluar.php"><span class="glyphicon glyphicon-book"></span>  Stok Keluar</a></li>
		<li><a href="lap_stok.php"><span class="glyphicon glyphicon-book"></span> Stok Keluar Bulanan</a></li>
		<li><a href="exit.php"><span class="glyphicon glyphicon-log-out"></span>  Keluar</a></li>			
	</ul>	
</div>
	<div class="col-md-10">		