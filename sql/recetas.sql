-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 19:11:06
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
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(12) UNSIGNED NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text DEFAULT NULL,
  `tipo_plato` char(1) NOT NULL COMMENT 'Tipo Plato E=Entrantes, 1=Primeros, 2=Segundos, P=Postres, ...',
  `dificultad` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1=Muy Facil,5=Muy Dificil.',
  `comensales` tinyint(2) NOT NULL DEFAULT 4 COMMENT 'Numero de comensales para la receta.',
  `tiempo_elaboracion` smallint(4) NOT NULL DEFAULT 0 COMMENT 'Tiempo en Minutos de elaboracion de la receta.',
  `valoracion` tinyint(2) NOT NULL DEFAULT 3 COMMENT 'Valoracion de la receta: 1=Peor, 3=Buena, 5=Mejor.',
  `usuario_id` int(12) UNSIGNED DEFAULT 0 COMMENT 'Usuario que ha creado la receta o CERO si no existe (como si fuera NULL).',
  `aceptada` tinyint(1) DEFAULT NULL COMMENT 'Indicador de receta aceptada o no.',
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre`, `descripcion`, `tipo_plato`, `dificultad`, `comensales`, `tiempo_elaboracion`, `valoracion`, `usuario_id`, `aceptada`, `imagen`) VALUES
(1, 'Bizcocho de yogur', 'El bizcocho, también conocido como bizcochuelo o queque, es uno de los dulces más tradicionales de nuestra gastronomía. La masa se prepara con ingredientes básicos que todos tenemos en casa: harina, huevos, aceite (u otras grasas), yogur y azúcar. También se pueden añadir otros ingredientes como frutos secos o chocolate o aromatizarlo con vainilla, coco, ralladura de limón...', 'P', 1, 5, 55, 5, 1, 1, 'bizcocho.jpg'),
(2, 'Tortilla de patata', 'Plato típico de la gastronomía española.', 'E', 2, 4, 30, 3, 1, 1, ''),
(3, 'Lentejas con Chorizo', 'No a todo el mundo le gustan, como dice el refrán «El que quiera las coma y el que no las deja» pero creo que es importante educar a todos los niños/as desde pequeños para que les guste este guiso introduciéndolo en la dieta diaria. Aunque lleven su tiempo otro punto a favor es que puedes hacer una cazuela de ellas y congelarlas. Siempre y cuando no les añadas patata. Os presento esta receta que casi se hace sola, espero que os guste.', '1', 2, 6, 90, 3, 0, 1, ''),
(4, 'Revuelto de verduras ', 'Una receta ligera que podemos preparar con verduras frescas de temporada o verduras congeladas. También puede ser una receta de aprovechamiento, cuando van quedando trozos de verduras antes de que se pongan malas, es mejor congelar y meter los trozos en una bolsa de congelado, así cuando nos apetezca una tortilla o un revuelto de verduras de diesta, las podemos utilizar. Queda un revuelto rico, jugoso y rápido de preparar.', 'E', 2, 4, 15, 3, 1, 1, ''),
(5, 'Sukiyaki - Carne con verduras rehogadas', 'Plato tradicional japonés que se hace a partir de carne de vaca y verduras rehogadas. Verás que el sukiyaki es una preparación muy rica que suele considerarse como un plato tradicional en días de fiesta en Japón. A continuación te explicamos de forma detallada y muy completa cómo hacer esta receta.', '2', 5, 6, 150, 4, 1, 1, 'sukiyaki.jpg'),
(6, 'Huevos rotos con jamón y patatas', '¿Alguien ha dicho huevos rotos con jamón y chorizo? También conocidos como huevos estrellados, este típico plato de la gastronomía española es sabrosísimo y puede prepararse con diferentes ingredientes. En este caso, veremos una receta de huevos rotos con jamón y patatas y chorizo gallego ahumado así que ¡no te los puedes perder!', '2', 2, 3, 30, 4, 1, 1, 'huevosrotos.jpg'),
(7, 'Arroz a la cubana', 'Según el diccionario de gastronomía, el arroz a la cubana es \"una preparación sencilla de arroz blanco cocido y huevos fritos. Los huevos se sirven colocados sobre montículos de arroz. Es habitual acompañarlo de salsa de tomate y, tradicionalmente, de plátano maduro frito en rebanadas y aguacate\".\r\n\r\nLa denominación del plato \"procede de la práctica cubana de mojar el arroz blanco con la salsa de los guisos, generalmente elaborados con salsa de tomate especiada\". Parece ser que, a pesar de su apellido, su origen no está en Cuba sino en Canarias, donde el uso del plátano autóctono se puso de moda.\r\n\r\nPara nosotros, este plato de toda la vida, siempre ha estado compuesto arroz, huevo frito, plátano canario y salsa de tomate. Desconocíamos lo del aguacate, pero nos parece maravilloso y lo sumaremos a partir de ahora. Hay quienes completan el conjunto con algo de carne: salchichas, cinta de lomo o picadillo de carne. Al gusto.', '2', 2, 1, 160, 3, 1, 1, ''),
(8, 'Fideos de arroz con salteado de tofu y pimiento', 'Los fideos de arroz dan un aire oriental a cualquier plato y creo que por eso combinan tan bien con el tofu. Su textura ligera es muy agradable en sopas, pero también se puede saltear con otros ingredientes. Recordad escurrir bien el tofu antes de usarlo en recetas como esta, y no os cortéis con las especias.\r\n\r\nMe atrevería a decir que todo el mundo tiene algún paquete de pasta siempre en la despensa. Si no la habéis probado, os recomiendo variar de vez en cuando con variedades de arroz, y seguro que los celíacos la conocen bien. Estos fideos de arroz con salteado de tofu y pimiento se preparan en un suspiro y es un plato vegano y sin gluten.', '1', 4, 2, 35, 3, 1, 1, ''),
(9, 'Burritos Vegetarianos', 'La cocina mexicana se ha hecho un hueco en nuestro país y no es de extrañar. La gastronomía del país del otro lado del charco está repleta de sabores extraordinarios, de ingredientes frescos y de mucha sencillez en sus elaboraciones. Al menos en las más populares, que no las únicas, como es el caso de la receta de burritos vegetarianos.\r\n\r\nOs puedo garantizar que los burritos vegetarianos están tan repletos de sabor que, vegetarianos o no, los probaréis y querréis más. Son jugosos, de textura suave y ligeramente picantes, con un relleno de frijoles refritos y cebolla y pimientos salteados al chile que quita el sentido. No obstante, podéis adaptarlos a vuestros gustos porque son de lo más versátil.', '1', 2, 3, 60, 4, 5, 1, ''),
(10, 'Pollo Agridulce', 'En esta ocasión, vamos a preparar un pollo agridulce chino. Pero no uno cualquiera. La receta original. En realidad es muy fácil de hacer. ¿Quién necesita ir a los restaurantes de comida china, pudiendo prepararlo en casa? Vamos a ver cómo hacer en casa este pollo agridulce chino siguiendo unos sencillos pasos que te muestro a continuación.', '2', 3, 2, 30, 2, 1, 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
