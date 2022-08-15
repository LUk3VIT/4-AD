<?php

    session_start();
    $arquivo = fopen("../tabelas/tabela_minions.txt","r");

    while (!feof($arquivo)) {
        $linhas = fgets($arquivo);
        $dados = explode(";",$linhas);
        
        $_SESSION['campo0'] = $dados[0];
        $_SESSION['campo1'] = $dados[1];
        $_SESSION['campo2'] = $dados[2];
        $_SESSION['campo3'] = $dados[3];
        $_SESSION['campo4'] = $dados[4];
        $_SESSION['campo5'] = $dados[5];
        $_SESSION['campo6'] = $dados[6];
        $_SESSION['campo7'] = $dados[7];
        $_SESSION['campo8'] = $dados[8];
        $_SESSION['campo9'] = $dados[9];
        $_SESSION['campo10'] = $dados[10];
        $_SESSION['campo11'] = $dados[11];
        $_SESSION['campo12'] = $dados[12];
        $_SESSION['campo13'] = $dados[13];
        $_SESSION['campo14'] = $dados[14];
        $_SESSION['campo15'] = $dados[15];
        $_SESSION['campo16'] = $dados[16];
        $_SESSION['campo17'] = $dados[17];
        $_SESSION['campo18'] = $dados[18];
        $_SESSION['campo19'] = $dados[19];
        $_SESSION['campo20'] = $dados[20];
        $_SESSION['campo21'] = $dados[21];
        $_SESSION['campo22'] = $dados[22];
        $_SESSION['campo23'] = $dados[23];
        $_SESSION['campo24'] = $dados[24];
        $_SESSION['campo25'] = $dados[25];
        $_SESSION['campo26'] = $dados[26];
        $_SESSION['campo27'] = $dados[27];
        $_SESSION['campo28'] = $dados[28];
        $_SESSION['campo29'] = $dados[29];
        $_SESSION['campo30'] = $dados[30];
        $_SESSION['campo31'] = $dados[31];
        $_SESSION['campo32'] = $dados[32];
        $_SESSION['campo33'] = $dados[33];
        $_SESSION['campo34'] = $dados[34];
        $_SESSION['campo35'] = $dados[35];
        $_SESSION['campo36'] = $dados[36];
        $_SESSION['campo37'] = $dados[37];
        $_SESSION['campo38'] = $dados[38];
        $_SESSION['campo39'] = $dados[39];
        $_SESSION['campo40'] = $dados[40];
        $_SESSION['campo41'] = $dados[41];
        $_SESSION['campo42'] = $dados[42];


        echo $_SESSION['campo28'];
    }

?>
