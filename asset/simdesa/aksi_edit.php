<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'include/koneksi1.php';


$id = $_POST['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];




$update = "UPDATE USER SET username ='$username',password='$password',level='$level' where id = '$id'";
$hasil = mysql_query($update);




if ($hasil){
//header ('location:view.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk melihat daftar peserta klik <a href = 'index.php'> Disini </a></center>";
} else { echo "Data gagal diupdate";
}

?>