<html>
<head>
    <title>Ejercicio 8</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 8

        <?php
            echo "<br><br>a)<br><br>";
            $a = 0;
            $b = 0;
            $cont = 0;
            echo "<table>";
            for ($a = 0; $a < 5; $a++) {
                echo "<tr>";
                for ($b = 0; $b < 5; $b++) {
                    echo "<td> $cont";
                    $cont++;
                }
            }
            echo "</table>";
            ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>