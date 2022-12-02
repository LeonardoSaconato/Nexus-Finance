<?php

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'txt_nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$sql = "INSERT INTO Projeto (Nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$result = mysqli_query($conn, $sql);


if ($result==true)
{
	echo " <script>
	
	alert('Cadastro Realizado');
	window.location.href='login.html';
	
	
	</script>";
	
	
}
else
{
	
	echo " <script>
	
	alert('Erro no Cadastro');
	window.location.href='login.html';
	
	
	</script>";
	
	
}



?>

