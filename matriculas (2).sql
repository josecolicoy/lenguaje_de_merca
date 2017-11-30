-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2017 a las 13:59:02
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matriculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(20) NOT NULL,
  `nombres_a` varchar(50) NOT NULL,
  `a_paternoa` varchar(20) NOT NULL,
  `a_maternoa` varchar(20) NOT NULL,
  `rut_a` varchar(10) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `fech_nacimiento` varchar(30) NOT NULL,
  `direccion_a` varchar(30) NOT NULL,
  `comuna_a` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombres_a`, `a_paternoa`, `a_maternoa`, `rut_a`, `sexo`, `fech_nacimiento`, `direccion_a`, `comuna_a`) VALUES
(2, 'jose ignacio', 'colicoy', 'cabrera', '123123123', 'M', '0000-00-00', 'ranquilco bajo', 'nueva imperial'),
(4, 'fdsfdsfds', 'asdasdasd', 'asdasdasda', '123123312', 'sa', '0000-00-00', 'a', 'jsahdjsadh'),
(6, 'jkdjsakjkasjkdjasjk', 'jkjskdjaskjdlkasjdkl', 'kjdklsajkldjaslkdjas', 'kjkdjaskjd', 'kj', '0000-00-00', 'kjkldjklsajkdjaskldjsakljkl', 'jlj'),
(7, '', '', '', '', '', '0000-00-00', '', ''),
(8, 'sidjposa', 'doaskdpos', 'matamata', '23134-9', 'm', '11/02/2017', 'lidjas', 'victoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado`
--

CREATE TABLE `apoderado` (
  `id_apoderado` int(3) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `a_paterno` varchar(20) NOT NULL,
  `a_materno` varchar(20) NOT NULL,
  `rut_ap` varchar(10) NOT NULL,
  `parentesco` varchar(15) NOT NULL,
  `fecha_nacap` date NOT NULL,
  `telefono_ap` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `id_grupo` int(3) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `comuna` varchar(30) NOT NULL,
  `id_alumno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apoderado`
--

INSERT INTO `apoderado` (`id_apoderado`, `nombres`, `a_paterno`, `a_materno`, `rut_ap`, `parentesco`, `fecha_nacap`, `telefono_ap`, `tipo`, `id_grupo`, `direccion`, `comuna`, `id_alumno`) VALUES
(1, 'hola', 'osdka', 'ospdadk', '12343', 'madre', '2017-11-01', '12312', 'dad', 1, 'dasdasd', 'dassd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(3) NOT NULL,
  `nombre_curso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_curso`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '1D'),
(5, '2C'),
(6, '2D'),
(7, '3A'),
(8, '3B'),
(9, '3C'),
(10, '3D'),
(11, '4A'),
(12, '4B'),
(13, '4C'),
(14, '4D'),
(15, '2A'),
(16, '2B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_familiar`
--

CREATE TABLE `grupo_familiar` (
  `id_grupo` int(3) NOT NULL,
  `num_grupo` varchar(20) NOT NULL,
  `comparte_hogar` varchar(10) NOT NULL,
  `renta` varchar(40) NOT NULL,
  `renta_familiar` varchar(40) NOT NULL,
  `beneficio_estado` varchar(40) NOT NULL,
  `id_padre` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_familiar`
--

INSERT INTO `grupo_familiar` (`id_grupo`, `num_grupo`, `comparte_hogar`, `renta`, `renta_familiar`, `beneficio_estado`, `id_padre`) VALUES
(1, '223', 'fsfs', '33', '324', 'no', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int(3) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `id_curso` int(3) NOT NULL,
  `id_alumno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `fecha`, `id_curso`, `id_alumno`) VALUES
(1, '2017-11-01', 1, 4),
(2, '2103-01-20', 12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `id_padre` int(3) NOT NULL,
  `nombres_p` varchar(50) NOT NULL,
  `a_paternop` varchar(20) NOT NULL,
  `a_maternop` varchar(20) NOT NULL,
  `rut_p` varchar(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `escolaridad` varchar(20) NOT NULL,
  `actividad` varchar(40) NOT NULL,
  `id_alumno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`id_padre`, `nombres_p`, `a_paternop`, `a_maternop`, `rut_p`, `telefono`, `genero`, `escolaridad`, `actividad`, `id_alumno`) VALUES
(1, 'assadsa', 'asdasd', 'asdasd', '128938129', '213871328', 'f', 'cuarto', 'jsahdjashj', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(15) NOT NULL,
  `grupo` int(1) NOT NULL,
  `name` varchar(15) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `grupo`, `name`, `pass`) VALUES
(1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  ADD PRIMARY KEY (`id_apoderado`),
  ADD UNIQUE KEY `id_grupo` (`id_grupo`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  ADD PRIMARY KEY (`id_grupo`),
  ADD UNIQUE KEY `id_padre` (`id_padre`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`),
  ADD UNIQUE KEY `id_curso` (`id_curso`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`id_padre`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  MODIFY `id_apoderado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  MODIFY `id_grupo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `padre`
--
ALTER TABLE `padre`
  MODIFY `id_padre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apoderado`
--
ALTER TABLE `apoderado`
  ADD CONSTRAINT `apoderado_ibfk_3` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `apoderado_ibfk_4` FOREIGN KEY (`id_grupo`) REFERENCES `grupo_familiar` (`id_grupo`);

--
-- Filtros para la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  ADD CONSTRAINT `grupo_familiar_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `padre` (`id_padre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `padre`
--
ALTER TABLE `padre`
  ADD CONSTRAINT `padre_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
