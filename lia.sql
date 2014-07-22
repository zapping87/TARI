CREATE TABLE `articoli` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `quantita` int(10) unsigned NOT NULL,
  `marca` varchar(30) character set utf8 collate utf8_bin NOT NULL,
  `modello` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`ID`)
) AUTO_INCREMENT=21;

CREATE TABLE `compra` (
  `IDUtente` int(11) NOT NULL,
  `IDArticolo` int(11) NOT NULL,
  PRIMARY KEY  (`IDUtente`,`IDArticolo`)
);

CREATE TABLE `utenti` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `Nome` varchar(80) character set utf8 collate utf8_bin NOT NULL,
  `Cognome` varchar(80) character set utf8 collate utf8_bin NOT NULL,
  `username` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `password` char(33) character set utf8 collate utf8_bin NOT NULL,
  `Indirizzo` varchar(120) character set utf8 collate utf8_bin NOT NULL,
  `Telefono` varchar(15) character set utf8 collate utf8_bin NOT NULL,
  `eMail` varchar(30) character set utf8 collate utf8_bin NOT NULL,
  `Citta` varchar(30) character set utf8 collate utf8_bin NOT NULL,
  `CAP` char(5) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`ID`)
) AUTO_INCREMENT=1 ;

INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(1, 10, 'Motorola', 'WX180');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(2, 10, 'Nokia', '1616 Blue');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(3, 12, 'Alcatel', 'OT-222 Titanium Grey');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(4, 15, 'Samsung', 'S3100 Europa Grey');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(5, 2, 'BlackBerry', 'Curve 8520 White');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(6, 7, 'HTC', 'Desire');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(7, 17, 'Samsung', 'S3600 Black');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(8, 13, 'BlackBerry', 'Curve 8900 Black');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(9, 13, 'Nokia', '7020 Hot Pink');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(10, 16, 'LG', 'KS360 Tribe Pink');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(11, 15, 'LG', 'GB108 Lilla');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(12, 0, 'Sony Ericsson', 'Elm Metal Black  ');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(13, 4, 'Alcatel', 'OT-305 Deep Red');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(14, 1, 'HTC', 'HD Mini');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(15, 6, 'Sony Ericsson', 'Xperia X2 Silver');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(16, 9, 'Apple', 'iPhone 3G S 32GB White');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(17, 0, 'Acer', 'neoTouch P300');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(18, 11, 'Acer', 'neoTouch P400');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(19, 2, 'Motorola', 'Milestone');
INSERT INTO `articoli` (`ID`, `quantita`, `marca`, `modello`) VALUES(20, 1, 'Motorola', 'BackFlip');
