<?php
include("conexao.php");

    if(isset($_POST["confirmar"])){
        $email = $_POST['email'];
        $codigo = $_POST['codigo'];
        $senha = $_POST['senha'];
        
        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$codigo' ";
         $sql_query = mysqli_query($conexao,$sql_code);
        $dado = $sql_query->fetch_assoc();
        $total = mysqli_num_rows($sql_query);
        
        if($total == 0){ 
            echo "Senha fornecida incorreta, verifique novamente no seu email!";
        }else{
            //* testar senhas
            $sql_code = "UPDATE cadastro SET senha = '$senha' WHERE email = '$email'";
        $sql_query = mysqli_query($conexao,$sql_code);
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
    <body>
        
<form method="POST" name="nova" action="">
<input placeholder="Digite seu e-mail" name="email" type="text">
    <input type="text" name="codigo"  placeholder="Digite o codigo enviado no email">
    <input type="password" name="senha" class="form-control" placeholder="Digite sua nova senha">
    <input type="password" name="conf_senha" class="form-control" placeholder="Confirme sua nova senha">
    <input name="confirmar" value="confirmar" type="submit">
</form>
    </body>
</html>
