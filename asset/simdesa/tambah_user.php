<?php
/*
 *      tambah_user.php
 *      Form tambah data user
 */
include_once "include/koneksi.php";
include_once "include/config.php";
?>
<div class="top-bar">
	<a href="user.php" class="button">Lihat data </a>
    <h1>Tambah user</h1>
        <div class="breadcrumbs">Menambahkan data user desa</div>
</div>
<div id="stylized" class="select-bar">
<form id="form" name="form" method="post" action="simpan_user.php">
<label>User Name
<span class="small">Masukkan User Name Anda</span>
</label>
<input type="text" name="username" id="username" class="isian"/>
<span class="ket"></span>
<label >Password
<span class="small">Masukkan Password anda</span>
</label>
<input type="text" name="password" id="password" class="isian" />
<span class="ket"></span>
<label >Level
<span class="small">Pilih Level anda</span>
</label>
<select name="level" id="level" class="isian">
<?php
for($i = 0; $i < count($level); $i++){
	if($i == 0){
		$value="";
		}
	else {
		$value=$level[$i];
		}	
	echo "<option value=".$value.">".$level[$i]."</option>";
	}
?>
</select>
<span class="ket"></span>

<button type="submit" class="isian">Simpan</button>
<span style="margin:10px;float:left;display:none" id="status_proses" class="proses-inline"></span>
</form>
</div>
<script type="text/javascript" >
$(function(){
	$("#tgl_lahir").datepicker({dateFormat:"yy-mm-dd",changeMonth:true,changeYear:true,yearRange:"1930"});
	$("a.button").click(function(){
		var target = $("#center-column");
		var url = $(this).attr("href");
		$(target).html("<div class='loading'><span class='loading'></span>&nbsp;&nbsp;Mohon ditunggu .......</div>")
		.load(url);
		return false;
		})
	// kejadian awal, panggil fungsi awal
	awal();
	// event ketika tombol submit diklik
	$("#form").submit(function(){
	var inputan = $(".isian");	
	var inputs = $(this).serializeArray(); //berupa JSON object
	var url = $(this).attr('action');
		for(i = 0; i < inputan.length - 1; i++){
				if($(inputan).eq(i).val() == ""){
					$(".ket").eq(i).html("harus diisi").css({"display":"block"});
					$(inputan).eq(i).focus();
					return false;
					}
				else {
					$(".ket").eq(i).empty().css({"display":"none"});
					}	
				}
		// kirim data ke server untuk disimpan
		$("#status_proses").removeClass("sukses-inline").fadeIn("slow");
		$.post(url,{data:inputs},function(data){
			if(data == 1){
				// tampilkan info data telah disimpan
				$("#status_proses").removeClass("proses-inline")
				.addClass("sukses-inline").delay("2000").fadeOut("slow");
				$(".isian").val("");
				awal();
				}
			else {
				$("#status_proses").removeClass("proses-inline")
				.addClass("gagal-inline").delay("2000").fadeOut("slow");
				$(".isian").val("");
				awal();
				}	
			})
	return false;
	})
})
</script>
