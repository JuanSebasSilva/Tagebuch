CREATE DATABASE tagebuch;
USE tagebuch;

CREATE TABLE perfil(idper BIGINT(10) PRIMARY KEY AUTO_INCREMENT, nomper VARCHAR(20));
CREATE TABLE ubicacion(idubi BIGINT(10) PRIMARY KEY AUTO_INCREMENT, nomubi VARCHAR(20), depubi INT(5));
CREATE TABLE usuario(idusu BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idper BIGINT(10), nomusu VARCHAR(50), empusu VARCHAR(50), nitusu VARCHAR(10), fotusu VARCHAR(255), expusu DATE, edtusu INTEGER, 
hisusu TEXT, salusu DECIMAL(11,2), hrrusu TIME, sexusu INT(5), tponit INT(5), genusu INT(5), ageusu INT(2), idubi BIGINT(10));
CREATE TABLE dominio(iddom INT(3) PRIMARY KEY AUTO_INCREMENT, nomdom VARCHAR(100));
CREATE TABLE valor(idval INT(5) PRIMARY KEY AUTO_INCREMENT, nomval VARCHAR(100), iddom INT(3));
CREATE TABLE inscripcion(idins BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idusu BIGINT(10), idpla BIGINT(10), fhins DATETIME, etdins INT(5), durins DATE);
CREATE TABLE club(idclb BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idins BIGINT(10), nomclb VARCHAR(50), idubi BIGINT(10), anoforclb DATE, cstmenusu INTEGER(9), preclb VARCHAR(50), prsclb INTEGER);
CREATE TABLE evento(ideve BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idubi BIGINT(10), nomeve VARCHAR(50), deseve TEXT, tpoeve INT(5), dureve DATETIME, 
etdeve INT(5), reseve VARCHAR(50), fheve DATETIME);
CREATE TABLE detevento(iddeteve BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idclb BIGINT(10), ideve BIGINT(10));
CREATE TABLE plantilla(idpla BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idclb BIGINT(10), ettpla INT(5));
CREATE TABLE traspaso(idtrs BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idusu BIGINT(10), idclb BIGINT(10), fictrtrs DATE, valtrs INTEGER, bontrs TEXT, dettrs TEXT,
etdtrs INT(5), firclbtrs TEXT, firusutrs TEXT);
CREATE TABLE notcom(idntcm BIGINT(10) PRIMARY KEY AUTO_INCREMENT, idclb BIGINT(10), fhpubntcm DATETIME, autntcm VARCHAR(40), etdntcm INT(5), printcm INT(5), 
tpontcm INT(5));
CREATE TABLE archive(idarc INT(10) PRIMARY KEY AUTO_INCREMENT, nomarc VARCHAR(255), idntcm BIGINT(10));
CREATE TABLE pagina(idpag INT(2) PRIMARY KEY AUTO_INCREMENT);
CREATE TABLE pagper(idpgpr INT(2) PRIMARY KEY AUTO_INCREMENT, idpag INT(2), idper BIGINT(10));

ALTER TABLE usuario ADD KEY usuper(idper), ADD KEY usuubi(idubi), ADD KEY uvsex(sexusu), ADD KEY uvtpnt(tponit), ADD KEY uvgnus(genusu), ADD CONSTRAINT usuper FOREIGN KEY (idper) REFERENCES perfil(idper), 
ADD CONSTRAINT usuubi FOREIGN KEY (idubi) REFERENCES ubicacion(idubi), ADD CONSTRAINT uvsex FOREIGN KEY (sexusu) REFERENCES valor(idval), ADD CONSTRAINT uvtpnt FOREIGN KEY (tponit)
REFERENCES valor(idval), ADD CONSTRAINT uvgnus FOREIGN KEY (genusu) REFERENCES valor(idval);
ALTER TABLE inscripcion ADD KEY insusu(idusu), ADD KEY inspla(idpla), ADD KEY ivest(etdins), ADD CONSTRAINT insusu FOREIGN KEY (idusu) REFERENCES usuario(idusu), ADD CONSTRAINT inspla FOREIGN KEY (idpla) 
REFERENCES plantilla(idpla), ADD CONSTRAINT ivest FOREIGN KEY (etdins) REFERENCES valor(idval);
ALTER TABLE club ADD KEY clbins(idins), ADD KEY clbubi(idubi), ADD CONSTRAINT clbins FOREIGN KEY (idins) REFERENCES inscripcion(idins), ADD CONSTRAINT clbubi 
FOREIGN KEY (idubi) REFERENCES ubicacion(idubi);
ALTER TABLE evento ADD KEY eveubi(idubi), ADD KEY evtpev(tpoeve), ADD KEY evetev(etdeve), ADD CONSTRAINT eveubi FOREIGN KEY (idubi) REFERENCES ubicacion(idubi), ADD CONSTRAINT evtpev FOREIGN KEY (tpoeve) REFERENCES valor(idval), 
ADD CONSTRAINT evetev FOREIGN KEY (etdeve) REFERENCES valor(idval);
ALTER TABLE plantilla ADD KEY placlb(idclb), ADD KEY pvetpl(ettpla), ADD CONSTRAINT placlb FOREIGN KEY (idclb) REFERENCES club(idclb), ADD CONSTRAINT pvetpl FOREIGN KEY (ettpla) REFERENCES valor(idval);
ALTER TABLE notcom ADD KEY ntcmclb(idclb), ADD KEY ntcmetd(etdntcm), ADD KEY ncprinc(printcm), ADD KEY nctpnc(tpontcm), ADD CONSTRAINT ntcmclb FOREIGN KEY (idclb) REFERENCES club(idclb), 
ADD CONSTRAINT ntcmetd FOREIGN KEY (etdntcm) REFERENCES valor(idval), ADD CONSTRAINT ncprinc FOREIGN KEY (printcm) REFERENCES valor(idval), ADD CONSTRAINT nctpnc FOREIGN KEY (tpontcm) REFERENCES valor(idval);
ALTER TABLE detevento ADD KEY detevelcb(idclb), ADD KEY deteves(ideve), ADD CONSTRAINT deteveclb FOREIGN KEY (idclb) REFERENCES club(idclb), ADD CONSTRAINT deteves 
FOREIGN KEY (ideve) REFERENCES evento(ideve);
ALTER TABLE traspaso ADD KEY trsusu(idusu), ADD KEY trsclb(idclb), ADD KEY tvettr(etdtrs), ADD CONSTRAINT trsusu FOREIGN KEY (idusu) REFERENCES usuario(idusu), ADD CONSTRAINT trsclb 
FOREIGN KEY (idclb) REFERENCES club(idclb), ADD CONSTRAINT tvettr FOREIGN KEY (etdtrs) REFERENCES valor(idval);
ALTER TABLE pagper ADD KEY pgprper(idper), ADD KEY pgprpag(idpag), ADD CONSTRAINT pgprper FOREIGN KEY (idper) REFERENCES perfil(idper), ADD CONSTRAINT pgprpag 
FOREIGN KEY (idpag) REFERENCES pagina(idpag);
ALTER TABLE valor ADD KEY valdom(iddom), ADD CONSTRAINT valdom FOREIGN KEY (iddom) REFERENCES dominio(iddom);
ALTER TABLE archive ADD KEY arcntcm(idntcm), ADD CONSTRAINT arcntcm FOREIGN KEY (idntcm) REFERENCES notcom(idntcm);