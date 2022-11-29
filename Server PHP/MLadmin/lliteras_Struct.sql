-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 00:02:47
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
-- Base de datos: `lliteras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `_id` int(255) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `articulo` varchar(200) NOT NULL,
  `rubro` varchar(50) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `espesor` varchar(20) NOT NULL,
  `ancho` varchar(20) NOT NULL,
  `largo` varchar(20) NOT NULL,
  `diametro` varchar(20) NOT NULL,
  `litros` varchar(50) NOT NULL,
  `kilos` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `grano` varchar(50) NOT NULL,
  `diente` varchar(10) NOT NULL,
  `activo` varchar(2) NOT NULL DEFAULT 'SI',
  `img` varchar(100) NOT NULL DEFAULT 'generic.jpg',
  `img_tumb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `rubro` varchar(50) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `_id` int(2) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `horarios` text NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `_id` int(10) NOT NULL,
  `radio` int(2) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_portada`
--

CREATE TABLE `img_portada` (
  `_id` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `activa` varchar(2) NOT NULL DEFAULT 'SI'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_showroom`
--

CREATE TABLE `img_showroom` (
  `_id` int(250) NOT NULL,
  `img` varchar(50) NOT NULL,
  `activa` varchar(2) NOT NULL DEFAULT 'SI'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `_id` int(10) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  `activa` varchar(2) NOT NULL DEFAULT 'SI',
  `orden` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(25) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permisos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `img_portada`
--
ALTER TABLE `img_portada`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `img_showroom`
--
ALTER TABLE `img_showroom`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_portada`
--
ALTER TABLE `img_portada`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_showroom`
--
ALTER TABLE `img_showroom`
  MODIFY `_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
