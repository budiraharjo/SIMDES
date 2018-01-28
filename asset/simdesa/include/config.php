<?php
// data desa
$kec["kode"] = "437.105.08";
$kec["nama"] = "Saketi";
// nama kecamatan
$kec["kecamatan"] = "saketi";
$kec["kabupaten"] = "pandeglang";
//untuk level
$level = array ("Pilih level anda","Administrator","Desa_Girijaya","Desa_Ciandur","Desa_Kadudampit","Desa_Langensari","Desa_Majau","Desa_Medalsari","Desa_Mekarwangi","Desa_Parigi","Desa_Saketi","Desa_Sindanghayu","Desa_Sodong","Desa_Sukalangu","Desa_Talagasari","Desa_Wanagiri");
// untuk pilihan
$agama = array("Pilih agama anda","Islam","Kristen_Katolik","Kristen_Protestan","Hindhu","Budha","Kong_Huchu","Lainnya");
$s_pernikahan = array("Pilih status anda","belum_nikah","nikah","janda/duda","lainnya");
$j_kelamin = array("Pilih jenis kelamin ","L" => "Laki - Laki","W" => "Wanita"); 
$gol_darah = array("Pilih golongan darah","A","AB","B","O","--");
// gunakan underscore(_) sebagai pengganti spasi antara 2 kata
$dusun = array("Pilih dusun anda","Klagen","Ngembung","Kemendung");
$rw = array("Pilih rw anda","01","02","03");
$rt = array("Pilih rw anda","01","02","03","04","05","06","07","08","09","10");
$ekonomi = array("Pilih ekonomi anda","Sangat_Kaya","Kaya","Cukup","Miskin","Sangat_Miskin","Nemen_pollll","Lainnya");
// untuk jenis surat, SK = surat keterangan SKP = surat keterangan pindah,SL = Surat lahir, SM = Surat kematian
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
