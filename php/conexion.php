<?php
  $servidor="localhost";
  $usuario="root";
  $bd="baseweb";
  $conexion = mysql_connect($servidor, $usuario)or die("Problemas en la conexión con el servidor");
  mysql_select_db ($bd, $conexion)or die("Problemas en la seleccion  de la Base de Datos");
?> 