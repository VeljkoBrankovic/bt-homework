<?php

    $h_drveta = 100;
    $h_penjanja = 0;
    $dana = 0;

    echo "za brzinu puza 3 i visinu drveta 100: ";
    echo "<br>";

    while($h_penjanja < $h_drveta) {
        $h_drveta += 1;
        $h_penjanja += 3;
        $dana ++;
        echo "Dan " . $dana . ": Puz je presao " . $h_penjanja . "cm, visina drveta " . $h_drveta . "cm";
        echo "<br>";
    }


?>