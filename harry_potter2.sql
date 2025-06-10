-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 09:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harry_potter2`
--

-- --------------------------------------------------------

--
-- Table structure for table `personajes`
--

CREATE TABLE `personajes` (
  `personaje_id` int(11) NOT NULL,
  `nombre_personaje` varchar(50) NOT NULL,
  `casa_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `hechizo_id` int(11) DEFAULT NULL,
  `objeto_magico_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personajes`
--

INSERT INTO `personajes` (`personaje_id`, `nombre_personaje`, `casa_id`, `rol_id`, `hechizo_id`, `objeto_magico_id`) VALUES
(1, 'Harry Potter', 1, 1, 1, 1),
(2, 'Hermione Granger', 1, 2, 2, 2),
(3, 'Ron Weasley', 1, 1, 3, 3),
(4, 'Draco Malfoy', 2, 2, 4, 4),
(5, 'Albus Dumbledore', 1, 5, 5, 5),
(6, 'Severus Snape', 2, 1, 6, 6),
(7, 'Sirius Black', 3, 2, 7, 7),
(8, 'Minerva McGonagall', 1, 5, 8, 8),
(9, 'Rubeus Hagrid', 3, 3, 9, 9),
(10, 'Bellatrix Lestrange', 2, 4, 10, 10),
(11, 'Luna Lovegood', 4, 5, 11, 11),
(12, 'Neville Longbottom', 1, 5, 12, 12),
(13, 'Remus Lupin', 3, 1, 13, 13),
(14, 'Lucius Malfoy', 2, 2, 14, 14),
(15, 'Ginny Weasley', 1, 1, 15, 15),
(16, 'Lord Voldemort', 2, 4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `objeto_magico`
--

CREATE TABLE `objeto_magico` (
  `objeto_magico_id` int(11) NOT NULL,
  `nombre_objeto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objeto_magico`
--

INSERT INTO `objeto_magico` (`objeto_magico_id`, `nombre_objeto`) VALUES
(1, 'Varita de Saúco'),
(2, 'Giratiempos'),
(3, 'Espada de Gryffindor'),
(4, 'Bastón de Draco'),
(5, 'Pensadero'),
(6, 'Poción Multijugos'),
(7, 'Mapa del Merodeador'),
(8, 'Sombrero Seleccionador'),
(9, 'Paraguas Rosa'),
(10, 'Daga Oscura'),
(11, 'Espectro Patronus'),
(12, 'Planta Mimbulus Mimbletonia'),
(13, 'Amuleto de Protección'),
(14, 'Bastón de Malfoy'),
(15, 'Snitch Dorada');

-- --------------------------------------------------------

--
-- Table structure for table `hechizo`
--

CREATE TABLE `hechizo` (
  `hechizo_id` int(11) NOT NULL,
  `nombre_hechizo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hechizo`
--

INSERT INTO `hechizo` (`hechizo_id`, `nombre_hechizo`) VALUES
(1, 'Expelliarmus'),
(2, 'Avada Kedavra'),
(3, 'Alohomora'),
(4, 'Petrificus Totalus'),
(5, 'Fawkes Renacimiento'),
(6, 'Legeremancia'),
(7, 'Transformación Animaga'),
(8, 'Transfiguración'),
(9, 'Encantamiento de crecimiento'),
(10, 'Crucio'),
(11, 'Expecto Patronum'),
(12, 'Herbivicus'),
(13, 'Lupin Lupus'),
(14, 'Maleficio Imperius'),
(15, 'Reducto');

-- --------------------------------------------------------

--
-- Table structure for table `casa`
--

CREATE TABLE `casa` (
  `casa_id` int(11) NOT NULL,
  `nombre_casa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casa`
--

INSERT INTO `casa` (`casa_id`, `nombre_casa`) VALUES
(1, 'Gryffindor'),
(2, 'Slytherin'),
(3, 'Hufflepuff'),
(4, 'Ravenclaw'),
(5, 'Sin casa');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol_id`, `nombre_rol`) VALUES
(1, 'Estudiante'),
(2, 'Mortífago'),
(3, 'Criatura Mágica'),
(4, 'Villano'),
(5, 'Profesor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`personaje_id`),
  ADD KEY `casa_id` (`casa_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `hechizo_id` (`hechizo_id`),
  ADD KEY `objeto_magico_id` (`objeto_magico_id`);

--
-- Indexes for table `objeto_magico`
--
ALTER TABLE `objeto_magico`
  ADD PRIMARY KEY (`objeto_magico_id`);

--
-- Indexes for table `hechizo`
--
ALTER TABLE `hechizo`
  ADD PRIMARY KEY (`hechizo_id`);

--
-- Indexes for table `casa`
--
ALTER TABLE `casa`
  ADD PRIMARY KEY (`casa_id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personajes`
--
ALTER TABLE `personajes`
  MODIFY `personaje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `objeto_magico`
--
ALTER TABLE `objeto_magico`
  MODIFY `objeto_magico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hechizo`
--
ALTER TABLE `hechizo`
  MODIFY `hechizo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `casa`
--
ALTER TABLE `casa`
  MODIFY `casa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `personajes_ibfk_1` FOREIGN KEY (`casa_id`) REFERENCES `casa` (`casa_id`),
  ADD CONSTRAINT `personajes_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `personajes_ibfk_3` FOREIGN KEY (`hechizo_id`) REFERENCES `hechizo` (`hechizo_id`),
  ADD CONSTRAINT `personajes_ibfk_4` FOREIGN KEY (`objeto_magico_id`) REFERENCES `objeto_magico` (`objeto_magico_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
