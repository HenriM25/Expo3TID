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
                  <form class="form-inline" action="myphp.php" method="post">
      
                    <div class="bnt">
                      <input type="file" accept="image/png, image/jpeg" multiple name="EscolherObra" />
                    </div><br>
       <label>Titulo:</label>
      <input type="text" class="form-control" name="titulo">
                      
    <div class="form-group">
      <label >Estilo:</label>
       
      <select name="estilo">
  <option value="estilo" name="Veduta">Veduta</option>
  <option value="estilo" name="Figurativa">Figurativa</option>
  <option value="estilo" name="Abstrata">Abstrata</option>
  <option value="estilo" name="Realista">Realista</option>
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
            <div class="obras2">
              <li class="item"><img src="IMG/Ainda não há obras.png"></li>
            </div>
        


   

        </div>


        
<?php include 'footer.php'; ?>