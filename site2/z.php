<?php
include "conecta_mysql.php";
$login = $_POST['login'];
$senha = $_POST['senha'];

//executando OPERACAO
$result = mysqli_query($conexao, "INSERT INTO login2(login,senha)VALUES('$login','$senha')");
echo '<h3><center>LOGADO COM SUCESSO!</h3></center>';
mysqli_close($conexao);
?>
