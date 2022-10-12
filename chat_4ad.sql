-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Out-2022 às 14:06
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
  `data_msg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `msg` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat_geral`
--

INSERT INTO `chat_geral` (`id_msg`, `data_msg`, `msg`, `id_usuario`, `nome_usuario`) VALUES
(2, '2022-10-12 10:51:04', 'Ola amigo', 2, 'Rykelmy'),
(4, '2022-10-12 11:15:39', ' Oi Parceiro', 2, 'Rykelmy'),
(5, '2022-10-12 11:16:21', 'Tudo Bem?', 2, 'Rykelmy'),
(8, '2022-10-12 11:18:18', 'Oi', 3, 'Lucas'),
(9, '2022-10-12 11:19:39', ' Oi Parceiro', 3, 'Lucas'),
(10, '2022-10-12 11:20:24', 'po', 2, 'Rykelmy'),
(11, '2022-10-12 11:20:35', 'Cala a Boca aí faz favor', 2, 'Rykelmy');

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
(2, '2022-10-12 11:58:32', 'OI Galera', 'Lucas', 2, 5),
(3, '2022-10-12 11:58:35', ' Oi Parceiro', 'Rykelmy', 2, 4),
(4, '2022-10-12 11:59:59', 'Ola Mundo', 'Lucas', 3, 4),
(5, '2022-10-12 12:00:20', 'Oi meu povo', 'Lucas', 3, 4),
(6, '2022-10-12 12:02:31', 'AAAA', 'Rykelmy', 2, 4),
(7, '2022-10-12 12:02:34', 'po', 'Rykelmy', 2, 4),
(8, '2022-10-12 12:02:37', 'Bao Dia', 'Rykelmy', 2, 4);

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
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `chat_privado`
--
ALTER TABLE `chat_privado`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
