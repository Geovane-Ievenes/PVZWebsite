<?php
	session_start();

	if(isset($_SESSION['user'])){

		$arquivo = fopen('users.txt', 'a+');
		if($arquivo){
			rewind($arquivo);
	
			$allUsers = '';
	
			while(true){
				$linha = fgets($arquivo);
				if($linha == null) break;
	
				$allUsers .= $linha;
			}
	
			$allUsersArr = explode('|', $allUsers);

			fclose($arquivo);
		}
	}else{
		header('Location: home.php');
	}

	function getTrophyImage($counter){
		switch($counter){
			case 1: return './assents/golden-trophy.png';
			case 2: return './assents/silver-trophy.png';
			case 3: return './assents/cooper-trophy.png';
			default: return false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RANKING</title>
	<link rel="stylesheet" type="text/css" href="./styles/show_rank.css">
	<link rel="stylesheet" href="./styles/header_zombie.css">
	<link rel="stylesheet" href="./styles/user-info.css">
	<style>
	/*USER INFO ZOMBIE STYLE*/

	.user-info{
		background-color: #dfdade;
	}

	/*GENERAL USER CARD STYLES*/
		article.user{
			width: 97%;
			height: 5em;

			display: flex;
			justify-content: flex-start;
			align-items: center;

			background-color: #ffeeff;

			border-radius: 1px;

			margin: 0.7em 0px;

			border: solid 2px #0e0e0e;
		}

		.user-description{
			margin-left: 6%;
		}

		.user-description .name{
			font-weight: bold;
		}

		.user-description p{
			margin: 4% 0px;
		}
	/* ANOTHER PLACINGS (4,5,6...) STYLES*/
		.placing-text{
			width: 20%;
			height: 100%;

			display: flex;
			justify-content: center;
			align-items: center;
		}

		.placing-text p{
			margin: 0px;

			text-align: center;
			font-size: 170%;
			font-weight: bolder;
			font-family: Verdana;
		}
	</style>
</head>
<body>

	<main id="container">
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

		<main id="rank-show-box">

			<main class="main-content">
				<section id="rank-indication-image">
					<img src="./assents/trophy.png" width="87%" height="40%">

					<h2 style="font-family: Verdana; margin-top: 5%;">RANKING</h2>
				</section>

				<section class="users-rank">
					<?php
					
						for($i = 0; $i < sizeof($allUsersArr) - 1; $i++){
							$Timage = getTrophyImage($i + 1);
				
							$user = $allUsersArr[$i];
							$userArr = explode(':', $user);
				
							$cUsername = $userArr[0];
							$cUserPoints = $userArr[2];
				
							require('user-rank-view.php');
						}
					?>	
				</section>
			</main>

		</main>
	</main>
</body>
</html>