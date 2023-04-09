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
					<?php
					if(isset($_POST["onayla"])){
				
				$ad = $_GET['id'];
				
				$sorgu3=mysql_query("update siparisler set onay='1' where musteri_id='$ad'  ");
				
				if($sorgu3){
				
				echo'<meta http-equiv="refresh" content="0;URL=siparisler.php">';
					echo'<script type="text/javascript">alert("onaylandı!");</script>';
			}
				}
				
				if(isset($_POST["onay"])){
					
					$ida = $_POST["id"];
					
					$guncelle=mysql_query("update siparisler set onay='1' where siparis_id='$ida'  ");

				}
				
				if(isset($_POST["sila"])){
				
					$idi = $_POST["id"];
					$kaldir =mysql_query("delete from siparisler where siparis_id='$idi'");

				}
					
				
				
				
				
				
					?>
				<a href="siparisler.php" class="myButton2">SİPARİŞLER</a><a href="kategoriler.php" class="myButton2">ÜRÜNLER</a><a href="urunekle.php" class="myButton2">ÜRÜN EKLE</a><a href="uyeler.php" class="myButton2">ÜYELER</a><br/><br/>
				<h1>SİPARİŞLER</H1>
				<?php
			echo'<table border="0" width="800px">';
			
			echo'<tr><td  align="center"><font color="red"><h3>SİPARİŞ İD</h3></font></td><td  align="center"><font color="red"><h3>ÜRÜN İD</h3></font></td><td  align="center"><font color="red"><h3>ADET</h3></font></td><td  align="center"><font color="red"><h3>İŞLEM DURUMU</h3></font></td></tr>';
			echo'<tr><td colspan="5"><hr/></td></tr>';
			$ad = $_GET['id'];
			$sorgu = mysql_query("SELECT * FROM siparisler where musteri_id='$ad' ");
	if (mysql_num_rows($sorgu)){
		while($kayit=mysql_fetch_array($sorgu)){
			echo'<form action="siparis.php?id='.$kayit['musteri_id'].' " method="post">';
			
				
				
			echo'<tr>
			<td align="center" width="200">'.$kayit["siparis_id"].'</td>
			
			<td align="center" width="250"><a href="urun.php?id='.$kayit['urun_id'].'">'.$kayit["urun_id"].'</a></td>
			<td align="center" >'.$kayit["adet"].'</td>
				<td align="center" width="250">'.$kayit["onay"].'</td>
			
				<td align="center" ><input type="submit" value="SİL" class="myButton1" name="sila" ></td>
				<td align="center" ><input type="submit" value="ONAYLA" class="myButton1" name="onay" ></td>
					<td align="center" ><input type="hidden" name="id" value="'.$kayit["siparis_id"].'" /></td>
				
			</tr>';
			
			echo'<tr><td colspan="5"><hr/></td></tr>';
		
			}
	}
					echo'</table>';
				echo '<BR/><BR/><input type="submit" value="TÜM SİPARİŞLERİ ONAYLA" class="myButton" name="onayla">';
				echo'</form>';
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