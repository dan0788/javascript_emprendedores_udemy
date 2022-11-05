<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Zenva Love</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="validacionformulario.js" type="text/javascript"></script>
        <script src="formularioZenva.js" type="text/javascript"></script>
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
                <nav class="menu spaceAround">
                    <div class="redesSociales">Inicio</div>
                    <div class="redesSociales">Objetivos</div>
                    <div class="redesSociales">Sobre mí</div>
                    <img class="redesSociales tamanioRedes" src="icons/facebook.jpg" alt="Facebook">
                    <img class="redesSociales tamanioRedes" src="icons/instagram.jpg" alt="Instagram">
                    <img class="redesSociales tamanioRedes" src="icons/whatsapp.png" alt="Whatsapp">
                    <img class="redesSociales tamanioRedes" src="icons/linkedin.png" alt="LinkedIn">
                    <img class="redesSociales tamanioRedes" src="icons/twitter.png" alt="Twitter">
                    <img class="redesSociales tamanioRedes" src="icons/youtube.png" alt="Youtube">
                </nav>
            </header>
            <header class="cabecera">
                <div class="logo">
                </div>
                <div class="menu right">
                    <div class="redesSociales">Registrarse</div>
                    <div class="redesSociales">Ingresar</div>
                    <div class="contenedorBuscar">
                        <img class="tamanioRedes" src="icons/buscar.png" alt="Buscar">
                        <input class="inputBuscar redesSociales" placeholder="Ingrese el texto a buscar" id="txtBuscar">
                    </div>
                </div>
            </header>
            <!-- Formulario de registro -->
            <form class="campoBusqueda" action="datosformulario.php" method="post">
                <p class="titleBlog center">Formulario Meeting Time</p>
                <fieldset>
                    <legend>Identificación</legend>
                    <label for="nombres">Ingrese sus nombres:</label>
                    <input id="nombres" type="text" placeholder="Ingrese sus nombres aquí" maxlength="100" name="nombres"  onkeypress="return solocaracteres(event,' áéíóúabcdefghijklmnñopqrstuvwxyz')">
                    <label for="apellidos">Ingrese sus apellidos:</label>
                    <input id="apellidos" type="text" placeholder="Ingrese sus apellidos aquí" maxlength="100" name="apellidos"  onkeypress="return solocaracteres(event,' áéíóúabcdefghijklmnñopqrstuvwxyz')">
                </fieldset>
                <fieldset>
                    <legend>Datos personales</legend>
                    <label for="fechaNacimiento">Ingrese su fecha de nacimiento:</label>
                    <input id="fechaNacimiento" type="date" placeholder="Ingrese su fecha de nacimiento aquí" name="fechaNacimiento" >
                    <label for="genero">Género:</label>
                    <select id="genero" name="genero" >
                        <option value="Masculino" selected="selected">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="" selected></option>
                    </select>
                    <label for="nivelEstudios">Nivel de estudios:</label>
                    <select id="nivelEstudios" name="nivelEstudios" >
                        <option value="Sin_Estudios">Sin estudios</option>
                        <option value="Primaria_Incompleta">Primaria incompleta</option>
                        <option value="Primaria_Completa">Primaria completa</option>
                        <option value="Secundaria_Incompleta">Secundaria incompleta</option>
                        <option value="Secundaria_Completa">Secundaria completa</option>
                        <option value="Universidad_Incompleta">Universidad incompleta</option>
                        <option value="Universidad_Completa">Universidad completa</option>
                        <option value="Maestría_Incompleta">Maestría incompleta</option>
                        <option value="Maestría_Completa">Maestría completa</option>
                        <option value="Doctorado_Incompleto">Doctorado incompleto</option>
                        <option value="Doctorado_Completo">Doctorado completo</option>
                        <option value="" selected></option>
                    </select>
                    <label for="estadoCivil">Estado civil:</label>
                    <select id="estadoCivil" name="estadoCivil" ><!-- size="numeroDeElementosaMostrar", multiple permite elegir varias opciones a la vez -->
                        <option value="Soltero/a" selected="selected">Soltero/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                        <option value="Viudo/a">Viudo/a</option>
                        <option value="Unión_Libre">Unión libre</option>
                        <option value="" selected></option>
                    </select>
                    <label for="hijos">Hijos:</label>
                    <input id="hijos" type="number" placeholder="Número de hijos" min="0" max="20" name="hijos" ><!-- El atributo tabindex="5" permite controlar el orden en que el foco pasa de un elemento a otro mediante el tabulador, El atributo disabled permite deshabilitar el control -->
                    <label for="direccion">Dirección domiciliaria:</label>
                    <input id="direccion" type="text" placeholder="Ingrese su dirección aquí" maxlength="100" name="direccion"  onkeypress="return solocaracteres(event,' áéíóúabcdefghijklmnñopqrstuvwxyz(),.#0123456789-')">
                    <label for="telefono">Teléfono:</label>
                    <input id="telefono" type="text" placeholder="Ingrese su teléfono aquí" maxlength="10" name="telefono"  onkeypress="return solocaracteres(event,'0123456789')">
                </fieldset>
                <fieldset>
                    <legend for="detalles">Detalles</legend>
                    <textarea id="detalles" type="text" placeholder="Ingrese su texto aquí" maxlength="300" rows="5" cols="80" name="detalles" onkeypress="return solocaracteres(event,' áéíóúabcdefghijklmnñopqrstuvwxyz,.')"></textarea>
                </fieldset>
                <fieldset>
                    <legend>Fotos</legend>
                    <label for="foto1">Foto 1:</label>
                    <input id="foto1" type="file" alt="Foto 1" value="" name="foto1" >
                    <label for="foto2">Foto 2:</label>
                    <input id="foto2" type="file" alt="Foto 2" value="" name="foto2">
                    <label for="foto3">Foto 3:</label>
                    <input id="foto3" type="file" alt="Foto 3" value="" name="foto3">
                    <label for="foto4">Foto 4:</label>
                    <input id="foto4" type="file" alt="Foto 4" value="" name="foto4">
                </fieldset>
                <fieldset>
                    <legend>User</legend>
                    <label for="user">Usuario:</label>
                    <input id="user" type="text" placeholder="Ingrese su nombre de usuario" maxlength="25" name="user" >
                    <label for="pass">Contraseña:</label>
                    <input id="pass" type="password" placeholder="Ingrese su contraseña aquí" maxlength="50"name="pass" >
                </fieldset>
                <input type="submit">
            </form>
        </div>

    </body>
</html>