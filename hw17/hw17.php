<?php

function search_users($users, $searchContent = "") {
    $niz=array();
    foreach($users as $clan){
        if(str_contains($clan ['name'], $searchContent)) {
            array_push($niz,$clan);
        }
        else if(str_contains($clan['last_name'], $searchContent)) {
            array_push($niz,$clan);
        }
    }

    return $niz;
}


$users = [
        [
            'name' => "Pera",
            'last_name' => "Miric",
            'img' => "..."
        ],
        [
            'name' => "Mitar",
            'last_name' => "Miric",
            'img' => "..."
        ]
    ];

    print_r(search_users($users, ""));
    