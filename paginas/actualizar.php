<?php
    include('includes/encabezado.php');   
    require_once 'includes/validacion.php';
    require_once 'includes/conexion.php';
    if(isset($_POST)){
        $nombre = validar($_POST['nombre'],' nombre ');
        $usuario =  validar($_POST['usuario'],' usuario ');
        $correo =  validar($_POST['correo'],' correo ');    
        $pass =   validar($_POST['contrasena'],' contraseña ');       
        $id = $_POST['id_usuario'];
        $nacimiento =  validar($_POST['nacimiento'],' fecha de nacimiento ');                  
        if($nombre && $usuario && $correo && $pass && $nacimiento){
            $sql = "UPDATE usuarios SET nombre = '$nombre', usuario='$usuario', contrasena = '$pass',correo='$correo',fecha='$nacimiento' WHERE id_usuario =$id;";
            $result = mysqli_query($conexion,$sql);            
            if($result){                               
                echo "<p><strong>Usuario actualizado con exito</strong></p>";;
            }else{
                echo "<script>alert('Ocurrio un error ".mysqli_error($conexion)."')</script>";
            }            
        }
        
        
    }
    include('includes/pie.php');   
?>