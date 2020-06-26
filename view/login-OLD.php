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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    <div class="form">

        <!--Botoes-->
        <div class="row">
            <div class="login">Entrar</div>
            <div class="signup">Cadastrar</div>
        </div>

        <!--Inicio formulario de login-->
        <div class="row">
            <div class="login-form">

                <input class="input input-form" id="emailLogin" type="email" name="email" placeholder="Seu email">
                <span id="email_login_erro" class="erro"></span>

                <input class="input input-form" id="senhaLogin" type="password" name="senha" placeholder="Sua senha">
                <span id="senha_login_erro" class="erro"></span>

                <a href="esqueceu-senha.html">Esqueceu sua senha?</a>

                <button class="btn-primary" id="botaoLogin">Entrar</button>

                <div class="log-btns">
                    <div class="fb-login-button" data-size="large" scope="public_profile,email" onlogin="checkLoginState();" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
							<span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin-top: 20px;"></span>
						</div>
                    <!--<a href="" class="g-signin2 btn-google" data-onsuccess="onSignIn" data-theme="dark" data-width="120px" data-height="60"></a>-->
                </div>

            </div>
        </div>
        <!--Fim formulario de login-->

        <!--Inicio formulario de cadastro-->
        <div class="row">
            <div class="signup-form">

                <input class="input input-form" id="nome" type="text" name="nome" placeholder="Seu nome">
                <span id="nome_cadastrar_erro" class="erro"></span>

                <input class="input input-form" type="email" id="email" type="email" name="email" placeholder="Seu email" required>
                <span id="email_cadastrar_erro" class="erro"></span>

                <input class="input input-form senha" id="senha" type="password" name="senha" placeholder="Sua senha">
                <span id="senha_cadastrar_erro" class="erro"></span>

                <input class="input input-form senha" id="repetirSenha" type="password" name="repetirSenha" placeholder="Repita a senha">
                <span id="confirmaSenha_cadastrar_erro" class="erro"></span>

                <label class="check" for="termos">
                    <input class="checkbox" type="checkbox" id="termos">
                    Concordo com os <a href="termos.html"><strong>termos e condições</strong></a>
                </label>
                <button class="btn-primary" id="botaoEnviar">Criar conta</button>
            </div>
        </div>
        <!--Fim formulario de cadastro-->

    </div>
    <!--Fim container de login-->
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-sm-3">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="erro.html" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li class="list-inline-item"><a href="erro.html" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="erro.html" target="_blank"><i
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
                    <p class="h6">&copy Todos os direitos reservados. <u><a class="ml-1" href="fale-conosco.html"
                                target="_blank">Fale conosco</a></u> <u><a href="termos.html" class="ml-1"
                                target="_blank">Termos e
                                condições</a></u> </u> <u><a href="politica-privacidade.html" class="ml-1"
                                target="_blank">Política de Privacidade</a></u> <u><a href="erro.html"
                                class="ml-1" target="_blank">FAQ</a></u>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>