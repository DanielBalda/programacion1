<html>
<head>
    <title>Ejercicio 4</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 4

        <?php
        echo "<br><br>a)<br><br>";
        $string = "1,2,3,4,5";
        echo "$string\n";
        $array = explode(',', $string);
        var_dump($array);

        echo "<br><br>b)<br><br>";
        $array=[1,2,3,4,5];
        foreach ($array as $key => $valor){
            echo " [$key] = $valor ";
        }
        $string = implode(',',$array);
        var_dump($string);
        ?>

        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>