<?php

//$documento = '/Applications/MAMP/htdocs/Cursophp/documento.rtf';

/* if (file_exists('documento.rtf')) {
    echo"El fichero $documento existe";
}else {
    echo "El fichero $documento no existe"; 
} */

//echo file_get_contents('documento.rtf');

file_put_contents('documento.rtf', 'Hola Laura', FILE_APPEND);

?>