<?php
//membuat koneksi ke database
include "include/koneksi1.php";
?>
 
<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600'>  
<tr>
	<th> username </th>
	<th> password </th>
	<th> level </th>
	
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From user" ;  //menampikan SEMUA data dari tabel siswa

$hasil=mysql_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td>".$data['username']."</td>
		<td>".$data['password']."</td>
		<td>".$data['level']."</td>
		
		</tr> 
		";
		
}

?>

</table>