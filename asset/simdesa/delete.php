<?php
include "include/koneksi1.php";
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
$username = $_GET['username'];


$delete = "delete from user where id = '$id'";
$hasil = mysql_query($delete);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $username Berhasil dihapus </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal dihapus";
}

?>