<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Bienvenido</title>
</head>
<!--etiqueta link siver para poder utilizar un recurso externo en este caso sera css
-->
<link rel="stylesheet"  href="estilo.css">
<body>

<form action="pagina que valida" method="post" class="formulario">
	<!--ENCABEZADO MAS GRANDE -->
	<h1 class="formulario_titulo">iniciar sesion</h1>


	<input type="text" name="txtUsuario" id="usuario"  class="formulario_input">
	<label for="usuario" class="formulario_label">Usuario</label>

	<input type="password" name="txtPassword" id="password"  class="formulario_input">
	<label for="password" class="formulario_label">Password</label>

	<input type="submit"  value="enviar" name="btn1" class="formulario_submit">

</form>
<script src=formu.js type="text/javascript"></script>

</body>
</html>
