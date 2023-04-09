<!DOCTYPE html>
<?php 
session_start();
include('baglan.php');
?>
 

<html>
<head>
	<meta charset="UTF-8">
	<title>Ürün Hakkında</title>
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
				<div id="product">
					<div class="section">
									<?php
						
		$or=$_GET['id'] ;
	$sorgu2=mysql_query("select * from urunler where urun_id='$or' ");
		if (mysql_num_rows($sorgu2)){
		
		while($kayit=mysql_fetch_array($sorgu2)){

			echo ' <img  src="'.$kayit["resim"].'" width="330" height="300"/>';

		}
	}
		

?>
						
					</div>
					<div class="section">
					
					<?php
						
		 
		$or=$_GET['id'] ;
	$sorgu2=mysql_query("select * from urunler where urun_id='$or' ");
		if (mysql_num_rows($sorgu2)){
		
		while($kayit=mysql_fetch_array($sorgu2)){
			
			 $urun_id = $kayit['urun_id'];
			$ad = $kayit['urun_adi'];
			$fiyat = $kayit['urun_fiyat'];
			$tanım = $kayit['aciklama'];
			echo "<h2><span>$fiyat TL</span>$ad</h2>";
			echo "<p>$tanım</p>";
			
			if(!empty($_SESSION["giris"])){
				echo'<form action="sepete_ekle.php?urun_id='.$urun_id.'&musteri_id='.$_SESSION["kid"].'" method="post">';	
			echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" Sepete Ekle" class="btn-cart">';
			echo'</form>';
			}
		}
	}
		

?>
					
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
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>