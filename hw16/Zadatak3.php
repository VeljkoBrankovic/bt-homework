<?php

function proveri_kljuc($niz,$kljuc) {
    $b = false;
    foreach($niz as $i=> $element) {
        if($i==$kljuc) {
            $b= true;
        }        
    }
    return $b;    
}

$nizA = array(1=>"Pera@aa", 2=> "Milka", 3=> "Sonja", 4=> "Danilo@bb", 5=> "Marica@aa");

if(proveri_kljuc($nizA,2)) echo "postoji";
    else echo "nepostoji";








