<?php 


$usuario = "root";
$contrasena = "AlexisVanessa1";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "administrador";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or  die ("No se ha podido conectar al servidor de Base de datos");


 ?>