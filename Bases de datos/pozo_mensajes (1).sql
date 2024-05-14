-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2024 a las 18:39:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pozo_mensajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `MensajeId` int(11) NOT NULL,
  `Telefono` text NOT NULL,
  `Texto` text NOT NULL,
  `Prioridad` text NOT NULL,
  `Estado` text NOT NULL,
  `UsuarioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`MensajeId`, `Telefono`, `Texto`, `Prioridad`, `Estado`, `UsuarioId`) VALUES
(1, '0983148193', 'hola', 'importante', 'pendiente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int(11) NOT NULL,
  `correo` text NOT NULL,
  `contrasenia` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `correo`, `contrasenia`, `rol`) VALUES
(1, 'nando@', '1234', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`MensajeId`),
  ADD KEY `mensaje_usuario` (`UsuarioId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `MensajeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensaje_usuario` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
