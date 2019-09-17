<?php
session_start();

$con=pg_connect("host=127.0.0.1 port=5432 user=postgres password=123456 dbname=siam_siar");
if(!$con)
{
echo "Conexion no establecida, verifique sus datos";
}

$usuario=$_POST["usuario"];
$pass=$_POST["password"];

$SQL="SELECT usuario, contrasena FROM comparacion WHERE usuario='$usuario' and contrasena='$pass'";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);

if ($compara["usuario"]==$usuario && $compara["contrasena"]==$pass)
{
$_SESSION['usuario'] = $usuario;
$_SESSION['pass'] = $pass;
header ('Location: curso/nihongo_aragon.php?modulo=inicio');
}

else
{
header ('Location: logerror.php');
}
?>