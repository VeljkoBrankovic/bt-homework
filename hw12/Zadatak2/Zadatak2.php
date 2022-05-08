<?php

    if(isset($_GET['Posalji'])) {

        $s_zida = $_GET['s_zida'];
        $v_zida = $_GET['v_zida'];
        $s_plocica = $_GET['s_plocica'];
        $d_plocica = $_GET['d_plocica'];

        if(empty($s_zida) || empty($v_zida) || empty($s_plocica) || empty($d_plocica)) echo "Unesite sve podatke";

        else {

        $br_plocica = ceil($s_zida / $s_plocica) * ceil($v_zida / $d_plocica);

        echo "Potrebne su Vam " . $br_plocica . " plocice.";
        }

    }

?>