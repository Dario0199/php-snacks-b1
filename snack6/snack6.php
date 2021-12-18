<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<div class="grey-box">
    <?php
        for($i = 0; $i < count($db['teachers']); $i++){
            echo $db['teachers'][$i]['name'].' '.$db['teachers'][$i]['lastname']."<br>";
        }
    ?>
</div>
<div class="green-box">
    <?php
        for($i = 0; $i < count($db['pm']); $i++){
            echo $db['pm'][$i]['name'].' '.$db['pm'][$i]['lastname']."<br>";
        }
    ?>
</div>


</body>
</html>