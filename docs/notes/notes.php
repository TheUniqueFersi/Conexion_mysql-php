<?php
//---------------------------------> ver conexion con mysql <--------------------------------------------------

    //(CONSTANTES)
    const DBHOST = "localhost";
    const DBUSER = "";
    const PASSWORD = "";
    const DB = "";

    //funcion que conecta

/*
    mencionar que RECUERDEN LA CLASE DE FUNCIONES
    Ejemplificar el porque se ejecuta una vez el codigo en un include
*/
    function connect()
    {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);

        //Varias Formas: 
        //1
        /*
        if(!$conexion)
        {
            mysqli_error();
            echo "no se pudo conectar con la base";
        }*/
        //2
        return $conexion;
    }
//--------------------------------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------------------------------


    //En el otro documento:
    //recibir la información de manera correcta --PREGUNTA
    //mediante ternarios


    //Correcta conexion con el otro documento y con la base de datos
    //hacer el include
    $include = include("./");    //Verifica que la conexion con el archivo externo sea correcta

    $con = connect();
    
    if($include && $con)
    {
        //Seguir el flujo del código
    }

    //Parte de los ternarios (iria dentro del if de arriba)
    $id_busqueda = (isset($_POST["ID_busqueda"]) && $_POST["ID_busqueda"] != "") ? $_POST["ID_busqueda"] : false;






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













    //funciones extra:


    mysqli_set_charset($conexion, "utf8");


    die("MENSAJE PERSONALIZADO");





    /*
    Usuarios ()
    Registren usuarios,
    que verifiquen si existe usuario.


    Miercoles 11:59    
    */




//Repaso del tema "Módulo II (php) - Funciones"

    //Declaración de funciones y firma de la función
    function nombreFuncion ($parámetro)
    {
        //código ejecutable...

        return $valor;
    }



    //Argumentos predeterminados


    //Incluir código externo



















?>