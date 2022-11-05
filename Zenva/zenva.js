//if (window.history.replaceState) { // evita que la página se recargue al hacer click en formulario
//    window.history.replaceState(null, null, window.location.href);
//}
window.addEventListener('load', function () { /* cuando la página se ha cargado por completo*/
    var resultados=document.getElementById("campoResultados");
    document.getElementById('btnBuscar').addEventListener('click', function () {
        let buscar=document.getElementById('txtBuscar').value;/* refuerzo */
        let gender=document.getElementById('opcionesGenero').options[document.getElementById('opcionesGenero').selectedIndex].value;
        let hobby=document.getElementById('opcionesHobby').options[document.getElementById('opcionesHobby').selectedIndex].value;
        
        resultados.innerHTML = "<p>hola mundo</p>";
    });
});
//window.addEventListener('keydown',function(){ /*cuando se mantiene aplastada cualquier tecla
//    console.log("keydown");
//});
//window.addEventListener('keypress',function(){ /*cuando se presionó por completo una tecla
//    console.log("keypress");
//});
//window.addEventListener('keyup',function(){ /*cuando se soltó una tecla
//    console.log("keyup");
//});
//window.addEventListener('mousedown',function(){ /*cuando se ha presionado el mouse
//    console.log("mousedown");
//});
//window.addEventListener('mouseup',function(){ /*cuando se suelta el mouse después de presionarlo
//    console.log("mouseup");
//});
//window.addEventListener('click',function(){ /*click en cualquier parte del DOM
//    console.log("click");
//});
