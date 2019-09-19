<?php
session_start();
require_once 'conexion.php';

if(isset($_POST['btn-login']))
{
$cidusuario = $_POST['cidusuario'];
$password = trim($_POST['cpassword']);
$cpassword = ($password);

	

$sql="SELECT nlineno,cidusuario, cpassword FROM siam_siar.usuarios WHERE 
		cidusuario='$cidusuario' and cpassword='$cpassword'";
$resultado=pg_query($sql);
$consulta=pg_fetch_array($resultado);


if ($consulta>0){
echo 1; // log in}
$_SESSION['cidusuario'] = $consulta[0];
}
else{
	 echo $cpassword;
}

}

?>