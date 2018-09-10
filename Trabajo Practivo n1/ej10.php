<html>
<head>
    <title>Ejercicio 10</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>

        <h1>Ejercicio 10

        <?php
        echo "<br><br>a)<br><br>";
        $string = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28";
        $array = explode(',', $string);

        foreach ($array as $value){
            echo "\n$value";
        }
        echo "<pre>";
        print_r($array = array_chunk($array,14));
        echo "</pre>";

        echo "<table>";

            echo "<tr>";
                foreach ($array[0] as $value){
                    echo "<td>";
                    echo "$value";
                    echo "</td>";
                }
        echo "</tr>";
        echo "<tr>";
        foreach ($array[1] as $value){
            echo "<td>";
            echo "$value";
            echo "</td>";
        }
            echo "</tr>";
        echo "</table>";
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>