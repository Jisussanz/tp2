<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP2</title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO N°2</h1>
      <h2>ESTRUCTURAS DE CONTROL PARTE 1</h2>
        <h3>EJERCICIOS</h3>
          <h4>1. Crear una variable (n) y validar que sea un numero positivo</h4>
            <?php
              $N = 7;
              if ($N >= (0)) {
                echo "VARIABLE n = $N ==> " . " $N > (0) ==> " . " $N es un numero positivo";
              }
            ?>
          <h4>2. Crear una variable (n)  y validar que sea un numero mayor a 1 y menor a 10</h4>
            <?php
              if ($N >= (1) && $N <= (10)) {
                echo "VARIABLE n = 7 ==> " . " $N es un numero mayor a 1 ==> " . " $N es un numero menor a 10";
              }
            ?>
          <h4>3. Crear una variable (n) y validar que sea un numero mayor a 10 o menor a 2</h4>
            <?php
              if ($N >= (10)) {
                echo "variable = $N ==> " . "$N es mayor a 10 " ;
              }elseif ($N <= (2)) {
                echo "variable = $N ==> " . "$N es menor a 2 " ;
              }
            ?>
          <h4>4. Crear 2 variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicacion,la division entera y el resto de la division. Si numero1 y numero2 son iguales, mostrar el siguiente mensaje "Los numeros ingresados son iguales".</h4>
            <?php
              $numero1=9;
              $numero2=9;
              if ($numero1 > $numero2) {
                echo "$numero1 + $numero2 = " . "<br>";
                echo $numero1 + $numero2 ;
                echo " $numero1 - $numero2 = " ;
                echo $numero1 - $numero2 ;
              } elseif ($numero1 < $numero2) {
                echo "$numero1 x $numero2 = " ;
                echo $numero1 * $numero2 . "<br>" ;
                echo " $numero1 / $numero2 = " ;
                echo $numero1 / $numero2 ;
              } else {
                echo "Los numeros ingresados son iguales";
              }

            ?>
  </body>
</html>
