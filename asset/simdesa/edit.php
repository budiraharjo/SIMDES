
<?php
include "include/koneksi1.php";

// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id'];

// Perintah sql untuk menampilkan database
$queri = "select * from user where id = '$id'";

// perintah untuk menjalankan sql
$hasil = mysql_query($queri);

// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);

$nomor = $data['id'];
$username = $data['username'];
$password = $data['password'];
$level = $data['level'];
$img = $data['img'];


?>


<html>

	<title> data edit admin </title>
	 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link  href="css/admin.css" rel="stylesheet" type="text/css" />
    <link  href="css/form.css" rel="stylesheet" type="text/css" />
    <link  href="css/surat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link  href="css/surat_cetak.css" rel="stylesheet" type="text/css" media="print"/>
    <link  href="css/jquery-ui-1.8.19.custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
    <script type="text/javascript" src="js/buatan_sendiri.js"></script>

</head>
<script type="text/javascript">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$('.flexslider').flexslider({
	animation: "slide"
	})
})
$(function(){
	$("#left-column ul.nav a").click(function(){
		var url = $(this).attr("href");
		// load div center-column dengan url dari anchor tsb
		$("#center-column").html("<div class='loading'>Mohon ditunggu .........</div>")
		.load(url);
		return false;
		})
	})

</script>

<body>
<div id="main">

<div class="art-header">
			<div class="flexslider">
			  <ul class="slides">
					<li>
						<img src="images/slider-img-01.png" />
						</li>
						<li>
						<img src="images/slider-img-02.png" />
						</li>
						<li>
						<img src="images/slider-img-03.png" />
					</li>
				</ul>
			</div>
    </div>
	
	 
        <div id="header">
            <div style="solid #5F9EAD;font-size:3em;font-weight:bolder;color:#000033;padding-left:10px;">
				<marquee>Mari Membangun Desa Dengan Teknologi Informasi</marquee>
				</div>
		  </div>  
	   
	 <div id="middle">
	 
            <div id="left-column">
                <h3>Laporan</h3>
                <ul class="nav">
                    <li><a href="lap_penduduk.php">Penduduk</a></li>
					<li><a href="laporanmutasi_keluar.php">Laporan Pindah/wafat</a></li>
                <h3>Data Master</h3>
                <ul class="nav">
                    <li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
                    <li><a href="daftar_keluarga.php">Daftar Keluarga</a></li>
                </ul>
                <h3>Kelola Admin</h3>
                <ul class="nav">
                  <li><a href="user.php">Administrator</a></li>
                </ul>
				
              </div>
			   <div id="center-column">
		
<?php 
echo "
	<center>
	<p> Edit User </p>
	
	<form method ='POST' action = 'aksi_edit.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
	
		<td> username </td>
		<td width = '5' align = 'center'> : </td>
		<td> <input type = 'text' name = 'username' value= '".$username."'/> </td>
		<input type = 'hidden' name = 'id' value = '".$nomor."' />
		</tr>
	<tr>
		<td> password </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text'  name = 'password' value= '".$password."'/> </td>
		</tr>
	<tr>
		<td> level </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text'  name = 'level' value= '".$level."'/> </td>
		</tr>
	
	
	<tr>
	<td colspan = '3' align = 'center'>
	<input type = 'submit' name = 'submit' value = 'Update'/>
	</td>
	</tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>
";
?>
	      </div>
			
       <!---     
            
        --->    
        </div>
                
         
        <div id="footer"><p>Developed by <a href="index.php">Riskah</a> 2016. Program Skripsi by <a href="index.php">Riskah</a> 2016.</p></div>  
    </div>
</body>
</html>
<style>
#top-navigation li.li_terpilih,.li_terpilih  {
	background:#FFFFFF;
	font-weight:bold;
	color:#5F9EAD;
	}	
</style>
