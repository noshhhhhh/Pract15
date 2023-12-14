<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
        echo "La fecha de hoy es ";
        
        $meses = array(
            1 => "enero", 
            2 => "febrero", 
            3 => "marzo", 
            4 => "abril", 
            5 => "mayo", 
            6 => "junio", 
            7 => "julio", 
            8 => "agosto", 
            9 => "septiembre", 
            10 => "octubre", 
            11 => "noviembre", 
            12 => "diciembre"
        );

        $fecha = date("d") . " de " . $meses[date("n")] . " de " . date("Y");
        echo $fecha;

        echo " La hora actual es: ";
        $hora = date("H:i:s");
        echo $hora;
        echo "<br>"; 
    ?>
    <a href="fecha2.php">SIGUIENTE PROBLEMA</a>
</body>
</html>
