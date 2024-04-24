<?php

// Funzione per modificare l'array
function modificaArray($array) {
    $result = []; // Array in cui memorizzeremo i risultati
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            // Numero pari: raddoppia e aggiungi al risultato
            $result[] = $numero * 2;
        } else {
            // Numero dispari: triplica e aggiungi al risultato
            $result[] = $numero * 3;
        }
    }
    return $result; // Restituisci l'array modificato
}

// Array di input
$array = [1, 2, 3, 4, 5];

// Modifica l'array
$arrayModificato = modificaArray($array);

// Stampa l'array risultante
echo "Array di input: [";
foreach ($array as $indice => $valore) {
    echo $valore;
    if ($indice < count($array) - 1) {
        echo ", ";
    }
}
echo "]<br>";

echo "Array risultante: [";
foreach ($arrayModificato as $indice => $valore) {
    echo $valore;
    if ($indice < count($arrayModificato) - 1) {
        echo ", ";
    }
}
echo "]";

?>
