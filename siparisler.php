<!DOCTYPE html>
<?php

session_start();

require_once("baglan.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ADMİN PANELİ</title>
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
			<div id="contents">
				<div class="border1" align="center">
					
				<a href="siparisler.php" class="myButton2">SİPARİŞLER</a><a href="kategoriler.php" class="myButton2">ÜRÜNLER</a><a href="urunekle.php" class="myButton2">ÜRÜN EKLE</a><a href="uyeler.php" class="myButton2">ÜYELER</a><br/><br/>
				<h1>SİPARİŞLER</H1>
				<?php
			echo'<table border="0" width="800px">';
			
			echo'<tr><td  align="center"><font color="red"><h3>ID</h3></font></td><td  align="center"><font color="red"><h3>SİPARİŞ SAYISI</h3></font></td></td><td  align="center"><font color="red"><h3>İŞLEM DURUMU</h3></font></td></tr>';
			echo'<tr><td colspan="4"><hr/></td></tr>';
			$sorgu = mysql_query("SELECT *,COUNT(musteri_id) AS say FROM siparisler GROUP BY musteri_id ");//
			
		while($kayit=mysql_fetch_array($sorgu)){
			
			/*$urun = $kayit['fiyat'];
			$toplam = $toplam + $urun;*/
			
			echo'<tr>
			
			<td align="center" width="250">'.$kayit["musteri_id"].'</td>
			
			<td align="center" width="250">'.$kayit["say"].'</td>
			<td align="center" width="250">'.$kayit["onay"].'</td>
			<td ><a href="siparis.php?id='.$kayit['musteri_id'].'" class="myButton1">DÜZENLE</a></td>
			</tr>';
			echo'<tr><td colspan="4"><hr/></td></tr>';
			
			}
			//echo $toplam;
				echo'</table>';
				
				?>
				<br/><br/><br/><br/><br/><br/><hr/><a href="cikis.php" class="myButton">Çıkış </a>
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