<?php
include "conn.php";
require('fpdf17/fpdf.php');

 

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT * FROM warga ORDER BY no_ktp ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_no = "";
$column_nama = "";
$column_tempat = "";
$column_tanggal = "";
$column_kelamin = "";
$column_status = "";
$column_dusun = "";



//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$no = $row["no_ktp"];
	$nama = $row["nama"];
    $tempat = $row["t_lahir"];
     $tanggal = $row["tgl_lahir"];
     $kelamin = $row["j_kel"];
	 $status = $row["s_nikah"];
	 $dusun = $row["dusun"];
	 
 
    

	$column_no = $column_no.$no."\n";
    $column_nama = $column_nama.$nama."\n";
    $column_tempat = $column_tempat.$tempat."\n";
    $column_tanggal = $column_tanggal.$tanggal."\n";
    $column_kelamin = $column_kelamin.$kelamin."\n";
	$column_status = $column_status.$status."\n";
    $column_dusun = $column_dusun.$dusun."\n";
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'DATA PENDUDUK',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'KECAMATAN SAKETI | KABUPATEN PANDEGLANG',0,0,'C');
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
$pdf->Cell(25,8,'No KTP',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(40,8,'Nama',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(25,8,'Tmpt Lahir',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(25,8,'Tgl Lahir',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(15,8,'JK',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(35,8,'Status',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(35,8,'Desa',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_no,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(30);
 $pdf->MultiCell(40,6,$column_nama,1,'L');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(70);
 $pdf->MultiCell(25,6,$column_tempat,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(95);
 $pdf->MultiCell(25,6,$column_tanggal,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(120);
 $pdf->MultiCell(15,6,$column_kelamin,1,'C');

 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(135);
 $pdf->MultiCell(35,6,$column_status,1,'C');
 
 $pdf->SetY($Y_Table_Position);
 $pdf->SetX(170);
 $pdf->MultiCell(35,6,$column_dusun,1,'C');

$pdf->Output();
?>
