<?php
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$arr = [1,2,3,4,5,6];
$sum = 0;
$counter = 0;

foreach($arr as $num){
    if($num % 2 == 0 ){
        $sum = $sum + $num;
        $counter++;
    }
}
$media = $sum / $counter;
echo $media;

//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere Esempio array = $users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ];

$users = [ ['name' => 'Antonio', 'cognome' => 'Minafra', 'genere' => 'M'],
        ['name' => 'Paolo', 'cognome' => 'Bitta', 'genere' => 'M'],
        ['name' => 'Patrizia', 'cognome' => 'Di imporzano', 'genere' => 'F']
];

foreach($users as $user ){
    if($user['genere'] == 'M'){
        echo "Buongiorno Sig. $user[name] $user[cognome]" . "\n";
    }else{
        echo "Buongiorno Sig.ra  $user[name] $user[cognome]" . "\n";
    }
}



/* Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY". */

for($i = 1; $i<=100; $i++){
    if($i % 3 == 0){
        echo "PHP" . "\n";
    } elseif ($i % 5 == 0){
        echo "JAVASCRIPT" . "\n";
    }elseif($i % 3 == 0 &&  $i % 5 == 0){
        echo "HACKADEMY" . "\n";
    }else {
        echo $i . "\n";
    }
}


?>