
		<?php
			require("includes/encabezado.php");
			 
		?>
		
	<div class="contenedor-formulario">
		<div class="contenedor-titulo">
            <h2 class="titulo-formulario">Realizar Reseña</h2>
        </div>
		<div class="contenedor-inputs" id="r-contrasena">
            <form method="POST" action="resena-manejo.php" id="resena">
                <div class="input-div">						
						<input type="text" class="input-text" name="nombre" placeholder="Nombre del revisor">
						<img src="../img/llenar.png" class="icono" required>
                </div>
				<div class="input-div" id="r-correo">
                    <input type="email" class="input-text" name="correo" id="correo" placeholder="Correo electronico" ><img src="../img/llenar.png" class="icono" required>
                </div>

                <div class="input-div">
					<input type="text" class="input-text" name="titulo"  placeholder="Contenido a reseñar">
					<img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
				<input  class="input-text" type="url" name="url" placeholder="http://"><img src="../img/llenar.png" class="icono" required>
                </div>
                
                <div class="input-div">
				<select class="input-text" name="categoria" placeholder="Categoria">
				<?php $categorias = array('Series de T.V.','Pelicula','Videojuego','Gadget','Musica','Sitio Web');
				
					for($i=0;$i<count($categorias);$i++):
				?>					
						<option value="'<?=$i?>'"><?=$categorias[$i];?></option>						
					<?php endfor;?>					
					</select>
					<img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
					<textarea  class="input-text" placeholder="Escriba aquí tu reseña" name="comentario" cols="30" rows="7"></textarea><img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
						<label>Calificacion</label>
						<input class="input-text" type="radio" name="califica" value="1" >
						<label id="calif">1</label>
						<input class="input-text" type="radio" name="califica" value="2">
						<label  id="calif">2</label>
						<input class="input-text" type="radio" name="califica" value="3">
						<label  id="calif">3</label>
						<input class="input-text" type="radio" name="califica" value="4">
						<label  id="calif">4</label>
						<input class="input-text" type="radio" name="califica" value="5" >						
						<label id="calif">5</label>				
				   <img src="../img/llenar.png" class="icono" required>
                </div>
                <div class="input-div">
                    <label for="robot">Confirmar publicación: </label><input type="radio" class="input-text" name="robot" required='required'><img src="../img/llenar.png" class="icono" required>
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