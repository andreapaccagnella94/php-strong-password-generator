<?php

// qua metto la mia funzione che mi crea una password casuale in cui come parametro di ingresso ho il dato che mi recupero dal form nella pagina principale

function generaPassword($lunghezza = 16)
{
    // Definisci i caratteri: lettere, numeri e simboli
    // divido nei vari gruppi
    $numbers = "0123456789";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $symbols = "!@#$%^&*()-_=+[]{}";
    $caratteri = $numbers . $lowercase . $uppercase . $symbols;
    $caratteriLunghezza = strlen($caratteri);
    $stringaCasuale = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        // Estrae un carattere casuale dalla stringa definita
        $stringaCasuale .= $caratteri[rand(0, $caratteriLunghezza - 1)];
    }

    return $stringaCasuale;
}

// Esempio di utilizzo: genera una stringa di 20 caratteri
// echo generaPassword(20);

// mi creo una variabile di appoggio per il numero di caratteri e per la password
$legnt_of_password = 0;
$password = "";
// recupero il parametro get dal form
if (isset($_GET["password-lenght"])) {
    // echo $_GET["password-lenght"]; // recuperato il dato dal form
    $legnt_of_password = $_GET["password-lenght"];
    $password = generaPassword($legnt_of_password);
};
