<?php 
    include_once '../paginas/includes/encabezado.php';
    include_once '../paginas/includes/validacion.php';
 ?>
<body>	
    <div class="contenedor-formulario">
        <div class="contenedor-titulo">
            <h2 class="titulo-formulario">Actualizar datos</h2>
        </div>
        <div class="contenedor-inputs">
            <form  method = "POST" action="actualizar.php">
                <input type="hidden" name="id_usuario" value='<?=$_GET['id_usuario']?>'>
                <div class="input-div">
                    <input type="text" value='<?=$_GET['usuario']?>'class="input-text" name="usuario" placeholder="Nombre de usuario"><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="password" class="input-text" id="contrasena" name ="contrasena"placeholder="Contraseña"><img src="../img/llenar.png" class="icono" required>
                </div>
               
                <div class="input-div">
                    <input type="email" value='<?=$_GET['correo']?>'class="input-text" id="correo" name="correo" placeholder="Correo" ><img src="../img/llenar.png" class="icono" required>
                </div>
                
                <div class="input-div">
                    <input type="text" value='<?=$_GET['nombre']?>' class="input-text" name="nombre" placeholder="Nombre(s)"><img src="../img/llenar.png" class="icono" required>
                </div>               
                <div class="input-div">
                    <label>Nacimiento: </label><input type="date" value='<?=$_GET['nacimiento']?>'class="input-text" name="nacimiento"><img src="../img/llenar.png" class="icono" required>
                </div>
                
                <div class="div-botones">
                    <input type="submit" value="Guardar" class="boton-enviar"><input type="reset" class="boton-borrar" value="Reiniciar">
                </div>
            </form>
        </div>
    </div>
 
</body>
<?php 
    include '../paginas/includes/pie.php';
 ?>