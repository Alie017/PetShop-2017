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
			<form action="uyeler.php" method="post">
				<div class="border1" align="center">
					
				<a href="siparisler.php" class="myButton2">SİPARİŞLER</a><a href="kategoriler.php" class="myButton2">ÜRÜNLER</a><a href="urunekle.php" class="myButton2">ÜRÜN EKLE</a><a href="uyeler.php" class="myButton2">ÜYELER</a>
					
					<?php


echo "<font size=\"4px\"></br></br><table border=\"1\" align=\"center\" class=\"liste\">  ";

if(isset($_POST['islem'])){
$islemdizi=explode("-",$_POST['islem']);
if($islemdizi[0]=='Sil'){
$sorgu2="DELETE FROM musteri WHERE musteri_id='$islemdizi[1]'";
mysql_query($sorgu2,$baglan);

}
}

echo "<font size=\"4px\">";
echo'<tr><td colspan="6" align="center"></br><h3>ÜYELER</h3></br></br></td></tr>';
$sorgu2="SELECT * FROM musteri";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){

echo '<tr><td>'.$gelen2["ad"].'</td><td>'.$gelen2["soyad"].'</td><td>'.$gelen2["telefon"].'</td><td>'.$gelen2["mail"].'</td><td><a href="uyeler.php?sil='.$gelen2["musteri_id"].' " class="myButton1">SİL</a></td><td><a href="uyeduzen.php?id='.$gelen2['musteri_id'].'" class="myButton1">DÜZENLE</a></td></tr>';
}

echo "</table></font></br></br>";

?>
<?php 
				if (isset($_GET["sil"]))
						{
							$sil1="delete from musteri  where musteri_id='".$_GET['sil']."'";
							$sorgu1=mysql_query($sil1);
							if($sorgu1)
							{
									echo '<script>
										alert("BAŞARI İLE SİLİNDİ..");
									</script>';
							}
							else
							{
									echo '<script>
										alert("BAŞARISIZ SİLİNEMEDİ!!!!");
									</script>';
							}

						}
						
				
?>	
				<br/><br/><hr/><a href="cikis.php" class="myButton">Çıkış </a>
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
</form>
</html>