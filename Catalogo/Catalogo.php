<?php
session_start();
if ($_SESSION["usuario"] == "") {
    header("Location: ../login.php");
    exit();
}
else{
$login_session=$_SESSION['usuario'];
}
?>

<!DOCTYPE HTML>
<?php
header('Content-Type: text/html; charset=UTF-8');
include_once '../conexion.php';
?>
<html>
	<head>
		<title>DulceChiapas</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	    <LINK href='../CSS/Style.css' type=text/css rel=stylesheet> 
	</head>
	<body>
	    <!-- Header -->

         <header>

		<!-- Menu -->
			<nav >
				<ul >
					
					<li><a href="../index.php">Inicio</a></li>
					<li><a href="../Nosotros/Nosotros.php">Nosotros</a></li>
					<li><a href="../Catalogo/Catalogo.php">Catálogo</a></li>
					<li><a href="../Pedidos/Pedidos.php">Pedidos</a></li>
					<li><a href="../Inventario/Inventario.php">Inventario</a></li>
                    <li><a href="../Contacto.php">Contacto</a></li>
				    <li class="right">						
			       	<a class="linkLogin" href = "../logout.php" >Cerrar sesión</a>
					</li>	
					<li class="right"><p class="datosLogin">USUARIO: <?php echo $login_session; ?></p></li>
			        				
				</ul>	
			</nav>	
		    </header>	

	        <section >
			<div >
					<table align="center">	
					           <caption>Nuestros dulces</caption>	
					            <tr>				
									<th>ID</th>
									<th>Nombre</th>
									<th>DESCRIPCION</th>
									<th>PRECIO</th>
								</tr>
								<?php
								include_once '../conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM Dulces";
								$resultado=$mysqli->query($sql_query);
								while($row = $resultado->fetch_assoc()) 
								{
									?>
											<tr>
											<td><?php echo $row["Id"]; ?></td>
											<td><?php echo $row["Nombre"]; ?></td>
											<td><?php echo utf8_encode( $row["Descripcion"]); ?></td>
											<td><?php echo $row["Precio"]; ?></td>
											
											<?php
									}
								}
								?>
					</table>
				</div>
				
			</section>	



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