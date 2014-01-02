<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-language" content="es" />
	<meta http-equiv="content-type"     content="text/html; charset=utf-8" />
	<meta name="viewport" id="view"     content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="css/style.css">
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script>
function validar_contraseña()
{ 
  var password=document.getElementsByName('password')[0].value;
  var rpassword=document.getElementsByName('rpassword')[0].value;
  if(password==rpassword)
  {
    return true;
  }
  else
  {
    alert("Las contraseñas no coinciden");
    return false;
  } 
}
</script>
</head>
<body>
	<header>
		<h1>Header</h1>
	</header>
	<nav>
		<ul>
			<li><a href="#">Menu1</a></li>
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
	        <fieldset>
		        <legend>
		            <h1>
		                Registro de usuario
		            </h1>
		        </legend>
		        <form action="php/agregar.php" name="cliente" method="POST">
		          <input type="hidden" name="tabla" value="cliente"> 
		          <input type="hidden" name="tipo" value="2">
		            <table>
		                <tr>
		                  <th>
		                    Identificación
		                  </th>
		                  <td>
		                    <input type="text" name="identificacion" required="required" placeholder="Identificación">
		                  </td>
		                </tr>
		                <tr>
		                  <th>
		                    Nombre
		                  </th>
		                  <td>
		                    <input type="text" name="nombre" required="required" placeholder="Nombres">
		                  </td>
		                </tr>
		                <tr>
		                  <th>
		                    Apellidos
		                  </th>
		                  <td>
		                    <input type="text" name="apellidos" required="required" placeholder="Apellidos">
		                  </td>
		                </tr>
		                <tr>
		                  <th>
		                    Usuario
		                  </th>
		                  <td>
		                    <input type="text" name="usuario" required="required" placeholder="Usuario">
		                  </td>
		                </tr>
		                <tr>
		                  <th>
		                    Contraseña
		                  </th>
		                  <td>
		                    <input type="password" name="password" required="required" placeholder="Contraseña">
		                  </td>
		                </tr>
		                <tr>
		                  <th>
		                    Repetir contraseña
		                  </th>
		                  <td>
		                    <input type="password" name="rpassword" required="required" class="input_sesion" placeholder="Repita contraseña">
		                  </td>
		                </tr>
		            </table> 
		          </br>
		          <input type="submit" value="Registrarse" onClick="return validar()">
		          </br> 
		        </form>
	        </fieldset>     
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