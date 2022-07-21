<?php
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre' 
);

$numeros = array(1, 22, 3, 6, 0 , 16, 2, 14, 55, 100);
sort ($numeros);
//rsort ($meses);
?>


<!DOCTYPE html>
<html lang = "en">
<head> 
    <meta charset="UTF_8">
    <title> Meses del año </title> 
</head>
<body> 
    <h1> Meses del año </h1>
    <ul>
        <?php 
            foreach($numeros as $numero){
                echo '<li>' . $numero . '</li>';
            }
        ?>
    </ul>
</body>
</html>