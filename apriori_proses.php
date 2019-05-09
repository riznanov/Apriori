<?php
include 'header.php';
include 'config.php';
include 'apriori.php'; //evaluasi program pada apriori.php

$file='dataset/maret2.txt'; //parameter baru untuk memanggil file di folder dataset
$total_transaksi=count(file($file));//parameter utk menghitung jml transaksi
$minsup=1/100*$total_transaksi+1;
$minconf=50;

	$motor=new Apriori();
	$motor->setSumTrans($total_transaksi);
	$motor->setMaxScan(20);
		$motor->setMinSup(round($minsup));
		$motor->setMinConf($minconf);
		$motor->setDelimiter(',');
		$motor->process($file);
	
	echo "<p align='center' class='warning''>Total Transaksi: ".$motor->getSumTrans()."<br/>
	Minimum Support : ".$minsup."%<br/>
	Minimum Confidence : ".$minconf."%</p><hr/>";
	
	echo '<h3>Frequent Itemsets</h3>';
		$motor->printFreqItemsets();
		$motor->printAssociationRules();
		$motor->saveAssociationRules('output/associationRules.txt');
?>