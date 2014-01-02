<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="../style.css">
<title>ATLAS GYM</title>
</head>
<?php
include 'conexion.php';
if (!empty($_POST['id'])){
$id=$_POST['id'];}else{}
$sql="delete from usuarios where id=$id limit 1";
$query = mysql_query ($sql)or die(mysql_error());
?>

<body>
		<div id="div_centro_centro">
			<div id="div_centro_centro_texto">Usuario borrado exitosamente.</div>
			<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../listar_usuarios.php" />
		</div>
</body>
</html>



