<?php
// data desa
$desa["kode"] = "437.105.08";
$desa["nama"] = "Saketi";
$desa["alamat"] = "Jl. Raya Pandeglang KM.20 Kec. Saketi";
$desa["pos"] = "42273";
$desa["kades"] = "Drs. H. AGUS RACHMAT";
$desa["kades_nip"] = "NIP.196808251996031002";
$desa["sekdes"] = "Drs. AGUS LUKMANTO";
$desa["sekdes_nip"] = "NIP.195908301985031004";
$desa["tt_kades"] = "Camat Saketi";
$desa["tt_sekdes"] = "An.Camat Saketi<br />Sekertaris Camat";
// nama kecamatan
$desa["kecamatan"] = "Saketi";
$desa["kabupaten"] = "Pandeglang";
// untuk pilihan
$agama = array("Pilih agama anda","Islam","Kristen_Katolik","Kristen_Protestan","Hindhu","Budha","Kong_Huchu","Lainnya");
$s_pernikahan = array("Pilih status anda","belum_nikah","nikah","janda/duda","lainnya");
$j_kelamin = array("Pilih jenis kelamin ","L" => "Laki - Laki","W" => "Wanita"); 
$gol_darah = array("Pilih golongan darah","A","AB","B","O","--");
// gunakan underscore(_) sebagai pengganti spasi antara 2 kata
$dusun = array("Pilih dusun anda","Ciandur","Girijaya","kaduDampit","Langensari","Majau","Mekarwangi","Parigi","Saketi","Sindanghayu","sodong","Sukalangu","Talagasari","Wanagiri");
$rw = array("Pilih rw anda","01","02","03");
$rt = array("Pilih rw anda","01","02","03","04","05","06","07","08","09","10");
$ekonomi = array("Pilih ekonomi anda","Sangat_Kaya","Kaya","Cukup","Miskin","Sangat_Miskin","Nemen_pollll","Lainnya");
// untuk jenis surat, SK = surat keterangan Datang SKP = surat keterangan pindah,SL = Surat lahir, SM = Surat kematian
// jangan dirubah untuk kode suratnya
$j_surat = array("SK" => "470","SKP" => "475","SKA" => "470","SL" =>"474.1","SM" =>"474.3");
// untuk set nomer awal surat, isi dengan nama index pada jenis surat
$awal_nomer_surat["SK"]=3;
$awal_nomer_surat["SKP"]=0;
$awal_nomer_surat["SKA"]=0;
$awal_nomer_surat["SL"]=0;
$awal_nomer_surat["SM"]=0;

$surat_ket = array("Pilih Jenis Keterangan","Adat - Istiadat","Usaha","Domisili");
// untuk paging
$limit = 2;
$paging_tampil = 4;
?>
