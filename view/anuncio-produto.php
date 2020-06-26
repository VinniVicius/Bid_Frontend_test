<?php

require('../model/conexao/conexao.php');

$url = $_SERVER["REQUEST_URI"];
$codigo = explode('-', $url);

$sqlMetaTag = "SELECT nm_anuncio, ds_anuncio, im_anuncio, nm_tag_anuncio FROM tb_anuncio WHERE cd_anuncio = $codigo[2]";

$metaTags = mysqli_query($conexao, $sqlMetaTag);

$meta = mysqli_fetch_assoc($metaTags);

$imagens = explode(',', $meta['im_anuncio']);

if($imagens[0]){
    
    $imagem = str_replace('../', '' ,$imagens[0]);

}

$titulo = $meta['nm_anuncio'];
$descricao = $meta['ds_anuncio'];
$tags = $meta['nm_tag_anuncio'];

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo site(customizado) -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />

    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <!--AutoComplete-->
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">

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
            selector: ".carousel-item img"
            // the common container where the images are appended
            , delegation: "html"
        });
    </script>

    <!-- Tem de ser alterado dinamicamente -->
    <meta property="og:title" content="<?=$titulo?>">
    <meta property="og:description" content="<?=$descricao?>">
    <meta property="og:image" content="https://bidcompras.com.br/<?= $imagem ?? null ?>">
    <meta property="og:image:width" content="200"> 
    <meta property="og:image:height" content="200">
    <meta property="og:url" content="https://bidcompras.com.br/view/anuncio-produto-<?=$codigo[2]?>">
    <meta property="keywords" content="<?=$tags?>">
    

</head>

<body onload="get__height()">
    <!-- Início cabeçalho -->
    <header id="menu">
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-md navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="../index.html" class="navbar-brand">
                    <img src="img/AF_bid_compras_logo.png" height="75">
                </a>

                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse"
                    data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">
                    <!-- Itens da navbar topo -->
                    <ul class="navbar-nav mx-3 d-flex align-items-baseline">
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-outline-warning align-top-items">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark btn btn-warning" onclick="redirecionarParaLoginBtnQueroComprar();"
                                style="width: 10.5rem; height: 3.5rem; line-height: 2.5rem;">Quero
                                Comprar</a>
                        </li>
                    </ul>
                    <!--/Itens da navbar topo -->
                </div>
            </div>
        </nav>
    </header>
    <!--/fim Cabeçalho-->

    <!-- Wrapper | (Conteúdo) -->
    <div class="wrapper col-md-12 p-0 m-0" style="min-height: 40rem;">
        <!-- container bg-light py-2 -->
        <div class="container bg-light py-2 mr-0">
            <!-- row -->
            <div class="row">
                <!-- col-lg-6 -->
                <div class="col-lg-6 my-5" id="slider">
                    <h2 class="dados" id="titulo"></h2>
                    <div class="w-100"></div>
                    <h5 class="text-muted dados" id ="subTitulo"></h5>
                    <div id="myCarousel" class="carousel slide shadow carousel__thumbnail d-flex flex-row">
                        <div class="list__size">
                            <!-- Thumbails (Elemento Dinâmico) -->
                            <ul class="carousel-indicators list-group container__thumb-list carousel__thumbnail" id="listaImagem">
                                
                            </ul>
                            <!--/Thumbails (Elemento Dinâmico) -->
                        </div>
                        <div class="col-lg m-0 p-0 d-flex align-items-center">
                            <!-- Carousel principal -->
                            <div class="carousel-inner no__backcolor dados" id="imagens">
                                
                            </div>
                            <!--/Carousel principal -->
                        </div>
                    </div>
                </div>
                <!--/col-lg-6 -->
                <div class="col descri__anun py-3">
                    <h3>Informações:</h3>
                    <div class="container details__prod">
                        <!-- Informações (Elemento Dinânimco) -->
                        <ul class="list-inline">
                            <li class="list-inline-item text-muted dados" id="nome"><!--Nome: DUBARROSO--></li>
                            <li class="list-inline-item text-muted dados" id="localidade"><!--Localização: 41 - Curitiba/PR--></li>
                            <li class="list-inline-item text-muted dados" id="categoria"><!--Categoria: Ferramentas e Construção/Energia
                                Elétrica/Outros--></li>
                            <li class="list-inline-item text-muted dados" id="preco"><!--R$: --></li>
                            <li class="list-inline-item text-muted dados" id="quantidade"><!--Quantidade: 1--></li>
                            <li class="list-inline-item text-muted dados" id="data"><!--Criado em 13/04/2020--></li>
                        </ul>
                        <!--/Informações (Elemento Dinânimco) -->
                    </div>
                    <div class="w-100"></div>
                    <h3>Descrição:</h3>
                    <div id="details__prod" class="container">
                        <!-- Descrição (Elemento Dinânimco) -->
                        <p class="collapse dados" id="collapse__desc" aria-expanded="false">
                        </p>
                        <!--/Descrição (Elemento Dinânimco) -->
                        <div id="demo" class="d-flex justify-content-end">
                            <a id="btnGroupDrop1" class="btn btn-outline-secondary" href="" data-toggle="dropdown"
                                role="button">
                                <i class="far fa-copy"></i> Copiar link
                            </a>
                            <a
                                class="btn btn-outline-secondary mx-2" id="enviarProposta"><i class="far fa-paper-plane"></i>
                                Enviar Proposta</a>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <div class="input-group input-group-md">
                                    <div class="input-group-prepend">
                                        <button class="input-group-text"
                                            id="link"
                                            value=""><i class="far fa-copy"></i></button>
                                    </div>
                                    <input id="copy" type="text"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row -->
            <div class="row justify-content-center invisible">
                <div class="col-lg" style="max-width: 614.6px;">
                    <div  class="d-none d-sm-block caixa mb-3">
                        <a href="#"><img class="img-fluid" src="img/AF_bid_compras_banner_a criativa.png" alt="Anúncio de A Criativa"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/container bg-light py-2 -->
        <div class="col-lg-2 caixa-ad align-items-center invisible">
            <div class="item d-none d-sm-block">
                <img src="img/AF_bid_compras_banner_trio comex.png"  alt="Anúncio de Trio Comex" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
            </div>
        </div>
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
    <script src="view/js/lightslider.js"></script>
    <script src="js/collapse-bar.js"></script>
    
    <script src="../controller/js/verifica-usuario-logado.js"></script>
    <script src="../controller/js/verifica-url-codigo-anuncio.js"></script>
    <script src="../controller/js/usuario-nao-cadastrado.js"></script>
    <script src="../controller/js/controlC.js"></script>
    <script src="../controller/js/Google/logout.js"></script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>