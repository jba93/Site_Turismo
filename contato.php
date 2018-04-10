<?php 
    $mensagem_enviada = isset($_GET['mensagem_enviada']) ? 1 : 0;    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contato - Holiday Turismo - Sua próxima viagem está aqui!</title>
    <link rel="icon" href="_img/favicon.png"> <!-- coloca a imagem (favicon) na aba -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="body-contato">

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
    <div class="container">

      <!-- Header -->
      <div class="navbar-header">

        <!-- Botão Toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
        <span class="sr-only">Alternar navegação</span> <!-- acessibilidade -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <!-- Logo -->
        <a href="index.html" class="navbar-brand">
        <span class="img-logo">Holiday Turismo</span>
        </a>
      </div> <!-- navbar-header -->

      <!-- Navbar -->
      <div class="collapse navbar-collapse" id="barra-navegacao"> <!-- botão do menu para acesso em celulares -->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="quem-somos.html">Quem somos</a></li>
            <li><a href="destinos.html">Destinos</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contato.html">Contato</a></li>
        </ul>
      </div>

    </div> <!-- /container -->

    </nav>

    <div class="capa-contato">
        <div class="titulo-capa">
            <h2 class="sombreado">Contato</h2>
        </div>
    </div>

    <section>
        <div class="container corpo"> <!-- container para os conteudos ficarem alinhados, na mesma direção -->

            <div class="row">
                <div class="col-sm-6"> 

                    <form method="POST" action="pega_mensagem.php">

                        <div class="form-group"> <!-- agrupa elementos de formulário -->
                          <label for="nome">Nome</label>
                          <input id="nome" type="text" class="form-control" placeholder="Ex: Ana da Silva" required="" name="nome">
                        </div>

                        <div class="form-group">
                          <label for="email">E-mail</label>
                          <input id="email" type="email" class="form-control" placeholder="Ex: anasilva@gmail.com" required="" name="email">
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" type="telephone" class="form-control" placeholder="Ex: (17)1234-5678" required="" name="telefone">
                        </div>

                        <div class="form-group"> 
                            <label for="mensagem">Mensagem </label><br/>
                            <textarea id="mensagem" class="form-control" rows="5" placeholder="Digite sua mensagem aqui." required="" name="mensagem"></textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="" name="promocoes"> 
                                Desejo receber novidades e promoções da Holiday Turismo.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-default">Enviar</button> <br/>
                        <?php 
                            if ($mensagem_enviada)
                                echo '<font style = "color: blue"> Mensagem enviada com sucesso! Em breve retornaremos seu contato.</font>';
                        ?> 

                    </form>
                </div>

                <div class="col-sm-6"> 
                    <br/>
                    <span class="glyphicon glyphicon-phone-alt"></span><h4>+55 (17) 1234-0000</h4>
                    <span class="glyphicon glyphicon-phone"></span><h4>+55 (17) 99100-0000</h4>
                    <span class="glyphicon glyphicon-envelope"></span><h4>contato@holidayturismo.com.br</h4>
                    <span class="glyphicon glyphicon-map-marker"></span><h4>Rua Águas de Março, 2154<br/>
                    Centro - São José do Rio Preto/SP<br/>
                    CEP: 15840-520</h4>
                </div>

            </div> <!-- fim da linha -->

        </div> <!-- container -->
    </section>

    <!-- Rodapé -->
    <footer id="rodape">
        <div class="container">

            <div class="row"> <!-- primeira linha -->

                <div class="col-md-4">
                     <center>
                         <a href="index.html" ><span class="img-logo img-responsive"></span></a>
                     </center>
                    
                </div>

                <div class="col-md-4 endereco" >
                    <center>
                        Rua Águas de Março, 2154<br/>
                        Centro - São José do Rio Preto/SP<br/>
                        CEP: 15840-520
                    </center>
                </div>

                <div class="col-md-4">
                    <center>
                        <ul class="nav">
                            <li class="logo-rede-social"><a href="https://www.instagram.com"><img src="_img/redes_sociais/instagram.png" class="img-responsive"></a></li>
                            <li class="logo-rede-social"><a href="https://twitter.com"><img src="_img/redes_sociais/twitter.png" class="img-responsive"></a></li>
                            <li class="logo-rede-social"><a href="https://www.facebook.com"><img src="_img/redes_sociais/facebook.png" class="img-responsive"></a></li>
                        </ul>
                    </center>
                </div>
            </div> <!-- fim da primeira linha -->

            <div class="row"> <!-- segunda linha -->
                <center>
                    <h4 class="texto-rodape">Desenvolvido por JBA.<br/>
                    © 2018 Holiday Turismo Ltda.</h4>
                </center>
            </div> <!-- fim da segunda linha -->

        </div> <!-- fim container -->
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>