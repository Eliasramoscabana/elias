<?php
session_start();
include_once('conexion.php');


$usuario=$_POST["usuario"];
$pass=$_POST["password"];

$SQL="SELECT cidusuario, cpassword FROM usuarios WHERE cidusuario='$usuario' and cpassword='$pass'";
$busqueda=pg_query($SQL);
$compara=pg_fetch_array($busqueda);

if ($compara["cidusuario"]==$usuario && $compara["cpassword"]==$pass)
{
$_SESSION['usuario'] = $usuario;
$_SESSION['pass'] = $pass;
header ('Location: yes.html');
}

else
{
header ('Location: index.html');
}
?>