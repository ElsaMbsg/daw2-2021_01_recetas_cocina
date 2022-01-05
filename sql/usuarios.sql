-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 19:55:50
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(12) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL COMMENT 'Correo Electronico y "login" del usuario.',
  `password` varchar(60) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `rol` char(1) NOT NULL COMMENT 'Tipo de Perfil: C=Colaborador, A=Administrador, T=Tienda.',
  `aceptado` tinyint(1) NOT NULL COMMENT 'Indicador de usuario aceptado su registro o no.',
  `creado` datetime NOT NULL COMMENT 'Fecha y Hora de creacion del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `nombre`, `rol`, `aceptado`, `creado`) VALUES
(1, 'prueba@mail.com', '711383a59fda05336fd2ccf70c8059d1523eb41a', 'prueba', 'C', 1, '2022-01-02 16:05:26'),
(4, 'froiz@mail.com', '03c18fee4ea554de4077575d363a4f84ad20c90f', 'Froiz', 'T', 1, '2022-01-05 19:42:11'),
(5, 'gadis@mail.com', '673d1de760f5b66914b38ebb2c79a4b181b01209', 'Gadis', 'T', 1, '2022-01-05 19:42:35'),
(6, 'lupa@mail.com', '900bac9f13ceef619b0b3779b0ac185caaf9bdb3', 'Lupa', 'T', 1, '2022-01-05 19:42:58'),
(7, 'carrefour@mail.com', '743a8f254cbfe5fd29dfb3468d7e516b27af468e', 'Carrefour', 'T', 1, '2022-01-05 19:43:27'),
(8, 'mercadona@hola.com', '50f0f0b11f06f81d6a2294aa82cf70a8bd5590f5', 'Mercadona', 'T', 1, '2022-01-05 19:43:46'),
(9, 'dia@hola.com', '4967e07bc327c714541206122152ddfcfdb5b27c', 'Dia', 'T', 1, '2022-01-05 19:44:02'),
(11, 'alimerka@hola.com', '0084d73878ed316b0973510036ef5b4c17bf161a', 'Alimerka', 'T', 1, '2022-01-05 19:49:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
