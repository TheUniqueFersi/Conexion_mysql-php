<?php
    $include = include("./config.php");
    $con = connect();

    

    // if($include && $con)
    // {
        // $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "") ? $_POST["descripcion"] : false;
        // $n_corazones = (isset($_POST["n_corazones"]) && $_POST["n_corazones"] != "") ? $_POST["n_corazones"] : false;
        // $n_comentarios = (isset($_POST["n_comentarios"]) && $_POST["n_comentarios"] != "") ? $_POST["n_comentarios"] : false;
        // $n_retuits = (isset($_POST["n_retuits"]) && $_POST["n_retuits"] != "") ? $_POST["n_retuits"] : false;
        
        // $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "") ? $_POST["descripcion"] : false;
        // $n_corazones = (isset($_POST["n_corazones"]) && $_POST["n_corazones"] != "") ? $_POST["n_corazones"] : false;
        // $n_comentarios = (isset($_POST["n_comentarios"]) && $_POST["n_comentarios"] != "") ? $_POST["n_comentarios"] : false;
        // $n_retuits = (isset($_POST["n_retuits"]) && $_POST["n_retuits"] != "") ? $_POST["n_retuits"] : false;

        // var_dump($descripcion);
        // echo "<br><br>";
        // var_dump($n_corazones);
        // echo "<br><br>";
        // var_dump($n_comentarios);
        // echo "<br><br>";
        // var_dump($n_retuits);
        // echo "<br><br>";

        $peticion = "SELECT * FROM publicacion";

        $query = mysqli_query($con, $peticion);

        // var_dump($query);

        $datos = mysqli_fetch_array($query);
        echo "<br>";
        echo "<br>";
        echo "<br>";    
        var_dump($datos);


        $datos = mysqli_fetch_array($query);
        echo "<br>";
        echo "<br>";
        echo "<br>";    
        var_dump($datos);





        $datos = mysqli_fetch_assoc($query);
        echo "<br>";
        echo "<br>";
        echo "<br>";    
        var_dump($datos);


        $datos = mysqli_fetch_assoc($query);
        echo "<br>";
        echo "<br>";
        echo "<br>";    
        var_dump($datos);

    // }



?>