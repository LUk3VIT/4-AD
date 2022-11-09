<?php
session_start();

if(isset($_POST['id1'])){
    if(isset($_POST['armadura'])){
        if($_POST['armadura'] == "armadura de malha"){
            $_SESSION['armadura_personagem1'] = "Armadura de Malha";
        } else if($_POST['armadura'] == "armadura de aço"){
            $_SESSION['armadura_personagem1'] = "Armadura de Aço";
        }
        header('Location: equipar_armas.php');
    }
    
    // Armas
    
    if(isset($_POST['espada_curta_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual_escudo']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['mangual_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['espada_curta'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['mangual'])){
                if(isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Mangual";
            } else if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
        }
    } else if(isset($_POST['mangual'])){
        if(isset($_POST['lanterna']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
        }
    } else if(isset($_POST['adaga'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Adaga";
            header('Location: equipar_armas.php');
        }
    } else if(isset($_POST['tonfa'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Tonfa";
        }
    } else if(isset($_POST['espada_montante'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Montante";
        }
    } else if(isset($_POST['martelo_guerra'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Martelo de Guerra";
        }
    } else if(isset($_POST['arco'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Arco";
        }
    } else if(isset($_POST['funda'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Funda";
        }
    } else if(isset($_POST['escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Escudo";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Soco";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['livro_feiticos'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
        }
    header('Location: equipar_armas.php');
    }
} else if(isset($_POST['id2'])){
    if(isset($_POST['armadura'])){
        if($_POST['armadura'] == "armadura de malha"){
            $_SESSION['armadura_personagem2'] = "Armadura de Malha";
        } else if($_POST['armadura'] == "armadura de aço"){
            $_SESSION['armadura_personagem2'] = "Armadura de Aço";
        }
        header('Location: equipar_armas.php');
    }
    
    // Armas
    
    if(isset($_POST['espada_curta_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual_escudo']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['mangual_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['espada_curta'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['mangual'])){
                if(isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Mangual";
            } else if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
        }
    } else if(isset($_POST['mangual'])){
        if(isset($_POST['lanterna']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
        }
    } else if(isset($_POST['adaga'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Adaga";
            header('Location: equipar_armas.php');
        }
    } else if(isset($_POST['tonfa'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Tonfa";
        }
    } else if(isset($_POST['espada_montante'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Montante";
        }
    } else if(isset($_POST['martelo_guerra'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Martelo de Guerra";
        }
    } else if(isset($_POST['arco'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Arco";
        }
    } else if(isset($_POST['funda'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Funda";
        }
    } else if(isset($_POST['escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Escudo";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Soco";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['livro_feiticos'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
        }
    header('Location: equipar_armas.php');
    }
} else if(isset($_POST['id3'])){
    if(isset($_POST['armadura'])){
        if($_POST['armadura'] == "armadura de malha"){
            $_SESSION['armadura_personagem3'] = "Armadura de Malha";
        } else if($_POST['armadura'] == "armadura de aço"){
            $_SESSION['armadura_personagem3'] = "Armadura de Aço";
        }
        header('Location: equipar_armas.php');
    }
}
    
    // Armas
    
    if(isset($_POST['espada_curta_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual_escudo']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['mangual_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['espada_curta'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['mangual'])){
                if(isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Mangual";
            } else if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
        }
    } else if(isset($_POST['mangual'])){
        if(isset($_POST['lanterna']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
        }
    } else if(isset($_POST['adaga'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Adaga";
            header('Location: equipar_armas.php');
        }
    } else if(isset($_POST['tonfa'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Tonfa";
        }
    } else if(isset($_POST['espada_montante'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Montante";
        }
    } else if(isset($_POST['martelo_guerra'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Martelo de Guerra";
        }
    } else if(isset($_POST['arco'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Arco";
        }
    } else if(isset($_POST['funda'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Funda";
        }
    } else if(isset($_POST['escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Escudo";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Soco";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['livro_feiticos'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
        }
    header('Location: equipar_armas.php');
} else if(isset($_POST['id4'])){
    if(isset($_POST['armadura'])){
        if($_POST['armadura'] == "armadura de malha"){
            $_SESSION['armadura_personagem4'] = "Armadura de Malha";
        } else if($_POST['armadura'] == "armadura de aço"){
            $_SESSION['armadura_personagem4'] = "Armadura de Aço";
        }
        header('Location: equipar_armas.php');
    }
    
    // Armas
    
    if(isset($_POST['espada_curta_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual_escudo']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['mangual_escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['espada_curta']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['espada_curta'])){
        if(isset($_POST['lanterna']) || isset($_POST['mangual']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['mangual'])){
                if(isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Mangual";
            } else if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Espada Curta";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Curta";
        }
    } else if(isset($_POST['mangual'])){
        if(isset($_POST['lanterna']) || isset($_POST['adaga']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['adaga'])){
                if(isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Adaga";
            } else if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Mangual";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Mangual";
        }
    } else if(isset($_POST['adaga'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['tonfa']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['tonfa'])){
                if(isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Tonfa";
            } else if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Adaga";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Adaga";
            header('Location: equipar_armas.php');
        }
    } else if(isset($_POST['tonfa'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['espada_montante']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['espada_montante'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['martelo_guerra'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['arco'])){
                $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                header('Location: equipar_armas.php');
            } else if(isset($_POST['funda'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Funda";
            } else if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Tonfa";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Tonfa";
        }
    } else if(isset($_POST['espada_montante'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['martelo_guerra']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Espada Montante";
        }
    } else if(isset($_POST['martelo_guerra'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['arco']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Martelo de Guerra";
        }
    } else if(isset($_POST['arco'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
            header('Location: equipar_armas.php');
        } else {
            $_SESSION['arma1_personagem2'] = "Arco";
        }
    } else if(isset($_POST['funda'])){
        if(isset($_POST['livro_feiticos']) || isset($_POST['lanterna']) || isset($_POST['funda']) || isset($_POST['escudo'])){
            if(isset($_POST['livro_feiticos'])){
                if(isset($_POST['funda']) || isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Livro de Feitiços";
            } else if(isset($_POST['escudo'])){
                if(isset($_POST['escudo']) || isset($_POST['lanterna'])){
                    $_SESSION['erro_item'] = "Você selecionou mais itens que o possível!!";
                    header('Location: equipar_armas.php');
                }
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Escudo";
            } else if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Funda";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Funda";
        }
    } else if(isset($_POST['escudo'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Escudo";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Soco";
            $_SESSION['arma2_personagem2'] = "Escudo";
        }
    } else if(isset($_POST['livro_feiticos'])){
        if(isset($_POST['lanterna']) || isset($_POST['escudo'])){
            if(isset($_POST['lanterna'])){
                $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
                $_SESSION['arma2_personagem2'] = "Lanterna";
            }
        } else {
            $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
        }
    header('Location: equipar_armas.php');
    }
}

?>