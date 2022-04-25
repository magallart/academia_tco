-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2022 a las 18:28:35
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academia_tco`
--
CREATE DATABASE IF NOT EXISTS `academia_tco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `academia_tco`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `cPostal` int(5) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `fNacimiento` date NOT NULL,
  `fPerfil` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `verificado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `direccion`, `cPostal`, `localidad`, `fNacimiento`, `fPerfil`, `nivel`, `verificado` ) VALUES
(0, 'Nuria', 'Ramírez Pons', 'nuria@gmail.com', 'nuria', 'Montesa 28-3', 46020, 'Valencia', '1999-05-28', '/usuarios/nuria_ramirez_pons.jpg', 1, 1),
(1, 'José', 'Álvarez Pelayo', 'jose@gmail.com', 'jose' , 'Príncipe Velasco 28-3', 46120, 'Valencia', '1993-03-14', '/usuarios/jose_alvarez_pelayo.jpg', 1, 1),
(2, 'Alfonso', 'Ruiz Mendez', 'alfonso@gmail.com', 'alfonso', 'Bolivia 12-1', 46018, 'Valencia', '1991-03-12', '/usuarios/alfonso_ruiz_mendez.jpg', 1, 1),
(3, 'Marta', 'Fonseca Yuste', 'marta@gmail.com', 'marta', 'Picapedreros 89-19', 46019, 'Valencia', '1999-05-14', '/usuarios/marta_fonseca_yuste.jpg', 1, 1),
(4, 'Liliana', 'Vergara Alarcon', 'liliana@gmail.com', 'liliana', 'Misionero Vicente Caña 1-25', 46950, 'Valencia', '2008-08-29', '/usuarios/liliana_vergara_alarcon.jpg', 1, 1),
(5, 'Adam', 'Montoro Torre', 'adam@gmail.com', 'adam', 'Mestre Palau 90-3', 46930, 'Valencia', '2003-12-02', '/usuarios/adam_montoro_torre.jpg', 1, 1),
(6, 'Eulalia', 'Vilchez Saenz', 'eulalia@gmail.com', 'eulalia', 'Mayor 11-3', 46920, 'Valencia', '2000-04-17', '/usuarios/eulalia_vilchez_saenz.jpg', 2, 1),
(7, 'Fernando', 'Benavides Carrera', 'fernando@gmail.com', 'fernando', 'Doctor Enrique López 7-8', 46018, 'Valencia', '1985-01-25', '/usuarios/fernando_benavides_carrera.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `tiempo_creacion` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `id_usuario`, `id_curso`, `mensaje`) VALUES
(0, 0, 0, 'He aprendido mucho con este curso. Gracias a la plataforma y a los profesores.'),
(1, 0, 1, 'Gracias a este curso pienso que podré encontrar trabajo en un futuro. El curso es muy completo y lo recomiendo.'),
(2, 1, 1, 'Maravilloso curso. Ahora me siento mejor programador y seguiré haciendo más cursos.'),
(3, 2, 1, 'Después de completar este curso se mucho más sobre JavaScript y me veo capaz de buscar trabajo como programador. Totalmente recomendado.');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `temas` int(11) NOT NULL,
  `profesor` int(11) NOT NULL,
  `fCurso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `temas`, `profesor`, `fCurso`) VALUES
(0, 'JavaScript', 10, 6, 'logo-js.jpg'),
(1, 'Angular', 35, 6, 'logo-angular.jpg');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_usuario`
--

CREATE TABLE `curso_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,  
  `temas_finalizados` int(11) NOT NULL,
  `valoracion` float NOT NULL,
  `aprobado` float NOT NULL,
  PRIMARY KEY (`id_curso`, `id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_usuario`
--

INSERT INTO `curso_usuario` (`id_usuario`, `id_curso`, `temas_finalizados`, `valoracion`, `aprobado`) VALUES
(0, 0, 2, 9, 0),
(0, 1, 14, 10, 0);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT fk_tokens_id_usuario FOREIGN KEY(id_usuario) REFERENCES usuarios(id);
  

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT fk_cursos_profesor FOREIGN KEY(profesor) REFERENCES usuarios(id);



--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`  
  ADD CONSTRAINT fk_mensajes_id_curso FOREIGN KEY(id_curso) REFERENCES cursos(id),
  ADD CONSTRAINT fk_mensajes_id_usuario FOREIGN KEY(id_usuario) REFERENCES usuarios(id);


--
-- Indices de la tabla `curso_usuario`
--
ALTER TABLE `curso_usuario`
  ADD CONSTRAINT fk_cursousuario_id_curso FOREIGN KEY(id_curso) REFERENCES cursos(id),
  ADD CONSTRAINT fk_cursousuario_id_usuario  FOREIGN KEY(id_usuario) REFERENCES usuarios(id);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
