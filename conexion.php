
<?php
$user = 'postgres';
$passwd = '123456';
$db = 'siam_siar';
$port = 5432;
$host = '192.168.1.53';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>";

?>