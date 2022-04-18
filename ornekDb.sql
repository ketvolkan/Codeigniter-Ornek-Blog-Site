-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2022 at 04:57 ÖS
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `createdAt`) VALUES
(1, 'Volkan', 'ket@gmail.com', 'Site çok iyi', 'Eline sağlık', '2022-04-16 00:28:11'),
(2, 'Volkan', 'ket@gmail.com', 'sadsade çok iyisadsadsad', 'wdawdasd', '2022-04-16 16:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`) VALUES
(1, 'Anasayfa', 'Post/'),
(2, 'İletişim', 'Post/Contact'),
(3, 'Hakkımızda', 'Post/About'),
(4, 'Gönderiler', 'Post/Posts');

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
(1, 'Codeigniter Kullanın', 'Codeigniter bir php freamworku olup işlerinizi inanılmaz kolaylaştırır mvc yapısına sahiptir', 'https://www.youtube.com/embed/v9NPsx0_GRk', '2022-04-15 23:02:49'),
(2, 'Kolay Mobil Uygulama Yapımı', 'Mobil uygulama yapmak için bence en iyi şey flutter & dart', 'https://www.youtube.com/embed/v9NPsx0_GRk', '2022-04-15 23:02:49'),
(3, 'Yazılıma Başlangıç', 'Yazılıma başlamak için sahip olmanız gereken en önemli şey istek bir bilgisayar ve internete sahipsen isteğini al ve başla', '', '2022-04-15 23:02:49'),
(13, 'Hayat Kısa', 'Hayat bukadar kısayken neden eğlenmeye ve kendini geliştirmeye çalışmıyosun', '', '2022-04-15 23:03:33'),
(14, 'Yazılım İçin Üniversite', 'Yazılım geliştirici olmak için gittiğiniz üniversitenin önemi çok geri planda kalmakta bu iş için öncelikle kendinizi geliştirmelisiniz', '', '2022-04-15 23:03:33'),
(15, 'Şirketimiz Sizinle', 'Yaklaşık 23 yıldır sektörün içinde olan şirketimize bir şans vermelisiniz', '', '2022-04-15 23:03:33'),
(16, 'Can El Chavo Sever', 'Selamlar umarum iyisinizdir hemen şimdi kalkıp harakete geçmelisiniz', '', '2022-04-15 23:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_image_1` text NOT NULL,
  `slider_image_2` text NOT NULL,
  `about_title` text NOT NULL,
  `about_job` text NOT NULL,
  `about_description` text NOT NULL,
  `about_mail` text NOT NULL,
  `about_url` text NOT NULL,
  `contact_adress` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `slider_image_1`, `slider_image_2`, `about_title`, `about_job`, `about_description`, `about_mail`, `about_url`, `contact_adress`, `contact_phone`, `contact_mail`) VALUES
(1, 'assets/img/1.jpg\r\n', 'assets/img/2.jpg\r\n', 'Volkan Ket\r\n', 'Yazılım Geliştirici\r\n', '20 yaşındayım liseden beri yani 6 yıldır yazılım dünyasının içerisindeyim.', 'ketvolkan1@gmail.com\r\n', 'assets/img/ket.png\r\n', 'Aydın Türkiye\r\n', '+ 90 599 923 99 99\r\n', 'ket@studio.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
