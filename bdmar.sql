-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2025 a las 07:42:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marvel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marvel`
--

CREATE TABLE `marvel` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `fdn` date NOT NULL,
  `ldg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marvel`
--

INSERT INTO `marvel` (`id`, `nombre`, `edad`, `fdn`, `ldg`) VALUES
(1, 'Iron Man/Tony Stark', 54, '1970-05-29', ' Long Island, Nueva York, Estados Unidos'),
(2, 'Steve Rogers / Capitán América', 107, '1918-07-04', 'Brooklyn, Nueva York, Estados Unidos'),
(3, 'Thor', 1060, '0965-08-10', 'Asgard'),
(4, 'Natasha Romanoff / Black Widow', 40, '1984-11-22', 'Rusia'),
(5, 'Peter Parker / Spider-Man', 23, '2001-08-10', 'Queens, Nueva York, Estados Unidos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
