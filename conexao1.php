<?php 

	$localhost = "localhost";
	$user = "root";
	$senha = "";
	$banco = "loja";

	$conecta = mysqli_connect($localhost, $user, $senha, $banco);

	$sql = mysqli_query($conecta, "SELECT * FROM usuarios");

	echo "Existem " .mysqli_num_rows($sql). " registros";

 ?>