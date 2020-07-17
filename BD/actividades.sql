-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-07-2020 a las 01:43:27
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `feelrait`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paterno` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materno` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ocupacion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peso` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatura` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actividad` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acelerometro` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `usuario`, `email`, `pass`, `nombre`, `paterno`, `materno`, `fecha`, `ocupacion`, `peso`, `estatura`, `actividad`, `acelerometro`) VALUES
(1, 'Mares', 'marpark-psv@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Mares', 'marpark-psv@hotmail.com', '123456', 'Martin', 'Marquez', 'Cervantes', '1998-12-19', 'Chofer', '4.5', '1.94', NULL, NULL),
(3, 'prueba1', 'prueba@hotmail.com', '123456', 'prueba1', 'prueba1Paterno', 'prueba1_Materno', '1998-12-19', 'Chofer', '70', '1.92', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
