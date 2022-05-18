<?php

function proveri($a, $niz) {
    $b = true;
    foreach($niz as $element) {
        if($element == $a) {
            $b = false;
        }
    }
    return $b;
}

$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];

print_r($hwArray); echo "<br>";

if(proveri("Veljko", $hwArray) == true) {
    array_push($hwArray, "Veljko");
}

print_r($hwArray); echo "<br>";

if(proveri("Milos", $hwArray) == true) {
    array_splice($hwArray, 2, 0, "Milos");
}

print_r($hwArray); echo "<br>";

echo(count($hwArray)); echo "<br>";

if(proveri("Lazar", $hwArray) == true) {
    array_unshift($hwArray, "Lazar");
}

print_r($hwArray); echo "<br>";

$ind = array_search("Danilo", $hwArray);
array_splice($hwArray, $ind, 1);

print_r($hwArray); echo "<br>";

$newArray = array_unique($hwArray);
print_r($newArray); echo "<br>";







