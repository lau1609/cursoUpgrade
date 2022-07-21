<?php

function conexion ($username, $pass, $dbname) {
    $servername = "localhost";

        // Create connection
        $conn = mysqli_connect($servername, $username, $pass, $dbname);

    return $conn;
}

?>