-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2022 at 11:56 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--
DROP DATABASE IF EXISTS `phonebook`;
CREATE DATABASE IF NOT EXISTS `phonebook` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phonebook`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fechahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'when record is created',
  `activo` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:active record | 0:inactive record'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `phone`, `fechahora`, `activo`) VALUES
(1, 'LUIS', 'CARRANZA', '1231231231', '2022-06-30 16:33:42', 0),
(2, 'TERESA', 'RAMIREZ', '985656523', '2022-07-01 03:41:09', 0),
(3, 'HUGO', 'ECKERMAN', '562368956', '2022-07-01 03:41:37', 0),
(4, 'RICHARD', 'CLAYDERMAN', '986526325', '2022-07-01 03:42:00', 0),
(5, 'GUILLERMO', 'COLONIA', '6523697856', '2022-07-01 03:42:36', 0),
(6, 'A', 'B', 'C', '2022-07-01 09:13:07', 0),
(7, 'AA', 'BB', 'CC', '2022-07-01 09:22:39', 0),
(8, 'Q', 'Q', '', '2022-07-01 09:26:22', 0),
(9, 'FLORENTINO', 'PEREZ', '89898989', '2022-07-01 09:27:01', 0),
(10, 'QQ', 'QEWRWER', '2324525646', '2022-07-01 09:27:33', 0),
(11, 'asd', 'sdfsd', '', '2022-07-01 09:28:36', 0),
(12, 'ASAa<<<<', 'aS<<<<<<<<', '4346536564', '2022-07-01 09:32:18', 0),
(13, 'AAAAAAAAAAAAAAA', 'ggggggggggggg', '11111111111111', '2022-07-01 09:32:42', 0),
(14, 'A', '9', '77777777777', '2022-07-01 09:33:01', 0),
(15, 'JUAN', 'ALVAREZ', '43214321', '2022-07-01 09:33:50', 0),
(16, 'HECTOR', 'LAVOE', '35354646', '2022-07-01 09:34:21', 0),
(17, '', '', '', '2022-07-01 10:32:14', 0),
(18, '', '', '', '2022-07-01 10:33:59', 0),
(19, '', '', '', '2022-07-01 10:34:06', 0),
(20, '', '', '', '2022-07-01 10:34:19', 0),
(21, '6666', '7777777777', '88888888888', '2022-07-01 10:34:32', 0),
(22, '', '', '', '2022-07-01 10:34:46', 0),
(23, 'FLORENTINO00000000000000', 'PEREZ000000000000000', '89898989000000000000', '2022-07-01 10:37:27', 0),
(24, 'saturnio', 'gomez', '8888888888', '2022-07-01 11:04:26', 0),
(25, '222', '222', '2222', '2022-07-01 15:09:30', 0),
(26, '@@@', '@@@', '@@@', '2022-07-01 15:10:56', 0),
(27, 'fsd', 'sdff', 'sdfs', '2022-07-01 15:21:09', 0),
(28, 'asdasd', 'dasdas', 'dasdas', '2022-07-01 15:24:41', 0),
(29, 'JAVIER', 'SANCHEZ', '00999999999', '2022-07-01 15:24:52', 0),
(30, 'iiiiiiii', 'iiiiiiiii', 'iiiiiiiiiiiiii', '2022-07-01 15:25:20', 0),
(31, 'PEPE', 'RODRIGUEZ', '4444444444444', '2022-07-01 15:42:03', 0),
(32, 'JAVIER', 'SANCHEZ', '981234567', '2022-07-01 15:51:56', 0),
(33, 'RUBEN MIGUEL', 'POZO', '345323425', '2022-07-01 15:52:12', 0),
(34, 'ANGELINA', 'JOLIE', '345565457645', '2022-07-01 15:53:55', 0),
(35, 'JAVIER', 'SANCHEZ', '34565756788', '2022-07-01 15:54:16', 1),
(36, 'GONZALO', 'NUÑEZ', '3567567568', '2022-07-01 15:54:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
