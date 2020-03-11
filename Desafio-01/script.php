<?php
    $valor = $_POST["num"];


    function calculaSoma($valor)
    {
        $s1 = 0;
        $s2 = 0;
        for ($i = 0; $i <= $valor; $i++) {
            if ($i % 3 == 0) {
                $s1 = $s1 + $i;
            }
        }
        for ($j = 0; $j <= $valor; $j++) {
            if ($j % 5 == 0) {
                $s2 = $s2 + $j;
            }
        }

        return $s1 + $s2;
    }
    
    echo calculaSoma($valor); 

    ?>