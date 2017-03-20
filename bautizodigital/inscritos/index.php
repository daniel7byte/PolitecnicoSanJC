<?php
	include "../conn/config.php";
	$conn = mysqli_connect($host, $user, $pw, $database)or die();
	mysqli_set_charset($conn, "utf8");
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Personas Inscritas</title>
	<style type="text/css">
	* {
		font-family: Arial;
		color: #303030;
	}
	</style>
</head>
<body bgcolor="#CCCCCC">
	<?php
	$result = mysqli_query($conn, "SELECT * FROM $tabla");
	?>
	<br>
	<h1>Bautizo Digital</h1>
	<br>
	<table border=1px>
	<tr>
	<th bgcolor=grey>ID</th>
	<th bgcolor=grey>NOMBRE</th>
	<th bgcolor=grey>INTERES</th>
	<th bgcolor=grey>TELEFONO</th>
	<th bgcolor=grey>DIRECCION</th>
	<th bgcolor=grey>CORREO</th>
	</tr>
	<?php
	while ($row = mysqli_fetch_row($result)){
	echo "<tr>";
	echo "<td bgcolor=#f4f4f4>$row[0]</td>";
	echo "<td bgcolor=#f4f4f4>$row[1]</td>";
	echo "<td bgcolor=#f4f4f4>$row[2]</td>";
	echo "<td bgcolor=#f4f4f4>$row[3]</td>";
	echo "<td bgcolor=#f4f4f4>$row[4]</td>";
	echo "<td bgcolor=#f4f4f4>$row[5]</td>";
	echo "</tr>";
	}
	?>
	</table>
	<br><a color=#303030 href="http://www.politecnicosanjc.hol.es/">Insertar datos</a>
  	<br>
</body>
</html>