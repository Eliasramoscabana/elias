<?php
session_start();
include_once('conexion.php');


$usuario=$_POST["usuario"];
$pass=$_POST["password"];

$SQL="SELECT cidusuario, cpassword FROM usuarios WHERE cidusuario='$usuario' and cpassword='$pass'";
$busqueda=pg_query($SQL,$con);
$compara=pg_fetch_array($busqueda);

if ($compara["cidusuario"]==$usuario && $compara["cpassword"]==$pass)
{
$_SESSION['usuario'] = $cidusuario;
$_SESSION['pass'] = $cpassword;
header ('Location: yes.html');
}

else
{
header ('Location: index.html');
}
?>