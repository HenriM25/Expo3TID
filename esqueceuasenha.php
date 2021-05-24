<?php

include("conexao.php");

    if(isset($_POST["ok"])){
        
        $email = mysqli->escape_string($_POST['email']);
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $erro[] = "E-mail inválido.";
        }
        
        $sql_code = "SELECT senha, iduser FROM cadastro WHERE email = '$email'";
        $sql_query = $myqli->query(sql_code) or die ($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;
        
        if($total == 0)
            $erro[] = "O e-mail informado não existe no banco de dados.";
        
        if(count($erro) == 0 && $total > 0){
            
        $novasenha = substr(md5(time()), 0, 6);
        $nscrpitografada = md5(md5($novasenha));
        
        
        if(mail($email, "Sua nova senha", "Sua nova senha: " .$novasenha)){ 
        
        $sql_code = "UPDADE cadastro SET senha ='$nscrpitografada' WHERE email = '$email' ";
        $sql_query = $mysqli->query(sql_code) or die($mysqli->error);
            
            if(sql_query)
                $erro[] = "Senha alterada com sucesso!";
        
             }
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
        <?php if(count($erro) > 0)
    foreach($erro as $msg){
        echo "<p>$msg</p>";
    }
        ?>
<form method="POST" action="">
<input placeholder="Seu e-mail" name="email" type="text">
    <input name="ok" value="ok" type="submit">
</form>
    </body>
</html>
