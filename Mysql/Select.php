
<?php  

require "Conexion.php";

$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $conexion, $consulta )or die ( "Algo ha ido mal en la consulta a la base de datos");

 


echo "<table borde='2'>";
echo "<tr>";
echo "<th>Correo</th>";

echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna['Correo'] . "</td><td>" . "</td>";
 echo "</tr>";
}

	
echo "</table>";

?>