-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 02:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `messages` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `messages`) VALUES
(1, 'Neil', 'Hello'),
(2, 'Neil', 'hi'),
(3, 'Neil', 'leche'),
(4, 'Rona', 'ina naman oh.'),
(5, 'Rona', 'nang-aano ka eh noh?'),
(6, 'Rushty', 'problema mo?'),
(7, 'Rona', 'wala po :)'),
(8, 'Rona', 'hello'),
(9, 'corsinorona', 'yow'),
(10, 'corsinorona', 'annyeong. ahhahaha'),
(11, 'corsinorona', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('corsinoronalyn@gmail.com', '60ea26db9c41e500ad78bd4fdada741505b103ddafa33205b5319f323007dbd1', '2015-08-30 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(1, 'Ronalyn', 'Corsino', 'corsinorona', 'corsinoronalyn@gmail', 'ronalyn0217'),
(2, 'Ronalyn', 'Corsino', 'corsinorona', 'corsinoronalyn@gmail', 'ronalyn0217'),
(3, 'Rushty', 'Baysantos', 'Rush', 'baysantosrushty@gmai', 'baysantos24'),
(4, 'Rushty', 'Baysantos', 'Rush', 'baysantosrushty@gmai', 'baysantos24'),
(5, 'hello', 'hi', 'hhahahah', 'renzo@yahoo.com', 'tsssss'),
(6, 'Hello', 'Hi', 'hahaha', 'tae@yahoo.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ronalyn', 'corsinoronalyn@gmail.com', '$2y$10$QMKyOr25s/6E5bTdFmMH/.e4860FxbBmpMi6SJd95/DsJkgWyfCWq', 'Kr157PaTg189SN1isApLswD6elSRNcZsxZmBRYB9lUcbtv6zx1EwAgmCnmoW', '2015-08-30 07:01:39', '2015-08-31 03:56:40'),
(2, 'Rushty', 'baysantosrushty@gmail.com', '$2y$10$QpgVd3Dk6MgvTqtx9A6eoubdFKaiy4TN.EtzoncZ2y.c0pGR2RkQq', 'vuCfMwSpZZCErkKYsSaBaYIDbPSFhqTCUGSKptUczIC5mHOQOt1uNoVrgaJh', '2015-08-30 07:16:19', '2015-08-30 07:16:59'),
(3, 'Renzo', 'renz0302@yahoo.com', '$2y$10$DvYGJxWyp6/5hIV9bEKp5e2atiX6e4KbeP74oogE1N0XDZTOofhVq', '8atf078G6iYdtdt5qVevKWBiVT1PqyNHVPR42sGbtjTgmXsveNnTmZT3D6cX', '2015-08-30 07:17:37', '2015-08-30 07:23:11'),
(4, 'Ylona', 'ylona@yahoo.com', '$2y$10$Z.rDMWh1DesVgVA8zU9YpOKgnOS0R7At4ZdKw1qup1me/N3pav836', 'C7VdS6rg6xU14ACBapjlcknNIqYzEKkEgpLhbigDhDROFI5tvm8bYVFidhub', '2015-08-30 07:23:42', '2015-08-30 07:35:35'),
(5, 'Franco', 'francoco@gmail.com', '$2y$10$J501bR53ze3EbZrQOMeqCOzupIKf2i3rtRppebS8ZKgxRDbpalYfK', 'NB6fM0UHDYvYdPipYbD0RouWgzh7ez8EIc4QSVLjrfV9ByD6bz0m4aH6rOSp', '2015-08-30 08:04:30', '2015-08-30 08:31:57'),
(6, 'Jimboy', 'jimboy@yahoo.com', '$2y$10$l84MfdjblB5G1PZjr31ZJuKdl7nkHmL8UmSPbx6bENmCyRiQuV2jm', 'Whh54KPUVQJTxKo6pzXXHNDSjucoaClAHLweYDDXiiY24u826PIwaTeAYvL2', '2015-08-30 08:34:08', '2015-08-30 08:34:18'),
(7, 'Neil', 'bigayneil@gmail.com', '$2y$10$AmVnajMPb/k1Yfy2/ZJf0.pZunnUkAyKunMsvf9XH3OShbShux8I2', 'xE9YtvCL7YMWUtOZGoPgcsDdjQEVPswwuQCyuUPP0kXK5QzFWkDRdNAdV8aI', '2015-08-30 08:35:57', '2015-08-30 08:38:20'),
(8, 'Jasmine', 'jasminemira@yahoo.com', '$2y$10$k5rrx8yhmlnXKeL1lAJLkeqvEsYCD2ZAj.qXyKjNvQeYNJsI.OeKy', 'LYdf3rO3fBlnUxtDU0sqMfh46IZPBCS9AAgYGPmrl8HXP95JPjGezY6GnmBt', '2015-08-30 08:39:00', '2015-08-30 08:42:47'),
(9, 'Paris', 'parisian@yahoo.com', '$2y$10$pbXDNpxt6KzDvPb/X85hO.uW0LaDFpCcJFx5Q6zJ/9Gj9edJC/vGC', 'Ab9siwWbLpdcOf0pY1Bfc0RYVEipkJeyAUYh3MLKWjK4c8bD98IMhTTpB3U2', '2015-08-30 08:43:20', '2015-08-30 08:45:50'),
(10, 'Corsino', 'myphone@example.com', '$2y$10$d/4Vcesl5VDhYEsoErv6IeZO4xVsS/HUiFjyBxxyvQQ1LFyWWNLBi', 'pIXKF4LEbpzmfeDqzrelfAx9HUIHaZRGDjBBhh19T4yXqmgbESE8P5b0LnrU', '2015-08-30 08:46:46', '2015-08-30 08:46:52'),
(11, 'Kimberly', 'kimcaballes@yahoo.com', '$2y$10$CvMJwQNC650Jyvb2/a10CeZV7wUJJQxAGi2SPFdi9s5t21IFs7hi.', 'N6TFy9O2HjKRfiROxrM76xm9VU0ATKlRmbLuLmbzXnr2muEZHdxyzNF7AN9T', '2015-08-30 09:22:56', '2015-08-30 09:23:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
