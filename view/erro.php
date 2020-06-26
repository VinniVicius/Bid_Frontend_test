<?php
//session_start();
require("../controller/session-usuario.php");

$_SESSION['cd_login'];
$_SESSION['nm_usuario'];
$_SESSION['id_pacote'];
$_SESSION['cd_usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">
    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Estilo site(customizado) -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <title>Erro - BIDCompras</title>
</head>

<body>
    <!-- Início cabeçalho -->
    <header>
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="http://localhost/view/home-usuario.php" class="navbar-brand">
                    <img class="logo-img" src="img/AF_bid_compras_logo.png" height="75">
                </a>
                

                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">

                    <!-- Search form -->
                    <div class="mx-auto w-50 pesquisar-bar">
                        <div class="input-group align-items-center">
                            <a href="http://localhost/view/home-usuario.php"><i class="material-icons pt-2 mr-2">home</i></a>
                            <input id="pesquisar" type="text" class="form-control"
                                placeholder="Busque pelos anúncios dos compradores...">
                            <div class="input-group-append">
                                <button id="btnPesquisar" class="btn btn-warning" type="button">
                                    <i class="fa fa-search mr-2"></i>Pesquisar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/Search form -->

                    <!-- Itens da navbar topo -->
                    <ul class="navbar-nav mx-3 d-flex align-items-center">
                        <li class="nav-item d-flex align-items-center">
                        <i class="material-icons">attach_money</i><a href="cadastro-anuncio.php" class="d-inline text-dark nav-link pl-0">Quero Comprar</a>
                        </li>

                        <!--<li class="nav-item">
                            <a href="#" onclick="caminhoMinhaVenda();" id="minha-venda" class="text-dark nav-link">Minha vendas</a>
                        </li>-->
                        <li class="nav-item">
                            <!-- Profile Picture -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons d-inline">person </i><div class="d-inline"><?php echo $_SESSION['nm_usuario']; ?></div>
                            </a>
                            <!-- Menu dropdown (conteúdo) -->
                            <div class="profilepic-item dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Itens contidos no dropdown menu -->
                                <!-- Nome Perfil <a class="dropdown-item" href="#"></a> -->
                                <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                                <a class="dropdown-item" href="http://localhost/new/Bidcompras/model/sair.php">Sair</a>
                            </div>
                            <!--/Menu dropdown (conteúdo) -->
                        </li>
                        <!--/Profile Picture -->
                        <!-- Chat Icon -->
                        <div class="dropdown">
                            <a class="btn btn-transparent d-flex align-items-center" href="chat.php?codUsuario" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-comment text-dark pl-1" style="font-size:2rem"></i><div class="d-inline text-dark ml-1">Chat</div>
                            </a>
                            
                        </div>
                        <!--/Chat Icon -->
                        <p></p>
                        </li>
                    </ul>
                    <!--/Itens da navbar topo -->
                </div>
            </div>
        </nav>
    </header>
    <!--/fim Cabeçalho-->
    
    <!-- Wrapper | (Conteúdo) -->
    <div class="wrapper col-md-12 p-0 m-0">
        <!-- container bg-light py-2 -->
        <div class="container bg-light py-2">
            <!-- row -->
            <div class="row">
                <!-- col-lg-12 -->
                <div class="col-lg-12">
                    <div class="col-lg" style="height: 40rem;">
                    <div class="d-flex justify-content-center align-items-center p-2" style="height: 100%;">
                        <h1 class="display-1 text-center" style="width: 100%;">
                            <img class="img-fluid" src="img/Erro.png" style="cursor: unset!important;">
                            <p>Erro!</p>
                        </h1>
                    </div>                    
                </div>
                <div class="col-lg">
                    <p>Página indisponível no momento, <u><a href="home-usuario.php">clique aqui</a></u>&nbsppara voltar para tela inicial!</p>
                </div>
                </div>
                <!--/col-lg-12 -->
            </div>
            <!--/row -->
        </div>
        <!--/container bg-light py-2 -->
    </div>
    </div>
    <!--/Wrapper | (Conteúdo) -->

    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-sm-3">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/bidcompras/?eid=ARA9yB6Vv2LPXAHxeLWnMwwP15Z3wm3exEZz5dpD-LTncrez5FAfagJTuMAeWAQ6YE7FTVPyq0CgXqZh" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/bidcompras" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/bidcompras?igshid=1i1wtdzeuhvn6" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 mt-sm-3 text-center text-white">
                    <p>Desenvolvido por: <u><a href="erro.html" class="mrl-1" target="_blank">AgreeCode</a></u>
                    </p>
                    <p class="h6">&copy Todos os direitos reservados. <u><a class="ml-1" href="fale-conosco.html">Fale conosco</a></u>
                    <u><a href="termos.html" class="ml-1">Termos e condições</a></u> 
                    <u><a href="politica-privacidade.html" class="ml-1">Política de Privacidade</a></u>
                    <u><a href="erro.html" class="ml-1">FAQ</a></u>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Footer -->

    <!--JavaScript Controller-->
    <script src="../controller/js/cadastro-categoria-usuario.js"></script>
    <script src="../controller/js/retornar-anuncios.js"></script>
    <script src="../controller/js/retorna-descricao.js"></script>
    <script src="../controller/js/retorna-macro-home.js"></script>
    <script src="js/meus-favoritos.js"></script>
    <script>
        
    </script>

    <script src="../controller/js/pesquisar.js"></script>
    <script src="../controller/js/paginacao.js"></script>

    


    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- JavaScript (Opcional) -->
    <script src="../controller/js/caminho-para-minha-vendas.js"></script>
</body>

</html>