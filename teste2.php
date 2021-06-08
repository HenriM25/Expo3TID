<?php

include("conexao.php");

    if(isset($_POST["ok"])){
        
        $email = $_POST['email'];
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $erro[] = "E-mail inválido.";
        }
        
        $sql_code = "SELECT senha, iduser FROM cadastro WHERE email = '$email'";
        $sql_query = mysqli_query($conexao,$sql_code);
        $dado = $sql_query->fetch_assoc();
        $total = mysqli_num_rows($sql_query);
        
        if($total = 0){
            $erro = "O e-mail informado não existe no banco de dados.";
            echo $erro;
        }
        if($total = 1 ){
            
        $novasenha = substr(md5(time()), 0, 6);
        $nscrpitografada = md5(md5($novasenha));
        
//        if(mail($email, "Sua nova senha", "Sua nova senha: " .$novasenha)) colocar chaves
             
        
        $sql_code = "UPDATE cadastro SET senha = '$novasenha' WHERE email = '$email'";
        $sql_query = mysqli_query($conexao,$sql_code);
            
            if($sql_query)
                $erro[] = "Senha alterada com sucesso!";
        
             
         }
    }
?>
<!DOCTYPE html>
<html> 
    <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> Mandrake </title>

<link rel="stylesheet" href= "Mandrake.css" type="text/css" >
    </head>
    <body><p>teste</p>
        <br>
        <br>
        <br>
        <br>
        <center> 
        <div class="rec">
            <h2 class="rec-title">Recuperação de senha</h2>
        <div class="rec-body">
<form method="POST" action="">
<input placeholder="Seu e-mail" name="email" type="text">
    <input name="ok" value="confirmar" type="submit">
</form>
            </div>
        </div>
        </center>
    </body>
</html>
