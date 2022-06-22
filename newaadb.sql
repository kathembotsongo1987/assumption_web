-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 juin 2022 à 07:58
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
(54, 'TOGO', '3');

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
(49, 'CANADA', '1');

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
(50, 'ISRAEL', '2');

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
(51, 'GREECE', '1');

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
(27, 'rule1.jfif', 'FR MIGUEL', '      Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement'),
(28, 'jesus.jpg', 'BR DIDIER', '    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, '),
(39, 'lay4.jpg', 'FR BENOIS GRIERE', '      Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement'),
(40, 'lay8.jfif', 'Fr THIERRY KAHONGYA', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on u');

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
(27, 'mary.jfif', '    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, ', NULL, NULL, NULL, NULL),
(28, 'churche.png', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o', NULL, NULL, NULL, NULL),
(39, 'jesus.jpg', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lay_form`
--

CREATE TABLE `lay_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(200) NOT NULL,
  `parish` varchar(200) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lay_form`
--

INSERT INTO `lay_form` (`id`, `fname`, `lname`, `email`, `phone`, `country`, `parish`, `message`) VALUES
(1, 'fsfsf', 'fsfsf', 'dieudonnetsongo@gmail.com', '889665', 'klklklkl', 'hjhjhjh', 'hjhjhjhjjhj');

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
(1, 'lay4.jpg', '  THE PLACE OF THE LAY IN THE ASSUMPTION', '      The collaboration between Assumptionist Religious and Laypeople is not something new in the Congregation as well as in East Africa Region. This collaboration is not a mere dream; it is rather a ', 'Consecration of our outstation', '  This Emmanuel, accepted to make His dwelling among us and to become like us so that we too, may become like Him: “Holy as he is Holy”. Finding the celebration of today very important, our Church suggests that we celebrate three Masses: at midnight, at dawn and at daytime and each with its own readings. While for midnight and dawn the gospel readings are from Luke and telling of the Christmas story, for the daytime Mass we read the prologue of John which tells us about the coming of the Almighty God into our world. The cold and comfortless cave of Bethlehem was where the Eternal Word stepped into human history and becomes a member of our human race. This shows us how great the love of God to each one of us is.  As we can read in the first reading, the prophet Isaiah is like prophesying about the arrival of that gift from God, a gift coming as a solution to our problems. Back to the historical context of the Israelites, who had been victims of number of sufferings, slavery, living many years out of their land', 'https://www.youtube.com/embed/NZZ4xpmkvhA'),
(2, 'lay6.jfif', '  what is Lay Assumption in Nairobi', '      The collaboration between Assumptionist Religious and Laypeople is not something new in the Congregation as well as in East Africa Region. This collaboration is not a mere dream; it is rather a ', 'Consecration of our outstation', '    The presence of Lay Assumptionists in the Congregation is the fruit of the Holy Spirit. As they undergo the formation, they feel the need to commit their lives to the work of the Kingdom of God. This commitment is officially expressed through the making of an oath, sign of seriousness in what they are doing. In this regard, since the Plenary General Council of the Congregation is being held in Nairobi, the Lay Assumptionist took this opportunity to make an extra mile for their vocation by swearing before God, in the Congregation and in the Church. This great event in the Christian life of the Lay Assumptionist, as well as in the Congregation, started with a retreat which focussed on “Oath: a commitment to a life in Christ” facilitated by Father KASEREKA MUVUNGA Charles. The event itself took place on Sunday June 14, 2015. The mass started at 8:30 in Saint Monica Parish/Njiru. Just before the procession, mister Odhiambo, the chairman of Njiru outstation, announced to the Christian assembly that 13 Lay Assu', 'https://www.youtube.com/embed/vLEMz88joTg');

-- --------------------------------------------------------

--
-- Structure de la table `novices`
--

CREATE TABLE `novices` (
  `id` int(11) NOT NULL DEFAULT 0,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `novices`
--

INSERT INTO `novices` (`id`, `image`, `name`, `country`) VALUES
(57, 'livingOK.jpg', ' Tsongo tDONTO', '  Uganda'),
(58, 'MoniK.jfif', 'Tsongo', 'Uganda'),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda'),
(0, 'photo3OKOK.jpg', 'Dieudonne', '  Kenya'),
(0, 'photo4.jpeg', 'Dieudonne', '  Kenya');

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
(49, 'VIET-NAM', '1');

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
(58, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(60, 'photo3OKOK.jpg', 'Dieudonne', '  Tanzania', 'Emmanuel House', '12 June 2015', '14 July 2022'),
(61, 'photo4.jpeg', ' St Monica Njiru Parish ', '   Kenya ', ' Emmanuel JJJJJJ', ' 12 June 2015 ', ' 14 July 2022 ');

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
(63, 'photo3OK.jpg', 'Dieudonne', '  Tanzania', NULL, NULL, NULL, NULL, NULL),
(64, 'photo3OKOK.jpg', 'Dieudonne', '  Kenya', NULL, NULL, NULL, NULL, NULL),
(65, 'photo5.jpeg', 'Tsongo', '  Kenya', 'Emmanuel House', '12 June 2015', '14 July 2022', '17 October 2023', NULL);

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
  `email` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `provincial_council`
--

INSERT INTO `provincial_council` (`id`, `image`, `name`, `title`, `phone`, `email`, `description`) VALUES
(1, 'kizito.jpg', '   Fr Henri Kizito Vyamb', 'Vice Provincial ', '+25436985745', 'henri@gmail.com', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(2, 'kizito.jpg', 'Fr Henri Kizito Vyambwera', 'Vice Provincial ', '+25436985745', 'henri@gmail.com', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(3, 'kizito.jpg', 'Fr Benard Yalla', 'First Assistant', '+254358985745', 'yalla@gmail.com', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.'),
(4, 'kizito.jpg', 'Fr Dominic Kamau', 'First assistant', '+254358785745', 'kama@gmail.com', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.');

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
(12, ' 26 / 06 / 2022', ' Consacration of the Church', ' Katua Njiru'),
(13, '12 / 06 / 2022', 'Ordination', 'Kijenge');

-- --------------------------------------------------------

--
-- Structure de la table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(5, 'Kasereka Nzuva', 'kisun@gmail.com', '71b3b26aaa319e0cdf6fdb8429c112b0'),
(6, 'Dieudonne Tsongo', 'dieudonnetsongo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Tsongo', 'didd@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf'),
(8, 'Clarisse Sekeravithi', 'sekera@gmail.com', '7bccfde7714a1ebadf06c5f4cea752c1'),
(10, 'assumptionists', 'aainform@gmail.c', '7fe11a347a541890aaccf29bdc380f61');

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
(40, 'MoniK.jfif', ' Rule of Life 1 aa', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor'),
(41, 'rule2.jfif', ' Rule of Life 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(42, 'rule3.jfif', ' Rule of Life 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(43, 'rule4.jpg', ' Rule of Life 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(44, 'rule5.jfif', ' Rule of Life 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(45, 'lay8.jfif', '   Rule of Life 6', '   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol');

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
(2, 'lay4.jpg'),
(4, 'lay7.jfif'),
(5, 'lay8.jfif');

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
(30, '222.jpg', 'Title here', 'A general metting of the Assumptionists with Bayard Publication'),
(31, '257165399.jpg', 'Title here', 'A general metting of the Assumptionists with Bayard Publication'),
(32, '503382708.jpg', 'Title here', 'A general metting of the Assumptionists with Bayard Publication');

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
(27, 'photo9.jpeg', '     LOVE OT THE VIRGIN MARY', '     Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement,'),
(28, 'churche.png', '   LOVE OT THE CHURCH', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o'),
(39, 'jesus.jpg', '     Love of Jesus', '     Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement,');

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `deacons`
--
ALTER TABLE `deacons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `europ_location`
--
ALTER TABLE `europ_location`
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
-- Index pour la table `oceanic_location`
--
ALTER TABLE `oceanic_location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `perpetual_vows`
--
ALTER TABLE `perpetual_vows`
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
-- Index pour la table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slidelay`
--
ALTER TABLE `slidelay`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slideshome`
--
ALTER TABLE `slideshome`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temporary_vows`
--
ALTER TABLE `temporary_vows`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `triplelove`
--
ALTER TABLE `triplelove`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `africa_location`
--
ALTER TABLE `africa_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `america_location`
--
ALTER TABLE `america_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `asia_location`
--
ALTER TABLE `asia_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- AUTO_INCREMENT pour la table `deacons`
--
ALTER TABLE `deacons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `europ_location`
--
ALTER TABLE `europ_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `general_council`
--
ALTER TABLE `general_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `lay`
--
ALTER TABLE `lay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `lay_form`
--
ALTER TABLE `lay_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lay_groups`
--
ALTER TABLE `lay_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oceanic_location`
--
ALTER TABLE `oceanic_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `perpetual_vows`
--
ALTER TABLE `perpetual_vows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `priests`
--
ALTER TABLE `priests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `provincial_administration`
--
ALTER TABLE `provincial_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `provincial_council`
--
ALTER TABLE `provincial_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `prov_calendar`
--
ALTER TABLE `prov_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `slidelay`
--
ALTER TABLE `slidelay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `slideshome`
--
ALTER TABLE `slideshome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `temporary_vows`
--
ALTER TABLE `temporary_vows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `triplelove`
--
ALTER TABLE `triplelove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
