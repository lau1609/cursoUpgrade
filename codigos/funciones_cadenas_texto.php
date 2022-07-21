<?php

$texto = '< > & "" ';
$texto2 = ' Hola ';

/* echo htmlspecialchars($texto);
echo trim ($texto2); 
echo strlen($texto);
echo substr($texto, 1, 5);*/
echo strtoupper($texto2) . '<br/>';
echo strtolower($texto2) . '<br/>';
echo strpos($texto2, 'o') . '<br/>';
?>