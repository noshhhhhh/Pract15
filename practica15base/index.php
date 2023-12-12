<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X - Alfredo Rodriguez Garcia</title>
    <!-- ... (rest of the head section remains unchanged) ... -->
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <!-- ... (rest of the header section remains unchanged) ... -->
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Cálcular la densidad de la Tierra</h2>
            <!-- ... (rest of the problem description remains unchanged) ... -->
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            Densidad = Masa/Volumen<br>
            Volumen=(4/3)pi*r*r*r
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            m= 5.97E24 Kg. <br>
            r= 6378 Km.
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <!-- ... (rest of the solution remains unchanged) ... -->
        </section>
        <?php
             function calcula_densidad(){
                $PI=3.141592;
                $masa= 5.97E24;
                $radio= 6378e3;
                $volumen= (4/3)*$PI*$radio*$radio*$radio;
                $densidad= $masa/$volumen;
                return $densidad;
             }
        ?>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
            <?php
             print "<h1> resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
            ?>
        </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023 - Alfredo Rodriguez Garcia
    </footer>
   </section>
</body>
</html>
