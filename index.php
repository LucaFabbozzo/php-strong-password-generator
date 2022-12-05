<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php

var_dump($_GET);


$listChars = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ12345678910!?&%$<>^+-*/()[]{}@#_=';

require_once 'functions.php';


//se invio la lunghezza della password
if (!empty($_GET['lpass'])) {
  //controllo la lunghezza
  if($_GET['lpass'] < 8 || $_GET['lpass'] > 32) {
    $output = "Errore! la lunghezza deve essere compresa fra 8 e 32";
  } else {
    //genero la psw
    echo "OK";
    $output = '... pas generata ...';
  }
} else  {
  // se non invio la lunghezza della psw
  $output = "Generare una password di lughezza compresa fra 8 e 32";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  
  <form method="GET">
    <input type="text" name="lpass">
    <button type="submit">Invia</button>
  </form>

  <div>
    <p><?php echo $output; ?></p>
  </div>

</body>
</html>