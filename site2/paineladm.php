<?php
include "conecta_mysql.php";
 ?>
 <?php
session_start();
if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])){
  header("Location: admin.php");
  exit();
}
else{
  echo "<h3><center><b>Você está Logado!</b></center></h3>";
  echo "<center><a href='index.php'>Clique aqui para voltar ao HOME.</a></center>";
}
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Página Administrador</title>
</head>
<body>
<form method="post" action="crud.php">
<input type="radio" name="tipoCRUD" value="C" checked />Create<br/>
<input type="radio" name="tipoCRUD" value="R" />Read<br/>
<input type="radio" name="tipoCRUD" value="U"/>Update<br/>
<input type="radio" name="tipoCRUD" value="D" />Delete<br/>
<input type="submit" value="Entrar">
<br><br>
<h3><center><b><a href="logout.php">LOGOUT</a></b></center></h3>
</form>
</body>
</html>
