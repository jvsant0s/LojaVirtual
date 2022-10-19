<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Loja em PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="produto.php">Produtos</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="login.php">
        <i class='fas fa-users'>
          </span>Login</a></i></li>
        <li><a href="cadastrocliente.php">
          <i class='fas fa-user-plus'></span> 
          Cadastrar Cliente</a></i></li>        
		<li><a href="carrinho.php">
          <span class="glyphicon glyphicon-shopping-cart">
          </span>Carrinho</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
  <div class="container-fluid">
        <a href="index.php"><img src="images/alpha.png" alt="#" width="10%" height="10%"/></a>
  </div>
</div>
