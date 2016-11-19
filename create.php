<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create</title>
<script type='text/javascript'>
function lolo(){
  setTimeout("window.location='paineladm.php'",5000);
}
</script>
</head>
<body>
<?php
include "conecta_mysql.php";
// executando o sql
$login = $_POST['login'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "INSERT INTO usuarios(login,senha)VALUES('$login','$senha')") or die (mysqli_error($conexao));
if($resultado == TRUE){
  echo "</br><center><h2>O usuário foi adicionado com sucesso!Aguarde um instante.</h2></center>";
echo "<script>lolo()</script>";
}
else{
  echo "</br><h2><center>Erro na inserção!</center></h2>";
}
mysqli_close($conexao);
?>
</body>
</html>
