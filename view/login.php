<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--Requery Metatag-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icone -->
    <link rel="icon" href="img/bid.ico">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- CSS customizado -->
    <link rel="stylesheet" type="text/css" href="css/stylePRO.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!--JS-->
    <!-- <script type="text/javascript" src="vendor/jquery3.4.1/jquery.min.js"></script> -->
    <script src="vendor/jquery3.4.1/jquery.min.js" crossorigin="anonymous"></script>

    <script src="js/login.js"></script>

    <!--API GOOGLE-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="1092937681697-v9ep5ncl1est4v2hfkgsg53l22s150rs.apps.googleusercontent.com">
    <title>Login - BIDCompras</title>
</head>

<body class="content">

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=697864760947570&autoLogAppEvents=1"></script>

    <!--Inicio container de login-->
    <header>
        <!-- Navbar topo -->
        <nav class="navbar navbar-expand-md navbar-dark bg-white m-0">
            <div class="container-fluid maxWidth">
                <a href="../index.html" class="navbar-brand">
                    <img src="img/AF_bid_compras_logo.png" height="75">
                </a>

                <!-- Itens da navbar topo -->
                <ul class="navbar-nav mx-3 d-flex align-items-center">
                    <li class="nav-item mx-1">
                        <a href="../index.html" class="btn btn-outline-warning align-top-items">Voltar</a>
                    </li>
                </ul>
                <!--/Itens da navbar topo -->
            </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center border">
            <div class="col-lg-8" style="margin-top: 10vh; margin-bottom: 10vh;">
            <ul class="nav nav-tabs nav-fill nav__cadastro" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cadastrar</a>
                </li>
            </ul>
        <div class="tab-content border border-top-0" id="myTabContent">
            <div class="p-4 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Input Group -->
                <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <!--<div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            </div>-->
                            <input id="emailLogin" type="email" name="email" class="form-control" placeholder="Email">
                            <span id="email_login_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <input id="senhaLogin" type="password" name="senha" class="form-control" placeholder="Senha">
                            <span id="senha_login_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <a href="esqueceu-senha.html">Esqueceu a senha?</a>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <button id="botaoLogin" type="button" class="w-75 btn btn-warning btn-lg btn-block text-white">Entrar</button>
                        </div>
                        <!--/Input Group -->
                        <!-- Login API's -->
                        <div class="btn-toolbar justify-content-center align-items-center" role="toolbar">
                            <div class="btn-group mb-3 mr-3" role="group" aria-label="First group">
                                <div class="fb-login-button" data-size="medium" scope="public_profile,email" onlogin="checkLoginState();" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
                            </div>
                            <div class="btn-group mb-3 mr-3" role="group" aria-label="First group">
                                <span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></span>
                                <!--<a href="" class="g-signin2 btn-google" data-onsuccess="onSignIn" data-theme="dark" data-width="120px" data-height="60"></a>-->
                            </div>
                        </div>
                        <!--/Login API's -->
                </div>
                <!--/Input Group -->
            <div class="p-4 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome">
                            <span id="email_login_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <input id="emailLogin" type="email" name="email" class="form-control" placeholder="Email">
                            <span id="email_login_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <input id="senhaLogin" type="password" name="senha" class="form-control" placeholder="Senha">
                            <span id="senha_login_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <input id="repetirSenha" type="password" name="repetirSenha" class="form-control" placeholder="Repita a senha">
                            <span id="confirmaSenha_cadastrar_erro" class="erro"></span>
                        </div>
                        <!--/Input Group -->

                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <label class="check" for="termos">
                                <input class="checkbox" type="checkbox" id="termos">
                                Concordo com os <a href="termos.html"><strong>termos e condições</strong></a>
                            </label>
                        </div>
                        <!--/Input Group -->
                        <!-- Input Group -->
                        <div class="input-group input-group__grid__cad input-group-lg mb-3">
                            <button id="botaoEnviar" type="button" class="w-75 btn btn-warning btn-lg btn-block text-white">Criar conta</button>
                        </div>
                        <!--/Input Group -->
            </div>
            </div>
            </div>
        </div>

        
    </div>
    <!--Fim container de login-->
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

    <div id="box">
        <h1>Cadastrado com sucesso !</h1>
        <a class="fecha">Fechar</a>
    </div>

    
    <script src="../controller/js/Facebook/configuracaoSDK.js"></script>
    
    <script src="../controller/js/Facebook/cadastrarUsuario.js"></script>

    <script src="../controller/js/cadastro-usuario.js">
    </script>
    <script src="../controller/js/verificar-login.js">
    </script>
    <script src="../controller/js/api-google-login.js">
    </script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>