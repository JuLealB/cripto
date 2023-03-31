<?php

function token($tamanho= 60){
  $string = md5(rand());
  $randomString = substr($string,0, $tamanho);
  return $randomString;
  
}

$token = token();

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);

  /*if (!isset($_POST['login'])) {
    echo ("<script>location.href='index.php'</script>");
  }*/
?>
<!DOCTYPE>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body><div class="card">
<img class="icon" src="./img/verificacao.png">
  <h1 class="titulo">Bem-vindo(a) você está logado!</h1>
<p class="token">
    

    Token de acesso: <?php echo $token; ?>

</p>
<div class="h1">



  </div>
  </div>
  </body>
</html>