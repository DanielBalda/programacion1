<html>
<head>
    <title>Ejercicio 9</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>

<br><br><input type="button" value="Reiniciar" onclick="window.location.reload()"><br>
        <h1>Ejercicio 9

        <?php
        echo "<br><br>a)<br><br>";
        $a = 0;
        $b = 0;
        $letras = 'a';
        $numeros = 1;
        echo "<table>";
        for ($a = 0; $a < 6; $a++) {
            echo "<tr>";
            for ($b = 0; $b < 6; $b++) {
                echo "<td>";
                if ($a == 0 && $b > 0){
                    echo "$letras";
                    $letras++;
                }
                if ($a > 0 && $b == 0){
                    echo "$numeros";
                    $numeros++;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>