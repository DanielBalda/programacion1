<html>
<head>
    <title>Ejercicio 5</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 5

        <br><br><input type="button" value="Reiniciar" onclick="window.location.reload()">

        <?php
        echo "<br><br>a)<br><br>";
        $x = random_int(5,15);
        do{
            $array[$x]=random_int(1,100);
            $x--;
        } while ($x != 0);
        $x = count($array);
        echo "Elementos [$x]<br>";

        echo "<br><br>b)<br><br>";
        foreach ($array as $key => $value){
            echo "$value \n";
        }
        echo "<br><br>c)<br><br>El Maximo del arreglo es: " . max($array);
        echo "<br>El Minimo del arreglo es: " . min($array);

        echo "<br><br>d)<br><br>Promedio: " . round(((array_sum($array)/$x)) , 2);

        echo "<br><br>e)<br><br>";
        if (array_search(20, $array)){
            echo "el numero 20 se encuentra en el arreglo.";
        } else {
            echo "el numero 20 no existe en el arreglo.";
        }
        ?>

        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>