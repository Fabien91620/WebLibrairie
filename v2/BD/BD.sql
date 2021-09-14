-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 09, 2020 at 09:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `WebLibrairieVVA`
--

-- --------------------------------------------------------

--
-- Table structure for table `COMPTE`
--

CREATE TABLE `COMPTE` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) NOT NULL,
  `NOMCPTE` char(40) NOT NULL,
  `PRENOMCPTE` char(30) NOT NULL,
  `DATEINSCRIP` date NOT NULL,
  `DATEFERME` date DEFAULT NULL,
  `TYPECOMPTE` char(3) NOT NULL,
  `ADRMAILCPTE` char(60) NOT NULL,
  `NOTELCPTE` char(15) DEFAULT NULL,
  `NOPORTCPTE` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COMPTE`
--

INSERT INTO `COMPTE` (`USER`, `MDP`, `NOMCPTE`, `PRENOMCPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPECOMPTE`, `ADRMAILCPTE`, `NOTELCPTE`, `NOPORTCPTE`) VALUES
('as', 'as', 'as', 'as', '2019-12-30', NULL, 'CLI', 'as@a', 'as', 'as'),
('Fabien', 'Fabien', 'Barrios', 'Fabien', '2019-09-12', NULL, 'ADM', 'Fabien@hotmail.fr', '06', '06'),
('normal', 'normal', 'normal', 'normal', '2019-12-19', NULL, 'CLI', 'normal@normal.com', '06', '06');

-- --------------------------------------------------------

--
-- Table structure for table `ECRIVAIN`
--

CREATE TABLE `ECRIVAIN` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(100) NOT NULL,
  `DT_NAISS` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ECRIVAIN`
--

INSERT INTO `ECRIVAIN` (`ID`, `NOM`, `PRENOM`, `DT_NAISS`) VALUES
(0, 'Hugo', 'Victor', '1802-02-26'),
(1, 'Camus', 'Albert', '1913-11-07'),
(2, 'Antoine', 'Saint-Exupéry', '1900-06-29'),
(3, 'Dumas', 'Alexandre', '1802-07-24'),
(4, 'Hergé', ' ', '1907-05-22'),
(5, 'Beauvais', 'Clémentine', '1989-01-06'),
(6, 'Kaufman', 'Amie', NULL),
(7, 'R.T.', 'Acron', NULL),
(8, 'Roumiguière', 'Cécile', NULL),
(9, 'HintHunt', '', NULL),
(10, 'Audureau', 'William', NULL),
(11, 'Pix\'n Love', '', NULL),
(12, 'Nintendo Co.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `GENRE`
--

CREATE TABLE `GENRE` (
  `ID` int(11) NOT NULL,
  `LIBELLE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `GENRE`
--

INSERT INTO `GENRE` (`ID`, `LIBELLE`) VALUES
(1, 'Roman'),
(2, 'Bd'),
(3, 'Jeunesse'),
(4, 'Distraction');

-- --------------------------------------------------------

--
-- Table structure for table `GENRE_LIVRE`
--

CREATE TABLE `GENRE_LIVRE` (
  `ID_GENRE` int(11) NOT NULL,
  `ID_LIVRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `GENRE_LIVRE`
--

INSERT INTO `GENRE_LIVRE` (`ID_GENRE`, `ID_LIVRE`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18);

-- --------------------------------------------------------

--
-- Table structure for table `LIGNE_PANIER`
--

CREATE TABLE `LIGNE_PANIER` (
  `ID_LIVRE` int(11) NOT NULL,
  `ID_PANIER` int(11) NOT NULL,
  `DT_ACHAT` date DEFAULT NULL,
  `NB_PRODUIT` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LIGNE_PANIER`
--

INSERT INTO `LIGNE_PANIER` (`ID_LIVRE`, `ID_PANIER`, `DT_ACHAT`, `NB_PRODUIT`) VALUES
(1, 28, NULL, 10),
(1, 29, NULL, 2),
(3, 31, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `LIVRE`
--

CREATE TABLE `LIVRE` (
  `ID` int(11) NOT NULL,
  `ID_ECRIVAIN` int(11) NOT NULL,
  `ISBN` char(100) NOT NULL,
  `TITRE` varchar(100) NOT NULL,
  `RESUME` text NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `DT_PARUTION` date NOT NULL,
  `PRIX_UNITAIRE` float NOT NULL,
  `EDITEUR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LIVRE`
--

INSERT INTO `LIVRE` (`ID`, `ID_ECRIVAIN`, `ISBN`, `TITRE`, `RESUME`, `IMAGE`, `DT_PARUTION`, `PRIX_UNITAIRE`, `EDITEUR`) VALUES
(1, 0, '9781856051859', 'Les Misérables', 'Le récit s\'organise au tour de Jean Valjean, ancien forçat, depuis sa sortie de prison en 1815 jusqu\'à sa mort, en 1833, dans les bras de Cosette et de Maruis. Mais autour de Jean Valjean, apparaissant aussi les destinées d\'autre misérables ; Fantine, ouvrière obliger de confier Cosette, sa fille, à des inconnus, les Thénardier qui la traiteront comme un esclave. Marius, qui tombe amoureux de Cosette, et qui s\'engagera sur les barricades lors de l\'insurrection de 1832. Gavroche, gamin de Paris , qui sera tué, en chantant, sur une barricade.', 'assets/ImageLivre/LesMiserables.jpg', '1892-01-01', 7.7, 'Pocket'),
(2, 1, '9781508560449', 'L\'étranger', 'Le narrateur, Meursault, employé de bureau à Alger, apprend que sa mère est morte, dans un asile. Il va l\'enterrer sans larmes, et sous un soleil de plomb qui ne fait qu\'augmenter son envie d\'en finir avec la cérémonie. De retour à Alger, il va se baigner et retrouve une ancienne collègue, Marie. Ils vont voir un film comique au cinéma, et elle devient sa maîtresse. Un soir, Meursault croise Salamano, un voisin, et est invité par Raymond, un autre voisin de palier. Ce dernier, ancien boxeur, lui raconte sa bagarre avec le frère de sa maîtresse, et lui demande d\'écrire une lettre qui servira sa vengeance. Quelques jours plus tard, Raymond se bat avec sa maîtresse et la police intervient. Meursault accepte de l\'accompagner au commissariat. Invité par Raymond à passer un dimanche au bord de la mer dans le cabanon d\'un ami, Masson, Meursault s\'y rend avec Marie. Après le repas, les hommes se promènent sur la plage et rencontrent deux Arabes, dont le frère de la maîtresse de Raymond. Ils se battent et Raymond est blessé. De retour au cabanon, Meursault le tempère et lui prend son revolver, pour lui éviter de tuer. Reparti seul sur la plage, il retrouve par hasard le frère, qui sort un couteau. Assommé par le poids du soleil, il se crispe sur le revolver et le coup part tout seul; mais Meursault tire quatre autres coups sur le corps inerte.  Meursault est emprisonné. L\'instruction va durer onze mois. Il ne manifeste aucun regret lorsqu\'il est interrogé par le juge, aucune peine lorsque son avocat l\'interroge sur les sentiments qui le liaient à sa mère. Le souvenir, le sommeil et la lecture d\'un vieux morceau de journal lui permettent de s\'habituer à sa condition. Les visites de Marie s\'espacent. Le procès débute avec l\'été. L\'interrogatoire des témoins par le procureur montre que Meursault n\'a pas pleuré à l\'enterrement de sa mère, qu\'il s\'est amusé avec Marie dès le lendemain et qu\'il a fait un témoignage de complaisance en faveur de Raymond, qui s\'avère être un souteneur. Les témoignages favorables de Masson et Salamano sont à peine écoutés. Le procureur plaide le crime crapuleux, exécuté par un homme au coeur de criminel et insensible, et réclame la tête de l\'accusé. L\'avocat plaide la provocation et vante les qualités morales de Meursault, mais celui-ci n\'écoute plus. Le président, après une longue attente, annonce la condamnation à mort de l\'accusé. Dans sa cellule, Meursault pense à son exécution, à son pourvoi et à Marie, qui ne lui écrit plus. L\'aumonier lui rend visite, malgré son refus de le rencontrer. Meursault est furieux contre ses paroles, réagit violemment et l\'insulte. Après son départ, il se calme, réalise qu\'il est heureux et espère, pour se sentir moins seul, que son exécution se déroulera devant une foule nombreuse et hostile.', 'assets/ImageLivre/Letranger.jpg', '1942-01-01', 6.2, 'Pocket'),
(3, 2, '9785699669202', 'Le petit prince', 'Un aviateur, le narrateur du conte, se bloque avec son avion au milieu du désert du Sahara à la suite d’une panne de moteur. Alors qu’il tente de réparer son avion, un petit garçon apparaît et lui demande de dessiner un mouton : « S’il vous plaît… dessine-moi un mouton ! ». Jour après jour, le narrateur découvre l’histoire du Petit Prince. Il lui raconte qu’il vient d’une autre planète : “l’astéroïde B 612», une planète très petite à peine plus grande qu’une maison où il a laissé derrière lui trois volcans et une rose, une fleur unique dont il est amoureux. Le petit prince confie à l’aviateur avoir peur que le mouton qu’il lui a dessiné fasse du mal à sa rose. Le petit prince lui raconte aussi qu’il a visité d’autres planètes avant d’arriver sur la Terre. D’une planète à une autre, il a rencontré des gens bizarres: un roi qui prétend régner sur tout avec le pouvoir absolu, un vaniteux qui se voit comme l’homme le plus beau et le plus intelligent alors qu’il est seul sur sa minuscule planète, un homme d’affaires propriétaire d’étoiles qui passe son temps à les compter, un ivrogne qui boit pour oublier qu’il boit, l’allumeur de réverbères qui effectue un travail absurde et ininterrompu et un vieux monsieur géographe qui écrit, dans des livres énormes les informations portées à lui par les explorateurs. Sur la Terre, le Petit Prince a rencontré un renard, il lui a appris qu’il est important de se faire des amis qu’on doit les apprivoiser et les considérer comme des êtres uniques. Chaque jour l’aviateur apprend de nouvelles choses sur le petit prince, sur ses sentiments, ses peurs, ses doutes, son départ, son voyage et sur sa planète. Huit jours après l’atterrissage dans le désert, l’heure de la séparation des deux amis est venue. Afin de retourner sur sa planète, le petit prince a recours au serpent qui résout toutes les énigmes. Le petit prince repart vers sa planète en laissant le narrateur tout seul. Enfin, l’aviateur réussi à réparer son avion et quitte lui aussi le désert en espérant revoir le petit prince un jour.', 'assets/ImageLivre/petitprince.jpg', '1943-01-01', 6.8, 'Pocket'),
(4, 3, '9788026803652', 'Les trois mousquetaires', 'Un des romans les plus lus d\'Alexandre Dumas, le roman « Les Trois Mousquetaires » plonge les lecteurs dans les fascinantes aventures d\'un pauvre garçon de 18 ans surnommé d\'Artagnan avec les 3 mousquetaires de Louis XIII : Athos, Aramis et Porthos. Les quatre, ensemble, tentent de défendre l\'image de la souveraine Anne d\'Autriche, en s\'opposant au cardinal de Richelieu et ses agents. Ce roman d\'épée et de cape a connu un grand succès juste après sa publication en 1844 grâce à ses différents combats et à ses épisodes romanesques surprenants. Il a été adapté à plusieurs reprises au cinéma, au théâtre et à la télévision. C\'est une source d\'inspiration pour de nombreux auteurs et éditeurs. De nouveaux épisodes du roman ont rapidement fait leur apparition, du vivant de son principal auteur : Alexandre Dumas. Une traduction en anglais en 3 versions différentes a même été faite à partir de 1846. L\'auteur a choisi de situer le roman pendant la période où régnait Louis XIII, en 1652. Cette histoire devient un ouvrage littéraire important qui est lié de manière étroite à l\'histoire du duc de La Rochefoucauld.', 'assets/ImageLivre/mousquetaire.jpg', '1844-01-01', 4.9, 'Pocket'),
(5, 0, '9782761341028', 'Notre-Dame de Paris', 'Le roman Notre Dame de Paris de Victor Hugo raconte l\'histoire d\'amour entre Quasimodo, un personnage laid et hideux et Esmeralda, femme bohémienne d\'une beauté remarquable. Un troisième protagoniste s\'ajoute à la liste des personnages : Frollo, un archidiacre de Notre Dame de Paris qui tomba fou amoureux de la belle Esmeralda. Il ordonna alors à Quasimodo (qu\'il éléva et éduqua) de s\'emparer de la belle. Elle est sauvée par la suite, par le capitaine Phoebus dont elle tombe amoureuse. Mais Frollo poignarde Phoebus et accuse Esmeralda de ce meurtre. Pour aider la jeune bohémienne, Quasimodo entraîne Esmeralda dans la cathédrale pour lui offrir son asile. Il en tombe éperdument amoureux. Esmeralda condamnée, meurt sous les yeux de Quasimodo et Frollo qui assistent à sa pendaison en haut de la cathédrale Notre Dame. Furieux, Quasimodo décide alors de se venger et rejoint pour l\'éternité Esmeralda', 'assets/ImageLivre/notreDame.png', '1831-01-01', 10.2, 'Pocket'),
(6, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', 'assets/ImageLivre/tintin-au-pays-des-soviets.png', '1981-01-01', 12.9, 'HERGÉ'),
(7, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', 'assets/ImageLivre/tintin-au-pays-des-soviets.png', '1981-01-01', 12.9, 'HERGÉ'),
(8, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', 'assets/ImageLivre/tintin-au-pays-des-soviets.png', '1981-01-01', 12.9, 'HERGÉ'),
(9, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', 'assets/ImageLivre/tintin-au-pays-des-soviets.png', '1981-01-01', 12.9, 'HERGÉ'),
(10, 4, '9788426119872', 'Tintin au pays des Soviets', 'Tintin se rend donc au pays des soviets, mais nombre d\'individus semblent se liguer contre lui pour l\'empêcher d\'y arriver, afin qu\'il ne raconte pas ce qui s\'y passe... Il échappe une première fois à la mort à cause d\'une bombe qu\'un dangereux individu à posé dans le train...', 'assets/ImageLivre/tintin-au-pays-des-soviets.png', '1981-01-01', 12.9, 'HERGÉ'),
(11, 5, '2377313736', 'Les esprits de l\'escalier', 'Dans un vieil immeuble parisien, deux fantômes très différents vivent une histoire d\'amour. Lui est mort depuis 118 ans et hante la cage d\'escalier de sa manière romantique et surannée. Elle est une jeune fille d\'aujourd\'hui, impertinente et insaisissable, qui vient juste de mourir', 'assets/ImageLivre/les_esprits_de_lescalier.jpg', '2020-01-29', 16.5, 'Album'),
(12, 6, '978-2-203-19681-0', 'Aurora squad Volume 1', 'En 2380, Tyler, un jeune pilote prometteur, attend avec impatience son affectation. Alors qu\'il fait une sortie dans l\'espace, il retrouve un vaisseau disparu des années, transportant à son bord Aurora, une jeune fille cryogénisée depuis deux cents ans. En compagnie d\'un improbable équipage, il doit la protéger de ceux qui la traquent. ©Electre 2020', 'assets/ImageLivre/aurora-squad-tome-1.jpg', '2020-02-05', 17.9, 'Casterman'),
(13, 7, '978-2-01-711427-7', 'Ocean City. Volume 1', 'Au XXIIe siècle, la montée des eaux a rendu la vie sur les continents presque impossible et l\'humanité s\'est réfugiée sur des villes flottantes. Crockie et Jackson, deux lycéens, vivent à Ocean City. Un jour, Crockie est arrêté par les forces de l\'ordre pour avoir créé le transpondeur, une invention permettant de pirater la banque centrale et de voler du temps, la monnaie de la cité. ', 'assets/ImageLivre/Ocean-city-tome-1.jpg', '2020-02-05', 16.9, 'Hachette romans'),
(14, 8, '978-2-211-30529-7', 'Filles de Walïlü', 'Sur la presqu\'île de lurföll, les hommes partent en mer dès qu\'ils en ont l\'âge. À terre, les femmes gouvernent, exercent tous les métiers, et sont libres de vivre les amours qu\'elles désirent.\r\n\r\nC\'est dans cette société sereine et joyeuse que grandit Albaan Blosseüm. Sereine ? Pas tant que cela. Les rêves qui assaillent Albaan sont porteurs de noirs présages. Une malédiction planerait-elle sur elle ? Qui est cette femme au visage brûlé qui lui veut du mal, et qui semble prête à soulever tout le village contre elle ? Au nom de quelle vengeance ?\r\n\r\nDans la forêt plane la Walïlü, fascinante créature des contes horrifiques de son enfance...', 'assets/ImageLivre/Filles-de-Walïlü.png', '2020-02-05', 15.5, 'Ecole des loisirs'),
(15, 9, '978-2-226-44633-6', 'Les meilleures énigmes HintHunt', 'Rassemble près de 150 énigmes, enquêtes, casse-têtes, suites logiques, jeux mathématiques, messages codés, devinettes, puzzles, ainsi que dix défis, le tout classé selon cinq niveaux de difficulté. ', 'assets/ImageLivre/Meilleures-enigme.jpg', '2020-01-29', 10.9, ''),
(16, 11, '978-2-37188-074-0', 'La bible Game Boy', 'La bible Game Boy\r\n\r\nImaginée par le légendaire Gunpei Yokoi, inventeur des célèbres jeux électroniques Game et Watch, la Game Boy est l\'une des consoles les plus populaires de tous les temps ! Avec 1,4 million d\'unités vendues en France la première année - un record pour l\'époque - et un total de 118 millions de machines écoulées à travers le monde, la portable monochrome de Nintendo a fait rêver des générations entières de joueurs.\r\n\r\nLancée au Japon en 1989, la Game Boy a su faire tomber les barrières d\'âge et de sexe pour populariser le jeu vidéo comme jamais, permettant à Nintendo de devenir un acteur incontournable de ce marché. Le secret d\'une telle réussite ? Une ludothèque hétéroclite, fascinante d\'ingéniosité et de féerie, soutenue par la vision insolite d\'un créateur génial, aussi fantasque que pragmatique.\r\n\r\nPlus qu\'une simple machine, un morceau d\'histoire. Et qui tient dans le creux de la main, s\'il vous « play »...', 'assets/ImageLivre/la-bible-game-boy.jpg', '2020-01-17', 34.9, 'Les bibles'),
(17, 10, '978-2-37188-073-3', 'L\'histoire de Mario', 'L\'auteur retrace comment le petit quadragénaire brun et moustachu vêtu d\'une salopette, de gants blancs et d\'une casquette rouge, tour à tour charpentier, constructeur et plombier est devenu en dix ans le personnage de jeu vidéo le plus populaire devant Pac-Man et Donkey Kong. Il évoque aussi l\'histoire du jeu vidéo dans les années 1980, ses productions phares, ses innovations et ses crises. ', 'assets/ImageLivre/L_Histoire_de_Mario.jpg', '2019-12-06', 24.9, 'Pix\'n Love'),
(18, 12, '978-2-302-07920-5', 'The legend of Zelda', 'The Legend of ZeldaTM a captivé de nombreux joueurs grâce à ces aventures épiques depuis plus de 30 ans. Soleil Manga et Nintendo sont fiers de vous présenter une encyclopédie complète qui regroupe toutes les informations depuis le premier opus sur console 8-bit (la célèbre NES) jusqu\'à la réédition de Twilight Princess en HD.\r\n\r\nThe Legend of ZeldaTM - Encyclopedia condense une multitude de connaissances qui n\'attendent plus que vous ! Plongez dans les mondes d\'Hyrule à travers les âges. Explorez une immense collection d\'ennemis, d\'objets, de donjons et de villages. Découvrez les récits et les notes des développeurs pour chacun des jeux sortis depuis le début. Enfin, faites face au boss final de cet ouvrage avec une interview du producteur de la série Zelda, Eiji Aonuma !', 'assets/ImageLivre/zelda.jpg', '2019-11-06', 45.9, 'Soleil manga. Shonen');

-- --------------------------------------------------------

--
-- Table structure for table `PANIER`
--

CREATE TABLE `PANIER` (
  `ID` int(11) NOT NULL,
  `ID_COMPTE` char(8) NOT NULL,
  `DT_OUVERT` date NOT NULL,
  `DT_COM` date DEFAULT NULL,
  `DT_LIV` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PANIER`
--

INSERT INTO `PANIER` (`ID`, `ID_COMPTE`, `DT_OUVERT`, `DT_COM`, `DT_LIV`) VALUES
(28, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(29, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(31, 'Fabien', '2020-01-02', '2020-01-02', NULL),
(32, 'Fabien', '2020-01-02', NULL, NULL),
(33, 'normal', '2020-02-08', '2020-02-08', NULL),
(34, 'normal', '2020-02-08', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COMPTE`
--
ALTER TABLE `COMPTE`
  ADD PRIMARY KEY (`USER`);

--
-- Indexes for table `ECRIVAIN`
--
ALTER TABLE `ECRIVAIN`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GENRE`
--
ALTER TABLE `GENRE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `GENRE_LIVRE`
--
ALTER TABLE `GENRE_LIVRE`
  ADD UNIQUE KEY `ID_GENRE` (`ID_GENRE`,`ID_LIVRE`),
  ADD KEY `ID_LIVRE` (`ID_LIVRE`);

--
-- Indexes for table `LIGNE_PANIER`
--
ALTER TABLE `LIGNE_PANIER`
  ADD PRIMARY KEY (`ID_LIVRE`,`ID_PANIER`),
  ADD KEY `ID_PANIER` (`ID_PANIER`);

--
-- Indexes for table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ECRIVAIN` (`ID_ECRIVAIN`);

--
-- Indexes for table `PANIER`
--
ALTER TABLE `PANIER`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_COMPTE` (`ID_COMPTE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ECRIVAIN`
--
ALTER TABLE `ECRIVAIN`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `GENRE`
--
ALTER TABLE `GENRE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `LIVRE`
--
ALTER TABLE `LIVRE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `PANIER`
--
ALTER TABLE `PANIER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `GENRE_LIVRE`
--
ALTER TABLE `GENRE_LIVRE`
  ADD CONSTRAINT `genre_livre_ibfk_1` FOREIGN KEY (`ID_GENRE`) REFERENCES `GENRE` (`ID`),
  ADD CONSTRAINT `genre_livre_ibfk_2` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`);

--
-- Constraints for table `LIGNE_PANIER`
--
ALTER TABLE `LIGNE_PANIER`
  ADD CONSTRAINT `ligne_panier_ibfk_1` FOREIGN KEY (`ID_LIVRE`) REFERENCES `LIVRE` (`ID`),
  ADD CONSTRAINT `ligne_panier_ibfk_2` FOREIGN KEY (`ID_PANIER`) REFERENCES `PANIER` (`ID`);

--
-- Constraints for table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`ID_ECRIVAIN`) REFERENCES `ECRIVAIN` (`ID`);

--
-- Constraints for table `PANIER`
--
ALTER TABLE `PANIER`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`ID_COMPTE`) REFERENCES `COMPTE` (`USER`);
