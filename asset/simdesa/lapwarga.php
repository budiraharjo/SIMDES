<?php
include "conn.php";
require('fpdf17/fpdf.php');
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@ygmail.com
 
 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com
 
 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803
 
 **/
//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM keluarga ORDER BY id_keluarga ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_kepala = "";
$column_alamat = "";
$column_dusun = "";
$column_rt = "";
$column_rw = "";
$column_ekonomi = "";



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$id = $row["id_keluarga"];
	$kepala = $row["kepala_keluarga"];
    $alamat = $row["alamat"];
     $dusun = $row["dusun"];
     $rt = $row["rt"];
	 $rw = $row["rw"];
	 $ekonomi = $row["ekonomi"];
	 
 
    

	$column_id = $column_id.$id."\n";
    $column_kepala = $column_kepala.$kepala."\n";
    $column_alamat = $column_alamat.$alamat."\n";
    $column_dusun = $column_dusun.$dusun."\n";
    $column_rt = $column_rt.$rt."\n";
	$column_rw = $column_rw.$rw."\n";
    $column_ekonomi = $column_ekonomi.$ekonomi."\n";
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'DATA KELUARGA KECAMATAN',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'Kecamatan Saketi | Pandeglang',0,0,'C');
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
$pdf->SetX(5);
$pdf->Cell(25,8,'Id Keluarga',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(40,8,'Kepala Keluarga',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(25,8,'Alamat',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(25,8,'Dusun',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(15,8,'RT',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(35,8,'RW',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(35,8,'Ekonomi',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//idw show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_id,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(30);
 $pdf->MultiCell(40,6,$column_kepala,1,'L');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(70);
 $pdf->MultiCell(25,6,$column_alamat,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(95);
 $pdf->MultiCell(25,6,$column_dusun,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(120);
 $pdf->MultiCell(15,6,$column_rt,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(135);
 $pdf->MultiCell(35,6,$column_rw,1,'C');
 
 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(170);
 $pdf->MultiCell(35,6,$column_ekonomi,1,'C');

$pdf->Output();
?>
