-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2016 a las 00:41:05
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `curriculum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

CREATE TABLE IF NOT EXISTS `experiencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(17) NOT NULL,
  `cif` varchar(12) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `cargo` varchar(17) NOT NULL,
  `funciones` varchar(50) NOT NULL,
  `identUsuario` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `identUsuario` (`identUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `experiencia`
--

INSERT INTO `experiencia` (`id`, `empresa`, `cif`, `fechaInicio`, `fechaFin`, `cargo`, `funciones`, `identUsuario`) VALUES
(2, 'Navantia', 'JJOOYY7', '1992-04-04', '1992-05-04', 'programador', 'Encargado aplicaicones web', 'juanjo'),
(4, 'Ticomsa', '445511', '1993-05-30', '1992-11-14', 'Instalador', 'Encargado de las instalaciones', 'juanjo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE IF NOT EXISTS `formacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centro` varchar(17) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `titulo` varchar(32) NOT NULL,
  `clasificacion` int(11) NOT NULL,
  `identUsuario` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ident_usuario` (`identUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `formacion`
--

INSERT INTO `formacion` (`id`, `centro`, `fechaInicio`, `fechaFin`, `titulo`, `clasificacion`, `identUsuario`) VALUES
(1, 'carlos3', '1992-04-04', '1992-05-04', 'sads', 5, 'juanjo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nick` varchar(12) NOT NULL,
  `nombre` varchar(12) NOT NULL,
  `clave` varchar(12) NOT NULL,
  `apellidos` varchar(17) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(32) NOT NULL,
  PRIMARY KEY (`nick`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nick`, `nombre`, `clave`, `apellidos`, `fechaNacimiento`, `telefono`, `direccion`) VALUES
('juanjo', 'Juan jose', 'alumno', 'bernabe', '1993-05-30', 123456789, 'C/Lopez'),
('luis', 'luilli', 'alumno', 'cavero', '1992-11-14', 69685748, 'C/Desvio');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`identUsuario`) REFERENCES `usuario` (`nick`);

--
-- Filtros para la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD CONSTRAINT `formacion_ibfk_1` FOREIGN KEY (`identUsuario`) REFERENCES `usuario` (`nick`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
