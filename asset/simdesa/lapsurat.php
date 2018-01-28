<?php
include "conn.php";
require('fpdf17/fpdf.php');

 

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM surat ORDER BY id_surat ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id_surat = "";
$column_nama_surat = "";
$column_no_surat = "";
$column_tanggal = "";
$column_nama_warga = "";



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$id_surat = $row["id_surat"];
	$nama_surat = $row["nama_surat"];
    $no_surat = $row["no_surat"];
     $tanggal = $row["tanggal"];
     $nama_warga = $row["nama_warga"];
	 
	 
 
    

	$column_id_surat = $column_id_surat.$id_surat."\n";
    $column_nama_surat = $column_nama_surat.$nama_surat."\n";
    $column_no_surat = $column_no_surat.$no_surat."\n";
    $column_tanggal = $column_tanggal.$tanggal."\n";
    $column_nama_warga = $column_nama_warga.$nama_warga."\n";
	
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN DATA SURAT',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'KECAMATAN SAKET I | KABUPATEN PANDEGLANG',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(25,8,'Id Surat',1,0,'C',1);
$pdf->SetX(40);
$pdf->Cell(45,8,'Nama Surat',1,0,'C',1);
$pdf->SetX(85);
$pdf->Cell(25,8,'Pemohon',1,0,'C',1);
$pdf->SetX(110);
$pdf->Cell(25,8,'Tanggal',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(50,8,'No Surat',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(25,6,$column_id_surat,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(40);
 $pdf->MultiCell(45,6,$column_nama_surat,1,'L');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(85);
 $pdf->MultiCell(25,6,$column_nama_warga,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(110);
 $pdf->MultiCell(25,6,$column_tanggal,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(135);
 $pdf->MultiCell(50,6,$column_no_surat,1,'C');

$pdf->Output();
?>
