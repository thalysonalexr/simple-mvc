-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Fev-2018 às 04:28
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código do usuário',
  `first_name` varchar(255) NOT NULL COMMENT 'Primeiro nome',
  `last_name` varchar(255) NOT NULL COMMENT 'Sobrenome do usuário',
  `username` varchar(12) NOT NULL COMMENT 'Nome de usuário pra login',
  `password` varchar(50) NOT NULL COMMENT 'Senha de usuário para login',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Thalyson Alexandre', 'Rodrigues de Sousa', 'thalyson619', '12345'),
(2, 'Cristina', 'Vilhalba Constantino', 'cris.cc', 'cristinavilhalba123'),
(3, 'Maria Lourdes', 'Rodrigues Virgens', 'maria', '12345maria'),
(4, 'Joao', 'da Silva', 'joaosilva', '555'),
(5, 'Maicon Antonio', 'Deotado da Costa', 'maiky', '5241111'),
(6, 'Andressa', 'Gerardin', 'andger', '63888'),
(7, 'Clovis Alexandre', 'Tarantini', 'clota', '855clovis'),
(8, 'Karoline Maria', 'Souza', 'karol', '566souza'),
(9, 'Camilla', 'Teobaldi', 'camila', '566camis'),
(10, 'Leticia', 'Costa', 'lele', 'lele12345costa'),
(11, 'Helena Maria', 'da Silva', 'helenaMaria', '555MariaHelena'),
(12, 'Luis Ricardo', 'Gomes', 'luis55', 'luis633Gomes'),
(13, 'Jean', 'Galvão', 'jeje77', 'jeje77'),
(14, 'Amanda', 'Celestina', 'amandinha', '55363amanda'),
(15, 'Luana Alexandre', 'Barreto', 'luana88', 'luanabarreto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
