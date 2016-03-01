-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2015 a las 23:50:41
-- Versión del servidor: 5.6.19-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `scwdatabase`
--
CREATE DATABASE IF NOT EXISTS `scwdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scwdatabase`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquilers`
--

DROP TABLE IF EXISTS `alquilers`;
CREATE TABLE IF NOT EXISTS `alquilers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idcargo` int(11) NOT NULL,
  `idcomputadora` int(11) NOT NULL,
  `horainicio` datetime NOT NULL,
  `horafin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacioncargos`
--

DROP TABLE IF EXISTS `asignacioncargos`;
CREATE TABLE IF NOT EXISTS `asignacioncargos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idcargo` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `tipocargo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE IF NOT EXISTS `cargos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idtipocargo` int(11) NOT NULL,
  `existencia` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `descripcion` text NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `unidadminima` varchar(30) NOT NULL,
  `precio` float NOT NULL,
  `preciomoney` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

DROP TABLE IF EXISTS `computadoras`;
CREATE TABLE IF NOT EXISTS `computadoras` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `estadoid` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`id`, `numero`, `estadoid`, `descripcion`, `activo`) VALUES
(1, 1, 0, 'Samsung', 1),
(2, 2, 1, 'Toshiba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocomputadoras`
--

DROP TABLE IF EXISTS `estadocomputadoras`;
CREATE TABLE IF NOT EXISTS `estadocomputadoras` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadofacturas`
--

DROP TABLE IF EXISTS `estadofacturas`;
CREATE TABLE IF NOT EXISTS `estadofacturas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idasignacion` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `consecutivo` varchar(20) NOT NULL,
  `iva` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica`
--

DROP TABLE IF EXISTS `practica`;
CREATE TABLE IF NOT EXISTS `practica` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cedula` text NOT NULL,
  `salario_mensual` decimal(18,2) NOT NULL,
  `departamento` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Conexón de PHP a MySQL';

--
-- Volcado de datos para la tabla `practica`
--

INSERT INTO `practica` (`nombre`, `apellido`, `fecha_nacimiento`, `cedula`, `salario_mensual`, `departamento`) VALUES
('Ericka', 'Mejia', '0000-00-00', '001-120385-0074L', '3000.00', 'Managua'),
('Marcos', 'Ruiz', '1984-01-10', '003-19840110-0064M', '8000.00', 'Granada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocargos`
--

DROP TABLE IF EXISTS `tipocargos`;
CREATE TABLE IF NOT EXISTS `tipocargos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipocargos`
--

INSERT INTO `tipocargos` (`id`, `nombre`) VALUES
(2, 'ImpresiÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

DROP TABLE IF EXISTS `tipousuarios`;
CREATE TABLE IF NOT EXISTS `tipousuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cedula` text NOT NULL,
  `salario_mensual` decimal(18,2) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `apellido`, `fecha_nacimiento`, `cedula`, `salario_mensual`, `departamento`) VALUES
('Pedro', 'Muñoz', '1971-02-10', '001-280892-0074L', '3000.00', 'Managua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipousuario` int(11) NOT NULL DEFAULT '1',
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `descripcion` text NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipousuario`, `nombre`, `apellidos`, `username`, `password`, `descripcion`, `activo`) VALUES
(1, 1, 'Karen', 'Aguirre', 'kaliss', 'f143c8f69396103d729489a31d1b3544c8e802f2', 'Administrador Invitado', 1),
(3, 1, 'Juan', 'Perez', 'juancho', '746c4101220e7c0dd2249bca894df66e0d745c56', 'Administrador', 1),
(4, 1, 'Armando ', 'Lopez', 'armandol', '746c4101220e7c0dd2249bca894df66e0d745c56', 'Administrador Invitado', 1),
(7, 1, 'Camilo', 'Quintana', 'loli', '2e033459962273bac40c9af2d65a71e4', 'Docente', 1),
(8, 1, 'Aura', 'Aguirre', 'auri', 'ce940740f65fb11cbfc04b5c23f0ca1c', 'Estudiante', 1),
(9, 1, 'Juan', 'Lopez', 'juancho', 'ce940740f65fb11cbfc04b5c23f0ca1c', 'Administrador Invitado', 1),
(10, 1, 'administrator', 'administrator', 'admin', '479de691fd258d28b9d491fd4e0ef3fb', '.', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
