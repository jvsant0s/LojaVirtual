-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2022 às 14:36
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comercio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_restrito`
--

CREATE TABLE `acesso_restrito` (
  `pk_restrito` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso_restrito`
--

INSERT INTO `acesso_restrito` (`pk_restrito`, `nome`, `email`, `telefone`, `login`, `senha`) VALUES
(1, 'Administrador', '(21) 0000-0000', 'admin@admin.com', 'admin', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(60) COLLATE utf8_bin NOT NULL,
  `numero` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `senha` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `endereco`, `numero`, `email`, `senha`) VALUES
(5, 'Ana', 'Rua  dd', '1', 'ana@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codped` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sub` float NOT NULL,
  `total` float NOT NULL,
  `idcliente` int(11) NOT NULL,
  `codproduto` int(11) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codped`, `qtd`, `sub`, `total`, `idcliente`, `codproduto`, `datacompra`) VALUES
(1, 1, 9.5, 9.5, 5, 72, '2022-10-17'),
(2, 1, 2.5, 11.5, 5, 71, '2022-10-17'),
(3, 1, 15, 15, 5, 70, '2022-10-17'),
(4, 1, 15, 15, 5, 70, '2022-10-17'),
(5, 1, 2.5, 17.5, 5, 71, '2022-10-17'),
(6, 1, 9.5, 26.5, 5, 72, '2022-10-17'),
(7, 1, 5, 5, 5, 73, '2022-10-17'),
(8, 1, 9.5, 14.5, 5, 72, '2022-10-17'),
(9, 1, 2.5, 16.5, 5, 71, '2022-10-17'),
(10, 1, 5, 0, 5, 73, '2022-10-17'),
(11, 1, 9.5, 0, 5, 72, '2022-10-17'),
(12, 2, 1, 1, 5, 75, '2022-10-17'),
(13, 1, 15, 16, 5, 70, '2022-10-17'),
(14, 1, 5, 21, 5, 73, '2022-10-17'),
(15, 1, 5, 5000, 5, 73, '2022-10-17'),
(16, 1, 2.5, 2505, 5, 71, '2022-10-17'),
(17, 1, 9.5, 9502.5, 5, 72, '2022-10-17'),
(18, 1, 15, 15000, 5, 70, '2022-10-17'),
(19, 1, 9.5, 9515, 5, 72, '2022-10-17'),
(20, 3, 7.5, 7509.52, 5, 71, '2022-10-17'),
(21, 2, 10, 10010, 5, 73, '2022-10-17'),
(22, 1, 15, 15025, 5, 70, '2022-10-17'),
(23, 1, 15, 15015, 5, 70, '2022-10-17'),
(24, 1, 5, 5020.02, 5, 73, '2022-10-17'),
(25, 1, 9.5, 9.5, 5, 72, '2022-10-17'),
(26, 1, 15, 15, 5, 70, '2022-10-17'),
(27, 1, 5, 5.015, 5, 73, '2022-10-17'),
(28, 1, 200, 200, 5, 76, '2022-10-17'),
(29, 1, 2.5, 2.7, 5, 71, '2022-10-17'),
(30, 2, 30, 30, 5, 70, '2022-10-17'),
(31, 2, 19, 19.03, 5, 72, '2022-10-17'),
(32, 2, 1, 1.019, 5, 75, '2022-10-17'),
(33, 1, 9.5, 9.5, 5, 72, '2022-10-19'),
(34, 1, 500, 509, 5, 75, '2022-10-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codproduto` int(11) NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categoria` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `preco` float(10,2) NOT NULL,
  `imagem` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codproduto`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(70, 'Macbook pro 2022', 'Computador', 15000.00, 'mac.png'),
(71, 'PC Dell', 'Computador', 2500.00, 'pc.png'),
(72, 'RTX 3090 TI', 'Hardware', 9500.00, 'rtx.jpg'),
(73, 'i9 10900k', 'Hardware', 5000.00, 'i9.png'),
(74, 'ryzen 5', 'Hardware', 5500.00, 'ryzen.jpg'),
(75, 'Teclado Logitech', 'Periferico', 500.00, 'teclado.jpg'),
(76, 'Mouse Logitech', 'Periferico', 200.00, 'mouse.png'),
(77, 'Headset Logitech', 'Periferico', 700.00, 'headset.png'),
(78, 'Iphone 12', 'Smartfone', 10000.00, 'iphone.png'),
(79, 'Poco x4', 'Smartfone', 3000.00, 'pocox4.png'),
(80, 'TV 50\"', 'TV', 4000.00, 'tv1.png'),
(81, 'TV 42\"', 'TV', 3000.00, 'tv2.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  ADD PRIMARY KEY (`pk_restrito`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codped`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  MODIFY `pk_restrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
