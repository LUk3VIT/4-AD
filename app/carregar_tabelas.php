<?php
session_start();


if($_POST['tabelas'] == "Tabela de Vermes (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li> 1. 3d6 ratos Level 1, sem tesouro. Qualquer personagem ferido tem 1 em 6 chance de
    perder 1 vida adicional devido a uma ferida infectada.
    Reações (1d6): 1–3 fugir, 4-6 lutar </li>
    <br>
    <li> 2. 3d6 morcegos vampiros, nível 1, sem tesouros. Feitiços são lançados em -1 devido a
    seus gritos perturbadores.
    Reações (1d6): 1–3 fugir, 4-6 lutar </li>
    <br>
    <li> 3. 2d6 swarmlings de goblins, nível 3, tesouro -1, moral -1 .
    Reações (1d6): 1 fugir, 2-3 fugir se em menor número, 4 suborno (5 PO x goblin),
    5–6 luta. </li>
    <br>
    <li> 4. D6 centopéias gigantes, nível 3, sem tesouro. Qualquer personagem ferido por uma
    centopéia gigante deve salvar contra o nível 2 de veneno ou perder 1
    vida adicional.
    Reações (1d6): 1 fugir, 2-3 fugir se em desvantagem, 4-6 lutar. </li>
    <br>
    <li> 5. D6 sapos vampiros, nível 4, tesouro -1.
    Reações (1d6): 1 fugir, 2-4 lutar, 5-6 lutar até a morte </li>
    <br>
    <li> 6. 2d6 ratos esqueléticos, mortos-vivos nível 3, sem tesouro. Arma de esmagamento
    ataques estão em +1 contra ratos esqueléticos, mas eles não podem ser atacados
    por arcos e fundas.
    Reações (1d6): 1-2 fugir, 3-6 lutar  </li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Minions (1D6)"){
    $_SESSION['tabela'] =  "<ul>
        <li>1. 1D6 + 2 esqueletos ou 1d6 zumbis (50% de chance de cada um). Mortos-vivos nível
        3. Nenhum tesouro. Armas esmagadoras atacam Esqueletos em +1. As setas estão em -
        1 contra esqueletos e zumbis. Esqueletos e zumbis nunca testam moral.
        Reações: sempre lutar até a morte.</li>
        <br>
        <li>2. duendes 1d6 + 3. Nível 3, tesouro -1. Goblins têm uma chance de 1 em 6 de ganho
        surpresa, agindo assim antes do grupo. Se eles agirem antes do grupo, role 1d6 em sua
        tabela de reações abaixo.
        Reações (1d6): 1 fugir se em menor número, 2-3 suborno (5 PO por goblin), 4-6 luta.</li>
        <br>
        <li>3. 1d6 hobgoblins. Nível 4, Tesouro +1.
        Reações (1d6): 1 fugir se em menor número, 2–3 suborno (10 PO por hobgoblin), 4-5
        lutar, 6 lutar até a morte.</li>
        <br>
        <li>4. 1D6 + 1 orcs. Nível 4. Orcs têm medo de magia e devem testar o moral de cada
        tempo um ou mais é morto por um feitiço. Se um feitiço causasse o número deles cair
        abaixo de 50%, eles vão testar o moral em -1. Eles nunca têm magia itens em seu
        tesouro: trate qualquer magia encontrada como peças de ouro 1d6 x 1d6.
        Reações (1d6): 1-2 suborno (10 PO por orc), 3-5 luta, 6 lutam até a morte.</li>
        <br>
        <li>5. 1d3 trolls. Nível 5, Tesouro: normal. Trolls regeneram, a menos que mortos por um
        feitiço, ou a menos que um personagem use um ataque para cortar um troll para morto.
        Se isso não acontecer, jogue um dado para cada troll morto em seu próximo turno. Em
        um 5 ou 6, o troll vai voltar à vida e continuar a luta.
        Reações (1d6): 1–2 lutar, 3-6 lutar até a morte. Se um anão está presente no grupo, os
        trolls vão lutar automaticamente até a morte.</li>
        <br>
        <li>6. 2d6 Fungi Folk. Nível 3, Tesouro: normal. Qualquer personagem tomando dano do
        povo fungos deve se salvar contra o veneno nível 3 ou perder 1 vida. Halflings
        adicionam seu nível neste save.
        Reações (d6): 1-2 pedir suborno (d6 PO por fungo), 3-6 lutar. </li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Conteúdos da Sala (2D6)"){
    $_SESSION['tabela'] = "<ul>
        <li>2 Tesouro encontrado: role na tabela do Tesouro.<li>
        <br>
        <li>3 Tesouro protegido por uma armadilha. Role na tabela de Armadilhas e na Tabela
        do tesouro.</li>
        <br>
        <li>4 Se corredor, vazio. Caso contrário, role na tabela de Eventos Especiais.</li>
        <br>
        <li>5 Esvazie, mas role na tabela Recurso Especial.</li>
        <br>
        <li>6 Role na tabela de Vermes.</li>
        <br>
        <li>7 Role na tabela de Minions.</li>
        <br>
        <li>8 Se corredor, vazio. Caso contrário, role na tabela de Minions.</li>
        <br>
        <li>9 Vazio.</li>
        <br>
        <li>10 Se corredor, vazio. Caso contrário, role na tabela Monstros Bizarros.</li>
        <br>
        <li>11 Role na tabela de Chefes. Então role 1d6. Adicione +1 para cada chefe ou monstro
        errante que você encontrou até agora no jogo. se o seu total é +6, ou se o layout da
        masmorra estiver completo, este é o chefe final.</li>
        <br>
        <li>12 Esvazie o corredor. Caso contrário, a sala é o covil de um pequeno dragão (veja o
        tabela de chefe para regras de dragão). O pequeno dragão conta como chefe e pode ser o
        chefe final.</li> 
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Recursos Especiais (1D6)"){
    $_SESSION['tabela'] = "<ul>
        <li>1 Fonte: Todos os personagens feridos recuperam 1 Vida da primeira vez que encontrar
        uma fonte em uma aventura. Outras fontes não têm efeito.</li>
        <br>
        <li>2 Templo Abençoado: Um personagem de sua escolha ganha +1 em Ataque contra
        monstros mortos-vivos ou demônios. Assim que o personagem mata menos um mortovivo ou demônio, o bônus se foi.</li>
        <br>
        <li>3 Arsenal: Todos os personagens podem mudar suas armas se quiserem, dentro dos
        limites que as armas permitiram ao seu tipo de personagem. Por exemplo, um guerreiro
        que estava usando uma espada e escudo pode descartar seu escudo e pegue uma arma
        de duas mãos ou troque sua espada por uma maça.</li>
        <br>
        <li>4 Altar Amaldiçoado: Quando você entra na sala, um brilho misterioso emana de um
        altar sinistro. Um personagem aleatório é amaldiçoado e tem agora tem -1 em sua
        rolagem de defesa. Para quebrar a maldição, o personagem deve matar um chefe
        monstro sozinho, ou entrar em um Templo Abençoado (veja 2, acima), ou ter um
        Feitiço de bênção lançado em si mesmo por um clérigo.</li>
        <br>
        <li>5 Estátua: você pode deixar a estátua sozinho ou tocá-la. Se você tocá-lo, role 1d6.
        Em 1 a 3, a estátua desperta e ataca seu grupo (chefe de nível 4 com 6 pontos de vida,
        imune a todos os feitiços; se você o derrotar, você encontrará 3d6 x 10 peças de ouro no
        interior). Em 4-6, a estátua quebra e você encontra 3d6 x 10 peças de ouro dentro.</li>
        <br>
        <li>6 Puzzle Room: a sala contém uma caixa de quebra-cabeças. Seu nível é 1d6. Você
        pode deixar ou tentar resolvê-lo sozinho. Para cada tentativa falhada, o personagem
        tentando resolvê-lo perde 1 vida. Magos e ladinos adicionam seu nível a sua rolagem
        de resolução de quebra-cabeças. Se o quebra-cabeça for resolvido, a caixa se abre: faça
        uma rolagem de Tesouro para determinar seu conteúdo.</li> 
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Eventos Especiais (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1 Um fantasma passa através da equipe. Todos os personagens devem se salvar versus
    nível 4 de medo ou perder 1 vida. Um clérigo adiciona seu nível a este teste.</li>
    <br>
    <li>2 Monstros errantes atacam a equipe. Role 1d6: 1-3 role a tabela de verme, 4 role a
    tabela dos minions, 5 roll na tabela dos monstros estranhos, 6 role na tabela do chefe.
    Rerole todos os pequenos dragões. Um monstro chefe conhecido como um monstro
    errante não tem chance de ser o chefe final.</li>
    <br>
    <li>3 Uma mulher de branco aparece e pede para a equipe completar uma missão. Se vocês
    aceitarem, role na tabela de Quest. Se você se recusar, ela desaparece. Ignore qualquer
    outras aparições da Dama de Branco no jogo.</li>
    <br>
    <li>4 Trap! Role na mesa de armadilhas.</li>
    <br>
    <li>5 Você conhece um curador errante. Ele vai curar sua equipe ao custo de 10 peças de
    ouro por vida curada. Você pode curar tantos pontos de vida quanto puder
    proporcionar. Você pode encontrar o curador apenas uma vez por jogo. Se você
    encontrá-lo novamente, rolar novamente este resultado.</li>
    <br>
    <li>6 Você conhece um alquimista errante. Ele vai te vender uma poção de cura por
    membro do grupo (50 moedas de ouro cada) ou uma dose única de veneno de lâmina (30
    peças de ouro). A poção de cura curará toda a vida perdida aponta para um único
    jogador e pode ser engolido a qualquer momento durante o jogo como uma ação livre. O
    veneno das lâminas permite que você envenene flecha única ou arma cortante (não uma
    arma esmagadora). Aquela arma terá +1 no ataque contra o primeiro inimigo que você
    luta. O veneno não trabalhe com monstros mortos-vivos, demônios, bolhas, autômatos
    ou vivos estátuas. Você pode encontrar um alquimista errante apenas uma vez por
    jogo. Se você conhecer novamente, trate esse resultado como uma armadilha.</li> 
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela do Tesouro (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>0 ou Menos Nenhum tesouro encontrado</li>
    <br>
    <li>1 d6 peças de ouro</li>
    <br>
    <li>2 2d6 peças de ouro</li>
    <br>
    <li>3 Um pergaminho com um feitiço aleatório</li>
    <br>
    <li>4 Uma gema que vale 2d6 x 5 peças de ouro</li>
    <br>
    <li>5 um item de jóias vale 3d6 x 10 peças de ouro</li>
    <br>
    <li>6 ou Mais Um item mágico aleatório da tabela do Tesouro Mágico abaixo</li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela do Tesouro Mágico (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1 Wand of Sleep: permite que o usuário conjure a magia Sleep 3 vezes antes de a
    energia esteja esgotada. Somente magos e elfos podem usá-lo. Adicione o usuário nível
    para determinar o feitiço, como você faria para um feitiço Sleep por esse personagem.<li>
    <br>
    <li>2 Ring of Teleportation: permite ao usuário passar automaticamente uma defesa role
    movendo esse personagem para fora da sala. Esse personagem não pode tomar parte no
    combate atual, mas reencontra a equipe assim que o combate acabou. Após um uso, o
    anel perde seus poderes e se torna um anel de ouro simples no valor de 1d6 + 1 peças de
    ouro.</li>
    <br>
    <li>3 Ouro de Tolos: Estas peças de ouro mágicas (mas falsas) permitem ao usuário
    subornará automaticamente o próximo monstro que pedir suborno. Não importa o que
    o monstro pede, o ouro vai aparecer o suficiente para satisfazer o seu ganância. Este é
    um item mágico de uso único.</li>
    <br>
    <li>4 Arma Mágica: Dá +1 ao teste de ataque do usuário. Esta é uma permanente item
    mágico. Roll d6 para determinar o seu tipo: 1 mão leve esmagadora arma, 2 armas de
    mão leve cortantes, 3 armas de mão esmagadoras, 4-5 cortando a arma da mão, 6 arco.</li>
    <br>
    <li>5 Poção de Cura: Pode ser engolida a qualquer momento, curando todos os perdidos
    vida a um único personagem. Isso não requer uma ação. Isto é um item mágico de uso
    único, utilizável por todas as classes, exceto bárbaros.</li>
    <br>
    <li>6 Equipamento de Bola de Fogo: Este equipamento permite que seu usuário lance
    magia de Bola de Fogo duas vezes, então seus poderes estão esgotados. Somente
    assistentes podem usá-lo. Adicione o usuário nível para determinar o feitiço, como você
    faria para um feitiço Fireball elenco por esse personagem</li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Chefes (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1. Múmia. Morto-vivos de nível 5, 4 pontos de vida, 2 ataques, tesouro +2. Qualquer
    personagem morto por uma múmia se torna outra múmia e deve ser atacado pelo grupo.
    Múmias são atacadas a +2 pelo feitiço Fireball. Múmias nunca testam o moral.
    Reações: sempre lutar.</li>
    <br>
    <li>2. Orc Brutal. Nível 5, 5 pontos de vida, 2 ataques, tesouro +1, mas pode não ter
    quaisquer itens mágicos, trate como peças de ouro 2d6 x 1d6.
    Reações (1d6): 1 suborno (50 PO), 2-5 luta, 6 luta até a morte.</li>
    <br>
    <li>3. Ogro. Nível 5, 6 pontos de vida, tesouro normal. Cada hit de um ogro inflige 2
    pontos de vida de dano.
    Reações (1d6): 1 suborno (30 PO), 2–3 luta, 4–6 luta até a morte.</li>
    <br>
    <li>4. Medusa Nível 4, 4 pontos de vida, tesouro +1. Todos os personagens no início da
    batalha deve se salvar contra um ataque de olhar de nível 4 ou poderá virar pedra.
    Personagens petrificados estão fora do jogo até uma Bênção do feiticeiro ser lançado
    sobre eles. Rogues adicionam metade do seu nível a este save.
    Reações (1d6): 1 suborno (6d6 PO), 2 missões, 3–5 luta, 6 luta até a morte.</li>
    <br>
    <li>5. Senhor do Caos. Nível 6, 4 pontos de vida, 3 ataques, 2 rolos de tesouro em +1.
    Antes de o luta começa, role 1d6 para determinar se o Lorde do Caos tem algum poder
    especial: 1–3 sem poderes, 4 mau-olhado (os personagens devem rolar 4+ ou estar em -1
    em todos os testes de defesa até que o senhor do caos seja morto), 5 dreno de energia
    (qualquer personagem tomando uma ferida do senhor do caos deve rolar 4+ ou perder 1
    level), 6 hellfire blast (antes do combate, todos os personagens devem rolar 6+ ou
    perder 2 pontos de vida; Clérigos adicionam ½ nível a este teste. Quando você mata um
    lorde do caos, role um dado; em um 5 ou 6 um personagem de sua escolha encontra uma
    pista
    Reações (1d6): 1 fugir se em menor número, 2 lutar, 3-6 lutar até a morte.</li>
    <br>
    <li>6. Dragão Pequeno. Nível 6, 5 pontos de vida, 2 ataques, 3 rolagem de tesouro em +1.
    Em cada volta do dragão, role 1d6, em um 1 ou 2 o dragão respira fogo, infligindo 1
    ponto de vida a todos os personagens que falharam em salvar versus nível 6 de dragão
    respiração (cada personagem soma ½ nível, arredondado para baixo). Se o dragão não
    respirar, ele morde 2 personagens aleatórios. Pequenos dragões nunca são encontrados
    como monstros aleatórios.
    Reações (d6): 1 dormindo (todos os personagens podem atacar a +2 em seu primeiro
    ataque), 2–3 suborno (todo o ouro do grupo, com um mínimo de 100 ou um item
    mágico), 4-5 luta, 6 tabela de missões.</li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Mostros Bizarros (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1. Minotauro. Nível 5, 4 pontos de vida, 2 ataques, tesouro normal. Devido ao poder
    de sua carga de corrida de touro, o primeiro teste de Defesa contra um minotauro é em
    1. Minotauros odeiam halflings (na verdade, eles adoram comê-los).
    Reações (1d6): 1-2 suborno (60 PO), 3-4 luta, 6 luta até a morte.</li>
    <br>
    <li>2. Comedor de Ferro. Nível 3, 4 de vida, 3 ataques, sem tesouro. Rolagem de defesa
    contra o comedor de ferro não desfruta de bônus de armadura pesada (escudo e luz
    contagem de armadura). Se o monstro acertar, o personagem não sofre dano, mas perde
    sua armadura, escudo, arma principal ou 3d6 PO, nesta ordem.
    Reações (1d6): 1 fugir, 2-3 suborno (d6 gp para distrair a criatura; você pode não
    enganar a criatura com tolos de ouro), 4-6 luta.</li>
    <br>
    <li>3. Quimera. Nível 5, 6 pontos vitais, 3 ataques, tesouro normal. Em cada uma das
    partess da quimera, role 1d6. Em um 1 ou 2 a quimera respira fogo em vez de executar
    seus múltiplos ataques. Todos os personagens devem salvar versus nível 4 fogo ou
    perder 1 vida.
    Reações (d6): 1 suborno (50 PO), 2–6 luta.</li>
    <br>
    <li>4. Catoblepas. Nível 4, 4 pontos de vida, tesouro +1. Todos os personagens no início da
    batalha deve se salvar contra um ataque de olhar nível 4 ou perder 1 vida.
    Reações (d6): 1 fugir, 2-6 lutar</li>
    <br>
    <li>5. Aranha Gigante. Nível 5, 3 de vida, 2 ataques, 2 rolagem de tesouro. Personagens
    tomando uma ferida devem se salvar contra o veneno de nível 3 ou perder uma vida
    adicional. Vencidos pela teia da aranha, a equipe não pode retirar-se desta luta a
    menos que eles conjurem um feitiço Fireball para queimar as teias.
    Reações: sempre lutar.</li>
    <br>
    <li>6. Gremlins Invisíveis. Um bando de gremlins invisíveis roubam objetos 1d6 + 3 da
    equipe. Você deve entregar objetos de qualquer um dos seus personagens em ordem de
    sua preferência: itens mágicos, pergaminhos, poções, armas, pedras preciosas, moedas
    (em pacotes de 10 PO cada). Se os gremlins roubarem TODOS os seus equipamentos,
    eles vão deixar uma mensagem de agradecimento que conta como uma pista. Os
    gremlins não têm estatísticas de combate porque é impossível lutar eles. Encontrá-los
    não dá nenhum teste XP </li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Missão (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1. Traga-me a cabeça! A criatura pede ao grupo que mate um monstro padrão. Role na
    tabela do chefe para determinar quem. A próxima vez que a equipe se encontrar com
    um chefe em uma sala, em vez de derrotá-lo, você pode usar o chefe da busca. Matando
    o chefe e trazendo a cabeça para o quarto da criatura e completar a missão.</li>
    <br>
    <li>2. Traga-me ouro! Para completar a missão, a equipe deve trazer 1d6 x 50 valores de
    tesouro para este quarto. Se eles já tiverem essa quantia disponível, o valor necessário
    para completar a missão é dobrado.</li>
    <br>
    <li>3. Eu o quero vivo! Como 1, acima, mas a equipe deve subjugar o chefe, capture ele com
    uma corda, e levá-lo para a sala da criatura para completar a busca. Para subjugar um
    monstro, você deve usar o feitiço Sono ou lutar com -1 em todos os testes de Ataque
    (golpear com a lâmina ou tentar para derrubar o chefe em vez de matá-lo).</li>
    <br>
    <li>4. Traga-me! Role na tabela de itens mágicos para determinar que objeto é. Toda vez
    que a equipe mata um chefe, há uma chance de 1 em 6 ele terá esse objeto além de seu
    tesouro, se houver complete a quest, a equipe deve trazer o objeto na sala onde a quest
    começou.</li>
    <br>
    <li>5. Deixe a paz ser o seu caminho! Para completar a missão, a equipe deve completar
    pelo menos três encontros na aventura em um não violento caminho. Isso inclui reações
    como subornar, obter ajuda de monstros, realizando outra missão (não esta!), ou
    derrotando um monstro com o feitiço Sono e depois amarrá-lo com uma corda.</li>
    <br>
    <li>6. Mate todos os monstros! Para completar a missão, todas as salas da masmorra
    devem ter colocados para fora todos os ocupantes mortos, com exceção da criatura que
    enviou a equipe nesta missão. Assim que estas condições são atendidas, a equipe pode
    reivindicar sua recompensa. </li>
    </ul>";
    header('Location: ../nav/tabelas.php');
} else if($_POST['tabelas'] == "Tabela de Recompensas Épicas (1D6)"){
    $_SESSION['tabela'] = "<ul>
    <li>1. O livro de Skalitos. A equipe recebe o livro de feitiços que pertenceu a o lendário
    bruxo Skalitos. Isso conta como um pergaminho de cada um dos seis feitiços. Você pode
    rasgar as páginas e distribuir as seis mágicas entre a equipe a usar como pergaminhos,
    ou deixar o livro como está e atribuí-lo somente um personagem. O livro é antigo e
    frágil, e é destruído se o personagem que o carrega é morto pela respiração do dragão.
    Se não for utilizado, o livro pode Ser vendido por 650 peças de ouro no final da
    aventura.</li>
    <br>
    <li>2. O ouro de Kerrak Dar! A equipe é dada à localização do tesouro que pertencia a um
    anão. Assim que a equipe procurar um quarto e gerar pelo menos uma pista, eles podem
    usar essa pista para encontrar um baú escondido contendo 500 peças de ouro.</li>
    <br>
    <li>3. Arma encantada. Uma das armas do grupo é encantada, jogue dois dados para seus
    testes de Ataque, escolhendo o melhor resultado. A arma também pode acertar
    monstros que são atingidos apenas por magia. O encantamento dura até o final da
    aventura.</li>
    <br>
    <li>4. Escudo de Aviso. Um dos escudos da equipe está agora encantado e conta como
    proteção, mesmo se o usuário é surpreendido por monstros errantes ou se uma outra
    equipe está fugindo de um combate. Se a equipe não tiver escudos, eles receberão um. O
    escudo de advertência é permanente e vai durar toda a campanha. Pode ser vendido por
    200 peças de ouro.</li>
    <br>
    <li>5. Flecha de matar. A equipe recebe uma flecha que automaticamente infligir 3 feridas
    em cima de um monstro. Role na tabela do Chefe para determinar qual monstro é
    afetado pela seta. A seta pode ser usada apenas por um personagem com um arco.
    Ataca automaticamente contra o seu monstro alvo. Uma vez usada, a seta se rompe.
    Se não for utilizado, uma seta de matança pode ser vendida por peças de ouro 3d6 x
    15.</li>
    <br>
    <li>6. Santo símbolo da cura. A equipe recebe um santo símbolo que pode ser usado apenas
    por um clérigo. O clérigo fará todos os testes de cura em +2 até que ele morrer. Quando
    o clérigo morre, o santo símbolo pode ser comprado por outro clérigo na Igreja. Se o
    símbolo e o corpo do clérigo morto forem entregues à igreja, uma tentativa de
    ressuscitar esse clérigo será paga pela igreja. E se não utilizado, o santo símbolo pode
    ser vendido por 700 peças de ouro.</li> 
    </ul>";
    header('Location: ../nav/tabelas.php');
}

?>