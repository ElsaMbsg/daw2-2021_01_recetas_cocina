-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 19:56:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw2_recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(12) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `domicilio` varchar(150) DEFAULT NULL,
  `poblacion` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `usuario_id` int(12) UNSIGNED NOT NULL COMMENT 'Usuario que se corresponde con la tienda para poder conectar a la aplicación web.',
  `activa` tinyint(1) NOT NULL COMMENT 'Si la tienda esta activa para conectar como usuario, y si estará visible desde el portal junto con sus ofertas independientemente de que esté visible o no.',
  `visible` tinyint(1) NOT NULL COMMENT 'Si la tienda y sus ofertas estarán visibles en el portal aunque esté la tienda activa.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id`, `nombre`, `domicilio`, `poblacion`, `provincia`, `usuario_id`, `activa`, `visible`) VALUES
(1, 'Alimerka', 'Dr. Fleming, 1', 'Zamora', 'Zamora', 11, 1, 1),
(2, 'Carrefour Express', 'Ctra. Pueblica, 3', 'Tábara', 'Zamora', 7, 1, 0),
(5, 'Froiz', 'C. Argentina, 13', 'Zamora', 'Zamora', 4, 1, 1),
(6, 'Gadis', 'Av. de Portugal, 12', 'Zamora', 'Zamora', 5, 1, 1),
(7, 'Lupa', 'P.º de Canalejas, 138', 'Salamanca', 'Salamanca', 6, 1, 1),
(8, 'Carrefour Express', 'C. María Auxiliadora, 23', 'Salamanca', 'Salamanca', 7, 1, 1),
(9, 'Mercadona', 'Calle Ctra. de Salamanca, 7', 'Bejar', 'Salamanca', 8, 1, 1),
(10, 'Dia', 'C. Padre Vicente Salgado, 1', 'Puebla de Sanabria', 'Zamora', 9, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
