<?php
error_reporting(0);
//membuat koneksi ke database
include "include/koneksi1.php";
?>
<h1>Daftar Administrator</h1>
        <div class="breadcrumbs">Menampilkan seluruh daftar Administrator</div>
<html>
 <title> Data administrator </title>
 	 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">
	
	
	<script language="javascript">
	function tanya() {
	if (confirm ("Apakah Anda yakin akan menghapus data ini ?")) {
	return true;
		} else {
			return false;
		}
		}
</script>
<body width='900px'>
<center> 

<hr>

  <div class="container">

        <!-- Page Heading -->
        <div class="row">
		<div class="col-md-8">
<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->

<table >
	
</table>
</form>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600' >  
<tr>
	<th> No</th>
	<th> Username </th>
	<th> Password </th>
	<th> Level </th>

	<th colspan='2'> Action </th>
	
</tr>
<?php  
// Perintah untuk menampilkan data
$queri="Select * From user" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td><center>".$i."</center></td> 
		<td>".$data['username']."</td>
		<td>".$data['password']."</td>
		<td>".$data['level']."</td>
		
		
		<td> <form action = 'edit.php' method = 'GET'>
		<input type = 'submit' name = 'tombol' value = 'edit' class = 'edit'>"; //style='background: linear-gradient(to bottom, #0088CC, #0044CC); border: 1px solid #0088CC; color: #FFF; margin: 4px 10px; padding: 5px; width: 50px; height: 30px;'>     style='background: linear-gradient(to bottom, #0088CC, #0044CC); border: 1px solid #0088CC; color: #FFF; margin: 4px 10px; padding: 5px; width: 50px; height: 30px;'>
echo "	<input type = 'hidden' name = 'id' value = '".$data['id']."'>
		
		
		</form></td>
		
		
		<td> <form action = 'delete.php' method = 'GET'>
		<input type = 'hidden' name = 'username' value = '".$data['username']."'>
		<input type = 'hidden' name = 'id' value = '".$data['id']."'>
		
		<input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
		onclick='return tanya(". $data['id'].")'>
		
		</form></td>
		
		</tr> 
		";
	$i++;	
}

?>
</table>
</div>
<div class="col-md-4">
<script async src="/pagead/js/adsbygoogle.js"></script>
<!-- aim -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-7101183635826675"
     data-ad-slot="8181180549"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>
<!-- row -->

<div class="row">
<div class="col-md-12">
.
<script async src="/pagead/js/adsbygoogle.js"></script>
<!-- csa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7101183635826675"
     data-ad-slot="5922058149"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>

</body>
</html>