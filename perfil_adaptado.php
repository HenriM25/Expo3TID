<?php include 'header.php'; ?> 

    <body>
     
    

        <div id="Page">

          <table border="0">
            <tr>
              <td>
                <div id="perfil" align="center" class="imagens_home">
                  <button1 type="button" data-toggle="modal" data-target="#Perfil"> <br> <img class="FotoPerfil"  src="IMG/Person.jpg"
                      height="120" width="150" alt=""></button1>
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
      
            <div class="aaaa">
              <table border="4">
      
                <tr>
                  <td>
        
                    <div class="obra">
                      <h1>Editar apelido:</h1>
                    </div>
                    <form action="myphp.php" method="post">
                    <div class="bnt2">
                      <input type="text" multiple />
                    </div>
        
                    <div class="bnt">
                      <input class="bntRed" type="reset" value="Delete" />
                      <input  class= "bntVerde"type="submit" value="Edit" />
                        </div></form></td></tr>
        
              </table>
            
            </div>
            
      
                <div class="obrasPost">
            <table border="4">
              <tr>
                <td>
                  <div class="obra">
                    <h1>Adicionar Obras</h1>
                  </div>
                  <form action="myphp.php" method="post">
      
                    <div class="bnt">
                      <input type="file" accept="image/png, image/jpeg" multiple />
                    </div>
      
                    <div class="bnt">
                      <input class="bntRed" type="reset" value="Delete" />
                      <input class= "bntVerde" type="submit" value="Send" />
                      </div></form></td></tr>
      
                      </table>
          </div>
      
            </div>
            <div class="obras">
              <li class="item"><img src="IMG/Ainda não há obras.png"></li>
            </div>
        
<!-- Modal -->
<div id="Perfil" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button1 type="button" class="close" data-dismiss="modal">&times;</button1>
        <h4 class="modal-title">Alterar Foto de Perfil</h4>
      </div>
      <div class="modal-body">
        <p>Adicionar uma foto ajuda as pessoas a reconhecerem seu perfil, além de mostrar quando a conta esta conectada.</p>
      </div><div><form action="myphp.php" method="post">
        <table border="0">
	<tr>
		<td> <input type="hidden" name="MAX_FILE_SIZE" value="4194304"/></td>
		<td><input type="file" name="arquivos" class="btn btn-success"  accept="image/png, image/jpeg"  multiple /> </td>
        <center><td><input type="reset" value="Delete" /></td>
        <td><input type="submit" value="Send" /></td></center>
	</tr>
	
        </table></form></div>
      <div class="modal-footer">
        <button1 type="button" class="btn btn-default" data-dismiss="modal">Close</button1>
      </div>
    </div>

  </div>
</div>
</div>
        
<?php include 'footer.php'; ?>
