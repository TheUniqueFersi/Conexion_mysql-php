<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creando Publicación...</title>
    <link rel="stylesheet" href="../../statics/styles/index.css">
    <link rel="icon" href="../../statics/media/img/resources/tuiter.png">
</head>
<body>
        <div class="contCenter">
            <a href="../../misPublicaciones.php">
                <button class="btns" >Ver publicaciones anteriores</button>
            </a>
        </div>
</body>
</html>
<?php
    $include = include("./config.php");
    $con = connect();

    

    // if($include && $con)
    // {
        // $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "") ? $_POST["descripcion"] : false;
        // $n_corazones = (isset($_POST["n_corazones"]) && $_POST["n_corazones"] != "") ? $_POST["n_corazones"] : false;
        // $n_comentarios = (isset($_POST["n_comentarios"]) && $_POST["n_comentarios"] != "") ? $_POST["n_comentarios"] : false;
        // $n_retuits = (isset($_POST["n_retuits"]) && $_POST["n_retuits"] != "") ? $_POST["n_retuits"] : false;
        
        $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "") ? $_POST["descripcion"] : false;
        $n_corazones = (isset($_POST["n_corazones"]) && $_POST["n_corazones"] != "") ? $_POST["n_corazones"] : false;
        $n_comentarios = (isset($_POST["n_comentarios"]) && $_POST["n_comentarios"] != "") ? $_POST["n_comentarios"] : false;
        $n_retuits = (isset($_POST["n_retuits"]) && $_POST["n_retuits"] != "") ? $_POST["n_retuits"] : false;

        var_dump($descripcion);
        echo "<br><br>";
        var_dump($n_corazones);
        echo "<br><br>";
        var_dump($n_comentarios);
        echo "<br><br>";
        var_dump($n_retuits);
        echo "<br><br>";

        $peticion = "INSERT INTO publicacion VALUES
            (0, 1, '$descripcion', NULL, NULL, $n_corazones, $n_comentarios, $n_retuits)";

        $query = mysqli_query($con, $peticion);

        // var_dump($query);

        //$datos = mysqli_fetch_array($query);
        // var_dump($datos);




    // }



?>