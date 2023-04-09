<!DOCTYPE html>
<?php 
session_start();
include('baglan.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>SEPETİM</title>
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
				<div id="checkout">
					<h4><span>SEPETİM</span></h4>
					<?php
include("baglan.php");
				if(isset($_POST["satın"])){
				$toplam = $_POST['toplam'];
				$_SESSION['toplam'] = $toplam;
				$sid = $_SESSION["kid"];
				
			$sorgu = mysql_query("SELECT * FROM sepet WHERE musteri_id='$sid' ORDER BY sepet_id DESC");
				
			if (mysql_num_rows($sorgu)){
		
		while($kayit=mysql_fetch_array($sorgu)){
			$urun_id = $kayit['urun_id'];
			$mid = $kayit['musteri_id'];
			$sepet_id = $kayit['sepet_id'];
			$adet = $kayit['adet'];
			$kategori_id = $kayit['kategori_id'];
			//$toplam = $_SESSION['toplam'];
			//$toplam = $kayit['fiyat'];
			$onay = 0;
			$toplam = $_POST['toplam'];
			$ekle = mysql_query("insert into siparisler (urun_id,musteri_id,sepet_id,adet,kategori_id,fiyat,onay) values ('$urun_id','$mid','$sepet_id','$adet','$kategori_id','$toplam','$onay')");
				
			$kaldir =(mysql_query("delete from sepet WHERE musteri_id='$sid'"));
			
				}
				if($kaldir){
				
				echo'<meta http-equiv="refresh" content="0;URL=index.php">';
					echo'<script type="text/javascript">alert("SİPARİŞİNİZ BAŞARIYLA VERİLDİ!");</script>';
			}
				}}
?>
					
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["giris"]))
{

echo'<meta http-equiv="refresh" content="0;URL=giris.php">';
	echo'<script type="text/javascript">alert("ALIŞVERİŞ YAPABİLMEK İÇİN ÜYE GİRİŞİ YAPINIZ");</script>';

}
else

{
?>


<?php
echo'<form action="sepet.php" method="post">';
		$sid = $_SESSION["kid"];
		$sorgu = mysql_query("SELECT * FROM sepet WHERE musteri_id='$sid' ORDER BY sepet_id DESC");

		
		while ($dizi = mysql_fetch_assoc($sorgu)){
			$kategori_id = $dizi['kategori_id'];
			$sepet_id = $dizi['sepet_id'];
		$adet	 				=	$dizi['adet'];
		$eklenmezamani 	=	$dizi['eklenmezamani'];
		$urun_id				=  $dizi['urun_id'];
		
						$sql_bilgi = mysql_query("SELECT * FROM urunler WHERE urun_id = '$urun_id'");
						$cek = mysql_fetch_assoc($sql_bilgi);
							
							$urun_tanim			=	$cek['aciklama'];
							$urun_adi				=	$cek['urun_adi'];
							$urun_fiyat			=	$cek['urun_fiyat'];
							
							$resim			=	$cek['resim'];
							$urun_fiyat = ($adet * $urun_fiyat);

							$toplam = $toplam + $urun_fiyat;
						
							
				echo'<input type="hidden" name="kategori_id" id="kategori_id" value='.$kategori_id.' />';
				echo'<input type="hidden" name="sepet_id" id="sepet_id" value='.$sepet_id.' />';
				echo'<input type="hidden" name="adet"  id="adet" value='.$adet.' />';
				echo'<input type="hidden" name="urun_id"   id="urun_id" value='.$urun_id.' />';
				echo'<input type="hidden" name="musteri_id" id="musteri_id" value='.$sid.' />';
				

							
?>
<table>
						<thead>
							<tr>
								<th></th>
								<th>ADET</th>
								<th></th>
								<th>Fiyat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="urun.php?id=<?=$urun_id?> "><img src="<?=$resim?>" width="160" height="180"> <a/> <b><?php echo $urun_adi; ?></b> 
								
									<p>
										<?php echo $urun_tanim; ?>
									</p></td>
								<td><?php echo $adet; ?>
									
								<td><a href="sepet.html" class=""></a> <a href="sepet.html" class=""></a>
									
								<td class="last"><div>
										
										<?php echo $urun_fiyat; ?> TL<a border="0" href="sepetten_cikar.php?urun_id=<?php echo $urun_id; ?>">SİL</a>
										
									</div></td>
							</tr> 
						</tbody>
					</table>
					
					
					
					
  
<?php
		}				
						
					echo'<input type="submit" name="satın" value="SATIN AL" class="myButton4" style="float:right;">';
				
				echo'</form>';
?>

<?php
}

?>


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