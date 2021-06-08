<?php
session_start();
If (isset($_POST["confirmar"])){
    $conexao= mysqli_connect("localhost","root","","exposicao_mandrake") or die ("erro na conexão");
    $email=$_POST["email"];
    $senha=$_POST["senha"];
     $sql="SELECT * FROM cadastro WHERE email='$email' and senha='$senha'";
     $result= mysqli_query($conexao,$sql);
    $teste=mysqli_num_rows($result);
     
     if ($teste>0){
     while ($linha=mysqli_fetch_array($result)){
    $_SESSION['email']=$email;
    echo"<script> alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
     }
     }else{
         echo"<script>alert('Não efetuou Login'); 
         </script>";
     
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
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

</head>
<body>

<header>

  <div id="Banner">
    <a href="index.html">
      <img src="IMG/BannerTeste3.png" width="100%">
    </a>
  </div>  

<nav id="menu">
    
  <li><a href="index.html">Início</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"> História da Arte </a>
      <div class="dropdown-content">
        <a href="quadros.html"> Quadros </a>
        <a href="escultura.html"> Esculturas </a>
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
              <form method="POST" action=""><!-- Início do Formulário -->
                  <div class="form-group">
                      <p>Email:</p>
                      <input type="email"  name="email" class="form-control" placeholder="Digite seu email">
                  </div>
                  <div class="form-group">
                  <p>Senha:</p>                          
                      <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                      
                  </div>
                  <div class="senha"><a href="teste2.php">Esqueceu sua senha?</a></div>
                  <button value="Entrar" name="confirmar" class="btn" type="submit">Entrar</button>
                 <br><br>
                  <center>
                      <div class="posicao-btn">
                          &nbsp;&nbsp;<a href="cadastro.html" class="btn2 active" role="button"aria-pressed="true">Cadastrar</a>
                          
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

<div id="Page">

  <div id="BHome">

    <img src="IMG/BannerHome2.png" width="100%";>
  
  </div>

    <br>

      <!-- <div class="Home col-9.5">
        <h1>HOME</h1>
      </div> -->

      <div class="expo col-6">

        <h2>Exposição Mandrake</h2>

        <br>
        
        <p>A exposição mandrake é uma galeria online que foi feita para levar um pouco da experiência de ir em uma galeria de arte,
           podendo aprender e conhecer mais sobre as artes, tanto quanto suas histórias, autores e mais. E para quem é apreciador de arte,
           poder visitar uma galeria online já que estamos vivendo um momento tão difícil de isolamento social. E se desejar mostrar suas artes,
           para que outros apreciem, também é possível.</p>
      </div>

      <br>

    <div class="Nos col-5">
      
      <div class="slider"> 
        <div class="slides"> 
            
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
            
          <div class="slide first"> 
            <img  src="IMG/banhista.jpg" class="imagens"  alt="">
          </div>

          <div class="slide">
            <img  src="IMG/atelier.jpg" class="imagens"   alt="">
          </div>
            
          <div class="navigation-auto"> 
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
          </div>

          <div class="navigation-manual"> 
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
          </div>
            
            
        </div>
      </div>    
    </div>

    <div class="col-6 col-m-4 staff">

      <h2> Staff </h2>

      <div class="staff1 col-6">
      
        <div class="slider"> 
          <div class="slides"> 
              
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
              
            <div class="slide first"> 
              <img  src="IMG/banhista.jpg" class="imagens"  alt="">
            </div>
  
            <div class="slide">
              <img  src="IMG/atelier.jpg" class="imagens"   alt="">
            </div>
              
            <div class="navigation-auto"> 
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
            </div>
  
            <div class="navigation-manual"> 
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
            </div>
              
              
          </div>
        </div>    
      </div> 

    </div>

    <div class="col-6 col-m-6 Sobre">
   
      <h2>Sobre nós</h2>

      <br>
        
      <p>Somos de São Caetano do Sul, nos conhecemos estudando juntos.
         Depois de encerrar o ensino médio, tivemos essa grande ideia, e como bons apreciadores de arte,
         reunimos nossas ideias e demos inicio a esse projeto:</p>

    </div>
</div>

<footer>
  <div id="footer">

    <h1> Exposição Mandrake </h1>

    <br>
    
    <div class="ft">
      <div id="item">
        <img src="IMG/email.png"> exposicao@mandrake.com
      </div>

      <div id="item">
        <img src="IMG/suporte.png"> +55 11 0000-0000
      </div>

    </div>

    <div class="Ind">

      <h4> Mandrake's Industries 2019-2021 </h4>  

    </div>

  </div>
</footer>
<script>
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
      document.getElementById("menu").style.position="fixed";
      document.getElementById("menu").style.marginLeft="5%";
      document.getElementById("menu").style.marginRight="5%";
    } else {
      document.getElementById("menu").style.position="sticky";
      // document.getElementById("menu").style.width="100%";
    }
  }
  </script>

  <script type="text/javascript">
        var counter = 1; 
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter>2){
                    counter = 1;
                }
                    
            },10000);
  </script>

 </body>
</html>
