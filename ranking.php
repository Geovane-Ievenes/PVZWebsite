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

		// Descobrir index da pontuação do usuário atual
		$userPtIndex;
		$allUsersPtsArr = [];

		for($i = 0; $i < sizeof($allUsersArr); $i++){
			$currentUser = explode(':', $allUsersArr[$i]);
			if($currentUser[0] !== ""){
				$currentUserPt = $currentUser[2];
			}else{
				break;
			}
			array_push($allUsersPtsArr, $currentUserPt); 

			if(preg_match('/'. $_SESSION['user'] .'/', $allUsersArr[$i])){
				$done = false;
				while(!$done){
					/*var_dump(isset($allUsersPtsArr[$i - 1]));
					echo('<br><br><br>' );
					echo('Usuário da frente ' . $allUsersPtsArr[$i - 1] . ' Código: ' . $i . '<br>');
					echo('Usuário atual ' . $allUsersPtsArr[$i] . ' Código: ' . $i .  '<br>');

					echo('Nome do atual: ' . $allUsersPtsArr[$i] .'<br><br>');*/

					if(isset($allUsersPtsArr[$i - 1]) && $allUsersPtsArr[$i - 1] < $allUsersPtsArr[$i]){
						//Aplica-se um SWAP na posição dos dois users na lista de usuários
						$temp = $allUsersArr[$i - 1];
						$allUsersArr[$i - 1] = $allUsersArr[$i];
						$allUsersArr[$i] = $temp;
						//e também um SWAP na lista de pontuações
						$temp = $allUsersPtsArr[$i - 1];
						$allUsersPtsArr[$i - 1]  = $allUsersPtsArr[$i];
						$allUsersPtsArr[$i] = $temp;

						//se a posição do usuário subiu, seu nome estará mais ao início do array
						$i--;
					}else{
						$done = true;
					}
				}
			}
		}
		ftruncate($arquivo, 0);

		$allUsers = implode("|", $allUsersArr);
		fwrite($arquivo, $allUsers);

		fclose($arquivo);

		switch ($_GET['to']) {
			case 'logout':
				$local = 'session_destroyer.php';
				break;
			case 'ranking':
				$local = 'show-rank.php';
				break;
			case 'home':
				$local = 'home.php';
				break;
			default:
				$local = 'home.php';
				break;
		}

		header('Location: ' . $local);
	}
}else{
	echo("<script>alert('Faça login primeiro')</script>");
	echo("<script>location.href = 'index.php'</script>");
}

?>