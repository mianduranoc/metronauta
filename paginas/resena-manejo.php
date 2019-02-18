<?php
    include('includes/encabezado.php');   
    require_once 'includes/validacion.php';
    if(isset($_POST)){
        $nombre = validar($_POST['nombre'],' nombre del revisor ');
        $titulo =  validar($_POST['titulo'],' titulo ');
        $correo =  validar($_POST['correo'],' correo ');     
        $url = validar($_POST['url'],' URL (http://) ');
        $categoria =  validar($_POST['categoria'],' categoria ');
        $comentario =  validar($_POST['comentario'],' comentario '); 
        // $califica = validar($_POST['califica'],' calificacion ');
    }      
    include('includes/pie.php');   
?>