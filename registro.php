<?php
include_once('db.php');
// resivo datos del formulaio.
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

echo "hola";

$conectar = conn();
$sql ="INSERT INTO usuarios (Nombres, Apellidos, Direccion, Telefono, usuario, Contraseña)
VALUES('$nombres','$apellidos','$direccion','$telefono','$usuario','$clave')";
$result = mysqli_query($conectar, $sql)or trigger_error("query falled sql  error :".mysqli_error($conectar),E_USER_ERROR);

echo "$sql";

?>