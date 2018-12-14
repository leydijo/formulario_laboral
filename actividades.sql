-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2018 a las 19:45:10
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(4) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `tareas_realizadas` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `ingreso` time NOT NULL,
  `salida_almuerzo` time NOT NULL,
  `regreso_almuerzo` time NOT NULL,
  `egreso` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `apellido`, `cliente`, `fecha_registro`, `tareas_realizadas`, `descripcion`, `ingreso`, `salida_almuerzo`, `regreso_almuerzo`, `egreso`) VALUES
(1, 'felipe', 'lopez', 'rosas', '2012-12-05', 'despliege', 'despliege', '09:00:00', '13:00:00', '14:00:00', '18:00:00'),
(2, 'yolanda', 'romero', 'galici', '2018-12-02', 'consultas db', 'exportacion db', '08:00:00', '13:00:00', '14:00:00', '18:00:00'),
(3, 'leydi', 'lenis', 'correo', '2018-12-12', 'diseÃ±ar', 'diseÃ±ar aplicacion', '09:20:00', '12:30:00', '13:00:00', '18:00:00'),
(4, 'fernanda', 'sanclemente', 'ada', '2018-12-13', 'formateo', 'configuracion pc', '09:00:00', '13:00:00', '14:00:00', '18:00:00'),
(5, 'maria', 'lenis', 'falabella', '2018-12-01', 'programar', 'maquetacion', '09:00:00', '13:00:00', '14:00:00', '18:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
