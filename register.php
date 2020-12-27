<?php

session_start();

if(isset($_POST['verify'])){
	$user = $_POST['userPOST'];

	$ISuser = $_POST['ISuser'];
	$ISpassword = $_POST['ISpassword'];
	
	if(!$user){
		$newUser = $ISuser . ':' . $ISpassword . ':' . 0;

		$arquivo = fopen('users.txt', 'a+');
		if($arquivo){
			fwrite($arquivo, $newUser . '|');

			fclose($arquivo);
		}
		echo("<script>alert('Registro efetuado com sucesso!')</script>");
		echo("<script>location.href = 'index.php'</script>");
	}else{
		echo("<script>alert('Usuário já existente!')</script>");
		echo("<script>location.href = 'index.php'</script>");
	}	
}elseif(isset($_SESSION['user'])){
	echo("<script>alert('Efetue primeiro o logout para criar uma nova conta')</script>");
	echo("<script>location.href = 'home.php'</script>");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PVZ | Register</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./styles/register.css">
</head>
<body>

	<main id="container">
		
		<section id="register-box">

			<header class="register-title">
				<h2 style="margin-bottom:0px; margin-top: 25px; font-size: 25pt;">REGISTRO</h2>
			</header>
			
			<hr width="75%" color="#73e75b" style="margin: 15px 0px">

			<form action="user_search.php" method="POST" class="register-form">
				<main class="register-inputs">	
					<label>
						<p>Seu nome de usuário</p>
						<input type="text" name="username" style="width:90%;">
					</label>
					
					<label>
						<p>Sua senha</p>
						<input type="password" name="password" style="width:90%;">
					</label>
				</main>

				<input type="hidden" name="search-type" value="register">

				<footer class="register-button">
					<input type="submit" name="login" value="Registrar">
				</footer>
			</form>

		</section>

	</main>

</body>
</html>