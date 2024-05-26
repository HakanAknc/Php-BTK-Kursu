-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Tem 2021, 21:10:32
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dbfotograf`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `ad`, `sifre`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblcekimturu`
--

DROP TABLE IF EXISTS `tblcekimturu`;
CREATE TABLE IF NOT EXISTS `tblcekimturu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cekimturu` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fiyat` int(11) NOT NULL,
  `fotograf` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblcekimturu`
--

INSERT INTO `tblcekimturu` (`id`, `cekimturu`, `fiyat`, `fotograf`) VALUES
(1, 'Düğün Çekimi', 1500, 'img/1.jpg'),
(2, 'Nişan Çekimi', 750, 'img/nisan.jpg'),
(3, 'Sünnet Çekimi', 750, 'img/sunnet.jpg\r\n'),
(4, 'Bebek Çekimi', 500, 'img/bebek.jpg\r\n'),
(5, 'Ürün Çekimi', 2500, 'img/urun.jpg'),
(6, 'Tanıtım Çekimi', 5000, 'img/tanitim.jpg\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblfotograf`
--

DROP TABLE IF EXISTS `tblfotograf`;
CREATE TABLE IF NOT EXISTS `tblfotograf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(333) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblfotograf`
--

INSERT INTO `tblfotograf` (`id`, `foto`) VALUES
(1, 'img/1.jpg'),
(2, 'img/2.jpg'),
(3, 'img/3.jpg'),
(4, 'img/aaa.png'),
(5, 'img/b.jpg'),
(6, 'img/c.jpg'),
(7, 'img/d.jpg'),
(8, 'img/ef11.png'),
(9, 'img/f1.jpg'),
(10, 'img/f2.jpg'),
(11, 'img/f3.jpg'),
(12, 'img/f4.jpg'),
(13, 'img/f5.jpg'),
(14, 'img/f6.jpg'),
(15, 'img/f7.jpg'),
(16, 'img/f8.jpg'),
(17, 'img/f9.jpg'),
(18, 'img/f10.jpg'),
(19, 'img/f11.jpg'),
(20, 'img/f12.jpg'),
(21, 'img/kapak.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblil`
--

DROP TABLE IF EXISTS `tblil`;
CREATE TABLE IF NOT EXISTS `tblil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sehir` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblil`
--

INSERT INTO `tblil` (`id`, `sehir`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyon'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbliletisim`
--

DROP TABLE IF EXISTS `tbliletisim`;
CREATE TABLE IF NOT EXISTS `tbliletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `konuid` int(11) NOT NULL,
  `mesaj` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `konuid` (`konuid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tbliletisim`
--

INSERT INTO `tbliletisim` (`id`, `ad`, `soyad`, `mail`, `telefon`, `konuid`, `mesaj`, `tarih`) VALUES
(23, 'Nazlı', 'Kolukırık', 'nazli@gmail.com', 1212, 1, 'Merhaba', '2021-07-06 21:24:55'),
(30, 'Ali', 'kolukırık', 'aakolukirik@gmail.com', 5555, 2, 'Selam', '2021-07-08 19:58:26'),
(31, 'Tuncer', 'Kaya', 'tuncer@gmail.com', 12333444, 1, 'Bu bir mesajdır', '2021-07-09 10:03:24'),
(32, 'Emine ', 'Küçük', 'emine@gmail.com', 3333, 2, 'Mesaj Geldimi', '2021-07-10 17:47:14'),
(33, 'Mehmet', 'Solak', 'mehmet@gmail.com', 11122, 3, 'Cevap', '2021-07-10 20:31:45'),
(34, 'Gamze', 'Köse', 'gamze@gmail.com', 111111, 3, 'Mesaj', '2021-07-11 00:16:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblkategori`
--

DROP TABLE IF EXISTS `tblkategori`;
CREATE TABLE IF NOT EXISTS `tblkategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategoriadi` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblkategori`
--

INSERT INTO `tblkategori` (`id`, `kategoriadi`) VALUES
(1, 'Dış Mekan'),
(2, 'İç Mekan'),
(3, 'Drone Çekimi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblkonu`
--

DROP TABLE IF EXISTS `tblkonu`;
CREATE TABLE IF NOT EXISTS `tblkonu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konuadi` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblkonu`
--

INSERT INTO `tblkonu` (`id`, `konuadi`) VALUES
(1, 'Randevu'),
(2, 'Şikayet'),
(3, 'Dilek');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblmusteri`
--

DROP TABLE IF EXISTS `tblmusteri`;
CREATE TABLE IF NOT EXISTS `tblmusteri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tckn` int(11) NOT NULL,
  `telefon` int(11) NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ilid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `il` (`ilid`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblmusteri`
--

INSERT INTO `tblmusteri` (`id`, `ad`, `soyad`, `tckn`, `telefon`, `mail`, `adres`, `ilid`) VALUES
(16, 'Burcu', '    kolukırık', 1233, 123333, '    as@gmail.com', 'çekirge', 16),
(54, '  mehmet', '   kolukırık', 1233, 1233, '   as@gmail.com', '   osmangazi', 26),
(55, '  ali', '  kaya', 123333, 1233333, '  kaya@gmail.com', '  mamak', 12),
(61, '  Ayşenur', ' Çalışkan', 123, 123, 'ayşenur@gmail.com', ' seyitgazi', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblodeme`
--

DROP TABLE IF EXISTS `tblodeme`;
CREATE TABLE IF NOT EXISTS `tblodeme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `odemeturu` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblodeme`
--

INSERT INTO `tblodeme` (`id`, `odemeturu`) VALUES
(1, 'Nakit'),
(2, 'Kredi Kartı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsatinal`
--

DROP TABLE IF EXISTS `tblsatinal`;
CREATE TABLE IF NOT EXISTS `tblsatinal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cekimturuid` int(11) NOT NULL,
  `fiyatid` int(11) NOT NULL,
  `cekimtarihi` date NOT NULL,
  `cekimyeri` int(11) NOT NULL,
  `odemeid` int(11) NOT NULL,
  `kategoriid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kategoriid` (`kategoriid`),
  KEY `odemeid` (`odemeid`),
  KEY `cekimyeri` (`cekimyeri`),
  KEY `cekimturuid` (`cekimturuid`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tblsatinal`
--

INSERT INTO `tblsatinal` (`id`, `cekimturuid`, `fiyatid`, `cekimtarihi`, `cekimyeri`, `odemeid`, `kategoriid`) VALUES
(58, 3, 1, '2021-07-01', 2, 2, 2),
(63, 6, 1, '2021-07-01', 9, 1, 2),
(64, 1, 1, '2021-07-21', 13, 2, 2),
(65, 6, 1, '2021-07-07', 1, 1, 1),
(66, 2, 1, '2021-07-07', 5, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbluye`
--

DROP TABLE IF EXISTS `tbluye`;
CREATE TABLE IF NOT EXISTS `tbluye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `eposta` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tbluye`
--

INSERT INTO `tbluye` (`id`, `kullaniciadi`, `eposta`, `sifre`) VALUES
(1, 'ali', 'ali@gmail.com', '123'),
(7, 'deneme', 'deneme@gmail.com', '234'),
(9, 'denemee', 'deneme2@gmail.com', '2222');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tbliletisim`
--
ALTER TABLE `tbliletisim`
  ADD CONSTRAINT `tbliletisim_ibfk_1` FOREIGN KEY (`konuid`) REFERENCES `tblkonu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `tblmusteri`
--
ALTER TABLE `tblmusteri`
  ADD CONSTRAINT `tblmusteri_ibfk_1` FOREIGN KEY (`ilid`) REFERENCES `tblil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `tblsatinal`
--
ALTER TABLE `tblsatinal`
  ADD CONSTRAINT `tblsatinal_ibfk_1` FOREIGN KEY (`odemeid`) REFERENCES `tblodeme` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblsatinal_ibfk_2` FOREIGN KEY (`kategoriid`) REFERENCES `tblkategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblsatinal_ibfk_3` FOREIGN KEY (`cekimyeri`) REFERENCES `tblil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblsatinal_ibfk_4` FOREIGN KEY (`cekimturuid`) REFERENCES `tblcekimturu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
