<!DOCTYPE html>
<?php

session_start();

require_once("baglan.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ÜYE DÜZENLE</title>
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
			<form action="uyeduzen.php" method="post">
				<div class="border1" align="center">
					
				<a href="siparisler.php" class="myButton2">SİPARİŞLER</a><a href="kategoriler.php" class="myButton2">ÜRÜNLER</a><a href="urunekle.php" class="myButton2">ÜRÜN EKLE</a><a href="uyeler.php" class="myButton2">ÜYELER</a>
					<?php
	
	include("baglan.php");
					
	 if(isset($_POST["kaydet"])){
					$isim2=$_POST["isim1"];
					$soyad2=$_POST["soyad1"];
					$tel2=$_POST["tel1"];
					$mail2=$_POST["mail1"];
					$a=$_POST["id"];
					$adres=$_POST["adres"];
					$sorgu=mysql_query("update musteri set ad='$isim2' , soyad='$soyad2' , telefon='$tel2' , mail='$mail2' , adres='$adres' where musteri_id='$a' ");		
					if ($sorgu){
					echo'<meta http-equiv="refresh" content="0;URL=uyeler.php">';
					echo'<script type="text/javascript">alert("BAŞARIYLA GÜNCELLENDİ!");</script>';

					}
					else
					{echo'olmadıııııı';}
		
	}
	
?>
					
					<?php

	
	@$or=$_GET['id'] ;


$sorgu2=mysql_query("select * from musteri where musteri_id='$or'");
if (mysql_num_rows($sorgu2)){
		$sayac=1;
		while($kayit=mysql_fetch_array($sorgu2)){

echo'<table border="0" width="740px" >';

echo '<tr>';
	echo'<td align="center" colspan="3"></br><h1><u>ÜYELİK GÜNCELLE</u></h1><br/></br></br></br></td>';

echo '</tr>';
echo '<tr>';
echo'<td align="right">
		<h3> İSİM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> SOYAD : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> TELEFON : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> ADRES : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> MAİL : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><br/></br><br/><br/>
		</td>';

echo '<td colspan="3">
<input type="text" value="'.$kayit['ad'].'" name="isim1"/><br/><br/>
<input type="text" value="'.$kayit['soyad'].'" name="soyad1"/><br/><br/>
<input type="text" value="'.$kayit['telefon'].'" name="tel1"/><br/><br/>
<textarea  rows="2" cols="22" name="adres" value="'.$kayit['adres'].'">'.$kayit['adres'].'</textarea></br>
<input type="text" value="'.$kayit['mail'].'" name="mail1"/><br/><br/></br>
<input type="hidden" value="'.$kayit['musteri_id'].'" name="id"/><br/><br/>

</td>';
echo '</tr>';
echo '<tr>';
	echo'<td align="center" colspan="3"><input type="submit" name="kaydet" class="myButton" value="Güncelle"/><br/></br></td>';
echo '</tr>';

}}
echo '</table>';
?>
					
				<br/><br/><a href="cikis.php" class="myButton">Çıkış </a>
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