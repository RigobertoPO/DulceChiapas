<?php
$nombre = $_POST['nombre'];
$usuario = $_POST['correo'];
$pass = $_POST['password'];
 
if(empty($nombre)|| empty($usuario) || empty($pass)){
    header("Location: ../Usuarios/registro.php");
    exit();
}
include_once '../conexion.php';
$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
$sql_query= "INSERT INTO Usuarios(NombreCompleto,Tipo,Correo,Password) VALUES('$nombre','2','$usuario','$pass')";
if($resultado=$mysqli->query($sql_query))
{
    header("Location: ../login.php"); 
}

?>