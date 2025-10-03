-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03/10/2025 às 01:50
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eletronicdesire`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
CREATE TABLE IF NOT EXISTS `carrinhos` (
  `id_cliente` int NOT NULL,
  `produtos_carrinho` json DEFAULT NULL,
  `valor_total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nomecompleto_cliente` varchar(255) NOT NULL,
  `datanascimento_cliente` date NOT NULL,
  `cpf_cliente` int NOT NULL,
  `genero_cliente` varchar(255) NOT NULL,
  `telefone_cliente` varchar(80) NOT NULL,
  `endereco_cliente` varchar(255) NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `senha_cliente` varchar(80) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(255) NOT NULL,
  `desc_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `img_produto` varchar(255) NOT NULL,
  `qtd_estoque` int NOT NULL,
  `categoria_produto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `desc_produto`, `preco_produto`, `img_produto`, `qtd_estoque`, `categoria_produto`) VALUES
(1, 'sick', '', 0, '', 0, ''),
(2, 'fernanda', '', 0, '', 0, ''),
(3, '123edswer safado 123', '', 0, '', 0, ''),
(4, 'safado', '', 0, '', 0, ''),
(6, 'sick safado pedroso', '', 0, '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
