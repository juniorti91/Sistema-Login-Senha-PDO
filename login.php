<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<form class="form" action="logar.php" method="POST">
		<div class="card">
			<div class="card-top">
				<img class="img-login" src="img/user.png" alt="">
				<h2 class="titulo">Painel de Controle</h2>
				<p>Gerenciar seu Negócio</p>
			</div>

			<div class="card-grupo">
				<input type="email" name="email" id="inputEmal" placeholder="Digite seu email" required>
				<label for="inputEmail">Email</label>
			</div>

			<div class="card-grupo">
				<input type="password" name="senha" id="inputSenha" placeholder="Digite sua senha" required>
				<label for="inputSenha">Senha</label>
			</div>

			<div class="card-grupo">
				<label><input type="checkbox"> Lembre-me</label>
			</div>

			<div class="card-grupo btn">
				<button type="submit">ACESSAR</button>
			</div>
		</div>
	</form>

</body>
</html>