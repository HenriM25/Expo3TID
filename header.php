<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> Galeria Mandrake </title>

<link rel="stylesheet" href= "Mandrake.css" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

</head>
<body>

<header>

  <div id="Banner">
    <a href="index.php">
      <img src="IMG/BannerTeste3.png" width="100%">
    </a>
  </div>  
<nav id="menu">
    
  <!-- <li><a class="active" href="Home.html"> <img src="IMG\EMLogo.png" height="70" width="70" > </a></li> -->
  <li><a href="index.php">Início</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"> História da Arte </a>
      <div class="dropdown-content">
        <a href="quadros.php"> Quadros </a>
        <a href="escultura.php"> Esculturas </a>
      </div>
  </li>
  <li><a href=".html"> Explorar </a></li>
  <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Entrar <img src="IMG/Person.jpg" height="25" width="25"></a>
      <div class="dropdown-content">
        <a href="#" data-toggle="modal" data-target="#myModal"> Login <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> </a>
        <a href=".html">Sair</a>
      </div>
    </li> 

</nav>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header"><!-- Header do modal -->
              <h4 class="modal-title">Fazer login</h4><!-- Título -->
          </div>
          <div class="modal-body"><!-- Corpo do modal -->
              <form action=""><!-- Início do Formulário -->
                  <div class="form-group">
                      <p>Email:</p>
                      <input type="email" class="form-control" placeholder="Digite seu email">
                  </div>
                  <div class="form-group">
                  <p>Senha:</p>                          
                      <input type="password" class="form-control" placeholder="Digite sua senha">
                  </div>
                  <div class="senha"><a href="#">Esqueceu sua senha?</a></div>
                  <button class="btn ">Entrar</button>
                  
                 <br><br>
                  <center>
                      <div class="posicao-btn">
                          &nbsp;&nbsp;<a href="cadastro.html"><button class="btn2">Cadastrar</button></a>
                          &nbsp;&nbsp; <button class="btn3 ">Entrar como visitante</button>
                      </div>
                  </center>
              </form>
          </div>
          <div class="modal-footer"><!-- Footer do Modal -->
              <button type="button" class="btn4" data-dismiss="modal">
                  Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </button>                
          </div>
      </div>
  </div>
</div><!-- ##Fim do Modal -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script><!-- Chama a biblioteca JQuery -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Chama o arquivo Bootstrap JavaScript -->

</header>