$(document).ready(function () {
    var nombres = "";
    var apellidos = "";
    var fechaNacimiento = "";
    var genero = "";
    var nivelEstudios = "";
    var estadoCivil = "";
    var hijos = "";
    var direccion = "";
    var telefono = "";
    var detalles = "";
    var foto1 = "";
    var user = "";
    var pass = "";
    /* blur */
    $("#nombres").on('blur', function () {
        nombres = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#apellidos").on("blur", function () {
        apellidos = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#fechaNacimiento").on("blur", function () {
        fechaNacimiento = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#genero").on("blur", function () {
        genero = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#nivelEstudios").on("blur", function () {
        nivelEstudios = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#estadoCivil").on("blur", function () {
        estadoCivil = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#hijos").on("blur", function () {
        hijos = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#direccion").on('blur',function (){
        direccion = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#telefono").on("blur", function () {
        telefono = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#detalles").on("blur", function () {
        detalles = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#foto1").on("blur", function () {
        foto1 = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#user").on("blur", function () {
        user = $(this).val();$(this).removeClass("colorGreen");
    });
    $("#pass").on("blur", function () {
        pass = $(this).val();$(this).removeClass("colorGreen");
    });
    /* submit */
    $(".campoBusqueda").on('submit', function (e) {
        if (nombres===""||apellidos===""||fechaNacimiento===""||genero===""||nivelEstudios===""||estadoCivil===""||hijos===""||direccion===""||telefono===""||detalles===""||foto1===""||user===""||pass===""){
            alert("Hay un campo vacío");
            e.preventDefault();//anula el evento y evita que se ejecute
            e.stopPropagation();//evita que el evento se propage
        }else{
            alert("Ingresando información...");
        }
    });
    /* focus */
    $("#nombres").on('focus', function () {
        $(this).addClass("colorGreen");
    });
    $("#apellidos").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#fechaNacimiento").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#genero").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#nivelEstudios").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#estadoCivil").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#hijos").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#direccion").on('focus',function (){
        $(this).addClass("colorGreen");
    });
    $("#telefono").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#detalles").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#user").on("focus", function () {
        $(this).addClass("colorGreen");
    });
    $("#pass").on("focus", function () {
        $(this).addClass("colorGreen");
    });
});
