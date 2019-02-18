<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>El sit</title>
	<link rel="stylesheet" type="text/css" href="../css/tarjetas.css">		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<script type="text/javascript" src="../scripts/tarjeta.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
	<link rel="stylesheet" href="../css/tablas.css">	
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
	<meta name="keywords" content="peliculas,videojuegos,musica">
		<meta name="description" content="Sitio web de entretenimiento">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <script src="../scripts/formularios.js"></script>
</head>
	<body>
		<div class="contenedor-general">
<div class="navegacion">
<header>
				<div>
					<a href="#" >
					<?php 
						ob_start();
					 if(!isset($_SESSION)){
						session_start();
					}					
					if(isset($_SESSION['usuario'])):
							echo $_SESSION['usuario']['nombre'];
						else:
						?>
							Ingresar				
						<?php endif;?>
				</a>				
				</div>
				<h1>El Metronauta</h1>
				<p>El  sitio  donde compartes  tus calificaciones  y  opiniones  en  entretenimiento</p>

			</header>
			<!-- /header -->

			<!-- inicio de nav -->
			<nav>
				<ul>					
					<li class="menu-item"><a href="../paginas/index.php">Inicio</a></li>
					<li class="menu-item"><a href="../paginas/resena.php">Hacer una resena</a></li>
					
					<?php if(isset($_SESSION['usuario'])):?>
					<li class="menu-item"><a href="../paginas/salir.php">Salir</a></li>
					<?php 					
						else:
						?>
					<li class="menu-item"><a href="../paginas/ingresar.php">Entrar</a></li>
					
						<?php endif;?>
					
					<li class="menu-item"><a href="../paginas/registro.php">Crear cuenta</a></li>
					<li class="menu-item"><a href="mapa.php">Mapa del sitio</a></li>
					<li class="menu-item"><a href="##">Contacto</a></li>
					<?php 
						if(isset($_SESSION['usuario'])):
							$tipo = $_SESSION['usuario']['tipo'];
							if($tipo==2):
					?>
						<li class="menu-item"><a href="##">Administración</a>
							
						<ul class="submenu">
							<li class="submenu-item"><a href="../paginas/tabla-usuarios.php">Ver usuarios</a></li>
						</ul>
						</li>
					<?php endif; endif;?>
					<li class="menu-item"><a href="##">Acerca de este sitio</a></li>
				</ul>

			</nav>
			<!-- /nav -->

</div>
	
