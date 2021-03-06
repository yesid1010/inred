-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2019 a las 04:02:44
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ongnios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `idbarrios` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idcomuna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`idbarrios`, `nombre`, `idcomuna`) VALUES
(1, 'Maria Eugenia', 1),
(2, '20 De Octubre', 6),
(3, 'Bastidas', 5),
(4, 'Gaira', 6),
(5, 'El Jardin', 4),
(6, 'Don Jaca', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `idcomuna` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idlocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`idcomuna`, `nombre`, `idlocalidad`) VALUES
(1, 'Comuna 1', 1),
(2, 'Comuna 2', 2),
(3, 'Comuna 3', 2),
(4, 'Comuna 4', 2),
(5, 'Comuna 5', 2),
(6, 'Comuna 6', 1),
(7, 'Comuna 9', 1),
(8, 'Comuna 7', 3),
(9, 'Comuna 8', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `identificacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`identificacion`, `nombre`, `apellido`, `correo`, `usuario`, `password`, `fecha_registro`, `estado`, `idrol`) VALUES
('123456789', 'Administrador', 'Administrador', 'administrador@administrador.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-04-06 06:53:51', 'activo', 1),
('654123987', 'Coordinador', 'Coordinador', 'coordinador@coordinador.com', 'coordinador', '4abdd328d64c87e3960ae29b67f8baef', '2019-04-06 06:56:38', 'activo', 3),
('789456123', 'Digitador', 'Digitador', 'digitador@digitador.com', 'digitador', 'd2b87f296cbec3aae6dce5444cae862a', '2019-04-07 17:08:49', 'activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `idlocalidad` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`idlocalidad`, `nombre`) VALUES
(1, 'L1'),
(2, 'L2'),
(3, 'L3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idproyecto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idproyecto`, `nombre`) VALUES
(1, 'Deportes'),
(2, 'Muevete Samario'),
(3, 'Escuelas Populares Del Deporte'),
(4, 'Juegos Tecnicos Y Tecnologicos'),
(5, 'Torneos Gremiales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Digitador'),
(3, 'Coordinador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `grupo_sanguineo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `caracterizacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `celular` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lesion_efermedad_deportiva` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `medicamentos` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sisben` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `eps` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `empleados` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `idproyecto` int(11) NOT NULL,
  `modalidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `barrio_proyecto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `idbarrio` int(11) NOT NULL,
  `acudiente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parentezco` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula_acudiente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cel_acudiente` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo_acudiente` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`idbarrios`,`idcomuna`),
  ADD KEY `fk_barrios_comunas_idx` (`idcomuna`);

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`idcomuna`,`idlocalidad`),
  ADD KEY `fk_comunas_localidad_idx` (`idlocalidad`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`identificacion`,`idrol`),
  ADD KEY `fk_empleados_roles1_idx` (`idrol`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`idlocalidad`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idproyecto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificacion`,`empleados`,`idproyecto`,`idbarrio`),
  ADD KEY `fk_usuarios_empleados1_idx` (`empleados`),
  ADD KEY `fk_usuarios_proyectos1_idx` (`idproyecto`),
  ADD KEY `fk_usuarios_barrios1_idx` (`idbarrio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `idbarrios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `idcomuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `idlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idproyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD CONSTRAINT `fk_barrios_comunas` FOREIGN KEY (`idcomuna`) REFERENCES `comunas` (`idcomuna`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD CONSTRAINT `fk_comunas_localidad` FOREIGN KEY (`idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleados_roles1` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_barrios1` FOREIGN KEY (`idbarrio`) REFERENCES `barrios` (`idbarrios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_empleados1` FOREIGN KEY (`empleados`) REFERENCES `empleados` (`identificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_proyectos1` FOREIGN KEY (`idproyecto`) REFERENCES `proyectos` (`idproyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
