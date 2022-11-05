<?php

class formulario {
    /*
      datos a ingresar:
      hobbies (aumentar más)
     * aficiones (aumentar más)
     * ciudad y país de residencia
     * 
     */
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $genero;
    private $nivelEstudios;
    private $estadoCivil;
    private $hijos;
    private $direccion;//eliminar
    private $telefono;//opcional con opcion de privado o publico a los usuarios
    private $detalles;
    private $foto1;
    private $foto2;//opcional
    private $foto3;//opcional
    private $foto4;//opcional
    private $user;
    private $pass;

    function ingresardatos() {
        $this->nombres = $this->letracapital($_POST["nombres"]);
        $this->apellidos = $this->letracapital($_POST["apellidos"]);
        $this->fechaNacimiento = $_POST["fechaNacimiento"];
        $this->genero = $_POST["genero"];
        $this->nivelEstudios = $_POST["nivelEstudios"];
        $this->estadoCivil = $_POST["estadoCivil"];
        $this->hijos = $_POST["hijos"];
        $this->direccion = $_POST["direccion"];
        $this->telefono = $_POST["telefono"];
        $this->detalles = $_POST["detalles"];
        $this->foto1 = $_POST["foto1"];
        $this->foto2 = $_POST["foto2"];
        $this->foto3 = $_POST["foto3"];
        $this->foto4 = $_POST["foto4"];
        $this->user = $_POST["user"];
        $this->pass = $_POST["pass"];
    }

    function mostrardatos() {
        echo "nombres:" . $this->nombres . "apellidos:" . $this->apellidos . "fechaNacimiento:" . $this->fechaNacimiento . "genero:" . $this->genero . "nivelEstudios:" . $this->nivelEstudios . "estadoCivil:" . $this->estadoCivil . "hijos:" . $this->hijos . "direccion:" . $this->direccion . "telefono:" . $this->telefono . "detalles:" . $this->detalles . "foto1:" . $this->foto1 . "foto2:" . $this->foto2 . "foto3:" . $this->foto3 . "foto4:" . $this->foto4 . "user:" . $this->user . "pass:" . $this->pass;
    }

    function letracapital($cadena) {
        $char = strtoupper(substr($cadena, 0, 1));
        $palabra = $char;
        for ($index = 1; $index < strlen($cadena); $index++) {
            if (substr($cadena, $index - 1, 1) == " " && substr($cadena, $index, 1) != " ") {
                $palabra .= strtoupper(substr($cadena, $index, 1));
            } else if (substr($cadena, $index - 1, 1) != " " && substr($cadena, $index, 1) != " ") {
                $palabra .= strtolower(substr($cadena, $index, 1));
            } else {
                $palabra .= substr($cadena, $index, 1);
            }
        }return $palabra;
    }

    function somethingEmpty() {
        $a = $this->nombres;
        $b = $this->apellidos;
        $c = $this->fechaNacimiento;
        $d = $this->genero;
        $e = $this->nivelEstudios;
        $f = $this->estadoCivil;
        $g = $this->hijos;
        $h = $this->direccion;
        $i = $this->telefono;
        $j = $this->detalles;
        $k = $this->foto1;
        $o = $this->user;
        $p = $this->pass;
        if($a==""||$b==""||$c==""||$d==""||$e==""||$f==""||$g==""||$h==""||$i==""||$j==""||$k==""||$o==""||$p==""){
            alert("Hay algún campo vacío");
        }
    }

}


$form = new formulario();
$form->ingresardatos();
//$form->mostrardatos();
$form->somethingEmpty();
include "zenva.php";