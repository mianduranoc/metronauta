<?php
    DEFINE('SERVIDOR','localhost');
    DEFINE('USUARIO','root');
    DEFINE('PASSWORD','');
    DEFINE('DB','metronauta');
    $conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,DB);

    if(!$conexion){
        die('Fallo la conexion '.mysqli_connect_error());
    }
?>