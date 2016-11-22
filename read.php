<?php
include "conecta_mysql.php";

//executando sql

$resultado = mysqli_query($conexao,"SELECT * from usuarios") or die(mysqli_error($conexao));
if($resultado){
  while($row = mysqli_fetch_array($resultado)){
    echo "Nome: ".$row['nome']. " - "."Sobrenome: ".$row['sobrenome']." - "."Data de Nascimento : ".$row['datadenascimento']." - "."RG : ".$row['rg']." - "."CPF : ".$row['cpf']." - "."Endereço : ".$row['endereco']." - "."Bairro : ".$row['bairro']." - "."Número : ".$row['numero']." - "."Cidade : ".$row['cidade']."Estado : ".$row['estado']." - "."País : ".$row['pais']." - "."E-mail : ".$row['email']." - "."Login : ".$row['login']." - "."Senha : ".$row['senha']."</br>";
    }
}
echo "<h2><center><b><a href='paineladm.php'>Clique aqui para voltar ao painel.</a></b></center></h2>";
//fechamento da conexao
mysqli_close($conexao);
?>
