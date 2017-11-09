<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
 <LINK href='CSS/Style.css' type=text/css rel=stylesheet> 
<title>Login</title></head>
<body>
<div>
    <center>
    <h3>Inicia sesión para acceder a la tienda</h3>

    <form method="POST" action="validar.php">
        <div class="imgcontainer">
            <img src="img/avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label><b>Usuario</b></label>
            <br/>
           <input type="text" name="correo" placeholder="Escribe tu correo" required/>
            <br/>
            <label><b>Password</b></label>
            <br/>
           <input type="password" name="password" placeholder="Contraseña" />
        </div>
       <a href="Usuarios/Registro.php">Registrarme</a>        
        <button type="submit">Inicar Sesion</button>
    </form>
    </center>
</div>
</body>
</html>