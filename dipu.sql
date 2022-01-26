-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-01-2022 a las 02:03:33
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dipu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `apellido` varchar(33) NOT NULL,
  `dni` int NOT NULL,
  `cuit` int NOT NULL,
  `mail` varchar(88) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`apellido`, `dni`, `cuit`, `mail`, `id`) VALUES
('pegoraro', 41658970, 123, 'guillermo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propus`
--

DROP TABLE IF EXISTS `propus`;
CREATE TABLE IF NOT EXISTS `propus` (
  `tipo` varchar(255) NOT NULL,
  `dd` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `explicasion` varchar(9999) NOT NULL,
  `si` int NOT NULL,
  `no` int NOT NULL,
  `total` int NOT NULL,
  `id_ped` int NOT NULL AUTO_INCREMENT,
  `dni` int NOT NULL,
  PRIMARY KEY (`id_ped`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `propus`
--

INSERT INTO `propus` (`tipo`, `dd`, `explicasion`, `si`, `no`, `total`, `id_ped`, `dni`) VALUES
('economica: sacar el 3874% de impuestos', '', 'sacar el 3874% de impuestos ya que no le tenemos que pagar el sueldo a estos diputado y consejales nunca mas', 0, 0, 0, 1, 0),
('nada', 'nada', 'nada', 0, 0, 0, 2, 0),
('nada', 'nada', 'nada', 0, 0, 0, 3, 0),
('dfsdf', '', 'erwer', 0, 0, 0, 4, 0),
('asd', 'wdwdsa', 'sadwd', 0, 0, 0, 5, 0),
('asd', 'asd', 'asd', 0, 0, 0, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
  `id` int NOT NULL,
  `dni` int NOT NULL,
  `si` int NOT NULL,
  `no` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
