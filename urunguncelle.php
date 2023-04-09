<!DOCTYPE html>
<?php

session_start();

require_once("baglan.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ÜRÜN GÜNCELLE</title>
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
			<?php
	$baglanti=@mysql_connect("localhost","root","") or die("Mysql'e bağlantı kurulamadı!") ;
	mysql_select_db("petshop",$baglanti) or die("Veritabanına bağlantı kurulamadı!");
	mysql_query("Set names 'utf-8'");
	mysql_query("set character set utf-8");
	mysql_query("set collation_connection= 'utf-8_general_ci'");
	if(isset($_POST["kaydet"])){
		if ($_FILES["resim"]["size"]<1024*1024){
			if ($_FILES["resim"]["type"]=="image/jpeg"){
				$urunad=$_POST["urun"];
					$fiyat=$_POST["fiyat"];
					$stok=$_POST["stok"];
					$acikla=$_POST["aciklama"];
					$kategori = $_POST['kate'];
					
				$dosya_adi=$_FILES["resim"]["name"];
				$uret=array("as","rt","ty","yu","fg");
				$uzanti=substr($dosya_adi,-4,4);
				$sayi_tut=rand(1,10000);
				$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
				if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
					echo '<h3>ÜRÜN BAŞARIYLA EKLENDİ</h3>';
					$sorgu=mysql_query("insert into urunler (resim,urun_adi,urun_fiyat,urun_stok,aciklama,kategori_id,urun_adet) values ('$yeni_ad','$urunad','$fiyat','$stok','$acikla','$kategori','$stok')");
					}
				}
			}	
		}
		
				
	else if(isset($_POST["guncelle"])){
		if ($_FILES["guncelleResim"]["size"]<1024*1024){
			if ($_FILES["guncelleResim"]["type"]=="image/jpeg"){
				$dosya_adi=$_FILES["guncelleResim"]["name"];
				$uret=array("as","rt","ty","yu","fg");
				$uzanti=substr($dosya_adi,-4,4);
				$sayi_tut=rand(1,10000);
				$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
				if (move_uploaded_file($_FILES["guncelleResim"]["tmp_name"],$yeni_ad)){
					$id=$_POST["id"];
					$urunad=$_POST["urunad"];
					$fiyat=$_POST["fiyat"];
					$stok=$_POST["stok"];
					$acikla=$_POST["acikla"];
					$kategori = $_POST['kate'];
					
	
					$silmeSorgu=mysql_fetch_array(mysql_query("select * from urunler where urun_id='$id'"));
					if(unlink($silmeSorgu["resim"])) 

					$sorgu=mysql_query("update urunler set resim='$yeni_ad' , urun_adi='$urunad' , urun_fiyat='$fiyat' , urun_stok='$stok', aciklama='$acikla', kategori_id='$kategori' where urun_id='$id'  ");		
					if ($sorgu)
					{echo'<meta http-equiv="refresh" content="0;URL=kategoriler.php">';
					echo'<script type="text/javascript">alert("ÜRÜN BAŞARIYLA GÜNCELLENDİ!");</script>';}
				}
			}
		}	
	}
		else if(isset($_POST["kaldir"])){
					$id=$_POST["id"];
					$kaldir =(mysql_query("delete from urunler where urun_id='$id'"));
					if ($kaldir)
					{echo'<meta http-equiv="refresh" content="0;URL=kategoriler.php">';
					echo'<script type="text/javascript">alert("ÜRÜN BAŞARIYLA SİLİNDİ!");</script>';}
					}
	
?>
				<div class="border1" align="center">
					
				<a href="siparisler.php" class="myButton2">SİPARİŞLER</a><a href="urunekle.php" class="myButton2">ÜRÜN EKLE</a><a href="uyeler.php" class="myButton2">ÜYELER</a><a href="kategoriler.php" class="myButton2">KATEGORİLER</a>
					
					<form action="urunguncelle.php" method="post" name="form1" enctype="multipart/form-data"><br/><br/>
		

					<?php
	
	@$a=$_GET['id'];
	$sorgu2=mysql_query("select * from urunler where urun_id='$a'");
	if (mysql_num_rows($sorgu2)){
		echo '<table border="10" width="450" >';
		$sayac=1;
		while($kayit=mysql_fetch_array($sorgu2)){
			$sayac++;
			echo '<form action="" method="post" name="form'.$sayac.'" enctype="multipart/form-data">';
			
			echo '<tr>';
			
			echo '<td colspan="2" align="center"><img src="'.$kayit["resim"].'" width="190" height="250" /><br/><br/></td>';
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td align="right" width="300"><h3><ins> ÜRÜN ADI</ins> : &nbsp;&nbsp;</h3></br></td>';
		echo '<td width="250px" ><input type="text" name="urunad" value="'.$kayit["urun_adi"].'" /></br></br></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="right"><h3><ins> FİYAT</ins> : &nbsp;&nbsp;</h3></br></td>';
		echo '<td><input type="text" name="fiyat" value="'.$kayit["urun_fiyat"].'" /></br></br></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="right"><h3><ins> STOK</ins> : &nbsp;&nbsp;</h3></br></td>';
		echo '<td><input type="text" name="stok" value="'.$kayit["urun_stok"].'" /></br></br></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="right"><h3><ins> AÇIKLAMA</ins> : &nbsp;&nbsp;</h3></br></td>';
		echo '<td><textarea cols="22" name="acikla">'.$kayit["aciklama"].'</textarea></br></br></td>';
		echo '</tr>';
		echo '<td align="right"><h3><ins> KATEGORİLER</ins> : &nbsp;&nbsp;</h3></br></td>';
		
			echo '<td>';
			
	echo '<select name="kate" id="kutu">';
			$sql = "SELECT * FROM kategoriler  ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['kat_adi'];
		echo"<option value=".$yaz['kategori_id'].">$isim</option>";
		
		}		
	echo '</select>';	
	
	echo '</td>';
		echo '<input type="hidden" name="id" value="'.$kayit["urun_id"].'" />';
		echo '</table>';
		
		echo '<input type="submit" name="guncelle" class="myButton1" value="Güncelle" style="width:120px; " />';
				echo '<input type="submit" name="kaldir" class="myButton1" value="Kaldır" style="width:120px; "/>';
				echo '<div align="center"><input type="file" class="myButton1" name="guncelleResim" style="width:200px; "/></div>';
			
			echo '</form>';	
		}
		}
		
?>
</form>	
					
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