-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2020 at 03:31 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citas`
--

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `Id_cita` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `clave_hora` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dirreccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cita`
--

INSERT INTO `cita` (`Id_cita`, `fecha_creacion`, `fecha_cita`, `hora_cita`, `clave_hora`, `status`, `nombre`, `apellidos`, `dirreccion`, `email`) VALUES
(1, '2020-07-20 00:00:00', '2020-07-27', '02:06:00', '5', 1, 'Roberto', 'Perez', 'aadwef', 'dwavsgefda@vfrf'),
(20, '2020-07-20 00:00:00', '2020-07-27', '02:06:00', '5', 1, 'Roberto', 'Perez', 'aadwef', 'dwavsgefda@vfrf'),
(30, '2020-07-21 00:00:00', '2020-07-28', '06:00:00', 'seis pm', 1, 'alejandro', 'Ramirezds', 'fdas<dfa', 'fsaewd'),
(33, '2020-07-21 00:00:00', '2020-07-28', '06:00:00', 'seis pm', 1, 'alejandro', 'Ramirezds', 'fdas<dfa', 'fsaewd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`Id_cita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
