<?php 
$UserCorreo=$_POST['email'];
$UserClave=$_POST['clave'];

if (empty($UserCorreo)||empty($UserClave)) {
	echo "Falta correo";	
}
else{
	echo "bienvenido".$UserCorreo.'';
}

 ?>