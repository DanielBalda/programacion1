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
$sql = "SELECT rol FROM usuario WHERE usuario='".$_SESSION['user']."'";
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO ->execute();
$dato= $ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC);

if(empty($_SESSION['login'])){
    header('Location: inicio.html');
    exit;
}else{
    if ($dato['rol'] == 'usuario'){
        $_SESSION['rol']=$dato['rol'];
        header('location: usuario.php');
    }else{
        $_SESSION['rol']=$dato['rol'];
        header('location: admin.php');

    }
}
?>
</body>
</html>