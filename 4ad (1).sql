-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2022 às 00:05
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
-- Banco de dados: `4ad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_usuario`
--

CREATE TABLE `img_usuario` (
  `id_img` int(11) NOT NULL,
  `nome_img` varchar(60) DEFAULT NULL,
  `foto_end` varchar(90) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `img_usuario`
--

INSERT INTO `img_usuario` (`id_img`, `nome_img`, `foto_end`, `id_usuario`) VALUES
(1, 'FOTO', '../assets/img/img_usuario/166569896363488c936b236.jpg', 2),
(2, 'FOTO', '../assets/img/img_usuario/166569896363488c936b236.jpg', 2),
(3, 'FOTO', '../assets/img/img_usuario/16655103296345abb9c4ecb.jpeg', 3),
(4, 'FOTO', '../assets/img/img_usuario/1665959537634c86718fae7.jpg', 4),
(5, 'FOTO', '../assets/img/img_usuario/1665959608634c86b86fb4c.jpeg', 5),
(6, 'FOTO', '../assets/img/img_usuario/1665959703634c87177b449.jpg', 6),
(7, 'FOTO', '../assets/img/img_usuario/1665959742634c873ed6ad3.jpg', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao_amizade`
--

CREATE TABLE `solicitacao_amizade` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_amg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_amg`
--

CREATE TABLE `tbl_amg` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_amigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_amg`
--

INSERT INTO `tbl_amg` (`id`, `id_usuario`, `id_amigo`) VALUES
(5, 3, 2),
(6, 2, 3),
(7, 4, 2),
(8, 2, 4),
(9, 5, 2),
(10, 2, 5),
(11, 8, 2),
(12, 2, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nick_usuario` varchar(60) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL,
  `email_usuario` varchar(60) NOT NULL,
  `senha_usuario` varchar(300) NOT NULL,
  `bio_usuario` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nick_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `bio_usuario`) VALUES
(2, 'TerraFuscaa', 'Rykelmy', 'rykelmy131@gmail.com', '$2y$10$OrA2jzcuxqcgnIZMuS8pHuXh668rSYt/80T4rX7vwPHTrYC63xh4C', 'Sou um programador'),
(3, '', 'Lucas', 'lucasdiass@gmail.com', '$2y$10$WONv.1Rp1IHUmhtVaSIPPOlTx9ItZtaraStW/vWlvYaUsPTewSyrC', ''),
(4, '', 'Ryciery', 'ryciery@gmail.com', '$2y$10$b0ieq0ankzR7Db4UjiDZqO.iDf.ZB06KF2muh66NfnrDjcwMREYCm', ''),
(5, '', 'Edinaldo', 'edinaldosergio81@gmail.com', '$2y$10$qzsWf0x1WCJXZu5cZhRwf.UEDBKWhtRVIkCnXaF1DfqdCa6BjG4Bm', ''),
(6, '', 'Riquelme', 'corsinrebaixado@derrapada.com', '$2y$10$p.bQDKrqRC8kpoBd.YugIeCBgzHb.qeJqKWjNi7IAmGADAPN6BlBC', ''),
(8, '', 'Carla', 'carla@gmail.com', '$2y$10$4YMC/2c6q/.Uk5dlYk4DVOwEr0ZTNkJyrgp7ax1w69l.VIqbTdJ6q', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `img_usuario`
--
ALTER TABLE `img_usuario`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `solicitacao_amizade`
--
ALTER TABLE `solicitacao_amizade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_amg`
--
ALTER TABLE `tbl_amg`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `img_usuario`
--
ALTER TABLE `img_usuario`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `solicitacao_amizade`
--
ALTER TABLE `solicitacao_amizade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbl_amg`
--
ALTER TABLE `tbl_amg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `img_usuario`
--
ALTER TABLE `img_usuario`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
