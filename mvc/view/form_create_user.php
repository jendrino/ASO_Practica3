<html>
<head>
<title> Crear Usuario </title>
</head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="form_create_user.php" method= "POST">
	<p>Introduce el usuario:</p>
	<p>Nombre: <input type="text" name="user" size="50"></p>
	<p>Grupo: <input type="text" name="group" size="50"></p>
	<p>Folder: <input type="text" name="folder" size="50"></p>
	<p>Contraseña: <input type="text" name="passw" size="50"></p>
	<p>
    <input type="submit" value="Enviar" name='create'>
    <input type="submit" name="principal" value="Volver">
  </p>
</form>
</body>
</html>
