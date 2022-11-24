-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 nov. 2022 à 13:22
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newaadb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `phone`, `pass`, `status`) VALUES
(1, 'dido', 'Tsongo', 'dieudonnetsongo@gmail.com', '0706571995', '1234', 1),
(2, 'Kathembo', 'Tsongo', 'tsongo@gmail.com', '0706571900', '1111', 2),
(3, 'Fabien', 'Ngugo', 'ngo@gmail.com', '0706571911', '1111', 3);

-- --------------------------------------------------------

--
-- Structure de la table `africa_location`
--

CREATE TABLE `africa_location` (
  `id` int(11) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `no_community` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `africa_location`
--

INSERT INTO `africa_location` (`id`, `country`, `no_community`) VALUES
(47, 'KENYA COUNTRY', '6'),
(48, 'UGANDA-KAMPALA', '1'),
(49, 'CONGO', '25'),
(50, 'BURKINAFASO', '1'),
(51, 'IVORY COST', '1'),
(53, 'ANGOLA', '1'),
(55, 'TOGO', '3');

-- --------------------------------------------------------

--
-- Structure de la table `america_location`
--

CREATE TABLE `america_location` (
  `id` int(11) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `no_community` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `america_location`
--

INSERT INTO `america_location` (`id`, `country`, `no_community`) VALUES
(46, 'UNITED STATES OF AMERICA', '4'),
(48, 'MEXICO', '5'),
(49, 'CANADA', '1'),
(51, 'PHILIPPINS', '5');

-- --------------------------------------------------------

--
-- Structure de la table `asia_location`
--

CREATE TABLE `asia_location` (
  `id` int(11) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `no_community` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `asia_location`
--

INSERT INTO `asia_location` (`id`, `country`, `no_community`) VALUES
(49, 'GREECE ATHEN', '2'),
(51, 'ISRAEL', '3');

-- --------------------------------------------------------

--
-- Structure de la table `communitieskenya`
--

CREATE TABLE `communitieskenya` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `diocese` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `communitieskenya`
--

INSERT INTO `communitieskenya` (`id`, `name`, `diocese`) VALUES
(46, ' Emmanuel House Theology', 'NAIROBI'),
(49, 'ST MBAGATUZINDE KATUA', 'NAIROBI-KATUA'),
(50, 'St Monica Njiru Parish', 'ARCHDIOCESE OF NAIROBI');

-- --------------------------------------------------------

--
-- Structure de la table `communitiestanzania`
--

CREATE TABLE `communitiestanzania` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `diocese` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `communitiestanzania`
--

INSERT INTO `communitiestanzania` (`id`, `name`, `diocese`) VALUES
(43, ' Austin H', 'Arusha-Njiro'),
(46, ' Kizito House (Noviciate) ', 'Arusha-Njiro'),
(48, 'St Peter and Paul Kijenge', 'Arusha-Kijenge');

-- --------------------------------------------------------

--
-- Structure de la table `communitiesuganda`
--

CREATE TABLE `communitiesuganda` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `diocese` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `communitiesuganda`
--

INSERT INTO `communitiesuganda` (`id`, `name`, `diocese`) VALUES
(43, ' Kyabakade ', ' Archidiocese of Kampala'),
(47, 'St France of Xavier', 'Kasese');

-- --------------------------------------------------------

--
-- Structure de la table `contact_kenya`
--

CREATE TABLE `contact_kenya` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_kenya`
--

INSERT INTO `contact_kenya` (`id`, `contact1`) VALUES
(1, '+254789562347'),
(2, '+25478956000'),
(5, '+254789562045');

-- --------------------------------------------------------

--
-- Structure de la table `contact_tanzania`
--

CREATE TABLE `contact_tanzania` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_tanzania`
--

INSERT INTO `contact_tanzania` (`id`, `contact1`) VALUES
(1, '+254789562347'),
(2, ' +25478000000'),
(3, '+254789562000');

-- --------------------------------------------------------

--
-- Structure de la table `contact_uganda`
--

CREATE TABLE `contact_uganda` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_uganda`
--

INSERT INTO `contact_uganda` (`id`, `contact1`) VALUES
(1, '  +25478950011'),
(2, '+254789562045'),
(3, '  +2547830220');

-- --------------------------------------------------------

--
-- Structure de la table `deacons`
--

CREATE TABLE `deacons` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `temp_v_date` varchar(200) DEFAULT NULL,
  `perp_v_date` varchar(100) DEFAULT NULL,
  `deaconate_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `deacons`
--

INSERT INTO `deacons` (`id`, `image`, `name`, `country`, `community`, `temp_v_date`, `perp_v_date`, `deaconate_date`) VALUES
(55, 'photo9.jpeg', '  Fr John Kisumba  ', '  Uganda  ', ' done ', '  12 June 2015  ', '   01 january 2012 ', '   14 June 2015 '),
(56, 'MoniK.jfif', 'Tsongo', '  Tanzania', 'Emmanuel House', '3 June 2022', NULL, NULL),
(57, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL, NULL),
(58, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL, NULL),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL, NULL),
(62, 'photo5.jpeg', 'Dieudonne', '  Kenya', 'Emmanuel House', '12 June 2015', '14 July 2022', '  14 June 2015');

-- --------------------------------------------------------

--
-- Structure de la table `donation_formation`
--

CREATE TABLE `donation_formation` (
  `id` int(11) NOT NULL,
  `donation` int(100) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation_formation`
--

INSERT INTO `donation_formation` (`id`, `donation`, `currency`, `fname`, `lname`, `phone`, `email`, `town`, `country`, `relation`) VALUES
(1, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540111111111', 'dieudonne@gmail.com', 'Mombasa', 'AZ', 'Religious a.a'),
(2, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(3, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(4, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(5, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(6, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(7, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(8, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(9, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(10, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Nakuru', '  ', 'Friend'),
(11, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(12, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(13, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(14, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(15, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(16, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend');

-- --------------------------------------------------------

--
-- Structure de la table `donation_parishes`
--

CREATE TABLE `donation_parishes` (
  `id` int(11) NOT NULL,
  `donation` int(100) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation_parishes`
--

INSERT INTO `donation_parishes` (`id`, `donation`, `currency`, `fname`, `lname`, `phone`, `email`, `town`, `country`, `relation`) VALUES
(1, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540111111111', 'dieudonne@gmail.com', 'Mombasa', 'AZ', 'Religious a.a'),
(2, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(3, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(4, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(5, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(6, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(7, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(8, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(9, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(10, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Nakuru', '  ', 'Friend'),
(11, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(12, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(13, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(14, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(15, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(16, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend');

-- --------------------------------------------------------

--
-- Structure de la table `donation_shrines`
--

CREATE TABLE `donation_shrines` (
  `id` int(11) NOT NULL,
  `donation` int(100) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation_shrines`
--

INSERT INTO `donation_shrines` (`id`, `donation`, `currency`, `fname`, `lname`, `phone`, `email`, `town`, `country`, `relation`) VALUES
(1, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540111111111', 'dieudonne@gmail.com', 'Mombasa', 'AZ', 'Religious a.a'),
(2, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(3, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(4, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(5, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(6, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(7, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(8, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(9, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(10, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Nakuru', '  ', 'Friend'),
(11, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(12, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(13, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(14, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(15, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(16, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(17, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(18, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(19, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(20, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(21, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(22, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(23, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(24, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(25, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(26, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(27, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend'),
(28, 2000, 'KSH', 'Juju', 'Kath', ' +2540111111111', 'tsongo@gmail.com', 'Mombasa', 'Australia', 'Friend');

-- --------------------------------------------------------

--
-- Structure de la table `donation_socialworks`
--

CREATE TABLE `donation_socialworks` (
  `id` int(11) NOT NULL,
  `donation` int(100) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation_socialworks`
--

INSERT INTO `donation_socialworks` (`id`, `donation`, `currency`, `fname`, `lname`, `phone`, `email`, `town`, `country`, `relation`) VALUES
(1, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540111111111', 'dieudonne@gmail.com', 'Mombasa', 'AZ', 'Religious a.a'),
(2, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(3, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(4, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(5, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(6, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(7, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(8, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(9, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(10, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Nakuru', '  ', 'Friend'),
(11, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(12, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(13, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(14, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(15, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(16, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend');

-- --------------------------------------------------------

--
-- Structure de la table `donation_vocation`
--

CREATE TABLE `donation_vocation` (
  `id` int(11) NOT NULL,
  `donation` int(100) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation_vocation`
--

INSERT INTO `donation_vocation` (`id`, `donation`, `currency`, `fname`, `lname`, `phone`, `email`, `town`, `country`, `relation`) VALUES
(1, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540111111111', 'dieudonne@gmail.com', 'Mombasa', 'AZ', 'Religious a.a'),
(2, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(3, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(4, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(5, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(6, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(7, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(8, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(9, 50000, 'KSH', 'kathembo', 'Tsongo', '+254025550121', 'dio@gmail.com', 'Nakuru', 'BY', 'Religious a.a'),
(10, 50000, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Nakuru', '  ', 'Friend'),
(11, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(12, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(13, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(14, 20000, 'KSH', 'Juju', 'Kath', '+25489696857', 'dieudonne@gmail.com', 'Kisumu', 'KE', 'Friend'),
(15, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend'),
(16, 12, 'KSH', 'kathembo', 'Tsongo', ' +2540000000022 ', 'dio@gmail.com', 'Kisumu', 'DZ', 'Friend');

-- --------------------------------------------------------

--
-- Structure de la table `ecumenism`
--

CREATE TABLE `ecumenism` (
  `id` int(11) NOT NULL,
  `articletitle` varchar(100) DEFAULT NULL,
  `articledescription` text DEFAULT NULL,
  `ecumenism_image` varchar(50) DEFAULT NULL,
  `intro_title` varchar(50) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `intro_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ecumenism`
--

INSERT INTO `ecumenism` (`id`, `articletitle`, `articledescription`, `ecumenism_image`, `intro_title`, `video`, `intro_description`) VALUES
(2, '      Consecration of our outstation      ', '      A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the      ', 'cq5dam.thumbnail.cropped.1500.844.jpeg', '  what is ecumenism', ' https://www.youtube.com/embed/xMAQb2DyWVI', '              The collaboration between Assumptionist Religious and Laypeople is not something new in the Congregation as well as in East Africa Region. This collaboration is not a mere dream; it is rather a reality. Indeed, it is getting deeper and deeper in the minds of both religious and Laypeople. Of course, it has been raised to the status of alliance Lay-Religious. For many years, the Lay were not but workers in assumptionist institutions, benefactors or just friends of the Augustinians of the Assumption. Nowadays, especially from the last two General Chapters (2005 and 2011), they have become members of the Assumptionist Family, sharing the same Charism and spirituality with us.        ');

-- --------------------------------------------------------

--
-- Structure de la table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emails`
--

INSERT INTO `emails` (`id`, `email`, `subject`, `message`) VALUES
(6, 'didod@gmail.com', 'Greetings', 'Hope you are fine there padre'),
(7, 'didod@gmail.com', 'Greetings', 'Hope you are fine there padre'),
(8, 'dieudonnetsongo@gmail.com', 'Greetings', 'kkjkjkjkjkjjk');

-- --------------------------------------------------------

--
-- Structure de la table `email_kenya`
--

CREATE TABLE `email_kenya` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `email_kenya`
--

INSERT INTO `email_kenya` (`id`, `email`, `subject`, `message`) VALUES
(6, 'didod@gmail.com', 'Greetings', 'Hope you are fine there padre'),
(7, 'didod@gmail.com', 'Greetings', 'Hope you are fine there padre'),
(8, 'dieudonnetsongo@gmail.com', 'Greetings', 'kkjkjkjkjkjjk');

-- --------------------------------------------------------

--
-- Structure de la table `email_tanzania`
--

CREATE TABLE `email_tanzania` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `email_tanzania`
--

INSERT INTO `email_tanzania` (`id`, `email`, `subject`, `message`) VALUES
(1, 'dieudonnetsongo@gmail.com', 'Greetings', 'Hope this email finds you well. I have been trying to reach you because I am'),
(2, 'dieudonnetsongo@gmail.com', 'Greetings', 'Hello Padre. Here we are doing well. Hope you too are doing well there in Uganda'),
(3, 'didod@gmail.com', 'Greetings', 'hjhjhhjhhj');

-- --------------------------------------------------------

--
-- Structure de la table `email_uganda`
--

CREATE TABLE `email_uganda` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `email_uganda`
--

INSERT INTO `email_uganda` (`id`, `email`, `subject`, `message`) VALUES
(1, 'dieudonnetsongo@gmail.com', 'Greetings', 'Hope this email finds you well. I have been trying to reach you because I am'),
(2, 'dieudonnetsongo@gmail.com', 'Greetings', 'Hello Padre. Here we are doing well. Hope you too are doing well there in Uganda'),
(3, 'songo@gmail.com', 'Greetings', 'Hello padre. Hope you are fine. I wish you a happy feast of St Monica');

-- --------------------------------------------------------

--
-- Structure de la table `europ_location`
--

CREATE TABLE `europ_location` (
  `id` int(11) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `no_community` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `europ_location`
--

INSERT INTO `europ_location` (`id`, `country`, `no_community`) VALUES
(47, 'Venus', '6'),
(49, 'ENGLAND', '4'),
(50, 'FRANCE', '7'),
(51, 'GREECE', '2');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`) VALUES
(1, ';poiuu', '2022-11-09 00:00:00', '2022-11-10 00:00:00'),
(3, 'Community meeting', '2022-11-03 00:00:00', '2022-11-04 00:00:00'),
(4, 'mass', '2022-11-03 17:00:00', '2022-11-04 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `form_vocation`
--

CREATE TABLE `form_vocation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `parish` varchar(200) NOT NULL,
  `diocese` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `form_vocation`
--

INSERT INTO `form_vocation` (`id`, `name`, `email`, `phone`, `country`, `parish`, `diocese`, `password`, `image`) VALUES
(38, 'Dieudonne', 'dieudonnetsongo@gmail.com', '0706571995', 'KENYA', 'Monica', 'NAIROBI', 'e10adc3949ba59abbe56e057f20f883e', '276047621_148089111025215_6676395024830516915_n.jpg'),
(40, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '96e79218965eb72c92a549dd5a330112', 'images.jfif'),
(41, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '96e79218965eb72c92a549dd5a330112', 'images.jfif'),
(42, 'Tsongo', 'dieudonnetsongo@gmail.com', '1111111', 'KENYA', 'Monica', 'NAIROBI', '1111111', 'kizito.jpg'),
(43, 'Tsongo', 'dieudonnetsongo@gmail.com', '1111111', 'KENYA', 'Monica', 'NAIROBI', '1111111', 'kizito.jpg'),
(44, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '111111', 'images.jfif'),
(45, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '111111', 'images.jfif'),
(46, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '111111', 'images.jfif'),
(47, 'Tsongo', 'dieudonnetsongo@gmal.com', '0787991880', 'UGANDA', 'Monica', 'Arusha', '111111', 'images.jfif');

-- --------------------------------------------------------

--
-- Structure de la table `general_council`
--

CREATE TABLE `general_council` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `general_council`
--

INSERT INTO `general_council` (`id`, `image`, `title`, `description`) VALUES
(27, 'lay4.jpg', '   FR MIGUEL', '         Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralem'),
(28, 'jesus.jpg', 'BR DIDIER', '    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, '),
(40, 'photo4.jpeg', '  Fr BENOIT GRIERE General superior', '  Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on'),
(41, 'photo2.jpeg', 'Fr THIERRY KAHONGYA Assistant General', 'Life is a characteristic that distinguishes physical entities that have biological processes, such as signaling and self-sustaining processes, from those that do not, either because such functions have ceased (they have died) or because they never had suc');

-- --------------------------------------------------------

--
-- Structure de la table `lay`
--

CREATE TABLE `lay` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lay`
--

INSERT INTO `lay` (`id`, `image`, `description`, `email`, `country`, `phone`, `name`) VALUES
(28, 'churche.png', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o', NULL, NULL, NULL, NULL),
(39, 'jesus.jpg', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lay_form`
--

CREATE TABLE `lay_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `parish` varchar(200) NOT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lay_form`
--

INSERT INTO `lay_form` (`id`, `fname`, `email`, `phone`, `country`, `parish`, `lname`, `message`) VALUES
(1, ' fsfsf ', 'dieudonnetsongo@gmail.com', ' 889665 ', ' klklklkl ', ' hjhjhjh ', NULL, NULL),
(2, 'kathembo', 'dieudonnetsongo@gmail.com', '+254025550121', '  Kenya', 'Monica', NULL, NULL),
(3, 'kathembo', 'didod@gmail.com', '+254025550121', '  Kenya', 'St Monica', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lay_groups`
--

CREATE TABLE `lay_groups` (
  `id` int(11) NOT NULL,
  `lay_image` varchar(200) DEFAULT NULL,
  `intro_title` varchar(220) NOT NULL,
  `intro_description` varchar(200) NOT NULL,
  `articletitle` varchar(200) NOT NULL,
  `articledescription` text NOT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lay_groups`
--

INSERT INTO `lay_groups` (`id`, `lay_image`, `intro_title`, `intro_description`, `articletitle`, `articledescription`, `video`) VALUES
(1, 'WhatsApp Image 2022-08-11 at 9.32.20 PM.jpeg', '  The Mission of Lay People', '         Fr D’Alzon understood that: -	 Laypeople are part of Christ’s body.  -	Through their baptism, they are God’s people;  -	They share in the priestly, prophetic, and kingly functions of Christ. ', ' D\'Alzon willing to create a community where lay and religious assumptionists would live together ', '    For the sake of the Reign of God, Father d’Alzon went as far as proposing a community of Laypeople and religious together. That was his idea even before the birth of the Congregation. He might have gotten that idea from St Augustsine who is said to have had the same thought of such a community. For more details you can read the letter of Father d’Alzon to Mother Marie Eugenie of 1st October 1845. Now the question we can ask ourselves is this: Could this work in our African context? May be yes. May be no. Africa is a continent is more of a family. So living religious and lay people under the same roof would not be an issue. However, in our context, without giving more priority to such a community, as Africans, we rather find more important and full of meaning the community as a family in a wider sense: the Family of God’s children. Thus Lay Assumptionists, as far as they belong to the larger Family of the Assumption, or insofar as they take an oath to become members of the Family, are not less Assumptionists. What is central for both religious and lay is the sharing of the Spirit of the Assumption and the awareness of belonging to the same Family. This is a call to engage in the apostolate together in mutual support and respect. ', '   https://www.youtube.com/embed/NZZ4xpmkvhA   ');

-- --------------------------------------------------------

--
-- Structure de la table `novices`
--

CREATE TABLE `novices` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `parish` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `novices`
--

INSERT INTO `novices` (`id`, `image`, `name`, `country`, `diocese`, `parish`) VALUES
(56, 'photo6.jpeg', '  Tsongo  ', '    Tanzania kklklkkllkk ', ' Emmanuel House ', ' 3 June 2022 '),
(65, 'photo8.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(66, 'photo5OK.jpg', 'Dieudonne', '  Kenya', '    Digodigo', 'Milimani'),
(69, 'photo11.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(70, 'photo10.jpeg', 'Dieudonne', '  Uganda', 'NAIROBI', '       St Augu '),
(71, 'photo7.jpeg', 'Tsongo', '  Tanzania', '    Digodigo', 'Monica'),
(73, 'kizito.jpg', 'Vincent', 'Uganda', 'Kampala', 'Kyabaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `noviciate`
--

CREATE TABLE `noviciate` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `descriptionvideo` varchar(150) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noviciate`
--

INSERT INTO `noviciate` (`id`, `photo1`, `description1`, `photo2`, `description2`, `descriptionvideo`, `video`) VALUES
(5, 'photo11.jpeg', ' The image of postulancy building ', 'photo3OKOK.jpg', ' Conversion of st Peter ', '            Novice\'s master giving a message for the year            ', ' https://www.youtube.com/embed/NZZ4xpmkvhA ');

-- --------------------------------------------------------

--
-- Structure de la table `noviciate_infor`
--

CREATE TABLE `noviciate_infor` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `article` text DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `description1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noviciate_infor`
--

INSERT INTO `noviciate_infor` (`id`, `photo1`, `article`, `photo2`, `description2`, `description1`) VALUES
(4, 'photo4.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'photo5.jpeg', '  Conversion of st Peter  ', '  The image of postulancy building  '),
(5, 'photo1.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'bayard1.jpg', ' Conversion of st Peter ', ' The image of postulancy building ');

-- --------------------------------------------------------

--
-- Structure de la table `oceanic_location`
--

CREATE TABLE `oceanic_location` (
  `id` int(11) NOT NULL,
  `country` varchar(250) DEFAULT NULL,
  `no_community` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `oceanic_location`
--

INSERT INTO `oceanic_location` (`id`, `country`, `no_community`) VALUES
(47, 'Urluondo', '3'),
(49, 'VIET-NAM', '2'),
(50, 'VENESUELA', '5');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `temp_v_date` varchar(200) DEFAULT NULL,
  `perp_v_date` varchar(200) DEFAULT NULL,
  `deaconate_date` varchar(200) DEFAULT NULL,
  `priesthood_date` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `image`, `name`, `country`, `community`, `temp_v_date`, `perp_v_date`, `deaconate_date`, `priesthood_date`, `message`) VALUES
(64, 'MoniK.jfif', '      Father  John Kiarie   ', '         Kenya       ', '      Njiru    ', '        12 June       ', '        01 january 2012      ', '        14 June 2015      ', '     14 July 2019  ', '    The evangelist is actually putting it clear that Elizabeth cried in a loud voice when Virgin Mary visited her: “For at the moment the sound of your greeting reached my ears, the infant in my womb leaped for joy…” These words of Elizabeth show how the presence of Jesus is really coming to her as a gift of a real Joy. Even the infant in the womb of Elizabeth noticed the presence of Jesus in the family.  This is one of the greatest gift that Elizabeth received throughout her life, to be greeted by the mother of the Lord.  '),
(68, 'photo4.jpeg', 'Father Jean-Marie Meso', '   Kenya ', ' Emmanuel House ', ' 12 June 2015 ', ' 14 July 2022 ', ' 17 October 2023 ', '4 November 2028', ' The evangelist is actually putting it clear that Elizabeth cried in a loud voice when Virgin Mary visited her: “For at the moment the sound of your greeting reached my ears, the infant in my womb leaped for joy…” These words of Elizabeth show how the presence of Jesus is really coming to her as a gift of a real Joy. Even the infant in the womb of Elizabeth noticed the presence of Jesus in the family.  This is one of the greatest gift that Elizabeth received throughout her life, to be greeted by the mother of the Lord.  ');

-- --------------------------------------------------------

--
-- Structure de la table `parishes`
--

CREATE TABLE `parishes` (
  `id` int(11) NOT NULL,
  `building` varchar(50) DEFAULT NULL,
  `parish_name` varchar(50) DEFAULT NULL,
  `parish_description` text DEFAULT NULL,
  `articletitle` varchar(100) DEFAULT NULL,
  `articledescription` text DEFAULT NULL,
  `parish_priest` varchar(50) DEFAULT NULL,
  `parish_church_council` varchar(50) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `contact1` varchar(100) DEFAULT NULL,
  `contact2` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `christians` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parishes`
--

INSERT INTO `parishes` (`id`, `building`, `parish_name`, `parish_description`, `articletitle`, `articledescription`, `parish_priest`, `parish_church_council`, `video`, `contact1`, `contact2`, `email`, `christians`) VALUES
(1, 'photo1.jpeg', '  Blessed Pavel  School', '  The main teaching in the gospel of today is all about the seed: Two parables are found in the gospel. The Seed growing by itself and the Mustard Seed. Actually by these parables Jesus is trying to show us how God’s kingdom will grow. when he says: “…and the seed would sprout and grow…” (v. 27). His message is clear: The Kingdom of God even if it requires our collaboration is first and foremost, a grace and a gift coming from God. It is not primarily a product of human effort.  ', '  Consecration of our outstation  ', '    This Emmanuel, accepted to make His dwelling among us and to become like us so that we too, may become like Him: “Holy as he is Holy”. Finding the celebration of today very important, our Church suggests that we celebrate three Masses: at midnight, at dawn and at daytime and each with its own readings. While for midnight and dawn the gospel readings are from Luke and telling of the Christmas story, for the daytime Mass we read the prologue of John which tells us about the coming of the Almighty God into our world. The cold and comfortless cave of Bethlehem was where the Eternal Word stepped into human history and becomes a member of our human race. This shows us how great the love of God to each one of us is.  As we can read in the first reading, the prophet Isaiah is like prophesying about the arrival of that gift from God, a gift coming as a solution to our problems. Back to the historical context of the Israelites, who had been victims of number of sufferings, slavery, living many years out of their land  ', 'photo7.jpeg', 'photo3.jpeg', '  https://www.youtube.com/embed/NZZ4xpmkvhA  ', '   +254789562011  ', '  +254758968741  ', 'dieudonne@gmail.com', 'photo8.jpeg'),
(2, 'photo2.jpeg', '  Blessed Pavel  School', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Consecration of our outstation', 'A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the', 'photo7.jpeg', 'photo3.jpeg', 'https://www.youtube.com/embed/NZZ4xpmkvhA', ' +25478000000', '+254758968741', 'dieudonnetsong@gmail.com', 'photo2.jpeg'),
(3, 'photo2.jpeg', '  Blessed Pavel  School', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Consecration of our outstation', 'A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the people and celebrating the sacraments. In the exercise of his office the Parish Priest acts under the authority of the diocesan Bishop.A parish is a community of Christ\'s faithful whose pastoral care is entrusted to a Parish Priest. He is the proper pastor of the community, caring for the', 'photo7.jpeg', 'photo3.jpeg', 'https://www.youtube.com/embed/NZZ4xpmkvhA', ' +25478000000', '+254758968741', 'dieudonnetsong@gmail.com', 'photo2.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `perpetual_vows`
--

CREATE TABLE `perpetual_vows` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `temp_v_date` varchar(200) DEFAULT NULL,
  `perp_v_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `perpetual_vows`
--

INSERT INTO `perpetual_vows` (`id`, `image`, `name`, `country`, `community`, `temp_v_date`, `perp_v_date`) VALUES
(53, 'photo7.jpeg', '  Dieudonne  ', '    Kenya  ', ' done ', '  12 June 2015  ', NULL),
(54, 'photo2.jpeg', ' Fr Jovic ', '   Tanzania ', ' done ', ' 12 June 2015 ', NULL),
(55, 'photo6.jpeg', 'Fr John Kisumba', 'Uganda', 'done', '12 June 2015', NULL),
(56, 'photo5.jpeg', ' Tsongo ', '   Tanzania kklklkkllkk', ' Emmanuel House ', ' 3 June 2022 ', '  '),
(57, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(61, 'photo4.jpeg', ' St Monica Njiru Parish ', '   Kenya ', ' Emmanuel JJJJJJ', ' 12 June 2015 ', ' 14 July 2022 ');

-- --------------------------------------------------------

--
-- Structure de la table `philosophers`
--

CREATE TABLE `philosophers` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `parish` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `philosophers`
--

INSERT INTO `philosophers` (`id`, `image`, `name`, `country`, `diocese`, `parish`) VALUES
(66, 'photo5OK.jpg', 'Dieudonne', '  Kenya', '    Digodigo', 'Milimani'),
(69, 'photo11.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(70, 'photo10.jpeg', 'Dieudonne', '  Uganda', 'NAIROBI', '       St Augu '),
(71, 'photo7.jpeg', 'Tsongo', '  Tanzania', '    Digodigo', 'Monica'),
(72, 'lay6.jfif', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(73, 'lay8.jfif', ' St Monica Njiru Parish ', '   Kenya ', '    Digodigo', '       St Augu ');

-- --------------------------------------------------------

--
-- Structure de la table `philosophy`
--

CREATE TABLE `philosophy` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `descriptionvideo` varchar(150) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `philosophy`
--

INSERT INTO `philosophy` (`id`, `photo1`, `description1`, `photo2`, `description2`, `descriptionvideo`, `video`) VALUES
(5, 'photo11.jpeg', ' The image of postulancy building ', 'photo3OKOK.jpg', ' Conversion of st Peter ', '            Novice\'s master giving a message for the year            ', ' https://www.youtube.com/embed/NZZ4xpmkvhA ');

-- --------------------------------------------------------

--
-- Structure de la table `philosophy_infor`
--

CREATE TABLE `philosophy_infor` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `article` text DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `description1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `philosophy_infor`
--

INSERT INTO `philosophy_infor` (`id`, `photo1`, `article`, `photo2`, `description2`, `description1`) VALUES
(4, 'photo4.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'photo5.jpeg', '  Conversion of st Peter  ', '  The image of postulancy building  '),
(5, 'photo1.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'bayard1.jpg', ' Conversion of st Peter ', ' The image of postulancy building ');

-- --------------------------------------------------------

--
-- Structure de la table `phone_kenya`
--

CREATE TABLE `phone_kenya` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `phone_tanzania`
--

CREATE TABLE `phone_tanzania` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `phone_uganda`
--

CREATE TABLE `phone_uganda` (
  `id` int(11) NOT NULL,
  `contact1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `postulancy`
--

CREATE TABLE `postulancy` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `descriptionvideo` varchar(150) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postulancy`
--

INSERT INTO `postulancy` (`id`, `photo1`, `description1`, `photo2`, `description2`, `descriptionvideo`, `video`) VALUES
(1, 'jesus.jpg', '   The photo for the community Building   ', 'lay4.jpg', 'Photo for the team formaters ', '       The message for the Year given the postulant master', '      https://www.youtube.com/embed/NZZ4xpmkvhA      ');

-- --------------------------------------------------------

--
-- Structure de la table `postulancy_infor`
--

CREATE TABLE `postulancy_infor` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `article` text DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `description1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postulancy_infor`
--

INSERT INTO `postulancy_infor` (`id`, `photo1`, `article`, `photo2`, `description2`, `description1`) VALUES
(4, 'photo3OKOK.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'photo4.jpeg', ' Conversion of st Peter ', ' The image of postulancy building ');

-- --------------------------------------------------------

--
-- Structure de la table `postulants`
--

CREATE TABLE `postulants` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `parish` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postulants`
--

INSERT INTO `postulants` (`id`, `image`, `name`, `country`, `diocese`, `parish`) VALUES
(56, 'photo5.jpeg', ' Tsongo ', '   Tanzania kklklkkllkk', ' Emmanuel House ', ' 3 June 2022 '),
(61, 'photo4.jpeg', ' St Monica Njiru Parish ', '   Kenya ', ' Emmanuel JJJJJJ', ' 12 June 2015 '),
(65, 'photo8.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(66, 'photo5OK.jpg', 'Dieudonne', '  Kenya', '    Digodigo', 'Milimani');

-- --------------------------------------------------------

--
-- Structure de la table `post_philosophers`
--

CREATE TABLE `post_philosophers` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `parish` varchar(100) DEFAULT NULL,
  `current_cty` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post_philosophers`
--

INSERT INTO `post_philosophers` (`id`, `image`, `name`, `country`, `diocese`, `parish`, `current_cty`) VALUES
(66, 'photo5OK.jpg', 'Dieudonne', '  Kenya', '    Digodigo', 'Milimani', NULL),
(69, 'photo11.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica', NULL),
(70, 'photo10.jpeg', 'Dieudonne', '  Uganda', 'NAIROBI', '       St Augu ', NULL),
(71, 'photo7.jpeg', 'Tsongo', '  Tanzania', '    Digodigo', 'Monica', NULL),
(72, 'lay6.jfif', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica', NULL),
(73, 'lay8.jfif', ' St Monica Njiru Parish ', '   Kenya ', '    Digodigo', '       St Augu ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `post_philosophy`
--

CREATE TABLE `post_philosophy` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `descriptionvideo` varchar(150) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post_philosophy`
--

INSERT INTO `post_philosophy` (`id`, `photo1`, `description1`, `photo2`, `description2`, `descriptionvideo`, `video`) VALUES
(5, 'photo11.jpeg', ' The image of postulancy building ', 'photo3OKOK.jpg', ' Conversion of st Peter ', '            Novice\'s master giving a message for the year            ', ' https://www.youtube.com/embed/NZZ4xpmkvhA ');

-- --------------------------------------------------------

--
-- Structure de la table `post_philosophy_infor`
--

CREATE TABLE `post_philosophy_infor` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `article` text DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `description1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post_philosophy_infor`
--

INSERT INTO `post_philosophy_infor` (`id`, `photo1`, `article`, `photo2`, `description2`, `description1`) VALUES
(4, 'photo4.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'photo5.jpeg', '  Conversion of st Peter  ', '  The image of postulancy building  '),
(5, 'photo1.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'bayard1.jpg', ' Conversion of st Peter ', ' The image of postulancy building ');

-- --------------------------------------------------------

--
-- Structure de la table `priests`
--

CREATE TABLE `priests` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `temp_v_date` varchar(200) DEFAULT NULL,
  `perp_v_date` varchar(200) DEFAULT NULL,
  `deaconate_date` varchar(200) DEFAULT NULL,
  `priesthood_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `priests`
--

INSERT INTO `priests` (`id`, `image`, `name`, `country`, `community`, `temp_v_date`, `perp_v_date`, `deaconate_date`, `priesthood_date`) VALUES
(64, 'photo3OKOK.jpg', 'Dieudonne', '  Kenya', NULL, NULL, NULL, NULL, NULL),
(65, 'photo5.jpeg', 'Tsongo', '  Kenya', 'Emmanuel House', '12 June 2015', '14 July 2022', '17 October 2023', NULL),
(66, '00020.00_00_01_04.Still002.jpg', 'Kabwiku', 'DRC', 'Emmanuel House', '12 June 2015', '14 July 2022', ' 17 Octobe', '4 November 2028'),
(67, 'Charles Muvunga DRCongo (1).JPG', 'Charles', 'Congo Kinshasa', 'Emmanuel House', '12 June 2015', '14 July 2022', '17 October 2023', '4 November 2028');

-- --------------------------------------------------------

--
-- Structure de la table `provincial_administration`
--

CREATE TABLE `provincial_administration` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `provincial_council`
--

CREATE TABLE `provincial_council` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `provincial_council`
--

INSERT INTO `provincial_council` (`id`, `image`, `name`, `title`, `phone`, `email`) VALUES
(1, 'kizito.jpg', '      Fr Henri Kizito Vyamb', 'VP Superior', '+25658965577', 'henri@gmail.com'),
(2, 'Charles Muvunga DRCongo (1).JPG', 'Fr Charles Muvunga', ' VP Secretary', '+25658965588', 'muvunga@gmail.com'),
(3, 'images (1).jfif', ' Fr Benard Yalla Odhiambo', 'VP. Assistant', '+25658965577', 'yalla@gmail.com'),
(5, 'photo4.jpeg', 'Fr. Dominic Kamau', 'VP. Assistant', '07858479654', 'kamau@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `prov_calendar`
--

CREATE TABLE `prov_calendar` (
  `id` int(11) NOT NULL,
  `Date_event` varchar(255) NOT NULL,
  `Event_prepared` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prov_calendar`
--

INSERT INTO `prov_calendar` (`id`, `Date_event`, `Event_prepared`, `Location`) VALUES
(13, '12 / 06 / 2022', 'Ordination', 'Kijenge'),
(14, '21 / 02 / 2022', 'Proncial Meeting ', 'Njiru Kenya'),
(15, '02 / 09 / 2011', 'Ordination', 'Kyabakade');

-- --------------------------------------------------------

--
-- Structure de la table `public_chat`
--

CREATE TABLE `public_chat` (
  `id` int(100) NOT NULL,
  `fromid` varchar(100) DEFAULT NULL,
  `fromName` varchar(200) NOT NULL,
  `messages` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `public_chat`
--

INSERT INTO `public_chat` (`id`, `fromid`, `fromName`, `messages`) VALUES
(170, 'mkt', 'Mohit', 'Hi'),
(171, 'mkt', 'Mohit', 'Gola'),
(172, 'mkt', 'Mohit', 'Hmm'),
(173, 'pkt', 'Prashant', 'okk'),
(174, 'pkt', 'Prashant', 'aur?'),
(175, 'pkt', 'Prashant', 'thik hai na?'),
(176, 'pkt', 'Prashant', 'hiii'),
(177, 'pkt', 'Prashant Kumar Tripathi', 'hii'),
(178, 'pkt', 'Prashant Kumar Tripathi', 'dfdfd'),
(179, 'pkt', 'Prashant Kumar Tripathi', 'dxfsdfsdfs'),
(180, 'pkt', 'Prashant Kumar Tripathi', 'dxf'),
(181, 'pkt', 'Prashant Kumar Tripathi', 'dxf'),
(182, 'pkt', 'Prashant Kumar Tripathi', 'dsfsdfsdf\nDSFSDFS\nDSFSDF\nSDFSDF\nXFSDFSDF\nDFSDF\n'),
(183, 'pkt', 'Prashant Kumar Tripathi', 'how are you'),
(184, 'pkt', 'Prashant Kumar Tripathi', ';;;'),
(185, 'anit', 'Anit', 'Hii, I am Java Developer'),
(186, 'pkt', 'Prashant Kumar Tripathi', 'are bhai bhai'),
(187, 'pkt', 'Prashant Kumar Tripathi', 'Hmm'),
(188, 'pkt', 'Prashant Kumar Tripathi', 'Okk'),
(189, 'pkt', 'Prashant Kumar Tripathi', 'Hmm'),
(190, '', '', 'hfhfhf');

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `pass`, `phone`) VALUES
(1, 'kathembo', 'Tsongo', 'dieudonnetsongo@gmail.com', '1234', '0706571995'),
(2, 'kathembo', 'Tsongo', 'dieudonnetsongo@gmail.com', '1234', '0706571995'),
(3, 'kathembo', 'Tsongo', 'dieudonnetsongo@gmail.com', '1234', '0706571995'),
(4, 'kathembo', 'Tsongo', 'dieudonnetsongo@gmail.com', '1234', '0706571995'),
(5, 'dido', 'Kivu', 'didotsongo@gmail.com', '123123', '+2540266570110'),
(6, 'dido', 'Kivu', 'didotsongo@gmail.com', '123123', '+2540266570110');

-- --------------------------------------------------------

--
-- Structure de la table `reli`
--

CREATE TABLE `reli` (
  `id` int(11) NOT NULL,
  `code` varchar(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reli`
--

INSERT INTO `reli` (`id`, `code`, `email`, `password`, `updated_time`) VALUES
(2, 'MOH8FD5R2P', 'dieudonnetsongo@gmail.com', '1515', '2022-11-22 02:55:14');

-- --------------------------------------------------------

--
-- Structure de la table `religious`
--

CREATE TABLE `religious` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `religious`
--

INSERT INTO `religious` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(1, 'Tsongo', 'dieudonnetsongo@gmail.com', '0706571995', '1234'),
(2, 'Tsongo', 'tsongo@gmail.com', '0706571900', '1111'),
(3, 'Ngugo', 'ngo@gmail.com', '0706571911', '1111');

-- --------------------------------------------------------

--
-- Structure de la table `religious_tb`
--

CREATE TABLE `religious_tb` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `temp_v_date` varchar(100) DEFAULT NULL,
  `perp_v_date` varchar(100) DEFAULT NULL,
  `deaconate_date` varchar(50) DEFAULT NULL,
  `priesthood_date` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `religious_tb`
--

INSERT INTO `religious_tb` (`id`, `image`, `name`, `country`, `community`, `phone`, `code`, `email`, `password`, `updated_time`, `temp_v_date`, `perp_v_date`, `deaconate_date`, `priesthood_date`) VALUES
(6, 'lay3.jpg', ' Dieudonne ', '   Kenya ', ' Emmanuel House ', ' 0706571995 ', 'E5KO8SGJC4', 'dieudonnetsongo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-11-22 11:24:16', ' 12 June 2015 ', ' 14 July 2022 ', '  17 Octobe ', ' 4 November 2028 ');

-- --------------------------------------------------------

--
-- Structure de la table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rule`
--

INSERT INTO `rule` (`id`, `image`, `title`, `description`) VALUES
(40, 'Pelerinage-national_Milad.jpg', '    Rule of Life 1', '   As Assumptionists, we are religious who live in apostolic community. Faithful to our founder, Father d\'Alzon, we choose before all else to work, out of love for Jesus Christ, for the coming of the Reign of God in ourselves and around us.'),
(41, 'téléchargement (1).jfif', '  Rule of Life 2', ' Jesus Christ is qt thte center of our life. We co,,it ourselves to folloz Hi in faith, hope and charity. Like Him, a witness to the Father\'s love and in solidarity with all human beings, the Assumptionist seeks to be a man of faith and a man of his time.'),
(42, 'images (1).jfif', '  Rule of Life 3', 'Christ is the one who gathers us together. We live in community according to the spirit of Saint Augustine: “Before all else, live in a household of perfect harmony, having but one heart and one mind intent on God” (Rule of Saint Augustine, I, 2)'),
(43, 'images.jfif', '  Rule of Life 4', 'The Assumptionist community exists for the coming of the Kingdom. The spirit of the founder impels us to embrace the great causes of God and of man, and to go wherever God is threatened in man and man threatened as the image of God.'),
(44, 'lay7.jfif', '  Rule of Life 5', ' Faithful to the will of Father d’Alzon, our communities are at the service of truth, unity, and charity. In this way, they herald the Kingdom.'),
(45, 'rule2.jfif', '      Rule of Life 6', '     That all may be one as you, Father, are in me and I in you; that they also may be one in us so that the world may believe that you sent me. (Jn 17, 21)  6 Called by Christ, the source of our unity, we choose to live in community according to the Rule');

-- --------------------------------------------------------

--
-- Structure de la table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_image` varchar(100) DEFAULT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `school_description` text DEFAULT NULL,
  `articletitle` varchar(100) DEFAULT NULL,
  `articledescription` text DEFAULT NULL,
  `school_chaplain` varchar(100) DEFAULT NULL,
  `school_teachers` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `contact1` varchar(100) DEFAULT NULL,
  `contact2` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `art_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `schools`
--

INSERT INTO `schools` (`id`, `school_image`, `school_name`, `school_description`, `articletitle`, `articledescription`, `school_chaplain`, `school_teachers`, `video`, `contact1`, `contact2`, `email`, `art_image`) VALUES
(1, 'bayard2OK.jpg', ' Blessed Pavel ', ' The main teaching in the gospel of today is all about the seed: Two parables are found in the gospel. The Seed growing by itself and the Mustard Seed. Actually by these parables Jesus is trying to show us how God’s kingdom will grow. when he says: “…and the seed would sprout and grow…” (v. 27). His message is clear: The Kingdom of God even if it requires our collaboration is first and foremost, a grace and a gift coming from God. It is not primarily a product of human effort. ', ' Consecration of our outstation ', '   This Emmanuel, accepted to make His dwelling among us and to become like us so that we too, may become like Him: “Holy as he is Holy”. Finding the celebration of today very important, our Church suggests that we celebrate three Masses: at midnight, at dawn and at daytime and each with its own readings. While for midnight and dawn the gospel readings are from Luke and telling of the Christmas story, for the daytime Mass we read the prologue of John which tells us about the coming of the Almighty God into our world. The cold and comfortless cave of Bethlehem was where the Eternal Word stepped into human history and becomes a member of our human race. This shows us how great the love of God to each one of us is.  As we can read in the first reading, the prophet Isaiah is like prophesying about the arrival of that gift from God, a gift coming as a solution to our problems. Back to the historical context of the Israelites, who had been victims of number of sufferings, slavery, living many years out of their land ', 'MoniK.jfif', 'photo3.jpeg', ' https://www.youtube.com/embed/NZZ4xpmkvhA ', '  +254789562011 ', ' +254758968741 ', 'dieudonne@gmail.com', 'photo1.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `slidelay`
--

CREATE TABLE `slidelay` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slidelay`
--

INSERT INTO `slidelay` (`id`, `image`) VALUES
(2, 'imagelay2.jpg'),
(4, 'lay7.jpg'),
(5, 'imagelay1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `slidesecumenism`
--

CREATE TABLE `slidesecumenism` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `smalltext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slidesecumenism`
--

INSERT INTO `slidesecumenism` (`id`, `image`, `title`, `smalltext`) VALUES
(34, 'ecu.png', '  Title here', '  Description of the photo'),
(36, 'ecumenis.jpg', 'Title here', 'Description of the caroussel');

-- --------------------------------------------------------

--
-- Structure de la table `slideshome`
--

CREATE TABLE `slideshome` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `smalltext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slideshome`
--

INSERT INTO `slideshome` (`id`, `image`, `title`, `smalltext`) VALUES
(37, '222.jpg', 'Meeting at Rosa Mistica', 'Bayard Press with Assumption in a meeting'),
(38, '257165399.jpg', ' 2nd Day of Meeting', 'Bayard Team with Contributors'),
(40, '503382708.jpg', 'Test and see', 'It is a great joy to experience this life');

-- --------------------------------------------------------

--
-- Structure de la table `slides_orders`
--

CREATE TABLE `slides_orders` (
  `id` int(11) NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `smalltext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slides_orders`
--

INSERT INTO `slides_orders` (`id`, `video`, `title`, `smalltext`) VALUES
(33, '    https://www.youtube.com/embed/NZZ4xpmkvhA', '    Ordination Year 2019', 'The Ordination was presided over by Bishop Kamau, the Auxiliary bishop of Nairobi. We with good mistry to our newly ordained');

-- --------------------------------------------------------

--
-- Structure de la table `temporary_vows`
--

CREATE TABLE `temporary_vows` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `temp_v_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `temporary_vows`
--

INSERT INTO `temporary_vows` (`id`, `image`, `name`, `country`, `community`, `temp_v_date`) VALUES
(58, 'photo2.jpeg', ' Tsongo tDONTO', ' Uganda ', ' Emmanuel House ', ' 3 June 1895'),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022'),
(60, 'photo7.jpeg', 'Dieudonne', '  Kenya', 'Emmanuel House', '12 June 2015'),
(61, 'photo7.jpeg', 'Dieudonne', '  Kenya', 'Emmanuel', '12 June 2015'),
(62, 'photo4.jpeg', 'Dieudonne', '  Kenya', 'Emmanuel House', '3 June 2022');

-- --------------------------------------------------------

--
-- Structure de la table `theologians`
--

CREATE TABLE `theologians` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `diocese` varchar(150) DEFAULT NULL,
  `parish` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theologians`
--

INSERT INTO `theologians` (`id`, `image`, `name`, `country`, `diocese`, `parish`) VALUES
(66, 'photo5OK.jpg', 'Dieudonne', '  Kenya', '    Digodigo', 'Milimani'),
(69, 'photo11.jpeg', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(70, 'photo10.jpeg', 'Dieudonne', '  Uganda', 'NAIROBI', '       St Augu '),
(71, 'photo7.jpeg', 'Tsongo', '  Tanzania', '    Digodigo', 'Monica'),
(72, 'lay6.jfif', 'Dieudonne', '  Kenya', 'NAIROBI', 'Monica'),
(73, 'lay8.jfif', ' St Monica Njiru Parish ', '   Kenya ', '    Digodigo', '       St Augu ');

-- --------------------------------------------------------

--
-- Structure de la table `theology`
--

CREATE TABLE `theology` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `description1` varchar(200) DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `descriptionvideo` varchar(150) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theology`
--

INSERT INTO `theology` (`id`, `photo1`, `description1`, `photo2`, `description2`, `descriptionvideo`, `video`) VALUES
(5, 'photo11.jpeg', ' The image of postulancy building ', 'photo3OKOK.jpg', ' Conversion of st Peter ', '            Novice\'s master giving a message for the year            ', ' https://www.youtube.com/embed/NZZ4xpmkvhA ');

-- --------------------------------------------------------

--
-- Structure de la table `theology_infor`
--

CREATE TABLE `theology_infor` (
  `id` int(11) NOT NULL,
  `photo1` varchar(150) DEFAULT NULL,
  `article` text DEFAULT NULL,
  `photo2` varchar(150) DEFAULT NULL,
  `description2` varchar(150) DEFAULT NULL,
  `description1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theology_infor`
--

INSERT INTO `theology_infor` (`id`, `photo1`, `article`, `photo2`, `description2`, `description1`) VALUES
(4, 'photo3OKOK.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'photo4.jpeg', ' Conversion of st Peter ', ' The image of postulancy building ');

-- --------------------------------------------------------

--
-- Structure de la table `triplelove`
--

CREATE TABLE `triplelove` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `triplelove`
--

INSERT INTO `triplelove` (`id`, `image`, `title`, `description`) VALUES
(28, 'jesus.jpg', '      LOVE OF OUR LORD', '      Our Lord is the perfect model of all spiritual life; First as God, since ....'),
(39, 'mary.jfif', '      LOVE OF THE B.V.MARY', '              Our love of Mary flows from our loce of Christ: we love her because ...'),
(42, 'churche.png', '   LOVE OF THE CHURCH', '  We love the Chuch because Christ loved her. Our love of the Church ....');

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20221123032529_BBT 2204- IS Project 1 Course Outline.pdf', 'BBT 2204- IS Project 1 Course Outline.pdf'),
(2, '20221123032601_112721_CONCEPT_NOTE.odt', '112721_CONCEPT_NOTE.odt'),
(3, '20221123034732_cover.docx', 'cover.docx'),
(4, '20221123035423_2232113.png', '2232113.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `name`, `mobile`, `email`, `pass`) VALUES
(50, '1', 'Dieudonne', 706571995, 'dido@gmail.com', '1234'),
(51, '12', 'Die', 45635, 'etsongo@gmail.com', '123'),
(52, '13', 'Tsi', 45000, 'ngo@gmail.com', '123123'),
(53, '56', 'Tson', 4563, 'netsongo@gmail.com', '1414'),
(54, '45', 'Tsongoggg', 45632, 'nnetsongo@gmail.com', '1452'),
(55, '78', 'Tsongo', 112521, 'ongo@gmail.com', '1234'),
(56, '455', 'jejeje', 4546646, 'sstsongo@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `user_status`
--

CREATE TABLE `user_status` (
  `user` varchar(200) DEFAULT NULL,
  `last_seen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_status`
--

INSERT INTO `user_status` (`user`, `last_seen`) VALUES
('pkt', '2017-12-29 00:01:40'),
('mkt', '2017-12-28 19:52:31'),
('anit', '2017-12-29 00:08:49'),
('1', '2022-11-17 01:22:33'),
('12', NULL),
('13', NULL),
('56', NULL),
('45', NULL),
('78', NULL),
('455', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vocation`
--

CREATE TABLE `vocation` (
  `id` int(11) NOT NULL,
  `vd_image` varchar(50) DEFAULT NULL,
  `vd_name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vocation`
--

INSERT INTO `vocation` (`id`, `vd_image`, `vd_name`, `title`, `message`) VALUES
(1, 'lay8.jfif', 'Fr Joachim ( VD Uganda) ', '   word by the vovational director  ', '   “For at the moment the sound of your greeting reached my ears, the infant in my womb leaped for joy…” These words of Elizabeth show how the presence of Jesus is really coming to her as a gift of a real Joy. Even the infant in the womb of Elizabeth noticed the presence of Jesus in the family.  This is one of the greatest gift that Elizabeth received throughout her life, to be greeted by the mother of the Lord.    '),
(2, 'rule1.jfif', 'Fr Patric Mabu', 'Message by the VD Kenya', ' The evangelist is actually putting it clear that Elizabeth cried in a loud voice when Virgin Mary visited her: “For at the moment the sound of your greeting reached my ears, the infant in my womb leaped for joy…” These words of Elizabeth show how the presence of Jesus is really coming to her as a gift of a real Joy. Even the infant in the womb of Elizabeth noticed the presence of Jesus in the family.  This is one of the greatest gift that Elizabeth received throughout her life, to be greeted by the mother of the Lord.  ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `africa_location`
--
ALTER TABLE `africa_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `america_location`
--
ALTER TABLE `america_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `asia_location`
--
ALTER TABLE `asia_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communitieskenya`
--
ALTER TABLE `communitieskenya`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communitiestanzania`
--
ALTER TABLE `communitiestanzania`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communitiesuganda`
--
ALTER TABLE `communitiesuganda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_kenya`
--
ALTER TABLE `contact_kenya`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_tanzania`
--
ALTER TABLE `contact_tanzania`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_uganda`
--
ALTER TABLE `contact_uganda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deacons`
--
ALTER TABLE `deacons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation_formation`
--
ALTER TABLE `donation_formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation_parishes`
--
ALTER TABLE `donation_parishes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation_shrines`
--
ALTER TABLE `donation_shrines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation_socialworks`
--
ALTER TABLE `donation_socialworks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation_vocation`
--
ALTER TABLE `donation_vocation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecumenism`
--
ALTER TABLE `ecumenism`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email_kenya`
--
ALTER TABLE `email_kenya`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email_tanzania`
--
ALTER TABLE `email_tanzania`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email_uganda`
--
ALTER TABLE `email_uganda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `europ_location`
--
ALTER TABLE `europ_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form_vocation`
--
ALTER TABLE `form_vocation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `general_council`
--
ALTER TABLE `general_council`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lay`
--
ALTER TABLE `lay`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lay_form`
--
ALTER TABLE `lay_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lay_groups`
--
ALTER TABLE `lay_groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `novices`
--
ALTER TABLE `novices`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noviciate`
--
ALTER TABLE `noviciate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noviciate_infor`
--
ALTER TABLE `noviciate_infor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oceanic_location`
--
ALTER TABLE `oceanic_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parishes`
--
ALTER TABLE `parishes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `perpetual_vows`
--
ALTER TABLE `perpetual_vows`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `philosophers`
--
ALTER TABLE `philosophers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `philosophy`
--
ALTER TABLE `philosophy`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `philosophy_infor`
--
ALTER TABLE `philosophy_infor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phone_kenya`
--
ALTER TABLE `phone_kenya`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phone_tanzania`
--
ALTER TABLE `phone_tanzania`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phone_uganda`
--
ALTER TABLE `phone_uganda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postulancy`
--
ALTER TABLE `postulancy`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postulancy_infor`
--
ALTER TABLE `postulancy_infor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postulants`
--
ALTER TABLE `postulants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_philosophers`
--
ALTER TABLE `post_philosophers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_philosophy`
--
ALTER TABLE `post_philosophy`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_philosophy_infor`
--
ALTER TABLE `post_philosophy_infor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `priests`
--
ALTER TABLE `priests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `provincial_administration`
--
ALTER TABLE `provincial_administration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `provincial_council`
--
ALTER TABLE `provincial_council`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prov_calendar`
--
ALTER TABLE `prov_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `public_chat`
--
ALTER TABLE `public_chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reli`
--
ALTER TABLE `reli`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `religious`
--
ALTER TABLE `religious`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `religious_tb`
--
ALTER TABLE `religious_tb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slidelay`
--
ALTER TABLE `slidelay`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slidesecumenism`
--
ALTER TABLE `slidesecumenism`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slideshome`
--
ALTER TABLE `slideshome`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slides_orders`
--
ALTER TABLE `slides_orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temporary_vows`
--
ALTER TABLE `temporary_vows`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theologians`
--
ALTER TABLE `theologians`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theology`
--
ALTER TABLE `theology`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `theology_infor`
--
ALTER TABLE `theology_infor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `triplelove`
--
ALTER TABLE `triplelove`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vocation`
--
ALTER TABLE `vocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `africa_location`
--
ALTER TABLE `africa_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `america_location`
--
ALTER TABLE `america_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `asia_location`
--
ALTER TABLE `asia_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `communitieskenya`
--
ALTER TABLE `communitieskenya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `communitiestanzania`
--
ALTER TABLE `communitiestanzania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `communitiesuganda`
--
ALTER TABLE `communitiesuganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `contact_kenya`
--
ALTER TABLE `contact_kenya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact_tanzania`
--
ALTER TABLE `contact_tanzania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact_uganda`
--
ALTER TABLE `contact_uganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `deacons`
--
ALTER TABLE `deacons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `donation_formation`
--
ALTER TABLE `donation_formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `donation_parishes`
--
ALTER TABLE `donation_parishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `donation_shrines`
--
ALTER TABLE `donation_shrines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `donation_socialworks`
--
ALTER TABLE `donation_socialworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `donation_vocation`
--
ALTER TABLE `donation_vocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `ecumenism`
--
ALTER TABLE `ecumenism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `email_kenya`
--
ALTER TABLE `email_kenya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `email_tanzania`
--
ALTER TABLE `email_tanzania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `email_uganda`
--
ALTER TABLE `email_uganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `europ_location`
--
ALTER TABLE `europ_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `form_vocation`
--
ALTER TABLE `form_vocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `general_council`
--
ALTER TABLE `general_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `lay`
--
ALTER TABLE `lay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `lay_form`
--
ALTER TABLE `lay_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lay_groups`
--
ALTER TABLE `lay_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `novices`
--
ALTER TABLE `novices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `noviciate`
--
ALTER TABLE `noviciate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `noviciate_infor`
--
ALTER TABLE `noviciate_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `oceanic_location`
--
ALTER TABLE `oceanic_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `parishes`
--
ALTER TABLE `parishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `perpetual_vows`
--
ALTER TABLE `perpetual_vows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `philosophers`
--
ALTER TABLE `philosophers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `philosophy_infor`
--
ALTER TABLE `philosophy_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `phone_kenya`
--
ALTER TABLE `phone_kenya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `phone_tanzania`
--
ALTER TABLE `phone_tanzania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `phone_uganda`
--
ALTER TABLE `phone_uganda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `postulancy`
--
ALTER TABLE `postulancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `postulancy_infor`
--
ALTER TABLE `postulancy_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `postulants`
--
ALTER TABLE `postulants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `post_philosophers`
--
ALTER TABLE `post_philosophers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `post_philosophy`
--
ALTER TABLE `post_philosophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `post_philosophy_infor`
--
ALTER TABLE `post_philosophy_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `priests`
--
ALTER TABLE `priests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `provincial_administration`
--
ALTER TABLE `provincial_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `provincial_council`
--
ALTER TABLE `provincial_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `prov_calendar`
--
ALTER TABLE `prov_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `public_chat`
--
ALTER TABLE `public_chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reli`
--
ALTER TABLE `reli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `religious`
--
ALTER TABLE `religious`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `religious_tb`
--
ALTER TABLE `religious_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `slidelay`
--
ALTER TABLE `slidelay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `slidesecumenism`
--
ALTER TABLE `slidesecumenism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `slideshome`
--
ALTER TABLE `slideshome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `slides_orders`
--
ALTER TABLE `slides_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `temporary_vows`
--
ALTER TABLE `temporary_vows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `theologians`
--
ALTER TABLE `theologians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `theology`
--
ALTER TABLE `theology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `theology_infor`
--
ALTER TABLE `theology_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `triplelove`
--
ALTER TABLE `triplelove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `vocation`
--
ALTER TABLE `vocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
