-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 17:08:05
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
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(12) UNSIGNED NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `datos_nutricion` text DEFAULT NULL COMMENT '(opcional) Datos nutricionales del ingrediente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nombre`, `descripcion`, `datos_nutricion`) VALUES
(1, '  Aceite de girasol', 'Ingrediente Condimento', '144kcal'),
(10, '              Huevo', 'Ingrediente Proteico', '144kcal'),
(11, '     Yogur de limón', 'Ingrediente Postre', '144kcal'),
(12, '    Aceite de oliva', 'Ingrediente Condimento', '144kcal'),
(13, '             Azúcar', 'Ingrediente Condimento', '144kcal'),
(14, '             Harina', 'Ingrediente Condimento', '144kcal'),
(15, '           Levadura', 'Ingrediente Condimento', '144kcal'),
(16, '              Limón', 'Ingrediente Fruta', '144kcal'),
(17, '        Azúcar glas', 'Ingrediente Condimento', '144kcal'),
(18, '        Mantequilla', 'Ingrediente Condimento', '144kcal'),
(19, '           Lentejas', 'Ingrediente Legumbre', '144kcal'),
(20, '         Zanahorias', 'Ingrediente Verdura', '144kcal'),
(21, '                Ajo', 'Ingrediente Condimento', '144kcal'),
(22, '            Cebolla', 'Ingrediente Condimento', '144kcal'),
(23, '             Laurel', 'Ingrediente Condimento', '144kcal'),
(24, '     Pimentón dulce', 'Ingrediente Condimento', '144kcal'),
(25, '                Sal', 'Ingrediente Condimento', '144kcal'),
(26, '     Pimienta negra', 'Ingrediente Condimento', '144kcal'),
(27, '     Pimiento verde', 'Ingrediente Verdura', '144kcal'),
(28, '             Tomate', 'Ingrediente Verdura', '144kcal'),
(29, '      Hueso de caña', 'Ingrediente Carne', '144kcal'),
(30, '            Chorizo', 'Ingrediente Carne', '144kcal'),
(31, '           Morcilla', 'Ingrediente Carne', '144kcal'),
(32, '     Hueso de jamón', 'Ingrediente carne', '144kcal'),
(33, '               Agua', 'Ingrediente Bebida', '144kcal'),
(34, '        Arroz bomba', 'Ingrediente Pasta', '144kcal'),
(35, '            Plátano', 'Ingrediente Fruta', '144kcal'),
(36, '        Tomate pera', 'Ingrediente Verdura', '144kcal'),
(37, '     Pimiento verde', 'Ingrediente Verdura', '144kcal'),
(38, '     Alubias negras', 'Ingrediente Legumbre', '144kcal'),
(39, '       Chile molido', 'Ingrediente Carne', '144kcal'),
(41, '      Pimiento rojo', 'Ingrediente Verdura', '144kcal'),
(42, ' Tortillas de trigo', 'Ingrediente Vegetariano', '144kcal'),
(43, '            Patatas', 'Ingrediente Verdura', '144kcal'),
(44, '          Calabacín', 'Ingrediente Verdura', '144kcal'),
(45, '          Berenjena', 'Ingrediente Verdura', '144kcal'),
(46, '        Champiñones', 'Ingrediente Vegano', '144kcal'),
(47, '              Jamón', 'Ingrediente Conserva', '144kcal'),
(48, '    Fideos de arroz', 'Ingrediente Pasta', '144kcal'),
(49, '         Tofu firme', 'Ingrediente Vegetariano', '144kcal'),
(50, '    Jengibre fresco', 'Ingrediente Condimento', '144kcal'),
(51, '         Salsa soja', 'Ingrediente Salsa', '144kcal'),
(52, '       Curry molido', 'Ingrediente Condimento', '144kcal'),
(53, '      Ajo granulado', 'Ingrediente Condimento', '144kcal'),
(54, '     Cúrcuma molida', 'Ingrediente Condimento', '144kcal'),
(55, '               Lima', 'Ingrediente Fruta', '144kcal'),
(56, '     Perejil fresco', 'Ingrediente Condimento', '144kcal'),
(57, '           Cilantro', 'Ingrediente Condimento', '144kcal'),
(58, '   Pechuga de pollo', 'Ingrediente Carne', '144kcal'),
(59, '        Vino blanco', 'Ingrediente Bebida', '144kcal'),
(111, '            Maicena', 'Ingrediente Condimento', '144kcal'),
(112, '            Kétchup', 'Ingrediente Salsa', '144kcal'),
(113, '   Vinagre de arroz', 'Ingrediente Condimento', '144kcal'),
(114, '      Azúcar moreno', 'Ingrediente Condimento', '144kcal'),
(115, '          Solomillo', 'Ingrediente Carne', '144kcal'),
(116, '               Lomo', 'Ingrediente Carne', '144kcal'),
(117, '           Shiratak', 'Ingrediente Pasta', '144kcal'),
(118, '           Shungiku', 'Ingrediente Condimento', '144kcal'),
(119, '    Brotes de bambú', 'Ingrediente Vegetariano', '144kcal'),
(120, '               Café', 'Ingrediente Bebida', '144kcal'),
(121, '\'Caldo Japonés dashi', 'Ingrediente Bebida', '144kcal'),
(122, '      Miel de arroz', 'Ingrediente Condimento', '144kcal'),
(123, '       Arroz blanco', 'Ingrediente Pasta', '144kcal'),
(124, '            Caballa', 'Ingrediente Pescado', '144kcal'),
(125, '          Mugi miso', 'Ingrediente Vegano', '144kcal'),
(126, '     Miso de cebada', 'Ingrediente Vegano', '144kcal'),
(127, '         Shiro miso', 'Ingrediente Vegetariano', '144kcal'),
(128, '        Miso blanco', 'Ingrediente Vegetariano', '144kcal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
