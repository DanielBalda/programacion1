<?php session_start(); ?>
<!DOCTYPE html>
<head>
</head>
<body>
<?php
if(empty($_SESSION['login'])){
    header('Location: inicio.html');
    exit;
}
echo "Administrador: ".$_SESSION['user'];
?>
</body>
</html>