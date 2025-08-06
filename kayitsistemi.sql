-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Oca 2024, 12:02:12
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayitsistemi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `en`
--

CREATE TABLE `en` (
  `id` int(16) NOT NULL,
  `kullanici_id` varchar(16) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `en`
--

INSERT INTO `en` (`id`, `kullanici_id`, `mesaj`) VALUES
(12, '1', 'hello '),
(13, '1', 'hi'),
(14, '1', 'good'),
(15, '1', 'fine'),
(16, '1', 'hi'),
(17, '1', 'hi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fr`
--

CREATE TABLE `fr` (
  `id` int(16) NOT NULL,
  `kullanici_id` varchar(16) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `fr`
--

INSERT INTO `fr` (`id`, `kullanici_id`, `mesaj`) VALUES
(14, '1', 'Bonjour à tous'),
(15, '1', 'bonjour');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(16) NOT NULL,
  `sifre` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullaniciAdi`, `sifre`) VALUES
(1, 'firat', 'asd'),
(4, 'yigit', '123'),
(5, 'batu', '123'),
(6, 'özgür', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tr`
--

CREATE TABLE `tr` (
  `id` int(16) NOT NULL,
  `kullanici_id` varchar(16) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `tr`
--

INSERT INTO `tr` (`id`, `kullanici_id`, `mesaj`) VALUES
(16, '1', 'merhaba'),
(17, '1', 'bonjour'),
(18, '1', 'asdasd\n'),
(19, '1', 'asdasd'),
(20, '1', 'asdasd'),
(21, '1', ''),
(22, '5', 'a\n'),
(23, '6', 'merhaba');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `en`
--
ALTER TABLE `en`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `fr`
--
ALTER TABLE `fr`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tr`
--
ALTER TABLE `tr`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `en`
--
ALTER TABLE `en`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `fr`
--
ALTER TABLE `fr`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `tr`
--
ALTER TABLE `tr`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
