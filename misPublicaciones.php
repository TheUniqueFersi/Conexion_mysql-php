<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Publicaciones</title>
    <link rel="shortcut icon" href="./statics/media/img/resources/tuiter.png" type="image/x-icon">
    <link rel="stylesheet" href="./statics/styles/index.css">
</head>
<body>    
    <main>    
        <?php
            $include = include("./dynamics/php/config.php");   
            $con = connect();
            if($include && $con)
            {
                // $peticion = "SELECT COUNT(ID_PUB) FROM publicacion";
                // $query = mysqli_query($con, $peticion);
                // $dato = mysqli_fetch_assoc($query);

                //var_dump($dato);
                //echo $dato["COUNT(ID_PUB)"];

                $ID_USUARIO = 1;
                $nombre = "Fersi - Fersa";
                $usuario = "fersa_lopez";
                $telefono = "5500112223";
                $bio = "El de las recargas WUUU";
                $ruta_foto = "./statics/media/img/perfil_fersa.png";


                
                $peticion = "SELECT * FROM publicacion";
                $query = mysqli_query($con, $peticion);
                //$row = mysqlk

                //$datos = mysqli_fetch_assoc($query);
                
                while($row = mysqli_fetch_array($query))
                {
                    //var_dump($row); 
                    $ID_PUB = $row["ID_PUB"];
                    $ID_USUARIO = $row["ID_USUARIO"];
                    $descripcion = $row["descripcion"];
                    $fecha = $row["fecha"];
                    $hora = $row["hora"];
                    $corazones = $row["corazones"];
                    $n_comentarios = $row["n_comentarios"];
                    $n_retuits = $row["n_retuits"];                    
                    

                    echo "<article class='publicacion'>
                        <div class='fotoPerfil'>
                            <div class='fotoPequeña'>                                                        
                                <img src='$ruta_foto' alt='imagen de $usuario' class='img_perfil img_perfil-pequeña'>                            
                            </div>
                        </div>
                        <div class='infoPub'>
                            <div class='perfil-fecha'>
                                <span class='nombreUsuario' >$nombre</span>
                                <span class='nombreUser' >@$usuario</span>
                                <span class='fecha' >-- $fecha</span>
                            </div>
                            <div class='descripcion-pub'>
                                $descripcion
                            </div>
                            <div class='foto-pub'>
                
                            </div>
                            <div class='megusta-comentarios-retuits cont3-gcr'>
                                <span>Me gusta: $corazones</span>
                                <span>Comentarios: $n_comentarios</span>
                                <span>Retuits: $n_retuits</span>
                            </div>
                        </div>
                    
                    </article>";



                }
                //var_dump($datos);
                
                
                //echo "bien pibe";
            }

        ?>
    </main>
    
</body>
</html>