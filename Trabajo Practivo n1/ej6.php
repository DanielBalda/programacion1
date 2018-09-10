<html>
<head>
    <title>Ejercicio 6</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 6

        <br><br><input type="button" value="Reiniciar" onclick="window.location.reload()"><br>

        <?php
        echo "<br>a)<br><br>";
        $x = 15;
        do {
            $array[$x] = random_int(1, 50);
            $x--;
        } while ($x != 0);
        echo "Arreglo Original:<br>";
        foreach ($array as $value){
            echo "$value\n";
        }
        echo "<br><br>arreglo sin duplicados:<br>";
        $array = array_unique($array);
        foreach ($array as $value){
            echo "$value\n";
        }
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>