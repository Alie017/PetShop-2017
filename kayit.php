<!DOCTYPE html>
<?php

session_start();

require_once("baglan.php");

$adim = @$_GET['adim'];
switch($adim){
case "": 

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ÜYE GİRİŞİ</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="resimler/lg111.png" alt="LOGO"></a>
				</div>
				<div id="navigation">
					<ul id="primary">
						<li>
							<a href="index.php">ANASAYFA</a>
						</li>
						<li>
							<a href="kuslar.php">KUŞLAR</a>
						</li>
						<li>
							<a href="kediler.php">KEDİLER</a>
						</li>
						<li>
							<a href="kopekler.php">KÖPEKLER</a>
						</li>
						<li>
							<a href="baliklar.php">BALIKLAR</a>
						</li>
						<li>
							<a href="kemirgenler.php">kemirgenler</a>
						</li>
					</ul>
					<ul id="secondary">
						<li>
							<a href="sepet.php"></a>
						</li>
						<li>
							<?php include ('buton1.php');?>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents" >
				<div class="border1" align="center">
					<form action="kayit.php?adim=kayitonay" method="POST"><br><br>
			<table>
			
		<h1><font color="#466b80">ÜYE KAYIT FORMU</font></h1><BR/>
		
		<tr>
		<td><h3>Kullanıcı Adı</h3></td>
		<td><input name="kyt_kulladi" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>Şifreniz</h3></td>
		<td><input name="kyt_sifre" type="password" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>Şifreniz Tekrar</h3></td>
		<td><input name="kyt_sifretekrar" type="password" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>İsim</h3></td>
		<td><input name="kyt_isim" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>Soyad</h3></td>
		<td><input name="kyt_soyad" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>Telefon</h3></td>
		<td><input name="kyt_tel" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h3>E-Mail</h3></td>
		<td><input name="kyt_email" type="text" /><br></td>
		</tr>
		<tr >
	
		<td colspan="2" align="center"><br><input type="submit" value="Kayıt Ol" class="myButton" /></td>
		</tr>
			</table>
				</form>

		<br/><br />Giriş yapmak için <a href="giris.php">tıklayınız</a><br/><br/><br/>

</div>

				
			
			<div id="footer">
				<div class="background">
					<div id="connect">
						<h5></h5>
						<ul>
								<li>
								<a href="https://facebook.com" target="_blank" class="facebook"></a>
							</li>
							<li>
								<a href="https://twitter.com" target="_blank" class="twitter"></a>
							</li>
							<li>
								<a href="https://plus.google.com" target="_blank" class="linkin"></a>
							</li>
						</ul>
					</div>
				<ul class="navigation">
						<li>
							
							
						</li>
						
						<li class="latest">
							<a href="hakkimizda.php"> <h1> Hakkımızda</h1> </a> 
							
						</li>
						<li class="latest">
							 <a href="iletisim.php"> <h1>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İletişim </h1> </a> 
							
						</li>
					</ul>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
		break;

		case "kayitonay":

$kullanici_adi 	       = $_POST['kyt_kulladi'];
$kullanici_sifre       = $_POST['kyt_sifre'];
$kullanici_sifretekrar = $_POST['kyt_sifretekrar'];
$kullanici_isim        = $_POST['kyt_isim'];
$kullanici_soyad       = $_POST['kyt_soyad'];
$kullanici_tel         = $_POST['kyt_tel'];
$kullanici_email       = $_POST['kyt_email'];

		



		if(($kullanici_adi == "") and ($kullanici_sifre == "") and ($kullanici_sifretekrar == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=kayit.php">';
		}elseif($kullanici_sifre != $kullanici_sifretekrar){ 
	echo '<script type="text/javascript">alert("Şifreleriniz birbiriyle uyuşmuyor!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=kayit.php">';}
		

else{ 
	$kullanici_kaydet = mysql_query("INSERT INTO musteri (kulladi,soyad,telefon,mail,kullsifre,ad) VALUES ('$kullanici_adi','$kullanici_soyad','$kullanici_tel','$kullanici_email','$kullanici_sifre','$kullanici_isim')"); //Kullanıcıyı veritabanına kaydedicek mysql kodu
		echo '<script type="text/javascript">alert("Kayıt işleminiz başarıyla gerçekleşti!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=giris.php">';
		}

		break;
		}
	
?>