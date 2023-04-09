<?php

	$sorgu2=mysql_query("select * from urunler");
	if (mysql_num_rows($sorgu2)){
		echo '<table border="1" width="740" style="border:#6c010b; size:1px;">';
		while($kayit=mysql_fetch_array($sorgu2)){
			echo '<form action="" method="post" name="form'.$sayac.'" enctype="multipart/form-data">';
			
			echo '<tr>';
			echo '<td><img src="'.$kayit["resim"].'" width="190" height="250"/></td>';
		echo '<td align="center" width="300px">
			<font color="red" size="4"><u>URUN ADI</u></font><h3>'.$kayit["urun_adi"].'</h3></font></br></br>
			<h3><u>FİYAT </u>:'.$kayit["urun_fiyat"].'</h3></br>
			<h3><u>STOK ADEDİ </u>:'.$kayit["urun_stok"].'</h3></br>
			<h3><u>ACIKLAMA </u>:'.$kayit["aciklama"].'</h3></br>
			
			</td>';
			echo '<td align="right" width="260px">
			
		<h3> URUN ADI : </h3></br>
		<h3> FİYAT : </h3></br>
		<h3> STOK : </h3></br>
		<h3> ACIKLAMA : </h3></br></br></br></br>
		</td>';
		echo '<td width="500px">
		<input type="text" name="urunad"/></br></br>
		<input type="text" name="fiyat"/></br></br>
		<input type="text" name="stok"/></br></br>
		<input type="text" name="acikla"/></br></br>
		<input type="hidden" name="id" value="'.$kayit["id"].'"/>
				
				<input type="submit" name="guncelle" class="myButton1" value="Güncelle"/>
				<input type="submit" name="kaldir" class="myButton1" value="Filmi Kaldır"/>
				<div align="center"><input type="file" class="myButton1" name="guncelleResim" style="width:75px; "/></div>
			</td>';
			echo '</tr>';
			echo '</form>';
		}
		echo '</table>';
		}
?>
<?php
		echo '</select>';
		
		echo'</br></br></br>';
	
	
		echo '<h2>KATEGORİ SEÇİNİZ</h2>';
		echo '<select name="kategori">';	
			$sql = "SELECT * FROM kategoriler ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['kat_adi'];
		echo"<option >$isim</option>";
		
		}
		
	echo '</select></tr></td>';
	
	
	if(isset($_POST['theinput'])){
	
	$kategori = $_POST['theinput'];
	if ($kategori = 'KUSLAR' ){
	$kate = 1;
	}
	elseif ($kategori = 'KEDILER' ){
	$kate = 2;
	}
	elseif ($kategori = 'KOPEKLER' ){
	$kate = 3;
	}
	elseif ($kategori = 'BALIKLAR' ){
	$kate = 4;
	}
	else ($kategori = 'KEMIRGENLER' ){
	$kate = 5;
	}	
}
	?>
	
	
	<select name="thelist" onChange="combo(this,\'theinput\')">
			$sql = "SELECT * FROM kategoriler ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz[\'kat_adi\'];
		<option >'.$isim.'</option>
		
		}		
	</select>
	