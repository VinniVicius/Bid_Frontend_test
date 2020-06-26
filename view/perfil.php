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
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

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

    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">

    <!-- mini-lightbox -->
    <script src="js/mini-lightbox.min.js"></script>
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
            selector: ".carousel-item img"
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
                <a href="home-usuario.php" class="navbar-brand">
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
    <div class="container-fluid maxWidth">
        <div class="row">
            <!-- Base elemento dinamico -->
            <!-- col-4 -->
            <div class="min-vh-100 border col-4 col-lg-3 p-0">
                <div class="sticky list-group list__group_perfil" id="list-tab" role="tablist">
                    <a data-id="1" class="bg-bid list-group-item list-group-item-action active" id="list-home-list" onclick="retornarMinhasCompras()" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><span class="material-icons">record_voice_over</span>Meus anúncios</a>
                    <a class="bg-bid list-group-item list-group-item-action" id="list-profile-list" onclick="retornarMinhasVendas()" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><span class="material-icons">people</span>Anúncios contatados</a>
                    <a class="bg-bid list-group-item list-group-item-action" id="list-messages-list" onclick="retornaFavoritos();" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><span class="material-icons">favorite</span>Favoritos</a>
                    <a class="bg-bid list-group-item list-group-item-action" id="list-settings-list" onclick="ListCategoria();" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><span class="material-icons">list</span>Categorias</a>
                </div>
            </div>
            <!--/col-4 -->
            <!-- col-8 -->
            <div class="col-8 py-4">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"></div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"></div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"></div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <h3>Lista de Categorias</h3>
                    </div>
                </div>
            </div>
            <!--/col-8 -->
            <!--/Base elemento dinamico -->          
        </div>
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
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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