-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 09 mars 2023 à 18:28
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `idcontacts` int(11) NOT NULL,
  `lenom` varchar(255) NOT NULL,
  `lemail` varchar(255) NOT NULL,
  `lesujet` varchar(3000) NOT NULL,
  `lemessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE `lien` (
  `idlien` int(11) NOT NULL,
  `titre` varchar(45) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lien`
--

INSERT INTO `lien` (`idlien`, `titre`, `description`, `image`, `url`) VALUES
(5, 'Canva', 'Canva est un outil de conception graphique en ligne qui propose une large gamme de fonctionnalités pour aider les utilisateurs à créer des designs professionnels pour diverses utilisations, tels que les réseaux sociaux, les présentations, les documents, les affiches et les cartes de visite. Les utilisateurs peuvent personnaliser les designs à l\'aide de modèles, d\'images, de polices et de graphiques personnalisables, et la plateforme est largement utilisée par des professionnels, des étudiants et des entrepreneurs dans le monde entier.', 'asset/canvalogo.png', 'https://www.canva.com/'),
(6, 'Codewars', 'CodeWars est une plateforme en ligne proposant des défis de programmation classés par difficulté et thème, où les utilisateurs peuvent soumettre leurs solutions pour examen par la communauté. C\'est un excellent moyen d\'améliorer ses compétences en programmation.', 'asset/codewarslogo.png', 'https://www.codewars.com/'),
(7, 'Figma', 'Figma est un outil de conception d\'interface utilisateur (UI) et de conception d\'expérience utilisateur (UX) basé sur le cloud, utilisé pour créer, collaborer et partager des maquettes de conception pour des applications, des sites web et des interfaces mobiles. Il permet aux concepteurs de travailler ensemble en temps réel, de créer des prototypes interactifs et de partager facilement leur travail avec des développeurs et des parties prenantes.', 'asset/figmalogo.png', 'https://www.figma.com/'),
(8, 'Filezilla', 'FileZilla est un logiciel client FTP (File Transfer Protocol) gratuit et open-source, utilisé pour transférer des fichiers entre un ordinateur local et un serveur distant via Internet. Il permet également de se connecter à des serveurs SFTP (Secure File Transfer Protocol) et FTPS (FTP over SSL/TLS) pour des transferts sécurisés de fichiers. FileZilla offre une interface graphique conviviale et de nombreuses fonctionnalités telles que la gestion de sites, la reprise de transfert interrompu et la gestion des droits d\'accès.', 'asset/FZlogo.png', 'https://filezilla-project.org/'),
(9, 'Github', 'GitHub est une plateforme de développement de logiciels basée sur le cloud. Elle permet aux développeurs de travailler ensemble sur des projets, de stocker et de gérer les versions de code source, de collaborer sur des problèmes, de partager des idées et de contribuer à des projets open source. Les développeurs peuvent héberger leurs projets sur GitHub en utilisant Git, un système de contrôle de version populaire, et peuvent également utiliser les fonctionnalités de gestion de projet intégrées pour organiser et suivre leur travail.', 'asset/githublogo.png', 'https://github.com/'),
(10, 'Grafikart', 'Grafikart est un site web francophone dédié à l\'apprentissage en ligne de la programmation, du design web et de la création de contenu numérique. Le site propose une grande variété de cours et de tutoriels vidéo gratuits et payants, ainsi que des forums de discussion pour aider les utilisateurs à résoudre des problèmes et à partager des connaissances. grafikart.fr est particulièrement populaire parmi les développeurs web débutants et intermédiaires, ainsi que les designers et les créateurs de contenu numérique.', 'asset/grafikartlogo.png', 'https://grafikart.fr/'),
(11, 'Mamp', 'MAMP est un acronyme pour \"Macintosh, Apache, MySQL, et PHP\". C\'est un logiciel gratuit qui permet aux utilisateurs de macOS d\'installer un serveur web local sur leur ordinateur pour tester et développer des sites web dynamiques en utilisant PHP et MySQL. MAMP inclut également des fonctionnalités telles que phpMyAdmin pour la gestion de bases de données MySQL et une interface utilisateur graphique pour la configuration du serveur.', 'asset/mamplogo.png', 'https://www.mamp.info/en/windows/'),
(12, 'Open class room', 'OpenClassrooms est une plateforme en ligne de formation professionnelle qui propose des cours en ligne accessibles à tous, à tout moment et en tout lieu. Elle propose des cours dans des domaines tels que la programmation, le design, la data science, le marketing, l\'entrepreneuriat et bien d\'autres encore. Les cours sont élaborés par des experts du domaine et sont structurés de manière interactive pour faciliter l\'apprentissage. Les apprenants peuvent suivre les cours à leur propre rythme et recevoir un certificat de réussite à la fin de chaque formation.', 'asset/ocrlogo.png', 'https://openclassrooms.com/'),
(13, 'Photopea', 'Photopea est un éditeur de photos en ligne qui offre des fonctionnalités similaires à Adobe Photoshop. Il permet aux utilisateurs de modifier des images, d\'ajouter des effets, de corriger les couleurs, de recadrer, de redimensionner et de créer des graphiques. Il prend en charge une grande variété de formats de fichiers, y compris PSD, AI, Sketch, XD, JPEG, PNG et plus encore. Photopea est accessible via un navigateur Web et peut être utilisé gratuitement ou via un abonnement payant pour accéder à des fonctionnalités avancées.', 'asset/photopealogo.png', 'https://www.photopea.com/'),
(14, 'Replit', 'Replit est une plateforme en ligne qui offre un environnement de développement intégré (IDE) pour plusieurs langages de programmation. Elle permet aux utilisateurs de coder, tester et déployer des projets directement dans le navigateur web, sans avoir besoin d\'installer un logiciel supplémentaire. replit.com offre également des fonctionnalités collaboratives qui permettent aux utilisateurs de travailler sur des projets ensemble en temps réel.', 'asset/replitlogo.png', 'https://replit.com/'),
(15, 'Trello', 'Trello est un outil de gestion de projet en ligne qui permet aux utilisateurs de créer des tableaux organisés en colonnes pour suivre les tâches, les projets et les échéances. Chaque colonne représente une étape du processus et chaque carte représente une tâche ou une idée, que les utilisateurs peuvent déplacer entre les colonnes pour indiquer leur état d\'avancement. Les utilisateurs peuvent également collaborer avec des membres de leur équipe, ajouter des commentaires, des pièces jointes, des dates d\'échéance et des étiquettes pour organiser les cartes. Trello est populaire pour sa simplicité, son interface intuitive et sa flexibilité.', 'asset/trellologo.png', 'https://trello.com/'),
(16, 'Visual studio code', 'Visual Studio Code, un éditeur de code source gratuit et open source développé par Microsoft. Il offre une interface utilisateur intuitive pour écrire, déboguer et déployer du code et prend en charge de nombreux langages de programmation populaires. Le logiciel dispose également de nombreuses fonctionnalités telles que la coloration syntaxique, l\'autocomplétion, la mise en forme automatique, la recherche et le remplacement avancés, la gestion de version, l\'intégration avec Git et bien plus encore. Visual Studio Code est disponible pour Windows, Mac OS et Linux et est devenu très populaire en raison de sa facilité d\'utilisation et de sa polyvalence.', 'asset/vsclogo.png', 'https://code.visualstudio.com/'),
(17, 'Youtube', 'YouTube est une plateforme en ligne de partage de vidéos qui permet aux utilisateurs de publier, regarder, commenter et interagir avec des contenus vidéo de toutes sortes, allant des clips musicaux, des tutoriels, des vlogs, aux films, séries, documentaires, etc. YouTube est accessible gratuitement et permet aux utilisateurs de créer des chaînes pour publier des vidéos sur des sujets de leur choix et de les partager avec une audience mondiale.', 'asset/youtubelogo.png', 'https://www.youtube.com/'),
(18, 'Google', 'Google est un moteur de recherche en ligne qui permet aux utilisateurs de trouver des informations sur le Web en saisissant des mots-clés dans la barre de recherche. Il utilise un algorithme sophistiqué pour classer les pages Web en fonction de leur pertinence par rapport aux termes de recherche saisis par l\'utilisateur. Google est également connu pour ses nombreux autres services, tels que Google Maps, Google Translate, Gmail, YouTube et bien plus encore.', 'asset/googlelogo.png', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE `travaux` (
  `idtravaux` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `travaux`
--

INSERT INTO `travaux` (`idtravaux`, `titre`, `description`, `image_path`, `url`) VALUES
(1, 'first', 'il etait une fois ', 'asset/travaux_prefo.png', 'www.google.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `uniqid` varchar(64) NOT NULL,
  `actif` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`idcontacts`);

--
-- Index pour la table `lien`
--
ALTER TABLE `lien`
  ADD PRIMARY KEY (`idlien`);

--
-- Index pour la table `travaux`
--
ALTER TABLE `travaux`
  ADD PRIMARY KEY (`idtravaux`),
  ADD UNIQUE KEY `idtravaux_UNIQUE` (`idtravaux`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `iduser_UNIQUE` (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `idcontacts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lien`
--
ALTER TABLE `lien`
  MODIFY `idlien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `travaux`
--
ALTER TABLE `travaux`
  MODIFY `idtravaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
