<?php

function proveri_email($email) {
    $new_email = array();
    foreach($email as $element) {
        if(strpos($element,'@')) {
            array_push($new_email,$element);
        }
    }
    return $new_email;
}

$email = array("Pera@aa", "Milka", "Sonja", "Danilo@bb", "Marica@aa", "Ivica", "Vanja", "Mira@aa");

print_r(proveri_email($email)); echo "<br>";








