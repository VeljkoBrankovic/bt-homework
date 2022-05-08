<?php

if(isset($_GET['Posalji'])) {

    $zanimanje = $_GET['zanimanje'];
    $godine = $_GET['godine'];
    $tezina = $_GET['tezina'];

    if($zanimanje == "programer" || $zanimanje == "administrativni radnik" || $zanimanje == "menadzer") {
        $faktorAktivnosti = 100;
    }

    else if($zanimanje == "policajac" || $zanimanje == "vojnik") {
        $faktorAktivnosti = 200;
    }

    else if($zanimanje == "sportista") {
        $faktorAktivnosti = 300;
    }

    else $faktorAktivnosti = 150;

    if($godine >= 0 && $godine < 4) {
        $faktorStarosti = 1.9;
    }

    else if($godine >= 4 && $godine < 11) {
        $faktorStarosti = 1.5;
    }

    else if($godine >= 11 && $godine < 19) {
        $faktorStarosti = 1.2;
    }

    else if($godine >= 19 && $godine < 27) {
        $faktorStarosti = 1;
    }

    else if(($godine >= 27 && $godine <31) || ($godine >= 50 && $godine <61)) {
        $faktorStarosti = 0.8;
    }

    else if(($godine >= 31 && $godine <36) || ($godine >= 45 && $godine <50)) {
        $faktorStarosti = 0.7;
    }

    else {
        $faktorStarosti = 0.6;
    }

    $maxKalorija = $tezina * $faktorAktivnosti * $faktorStarosti;
    echo "Maksimalan broj kalorija koju smete da unesete jeste " . $maxKalorija . " kalorija dnevno.";

}

?>