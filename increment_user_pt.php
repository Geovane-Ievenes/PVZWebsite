<?php

session_start();

if(isset($_POST['enviar'])){
    $acertos = 0;

    for($z = 1; $z <= 5; $z++){
        if(isset($_POST['q' . $z]) && $_POST['q' . $z] == 1){
            $acertos++;
        }
    }
}

if(isset($_SESSION['user'])){
	//CASO O ARQUIVO DE USUÁRIOS NÃO EXISTA, SIGNIFICA QUE O USUÁRIO TENTOU BURLAR O SISTEMA
	$arquivo = fopen('users.txt', 'r+');
	if($arquivo){
		$allUsers = '';

		while(true){
			$linha = fgets($arquivo);
			if($linha == null) break;

			$allUsers .= $linha;
		}

		$allUsersArr = explode("|", $allUsers);

		for($i = 0; $i < sizeof($allUsersArr); $i++){
			if(preg_match('/'. $_SESSION['user'] .'/', $allUsersArr[$i])){
				$user = $allUsersArr[$i];

				$userArr = explode(':', $user);
				$userArr[2] += $acertos; //INCREMENT USER POINT

				$user = implode(':', $userArr);
				$allUsersArr[$i] = $user;
			}
		}

		$allUsers = implode('|', $allUsersArr);

		ftruncate($arquivo, 0);
		rewind($arquivo);

		if(!fwrite($arquivo, $allUsers)) die('Não foi possível incrementar os pontos do usuário :(');
		fclose($arquivo);

		header('Location: ranking.php?to=home');
	}else{
		echo("<script>alert('Tenando invadir o sistema não é 1?!')</script>");
		echo("<script>location.href = 'index.php'</script>");
	}
}else{
	echo("<script>alert('Faça login primeiro')</script>");
	echo("<script>location.href = 'index.php'</script>");
}

?>