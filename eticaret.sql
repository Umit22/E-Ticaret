-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Oca 2022, 17:23:58
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `anahtarkelime` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesai` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `baslik`, `aciklama`, `anahtarkelime`, `telefon`, `email`, `adres`, `facebook`, `instagram`, `youtube`, `twitter`, `logo`, `mesai`) VALUES
(1, 'Optik Dünyası', 'Optik Dünyası', 'Optik Dünyası', '05399582209', 'info@optikdünyası.com', 'Türkiye', 'facebook.com/optikdünyası', 'instagram.com/optikdünyası', 'youtube.com/optikdünyası', 'twitter.com/optikdünyası', '953387761586953815optik.png', '7/24 açığız');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_detay`, `hakkimizda_resim`, `hakkimizda_misyon`, `hakkimizda_vizyon`) VALUES
(1, 'OPTİK DÜNYASI', 'Optik Dünyası’nda yaptığımız her işin merkezinde müşterilerimizin olduğu bilinciyle, güler yüzlü, deneyimli ekibimizle müşterilerimizin memnuniyetini sağlamak için çalışıyoruz. Müşterilerimizi kaliteli hizmet, ürün çeşitliliği, şeffaf ve ekonomik fiyatlar ile buluşturuyoruz. Ömür boyu ücretsiz bakım, 7 günde iade, 30 günde değişim imkânı ve 2 yıl garanti ile kalite güvencesi sözü veriyoruz.Optik Dünyası olarak sahip olduğumuz değerlerle müşterilerimizi odak noktamıza alıp, ihtiyaç duyulan her an ve her yerde, deneyimimiz ve ekonomik fiyatlarımızla, her gün yüzbinlerce müşterimizi ağırlamaktan gurur duyuyoruz.', '137660699824756290logomuz.jpg', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`, `kategori_sira`, `kategori_durum`) VALUES
(1, 'Erkek gözlük', 1, 1),
(2, 'Kadın gözlük', 2, 1),
(3, 'Çocuk gözlük', 3, 1),
(4, 'Mavi ışık koruma', 51, 1),
(5, 'Outlet gözlük', 52, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_adi`, `kullanici_sifre`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_tel`, `kullanici_resim`, `kullanici_mail`) VALUES
(1, '2022-01-05 17:48:24', 'ümit', '25f9e794323b453885f5181f1b624d0b', 'ÜMİT KABAN', 2, 'Barbaros ', 'İstanbul', 'Bağcılar', '05399582209', '217010901074647495', ''),
(50, '2022-01-05 17:47:51', 'ali', '202cb962ac59075b964b07152d234b70', 'Ali Kaya', 1, '42 Evler', 'İstanbul', 'Bağcılar', '05385597762', '9828219584710516520', 'alikaya@gmail.com'),
(58, '2022-01-05 17:48:19', 'omer', '25f9e794323b453885f5181f1b624d0b', 'Ömer Barış', 1, 'Kirazlı', 'İstanbul', 'Bağcılar', '05345806311', '', 'omerbaris@gmail.com'),
(59, '2022-01-05 17:48:05', 'ahmet', '25f9e794323b453885f5181f1b624d0b', 'Ahmet Delikan', 1, '42 evler', 'İstanbul', 'Bağcılar', '05452583294', '', 'ahmet12@gmail.com'),
(60, '2021-12-28 10:52:49', 'Asude', 'e10adc3949ba59abbe56e057f20f883e', 'ASUDE YILDIZ', 2, '', '', '', '', '4999614886619312666', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` float(10,2) NOT NULL,
  `toplam_fiyat` float(10,2) NOT NULL,
  `odeme_turu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_onay` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `kullanici_id`, `urun_id`, `siparis_zaman`, `urun_adet`, `urun_fiyat`, `toplam_fiyat`, `odeme_turu`, `siparis_onay`) VALUES
(8, 50, 18, '2022-01-09 11:21:57', 1, 189.99, 0.00, '1', 0),
(9, 50, 4, '2022-01-09 11:21:57', 1, 199.99, 0.00, '1', 0),
(10, 50, 18, '2022-01-09 11:30:50', 1, 189.99, 0.00, '1', 0),
(11, 50, 4, '2022-01-09 11:30:50', 1, 199.99, 0.00, '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_aciklama` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_button` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL,
  `slider_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_link`, `slider_button`, `slider_resim`, `slider_sira`, `slider_durum`, `slider_banner`) VALUES
(19, 'erkek      ', 'Erkek Gözlük     ', 'Optik%20Dünyası.com     ', 'Satın Al ', '4145058549244675914.jpg', 1, 1, 1),
(20, 'kadın     ', 'Kadın Gözlük     ', 'Optik%20Dünyası.com     ', 'Satın Al     ', '1557858508812909255.jpg', 2, 1, 1),
(22, 'mavi ışık             ', 'Mavi Işık Gözlük             ', 'Optik%20Dünyası.com             ', 'Satın Al             ', '732599308696592894.jpg', 4, 1, 1),
(23, 'outlet', 'Outlet Gözlük', 'Optik%20Dünyası.com', 'Satın Al', '6645632912465826981.jpg', 5, 1, 1),
(24, 'reçeteli', 'Reçeteli Gözlük', 'Optik%20Dünyası.com', 'Satın Al', '413339778873762411.jpg', 6, 1, 1),
(25, '    ', '    ', '    ', '    ', '41276357900115393712.jpg', 0, 1, 0),
(26, '  ', '  ', '  ', '  ', '9892797507188725888.jpg', 0, 1, 0),
(28, 'Çocuk Gözlük  ', 'Çocuk ', 'Optik%20Dünyası.com  ', 'Satın Al  ', '7481706429914976816.jpg', 3, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_sira` int(11) NOT NULL,
  `urun_model` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_renk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` float(10,2) NOT NULL,
  `onecikan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_etiket` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `kategori_id`, `urun_resim`, `urun_baslik`, `urun_aciklama`, `urun_sira`, `urun_model`, `urun_renk`, `urun_adet`, `urun_fiyat`, `onecikan`, `urun_durum`, `urun_zaman`, `urun_etiket`) VALUES
(4, 2, '97482690549166427673.jpg', 'Kadın Güneş Gözlük', '<p>Kare Model Kadın G&uuml;neş G&ouml;zl&uuml;ğ&uuml;</p>\r\n', 2, '2021', 'siyah', 22, 199.99, '1', '1', '2021-12-28 10:46:24', 'Gözlük'),
(7, 4, '1013318816238895601.jpg', 'Mavi Işık Koruma Gözlük', '<p>Oval Model Desenli Mavi Işık Koruma G&ouml;zl&uuml;k</p>\r\n', 1, '2021', 'saydam', 15, 59.99, '1', '1', '2021-12-28 10:55:00', 'Gözlük'),
(8, 5, '921784808998462333.jpg', 'Seri Sonu Gözlük', '<p>Eski Sezon Desenli G&uuml;neş G&ouml;zl&uuml;ğ&uuml;</p>\r\n', 1, '2018', 'kahverengi', 8, 29.99, '1', '1', '2021-12-28 10:55:27', 'Gözlük'),
(17, 6, '19170714986181440775.jpg', 'Reçeteli Gözlük', '', 1, '2021', 'saydam', 15, 59.95, '1', '1', '2021-12-27 23:30:44', 'Gözlük'),
(18, 1, '1226235169528198712.jpg', 'Erkek Güneş Gözlüğü ', '<p>Yuvarlak Model Erkek G&uuml;neş G&ouml;zl&uuml;ğ&uuml;</p>\r\n', 1, '2021', 'siyah ', 22, 189.99, '1', '1', '2021-12-28 10:45:36', 'Gözlük'),
(19, 3, '3935087587158101567.jpg', 'Çocuk Gözlük', '<p>Kare Model Mavi &Ccedil;ocuk G&uuml;neş G&ouml;zl&uuml;ğ&uuml;</p>\r\n', 1, '2021', 'mavi', 10, 65.00, '1', '1', '2021-12-28 10:47:40', 'Gözlük'),
(20, 1, '4267954151051073810.jpg', 'Erkek Gözlük', '<p>Yeni sezon erkek g&ouml;zl&uuml;k</p>\r\n', 21, '2022', 'siyah ', 25, 256.00, '1', '1', '2022-01-09 13:20:12', 'Gözlük'),
(21, 1, '85345545250270486111.jpg', 'Erkek Gözlük', '<p>Yeni sezon&nbsp;</p>\r\n', 31, '2022', 'saydam', 12, 147.00, '1', '1', '2022-01-09 13:21:09', 'Gözlük'),
(22, 1, '84852971238154379049.jpg', 'Erkek Gözlük', '<p>Yeni sezon kare g&ouml;zl&uuml;k</p>\r\n', 2, '2022', 'kahverengi', 23, 123.00, '1', '1', '2022-01-09 13:22:19', 'Gözlük'),
(23, 1, '38271776477100509657.png', 'Erkek Gözlük', '<p>Yeni sezon&nbsp;</p>\r\n', 3, '2021', 'kahverengi', 12, 220.00, '1', '1', '2022-01-09 13:23:00', 'Gözlük'),
(24, 2, '83805545388106466411.jpg', 'Kadın Gözlük', '', 2, '2022', 'kahverengi', 23, 125.00, '1', '1', '2022-01-09 13:24:06', 'Gözlük'),
(25, 2, '29467668623102669432.jpg', 'Kadın Güneş Gözlük', '<p>Yeni sezon</p>\r\n', 3, '2022', 'sarı', 14, 450.00, '1', '1', '2022-01-09 13:24:42', 'Gözlük'),
(26, 2, '1402318813120272729.jpg', 'Kadın Gözlük', '<p>Yeni sezon&nbsp;</p>\r\n', 4, '2022', 'saydam', 36, 350.00, '1', '1', '2022-01-09 13:25:23', 'Gözlük'),
(27, 2, '386192576731617092012.jpg', 'Kadın Gözlük', '<p>Yeni sezon&nbsp;</p>\r\n', 5, '2022', 'pembe', 12, 479.00, '1', '1', '2022-01-09 13:26:23', 'Gözlük'),
(28, 3, '7712651489221830933.jpg', 'Çocuk Gözlük', '', 2, '2022', 'kırmızı', 3, 200.00, '1', '1', '2022-01-09 13:27:22', 'Gözlük'),
(29, 3, '18846381831127896562.jpg', 'Çocuk Gözlük', '<p>Yeni sezon</p>\r\n', 3, '2022', 'pembe', 5, 120.00, '1', '1', '2022-01-09 13:27:57', 'Gözlük'),
(30, 3, '69970440313186261634.jpg', 'Çocuk Gözlük', '<p>Yeni sezon</p>\r\n', 4, '2022', 'saydam', 15, 80.00, '1', '1', '2022-01-09 13:28:24', 'Gözlük'),
(31, 3, '40667059480103500175.jpg', 'Çocuk Gözlük', '', 5, '2022', 'Siyah', 12, 120.00, '1', '1', '2022-01-09 13:29:06', 'Gözlük'),
(32, 4, '72079654764125311433.jpg', 'Mavi Işık Koruma Gözlük', '<p>Yeni sezon</p>\r\n', 2, '2022', 'saydam', 15, 100.00, '1', '1', '2022-01-09 13:30:26', 'Gözlük'),
(33, 4, '71913794154159962235.jpg', 'Mavi Işık Koruma Gözlük', '<p>Yeni sezon</p>\r\n', 3, '2022', 'saydam', 12, 109.00, '1', '1', '2022-01-09 13:30:15', 'Gözlük'),
(34, 5, '42710566542121094154.jpg', 'Seri Sonu Gözlük', '', 2, '2009', 'saydam', 5, 50.00, '1', '1', '2022-01-09 13:31:35', 'Gözlük'),
(35, 5, '8324538116782076065.jpg', 'Seri Sonu Gözlük', '<p>Seri sonu yuvarlak g&ouml;zl&uuml;k</p>\r\n', 3, '2016', 'siyah', 2, 45.00, '1', '1', '2022-01-09 13:33:02', 'Gözlük'),
(36, 5, '939244531581477476.jpg', 'Seri Sonu Gözlük', '<p>Eski sezon kare g&ouml;zl&uuml;k</p>\r\n', 4, '2014', 'siyah ', 6, 65.00, '1', '1', '2022-01-09 13:32:47', 'Gözlük'),
(37, 5, '1883333609640045147.jpg', 'Seri Sonu Gözlük', '<p>Eski sezon yuvarlak g&ouml;&ouml;zl&uuml;k</p>\r\n', 5, '2011', 'siyah ', 6, 69.00, '1', '1', '2022-01-09 13:33:36', 'Gözlük');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_detay`, `yorum_zaman`, `urun_id`, `kullanici_id`, `yorum_onay`) VALUES
(6, 'Çok güzel', '2021-12-28 10:48:59', 18, 50, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
