<?php
session_start();
If (isset($_POST["confirmar"])){
    $conexao= mysqli_connect("localhost","root","","exposicao_mandrake") or die ("erro na conexão");
    $email=$_POST["email"];
    $senha=$_POST["senha"];
     $sql="INSERT * FROM cadastro WHERE email='$email' and senha='$senha'";
     $result= mysqli_query($conexao,$cons);
     if ($result){
     while ($linha=mysqli_fetch_array($result)){
    $_SESSION['email']=$email;
    echo"<scrpit> alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
     }
   }
 }
 
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> Galeria Mandrake </title>

<link rel="stylesheet" href= "Mandrake.css" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
  $(document).ready(function() {
    $('#icon').click(function() {
      $('ul').toggleClass('show');
    });
  });
</script>

</head>

<body>

<header>

    <nav id="menu">
  
        <label id="icon">
          <i class="fas fa-bars"></i>
        </label>
        <li><a class="active" href="index.html">Início</a></li>
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

  <div id="Banner">
    <a href="index.php">
      <img src="IMG/ExpoMandrake_Banner.png" width="100%">
    </a>
  </div>  

<div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header"><!-- Header do modal -->
              <h4 class="modal-title">Fazer login</h4><!-- Título -->
          </div>
          <div class="modal-body"><!-- Corpo do modal -->
              <form method="POST" action=""><!-- Início do Formulário -->
                  <div class="form-group">
                      <p>Email:</p>
                      <input type="email"  name="email" class="form-control" placeholder="Digite seu email">
                  </div>
                  <div class="form-group">
                  <p>Senha:</p>                          
                      <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                      
                  </div>
                  <div class="senha"><a href="#">Esqueceu sua senha?</a></div>
                  <button value="Entrar" class="btn" type="submit">Entrar</button>
                 <br><br>
                  <center>
                      <div class="posicao-btn">
                          &nbsp;&nbsp;<a href="cadastro_novo.php" class="btn2" role="button"aria-pressed="true">Cadastrar</a>
                          
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          
                      </div>
                  </center>
              </form>
          </div>
          
      </div>
  </div>
</div><!-- ##Fim do Modal -->

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script><!-- Chama a biblioteca JQuery -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Chama o arquivo Bootstrap JavaScript -->

</header>
    