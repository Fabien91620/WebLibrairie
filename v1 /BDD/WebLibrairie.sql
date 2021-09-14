-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 11 juin 2019 à 20:39
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `weblibrairie`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`) VALUES
(1, 'Hugo', 'Victor'),
(2, 'Camus', 'Albert'),
(3, 'Antoine', 'Saint-Exupéry'),
(4, 'Alexandre', 'Dumas');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `nom`, `prenom`, `adresse`, `ville`, `codePostal`, `tel`, `email`, `mdp`) VALUES
(1, 'barrios', 'fabien', '2 impasse voltaire', 'La ville du bois', '91620', '0666234074', 'adresse@gmail.fr', 'fabien'),
(2, 'sqd', 'des', 'dsl', 'dq', '07987', '0697960695', 'dsqd@fszf.fr', 'dsqdsfd'),
(3, 'fabien', 'fabien', 'dsqdsqd', 'sqdqsd', '12134', '0989098900', 'dsqdqsd@efdezf.fr', 'khqsgdkezf'),
(4, 'abou', 'yousra', '53 bis avenue de la motte Picquet ', 'paris ', '75015', '0695965206', 'yousraabou17@gmail.com', 'yousra'),
(5, 'Fabien', 'Fabien', 'dezdeded', 'dedede', '91320', '0987897909', 'SCDC@sdzd.fr', 'abc');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resumer` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `dateParution` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `PU` float NOT NULL,
  `idAuteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `ISBN`, `titre`, `resumer`, `image`, `dateParution`, `genre`, `PU`, `idAuteur`) VALUES
(1, '9781856051859', 'Les Misérables', 'Le récit s\'organise au tour de Jean Valjean, ancien forçat, depuis sa sortie de prison en 1815 jusqu\'à sa mort, en 1833, dans les bras de Cosette et de Maruis. Mais autour de Jean Valjean, apparaissant aussi les destinées d\'autre misérables ; Fantine, ouvrière obliger de confier Cosette, sa fille, à des inconnus, les Thénardier qui la traiteront comme un esclave. Marius, qui tombe amoureux de Cosette, et qui s\'engagera sur les barricades lors de l\'insurrection de 1832. Gavroche, gamin de Paris , qui sera tué, en chantant, sur une barricade.', 'assets/ImageLivre/LesMiserables.jpg', '1892', 'Roman', 7.7, 1),
(2, '9781508560449', 'L\'étranger\r\n', 'Le narrateur, Meursault, employé de bureau à Alger, apprend que sa mère est morte, dans un asile. Il va l\'enterrer sans larmes, et sous un soleil de plomb qui ne fait qu\'augmenter son envie d\'en finir avec la cérémonie. De retour à Alger, il va se baigner et retrouve une ancienne collègue, Marie. Ils vont voir un film comique au cinéma, et elle devient sa maîtresse. Un soir, Meursault croise Salamano, un voisin, et est invité par Raymond, un autre voisin de palier. Ce dernier, ancien boxeur, lui raconte sa bagarre avec le frère de sa maîtresse, et lui demande d\'écrire une lettre qui servira sa vengeance. Quelques jours plus tard, Raymond se bat avec sa maîtresse et la police intervient. Meursault accepte de l\'accompagner au commissariat. Invité par Raymond à passer un dimanche au bord de la mer dans le cabanon d\'un ami, Masson, Meursault s\'y rend avec Marie. Après le repas, les hommes se promènent sur la plage et rencontrent deux Arabes, dont le frère de la maîtresse de Raymond. Ils se battent et Raymond est blessé. De retour au cabanon, Meursault le tempère et lui prend son revolver, pour lui éviter de tuer. Reparti seul sur la plage, il retrouve par hasard le frère, qui sort un couteau. Assommé par le poids du soleil, il se crispe sur le revolver et le coup part tout seul; mais Meursault tire quatre autres coups sur le corps inerte.  Meursault est emprisonné. L\'instruction va durer onze mois. Il ne manifeste aucun regret lorsqu\'il est interrogé par le juge, aucune peine lorsque son avocat l\'interroge sur les sentiments qui le liaient à sa mère. Le souvenir, le sommeil et la lecture d\'un vieux morceau de journal lui permettent de s\'habituer à sa condition. Les visites de Marie s\'espacent. Le procès débute avec l\'été. L\'interrogatoire des témoins par le procureur montre que Meursault n\'a pas pleuré à l\'enterrement de sa mère, qu\'il s\'est amusé avec Marie dès le lendemain et qu\'il a fait un témoignage de complaisance en faveur de Raymond, qui s\'avère être un souteneur. Les témoignages favorables de Masson et Salamano sont à peine écoutés. Le procureur plaide le crime crapuleux, exécuté par un homme au coeur de criminel et insensible, et réclame la tête de l\'accusé. L\'avocat plaide la provocation et vante les qualités morales de Meursault, mais celui-ci n\'écoute plus. Le président, après une longue attente, annonce la condamnation à mort de l\'accusé. Dans sa cellule, Meursault pense à son exécution, à son pourvoi et à Marie, qui ne lui écrit plus. L\'aumonier lui rend visite, malgré son refus de le rencontrer. Meursault est furieux contre ses paroles, réagit violemment et l\'insulte. Après son départ, il se calme, réalise qu\'il est heureux et espère, pour se sentir moins seul, que son exécution se déroulera devant une foule nombreuse et hostile.', 'assets/ImageLivre/Letranger.jpg', '1942', 'Conte philosophique', 6.2, 2),
(3, '9785699669202', 'Le petit prince', 'Un aviateur, le narrateur du conte, se bloque avec son avion au milieu du désert du Sahara à la suite d’une panne de moteur. Alors qu’il tente de réparer son avion, un petit garçon apparaît et lui demande de dessiner un mouton : « S’il vous plaît… dessine-moi un mouton ! ». Jour après jour, le narrateur découvre l’histoire du Petit Prince. Il lui raconte qu’il vient d’une autre planète : “l’astéroïde B 612», une planète très petite à peine plus grande qu’une maison où il a laissé derrière lui trois volcans et une rose, une fleur unique dont il est amoureux. Le petit prince confie à l’aviateur avoir peur que le mouton qu’il lui a dessiné fasse du mal à sa rose. Le petit prince lui raconte aussi qu’il a visité d’autres planètes avant d’arriver sur la Terre. D’une planète à une autre, il a rencontré des gens bizarres: un roi qui prétend régner sur tout avec le pouvoir absolu, un vaniteux qui se voit comme l’homme le plus beau et le plus intelligent alors qu’il est seul sur sa minuscule planète, un homme d’affaires propriétaire d’étoiles qui passe son temps à les compter, un ivrogne qui boit pour oublier qu’il boit, l’allumeur de réverbères qui effectue un travail absurde et ininterrompu et un vieux monsieur géographe qui écrit, dans des livres énormes les informations portées à lui par les explorateurs. Sur la Terre, le Petit Prince a rencontré un renard, il lui a appris qu’il est important de se faire des amis qu’on doit les apprivoiser et les considérer comme des êtres uniques. Chaque jour l’aviateur apprend de nouvelles choses sur le petit prince, sur ses sentiments, ses peurs, ses doutes, son départ, son voyage et sur sa planète. Huit jours après l’atterrissage dans le désert, l’heure de la séparation des deux amis est venue. Afin de retourner sur sa planète, le petit prince a recours au serpent qui résout toutes les énigmes. Le petit prince repart vers sa planète en laissant le narrateur tout seul. Enfin, l’aviateur réussi à réparer son avion et quitte lui aussi le désert en espérant revoir le petit prince un jour.', 'assets/ImageLivre/petitprince.jpg', '1943', 'Fable', 6.8, 3),
(4, '9788026803652', 'Les trois mousquetaires', 'Un des romans les plus lus d\'Alexandre Dumas, le roman « Les Trois Mousquetaires » plonge les lecteurs dans les fascinantes aventures d\'un pauvre garçon de 18 ans surnommé d\'Artagnan avec les 3 mousquetaires de Louis XIII : Athos, Aramis et Porthos. Les quatre, ensemble, tentent de défendre l\'image de la souveraine Anne d\'Autriche, en s\'opposant au cardinal de Richelieu et ses agents. Ce roman d\'épée et de cape a connu un grand succès juste après sa publication en 1844 grâce à ses différents combats et à ses épisodes romanesques surprenants. Il a été adapté à plusieurs reprises au cinéma, au théâtre et à la télévision. C\'est une source d\'inspiration pour de nombreux auteurs et éditeurs. De nouveaux épisodes du roman ont rapidement fait leur apparition, du vivant de son principal auteur : Alexandre Dumas. Une traduction en anglais en 3 versions différentes a même été faite à partir de 1846. L\'auteur a choisi de situer le roman pendant la période où régnait Louis XIII, en 1652. Cette histoire devient un ouvrage littéraire important qui est lié de manière étroite à l\'histoire du duc de La Rochefoucauld.', 'assets/ImageLivre/mousquetaire.jpg', '1844', 'Aventure', 4.9, 4),
(5, '9782761341028', 'Notre-Dame de Paris', 'Le roman Notre Dame de Paris de Victor Hugo raconte l\'histoire d\'amour entre Quasimodo, un personnage laid et hideux et Esmeralda, femme bohémienne d\'une beauté remarquable. Un troisième protagoniste s\'ajoute à la liste des personnages : Frollo, un archidiacre de Notre Dame de Paris qui tomba fou amoureux de la belle Esmeralda. Il ordonna alors à Quasimodo (qu\'il éléva et éduqua) de s\'emparer de la belle. Elle est sauvée par la suite, par le capitaine Phoebus dont elle tombe amoureuse. Mais Frollo poignarde Phoebus et accuse Esmeralda de ce meurtre. Pour aider la jeune bohémienne, Quasimodo entraîne Esmeralda dans la cathédrale pour lui offrir son asile. Il en tombe éperdument amoureux. Esmeralda condamnée, meurt sous les yeux de Quasimodo et Frollo qui assistent à sa pendaison en haut de la cathédrale Notre Dame. Furieux, Quasimodo décide alors de se venger et rejoint pour l\'éternité Esmeralda', 'assets/ImageLivre/notreDame.png', '1831', 'Drame', 10.2, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAuteur` (`idAuteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`idAuteur`) REFERENCES `auteur` (`id`);
