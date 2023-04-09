<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>BİLGİLERİ GÜNCELLE</title>
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
					
<div align="center">

<?php
	
	include("baglan.php");
					
	 if(isset($_POST["kaydet"])){
					$isim2=$_POST["isim1"];
					$soyad2=$_POST["soyad1"];
					$tel2=$_POST["tel1"];
					$mail2=$_POST["mail1"];
					$a = $_SESSION['kulladi'];
					$adres = $_POST['adres'];
					$sorgu=mysql_query("update musteri set ad='$isim2' , soyad='$soyad2' , telefon='$tel2' , mail='$mail2' , adres='$adres' where kulladi='$a' ");		
					if ($sorgu){
						$_SESSION['ad'] = $isim2;
						$_SESSION['kullsoyad'] = $soyad2;
						$_SESSION['telefon'] = $tel2;
						$_SESSION['email'] = $mail2;
						$_SESSION['adres'] = $adres;
						echo'<script type="text/javascript">alert("Bilgileriniz Başarıyla Güncellendi!");</script>';
						
						
					}
					else
					{echo'olmadıııııı';}
		
	}
	
?>
<form method="post">

<?php 
$adi = $_SESSION['kulladi'];


$sorgu2=mysql_query("select * from musteri where kulladi='$adi'");


echo'<table border="0" width="900px" >';
echo '<tr>';
echo'<br/><td><a href="profil.php" class="myButton1"><p>Geri</p></a></td>';
echo '<tr>';
echo '<tr>';
	echo'<td align="center" colspan="3"><h1><font color="#466b80">ÜYELİK GÜNCELLE</font></h1><br/></td>';

echo '</tr>';
echo '<tr>';
echo'<td align="right">
		<h3> İSİM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h3>
		<h3> SOYAD : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> TELEFON : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> ADRES : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3> MAİL : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><br/></br></br>
		</td>';

echo '<td colspan="3">
<input type="text" value="'.$_SESSION['ad'].'" name="isim1"/><br/><br/>
<input type="text" value="'.$_SESSION['kullsoyad'].'" name="soyad1"/><br/><br/>
<input type="text" value="'.$_SESSION['telefon'].'" name="tel1"/><br/><br/>
<textarea  rows="2" cols="22" name="adres" value="'.$_SESSION['adres'].'">'.$_SESSION['adres'].'</textarea></br>
<input type="text" value="'.$_SESSION['email'].'" name="mail1"/><br/><br/></br></br>
</td>';
echo '</tr>';
echo '<tr>';
	echo'<td align="center" colspan="3"><input type="submit" name="kaydet" class="myButton1" value="Güncelle"/><br/></br></td>';
echo '</tr>';


echo '</table>';

?>

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
	</form>
</body>
</html>