<!DOCTYPE html>
<html>
<head>
<LINK REL=StyleSheet HREF="eswcome.css" TYPE="text/css" MEDIA=screen>
	<meta charset="UTF-8">
	<title>Pagina de bienvenida</title>
</head>

<body>
<?php
$var1="quienes somos?";
echo "<br>$var1";
 ?>
	<h1><center>Aprende a Programar</center></h1>
	<center>

	<input class="quienes" onclick="location='/hola.php'" type="submit" name="boton2" 	value="<?php echo "$var1"; ?>">
	<input type="submit" name="boton2" 	value="">
	<input type="submit" name="boton3" 	value="">
	</center>

	</body>
</html>
