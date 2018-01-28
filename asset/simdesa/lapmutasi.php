<?php
include "conn.php";
require('fpdf17/fpdf.php');

 

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM mutasi_warga ORDER BY id_mutasi ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id_mutasi = "";
$column_id_warga = "";
$column_jenis = "";
$column_tanggal = "";
$column_ket = "";



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$id_mutasi = $row["id_mutasi"];
	$id_warga = $row["id_warga"];
    $jenis = $row["jenis_mutasi"];
     $tanggal = $row["tanggal"];
     $ket = $row["keterangan"];
	 
	 
 
    

	$column_id_mutasi = $column_id_mutasi.$id_mutasi."\n";
    $column_id_warga = $column_id_warga.$id_warga."\n";
    $column_jenis = $column_jenis.$jenis."\n";
    $column_tanggal = $column_tanggal.$tanggal."\n";
    $column_ket = $column_ket.$ket."\n";
	
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN DATA PENDUDUK MUTASI KELUAR/MASUK',0,0,'C');
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
$pdf->Cell(25,8,'Id Mutasi',1,0,'C',1);
$pdf->SetX(40);
$pdf->Cell(45,8,'Id Warga',1,0,'C',1);
$pdf->SetX(85);
$pdf->Cell(25,8,'Jenis Mutasi',1,0,'C',1);
$pdf->SetX(110);
$pdf->Cell(25,8,'Tanggal',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(50,8,'Keterangan',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(25,6,$column_id_mutasi,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(40);
 $pdf->MultiCell(45,6,$column_id_warga,1,'L');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(85);
 $pdf->MultiCell(25,6,$column_jenis,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(110);
 $pdf->MultiCell(25,6,$column_tanggal,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(135);
 $pdf->MultiCell(50,6,$column_ket,1,'C');

$pdf->Output();
?>
