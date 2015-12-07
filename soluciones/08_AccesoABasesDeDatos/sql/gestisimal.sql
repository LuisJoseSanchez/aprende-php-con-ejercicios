-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2015 a las 10:38:56
-- Versión del servidor: 5.6.27-0ubuntu1
-- Versión de PHP: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestisimal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `codigo` varchar(4) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `precio_compra` decimal(10,2) NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`codigo`, `descripcion`, `precio_compra`, `precio_venta`, `stock`) VALUES
('h001', 'Varilla roscada 0.50m.', 7.00, 10.00, 9),
('h005', 'Caja tuercas 16mm.', 21.00, 25.05, 20),
('h006', 'chapa galvanizada', 10.50, 20.55, 3),
('h007', 'barra para cortina 2,00 m.', 10.30, 22.33, 5),
('h008', 'Perfil metalico en L longitud 2m.', 23.30, 32.50, 5),
('h009', 'Perfil metalico en U longitud 3m.', 28.30, 52.50, 10),
('h020', 'Barra acero 16mm. longitud 6m.', 35.30, 45.40, 50),
('m001', 'Estantería para pared.', 25.30, 30.60, 5),
('m002', 'Tablero pino 1x2m.', 10.00, 15.00, 20),
('m003', 'Puerta paso 0.72m.', 85.50, 110.55, 5),
('m004', 'Puerta de 0.62m.', 70.50, 90.50, 10),
('m005', 'Puerta blindada 0.82m.', 205.81, 258.33, 2),
('m006', 'Puerta doble hoja 1.2m.', 140.50, 192.30, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
