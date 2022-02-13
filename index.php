<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Actividad 1.1</h3>
    <?php
        $valor = 5;

        $dolares = 1.14;
        $yenes= 131.92;

        
        define("DOLARES", $dolares * $valor);
        define("YENES", $yenes * $valor);
      
        echo ($valor . " euros equivalen a " .  DOLARES . " dolares y " . YENES . " yenes." )
    ?>
    <br>
    <h3>--- Fin actividad 1.1 ---</h3>

    <h3>Actividad 1.2</h3>
        <?php 
            $segundos = 9800;

            $segundosResiduo= ($segundos %60) %60;//Obtengo el resto de las divisiones sucesivas

            $horas = floor(($segundos/60)/60); //con floor cojo la parte entera de la division                       
           
            $minutos = $segundos /  60;
            $minutosResiduo = $minutos % 60; // Cojo el resto de dividir lo que tengo en $minutos entre 60

            echo($segundos . " segundos equivalen a " . $horas  .  " horas," . $minutosResiduo . " minutos y " . $segundosResiduo . " segundos.")
        ?>
    <br>
    <h3>--- Fin actividad 1.2 ---</h3>

    <h3>Actividad 1.3</h3>
        <?php 
            // -b +- sqrt( b^2 - 4 (a*c))/ 2a
            $a = 1;
            $b = -2;
            $c=1;
            $res = 0;
            $bCuadrado = 0;
            $discriminante =0;
            $raiz;
            $numeradorMas;
            $numeradorMenos;

            // -b +- sqrt( b^2 - 4 (a*c))/ 2a
            if($a == 0){
               exit("El valor del denominador no puede ser " . $a .", esto es una indeterminación");
            }else{//Si a no es 0 continuar con la logica
                //descomponer la ecuacion en partes
                $bCuadrado =  pow($b,2);
                $discriminante = $bCuadrado -4 * $a * $c;
                
                if($discriminante >= 0){//Si lo que hay en el discriminante no es negativo
                    
                    $numeradorMas = (-$b + sqrt($discriminante))/ (2 * $a);
                    $numeradorMenos = (-$b - sqrt($discriminante))/ (2 * $a);

                    if($numeradorMas == $numeradorMenos){//Si los resultados son iguales solo hay una solucion posible
                        echo("Las unica solución es " . $numeradorMas);
                    }else{
                        echo("Las soluciones a la ecuación son " . $numeradorMas . " y " . $numeradorMenos);
                    }
                    
                }else{
                    //echo("El discriminante es negativo, no se puede solucionar ");
                    exit("El discriminante es negativo, no se puede solucionar");
                }
                
           }
           
           
           
        ?>
    <br>
    <h3>--- Fin actividad 1.3 ---</h3>

    <h3>Actividad 1.4</h3>
           <?php 
                //Hayar longitud de la circunferencia
                // L = 2pi * r
                $r= 6;

                $longCircunferencia= 2 * M_PI * $r;

                echo("La longitud de la circunferencia es: " . $longCircunferencia);
                echo("<br>");
                //Hayar el area de la circunferencia
                //A = PI*r^2
                $area = M_PI * pow($r,2);
                echo("El area de la circunferencia es: " . $area);
                echo("<br>");
                //Hayar el volumen de la circunferencia
                //V = 3/4PI * r^3
                $volumen= 4/3 * M_PI * pow($r,3);
                echo("El volumen de la esfera es: " . $volumen);

           ?>
    <br>
    <h3>--- Fin actividad 1.4 ---</h3>

    <h3>Actividad 1.5</h3>
   
           <?php 
               define("FILAS", 20);
               define("COLUMNAS", 20);

               $contador= 1;

               echo("<table style='border: 1px solid black;border-collapse: collapse;'>");
               for ($i=1; $i <= FILAS; $i++) { 
                   
                   echo("<tr style='border: 1px solid black;border-collapse: collapse;'>");
                    for ($j=1; $j <= COLUMNAS; $j++) { 
                        if($contador % 3 == 1)echo("<td style='background-color:red; border: 1px solid black;border-collapse: collapse;'>" .  $contador  . "</td>");
                        if($contador % 3 == 2)echo("<td style='background-color:blue;color:white;border: 1px solid black;border-collapse: collapse;'>" .  $contador  . "</td>");
                        if($contador % 3 == 0)echo("<td style='background-color:gray;border: 1px solid black;border-collapse: collapse;'>" .  $contador  . "</td>");
                        $contador ++;
                    }
                   
                    echo("</tr>");
               }
              
               echo("<table>");
           ?>
    <br>
    <h3>--- Fin actividad 1.5 ---</h3>

</body>
</html>
