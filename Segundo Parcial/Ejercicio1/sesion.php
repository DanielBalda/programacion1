<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$params= array('usuario'=>$user,'clave' => $pass,'habilitado' => 1);
$sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave AND habilitado = :habilitado";
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO ->execute($params);
$count = $ejecucionSQLPDO->rowCount();
if($count > 0){
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["login"] = 1;
    header('Location: home.php');
    exit;
}
else{
    header('Location: inicio.html');
    exit;
}
?>
</body>
</html>