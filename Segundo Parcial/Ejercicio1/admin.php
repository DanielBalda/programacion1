<?php session_start(); ?>
<!DOCTYPE html>
<head>
</head>
<body>
<?php
if(empty($_SESSION['login']) || $_SESSION['rol'] != "admin"){
    header('Location: inicio.html');
    exit;
}
echo "Administrador: ".$_SESSION['user'];
?>
</body>
</html>