<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Cadastrando</title>
<script type="text/javascript">
function cadastro(){
setTimeout("window.location='index.php'",5000);
}
</script>
    </head>
<body>
<?php
include "conecta_mysql.php";
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$datadenascimento = $_POST['datadenascimento'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

    //EXECUTANDO OPERACAO

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, datadenascimento, rg, cpf, endereco, bairro, numero, cidade, estado, pais, email, login, senha)VALUES('$nome' , '$sobrenome' , '$datadenascimento' , '$rg', '$cpf', '$endereco', '$bairro', '$numero', '$cidade', '$estado', '$pais', '$email', '$login', '$senha')");
    echo '<h1><center>Cadastrado com sucesso! Aguarde um instante.</center></h1>';
    echo "<script>cadastro()</script>";
    mysqli_close($conexao);
    ?>



</body>
</html>
