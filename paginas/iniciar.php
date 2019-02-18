<?php
    include('includes/encabezado.php');   
    require_once 'includes/validacion.php';
    require_once 'includes/conexion.php';
    if(isset($_POST)){       
        $usuario =  validar($_POST['usuario'],' usuario ');
        $pass =   validar($_POST['contrasena'],' contraseña ');                              
        if( $usuario && $pass){
            $sql = "SELECT nombre,tipo FROM usuarios WHERE usuario ='$usuario' and contrasena ='$pass';";
            $result = mysqli_query($conexion,$sql);            
            if(mysqli_num_rows($result)>0){
                $datos = mysqli_fetch_assoc($result); 
                $tipo = $datos['tipo'];
                $nombre = strtoupper($datos['nombre']);
                
                echo "<p><strong>BIENVENIDO(A) ".$nombre." !</strong></p>";                               
                $_SESSION['usuario']['nombre']=$nombre;               
                $_SESSION['usuario']['tipo']=$tipo;               

                header( "refresh:1;url=../paginas/index.php" );
            }else{
                echo "<p><strong>NOMBRE DE USUARIO O CONTRASEÑA INCORRECTA!</strong></p>";
            }            
        }
        
        
    }
    include('includes/pie.php');   
?>