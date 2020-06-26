<?php

require("../controller/session-usuario.php");

$usuarioPremium = $_SESSION['id_pacote'];

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">
    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Estilo site(customizado) -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" />

    <!--AJAX-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script> -->
    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

    <!--Ajax para o Autocomplete do campo cidades-->
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">

    <!--<link rel="stylesheet" href="css/cadAnuncio.css">-->
    <title>Cadastrar Anúncio - BIDCompras</title>
<style>
    .container img {
    cursor: -webkit-default;
    cursor: default;
}
</style>
</head>

<body>
    <!-- Início cabeçalho -->
    <header>
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="home-usuario.php" class="navbar-brand">
                    <img src="img/AF_bid_compras_logo.png" height="75">
                </a>
                <!--/Search form -->

                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">

                    <!-- Itens da navbar topo -->
                    <ul class="navbar-nav mx-3 d-flex align-items-center">
                        <li class="nav-item d-flex align-items-center">
                            <i class="material-icons">attach_money</i><a href="cadastro-anuncio.php" class="d-inline text-dark nav-link pl-0">Quero Comprar</a>
                        </li>

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
    <!-- container bg-light py-2 -->
    <div class="container bg-light py-2" id="formularioEditar">
        <!-- formularioAnuncio -->
        <div>
            <h2 class="text-center">Editar Anúncio</h2>
        </div>
        <!--/formularioAnuncio -->
        <!-- row -->
        <div class="row">
            <!-- col-lg-12 mx-auto -->
            <div class="col-lg-12 mx-auto">
                <!-- form -->
                <div class="form__gridSize">
                    <!-- form-row form__size mx-auto -->
                    <div class="form-row form__size mx-auto">
                        <div class="col-lg pt-2">
                            <input type="text" class="form-control get-value" id="nomeAnuncio" name="nome" placeholder="Nome Anúncio">
                        </div>
                        <div class="col-lg pt-2">
                            <input type="text" class="form-control" id="palavraChave" placeholder="Palavra Chave Ex: Grãos">
                        </div>
                        <div id="tag" name="tag" class="get-value"></div>
                    </div>
                    <!--/form-row form__size mx-auto -->
                    <!-- form-row form__size mx-auto -->
                    <div class="form-row form__size mx-auto">
                        <div class="col-lg-6 pt-2">
                            <input type="text" class="form-control get-value" id="cidades" type="text" name="cidades" placeholder="Qual cidade comprar?">
                        </div>
                        <div class="col-lg-3 pt-2">
                            <input type="text" class="form-control get-value" id="valor" type="text" name="valor" min="1" step="any" placeholder="R$">
                        </div>
                        <div class="col-lg-3 pt-2">
                            <input type="text" class="form-control get-value" id="quantidade" type="number" name="quantidade" min="0" placeholder="Quantidade">
                        </div>
                    </div>
                    <!--/form-row form__size mx-auto -->
                    <!-- form-row form__size mx-auto -->
                    <div class="form-row form__size mx-auto">
                        <div class="col-lg pt-2">
                            <select id="macro" class="form-control">
                                <option value="" selected>Selecione um macro</option>
                            </select>
                            <select id="categoria" class="form-control mt-2">

                            </select>
                            <select id="subCategoria" name="subCategoria" class="form-control mt-2 get-value">

                            </select>
                        </div>
                    </div>
                    <!--/form-row form__size mx-auto -->
                    <!-- form__size mx-auto -->
                    <div class="form__size mx-auto">
                        <!-- col-lg pt-2 -->
                        <div class="col-lg pt-2">
                            <label for="descricao">Descrição do anúncio</label>
                            <textarea class="form-control mb-2 get-value" id="descricao" value="" name="descricao" rows="3"></textarea>
                        </div>
                        <!--/col-lg pt-2 -->
                        <input class="filestyle mb-3 form-control get-value" data-classButton="btn btn-primary" id="imagemAnuncio" type="file" accept="image/png, image/jpeg" name="imagemAnuncio" data-buttonBefore="true" multiple>
                            <div class="col-lg my-4">
                                <div id="img__place" class="d-flex flex-wrap align-items-center">

                                </div>
                             </div>
                        <!-- form-group -->
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <?php if ($usuarioPremium != "") : ?>
                                    <input class="form-check-input get-value" type="checkbox" id="anuncioPremium" name="anuncioPremium">
                                    <label class="form-check-label" for="anuncioPremium">
                                        Anúncio premium
                                    </label>
                                <?php endif; ?>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input get-value" type="checkbox" id="exibirContato" name="exibirNome">
                                <label class="form-check-label" for="exibirContato">
                                    Exibir nome no anúncio
                                </label>
                            </div>
                        </div>
                        <!--/form-group -->
                        <input class="btn btn-warning btn-lg btn-block" id="editarAnuncio" type="submit" name="editarAnuncio" value="Editar Anúncio">
                    </div>
                    <!--/form__size mx-auto -->
                </div>
                <!--/form -->
            </div>
            <!--/col-lg-12 mx-auto-->
        </div>
        <!--/row -->
    </div>
    <!--/container bg-light py-2 -->
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
    <script src="../controller/js/retorna-regioes.js"></script>
    <script src="../controller/js/retorna-categorias.js"></script>
    <script src="../controller/js/editar-anuncio.js"></script>
    <script src="../controller/js/retorna-dados-anuncio-editar.js"></script>
    <script src="../controller/js/Google/logout.js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>