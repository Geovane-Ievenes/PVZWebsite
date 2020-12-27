<?php

session_start();

if(isset($_POST['verify'])){
	$user = $_POST['userPOST'];
	$password = $_POST['passPOST'];
	$pts = $_POST['ptsPOST'];
	
	if($user && $password){
		$_SESSION['user'] = $user;
		$_SESSION['pts'] = $pts;

		header('location: ranking.php?to=home');
	}else{
		echo("<script>alert('Usuário ou senha incorretos')</script>");
	}
}

if(isset($_SESSION['user'])){
	echo("<script>alert('Você já fez login !! faça logout para alterar a conta')</script>");
	echo("<script>location.href = 'home.php'</script>");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PVZ | Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/login.css">
</head>
<body>
	<main id="container">
		
		<section id="login-box">

			<header class="login-title">
				<h2 style="margin-bottom:0px; margin-top: 25px; font-size: 25pt;">LOGIN</h2>
			</header>
			
			<hr width="75%" color="#73e75b" style="margin: 15px 0px">

			<form action="user_search.php" method="POST" class="login-form">
				<main class="login-inputs">	
					<label>
						<p>Seu nome de usuário</p>
						<input type="text" name="username" style="width:90%;">
					</label>
					
					<label>
						<p>Sua senha</p>
						<input type="password" name="password" style="width:90%;">
					</label>

					<a href="register.php">Ainda não possui uma conta ? Registre-se agora !!</a>
				</main>

				<input type="hidden" name="search-type" value="index">

				<footer class="login-button">
					<input type="submit" name="login" value="Logar">
				</footer>
			</form>

		</section>
	</main>
</body>
</html>