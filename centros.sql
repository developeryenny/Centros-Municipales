-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2019 a las 17:39:40
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serviciosociales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `Entidad` varchar(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `cPostal` varchar(7) NOT NULL,
  `Ciudad` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Fax` varchar(20) NOT NULL,
  `Barrio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`Entidad`, `Direccion`, `cPostal`, `Ciudad`, `Telefono`, `Fax`, `Barrio`) VALUES
('CMSS Est', ' c Mimosa', '07008', 'Palma', '971706190', '971473292', 'la Indioteria, Son Rutlan'),
('CMSS Ciutat Antiga', ' C.del Temple, 10, bxs', '07001', 'Palma', '971 710 812', '971 716 496', 'el sindicat, el puig de sant pere, Jaume III, lloja- Born, Cort, Sant'),
('CMSS Llevant Sud', 'Joan Alcover', '07010', '971 463 815', '971 463 209', 'CMSS Llevant Sud', 'Foners'),
('fe', 'fe', '0707', 'fe', 'fe', 'fe', 'fe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
