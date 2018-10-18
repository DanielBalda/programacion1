<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$sql = "SELECT * FROM usuario WHERE rol = :rol";
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO ->execute();

echo $sql;
if(empty($_SESSION['login'])){
    header('Location: inicio.html');
    exit;
}else{

}
echo "El Usuario es: ".$_SESSION['user'];
?>
</body>
</html>