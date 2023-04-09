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
	
		 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#kate').change(function(){

		
		var deger =$(this).val();
		$('#urun').empty();
		$.post("siparislistele.php"	,{kateid:deger},function(a){
			
			$('#urun').append(a);
		})	
		
	});
	
	
});


</script>
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
					
					<?php
		echo '<div style=" ">';
		echo '<select name="kate" id="kate">';
			$sql = "SELECT * FROM kategoriler ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['kat_adi'];
		echo"<option value=".$yaz['kategori_id']." >$isim</option>";
		
		}		
	echo '</select>';	
	echo '</br></br>';
	echo'</div>';
	
	echo'<div id="urun" name="urun">';

echo'</div>';
	
	
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