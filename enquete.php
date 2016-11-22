<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Enquete</title>
  <script type="text/javascript">
  function enquete(){
    setTimeout("window.location='painel.php'",5000);
  }
  </script>
</head>
<body>
<?php
$opcao = $_POST['questao'];
switch($opcao) {
  case "F":
echo "Seu voto foi computado com sucesso!Aguarde um instante.";
echo "<script>enquete()</script>";
break;

case "G":
echo "Seu voto foi computado com sucesso!Aguarde um instante.";
echo "<script>enquete()</script>";
break;

case "GT":
echo "Seu voto foi computado com sucesso!Aguarde um instante.";
echo "<script>enquete()</script>";
break;

case "T":
echo "Seu voto foi computado com sucesso!Aguarde um instante.";
echo "<script>enquete()</script>";
break;
}
?>
</body>
</html>
