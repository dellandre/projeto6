<?php 
@require_once("./conexao.php"); 
@session_start();
$usuario = $_SESSION['nome'];
if ($usuario == ''){
	header('Location: index.php');
}
//echo $usuario;
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema</title>
</head>
<body>
	<h1>Painel</h1>
	<h2><?php echo $usuario ?></h2>
	<a href="logout.php">Sair</a>

	
</body>
</html>