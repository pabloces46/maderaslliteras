-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 00:04:03
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `ID` int(100) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backup`
--

CREATE TABLE `backup` (
  `ID` int(10) NOT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `ID` int(10) NOT NULL,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `FECHA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `ID` int(100) NOT NULL,
  `CODIGO` varchar(10) NOT NULL,
  `REPUESTO` text NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `USO` text NOT NULL,
  `STOCK` int(100) NOT NULL,
  `CANTMIN` int(10) NOT NULL,
  `DEPOSITO` varchar(50) NOT NULL,
  `UBICACION` varchar(10) NOT NULL,
  `ESTADO` varchar(200) NOT NULL DEFAULT 'activo',
  `IMAGEN` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `NA` int(10) NOT NULL,
  `CODPROV` varchar(50) NOT NULL,
  `PROVEEDOR` varchar(50) NOT NULL,
  `PRESENTACION` varchar(50) NOT NULL,
  `UNIDAD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaequipos`
--

CREATE TABLE `listaequipos` (
  `ID` int(10) NOT NULL,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `ID` int(20) NOT NULL,
  `FECHA` datetime NOT NULL,
  `CODIGO` varchar(20) NOT NULL,
  `ARTICULO` varchar(100) NOT NULL,
  `TIPO_MOV` varchar(10) NOT NULL,
  `CANTIDAD` int(100) NOT NULL,
  `USER` varchar(20) NOT NULL,
  `DISPOSITIVO` varchar(20) NOT NULL,
  `RECURSO` varchar(10) NOT NULL,
  `COMENTARIOS` text NOT NULL,
  `PARCIAL` int(10) NOT NULL,
  `PARCIALAPP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `ID` int(255) NOT NULL,
  `USER` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `LEIDO` varchar(2) COLLATE ucs2_spanish_ci NOT NULL DEFAULT 'NO',
  `TEXTO` text COLLATE ucs2_spanish_ci NOT NULL,
  `TIPO` varchar(20) COLLATE ucs2_spanish_ci NOT NULL,
  `FECHA` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL,
  `USER` varchar(20) NOT NULL,
  `PWD` varchar(12) NOT NULL,
  `PERMISOS` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `NOTIF_MOV` varchar(2) NOT NULL DEFAULT 'NO',
  `NOTIF_DIF` varchar(2) NOT NULL DEFAULT 'NO',
  `ACTIVO` varchar(2) NOT NULL DEFAULT 'SI'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `listaequipos`
--
ALTER TABLE `listaequipos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `backup`
--
ALTER TABLE `backup`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listaequipos`
--
ALTER TABLE `listaequipos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
