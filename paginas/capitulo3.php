<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../src/img/espadas/espada1.png">
    <link rel="stylesheet" href="../src/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <title>Horizontes Sombrios: O Caminho do Exilado</title>
</head>

<body>
    <div class="header">
        <h1>Horizontes Sombrios: O Caminho do Exilado</h1>
        <h2>Capítulo 3</h2>
    </div>
    <hr class="barra-branca">
    <br>
    <form id="combinacoes" action="resultado3.php" method="get">
            <div class="carta">
                <div style="grid-template-columns: 1fr;">
                    <i>Caro cavaleiro,
                    <br><br>Longe trilhou, aliados formou, lágrimas chorou, e enfim no terrível castelo chegou. Equipe-se com sua merecida armadura, espada, escudo, poção e dois alimentos, esteja preparado e leve o melhor equipamento que puder imaginar!
                    <br><br>Ao fim da sua jornada você alcança, e então você  sente a mudança que causará. Oh Cavaleiro, nos salve deste mal terrível! Torne-se imbatível! Indestrutível! Oh incrível Cavaleiro, complete sua missão!
                    <br><br>Ass. Reino de Inforny.</i><br><br>
                </div>
            </div>
            <center>
                <br>
                <hr class="barra-branca-meio">
                <br><br>
                <h3>Missão Final: escolher o(s) itens corretas</h3>
                <b>(6 itens necessários para prosseguir)</b>
                <br><br><br>
            </center>
            <!-- ITENS -->
            <center>
                <br><br>
                <h3>Armaduras</h3>
                <br>
            </center>
            <div class="container col-5" >
                <div class="column">
                    <input type="checkbox" name="armadura1" value="op"><a>Armadura padrão</a>
                    <p>Uma armadura que possui uma proteção leve.</p>
                    <center><img src="../src/img/armadura/armadura1.png" width="150" alt="Armadura 1"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="armadura2" value="op"><a>Armadura Robusta</a><br>
                    <p>Usada por cavaleiros e aventureiros experientes.</p>
                    <center><img src="../src/img/armadura/armadura2.png" width="150" alt="Armadura 2"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="armadura3" value="op"><a>Armadura Simples</a><br>
                    <p>Algumas espadadas e projeteis ela consegue segurar!</p>
                    <center><img src="../src/img/armadura/armadura3.png" width="150" alt="Armadura 3"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="armadura4" value="op"><a>Armadura Real</a><br>
                    <p>Muito utilizada por líderes dos exércitos reais.</p>
                    <center><img src="../src/img/armadura/armadura4.png" width="150" alt="Armadura 4"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="armadura5" value="op"><a>Armadura Rigorosa</a>
                    <p>Quase indestrutível, porém extremamente pesada e difícil de utilizar.</p>
                    <center><img src="../src/img/armadura/armadura5.png" width="150" alt="Armadura 5"></center>
                </div>
            </div>
            <br><br>
            <center>
                <h3>Espadas</h3>
                <br>
            </center>
            <div class="container col-5">
                <div class="column">
                    <input type="checkbox" name="espada1" value="op"><a>Espada Padrão</a>
                    <p>Uma simples espada de um simples cavaleiro.</p>
                    <center><img src="../src/img/espadas/espada1.png" width="150" alt="espada 1"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="espada2" value="op"><a>Espada Infernal</a><br>
                    <p>Espada conhecida por muitos cavaleiros como destruidora de demônios.</p>
                    <center><img src="../src/img/espadas/espada2.png" width="150" alt="espada 2"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="espada3" value="op"><a>Espada Laminada</a><br>
                    <p>Uma espada forjada por um ferreiro talentoso.</p>
                    <center><img src="../src/img/espadas/espada3.png" width="150" alt="espada 3"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="espada4" value="op"><a>Espada Talhante</a><br>
                    <p>Uma espada fina, porém muito cortante</p>
                    <center><img src="../src/img/espadas/espada4.png" width="150" alt="espada 4"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="espada5" value="op"><a>Espada Heroica</a><br>
                    <p>Espada utilizada somente pelos heróis dignos.</p>
                    <center><img src="../src/img/espadas/espada5.png" width="150" alt="espada 5"></center>
                </div>
            </div>
            <br><br>
            <center>
                <h3>Escudos</h3>
                <br>
            </center>
            <div class="container col-5">
                <div class="column">
                    <input type="checkbox" name="escudo1" value="op"><a>Escudo Rústico</a>
                    <p>Cavaleiros iniciantes o utilizam.</p>
                    <center><img src="../src/img/escudos/escudo1.png" width="150" alt="Comida 1"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="escudo2" value="op"><a>Escudo Padrão</a><br>
                    <p>Escudo utilizado para treinamento.</p>
                    <center><img src="../src/img/escudos/escudo2.png" width="150" alt="Comida 2"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="escudo3" value="op"><a>Escudo Rígido</a><br>
                    <p>Resistente, porém pouco eficiente.</p>
                    <center><img src="../src/img/escudos/escudo3.png" width="150" alt="escudo 3"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="escudo4" value="op"><a>Escudo Submerso</a><br>
                    <p>Muito resistente e eficiente em batalhas aquáticas e terrestres.</p>
                    <center><img src="../src/img/escudos/escudo4.png" width="150" alt="escudo 4"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="escudo5" value="op"><a>Escudo Místico</a><br>
                    <p>Escudo lendário, porém ninguém nunca conseguiu utilizá-lo.</p>
                    <center><img src="../src/img/escudos/escudo5.png" width="150" alt="escudo 5"></center>
                </div>
            </div>
            <br><br>
            <center>
                <h3>Poções</h3>
                <br>
            </center>
            <div class="container col-5">
                <div class="column">
                    <input type="checkbox" name="pocao1" value="op"><a>Poção de Cura</a>
                    <p>Regenera danos sofridos.</p>
                    <center><img src="../src/img/pocoes/pocao1.png" width="150" alt="Poção 1"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="pocao2" value="op"><a>Poção de Força</a><br>
                    <p>Aumenta a força física do usuário.</p>
                    <center><img src="../src/img/pocoes/pocao2.png" width="150" alt="Poção 2"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="pocao3" value="op"><a>Poção de Intelecto</a><br>
                    <p>Melhora as habilidades mentais do usuário.</p>
                    <center><img src="../src/img/pocoes/pocao3.png" width="150" alt="Poção 3"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="pocao4" value="op"><a>Poção de Invisibilidade</a><br>
                    <p>O usuário fica totalmente invisível.</p>
                    <center><img src="../src/img/pocoes/pocao4.png" width="150" alt="Poção 4"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="pocao5" value="op"><a>Poção de Velocidade</a><br>
                    <p>Todas as habilidades ficam mais ágeis.</p>
                    <center><img src="../src/img/pocoes/pocao5.png" width="150" alt="Poção 5"></center>
                </div>
            </div>
            <br><br>
            <center>
                <h3>Comidas</h3>
                <br>
            </center>
            <div class="container col-5">
                <div class="column">
                    <input type="checkbox" name="comida1" value="op"><a>Bife</a>
                    <p>Muito saboroso! :)</p>
                    <center><img src="../src/img/comidas/comida1.png" width="150" alt="Comida 1"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="comida2" value="op"><a>Cerveja</a><br>
                    <p>Ótimo para alegrar a batalha.</p>
                    <center><img src="../src/img/comidas/comida2.png" width="150" alt="Comida 2"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="comida3" value="op"><a>Queijo</a><br>
                    <p>Alimento de alta qualidade :D</p>
                    <center><img src="../src/img/comidas/comida3.png" width="150" alt="Comida 3"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="comida4" value="op"><a>Peixe Cru</a><br>
                    <p>Se você gosta de sushi é uma ótima opção.</p>
                    <center><img src="../src/img/comidas/comida4.png" width="150" alt="Comida 4"></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="comida5" value="op"><a>Maçã</a><br>
                    <p>Saudável, porém não mata a fome.</p>
                    <center><img src="../src/img/comidas/comida5.png" width="150" alt="Comida 5"></center>
                </div>
            </div>
            <br>
            <center><button style="color: #8b5742;" type="button" onclick="verificar()">COMEÇAR A VIAGEM!</button>
            </center>
        </div>
    </form>
    <br><br>
    <hr class="barra-branca">
    <div class="footer">
        <h4>Informações do projeto</h4>
                <a style="font-size: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" target="blank" href="https://github.com/gadulb/joguinho">GitHub</a>

    </div>

    <script>
        let verificar = () => {
            const selectionados = document.querySelectorAll('input[type="checkbox"]:checked').length;
            console.log(selectionados);
            const formulario = document.getElementById("combinacoes");
            if (selectionados == 6) {
                formulario.submit();
            } else {
                if (selectionados < 6) {
                    alert("Erro: você selecionou MENOS de 6 elementos!");
                } else if (selectionados > 6) {
                    alert("Erro: você selecionou MAIS de 6 elementos!");
                }
            }
        };
    </script>
</body>

</html>