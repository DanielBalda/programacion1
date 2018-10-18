<?php session_start(); ?>
<!DOCTYPE html>
<head>
</head>
<body>
<?php
if(empty($_SESSION['login']) || $_SESSION['rol'] != "user"){
    header('Location: inicio.html');
    exit;
}
echo "Usuario ".$_SESSION['user'];
?>
</body>
</html>