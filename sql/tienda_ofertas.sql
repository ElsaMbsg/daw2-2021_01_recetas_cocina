-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 19:56:45
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
-- Estructura de tabla para la tabla `tienda_ofertas`
--

CREATE TABLE `tienda_ofertas` (
  `id` int(12) UNSIGNED NOT NULL,
  `tienda_id` int(12) UNSIGNED NOT NULL,
  `ingrediente_id` int(12) UNSIGNED NOT NULL,
  `descripcion` text DEFAULT NULL,
  `envase` text DEFAULT NULL,
  `cantidad` float NOT NULL DEFAULT 0,
  `medida` varchar(45) DEFAULT NULL,
  `notas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tienda_ofertas`
--

INSERT INTO `tienda_ofertas` (`id`, `tienda_id`, `ingrediente_id`, `descripcion`, `envase`, `cantidad`, `medida`, `notas`) VALUES
(1, 1, 1, 'Oferta 3x2', 'Botella', 3, 'Lt', '2€'),
(2, 2, 10, 'Oferta 2x1', 'Docena', 1, 'Docena', '1.25€'),
(3, 2, 22, 'Oferta 3+1', 'Malla', 4, 'Kg', '3€'),
(4, 1, 16, 'Oferta 2+1', 'Malla', 3, 'Kg', '2€'),
(5, 2, 21, 'Oferta 2x1', 'Malla', 1, 'unidad', '0.50€'),
(6, 2, 18, '50% descuento', 'Envase Plástico', 200, 'g', '1.25€');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienda_ofertas`
--
ALTER TABLE `tienda_ofertas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tienda_ofertas`
--
ALTER TABLE `tienda_ofertas`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
