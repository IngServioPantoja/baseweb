<?php
include 'php/conexion.php';
$sql="select id,identificacion,nombre,apellidos from usuarios";
$resultado=mysql_query($sql);
$filas=mysql_num_rows($resultado);
$celdas=mysql_num_fields($resultado);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-language" content="es" />
	<meta http-equiv="content-type"     content="text/html; charset=utf-8" />
	<meta name="viewport" id="view"     content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<nav>
		<ul>
			<li>
				<a href="#">Usuarios</a>
				<ul>
					<li>
						<a href="listar_usuarios.php">Listar</a>
					</li>
					<li>
						<a href="registrar.php">Agregar</a>
					</li>
				</ul>
			</li>
			<li><a href="#">Menu2</a></li>
			<li><a href="#">Menu3</a></li>
			<li><a href="#">Menu4</a>
				<ul>
					<li>
						<a href="#">Menu41</a>
					</li>
					<li>
						<a href="#">Menu42</a>
					</li>
					<li>
						<a href="#">Menu43</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	<section class="contenedor">
		<section>
	      <head>
	        Acceso al sistema
	      </head>
	      <article>
	      	<?php
	      		if($filas>0){
	      	?>
	      			<fieldset>
	      				<legend>
			            Usuarios
			         	</legend>
			         	<table>
			              	<tr>
			               		<th>
			                 	 Id
			               		</th>
			                	<th>
			                  	Identificacion
			                	</th>
			                	<th>
			                  	Nombre
			                	</th>
			                	<th colspan="4">
			                  	Apellido
			                	</th>
			              	</tr>
			<?php
					for($rfilas=0;$rfilas<$filas;$rfilas++)
					{

			?>
						<tr>
							<td>
								<?php echo mysql_result($resultado,$rfilas,0)?>
							</td>
							<td>
								<?php echo mysql_result($resultado,$rfilas,1)?>
							</td>
							<td>
								<?php echo mysql_result($resultado,$rfilas,2)?>
							</td>
							<td>
								<?php echo mysql_result($resultado,$rfilas,3)?>
							</td>
							<td>
		                        <form method="POST" action="consultar_usuario.php">
		                        	<input type="hidden" name ="id" value="<?php echo mysql_result($resultado,$rfilas,0);?>">
		                          	<input type="submit" value='Consultar'>
		                        </form> 
	                     	 </td>
	                      	<td>
		                        <form method="POST" action="editar_usuario.php">
		                          	<input type="hidden" name ="id" value="<?php echo mysql_result($resultado,$rfilas,0);?>">
		                        	<input type="submit" value='Editar'>
		                        </form> 
	                     	</td>
	                      	<td>
		                        <form method="POST" action="php/eliminar.php" name="cliente">
		                          	<input type="hidden" name ="id" value="<?php echo mysql_result($resultado,$rfilas,0);?>">
		                          	<input type="submit" value='Eliminar' onClick="return confirmar()">
		                        </form> 
	                      	</td>
						</tr>

			<?php
					}
			?>
						</table>
			        </fieldset> 
	      	<?php
	      		}
	      	?>
	      </article>
	    </section>
		<aside>aside
		</aside>
	</section>
	<footer>
		Footer
	</footer>
</body>
</html>