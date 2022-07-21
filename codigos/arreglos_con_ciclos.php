<?php
$meses = array(
    'Enero', 'febrero', 'marzo', 'abril', 'mayo',
    'junio', 'julio', 'agosto', 'septiembre' 
);

/* for($i = 0; $i < count ($meses); $i++){
    echo $meses[$i] . '<br/>';
} */

$contador = 0;
while($contador < count($meses)){
    echo $meses[$contador]. '<br/>';
    $contador++;
}
?>