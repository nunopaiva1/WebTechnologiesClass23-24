<?php
// inicia controlo por sessões
session_start();
// se sessão ativa -> redireciona para home
if (isset($_SESSION['user'])) {
	header("location: home.php");
	exit();
}
session_write_close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sessões PHP</title>
</head>
<body>
<h1> Aceder como: </h1>
	<p><a href="login.php?user=red">Benfiquista</a></p>
	<p><a href="login.php?user=blue">Portista</a></p>
	<p><a href="login.php?user=green">Sportinguista</a></p>
</body>
</html>
