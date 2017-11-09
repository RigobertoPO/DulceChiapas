<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
 <LINK href='../CSS/Style.css' type=text/css rel=stylesheet> 
<title>Login</title></head>
<body>
<div>
    <center>
    <h3>Registro de usuario</h3>
    <form method="POST" action="crearusuario.php">
        <div class="imgcontainer">
            <img src="../img/avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
             <label><b>Nombre</b></label>
            <br/>
           <input type="text" name="nombre" placeholder="Escribe tu nombre" required/>
            <br/>
            <label><b>Usuario</b></label>
            <br/>
           <input type="text" name="correo" placeholder="Escribe tu correo" required/>
            <br/>
            <label><b>Password</b></label>
            <br/>
           <input type="password" name="password" placeholder="Contraseña" />
           <br/>
           <label><b>Confirmar Password</b></label>
            <br/>
           <input type="password" name="confirmarpassword" placeholder="Confirma Contraseña" />
            <br/>
           <button type="submit" name="btn-guardar"><strong>Registrame</strong></button>   
        </div>      
    </form>
    </center>
</div>
</body>
</html>