<?php
function ozenjen($gender,$married){
    $ispis;
    if($gender=='male'){
        if($married=='false'){
            $ispis='nije ozenjen.';
        }
        else {
            $ispis='ozenjen je.';
        }
    } else
        if($married=='false'){
             $ispis='nije udata.';
         }
        else {
             $ispis='udata je.';
        }
        return $ispis;
    }

$data=array(
    '0'=>array(
    	'name' => 'Pera',
	    'last_name' => 'Peric',
	    'age' => 28,
	    'gender' => 'male',
	    'avg_rating' => 7.5,
	    'married' => false,
	    'courses' => array('laravel', 'react', 'jQuery')),
    '1'=>array(
        'name' => 'Ana',
	    'last_name' => 'Savic',
	    'age' => 24,
	    'gender' => 'female',
	    'avg_rating' => 7.9,
	    'married' => false,
	    'courses' => array('java script', 'react', 'jQuery')),
    '2'=>array(
    	'name' => 'Ivan',
	    'last_name' => 'Ivanovic',
	    'age' => 34,
	    'gender' => 'male',
	    'avg_rating' => 8.7,
	    'married' => true,
	    'courses' => array('java script', 'PHP')),
    '3'=>array(
    	'name' => 'Jovan',
	    'last_name' => 'Antic',
	    'age' => 22,
	    'gender' => 'male',
	    'avg_rating' => 8.2,
	    'married' => false,
	    'courses' => array('java', 'PHP')),
    '4'=>array(
        'name' => 'Mira',
        'last_name' => 'Ilic',
        'age' => 28,
        'gender' => 'female',
        'avg_rating' => 7.2,
        'married' => true,
        'courses' => array('java script', 'PHP','java')),
    );
    foreach($data as $clan){
        $oz=ozenjen($clan['gender'],$clan['married']);
        echo($clan['name'].' '.$clan['last_name'].' ima '.$clan['age'].' godina i '.$oz. ' Ima prosecnu ocenu '.$clan['avg_rating']);
        echo(', a kursevi koje trenutno slusa su: ');
        $poslednji=count($clan['courses'])-1;        
        foreach($clan['courses'] as $i=> $c){
           if($i!=$poslednji)
            echo($c.', ');
            else echo($c.'.');
        }
        echo"<br>";
    }

    
