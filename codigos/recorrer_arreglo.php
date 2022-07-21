<?php
$meses = array(
    'Enero', 'febrero', 'marzo', 'abril', 'mayo',
    'junio', 'julio', 'agosto', 'septiembre' 
);
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
           foreach($meses as $mes){
                echo '<li>' . $mes . '</li>'; }
        ?>
    </ul>
</body>
</html>