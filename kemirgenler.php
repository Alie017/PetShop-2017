<!DOCTYPE html>
<?php 
session_start();
include('baglan.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>KEMİRGENLER</title>
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
						<li class="selected">
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
				<h4><span>Kemirgenler</span></h4>
			<div id="stocks" >
				<ul>
						<?php
						
		include('baglan.php'); 
		
		$sorgu2=mysql_query("select * from urunler where kategori_id=5 ");
		if (mysql_num_rows($sorgu2)){
		
		while($kayit=mysql_fetch_array($sorgu2)){
			if($kayit['urun_stok']>0){
			$ad = $kayit['urun_adi'];
			$fiyat = $kayit['urun_fiyat'];
		 echo'<li>';
			echo '<a href="urun.php?id='.$kayit['urun_id'].'" class="preview"  title="Preview"> <img  src="'.$kayit["resim"].'" width="170" height="190"/><span class="icon" ></span></a><br/><br/>';
			echo "<span>$fiyat  TL</span>$ad<em></em>";
			if(!empty($_SESSION["giris"])){
			echo '<a href="sepete_ekle.php?urun_id='.$kayit['urun_id'].'&musteri_id='.$_SESSION["kid"].'" class="btn-cart" >Sepete Ekle</a>';
			}
			 echo'</li>';
			
			}
		
		}
	}
		

?>
</ul>
				</div>	
				<div class="footer">
					
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