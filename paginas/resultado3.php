<?php

// Pega varíeveis do formulário
$armadura1 = filter_input(INPUT_GET, 'armadura1');
$armadura2 = filter_input(INPUT_GET, 'armadura2');
$armadura3 = filter_input(INPUT_GET, 'armadura3');
$armadura4 = filter_input(INPUT_GET, 'armadura4');
$armadura5 = filter_input(INPUT_GET, 'armadura5');
$espada1 = filter_input(INPUT_GET, 'espada1');
$espada2 = filter_input(INPUT_GET, 'espada2');
$espada3 = filter_input(INPUT_GET, 'espada3');
$espada4 = filter_input(INPUT_GET, 'espada4');
$espada5 = filter_input(INPUT_GET, 'espada5');
$escudo1 = filter_input(INPUT_GET, 'escudo1');
$escudo2 = filter_input(INPUT_GET, 'escudo2');
$escudo3 = filter_input(INPUT_GET, 'escudo3');
$escudo4 = filter_input(INPUT_GET, 'escudo4');
$escudo5 = filter_input(INPUT_GET, 'escudo5');
$pocao1 = filter_input(INPUT_GET, 'pocao1');
$pocao2 = filter_input(INPUT_GET, 'pocao2');
$pocao3 = filter_input(INPUT_GET, 'pocao3');
$pocao4 = filter_input(INPUT_GET, 'pocao4');
$pocao5 = filter_input(INPUT_GET, 'pocao5');
$comida1 = filter_input(INPUT_GET, 'comida1');
$comida2 = filter_input(INPUT_GET, 'comida2');
$comida3 = filter_input(INPUT_GET, 'comida3');
$comida4 = filter_input(INPUT_GET, 'comida4');
$comida5 = filter_input(INPUT_GET, 'comida5');

if (($armadura4 == 'op') && ($espada5 == "op") && ($escudo4 == "op") && ($pocao5 == "op") && ($comida2 == "op") && ($comida3 == "op")){ // Variáveis que têm o value="cer"
    $msgVenceu = '<a class="texto-resultado">
    Oh céus... O que pode ser isso? Onde foi a tempestade? O medo e o terror? Majestade, majestade! Se foi o mar de horror! O reino de Inforny finalmente ganhou a guerra contra o mal! Tudo está de volta ao normal. Podemos festejar, se alegrar! Exaltamos o Cavaleiro! Aquele qual nos protegeu e nos acolheu, nos defendeu e não pereceu! O Rei Josias e seu reino agradecem sua bravura e coragem! 
    <br><br>Caro cavaleiro, o Reino de Inforny só tem a agradecê-lo...
    <br><br>Aproveite o seu prêmio: <br><br>
    <center>
    <a href="https://www.youtube.com/watch?v=rxSoUkwP65M&ab_channel=MKVebo">
    <img src="../src/img/ouro.png" alt="Ouro" title="Ouro para você! :)" width="50%"></a>
    </center>
    </a>';
} else{
    $msgPerdeu = '<a class="texto-resultado">Lamentamos ao Cavaleiro...<br><br> 
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $armaduraErr; $espadaErr; $escudoErr; $pocaoErr; $comidaErr;
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br>Ass. Reino de Inforny.</a>';
    //armaduras
    $armaduraErr = $armadura1 || $armadura2 || $armadura3 || $armadura5; // Escolhas erradas do tipo específico
    if($armaduraErr){ 
        $armaduraErr = '♞ O cavaleiro escolheu uma(s) armadura(s) ruim(s).<br>';
    } else{
        $armaduraErr = '';
    }
    //espadas
    $espadaErr = $espada1 || $espada2 || $espada3 || $espada4; // Escolhas erradas do tipo específico
    if($espadaErr){ 
        $espadaErr = '♞ O cavaleiro escolheu uma(s) espada(s) ruim(s).<br>';
    } else{
        $espadaErr = '';
    }
    //escudos
    $escudoErr = $escudo1 || $escudo2 || $escudo3 || $escudo5; // Escolhas erradas do tipo específico
    if($escudoErr){ 
        $escudoErr = '♞ O cavaleiro escolheu um(s) escudo(s) ruim(s).<br>';
    } else{
        $escudoErr = '';
    }
    //Poções
    $pocaoErr = $pocao1 || $pocao2 || $pocao3 || $pocao4; // Escolhas erradas do tipo específico
    if($pocaoErr){ 
        $pocaoErr = '♞ O cavaleiro escolheu uma(s) poção(es) ruim(s).<br>';
    } else{
        $pocaoErr = '';
    }
    //Comidas
    $comidaErr = $comida1 || $comida4 || $comida5; // Escolhas erradas do tipo específico
    if($comidaErr){ 
        $comidaErr = '♞ O cavaleiro escolheu uma(s) comida(s) ruim(s).<br>';
    } else{
        $comidaErr = '';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../src/img/espadas/espada1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <link href="../src/css/styles.css" rel="stylesheet">
    <title>Resultado 3</title>
</head>
<body>
<div class="resultado">
    <div class="header">
        <h1 style="font-family: 'Patrick Hand SC', cursive;">Horizontes Sombrios: O Caminho do Exilado</h1>
    </div>
    <hr class="barra-branca">
    <br>
    <?php // Se o usuário venceu
    if (isset($msgVenceu)){
        echo '<div class="texto-resultado">';
        echo '<div class="resposta"';
        echo $msgVenceu;
        echo '</div>';
        echo '<center><button><a href="home.php">VOLTAR AO INCÍCIO</a></button></center>';
        echo '</div>';
    } else{ // Se o usuário perdeu
        echo '<div class="texto-resultado">';
        echo '<div class="resposta"';
        echo $msgPerdeu;
        echo $armaduraErr; 
        echo $espadaErr; 
        echo $escudoErr; 
        echo $pocaoErr; 
        echo $comidaErr;
        echo $msgPerdeu1;
        echo '</div>';
        echo '<center><button><a href="capitulo1.php">VOLTAR AO INÍCIO</a></button></center>';
        echo '</div>';
    }
    ?>
    <br><br>
    <hr class="barra-branca">
    <div class="footer">
        <h4>Informações do projeto</h4>
                <a style="font-size: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" target="blank" href="https://github.com/gadulb/joguinho">GitHub</a>

    </div>
</body>
</html>