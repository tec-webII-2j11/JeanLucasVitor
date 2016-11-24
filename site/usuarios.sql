-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 24-Nov-2016 às 22:40
-- Versão do servidor: 5.5.50-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(250) NOT NULL,
  `sobrenome` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `csenha` varchar(250) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `sobrenome`, `endereco`, `cidade`, `email`, `senha`, `csenha`, `id`) VALUES
('Zeca', 'Do Santos', 'Av Bolonha', 'SÃ£o Paulo', 'zecabolonha@gmail.com', '102030', '102030', NULL),
('bruno', 'bruno', 'burno', 'bruno', 'bruno@bruno.com', 'bruno', 'bruno', NULL),
('bruno', 'carvalho', 'av carvalho', 'sao paulo', 'bruno@carvalho.com', '660609b171607ff3dcd294929e5d8239736f4298', '660609b171607ff3dcd294929e5d8239736f4298', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
