<!DOCTYPE html>
<html lang="es">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="../style.css">
</head>
<?php
include 'conexion.php';
$atributos="insert into usuarios (";
$valores="values(";
if (!empty($_POST['identificacion'])){
$atributos=$atributos."identificacion"; $valores=$valores."'".$_POST['identificacion']."'";}else{}
if (!empty($_POST['nombre'])){
$atributos=$atributos.",nombre"; $valores=$valores.",'".$_POST['nombre']."'";}else{}
if (!empty($_POST['apellidos'])){
$atributos=$atributos.",apellidos"; $valores=$valores.",'".$_POST['apellidos']."'";}else{}
if (!empty($_POST['usuario'])){
$atributos=$atributos.",usuario"; $valores=$valores.",'".$_POST['usuario']."'";}else{}
if (!empty($_POST['password'])){
$atributos=$atributos.",password"; $valores=$valores.",'".md5($_POST['password'])."'";}else{}
$atributos=$atributos.") ";
$valores=$valores.")";
$insert="";
$insert=$insert.$atributos.$valores;
$query = mysql_query ($insert)or die(mysql_error());
?>
<body>
		<div id="div_centro_centro">
			<div id="div_centro_centro_texto">
			  <p>Usuario registrado exitosamente.</p>
			  
        </div>
			<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../panel_administrador.php" />
		</div>
</body>
</html>



