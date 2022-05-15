<?php
if(empty($_GET)) {
    die("ERROR");
}
if(empty($_GET['gorivo'])) {
    die("Morate uneti ukupnu kolicinu goriva!");
}
if(empty($_GET['potrosnja'])) {
    die("Morate uneti potrosnju goriva po kamionu!");
}
if($_GET['flag'] != "true" && $_GET['flag'] != "false" && $_GET['flag'] != "") {
    die("Morate uneti true ili false!");
}
if($_GET['gorivo'] <= 0 || $_GET['potrosnja'] <= 0) {
    die("Gorivo i potrosnja moraju biti pozitivan broj!");
}

if(isset($_GET['Posalji'])) {

    $ukupnoGorivo = $_GET['gorivo'];
    $potrposnjaPoKamionu = $_GET['potrosnja'];
    $ostatakGorivaFlag = $_GET['flag'];

    function izracunaj($g, $p, $f) {
        if($f == "false" || $f == "") {
            $brojKamionaKojiMoguDaPredjuRutu = floor($g / $p);
            return $brojKamionaKojiMoguDaPredjuRutu;
        }
        else {
            $ostatakGoriva = $g % $p;
            return $ostatakGoriva;
        }
    }

    echo izracunaj($ukupnoGorivo, $potrposnjaPoKamionu, $ostatakGorivaFlag);
    
}
