-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2013 a las 21:25:00
-- Versión del servidor: 5.5.34-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `titulo`, `imagen`, `descripcion`) VALUES
(3, 'Bebida gratis pidiendo dos pizzas', 'pizza3.jpg', 'Pidiendo dos pizzas de cualquier tipo te regalamos dos bebidas (no incluye bebidas alcohÃ³licas de alta graduaciÃ³n).		'),
(15, 'Oferta de la semana: Funghi a mitad de precio', 'pizza1.jpg', 'Durante esta semana todas las pizzas funghi de tamaÃ±o mediano y familiar estÃ¡n a mitad de precio. Â¡Viva el champiÃ±Ã³n!'),
(16, 'Albahaca gratis en cualquier pizza', 'pizza2.jpg', 'Al encargar cualquier pizza puedes pedir que le aÃ±adamos albahaca Â¡totalmente gratis!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
