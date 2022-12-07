-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 20:30
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
(1, 'FOTO', '../assets/img/img_usuario/166941415063813d0631f4e.jpg', 2),
(2, 'FOTO', '../assets/img/img_usuario/166941415063813d0631f4e.jpg', 2),
(3, 'FOTO', '../assets/img/img_usuario/16655103296345abb9c4ecb.jpeg', 3),
(4, 'FOTO', '../assets/img/img_usuario/1665959537634c86718fae7.jpg', 4),
(5, 'FOTO', '../assets/img/img_usuario/1665959608634c86b86fb4c.jpeg', 5),
(6, 'FOTO', '../assets/img/img_usuario/1665959703634c87177b449.jpg', 6),
(7, 'FOTO', '../assets/img/img_usuario/1665959742634c873ed6ad3.jpg', 8),
(8, 'FOTO', '../assets/img/img_usuario/1669624869638474257dca3.jpeg', 20);

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
(20, 2, '0000-00-00 00:00:00'),
(21, 2, '0000-00-00 00:00:00'),
(22, 2, '0000-00-00 00:00:00'),
(23, 2, '0000-00-00 00:00:00'),
(24, 2, '0000-00-00 00:00:00'),
(25, 2, '0000-00-00 00:00:00'),
(26, 2, '0000-00-00 00:00:00'),
(27, 2, '0000-00-00 00:00:00'),
(28, 2, '0000-00-00 00:00:00'),
(29, 2, '0000-00-00 00:00:00'),
(30, 2, '0000-00-00 00:00:00'),
(31, 2, '0000-00-00 00:00:00'),
(32, 2, '0000-00-00 00:00:00'),
(33, 2, '0000-00-00 00:00:00'),
(34, 2, '0000-00-00 00:00:00'),
(35, 2, '0000-00-00 00:00:00'),
(36, 2, '0000-00-00 00:00:00'),
(37, 2, '0000-00-00 00:00:00'),
(38, 2, '0000-00-00 00:00:00'),
(39, 2, '0000-00-00 00:00:00'),
(40, 2, '0000-00-00 00:00:00'),
(41, 2, '0000-00-00 00:00:00'),
(42, 2, '0000-00-00 00:00:00'),
(43, 2, '0000-00-00 00:00:00'),
(44, 2, '0000-00-00 00:00:00'),
(45, 2, '0000-00-00 00:00:00'),
(46, 2, '0000-00-00 00:00:00'),
(47, 2, '0000-00-00 00:00:00'),
(48, 2, '0000-00-00 00:00:00'),
(49, 2, '0000-00-00 00:00:00'),
(50, 2, '0000-00-00 00:00:00'),
(51, 2, '0000-00-00 00:00:00'),
(52, 2, '0000-00-00 00:00:00'),
(53, 2, '0000-00-00 00:00:00'),
(54, 2, '0000-00-00 00:00:00'),
(55, 2, '0000-00-00 00:00:00'),
(56, 2, '0000-00-00 00:00:00'),
(57, 2, '0000-00-00 00:00:00'),
(58, 2, '0000-00-00 00:00:00'),
(59, 2, '0000-00-00 00:00:00'),
(60, 2, '0000-00-00 00:00:00'),
(61, 2, '0000-00-00 00:00:00'),
(62, 2, '0000-00-00 00:00:00'),
(63, 2, '0000-00-00 00:00:00'),
(64, 2, '0000-00-00 00:00:00'),
(65, 2, '0000-00-00 00:00:00'),
(66, 2, '0000-00-00 00:00:00'),
(67, 2, '0000-00-00 00:00:00'),
(68, 2, '0000-00-00 00:00:00'),
(69, 2, '0000-00-00 00:00:00'),
(70, 2, '0000-00-00 00:00:00'),
(71, 2, '0000-00-00 00:00:00'),
(72, 2, '0000-00-00 00:00:00'),
(73, 2, '0000-00-00 00:00:00'),
(74, 2, '0000-00-00 00:00:00'),
(75, 2, '0000-00-00 00:00:00'),
(76, 2, '0000-00-00 00:00:00'),
(77, 2, '0000-00-00 00:00:00'),
(78, 2, '0000-00-00 00:00:00'),
(79, 2, '0000-00-00 00:00:00'),
(80, 2, '0000-00-00 00:00:00'),
(81, 2, '0000-00-00 00:00:00'),
(82, 2, '0000-00-00 00:00:00'),
(83, 2, '0000-00-00 00:00:00'),
(84, 2, '0000-00-00 00:00:00'),
(85, 2, '0000-00-00 00:00:00'),
(86, 2, '0000-00-00 00:00:00'),
(87, 2, '0000-00-00 00:00:00'),
(88, 2, '0000-00-00 00:00:00'),
(89, 2, '0000-00-00 00:00:00'),
(90, 2, '0000-00-00 00:00:00'),
(91, 2, '0000-00-00 00:00:00'),
(92, 2, '0000-00-00 00:00:00'),
(93, 2, '0000-00-00 00:00:00'),
(94, 2, '0000-00-00 00:00:00'),
(95, 2, '0000-00-00 00:00:00'),
(96, 2, '0000-00-00 00:00:00'),
(97, 2, '0000-00-00 00:00:00'),
(98, 2, '0000-00-00 00:00:00'),
(99, 2, '0000-00-00 00:00:00'),
(100, 2, '0000-00-00 00:00:00'),
(101, 2, '0000-00-00 00:00:00'),
(102, 2, '0000-00-00 00:00:00'),
(103, 2, '0000-00-00 00:00:00'),
(104, 2, '0000-00-00 00:00:00'),
(105, 2, '0000-00-00 00:00:00'),
(106, 2, '0000-00-00 00:00:00'),
(107, 2, '0000-00-00 00:00:00'),
(108, 2, '0000-00-00 00:00:00'),
(109, 2, '0000-00-00 00:00:00'),
(110, 2, '0000-00-00 00:00:00'),
(111, 2, '0000-00-00 00:00:00'),
(112, 2, '0000-00-00 00:00:00'),
(113, 2, '0000-00-00 00:00:00'),
(114, 2, '0000-00-00 00:00:00'),
(115, 2, '0000-00-00 00:00:00'),
(116, 2, '0000-00-00 00:00:00'),
(117, 2, '0000-00-00 00:00:00'),
(118, 2, '0000-00-00 00:00:00'),
(119, 2, '0000-00-00 00:00:00'),
(120, 2, '0000-00-00 00:00:00'),
(121, 2, '0000-00-00 00:00:00'),
(122, 2, '0000-00-00 00:00:00'),
(123, 2, '0000-00-00 00:00:00'),
(124, 2, '0000-00-00 00:00:00'),
(125, 2, '0000-00-00 00:00:00'),
(126, 2, '0000-00-00 00:00:00'),
(127, 2, '0000-00-00 00:00:00'),
(128, 2, '0000-00-00 00:00:00'),
(129, 2, '0000-00-00 00:00:00'),
(130, 2, '0000-00-00 00:00:00'),
(131, 2, '0000-00-00 00:00:00'),
(132, 2, '0000-00-00 00:00:00'),
(133, 2, '0000-00-00 00:00:00'),
(134, 2, '0000-00-00 00:00:00'),
(135, 2, '0000-00-00 00:00:00'),
(136, 2, '0000-00-00 00:00:00'),
(137, 2, '0000-00-00 00:00:00'),
(138, 2, '0000-00-00 00:00:00'),
(139, 2, '0000-00-00 00:00:00'),
(140, 2, '0000-00-00 00:00:00'),
(141, 2, '0000-00-00 00:00:00'),
(142, 2, '0000-00-00 00:00:00'),
(143, 2, '0000-00-00 00:00:00'),
(144, 2, '0000-00-00 00:00:00'),
(145, 2, '0000-00-00 00:00:00'),
(146, 2, '0000-00-00 00:00:00'),
(147, 2, '0000-00-00 00:00:00'),
(148, 2, '0000-00-00 00:00:00'),
(149, 2, '0000-00-00 00:00:00'),
(150, 2, '0000-00-00 00:00:00'),
(151, 2, '0000-00-00 00:00:00'),
(152, 2, '0000-00-00 00:00:00'),
(153, 2, '0000-00-00 00:00:00'),
(154, 2, '0000-00-00 00:00:00'),
(155, 2, '0000-00-00 00:00:00'),
(156, 2, '0000-00-00 00:00:00'),
(157, 2, '0000-00-00 00:00:00'),
(158, 2, '0000-00-00 00:00:00'),
(159, 2, '0000-00-00 00:00:00'),
(160, 2, '0000-00-00 00:00:00'),
(161, 2, '0000-00-00 00:00:00'),
(162, 2, '0000-00-00 00:00:00'),
(163, 2, '0000-00-00 00:00:00'),
(164, 2, '0000-00-00 00:00:00'),
(165, 2, '0000-00-00 00:00:00'),
(166, 2, '0000-00-00 00:00:00'),
(167, 2, '0000-00-00 00:00:00'),
(168, 2, '0000-00-00 00:00:00'),
(169, 2, '0000-00-00 00:00:00'),
(170, 2, '0000-00-00 00:00:00'),
(171, 2, '0000-00-00 00:00:00'),
(172, 2, '0000-00-00 00:00:00'),
(173, 2, '0000-00-00 00:00:00'),
(174, 2, '0000-00-00 00:00:00'),
(175, 2, '0000-00-00 00:00:00'),
(176, 2, '0000-00-00 00:00:00'),
(177, 2, '0000-00-00 00:00:00'),
(178, 2, '0000-00-00 00:00:00'),
(179, 20, '0000-00-00 00:00:00'),
(180, 2, '0000-00-00 00:00:00'),
(181, 3, '0000-00-00 00:00:00'),
(182, 2, '0000-00-00 00:00:00'),
(183, 2, '0000-00-00 00:00:00'),
(184, 2, '0000-00-00 00:00:00'),
(185, 2, '0000-00-00 00:00:00'),
(186, 2, '0000-00-00 00:00:00'),
(187, 2, '0000-00-00 00:00:00'),
(188, 2, '0000-00-00 00:00:00'),
(189, 2, '0000-00-00 00:00:00'),
(190, 2, '0000-00-00 00:00:00'),
(191, 2, '0000-00-00 00:00:00'),
(192, 2, '0000-00-00 00:00:00'),
(193, 3, '0000-00-00 00:00:00'),
(194, 2, '0000-00-00 00:00:00'),
(195, 2, '0000-00-00 00:00:00'),
(196, 2, '0000-00-00 00:00:00'),
(197, 2, '0000-00-00 00:00:00'),
(198, 2, '0000-00-00 00:00:00'),
(199, 2, '0000-00-00 00:00:00'),
(200, 2, '0000-00-00 00:00:00'),
(201, 2, '0000-00-00 00:00:00'),
(202, 2, '0000-00-00 00:00:00'),
(203, 2, '0000-00-00 00:00:00'),
(204, 2, '0000-00-00 00:00:00'),
(205, 2, '0000-00-00 00:00:00'),
(206, 2, '0000-00-00 00:00:00'),
(207, 2, '0000-00-00 00:00:00'),
(208, 2, '0000-00-00 00:00:00'),
(209, 2, '0000-00-00 00:00:00'),
(210, 2, '0000-00-00 00:00:00'),
(211, 2, '0000-00-00 00:00:00');

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
(2, 'Online', 'Catchel', 'Rykelmy', 'rykelmy131@gmail.com', '$2y$10$Dhabwu6.WXxM8DsoY5LPOOodTT3QOV.5bZDUp.X2X3cC/jNWJfQ2u', 'Sou um programador'),
(3, 'Offline', '', 'Lucas', 'lucasdiass@gmail.com', '$2y$10$WONv.1Rp1IHUmhtVaSIPPOlTx9ItZtaraStW/vWlvYaUsPTewSyrC', ''),
(4, 'Offline', '', 'Ryciery', 'ryciery@gmail.com', '$2y$10$b0ieq0ankzR7Db4UjiDZqO.iDf.ZB06KF2muh66NfnrDjcwMREYCm', ''),
(5, 'Offline', '', 'Edinaldo', 'edinaldosergio81@gmail.com', '$2y$10$qzsWf0x1WCJXZu5cZhRwf.UEDBKWhtRVIkCnXaF1DfqdCa6BjG4Bm', ''),
(6, 'Offline', '', 'Riquelme', 'corsinrebaixado@derrapada.com', '$2y$10$p.bQDKrqRC8kpoBd.YugIeCBgzHb.qeJqKWjNi7IAmGADAPN6BlBC', ''),
(8, 'Offline', '', 'Carla', 'carla@gmail.com', '$2y$10$4YMC/2c6q/.Uk5dlYk4DVOwEr0ZTNkJyrgp7ax1w69l.VIqbTdJ6q', ''),
(12, 'Offline', '', 'Eduardo Bevenuti', 'rykelmy131@gmail.com', '$2y$10$iL7sSNNA.cmWj2y8uzCfJeh3ggwD9VdsIDup.GZUzV3OXPKJRDRWK', ''),
(13, 'Offline', 'redyoukai', 'mauriro', 'mauriciobentini@gmail.com', '$2y$10$BEGaxbYEee73bkrd.Swdoeg8CRSDQndcHWmcktLQll8C0HjwzD3Aq', ''),
(20, 'Offline', 'TerraFusca', 'Robertinho', 'rykelmy131@gmail.com', '$2y$10$GAwHi7B0ASSswM7ErcHatebe88WKmqmiVFuOihUd1i8fsq2LTXRH6', 'Sou um programador não muito bom'),
(21, 'Offline', '', 'Zoio', 'rykelmy131@gmail.com', '$2y$10$84BWxgZd7juRBBKZGf3T1O4LmASDK18j9SAgAW/hO2vSUzXtwy0.O', '');

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
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
