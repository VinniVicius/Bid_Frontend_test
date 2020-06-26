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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Estilo site(customizado) -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />

    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">

    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <!--AutoComplete-->
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

    <!-- mini-lightbox -->
    <script src="js/mini-lightbox.min.js"></script>
    <script>

        MiniLightbox.customClose = function () {
            var self = this;
            self.img.classList.add("animated", "fadeOutDown");
            setTimeout(function () {
                self.box.classList.add("animated", "fadeOut");
                setTimeout(function () {
                    self.box.classList.remove("animated", "fadeOut");
                    self.img.classList.remove("animated", "fadeOutDown");
                    self.box.style.display = "none";
                }, 500);
            }, 500);
            return false;
        };

        MiniLightbox.customOpen = function () {
            this.box.classList.add("animated", "fadeIn");
            this.img.classList.add("animated", "fadeInUp");
        };
        new MiniLightbox({
            selector: ".wrapper img"
            // the common container where the images are appended
            , delegation: "html"
        });
    </script>
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">

    <title>Início - BIDCompras</title>
</head>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=697864760947570&autoLogAppEvents=1"></script>
<script src="../controller/js/Facebook/configuracaoSDK.js"></script>
<body>
    <!-- Modal -->
    <div class="modal fade" id="modalProposta" tabindex="-1" role="dialog" aria-labelledby="modalPropostaLabel"
        aria-hidden="true">
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
                        <a class="mr-auto" href="#product_view" data-toggle="modal" data-target="#product_view"
                            data-dismiss="modal"><i class="fa fa-info-circle"></i> Detalhes do anúncio</a>
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
                    <a href="#" data-dismiss="modal" class="float-right"><i class="fas fa-times-circle"
                            style="font-size: 24px;"></i></a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-10 product_content">
                            <h4 id="sub_titulo" class="card-subtitle mb-2 mx-2 text-muted"></h4>
                            <div class="col mx-auto">
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
        <nav class="navbar navbar-expand-md navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="home-usuario.php" class="navbar-brand">
                    <img src="img/AF_bid_compras_logo.png" height="75">
                </a>

                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse"
                    data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">
                    <!-- Search form -->
                    <div class="mx-auto w-50 pesquisar-bar">
                        <div class="input-group align-items-center">
                            <a href="home-usuario.php"><i class="material-icons pt-2 mr-2">home</i></a>
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
                                <a class="dropdown-item" onclick="signOut();">Sair</a>
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
    <div class="container-fluid maxWidth">
        <!-- Wrapper | (Conteúdo) -->
        <div class="wrapper col-lg-12 px-5">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sticky">
                    <div class="text-dark sidebar-header">
                        <h3>Categorias</h3>
                        <!-- Sidebar Header-->
                    </div>
                    <ul class="list-unstyled ul_cat">
                        <!--<p>Sub header</p>-->
                        <p>
                            <a class="btn btn-transparent d-flex align-items-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="material-icons mr-3">
                                    filter_list
                                </span>Filtro
                            </a>
                        </p>
                        <li>
                            <div class="collapse border-top border-warning" id="collapseExample">
                                    <div class="col-lg m-0 p-0">
                                        <div class="form d-inline-block w-100"></form>
                                            <div class="form-group m-2">
                                                <label for="DDD" class="d-block">Cidade:</label>
                                                <div class="row align-items-center">
                                                    <input type="text" id="inputDDD" list="regiao"
                                                        class="form-control d-inline w-75 ml-3 mr-2" placeholder="Ex: São Paulo"
                                                        aria-describedby="passwordHelpInline">
                                                    <button class="btn btn-light" id="botaoDDD">
                                                        <i class="fa fa-arrow-circle-right fa-lg"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                        </li>
                        <!-- Categoria elemento -->
                        <!-- Título categoria label -->
                        <div style="width: 100%;">
                            <ul class="list-group" id="macro">

                            </ul>
                        </div>

                        <!--/Categoria elemento -->
                    </ul>
                </div>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <button type="button" onclick="menu__btn()" id="sidebarCollapse" class="btn btn-transparent navbar-btn">
                    <span id="btn__menu" class="material-icons navbar-btn mr-2">menu</span> Categorias
                </button>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!--<div class="col-lg" style="max-width: 614.6px;">
                            <div  class="d-none d-sm-block caixa mb-3">
                                <img class="img-fluid" src="view/img/AF_bid_compras_banner_a criativa.png" alt="Anúncio de A Criativa">
                            </div>
                        </div>-->
                        <!--<div class="col-lg col__anun pr-0 d-flex justify-content-center" style="max-width: 263.4px;">-->
                            <!-- IMG Carousel -->
                            <!--<div id="carousel-anun" class="carousel slide mb-3 carousel-anuncio" data-ride="carousel"
                                data-interval="2000">-->
                                <!-- Dot/Bolinhas navegação -->
                                <!--<ol style="cursor: pointer;" class="carousel-indicators carousel-product">
                                    <li data-target="#carousel-anun" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-anun" data-slide-to="1">
                                    </li>
                                    <li data-target="#carousel-anun" data-slide-to="2">
                                    </li>
                                </ol>-->
                                <!--/Dot/Bolinhas navegação -->
                                <!-- Imagens do Slider/Carousel -->
                                <!--<div class="carousel-inner carousel-anuncio">-->
                                    <!--<div class="carousel-item active"
                                    style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                                </div>-->
                                    <!--<div class="carousel-item active">
                                        <img class="carousel-anuncio" src="view/img/AF_bid_compras_carrossel_01.png"
                                            alt="Imagem de anúncio/propaganda">--> <!-- Link para a imagem -->
                                   <!-- </div>
                                    <div class="carousel-item">
                                        <img class="carousel-anuncio" src="view/img/AF_bid_compras_carrossel_02.png"
                                            alt="Imagem de anúncio/propaganda">--> <!-- Link para a imagem -->
                                    <!--</div>
                                    <div class="carousel-item">
                                        <img class="carousel-anuncio" src="view/img/AF_bid_compras_carrossel_03.png"
                                            alt="Imagem de anúncio/propaganda">--> <!-- Link para a imagem -->
                                    <!--</div>
                                </div>-->
                                <!--/Imagens do Slider/Carousel -->
                                <!-- Botão/Setas -->
                                <!--<a class="carousel-control-prev" href="#carousel-anun" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-anun" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>-->
                                <!--/Botão/Setas -->
                            <!--</div>-->
                            <!--/IMG Carousel -->
                        <!--</div>-->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- container-fluid col-md-10 -->
                    <div class="container-fluid col-lg m-0 p-0">
                        <!-- Card structure -->
                        <!-- anuncios -->
                        <div id="anuncios" class="container-fluid">

                        </div>
                        <!--/anuncios -->
                        <!-- Botões de navagação -->
                        <div class="col-lg-auto mb-3">
                            <div class="d-flex justify-content-center mx-auto">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-warning" id="anterior">&lsaquo; Anterior</button>
                                    <div class="btn btn-outline-warning"><span id="numeracao"></span></div>
                                    <button class="btn btn-warning" id="proximo">Próximo &rsaquo;</button>
                                </div>
                            </div>
                        </div>
                        <!--/Botões de navagação -->
                    </div>
                    <!--/container-fluid col-md-10 -->
                    <!-- col-lg-2 -->
                    <div class="col-lg-3 caixa-ad">
                        <!--<div class="item pirate d-none d-sm-block">
                            <img src="img/AF_bid_compras_banner_trio comex.png"  alt="Anúncio de Trio Comex">
                        </div>-->
                    </div>
                    <!--/col-lg-2 -->
                </div>
                <!--/row -->
            </div>
        </div>
        <!--/Wrapper | (Conteúdo) -->
    </div>
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
    <script src="../controller/js/gerar-card-anuncio.js"></script>
    <script src="../controller/js/Anuncio/gerar-anuncio.js"></script>
    <script src="../controller/js/Anuncio/utils/add-evento-pagincao.js"></script>
    <script src="../controller/js/Anuncio/utils/verifica-paginacao.js"></script>
    <script src="../controller/js/retornar-anuncios.js"></script>
    <script src="../controller/js/cadastro-categoria-usuario.js"></script>
    <script src="js/meus-favoritos.js"></script>
    <script src="../controller/js/retorna-macro-home.js"></script>
    <script src="../controller/js/pesquisar.js"></script>
    <script src="../controller/js/busca-ddd.js"></script>
    <script src="../controller/js/Google/logout.js"></script>

    
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- JavaScript (Opcional) -->
    <script src="js/lightslider.js"></script>
    <script src="js/collapse-bar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

</body>
</html>