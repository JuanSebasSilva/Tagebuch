CREATE  DATABASE tagebuch;
USE tagebuch;

CREATE TABLE dominio(iddom INT(3) PRIMARY KEY NOT NULL, nomdom VARCHAR(40) NOT NULL);
CREATE TABLE pagina(idpag INT(3) PRIMARY KEY NOT NULL, nompag VARCHAR(30) NOT NULL, rutpag VARCHAR(255) NOT NULL, mospag TINYINT(1) NOT NULL, ordpag INT(2) NOT NULL, icopag VARCHAR(30) DEFAULT NULL);
CREATE TABLE perfil(idper INT(2) PRIMARY KEY AUTO_INCREMENT, nomper VARCHAR(20) NOT NULL, pagini INT(2) DEFAULT NULL);
CREATE TABLE configuracion(idcon INT(5) PRIMARY KEY AUTO_INCREMENT NOT NULL, nitcon VARCHAR(10), titcon VARCHAR(30), imgcon VARCHAR(255), descon TEXT, piecon VARCHAR(255));
CREATE TABLE ubicacion(idubi INT(5) PRIMARY KEY NOT NULL, nomubi VARCHAR(50) NOT NULL, depubi INT(5));
CREATE TABLE valor(idval INT(5) PRIMARY KEY AUTO_INCREMENT, nomval VARCHAR(50) NOT NULL, iddom INT(3), parval TINYINT(1), actval TINYINT(1));
CREATE TABLE club(idclb INT(5) PRIMARY KEY AUTO_INCREMENT, nomclb VARCHAR(50) NOT NULL, idubi INT(5) NOT NULL, afclb DATE NOT NULL, cmclb INT(9), preclb VARCHAR(50) NOT NULL, desclb TEXT);
CREATE TABLE plantilla(idpla BIGINT(11) PRIMARY KEY AUTO_INCREMENT, nompla VARCHAR(30) NOT NULL, idclb INT(5) NOT NULL);
CREATE TABLE pagper(idpag INT(3), idper INT(2));
CREATE TABLE evento(ideve BIGINT(11) PRIMARY KEY AUTO_INCREMENT, idubi INT(5) NOT NULL, nomeve VARCHAR(50) NOT NULL, deseve TEXT, tpoeve INT(5) NOT NULL, etdeve INT(5) NOT NULL, reseve INT(5), fieve DATE, ffeve DATE);
CREATE TABLE detevento(ideve BIGINT(11), idclb INT(5));
CREATE TABLE usuario(idusu BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idper INT(2) NOT NULL, nomusu VARCHAR(30) NOT NULL, apeusu VARCHAR(30) NOT NULL, emausu VARCHAR(100) NOT NULL, pasusu VARCHAR(20) NOT NULL, docusu VARCHAR(10) NOT NULL, fotusu VARCHAR(255), etdusu TEXT, hisusu TEXT, tpodoc INT(5) NOT NULL, genusu INT(5) NOT NULL, fhnusu DATE NOT NULL, idubi INT(5), actusu TINYINT(1));
CREATE TABLE inscripcion(idins BIGINT(11) PRIMARY KEY AUTO_INCREMENT, idusu BIGINT(10), idpla BIGINT(11) NOT NULL, fhins DATETIME, etdins INT(5) NOT NULL, idclb INT(5) NOT NULL);
CREATE TABLE notcom(idnc BIGINT(11) PRIMARY KEY AUTO_INCREMENT, idclb INT(5) NOT NULL, fhpnc DATETIME, autnc VARCHAR(50) NOT NULL, etdnc INT(5) NOT NULL, princ INT(5) NOT NULL, tponc INT(5) NOT NULL, desnc TEXT NOT NULL, titnc VARCHAR(100) NOT NULL);
CREATE TABLE traspaso(idtrs BIGINT(11) PRIMARY KEY AUTO_INCREMENT, idusu BIGINT(10) NOT NULL, idclb INT(5), ficotrs DATE, valtrs BIGINT(12) NOT NULL, bontrs TEXT, dettrs TEXT, etdtrs INT(5) NOT NULL, frcltrs TEXT, frustrs TEXT, tmtrs DATE);

ALTER TABLE valor ADD KEY valdom(iddom), ADD CONSTRAINT valdom FOREIGN KEY (iddom) REFERENCES dominio(iddom);
ALTER TABLE club ADD KEY clbubi(idubi), ADD CONSTRAINT clbubi FOREIGN KEY (idubi) REFERENCES ubicacion(idubi);
ALTER TABLE plantilla ADD KEY placlb(idclb), ADD CONSTRAINT placlb FOREIGN KEY (idclb) REFERENCES club(idclb);
ALTER TABLE pagper ADD KEY pppag(idpag), ADD CONSTRAINT pppag FOREIGN KEY (idpag) REFERENCES pagina(idpag), ADD KEY ppper(idper), ADD CONSTRAINT ppper FOREIGN KEY (idper) REFERENCES perfil(idper);
ALTER TABLE evento ADD KEY eveubi(idubi), ADD CONSTRAINT eveubi FOREIGN KEY (idubi) REFERENCES ubicacion(idubi), ADD KEY evetpo(tpoeve), ADD CONSTRAINT evetpo FOREIGN KEY (tpoeve) REFERENCES valor(idval), ADD KEY eveetd(etdeve), ADD CONSTRAINT eveetd FOREIGN KEY (etdeve) REFERENCES valor(idval), ADD KEY everes(reseve), ADD CONSTRAINT everes FOREIGN KEY (reseve) REFERENCES valor(idval);
ALTER TABLE detevento ADD KEY dteve(ideve), ADD CONSTRAINT dteve FOREIGN KEY (ideve) REFERENCES evento(ideve), ADD KEY dtclb(idclb), ADD CONSTRAINT dtclb FOREIGN KEY (idclb) REFERENCES club(idclb);
ALTER TABLE usuario ADD KEY usuper(idper), ADD CONSTRAINT usuper FOREIGN KEY (idper) REFERENCES perfil(idper), ADD KEY usutpo(tpodoc), ADD CONSTRAINT usutpo FOREIGN KEY (tpodoc) REFERENCES valor(idval), ADD KEY usugen(genusu), ADD CONSTRAINT usugen FOREIGN KEY (genusu) REFERENCES valor(idval), ADD KEY usuubi(idubi), ADD CONSTRAINT usuubi FOREIGN KEY (idubi) REFERENCES ubicacion(idubi);
ALTER TABLE inscripcion ADD KEY insusu(idusu), ADD CONSTRAINT insusu FOREIGN KEY (idusu) REFERENCES usuario(idusu), ADD KEY inspla(idpla), ADD CONSTRAINT inspla FOREIGN KEY (idpla) REFERENCES plantilla(idpla), ADD KEY insetd(etdins), ADD CONSTRAINT insetd FOREIGN KEY (etdins) REFERENCES valor(idval), ADD KEY insclb(idclb), ADD CONSTRAINT insclb FOREIGN KEY (idclb) REFERENCES club(idclb);
ALTER TABLE notcom ADD KEY ncclb(idclb), ADD CONSTRAINT ncclb FOREIGN KEY (idclb) REFERENCES club(idclb), ADD KEY ncetd(etdnc), ADD CONSTRAINT ncetd FOREIGN KEY (etdnc) REFERENCES valor(idval), ADD KEY ncpri(princ), ADD CONSTRAINT ncpri FOREIGN KEY (princ) REFERENCES valor(idval), ADD KEY nctpo(tponc), ADD CONSTRAINT nctpo FOREIGN KEY (tponc) REFERENCES valor(idval);
ALTER TABLE traspaso ADD KEY trsusu(idusu), ADD CONSTRAINT trsusu FOREIGN KEY (idusu) REFERENCES usuario(idusu), ADD KEY trsclb(idclb), ADD CONSTRAINT trsclb FOREIGN KEY (idclb) REFERENCES club(idclb), ADD KEY trsetd(etdtrs), ADD CONSTRAINT trsetd FOREIGN KEY (etdtrs) REFERENCES valor(idval);

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

INSERT INTO `perfil` (`idper`, `nomper`, `pagini`) VALUES
(1, 'Administrador', 112),
(2, 'Entrenador', 101),
(3, 'Jugador', 101),
(4, 'Omnipresente', 101);

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

INSERT INTO `valor` (`idval`, `nomval`, `iddom`, `parval`, `actval`) VALUES
(1, 'Masculino', 1, NULL, NULL),
(2, 'Feminino', 1, NULL, NULL),
(3, 'Cedula de ciudadania', 2, NULL, NULL),
(4, 'Tarjeta de identidad', 2, NULL, NULL),
(5, 'Raro', 1, NULL, NULL),
(6, 'Cedula extranjera', 2, NULL, NULL);