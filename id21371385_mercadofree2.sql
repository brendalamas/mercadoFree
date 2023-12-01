-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2023 a las 00:23:16
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21371385_mercadofree2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_cliente`, `id_producto`, `cantidad`) VALUES
(1, 10, 6, 1),
(2, 10, 5, 1),
(4, 10, 7, 1),
(5, 10, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `correo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `passw` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `correo`, `passw`) VALUES
(1, 'Argel', 'amichinel@gmail.com', '$2y$10$/fU0SX8BUmTOZO5qet3OyebyyWtEMmXW37tbBIxJyvsAbRC55gDLm'),
(2, 'rrr', 'brenn@gmail.som', '$2y$10$.DXHQPoIAc3g8TeAf7NnXOelhLUt6qscoFd.Zje/ODoHobzpk3Nyy'),
(3, 'brenda', 'brenn.lamas@gmail.com', '$2y$10$jxDIFQpabZQzywGVDpb0R.xnh9TV1fYuPtGS.bQNE7ayaUjcqe6T.'),
(4, 'cinthia', 'orona@orona', '$2y$10$3XHpJtXZRpSz8bq4zgFW2uX3eO.4fQy58/SGhymacOC9lrgneh7t2'),
(5, 'jjj', 'jjj', '$2y$10$MuLpH0VENB5jpeicBhUmGeLisc7DLYv0F4638iJeqJGXbf8ZllI8i'),
(6, 'lalala', 'cin@gmail.com', '$2y$10$hmYWAr9hLjHtSddEFVSdiu76JrDWAe3rAO9x.HqM6F2ktE.yvriE2'),
(7, 'Pedro', 'pedro@pedro.com', '$2y$10$Tq1nzzw4hm0fylftUPNeqORVwyhHB3C/hIlX9odk2J.M3iFvgL1wW'),
(8, 'Manuel', 'manuel@maunel.com', '$2y$10$ltFQiyv.HPKxo4oMnUCi3.xtkKvXeSH4pVMCH4qp4/OzaWZ/5itW2'),
(9, 'miguel', 'miguel@miguel.com', '$2y$10$X2QRYggn6b5m6jZIgQ1LZ.0sc6Yin5G6jo4997274U8bFw6oRaflG'),
(10, 'conejo', 'conejo@conejo.com', '$2y$10$hc.a5QDQKIdKHTYAf8rqHON1tbEKLEpS/P9af4zdQkcvrMxog9smO'),
(11, 'Gato', 'gato@gato.com', '$2y$10$YfpYf1yzlE/J8vRCYFp9iertbOI4dpAnZqxFI4dLJiNBDO.OwnWRi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

DROP TABLE IF EXISTS `compra_producto`;
CREATE TABLE IF NOT EXISTS `compra_producto` (
  `id_compra` int NOT NULL,
  `id_producto` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int NOT NULL AUTO_INCREMENT,
  `id_producto` int NOT NULL,
  `ruta` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `id_producto`, `ruta`) VALUES
(1, 1, 'https://iili.io/JKkLGe4.webp'),
(2, 2, 'https://iili.io/JKkL7st.webp'),
(3, 3, 'https://iili.io/JKkLMml.webp'),
(4, 4, 'https://iili.io/JKkLc1n.webp'),
(5, 5, 'https://iili.io/JKkLE7f.webp'),
(6, 6, 'https://iili.io/JKkL1dG.webp'),
(7, 7, 'https://iili.io/JKkLaqX.webp'),
(8, 8, 'https://iili.io/JKkL1dG.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cantidad` int NOT NULL,
  `id_vendedor` int NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `precio` float NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `cantidad`, `id_vendedor`, `descripcion`, `precio`) VALUES
(1, 'Microondas Digital Atma Matdb20cn Negro 20 Lts 700w', 600, 6, 'Hermoso microondas marca Philco, modelo dark', 12345),
(2, 'Aire Acondicionado Sansei Split Inverter Ultra Frío/calor 3053 Frigorías Blanco 220v Sain35ha3bpi', 600, 2, 'Clasificado con eficiencia energética Clase B en modo frío y calor.', 356999),
(3, 'Monitor gamer Philips V 221V8 LCD 21.5 negro 100V/240V', 600, 3, 'Mediante su entrada PC In podrás conectar tu PC o Notebook. Ofrece la posibilidad de conectarse a través de HDMI. El LED no tiene sistema de audio incorporado.', 62499),
(4, 'Zapatilla Blanca Y Celeste De Cuero Mujer Gravagna', 200, 6, 'Comoda y moderna para darle un estilo distinto a cualquier look.', 32000),
(5, 'Customs Ba Maxi Camisas Mujer Talles Grandes Importadas Jy', 600, 2, 'Para la oficina, para la noche, para el día', 42900),
(6, 'Toyota Corolla 1.8 Se-g Cvt 140cv', 600, 3, 'Auto para todos los días y para ruta', 266600),
(7, 'Airfryer Xl Philips Essential Connected Hd9280/90 Color Negro y plateado oscuro', 600, 6, 'No hagas solo papas', 215999),
(8, 'Campera Abrigo Hombre Invierno Montaña Impermeable Premium.', 600, 2, 'Campera rompeviento e impermeable', 27199);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_categoria`
--

DROP TABLE IF EXISTS `producto_categoria`;
CREATE TABLE IF NOT EXISTS `producto_categoria` (
  `id_producto` int NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
CREATE TABLE IF NOT EXISTS `vendedores` (
  `id_vendedor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `correo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `passw` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_vendedor`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nombre`, `correo`, `passw`) VALUES
(1, 'Vendedor1', 'gato@gato.com', '$2y$10$KJzcdM8sSv8g.Mw/OFJjRuQzvNaxYb/VhDSptjIVWuR0DpBCQTFai'),
(2, 'Gregorio Vargas', 'Gregorio.vargas@gmail.com', '$2y$10$UUB5RhnholL.0GZDQpZANuD68618ezBszDlaFSpxmLEwcG5iyx2BK'),
(3, 'Brenda ', 'brenda.lamas@gmail.com', '$2y$10$xD9uopO7Qb79JTftCskZMewyDj6GtL6VTcgVk4Vvl5tASF9cPVTqO'),
(4, 'jjj', 'jjj', '$2y$10$lMl.DIpHAfWrtJqqODOXB.KFKu0Z2ypaC53isW1J08/pBh7o0e0YK'),
(5, 'gato', 'perro@perro.com', '$2y$10$sc2S7t8lHLv0NQ07L1uZpup4JGwlgSTIP78r2WfJ9AtqSvzxguKFO'),
(6, 'conejo1', 'conejo1@conejo.com', '$2y$10$gbsb2dxYpWWOOBzI2sZ/IekNKuMZP3Sz8XW1axi0StjdV.FQdpXAS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
