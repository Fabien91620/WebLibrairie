-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 01 avr. 2020 à 23:23
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `WebLibrairieVVA`
--

-- --------------------------------------------------------

--
-- Structure de la table `COMPTE`
--

CREATE TABLE `COMPTE` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) NOT NULL,
  `NOMCPTE` char(40) DEFAULT NULL,
  `PRENOMCPTE` char(30) DEFAULT NULL,
  `DATEINSCRIP` text NOT NULL,
  `DATEFERME` text,
  `TYPECOMPTE` char(3) NOT NULL,
  `ADRMAILCPTE` char(60) NOT NULL,
  `NOTELCPTE` char(15) DEFAULT NULL,
  `NOPORTCPTE` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `COMPTE`
--

INSERT INTO `COMPTE` (`USER`, `MDP`, `NOMCPTE`, `PRENOMCPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPECOMPTE`, `ADRMAILCPTE`, `NOTELCPTE`, `NOPORTCPTE`) VALUES
('Fabien', 'fabien', 'Barrios', 'Fabien', '2019-09-12', '', 'ADM', 'Fabien@hotmail.fr', '06', '06'),
('Fabrice', 'aa', NULL, NULL, '20-03-19', NULL, 'CLI', 'fabrice@mail.fr', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `CONTACT`
--

CREATE TABLE `CONTACT` (
  `ID` int(11) NOT NULL,
  `PRENOM` text NOT NULL,
  `NOM` text NOT NULL,
  `MAIL` text NOT NULL,
  `SUJET` text NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CONTACT`
--

INSERT INTO `CONTACT` (`ID`, `PRENOM`, `NOM`, `MAIL`, `SUJET`, `MESSAGE`) VALUES
(1, 'fabien', 'barrios', 'ada@dzad.dzd', 'zdzzd', 'dzdzdzd');

-- --------------------------------------------------------

--
-- Structure de la table `ECRIVAIN`
--

CREATE TABLE `ECRIVAIN` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(100) DEFAULT NULL,
  `PRENOM` varchar(100) DEFAULT NULL,
  `DT_NAISS` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ECRIVAIN`
--

INSERT INTO `ECRIVAIN` (`ID`, `NOM`, `PRENOM`, `DT_NAISS`) VALUES
(0, 'Hugo', 'Victor', '1802-02-26'),
(1, 'Camus', 'Albert', '1913-11-07'),
(2, 'Antoine', 'Saint-Exupéry', '1900-06-29'),
(3, 'Dumas', 'Alexandre', '1802-07-24'),
(4, 'Hergé', ' ', '1907-05-22'),
(5, 'Beauvais', 'Clémentine', '1989-01-06'),
(6, 'Kaufman', 'Amie', '2020-03-03'),
(7, 'R.T.', 'Acron', NULL),
(8, 'Roumiguière', 'Cécile', NULL),
(9, 'HintHunt', '', ''),
(10, 'Audureau', 'William', NULL),
(11, 'Pix\'n Love', '', NULL),
(12, 'Nintendo Co.', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `GENRE`
--

CREATE TABLE `GENRE` (
  `ID` int(11) NOT NULL,
  `LIBELLE` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `GENRE`
--

INSERT INTO `GENRE` (`ID`, `LIBELLE`) VALUES
(1, 'Roman'),
(2, 'Bd'),
(3, 'Jeunesse'),
(4, 'Distraction');

-- --------------------------------------------------------

--
-- Structure de la table `GENRE_LIVRE`
--

CREATE TABLE `GENRE_LIVRE` (
  `ID_GENRE` int(11) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `GENRE_LIVRE`
--

INSERT INTO `GENRE_LIVRE` (`ID_GENRE`, `ID_LIVRE`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 12),
(3, 14),
(4, 17),
(3, 18),
(2, 19);

-- --------------------------------------------------------

--
-- Structure de la table `IMAGE_LIVRE`
--

CREATE TABLE `IMAGE_LIVRE` (
  `id` int(11) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL,
  `SOURCE` text NOT NULL,
  `FORMAT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `IMAGE_LIVRE`
--

INSERT INTO `IMAGE_LIVRE` (`id`, `ID_LIVRE`, `SOURCE`, `FORMAT`) VALUES
(2, 2, 'images/books/Letranger.jpg', '270x340'),
(3, 3, 'images/books/petitprince.jpg', '270x340'),
(6, 6, 'images/books/tintin-au-pays-des-soviets.jpeg', '270x340'),
(7, 7, 'images/books/tintin-au-pays-des-soviets.jpeg', '270x340'),
(8, 8, 'images/books/tintin-au-pays-des-soviets.jpeg', '270x340'),
(9, 9, 'images/books/tintin-au-pays-des-soviets.jpeg', '270x340'),
(10, 10, 'images/books/tintin-au-pays-des-soviets.jpeg', '270x340'),
(12, 12, 'images/books/aurora-squad-tome-1.jpg', '270x340'),
(14, 14, 'images/books/Filles-de-Walïlü.jpeg', '270x340'),
(17, 17, 'images/books/L_Histoire_de_Mario.jpg', '270x340'),
(18, 18, 'images/books/zelda.jpg', '270x340'),
(20, 2, 'images/best-sell-product/Letranger.jpg', '304x384'),
(21, 3, 'images/best-sell-product/petitprince.jpg', '304x384'),
(22, 6, 'images/best-sell-product/tintin-au-pays-des-soviets.jpeg', '304x384'),
(23, 7, 'images/best-sell-product/tintin-au-pays-des-soviets.jpeg', '304x384'),
(24, 8, 'images/best-sell-product/tintin-au-pays-des-soviets.jpeg', '304x384'),
(25, 9, 'images/best-sell-product/tintin-au-pays-des-soviets.jpeg', '304x384'),
(26, 10, 'images/best-sell-product/tintin-au-pays-des-soviets.jpeg', '304x384'),
(27, 14, 'images/product/Filles-de-Walïlü.jpeg', '450x565'),
(28, 17, 'images/product/L_Histoire_de_Mario.jpg', '450x565'),
(30, 2, 'images/product/Letranger.jpg', '450x565'),
(31, 3, 'images/product/petitprince.jpg', '450x565'),
(34, 6, 'images/product/tintin-au-pays-des-soviets.jpeg', '450x565'),
(35, 7, 'images/product/tintin-au-pays-des-soviets.jpeg', '450x565'),
(36, 8, 'images/product/tintin-au-pays-des-soviets.jpeg', '450x565'),
(37, 9, 'images/product/tintin-au-pays-des-soviets.jpeg', '450x565'),
(38, 10, 'images/product/tintin-au-pays-des-soviets.jpeg', '450x565'),
(40, 12, 'images/product/aurora-squad-tome-1.jpg', '450x565'),
(44, 18, 'images/product/zelda.jpg', '450x565'),
(56, 2, 'images/product/sm-img/Letranger.jpg', '75x94'),
(57, 3, 'iimages/product/sm-img/petitprince.jpg', '75x94'),
(60, 6, 'images/product/sm-img/tintin-au-pays-des-soviets.jpeg', '75x94'),
(61, 7, 'images/product/sm-img/tintin-au-pays-des-soviets.jpeg', '75x94'),
(62, 8, 'images/product/sm-img/tintin-au-pays-des-soviets.jpeg', '75x94'),
(63, 9, 'images/product/sm-img/tintin-au-pays-des-soviets.jpeg', '75x94'),
(64, 10, 'images/product/sm-img/tintin-au-pays-des-soviets.jpeg', '75x94'),
(66, 12, 'images/product/sm-img/aurora-squad-tome-1.jpg', '75x94'),
(68, 14, 'images/product/sm-img/Filles-de-Walïlü.jpeg', '75x94'),
(71, 17, 'images/product/sm-img/L_Histoire_de_Mario.jpg', '75x94'),
(72, 18, 'images/product/sm-img/zelda.jpg', '75x94'),
(74, 2, 'images/product/sm-3/Letranger.jpg', '80x100'),
(75, 3, 'images/product/sm-3/petitprince.jpg', '80x100'),
(78, 6, 'images/product/sm-3/tintin-au-pays-des-soviets.jpeg', '80x100'),
(79, 7, 'images/product/sm-3/tintin-au-pays-des-soviets.jpeg', '80x100'),
(80, 8, 'images/product/sm-3/tintin-au-pays-des-soviets.jpeg', '80x100'),
(81, 9, 'images/product/sm-3/tintin-au-pays-des-soviets.jpeg', '80x100'),
(82, 10, 'images/product/sm-3/tintin-au-pays-des-soviets.jpeg', '80x100'),
(84, 12, 'images/product/sm-3/aurora-squad-tome-1.jpg', '80x100'),
(86, 14, 'images/product/sm-3/Filles-de-Walïlü.jpeg', '80x100'),
(89, 17, 'images/product/sm-3/L_Histoire_de_Mario.jpg', '80x100'),
(90, 18, 'images/product/sm-3/zelda.jpg', '80x100'),
(2290, 1, '', '75x94'),
(2291, 1, '', '80x100'),
(2292, 1, '', '270x340'),
(2293, 1, '', '304x384'),
(2294, 1, '', '450x565'),
(2330, 19, 'C:fakepathzelda.jpg', '75x94'),
(2331, 19, '', '80x100'),
(2332, 19, '', '270x340'),
(2333, 19, '', '304x384'),
(2334, 19, '', '450x565');

-- --------------------------------------------------------

--
-- Structure de la table `LIGNE_PANIER`
--

CREATE TABLE `LIGNE_PANIER` (
  `ID_LIVRE` int(11) NOT NULL,
  `ID_PANIER` int(11) NOT NULL,
  `DT_ACHAT` date DEFAULT NULL,
  `NB_PRODUIT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `LIGNE_PANIER`
--

INSERT INTO `LIGNE_PANIER` (`ID_LIVRE`, `ID_PANIER`, `DT_ACHAT`, `NB_PRODUIT`) VALUES
(1, 28, NULL, 10),
(1, 29, NULL, 2),
(1, 31, NULL, 2),
(3, 55, NULL, 1),
(9, 56, NULL, 1),
(11, 43, NULL, 1),
(11, 47, NULL, 1),
(12, 43, NULL, 1),
(12, 44, NULL, 1),
(12, 46, NULL, 1),
(12, 47, NULL, 1),
(12, 49, NULL, 5),
(14, 48, NULL, 1),
(17, 43, NULL, 1),
(17, 48, NULL, 1),
(17, 49, NULL, 2),
(17, 57, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `LIGNE_WISHLIST`
--

CREATE TABLE `LIGNE_WISHLIST` (
  `ID_LIVRE` int(11) NOT NULL,
  `ID_WISHLIST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LIVRE`
--

CREATE TABLE `LIVRE` (
  `ID` int(11) NOT NULL,
  `ID_ECRIVAIN` int(11) DEFAULT NULL,
  `ISBN` char(100) DEFAULT NULL,
  `TITRE` varchar(100) DEFAULT NULL,
  `RESUME` text,
  `DT_PARUTION` text,
  `PRIX_UNITAIRE` text,
  `EDITEUR` varchar(100) DEFAULT NULL,
  `BEST_SELLER` int(11) DEFAULT NULL,
  `COEUR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `LIVRE`
--

INSERT INTO `LIVRE` (`ID`, `ID_ECRIVAIN`, `ISBN`, `TITRE`, `RESUME`, `DT_PARUTION`, `PRIX_UNITAIRE`, `EDITEUR`, `BEST_SELLER`, `COEUR`) VALUES
(1, 0, '9781856051859', 'Les Misérables', 'Le récit s&#039;organise au tour de Jean Valjean, ancien forçat, depuis sa sortie de prison en 1815 jusqu&#039;à sa mort, en 1833, dans les bras de Cosette et de Maruis. Mais autour de Jean Valjean, apparaissant aussi les destinées d&#039;autre misérables ; Fantine, ouvrière obliger de confier Cosette, sa fille, à des inconnus, les Thénardier qui la traiteront comme un esclave. Marius, qui tombe amoureux de Cosette, et qui s&#039;engagera sur les barricades lors de l&#039;insurrection de 1832. Gavroche, gamin de Paris , qui sera tué, en chantant, sur une barricade.', '1892-01-01', '7.7', 'Pocket', 1, 0),
(2, 1, '9781508560449', 'L&#039;étrangers', 'Le narrateur, Meursault, employé de bureau à Alger, apprend que sa mère est morte, dans un asile. Il va l&#039;enterrer sans larmes, et sous un soleil de plomb qui ne fait qu&#039;augmenter son envie d&#039;en finir avec la cérémonie. De retour à Alger, il va se baigner et retrouve une ancienne collègue, Marie. Ils vont voir un film comique au cinéma, et elle devient sa maîtresse. Un soir, Meursault croise Salamano, un voisin, et est invité par Raymond, un autre voisin de palier. Ce dernier, ancien boxeur, lui raconte sa bagarre avec le frère de sa maîtresse, et lui demande d&#039;écrire une lettre qui servira sa vengeance. Quelques jours plus tard, Raymond se bat avec sa maîtresse et la police intervient. Meursault accepte de l&#039;accompagner au commissariat. Invité par Raymond à passer un dimanche au bord de la mer dans le cabanon d&#039;un ami, Masson...', '1942-01-01', '6.2', 'Pocket', 1, 1),
(3, 2, '9785699669202', 'Le petit prince', 'Un aviateur, le narrateur du conte, se bloque avec son avion au milieu du désert du Sahara à la suite d’une panne de moteur. Alors qu’il tente de réparer son avion, un petit garçon apparaît et lui demande de dessiner un mouton : « S’il vous plaît… dessine-moi un mouton ! ». Jour après jour, le narrateur découvre l’histoire du Petit Prince. Il lui raconte qu’il vient d’une autre planète : “l’astéroïde B 612», une planète très petite à peine plus grande qu’une maison où il a laissé derrière lui trois volcans et une rose, une fleur unique dont il est amoureux. Le petit prince confie à l’aviateur avoir peur que le mouton qu’il lui a dessiné fasse du mal à sa rose. Le petit prince lui raconte aussi qu’il a visité d’autres planètes avant d’arriver sur la Terre. D’une planète à une autre, il a rencontré des gens bizarres: un roi qui prétend régner sur tout avec le pouvoir absolu, un vaniteux qui se voit comme l’homme le plus beau et le plus intelligent alors qu’il est seul sur sa minuscule planète, un homme d’affaires propriétaire d’étoiles qui passe son temps à les compter, un ivrogne qui boit pour oublier qu’il boit, l’allumeur de réverbères qui effectue un travail absurde et ininterrompu et un vieux monsieur géographe qui écrit, dans des livres énormes les informations portées à lui par les explorateurs. Sur la Terre, le Petit Prince a rencontré un renard, il lui a appris qu’il est important de se faire des amis qu’on doit les apprivoiser et les considérer comme des êtres uniques. Chaque jour l’aviateur apprend de nouvelles choses sur le petit prince, sur ses sentiments, ses peurs, ses doutes, son départ, son voyage et sur sa planète. Huit jours après l’atterrissage dans le désert, l’heure de la séparation des deux amis est venue. Afin de retourner sur sa planète, le petit prince a recours au serpent qui résout toutes les énigmes. Le petit prince repart vers sa planète en laissant le narrateur tout seul. Enfin, l’aviateur réussi à réparer son avion et quitte lui aussi le désert en espérant revoir le petit prince un jour.', '1943-01-01', '6.8', 'Pocket', 1, 1),
(6, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', '1981-01-01', '12.9', 'HERGÉ', 1, 0),
(7, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', '1981-01-01', '12.9', 'HERGÉ', 1, 0),
(8, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', '1981-01-01', '12.9', 'HERGÉ', 1, 0),
(9, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', '1981-01-01', '12.9', 'HERGÉ', 1, 0),
(10, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', '1981-01-01', '12.9', 'HERGÉ', 1, 0),
(11, 5, '2377313736', 'Les esprits de l\'escalier', 'Dans un vieil immeuble parisien, deux fantômes très différents vivent une histoire d\'amour. Lui est mort depuis 118 ans et hante la cage d\'escalier de sa manière romantique et surannée. Elle est une jeune fille d\'aujourd\'hui, impertinente et insaisissable, qui vient juste de mourir', '2020-01-29', '16.5', 'Album', 0, 0),
(12, 6, '978-2-203-19681-0', 'Aurora squad Volume 1', 'En 2380, Tyler, un jeune pilote prometteur, attend avec impatience son affectation. Alors qu&#039;il fait une sortie dans l&#039;espace, il retrouve un vaisseau disparu des années, transportant à son bord Aurora, une jeune fille cryogénisée depuis deux cents ans. En compagnie d&#039;un improbable équipage, il doit la protéger de ceux qui la traquent. ©Electre 2020', '2020-02-05', '17.9', 'Casterman', 0, 1),
(14, 8, '978-2-211-30529-7', 'Filles de Walïlü', 'Sur la presqu\'île de lurföll, les hommes partent en mer dès qu\'ils en ont l\'âge. À terre, les femmes gouvernent, exercent tous les métiers, et sont libres de vivre les amours qu\'elles désirent.\r\n\r\nC\'est dans cette société sereine et joyeuse que grandit Albaan Blosseüm. Sereine ? Pas tant que cela. Les rêves qui assaillent Albaan sont porteurs de noirs présages. Une malédiction planerait-elle sur elle ? Qui est cette femme au visage brûlé qui lui veut du mal, et qui semble prête à soulever tout le village contre elle ? Au nom de quelle vengeance ?\r\n\r\nDans la forêt plane la Walïlü, fascinante créature des contes horrifiques de son enfance...', '2020-02-05', '15.5', 'Ecole des loisirs', 0, 0),
(17, 10, '978-2-37188-073-3', 'L\'histoire de Mario', 'L\'auteur retrace comment le petit quadragénaire brun et moustachu vêtu d\'une salopette, de gants blancs et d\'une casquette rouge, tour à tour charpentier, constructeur et plombier est devenu en dix ans le personnage de jeu vidéo le plus populaire devant Pac-Man et Donkey Kong. Il évoque aussi l\'histoire du jeu vidéo dans les années 1980, ses productions phares, ses innovations et ses crises. ', '2019-12-06', '24.9', 'Pix\'n Love', 0, 0),
(18, 12, '978-2-302-07920-5', 'The legend of Zelda', 'The Legend of ZeldaTM a captivé de nombreux joueurs grâce à ces aventures épiques depuis plus de 30 ans. Soleil Manga et Nintendo sont fiers de vous présenter une encyclopédie complète qui regroupe toutes les informations depuis le premier opus sur console 8-bit (la célèbre NES) jusqu&#039;à la réédition de Twilight Princess en HD.\n\nThe Legend of ZeldaTM - Encyclopedia condense une multitude de connaissances qui n&#039;attendent plus que vous ! Plongez dans les mondes d&#039;Hyrule à travers les âges. Explorez une immense collection d&#039;ennemis, d&#039;objets, de donjons et de villages. Découvrez les récits et les notes des développeurs pour chacun des jeux sortis depuis le début. Enfin, faites face au boss final de cet ouvrage avec une interview du producteur de la série Zelda, Eiji Aonuma !', '2019-11-06', '45.9', 'Soleil manga. Shonen', 0, 1),
(19, 2, 'rez', 'sfds', 'gfds', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `PANIER`
--

CREATE TABLE `PANIER` (
  `ID` int(11) NOT NULL,
  `ID_COMPTE` char(8) NOT NULL,
  `DT_OUVERT` date NOT NULL,
  `DT_COM` date DEFAULT NULL,
  `DT_LIV` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `PANIER`
--

INSERT INTO `PANIER` (`ID`, `ID_COMPTE`, `DT_OUVERT`, `DT_COM`, `DT_LIV`) VALUES
(28, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(29, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(31, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(32, 'Fabien', '2020-01-02', '2020-03-01', NULL),
(43, 'Fabien', '2020-03-01', '2020-03-10', NULL),
(44, 'Fabien', '2020-03-10', '2020-03-11', NULL),
(45, 'Fabien', '2020-03-11', '2020-03-11', NULL),
(46, 'Fabien', '2020-03-11', '2020-03-11', NULL),
(47, 'Fabien', '2020-03-11', '2020-03-14', NULL),
(48, 'Fabien', '2020-03-14', '2020-03-14', NULL),
(49, 'Fabien', '2020-03-14', '2020-03-19', NULL),
(55, 'Fabien', '2020-03-19', '2020-03-19', NULL),
(56, 'Fabien', '2020-03-19', NULL, NULL),
(57, 'Fabrice', '2020-03-19', '2020-03-19', NULL),
(58, 'Fabrice', '2020-03-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `WISHLIST`
--

CREATE TABLE `WISHLIST` (
  `ID` int(11) NOT NULL,
  `ID_COMPTE` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `WISHLIST`
--

INSERT INTO `WISHLIST` (`ID`, `ID_COMPTE`) VALUES
(1, 'Fabien'),
(7, 'Fabrice');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `COMPTE`
--
ALTER TABLE `COMPTE`
  ADD PRIMARY KEY (`USER`);

--
-- Index pour la table `CONTACT`
--
ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ECRIVAIN`
--
ALTER TABLE `ECRIVAIN`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `GENRE`
--
ALTER TABLE `GENRE`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `GENRE_LIVRE`
--
ALTER TABLE `GENRE_LIVRE`
  ADD UNIQUE KEY `ID_GENRE` (`ID_GENRE`,`ID_LIVRE`),
  ADD UNIQUE KEY `ID_GENRE_2` (`ID_GENRE`,`ID_LIVRE`),
  ADD KEY `ID_LIVRE` (`ID_LIVRE`);

--
-- Index pour la table `IMAGE_LIVRE`
--
ALTER TABLE `IMAGE_LIVRE`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_LIVRE` (`ID_LIVRE`,`FORMAT`);

--
-- Index pour la table `LIGNE_PANIER`
--
ALTER TABLE `LIGNE_PANIER`
  ADD PRIMARY KEY (`ID_LIVRE`,`ID_PANIER`),
  ADD KEY `ID_PANIER` (`ID_PANIER`);

--
-- Index pour la table `LIGNE_WISHLIST`
--
ALTER TABLE `LIGNE_WISHLIST`
  ADD PRIMARY KEY (`ID_LIVRE`,`ID_WISHLIST`),
  ADD KEY `ID_PANIER` (`ID_WISHLIST`);

--
-- Index pour la table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ECRIVAIN` (`ID_ECRIVAIN`);

--
-- Index pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_COMPTE` (`ID_COMPTE`);

--
-- Index pour la table `WISHLIST`
--
ALTER TABLE `WISHLIST`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_COMPTE` (`ID_COMPTE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `CONTACT`
--
ALTER TABLE `CONTACT`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ECRIVAIN`
--
ALTER TABLE `ECRIVAIN`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `GENRE`
--
ALTER TABLE `GENRE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `IMAGE_LIVRE`
--
ALTER TABLE `IMAGE_LIVRE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2335;

--
-- AUTO_INCREMENT pour la table `LIVRE`
--
ALTER TABLE `LIVRE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `PANIER`
--
ALTER TABLE `PANIER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `WISHLIST`
--
ALTER TABLE `WISHLIST`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `GENRE_LIVRE`
--
ALTER TABLE `GENRE_LIVRE`
  ADD CONSTRAINT `genre_livre_ibfk_1` FOREIGN KEY (`ID_GENRE`) REFERENCES `GENRE` (`ID`),
  ADD CONSTRAINT `genre_livre_ibfk_2` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`);

--
-- Contraintes pour la table `IMAGE_LIVRE`
--
ALTER TABLE `IMAGE_LIVRE`
  ADD CONSTRAINT `image_livre_ibfk_1` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`);

--
-- Contraintes pour la table `LIGNE_PANIER`
--
ALTER TABLE `LIGNE_PANIER`
  ADD CONSTRAINT `ligne_panier_ibfk_1` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`),
  ADD CONSTRAINT `ligne_panier_ibfk_2` FOREIGN KEY (`ID_PANIER`) REFERENCES `PANIER` (`ID`);

--
-- Contraintes pour la table `LIGNE_WISHLIST`
--
ALTER TABLE `LIGNE_WISHLIST`
  ADD CONSTRAINT `ligne_wishlist_ibfk_1` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`),
  ADD CONSTRAINT `ligne_wishlist_ibfk_2` FOREIGN KEY (`ID_WISHLIST`) REFERENCES `WISHLIST` (`ID`);

--
-- Contraintes pour la table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`ID_ECRIVAIN`) REFERENCES `ECRIVAIN` (`ID`);

--
-- Contraintes pour la table `PANIER`
--
ALTER TABLE `PANIER`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`ID_COMPTE`) REFERENCES `COMPTE` (`USER`);

--
-- Contraintes pour la table `WISHLIST`
--
ALTER TABLE `WISHLIST`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`ID_COMPTE`) REFERENCES `COMPTE` (`USER`);
