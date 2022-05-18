<?php

function izracunaj($niz,$op) {
    $rezultat;
    if ($op=='*'){
        $rezultat=array_product($niz);
    } elseif($op=='-'){
        $rezultat=$niz[0];
        for($i=1;$i<count($niz);$i++) {
            $rezultat-=$niz[$i];
        }
        } elseif ($op=='/'){
            $rezultat=$niz[0];
            for($i=1;$i<count($niz);$i++) {
                $rezultat/=$niz[$i];
            }
            } else $rezultat=array_sum($niz);
   
    return $rezultat;
}

$nizA = array(1000, 6, 3, 14, 5, 8);

echo(izracunaj($nizA,'+')); echo "<br>";
echo(izracunaj($nizA,'-')); echo "<br>";
echo(izracunaj($nizA,'*')); echo "<br>";
echo(izracunaj($nizA,'/')); echo "<br>";
echo(izracunaj($nizA,'a')); echo "<br>";







