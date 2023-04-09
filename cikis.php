<?php
ob_start(); //Sayfanın daha hızlı yüklenmesine yardımcı olur
session_start(); 
session_destroy(); 
echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
ob_end_flush(); //ob_start() fonksiyonu temizliyoruz
?>