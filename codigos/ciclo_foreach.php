<?php
$meses = array(
    'Enero', 'febrero', 'marzo', 'abril', 'mayo',
    'junio', 'julio', 'agosto', 'septiembre' 
);
$alejandro = array('telefono' => 567834793, 'edad' => 20, 'pais' => 'mexico');
?>

<!DOCTYPE html>
<html lang = "en">
<head> 
    <meta charset="UTF_8">
    <title> Meses del año </title> 
</head>
<body> 
    <h1> Meses </h1>
    <ul>
        <?php
       /*  foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        } */
        foreach($alejandro as $dato => $valor){
            echo '<li>' . $dato . ' : ' . $valor . '</li>';
        }
        ?>
    </ul>
</body>
</html>