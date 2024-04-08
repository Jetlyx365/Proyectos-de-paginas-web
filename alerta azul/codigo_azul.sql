-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2024 a las 22:20:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codigo_azul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE `emergencia` (
  `Numero_paciente` bigint(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` int(100) NOT NULL,
  `Diagnostico` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Lugar_enviar` varchar(100) NOT NULL,
  `Doctores` varchar(100) NOT NULL,
  `hora_llegada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `emergencia`
--

INSERT INTO `emergencia` (`Numero_paciente`, `Nombre`, `Edad`, `Diagnostico`, `Ubicacion`, `Lugar_enviar`, `Doctores`, `hora_llegada`) VALUES
(1, 'Juan', 22, 'Resfriado', 'Piso 1', 'Sala de Emergencias', 'Adrian SaldaÃ±a', '18:11:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencia`
--

CREATE TABLE `urgencia` (
  `Numero_paciente` bigint(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` int(100) NOT NULL,
  `Diagnostico` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Lugar_enviar` varchar(100) NOT NULL,
  `Doctores` varchar(100) NOT NULL,
  `hora_llegada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `urgencia`
--

INSERT INTO `urgencia` (`Numero_paciente`, `Nombre`, `Edad`, `Diagnostico`, `Ubicacion`, `Lugar_enviar`, `Doctores`, `hora_llegada`) VALUES
(1, 'Marcelo Barrero', 33, 'Choque de moto', 'Piso 1', 'QuirÃ³fano', 'Laura Maria', '13:26:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `pass`) VALUES
('hospital@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD PRIMARY KEY (`Numero_paciente`);

--
-- Indices de la tabla `urgencia`
--
ALTER TABLE `urgencia`
  ADD PRIMARY KEY (`Numero_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  MODIFY `Numero_paciente` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `urgencia`
--
ALTER TABLE `urgencia`
  MODIFY `Numero_paciente` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
