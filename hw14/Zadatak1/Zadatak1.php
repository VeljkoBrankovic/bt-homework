<?php
if(empty($_GET)) {
    die("ERROR");
}
if(empty($_GET['dan'])) {
    die("Morate uneti dan!");
}
if(empty($_GET['mesec'])) {
    die("Morate uneti mesec!");
}
if(empty($_GET['godina'])) {
    die("Morate uneti godinu!");
}

if(!is_numeric($_GET['dan']) || !is_numeric($_GET['mesec']) || !is_numeric($_GET['godina'])) {
    die("Sve vrednosti moraju biti broj!");
}
if($_GET['dan'] <= 0 || $_GET['mesec'] <= 0 || $_GET['godina'] <= 0) {
    die("Sve vrednosti moraju biti pozitivan broj!");
}
if($_GET['mesec'] > 12) {
    die("Vrednost za mesec ne sme da bude vise od 12!");
}
if($_GET['mesec'] == 1 || $_GET['mesec'] == 3 || $_GET['mesec'] == 5 || $_GET['mesec'] == 7 || $_GET['mesec'] == 8 || $_GET['mesec'] == 10 || $_GET['mesec'] == 12) {
    if($_GET['dan'] > 31) {
        die("Vrednost za dan u ovom mesecu ne sme biti veca od 31!");
    }
}
if($_GET['mesec'] == 4 || $_GET['mesec'] == 6 || $_GET['mesec'] == 9 || $_GET['mesec'] == 11) {
    if($_GET['dan'] > 30) {
        die("Vrednost za dan u ovom mesecu ne sme biti veca od 30!");
    }
}
if($_GET['mesec'] == 2) {
    if(($_GET['godina'] % 4 == 0 && $_GET['godina'] % 100 != 0) || $_GET['godina'] % 400 == 0) {
        if($_GET['dan'] > 29) {
            die("Vrednost za dan u ovom mesecu ne sme biti veca od 29!");
        }
    }
    if($_GET['dan'] > 28) {
        die("Vrednost za dan u ovom mesecu ne sme biti veca od 28!");
    }
}

echo "Uspesno ste uneli DATUM";



