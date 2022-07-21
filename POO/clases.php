<?php

/* $nombre = 'Laura';
$edad = 21;
$pais = 'Mexico';

$nombre2 = 'Karla';
$edad2 = 23;
$pais2 = 'EU'; */


class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarinformacion(){
        echo 'Hola mundo';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Laura Aguirre';
$carlos->edad = 21;
$carlos->pais = 'Mexico';

$carlos->mostrarinformacion();

echo $carlos->nombre . ' tiene ' . $carlos->edad . 'años de edad';

$carla = new Persona;
$carla->$nombre = 'Carla';
$carla->$edad = 14;
$carla->$pais = 'Mexico';
?>