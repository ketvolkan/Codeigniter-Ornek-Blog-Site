-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2022 at 02:39 ÖÖ
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ornekDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `createdAt`) VALUES
(1, 'Volkan', 'ket@gmail.com', 'Site çok iyi', 'Eline sağlık', '2022-04-16 00:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `youtube_url` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `youtube_url`, `createdAt`) VALUES
(1, 'Codeigniter Kullanın', 'Codeigniter bir php freamworku olup işlerinizi inanılmaz kolaylaştırır mvc yapısına sahiptir', 'https://www.youtube.com/watch?v=V2tF7-vKIzY', '2022-04-15 23:02:49'),
(2, 'Kolay Mobil Uygulama Yapımı', 'Mobil uygulama yapmak için bence en iyi şey flutter & dart', 'https://www.youtube.com/watch?v=x-0KrOIqbiw', '2022-04-15 23:02:49'),
(3, 'Yazılıma Başlangıç', 'Yazılıma başlamak için sahip olmanız gereken en önemli şey istek bir bilgisayar ve internete sahipsen isteğini al ve başla', '', '2022-04-15 23:02:49'),
(13, 'Hayat Kısa', 'Hayat bukadar kısayken neden eğlenmeye ve kendini geliştirmeye çalışmıyosun', '', '2022-04-15 23:03:33'),
(14, 'Yazılım İçin Üniversite', 'Yazılım geliştirici olmak için gittiğiniz üniversitenin önemi çok geri planda kalmakta bu iş için öncelikle kendinizi geliştirmelisiniz', '', '2022-04-15 23:03:33'),
(15, 'Şirketimiz Sizinle', 'Yaklaşık 23 yıldır sektörün içinde olan şirketimize bir şans vermelisiniz', '', '2022-04-15 23:03:33'),
(16, 'Merhaba', 'Selamlar umarum iyisinizdir hemen şimdi kalkıp harakete geçmelisiniz', '', '2022-04-15 23:03:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
