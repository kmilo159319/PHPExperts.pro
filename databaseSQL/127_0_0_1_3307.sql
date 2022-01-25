-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 25-01-2022 a las 06:56:03
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpexperts`
--
CREATE DATABASE IF NOT EXISTS `phpexperts` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpexperts`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL COMMENT 'llave primaria',
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `mail`, `username`, `contraseña`) VALUES
(1, 'johan camilo yepes culman', 'correodeprueba@email.com', 'johan123', 'johan123'),
(2, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(3, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(4, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(5, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(6, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(7, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(8, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(9, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(10, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(11, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(12, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(13, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(14, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(15, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(16, 'luis felipe sarmiento', 'pruebas@email.com', 'felipe123', 'felipe123'),
(17, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(18, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(19, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(20, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(21, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(22, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(23, 'luis felipe sarmiento', 'felipe@email.com', 'felipe123', 'felipe123'),
(24, 'luis felipe sarmiento', 'pruebas@email.com', 'cristiansito123', 'sdsadasa'),
(25, 'luis felipe sarmiento', 'pruebas@email.com', 'cristiansito123', 'sdsadasa'),
(26, 'luis felipe sarmiento', 'pruebas@email.com', 'cristiansito123', 'sdsadasa'),
(27, 'luis felipe sarmiento', 'emaildeprueba@email.com', 'dsadsadsad', 'fgdgfdgfdg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria', AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
