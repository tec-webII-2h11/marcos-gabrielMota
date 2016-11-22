<?php
$conexao = mysqli_connect('localhost','root','','login');
// tratamento de erros

if(mysqli_connect_errno()){
  echo 'nao foi possivel conectar ao sql'.mysqli_connect_erro();
}
?>
