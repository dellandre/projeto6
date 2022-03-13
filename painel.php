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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Sistema</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Sair</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
	<h2><?php echo $usuario ?></h2>
  </div>
  </nav>

  <div class="container">
      <div class="col-md-12">
	      <button class="btn btn-info mt-4 mb-2" data-toggle="modal" data-target="#modal">Novo Fornecedor</button>
	  </div>
	  <table class="table">
		  <thead>
			  <tr>
			  <th scope="col">Nome</th>
	          <th scope="col">Telefone</th>
	          <th scope="col">Email</th>
	          <th scope="col">Ações</th>
			  </tr>
		  </thead>
		  <tbody>
			<?php
			 $clientes = [];
             $query = "select * from fornecedores";
             $stmt = $conexao->prepare($query);
             $stmt->execute();
             $clientes = $stmt->fetchAll();
              ?>
			  <?php foreach($clientes as $cliente):   ?>
			  <tr>
	      	<td><?= $cliente['nome'] ?></td>
	     	<td><?= $cliente['telefone'] ?></td>
	    	<td><?= $cliente['email'] ?></td>
	    	
	      
	       <td>
	      	<a href="#" class="text-info mr-1"><i class="far fa-edit"></i></a>
	      	<a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a>
	      </td>

	    </tr>

	  <?php endforeach ?>
		  </tbody>
	  </table>

  </div>
	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	
</body>
</html>