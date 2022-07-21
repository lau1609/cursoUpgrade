<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarinformacion(){
       echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }

}

$carlos = new Persona('Laura Aguirre', 21, 'Mexico');
/* $carlos->nombre = 'Laura Aguirre';
$carlos->edad = 21;
$carlos->pais = 'Mexico'; */
$carlos->mostrarinformacion();

echo '<br/>';

$carla = new Persona ('karla', 14, 'EU');
/* $carla->nombre = 'Carla';
$carla->edad = 14;
$carla->pais = 'Mexico'; */
$carla->mostrarinformacion();

?>