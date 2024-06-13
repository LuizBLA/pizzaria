-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2024 às 22:10
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buenopizza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aa`
--

CREATE TABLE `aa` (
  `sabor` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aa`
--

INSERT INTO `aa` (`sabor`) VALUES
('ffghghgfm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `buenousuarios`
--

CREATE TABLE `buenousuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='usuarios cadastrados ';

--
-- Extraindo dados da tabela `buenousuarios`
--

INSERT INTO `buenousuarios` (`id`, `nome`, `email`) VALUES
(0, '', ''),
(0, '', ''),
(0, 'Ad.Paloma@gmail.com', 'nathaliafreitas2045@gmail.com'),
(0, 'luiz@gmailcom', 'luiz@gmail.com'),
(0, '', 'regrdsh@gmail.com'),
(0, 'Ad. Paloma', 'nathaliafreitas2045@gmail.com'),
(0, '', 'macedo08iuri@gmail.com'),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, 'maria', 'nathaliafreitas2045@gmail.com'),
(0, '', ''),
(0, 'maria', 'nathaliafreitas2045@gmail.com'),
(0, '', ''),
(0, 'maria', 'Nathaliafreitas2045@gmail.com'),
(0, 'maria', 'Nathaliafreitas2045@gmail.com'),
(0, 'maria', 'Nathaliafreitas2045@gmail.com'),
(0, 'maria', 'nathaliafreitas2045@gmail.com'),
(0, 'maria', 'nathaliafreitas2045@gmail.com'),
(0, '', ''),
(0, 'maria', 'advogadopaloma@gmail.com'),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `pedido` varchar(30) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(30) CHARACTER SET utf8 NOT NULL,
  `borda` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `pedido`, `endereco`, `borda`) VALUES
(10, 'pizza ', 'RUAAZALeIA@gmaqilcom', 'sim'),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
