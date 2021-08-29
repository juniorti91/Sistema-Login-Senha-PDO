<?php 

	// Verifica se o campo email e senha for diferente de vazio.
	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
		
		require 'conexao2.php';
		require 'Usuario.class.php';

		$u = new Usuario();

		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		
		if ($u->login($email, $senha) == true) {
			if (isset($_SESSION['idUser'])) {
				header("Location: login.php");
			} else {
				header("Location: index2.php");
			}
		} else {
			header("Location: login.php");
		}
	} else {
		header("Location: login.php"); // Se a verificação for falsa vai retornar para a tela de login.
	}





 ?>