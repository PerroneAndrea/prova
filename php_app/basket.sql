-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 09, 2019 alle 16:02
-- Versione del server: 10.1.36-MariaDB
-- Versione PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basket`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `roster`
--

CREATE TABLE `roster` (
  `idGioc` int(2) NOT NULL,
  `nome` varchar(21) DEFAULT NULL,
  `ruolo` varchar(9) DEFAULT NULL,
  `dataN` varchar(10) DEFAULT NULL,
  `h` int(3) DEFAULT NULL,
  `p` varchar(3) DEFAULT NULL,
  `nazione` varchar(3) DEFAULT NULL,
  `codSquadra` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `roster`
--

INSERT INTO `roster` (`idGioc`, `nome`, `ruolo`, `dataN`, `h`, `p`, `nazione`, `codSquadra`) VALUES
(1, 'Saunders Wesley', 'Guardia', '16/06/1993', 196, '88', 'USA', 1),
(2, 'Mathews Jordan', 'Guardia', '22/06/1994', 193, '92', 'USA', 1),
(3, 'Sanguinetti Giacomo', 'Playmaker', '21/03/1990', 181, '84', 'ITA', 1),
(4, 'Gazzotti Giulio', 'Ala', '23/09/1991', 202, '104', 'ITA', 1),
(5, 'Diener Travis', 'Playmaker', '01/03/1982', 185, '79', 'ITA', 1),
(6, 'Ruzzier Michele', 'Playmaker', '09/02/1993', 183, '80', 'ITA', 1),
(7, 'De Vico Niccolo', 'Guardia', '19/07/1994', 200, '93', 'ITA', 1),
(8, 'Tiby Matt', 'Ala', '19/12/1992', 203, '104', 'USA', 1),
(9, 'Stojanovic Vojislav', 'Guardia', '14/04/1997', 199, '98', 'SRB', 1),
(10, 'Williams Darrell', 'Centro', '15/09/1989', 203, '111', 'USA', 1),
(11, 'Palmi Topias', 'Guardia', '26/08/1994', 194, '91', 'FIN', 1),
(12, 'Akele Nicola', 'Guardia', '07/11/1995', 200, '98', 'ITA', 1),
(13, 'Romeo SACCHETTI', 'Coach', '01/10/1955', 185, '89', 'ITA', 1),
(14, 'Cusenza Kevin', 'Ala', '31/01/1993', 200, '95', 'ITA', 2),
(15, 'Moore Michael', 'Ala', '30/05/1994', 203, '95', 'USA', 2),
(16, 'Alibegovic Amar', 'Ala', '31/03/1995', 206, '109', 'ITA', 2),
(17, 'Rullo Roberto', 'Guardia', '05/02/1990', 193, '98', 'ITA', 2),
(18, 'Dyson Jerome', 'Playmaker', '01/05/1987', 191, '82', 'USA', 2),
(19, 'Baldasso Tommaso', 'Playmaker', '29/01/1998', 191, '88', 'ITA', 2),
(20, 'Pini Giovanni', 'Ala', '25/07/1992', 203, '100', 'ITA', 2),
(21, 'Farley William', 'Guardia', '20/09/1994', 196, '89', 'USA', 2),
(22, 'Spinosa Giovanni', 'Guardia', '29/12/1997', 186, '80', 'ITA', 2),
(23, 'Jefferson Davon', 'Centro', '03/11/1986', 204, '100', 'USA', 2),
(24, 'Kyzlink Tomas', 'Guardia', '18/06/1993', 198, '91', 'CZE', 2),
(25, 'Piero BUCCHI', 'Coach', '01/10/1955', 185, '89', 'ITA', 2),
(26, 'Udanoh Ike', 'Ala', '08/02/1989', 202, '107', 'USA', 3),
(27, 'Casarin Davide', 'Guardia', '22/05/2003', 188, '', 'ITA', 3),
(28, 'Stone Julyan', 'Playmaker', '07/12/1988', 198, '95', 'USA', 3),
(29, 'Bramos Michael', 'Ala', '27/05/1987', 198, '102', 'GRE', 3),
(30, 'Tonut Stefano', 'Guardia', '07/11/1993', 194, '90', 'ITA', 3),
(31, 'Daye Austin', 'Ala', '05/06/1988', 211, '91', 'USA', 3),
(32, 'De Nicolao Andrea', 'Playmaker', '21/08/1991', 185, '75', 'ITA', 3),
(33, 'Filloy Ariel', 'Playmaker', '11/03/1987', 190, '85', 'ITA', 3),
(34, 'Vidmar Gasper', 'Centro', '14/09/1987', 210, '114', 'SLO', 3),
(35, 'Chappell Jeremy Lamar', 'Guardia', '10/06/1987', 191, '91', 'USA', 3),
(36, 'Mazzola Valerio', 'Ala', '07/03/1988', 205, '111', 'ITA', 3),
(37, 'Pellegrino Francesco', 'Centro', '06/08/1991', 210, '110', 'ITA', 3),
(38, 'Cerella Bruno', 'Guardia', '30/07/1986', 194, '93', 'ITA', 3),
(39, 'Watt Mitchell', 'Centro', '14/12/1989', 208, '102', 'USA', 3),
(40, 'Walter DE RAFFAELE', 'Coach', '01/10/1955', 185, '89', 'ITA', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `squadre`
--

CREATE TABLE `squadre` (
  `idSq` int(2) NOT NULL,
  `nomeSq` varchar(30) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `sito` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `squadre`
--

INSERT INTO `squadre` (`idSq`, `nomeSq`, `citta`, `sito`) VALUES
(1, 'Vanoli Cremona', 'Cremona', 'https://www.vanolibasket.com'),
(2, 'Virtus Roma', 'Roma', 'https://virtusroma.it'),
(3, 'Reyer Venezia', 'Venezia', 'https://www.reyer.it');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`idGioc`),
  ADD KEY `codSquadra` (`codSquadra`);

--
-- Indici per le tabelle `squadre`
--
ALTER TABLE `squadre`
  ADD PRIMARY KEY (`idSq`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `roster`
--
ALTER TABLE `roster`
  MODIFY `idGioc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `roster`
--
ALTER TABLE `roster`
  ADD CONSTRAINT `roster_ibfk_1` FOREIGN KEY (`codSquadra`) REFERENCES `squadre` (`idSq`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
