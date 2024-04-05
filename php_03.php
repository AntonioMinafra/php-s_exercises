

<?php
/* Replicare il codice visto a lezione

extra 1 - permettere all'utente di inserire la password più volte se la stringa non è accettata (TIP: usare il do while)
extra 1.b - permettere per un massimo di 5 volte di reinserire la password in caso di errore
extra 2 - stampare quale regola l'utente non sta rispettando */



//! deve avere almeno 8 caratteri




function lunghezza($stringa){
    if(strlen($stringa) >= 8){
        return true;
    }
    echo "La password deve contenere almeno 8 caratteri" . "\n";
    return false;
}

// almeno una maiuscola
 function maiusolo($stringa){
    for($i = 0; $i < strlen($stringa); $i++){
        if(ctype_upper($stringa[$i]) == true){
            return true;
        }
    }
    echo "La password deve contenere almeno una lettere maiuscola" . "\n";
    return false;
}

//almeno un numero

function numero($stringa){
    for($i = 0; $i <strlen($stringa); $i++){
        if(is_numeric($stringa[$i]) == true){
            return true;
        }
    }
    echo "La password deve contenere almeno un numero" . "\n";
    return false;
}

//almeno un carattere speciale

function carattere($stringa){
    $caratteri = ['!','&','£','?','à','é','/'];
    for($i = 0; $i < strlen($stringa); $i++){
        if(in_array($stringa[$i], $caratteri)){
            return true;
        }
    }
    echo "La password deve contenere almeno un carattere speciale" . "\n";
    return false;
}

function risultato($stringa){
    $regola1 = lunghezza($stringa);
    $regola2 = maiusolo($stringa);
    $regola3 = numero($stringa);
    $regola4 = carattere($stringa);

    if($regola1 && $regola2 && $regola3 && $regola4){
        echo "password valida" . "\n";
        return true;
    }else{
        echo "La password non è valida!" . "\n";
    }
    return false;
}
$i = 0;

do {
    if($i > 0){
        echo "Ti rimangono " . 5-$i . " tentativi\n";
    }
    $password = readline('Inserisci la password: ');
    $risultatoFinale = risultato($password);
    $i++;
} while ( $risultatoFinale == false && $i < 5);