<?php
    session_start();   
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./styles/user-info.css">
    </head>
    <body>
        
        <header>
            <section class="user-info">
                <img src="./assents/user_profile.png" width="70px" height="70px">

                <main class="user-description">
                    <p id="name"><?php echo($_SESSION['user']);?></p>

                    <p id="pontuation">
                        Pontuação: <?php echo($_SESSION['pts']);?><br>
                    </p>
                </main>
            </section>

            <section class="header-title">
                <img src="logo.png" title="Pvzgw2" width="7%" height="100%" style="margin-top: 10px;">
                <h2 class="sub" align="center" style="margin-top: 1%;">Rumo Ao Nível Máximo</h2>
            </section>
            
            <nav class="header-options">
                <section class="options" style="margin-bottom: 20px;">
                    <a href="ranking.php?to=logout">LOGOUT</a>
                </section>
            </nav>
        </header>

        <section id="megan">
            <section class="all-options">
                <a href="home.php">Home</a>
                <a href="dica1.php">Dicas de Personagens</a>
                <a href="questionario.php">Questionário</a>
                <a href="sobre1.php">Sobre nós</a>
                <a href="show-rank.php?to=ranking">Ranking</a>
            </section>
        </section>

        <main>

                <figure><img src="img4.jpg" title="Pvzgw2" alt="PVZ GW2" width="45%" header=50%></figure>

            <section class="content-text">
                <h1>HOME</h1>

                <p>Olá seja bem vindo a página de dicas oficiais do Plants vs Zombies GW2. Aqui você aprenderá todas as dicas e 
                macetes para se tornar um excelente jogador , e um dia poder ser até mesmo um jogador de clã nessa comunidade tão competitiva.Ao se tornar um 
                level máximo você poderá compartilhar suas experieências e macetes que utilizou para ser um nível máximo
                </p>
            </section> 
            <section class="content-text">
                <h1>Nossas Motivações</h1>
                <p>Bom basicamente nossas Motivações são reerguer a comunidade, tentando ascender a chama do que um dia 
                    já foi um jogo de muito prestígio. Não temos o menor interesse econômico, só queremos ver nosso game com muitos players
                    de novo. E como sabesmos a maioria dos jogadores pararam de jogar GW2 por conta da grande dificuldade para ser um nível.
                </p>
            </section>

        </main>
        <footer>
            <p>DESENVOLVIDO POR: Gabriel Duarte & Geovane Ievenes</p>
        </footer>
    </body>
</html>