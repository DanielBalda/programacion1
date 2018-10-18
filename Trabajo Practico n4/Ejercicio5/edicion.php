<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="programacion1";
$conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
$sql="SELECT * FROM persona WHERE id=".$_GET['id'];
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();
$dato= $ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC);
echo "Modifique los datos si es necesario:<br>";
echo "<form method='post' enctype='multipart/form-data'>";
echo "Nombre:<br><input type='text' name='nombre' value='".$dato['nombre']."'>";
echo "<br>Apellido:<br><input type='text' name='apellido' value='".$dato['apellido']."'>";
echo "<br>Documento<br><input type='number' name='documento' value='".$dato['documento']."'>";
echo "<br>Edad<br><input type='number' name='edad' value='".$dato['edad']."'>";
echo "<br><br><input type='submit'  name='envio' value='Modificar'>";
if (empty($_POST['envio'])){
}else {
    $sql = "UPDATE persona SET nombre='" . $_POST['nombre'] . "',apellido='" . $_POST['apellido'] . "',documento='" . $_POST['documento'] . "',edad='" . $_POST['edad'] . "' WHERE id=" . $_GET['id'];
    $ejecucionSQLPDO = $conexion->prepare($sql);
    $ejecucionSQLPDO->execute();
    header('location: ejercicio5.php');
}
die();
?>