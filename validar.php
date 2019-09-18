<?php 
session_start();
include_once('conexion.php');


$usuario=$_POST["usuario"];
$password=$_POST["password"];

$sql="SELECT cidusuario, cpassword FROM siam_siar.usuarios WHERE cidusuario='$usuario' and cpassword='$password'";
$resultado=pg_query($sql);
$compara=pg_fetch_array($resultado);

if ($compara>0)
{
$_SESSION['usuario'] = $usuario;
echo '<script>alert("ingreso correctamente")</script> ';
header ('Location: yes.html');

}

else
{
echo '<script>alert("ERROR")</script> ';
header ('Location: index.html');
}
?>