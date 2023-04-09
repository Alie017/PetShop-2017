-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2016, 12:29:13
-- Sunucu sürümü: 5.7.11
-- PHP Sürümü: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `petshop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kat_adi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kat_adi`) VALUES
(1, 'KUSLAR'),
(2, 'KEDILER'),
(3, 'KOPEKLER'),
(4, 'BALIKLAR'),
(5, 'KEMIRGENLER');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

CREATE TABLE `musteri` (
  `musteri_id` int(11) NOT NULL,
  `kulladi` varchar(45) NOT NULL,
  `kullsifre` varchar(45) NOT NULL,
  `ad` varchar(45) NOT NULL,
  `soyad` varchar(45) NOT NULL,
  `telefon` int(11) NOT NULL,
  `adres` varchar(200) NOT NULL,
  `mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`musteri_id`, `kulladi`, `kullsifre`, `ad`, `soyad`, `telefon`, `adres`, `mail`) VALUES
(4, 'bugra', '123', 'bugra', 'ulku', 5555555, 'barbaros mah. sedir sok. no:11 daire:1', 'bugra.ulku@hotmail.com'),
(5, 'ali', '123', 'ali', 'aygun', 31231233, 'esenler mah. inonu sok. no:41 daire:3', 'alixd@hotmail.com'),
(6, 'aaa', '123', 'dasasd', 'dsadasd', 12312, 'fezvipasa mah. no:55 daire:1', 'dasdadsa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `sepet_id` int(10) UNSIGNED NOT NULL,
  `urun_id` int(10) NOT NULL,
  `musteri_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `adet` int(11) UNSIGNED NOT NULL,
  `eklenmezamani` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `sepet_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyat` int(50) NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `onay` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `urun_id`, `musteri_id`, `sepet_id`, `adet`, `fiyat`, `kategori_id`, `onay`) VALUES
(29, 8, 4, 48, 2, 862, 2, 1),
(30, 3, 4, 47, 1, 862, 1, 1),
(31, 17, 4, 49, 2, 110, 5, 1),
(32, 13, 4, 52, 1, 3353, 4, 1),
(33, 15, 4, 51, 1, 3353, 5, 1),
(34, 7, 4, 50, 1, 3353, 2, 1),
(35, 10, 4, 54, 1, 453, 3, 1),
(37, 15, 5, 56, 1, 232, 5, 1),
(38, 11, 5, 55, 2, 232, 3, 1),
(39, 4, 5, 63, 1, 6050, 1, 1),
(40, 2, 5, 62, 1, 6050, 1, 1),
(41, 13, 5, 61, 1, 6050, 4, 1),
(42, 10, 5, 60, 1, 6050, 3, 1),
(43, 12, 5, 59, 2, 6050, 4, 1),
(46, 16, 6, 65, 1, 123552, 5, 1),
(48, 17, 4, 67, 1, 277, 5, 1),
(49, 13, 4, 66, 1, 277, 4, 1),
(50, 4, 4, 68, 1, 555, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(45) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `urun_fiyat` float DEFAULT NULL,
  `urun_stok` int(11) DEFAULT NULL,
  `aciklama` text,
  `resim` varchar(255) DEFAULT NULL,
  `urun_adet` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `kategori_id`, `urun_fiyat`, `urun_stok`, `aciklama`, `resim`, `urun_adet`) VALUES
(2, 'kus yemi', 1, 301, 501, 'asdasdasddaddsdsaDSDAS', 'dosyalar/fg396.jpg', 3),
(3, 'birinci Kus Yemi', 1, 20, 20, 'super yem', 'dosyalar/kus3.jpg', -2),
(4, 'yemyemyem', 1, 555, 20, 'anasıda guzel', 'dosyalar/kus4.jpg', 0),
(5, 'kuskus', 1, 11, 21, 'sasdasdadasdadadas dsadsadasd sadasdasda', 'dosyalar/kus5.jpg', 3),
(7, 'kedi mama', 2, 3121, 123, 'dasdasdddad', 'dosyalar/kedi3.jpg', 311),
(8, 'kedi yemyem', 2, 421, 3123, 'dsadsdasadasdd', 'dosyalar/kedi4.jpg', 128),
(9, 'kopek mama', 3, 131, 2313, 'dsfsdfsfsfdfsf', 'dosyalar/kopek2.jpg', 121),
(10, 'kopek yem', 3, 231, 321, 'dsdasdadsd', 'dosyalar/kopek3.jpg', 226),
(11, 'kopek yemyem', 3, 111, 3213, 'ddaadsdad', 'dosyalar/kopek4.jpg', 116),
(12, 'balik yem', 4, 2121, 10, 'dsdsaddadsa', 'dosyalar/ty9165.jpg', 128),
(13, 'balik', 4, 222, 232, 'dsdsaddadsa', 'dosyalar/balik2.jpg', 122),
(14, 'balik yemler', 4, 444, 312, 'dsdfsdfsfsfs', 'dosyalar/balik3.jpg', 306),
(15, 'hamster', 5, 10, 22, 'dfsdfafd', 'dosyalar/hem4.jpg', 227),
(16, 'hamster yem', 5, 123131, 23123, 'hamster yemleri', 'dosyalar/ty8109.jpg', 305),
(17, 'hamster yemyem', 5, 55, 423, 'dfdfsdfsdffdasfsasdfsafdfsafd', 'dosyalar/hem7.jpg', 302),
(19, 'royal canin', 2, 44, 50, 'kÄ±sÄ±rlastÄ±rÄ±lmÄ±s kedi mamasÄ±', 'dosyalar/fg7304.jpg', 50),
(20, 'Pro Plan', 2, 90, 33, 'van kedileri icin', 'dosyalar/rt3307.jpg', 33),
(21, 'Goddy Kopek MamasÄ±', 3, 115, 55, 'kopeklerin sevdigi tat', 'dosyalar/rt6651.jpg', 55),
(22, 'Discus BalÄ±k Yemi', 4, 10, 90, 'beta cinsi baliklar icin', 'dosyalar/ty7161.jpg', 90),
(23, 'Fiesta Hamster', 5, 50, 11, 'Super Hamster yemi', 'dosyalar/yu5049.jpg', 11);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `musteri`
--
ALTER TABLE `musteri`
  ADD PRIMARY KEY (`musteri_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`sepet_id`),
  ADD KEY `urun_id` (`urun_id`),
  ADD KEY `musteri_id` (`musteri_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `urun_id_2` (`urun_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `musteri`
--
ALTER TABLE `musteri`
  MODIFY `musteri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `sepet_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
