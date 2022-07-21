<?php

//a las clases abstractas no se puede acecder directamente, solo las lcases heredadas pueden acceder a ella

abstract class Persona {
    public function saludo(){
        return 'Hola';
    }
}

class Estudiante extends Persona {

}
$carlos = new Estudiante;
echo $carlos->saludo();

?>