-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 12:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagebuch`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `idclb` int(5) NOT NULL,
  `nomclb` varchar(50) NOT NULL,
  `idubi` int(5) NOT NULL,
  `afclb` date NOT NULL,
  `cmclb` int(9) DEFAULT NULL,
  `preclb` varchar(50) NOT NULL,
  `desclb` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configuracion`
--

CREATE TABLE `configuracion` (
  `idcon` int(5) NOT NULL,
  `nitcon` varchar(10) DEFAULT NULL,
  `titcon` varchar(30) DEFAULT NULL,
  `imgcon` varchar(255) DEFAULT NULL,
  `descon` text DEFAULT NULL,
  `piecon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detevento`
--

CREATE TABLE `detevento` (
  `ideve` bigint(11) DEFAULT NULL,
  `idclb` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dominio`
--

CREATE TABLE `dominio` (
  `iddom` int(3) NOT NULL,
  `nomdom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dominio`
--

INSERT INTO `dominio` (`iddom`, `nomdom`) VALUES
(1, 'Genero'),
(2, 'Tipo de documento'),
(3, 'Tipo de notcom'),
(4, 'Prioridad notcom'),
(5, 'Tipo de evento'),
(6, 'Estado de evento'),
(7, 'Estado de notcom'),
(8, 'Estado de inscripcion'),
(9, 'Estado de traspaso');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `ideve` bigint(11) NOT NULL,
  `idubi` int(5) NOT NULL,
  `nomeve` varchar(50) NOT NULL,
  `deseve` text DEFAULT NULL,
  `tpoeve` int(5) NOT NULL,
  `etdeve` int(5) NOT NULL,
  `reseve` int(5) DEFAULT NULL,
  `fieve` date DEFAULT NULL,
  `ffeve` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscripcion`
--

CREATE TABLE `inscripcion` (
  `idins` bigint(11) NOT NULL,
  `idusu` bigint(10) DEFAULT NULL,
  `idpla` bigint(11) NOT NULL,
  `fhins` datetime DEFAULT NULL,
  `etdins` int(5) NOT NULL,
  `idclb` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notcom`
--

CREATE TABLE `notcom` (
  `idnc` bigint(11) NOT NULL,
  `idclb` int(5) NOT NULL,
  `fhpnc` datetime DEFAULT NULL,
  `autnc` varchar(50) NOT NULL,
  `etdnc` int(5) NOT NULL,
  `princ` int(5) NOT NULL,
  `tponc` int(5) NOT NULL,
  `desnc` text NOT NULL,
  `titnc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagina`
--

CREATE TABLE `pagina` (
  `idpag` int(3) NOT NULL,
  `nompag` varchar(30) NOT NULL,
  `rutpag` varchar(255) NOT NULL,
  `mospag` tinyint(1) NOT NULL,
  `ordpag` int(2) NOT NULL,
  `icopag` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagina`
--

INSERT INTO `pagina` (`idpag`, `nompag`, `rutpag`, `mospag`, `ordpag`, `icopag`) VALUES
(101, 'Inicio', 'views/vini.php', 1, 1, NULL),
(102, 'Evento', 'views/veve.php', 1, 2, NULL),
(103, 'Informacion', 'views/vinfo.php', 1, 3, NULL),
(105, 'Noticia / Comunicado', 'views/vnot.php', 1, 5, NULL),
(110, 'Perfil', 'views/vper.php', 1, 10, NULL),
(111, 'Pagina', 'views/vpag.php', 1, 11, NULL),
(113, 'Inscripcion', 'views/vins.php', 1, 13, NULL),
(114, 'Plantilla', 'views/vpla.php', 1, 14, NULL),
(115, 'Club', 'views/vclb.php', 1, 15, NULL),
(116, 'Dominio', 'views/vdom.php', 1, 16, NULL),
(117, 'Traspaso', 'views/vtra.php', 1, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagper`
--

CREATE TABLE `pagper` (
  `idpag` int(3) DEFAULT NULL,
  `idper` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagper`
--

INSERT INTO `pagper` (`idpag`, `idper`) VALUES
(102, 1),
(110, 1),
(111, 1),
(115, 1),
(116, 1),
(101, 2),
(102, 2),
(103, 2),
(105, 2),
(113, 2),
(114, 2),
(117, 2),
(101, 3),
(102, 3),
(103, 3),
(113, 3);

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `idper` int(2) NOT NULL,
  `nomper` varchar(20) NOT NULL,
  `pagini` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`idper`, `nomper`, `pagini`) VALUES
(1, 'Administrador', 112),
(2, 'Entrenador', 101),
(3, 'Jugador', 101),
(4, 'Omnipresente', 101);

-- --------------------------------------------------------

--
-- Table structure for table `plantilla`
--

CREATE TABLE `plantilla` (
  `idpla` bigint(11) NOT NULL,
  `nompla` varchar(30) NOT NULL,
  `idclb` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traspaso`
--

CREATE TABLE `traspaso` (
  `idtrs` bigint(11) NOT NULL,
  `idusu` bigint(10) NOT NULL,
  `idclb` int(5) DEFAULT NULL,
  `ficotrs` date DEFAULT NULL,
  `valtrs` bigint(12) NOT NULL,
  `bontrs` text DEFAULT NULL,
  `dettrs` text DEFAULT NULL,
  `etdtrs` int(5) NOT NULL,
  `frcltrs` text DEFAULT NULL,
  `frustrs` text DEFAULT NULL,
  `tmtrs` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idubi` int(5) NOT NULL,
  `nomubi` varchar(50) NOT NULL,
  `depubi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusu` bigint(10) NOT NULL,
  `idper` int(2) NOT NULL,
  `nomusu` varchar(30) NOT NULL,
  `apeusu` varchar(30) NOT NULL,
  `emausu` varchar(100) NOT NULL,
  `pasusu` varchar(20) NOT NULL,
  `docusu` varchar(10) NOT NULL,
  `fotusu` varchar(255) DEFAULT NULL,
  `etdusu` text DEFAULT NULL,
  `hisusu` text DEFAULT NULL,
  `tpodoc` int(5) NOT NULL,
  `genusu` int(5) NOT NULL,
  `fhnusu` date NOT NULL,
  `idubi` int(5) DEFAULT NULL,
  `actusu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valor`
--

CREATE TABLE `valor` (
  `idval` int(5) NOT NULL,
  `nomval` varchar(50) NOT NULL,
  `iddom` int(3) DEFAULT NULL,
  `parval` tinyint(1) DEFAULT NULL,
  `actval` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valor`
--

INSERT INTO `valor` (`idval`, `nomval`, `iddom`, `parval`, `actval`) VALUES
(1, 'Masculino', 1, NULL, NULL),
(2, 'Feminino', 1, NULL, NULL),
(3, 'Cedula de ciudadania', 2, NULL, NULL),
(4, 'Tarjeta de identidad', 2, NULL, NULL),
(5, 'Raro', 1, NULL, NULL),
(6, 'Cedula extranjera', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`idclb`),
  ADD KEY `clbubi` (`idubi`);

--
-- Indexes for table `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idcon`);

--
-- Indexes for table `detevento`
--
ALTER TABLE `detevento`
  ADD KEY `dteve` (`ideve`),
  ADD KEY `dtclb` (`idclb`);

--
-- Indexes for table `dominio`
--
ALTER TABLE `dominio`
  ADD PRIMARY KEY (`iddom`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ideve`),
  ADD KEY `eveubi` (`idubi`),
  ADD KEY `evetpo` (`tpoeve`),
  ADD KEY `eveetd` (`etdeve`),
  ADD KEY `everes` (`reseve`);

--
-- Indexes for table `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`idins`),
  ADD KEY `insusu` (`idusu`),
  ADD KEY `inspla` (`idpla`),
  ADD KEY `insetd` (`etdins`),
  ADD KEY `insclb` (`idclb`);

--
-- Indexes for table `notcom`
--
ALTER TABLE `notcom`
  ADD PRIMARY KEY (`idnc`),
  ADD KEY `ncclb` (`idclb`),
  ADD KEY `ncetd` (`etdnc`),
  ADD KEY `ncpri` (`princ`),
  ADD KEY `nctpo` (`tponc`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`idpag`);

--
-- Indexes for table `pagper`
--
ALTER TABLE `pagper`
  ADD KEY `pppag` (`idpag`),
  ADD KEY `ppper` (`idper`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idper`);

--
-- Indexes for table `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`idpla`),
  ADD KEY `placlb` (`idclb`);

--
-- Indexes for table `traspaso`
--
ALTER TABLE `traspaso`
  ADD PRIMARY KEY (`idtrs`),
  ADD KEY `trsusu` (`idusu`),
  ADD KEY `trsclb` (`idclb`),
  ADD KEY `trsetd` (`etdtrs`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idubi`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`),
  ADD KEY `usuper` (`idper`),
  ADD KEY `usutpo` (`tpodoc`),
  ADD KEY `usugen` (`genusu`),
  ADD KEY `usuubi` (`idubi`);

--
-- Indexes for table `valor`
--
ALTER TABLE `valor`
  ADD PRIMARY KEY (`idval`),
  ADD KEY `valdom` (`iddom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `idclb` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idcon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `ideve` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `idins` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notcom`
--
ALTER TABLE `notcom`
  MODIFY `idnc` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idper` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `idpla` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traspaso`
--
ALTER TABLE `traspaso`
  MODIFY `idtrs` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `valor`
--
ALTER TABLE `valor`
  MODIFY `idval` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `clbubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`);

--
-- Constraints for table `detevento`
--
ALTER TABLE `detevento`
  ADD CONSTRAINT `dtclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `dteve` FOREIGN KEY (`ideve`) REFERENCES `evento` (`ideve`);

--
-- Constraints for table `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `eveetd` FOREIGN KEY (`etdeve`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `everes` FOREIGN KEY (`reseve`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `evetpo` FOREIGN KEY (`tpoeve`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `eveubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`);

--
-- Constraints for table `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `insclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `insetd` FOREIGN KEY (`etdins`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `inspla` FOREIGN KEY (`idpla`) REFERENCES `plantilla` (`idpla`),
  ADD CONSTRAINT `insusu` FOREIGN KEY (`idusu`) REFERENCES `usuario` (`idusu`);

--
-- Constraints for table `notcom`
--
ALTER TABLE `notcom`
  ADD CONSTRAINT `ncclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `ncetd` FOREIGN KEY (`etdnc`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `ncpri` FOREIGN KEY (`princ`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `nctpo` FOREIGN KEY (`tponc`) REFERENCES `valor` (`idval`);

--
-- Constraints for table `pagper`
--
ALTER TABLE `pagper`
  ADD CONSTRAINT `pppag` FOREIGN KEY (`idpag`) REFERENCES `pagina` (`idpag`),
  ADD CONSTRAINT `ppper` FOREIGN KEY (`idper`) REFERENCES `perfil` (`idper`);

--
-- Constraints for table `plantilla`
--
ALTER TABLE `plantilla`
  ADD CONSTRAINT `placlb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`);

--
-- Constraints for table `traspaso`
--
ALTER TABLE `traspaso`
  ADD CONSTRAINT `trsclb` FOREIGN KEY (`idclb`) REFERENCES `club` (`idclb`),
  ADD CONSTRAINT `trsetd` FOREIGN KEY (`etdtrs`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `trsusu` FOREIGN KEY (`idusu`) REFERENCES `usuario` (`idusu`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usugen` FOREIGN KEY (`genusu`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `usuper` FOREIGN KEY (`idper`) REFERENCES `perfil` (`idper`),
  ADD CONSTRAINT `usutpo` FOREIGN KEY (`tpodoc`) REFERENCES `valor` (`idval`),
  ADD CONSTRAINT `usuubi` FOREIGN KEY (`idubi`) REFERENCES `ubicacion` (`idubi`);

--
-- Constraints for table `valor`
--
ALTER TABLE `valor`
  ADD CONSTRAINT `valdom` FOREIGN KEY (`iddom`) REFERENCES `dominio` (`iddom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
