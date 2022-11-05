<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Zenva Love</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="zenva.js?ts=<?=time()?>" type="text/javascript"></script>
        <script src="zenvajquery.js?ts=<?=time()?>" type="text/javascript"></script>
        <link rel="stylesheet" href="zenva.css?ts=<?=time()?>" type="text/css">
    </head>
    <body>
        <div class="contenedor">
            <header class="cabecera">
                <div class="logo right">
                    <div class="logo2">
                        <p class="blog letraLogo">BLOG</p>
                        <p class="de letraLogo">DE</p>
                        <p class="citas letraLogo">CITAS</p>
                    </div>
                    <div class="logo2" style="color:#511281;font-weight: bold;">El mejor lugar para buscar a ese alguien</div>
                </div>
                <nav class="menu spaceAround"><!-- pendiente menús (opciones:configuracion de cuenta)-->
                    <div class="redesSociales pointer">Inicio</div>
                    
                    <div class="acercade_box">
                        <div class="redesSociales pointer" value="Acerca de">Acerca de</div>
                        <div id="box1">
                            <div class="redesSociales acercade_options pointer" style="margin-top: 5px;">Misión</div>
                            <div class="redesSociales acercade_options pointer" style="margin-top: 60px;">Visión</div>
                            <div class="redesSociales acercade_options pointer" style="margin-top: 115px;">Objetivos</div>
                        </div>
                    </div>
                    <div class="redesSociales pointer">Sobre mí</div>
                    <a href="?url=www.facebook.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/facebook.jpg" alt="Facebook"></a>
                    <a href="?url=www.instagram.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/instagram.jpg" alt="Instagram"></a>
                    <a href="?url=www.whatsapp.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/whatsapp.png" alt="Whatsapp"></a>
                    <a href="?url=www.linkedin.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/linkedin.png" alt="LinkedIn"></a>
                    <a href="?url=twitter.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/twitter.png" alt="Twitter"></a>
                    <a href="?url=www.youtube.com" target="_self"><img class="redesSociales tamanioRedes" src="icons/youtube.png" alt="Youtube"></a>
                </nav>
            </header>
            <script type="text/javascript">
            <?php if (isset($_GET['url'])) {     
            $url="https://".$_GET['url'];?>
         console.log("url obtenida <?php print $url; ?>");
            <?php
            if(strpos($url, "facebook")===true){
                header("$url");
            }
                
            }?></script>
            <!-- include 'https://'.$_GET['url']; -->
            <header class="cabecera">
                <div class="logo">
                </div>
                <div class="menu right">
                    <div id="menu_box">
                        <div class="redesSociales pointer" value="Menu">Menú</div>
                        <div id="box2">
                            <div class="redesSociales menu_options pointer" style="margin-top: 5px;">Conocer personas</div>
                        </div>
                    </div>
                    <div class="redesSociales pointer" value="Unete">Únete</div>
                    <div class="redesSociales pointer" value="Ya soy miembro">Ya soy miembro</div>
                    <div id="cuenta_box">
                        <div class="redesSociales pointer" value="Mi cuenta">Mi cuenta</div>
                        <div id="box3">
                            <div class="redesSociales cuenta_options pointer" style="margin-top: 5px;">Editar perfil</div>
                        </div>
                    </div>
                    <div class="contenedorBuscar">
                        <img class="tamanioRedes" src="icons/buscar.png" alt="Buscar">
                        <input class="inputBuscar redesSociales" placeholder="Ingrese el texto a buscar" id="txtBuscar">
                    </div>
                </div>
            </header>
            <div class="campoBusqueda">
                <p class="titleBlog center">Meeting Time</p>
                <div class="buscarGenero center">
                    <p class="txtGender">Género:</p>
                    <select class="opcionesGenero" id="opcionesGenero">
                        <option value="Hombre">Hombre</option><!-- se puede añadir el atributo data-price q designa un valor numerico a option -->
                        <option value="Mujer">Mujer</option>
                        <option value="Todos" selected="selected">Todos</option>
                    </select>
                </div>
                <div class="buscarGenero center">
                    <p class="txtGender">Hobbies:</p>
                    <select class="opcionesGenero" id="opcionesHobby">
                        <option value="Mascotas">Mascotas</option>
                        <option value="Música">Música</option>
                        <option value="Juegos virtuales online">Juegos virtuales online</option>
                        <option value="Juegos de videoconsola (PS, XBOX, Nintendo, etc)">Juegos de videoconsola (PS, XBOX, Nintendo, etc)</option>
                        <option value="Todos" selected="selected">Todos</option>
                    </select>
                </div>
                <div class="buscarGenero center">
                    <input type="submit" value="Buscar" id="btnBuscar" name="buscar"><!-- evita q el formulario recargue la página -->
                </div>
            </div>
            <div id="campoResultados">
                <div class="persona col-4" style="height: 95px">
                    <div class="col_1 col-3 center">
                        <img src="https://scontent.fuio1-2.fna.fbcdn.net/v/t1.6435-9/156868734_1162488057536482_4940820793778246877_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=WOpb9msjFvUAX-ZehPD&_nc_ht=scontent.fuio1-2.fna&oh=eb4d1e9602fe746f77a124fddd0340de&oe=612A773B">
                    </div>
                    <div class="col_2 col-3 center">
                        <p>Daniel Ayala</p>
                    </div>
                    <div class="col_3 col-3 center">
                        <div class="center row-3">
                            <button>Detalles</button>
                        </div>
                        <div class="center row-3">
                            <button>Seguir</button>
                        </div>
                        <div class="center row-3">
                            <button>Bloquear</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </body>
</html>
<!--
problema: pasar diccionario de bdd de php a javascript
