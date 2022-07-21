<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;
    public $texto = 'Primer texto';

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarinformacion(){
       return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }

}

class Estudiante extends Persona {
    public $texto = 'Hola mundo';

    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona {
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$carlos = new Trabajador('Laura Aguirre', 21, 'Mexico', 'Profesor');
echo $carlos->trabajo;

?>