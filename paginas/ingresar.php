<?php 
    include_once '../paginas/includes/encabezado.php';
    include_once '../paginas/includes/validacion.php';
 ?>
<body>	
    <div class="contenedor-formulario">
        <div class="contenedor-titulo">
            <h2 class="titulo-formulario">Iniciar sesión</h2>
        </div>
        <div class="contenedor-inputs">
            <form  method = "POST" action="iniciar.php">               
                <div class="input-div">
                    <input type="text" class="input-text" name="usuario" placeholder="Nombre de usuario"><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="password" class="input-text" id="contrasena" name ="contrasena"placeholder="Contraseña"><img src="../img/llenar.png" class="icono" required>
                </div>                
                <div class="div-botones">
                    <input type="submit" value="Entrart" class="boton-enviar"><input type="reset" class="boton-borrar" value="Cancelar">
                </div>
            </form>
        </div>
    </div>
 
</body>
<?php 
    include '../paginas/includes/pie.php';
 ?>