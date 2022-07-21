<?php

/* $amigo = array('telefono' => 687897293, 'Edad' => 20, 'pais' => 'mexico');

extract($amigo);

echo $Edad; */

$semana = array(
    'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes',
    'Sabado', 'Domingo' 
);

/* $ultimo_mes = array_pop($semana);
foreach ($semana as $dia){
    echo $dia . '<br/>'; 
}*/

//echo $ultimo_mes;

//echo join(' - ', $semana);

/* sort($semana);
echo join(', ' , $semana); */

$semana_reverse = array_reverse($semana);
echo join (', ', $semana_reverse);
?>