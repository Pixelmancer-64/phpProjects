-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 11-Maio-2022 às 20:02
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinedesweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes_assistidos`
--

DROP TABLE IF EXISTS `filmes_assistidos`;
CREATE TABLE IF NOT EXISTS `filmes_assistidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  `avaliacao` decimal(9,1) NOT NULL DEFAULT '0.0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_filme_titulo` (`titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes_assistidos`
--

INSERT INTO `filmes_assistidos` (`id`, `titulo`, `avaliacao`) VALUES
(1, 'Interstelar', '9.8'),
(2, 'Amor a toda prova', '9.7'),
(3, 'Simplesmente amor', '9.5'),
(4, 'Gladiador', '8.9'),
(5, 'Django livre', '9.3'),
(6, 'Entre as facas e segredos', '9.5'),
(7, 'Matrix', '5.5'),
(8, 'Gravidade', '6.9'),
(9, 'Pulp fiction', '9.4'),
(10, 'As branquelas', '5.4'),
(11, 'Efeito borboleta', '9.5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
