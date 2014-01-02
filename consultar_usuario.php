<?php
include 'php/conexion.php';
$id=$_POST['id'];
$sql="select id,identificacion,nombre,apellidos,usuario,tipo from usuarios where id=$id limit 1";
$resultado=mysql_query($sql);
$filas=mysql_num_rows($resultado);
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
			                	<th>
			                  	Apellido
			                	</th>
			                	<th>
			                	Usuario
			                	</th>
			                	<th>
			                	Tipo
			                	</th>

			              	</tr>
							<tr>
								<td>
									<?php echo mysql_result($resultado,0,0)?>
								</td>
								<td>
									<?php echo mysql_result($resultado,0,1)?>
								</td>
								<td>
									<?php echo mysql_result($resultado,0,2)?>
								</td>
								<td>
									<?php echo mysql_result($resultado,0,3)?>
								</td>
								<td>
									<?php echo mysql_result($resultado,0,4)?>
								</td>
								<td>
									<?php if(mysql_result($resultado,0,5)==1) 
											{echo "Administrador";} 
											else { echo "Cliente";}?>
								</td>
							</tr>
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