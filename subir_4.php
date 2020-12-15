<!DOCTYPE html>
<html>
<head>
	<title>subir archivos</title>
	 <link rel="stylesheet" href="css/subirestilo.css">
</head>
<body>
	<header style="float: left;">
		<nav>
			<a href="Inicio.html">INICIO</a><br> 
			<a href="cursos_alum.html">ALUMNO</a><br>
			<a href="cursos_admin.html">ADMIN</a><br>
		</nav>
	</header>
	<form style="align-self: : center;" action="upload_4.php" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<br><br>
		<button>Subir Archivo</button>
	</form>
</body>
</html>