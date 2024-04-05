<?php
/* Ricreare la funzione vista a lezione per sommare un numero variabile di numeri (con lo spread operator) con queste variazioni:

sfruttare il foreach come visto a lezione
sfruttare il ciclo for
provare con la funzione built-in array_reduce

 */

/* function sum_numbers(...$numbers){
    $result = 0;
    foreach($numbers as $number){
        $result += $number;
    }
    return $result;
}
$final_result = sum_numbers(1,2,3,4,5);
echo $final_result; */

//--------------------------------------------------------

function sum_numbers(...$numbers){
    $result = 0;
    for($i = 0, $n = count($numbers); $i < $n; $i++){
        $result += $numbers[$i];
    }
    return $result;
}
$final_result = sum_numbers(1,2,3,4,5);
echo $final_result;

//---------------------------------------------------------

$array = [1,2,3,4,5];

function sum($a , $b){
    return $a + $b;
}

$result = array_reduce($array, "sum");
echo $result;