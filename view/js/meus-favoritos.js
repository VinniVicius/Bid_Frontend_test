
        function favoritado(cod) {
            let favoritoCheck = document.getElementById('favorito' + cod);
            let favoritado;

            if (favoritoCheck.checked == true) {
                favoritado = true;
                console.log("Foi marcado");
            } else {
                favoritado = false;
                console.log('Desmarcado');
            }

            obj = {
                //cd_usuario : $_SESSION['cd_usuario'],
                cd_produto: cod,
                acaoFavoritado: favoritado,
                acao : "favoritou"
            };


            $.ajax({
                type: 'POST',
                url: "../model/meus-favoritos.php",
                data: {
                    dadosJS: JSON.stringify(obj)
                },
                async: true,
                success: function(texto) {
                    if(window.location.pathname == "/view/perfil-WIP.php" || window.location.pathname == "/view/perfil-WIP.php#"){
                        retornaFavoritos();
                    }
                }
            });
        }