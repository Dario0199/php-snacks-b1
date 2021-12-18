<?php
    //Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    $min = 1;
    $max = 100;
    $quantity_number = 15;
    $arr_rand = [];

    for($i = 0; $i < $quantity_number; $i++){
        $rand_numb = rand($min, $max);
        $arr_rand[] = $rand_numb;
    }
    var_dump($arr_rand);
   
?>