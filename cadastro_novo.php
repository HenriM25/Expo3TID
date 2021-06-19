<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> Cadastro </title>

<link rel="stylesheet" href= "cadastro1.css" type="text/css" >
    

</head>
<body>
         <script>
            $(document).ready(function(){
          $('#CPF').mask('999.999.999-99');
        });
        </script>
    <div class="resp">
    </div>
 <form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
     <ul id="progress">
         <li class="ativo">Informações Pessoais</li>
         <li>Concluir Cadastro</li>
     </ul>
     
  <fieldset>
    <h2>Cadastro</h2>
    <h3>Informe-nos algumas informações</h3> 
       <input type="text" class="nome" name="nome" required min="3" title="Nome Completo. Ex:João dos Santos" placeholder="Nome" pattern="([A-ZÀ-Ú]{1})([a-zà-ú]{2,})(([\s]{1}[A-ZÀ-Ú]{1})([a-zà-ú]{1,}))+">
      <input type="email" class="email" required="required" title="Ex:nome@gmail.com"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  name="email" placeholder="Email">
       <input type="text" class="cpf" name="cpf" required="required" placeholder="CPF" title="Digite o CPF desta forma: XXX.XXX.XXX-XX"><br><br>
      <div class="escolha">
     <label>O que você é?</label><br><br>
              Autor &nbsp;<input type="radio"  name="classe" value="Autor" > &nbsp;&nbsp;
              Apreciador &nbsp;<input type="radio"  name="classe" value="Apreciador" > <br><br>
      </div>
      <input type="button" name="next" class="next acao" value="Próximo">
     </fieldset>
     <fieldset>
         <h2>Já está acabando</h2>
         <h3>Crie uma senha e conclua o cadastro</h3>
      <input type="password" class="senha" name="senha" id="senha" maxlength="8" minlength="4" placeholder="Senha (De 4 a 8 caractéres)" required>
      <input type="password" class="csenha" name="confsenha" id="conf_senha" maxlength="8" minlength="4" placeholder="Confirmar Senha" required>
      <input type="submit" name="next1" class="next acao" onClick="validarSenha()" value="Cadastrar">
      <input type="button" name="prev" class="prev acao" value="Voltar">
    </fieldset>
    </form>
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="function3.js"></script>
    
         
    <script>
    var senha = document.getElementById("senha")
    var conf_senha = document.getElementById("conf_senha");

         function validatePassword(){
         if(senha.value != conf_senha.value) {
          conf_senha.setCustomValidity("Senhas diferentes!");
            } else {
         conf_senha.setCustomValidity('');
  }
}

               senha.onchange = validatePassword;
               conf_senha.onkeyup = validatePassword;

    </script>
     

        <script type="text/javascript">
        function checkForm(form)
        {
            if(form.CPF.value != ""){
                var numero = form.CPF.value.replace(/[^0-9]/g,'');
                var i, soma, dig, resto, dv1, dv2;
                dv1 = parseInt(numero.substring(9,10));
                dv2 = parseInt(numero.substring(10,11));
                soma = 0;
                i = 0;
                for(i = 0; i < numero.length-2; i++){
                    soma = soma + (parseInt(numero.substring(i,i+1))*(10-i));
                }
                resto = soma % 11;
                if(resto == 0 || resto ==1) 
                    dig = 0;
                else 
                    dig = 11 - resto;
                if(dig == dv1){
                    soma = 0;
                    for(i = 0; i < numero.length-1; i++){
                        soma = soma + (parseInt(numero.substring(i,i+1))*(11-i));
                    }
                    resto = soma % 11;
                    if(resto == 0 || resto ==1) dig = 0;
                    else dig = 11 - resto;
                    if(dig != dv2){
                        alert("CPF Inválido!");
                        form.CPF.focus();
                        return false;
                    }
                }else{
                    alert("CPF Inválido!");
                    form.CPF.focus();
                    return false;
                }
                if(numero == "11111111111" || numero == "22222222222" || numero == "33333333333" || numero == "44444444444" || numero == "55555555555" || numero == "66666666666" || numero == "77777777777" || numero == "88888888888" || numero == "99999999999" || numero == "00000000000" ){
                    alert("CPF Inválido\nEntre em contato com a Receita Federal!");
                    return false;
                }
            }
            return true;
        }
        </script>
    </body>
</html>
<?php
If (isset($_POST["next1"])){
    $conexao= mysqli_connect("localhost","root","","exposicao_mandrake") or die ("erro na conexão");
    mysqli_set_charset($conexao, "utf8");
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $cpf=$_POST['cpf'];
    $senha=$_POST['senha'];
    $classe=$_POST['classe'];
     $sql="INSERT INTO cadastro (nome,email,cpf,senha,classe) VALUES ('$nome', '$email', '$cpf', '$senha', '$classe')";
        $resultado = mysqli_query($conexao, $sql);
   if ($resultado) {
	echo "<script language ='javascript' type= 'text/javascript'> window.location.href='index.php';</script>";
} else {
	echo "Error: "  ;
}
mysqli_close($conexao);
            	
     }

?>