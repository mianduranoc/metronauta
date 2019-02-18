
        <?php
			require("includes/encabezado.php");
		?>
    <div class="contenedor-formulario">
        <div class="contenedor-titulo">
            <h2 class="titulo-formulario">Registro</h2>
        </div>
        <div class="contenedor-inputs">
            
               
            
            <form method="POST" action="registro-manejo.php" id="registro">
                <div  class="input-div" >
                    <input type="text" class="input-text" name="usuario" placeholder="Nombre de usuario"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div" >
                    <input type="password" class="input-text" name="password" id="contrasena" placeholder="Contraseña"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="password" class="input-text" id="r-contrasena" name="r-contrasena" placeholder="Confirmar contraseña"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="email" class="input-text" name="correo" id="correo" placeholder="Correo"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="email" class="input-text" id="r-correo" name="r-correo" placeholder="Confirmar correo"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <input type="text" class="input-text" name="nombre" placeholder="Nombre(s)"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <!-- <div class="input-div">
                    <input type="text" class="input-text" name="apellidos" placeholder="Apellidos"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>                -->
                <div class="input-div">
                    <label>Nacimiento: </label><input type="date" class="input-text" name="nacimiento"  required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <label for="robot">No soy un robot </label><input type="radio" class="input-text" name="robot" required='required'><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="div-botones">
                    <input type="submit" value="Enviar" class="boton-enviar"><input type="reset" class="boton-borrar" value="Reiniciar">
                </div>
                
            </form>
        </div>
    </div>
    <?php
				require("includes/pie.php");
			?>	