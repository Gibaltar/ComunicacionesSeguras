cursos_alum.html<?php 

$listar = null;
$directorio = opendir("archivos4/");
while($elemento = readdir($directorio)){
	if(is_dir("archivos4/".$elemento)){
		$listar .= "<li><a href='archivos4/$elemento' target='_blank'>$elemento/</a></li>";
	}else{
		$listar .= "<li><a href='archivos4/$elemento' target='_blank'>$elemento</a></li>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>vista de archivos</title>
</head>
<body style="background: #babdbf; min-height: 100vh;">
		<h2 style=" text-align: center;
		margin-bottom: 20px;
		color: #000;">
		<header>
		<nav>
			<a href="Inicio.html">INICIO</a>
			<a href="cursos_alum.html">ALUMNO</a>
			<a href="cursos_admin.html">ADMIN</a>
		</nav>
	</header>
	<h2 style="text-align: center;">ARCHIVOS GUARDADOS POR ADMINSTRADORES DE 4°</h2>
	<br>
	<br>
	<h3 style="text-align: center;
	margin-bottom: 20px;
	color: #000;">Listado de archivos guardados</h3>
	<br>
	<br>
	<ul>
		<?php  echo $listar?>
	</ul>
</body>
</html>