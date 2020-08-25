-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2020 a las 18:14:02
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juricomex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `identificacion`, `nombre`, `correo`, `password`) VALUES
(1, '1143355254', 'Angelica Soleno', 'angelicasolenoarias@gmail.com', '123456'),
(2, '1012350423', 'Jose Soleno Arias', 'josesoleno01@gmail.com', '3136127817');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `fecha`, `hora`, `telefono`, `correo`) VALUES
(8, 'Jose Luis Soleno Arias', '2020-08-12', '09:30:00', '3136127817', 'josesoleno01@gmail.com'),
(9, 'Florinda Mesa ', '2020-08-20', '14:51:00', '3215896471', 'florinda@gmail.com'),
(10, 'Juanito', '2020-08-11', '15:07:00', '3165245685', 'juanito@gmail.com'),
(12, 'Carlitos', '2020-08-03', '14:43:00', '3208527415', 'carlitos@gmail.com'),
(13, 'Pedrito', '2020-08-19', '16:50:00', '3165247895', 'pedrito@gmail.com'),
(14, 'Manuelito zoza', '2020-08-18', '16:48:00', '3215213214', 'manuzoza@gmail.com'),
(15, 'z<xczxc', '2020-08-19', '11:46:00', 'sdsd', 'wed@sad.com'),
(16, 'Eugenio Andres ', '2020-08-27', '12:42:00', '3012546985', 'eugeniovenesia@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jpequeñascausas`
--

CREATE TABLE `jpequeñascausas` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `juzgado` varchar(40) NOT NULL,
  `proceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jpequeñascausas`
--

INSERT INTO `jpequeñascausas` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `juzgado`, `proceso`, `tema`, `enlace`) VALUES
(3, '2020-07-24', '13001418900220200005700', 'Angelica Soleno Arias', 'Alexis Jesus Rocha Castro', 'Juzgado segundo de pequeñas causas', 'Verbal ', 'Restitución de bien inmueble arrendado', 'https://www.ramajudicial.gov.co/documents/29703592/43206407/2020+-00057-00+SENTENCIA+DE+RESTITUCI%C3%93N+DE+INMUEBLE+ARRENDADO+LOCAL+CCIAL+%281%29.pdf/57f98cf2-38a8-4a90-bced-4c7290b45903');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juzadministrativo2`
--

CREATE TABLE `juzadministrativo2` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `juzgado` varchar(40) NOT NULL,
  `tproceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juzadministrativo2`
--

INSERT INTO `juzadministrativo2` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `juzgado`, `tproceso`, `tema`, `enlace`) VALUES
(3, '2020-08-14', '456', 'mariano arturo ', 'angelica', 'dfgsdffgdfg', 'oral', 'desalojamiento de inmueble', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laborales1`
--

CREATE TABLE `laborales1` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `juzgado` varchar(40) NOT NULL,
  `proceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laborales1`
--

INSERT INTO `laborales1` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `juzgado`, `proceso`, `tema`, `enlace`) VALUES
(5, '2020-08-20', '65464', 'mariano arturo ', 'angelica', 'primero-laboral', 'escritural', 'desalojamiento de inmueble', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laborales2`
--

CREATE TABLE `laborales2` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `juzgado` varchar(40) NOT NULL,
  `tproceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laborales2`
--

INSERT INTO `laborales2` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `juzgado`, `tproceso`, `tema`, `enlace`) VALUES
(4, '2020-08-07', '123', 'mariano arturo ', 'angelica', 'primero-laboral', 'oral', 'desalojamiento de inmueble', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tribunaladministrativo2`
--

CREATE TABLE `tribunaladministrativo2` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `tproceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tribunaladministrativo2`
--

INSERT INTO `tribunaladministrativo2` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `tproceso`, `tema`, `enlace`) VALUES
(7, '2020-08-13', '65165161651', 'maria calamidades', 'rosario montes', 'oral', 'desalojamiento de inmueble', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsuperior1`
--

CREATE TABLE `tsuperior1` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `juzgado` varchar(40) NOT NULL,
  `proceso` varchar(50) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tsuperior1`
--

INSERT INTO `tsuperior1` (`id`, `fechapublicacion`, `radicacion`, `demandante`, `demandado`, `juzgado`, `proceso`, `tema`, `enlace`) VALUES
(5, '2020-08-06', '65165161651', 'maria calamidades', 'rosario montes', 'primero-administrativo ', 'oral', 'desalojamiento de inmueble', 'https://getbootstrap.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsuperior2`
--

CREATE TABLE `tsuperior2` (
  `id` int(11) NOT NULL,
  `fechapublicacion` date NOT NULL,
  `radicacion` varchar(25) NOT NULL,
  `demandante` varchar(50) NOT NULL,
  `demandado` varchar(50) NOT NULL,
  `tproceso` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jpequeñascausas`
--
ALTER TABLE `jpequeñascausas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juzadministrativo2`
--
ALTER TABLE `juzadministrativo2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laborales1`
--
ALTER TABLE `laborales1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laborales2`
--
ALTER TABLE `laborales2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tribunaladministrativo2`
--
ALTER TABLE `tribunaladministrativo2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tsuperior1`
--
ALTER TABLE `tsuperior1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tsuperior2`
--
ALTER TABLE `tsuperior2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `jpequeñascausas`
--
ALTER TABLE `jpequeñascausas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `juzadministrativo2`
--
ALTER TABLE `juzadministrativo2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `laborales1`
--
ALTER TABLE `laborales1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `laborales2`
--
ALTER TABLE `laborales2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tribunaladministrativo2`
--
ALTER TABLE `tribunaladministrativo2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tsuperior1`
--
ALTER TABLE `tsuperior1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tsuperior2`
--
ALTER TABLE `tsuperior2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
