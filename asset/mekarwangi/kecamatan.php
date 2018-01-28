<?php
include('cekmat.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mekarwangi</title>
	<link rel="icon" type="image/png" href="pdg.png">
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
       <div id="middle">
            <div id="left-column">
                <h3>Tambah Data</h3>
                <ul class="nav">
                   
                    <li><a href="tambah_penduduk.php">Tambah Penduduk</a></li>
                    
                    <li><a href="tambah_keluarga.php">Tambah Keluarga</a></li>
                </ul>
                <h3>Surat</h3>
                <ul class="nav">
                    <li><a href="daftar_surat.php">Daftar Surat</a></li>
                    <li><a href="tambah_surat_link.php">Buat Surat</a></li>
                </ul>
				
                <h3>User</h3>
             <ul class="navi">
                    <li><a href="../../logout.php">Logout</a></li>
                  
                </ul>
             </div>
            <div id="center-column">
                
            </div>
       <!---     
            <div id="right-column">
                <strong class="h">Quick Info</strong>
                <div class="box">This is your admin home page. It will give you access to all things within the back end system that you will need to facilitate a smooth operation.</div>
            </div>
        --->    
        </div>
        <div id="footer"><p>Developed by <a href="kecamatan.php">Riskah</a> 2016. Program Skripsi by <a href="kecamatan.php">Riskah</a> 2016.</p></div>
   
    </div>
</body>
</html>
