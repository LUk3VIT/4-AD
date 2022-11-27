-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2022 às 16:40
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
-- Estrutura da tabela `bizarros`
--

CREATE TABLE `bizarros` (
  `numero` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  `vida` int(11) NOT NULL,
  `tesouro` varchar(50) NOT NULL,
  `morto_vivo` varchar(50) NOT NULL,
  `ataques` int(11) NOT NULL,
  `hab1` varchar(400) NOT NULL,
  `hab2` varchar(400) NOT NULL,
  `hab3` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bizarros`
--

INSERT INTO `bizarros` (`numero`, `img`, `nome`, `nivel`, `vida`, `tesouro`, `morto_vivo`, `ataques`, `hab1`, `hab2`, `hab3`) VALUES
(1, 'imagens/monstros/bizarros/Minotauro.png', 'Minotauro', 5, 4, '', '', 2, 'Devido ao poder de sua carga de corrida de touro, o primeiro teste de Defesa contra um minotauro é em 1.', '', ''),
(2, 'imagens/monstros/bizarros/ComedorDeFerro.png', 'Comedor de Ferro', 3, 4, 'não', '', 3, 'Rolagem de defesa contra o comedor de ferro não desfruta de bônus de armadura pesada.', 'Se o monstro acertar, o personagem não sofre dano, mas perde sua armadura, escudo, arma principal ou 3d6 PO, nesta ordem.', ''),
(3, 'imagens/monstros/bizarros/Quimera.png', 'Quimera', 5, 6, '', '', 3, 'Em cada um dos rounds da quimera se rola 1d6. Em um 1 ou 2 a quimera cospe fogo em vez de executar seus múltiplos ataques. Todos os personagens devem salvar versus fogo nível 4 ou\r\nperder 1 vida.', '', ''),
(4, 'imagens/monstros/bizarros/Catoplebas.png', 'Catoplebas', 4, 4, '+1', '', 1, 'Todos os personagens no início da batalha deve se salvar contra um ataque de olhar nível 4 ou perder 1 vida.', '', ''),
(5, 'imagens/monstros/bizarros/Aranha.png', 'Aranha Gigante', 5, 3, '2 roll', '', 2, 'Personagens tomando uma ferida devem se salvar contra o veneno de nível 3 ou perder uma vida\r\nadicional.', '', ''),
(6, 'imagens/monstros/bizarros/GremlingsINV.png', 'Gremlins Invisíveis', 0, 0, '?????????', '', 0, 'ROUBAM', 'SEUS', 'ITENS!!!!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `boss`
--

CREATE TABLE `boss` (
  `numero` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `vida` int(11) NOT NULL,
  `tesouro` varchar(50) NOT NULL,
  `morto_vivo` varchar(50) NOT NULL,
  `ataques` int(11) NOT NULL,
  `hab1` varchar(400) NOT NULL,
  `hab2` varchar(400) NOT NULL,
  `hab3` varchar(400) NOT NULL,
  `hab4` varchar(400) NOT NULL,
  `hab5` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `boss`
--

INSERT INTO `boss` (`numero`, `img`, `nome`, `nivel`, `vida`, `tesouro`, `morto_vivo`, `ataques`, `hab1`, `hab2`, `hab3`, `hab4`, `hab5`) VALUES
(1, 'imagens/monstros/chefes/Múmia.png', 'Múmia', 5, 4, '2', 'sim', 2, 'Qualquer personagem morto por uma múmia se torna outra múmia e deve ser atacado pelo grupo.', 'Múmias são atacadas a +2 pelo feitiço de Bola de Fogo.', '', '', ''),
(2, 'imagens/monstros/chefes/OrcBrutal.png', 'Orc Brutal', 5, 5, '1', '', 2, 'Em seu tesouro não pode ter qualquer item mágico, trate como 2d6 x 1d6 peças de ouro.', '', '', '', ''),
(3, 'imagens/monstros/chefes/Ogro.png', 'Ogro', 5, 6, '', '', 1, 'Cada hit de um ogro inflige 2\r\npontos de vida de dano. ', '', '', '', ''),
(4, 'imagens/monstros/chefes/Medusa.png', 'Medusa', 4, 4, '1', '', 1, 'Todos os personagens no início da batalha deve se salvar contra um ataque de olhar de nível 4 ou poderá virar pedra. Personagens petrificados estão fora do jogo até uma Bênção do feiticeiro ser lançado sobre eles. Magos adicionam metade do seu nível a este teste.', '', '', '', ''),
(5, 'imagens/monstros/chefes/SrDoCaos.png', 'Senhor do Caos', 6, 4, '2 rolls em +1', '', 3, 'Mau-Olhado (os personagens devem rolar 4+ ou estar em -1 em todos os testes de defesa até que o senhor do caos seja morto).', 'Dreno de Energia (qualquer personagem tomando uma ferida do senhor do caos deve rolar 4+ ou perder 1 de nível).', 'Hellfire Blast (antes do combate, todos os personagens devem rolar 6+ ou perder 2 pontos de vida; Clérigos adicionam ½ nível a este teste).', '', ''),
(6, 'imagens/monstros/chefes/Dragão.png', 'Dragão ', 6, 5, '3 roll em +1', '', 2, 'Em cada volta do dragão, role 1d6, em um 1 ou 2 o dragão cospe fogo, infligindo 1 ponto de vida a todos os personagens que falharam em salvar versus nível 6 de cuspe de fogo do dragão (cada personagem soma ½ nível, arredondado para baixo).', 'Se o dragão não cuspir fogo, ele morde 2 personagens aleatórios.', '', '', '');

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
  `valor` varchar(50) NOT NULL,
  `classes_proibidas` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `imagem`, `nome`, `tipo`, `valor`, `classes_proibidas`) VALUES
(1, 'imagens/itens/Gazua.png', 'gazua', 'utilizavel', '2', 'Mago,Guerreiro,Bárbaro,Anão,Elfo,Clérigo,Halfling'),
(2, 'imagens/itens/Bandagem.png', 'bandagem', 'utilizável', '5', ''),
(3, 'imagens/itens/Bençao.png', 'feitiço de benção', 'utilizável', '100', ''),
(4, 'imagens/itens/ÁguaBenta.png', 'frasco de água benta', 'utilizável', '30', ''),
(5, 'imagens/itens/PoçãoCura.png', 'poção de cura', 'utilizável', '100', 'Bárbaro'),
(6, 'imagens/itens/Ressureiçao.png', 'ritual de ressureição', 'utilizável', '1000', ''),
(7, 'imagens/itens/Corda.png', 'corda', 'utilizável', '4', ''),
(8, 'imagens/itens/Lanterna.png', 'lanterna', 'lanterna', '4', ''),
(9, 'imagens/itens/Escudo.png', 'escudo', 'defesa', '5', 'Ladino,Mago,Halfling,'),
(10, 'imagens/itens/ArmaduraPesada.png', 'armadura de aço', 'defesa', '30', 'Mago,Halfling,Ladino,Bárbaro'),
(11, 'imagens/itens/ArmaduraLeve.png', 'armadura de malha', 'defesa', '10', 'Mago,Halfling'),
(12, '', 'espada curta e escudo', 'arma de uma mão cortante e defesa', '0', 'Mago,Halfling,Ladino'),
(13, '', 'mangual e escudo', 'arma de uma mão esmagadora e defesa', '0', 'Mago,Halfling,Ladino'),
(14, 'imagens/itens/espada.png', 'espada curta', 'arma de uma mão cortante', '6', 'Mago,Ladino,Halfling'),
(15, 'imagens/itens/Mangual.png', 'mangual', 'arma de uma mão esmagadora', '6', 'Mago,Ladino,Halfling'),
(16, 'imagens/itens/adaga.png', 'adaga', 'arma de uma mão leve cortante', '5', ''),
(17, 'imagens/itens/tonfa.png', 'tonfa', 'arma de uma mão leve esmagadora', '5', ''),
(18, 'imagens/itens/marreta.png', 'martelo de guerra', 'arma de duas mãos esmagadora', '15', 'Ladino,Mago,Elfo,Halfling'),
(19, 'imagens/itens/claymore.png', 'espada montante', 'arma de duas mãos cortante', '15', 'Ladino,Mago,Elfo,Halfling'),
(20, 'imagens/itens/arco.png', 'arco', 'arma a distância cortante', '15', 'Mago,Halfling,Ladino,Clérigo'),
(21, 'imagens/itens/funda.png', 'funda', 'arma a distância esmagadora', '4', ''),
(22, 'imagens/itens/LivroFeitiços.png', 'livro de feitiços', 'arma do mago', '100', 'Guerreiro,Clérigo,Bárbaro,Ladino,Elfo,Anão,Halfling'),
(23, 'imagens/itens/EspadaMágica.png', 'espada curta mágica', 'arma de uma mão cortante mágica', '0', 'Mago,Ladino,Halfling'),
(24, 'imagens/itens/MangualMágico.png', 'mangual mágico', 'arma de uma mão esmagadora mágica', '0', 'Mago,Ladino,Halfling'),
(25, 'imagens/itens/AdagaMágica.png', 'adaga mágica', 'arma de uma mão leve cortante mágica', '0', ''),
(26, 'imagens/itens/TonfaMágica.png', 'tonfa mágica', 'arma de uma mão leve esmagadora mágica', '0', ''),
(27, 'imagens/itens/ClaymoreMágica.png', 'espada montante mágica', 'arma de duas mãos cortante mágica', '0', 'Ladino,Mago,Elfo,Halfling'),
(28, 'imagens/itens/MarretaMágica.png', 'martelo de guerra mágico', 'arma de duas mãos esmagadora mágica', '0', 'Ladino,Mago,Elfo,Halfling'),
(29, 'imagens/itens/ArcoMágico.png', 'arco mágico', 'arma a distância cortante mágica', '0', 'Mago,Halfling,Ladino,Clérigo'),
(30, 'imagens/itens/FundaMágica.png', 'funda mágica', 'arma a distância esmagadora mágica', '0', ''),
(31, 'imagens/itens/MoedasOuro.png', 'ouro', '', '0', ''),
(32, 'imagens/itens/Gema1.png', 'gema', '', '0', ''),
(33, 'imagens/magias/BolaDeFogo.png', 'bola de fogo', 'pergaminho de magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(34, 'imagens/magias/Raio.png', 'raio', 'pergaminho de magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(35, 'imagens/magias/Sono.png', 'sono', 'pergaminho de  magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(36, 'imagens/magias/Proteçao.png', 'proteger', 'pergaminho de magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(37, 'imagens/magias/Escape.png', 'escape', 'pergaminho de  magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(38, 'imagens/magias/Bençao.png', 'benção', 'pergaminho de magia', '100', 'Bárbaro,Ladino,Guerreiro,Halfling,Anão,Clérigo'),
(39, 'imagens/itens/AnelTP.png', 'anel de teleporte', 'item mágico', '1x1', 'Bárbaro'),
(40, 'imagens/itens/VarinhaSono.png', 'varinha de sono', 'item mágico', '100', 'Bárbaro'),
(41, 'imagens/itens/OuroTolo.png', 'ouro dos tolos', 'item mágico', '1x1', ''),
(42, 'imagens/itens/CajadoBdF.png', 'cajado com bola de fogo', 'item mágico', '100', 'Bárbaro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_mágicos`
--

CREATE TABLE `itens_mágicos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_mágicos`
--

INSERT INTO `itens_mágicos` (`id`, `imagem`, `nome`) VALUES
(1, 'imagens/itens/AnelTP.png', 'anel de teleporte'),
(2, 'imagens/itens/VarinhaSono.png', 'varinha de sono'),
(3, 'imagens/itens/OuroTolo.png', 'ouro dos tolos'),
(4, 'imagens/itens/CajadoBdF.png', 'cajado com bola de fogo');

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
(6, 'imagens/magias/Proteçao.png', 'proteger', 'Esta magia dá +1 a um na ficha de defesa de um único personagem para toda a duração de uma batalha. '),
(7, 'imagens/magias/cura.png', 'curar', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mapas_sem_ponto`
--

CREATE TABLE `mapas_sem_ponto` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `giro` varchar(200) NOT NULL,
  `esquerda` int(11) NOT NULL,
  `direita` int(11) NOT NULL,
  `cima` int(11) NOT NULL,
  `baixo` int(11) NOT NULL,
  `esquerda_px` int(11) NOT NULL,
  `direita_px` int(11) NOT NULL,
  `cima_px` int(11) NOT NULL,
  `baixo_px` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mapas_sem_ponto`
--

INSERT INTO `mapas_sem_ponto` (`id`, `numero`, `img`, `giro`, `esquerda`, `direita`, `cima`, `baixo`, `esquerda_px`, `direita_px`, `cima_px`, `baixo_px`) VALUES
(1, 1, '../../imagens/mapas/Sem_Ponto/1.png', 'original', 0, 0, 3, 0, 0, 0, 0, 0),
(2, 2, '../../imagens/mapas/Sem_Ponto/2.png', 'original', 0, 1, 2, 0, 0, 0, 0, 0),
(3, 3, '../../imagens/mapas/Sem_Ponto/3.png', 'original', 0, 0, 3, 0, 0, 0, 0, 0),
(4, 4, '../../imagens/mapas/Sem_Ponto/4.png', 'original', 0, 0, 2, 0, 0, 0, 0, 0),
(5, 5, '../../imagens/mapas/Sem_Ponto/5.png', 'original', 1, 1, 1, 0, 0, 0, 0, 0),
(6, 6, '../../imagens/mapas/Sem_Ponto/6.png', 'original', 1, 1, 0, 0, 0, 0, 0, 0),
(7, 11, '../../imagens/mapas/Sem_Ponto/mapa11/11-1.png', 'original', 1, 1, 0, 0, 0, 0, 0, 0),
(8, 11, '../../imagens/mapas/Sem_Ponto/mapa11/11-2.png', '90', 0, 0, 1, 1, 0, 0, 0, 0),
(9, 11, '../../imagens/mapas/Sem_Ponto/mapa11/11-3.png', '180', 1, 1, 1, 0, 0, 0, 0, 0),
(10, 11, '../../imagens/mapas/Sem_Ponto/mapa11/11-4.png', '270', 0, 1, 1, 1, 0, 0, 0, 0),
(11, 12, '../../imagens/mapas/Sem_Ponto/mapa12/12-1.png', 'original', 0, 0, 1, 1, 0, 0, 0, 0),
(12, 12, '../../imagens/mapas/Sem_Ponto/mapa12/12-2.png', '90', 1, 1, 0, 0, 0, 0, 0, 0),
(13, 13, '../../imagens/mapas/Sem_Ponto/mapa13/13-1.png', 'original', 1, 1, 1, 0, 0, 0, 0, 0),
(14, 13, '../../imagens/mapas/Sem_Ponto/mapa13/13-2.png', '90', 0, 1, 1, 1, 0, 0, 0, 0),
(15, 13, '../../imagens/mapas/Sem_Ponto/mapa13/13-3.png', '180', 1, 1, 0, 1, 0, 0, 0, 0),
(16, 13, '../../imagens/mapas/Sem_Ponto/mapa13/13-4.png', '270', 1, 0, 1, 1, 0, 0, 0, 0),
(17, 14, '../../imagens/mapas/Sem_Ponto/mapa14/14-1.png', 'original', 2, 2, 0, 0, 0, 0, 0, 0),
(18, 14, '../../imagens/mapas/Sem_Ponto/mapa14/14-2.png', '90', 0, 0, 2, 2, 0, 0, 0, 0),
(19, 15, '../../imagens/mapas/Sem_Ponto/mapa15/15-1.png', 'original', 1, 0, 1, 1, 0, 0, 0, 10),
(20, 15, '../../imagens/mapas/Sem_Ponto/mapa15/15-2.png', '90', 1, 1, 1, 0, 0, 0, 0, 0),
(21, 15, '../../imagens/mapas/Sem_Ponto/mapa15/15-3.png', '180', 0, 1, 1, 1, 0, 0, 0, 0),
(22, 15, '../../imagens/mapas/Sem_Ponto/mapa15/15-4.png', '270', 1, 1, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `minions`
--

CREATE TABLE `minions` (
  `numero` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nível` int(11) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `tesouro` varchar(50) NOT NULL,
  `hab1` varchar(400) NOT NULL,
  `hab2` varchar(200) NOT NULL,
  `hab3` varchar(200) NOT NULL,
  `morto_vivo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `minions`
--

INSERT INTO `minions` (`numero`, `img`, `nome`, `nível`, `quantidade`, `tesouro`, `hab1`, `hab2`, `hab3`, `morto_vivo`) VALUES
(1, 'imagens/monstros/minions', 'A', 3, '1', 'não', '', '', '', 'Sim'),
(2, 'imagens/monstros/minions/Goblin.png', 'Goblins', 3, '1 + 3', '-1', 'Goblins têm uma chance de 1 em 6 de ganho\r\nsurpresa, agindo assim antes do grupo.', '', '', ''),
(3, 'imagens/monstros/minions/Hobgoblin.png', 'Hobgoblins', 4, '1', '1', '', '', '', ''),
(4, 'imagens/monstros/minions/Orc.png', 'Orcs', 4, '1 + 1', '', 'Orcs têm medo de magia e devem testar o moral de cada tempo que um ou mais é morto por um feitiço.', 'Se um feitiço causasse o número deles cair\r\nabaixo de 50%, eles vão testar o moral em -1.', 'Eles nunca têm itens mágicos em seu\r\ntesouro.', ''),
(5, 'imagens/monstros/minions/Troll.png', 'Trolls', 5, '1d3', '', 'Trolls regeneram, a menos que mortos por um\nfeitiço, ou a menos que um personagem use um ataque cortante para finalizar o troll.\nSe isso não acontecer, o Troll tem uma chance de 2 em 6 de voltar a vida e continuar a lutar.', '', '', ''),
(6, 'imagens/monstros/minions/Fungo.png', 'Povo Fungo', 3, '2', '', 'Qualquer personagem tomando dano do\r\npovo fungos deve se salvar contra o veneno nível 3 ou perder 1 vida. Halflings\r\nadicionam seu nível nesse teste. ', '', '', '');

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
(49, 2, 'Bruno', 'martelo de guerra', 'armadura de aço', 'frasco de água benta', 'gema(35)', 'gema(130)', 'gema(35)', 'gema(20)', 'gema(80)', 'gema(40)', 'gema(150)', 'gema(110)', 'Poção de Cura', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 2, '13', 'armadura de malha', 'mangual', 'bandagem', 'lanterna', 'escudo', 'gema(110)', '', '', '', 'Cajado com Bola de Fogo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 2, 'Legolas', 'armadura de malha', 'espada curta', 'arco', 'gema(80)', 'gema(50)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 2, 'Erza', 'livro de feitiços', 'adaga', 'bandagem', 'lanterna', 'funda', 'gema(110)', 'Poção de Cura', 'bola de fogo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 2, 'Bridda', 'armadura de malha', 'adaga', 'bandagem', 'corda', 'bandagem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 2, 'calvão', 'armadura de malha', 'espada curta', 'escudo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 2, 'Zoio', 'armadura de malha', 'martelo de guerra', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(44, 2, 'Bruno', 'imagens/personagens/masculino/Anao.png', 'Anão', 5, 4, 10, '41.0', '+Nível', '', 49, 0, '', '', '', '', '', '', ''),
(45, 2, '13', 'imagens/personagens/masculino/ClerigoCego.png', 'Clérigo', 5, 5, 9, '24.0', '+1/2 Nível', '', 50, 0, 'curar', 'benção', '', '', '', '', ''),
(51, 2, 'Legolas', 'imagens/personagens/masculino/Elfo.png', 'Elfo', 1, 3, 5, '9.0', '+Nível', '', 56, 0, 'proteger', '', '', '', '', '', ''),
(54, 2, 'Erza', 'imagens/personagens/feminino/Maga.png', 'Mago', 4, 5, 6, '11.0', '+Nível para feitiços', '', 59, 0, 'bola de fogo', 'benção', 'raio', '', '', '', ''),
(55, 2, 'Bridda', 'imagens/personagens/feminino/ladina.png', 'Ladino', 4, 5, 7, '3.0', '', '+Nível', 60, 0, '', '', '', '', '', '', ''),
(56, 2, 'calvão', 'imagens/personagens/masculino/Clerigo.png', 'Clérigo', 1, 5, 5, '5.0', '+1/2 Nível', '', 61, 0, 'curar', 'benção', '', '', '', '', ''),
(57, 2, 'Zoio', 'imagens/personagens/masculino/Barbaro.png', 'Bárbaro', 1, 5, 8, '9.0', '+Nível', '', 62, 0, '', '', '', '', '', '', '');

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
  `hab2` varchar(200) NOT NULL,
  `morto_vivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vermes`
--

INSERT INTO `vermes` (`numero`, `img`, `nome`, `nivel`, `quantidade`, `tesouro`, `hab1`, `hab2`, `morto_vivo`) VALUES
(1, 'imagens/monstros/vermes/retos.png', 'Ratos', 1, 3, 'não', 'chance de 1 em 6 de receber 1 de dano adicional', '', ''),
(2, 'imagens/monstros/vermes/Morcego.png', 'Morcego Vampiro', 1, 3, 'não', 'feitiços tem -1', '', ''),
(3, 'imagens/monstros/vermes/Swarmling.png', 'Swarmling', 3, 2, '-1', '', '', ''),
(4, 'imagens/monstros/vermes/Centopéia.png', 'Centopéia Gigante', 3, 1, 'não', 'salvar contra veneno nível 2 ou perder 1 de vida', '', ''),
(5, 'imagens/monstros/vermes/Sapo.png', 'Sapo Vampiro', 4, 1, '-1', '', '', ''),
(6, 'imagens/monstros/vermes/RatoEsquelético.png', 'Rato Esquelético', 3, 2, 'não', 'Ataques com armas esmagadoras tem +1', 'Não pode ser atacado por arco ou funda', 'Sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bizarros`
--
ALTER TABLE `bizarros`
  ADD PRIMARY KEY (`numero`);

--
-- Índices para tabela `boss`
--
ALTER TABLE `boss`
  ADD PRIMARY KEY (`numero`);

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
-- Índices para tabela `itens_mágicos`
--
ALTER TABLE `itens_mágicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `magias`
--
ALTER TABLE `magias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mapas_sem_ponto`
--
ALTER TABLE `mapas_sem_ponto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `minions`
--
ALTER TABLE `minions`
  ADD PRIMARY KEY (`numero`);

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
-- AUTO_INCREMENT de tabela `bizarros`
--
ALTER TABLE `bizarros`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `boss`
--
ALTER TABLE `boss`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `itens_mágicos`
--
ALTER TABLE `itens_mágicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `magias`
--
ALTER TABLE `magias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `mapas_sem_ponto`
--
ALTER TABLE `mapas_sem_ponto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `minions`
--
ALTER TABLE `minions`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `tbl_personagem`
--
ALTER TABLE `tbl_personagem`
  MODIFY `id_pers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `vermes`
--
ALTER TABLE `vermes`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
