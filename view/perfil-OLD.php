<?php

require("../controller/session-usuario.php");

$cdSessionUsuario = $_SESSION['cd_usuario'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Requery Metatag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/cb37385e8b.js" crossorigin="anonymous"></script>

    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- CSS customizado -->
    <link type="text/css" rel="stylesheet" href="css/stylePRO.css" />
    <link type="text/css" rel="stylesheet" href="css/estilo.css" />

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="js/mini-lightbox.min.js"></script>

    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="../controller/js/minha-vendas.js"></script>
    <script src="../controller/js/meus-favoritos.js"></script>
    <script src="js/login.js"></script>
    <!-- mini-lightbox -->
    <script src="js/mini-lightbox.min.js"></script>
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">
    <script>
        MiniLightbox.customClose = function() {
            var self = this;
            self.img.classList.add("animated", "fadeOutDown");
            setTimeout(function() {
                self.box.classList.add("animated", "fadeOut");
                setTimeout(function() {
                    self.box.classList.remove("animated", "fadeOut");
                    self.img.classList.remove("animated", "fadeOutDown");
                    self.box.style.display = "none";
                }, 500);
            }, 500);
            return false;
        };

        MiniLightbox.customOpen = function() {
            this.box.classList.add("animated", "fadeIn");
            this.img.classList.add("animated", "fadeInUp");
        };
        new MiniLightbox({
            selector: ".wrapper img"
                // the common container where the images are appended
                ,
            delegation: "html"
        });
    </script>



    <title>Meu perfil - BIDCompras</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="modalProposta" tabindex="-1" role="dialog" aria-labelledby="modalPropostaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row mx-auto">
                        <h5 class="modal-title" id="modalPropostaLabel">Título anúncio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="formControlOferta">Descrição oferta</label>
                            <textarea class="form-control" id="formControlOferta" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="mr-auto" href="#product_view" data-toggle="modal" data-target="#product_view" data-dismiss="modal"><i class="fa fa-info-circle"></i> Detalhes do anúncio</a>
                        <button type="submit" class="btn btn-primary">Enviar proposta</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Modal -->
    <!-- Detailed product (modal) -->
    <div class="modal fade product_view" id="product_view">
        <!-- id do Modal de detalhes-produto -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title float-left" id="titulo_modal"></h3>
                    <a href="#" data-dismiss="modal" class="float-right"><i class="fas fa-times-circle" style="font-size: 24px;"></i></a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 product_content">
                            <h4 id="sub_titulo" class="card-subtitle mb-2 mx-2 text-muted"></h4>
                            <div class="col">
                                <p id="descriao_anun" class="h5"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Footer do modal, data de criação e ETC -->
                </div>
            </div>
        </div>
    </div>
    <!--/Detailed product (modal) -->
    <!-- Início cabeçalho -->
    <header>
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="https://bidcompras.com.br/view/home-usuario.php" class="navbar-brand">
                    <img src="img/AF_bid_compras_logo.png" height="75">
                </a>

                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">


                    <!-- Itens da navbar topo -->
                    <ul class="navbar-nav mx-3 d-flex align-items-center">
                        <li class="nav-item d-flex align-items-center">
                            <i class="material-icons pr-1">home</i><a href="home-usuario.php" class="d-inline text-dark nav-link pl-0">Início</a>
                        </li>
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
                                <i class="material-icons d-inline">person </i>
                                <div class="d-inline"><?php echo $_SESSION['nm_usuario']; ?></div>
                            </a>
                            <!-- Menu dropdown (conteúdo) -->
                            <div class="profilepic-item dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Itens contidos no dropdown menu -->
                                <!-- Nome Perfil <a class="dropdown-item" href="#"></a> -->
                                <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                                <a class="dropdown-item" onclick="signOut();">Sair</a>
                            </div>
                            <!--/Menu dropdown (conteúdo) -->
                        </li>
                        <!--/Profile Picture -->
                        <!-- Chat Icon -->
                        <div class="dropdown">
                            <a class="btn btn-transparent d-flex align-items-center" href="chat.php?codUsuario" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-comment text-dark pl-1" style="font-size:2rem"></i>
                                <div class="d-inline text-dark ml-1">Chat</div>
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
        <!--/Navbar topo -->
    </header>
    <!--/fim Cabeçalho-->

    <div class="wrapper_perfil">
        <div class="main_body">
            <div class="sidebar_menu">
                <div class="inner__sidebar_menu">
                    <ul>
                        <li>
                            <a href="#menu=compras" id="comprar"  onclick="retornarMinhasCompras();">
                                <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                                <span class="list">Minhas Compras</span>
                            </a>
                        </li>
                        <li>
                            <a href="#menu=vendas" id="vender" onclick="retornarMinhasVendas();">
                                <span class="icon"><i class="fas fa-cash-register"></i></span>
                                <span class="list">Minhas Vendas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#menu=favoritos" id="fav" onclick="retornaFavoritos();">
                                <span class="icon"><i class="fas fa-heart"></i></span>
                                <span class="list">Favoritos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="categ" onclick="ListCategoria()">
                                <span class="icon"><i class="fas fa-list"></i></span>
                                <span class="list">Categorias</span>
                            </a>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <div class="inner_hamburger">
                            <span class="arrow">
                                <i class="fas fa-arrow-left"></i>
                                <i class="fas fa-arrow-right" style="display: none;"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="item_wrap" id="minhas_compras" onclick="retornarMinhasCompras();">
                    <h3>Minhas Compras</h3>
                    <div id="minha_compra"></div>
                </div>

                <div class="item_wrap" id="vendas" onclick="">
                    <h3>Minhas Vendas</h3>
                </div>

                <div class="item_wrap" id="favoritos">
                    <h3>Favoritos</h3>
                    <div id="favorito"></div>
                </div>

                <div class="item_wrap" id="categorias">

                </div>
            </div>
        </div>
        <!--<div class="testeCaixa"><p>OI</p></div>-->
    </div>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../controller/js/gerar-card-anuncio.js"></script>
    <script src="../controller/js/minhas-categorias.js"></script>
    <script src="../controller/js/meus-favoritos.js"></script>
    <script src="js/meus-favoritos.js"></script>
    <script src="../controller/js/minha-compras.js"></script>
    <script src="../controller/js/caminho-para-minha-vendas.js"></script>
    <script src="../controller/js/retorna-descricao.js"></script>
    <script src="../controller/js/Google/logout.js"></script>
</body>

</html>