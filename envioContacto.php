<!DOCTYPE html>
<html lang="en">

<head>

    <title>Conexión a BDD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<a href="index.html">Volver</a>

<?php
/*el nombre del archivo debe el ser el mismo del  form */
$nombre = $_POST["nombreInput"];
$apellido = $_POST["apellido"];
$email = $_POST["mail"];
$fechaNacimiento = $_POST["fecha_nacimiento"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$pais = $_POST["pais"];


$old_val = ini_get('display_errors');
ini_set('display_errors', 'off');
echo $nombre;
ini_set('display_errors', $old_val);

print "<p>Su nombre es <strong>$nombre</strong>.</p>\n";
print "\n";
print "<p>Su apellido es <strong>$apellido</strong>.</p>\n";
print "\n";
print "<p>Su email es <strong>$email</strong>.</p>\n";
print "\n";
print "<p>Su fecha de nacimiento es <strong>$fechaNacimiento</strong>.</p>\n";
print "\n";
print "<p>Su clave es <strong>$contraseña</strong>.</p>\n";
print "\n";
print "<p>Su telefono es <strong>$telefono</strong>.</p>\n";
print "\n";
print "<p>Su ciudad es <strong>$ciudad</strong>.</p>\n";
print "\n";
print "<p>Su provincia es <strong>$provincia</strong>.</p>\n";
print "\n";
print "<p>Su país es <strong>$pais</strong>.</p>\n";
print "\n";

//Incluimos los datos de conexión y las funciones.

include("datosDb.php"); 
$con = mysqli_connect($host,$usuario,$clave,$basededatos)or die ("no se puede conectar al servidor de la base de datos");
if (!$con){
    die("conexión fallida: ". mysqli_connect_error());
}

$db = mysqli_select_db ($con, $basededatos) or die ("no se ha podido conectar a la base de datos");
$consulta = "INSERT INTO usuarios ( nombre, apellido, email, fechaNacimiento, contraseña, telefono, ciudad, provincia, pais) VALUES ('$nombre','$apellido','$email'
'$fechaNacimiento','$contraseña', '$telefono','$ciudad' '$provincia', '$pais')";
// usamos estas variables

if(mysqli_query ($con, $consulta)){
    echo "<p>Registro Agregado</p> ";
} else {
    echo "<p>No se agregó nuevo registro</p>";
    echo "Error:" . $consulta . "<br>" . mysqli_error($scon);
}
mysqli_close($con);

?>

