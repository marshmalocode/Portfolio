-- phpMyAdmin SQL Dump

-- version 5.1.0

-- https://www.phpmyadmin.net/

--

-- Hôte : localhost:8889

-- Généré le : jeu. 23 fév. 2023 à 20:51

-- Version du serveur :  5.7.34

-- Version de PHP : 7.4.21

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;

SET
    @OLD_FOREIGN_KEY_CHECKS = @ @FOREIGN_KEY_CHECKS,
    FOREIGN_KEY_CHECKS = 0;

SET
    @OLD_SQL_MODE = @ @SQL_MODE,
    SQL_MODE = 'TRADITIONAL,ALLOW_INVALID_DATES';

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

--

-- Base de données : `portfolio`

--

DROP DATABASE IF EXISTS `basecrud`;

CREATE DATABASE
    IF NOT EXISTS `basecrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `portfolio` ;

--

-- Structure de la table `contacts`

--

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE
    IF NOT EXISTS `contacts` (
        `idcontacts` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `email_contact` varchar(255) NOT NULL,
        `message` varchar(3000) NOT NULL,
        `create_time` varchar(45) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------

--

-- Structure de la table `lien`

--

DROP TABLE IF EXISTS `lien`;

CREATE TABLE
    IF NOT EXISTS `lien` (
        `idlien` int(11) NOT NULL,
        `titre` varchar(45) NOT NULL,
        `description` varchar(45) NOT NULL,
        `image` varchar(45) NOT NULL,
        `url` varchar(45) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------

--

-- Structure de la table `travaux`

--

DROP TABLE IF EXISTS `travaux`;

CREATE TABLE
    IF NOT EXISTS `travaux` (
        `idtravaux` int(11) NOT NULL,
        `titre` varchar(250) NOT NULL,
        `description` varchar(5000) NOT NULL,
        `image_path` varchar(500) NOT NULL,
        `url` varchar(300) NOT NULL,
        `create_time` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------

--

-- Structure de la table `user`

--

CREATE TABLE
    IF NOT EXISTS `user` (
        `iduser` int(11) NOT NULL,
        `username` varchar(16) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `create_time` timestamp NULL DEFAULT NULL,
        `uniqid` varchar(64) NOT NULL,
        `actif` varchar(45) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--

-- Index pour les tables déchargées

--

--

-- Index pour la table `contacts`

--

ALTER TABLE `contacts` ADD PRIMARY KEY (`idcontacts`);

--

-- Index pour la table `lien`

--

ALTER TABLE `lien` ADD PRIMARY KEY (`idlien`);

--

-- Index pour la table `travaux`

--

ALTER TABLE `travaux`
ADD PRIMARY KEY (`idtravaux`),
ADD
    UNIQUE KEY `idtravaux_UNIQUE` (`idtravaux`);

--

-- Index pour la table `user`

--

ALTER TABLE `user`
ADD PRIMARY KEY (`iduser`),
ADD
    UNIQUE KEY `iduser_UNIQUE` (`iduser`);

--

-- AUTO_INCREMENT pour les tables déchargées

--

--

-- AUTO_INCREMENT pour la table `contacts`

--

ALTER TABLE
    `contacts` MODIFY `idcontacts` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT pour la table `lien`

--

ALTER TABLE `lien` MODIFY `idlien` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT pour la table `travaux`

--

ALTER TABLE
    `travaux` MODIFY `idtravaux` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT pour la table `user`

--

ALTER TABLE `user` MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;

SET SQL_MODE=@OLD_SQL_MODE;

SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;