<?php

require_once("../controller/session-usuario.php");
require_once("../model/conexao/conexao.php");

$_SESSION['id_para'] = isset($_GET['codUsuario']) ? $_GET['codUsuario'] : null;

$id_produto = isset($_GET['codProduto']) ? $_GET['codProduto'] : 0;

$_SESSION['codProduto'] = $id_produto;

$nmUsuario = isset($_GET['nmUsuario']) ? $_GET['nmUsuario'] : null;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Requery Metatag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Fonts-->
    <script src="https://kit.fontawesome.com/cb37385e8b.js" crossorigin="anonymous"></script>
    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- CSS customizado -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <script type="text/javascript" src="vendor/jquery3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../controller/js/js.js"></script>
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
            selector: ".col.text__div__size img"
                // the common container where the images are appended
                ,
            delegation: "html"
        });
    </script>

    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">

    <title>Chat - BIDCompras</title>
</head>

<body>

    <header style="max-height:25%;">
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="https://bidcompras.com.br/view/home-usuario.php" class="navbar-brand">
                    <img class="logo-img" src="img/AF_bid_compras_logo.png" height="75">
                </a>
                <button class="bg-warning navbar-toggler custom-toggler mr-3" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="nav-principal">
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
                        <p></p>
                        </li>
                    </ul>
                    <!--/Itens da navbar topo -->
                </div>
            </div>
        </nav>

    </header>
    <!-- Wrapper | (Conteúdo) -->
    <div class="wrapper col-lg-12 m-0">
        <!-- container bg-light py-2 -->
        <div class="container bg-light py-2 mr-0" style="min-height: 75vh;">
            <!-- row -->
            <div class="row p-3">
                <!-- Lista -->
                <div class="col-lg mx-auto p-0" style="border: solid 1px #e4e4e4;">
                    <!-- Barra lateral top -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contatos</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" id="msg-show" data-toggle="collapse" onclick="expand__btn()" href="#msg_container" role="tab" aria-controls="contact" aria-selected="false"><i id="expand__icon" style="font-size: 18px;" class="material-icons d-flex align-items-center">
                                    expand_more
                                </i></a>
                        </li>
                    </ul>
                    <!--/Barra lateral top -->
                    <!-- Barra lateral esquerda -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="nav flex-column nav-pills" style="min-width: 100%;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="list-group user__list" id="list-tab" role="tablist">
                                    <!-- Pega informações do cliente -->
                                    <?php

                                    $sql = 'SELECT DISTINCT cd_usuario, nm_usuario, nm_anuncio, cd_anuncio
                                    FROM tb_usuario, tb_chat, tb_anuncio 
                                    WHERE cd_anuncio = id_produto
                                    AND cd_usuario = para_id_usuario
                                    AND cd_usuario 
                                    IN (
                                        SELECT DISTINCT para_id_usuario 
                                        FROM tb_chat 
                                        WHERE de_id_usuario = ' . $_SESSION['cd_usuario'] . '  
                                        ) 
                                    AND cd_usuario !=' . $_SESSION['cd_usuario'];

                                    $res = mysqli_query($conexao, $sql);
                                    $total = mysqli_num_rows($res);

                                    if ($total > 0) {
                                        while ($cliente = mysqli_fetch_array($res)) {

                                    ?>

                                            <div class="list-group">
                                                <a class="list-group-item py-4 list-group-item-action" href="?view=chat&codUsuario=<?= $cliente['cd_usuario'] ?>&codProduto=<?= $cliente['cd_anuncio'] ?>&nmUsuario=<?= $cliente['nm_usuario'] ?>">
                                                    <h6 class="text-truncate contact__text"><?= $cliente['nm_usuario'] ?></h6>
                                                </a>
                                            </div>

                                            <?php
                                        }
                                    }

                                    $sql1 = 'SELECT DISTINCT cd_usuario, nm_usuario, nm_anuncio, cd_anuncio 
                                    FROM tb_usuario, tb_anuncio, tb_chat 
                                    WHERE cd_anuncio = id_produto
                                    AND cd_usuario = de_id_usuario
                                    AND cd_usuario 
                                    IN (
                                        SELECT DISTINCT de_id_usuario 
                                        FROM tb_chat 
                                        WHERE para_id_usuario =' . $_SESSION['cd_usuario'] . '
                                        ) 
                                    AND cd_usuario 
                                    NOT IN (
                                            SELECT DISTINCT cd_usuario 
                                            FROM tb_usuario, tb_chat 
                                            WHERE cd_usuario 
                                            IN (
                                                SELECT DISTINCT para_id_usuario 
                                                FROM tb_chat 
                                                WHERE de_id_usuario =' . $_SESSION['cd_usuario'] . '
                                                ) 
                                            AND cd_usuario !=' . $_SESSION['cd_usuario'] . ' 
                                            )
                                    AND cd_usuario !=' . $_SESSION['cd_usuario'];

                                    $res1 = mysqli_query($conexao, $sql1);
                                    $total1 = mysqli_num_rows($res1);

                                    if ($total1 > 0) {
                                        while ($cliente1 = mysqli_fetch_array($res1)) {
                                            if ($cliente1['cd_usuario'] != $cliente['cd_usuario'] && $cliente1['nm_usuario'] != $cliente['nm_usuario']) {
                                            ?>

                                                <div class="list-group">
                                                    <a class="list-group-item py-4 list-group-item-action" href="?view=chat&codUsuario=<?= $cliente1['cd_usuario'] ?>&codProduto=<?= $cliente1['cd_anuncio'] ?>&nmUsuario=<?= $cliente1['nm_usuario'] ?>">
                                                        <h6 class="text-truncate contact__text"><?= $cliente1['nm_usuario'] ?></h6>
                                                    </a>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Barra lateral esquerda -->
                </div>
                <!--/Lista -->
                <!-- Mensagens -->
                <div id="msg_container" class="col-lg-9 m-0 p-0 collapse show" style="border: solid 1px #e4e4e4;">
                    <div id="chat-scroll" class="msg_style_container bg-white" style="overflow: auto;">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Username -->
                                <ul class="nav py-2 align-items-center bg-bidpattern sticky-top" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?= $nmUsuario ?></a>
                                    </li>
                                </ul>
                                <!--/Username -->
                                <div id="msg" class="row m-2">
                                    <div id="verifica" class="col-lg">
                                        <!-- aqui vai aparecer as mensagem dos usuarios -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Input Message -->
                    <div class="col-lg sent__msg__input">

                        <div class="input-group my-3">
                            <div class="input-group-append">
                                <label for="fileUpload" style="border: 1px solid #ced4da;" class="btn btn-light d-flex m-0"><i class="material-icons align-self-center">attachment</i></label>
                            </div>
                            <input type="file" accept="image/png, image/jpeg" name="fileUpload" id="fileUpload" hidden>
                            <input type="text" name="hasFile" id="hasFile" hidden>

                            <input class="form-control" style="padding-top: 25px; padding-bottom: 25px;" type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem">
                            <div class="input-group-append">
                                <button id="btnEnviarMensagem" style="border: 1px solid #ced4da;" class="btn btn-light" type="submit" name="env" value="envMsg"><i class="material-icons d-flex align-items-center">send</i></button>
                                <!-- <input type="hidden" name="env" value="envMsg"> -->
                            </div>
                        </div>

                    </div>
                    <!--/Input Message -->
                </div>
            </div>
            <div class="row justify-content-center invisible">
                <div class="col-lg" style="max-width: 614.6px;">
                    <div  class="d-none d-sm-block caixa mb-3">
                        <a href="#"><img class="img-fluid" src="img/AF_bid_compras_banner_a criativa.png" alt="Anúncio de A Criativa"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 caixa-ad align-items-center invisible">
            <div class="item d-none d-sm-block">
                <img src="img/AF_bid_compras_banner_trio comex.png"  alt="Anúncio de Trio Comex" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;">
            </div>
        </div>
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
    <script src="../controller/js/verifica-url-chat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../controller/js/envio-mensagem-chat.js"></script>
    <script>
        function enviarAnexo() {
            let ajax = new XMLHttpRequest();
            let caminhoImagem = [];
            ajax.onreadystatechange = () => {

                if (ajax.readyState == 4 && ajax.status == 200) {

                    caminhoImagem.push(ajax.responseText);
                    elMensagem.value = caminhoImagem;

                    enviarMensagem();

                    $('#mensagem').removeAttr("readonly");
                }

            }

            ajax.open('POST', '../controller/enviar-anexo-chat.php', true);

            ajax.onerror = event => {

                console.log(event);

            }

            let formDataImagem = new FormData();

            formDataImagem.append('anexo', $('#fileUpload')[0].files[0]);

            ajax.send(formDataImagem);
        }

        $("#fileUpload").change(function() {
            if ($('#fileUpload')[0].files[0] !== undefined) {
                var nome_arquivo = $('#fileUpload')[0].files[0].name;
                $('#mensagem').val(nome_arquivo);
                $('#mensagem').prop("readonly", "readonly");
                $('#hasFile').val(true);
                enviarAnexo();
            }
        });
    </script>
    <script src="js/collapse-bar.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script src="../controller/js/Google/logout.js"></script>
</body>

</html>