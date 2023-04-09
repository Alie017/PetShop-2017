<?php
$baglan=@mysql_connect("localhost","root","") or die("Veritabanı bağlantısı sağlanamadı!");
mysql_select_db("petshop") or die("Veritabanı bulunamadı!");
?>