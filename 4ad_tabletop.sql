-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2022 às 16:49
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
  `imagem` varchar(200) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `valor` int(11) NOT NULL,
  `classes_proibidas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `imagem`, `nome`, `tipo`, `valor`, `classes_proibidas`) VALUES
(1, 'imagens/itens/Bandagem.png', 'bandagem', 'utilizável', 5, ''),
(2, 'imagens/itens/Bençao.png', 'feitiço de benção', 'utilizável', 100, ''),
(3, 'imagens/itens/ÁguaBenta.png', 'frasco de água benta', 'utilizável', 30, ''),
(4, 'imagens/itens/PoçãoCura.png', 'poção de cura', 'utilizável', 100, 'Bárbaro'),
(5, 'imagens/itens/', 'ritual de ressureição', 'utilizável', 1000, ''),
(6, 'imagens/itens/Corda.png', 'corda', 'utilizável', 4, ''),
(7, 'imagens/itens/Lanterna.png', 'lanterna', 'lanterna', 4, ''),
(8, 'imagens/itens/Escudo.png', 'escudo', 'defesa', 5, 'Ladino,Mago,Halfling,'),
(9, 'imagens/itens/ArmaduraPesada.png', 'armadura de aço', 'defesa', 30, 'Mago,Halfling,Ladino,Bárbaro'),
(10, 'imagens/itens/ArmaduraLeve.png', 'armadura de malha', 'defesa', 10, 'Mago,Halfling'),
(11, '', 'espada curta e escudo', 'arma de uma mão cortante e defesa', 0, 'Mago,Halfling,Ladino'),
(12, '', 'mangual e escudo', 'arma de uma mão esmagadora e defesa', 0, 'Mago,Halfling,Ladino'),
(13, 'imagens/itens/espada.png', 'espada curta', 'arma de uma mão cortante', 6, 'Mago,Ladino,Halfling'),
(14, 'imagens/itens/Mangual.png', 'mangual', 'arma de uma mão esmagadora', 6, 'Mago,Ladino,Halfling'),
(15, 'imagens/itens/adaga.png', 'adaga', 'arma de uma mão leve cortante', 5, ''),
(16, 'imagens/itens/tonfa.png', 'tonfa', 'arma de uma mão leve esmagadora', 5, ''),
(17, 'imagens/itens/marreta.png', 'martelo de guerra', 'arma de duas mãos esmagadora', 15, 'Ladino,Mago,Elfo,Halfling'),
(18, 'imagens/itens/claymore.png', 'espada montante', 'arma de duas mãos cortante', 15, 'Ladino,Mago,Elfo,Halfling'),
(19, 'imagens/itens/arco.png', 'arco', 'arma a distância cortante', 15, 'Mago,Halfling,Ladino,Clérigo'),
(20, 'imagens/itens/funda.png', 'funda', 'arma a distância esmagadora', 4, ''),
(21, 'imagens/itens/LivroFeitiços.png', 'livro de feitiços', 'arma do mago', 100, 'Guerreiro,Clérigo,Bárbaro,Ladino,Elfo,Anão,Halfling');

-- --------------------------------------------------------

--
-- Estrutura da tabela `magias`
--

CREATE TABLE `magias` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `magias`
--

INSERT INTO `magias` (`id`, `imagem`, `nome`, `descricao`) VALUES
(1, 'imagens/magias/Bençao.png', 'benção', 'Este feitiço remove uma maldição de um personagem. Uma maldição é um efeito de jogo ganho ao entrar em uma sala amaldiçoada. Bênção também remova outras condições, como ser transformado em pedra por uma medusa.'),
(2, 'imagens/magias/BolaDeFogo.png', 'bola de fogo', 'Este feitiço funciona como um teste de Ataque. O mago adiciona seu nível ao teste. Bola de fogo não afeta dragões (mas afeta dragões zumbis). Se usado contra lacaios, a Bola de Fogo mata um número de criaturas igual ao dado do mago menos o nível dos lacaios. Um mínimo de uma criatura é sempre morto. '),
(3, 'imagens/magias/Raio.png', 'raio', 'Este feitiço funciona como um teste de ataque. Os magos adicionam seu nível ao teste. Contra um grupo de lacaios, o feitiço matará apenas um se ele acertar. Contra um chefe, inflige 2 pontos de vida se ele acertar.'),
(4, 'imagens/magias/Sono.png', 'sono', 'Esse feitiço funciona como um teste de ataque. Não afetam mortovivos ou dragões. O bruxo adiciona seu nível a rolagem. O sono irá derrotar um chefe ou 1d6 + Nível monstros se ele acertar. Monstros colocados para dormir contam como mortos. '),
(5, 'imagens/magias/Escape.png', 'escape', 'O feiticeiro desaparece de sua localização atual e reaparece na sala anterior. Este feitiço pode ser lançado em vez de de fazer um teste de Defesa, ou pode ser lançado normalmente no turno da equipe. Isso funciona automaticamente. '),
(6, 'imagens/magias/Proçao.png', 'proteger', 'Esta magia dá +1 a um na ficha de defesa de um único personagem para toda a duração de uma batalha. '),
(7, 'imagens/magias/Curar.png', 'curar', '');

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
(46, 2, 'max', 'armadura de malha', 'espada montante', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 2, 'pinóia', 'armadura de malha', 'mangual', 'escudo', 'bandagem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 2, 'Bridda', 'armadura de malha', 'adaga', 'lanterna', 'corda', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 2, 'Bruno', 'martelo de guerra', 'armadura de aço', 'frasco de água benta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 2, '13', 'armadura de malha', 'mangual', 'bandagem', 'lanterna', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 2, 'Kauany', 'martelo de guerra', 'armadura de aço', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 2, 'Zóio', 'armadura de malha', 'espada montante', 'escudo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 2, 'Mamamu ito', 'armadura de malha', 'adaga', '', 'corda', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 2, 'Robertinho', 'livro de feitiços', 'adaga', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_personagem`
--

CREATE TABLE `tbl_personagem` (
  `id_pers` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nivel_max` int(11) NOT NULL,
  `vida` int(11) NOT NULL,
  `dinheiro` decimal(11,1) NOT NULL,
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

INSERT INTO `tbl_personagem` (`id_pers`, `id_usuario`, `nome`, `img`, `classe`, `nivel`, `nivel_max`, `vida`, `dinheiro`, `ataque`, `defesa`, `id_inventario`, `pistas`, `mag1`, `mag2`, `mag3`, `mag4`, `mag5`, `mag6`, `mag7`) VALUES
(41, 2, 'max', 'imagens/personagens/Barbaro.png', 'Bárbaro', 1, 5, 8, '0.0', '+Nível', '', 46, 0, '', '', '', '', '', '', ''),
(42, 2, 'pinóia', 'imagens/personagens/Clerigo.png', 'Clérigo', 1, 5, 5, '0.0', '+1/2 Nível', '', 47, 0, 'curar', 'benção', '', '', '', '', ''),
(43, 2, 'Bridda', 'imagens/personagens/Ladino.png', 'Ladino', 1, 5, 4, '7.0', '', '+Nível', 48, 0, '', '', '', '', '', '', ''),
(44, 2, 'Bruno', 'imagens/personagens/Anao.png', 'Anão', 1, 4, 6, '0.0', '+Nível', '', 49, 0, '', '', '', '', '', '', ''),
(45, 2, '13', 'imagens/personagens/ClerigoCego.png', 'Clérigo', 1, 5, 5, '4.5', '+1/2 Nível', '', 50, 0, 'curar', 'benção', '', '', '', '', ''),
(46, 2, 'Kauany', 'imagens/personagens/Anao.png', 'Anão', 1, 4, 6, '13.0', '+Nível', '', 51, 0, '', '', '', '', '', '', ''),
(47, 2, 'Zóio', 'imagens/personagens/Barbaro.png', 'Bárbaro', 1, 5, 8, '2.0', '+Nível', '', 52, 0, '', '', '', '', '', '', ''),
(48, 2, 'Mamamu ito', 'imagens/personagens/Ladino.png', 'Ladino', 1, 5, 4, '13.0', '', '+Nível', 53, 0, '', '', '', '', '', '', ''),
(49, 2, 'Robertinho', 'imagens/personagens/Mago.png', 'Mago', 1, 5, 3, '15.0', '+Nível para feitiços', '', 54, 0, 'bola de fogo', 'sono', 'raio', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vermes`
--

CREATE TABLE `vermes` (
  `numero` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `nivel` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tesouro` varchar(50) NOT NULL,
  `hab1` varchar(200) NOT NULL,
  `hab2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vermes`
--

INSERT INTO `vermes` (`numero`, `img`, `nome`, `nivel`, `quantidade`, `tesouro`, `hab1`, `hab2`) VALUES
(1, 'imagens/monstros/vermes/retos.png', 'Ratos', 1, 3, 'não', 'chance de 1 em 6 de receber 1 de dano adicional', ''),
(2, 'imagens/monstros/vermes/Morcego.png', 'Morcego Vampiro', 1, 3, 'não', 'feitiços tem -1', ''),
(3, 'imagens/monstros/vermes/Swarmling.png', 'Swarmling', 3, 2, '-1', '', ''),
(4, 'imagens/monstros/vermes/Centopéia.png', 'Centopéia Gigante', 3, 1, 'não', 'salvar contra veneno nível 2 ou perder 1 de vida', ''),
(5, 'imagens/monstros/vermes/Sapo.png', 'Sapo Vampiro', 4, 1, '-1', '', ''),
(6, 'imagens/monstros/vermes/RatoEsquelético.png', 'Rato Esquelético', 3, 2, 'não', 'Ataques com armas esmagadoras tem +1', 'Não pode ser atacado por arco ou funda');

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
-- Índices para tabela `vermes`
--
ALTER TABLE `vermes`
  ADD PRIMARY KEY (`numero`);

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
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `tbl_personagem`
--
ALTER TABLE `tbl_personagem`
  MODIFY `id_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `vermes`
--
ALTER TABLE `vermes`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
