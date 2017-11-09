<?php
session_start();
if (isset($_SESSION['usuario'])){ 
		$login_session=$_SESSION['usuario'];
	} 
	else{
		$login_session="";
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DulceChiapas</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />	
	    <LINK href='CSS/Style.css' type=text/css rel=stylesheet> 
	</head>
	<body>
	    <!-- Header -->

         <header>

		<!-- Menu -->
			<nav >
				<ul >
					
					<li><a href="index.php">Inicio</a></li>
					<li><a href="Nosotros/Nosotros.php">Nosotros</a></li>
					<li><a href="Catalogo/Catalogo.php">Catálogo</a></li>
					<li><a href="Pedidos/Pedidos.php">Pedidos</a></li>
					<li><a href="Inventario/Inventario.php">Inventario</a></li>
                    <li><a href="Contacto.php">Contacto</a></li>
				    <li class="right">						
			       	<a class="linkLogin" href = "logout.php" >Cerrar sesión</a>
					</li>	
					<li class="right"><p class="datosLogin">USUARIO: <?php echo $login_session; ?></p></li>
			        				
				</ul>	
			</nav>	
		    </header>	


			<!-- Footer -->
			<footer>			
					<h3>Información de contacto</h2>
					<p>Dulce chiapas</p>
					<div class="copyright">
					&copy; Copyright 2017. All Rights Reserved. Design by: Rigoberto Perez O.
				</div>
			</footer>			
	</body>
</html>