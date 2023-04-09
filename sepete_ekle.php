<?php
error_reporting(0);
include "baglan.php";
session_start();

$urun_id = $_GET['urun_id'];
$kullanici_id =$_GET['musteri_id'];
$eklenmezamani = date("d.m.y - H:i:s");
$sid = $_SESSION["kid"];

$bul = mysql_query("select * from urunler where urun_id='$urun_id' ");
	while($goster = mysql_fetch_array($bul)){
		
		$isim=$goster['kategori_id'];
	}

$sql = mysql_query("SELECT * FROM sepet WHERE urun_id='$urun_id' AND musteri_id ='$sid' ");

$kontrol = mysql_fetch_assoc($sql);
if ($kontrol['adet'] ==""){
$sql = mysql_query("INSERT INTO sepet (urun_id, musteri_id, adet, eklenmezamani,kategori_id) values('$urun_id', '$kullanici_id', '1', '$eklenmezamani' , '$isim')");
$urun_eksi = mysql_query("UPDATE urunler SET urun_adet = urun_adet - 1 WHERE urun_id='$urun_id' ");
echo '<img src="resimler/yukleniyor.gif">';
}else{
$artir = mysql_query("UPDATE sepet SET adet = adet + 1 WHERE urun_id='$urun_id' AND musteri_id ='$sid' ");
$urun_eksi = mysql_query("UPDATE urunler SET urun_adet = urun_adet - 1 WHERE urun_id='$urun_id' ");
echo '<img src="resimler/yukleniyor.gif">';
}
header("Refresh: 0; url=./index.php");
?>