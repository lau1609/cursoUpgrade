<?php

//el static nos permite acceder a lo que este dentro de la clase sin necesidad de hacer una estancia

class Persona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null){
        if ($nombre) {
            return 'Hola buen dia ' . $nombre;
        }else {
            return 'Hola, buen dìa ';
        }
    }
}

//$carlos = new Persona;
//echo Persona::$dia;
echo Persona::saludo();
//echo $carlos->saludo('Carlos');

?>