<?php

include_once("conexao.php");

$email = filter_input (INPUT_POST, 'login_email', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'login_senha', FILTER_SANITIZE_STRING);

$sql = "SELECT *FROM Projeto WHERE email='$email' and senha='$senha'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)!= 0){
	
	echo " <script>
	
	
	window.location.href='app.html';
	
	
	</script>";
	
	
}
else
{
	
	echo " <script>
	
	alert('Usuario não registrado');
	window.location.href='index.html';
	
	
	</script>";
}

?>