<?php

//if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) { para saber si la libreria msqli está instalada
//    echo 'We don\'t have mysqli!!!';
//} else {
//    echo 'Phew we have it!';
//}
class conection {

    public $mbd;

    function conectar($usuario,$contraseña,$dbname) {
        try {
            $this->mbd = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $contraseña);
            //$stmt = $mbd->prepare("insert into users(ID,Nombres,Apellidos,FechaNacimiento,Edad,Género,NivelEstudios,EstadoCivil,Hijos,DirecciónDomiciliaria,Teléfono,Detalles,Foto1,Foto2,Foto3,Foto4,Usuario,Contraseña,Método) values(?,'Daniel','Ayala','1994-04-05',27,'Masculino','Universidad','Soltero/a',0,'Chillogallo',2844031,'ola ke ase','no hay','no hay','no hay','no hay','dan14','dan14','texto')");
            //$stmt->execute(array($id));
            //$mbd = null; //cerrar la conexión
            return $this->mbd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function showInfo($tablename) {
        try {
            foreach ($this->mbd->query('SELECT * from '.$tablename) as $fila) {
                $counter = 0;
                foreach ($fila as $key => $value) {
                    if ($key == $counter) {
                        echo $value . ", ";
                        $counter++;
                    }
                }
                echo "<br/>";
            }
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getInfo($tablename) {
        try {
            $newfila = [];$counterEachRow = 1;
            foreach ($this->mbd->query('SELECT * from '.$tablename) as $fila) {
                $counter = 0;
                foreach ($fila as $key => $value) {
                    if ($key != $counter) {
                        $n[$key]=$value;
                    } else {
                        $counter++;
                    }
                }$newfila[$counterEachRow]=$n;$counterEachRow++;
            }
            return $newfila;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function counterRows($tablename) {
        foreach ($this->mbd->query('SELECT MAX(ID) AS ID FROM '.$tablename) as $fila) {
            $id = $fila[0];
        }
        return $id;
    }
}$a=new conection();$a->conectar("root", "", "zenva");
var_dump($a->getInfo("users"));
//$con= new mysqli('localhost','root','','zenva'); otra forma de conectarse
?>