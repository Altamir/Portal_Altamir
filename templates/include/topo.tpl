<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$titulo}</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Altamir</a>
                </div>
                <div class="collapse navbar-collapse" id="menuCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#">{$pg_atual}</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Materias<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Jogos para Web</a></li>
                                <li><a href="http://altamir.hol.es/jogo/">Análise e Projeto de Software</a></li>
                                <li><a href="#">Materia a ser definida</a></li>                                
                            </ul>
                        </li>                        
                        <li>
                            <a href="sobre.php">Sobre</a>
                        </li>
                        <li>
                            <a href="contato.php">Contatos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-fim Topo-->