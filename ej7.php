<html>
<head>
    <title>Ejercicio 7</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 7

        <br><br><input type="button" value="Reiniciar" onclick="window.location.reload()"><br>

        <?php
        $x = 0;
        do {
            $array[$x] = random_int(1, 30);
            $x++;
        } while ($x < 10 || $array[($x-1)] != 30);
        echo "<br>arreglo original:<br><br>";
        foreach ($array as $value){
            echo "$value\n";
        }
        echo "<br><br>a)";
        echo "<br><br>arreglo ordenado:<br><br>";
        asort($array);
        foreach ($array as $value){
            echo "$value\n";
        }
        echo "<br><br>b)";
        echo "<br><br>arreglo dividido:<br><br>";
        echo "<pre>";
        print_r($array = array_chunk($array,ceil($x/2)));
        echo "</pre>";
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>