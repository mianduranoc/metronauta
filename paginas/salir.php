<?php
    include('includes/encabezado.php');   
    require_once 'includes/validacion.php';
    require_once 'includes/conexion.php';
    if(isset($_SESSION['usuario'])){       
        $_SESSION=array();
        session_destroy();
        echo "<p><strong>SESIÓN CERRADA</strong></p>"; 
        header( "refresh:1;url=../paginas/index.php" );       
    }
    include('includes/pie.php');   
?>