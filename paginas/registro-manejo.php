<?php
    include('includes/encabezado.php');   
    require_once 'includes/validacion.php';
    require_once 'includes/conexion.php';
    if(isset($_POST)){
        $nombre = validar($_POST['nombre'],' nombre ');
        $usuario =  validar($_POST['usuario'],' usuario ');
        $correo =  validar($_POST['correo'],' correo ');     
        $pass = validar($_POST['password'],' contraseña ');
        $rpass =  validar($_POST['r-contrasena'],' confirmar contraseña ');
        $rcorreo =  validar($_POST['r-correo'],' confirmar correo '); 
        // $ape = validar($_POST['apellidos'],' apellidos ');
        $nacimiento =  validar($_POST['nacimiento'],' fecha de nacimiento ');  
        // $nombre = "$nombre $ape";
        $robot =  validar($_POST['robot'],' no soy robot '); 
        if($nombre && $usuario && $correo && $pass && $rpass && $rcorreo && $nacimiento && $robot){
            $sql = "INSERT INTO usuarios(nombre,usuario,contrasena,correo,fecha) VALUES('$nombre','$usuario','$pass','$correo','$nacimiento');";
            $result = mysqli_query($conexion,$sql);
           
            if($result){                               
                echo "<p><strong>Usuario creado con exito</strong></p>";;
            }else{
                echo "<script>alert('Ocurrio un error ".mysqli_error($conexion)."')</script>";
            }            
        }
        
        
    }
    include('includes/pie.php');   
?>