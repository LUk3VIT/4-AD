-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2022 às 14:32
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
(1, 'FOTO', '../assets/img/img_usuario/16667127016358047d978b4.jpg', 2),
(2, 'FOTO', '../assets/img/img_usuario/16667127016358047d978b4.jpg', 2),
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
(7, 4, 2),
(8, 2, 4),
(9, 5, 2),
(10, 2, 5),
(11, 8, 2),
(12, 2, 8),
(13, 3, 2),
(14, 2, 3),
(15, 6, 2),
(16, 2, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_online`
--

CREATE TABLE `tbl_online` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hora_entrada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_online`
--

INSERT INTO `tbl_online` (`id`, `id_usuario`, `hora_entrada`) VALUES
(3, 4, '0000-00-00 00:00:00'),
(4, 4, '0000-00-00 00:00:00'),
(5, 4, '0000-00-00 00:00:00'),
(6, 4, '0000-00-00 00:00:00'),
(7, 4, '0000-00-00 00:00:00'),
(8, 2, '0000-00-00 00:00:00'),
(9, 2, '0000-00-00 00:00:00'),
(10, 2, '0000-00-00 00:00:00'),
(11, 2, '0000-00-00 00:00:00'),
(12, 2, '0000-00-00 00:00:00'),
(13, 4, '0000-00-00 00:00:00'),
(14, 2, '0000-00-00 00:00:00'),
(15, 2, '0000-00-00 00:00:00'),
(16, 2, '0000-00-00 00:00:00'),
(17, 2, '0000-00-00 00:00:00'),
(18, 2, '0000-00-00 00:00:00'),
(19, 2, '0000-00-00 00:00:00'),
(20, 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `sessao_status` varchar(50) NOT NULL,
  `nick_usuario` varchar(60) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL,
  `email_usuario` varchar(60) NOT NULL,
  `senha_usuario` varchar(300) NOT NULL,
  `bio_usuario` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `sessao_status`, `nick_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `bio_usuario`) VALUES
(2, 'Online', '', 'Rykelmy', 'rykelmy131@gmail.com', '$2y$10$qj2QZcHUi283GU8gTRpo6.pOzW3HTfsg8XeSOgw4UdbbtcMMlDVry', 'Sou um programador'),
(3, 'Offline', '', 'Lucas', 'lucasdiass@gmail.com', '$2y$10$WONv.1Rp1IHUmhtVaSIPPOlTx9ItZtaraStW/vWlvYaUsPTewSyrC', ''),
(4, 'Offline', '', 'Ryciery', 'ryciery@gmail.com', '$2y$10$b0ieq0ankzR7Db4UjiDZqO.iDf.ZB06KF2muh66NfnrDjcwMREYCm', ''),
(5, 'Offline', '', 'Edinaldo', 'edinaldosergio81@gmail.com', '$2y$10$qzsWf0x1WCJXZu5cZhRwf.UEDBKWhtRVIkCnXaF1DfqdCa6BjG4Bm', ''),
(6, 'Offline', '', 'Riquelme', 'corsinrebaixado@derrapada.com', '$2y$10$p.bQDKrqRC8kpoBd.YugIeCBgzHb.qeJqKWjNi7IAmGADAPN6BlBC', ''),
(8, 'Offline', '', 'Carla', 'carla@gmail.com', '$2y$10$4YMC/2c6q/.Uk5dlYk4DVOwEr0ZTNkJyrgp7ax1w69l.VIqbTdJ6q', ''),
(12, 'Offline', '', 'Eduardo Bevenuti', 'rykelmy131@gmail.com', '$2y$10$iL7sSNNA.cmWj2y8uzCfJeh3ggwD9VdsIDup.GZUzV3OXPKJRDRWK', ''),
(13, 'Offline', 'redyoukai', 'mauriro', 'mauriciobentini@gmail.com', '$2y$10$BEGaxbYEee73bkrd.Swdoeg8CRSDQndcHWmcktLQll8C0HjwzD3Aq', '');

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
-- Índices para tabela `tbl_online`
--
ALTER TABLE `tbl_online`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_amg`
--
ALTER TABLE `tbl_amg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbl_online`
--
ALTER TABLE `tbl_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
