	


<?php
include('cekmat.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kecamatan Saketi</title>
	<link rel="icon" type="image/png" href="pdg.png">
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
                <h3>File Data Penduduk </h3>
                <ul class="nav">
                    <li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
					<li><a href="daftar_keluarga.php">Daftar Warga</a></li>
                </ul>
				 <h3>Laporan Surat</h3>
                <ul class="nav">    
					<li><a href="daftar_surat.php">Laporan Surat</a></li>
                </ul>
				<h3>Kelola Administrasi</h3>
                <ul class="nav">
                    <li><a href="user.php">Pengelolaan Admin</a></li>
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
                <div class="box">Ini Adalah halaman untuk admin. </div>
            </div>
        --->    
        </div>
        <div id="footer"><p>Developed by <a href="kecamatan.php">Riskah</a> 2016. Program Skripsi by <a href="kecamatan.php">Riskah</a> 2016.</p></div>
   
    </div>
</body>
</html>