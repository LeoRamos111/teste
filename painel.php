<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-painel.css">
    <title>Painel</title>
</head>
<body>

    <header class="cabecalho">
        <div class="container-left">
            <h1>Ramos</h1>
            <h1 id="trainer">Trainer</span>
        </div>

        <div class="container-center">
            <li><a href="#">MUSCULAÇÃO</a></li>
            <li><a href="#" id="teste">TREINAMENTO<br>PERSONALIZADOS</a></li>
            <li><a href="#">AVALIAÇÃO FISICA</a></li>
            <li><a href="#">PLANOS</a></li>
        </div>

        <div class="container-right">
            <a href="logout.php">SAIR</a>
        </div>
    </header>

    <main>
        <div class="sessao-01">
            <div class="container-left">
                <h5>Persistência e consistência moldam o corpo.</h5>
                <h1>Seja bem-vindo</h1>
                <span><?php echo $_SESSION['nome']; ?></span>
                <p>Ter um treino específico para o seu corpo é essencial para alcançar resultados satisfatórios e saudáveis na jornada de condicionamento físico. Cada indivíduo é único, com diferentes características físicas, níveis de condicionamento, metas e limitações. Um treino personalizado leva em consideração esses fatores, otimizando os resultados.</p>
                <button>Faça parte!</button>
            </div>

            <div class="container-right">
                <img src="img/cbum-logo.jpg" alt="">
            </div>

        </div>


        <div class="sessao-02">

            <div class="container-welcome">
                <h1>Ficha de Treinos</h1>
                <h2>de</h1>
                <span><?php echo $_SESSION['nome']; ?></span>
            </div>


            <div class="container-treinos">
                <div class="card-segunda">
                    <h1>Segunda-feira</h1>
                    <br>
                    <h2>Quadríceps</h2>
                    <br>
                    <p><strong>1.</strong>  Aquecimento cadeira extensora 50% da carga 2/3 series 15rep</p>
                    <p><strong>2.</strong>  Agachamento no Smith</p>
                    <p><strong>3.</strong>  Afundo no Smith</p>
                    <p><strong>4.</strong>  Agachamento Hack</p>
                    <p><strong>5.</strong>  Cadeira Extensora</p>
                    <p><strong>6.</strong>  Passada</p>
                    <br>
                    <div class="opcoes">
                        <button id="adicionar">Adicionar</button>
                        <button id="alterar">Alterar</button>
                        <button id="remover">Remover</button>
                    </div>
                </div>

                <div class="card-terca">
                    <h1>Terça-feira</h1>
                    <br>
                    <h2>Costas</h2>
                    <h2>Bíceps</h2>
                    <br>
                    <p><strong>1.</strong>  Aquecimento puxada articulada <strong>(anel)</strong> 50% carga 15rep</p>
                    <p><strong>2.</strong>  Puxada alta</p>
                    <p><strong>3.</strong>  Remada articulada</p>
                    <p><strong>4.</strong>  Remada baixa com triangulo</p>
                    <p></p>
                    <p><strong>5.</strong>  Rosca na polia (pegador V ou barra W)</p>
                    <p><strong>6.</strong>  Rosca com corda na polia</p>
                    <br>
                    <div class="opcoes">
                        <button id="adicionar">Adicionar</button>
                        <button id="alterar">Alterar</button>
                        <button id="remover">Remover</button>
                    </div>
                </div>

                <div class="card-quarta">
                    <h1>Quarta-feira</h1>
                    <br>
                    <h2>Glúteos</h2>
                    <h2>Posterior</h2>
                    <br>
                    <p><strong>1.</strong>  Aquecimento cadeira flexora 2/3 series 15rep</p>
                    <p><strong>2.</strong>  Stiff (smith/livre)</p>
                    <p><strong>3.</strong>  Elevação pélvica</p>
                    <p><strong>4.</strong>  Mesa flexora</p>
                    <p><strong>5.</strong>  Cadeira abdutora</p>
                    <p><strong>6.</strong>  Sumo</p>
                    <br>
                    <div class="opcoes">
                        <button id="adicionar">Adicionar</button>
                        <button id="alterar">Alterar</button>
                        <button id="remover">Remover</button>
                    </div>
                </div>

                <div class="card-quinta">
                    <h1>Quinta-feira</h1>
                    <br>
                    <h2>Peito</h2>
                    <h2>Ombro</h2>
                    <h2>Triceps</h2>
                    <br>
                    <p><strong>1.</strong>  Aquecimento peck deck 2/3 series 15rep</p>
                    <p><strong>2.</strong>  Peck Deck</p>
                    <p><strong>3.</strong>  Supino articulado</p>
                    <p><strong>4.</strong>  Desenvolvimento maquina</p>
                    <p><strong>5.</strong>  Elevação lateral</p>
                    <p><strong>6.</strong>  Tríceps corda polia</p>
                    <p><strong>7.</strong>  Tríceps testa banco com halteres</p>
                    <br>
                    <div class="opcoes">
                        <button id="adicionar">Adicionar</button>
                        <button id="alterar">Alterar</button>
                        <button id="remover">Remover</button>
                    </div>
                </div>

                <div class="card-sexta">
                    <h1>Sexta-feira</h1>
                    <br>
                    <h2>Quadríceps</h2>
                    <br>
                    <p><strong>1.</strong>  Aquecimento cadeira extensora 50% da carga 2/3 series 15rep</p>
                    <p><strong>2.</strong>  Agachamento no Smith</p>
                    <p><strong>3.</strong>  Cadeira extensora</p>
                    <p><strong>4.</strong>  Búlgaro</p>
                    <p><strong>5.</strong>  Afundo com halteres</p>
                    <p><strong>6.</strong>  Passada</p>
                    <p><strong>7.</strong>  Panturrilha livre ou Panturrilha no Hack</p>
                    <br>
                    <div class="opcoes">
                        <button id="adicionar">Adicionar</button>
                        <button id="alterar">Alterar</button>
                        <button id="remover">Remover</button>
                    </div>
                </div>

            </div>

        </div>

    </main>
</body>
</html>