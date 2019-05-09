<?php
include 'config.php';
require('assets/pdf/fpdf.php'); 

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
$pdf->SetX(5);            
$pdf->MultiCell(19.5,0.5,'Bengkel Abror Motor Kendal',0,'L');
$pdf->SetX(4);   
$pdf->SetFont('Arial','B',10);
$pdf->SetX(5);;
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(4, 0.8, 'Kode Barang', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Merk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Type', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Warna', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Stok', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$query=mysql_query("select * from barang");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(4, 0.8, $lihat['kode_barang'], 1, 0,'C');
	$pdf->Cell(7, 0.8, $lihat['nama_barang'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['merk'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $lihat['tipe'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['warna'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['harga'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['stok'],1, 1, 'C');
}

$pdf->Output("laporan_DataBarang.pdf","I");

?>

