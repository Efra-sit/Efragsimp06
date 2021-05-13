-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Mer 12 Mai 2021 à 21:50
-- Version du serveur: 5.0.45
-- Version de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `industriel`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `etudiant`
-- 

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(20) collate utf8_unicode_ci NOT NULL,
  `nom` varchar(100) collate utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) collate utf8_unicode_ci NOT NULL,
  `adresse` varchar(100) collate utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY  (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Contenu de la table `etudiant`
-- 

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `adresse`, `tel`) VALUES 
('GSI01', 'Ralaiharijaona', 'kelie', 'Analamahitsy', 0322456913),
('GSI02', 'Andrianakoto', 'Cris', 'Mahazo', 0325756346),
('GSI03', 'Rainy', 'Zanabary', 'Ankorondrano', 0343311877),
('GSI04', 'Baovola', 'Ram', '67ha', 0334489800);
