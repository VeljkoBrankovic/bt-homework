<?php

   if(isset($_GET['Sacuvaj'])){
        $pol = $_GET['pol'];
        $ime = $_GET['ime'];
        $prezime = $_GET['prezime'];
        $lozinka = $_GET['password'];
        $email = $_GET['email'];
        if(isset($_GET['kurs']))
            $lista_kurseva = $_GET['kurs'];
        if($pol == "m")
            echo "Postovani " . $ime . " " . $prezime; 
        else 
            echo "Postovana " . $ime . " " . $prezime; 
        echo "<br>";
        echo "Uspesno ste se registrovali na nasem sajtu.";
        echo "<br>";
        echo "Vasa lozinka je: " . $lozinka;
        echo "<br>";
        echo "Vasa username je: " . $email;
        echo "<br>";
        if(!empty($lista_kurseva)){
            echo "Vasi odabrani kursevi su:<br>";
            for ($i=0; $i < count($lista_kurseva); $i++) { 
                echo $lista_kurseva[$i]."<br>";
            }
        }
        else
            echo "Niste odabrali nijedan kurs.";    
      
    }
 

?>