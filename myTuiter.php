<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuiter</title>
    <link rel="shortcut icon" href="./statics/media/img/resources/tuiter.png" type="image/x-icon">
    <link rel="stylesheet" href="./statics/styles/index.css">
</head>
<body>
    
    <nav id="">
        <h3>Inicio</h1>                
        <div class="contenedor-navbar">
            <div class="">
                <?php
                    $usuario = "LOL";
                    $ruta_foto = "./statics/media/img/perfil_fersa.png";
                    echo "<img src='$ruta_foto' alt='imagen de $usuario' class='img_perfil'>";
                ?>
            </div>
            <div>                
                <?php                                
                    echo "<h1> 
                            $usuario
                    
                        </h1>";
                ?>
            </div>
        </div>    
        
        
        
    </nav>    
    <form action="./" method="post">
        <fieldset>
            <label for="">¿Qué estas pensando?</label>
            <input type="text">

            <label for=""></label>
            <input type="text">

            <label for=""></label>
            <input type="text">


            <button type="submit">Enviar</button>
            <button type="reset">Reset</button>
        </fieldset>
    </form> 

    <a href="./misPublicaciones.php">
        <button>Ver publicaciones anteriores</button>
    </a>
    <?php

    ?>
</body>
</html>