<html>
<head>
    <title>Ejercicio 9</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>

        <h1>Ejercicio 9

        <?php
        echo "<br><br>a)<br><br>";
        $letras = 'a';
        $numeros = 1;
        $letras2 = 'a';
        $numeros2 = 0;

        echo "<table>";
        for ($a = 0; $a < 6; $a++) {
            echo "<tr>";
            for ($b = 0; $b < 6; $b++) {
                echo "<td>";
                if($a>0&&$b>0){

                    echo $numeros2.$letras2;
                }
                if($a==0&&$b==0)
                    continue;
                if($a==0 && $b>0) {
                    echo "$letras";
                    $letras++;
                }else
                if($b==0 && $a>0) {
                    echo "$numeros";
                    $numeros++;
                }else
                    $letras2++;
                echo "</td>";
            }
            $numeros2++;
            $letras2='a';
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>