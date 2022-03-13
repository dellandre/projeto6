<?php 
@require_once("./conexao.php"); 
@session_start();
$usuario = $_SESSION['nome'];
if ($usuario == ''){
	header('Location: index.php');
}
//echo $usuario;
 ?>

<h2>Painel</h2>
<h1><?php $nome?></h1>