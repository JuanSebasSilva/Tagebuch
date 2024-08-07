-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2024 a las 18:44:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tagebuch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `idclb` bigint(5) NOT NULL COMMENT 'Codigo unico autoincrementable para identificar cada club',
  `nomclb` varchar(50) DEFAULT NULL COMMENT 'Nombre del club',
  `idubi` int(5) DEFAULT NULL COMMENT 'Codigo de ubicacion',
  `anoforclb` date DEFAULT NULL COMMENT 'Año de formacion del club',
  `cstmenusu` int(9) DEFAULT NULL COMMENT 'Costo de mensualidad del club',
  `preclb` varchar(50) DEFAULT NULL COMMENT 'Presidente del club'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `idcon` int(5) NOT NULL COMMENT 'Codigo de configuracion',
  `nitcon` varchar(255) DEFAULT NULL COMMENT 'Nit configuracion',
  `titcon` varchar(100) DEFAULT NULL COMMENT 'Titulo configuracion',
  `imgcon` varchar(255) DEFAULT NULL COMMENT 'Imagen configuracion',
  `descon` varchar(255) DEFAULT NULL COMMENT 'Descripcion configuracion',
  `piecon` varchar(255) DEFAULT NULL COMMENT 'Pie pagina configuracion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detevento`
--

CREATE TABLE `detevento` (
  `idclb` bigint(10) DEFAULT NULL COMMENT 'Codigo de club',
  `ideve` bigint(10) DEFAULT NULL COMMENT 'Codigo de evento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dominio`
--

CREATE TABLE `dominio` (
  `iddom` int(3) NOT NULL COMMENT 'Codigo unico autoincrementable de dominio',
  `nomdom` varchar(100) DEFAULT NULL COMMENT 'Nombre de dominio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dominio`
--

INSERT INTO `dominio` (`iddom`, `nomdom`) VALUES
(1, 'Genero'),
(2, 'Tipo de documento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `ideve` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de evento',
  `idubi` int(5) DEFAULT NULL COMMENT 'Codigo de ubicacion',
  `nomeve` varchar(50) DEFAULT NULL COMMENT 'Nombre de evento',
  `deseve` text DEFAULT NULL COMMENT 'Descripcion de evento',
  `tpoeve` int(5) DEFAULT NULL COMMENT 'Tipo de evento',
  `dureve` datetime DEFAULT NULL COMMENT 'Duracion del evento',
  `etdeve` int(5) DEFAULT NULL COMMENT 'Estado del evento',
  `reseve` varchar(50) DEFAULT NULL COMMENT 'Reseña del evento',
  `fheve` datetime DEFAULT NULL COMMENT 'Fecha y hora del evento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `idins` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de inscripcion',
  `idusu` bigint(10) DEFAULT NULL COMMENT 'Codigo de usuario',
  `idpla` bigint(10) DEFAULT NULL COMMENT 'Codigo de plantilla',
  `fhins` datetime DEFAULT NULL COMMENT 'Fecha y hora de la inscripcion',
  `etdins` int(5) DEFAULT NULL COMMENT 'Estado de la inscripcion',
  `durins` date DEFAULT NULL COMMENT 'Duracion de la inscripcion',
  `idclb` bigint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notcom`
--

CREATE TABLE `notcom` (
  `idntcm` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de noticia o comunicado',
  `idclb` bigint(10) DEFAULT NULL COMMENT 'Codigo de club',
  `fhpubntcm` datetime DEFAULT NULL COMMENT 'Fecha y hora de la publicacion',
  `autntcm` varchar(40) DEFAULT NULL COMMENT 'Autor de la noticia o comunicado',
  `etdntcm` int(5) DEFAULT NULL COMMENT 'Estado de la noticia o comunicado',
  `printcm` int(5) DEFAULT NULL COMMENT 'Prioridad de la noticia o comunicado',
  `tpontcm` int(5) DEFAULT NULL COMMENT 'Tipo de noticia o comunicado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `idpag` int(2) NOT NULL COMMENT 'Codigo unico autoincrementable de  pagina',
  `nompag` varchar(255) DEFAULT NULL COMMENT 'Nombre de pagina',
  `rutpag` varchar(255) DEFAULT NULL COMMENT 'Ruta de pagina',
  `mospag` tinyint(1) DEFAULT NULL COMMENT 'Mostrar pagina',
  `ordpag` int(5) DEFAULT NULL COMMENT 'Orden pagina',
  `icopag` varchar(255) DEFAULT NULL COMMENT 'Icono de pagina'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`idpag`, `nompag`, `rutpag`, `mospag`, `ordpag`, `icopag`) VALUES
(101, 'Inicio', 'views/vini.php', 1, 1, NULL),
(102, 'Evento', 'views/veve.php', 1, 2, NULL),
(103, 'Informacion', 'views/vinfo.php', 1, 3, NULL),
(104, 'Formacion', 'views/vfor.php', 1, 4, NULL),
(105, 'Noticia', 'views/vnot.php', 1, 5, NULL),
(106, 'Amistoso', 'views/vamis.php', 1, 6, NULL),
(107, 'Torneo', 'views/vtor.php', 1, 7, NULL),
(108, 'Liga', 'views/vlig.php', 1, 8, NULL),
(109, 'Entrenamiento', 'views/vent.php', 1, 9, NULL),
(110, 'Perfil', 'views/vper.php', 1, 10, NULL),
(111, 'Pagina', 'views/vpag.php', 1, 11, NULL),
(112, 'Modulo', 'views/vmod.php', 1, 12, NULL),
(113, 'Inscripcion', 'views/vins.php', 1, 13, NULL),
(114, 'Plantilla', 'views/vpla.php', 1, 14, NULL),
(115, 'Club', 'views/vclb.php', 1, 15, NULL),
(116, 'Dominio', 'views/vdom.php', 1, 16, NULL),
(117, 'Traspaso', 'views/vtra.php', 1, 17, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagper`
--

CREATE TABLE `pagper` (
  `idpag` int(2) DEFAULT NULL COMMENT 'Codigo de pagina',
  `idper` bigint(10) DEFAULT NULL COMMENT 'Codigo de perfil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagper`
--

INSERT INTO `pagper` (`idpag`, `idper`) VALUES
(102, 1),
(107, 1),
(108, 1),
(110, 1),
(111, 1),
(112, 1),
(115, 1),
(116, 1),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(113, 2),
(114, 2),
(117, 2),
(101, 3),
(102, 3),
(103, 3),
(104, 3),
(106, 3),
(107, 3),
(108, 3),
(109, 3),
(113, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idper` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de perfil',
  `nomper` varchar(50) DEFAULT NULL COMMENT 'Nombre de perfil',
  `pagini` int(5) DEFAULT NULL COMMENT 'Pagina inicial'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idper`, `nomper`, `pagini`) VALUES
(1, 'Administrador', 112),
(2, 'Entrenador', 101),
(3, 'Jugador', 101),
(4, 'Omnipresente', 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `idpla` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de plantilla',
  `idclb` bigint(10) DEFAULT NULL COMMENT 'Codigo de club',
  `nompla` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traspaso`
--

CREATE TABLE `traspaso` (
  `idtrs` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de traspaso',
  `idusu` bigint(10) DEFAULT NULL COMMENT 'Codigo de usuario',
  `idclb` bigint(10) DEFAULT NULL COMMENT 'Codigo de club',
  `fictrtrs` date DEFAULT NULL COMMENT 'Fecha inicio contrato de traspaso',
  `valtrs` int(11) DEFAULT NULL COMMENT 'Valor del traspaso',
  `bontrs` text DEFAULT NULL COMMENT 'Bonificacion de traspaso',
  `dettrs` text DEFAULT NULL COMMENT 'Detalles de traspaso',
  `etdtrs` int(5) DEFAULT NULL COMMENT 'Estado del traspaso',
  `firclbtrs` text DEFAULT NULL COMMENT 'Firma de traspaso del club',
  `firusutrs` text DEFAULT NULL COMMENT 'Firma de traspaso del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idubi` int(5) NOT NULL COMMENT 'Codigo de ubicacion',
  `nomubi` varchar(50) DEFAULT NULL COMMENT 'Nombre de ubicacion',
  `depubi` int(5) DEFAULT NULL COMMENT 'Depende ubicacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusu` bigint(10) NOT NULL COMMENT 'Codigo unico autoincrementable de usuario',
  `idper` bigint(10) DEFAULT NULL COMMENT 'Codigo de perfil',
  `nomusu` varchar(50) DEFAULT NULL COMMENT 'Nombre de usuario',
  `empusu` varchar(50) DEFAULT NULL COMMENT 'Empresa de usuario',
  `pasusu` varchar(100) DEFAULT NULL COMMENT 'Contraseña de usuario',
  `nitusu` varchar(10) DEFAULT NULL COMMENT 'Numero de identificacion del usuario',
  `fotusu` varchar(255) DEFAULT NULL COMMENT 'Foto de usuario',
  `expusu` date DEFAULT NULL COMMENT 'Experiencia del usuario',
  `edtusu` bigint(11) DEFAULT NULL COMMENT 'Estadisticas del usuario',
  `hisusu` text DEFAULT NULL COMMENT 'Historial del usuario',
  `salusu` decimal(11,2) DEFAULT NULL COMMENT 'Salario del usuario',
  `tponit` int(5) DEFAULT NULL COMMENT 'Tipo de numero de identificacion',
  `genusu` int(5) DEFAULT NULL COMMENT 'Genero del usuario',
  `fhnusu` date DEFAULT NULL COMMENT 'Fecha de nacimiento del usuario',
  `actusu` tinyint(1) DEFAULT NULL COMMENT 'Activo usuario',
  `idubi` int(10) DEFAULT NULL COMMENT 'Codigo de usuario',
  `emausu` varchar(200) DEFAULT NULL COMMENT 'Correo de usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusu`, `idper`, `nomusu`, `empusu`, `pasusu`, `nitusu`, `fotusu`, `expusu`, `edtusu`, `hisusu`, `salusu`, `tponit`, `genusu`, `fhnusu`, `actusu`, `idubi`, `emausu`) VALUES
(5, 1, 'Sebastian', NULL, '7c23cc4fd6bbeee2216560575d5de1ff910678ce', '1234567890', NULL, NULL, NULL, NULL, NULL, 3, 1, NULL, 1, NULL, 'jsparedessilva@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor`
--

CREATE TABLE `valor` (
  `idval` int(5) NOT NULL COMMENT 'Codigo unico autoincrementable del valor',
  `nomval` varchar(100) DEFAULT NULL COMMENT 'Nombre de valor',
  `iddom` int(3) DEFAULT NULL COMMENT 'Codigo de dominio',
  `parval` varchar(255) DEFAULT NULL COMMENT 'Parametro de valor',
  `actval` tinyint(1) DEFAULT NULL COMMENT 'Activo valor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valor`
--

INSERT INTO `valor` (`idval`, `nomval`, `iddom`, `parval`, `actval`) VALUES
(1, 'Masculino', 1, NULL, NULL),
(2, 'Feminino', 1, NULL, NULL),
(3, 'Cedula de ciudadania', 2, NULL, NULL),
(4, 'Tarjeta de identidad', 2, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`idclb`),
  ADD KEY `clbubi` (`idubi`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idcon`);

--
-- Indices de la tabla `detevento`
--
ALTER TABLE `detevento`
  ADD KEY `detevelcb` (`idclb`),
  ADD KEY `deteves` (`ideve`);

--
-- Indices de la tabla `dominio`
--
ALTER TABLE `dominio`
  ADD PRIMARY KEY (`iddom`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ideve`),
  ADD KEY `eveubi` (`idubi`),
  ADD KEY `evtpev` (`tpoeve`),
  ADD KEY `evetev` (`etdeve`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`idins`),
  ADD KEY `insusu` (`idusu`),
  ADD KEY `inspla` (`idpla`),
  ADD KEY `ivest` (`etdins`),
  ADD KEY `insclb` (`idclb`);

--
-- Indices de la tabla `notcom`
--
ALTER TABLE `notcom`
  ADD PRIMARY KEY (`idntcm`),
  ADD KEY `ntcmclb` (`idclb`),
  ADD KEY `ntcmetd` (`etdntcm`),
  ADD KEY `ncprinc` (`printcm`),
  ADD KEY `nctpnc` (`tpontcm`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`idpag`);

--
-- Indices de la tabla `pagper`
--
ALTER TABLE `pagper`
  ADD KEY `pgprper` (`idper`),
  ADD KEY `pgprpag` (`idpag`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`idpla`),
  ADD KEY `placlb` (`idclb`);

--
-- Indices de la tabla `traspaso`
--
ALTER TABLE `traspaso`
  ADD PRIMARY KEY (`idtrs`),
  ADD KEY `trsusu` (`idusu`),
  ADD KEY `trsclb` (`idclb`),
  ADD KEY `tvettr` (`etdtrs`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idubi`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`),
  ADD KEY `usuper` (`idper`),
  ADD KEY `usuubi` (`idubi`),
  ADD KEY `uvtpnt` (`tponit`),
  ADD KEY `uvgnus` (`genusu`);

--
-- Indices de la tabla `valor`
--
ALTER TABLE `valor`
  ADD PRIMARY KEY (`idval`),
  ADD KEY `valdom` (`iddom`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `idclb` bigint(5) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable para identificar cada club';

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idcon` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Codigo de configuracion';

--
-- AUTO_INCREMENT de la tabla `dominio`
--
ALTER TABLE `dominio`
  MODIFY `iddom` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de dominio', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `ideve` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de evento';

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `idins` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de inscripcion';

--
-- AUTO_INCREMENT de la tabla `notcom`
--
ALTER TABLE `notcom`
  MODIFY `idntcm` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de noticia o comunicado';

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `idpag` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de  pagina', AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idper` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de perfil', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idpla` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de plantilla';

--
-- AUTO_INCREMENT de la tabla `traspaso`
--
ALTER TABLE `traspaso`
  MODIFY `idtrs` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de traspaso';

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable de usuario', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `valor`
--
ALTER TABLE `valor`
  MODIFY `idval` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Codigo unico autoincrementable del valor', AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `clbubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`);

--
-- Filtros para la tabla `detevento`
--
ALTER TABLE `detevento`
  ADD CONSTRAINT `deteveclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `deteves` FOREIGN KEY (`ideve`) REFERENCES `evento` (`ideve`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evetev` FOREIGN KEY (`etdeve`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `eveubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`),
  ADD CONSTRAINT `evtpev` FOREIGN KEY (`tpoeve`) REFERENCES `valor` (`idval`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `insclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `inspla` FOREIGN KEY (`idpla`) REFERENCES `plantilla` (`idpla`),
  ADD CONSTRAINT `insusu` FOREIGN KEY (`idusu`) REFERENCES `usuario` (`idusu`),
  ADD CONSTRAINT `ivest` FOREIGN KEY (`etdins`) REFERENCES `valor` (`idval`);

--
-- Filtros para la tabla `notcom`
--
ALTER TABLE `notcom`
  ADD CONSTRAINT `ncprinc` FOREIGN KEY (`printcm`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `nctpnc` FOREIGN KEY (`tpontcm`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `ntcmclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `ntcmetd` FOREIGN KEY (`etdntcm`) REFERENCES `valor` (`idval`);

--
-- Filtros para la tabla `pagper`
--
ALTER TABLE `pagper`
  ADD CONSTRAINT `pgprpag` FOREIGN KEY (`idpag`) REFERENCES `pagina` (`idpag`),
  ADD CONSTRAINT `pgprper` FOREIGN KEY (`idper`) REFERENCES `perfil` (`idper`);

--
-- Filtros para la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD CONSTRAINT `placlb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`);

--
-- Filtros para la tabla `traspaso`
--
ALTER TABLE `traspaso`
  ADD CONSTRAINT `trsclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `trsusu` FOREIGN KEY (`idusu`) REFERENCES `usuario` (`idusu`),
  ADD CONSTRAINT `tvettr` FOREIGN KEY (`etdtrs`) REFERENCES `valor` (`idval`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuper` FOREIGN KEY (`idper`) REFERENCES `perfil` (`idper`),
  ADD CONSTRAINT `usuubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`),
  ADD CONSTRAINT `uvgnus` FOREIGN KEY (`genusu`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `uvtpnt` FOREIGN KEY (`tponit`) REFERENCES `valor` (`idval`);

--
-- Filtros para la tabla `valor`
--
ALTER TABLE `valor`
  ADD CONSTRAINT `valdom` FOREIGN KEY (`iddom`) REFERENCES `dominio` (`iddom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
