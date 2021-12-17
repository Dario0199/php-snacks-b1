<?php
//Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

    $post = [
        '17/12/2021' => [
            [
                'title'=> 'post 1',
                'author'=> 'Dario Di Cuia',
                'text'=> 'testo post 1'
            ],
            [
                'title'=> 'post 2',
                'author'=> 'Dario Di Cuia',
                'text'=> 'testo post 2'
            ]
        ],
        '17/12/2020' => [
            [
                'title'=> 'post 3',
                'author'=> 'Dario Di Cuia',
                'text'=> 'testo post 3'
            ]
        ],
        '17/12/2019' => [
            [
                'title'=> 'post 4',
                'author'=> 'Dario Di Cuia',
                'text'=> 'testo post 4'
            ],
            [
                'title'=> 'post 5',
                'author'=> 'Dario Di Cuia',
                'text'=> 'testo post 5'
            ]
        ],
    ];

   $array = array_keys($post);

    for($i = 0; $i < count($array); $i++){
        echo $array[$i];
        var_dump ($post[$array[$i]]);
    }
?>