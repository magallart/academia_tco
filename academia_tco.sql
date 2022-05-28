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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `direccion`, `cPostal`, `localidad`, `fNacimiento`, `fPerfil`, `nivel` ) VALUES
(0, 'Nuria', 'Ramírez Pons', 'nuria@gmail.com', 'nuria', 'Montesa 28-3', 46020, 'Valencia', '1999-05-28', '/usuarios/nuria_ramirez_pons.jpg', 1),
(1, 'José', 'Álvarez Pelayo', 'jose@gmail.com', 'jose' , 'Príncipe Velasco 28-3', 46120, 'Valencia', '1993-03-14', '/usuarios/jose_alvarez_pelayo.jpg', 1),
(2, 'Alfonso', 'Ruiz Mendez', 'alfonso@gmail.com', 'alfonso', 'Bolivia 12-1', 46018, 'Valencia', '1991-03-12', '/usuarios/alfonso_ruiz_mendez.jpg', 1),
(3, 'Marta', 'Fonseca Yuste', 'marta@gmail.com', 'marta', 'Picapedreros 89-19', 46019, 'Valencia', '1999-05-14', '/usuarios/marta_fonseca_yuste.jpg', 1),
(4, 'Liliana', 'Vergara Alarcon', 'liliana@gmail.com', 'liliana', 'Misionero Vicente Caña 1-25', 46950, 'Valencia', '2008-08-29', '/usuarios/liliana_vergara_alarcon.jpg', 1),
(5, 'Adam', 'Montoro Torre', 'adam@gmail.com', 'adam', 'Mestre Palau 90-3', 46930, 'Valencia', '2003-12-02', '/usuarios/adam_montoro_torre.jpg', 1),
(6, 'Eulalia', 'Vilchez Saenz', 'eulalia@gmail.com', 'eulalia', 'Mayor 11-3', 46920, 'Valencia', '2000-04-17', '/usuarios/eulalia_vilchez_saenz.jpg', 2),
(7, 'Fernando', 'Benavides Carrera', 'fernando@gmail.com', 'fernando', 'Doctor Enrique López 7-8', 46018, 'Valencia', '1985-01-25', '/usuarios/fernando_benavides_carrera.jpg', 1),
(8, 'Marcos', 'Alfonso Márquez', 'marcos@gmail.com', 'marcos', 'Forata 12-18', 46017, 'Valencia', '1983-02-22', '/usuarios/marcos-alfonso.jpg', 2),
(9, 'Luis', 'Benavent Solís', 'luis@gmail.com', 'luis', 'Antonio Sacramento 2-14', 46013, 'Valencia', '1991-12-08', '/usuarios/luis-benavent.jpg', 2),
(10, 'Marta', 'Buenafuente Sal', 'marta@gmail.com', 'marta', 'Maderas 45-2', 46922, 'Valencia', '1996-09-01', '/usuarios/marta-buenafuente.jpg', 2),
(11, 'Marisa', 'López Nieto', 'marisa@gmail.com', 'marisa', 'Av. de la Llum, 35-14', 46950, 'Valencia', '1996-09-01', '/usuarios/marisa-lopez-nieto.jpg', 2),
(12, 'Susana', 'Fonseca Albert', 'marta@gmail.com', 'susana', 'Carlos Ruano Llopis 12-2', 46035, 'Valencia', '1996-09-01', '/usuarios/susana-fonseca-albert.jpg', 2),
(13, 'Pedro', 'Helenos Pons', 'pedro@gmail.com', 'pedro', 'del Serpis 69-7', 46022, 'Valencia', '1996-09-01', '/usuarios/pedro-helenos-pons.jpg', 2);


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
(2, 1, 0, 'Maravilloso curso. Ahora me siento mejor programador y seguiré haciendo más cursos.'),
(3, 2, 0, 'Enhorabuena al docente por crear un curso tan bueno de JavaScript.'),
(4, 3, 0, 'Uno de los mejores cursos de JavaScript que he visto por internet. Me ha ayudado mucho.'),
(5, 4, 0, 'Recomiendo muchísimo hacer este curso de JavaScript si se quiere ser un buen desarrollador frontend..'),
(6, 5, 0, 'Curso práctico, directo y útil.'),
(7, 7, 0, 'He aprendido muchísimo JavaScript gracias a este curso. Uno de mis favoritos de la plataforma.'),
(8, 2, 1, 'Angular me ha resultado fácil de aprender con este curso.'),
(9, 3, 1, 'Tenía dudas sobre qué framework de JavaScript centrar mi carrera, pero después de hacer este curso lo tengo claro. Elijo Angular. Gracias ATCO.'),
(10, 4, 1, 'Es un framework muy poderoso y que cuenta con el respaldo de Google, así que he decidido empezar este curso gratis.'),
(11, 5, 1, 'Quiero seguir profundizando en Angular, espero que pongáis un curso avanzado sobre este framework.'),
(12, 7, 1, 'Conozco React y tenía ganas de investigar Angular para poder ampliar mi currículum. Quedo muy satisfecho con este curso.'),
(13, 1, 2, 'Me animé a realizar el curso de React después de haber hecho los de Angular y JavaScript. He aprendido mucho y ahora no sé cual de todos me gusta más.'),
(14, 2, 2, 'React tiene mucha demanda hoy en día y quería estar preparado, así que decidí realizar el curso y he terminado muy contento.'),
(15, 4, 2, 'Magnífico curso de React donde se empieza desde el principio hasta llegar a nivel avanzado.'),
(16, 7, 2, 'Un curso muy correcto por parte del docente. Explica todo de manera sencilla y directa. Justo lo que buscaba.'),
(17, 2, 3, 'En mi trabajo me exigían tener conocimientos de Git y confié en ATCO para aprender lo que necesitaba.'),
(18, 3, 3, 'Un acierto total este curso. Ahora sé mucho más de Git que antes de empezar.'),
(19, 4, 3, 'La profesora que hizo el temario sabía lo que hacía. Explica lo necesario para trabajar con Git en el día a día.'),
(20, 5, 3, 'Git es vital hoy en día, sin Git no puedes desarrollar nada de forma profesional por lo que es totalmente necesario tener buenos conocimientos de Git.'),
(21, 7, 3, 'He realizado el curso en 1 semana. Notaba como mi progresión y conocimientos avanzaban con cada tema. Genial.');


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
(0, 'JavaScript', 17, 8, 'logo-js.jpg'),
(1, 'Angular', 32, 9, 'logo-angular.jpg'),
(2, 'React', 35, 9, 'logo-react.jpg'),
(3, 'Git', 35, 10, 'logo-git.jpg');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_usuario`
--

CREATE TABLE `curso_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL, 
  `temasTerminados` int(1) NOT NULL, 
  `finalizado` int(1) NOT NULL,
  PRIMARY KEY (`id_curso`, `id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_usuario`
--

INSERT INTO `curso_usuario` (`id_usuario`, `id_curso`, `temasTerminados`, `finalizado`) VALUES
(0, 0, 5, 0),
(0, 1, 4, 0),
(1, 0, 0, 0),
(1, 2, 12, 1),
(2, 0, 10, 0),
(2, 1, 8, 0),
(2, 2, 14, 0),
(2, 3, 9, 0),
(3, 0, 15, 0),
(3, 1, 7, 0),
(3, 3, 15, 0),
(4, 0, 8, 0),
(4, 1, 10, 0),
(4, 2, 8, 0),
(4, 3, 4, 0),
(5, 0, 15, 0),
(5, 1, 12, 0),
(5, 3, 18, 0),
(7, 0, 5, 0),
(7, 1, 8, 0),
(7, 2, 9, 0),
(7, 3, 14, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `newsletter` (`id`, `nombre`, `email`) VALUES
(0, 'Roberto Faisán', 'robertof@gmail.com'),
(1, 'Clara López', 'clopez@gmail.com'),
(2, 'Nuno Susac', 'nusac@gmail.cok'),
(3, 'Esteban Luz', 'eluz@gmail.com');

--
-- Índices para tablas volcadas
--

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
