<?php 

    $a = 200;
    $b = 80;

    echo $a + $b ."<br>";
    echo $a - $b ."<br>";
    echo $a * $b ."<br>";
    echo $a / $b ."<br>";

    $random = mt_rand (0,6);
    
    if ($random == 0) echo "Danas je ponedeljak";
    else if ($random == 1) echo "Danas je utorak";
    else if ($random == 2) echo "Danas je sreda";
    else if ($random == 3) echo "Danas je cetvrtak";
    else if ($random == 4) echo "Danas je petak";
    else if ($random == 5) echo "Danas je subota";
    else if ($random == 6) echo "Danas je nedelja";

    echo "<br>";
    
    $A = mt_rand (1,10);
    $B = mt_rand (1,10);
    $C = mt_rand (1,10);
    $D = $A + $B + $C;

    echo "Zbir brojeva " . $A . ", " . $B . " i " . $C . " je " . $D;

?>