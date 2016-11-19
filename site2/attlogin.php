<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Auteticando Login</title>
<script type="text/javascript">
function login(){
  setTimeout("window.location='painel.php'",5000);
}
function lolo(){
  setTimeout("window.location='minhaconta.php'",5000);
}
</script>
</head>
<body>
<?php
include "conecta_mysql.php";
$login = $_POST['login'];
$senha = $_POST['senha'];

//executando OPERACAO
$sql = mysqli_query($conexao, "SELECT * FROM usuarios  WHERE login = '$login' and senha ='$senha'") or die (mysql_error());
$row = mysqli_fetch_row($sql) or die(mysql_error());
if($row>0){
  session_start();
  $_SESSION['login'] = $_POST['login'];
  $_SESSION['senha'] = $_POST['senha'];
  echo "<center>Você foi autenticado com sucesso!Aguarde um instante.</center>";
  echo "<script>login()</script>";
}
else {
  echo "<center>Nome de usuário ou senha invalidos!Aguarda um instante para tentar novamente.</center>";
  echo "<script>lolo()</script>";
}
mysqli_close($conexao);
?>
</body>
</html>
