-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 07 nov 2017 om 14:26
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `prefix`, `lastname`, `email`, `password`, `phone_number`) VALUES
(1, 'Romy', NULL, 'Bijkerk', 'romy-bijkerk@hotmail.com', '27fa9d3a680e68b32cfe2cd22bbdba28', '0636010210'),
(2, 'Tim', NULL, 'Bijkerk', 'tim_bijkerk@live.com', 'ddfee71cd43b45a1119c7ee8bbaceafe', '0636010210'),
(3, 'Sandra', NULL, 'de Jager', 'sandradejager1969@gmail.com', '5b550718595a43218812fd0126930912', '06123456'),
(4, 'Andre', NULL, 'van Donselaar', 'andre@live.com', '6bf5cb55b162dd19c6e428b347bfffee', '06123456');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employee_role`
--

CREATE TABLE IF NOT EXISTS `employee_role` (
  `employee_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `employee_role`
--

INSERT INTO `employee_role` (`employee_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `ships`
--

INSERT INTO `ships` (`id`, `IMO_number`, `name`, `year_build`, `home_port`, `home_country`, `MMSI_number`, `length_m`, `width_m`, `depth`, `load_capacity_ton`, `length_hold_m`, `width_hold_m`, `height_hold_m`, `max_hazardous_substances_x`, `hold_max_total_floor_load_ton`, `hold_max_column_floor_load_ton`) VALUES
(1, '	9776171', 'OOCL HONG KONG', 2017, 'Hong Kong', 'HK', '477333500', 400, 59, 33, 191977, 300, 50, 23, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
