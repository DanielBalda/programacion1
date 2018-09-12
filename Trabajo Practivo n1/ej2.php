<html>
<head>
    <title>Ejercicio 2</title>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>
<body>
        <h1>Ejercicio 2

        <?php
        echo "<br><br>a)<br>";
        $array = [1, 2, 3, 4, 5];
        echo "<pre>";
        echo "Arreglo 1\n";
            print_r($array);

        echo "<br><br>b)";
        $asociativo['Nombre']="Daniel";
        $asociativo['Apellido']="Balda";
        $asociativo['Carrera']="Ing. Informatica";
        $asociativo['Legajo']="54041";
        echo "Arreglo Asociativo<br>";
            print_r($asociativo);

        echo "<br><br>c)";
        $array3d[0][1][1]="5";
        $array3d[0][1][2]="10";
        $array3d[0][2][3]="2.5";
        $array3d[0][2][4]="99.9";
        $array3d[1][3][1]="-24";
        $array3d[1][3][2]="-5";
        echo "Arreglo Vectorial 3D<br>";
        print_r($array3d);

        echo "<br><br>d)";
        $params2d['usuario']['Nombre']="Daniel";
        $params2d['usuario']['Apellido']="Balda";
        $params2d['universidad']['Carrera']="Ing. Informatica";
        $params2d['universidad']['Legajo']="54041";
        echo "Arreglo Asociativo 2D<br>";
            print_r($params2d);
        echo "</pre>";
        ?>
        </h1>
        <br><br>
        <a  href=index.php >Menu Trabajos Practicos <- </a>
</body>
</html>