<footer>
  
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
      document.getElementById("menu").style.marginLeft="0%";
      document.getElementById("menu").style.marginRight="0%";
    } else {
      document.getElementById("menu").style.position="sticky";
    //   document.getElementById("menu").style.marginLeft="5%";
      // document.getElementById("menu").style.width="100%";
    }
  }
  </script>
  <script type="text/javascript">
  var counterabs = 1;
  setInterval(function abs() {
      document.getElementById('abs' + counterabs).checked = true;
      counterabs++;
      if (counterabs > 5){
          counterabs = 1;
      }
  }, 5000);
  </script>
    <script type="text/javascript">
  var counterved = 1;
  setInterval(function ved() {
      document.getElementById('ved' + counterved).checked = true;
      counterved++;
      if (counterved > 5){
          counterved = 1;
      }
  }, 5000);
  </script>
      <script type="text/javascript">
  var counterrea = 1;
  setInterval(function rea() {
      document.getElementById('rea' + counterrea).checked = true;
      counterrea++;
      if (counterrea > 5){
          counterrea = 1;
      }
  }, 5000);
  </script>
      <script type="text/javascript">
        var counterfig = 1;
        setInterval(function fig() {
            document.getElementById('fig' + counterfig).checked = true;
            counterfig++;
            if (counterfig > 5){
                counterfig = 1;
            }
        }, 5000);
        </script>

 </body>
</html>
<?php
include("conexao.php");
if(isset($_POST['email']) && strlen($_POST['email']) > 0){

if(!isset($_SESSION))
session_start();

$_SESSION['email'] = $mysqli ->escape_string($_POST['email']);
$_SESSION['senha'] = md5(md5($_POST['email']));

sql_code = "SELECT senha, email FROM cadastro WHERE email = '$_SESSION[email]'";
sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$dado = $sql_query->fetch_assoc();
$total = $sql_query->num_rows;
if($total == 0){
$erro[] = "Este email não pertence a nenhum usuário.";
}else{
if($dado['senha'] == $_SESSION['senha']){
$_SESSION['cadastro'] = $dado ['iduser'];

}else{
$erro[] = "Senha incorreta.";
}
}
if(count($erro) == 0 || !isset($erro)){
echo "<scrpit> alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
}
 }
?>