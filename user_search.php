<?php

if(isset($_POST['login']) || isset($_POST['register'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$searchType = $_POST['search-type'];

	$userPOST = false;
	$passPOST = false;
	$ptsPOST = false;

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

		for($i = 0; $i < sizeof($allUsersArr); $i++){
			if(preg_match('/'. $username .'/', $allUsersArr[$i])){
				$user = $allUsersArr[$i];
				$userArr = explode(':', $user);

				$userPOST = $userArr[0];

				if($userArr[1] == $password){
					$passPOST = $userArr[1];
					$ptsPOST = $userArr[2];
				}else{
					break;
				}
			}
		}
		fclose($arquivo);
	}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Suas informações estão prontas !!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/waiting_page.css">
</head>
<body>
	<form action="<?php echo($searchType);?>.php" method="POST">

	<main id="container">
		<section class="tips-box">
			<h2 class="title">VAI UMA CURIOSIDADE AÍ ?</h2>

			<section class="tip">
				<section class="tip-text">
					<h4>INSPIRAÇAÕ EM WARCRAFT 3</h4>

					<p>Uma das inspirações de Plants vs. Zombies está em Warcraft 3, por sua modificação de defesa de torres, o gênero do jogo. Neste modo os jogadores deveriam defender sua base, apenas posicionando atiradores ao longo do caminho. Muita gente não sabe, mas outra inspiração veio do cardgame Magic The Gathering, com suas estratégias e combos.</p>
				</section>
			</section>
			
			<section class="continue-question">
				<p>Gostou ? Espero que sim. Aliás, buscamos suas informações em nosso banco de dados. CONFIRA O RESULTADO:</p>
			</section>

			<input type="submit" name="verify" value="Continuar" class="continue-button">

		</section>
	</main>

		<input type="hidden" name="userPOST" value="<?php echo($userPOST);?>">
		<input type="hidden" name="passPOST" value="<?php echo($passPOST);?>">
		<input type="hidden" name="ptsPOST" value="<?php echo($ptsPOST);?>">

		<input type="hidden" name="ISuser" value="<?php echo($username);?>">
		<input type="hidden" name="ISpassword" value="<?php echo($password);?>">
	</form>

</body>
</html>