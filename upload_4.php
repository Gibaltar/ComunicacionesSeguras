<?php 

function alert($msg) { 
    echo "<script type='text/javascript'>alert('$msg');</script>"; 
}



$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos4')){
	mkdir('archivos4',0777,true);
	if(file_exists('archivos4')){
		if(move_uploaded_file($guardado, 'archivos4/'.$nombre)){
			echo '<script language="javascript">alert("Archivo guardado con exito"); window.location.href="subir.php";</script>';
		}else{
			echo '<script language="javascript">alert("Archivo no se pudo guardar"); window.location.href="subir.php";</script>';
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos4/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado con exito"); window.location.href="subir.php";</script>';
	}else{
		echo '<script language="javascript">alert("Archivo no se pudo guardar"); window.location.href="subir.php";</script>'; 
	}
}

?>