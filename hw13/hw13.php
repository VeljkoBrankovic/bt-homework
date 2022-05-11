<?php

$r = 10;
$a = 10;    
$b = 20;
$a1 = 10;
$b1 = 20;

define("PI", 3.14);

function p_kruga ($r) {
    return $r ** 2 * PI;
}

function p_pravougaonika($a1, $b1) {
    return $a1 * $b1;
}

function p_treceg($a, $b) {
    return p_pravougaonika($a, $b) + p_kruga($b) / 2;
}

function u_povrsina($r, $a, $b, $a1, $b1) {
    return p_kruga($r) + p_pravougaonika($a1, $b1) + p_treceg($a, $b);
}

echo "Povrsina datih bazena je: " . u_povrsina($r, $a, $b, $a1, $b1);




