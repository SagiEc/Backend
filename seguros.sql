-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/03/2025 às 00:29
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsegurados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `seguros`
--

CREATE TABLE `seguros` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `PLACAVEICULO` varchar(8) DEFAULT NULL,
  `APOLICE` varchar(30) DEFAULT NULL,
  `PROPOSTA` varchar(30) NOT NULL,
  `VIGENCIA` date NOT NULL,
  `ATIVO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `seguros`
--

INSERT INTO `seguros` (`ID`, `NOME`, `CPF`, `PLACAVEICULO`, `APOLICE`, `PROPOSTA`, `VIGENCIA`, `ATIVO`) VALUES
(37, 'Viviane', '13242444422', 'AED4231', '1351351', '341261235132', '2025-03-26', 1),
(38, 'sara', '24145632345', 'awp1031', '312616423643', '12353462642', '0000-00-00', 1),
(42, 'Luiz', '31212093535', 'AWP1233', '24141', '215123421412', '2025-03-29', 1),
(46, 'Felipe', '09212190212', 'LAW1921', '5476489645', '23152346234', '2025-03-30', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `seguros`
--
ALTER TABLE `seguros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
