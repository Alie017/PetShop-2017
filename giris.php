<!DOCTYPE html>
<?php
session_start();

require_once("baglan.php");
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
			<div id="contents">
				<div class="border1">
					<form action="giris_tamamla.php" method="post">

<br><div align="center"><br><h1><font color="#466b80">ÜYE GİRİŞİ</font></h1>
<br>
<br>
<table>
<tr>
<td><h3>Kullanıcı Adı :</h3></td>
<td><input type="text" name="grs_kulladi"></td>
</tr>
<tr>
<td><h3>Şifre:</h3></td>
<td><input type="password" name="grs_sifre"></td>
</tr>
</table>
</BR>
<input type="submit"  class="myButton" value="GİRİŞ" name="btn">
</form>
<form method="GET" >
<input type="submit" class="myButton" name="kayit" value="KAYIT OL" /> 
</form>
<?php
	if(isset($_GET['kayit'])){
	header("Location: kayit.php");
}
?>
<br><br>
<a href="index.php">Anasayfaya Dön</a><br><br>
</div>
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