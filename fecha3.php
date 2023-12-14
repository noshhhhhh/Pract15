<html>
  <head>
    <title>Problema</title>
    
  </head>
  <body>
    <?php
$dato= date("(L");
if ($dato==1)
  echo "AÑO BISISESTO";
else
  "AÑO NO BISIESTO"
    echo "<br>"
  echo "DIA DE LA SEMANA";
$dato=date("w");
switch ($dato){
  case 0: echo "DOMINGO"; break;
   case 1: echo "LUNES"; break;
   case 2: echo "MARTES"; break;
   case 3: echo "MIERCOLES"; break;
   case 4: echo "JUEVES"; break;
   case 5: echo "VIERNES"; break;
   case 6: echo "SABADO"; break;
}
?<
  
  </body>
</html>
