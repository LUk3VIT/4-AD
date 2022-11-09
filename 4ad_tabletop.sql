-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2022 às 04:12
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
-- Banco de dados: `4ad_tabletop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `Classe` text NOT NULL,
  `vida` int(11) NOT NULL,
  `nivel_maximo` int(11) NOT NULL,
  `ouro` int(11) NOT NULL,
  `ataque` text NOT NULL,
  `defesa` text NOT NULL,
  `eq1` varchar(50) NOT NULL,
  `eq2` varchar(50) NOT NULL,
  `eq3` varchar(50) NOT NULL,
  `eq4` varchar(50) NOT NULL,
  `eq5` varchar(50) NOT NULL,
  `eq6` varchar(50) NOT NULL,
  `eq7` varchar(50) NOT NULL,
  `eq8` varchar(50) NOT NULL,
  `hab1` varchar(150) NOT NULL,
  `hab2` varchar(150) NOT NULL,
  `hab3` varchar(150) NOT NULL,
  `hab4` varchar(150) NOT NULL,
  `hab5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classes`
--

INSERT INTO `classes` (`id`, `Classe`, `vida`, `nivel_maximo`, `ouro`, `ataque`, `defesa`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `hab1`, `hab2`, `hab3`, `hab4`, `hab5`) VALUES
(1, 'Guerreiro', 6, 5, 2, '+Nível', '', 'armadura de malha', 'espada curta e escudo', 'mangual e escudo', 'espada montante', 'martelo de guerra', 'arco', '', '', 'pode usar escudos', 'pode  usar armaduras leves', 'pode usar armaduras pesadas', 'pode usar qualquer arma', ''),
(2, 'Clérigo', 4, 5, 1, '+1/2 Nível', '', 'armadura de malha', 'espada curta e escudo', 'mangual e escudo', 'espada montante', 'martelo de guerra', '', '', '', '+Nível em ataque contra mortos-vivos', 'pode usar armaduras leves ou pesadas', 'pode usar escudo', 'pode usar arma de uma mão, de duas mãos e uma funda', ''),
(3, 'Ladino', 3, 5, 3, '', '+Nível', 'armadura de malha', 'adaga', 'tonfa', 'corda', '', '', '', '', '+Nível ao desarmar armadilhas', '+Nível em ataque quando em maior número contra minions', '', '', ''),
(4, 'Mago', 2, 5, 4, '+Nível para feitiços', '', 'adaga', 'tonfa', 'livro de feitiços', '', '', '', '', '', '+Nível para resolver enigmas ou quebra-cabeças', 'pode adquirir feitiços em aventuras e usá-los automaticamente ou guardá-los e adiciona-los depois ao seu repertório', '', '', ''),
(5, 'Bárbaro', 7, 5, 1, '+Nível', '', 'armadura de malha', 'espada curta e escudo', 'mangual e escudo', 'espada montante', 'martelo de guerra', 'arco', '', '', 'ataque de raiva', 'não pode usar itens mágicos, pergaminhos ou poções', 'pode usar armadura leve apenas', 'pode usar qualquer arma', 'aceita cura de clérigos mesmo desprezando magia'),
(6, 'Elfo', 4, 3, 2, '+Nível', '', 'armadura de malha', 'espada curta e escudo', 'mangual e escudo', 'arco', '', '', '', '', '+1 em ataque ou rolar feitiços contra orcs', 'pode usar armaduras leves e pesadas', 'pode usar um escudo', '', '+Nível para atacar com feitiços, além de poder adicionar novos feitiços encontrados em masmorras'),
(7, 'Anão', 5, 4, 3, '+Nível', '', 'armadura de malha', 'armadura de aço', 'espada curta e escudo', 'mangual e escudo', 'espada montante', 'martelo de guerra', '', '', '+1 em defesa contra trolls, ogros e gigantes', '+1 em ataque contra goblins', 'pode usar qualquer armadura e pode usar qualquer arma', 'ao vender gemas ou itens de jóias é pago 20% a mais pelo produto', 'Caça ao tesouro'),
(8, 'Halfling', 3, 3, 2, '', '', 'adaga', 'tonfa', 'funda', '', '', '', '', '', 'Sortudo', 'Pode usar só armadura leve, arma de uma mão leve e funda', '+Nível em defesa contra gigantes, trolls e ogros', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `valor` int(11) NOT NULL,
  `classes_proibidas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `nome`, `tipo`, `valor`, `classes_proibidas`) VALUES
(1, 'bandagem', 'utilizável', 5, ''),
(2, 'feitiço de benção', 'utilizável', 100, ''),
(3, 'frasco de água benta', 'utilizável', 30, ''),
(4, 'poção de cura', 'utilizável', 100, 'Bárbaro'),
(5, 'ritual de ressureição', 'utilizável', 1000, ''),
(6, 'corda', 'utilizável', 4, ''),
(7, 'lanterna', 'lanterna', 4, ''),
(8, 'escudo', 'defesa', 5, 'Ladino,Mago,Halfling,'),
(9, 'armadura de aço', 'defesa', 30, 'Mago,Halfling,Ladino,Bárbaro'),
(10, 'armadura de malha', 'defesa', 10, 'Mago,Halfling'),
(11, 'espada curta e escudo', 'arma de uma mão cortante e defesa', 0, 'Mago,Halfling,Ladino'),
(12, 'mangual e escudo', 'arma de uma mão esmagadora e defesa', 0, 'Mago,Halfling,Ladino'),
(13, 'espada curta', 'arma de uma mão cortante', 6, 'Mago,Ladino,Halfling'),
(14, 'mangual', 'arma de uma mão esmagadora', 6, 'Mago,Ladino,Halfling'),
(15, 'adaga', 'arma de uma mão leve cortante', 5, ''),
(16, 'tonfa', 'arma de uma mão leve esmagadora', 5, ''),
(17, 'martelo de guerra', 'arma de duas mãos esmagadora', 15, 'Ladino,Mago,Elfo,Halfling'),
(18, 'espada montante', 'arma de duas mãos cortante', 15, 'Ladino,Mago,Elfo,Halfling'),
(19, 'arco', 'arma a distância cortante', 15, 'Mago,Halfling,Ladino,Clérigo'),
(20, 'funda', 'arma a distância esmagadora', 4, ''),
(21, 'livro de feitiços', 'arma do mago', 100, 'Guerreiro,Clérigo,Bárbaro,Ladino,Elfo,Anão,Halfling');

-- --------------------------------------------------------

--
-- Estrutura da tabela `magias`
--

CREATE TABLE `magias` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `magias`
--

INSERT INTO `magias` (`id`, `nome`) VALUES
(1, 'benção'),
(2, 'bola de fogo'),
(3, 'raio'),
(4, 'sono'),
(5, 'escape'),
(6, 'proteger'),
(7, 'curar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `id_inventario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_pers` text NOT NULL,
  `item1` text NOT NULL,
  `item2` text NOT NULL,
  `item3` text NOT NULL,
  `item4` text NOT NULL,
  `item5` text NOT NULL,
  `item6` text NOT NULL,
  `item7` text NOT NULL,
  `item8` text NOT NULL,
  `item9` text NOT NULL,
  `item10` text NOT NULL,
  `item11` text NOT NULL,
  `item12` text NOT NULL,
  `item13` text NOT NULL,
  `item14` text NOT NULL,
  `item15` text NOT NULL,
  `item16` text NOT NULL,
  `item17` text NOT NULL,
  `item18` text NOT NULL,
  `item19` text NOT NULL,
  `item20` text NOT NULL,
  `item21` text NOT NULL,
  `item22` text NOT NULL,
  `item23` text NOT NULL,
  `item24` text NOT NULL,
  `item25` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`id_inventario`, `id_usuario`, `nome_pers`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `item14`, `item15`, `item16`, `item17`, `item18`, `item19`, `item20`, `item21`, `item22`, `item23`, `item24`, `item25`) VALUES
(28, 2, 'Rakiniel', 'armadura de malha', 'martelo de guerra', 'bandagem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 2, 'Rykelmy', 'martelo de guerra', 'armadura de aço', 'bandagem', 'lanterna', 'corda', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 2, 'Lucas', 'armadura de malha', 'mangual e escudo', 'arco', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 2, 'Eduardo Bevenuti', 'livro de feitiços', 'adaga', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_personagem`
--

CREATE TABLE `tbl_personagem` (
  `id_pers` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nivel_max` int(11) NOT NULL,
  `vida` int(11) NOT NULL,
  `dinheiro` int(11) NOT NULL,
  `ataque` text NOT NULL,
  `defesa` text NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `pistas` int(11) NOT NULL,
  `mag1` varchar(50) NOT NULL,
  `mag2` varchar(50) NOT NULL,
  `mag3` varchar(50) NOT NULL,
  `mag4` varchar(50) NOT NULL,
  `mag5` varchar(50) NOT NULL,
  `mag6` varchar(50) NOT NULL,
  `mag7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_personagem`
--

INSERT INTO `tbl_personagem` (`id_pers`, `id_usuario`, `nome`, `classe`, `nivel`, `nivel_max`, `vida`, `dinheiro`, `ataque`, `defesa`, `id_inventario`, `pistas`, `mag1`, `mag2`, `mag3`, `mag4`, `mag5`, `mag6`, `mag7`) VALUES
(23, 2, 'Rakiniel', 'Bárbaro', 1, 5, 7, 2, '+Nível', '', 28, 0, '', '', '', '', '', '', ''),
(25, 2, 'Rykelmy', 'Anão', 1, 4, 5, 5, '+Nível', '', 30, 0, '', '', '', '', '', '', ''),
(26, 2, 'Lucas', 'Elfo', 1, 3, 4, 8, '+Nível', '', 31, 0, 'proteger', '', '', '', '', '', ''),
(27, 2, 'Eduardo Bevenuti', 'Mago', 1, 5, 2, 12, '+Nível para feitiços', '', 32, 0, 'sono', 'sono', 'benção', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `magias`
--
ALTER TABLE `magias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Índices para tabela `tbl_personagem`
--
ALTER TABLE `tbl_personagem`
  ADD PRIMARY KEY (`id_pers`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `magias`
--
ALTER TABLE `magias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tbl_personagem`
--
ALTER TABLE `tbl_personagem`
  MODIFY `id_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
