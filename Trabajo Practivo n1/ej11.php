<html>
<head>
    <title>Ejercicio 11</title>
    <style type="text/css">
        /* CENTRADO */
        body {
            background-color: #3e94ec;
            max-width: 500px;
            margin: auto;
        }
        /* FIN CENTRADO */
        table, td{
            border: 3px solid #000;
        }
        tr{
            background-color: cornflowerblue;
        }
        tr:nth-child(2n){
            background-color: red;
        }
    </style>
</head>
<body>

        <h1>Ejercicio 11</h1>
        <h3>

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
        </h3>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>