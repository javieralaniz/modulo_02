<?php
// consulta a base de datos //
//correspondencia con usuario y contraseña //
//CONTROLA QUE TODO OK.
// 1. BASE DATOS TABLA USUARIOS
// 5 campos necesarios
// 1 USUARIO
// 2 CONTRASEÑA
// 3 NIVEL
// 4 ACTIVO / INACTIVO
// 5 REPETICIONES
// 1,2,3 INACTIVO
// IP? DATOS FECHA HORA
// ylkajsd.php  crean nombres páginas, 
// si es OK

session_start();
$_SESSION['usuario'] = $_REQUEST['campousuario'];
$_SESSION['clave'] = $_REQUEST['campoclave'];
$_SESSION['nivel']=1;
?>
<html>

<head>
  <title>pagina2.php</title>
</head>

<body>
  Se almacenaron dos variables de sesión.<br><br>
  <a href="pagina3.php">Ir a la tercer página donde se recuperarán
    las variables de sesión</a>
</body>

</html>