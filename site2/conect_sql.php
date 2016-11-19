<?php
$conexao = mysqli_connect('localhost','root','','faleconosco');
if (mysqli_connect_errno())
{
  echo 'nao foi possivel conectar ao sql'.mysqli_connect_error();
}
?>
