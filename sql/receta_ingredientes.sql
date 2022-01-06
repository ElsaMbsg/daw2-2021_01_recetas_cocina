-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 20:35:59
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
-- Base de datos: `daw2_recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta_ingredientes`
--

CREATE TABLE `receta_ingredientes` (
  `id` int(12) UNSIGNED NOT NULL,
  `receta_id` int(12) UNSIGNED NOT NULL,
  `ingrediente_id` int(12) UNSIGNED NOT NULL,
  `cantidad` float NOT NULL DEFAULT 0,
  `medida` varchar(45) DEFAULT NULL,
  `notas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `receta_ingredientes`
--

INSERT INTO `receta_ingredientes` (`id`, `receta_id`, `ingrediente_id`, `cantidad`, `medida`, `notas`) VALUES
(1, 1, 10, 3, 'unidad', ''),
(2, 1, 12, 1, 'envase de yogur', ''),
(3, 1, 14, 3, 'envase de yogur', ''),
(4, 1, 16, 1, 'unidad', ''),
(5, 1, 11, 1, 'unidad', ''),
(6, 1, 13, 2, 'envase de yogur', ''),
(7, 1, 15, 1, 'sobre', ''),
(8, 1, 17, 1, 'cucharada', ''),
(9, 2, 43, 700, 'gramos', ''),
(10, 2, 22, 300, 'gramos', ''),
(11, 2, 10, 6, 'unidad', ''),
(12, 2, 25, 1, '', ''),
(13, 2, 12, 0, '', ''),
(14, 3, 19, 500, 'gramos', ''),
(15, 3, 21, 2, 'diente', ''),
(16, 3, 22, 2, 'unidad', ''),
(17, 3, 23, 1, 'hoja', ''),
(18, 3, 24, 1, 'cucharada', ''),
(19, 3, 25, 1, 'pizca', 'al gusto'),
(20, 3, 26, 1, 'pizca', 'al gusto'),
(21, 3, 12, 4, 'cuchrarada', ''),
(22, 3, 27, 1, 'unidad', ''),
(23, 3, 28, 2, 'unidad', ''),
(24, 3, 29, 1, 'unidad', ''),
(25, 3, 30, 2, 'unidad', ''),
(26, 3, 31, 1, 'unidad', ''),
(27, 3, 32, 0.25, 'unidad', 'un cuarto'),
(28, 3, 33, 0, '', 'Cantidad indetermindada'),
(29, 4, 22, 300, 'gramos', '300 gramos en total las verduras'),
(30, 4, 41, 300, 'gramos', '300 gramos en total las verduras'),
(31, 4, 44, 300, 'gramos', '300 gramos en total las verduras'),
(32, 4, 45, 300, 'gramos', '300 gramos en total las verduras'),
(33, 4, 46, 300, 'gramos', '300 gramos en total las verduras'),
(34, 4, 10, 4, 'unidades', ''),
(35, 4, 12, 2, 'cucharadas soperas', ''),
(36, 4, 25, 1, 'pizca', ''),
(37, 5, 115, 500, 'gramos', ''),
(38, 5, 22, 500, 'gramos', 'Cebolleta'),
(39, 4, 22, 1, 'unidad', 'Cebolla roja en rodajas'),
(40, 5, 49, 2, 'láminas', 'en dados'),
(41, 5, 117, 250, 'gramos', ''),
(42, 5, 118, 100, 'gramos', ''),
(43, 5, 119, 225, 'gramos', 'en rodajas'),
(44, 5, 46, 12, 'unidades', ''),
(45, 5, 51, 0.5, 'taza', ''),
(46, 5, 120, 1, 'taza', ''),
(47, 5, 122, 4, 'cucharadas soperas', ''),
(48, 5, 12, 1, 'cucharadas soperas', ''),
(49, 5, 10, 0, 'unidad', ''),
(50, 6, 43, 2, 'unidad', ''),
(51, 6, 47, 250, 'gramos', ''),
(52, 6, 30, 2, 'unidad', ''),
(53, 6, 1, 0, '', 'para freir'),
(54, 7, 34, 100, 'gramos', ''),
(55, 7, 35, 1, 'unidad', ''),
(56, 7, 10, 2, 'unidad', ''),
(57, 7, 12, 0, '', 'cantidad indetermindada'),
(58, 7, 23, 1, 'hoja', ''),
(59, 7, 25, 1, 'pizca', ''),
(60, 7, 28, 2, 'kg', ''),
(61, 7, 20, 3, 'unidad', ''),
(62, 7, 37, 2, 'unidad', ''),
(63, 7, 22, 1, 'unidad', ''),
(64, 8, 48, 120, 'gramos', ''),
(65, 8, 49, 200, 'gramos', ''),
(66, 8, 41, 1, 'unidad', ''),
(67, 8, 50, 1, 'trocito', ''),
(68, 8, 51, 15, 'ml', ''),
(69, 8, 52, 0.5, 'cuchraradita', ''),
(70, 8, 53, 0.25, 'cuchraradita', ''),
(71, 8, 54, 1, 'cuchraradita', ''),
(72, 8, 55, 1, 'unidad', ''),
(73, 8, 26, 0, '', 'cantidad indetermindada'),
(74, 8, 25, 1, 'pizca', ''),
(75, 8, 12, 0, '', 'cantidad indetermindada'),
(76, 8, 56, 0, '', 'cantidad indetermindada'),
(77, 9, 38, 250, 'gramos', ''),
(78, 9, 23, 1, 'hoja', ''),
(79, 9, 39, 5, 'gramos', ''),
(80, 9, 1, 0, '', 'cantidad indetermindada'),
(81, 9, 25, 1, 'pizca', 'cantidad indetermindada'),
(82, 9, 22, 1, 'unidad', ''),
(83, 9, 41, 1, 'unidad', ''),
(84, 9, 27, 1, 'unidad', ''),
(85, 9, 12, 0, '', 'cantidad indetermindada'),
(86, 9, 25, 3, 'gramos', 'sal de ajo'),
(87, 9, 42, 4, 'unidad', ''),
(88, 10, 58, 300, 'gramos', ''),
(89, 10, 10, 1, 'unidad', ''),
(90, 10, 51, 1, 'cucharada', ''),
(91, 10, 59, 1, 'cucharada', ''),
(92, 10, 41, 1, 'unidad', ''),
(93, 10, 27, 1, 'unidad', ''),
(94, 10, 21, 1, 'diente', ''),
(95, 10, 22, 0.5, 'unidad', ''),
(96, 10, 111, 0, '', 'cantidad indetermindada'),
(97, 10, 25, 0, '', 'cantidad indetermindada'),
(98, 10, 1, 0, '', 'cantidad indetermindada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receta_ingredientes`
--
ALTER TABLE `receta_ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta_ingredientes`
--
ALTER TABLE `receta_ingredientes`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
