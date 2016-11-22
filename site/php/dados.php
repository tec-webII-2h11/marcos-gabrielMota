<?php

header('Content-Type: ' . "text/plain");

$hots   = "localhost";
$user   = "root";
$psw    = "";
$dbname = "esportsnow";
$con    = mysql_connect($hots, $user, $psw) or die (mysql_error($con));
$banco  = mysql_select_db($dbname);

if (!$con) {
  echo '[{"error": "Não foi possivel conectar ao banco"';
  echo '}]';
}else{
  $sql    = "SELECT * FROM noticias";
  $result = mysql_query($sql);
  $n      = mysql_num_rows($result);

  if (!$result) {
    echo '[{"error": "Há algum erro com a busca."';
    echo '}]';
  }else if ($n<1) {
    echo '[{"error": "Não há noticias cadastradas."';
    echo '}]';
  }else{
    for ($i=0; $i<$n; $i++) {
      $dados[] = mysql_fetch_assoc($result, $i);
    }
    echo json_encode($dados, JSON_PRETTY_PRINT);
  }

}

 ?>
