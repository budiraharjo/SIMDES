<html>
<head>
    <link rel="icon" type="image/png" href="pdg.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Kecamatan Saketi</title>



    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
	

	<?php
$nama_bulan = Array("Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
if (!isset($_REQUEST["bulan"]))
    $_REQUEST["bulan"] = date("n");
if (!isset($_REQUEST["tahun"]))
    $_REQUEST["tahun"] = date("Y");
 
$cbulan = $_REQUEST["bulan"];
$ctahun = $_REQUEST["tahun"];
 
$tahun_sebelumnya = $ctahun;
$tahun_selanjutnya = $ctahun;
$bulan_sebelumnya = $cbulan - 1;
$bulan_selanjutnya = $cbulan + 1;
 
if ($bulan_sebelumnya == 0) {
    $bulan_sebelumnya = 12;
    $tahun_sebelumnya = $ctahun - 1;
}
if ($bulan_selanjutnya == 13) {
    $bulan_selanjutnya = 1;
    $tahun_selanjutnya = $ctahun + 1;
}
?>
	
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$('.flexslider').flexslider({
	animation: "slide"
	});
});
</script>

	<style>
		* {
			margin:0;
			padding:0;
		}
		#wrapper-top{ 
			background:#fff;
			height:100px;
		}
		#wrapper-header{
			background:#f9f9f9; 
			border-top:1px solid #eee; 
			border-bottom:1px solid #eee;
			
		}
		#slider-container {
			padding : 29px 0 0 0;
			width : 940px;
			margin : 0px auto;
		}
		#wrapper-content{
			background:#fff;
			height:600px;
		}
		#wrapper-beforefooter{
			background:#f9f9f9; 
			border-top:1px solid #eee;
			height:350px;
		}
		#wrapper-footer{
			background:#2b2b2b;
			height:50px; 
		}
	</style>
	
	
</head>
<body>

<div id="art-page-background-middle-texture">
<div id="art-main">
    <div class="cleared reset-box"></div>
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
		
	
	
	
        <div class="art-header-position">
		      <div class="art-header-wrapper">
			
                <div class="cleared reset-box"></div>
				<div class="art-header-inner">
				 <div class="art-logo">
				
                                 <h1 class="art-logo-name"><a href="#">SISTEM INFORMASI</a></h1>
								 <h1 class="art-logo-name">PELAYANAN KECAMATAN SAKETI </h1>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		<li>
			<a href="index.php" class="active">Home</a>
		</li>	
				<li>
                    <a href="sejarah.php">Sejarah Kecamatan</a>
                </li>
				<li>
                    <a href="visi.php">Visi & Misi</a>
                </li>
				<li>
                    <a href="eksekutif.php">Data Eksekutif</a>
                </li>
				<li>
                    <a href="batas.php">Batas Wilayah</a>
                </li>
				<li>
                    <a href="demografi.php">Demografi Wilayah</a>
                </li>
				
	</ul>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Main Menu</h3>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                <ul>
  <li class="active">
    <a href="index.php">
      <span>Home</span>
    </a>
  </li>
  <li class="parent">
    <a href="sejarah.php">
      <span>Sejarah Kecamatan Saketi</span>
    </a>
  </li>
  <li>
    <a href="visi.php">
      <span>Visi & Misi</span>
    </a>
  </li>
  <li>
    <a href="eksekutif.php">
      <span>Data Eksekutif</span>
    </a>
  </li>
  <li>      <a href="batas.php">
      <span>Batas Wilayah</span>
    </a>
  </li>
  <li>
    <a href="demografi.php">
      <span>Demografi Wilayah</span>
    </a>
  </li>
  <li>
    <a href="about.php" class="visited">
      <span>Tentang Saya</span>
    </a>
  </li>
 </ul>                
            <div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Kalender </h3>
                </div>
                <div class="art-box art-blockcontent">
                    
					<div id="isi">
<div class="body">

<table width="90%" align="center">
    <tr align="center">
        <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr align="center">
                    <td colspan="7" bgcolor="#96b74b" style="color:#FFFFFF"><strong><b><?php echo $nama_bulan[$cbulan - 1] . ' ' . $ctahun; ?></b></strong></td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>M</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>S</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>Sl</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>R</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>K</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>J</strong></td>
                    <td align="center" bgcolor="#96b74b" style="color:#FFFFFF"><strong>S</strong></td>
                </tr>
                      </tr>
					  <?php
    $hari_ini = date("j");
                $timestamp = mktime(0, 0, 0, $cbulan, 1, $ctahun);
                $maxday = date("t", $timestamp);
                $thisbulan = getdate($timestamp);
                $startday = $thisbulan['wday'];
                for ($i = 0; $i < ($maxday + $startday); $i++) {
                    if (($i % 7) == 0) {
                        echo "<tr> ";
                    }
                    if ($i < $startday) {
                        echo "<td></td> ";
                    } else {
      $tgl = $i - $startday + 1;
      if($tgl == $hari_ini) {
       $warna_bg = "#96b74b";
      } else {
       $warna_bg = "#f3f1e7";
      }

	  echo "<td align='center' valign='middle' height='20px' bgcolor='".$warna_bg."'>" . $tgl . "</td>";
                    }
                    if (($i % 7) == 6) {
                        echo "</tr>";
                    }
                }
                ?>
		</table>
		<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
<div style="text-align:center;">
       <h1 id="clock"></h1>
</div>
		
	   </td>
    </tr>
</table>
</div>
</div>
</div>
</div>
</div>
			
<div class="cleared"></div>
</div>

					
						
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Polsek Kecamatan Saketi</a>
                                        </h2>
                              <div class="art-postheadericons art-metadata-icons">
                        <span class="art-postdateicon"></span> Untuk menampilkan Map anda harus konek ke internet</div>
                                    </div>
                                <div class="art-postcontent">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1639.1515597525074!2d105.99011898552217!3d-6.401753667894251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa88647166409e5e4!2sKepolisian+Negara+Republik+Indonesia+Daerah+Banten+Resor+Pandeglang+Sektor+Suketi!5e1!3m2!1sen!2sid!4v1473998037103" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <br>
</br>  
  <br>
</br>   
<br>
</br> 
  <br>
</br> 
 <br>
</br>  
  <br>
</br>   
<br>
</br> 
  <br>
</br> 
 <br>
</br>  
  <br>
</br>   
<br>
</br> 
  <br>
</br> 


                </div>
                <div class="cleared"></div>
                     
                </div>

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-sidebar2">
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                     <h3 class="t">Peta</h3>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                <ul>
  <li>
    <a href="map.php">
      <span>Peta Kecamatan</span>
    </a>
  </li>
  <li>
    <a href="polsek.php">
      <span>Polsek Saketi</span>
    </a>
  </li>
  <li>
    <a href="pos.php">
      <span>Kantor POS Saketi</span>
    </a>
  </li>
  <li>
    <a href="camat.php">
      <span>Kantor Camat Saketi</span>
    </a>
  </li>
</ul>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Login Form</h3>
                </div>
               
 	<?php
	include"kiri.php";
	?>
  </fieldset>

   <div class="cleared"></div>
                    </div>
                </div>
				
				<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Galeri</h3>
                </div>
				      
    			 <div class="flexslider">
			  <ul class="slides">
						<li>
						<img src="images/slider-img-04.png" />
						</li>
						<li>
						<img src="images/slider-img-05.png" />
						</li>
						<li>
						<img src="images/slider-img-06.png" />
						</li>
						<li>
						<img src="images/slider-img-07.png" />
						</li>
						<li>
						<img src="images/slider-img-08.png" />
						</li>
						<li>
						<img src="images/slider-img-09.png" />
						</li>
						<li>
						<img src="images/slider-img-10.png" />
						</li>
						<li>
						<img src="images/slider-img-11.png" />
						</li>
				</ul>
			</div>
				 <h3><a align="center" href="#">
      <span> Dokumentasi</span></a><h3>
				
				
		<div class="cleared"></div>
    </div>
</div>
     
		<div class="cleared"></div>
    </div>
</div>


                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-body">
                    <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                            <div class="art-footer-text">
                                <p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p><p>Copyright © 2016. All Rights Reserved.</p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="" target="_blank">Program Rancangan</a> created Riskah.</p>
    <div class="cleared"></div>
</div>
</div>
</body>
</html>
