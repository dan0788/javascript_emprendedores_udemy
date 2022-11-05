$(document).ready(function () {
    /* click */
    $(".acercade_box").on('click', '.redesSociales', function (e) {
        $(".acercade_box").closest(".acercade_box").find("#box1").toggle(300);
        $("div[value*='Acerca de']").toggleClass("celesteClaro");
    });
    $("#menu_box").on('click', '.redesSociales', function (e) {
        $("#menu_box").closest("#menu_box").find("#box2").toggle(300);
        $("div[value*='Menu']").toggleClass("celesteClaro");
    });
    $("#cuenta_box").on('click', '.redesSociales', function (e) {
        $("#cuenta_box").closest("#cuenta_box").find("#box3").toggle(300);
        $("div[value*='Mi cuenta']").toggleClass("celesteClaro");
    });
    $(document).click(function (event) {
        $target = $(event.target);
        event_target($target,".acercade_box","#box1", "div", "Acerca de");
        event_target($target,"#menu_box","#box2","div","Menu");
        event_target($target,"#cuenta_box","#box3","div","Mi cuenta");
    });
    function event_target($target,$caja,$subcaja,$tipoDeCaja, $valorCaja){
        if (!$target.closest($caja).length &&$($caja).is(":visible")) {
            $($caja).closest($caja).find($subcaja).hide(300);
            $($tipoDeCaja+"[value*='"+$valorCaja+"']").addClass("celeste");
        }
    }
//    $("html").click(function () {
//        $(".acercade_box").closest(".acercade_box").find("#box1").hide(300);
//        $("div[value*='Acerca de']").css('background','#00ead3');
//    });
//    $("html").click(function () {
//        $("#menu_box").closest("#menu_box").find("#box2").hide(300);
//        $("div[value*='Menu']").css('background','#00ead3');
//    });
});