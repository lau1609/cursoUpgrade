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
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Mi galeria en PHP y MySQL</h1>
        </div>
</br>
</br>
</br>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach($imgData as $imgDat): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $imgDat['ID'];?>">
                        <img src="imagenes/<?php echo $imgDat['imagen']; ?>" alt="<?php echo $imgData['titulo']; ?>">
                    </a>
                </div>
                <?php endforeach; ?>
            <div class="paginacion">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-arrow-left"></i> Pagina anterior </a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>"class="derecha"> Pagina siguiente <i class="fa fa-arrow-right"></i></a>
                <?php endif; ?>
                <!-- <a href="#" class="izquierda"><i class="fa fa-arrow-left"></i> Pagina anterior </a>
                <a href="#"class="derecha"> Pagina siguiente <i class="fa fa-arrow-right"></i></a> -->

            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Galeria creada por Laura Aguirre</p>
    </footer>

</body>
</html>