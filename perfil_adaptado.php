<?php include 'header.php'; ?> 

    <body>
     
    

        <div id="Page">

          <table border="0">
            <tr>
              <td>
                <div id="perfil" align="center" class="imagens_home">
                  <br> <img class="FotoPerfil"  src="IMG/Person.jpg"
                      height="120" width="150" alt="">
                </div>
              </td>
      
              <td>
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
              </td>
      
      
              <div class="container">
                <td>
                  <h1>Apelido do Usuario</h1>
                  </td></div>
            </tr>
          </table>
          <br><br>
      
      
      
          <div class="teste">
      
           
      
                <div class="obrasPost">
            <table border="4">
              <tr>
                <td>
                  <div class="obra">
                    <h1>Adicionar Obras</h1>
                  </div>
                  <form class="form-inline" action="" name="formp" method="post" enctype="multipart/form-data">
      
                    <div class="bnt">
                      <input type="file" name="endereco" value="imagem"/>
                    </div><br>
       <label>Titulo:</label>
      <input type="text" class="form-control" name="titulo">
                      
    <div class="form-group">
      <label >Estilo:</label>
       
      <select name="estilo">
  <option value="Veduta" name="estilo">Veduta</option>
  <option value="Figurativa" name="estilo">Figurativa</option>
  <option value="Abstrata" name="estilo">Abstrata</option>
  <option value="Realista" name="estilo">Realista</option>
</select>

    </div>
                      <div class="bnt">
                      <input class="bntRed" type="reset" value="Reset" name="Reset" />
                      <input class= "bntVerde" type="submit" value="Send" name="Send" />
                         </div>
                      
                    </form></td></tr>
      
                      </table>
          </div>
      
            </div>
     <br><br>     <div class="PHP">  <?php
/*$session_start();*/
If (isset($_POST['Send'])){
    
$conexao=mysqli_connect("localhost","root","","exposicao_mandrake") ;


    var_dump($_FILES['endereco']);
    $nome=$_FILES['endereco']['name'];
    $titulo=$_POST['titulo'];
    $estilo=$_POST['estilo'];
    /*$iduser=$_SESSION['iduser'];*/
  
    $sql="INSERT INTO obras (titulo,estilo,endereco_imagem)  VALUE ('$titulo', '$estilo', '$nome')";
    $teste= mysqli_query($conexao,$sql);
    $temp=$_FILES['endereco']['tmp_name'];
    move_uploaded_file($temp,"imagens/$nome");/* movendo para pasta do servidor*/


            
  if (isset($_FILES['endereco']['name'], $uploadfile)) {
   echo'<img src="IMG/Ainda não há obras.png" height="220" width="250">';
} else {
      
   echo'<img src=imagens/'.$nome.' height="320" width="350">';
} }
            
?> </div> <style type="text/css">
            .PHP{
visibility: hidden;
    }
img{
 visibility: visible;
}</style>
            <div class="obras2" name="obras">
              <li class="item"><img src="IMG/Ainda não há obras.png"></li>
               
            </div>
        




        </div>


        
<?php include 'footer.php'; ?>
