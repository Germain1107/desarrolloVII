<?php
error_reporting(0);
$tamaño_matriz = $_POST['tamano'];
$sumaprimerafila = 0;
$sumaultimafila = 0;
echo "El tamaño enviado fue: " .$tamaño_matriz;
$matriz = [$tamaño_matriz][$tamaño_matriz];

echo "<table border=1 style=\"margin: 20px;\"";
for ($i = 0; $i < $tamaño_matriz; $i++) {
    echo "<tr>";
    for ($x = 0; $x < $tamaño_matriz; $x++) {
        if($x == 0 || $x == 1 || $x == $tamaño_matriz-2 || $x == $tamaño_matriz-1){
            if($i == 2 || $i >=3 && $i <=$tamaño_matriz-3){
                for($x = 0; $x < $tamaño_matriz; $x++){
                    echo "<td style=\"padding: 20px;\">";
                    echo $matriz[$i][$x] = 0;
                    echo "</td>";
                }
            }else{
                echo "<td style=\"padding: 20px;\">";
                echo $matriz[$i][$x] = rand(1, 100);
                echo "</td>";

                if($i <= 1){
                    $sumaprimerafila+=$matriz[$i][$x];
                }

                if($i >= $tamaño_matriz-3){
                    $sumaultimafila+=$matriz[$i][$x];
                }
            }
            
        }else{
            echo "<td style=\"padding: 20px;\">";
            echo $matriz[$i][$x] = 0;
            echo "</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";

echo "La suma de las 2 primeras filas es de: " .$sumaprimerafila;
echo "<br>";
echo "La suma de las 2 ultimas filas es de: " .$sumaultimafila;
?>