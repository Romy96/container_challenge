-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 09 nov 2017 om 16:05
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `container_challenge`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `prefix` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `prefix`, `lastname`, `email`, `password`, `phone_number`, `role_id`) VALUES
(1, 'Romy', NULL, 'Bijkerk', 'romy-bijkerk@hotmail.com', '27fa9d3a680e68b32cfe2cd22bbdba28', '0636010210', 1),
(2, 'Tim', NULL, 'Bijkerk', 'tim_bijkerk@live.com', 'ddfee71cd43b45a1119c7ee8bbaceafe', '0636010210', 2),
(3, 'Sandra', NULL, 'de Jager', 'sandradejager1969@gmail.com', '5b550718595a43218812fd0126930912', '06123456', 3),
(4, 'Andre', NULL, 'van Donselaar', 'andre@live.com', '6bf5cb55b162dd19c6e428b347bfffee', '06123456', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ports`
--

CREATE TABLE IF NOT EXISTS `ports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `ports`
--

INSERT INTO `ports` (`id`, `name`, `adress`, `country`, `phone_number`) VALUES
(1, 'Haven Rotterdam', 'Wilhelminakade 909', 'Nederland', '06102521010'),
(2, 'Haven Hong Kong', 'Tong Bin Ln 29', 'Hong Kong', '06202149358'),
(3, 'Haven Singapore', 'Jurong port 32', 'Singapore', '0657289134');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'planner'),
(2, 'logistics employee'),
(3, 'fleet manager'),
(4, 'route planner');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_ship` varchar(250) DEFAULT NULL,
  `start_port` varchar(50) DEFAULT NULL,
  `destination_port` varchar(50) DEFAULT NULL,
  `cargo` text NOT NULL,
  `date_time_departure` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name_ship` (`name_ship`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `routes`
--

INSERT INTO `routes` (`id`, `name_ship`, `start_port`, `destination_port`, `cargo`, `date_time_departure`) VALUES
(1, 'Marc Mitchell', 'Haven Rotterdam', 'Haven Hong Kong', '', '0000-00-00 00:00:00.000000'),
(6, 'Marc Mitchell', 'Haven Rotterdam', 'Haven Rotterdam', 'Kruiden, zout en medicijnen', '2017-11-11 12:00:00.000000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ships`
--

CREATE TABLE IF NOT EXISTS `ships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IMO_number` char(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `year_build` int(11) DEFAULT NULL,
  `home_port` varchar(100) NOT NULL,
  `home_country` char(2) NOT NULL,
  `MMSI_number` char(9) NOT NULL,
  `length_m` int(11) NOT NULL,
  `width_m` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `load_capacity_ton` int(11) NOT NULL,
  `length_hold_m` int(11) NOT NULL,
  `width_hold_m` int(11) NOT NULL,
  `height_hold_m` int(11) NOT NULL,
  `max_hazardous_substances_x` int(11) NOT NULL,
  `hold_max_total_floor_load_ton` int(11) NOT NULL,
  `hold_max_column_floor_load_ton` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `ships`
--

INSERT INTO `ships` (`id`, `IMO_number`, `name`, `year_build`, `home_port`, `home_country`, `MMSI_number`, `length_m`, `width_m`, `depth`, `load_capacity_ton`, `length_hold_m`, `width_hold_m`, `height_hold_m`, `max_hazardous_substances_x`, `hold_max_total_floor_load_ton`, `hold_max_column_floor_load_ton`) VALUES
(2, '9187162', 'Marc Mitchell', 1998, 'Delfzijl', 'NL', '123456789', 93, 16, 6, 301, 80, 10, 4, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
