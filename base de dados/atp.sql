-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 07:29
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atp`
--
CREATE DATABASE IF NOT EXISTS `atp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atp`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_cadastrador` bigint(250) NOT NULL,
  `nome_cadastrador` varchar(500) NOT NULL,
  `id_emprestador` int(11) NOT NULL,
  `emprestador` varchar(500) NOT NULL,
  `localiza` varchar(100) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `identificador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `objetos`
--

INSERT INTO `objetos` (`id`, `nome`, `id_cadastrador`, `nome_cadastrador`, `id_emprestador`, `emprestador`, `localiza`, `categoria`, `identificador`) VALUES
(27, 'vina', 13, 'larissa', 14, 'lariii', 'aqui', 'Eletro', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `senha`) VALUES
(3, 'Brunno Pedro de Oliveira', 'BlackPearl', 'Brunno,1985'),
(8, 'Carlos Roberto', 'Carlo2', '123456'),
(10, 'Marcos Felipe dos Santos', 'Marcao1998', 'abc'),
(11, 'Aline Silveira', 'Alineee', 'as'),
(12, 'Julia Alcântara da Luz', 'Chocolatose', 'sdfs'),
(13, 'larissa', 'laris', 'la'),
(14, 'lariii', 'lari', 'la'),
(15, 'lari', 'lari', 'la'),
(16, 'asdf', 'asdf', 'asdf');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
