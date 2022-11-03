
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
        
        //BUCLE EJERCICIO 1
        for ($i = 0; $i < 10; $i++) {
            $mesa=[];
            $mesa[$i] = $i;
            $numComensal=rand(0,5); // VARIABLE RANDOM PARA NUMERO DE COMENSALES
            echo "<p> En la mesa ". $mesa[$i]." ";
            if($numComensal==5) // SI LA MESA ESTA LLENA
                {echo " esta llena </p>";}
            elseif($numComensal ==0) // SI LA MESA ESTA VACIA 
                {echo " esta vacia </p>";}
            else // SI NO ESTA LLENA NI VACIA
                {echo " hay ".$numComensal." comensales </p>";};
        }  

        echo "<br>";

        //BUCLE EJERCICIO 2
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $hab=[];
                $hab[$j] = $j;
                $planta=[];
                $planta[$i] = $i;
                $numComensal=rand(0,4); // VARIABLE RANDOM PARA NUMERO DE PERSONAS
                echo "<p> En la habitación ". $hab[$j]." de la planta ".$planta[$i];
                if($numComensal==4) // SI LA HABITACION ESTA LLENA
                    {echo " esta llena </p>";}
                elseif($numComensal ==0) // SI LA HABITACION ESTA VACIA
                    {echo " esta vacia </p>";}
                else // SI NO ESTA LLENA NI VACIA
                    {echo " hay ".$numComensal." personas </p>";};
            }
        }
        ?>


        
    </body>
</html>