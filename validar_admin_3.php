<?php 
$usuario=$_POST['usuario'];
$clave=$_POST['contraseña'];


/*alert("Error en la autentificacion"); 

function alert($msg) { 
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
} */


//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", '', 'usuarios');
$consulta="SELECT * FROM administradores3 WHERE usuario='$usuario' and contraseña='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:subir_3.php");
}
else {
	echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
