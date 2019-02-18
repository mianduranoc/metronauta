<?php 

require_once '../paginas/includes/encabezado.php';

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		$id = $_GET['id_usuario'];
		$sql = "DELETE FROM usuarios WHERE id_usuario = $id";
		require("../paginas/includes/conexion.php");

		if(mysqli_query($conexion,$sql)){
			echo "<p>Usuario eliminado correctamente</p>";
		}else {
			echo "No fue posible eliminar al usuario.".mysqli_error($conexion);
		}
		mysqli_close($conexion);
	}

require_once '../paginas/includes/pie.php';

?>