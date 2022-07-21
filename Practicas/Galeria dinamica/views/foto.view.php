<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
     initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,100&family=Roboto:wght@100&display=swap" 
     rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
     integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilos.css">
    <title>Galeriaa</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if (!empty($foto['0']['titulo'])) {
                echo $foto['0']['titulo'];
        }else {
            print_r ($foto['0']['imagen']);
        }
                ?></h1>
        </div>
</br>
</br>
</br>
    </header>
    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['0']['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['0']['texto']; ?></p>
            <a href="index.php" class="regresar"><i class= "fa fa-arrow-left"></i> Regresar</a>
        </div>
    </div>
    <footer>
        <p class="copyright">Galeria creada por Laura Aguirre</p>
    </footer>

</body>
</html>