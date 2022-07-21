<?php

$paises = array(
    'Mexico', 'España', 'Colombia', 'Peru', 
    'Argentina', 'Venezuela', 'Guatemala'
);

/* foreach($paises as $pais){
    if ($pais == 'Peru') {
        break;
    }
    echo $pais . '<br/>';

} */

?>

<!DOCTYPE html>
<html lang = "en">
<head> 
    <meta charset="UTF_8">
    <title> Meses del año </title> 
</head>
<body> 
    <h1> Paises latinoamericanos </h1>
    <ul>
        <?php 
           foreach($paises as $pais){

            if ($pais == 'España'){
                continue;
             }
            echo $pais . '<br/>';  
                          
         }
        ?>
    </ul>
</body>
</html>