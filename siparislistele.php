<form action="urunguncelle.php" method="post">
<?php
require_once("baglan.php");
				
$kateid = $_POST['kateid'];

echo "<table border=\"0\" align=\"center\" width=\"800\">";


echo'<tr><td  align="center"><font color="red"><h3>RESİM</h3></font></td><td  align="center"><font color="red"><h3>ÜRÜN ADI</h3></font></td><td  align="center" ><font color="red"><h3>FİYAT</h3></font></td><td  align="center"><font color="red"><h3>STOK</h3></font></td><td  align="center"><font color="red"><h3 >AÇIKLAMA</h3></font></td></tr>';
echo'<td colspan="6"><hr/><hr/><br/></td>';
$sorgu2="SELECT * FROM urunler where kategori_id='$kateid' ";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){

echo '<tr>
<td width="150"><img src='.$gelen2["resim"].' width="150" height="150"/></td>
<td align="center" width="250">'.$gelen2["urun_adi"].'</td>
<td align="center" width="150">'.$gelen2["urun_fiyat"].' TL</td>
<td align="center" width="150">'.$gelen2["urun_adet"].'</td>
<td width="200" align="center">'.$gelen2['aciklama'].'</td>
<td width="100" align="center"><a href="urunguncelle.php?id='.$gelen2['urun_id'].'" class="myButton1">DÜZENLE</a></td>
</tr>';
echo'<tr><td colspan="6"><hr/></td></tr>';
}
echo "</table></br></br>";
echo '</br></br>';
	
?>

</form>				
				
		