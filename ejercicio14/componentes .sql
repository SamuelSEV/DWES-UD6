-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-01-2022 a las 21:54:03
-- Versión del servidor: 8.0.22
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `componentes`
--
CREATE DATABASE IF NOT EXISTS `componentes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `componentes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `id` int NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int NOT NULL,
  `cantidad` int NOT NULL,
  `fechalanzamiento` date NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `marca`, `modelo`, `descripcion`, `precio`, `cantidad`, `fechalanzamiento`, `imagen`) VALUES
(8, 'AMD', 'ryzen 7', 'Procesador AMD ryzen 7', 150, 100, '2019-05-24', 'amd-ryzen-7-5700g.png'),
(9, 'AORUS', 'GeForce RTX™ 3090 XTREME WATERFORCE 24G', 'Grafica GeForce RTX™ 3090 XTREME WATERFORCE 24G ', 2500, 25, '2021-06-08', '81EUoU+8C-L._AC_SX450_.jpg'),
(10, 'Asus', 'Asus ROG MAXIMUS Z690 EXTREME GLACIAL', 'Placa base Asus ROG MAXIMUS Z690 EXTREME GLACIAL', 2099, 30, '2021-07-12', 'pd.png'),
(11, 'G.Skill', 'Trident Z Neo DDR4 3600MHz 64GB 4x16GB CL14', 'Memorias ram Trident Z Neo DDR4 3600MHz 64GB 4x16GB CL14', 797, 50, '2020-06-21', '41EdYqWxxuL._SL500_.jpg'),
(12, 'EVGA', 'SuperNOVA 2000 G1+ 2000W 80 Plus Gold Modular', 'Fuente alimentacion SuperNOVA 2000 G1+ 2000W 80 Plus Gold Modular', 554, 200, '2021-09-14', '220-GP-2000-X6_XL_1.png'),
(13, 'Corsair', 'MP400 8TB SSD M.2 NVMe PCIE Gen3 x4', 'El SSD CORSAIR MP400 Gen3 PCIe x4 NVMe M.2 ofrece hasta 3400 MB/s de lectura secuencial y hasta 3000 MB/s de velocidad de escritura secuencial, utilizando memoria 3D QLC NAND de alta capacidad.', 1441, 120, '2020-11-16', 'Corsair-MP400-Oficial.png'),
(14, 'Thermaltake', 'Thermaltake Level 20 Cristal Templado USB 3.1 RGB', 'Caja de ordenador Thermaltake Level 20 Cristal Templado USB 3.1 RGB', 1022, 60, '2018-12-28', 'pic1.jpg'),
(15, 'WD', 'Purple Surveillance 3.5', 'Creados para sistemas de seguridad de alta definición que operan de forma ininterrumpida, 24 horas, todos los días. Los discos WD Purple cuentan con una carga de trabajo de hasta 180 TB/año, admiten hasta 64 cámaras y están optimizados para sistemas de videovigilancia.', 669, 150, '2020-10-03', 'wd-purple-surveillance-35-18tb-sata-3.jpg'),
(60, 'fasdfasd', 'sadfdsaf', 'Casi siempre, a las acciones de los malvados las persigue primeramente la sospecha, luego el rumor y la voz pública, la acusación después y, finalmente, la justicia. ', 1, 1, '2021-11-01', ''),
(61, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(62, 'Appel', 'iphone 14', 'Movil', 1000, 3, '2021-05-07', ''),
(63, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(66, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(68, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(69, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(70, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(71, 'Appel', 'iphone 13', 'Movil', 1000, 3, '2021-05-07', ''),
(73, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(74, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(75, 'Appel', 'iphone 13', 'Movil', 1000, 3, '2021-05-07', ''),
(77, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(78, 'Nacon', 'CH 550', 'Silla gaming', 115, 6, '2021-11-02', ''),
(79, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(80, 'Appel', 'iphone 13', 'Movil', 1000, 3, '2021-05-07', ''),
(81, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(82, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(83, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(84, 'Appel', 'iphone 13', 'Movil', 1000, 3, '2021-05-07', ''),
(86, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(87, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(88, 'Appel', 'iphone 13', 'Movil', 1000, 3, '2021-05-07', ''),
(89, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(90, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(91, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(92, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(93, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(94, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(95, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(96, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(97, 'Gygabyte', 'A564', 'Disco duro', 150, 7, '2021-03-15', ''),
(98, 'Asus', 'ROG', 'Placa Base', 500, 5, '2021-08-18', ''),
(99, 'Logitech', 'C950s', 'Webcam', 80, 1, '2021-09-12', ''),
(100, 'gfsadgf', 'fdgsdg', 'sfdgsdg', 20, 2, '2021-11-17', 'ss.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` text NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`) VALUES
(1, 'samuel', ''),
(2, 'juan', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
