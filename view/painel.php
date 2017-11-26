<?php 
  require_once '../controller/usuariosController.php';
  Processo("redirecionamento");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    
    <title>Clinica</title>

    <!-- Bootstrap e Jquery -->
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">

    <link  href="css/main.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->

    <script src="js/jquery.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  
  </head>
  
  <body>
 	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          	<a class="navbar-brand" href="home.php">Inicio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <!-- Drop para view do funcionario  -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Funcionario <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="cadastrarFuncionario.php">Cadastro</a></li>
                  <li><a href="pesqFuncionario.php">Pesquisa</a></li>
              </ul>
            </li>
             <!-- Drop para view do paciente  -->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Paciente <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="cadastrarPaciente.php">Cadastro</a></li>
                  <li><a href="pesqPaciente.php">Pesquisa</a></li>
              </ul>
            </li>
            <li><a href="consulta.php">Consulta</a></li>
            <!-- Drop para view do usuario  -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Usuarios <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="cadastrarUsuario.php">Cadastro</a></li>
                  <li><a href="pesqUsuario.php">Pesquisa</a></li>
              </ul>
            </li>
            <li><a href="../controller/logout.php">Sair</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div class="jumbotron" style="background-image:url('images/painel_images.jpg'); ">
  	<div class="container" >  
    <h1 style="text-align: center;margin-left: auto; margin-right: auto; color: #000000;">Clinica</h1>
  </div><!-- fim .container dentro do jumbotron -->
</div><!-- fim .jumbotron -->
  

