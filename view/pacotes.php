<?php

    session_start();
    $cdSessionUsuario = $_SESSION['cd_usuario'];
?>


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

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- CSS customizado -->
    <link type="text/css" rel="stylesheet" href="css/stylePRO.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <title>Pacotes - BIDCompras</title>
</head>

<body class="content">
    <!--<div id="teste" class="row">-->
    <div class="container">
        <div class="pricing-table">
            <h1>Conheça nossos planos</h1>
            <div id="teste" class="row">
                <!--<div class="col">
                    <div class="table">
                        <h2>Basico</h2>
                        <div class="price">
                            R$ 10,00
                            <span>Por mês</span>
                        </div>
                        <ul>
                            <li><strong>1</strong> Anúncio em destaque</li>
                        </ul>
                        <br>
                        <br>
                        <br>
                        <a href="#">Compre agora</a>

                    </div>
                </div>
                <div class="col">
                    <div class="table">
                        <div class="pop">Popular</div>
                        <h2>Regular</h2>
                        <div class="price">
                            R$ 10,00
                            <span>Por mês</span>
                        </div>
                        <ul>
                            <li><strong>3</strong> Anúncios em destaque</li>

                        </ul>
                        <br>
                        <br>
                        <a href="#">Compre agora</a>

                    </div>
                </div>
                <div class="col">
                    <div class="table">
                        <h2>Pro</h2>
                        <div class="price">
                            R$ 10,00
                            <span>Por mês</span>
                        </div>
                        <ul>
                            <li><strong>Anúncios ilimitados</strong></li>
                            <li><strong>3</strong> Anúncios em destaque</li>
                        </ul>

                        <a href="#">Compre agora</a>

                    </div>
                </div>-->

            </div>
        </div>
    </div>

    <script src="../controller/js/retorna-pacotes.js"></script>
    <script src="../controller/js/envia-api-pagamento.js"></script>
    <script>
        $(document).ready(function(){
            reqAjax(<?= $cdSessionUsuario?>);
        });
    </script>
</body>

</html>