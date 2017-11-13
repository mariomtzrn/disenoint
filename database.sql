-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 09:42:13
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_medicas`
--

CREATE TABLE `areas_medicas` (
  `id_area` int(10) UNSIGNED NOT NULL,
  `nombre_area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas_medicas`
--

INSERT INTO `areas_medicas` (`id_area`, `nombre_area`) VALUES
(1, 'Cardiologia'),
(2, 'Urologia'),
(3, 'Pediatria'),
(4, 'Odontologia'),
(5, 'Nutricion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_citas`
--

CREATE TABLE `calendario_citas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `allDay` varchar(5) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `medico_id` int(11) NOT NULL,
  `precio_consulta` double NOT NULL DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario_citas`
--

INSERT INTO `calendario_citas` (`id`, `title`, `startdate`, `enddate`, `allDay`, `paciente_id`, `medico_id`, `precio_consulta`) VALUES
(2, 'Nuevo', '2017-11-14T00:00:00', '2017-11-14T00:00:00', 'false', 1, 1, 50),
(6, 'Evento nuevo', '2017-11-13T00:00:00+05:30', '2017-11-13T00:00:00+05:30', 'false', 1, 1, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `medico_id` int(250) NOT NULL,
  `area_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `picture` varchar(300) NOT NULL DEFAULT 'default.png',
  `session` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`medico_id`, `area_id`, `fullname`, `email`, `password`, `phone`, `picture`, `session`) VALUES
(1, 2, 'Medico 1', 'medico1@gmail.com', '202cb962ac59075b964b07152d234b70', '123456', 'default.png', 1204030),
(2, 5, 'Dr.  Doctor', 'doctor@gmail.com', 'f9f16d97c90d8c6f2cab37bb6d1f1992', '123456', 'default.png', 464915364),
(3, 3, 'Dr. Machucho', 'machucho@gmail.com', 'b1ce45ebe595220421f4a6f1d03c3dff', '1234', 'default.png', 4001955),
(4, 4, 'Dr. Medico', 'medico@gmail.com', '652044ac6e008761b3e6141748a99880', '12345', 'default.png', 590740293);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `paciente_id` int(250) NOT NULL,
  `nombre_completo` varchar(200) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `genero` varchar(50) NOT NULL,
  `tipo_sangre` varchar(50) NOT NULL,
  `alergia` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `picture` varchar(300) DEFAULT 'default.png',
  `date_signin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`paciente_id`, `nombre_completo`, `fecha_nacimiento`, `genero`, `tipo_sangre`, `alergia`, `phone`, `email`, `address`, `picture`, `date_signin`) VALUES
(1, 'Mario Mtz', '1996-06-25 00:00:00', 'Hombre', 'O', '', '8341234123', 'mario@gmail.com', 'Calle 123', 'default.png', '0000-00-00 00:00:00'),
(2, 'Mario', '1987-12-04 00:00:00', 'Hombre', 'I', 'asdfd', '1235756', 'mario@gmail.com', 'addasddsa', 'default.png', '2017-11-13 02:32:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas_medicas`
--
ALTER TABLE `areas_medicas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `calendario_citas`
--
ALTER TABLE `calendario_citas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`medico_id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`paciente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas_medicas`
--
ALTER TABLE `areas_medicas`
  MODIFY `id_area` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `calendario_citas`
--
ALTER TABLE `calendario_citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `medico_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `paciente_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
