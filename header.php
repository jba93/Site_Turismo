<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="_img/favicon-verde.png"> <!-- coloca a imagem (favicon) na aba -->

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilo -->
        <link href="estilo.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body> <!-- classes tiradas da nav navbar-fixed-top -->
        <nav class="navbar navbar-inverse navbar-transparente">
            <div class="container">
                <!-- Header -->
                <div class="row row-menu">
                    <div class="navbar-header">
                	    <!-- Botão Toggle -->
                	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
                    		<span class="sr-only">Alternar navegação</span> <!-- acessibilidade -->
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                	    </button>

                	    <!-- Logo -->
                	    <!--a href="index.php" class="navbar-brand"><span class="img-logo img-responsive">Holiday Turismo</span></a-->
                        <div class="navbar-brand" id="logo">
                            <a href="index.php"><img class="img-responsive" id="img-logo"></a>
                            <a href="index.php" id="nome-brand">Holiday Turismo</a>
                        </div>

            	    </div> <!-- navbar-header -->

                	<!-- Navbar -->
                	<div class="collapse navbar-collapse" id="barra-navegacao"> <!-- botão do menu para acesso em celulares -->
                	    <ul class="nav navbar-nav navbar-right">
                    		<li><a href="index.php">Home</a></li>
                            <li><a href="quem-somos.php">Quem somos</a></li>
                            <li><a href="destinos.php">Destinos</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contato.php">Contato</a></li>
                	    </ul>
                	</div>
                </div>
        	</div> <!-- /container -->
        </nav>