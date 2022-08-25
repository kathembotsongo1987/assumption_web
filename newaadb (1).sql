-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 août 2022 à 08:56
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
(71, 'photo7.jpeg', 'Tsongo', '  Tanzania', '    Digodigo', 'Monica');

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
(49, 'VIET-NAM', '1');

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
(58, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(59, 'MoniK.jfif', 'Tsongo', 'Uganda', 'Emmanuel House', '3 June 2022', NULL),
(60, 'photo3OKOK.jpg', 'Dieudonne', '  Tanzania', 'Emmanuel House', '12 June 2015', '14 July 2022'),
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
(1, 'photo3OKOK.jpg', '      THE PLACE OF THE LAY IN THE ASSUMPTION    ', 'photo9.jpeg', '    Consecration of our outstation    ', '      This Emmanuel, accepted to make His dwelling among us and to become like us so that we too, may become like Him: “Holy as he is Holy”. Finding t', '    https://www.youtube.com/embed/NZZ4xpmkvhA    ');

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
(60, 'photo3OKOK.jpg', 'Dieudonne', '  Tanzania', 'Emmanuel House', '12 June 2015'),
(61, 'photo4.jpeg', ' St Monica Njiru Parish ', '   Kenya ', ' Emmanuel JJJJJJ', ' 12 June 2015 '),
(64, 'photo3OKOK.jpg', ' Dieudonne ', '   Kenya ', '    Digodigo', '       St Augu '),
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
(66, '00020.00_00_01_04.Still002.jpg', 'Kabwiku', 'DRC', 'Emmanuel House', '12 June 2015', '14 July 2022', ' 17 Octobe', '4 November 2028');

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
(10, 'assumptionists', 'aainform@gmail.c', '7fe11a347a541890aaccf29bdc380f61'),
(12, 'Dieudonne', 'testadmin@gmail.com', '0192023a7bbd73250516f069df18b500'),
(13, 'Tsongo', 'testadmin@gmail.com', '0192023a7bbd73250516f069df18b500');

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
(40, '00020.00_00_00_23.Still080.jpg', '  Rule of Life 1 aa', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo'),
(41, 'rule2.jfif', ' Rule of Life 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(42, 'rule3.jfif', ' Rule of Life 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(43, 'rule4.jpg', ' Rule of Life 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(44, 'rule5.jfif', ' Rule of Life 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor '),
(45, '00020.00_00_00_00.Still076.jpg', '    Rule of Life 6', '    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do');

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
(2, 'lay4.jpg'),
(4, 'lay7.jfif'),
(5, 'lay8.jfif');

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
(31, 'photo.jpg', '         Title here', '     Description of the caroussel'),
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
(37, '222.jpg', 'Title of the caroussel', 'Description of the caroussel'),
(38, '257165399.jpg', 'title here', 'caroussell description'),
(39, 'ecumenis.jpg', 'Title here', 'Description of the caroussel'),
(40, 'photo.jpg', '   hghghg', '   hghghg');

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
(27, 'jesus.jpg', 'LOVE OF JESUS CHRIST', '      Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement'),
(28, 'churche.png', '   LOVE OT THE CHURCH', '   Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, o'),
(39, 'Mary2.jfif', '           Love of The B.V.Mary', '           Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Général');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`) VALUES
(1, 'kathembo', 'Tsongo', '1234');

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
-- Index pour la table `ecumenism`
--
ALTER TABLE `ecumenism`
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
-- Index pour la table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT pour la table `ecumenism`
--
ALTER TABLE `ecumenism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT pour la table `novices`
--
ALTER TABLE `novices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
