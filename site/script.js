function carregarNoticia(){
 var itens = "";
  $.ajax({
    type:'GET',
    cache: false,
    url: 'php/dados.php',
    dataType: 'json',
    beforeSend: function(){
      $("h2").html("Carregando...");
    },
    error: function(){
      $("h2").html("Há algum problema com o servidor.");
    },
    success: function(retorno){
      for (var i = 0; i < retorno.length; i++) {
          itens += '<img width="100%" src="'+retorno[i].imagem+'" />';
          itens += '<h3>'+ retorno[i].titulo + "</h3>";
          itens += '<br>';
          itens += '<h4>'+ retorno[i].texto + "...</h4>";
          itens += '<br>';
          itens += '<a href="'+retorno[i].link+'">Leia mais...</a>';
          itens += '<br>';
          itens += '<br>';
          itens += '<hr>';
          itens += '<br>';
        }
        console.log(retorno);
        $("#dados").html(itens);
        $("h2").html("Carregado");
      }

  });

  };
