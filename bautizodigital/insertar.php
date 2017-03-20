<?php
	include "conn/config.php";
	$conn = mysqli_connect($host, $user, $pw, $database) or die ();
	mysqli_set_charset($conn, "utf8");
?>
<html>
<head>
	<title>Bautizo Digital</title>
</head>
<body>
	<?php
	// if(isset($_POST['nombre']) && !empty($_POST['nombre'])
	if($_POST['nombre'] == ""){
		echo "Complete los campos correctamente";
	}else{
		mysqli_query($conn, "INSERT INTO $tabla (NOMBRE, INTERES, TELEFONO, DIRECCION, CORREO)
			VALUES('$_POST[nombre]','$_POST[interes]','$_POST[tel]','$_POST[direccion]','$_POST[mail]')");
		
		header("Location: http://www.politecnicosanjc.hol.es/");
	}
	?>
</body>
</html>