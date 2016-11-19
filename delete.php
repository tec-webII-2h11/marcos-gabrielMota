<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Deletar</title>
  <script type='text/javascript'>
  function lolo(){
    setTimeout("window.location='paineladm.php'",5000);
  }
  </script>
</head>
<?php
include "conecta_mysql.php";
$cpf = $_POST['cpf'];

$resultado = mysqli_query($conexao,"DELETE FROM usuarios WHERE cpf='$cpf'") or die(mysqli_error());
if($resultado == TRUE){
  echo "</br><h2><center><b>Usuário removido com sucesso!Aguarde um instante para voltar ao painel</b></center></h2>";
  echo "<script>lolo()</script>";
}else{
  echo "<br/>Erro na inserção";
}

?>
</head>
<body>
</body>
