<?php

    $arquivo = fopen("../tabelas/tabela_minions.txt","r");

    while (!feof($arquivo)) {
        $linhas = fgets($arquivo);
        $dados = explode(",",$linhas);
        
        $campo1 = $dados[0];
        echo ($campo1);
        
    }

?>
