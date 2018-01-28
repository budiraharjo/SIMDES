<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$kelas = $_POST['Kelas'];
$alamat = $_POST['alamat'];

// perintah SQL
$query="INSERT INTO siswa VALUES ('','$nama' ,' $jenis_kelamin','$kelas','$alamat') " ;

$hasil=mysql_query($query);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal disimpan
	<meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>


