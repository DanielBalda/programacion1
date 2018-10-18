<?php session_start(); ?>
<!DOCTYPE html>
<head>
</head>
<body>
<?php
if(empty($_SESSION['login'])){
    header('Location: inicio.html');
    exit;
}else{
    if($_SESSION['rol'] == 'admin'){
        echo "Administrador: ".$_SESSION['user'];
    }else{
        header('location: inicio.html');
    }
}
?>
</body>
</html>