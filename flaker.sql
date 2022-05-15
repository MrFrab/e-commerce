-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 26, 2022 alle 16:10
-- Versione del server: 10.4.20-MariaDB
-- Versione PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flaker`
--
CREATE DATABASE IF NOT EXISTS `flaker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flaker`;

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `IDCliente` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Cognome` varchar(50) DEFAULT NULL,
  `EmailUtente` varchar(50) DEFAULT NULL,
  `PasswordUtente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`IDCliente`, `Nome`, `Cognome`, `EmailUtente`, `PasswordUtente`) VALUES
(1, 'Francesco', 'Bistaffa', 'fra.bista03@gmail.com', 'e32ae4e0d9158c00684ec73ce7803ab1'),
(2, 'Marco', 'Bianchi', 'marco.bianchi@gmail.com', 'e32ae4e0d9158c00684ec73ce7803ab1'),
(16, 'Amministratore', 'Supremo', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struttura della tabella `composizioneordine`
--

DROP TABLE IF EXISTS `composizioneordine`;
CREATE TABLE `composizioneordine` (
  `IDOrdineCompleto` int(11) NOT NULL,
  `IDScarpa` int(11) DEFAULT NULL,
  `IDOrdine` int(11) DEFAULT NULL,
  `Quantita` int(11) DEFAULT NULL,
  `Costo` float(7,2) DEFAULT NULL,
  `Taglia` float(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `modelloscarpa`
--

DROP TABLE IF EXISTS `modelloscarpa`;
CREATE TABLE `modelloscarpa` (
  `Brand` varchar(50) DEFAULT NULL,
  `ModelloScarpa` varchar(50) NOT NULL,
  `Immagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `modelloscarpa`
--

INSERT INTO `modelloscarpa` (`Brand`, `ModelloScarpa`, `Immagine`) VALUES
('Jordan 1', 'A Ma Maniere x Air Jordan 1 High OG Airness', 'img/Jordan1/A_MA_MANIERE_HIGH_OG_AIRNESS/tuttedue.jpeg'),
('Jordan 1', 'Air Jordan 1 Retro High OG Bordeaux', 'img/Jordan1/RETRO_HIGH_OG_BORDEAUX/tuttedue.jpeg'),
('Jordan 1', 'Air Jordan 1 Retro High OG Turbo Green', 'img/Jordan1/RETRO_HIGH_OG_TURBO_GREEN/tuttedue.jpeg'),
('Jordan 1', 'Air Jordan 1 Retro High OG University Blue', 'img/Jordan1/HIGH_OG_RETRO_UNIVERSITY_BLUE/tuttedue.jpeg'),
('Jordan 4', 'Cool Grey 2019', 'img/Jordan4/COOL_GRAY/tuttedue.jpeg'),
('Jordan 1', 'Dior x Air Jordan 1 High', 'img/Jordan1/DIOR_HIGH/tuttedue.jpeg'),
('Dunk High', 'DUNK HIGH BLACK WHITE', 'img/Dunk_High/B_White/tuttedue.jpeg'),
('Dunk High', 'Dunk High Pro SB Reverse Goldenrod', 'img/Dunk_High/SB_REVERSEGOLDENROD/tuttedue.jpeg'),
('Dunk High', 'Dunk High SB Maui Wowie', 'img/Dunk_High/SB_HAWAII/tuttedue.jpeg'),
('Dunk High', 'Dunk High SB Strawberry Cough', 'img/Dunk_High/SB_STRAWBERRY_COUGH/tuttedue.jpeg'),
('Dunk High', 'Dunk High SP Spartan Green', 'img/Dunk_High/SPARTAN_GREEN/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low Black White', 'img/Dunk_Low/B_White/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low Championship Red', 'img/Dunk_Low/CHAMPIONSHIP_RED/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low Michigan 2021', 'img/Dunk_Low/MICHIGAN/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low Premium Cider', 'img/Dunk_Low/CIDER/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low Retro Vol. 1 SP Plum', 'img/Dunk_Low/PLUM/tuttedue.jpeg'),
('Dunk Low', 'Dunk Low SB Mummy', 'img/Dunk_Low/SB_Mummy/tuttedue.jpeg'),
('Jordan 1', 'Fragment Design x Travis Scott x Air Jordan 1 Retr', 'img/Jordan1/FRAGMENT_DESIGN_X_TRAVIS_SCOTT/tuttedue.jpeg'),
('Jordan 4', 'Lightning', 'img/Jordan4/RETRO_LIGHTNING/tuttedue.jpeg'),
('Jordan 4', 'Off-White SP Sail Women', 'img/Jordan4/OFF_WHITE_W_SAIL/tuttedue.jpeg'),
('Jordan 1', 'Off-White x Air Jordan 1 Retro High OG Chicago', 'img/Jordan1/OFF-WHITE_RETRO_HIGH_OG_CHICAGO/tuttedue.jpeg'),
('Jordan 4', 'Purple Metallic', 'img/Jordan4/PURPLE_METALLIC/tuttedue.jpeg'),
('Dunk Low', 'StrangeLove x Dunk Low SB Valentine s Day', 'img/Dunk_Low/SB_STRANGELOVE/tuttedue.jpeg'),
('Jordan 4', 'Taupe Haze', 'img/Jordan4/TAUPE_HAZE/tuttedue.jpeg'),
('Jordan 1', 'Travis Scott x Air Jordan 1 Retro High OG Mocha', 'img/Jordan1/OFF-TRAVIS_SCOTT_RETRO_HIGH_OG_MOCHA/tuttedue.jpeg'),
('Jordan 4', 'Union LA Desert Moss', 'img/Jordan4/DESERT_MOSS/tuttedue.jpeg'),
('Jordan 4', 'University Blue', 'img/Jordan4/UNIVERSITY_BLUE/tuttedue.jpeg'),
('Jordan 4', 'White Oreo', 'img/Jordan4/WHITE_OREO/tuttedue.jpeg'),
('Dunk High', 'Wmns Dunk High Aluminum', 'img/Dunk_High/ALUMINIUM_W/tuttedue.jpeg'),
('Dunk High', 'Wmns Dunk High Moon Fossil', 'img/Dunk_High/MOON_FOSSIL/tuttedue.jpeg'),
('Dunk High', 'Wmns Dunk High Syracuse 2021', 'img/Dunk_High/SYRACUSE_W/tuttedue.jpeg'),
('Dunk Low', 'Wmns Dunk Low Green Glow', 'img/Dunk_Low/GREEN_GLOW_W/tuttedue.jpeg'),
('Yeezy', 'Yeezy 500 Salt', 'img/YEEZY/500_SALT/tuttedue.jpeg'),
('Yeezy', 'Yeezy 500 Utility Black', 'img/YEEZY/500_UTILITY_BLACK/tuttedue.jpeg'),
('Yeezy', 'Yeezy Boost 350 V2 Black Reflective', 'img/YEEZY/350_BLACK_REFLECTIVE/tuttedue.jpeg'),
('Yeezy', 'Yeezy Boost 350 V2 Zebra', 'img/YEEZY/350_ZEBRA/tuttedue.jpeg'),
('Yeezy', 'Yeezy Boost 700 V2 Static', 'img/YEEZY/700_STATIC/tuttedue.jpeg'),
('Yeezy', 'Yeezy Boost 700 Wave Runner', 'img/YEEZY/700_WAVE_RUNNER/tuttedue.jpeg'),
('Yeezy', 'Yeezy Foam Runner Vermilion', 'img/YEEZY/FOAM_VERMILION/tuttedue.jpeg'),
('Yeezy', 'Yeezy Slides Pure', 'img/YEEZY/SLIDE_PURE/tuttedue.jpeg');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

DROP TABLE IF EXISTS `ordine`;
CREATE TABLE `ordine` (
  `IDOrdine` int(11) NOT NULL,
  `dataOrdine` date DEFAULT NULL,
  `indirizzoUtente` varchar(60) DEFAULT NULL,
  `CAPUtente` int(5) DEFAULT NULL,
  `CittàUtente` varchar(50) DEFAULT NULL,
  `ProvinciaUtente` varchar(50) DEFAULT NULL,
  `IDCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `scarpafisica`
--

DROP TABLE IF EXISTS `scarpafisica`;
CREATE TABLE `scarpafisica` (
  `IDScarpa` int(11) NOT NULL,
  `ModelloScarpa` varchar(50) DEFAULT NULL,
  `TagliaDisponibile` float(3,1) DEFAULT NULL,
  `QuantitaDisponibile` int(11) UNSIGNED NOT NULL,
  `Costo` float(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCliente`);

--
-- Indici per le tabelle `composizioneordine`
--
ALTER TABLE `composizioneordine`
  ADD PRIMARY KEY (`IDOrdineCompleto`),
  ADD KEY `IDScarpa` (`IDScarpa`),
  ADD KEY `IDOrdine` (`IDOrdine`);

--
-- Indici per le tabelle `modelloscarpa`
--
ALTER TABLE `modelloscarpa`
  ADD PRIMARY KEY (`ModelloScarpa`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`IDOrdine`),
  ADD KEY `IDCliente` (`IDCliente`);

--
-- Indici per le tabelle `scarpafisica`
--
ALTER TABLE `scarpafisica`
  ADD PRIMARY KEY (`IDScarpa`),
  ADD KEY `ModelloScarpa` (`ModelloScarpa`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `composizioneordine`
--
ALTER TABLE `composizioneordine`
  MODIFY `IDOrdineCompleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT per la tabella `ordine`
--
ALTER TABLE `ordine`
  MODIFY `IDOrdine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT per la tabella `scarpafisica`
--
ALTER TABLE `scarpafisica`
  MODIFY `IDScarpa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `composizioneordine`
--
ALTER TABLE `composizioneordine`
  ADD CONSTRAINT `composizioneordine_ibfk_1` FOREIGN KEY (`IDScarpa`) REFERENCES `scarpafisica` (`IDScarpa`),
  ADD CONSTRAINT `composizioneordine_ibfk_2` FOREIGN KEY (`IDOrdine`) REFERENCES `ordine` (`IDOrdine`);

--
-- Limiti per la tabella `ordine`
--
ALTER TABLE `ordine`
  ADD CONSTRAINT `ordine_ibfk_1` FOREIGN KEY (`IDCliente`) REFERENCES `cliente` (`IDCliente`);

--
-- Limiti per la tabella `scarpafisica`
--
ALTER TABLE `scarpafisica`
  ADD CONSTRAINT `scarpafisica_ibfk_1` FOREIGN KEY (`ModelloScarpa`) REFERENCES `modelloscarpa` (`ModelloScarpa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
