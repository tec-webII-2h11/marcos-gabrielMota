<?php
$opcao = $_POST['tipoCRUD'];
switch($opcao){
case "C":
$formulario ="<h3>CRIAR</h3>
<form action='create.php' method='post'>
Login : <input type='text' name='login'><br/>
Senha : <input type='text' name='senha'><br/>
<input type='submit' value='Criar'>
</form>";
break;
case "R":
$formulario ="<h3>BUSCAR</h3>
<form action='read.php' method='post'>
<input type='submit' value='Buscar'>
</form>";
break;
case "U":
$formulario = "<h3>ATUALIZAR</h3>
<form action='update.php' method='post'>
Nome : <input type='text' name='nome'><br/><br/>
Login : <input type='text' name='login'><br/><br/>
Senha : <input type='text' name='senha'><br/><br/>
<input type='submit' value='Atualizar'>
</form>";
break;
case "D":
$formulario ="<h3>DELETAR</h3>
<form action='delete.php' method='post'>
CPF : <input type='text' name='cpf'><br/><br/>
<input type='submit' value='Deletar'>
</form>";
break;
}
  echo $formulario;
 ?>
