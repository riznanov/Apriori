<?php
include 'config.php';
require('assets/pdf/fpdf.php'); 

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Bengkel Abror Motor Kendal',0,'L');
$pdf->SetX(4);   
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);;
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Stok Bulanan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Kode Barang', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah Stok Keluar', 1, 0, 'C');
$pdf->SetFont('Arial','',10);

$brg=mysql_query("select * from stok_keluar");
	$no=1;
	while($lihat=mysql_fetch_array($brg)){
	$pdf->Cell(2, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['Tanggal'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['Kode_Barang'], 1, 0,'C');
	$pdf->Cell(7, 0.8, $lihat['Nama_Barang'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['Jumlah'], 1, 0,'C');
	
	$noi++;
}
$pdf->Output("laporan_Stok.pdf","I");

?>

