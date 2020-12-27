<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questionário</title>
        <link rel="stylesheet" href="./styleq.css">
        <link rel="stylesheet" href="./styles/user-info.css">
    </head>
    
    <body>
        
        <header>

            <section class="header-title">
              
                <img src="logo.png" title="Pvzgw2" width="7%" height="100%" style="margin-top: 10px;">
                <h2 class="sub" align="center" style="margin-top: 1%">Rumo Ao Nível Máximo</h2>
           
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
            <section><fieldset>

            <legend align="center"><h1>Questionário</h1></legend>
                        
                <br><br><br>
                    
            <section class="fox"><p>Agora você irá fazer um questionário sobre PVZGW2 ,
                isso nos ajuda ver o conhecimento de cada jogador no jogo, mas lembre-se SOMENTE UMA RESPOSTA POR MAQUINA,
                para assim evitarmos usuários que criam muitas contas para responder somente um, você pode também responder
                 em inglês e português uma vez cada</p>
                
                                <br><br><br>
                    <form  name="quest" action="increment_user_pt.php" method="POST">
                    <label for="q1">1) Qual personagem é responsável por dar uma superbola: </label><br><br>
                    <input type="radio" name="q1" value="0">Rosa
                    <input type="radio" name="q1" value="0">Milho
                    <input type="radio" name="q1" value="0">Citrinador
                    <input type="radio" name="q1" value="1">Super-Mioloz
                    <input type="radio" name="q1" value="0">Cabra
                                
                                <br><br><br>

                    <label for="q2">2) Qual personagem é responsável pelo cabrificar?</label><br><br>   
                    <input type="radio" name="q2" value="0">Zumbinho
                    <input type="radio" name="q2" value="1">Rosa
                    <input type="radio" name="q2" value="0">Citrinador
                    <input type="radio" name="q2" value="0">Super-Mioloz
                    <input type="radio" name="q2" value="0">Tronco

                                <br><br><br>

                    <label for="q3">3) Qual personagem Tem a habilidade de entrar no barril?</label><br><br>
                    <input type="radio" name="q3" value="1">Pirata
                    <input type="radio" name="q3" value="0">Disparervilha
                    <input type="radio" name="q3" value="0">Citrinador
                    <input type="radio" name="q3" value="0">Soldado
                    <input type="radio" name="q3" value="0">Tronco

                                <br><br><br>

                    <label for="q4">4) Qual a habilidade principal do Zumbinho? </label><br><br>
                    <input type="radio" name="q4" value="0">Giro
                    <input type="radio" name="q4" value="0">Gravitacional
                    <input type="radio" name="q4" value="1">Robo-Z 
                    <input type="radio" name="q4" value="0">Cabrificar
                    <input type="radio" name="q4" value="0">Ciclone Turbo

                                <br><br><br> 
                                
                    <label for="q5">5)Qual a placa de Nível máximo?</label><br><br>
                    <input type="radio" name="q5" value="0">1000
                    <input type="radio" name="q5" value="0">5000
                    <input type="radio" name="q5" value="1">5455
                    <input type="radio" name="q5" value="0">4444
                    <input type="radio" name="q5" value="0">10000<br><br>

                    <input type="submit" name="enviar" value="enviar">
                </section>
                                <br><br><br>
                </fieldset>
            </form>
            </section>
        </main>


        <footer>
            <p>DESENVOLVIDO POR: Gabriel Duarte & Geovane Ievenes</p>   
        </footer>
    </body>
</html>