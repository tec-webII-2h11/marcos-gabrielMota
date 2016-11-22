<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
<script type='text/javascript'>
function lolo(){
  setTimeout("window.location='paineladm.php'",5000);
}
</script>
</head>
<body>
<?php
include "conecta_mysql.php";
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
//executando  sql
$resultado = mysqli_query($conexao, "UPDATE usuarios SET nome='$nome' WHERE login='$login', senha='$senha'") or die("nao foi possivel executar : ".mysqli_error($conexao));
if ($resultado == TRUE){
  echo "</br>Usuário Atualizado com Sucesso!Aguarde um instante para voltar ao painel.";
  echo "<script>lolo()</script>";
}else{
  echo "</br>Erro na Atualização!Aguarde um instante para voltar ao painel.";
echo "<script>lolo()</script>";
}
mysqli_close($conexao);
 ?>
 </body>
 </html>
