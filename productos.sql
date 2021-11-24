-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2021 a las 17:14:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `precio` int(255) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `precio`, `imagen`, `nombre`, `stock`) VALUES
(1, 100, 'papas-fritas', 'Papas Fritas', 30),
(2, 300, 'ensalada', 'Ensalada', 30),
(3, 500, 'pizza', 'Pizza', 30),
(4, 300, 'sandwich', 'Sandwich', 30),
(5, 350, 'hamburguesa', 'Hamburguesa', 30),
(6, 200, 'galletitas', 'Galletitas', 30),
(7, 200, 'pancho', 'Pancho', 30),
(8, 100, 'dona', 'Donas', 30),
(9, 100, 'papas-fritas', 'Papas Fritas', 30),
(10, 300, 'ensalada', 'Ensalada', 30),
(11, 500, 'pizza', 'Pizza', 30),
(12, 300, 'sandwich', 'Sandwich', 30),
(13, 350, 'hamburguesa', 'Hamburguesa', 30),
(14, 200, 'galletitas', 'Galletitas', 30),
(15, 200, 'pancho', 'Pancho', 30),
(16, 100, 'dona', 'Donas', 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
