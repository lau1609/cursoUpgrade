<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarinformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }

}

$carlos = new Persona;
$carlos->nombre = 'Laura Aguirre';
$carlos->edad = 21;
$carlos->pais = 'Mexico';
$carlos->mostrarinformacion();

echo '<br/>';

$carla = new Persona;
$carla->nombre = 'Carla';
$carla->edad = 14;
$carla->pais = 'Mexico';

$carla->mostrarinformacion();
?>