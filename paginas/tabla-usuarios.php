<?php
    require("includes/encabezado.php");
?>
    <div class="tabla">
        <?php
            require_once 'includes/conexion.php';   
            $usuarios = mysqli_query($conexion,"SELECT id_usuario, nombre, usuario, correo,fecha FROM usuarios");
            if(mysqli_num_rows($usuarios)>0): ?>
                <table>
                    <tr>
                        <th>Nombre completo</th>    
                        <th>Nombre de usuario</th>    
                        <th>Correo</th>
                        <th colspan='2'>Acciones</th>    
                    </tr>
                <?php while($usuario = mysqli_fetch_assoc($usuarios)):?>
                    <tr>
                        <td><?=$usuario['nombre']?></td>
                        <td><?=$usuario['usuario']?></td>
                        <td><?=$usuario['correo']?></td>
                        <td><a  href='borrar.php?id_usuario=<?=$usuario['id_usuario']?>'>Eliminar</a></td>
                        <td><a  href='editar.php?id_usuario=<?=$usuario['id_usuario']?>&nombre=<?=$usuario['nombre']?>&usuario=<?=$usuario['usuario']?>&correo=<?=$usuario['correo']?>&nacimiento=<?=$usuario['fecha']?>'>Actualizar</a></td>
                    </tr>
                <?php endwhile;
                echo "</table>";
            else:
                echo "<p><strong>No hay datos</strong></p>";
            endif;                                     
        ?>
    </div>
<?php
    require("includes/pie.php");
?>	