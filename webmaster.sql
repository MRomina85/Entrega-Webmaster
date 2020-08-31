-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2020 a las 22:32:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webmaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosform`
--

CREATE TABLE `datosform` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosform`
--

INSERT INTO `datosform` (`id`, `nombre`, `apellido`, `Email`, `Mensaje`) VALUES
(0, 'Pepe', 'Castro', 'roko_85@hotmail.com', 'Ya esta subido'),
(0, 'Juan Carlos', 'mrominapereyra@outlook.com', 'C.A.B.A.', 'Hola\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
