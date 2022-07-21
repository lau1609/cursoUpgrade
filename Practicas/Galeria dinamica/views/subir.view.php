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
            <h1 class="titulo">Subir foto</h1>
        </div>
</br>
</br>
</br>
    </header>
    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo" >

            <label for="texto">Descripcion</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir foto">
    </form>
    </div>
    <footer>
        <p class="copyright">Galeria creada por Laura Aguirre</p>
    </footer>

</body>
</html>