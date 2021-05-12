-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 02:29 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cas05php`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE IF NOT EXISTS `kategorije` (
  `kategorija` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trajanje` int(255) NOT NULL,
  PRIMARY KEY (`kategorija`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`kategorija`, `opis`, `trajanje`) VALUES
('A', 'motocikl', 15),
('B', 'auto', 10),
('C', 'kamion', 5),
('D', 'kamion sa prikolicom', 5),
('E', 'autobus', 3);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac`
--

CREATE TABLE IF NOT EXISTS `proizvodjac` (
  `imepr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zemljaporekla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`imepr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodjac`
--

INSERT INTO `proizvodjac` (`imepr`, `zemljaporekla`) VALUES
('alfa romeo', 'italija'),
('audi', 'nemačka'),
('bmw', 'nemačka'),
('iveco', 'Italy'),
('mercedes', 'nemačka'),
('renault', 'francuska'),
('škoda', 'češka'),
('Toyota', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `vozac`
--

CREATE TABLE IF NOT EXISTS `vozac` (
  `idvoz` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `godiste` int(11) NOT NULL,
  PRIMARY KEY (`idvoz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vozac`
--

INSERT INTO `vozac` (`idvoz`, `ime`, `prezime`, `godiste`) VALUES
(1, 'Milos', 'Milosevic', 1987),
(2, 'Petar', 'Petrovic', 1988),
(3, 'Marko ', 'Markovic', 1990),
(4, 'Srdjan', 'Ostojic', 1985),
(5, 'Milos', 'Dragojevic', 1992),
(6, 'Petar', 'Krmpotic', 2000),
(7, 'Cedomir', 'Spasojevic', 1987);

-- --------------------------------------------------------

--
-- Table structure for table `vozacvozilo`
--

CREATE TABLE IF NOT EXISTS `vozacvozilo` (
  `idvzl` int(11) NOT NULL,
  `idvoz` int(11) NOT NULL,
  `vremedodele` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `idvzl` (`idvzl`,`idvoz`),
  KEY `idvoz` (`idvoz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vozacvozilo`
--

INSERT INTO `vozacvozilo` (`idvzl`, `idvoz`, `vremedodele`) VALUES
(10, 1, '2017-04-07 15:38:02'),
(1, 2, '2017-04-07 15:38:02'),
(2, 2, '2017-04-07 15:38:42'),
(11, 1, '2017-04-07 15:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `vozilo`
--

CREATE TABLE IF NOT EXISTS `vozilo` (
  `idvzl` int(11) NOT NULL AUTO_INCREMENT,
  `imepro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `godiste` int(4) NOT NULL,
  `kubikaza` int(5) NOT NULL,
  `cena` float NOT NULL,
  PRIMARY KEY (`idvzl`),
  KEY `katfk` (`kategorija`),
  KEY `profk` (`imepro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `vozilo`
--

INSERT INTO `vozilo` (`idvzl`, `imepro`, `model`, `kategorija`, `godiste`, `kubikaza`, `cena`) VALUES
(1, 'audi', 'A6', 'B', 2000, 1600, 3500),
(2, 'mercedes', 'C300', 'B', 2005, 2000, 5000),
(3, 'škoda', 'superb', 'B', 2016, 2500, 20000),
(4, 'bmw', 'x5', 'C', 2015, 3500, 15000),
(5, 'renault', 'trafic', 'C', 2014, 3400, 12000),
(6, 'škoda', 'superb', 'B', 2016, 2000, 32000),
(7, 'audi', '80', 'B', 1999, 1200, 1500),
(8, 'iveco', 'stralis np', 'E', 2016, 4000, 125000),
(9, 'bmw', 's1000', 'A', 1999, 1100, 3190),
(10, 'mercedes', 'INTOURO', 'D', 2003, 12000, 37000),
(11, 'mercedes', 'cla 250', 'B', 2017, 2000, 32400),
(12, 'bmw', 'z4', 'B', 2003, 2500, 10000),
(13, 'bmw', 'm6', 'B', 2006, 2500, 18000),
(14, 'renault', 'clio', 'B', 2011, 1400, 4600),
(15, 'renault', 'Capture', 'B', 2016, 900, 7500),
(17, 'audi', 'corolla', 'A', 2003, 3000, 1400),
(18, 'škoda', 'octavia', 'B', 2007, 3500, 1500),
(21, 'škoda', 'superb', 'B', 2008, 6000, 2500);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vozacvozilo`
--
ALTER TABLE `vozacvozilo`
  ADD CONSTRAINT `vozacvozilo_ibfk_1` FOREIGN KEY (`idvzl`) REFERENCES `vozilo` (`idvzl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vozacvozilo_ibfk_2` FOREIGN KEY (`idvoz`) REFERENCES `vozac` (`idvoz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vozilo`
--
ALTER TABLE `vozilo`
  ADD CONSTRAINT `vozilo_ibfk_1` FOREIGN KEY (`imepro`) REFERENCES `proizvodjac` (`imepr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vozilo_ibfk_2` FOREIGN KEY (`kategorija`) REFERENCES `kategorije` (`kategorija`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
