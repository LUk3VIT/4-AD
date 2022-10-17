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
-- Banco de dados: `chat_4ad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_geral`
--

CREATE TABLE `chat_geral` (
  `id_msg` int(11) NOT NULL,
  `data_msg` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat_geral`
--

INSERT INTO `chat_geral` (`id_msg`, `data_msg`, `msg`, `id_usuario`, `nome_usuario`) VALUES
(22, '17/10/2022', 'AAAA', 2, 'Rykelmy'),
(23, '17/10/2022', 'Bao Dia', 2, 'Rykelmy'),
(25, '17/10/2022', 'Bao Dia', 2, 'Rykelmy'),
(26, '17/10/2022', 'Bao Dia', 2, 'Rykelmy'),
(27, '17/10/2022', 'Bao Dia', 2, 'Rykelmy'),
(28, '17/10/2022', 'Bao Dia', 2, 'Rykelmy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_privado`
--

CREATE TABLE `chat_privado` (
  `id_msg` int(11) NOT NULL,
  `data_msg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `msg` text NOT NULL,
  `nome_usuario` varchar(60) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_dest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat_privado`
--

INSERT INTO `chat_privado` (`id_msg`, `data_msg`, `msg`, `nome_usuario`, `id_usuario`, `id_dest`) VALUES
(1, '2022-10-12 11:57:48', ' Oi Parceiro', 'Rykelmy', 2, 4),
(3, '2022-10-12 11:58:35', ' Oi Parceiro', 'Rykelmy', 2, 4),
(4, '2022-10-12 11:59:59', 'Ola Mundo', 'Lucas', 3, 4),
(5, '2022-10-12 12:00:20', 'Oi meu povo', 'Lucas', 3, 4),
(6, '2022-10-12 12:02:31', 'AAAA', 'Rykelmy', 2, 4),
(7, '2022-10-12 12:02:34', 'po', 'Rykelmy', 2, 4),
(8, '2022-10-12 12:02:37', 'Bao Dia', 'Rykelmy', 2, 4),
(9, '2022-10-13 12:33:07', 'Ola ', 'Rykelmy', 2, 0),
(10, '2022-10-13 12:34:32', ' Oi Parceiro', 'Rykelmy', 2, 0),
(11, '2022-10-13 12:35:55', ' Oi Parceiro', 'Rykelmy', 2, 7),
(12, '2022-10-13 12:35:59', 'AAAA', 'Rykelmy', 2, 7),
(13, '2022-10-13 12:41:30', 'Oi', 'Rykelmy', 2, 5),
(14, '2022-10-13 12:42:46', 'Oi', 'Rykelmy', 2, 5),
(15, '2022-10-13 12:43:09', 'Ola', 'Rykelmy', 2, 5),
(16, '2022-10-13 12:43:22', 'Tudo bem?', 'Edinaldo', 5, 2),
(17, '2022-10-13 12:43:33', 'Oi', 'Rykelmy', 2, 5),
(18, '2022-10-13 12:43:42', 'OI, tudo bem??', 'Edinaldo', 5, 2),
(19, '2022-10-13 12:43:49', 'Tudo sim e com vc??', 'Rykelmy', 2, 5),
(20, '2022-10-13 12:46:29', 'Oi', 'Rykelmy', 2, 8),
(24, '2022-10-13 12:49:12', 'Oi', '', 8, 3),
(25, '2022-10-13 12:49:36', 'Oi meu povo', 'Lucas', 3, 8),
(26, '2022-10-13 12:50:00', 'Oi', 'Carla', 8, 3),
(27, '2022-10-13 12:50:06', 'Oi tudo bem?', 'Carla', 8, 3),
(28, '2022-10-13 12:50:50', 'Oi', 'Carla', 8, 3),
(29, '2022-10-13 12:50:55', 'Oi parca', 'Lucas', 3, 8),
(30, '2022-10-13 12:52:29', 'Oi', 'Carla', 8, 3),
(31, '2022-10-13 12:52:33', 'Ola', 'Lucas', 3, 8),
(32, '2022-10-13 13:10:42', 'Oi', 'Rykelmy', 2, 6),
(33, '2022-10-13 13:10:46', 'Ola', 'Riquelme', 6, 2),
(34, '2022-10-13 13:10:57', 'Tudo bem com vc?', 'Rykelmy', 2, 6),
(35, '2022-10-13 13:28:20', 'Tudo sim ', 'Riquelme', 6, 2),
(36, '2022-10-13 13:30:27', 'Oi', 'Rykelmy', 2, 6),
(37, '2022-10-13 13:30:34', 'ola', 'Riquelme', 6, 2),
(38, '2022-10-13 15:05:43', 'Oi', 'Rykelmy', 2, 4),
(39, '2022-10-13 15:05:51', 'Tudo bem?', 'Ryciery', 4, 2),
(40, '2022-10-14 15:32:36', 'Oi', 'Lucas', 3, 2),
(41, '2022-10-15 02:03:46', 'Ola', 'Carla', 8, 2),
(42, '2022-10-15 02:03:56', 'OI, tudo bem?', 'Rykelmy', 2, 8),
(43, '2022-10-16 22:37:59', 'Bao Dia', 'Rykelmy', 2, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat_geral`
--
ALTER TABLE `chat_geral`
  ADD PRIMARY KEY (`id_msg`);

--
-- Índices para tabela `chat_privado`
--
ALTER TABLE `chat_privado`
  ADD PRIMARY KEY (`id_msg`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat_geral`
--
ALTER TABLE `chat_geral`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `chat_privado`
--
ALTER TABLE `chat_privado`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
