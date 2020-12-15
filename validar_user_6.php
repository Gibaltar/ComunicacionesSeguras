<?php 
$usuario=$_POST['usuario'];
$clave=$_POST['contraseña'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", '', 'usuarios');
$consulta="SELECT * FROM alumnos6 WHERE usuario='$usuario' and contraseña='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:vista_6.php");
}
else {
	echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
