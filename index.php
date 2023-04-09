<!DOCTYPE html>
<?php 
session_start();
include('baglan.php');
error_reporting(0);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ANASAYFA</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="resimler/lg111.png" alt="LOGO" ></a>
				</div>
				<div id="navigation">
					<ul id="primary">
						<li class="selected">
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
			<div id="contents">
				<div id="adbox">
					<div id="search">
						
						
						<form action="index.html" method="post">
						
							
						</form>
					</div>
					<img src="resimler/banner1.png" height="355" width="850" alt="SERİALİZE VE JSON"> <a href="index.html"></a> <span></span>
					
				</div>
				<div id="main">
					<div id="stocks" >
											<?php
if(!isset($_SESSION["giris"]))
{

echo 			'<div align="center"><table width=100%>
					<tr bgcolor="#F0A299">
					<td><div align="center"><br/>Ürünleri Sepete Ekleyebilmek İçin <a href="kayit.php"><b>Buradan</b></a> Üye Olunuz.</br>
					Üyeyseniz <a href="giris.php"><b>Buradan</b></a> Giriş Yapınız.</div></td>
					</tr>
					</table></div>';
}
?>
					<div id="featured">
						<h4><span>Ürünler</span></h4>
						</div>
								
					

<ul>
<?php

		$sorgu = mysql_query("SELECT * FROM urunler");
		
		while ($dizi = mysql_fetch_assoc($sorgu)){
		
		$urun_id		= 	$dizi['urun_id'];
		$urun_adi		=	$dizi['urun_adi'];
		$urun_tanim	=	$dizi['aciklama'];
		$urun_adet 	=	$dizi['urun_adet'];
		$urun_fiyat 	=	$dizi['urun_fiyat'];
		$resim 	=	$dizi['resim'];
		
		 echo'<li>';
			echo '<a href="urun.php?id='.$dizi['urun_id'].'" class="preview"  title="Preview"> <img  src="'.$dizi["resim"].'" width="170" height="190"/><span class="icon" ></span></a><br/><br/>';
			echo '<span>'.$urun_fiyat.' TL</span>'.$urun_adi.'<em></em>';
			if(!empty($_SESSION["giris"])){
			echo '<a href="sepete_ekle.php?urun_id='.$urun_id.'&musteri_id='.$_SESSION["kid"].'" class="btn-cart" >Sepete Ekle</a>';
			}
			 echo'</li>';
			 
			 }
		
?>
 
				</ul>
				  </div> 	
					<div id="sale">
						
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="background">
					<div id="connect">
						
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