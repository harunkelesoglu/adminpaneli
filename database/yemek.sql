-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Oca 2016, 23:47:49
-- Sunucu sürümü: 5.5.43-0ubuntu0.14.04.1
-- PHP Sürümü: 5.6.14-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `yemek`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cesidi`
--

CREATE TABLE IF NOT EXISTS `cesidi` (
  `ycesitno` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ycesitisim` varchar(30) NOT NULL DEFAULT '',
  `seoismi` varchar(50) DEFAULT NULL,
  UNIQUE KEY `ycesitno` (`ycesitno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Tablo döküm verisi `cesidi`
--

INSERT INTO `cesidi` (`ycesitno`, `ycesitisim`, `seoismi`) VALUES
(4, 'seksen', 'doksanaltÄ±'),
(2, 'buasdadasda', 'mistasezxa mistarooow'),
(5, 'buumbastic', 'mistasezxa mistarooow'),
(6, 'adadadadad', NULL),
(7, 'asdadadad', 'adadadadad'),
(8, 'asdadadad', 'adadadadad'),
(9, '', 'Ã§ilkeli flan'),
(10, 'Ã§ilkeli flan', 'parmakla yediren yemekler'),
(11, 'Ã§ilkeli flan', 'parmakla yediren yemekler'),
(12, 'Ã§ilkeli flan', 'parmakla yediren yemekler'),
(13, 'Ã§ilkeli flan', 'parmakla yediren yemekler'),
(14, 'Ã§ilkeli flan', 'parmakla yediren yemekler'),
(15, 'Ã§ilkeli flan', 'parmakla yediren yemekler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gonderen`
--

CREATE TABLE IF NOT EXISTS `gonderen` (
  `gonderenno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gonisim` varchar(20) DEFAULT NULL,
  `gonsoyad` varchar(20) DEFAULT NULL,
  `goneposta` varchar(40) NOT NULL DEFAULT '',
  `gonadres` varchar(100) DEFAULT NULL,
  `takmaisim` varchar(15) DEFAULT NULL,
  `sifre` varchar(15) NOT NULL DEFAULT '',
  `yemeksayisi` int(5) DEFAULT NULL COMMENT 'gÃ¶nderdiÄi yemek sayÄ±sÄ±',
  UNIQUE KEY `gonderenno` (`gonderenno`),
  UNIQUE KEY `takmaisim` (`takmaisim`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2601 ;

--
-- Tablo döküm verisi `gonderen`
--

INSERT INTO `gonderen` (`gonderenno`, `gonisim`, `gonsoyad`, `goneposta`, `gonadres`, `takmaisim`, `sifre`, `yemeksayisi`) VALUES
(2578, NULL, NULL, 'qwer@rewiii.com', NULL, NULL, '1329168', 0),
(2558, 'Sefa', 'Muhmudi', 'sefa@gmail.com', 'yamak mahallesi', 'Keles', 'qwerty', 0),
(2562, 'Metin', 'Oztunc', 'metin@oztunc.com', 'bla bla bla', 'oztunc', '123456', 0),
(2563, 'resul', 'ter', 'resul@ter.com', NULL, NULL, '123456', 0),
(2564, 'tayyip', 'erdogan', 'tayyip@gmail.com', NULL, NULL, '123456asdf', 0),
(2565, 'qwer', 'bobrov', 'qw@gorm.com', NULL, NULL, '123456', 0),
(2566, NULL, NULL, 'sefa@ert.com', NULL, NULL, '123456ert', 0),
(2567, NULL, NULL, 'sefa@ert.com', NULL, NULL, '123456ert', 0),
(2568, NULL, NULL, 'lalala@lala.com', NULL, NULL, '123456', 0),
(2569, NULL, NULL, 'lolo@lop.com', NULL, NULL, 'qwert', 0),
(2570, NULL, NULL, 'qqqq@qq.com', NULL, NULL, '123456', 0),
(2571, NULL, NULL, 'wewew@safa.com', NULL, NULL, '123456', 0),
(2572, NULL, NULL, 'harunkelesoglu_@hotmail.com', NULL, NULL, 'asdf', 0),
(2573, NULL, NULL, 'harunkelesoglu_@hotmail.com', NULL, NULL, 'asdfg', 0),
(2574, NULL, NULL, 'harunkelesoglu_@hotmail.com', NULL, NULL, '', 0),
(2575, NULL, NULL, 'asdf@asdf', NULL, NULL, 'asdfg', 0),
(2576, NULL, NULL, 'zohru@asd.com', NULL, NULL, 'asdfg', 0),
(2577, NULL, NULL, 'don@donkisto.com', NULL, NULL, 'asdfgh', 0),
(2579, NULL, NULL, 'qwer@rewiii.com', NULL, NULL, '1329168', 0),
(2580, NULL, NULL, 'qwer@rewiii.com', NULL, NULL, '1329168', 0),
(2581, NULL, NULL, 'qwer@rewiii.com', NULL, NULL, '1329168', 0),
(2582, NULL, NULL, 'qwert@asdadfaas.com', NULL, NULL, 'asdadasdasd', 0),
(2583, NULL, NULL, 'qwert@asdadfaas.com', NULL, NULL, 'asdadasdasd', 0),
(2584, NULL, NULL, 'qwert@asdadfaas.com', NULL, NULL, 'asdadasdasd', 0),
(2585, NULL, NULL, 'yyyyyyyy@aasssaaaaa.com', NULL, NULL, '121212', 0),
(2586, NULL, NULL, 'yyyyyyyy@aasssaaaaa.com', NULL, NULL, '121212', 0),
(2587, NULL, NULL, 'qweqawe@asda.com', NULL, NULL, 'qweqweqwe', 0),
(2588, NULL, NULL, 'yop@yop.com', NULL, NULL, 'fhfghfhfh', 0),
(2589, NULL, NULL, 'yop@yop.com', NULL, NULL, 'fhfghfhfh', 0),
(2590, NULL, NULL, 'yop@yop.com', NULL, NULL, 'fhfghfhfh', 0),
(2591, NULL, NULL, '''senceer@saas.com''', NULL, NULL, '1329168', 0),
(2592, NULL, NULL, '''senceer@saas.com''', NULL, NULL, '1329168', 0),
(2593, NULL, NULL, '''senceer@saas.com''', NULL, NULL, '1329168', 0),
(2594, NULL, NULL, '''kesdi@hotmail.com''', NULL, NULL, '132916456', 0),
(2595, NULL, NULL, '''senceer@saas.com''', NULL, NULL, '1329168', 0),
(2596, NULL, NULL, '''senceer@saas.com''', NULL, NULL, '1329168', 0),
(2597, NULL, NULL, '''resul@teri.com''', NULL, NULL, '1329168', NULL),
(2598, NULL, NULL, '''resul@teri.com''', NULL, NULL, '1329168', NULL),
(2599, NULL, NULL, '''kesdi@hotmail.com''', NULL, NULL, '1329168', NULL),
(2600, NULL, NULL, '''kesdi@hotmail.com''', NULL, NULL, '1329168', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `liste`
--

CREATE TABLE IF NOT EXISTS `liste` (
  `yno` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `yisim` varchar(50) NOT NULL DEFAULT '',
  `ymalzeme` text NOT NULL,
  `ymevsim` tinyint(2) unsigned DEFAULT NULL,
  `ycesit` smallint(2) unsigned NOT NULL DEFAULT '0',
  `ytavsiye` text,
  `ygonderen` int(5) unsigned DEFAULT NULL,
  `ykackisilik` tinyint(2) unsigned DEFAULT NULL,
  `ytarifi` text NOT NULL,
  `ygontarih` date DEFAULT NULL,
  `yresmi` char(3) NOT NULL DEFAULT 'YOK',
  `sayac` int(9) NOT NULL,
  PRIMARY KEY (`yno`),
  UNIQUE KEY `yisim` (`yisim`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4207 ;

--
-- Tablo döküm verisi `liste`
--

INSERT INTO `liste` (`yno`, `yisim`, `ymalzeme`, `ymevsim`, `ycesit`, `ytavsiye`, `ygonderen`, `ykackisilik`, `ytarifi`, `ygontarih`, `yresmi`, `sayac`) VALUES
(4204, 'deneme', 'bu bir deneme', 2, 4, NULL, 0, 15, '# baslÄ±k yok	', '2016-01-13', '', 0),
(4205, 'Ä°mam BayÄ±ldÄ±', 'Ä°mamÄ± bayÄ±ltÄ±yon', 5, 10, NULL, 0, 78, '# YapÄ±lÄ±ÅŸÄ±', '2016-01-13', '', 0),
(4206, 'deneme baÅŸlÄ±k', 'asdfasdf adsfasdfasdf asdfasd saf asfasfasf ', 2, 5, NULL, 0, 21, '# adsf asdf sadf asdf saf asfdasdf sadfsa asfa fas', '2016-01-13', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mevsim`
--

CREATE TABLE IF NOT EXISTS `mevsim` (
  `mevsno` int(1) NOT NULL DEFAULT '0',
  `mevisim` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mevsim`
--

INSERT INTO `mevsim` (`mevsno`, `mevisim`) VALUES
(1, '?lkbahar'),
(2, 'Yaz'),
(3, 'Sonbahar'),
(4, 'K??'),
(5, 'Her Mevsim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE IF NOT EXISTS `yorum` (
  `yorumpk` int(11) NOT NULL AUTO_INCREMENT,
  `webadresi` varchar(80) NOT NULL,
  `yemekfk` int(6) NOT NULL DEFAULT '0',
  `yorum` text NOT NULL,
  `puan` int(1) NOT NULL DEFAULT '3' COMMENT '1-5 arasý puan',
  `ipadresi` varchar(15) NOT NULL DEFAULT '0',
  `zaman` datetime NOT NULL,
  `eposta` varchar(75) NOT NULL,
  `adsoyad` varchar(80) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`yorumpk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1153 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
