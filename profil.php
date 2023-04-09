<!DOCTYPE html>
<?php

session_start();
include('baglan.php'); 
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PROFİLİM</title>
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
					<form method="post">
<?php

if($_SESSION['kulladi']){

	$ad=$_SESSION['kulladi'];
	
	
		
	echo '<font size="4px"><table border="15" align="center" style="border:5px solid #446980" >';
	
	echo '<tr>';
	echo '</br><td colspan="5" align="center"><h2></br><font color="#466b80">HOSGELDİN</font>  <font color=#154cac>'.$_SESSION['kulladi'].'</font></h2><br /><br /></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5" align="center"><h2><U></br>BİLGİLERİM</U></h2></br></br></td>';
	echo '</tr>';
	
	echo '<tr align="center"><td></br><H3><U>AD<U></H3></br></td><td><H3><U>SOYAD<U></H3></td><td><H3><U>TELEFON<U></H3></td><td><H3><U>MAİL<U></H3></td><td ></td></tr>';
	
$sorgu2="SELECT * FROM musteri where kulladi='$ad' ";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){
	
	echo '<tr align="center" ><td>'.$gelen2['ad'].'</td><td>'.$gelen2['soyad'].'</td><td>'.$gelen2['telefon'].'</td><td>'.$gelen2['mail'].'</td><td ><input type="submit" name="gun" value="Güncelle" class="myButton1"></td></tr>';}
if(isset($_POST['gun'])){
		
		header('location:guncelle.php');
	}
	?>

	
	<?php
	echo'<tr><td colspan="5" align="center"><h2><br/>SİPARİŞ GEÇMİŞİ</h2><br/></td></tr>';//&nbsp;&nbsp;
	echo '<tr align="center" ><td colspan="3" ><H3><U>ÜRÜN İD<U></H3></td><td colspan="3"><H3><U >ONAY<U></H3></td></tr>';
	$mus = $_SESSION["kid"];
	$sorgu = mysql_query("SELECT * FROM siparisler WHERE musteri_id='$mus' ");
	while($kayit=mysql_fetch_array($sorgu)){
		if($kayit["onay"] == 0){ $onay = 'ONAYLANMADI';} ELSE {$onay = 'ONAYLANDI';}
			echo'<tr>
			<td colspan="3" align="center" ><a href="urun.php?id='.$kayit['urun_id'].'">'.$kayit["urun_id"].'</a></td>
			<td align="center" colspan="3">'.$onay.'</td>
			</tr>';
			}
	echo '<tr>';
	echo '<td align="center" colspan="5"></br></br></br><a href="cikis.php" class="myButton">Çıkış</a></br></br></br></td>';
	echo '</tr>';
	
}else{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
echo "</table></font></br>";

?>
</form>
				
			
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