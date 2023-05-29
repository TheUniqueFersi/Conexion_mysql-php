<?php
/*    
    Incluir archivo de conexión, 
    asegurar conexion y correcta union de archivo,
    
    recibir información desde un ternarios, --PREGUNTA,

    peticion mysqli_query()

*/

    $include = include("./configsample.php");    //Verifica que la conexion con el archivo externo sea correcta
    $con = connect();   //Verifica que la conexion con la base de datos sea correcta

    //var_dump($con);
    if($include && $con)
    {
        //Seguir el flujo del código
    }

    // --PASO: ternarios
    //Parte de los ternarios (iria dentro del if de arriba)
    //$id_busqueda = (isset($_POST["ID_busqueda"]) && $_POST["ID_busqueda"] != "") ? $_POST["ID_busqueda"] : false;

    $id_busqueda = (isset($_POST["ID_busqueda"]) && $_POST["ID_busqueda"] != "") ? $_POST["ID_busqueda"] : false;
    $id_busqueda = (isset($_POST["ID_busqueda"]) && $_POST["ID_busqueda"] != "") ? $_POST["ID_busqueda"] : false;
    $id_busqueda = (isset($_POST["ID_busqueda"]) && $_POST["ID_busqueda"] != "") ? $_POST["ID_busqueda"] : false;




/*

    //
    //forma general 
    $peticion = "PETICION"; //La peticion
    $query = mysqli_query($con, $sql); //Ejecuta la peticion en una base de datos
    $datos = mysqli_fetch_array($query);

    
    
    // --señalar cuidados con los strings
    



    //Tipo modificación de datos
    $sql = "INSERT INTO [tabla] VALUES (0, '$OMG' '$XD')"
    $query = mysqli_query()



    //Tipo consulta de datos
*/
?>