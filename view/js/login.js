//login/cadastrar
$(document).ready(function () {
    $(".signup-form").hide();
    $(".signup").css("background", "#bdc3c7");



    $(".login").click(function () {
        $(".signup-form").hide();
        $(".login-form").show();
        $(".signup").css("background", "#bdc3c7");
        $(".login").css("background", "#fff");
        $(".login").css("transition", "0.9s");

    });
    $(".signup").click(function () {
        $(".login-form").hide();
        $(".signup-form").show();
        $(".login").css("background", "#bdc3c7");
        $(".signup").css("background", "#fff");
        $(".signup").css("transition", "0.9s");
    });
});
//sidebar perfil
$(document).ready(function () {
    $(".hamburger").click(function () {
        $(".wrapper_perfil").toggleClass("active");
    });
});
//perfil navigation
$(document).ready(function () {
    $("#minhas_compras").hide();
    $("#vendas").hide();
    $("#favoritos").hide();
    $("#categorias").hide();

    $("#comprar").click(function () {
        $("#vendas").hide();
        $("#favoritos").hide();
        $("#categorias").hide();
        $("#minhas_compras").show();
        $("#comprar").addClass("active");
        $("#vender").removeClass("active");
        $("#fav").removeClass("active");
        $("#categ").removeClass("active");
    });
    $("#vender").click(function () {
        $("#minhas_compras").hide();
        $("#favoritos").hide();
        $("#categorias").hide();
        $("#vendas").show();
        $("#vender").addClass("active");
        $("#comprar").removeClass("active");
        $("#fav").removeClass("active");
        $("#categ").removeClass("active");
    });
    $("#fav").click(function () {
        $("#vendas").hide();
        $("#minhas_compras").hide();
        $("#categorias").hide();
        $("#favoritos").show();
        $("#fav").addClass("active");
        $("#comprar").removeClass("active");
        $("#vender").removeClass("active");
        $("#categ").removeClass("active");
    });
    $("#categ").click(function () {
        $("#vendas").hide();
        $("#favoritos").hide();
        $("#minhas_compras").hide();
        $("#categorias").show();
        $("#categ").addClass("active");
        $("#fav").removeClass("active");
        $("#vender").removeClass("active");
        $("#comprar").removeClass("active");
    });
});