<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Você já enviou sua mensagem!</title>
</head>
<body>
<?php
include "conect_sql.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

//executando ao BD
$resultado = mysqli_query($conexao, "INSERT INTO mensagem(nome,email,assunto,mensagem)VALUES('$nome','$email','$assunto','$mensagem')");
echo '<h1><center>Mensagem enviada com sucesso!</center></h1>';

// fechando conexao
mysqli_close($conexao);
?>
</body>
</html>
