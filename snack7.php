<?php
    $students = [
        [
            'name' => 'Dario',
            'lastname' => 'Di Cuia',
            'vote' => [
                8,
                7,
                9,
                6,
                8
            ]
        ],
        [
            'name' => 'Pinco',
            'lastname' => 'Pallino',
            'vote' => [
                6,
                5,
                9,
                8,
                7
            ]
        ],
        [
            'name' => 'Tony',
            'lastname' => 'Stark',
            'vote' => [
                9,
                10,
                8,
                9,
                7
            ]
        ]
    ];
?>
    <h2>
        <?php
            for($i = 0; $i < count($students); $i++){
                echo $students[$i]['name'].' ';
                echo $students[$i]['lastname'].' ';
                echo array_sum($students[$i]['vote']) / count($students[$i]['vote'])."<br>";
            }
        ?>
    </h2>

