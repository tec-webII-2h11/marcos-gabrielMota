
<?php
include "conecta_mysql.php";
 ?>
 <?php
session_start();
if(!isset($_SESSION['login']) || !isset($_SESSION['senha'])){
  header("Location: minhaconta.php");
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
<title>CS CLUB</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/typography.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">
</head>
<body>
<div id="mainwrap">
 <div id="footer_terms">
  </div>
<div id="header-wrap" class="wrap">
	  <div id="header" class="pagesize">
        <h1 id="logo"><a href="?">Counter - Strike CLUB</a></h1>
        <div id="topnav">
        </div>
    </div>
</div>
<div id="mainnav-wrap" class="wrap">
    <div id="mainnav" class="pagesize clearfix">
    	<div class="vernav">
            <ul class="clearfix">
                <li><a href="index.php" id="active"><span>Home</span></a></li>
                <li><a href="noticia.php"><span>Notícias</span></a></li>
                <li><a href="cadastro.php"><span>Cadastro</span></a></li>
                <li><a href="minhaconta.php"><span>Minha Conta</span></a></li>
                <li><a href="faleconosco.php"><span>Contato</span></a></li>
                <li><a href="quemsomos.php"><span>Quem Somos</span></a></li>
                <li><a href="admin.php"><span>Administrador</span></a></li>

            </ul>
        </div>
    </div>
</div>
<div id="container-wrap" class="wrap">
    <div id="container" class="pagesize clearfix">
    	<div id="leftcol">
        	<div class="inner">
            	<p class="black"><strong>Você Sabia?</strong><br>
                    Você sabia, que os jogadores brasileiros da equipe SK-Gaming são bicampeoes mundiais?
                    <a href="http://g1.globo.com/tecnologia/games/noticia/2016/07/counter-strike-brasileiros-da-sk-gaming-vencem-final-da-esl-one.html">Confira Aqui</a>

            </div>
        </div>
        <div id="maincol">
        	<div id="banner" class="clearfix">
            	<div id="banner-content">
                	<h1>CADERNO EXPRESSO</h1>
                    <p class="f14">Notícias atualizadas diariamente.</p>
                    </div>
            </div>
            <div id="content-wrap">
            	<div id="content" class="clearfix">
                	<h3 class="yellow f14">Área VIP</h3>
                  <a href="http://gamersclub.com.br">Acesse este link e você irá jogar no maior clube de games da América Latina</a><br/>
                  <a href="http://firegamers.com.br">Ganhe 15% de Desconto em todas as compras usando o nosso cupom, CSCLUB"</a><br/>
                  <a href="http://hltv.org">Fique por dentro de todos os jogos e notícias sobre o mundo do Counter-Strike</a>

                   <h3><b>Participe da enquente e concorra a premios<b></h3><br/>
                   <h4>ENQUETE</h4><br/>
                   <h5><b>Quem é o melhor Jogador do Mundo?</b>
                   <form action="enquete.php" method="post">
                     <input type="radio" name="questao" value="F" checked />Fallen<br/>
                     <input type="radio" name="questao" value="G" />GuardiaN<br/>
                     <input type="radio" name="questao" value="GT" />GeT_RiGhT<br/>
                     <input type="radio" name="questao" value="T" />TaZ<br/><br/>
                     <input type="submit" value="Enviar">
<br><br>
<h3><center><b><a href="logout.php">LOGOUT</a></b></center></h3>







                </div>
            </div>
            <div id="footer">
            	&copy; Copyright 2016 Compay. Desenvolvido por Marcos Molinaro e Gabriel Mota
            </div>
        </div>
        <div id="rightcol">
        	<div class="inner">
            	<p class="black"><strong>Você Sabia?</strong><br>
                    Você sabia, que a competição ESL ONE Cologne tem como premiação total de US$ 1 milhão.<br>
                    <a href="http://mycnb.uol.com.br/coberturas/4288-cobertura-esl-one-cologne-2016">Confira Aqui</a>

            </div>
        </div>
    </div>
</div>
</body>
</html>
