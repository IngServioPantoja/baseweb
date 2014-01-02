<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="../style.css">
</head>
<?php
include 'conexion.php';
$atributos="update usuarios set ";
if (!empty($_POST['identificacion'])){
$atributos=$atributos."identificacion=".$_POST['identificacion'];}else{}
if (!empty($_POST['nombre'])){
$atributos=$atributos.",nombre='".$_POST['nombre']."'";}else{}
if (!empty($_POST['apellidos'])){
$atributos=$atributos.",apellidos='".$_POST['apellidos']."'";}else{}
if (!empty($_POST['usuario'])){
$atributos=$atributos.",usuario='".$_POST['usuario']."'";}else{}
$atributos=$atributos." where id=".$_POST['id']." LIMIT 1";
$insert="";
$insert=$insert.$atributos;
$query = mysql_query ($insert)or die(mysql_error());
?>
<body>
		<div id="div_centro_centro">
		
            <div id="div_centro_centro_texto">Pago Realizado Exitosamente.</div>
			<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../listar_usuarios.php" />
		
        </div>
</body>
</html>



