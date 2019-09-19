<!--<?php/*
session_start();
if(isset($_SESSION['dni'])!="")
{
	header("Location: ../menu/index.php");
}*/
?>-->
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="../estilos/css/overhang.min.css" />
   <link rel="stylesheet" type="text/css" href="../estilos/css/login.css" />
    <title>Login formulario</title>
</head>

<body> 
  <div class="login-box" style="color: #6399F4">
      <h1></h1>
      <form class="form-signin" method="post" id="login-form" autocomplete="off">
        <div id="error">
        </div>
        <label for="username">Usuario</label>
        <input   type="text"   placeholder="Username"  name="cidusuario" id="cidusuario" autofocus>
        <label for="password">Contraseña</label>
        <input type="password"  placeholder="Password" name="cpassword" id="cpassword" />
        <button type="submit" class="btn"  name="btn-login" id="btn-login">
            <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Aceptar
        </button> 
      </form>
    </div>
    

    
<script type="text/javascript" src="../estilos/js/jquery.min.js"></script>
<script type="text/javascript" src="../estilos/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../estilos/js/validation.min.js"></script>
<script type="text/javascript" src="../estilos/js/script.js"></script>
<script type="text/javascript" src="../estilos/js/overhang.min.js"></script>

</body>
</html>