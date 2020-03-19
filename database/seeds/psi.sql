-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Mars 2020 à 11:22
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `psi`
--

-- --------------------------------------------------------

--
-- Structure de la table `directory`
--

CREATE TABLE IF NOT EXISTS `directory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=3 ;

--
-- Contenu de la table `directory`
--

INSERT INTO `directory` (`id`, `title`) VALUES
(1, 'Annuaire 1'),
(2, 'Annuaire 2');

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Contenu de la table `group`
--

INSERT INTO `group` (`id`, `name`) VALUES
(2, 'L2_MIASHS'),
(1, 'L3_MIAGE_APP');

-- --------------------------------------------------------

--
-- Structure de la table `group_person_year`
--

CREATE TABLE IF NOT EXISTS `group_person_year` (
  `groupId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  KEY `groupId` (`groupId`),
  KEY `personId` (`personId`),
  KEY `year` (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `group_person_year`
--

INSERT INTO `group_person_year` (`groupId`, `personId`, `year`) VALUES
(1, 1, 2020),
(1, 2, 2020),
(1, 3, 2020),
(1, 4, 2020),
(1, 5, 2020),
(1, 6, 2020),
(1, 7, 2020),
(1, 8, 2020),
(1, 9, 2020),
(1, 10, 2020),
(1, 11, 2020),
(1, 12, 2020),
(1, 13, 2020),
(1, 14, 2020),
(1, 15, 2020),
(1, 16, 2020),
(1, 17, 2020),
(1, 18, 2020),
(1, 19, 2020),
(1, 20, 2020),
(1, 21, 2020),
(1, 22, 2020),
(1, 23, 2020),
(1, 24, 2020),
(1, 25, 2020),
(2, 26, 2020),
(2, 27, 2020),
(2, 28, 2020),
(2, 29, 2020),
(2, 30, 2020),
(2, 31, 2020),
(2, 32, 2020),
(2, 33, 2020),
(2, 34, 2020),
(2, 35, 2020),
(2, 36, 2020),
(2, 37, 2020),
(2, 38, 2020),
(2, 39, 2020),
(2, 40, 2020),
(2, 41, 2020),
(2, 42, 2020),
(2, 43, 2020),
(2, 44, 2020),
(2, 45, 2020),
(2, 46, 2020),
(2, 47, 2020),
(2, 48, 2020),
(2, 49, 2020),
(2, 50, 2020),
(2, 51, 2020),
(2, 52, 2020),
(2, 53, 2020),
(2, 54, 2020),
(2, 55, 2020),
(2, 56, 2020),
(2, 57, 2020),
(2, 58, 2020),
(2, 59, 2020),
(2, 60, 2020),
(2, 61, 2020),
(2, 62, 2020),
(2, 63, 2020),
(2, 64, 2020),
(2, 65, 2020),
(2, 66, 2020),
(2, 67, 2020),
(2, 68, 2020),
(2, 69, 2020),
(2, 70, 2020),
(2, 71, 2020),
(2, 72, 2020),
(2, 73, 2020),
(2, 74, 2020),
(2, 75, 2020),
(2, 76, 2020),
(2, 77, 2020),
(2, 78, 2020),
(2, 79, 2020),
(2, 80, 2020),
(2, 81, 2020),
(2, 82, 2020),
(2, 83, 2020),
(2, 84, 2020),
(2, 85, 2020),
(2, 86, 2020),
(2, 87, 2020),
(2, 88, 2020),
(2, 89, 2020),
(2, 90, 2020),
(2, 91, 2020),
(2, 92, 2020),
(2, 93, 2020),
(2, 94, 2020),
(2, 95, 2020),
(2, 96, 2020),
(2, 97, 2020),
(2, 98, 2020),
(2, 99, 2020),
(2, 100, 2020),
(2, 101, 2020),
(2, 102, 2020),
(2, 103, 2020),
(2, 104, 2020),
(2, 105, 2020),
(2, 106, 2020),
(2, 107, 2020),
(2, 108, 2020),
(2, 109, 2020),
(2, 110, 2020),
(2, 111, 2020),
(2, 112, 2020),
(2, 113, 2020),
(2, 114, 2020),
(2, 115, 2020),
(2, 116, 2020),
(2, 117, 2020),
(2, 118, 2020),
(2, 119, 2020),
(2, 120, 2020),
(2, 121, 2020),
(2, 122, 2020),
(2, 123, 2020),
(2, 124, 2020),
(2, 125, 2020),
(2, 126, 2020),
(2, 127, 2020),
(2, 128, 2020),
(2, 129, 2020),
(2, 130, 2020),
(2, 131, 2020),
(2, 132, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `directoryId` int(11) DEFAULT NULL,
  `statusId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`statusId`) USING BTREE,
  KEY `directoryId` (`directoryId`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=198 ;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`id`, `lastname`, `firstname`, `email`, `num`, `directoryId`, `statusId`) VALUES
(1, 'Ahmed', 'Noufeine', NULL, 340001, 2, NULL),
(2, 'Ait akli', 'Litissia', NULL, 340002, 2, NULL),
(3, 'Ba', 'Adja', NULL, 340003, 2, NULL),
(4, 'Binous', 'Wassim', NULL, 340004, 2, NULL),
(5, 'Bocoum', 'Idy', NULL, 340005, 2, NULL),
(6, 'Brochado', 'Alexandre', NULL, 340006, 2, NULL),
(7, 'Clebien', 'Nangninta', NULL, 340007, 2, NULL),
(8, 'Das', 'Rahul', NULL, 340008, 2, NULL),
(9, 'Elarj', 'Aniss', NULL, 340009, 2, NULL),
(10, 'Fall', 'Seynabou', NULL, 340010, 2, NULL),
(11, 'Jestin', 'Gabriel', NULL, 340011, 2, NULL),
(12, 'Keloute ndamukong', 'Ubald', NULL, 340012, 2, NULL),
(13, 'Khalfi', 'Sofian', NULL, 340013, 2, NULL),
(14, 'Le men', 'Yann', NULL, 340014, 2, NULL),
(15, 'Mboup', 'Gaye', NULL, 340015, 2, NULL),
(16, 'Mouzouri', 'Ilhame', NULL, 340016, 2, NULL),
(17, 'Ndiaye', 'Moussa', NULL, 340017, 2, NULL),
(18, 'Quellec', 'Nathan', NULL, 340018, 2, NULL),
(19, 'Rajaratnam', 'Sarujan', NULL, 340019, 2, NULL),
(20, 'Raypoulet', 'Hemanath', NULL, 340020, 2, NULL),
(21, 'Sakho', 'Assane', NULL, 340021, 2, NULL),
(22, 'Schauffler', 'Ophelie', NULL, 340022, 2, NULL),
(23, 'Si-mohammed', 'Samy', NULL, 340023, 2, NULL),
(24, 'Sidate', 'Alexis', NULL, 340024, 2, NULL),
(25, 'Zemali', 'Lynda', NULL, 340025, 2, NULL),
(26, 'Abalil', 'Rizlane', NULL, 340026, 2, NULL),
(27, 'Achou', 'Sara', NULL, 340027, 2, NULL),
(28, 'Akkoura', 'Aniesse', NULL, 340028, 2, NULL),
(29, 'Ali', 'Ikram-masjid', NULL, 340029, 2, NULL),
(30, 'Ali', 'Faiz', NULL, 340030, 2, NULL),
(31, 'Ali', 'Ikram-masjid', NULL, 340031, 2, NULL),
(32, 'Alouda', 'Lidao', NULL, 340032, 2, NULL),
(33, 'Alouda', 'Lidao', NULL, 340033, 2, NULL),
(34, 'Askar', 'Mohammad', NULL, 340034, 2, NULL),
(35, 'Auger', 'Antoine', NULL, 340035, 2, NULL),
(36, 'Auger', 'Antoine', NULL, 340036, 2, NULL),
(37, 'Balde', 'Mamadou saliou', NULL, 340037, 2, NULL),
(38, 'Baro', 'Mohamed', NULL, 340038, 2, NULL),
(39, 'Barolle', 'Romain', NULL, 340039, 2, NULL),
(40, 'Barolle', 'Romain', NULL, 340040, 2, NULL),
(41, 'Barry', 'Aissatou', NULL, 340041, 2, NULL),
(42, 'Belhaimeur', 'Mohamed', NULL, 340042, 2, NULL),
(43, 'Benaissa', 'Adam', NULL, 340043, 2, NULL),
(44, 'Benali', 'Ahmed', NULL, 340044, 2, NULL),
(45, 'Berte', 'Ulrich', NULL, 340045, 2, NULL),
(46, 'Berte', 'Ulrich', NULL, 340046, 2, NULL),
(47, 'Beyaz', 'Sefkan', NULL, 340047, 2, NULL),
(48, 'Bodart', 'Valentin', NULL, 340048, 2, NULL),
(49, 'Boucamus', 'Cassandra', NULL, 340049, 2, NULL),
(50, 'Boumaza', 'Karim', NULL, 340050, 2, NULL),
(51, 'Bouzekri', 'Ryan', NULL, 340051, 2, NULL),
(52, 'Bouzekri', 'Ryan', NULL, 340052, 2, NULL),
(53, 'Callet', 'Theo', NULL, 340053, 2, NULL),
(54, 'Callet', 'Theo', NULL, 340054, 2, NULL),
(55, 'Cazenave', 'Louis', NULL, 340055, 2, NULL),
(56, 'Chatillon', 'Julien', NULL, 340056, 2, NULL),
(57, 'Chatillon', 'Julien', NULL, 340057, 2, NULL),
(58, 'Chen', 'Juline', NULL, 340058, 2, NULL),
(59, 'Chen', 'Juline', NULL, 340059, 2, NULL),
(60, 'Crentsil', 'Robert', NULL, 340060, 2, NULL),
(61, 'Crentsil', 'Robert', NULL, 340061, 2, NULL),
(62, 'Dandeu', 'Tom', NULL, 340062, 2, NULL),
(63, 'Dandeu', 'Tom', NULL, 340063, 2, NULL),
(64, 'Delaporte', 'Lucie', NULL, 340064, 2, NULL),
(65, 'Delaporte', 'Lucie', NULL, 340065, 2, NULL),
(66, 'Diop', 'Maguette', NULL, 340066, 2, NULL),
(67, 'Djamaldine ben', 'Hadji', NULL, 340067, 2, NULL),
(68, 'Dubois', 'Dorian', NULL, 340068, 2, NULL),
(69, 'El amrani', 'Amine', NULL, 340069, 2, NULL),
(70, 'Esmel', 'Nome', NULL, 340070, 2, NULL),
(71, 'Fahim', 'Aymane', NULL, 340071, 2, NULL),
(72, 'Fekih', 'Kevin', NULL, 340072, 2, NULL),
(73, 'Feugier', 'Augustin', NULL, 340073, 2, NULL),
(74, 'Gac', 'Kevin', NULL, 340074, 2, NULL),
(75, 'Ganeshn', 'Haresh', NULL, 340075, 2, NULL),
(76, 'Gavalda', 'Clement', NULL, 340076, 2, NULL),
(77, 'Gilbert', 'Cyprien', NULL, 340077, 2, NULL),
(78, 'Gilbert', 'Cyprien', NULL, 340078, 2, NULL),
(79, 'Gorlicki', 'Paul', NULL, 340079, 2, NULL),
(80, 'Goyet', 'Camille', NULL, 340080, 2, NULL),
(81, 'Goyet', 'Camille', NULL, 340081, 2, NULL),
(82, 'Grandelaude', 'Mathias', NULL, 340082, 2, NULL),
(83, 'Hadjara', 'Celina', NULL, 340083, 2, NULL),
(84, 'Houhou', 'Sara', NULL, 340084, 2, NULL),
(85, 'Igoudjilene', 'Kenza', NULL, 340085, 2, NULL),
(86, 'Jalloh', 'Yusuf', NULL, 340086, 2, NULL),
(87, 'Jardin', 'Samy', NULL, 340087, 2, NULL),
(88, 'Jardin', 'Samy', NULL, 340088, 2, NULL),
(89, 'Jules', 'Julissa', NULL, 340089, 2, NULL),
(90, 'Kadi', 'Imane', NULL, 340090, 2, NULL),
(91, 'Kadri', 'Nassim', NULL, 340091, 2, NULL),
(92, 'Kende', 'Emmanuela', NULL, 340092, 2, NULL),
(93, 'Kouhafa', 'Latifa', NULL, 340093, 2, NULL),
(94, 'Lacom', 'Marveen', NULL, 340094, 2, NULL),
(95, 'Le', 'Phong sac', NULL, 340095, 2, NULL),
(96, 'Le lorier', 'Lucas', NULL, 340096, 2, NULL),
(97, 'Legendre', 'Angele', NULL, 340097, 2, NULL),
(98, 'Lemaza kunday ndjuka', 'Revelle', NULL, 340098, 2, NULL),
(99, 'Limbasse', 'Noemie', NULL, 340099, 2, NULL),
(100, 'Limbasse', 'Noemie', NULL, 340100, 2, NULL),
(101, 'Lin', 'Xinlei', NULL, 340101, 2, NULL),
(102, 'Louveau', 'Christophe', NULL, 340102, 2, NULL),
(103, 'Malinvaud', 'Paul', NULL, 340103, 2, NULL),
(104, 'Martin', 'Vanessa', NULL, 340104, 2, NULL),
(105, 'Medaoud', 'Salim', NULL, 340105, 2, NULL),
(106, 'Mousset', 'Pierre', NULL, 340106, 2, NULL),
(107, 'Mousset', 'Pierre', NULL, 340107, 2, NULL),
(108, 'Nanquette', 'Olivier', NULL, 340108, 2, NULL),
(109, 'Nanquette', 'Olivier', NULL, 340109, 2, NULL),
(110, 'Nass', 'Julien', NULL, 340110, 2, NULL),
(111, 'Nass', 'Julien', NULL, 340111, 2, NULL),
(112, 'Noursaid', 'Lahcen', NULL, 340112, 2, NULL),
(113, 'Oumbe oumbe', 'David', NULL, 340113, 2, NULL),
(114, 'Pires', 'Dany', NULL, 340114, 2, NULL),
(115, 'Pires', 'Dany', NULL, 340115, 2, NULL),
(116, 'Quenum', 'Heloise', NULL, 340116, 2, NULL),
(117, 'Quenum', 'Heloise', NULL, 340117, 2, NULL),
(118, 'Rageh', 'Nydel', NULL, 340118, 2, NULL),
(119, 'Rageh', 'Nydel', NULL, 340119, 2, NULL),
(120, 'Ripert', 'Alexandre', NULL, 340120, 2, NULL),
(121, 'Sadat', 'Halima', NULL, 340121, 2, NULL),
(122, 'Sardaoui', 'Amine', NULL, 340122, 2, NULL),
(123, 'Sereir', 'Zohra', NULL, 340123, 2, NULL),
(124, 'Sharma', 'Aurelien', NULL, 340124, 2, NULL),
(125, 'Sintes', 'Manon', NULL, 340125, 2, NULL),
(126, 'Smahi', 'Lydia', NULL, 340126, 2, NULL),
(127, 'Soleil', 'Emilie', NULL, 340127, 2, NULL),
(128, 'Soumare', 'Fatimata', NULL, 340128, 2, NULL),
(129, 'Sun', 'Jialei', NULL, 340129, 2, NULL),
(130, 'Tahir', 'Mohamed - imrane', NULL, 340130, 2, NULL),
(131, 'Tissot', 'Guilhem', NULL, 340131, 2, NULL),
(132, 'Tliba', 'Ahmed', NULL, 340132, 2, NULL),
(133, 'LE ROUX', 'Annaig', NULL, 34100, 1, NULL),
(134, 'Bouchakhchoukha', 'Adel', NULL, 34101, 1, NULL),
(135, 'BELLINI', 'Béatrice', NULL, 34102, 1, NULL),
(136, 'Hardouin Ceccantini', 'Cécile', NULL, 34103, 1, NULL),
(137, 'Mesnager', 'Laurent', NULL, 34104, 1, NULL),
(138, 'Le Cun', 'Bertrand', NULL, 34105, 1, NULL),
(139, 'Hanen', 'Claire', NULL, 34106, 1, NULL),
(140, 'Guyon', 'Thomas', NULL, 34107, 1, NULL),
(141, 'Ben Hamida Mrabet', 'Sana', NULL, 34108, 1, NULL),
(142, 'Ikken', 'Sonia', NULL, 34109, 1, NULL),
(143, 'Gervais', 'Marie-Pierre', NULL, 34110, 1, NULL),
(144, 'Duvernet', 'Laurent', NULL, 34111, 1, NULL),
(145, 'Castillo_', 'Alberto', NULL, 34112, 1, NULL),
(146, 'Baarir', 'Souheib', NULL, 34113, 1, NULL),
(147, 'Delbot', 'François', NULL, 34114, 1, NULL),
(148, 'Azhar-Arnal', 'Juliette', NULL, 34115, 1, NULL),
(149, 'Rukoz-Castillo', 'Marta', NULL, 34116, 1, NULL),
(150, 'Legond-Aubry', 'Fabrice', NULL, 34117, 1, NULL),
(151, 'Quinio', 'Bernard', NULL, 34118, 1, NULL),
(152, 'Pradat-Peyre', 'Jean-François', NULL, 34119, 1, NULL),
(153, 'Ameur', 'Yannick', NULL, 34120, 1, NULL),
(154, 'Décallonne', 'Marc', NULL, 34121, 1, NULL),
(155, 'Dubois', 'Aloîs', NULL, 34122, 1, NULL),
(156, 'Duriez', 'Nathalie', NULL, 34123, 1, NULL),
(157, 'Florea', 'Paul', NULL, 34124, 1, NULL),
(158, 'Isoard', 'Thierry Michel', NULL, 34125, 1, NULL),
(159, 'Latif', 'Youssef', NULL, 34126, 1, NULL),
(160, 'Leloir', 'Nicole', NULL, 34127, 1, NULL),
(161, 'Novelli', 'Emmanuelle', NULL, 34128, 1, NULL),
(162, 'Pujol', 'Nicolas', NULL, 34129, 1, NULL),
(163, 'Renaud', 'Francis', NULL, 34130, 1, NULL),
(164, 'Serdoun', 'Samy', NULL, 34131, 1, NULL),
(165, 'Starck', 'Monia', NULL, 34132, 1, NULL),
(166, 'Thomas', 'Aurélie', NULL, 34133, 1, NULL),
(167, 'Tourvieille', 'Marc', NULL, 34134, 1, NULL),
(168, 'Zamfirou', 'Michel', NULL, 34135, 1, NULL),
(169, 'Zilova', 'Jana', NULL, 34136, 1, NULL),
(170, 'Menouer', 'Tarek', NULL, 34137, 1, NULL),
(171, 'Rodier', 'Lise', NULL, 34138, 1, NULL),
(172, 'Angarita Arocha', 'Rafael Enrique', NULL, 34139, 1, NULL),
(173, 'Ait Salaht', 'Farah', NULL, 34140, 1, NULL),
(174, 'Rousseau', 'Pierre', NULL, 34141, 1, NULL),
(175, 'Medjek', 'Sarah', NULL, 34142, 1, NULL),
(176, 'Guézou', 'Xavier', NULL, 34143, 1, NULL),
(177, 'D_Alfonso', 'Giovanna', NULL, 34144, 1, NULL),
(178, 'KELLOU-MENOUER', 'Kenza', NULL, 34145, 1, NULL),
(179, 'Oulhaci', 'Faiza', NULL, 34146, 1, NULL),
(180, 'Poizat', 'Pascal', NULL, 34147, 1, NULL),
(181, 'SADDEM', 'Rim ', NULL, 34148, 1, NULL),
(182, 'BENAMMAR', 'Nassima ', NULL, 34149, 1, NULL),
(183, 'ARFAOUI', 'Khadija', NULL, 34150, 1, NULL),
(184, 'Walter', 'Jean-Marc', NULL, 34151, 1, NULL),
(185, 'Bendraou', 'Reda', NULL, 34152, 1, NULL),
(186, 'Cojean', 'Bruno', NULL, 34153, 1, NULL),
(187, 'Abrantes', 'Pedro', NULL, 34154, 1, NULL),
(188, 'Zouari', 'Belhassen', NULL, 34155, 1, NULL),
(189, 'HOUHOU', 'Sara ', NULL, 34156, 1, NULL),
(190, 'GUEHIS-SAADAOUI', 'Sonia', NULL, 34157, 1, NULL),
(191, 'Hillah', 'Lom Messan', NULL, 34158, 1, NULL),
(192, 'Hmedeh', 'Zeinab', NULL, 34159, 1, NULL),
(193, 'Gherbi', 'Tahar', NULL, 34160, 1, NULL),
(194, 'Alaoui', 'Malek', NULL, 34161, 1, NULL),
(195, 'Non defini', 'Non defini', NULL, 404, 1, NULL),
(196, 'Pierre', 'Laurent', NULL, 34163, 1, NULL),
(197, 'Hyon', 'Emmanuel', NULL, 34164, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `school_year`
--

CREATE TABLE IF NOT EXISTS `school_year` (
  `year` int(4) NOT NULL,
  PRIMARY KEY (`year`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `school_year`
--

INSERT INTO `school_year` (`year`) VALUES
(2020);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `group_person_year`
--
ALTER TABLE `group_person_year`
  ADD CONSTRAINT `group_person_year_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`id`),
  ADD CONSTRAINT `group_person_year_ibfk_2` FOREIGN KEY (`personId`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `group_person_year_ibfk_3` FOREIGN KEY (`year`) REFERENCES `school_year` (`year`);

--
-- Contraintes pour la table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`statusId`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `person_ibfk_2` FOREIGN KEY (`directoryId`) REFERENCES `directory` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
