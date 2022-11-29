-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 29 Novembre 2022 à 21:44
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `grpa14`
--
CREATE DATABASE IF NOT EXISTS `grpa14` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grpa14`;

-- --------------------------------------------------------

--
-- Structure de la table `carousel_image`
--

CREATE TABLE IF NOT EXISTS `carousel_image` (
`id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `path` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `carousel_image`
--

INSERT INTO `carousel_image` (`id`, `project_id`, `path`) VALUES
(1, 1, '../img/osu_website_screens/p1_preview_1.jpg'),
(2, 1, '../img/osu_website_screens/p1_preview_2.jpg'),
(3, 1, '../img/osu_website_screens/p1_preview_3.jpg'),
(4, 1, '../img/osu_website_screens/p1_preview_4.jpg'),
(6, 2, '../img/ssa_screens/p3_preview_1.jpg'),
(7, 2, '../img/ssa_screens/p3_preview_2.jpg'),
(8, 2, '../img/ssa_screens/p3_preview_3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`project_id` int(11) NOT NULL,
  `project_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `h1` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c1_title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c1_content` text CHARACTER SET utf8 NOT NULL,
  `c2_title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c2_content` text CHARACTER SET utf8 NOT NULL,
  `c3_title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c3_content` text CHARACTER SET utf8 NOT NULL,
  `c4_title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c4_content` text CHARACTER SET utf8 NOT NULL,
  `c5_title` varchar(80) CHARACTER SET utf8 NOT NULL,
  `c5_content` text CHARACTER SET utf8 NOT NULL,
  `parallax_path` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `h1`, `c1_title`, `c1_content`, `c2_title`, `c2_content`, `c3_title`, `c3_content`, `c4_title`, `c4_content`, `c5_title`, `c5_content`, `parallax_path`) VALUES
(1, 'osu! Fan-Website', 'osu! fan-made website', 'Who made this awesome website?', 'This website was made by a team of three people composed by Anaëlle, Esteban and Antoine! It was made as a project for the Gaming Campus.', 'Context', 'This website is presenting osu! which is a game based on rythm and high speed reflexes. It took us approximately one week of hard work.', 'What can you learn on our website?', 'The website presents the basic rules of osu! as well as some facts about the game. You will discover the amazing gameplay of the game.', 'What did we learn making this project?', 'In the first place, we''ve learnt that we are able, with a bit of motivation, to learn a lot of skills in such a short period of time. In our case, all three of us learnt to code a website in HTML5 and CSS3!', 'What were the challenges while making this website?', 'We didn''t know the HTML5 and CSS3 so we had to learn as we went, while under the pressure of only having one week to finish the project!', '../img/osu_website_screens/osu_parallax.jpg'),
(2, 'Star Shooting Alliance', 'Brackeys Game Jam 2022.2', 'What is Star Shooting Alliance?', 'What is Star Shooting Alliance?', 'How was it made?', 'The game was made with Unity in C# entirely by Padrox except the assets which come from an artist called <a href="https://twitter.com/finalbossblues?" rel="nofollow" target="_blank">@finalbossblues</a>', 'How SSA was born?', 'The game jam theme was "You are not alone", so the idea of the game was to recruit allies to get stronger tofight invading enemies who are getting even stronger each fight. Get allies to overcome difficulties!', 'What challenges did I encounter?', 'This was a really difficult week because I was always under pressure. I aimed to something way to hard for\r\nmy first game jam. I ran out of time and had no choice to give up on sounds. It was a really interesting\r\nexperience still and I can''t wait to participate to my next Jam!', 'Where can you play the game?', 'The game is available as free to play on my itch.io page: <a href="https://itch.io/search?q=PadroxDev" target="_blank" rel="nofollow">PadroxDev</a>! Feel free to test it out!', '../img/ssa_screens/ssa_parallax.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(80) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `firstname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(40) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `carousel_image`
--
ALTER TABLE `carousel_image`
 ADD PRIMARY KEY (`id`), ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`project_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `carousel_image`
--
ALTER TABLE `carousel_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
