
<?php
include "config/koneksi.php";

?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="head.css">
	  <script language="javascript" src="jquery-1.4.js"></script>
	  <script language="javascript" src="headline.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');			
	    });
	  </script>	

  </head>
    <body>

    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
      <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
      <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div5')">5</a>
	  <a href="javascript:;" onClick="bukaContent(this,'div6')">6</a>
	  
    </div>

    <div id="divContent">
    <?php
    
    // Tampilkan 4 headline berita terkini 
    $sql = mysql_query("SELECT * FROM barangtbl ORDER BY kdbrg DESC LIMIT 6");
   
    $no=1;
    while($r=mysql_fetch_array($sql)){
    
	//$isi1 = htmlentities(strip_tags($r[isi])); // membuat paragraf pada isi berita dan mengabaikan tag html
	//$isi2 =nl2br($isi1);

   // $isi = substr($isi1,0,450); // ambil sebanyak 410 karakter
 
      echo "<div id='div$no'>
           
              <a href=index.php?panggil=detail&kdbrg=$r[kdbrg]><img src='fhoto_barang/$r[cover]' width=150 height=190 colspace=1 align=left border=2> </a>
			   <span class='title11'>$r[hrgjual] </span>
			  <span class='title10'>$kdmerek
			  
			   
           
			</div>

			 
			
			";
      $no++;    
    }     
	
    ?>
 
    </div>
  </body>
</html>
<br>

